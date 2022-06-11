<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Company','Company');
        $this->load->library('form_validation');
    }

    public function index()
    {           
        $data['title'] = 'Register Page';
        $this->load->view('templates/auth_header',$data);
        $this->load->view('company/register');
        $this->load->view('templates/auth_footer');
    }
    
    public function registration(){
        $this->form_validation->set_rules('username', 'USERNAME','required|trim');
        $this->form_validation->set_rules('nama_instansi', 'NAMA_INSTANSI','required|trim');
        $this->form_validation->set_rules('email','EMAIL','required|valid_email');
        $this->form_validation->set_rules('password','Password','required|trim|min_length[6]',[
            'min_length' => 'Password too Short!'
        ]);
        if($this->form_validation->run() == FALSE) {
            redirect(base_url("company/register"));
        }else{
 
            $data['username']   =    $this->input->post('username');
            $data['nama_instansi'] =    $this->input->post('nama_instansi');
            $data['email']  =    $this->input->post('email');
            $data['password'] =    md5($this->input->post('password'));
            $data['is_active']  =    0;
            $data['foto']  =    'default.png';
 
            $query = $this->Company->insert('perusahaan', $data);
            if ($query) {
                set_pesan('successfully registered. Next, please contact the admin to activate your account.', 'company/login');
            } else {
                set_pesan('failed to register', 'company/login');
            }
            //$this->load->view('login/index',$pesan);
        }
    }
}