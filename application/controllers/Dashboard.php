<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {         
        if($this->session->userdata('userLogCp') == "company"){
			redirect("company/");
		}else if($this->session->userdata('userLogCp') == "student"){
            redirect("student");
        }
        $data['role'] = 1;  
        $this->load->view('layout/header', $data);
        $this->load->view('dashboard');
        $this->load->view('layout/footer');
    }
}