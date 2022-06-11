<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Base_Model');
    }

    public function index()
    {           
        $data['title'] = 'Login Admin';
        $this->load->view('admin/login');
        if($this->session->userdata('status') == "login"){
			redirect("admin/dashboard");
		}
    }

    /*public function auth()
    {
        $data['role'] = 1;  
        $this->load->view('headfoot/header', $data);
        $this->load->view('dashboard/index');
        $this->load->view('headfoot/footer');
    }*/

    function aksi_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
            );
        $cek = $this->Base_Model->cek_login_admin("user",$where)->num_rows();
        if($cek > 0){
    
            $data_session = array(
                'nama' => $username,
                'status' => "login"
                );
    
            $this->session->set_userdata($data_session);
    
            redirect(base_url("admin/dashboard"));
        }else{
            echo "Wrong username and password !";
        }
    }

    
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('admin/login'));
    }
}