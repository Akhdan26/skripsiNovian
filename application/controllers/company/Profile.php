<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    protected $user;

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_Company', 'Company');

        $username = $this->session->userdata('username');
        $this->user = $this->Company->getCompany('perusahaan', ['username' => $username]);
    }

    public function index()
    {
        $data['title'] = "Profile";
        $data['perusahaan'] = $this->user;
        $this->load->view('company/layout/header');
        $this->load->view('company/profile/index', $data);
        $this->load->view('company/layout/footer');
    }

    public function setting()
    {
        $data['title'] = "Profile";
        $data['perusahaan'] = $this->user;
        $this->load->view('company/layout/header');
        $this->load->view('company/profile/setting', $data);
        $this->load->view('company/layout/footer');
    }

    public function _config()
    {
        $config['upload_path']      = FCPATH.".\assets\upload";
        $config['allowed_types']    = 'jpg|jpeg|png';
        $config['encrypt_name']     = TRUE;
        $config['max_size']         = '2048';

        $this->load->library('upload', $config);
    }

    public function edit_company()
    {
        // $this->_validasi();
        $username = $this->input->post('username', true);
        $email = $this->input->post('email', true);

        $db = $this->Company->getCompany('perusahaan', ['id' => $this->input->post('id', true)]);
        // $uniq_username = $db['username'] == $username ? '' : '|is_unique[user.username]';
        // $uniq_email = $db['email'] == $email ?  : '|is_unique[user.email]';

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('nama_instansi', 'Nama Instansi', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required|trim|numeric');
        $this->form_validation->set_rules('fax', 'Fax', 'required|trim');
        $this->form_validation->set_rules('website', 'Website', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        $this->_config();

        $userId = $this->session->userdata('login')['perusahaan'];

        $id = $this->input->post('id');
        if ($this->form_validation->run() == false) {
            $data['title'] = "Profile";
            $data['perusahaan'] = $this->user;
            $this->load->view('company/layout/header');
            $this->load->view('company/profile/setting', $data);
            $this->load->view('company/layout/footer');
        } else {
            $input = $this->input->post(null, true);
            if (empty($_FILES['foto']['name'])) {
                $insert = $this->Company->update('perusahaan', 'id', $input['id'], $input);
                if ($insert) {
                    set_pesan('perubahan berhasil disimpan.', 'company/profile/');
                } else {
                    set_pesan('perubahan tidak disimpan.', 'company/profile/setting'.$userId);
                }
                set_pesan('Insert The Photo.', 'company/profile/setting'.$userId);
            } else {
                if ($this->upload->do_upload('foto') == false) {
                    echo $this->upload->display_errors();
                    die;
                } else {
                    $this->session->unset_userdata('foto_admin');
                    $datafoto = $this->Company->getCompany('perusahaan', ['id' => $id]);
                    if ($datafoto['foto'] != 'default.png') {
                        $old_image = FCPATH . 'assets/upload/' . $datafoto['foto'];
                        if (!unlink($old_image)) {
                            set_pesan('gagal hapus foto lama.', 'company/profile/'.$userId); 
                            $this->session->set_userdata('foto_admin', $datafoto['foto']);
                        }
                    }

                    $input['foto'] = $this->upload->data('file_name');
                    $update = $this->Company->update('perusahaan', 'id', $input['id'], $input);
                    if ($update) {
                        set_pesan('perubahan berhasil disimpan .', 'company/profile/'); 
                        $this->session->set_userdata('foto_admin', $datafoto['foto']);
                    } else {
                        set_pesan('gagal menyimpan perubahan.', 'company/profile/setting'.$userId); 
                    }
                    set_pesan('Ada Kesalahan', 'company/profile/setting'.$userId); 
                }
            }
        }
    }
}