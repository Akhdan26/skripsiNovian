<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Base_Model', 'Base');
        // $this->load->model('M_Company','Company');
        $this->load->model('M_Student','Student');
        $this->load->library('form_validation');
    }

    public function index()
    {           
        $data['title'] = 'Register Page';
        $this->load->view('templates/auth_header',$data);
        $this->load->view('student/register');
        $this->load->view('templates/auth_footer');
    }

    public function registration(){
        $this->form_validation->set_rules('nim', 'NIM','required|trim');
        $this->form_validation->set_rules('nama', 'NAME','required|trim');
        $this->form_validation->set_rules('email','EMAIL','required|valid_email|is_unique[mahasiswa.email]');
        $this->form_validation->set_rules('password','Password','required|trim|min_length[6]',[
            'min_length' => 'Password too Short!'
        ]);
        if($this->form_validation->run() == FALSE) {
            redirect(base_url("register"));
        }else{
 
            $data['nim']   =    $this->input->post('nim');
            $data['nama'] =    $this->input->post('nama');
            $data['email']  =    $this->input->post('email');
            $data['password'] =    md5($this->input->post('password'));
            $data['is_active']  =    0;
 
            $query = $this->Student->insert('mahasiswa', $data);
            if ($query) {
                set_pesan('successfully registered. Next, please contact the admin to activate your account.', 'student/login');
            } else {
                set_pesan('failed to register', 'student/register');
            }
            //$this->load->view('login/index',$pesan);
        }
    }
}