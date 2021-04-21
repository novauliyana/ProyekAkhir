<?php

class M_Siswa extends CI_Model
{
    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
    }

    public function tampil_data()
    {
        $id = $this->session->userdata('id_user');
        $this->db->where('id_user', $id);
        $query = $this->db->get('user')->result();
        return $query;
    }

    public function data_siswa()
    {
        $id = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('user', 'siswa.id_user = user.id_user ');
        $this->db->where('siswa.id_user', $id);
        $query = $this->db->get();
        return $query->result_array();
    }


    public function kelas()
    {
        $id = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('kelas', 'siswa.id_kelas = kelas.id_kelas ');
        $this->db->join('mapel', 'kelas.id_kelas = mapel.id_kelas');
        $this->db->where('siswa.id_user', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_class_in($id)
    {
        return $this->db->query("SELECT * from kelas join mapel USING(id_kelas) JOIN guru USING(id) WHERE id_mapel = $id")->result_array();
    }
    public function get_user_in($idUser)
    {
        return $this->db->query("SELECT * from user WHERE id_mapel = $idUser")->result_array();
    }

    public function presensi()
    {
        $id = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('presensi', 'siswa.id_user = presensi.id_user ');
        $this->db->join('mapel', 'presensi.id_mapel = mapel.id_mapel');
        $this->db->where('siswa.id_user', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function jml_siswa()
    {
        return $this->db->query("SELECT COUNT(nis) as count from siswa JOIN presensi USING (nis) JOIN mapel USING (id_mapel) WHERE id_mapel=10141")->result_array();
    }

    public function get_materi()
    {
        return $this->db->query("SELECT * FROM materi")->result_array();
    }

    public function get_tugas()
    {
        return $this->db->query("SELECT * FROM tugas")->result_array();
    }
    function ubah_profil($where, $data)
    {
        $this->db->update('siswa', $data, $where);
    }
    function ubah_foto($where, $data)
    {
        $this->db->update('user', $data, $where);
    }
}
