<?php

class M_Student extends CI_Model
{

    // public function add_student()
    // {
    //     $post = $this->input->post();
    // 	$this->nim = $post["nim"];
    //     $this->nama = $post["nama"];
    // 	$this->email = $post["email"];
    //     $this->password = $post["password"];
    //     return $this->db->insert($this->mahasiswa, $this);
    // }

    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function getSertifId($id = null)
    {
        $this->db->select('*');
        $this->db->from('sertifikat');
        if ($id != null) {
            $this->db->where('id_sertif', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function del($table, $where)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function getSertif($id = null)
    {
        $this->db->select('*');
        $this->db->from('sertifikat');
        if ($id != null) {
            $this->db->where('id_mahasiswa', $id);
        }
        $this->db->join('mahasiswa', 'mahasiswa.id = sertifikat.id_mahasiswa');
        $query = $this->db->get();
        return $query;
    }

    public function upload($data = array())
    {
        return $this->db->insert_batch('sertifikat', $data);
    }

    function add_student($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    function cek_login_student($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    function getPelamar($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    function getPekerjaan($table, $where)
    {
        return $this->db->get_where($table, $where)->result_array();
    }

    function getFilter($where)
    {
        if ($where != null) {
            $this->db->select('pekerjaan.id , pekerjaan.nama_pekerjaan, pekerjaan.jenis_pekerjaan, pekerjaan.application_date, pekerjaan.posted_date, pekerjaan.lokasi, pekerjaan.deskripsi_pekerjaan, pekerjaan.id_skill, perusahaan.nama_instansi, perusahaan.foto, perusahaan.website, perusahaan.deskripsi, perusahaan.email');
            $this->db->from('pekerjaan');
            $this->db->join('perusahaan', 'pekerjaan.id_perusahaan = perusahaan.id');
            $this->db->order_by('pekerjaan.id');
            $this->db->where($where);
            $query = $this->db->get();
            $list_job = null;
            foreach ($query->result() as $data) :
                $list_job .= '<!-- single-job-content -->
                <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="' . base_url("student/find_job/detail_job/" . $data->id) . '"><img src="' . base_url("assets/upload/" . $data->foto) . '" alt="" width="96"></a>
                        </div>
                        <div class="job-tittle job-tittle2">
                            <a href="' . base_url("student/find_job/detail_job/" . $data->id) . '">
                                <h4>' . $data->nama_pekerjaan . '</h4>
                            </a>
                            <ul>
                                <li>' . $data->nama_instansi . '</li>
                                <li><i class="fas fa-map-marker-alt"></i>' . $data->lokasi . '</li>
                                <!--<li>$3500 - $4000</li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="items-link items-link2 f-right">
                        <a href="' . base_url("student/find_job/detail_job/" . $data->id) . '">' . $data->jenis_pekerjaan . '</a>
                        <span>' . $data->posted_date . '</span>
                    </div>
                </div>';
            endforeach;
            return $list_job;
        } else {
            $this->db->select('pekerjaan.id ,perusahaan.foto, pekerjaan.nama_pekerjaan, pekerjaan.jenis_pekerjaan, pekerjaan.application_date, pekerjaan.posted_date, pekerjaan.lokasi, perusahaan.nama_instansi');
            $this->db->from('pekerjaan');
            $this->db->join('perusahaan', 'pekerjaan.id_perusahaan = perusahaan.id');
            $this->db->order_by('pekerjaan.id', 'desc');
            // $this->db->where($where);
            $query = $this->db->get();
            $list_job = null;
            foreach ($query->result() as $data) :
                $list_job .= '<!-- single-job-content -->
                <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="' . base_url("student/find_job/detail_job/" . $data->id) . '"><img src="' . base_url("assets/upload/" . $data->foto) . '" alt="" width="96"></a>
                        </div>
                        <div class="job-tittle job-tittle2">
                            <a href="' . base_url("student/find_job/detail_job/" . $data->id) . '">
                                <h4>' . $data->nama_pekerjaan . '</h4>
                            </a>
                            <ul>
                                <li>' . $data->nama_instansi . '</li>
                                <li><i class="fas fa-map-marker-alt"></i>' . $data->lokasi . '</li>
                                <!--<li>$3500 - $4000</li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="items-link items-link2 f-right">
                        <a href="' . base_url("student/find_job/detail_job/" . $data->id) . '">' . $data->jenis_pekerjaan . '</a>
                        <span>' . $data->posted_date . '</span>
                    </div>
                </div>';
            endforeach;
            return $list_job;
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

    public function getStudent($table, $data = null, $where = null)
    {
        if ($data != null) {
            return $this->db->get_where($table, $data)->row_array();
        } else {
            return $this->db->get_where($table, $where)->result_array();
        }
    }

    public function update($table, $pk, $id, $data)
    {
        $this->db->where($pk, $id);
        return $this->db->update($table, $data);
    }

    public function edit($post)
    {
        $id_skill = null;
        $values = $_POST['id_skill'];
        foreach ($values as $a) {
            $id_skill = $id_skill . "," . $a;
        }
        $id_skill1 = substr($id_skill, 1);
        $params = [
            'nim'                           => $post['nim'],
            'nama'                          => $post['nama'],
            'tanggal_lahir'                 => $post['tanggal_lahir'],
            'alamat'                        => $post['alamat'],
            'kota'                          => $post['kota'],
            'no_hp'                         => $post['no_hp'],
            'email'                         => $post['email'],
            'jenjang'                       => $post['jenjang'],
            'jurusan'                       => $post['jurusan'],
            'program_studi'                 => $post['program_studi'],
            'ipk'                           => $post['ipk'],
            'tahun_lulus'                   => $post['tahun_lulus'],
            'jenis_kelamin'                 => $post['jenis_kelamin'],
            'id_skill'                      => $id_skill1,
        ];
        $this->db->where('id', $post['id_mahasiswa']);
        $this->db->update('mahasiswa' ,$params);
    }

    public function getListJob($where = null)
    {
        if ($where != null) {
            $this->db->select('pekerjaan.id , pekerjaan.nama_pekerjaan, pekerjaan.jenis_pekerjaan, pekerjaan.application_date, pekerjaan.posted_date, pekerjaan.lokasi, pekerjaan.deskripsi_pekerjaan, pekerjaan.id_skill, perusahaan.nama_instansi, perusahaan.foto, perusahaan.website, perusahaan.deskripsi, perusahaan.email');
            $this->db->from('pekerjaan');
            $this->db->join('perusahaan', 'pekerjaan.id_perusahaan = perusahaan.id');
            $this->db->where($where);
            $this->db->order_by('pekerjaan.id');
            $query = $this->db->get();
            $list_job = null;
            foreach ($query->result() as $data) :
                $list_job .= '<!-- single-job-content -->
                <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="' . base_url("student/find_job/detail_job/" . $data->id) . '"><img src="' . base_url("assets/upload/" . $data->foto) . '" alt="" width="96"></a>
                        </div>
                        <div class="job-tittle job-tittle2">
                            <a href="' . base_url("student/find_job/detail_job/" . $data->id) . '">
                                <h4>' . $data->nama_pekerjaan . '</h4>
                            </a>
                            <ul>
                                <li>' . $data->nama_instansi . '</li>
                                <li><i class="fas fa-map-marker-alt"></i>' . $data->lokasi . '</li>
                                <!--<li>$3500 - $4000</li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="items-link items-link2 f-right">
                        <a href="' . base_url("student/find_job/detail_job/" . $data->id) . '">' . $data->jenis_pekerjaan . '</a>
                        <span>' . $data->posted_date . '</span>
                    </div>
                </div>';
            endforeach;
            return $list_job;
        } else {
            $this->db->select('pekerjaan.id ,perusahaan.foto, pekerjaan.nama_pekerjaan, pekerjaan.jenis_pekerjaan, pekerjaan.application_date, pekerjaan.posted_date, pekerjaan.lokasi, perusahaan.nama_instansi');
            $this->db->from('pekerjaan');
            $this->db->join('perusahaan', 'pekerjaan.id_perusahaan = perusahaan.id');
            $this->db->order_by('pekerjaan.id', 'desc');
            // $this->db->where($where);
            $query = $this->db->get();
            $list_job = null;
            foreach ($query->result() as $data) :
                $list_job .= '<!-- single-job-content -->
                <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="' . base_url("student/find_job/detail_job/" . $data->id) . '"><img src="' . base_url("assets/upload/" . $data->foto) . '" alt="" width="96"></a>
                        </div>
                        <div class="job-tittle job-tittle2">
                            <a href="' . base_url("student/find_job/detail_job/" . $data->id) . '">
                                <h4>' . $data->nama_pekerjaan . '</h4>
                            </a>
                            <ul>
                                <li>' . $data->nama_instansi . '</li>
                                <li><i class="fas fa-map-marker-alt"></i>' . $data->lokasi . '</li>
                                <!--<li>$3500 - $4000</li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="items-link items-link2 f-right">
                        <a href="' . base_url("student/find_job/detail_job/" . $data->id) . '">' . $data->jenis_pekerjaan . '</a>
                        <span>' . $data->posted_date . '</span>
                    </div>
                </div>';
            endforeach;
            return $list_job;
        }
    }

    public function searchSkill($table, $data = null, $where = null)
    {
        if ($data != null) {
            return $this->db->get_where($table, $data)->row_array();
        } else {
            return $this->db->get_where($table, $where)->result_array();
        }
    }

    public function insert($table, $data, $batch = false)
    {
        return $batch ? $this->db->insert_batch($table, $data) : $this->db->insert($table, $data);
    }

    public function get_password($nim)
    {
        $data = $this->db->get_where('mahasiswa', ['nim' => $nim])->row_array();
        return $data['password'];
    }

    public function userdata($nim)
    {
        return $this->db->get_where('mahasiswa', ['nim' => $nim])->row_array();
    }

    public function joinSkill($where = null)
    {
        if ($where != null) {
            $this->db->select('skill.nama_skill, mahasiswa.id AS id_mahasiswa');
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

    public function skill($id = null)
    {
        $this->db->select('skill.nama_skill, skill.id AS skill_id , mahasiswa.id AS id_mahasiswa, mahasiswa.id_skill');
        $this->db->from('mahasiswa');
        if ($id != null) {
            $this->db->where('id_mahasiswa', $id);
        }
        // $this->db->join('mahasiswa', 'mahasiswa.id = sertifikat.id_mahasiswa');
        $this->db->join('skill', 'skill.skill_id = mahasiswa.id_skill');
        $query = $this->db->get();
        return $query;
    }

    public function joinJob($where = null)
    {
        if ($where != null) {
            $this->db->select('pekerjaan.id , pekerjaan.nama_pekerjaan, pekerjaan.jenis_pekerjaan, pekerjaan.application_date, pekerjaan.posted_date, pekerjaan.lokasi, pekerjaan.deskripsi_pekerjaan, pekerjaan.id_skill, perusahaan.nama_instansi, perusahaan.foto, perusahaan.website, perusahaan.deskripsi, perusahaan.email');
            $this->db->from('pekerjaan');
            $this->db->join('perusahaan', 'pekerjaan.id_perusahaan = perusahaan.id');
            $this->db->order_by('pekerjaan.id');
            $this->db->where($where);
            $query = $this->db->get();
            return $query;
        } else {
            $this->db->select('pekerjaan.id ,perusahaan.foto, pekerjaan.nama_pekerjaan, pekerjaan.jenis_pekerjaan, pekerjaan.application_date, pekerjaan.posted_date, pekerjaan.lokasi, perusahaan.nama_instansi');
            $this->db->from('pekerjaan');
            $this->db->join('perusahaan', 'pekerjaan.id_perusahaan = perusahaan.id');
            $this->db->order_by('pekerjaan.id', 'desc');
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
