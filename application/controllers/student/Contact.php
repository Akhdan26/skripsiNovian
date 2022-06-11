<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {         
        $data['role'] = 1;  
        $this->load->view('layout/header', $data);
        $this->load->view('student/contact');
        $this->load->view('layout/footer');
    }
}