<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_List extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_Company','Company');
    }

    public function index()
    {           
        $data['users'] = $this->Company->getStudent("mahasiswa");
        $this->load->view('company/layout/header');
        $this->load->view('company/studentlist/index', $data);
        $this->load->view('company/layout/footer');
    }

    public function detail_student($id)
    {
        $where = [
            'mahasiswa.id' => $id
        ];
        $data['title'] = "Edit Student";
        $data['mahasiswa'] = $this->Company->getStudent('mahasiswa', ['id' => $id]);
        $data['skill'] = $this->Company->joinSkillwithStudent($where)->result_array();
        $this->load->view('company/layout/header');
        $this->load->view('company/studentlist/student_detail', $data);
        $this->load->view('company/layout/footer');
    }
}