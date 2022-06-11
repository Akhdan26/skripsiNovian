<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_Company','Company');
    }

    public function index()
    {           
        if($this->session->userdata('userLogCp') == "company"){
			redirect("company/dashboard");
		}
        $data['title'] = 'Login Perusahaan';
        $data['image'] = 'http://localhost/lowker/assets/form.png';
        $this->load->view('templates/auth_header',$data);
        $this->load->view('company/login');
        $this->load->view('templates/auth_footer');
    }

    function aksi_login(){
        $username = $this->input->post('username');
        $password_get = $this->input->post('password');
        $where = array(
            'username' => $username
            );
        $cek = $this->Company->cek_login_company("perusahaan",$where)->num_rows();
        if($cek > 0){
            $password = $this->Company->get_password($username);
            $this->session->set_userdata('userLog', 'login');
            if (md5($password_get) == $password) {
                $user_db = $this->Company->userdata($username);
                $user_data = $this->Company->getCompany('perusahaan', ['username' => $username]);
                echo "<script>
                    localStorage.setItem('user', 'company')
                </script>";
                if ($user_db['is_active'] != 1) {
                    echo "<script>
                    alert('your account is not active/deactivated. Please contact admin.');
                    window.location.href='http://localhost/lowker/company/login';
                    </script>";
                    //set_pesan('akun anda belum aktif/dinonaktifkan. Silahkan hubungi admin.', false);
                    //redirect('login_student');
                } else {
                    $userdata = [
                        'id_perusahaan' => $user_data['id'],
                        'username' => $username,
                        'password' => md5($password),
                    ];
                    $this->session->set_userdata('userLogCp', 'company');
                    $this->session->set_userdata('foto_admin', $user_db['foto']);
                    $this->session->set_userdata($userdata);
                    redirect('company/dashboard');
                }
            } else {
                echo "<script>
                alert('Your Password is Wrong.');
                window.location.href='http://localhost/lowker/company/login';
                </script>";
                //set_pesan('password salah', false);
                //redirect('login_student');
            }
        }else{
            echo "<script>
            alert('Your username is wrong');
            window.location.href='http://localhost/lowker/company/login';
            </script>";
            //echo "Username dan password salah !";
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('company/login'));
    }

    /*public function auth()
    {
        $data['role'] = 1;  
        $this->load->view('headfoot/header', $data);
        $this->load->view('dashboard/index');
        $this->load->view('headfoot/footer');
    }*/
}