<?php

class Siswa_m extends CI_Model
{

    //---------------------------KELAS--------------------------------

    public function get_class_guru()
    {
        $id = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('kelas');
        $this->db->join('mapel', 'kelas.id_kelas = mapel.id_kelas');
        $this->db->join(' guru', 'mapel.id = guru.id');
        $this->db->where('guru.id_user', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_class_in($id)
    {
        return $this->db->query("SELECT * from kelas join mapel USING(id_kelas) JOIN guru USING(id) WHERE id_mapel = $id")->result_array();
    }


    public function detailkelas($id)
    {
        return $this->db->query("SELECT * from kelas join mapel USING(id_kelas) JOIN guru USING(id) WHERE id_mapel = $id")->result_array();
    }

    public function anggota($id)
    {
        return $this->db->query("SELECT * from user join siswa USING(id_user) WHERE id_kelas = $id order by nis")->result_array();
    }

    public function get_count_anggota($id)
    {
        return $this->db->query("SELECT COUNT(nis) as jmlhanggota from siswa where id_kelas=$id")->result();
    }


    //---------------------------MATERI--------------------------------

    public function get_count_materi($id)
    {
        return $this->db->query("SELECT COUNT(id_materi) as jmlhmateri from materi where id_mapel=$id")->result();
    }

    public function get_materi($id)
    {
        return $this->db->query("SELECT * FROM materi where id_mapel = " . $id)->result_array();
    }

    public function get_materi_detail($id)
    {
        return $this->db->query("SELECT * FROM materi where id_materi = " . $id)->result_array();
    }

    public function tambah_data($data)
    {
        $this->db->insert('materi', $data);
    }

    public function edit_data_materi($id)
    {
        return $this->db->query("SELECT * FROM materi where id_materi = " . $id)->result_array();
    }

    function update_materi($where, $data)
    {
        $this->db->update('materi', $data, $where);
    }


    //---------------------------TUGAS--------------------------------

    public function get_count_tugas($id)
    {
        return $this->db->query("SELECT COUNT(id_tugas) as jmlhtugas from tugas where id_mapel=$id")->result();
    }

    public function get_tugas($id)
    {
        return $this->db->query("SELECT * FROM tugas where id_mapel = " . $id)->result_array();
    }

    public function get_tugas_detail($id)
    {
        return $this->db->query("SELECT * FROM tugas where id_tugas = " . $id)->result_array();
    }

    public function tambah_data_tugas($data)
    {
        $this->db->insert('tugas', $data);
    }

    public function edit_data_tugas($id)
    {
        return $this->db->query("SELECT * FROM tugas where id_tugas = " . $id)->result_array();
    }

    function update_tugas($where, $data)
    {
        $this->db->update('tugas', $data, $where);
    }

    //---------------------------KUIS--------------------------------

    public function get_count_kuis($id)
    {
        return $this->db->query("SELECT COUNT(id_kuis) as jmlhkuis from kuis where id_mapel=$id")->result();
    }

    public function get_kuis($id)
    {
        return $this->db->query("SELECT * FROM kuis where id_mapel = " . $id)->result_array();
    }

    public function get_kuis_detail($id)
    {
        return $this->db->query("SELECT * FROM kuis where id_kuis = " . $id)->result_array();
    }

    public function tambah_data_kuis($data)
    {
        $this->db->insert('kuis', $data);
    }

    public function edit_data_kuis($id)
    {
        return $this->db->query("SELECT * FROM kuis where id_kuis = " . $id)->result_array();
    }

    function update_kuis($where, $data)
    {
        $this->db->update('kuis', $data, $where);
    }

    //---------------------------ULANGAN--------------------------------

    public function get_count_ulangan($id)
    {
        return $this->db->query("SELECT COUNT(id_ulangan) as jmlhulangan from ulangan where id_mapel=$id")->result();
    }

    public function get_ulangan($id)
    {
        return $this->db->query("SELECT * FROM ulangan where id_mapel = " . $id)->result_array();
    }

    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function get_ulangan_pilgan($id)
    {
        return $this->db->query('SELECT * from soal_ujian_pilgan join ulangan USING(id_ulangan) where id_ulangan="' . $id . '" order by id_soal desc')->result_array();
    }

    public function get_ulangan_essai($id)
    {
        return $this->db->query('SELECT * from soal_ujian_essai join ulangan USING(id_ulangan) where id_ulangan="' . $id . '" order by id_soal_esai desc')->result_array();
    }



    public function get_kumpululangan($id)
    {
        return $this->db->query("SELECT * FROM kumpul_ulangan join siswa using(id_user) where id_ulangan = " . $id)->result_array();
    }

    public function get_ulangan_detail($id)
    {
        return $this->db->query("SELECT * FROM ulangan where id_ulangan = " . $id)->result_array();
    }
    public function tambah_data_ulangan($data)
    {
        $this->db->insert('ulangan', $data);
    }

    public function edit_data_ulangan($id)
    {
        return $this->db->query("SELECT * FROM ulangan where id_ulangan = " . $id)->result_array();
    }

    function update_ulangan($where, $data)
    {
        $this->db->update('ulangan', $data, $where);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }


    //---------------------------JADWAL--------------------------------

    public function jadwal_guru()
    {
        $id = $this->session->userdata('id_user');
        // return $this->db->query("SELECT * FROM jadwal JOIN hari using(id_h) join jampel using(id_j) join guru using(id) join kelas using(id_kelas) join mapel using 
        // (id_mapel) where id_user = " . $id)->result_array();

        $this->db->select('*');
        $this->db->from('jadwal');
        $this->db->join('hari', 'jadwal.id_h = hari.id_h');
        $this->db->join('jampel', 'jadwal.id_j = jampel.id_j');
        $this->db->join('kelas', 'jadwal.id_kelas = kelas.id_kelas');
        $this->db->join('mapel', 'jadwal.id_mapel = mapel.id_mapel');
        $this->db->join('guru', 'jadwal.id = guru.id');
        $this->db->where('guru.id_user', $id);
        $query = $this->db->get();
        return $query->result_array();

        //return $this->db->query("SELECT * FROM jadwal join guru using(id) where id_user = " . $id)->result_array();
    }






    public function get_tgl_presensi($id)
    {
        return $this->db->query("SELECT * FROM presensi where id_mapel = " . $id)->result_array();
    }

    public function get_detail_presensi($id)
    {
        return $this->db->query("SELECT * FROM detail_presensi where id_presensi = " . $id)->result_array();
    }

    public function detail_profil_guru()
    {
        $username = $this->session->userdata('username');
        $this->db->where('username', $username);
        $query = $this->db->get('guru');
        return $query->result_array();
    }

    function ubah_profil($where, $data)
    {
        $this->db->update('guru', $data, $where);
    }

    function ubah_foto_guru($where, $data2)
    {
        $this->db->update('user', $data2, $where);
    }

    public function get_kumpultugas($id)
    {
        return $this->db->query("SELECT * FROM kumpul_tugas join siswa using(id_user) where id_tugas = $id order by id desc")->result_array();
    }

    public function get_kumpulkuis($id)
    {
        return $this->db->query("SELECT * FROM kumpul_kuis join siswa using(id_user) where id_kuis = " . $id)->result_array();
    }



    public function get_count_kumpultugas($id)
    {
        return $this->db->query("SELECT COUNT(id) as jmlhkumpultugas from kumpul_tugas where id_tugas=$id")->result();
    }

    public function get_count_kumpulkuis($id)
    {
        return $this->db->query("SELECT COUNT(id) as jmlhkumpulkuis from kumpul_kuis where id_kuis=$id")->result();
    }

    public function get_count_kumpululangan($id)
    {
        return $this->db->query("SELECT COUNT(id) as jmlhkumpululangan from kumpul_ulangan where id_ulangan=$id")->result();
    }


    public function editnilaitugas($id)
    {
        return $this->db->query("SELECT * FROM kumpul_tugas join siswa using(id_user) where id = " . $id)->result_array();
    }

    public function editnilaikuis($id)
    {
        return $this->db->query("SELECT * FROM kumpul_kuis join siswa using(id_user) where id = " . $id)->result_array();
    }

    public function editnilaiulangan($id)
    {
        return $this->db->query("SELECT * FROM kumpul_ulangan join siswa using(id_user) where id = " . $id)->result_array();
    }

    function updatenilaitugas($where, $data)
    {
        $this->db->update('kumpul_tugas', $data, $where);
    }

    function updatenilaikuis($where, $data)
    {
        $this->db->update('kumpul_kuis', $data, $where);
    }

    function updatenilaiulangan($where, $data)
    {
        $this->db->update('kumpul_ulangan', $data, $where);
    }


    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function get_soal_pilgan($id)
    {
        return $this->db->query('SELECT * from soal_ujian_pilgan where id_soal="' . $id . '" order by id_soal desc')->result_array();
    }

    public function get_soal_essai($id)
    {
        return $this->db->query('SELECT * from soal_ujian_essai where id_soal_esai="' . $id . '" order by id_soal_esai desc')->result_array();
    }

    public function get_tipe_ulangan($id)
    {
        return $this->db->query('SELECT * from soal_ujian_pilgan join ulangan USING(id_ulangan) where id_ulangan="' . $id . '" order by id_soal desc')->result_array();
    }
}
