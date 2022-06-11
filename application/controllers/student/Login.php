<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_Student','Student');
        $this->load->library('session');
    }

    public function index()
    {           
        if($this->session->userdata('userLogCp') == "student"){
			redirect("student/dashboard");
		}
        $data['title'] = 'Login Page';
        $this->load->view('templates/auth_header',$data);
        $this->load->view('student/login');
        $this->load->view('templates/auth_footer');
    }

    function aksi_login(){
        $nim = $this->input->post('nim');
        $password_get = $this->input->post('password');
        $where = array(
            'nim' => $nim
            );
        $cek = $this->Student->cek_login_student("mahasiswa",$where)->num_rows();
        if($cek > 0){
            $password = $this->Student->get_password($nim);
            $this->session->set_userdata('userLog', 'login');
            if (md5($password_get) == $password) {
                $user_db = $this->Student->userdata($nim);
                echo "<script>
                    localStorage.setItem('user', 'student')
                </script>";
                if ($user_db['is_active'] != 1) {
                    echo "<script>
                    alert('your account is not active/deactivated. Please contact admin.');
                    window.location.href='http://localhost/lowker/student/login';
                    </script>";
                    //set_pesan('akun anda belum aktif/dinonaktifkan. Silahkan hubungi admin.', false);
                    //redirect('login_student');
                } else {
                    $userdata = [
                        'id' => $user_db['id'],
                        'nim' => $nim,
                        'password' => md5($password),
                        'id_skill' => $user_db['id_skill'],
                        'logged' => TRUE
                    ];
                    $this->session->set_userdata('userLogCp', 'student');
                    $this->session->set_userdata($userdata);
                    redirect('student/dashboard');
                }
            } else {
                echo "<script>
                alert('Your Password is Wrong.');
                window.location.href='http://localhost/lowker/student/login';
                </script>";
                //set_pesan('password salah', false);
                //redirect('login_student');
            }
        }else{
            echo "<script>
            alert('Your username is wrong');
            window.location.href='http://localhost/lowker/student/login';
            </script>";
            //echo "Username dan password salah !";
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('student/login'));
    }

    /*public function auth()
    {
        $data['role'] = 1;  
        $this->load->view('headfoot/header', $data);
        $this->load->view('dashboard/index');
        $this->load->view('headfoot/footer');
    }*/
}