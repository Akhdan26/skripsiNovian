<?php 

class M_Company extends CI_Model{	

    // public function add_student()
    // {
    //     $post = $this->input->post();
	// 	$this->nim = $post["nim"];
    //     $this->nama = $post["nama"];
	// 	$this->email = $post["email"];
    //     $this->password = $post["password"];
    //     return $this->db->insert($this->mahasiswa, $this);
    // }

    function add_company($table,$data){
		return $this->db->insert($table,$data);
	}

    function cek_login_company($table,$where){		
		return $this->db->get_where($table,$where);
	}

    public function insert($table, $data, $batch = false)
    {
        return $batch ? $this->db->insert_batch($table, $data) : $this->db->insert($table, $data);
    }

    public function get_password($username)
    {
        $data = $this->db->get_where('perusahaan', ['username' => $username])->row_array();
        return $data['password'];
    }

    public function userdata($username)
    {
        return $this->db->get_where('perusahaan', ['username' => $username])->row_array();
    }

    public function getStudent($table, $data = null, $where = null)
    {
        if ($data != null) {
            return $this->db->get_where($table, $data)->row_array();
        } else {
            return $this->db->get_where($table, $where)->result_array();
        }
    }

    public function getCompany($table, $data = null, $where = null)
    {
        if ($data != null) {
            return $this->db->get_where($table, $data)->row_array();
        } else {
            return $this->db->get_where($table, $where)->result_array();
        }
    }

    public function getJob($table, $data = null, $where = null)
    {
        if ($data != null) {
            return $this->db->get_where($table, $data)->result_array();
        } else {
            return $this->db->get_where($table, $where)->result_array();
        }
    }

    public function getTable($table, $data = null, $where = null)
    {
        if ($data != null) {
            return $this->db->get_where($table, $data)->row_array();
        } else {
            return $this->db->get_where($table, $where)->result_array();
        }
    }

    public function edit($table, $data, $where)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function update($table, $pk, $id, $data)
    {
        $this->db->where($pk, $id);
        return $this->db->update($table, $data);
    }

    public function delete($table, $where)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function joinApplicant($where = null)
    {
        if ($where != null) {
            $this->db->select('*, pelamar.id AS id_pelamar');
            $this->db->from('pelamar');
            $this->db->join('perusahaan ', 'perusahaan.id = pelamar.id_perusahaan');
            $this->db->join('pekerjaan ', 'pekerjaan.id = pelamar.id_pekerjaan');
            $this->db->join('mahasiswa ', 'mahasiswa.id = pelamar.id_mahasiswa');
            $this->db->where($where);
            $query = $this->db->get();
            return $query;
        } else {
            $this->db->select('*');
            $this->db->from('pelamar');
            $this->db->join('perusahaan ', 'perusahaan.id = pelamar.id_perusahaan');
            $this->db->join('pekerjaan ', 'pekerjaan.id = pelamar.id_pekerjaan');
            $this->db->join('mahasiswa ', 'mahasiswa.id = pelamar.id_mahasiswa');
            // $this->db->where($where);
            $query = $this->db->get();
            return $query;
        }
    }

    

    public function joinJob($where = null)
    {
        if ($where != null) {
            $this->db->select('*, pekerjaan.id AS id_pekerjaan, perusahaan.id AS id_perusahaan');
            $this->db->from('pekerjaan');
            $this->db->join('perusahaan', 'pekerjaan.id_perusahaan = perusahaan.id');
            $this->db->where($where);
            $query = $this->db->get();
            return $query;
        } else {
            $this->db->select('*, pekerjaan.id AS id_pekerjaan, perusahaan.id AS id_perusahaan');
            $this->db->from('pekerjaan');
            $this->db->join('perusahaan', 'pekerjaan.id_perusahaan = perusahaan.id');
            // $this->db->where($where);
            $query = $this->db->get();
            return $query;
        }
    }

    public function joinSkill($where = null)
    {
        if ($where != null) {
            $this->db->select('skill.nama_skill, pekerjaan.id AS id_pekerjaan');
            $this->db->from('pekerjaan');
            $this->db->join('skill', 'FIND_IN_SET(skill.id, pekerjaan.id_skill)');
            $this->db->where($where);
            $query = $this->db->get();
            return $query;
        } else {
            $this->db->select('skill.nama_skill, pekerjaan.id AS id_pekerjaan');
            $this->db->from('pekerjaan');
            $this->db->join('skill', 'FIND_IN_SET(skill.id, pekerjaan.id_skill)');
            // $this->db->where($where);
            $query = $this->db->get();
            return $query;
        }
    }

    public function joinSkillwithStudent($where = null)
    {
        if ($where != null) {
            $this->db->select('skill.nama_skill, skill.id AS id_mahasiswa');
            $this->db->from('mahasiswa');
            $this->db->join('skill', 'FIND_IN_SET(skill.id, mahasiswa.id_skill)');
            $this->db->where($where);
            $query = $this->db->get();
            return $query;
        } else {
            $this->db->select('skill.nama_skill, mahasiswa.id AS id_mahasiswa');
            $this->db->from('mahasiswa');
            $this->db->join('skill', 'FIND_IN_SET(skill.id, mahasiswa.id_skill)');
            // $this->db->where($where);
            $query = $this->db->get();
            return $query;
        }
    }
}