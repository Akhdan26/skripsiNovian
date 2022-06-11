<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Applicant_List extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_Company','Company');
        $this->load->model('M_Student','Student');
    }

    public function index()
    {           
        $data['applicant'] = $this->Company->joinApplicant(['perusahaan.id' => $this->session->userdata('id_perusahaan')])->result();
        // $data['applicant'] = $this->Student->getSertif($this->session->userdata('id'))->result();
        $this->load->view('company/layout/header');
        $this->load->view('company/applicantlist/index', $data);
        $this->load->view('company/layout/footer');
    }

    public function detail($id_mahasiswa)
    {
        $mahasiswa = $this->Student->get($id_mahasiswa)->row();
        $sertif = $this->Student->getSertif($id_mahasiswa)->result();
        // $skill = $this->Student->skill($id_mahasiswa)->result();
        $data = array(
            'mahasiswa' => $mahasiswa,
            'sertif' => $sertif,
        );
        $this->load->view('company/layout/header');
        $this->load->view('company/detail/detail', $data);
        $this->load->view('company/layout/footer');
    }

    public function apply($idLowongan, $idMember)
	{
		$data['userMasuk'] = $this->data;
		if ($data['userMasuk'][0]->level != 2) {
			$this->session->set_flashdata('acl', 'Silahkan Login Dahulu!!!!!');
			redirect('login');
		}
		$upload = $this->lowongan->uploadCV();
		if ($upload['result']=='success') {
			$this->lowongan->apply($idLowongan, $idMember, $upload);
			$this->session->set_flashdata('applied', 'Anda Telah Berhasil Apply Pekerjaan '.$lowongan[0]->lowongan);
			redirect('home');
		} else {
			$data['lowongan'] = $this->lowongan->getLowongan($idLowongan);
			$data['lowonganTerkait'] = $this->lowongan->getLowongan('', $idLowongan, $data['lowongan'][0]->fkKategori);
			$data['pendaftar'] = $this->lowongan->getPendaftar();
			$data['error'] = $upload['error'];
			$this->load->view('home/single', $data);
		}
	}

	public function toggle($id)
    {
        $status = $this->Base->getStudent('mahasiswa', ['id' => $id])['is_active'];
        $toggle = $status ? 0 : 1; //Jika user aktif maka nonaktifkan, begitu pula sebaliknya
        $pesan = $toggle ? 'user activated.' : 'user disabled.';

        if ($this->Base->edit('mahasiswa', ['is_active' => $toggle], ['id' => $id])) {
            set_pesan($pesan);
        }
        redirect('admin/student');
    }

    public function applicant_lolos($id)
    {
        $status = $this->Company->getStudent('pelamar', ['id_mahasiswa' => $id])['status_daftar'];
        $toggle = ($status == '') ? 'lolos' : ''; //Jika user aktif maka nonaktifkan, begitu pula sebaliknya
        $pesan = ($toggle == '') ? 'Pelamar Lolos.' : '';

        if ($this->Company->edit('pelamar', ['status_daftar' => $toggle], ['id' => $id])) {
            set_pesan($pesan);
        }
        redirect('company/applicant_list/');
        //echo $status, $toggle, $pesan;
    }

    public function applicant_seleksi($id)
    {
        $status = $this->Company->getStudent('pelamar', ['id_mahasiswa' => $id])['status_daftar'];
        $toggle = ($status == '') ? '1' : ''; //Jika user aktif maka nonaktifkan, begitu pula sebaliknya
        $pesan = ($toggle == '') ? 'Pelamar Masuk Seleksi.' : '';

        if ($this->Company->edit('pelamar', ['status_daftar' => $toggle], ['id' => $id])) {
            set_pesan($pesan);
        }
        redirect('company/applicant_list/');
        //echo $status, $toggle, $pesan;
    }

    public function applicant_tes($id)
    {
        $status = $this->Company->getStudent('pelamar', ['id_mahasiswa' => $id])['status_daftar'];
        $toggle = ($status == '') ? '2' : ''; //Jika user aktif maka nonaktifkan, begitu pula sebaliknya
        $pesan = ($toggle == '') ? 'Pelamar Lolos Seleksi.' : '';

        if ($this->Company->edit('pelamar', ['status_daftar' => $toggle], ['id' => $id])) {
            set_pesan($pesan);
        }
        redirect('company/applicant_list/');
        //echo $status, $toggle, $pesan;
    }

    public function applicant_interview($id)
    {
        $status = $this->Company->getStudent('pelamar', ['id_mahasiswa' => $id])['status_daftar'];
        $toggle = ($status == '') ? '3' : ''; //Jika user aktif maka nonaktifkan, begitu pula sebaliknya
        $pesan = ($toggle == '') ? 'Pelamar Lolos Tes.' : '';

        if ($this->Company->edit('pelamar', ['status_daftar' => $toggle], ['id' => $id])) {
            set_pesan($pesan);
        }
        redirect('company/applicant_list/');
        //echo $status, $toggle, $pesan;
    }

    public function applicant_tidak_lolos($id)
    {
        $status = $this->Company->getStudent('pelamar', ['id_mahasiswa' => $id])['status_daftar'];
        $toggle = ($status == '') ? '4' : ''; //Jika user aktif maka nonaktifkan, begitu pula sebaliknya
        $pesan = ($status == '') ? 'Pelamar Tidak Lolos.' : '';

        if ($this->Company->edit('pelamar', ['status_daftar' => $toggle], ['id' => $id])) {
            set_pesan($pesan);
        }
        redirect('company/applicant_list/');
    }
    
}