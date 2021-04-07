<?php

class M_data extends CI_Model{
    public function pencarian($keyword){
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('kelas', 'siswa.id_kelas=kelas.id_kelas');
        $this->db->like('nama_lengkap', $keyword);
        $this->db->or_like('nama_kelas', $keyword);
        // $this->db->where("th_ajar", $thn_ajaran);
        return $this->db->get()->result();
    }

    public function pencarianguru($keyword){
        $this->db->select('*');
        $this->db->from('guru');
        $this->db->like('nama_guru', $keyword);
        
        // $this->db->where("th_ajar", $thn_ajaran);
        return $this->db->get()->result();
    }

    public function get_datasiswa($table){
        $this->db->from($table);
        $this->db->join('kelas','kelas.id_kelas=siswa.id_kelas');
        $this->db->where('siswa.id_kelas =kelas.id_kelas');
        return $this->db->get();
    }

    public function detail_siswa($nis){
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('kelas', 'siswa.id_kelas=kelas.id_kelas');
        $result = $this->db->where('siswa.nis', $nis)
    	->get();
    	if ($result->num_rows() > 0) {
    		return $result->result();
    	}else{
    		return false;
    	}
    }

    public function tampil_kelas($table){
        return $this->db->get($table)->result();
    }

    public function tampil_jampel($table){
        return $this->db->get($table)->result();
    }

    public function tampil_mapel($table){
        return $this->db->get($table)->result();
    }

    public function tampil_hari($table){
        return $this->db->get($table)->result();
    }

    public function detail_kelas_siswa($id_kelas){
        $result = $this->db->where('id_Kelas', $id_kelas)
    	->get('siswa');
    	if ($result->num_rows() > 0) {
    		return $result->result();
    	}else{
    		return false;
    	}
    }

    public function detail_jadwal($id_kelas){
        $this->db->select('*');
        $this->db->from('jadwal');
        $this->db->join('mapel', 'jadwal.id_mapel=mapel.id_mapel');
        $this->db->join('jampel', 'jadwal.id_j=jampel.id_j');
        $this->db->join('hari', 'jadwal.id_h=hari.id_h');
        $result = $this->db->where('jadwal.id_Kelas', $id_kelas)
    	->get();
    	if ($result->num_rows() > 0) {
    		return $result->result();
    	}else{
    		return false;
    	}
    }

    public function detail_kelas_jadwal($id_kelas){
        
        $result = $this->db->where('id_kelas', $id_kelas)
    	->get('jadwal');
    	if ($result->num_rows() > 0) {
    		return $result->result();
    	}else{
    		return false;
    	}
    }

    public function get_dataguru($table){
        $this->db->from($table);
        return $this->db->get("");
    }

    public function detail_guru($nip){
        $result = $this->db->where('nip', $nip)
    	->get('guru');
    	if ($result->num_rows() > 0) {
    		return $result->result();
    	}else{
    		return false;
    	}
    }

    public function get_datakelas($table){
        $this->db->from($table);
        return $this->db->get("");
    }

    public function tampil_user(){
        $id_user = $this->session->userdata('id_user');
        $this->db->where('id_user', $id_user);
        $query = $this->db->get('user');
        return $query->result_array();
    }

 
    public function get_akunsiswa(){
        $this->db->select('nama_lengkap, email, username, password');
        $this->db->from('user');
        $this->db->where('role_id',2);
        $query=$this->db->get();
        return $query->result_array();
     }
     public function get_akunguru(){
        $this->db->select('nama_lengkap, email, username, password');
        $this->db->from('user');
        $this->db->where('role_id',3);
        $query=$this->db->get();
        return $query->result_array();
     }

     public function get_mapelipa(){
        $this->db->select('*');
        $this->db->from('mapel');
        $this->db->where('program','ipa');
        $query=$this->db->get();
        return $query->result_array();
     }
     public function get_mapelips(){
        $this->db->select('*');
        $this->db->from('mapel');
        $this->db->where('program','ips');
        $query=$this->db->get();
        return $query->result_array();
     }

     public function insert_jadwal($data){
        return $this->db->insert_batch('jadwal', $data);
     }
}

?>