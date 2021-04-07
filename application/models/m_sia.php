<?php

class M_sia extends CI_Model
{
    public function detail_profil_guru()
    {
        $username = $this->session->userdata('username');
        $this->db->where('username', $username);
        $query = $this->db->get('guru');
        return $query->result_array();
    }

    public function tampil_casis()
    {
        $id = $this->session->userdata('id_user');
        $this->db->where('id_user', $id);
        $query = $this->db->get('calon_siswa')->result();
        return $query;
    }
    public function tampil_data_user()
    {
        $id = $this->session->userdata('id_user');
        $this->db->where('id_user', $id);
        $query = $this->db->get('user')->result();
        return $query;
    }
    public function insert($data)
    {
        $this->db->insert('siswa', $data);
    }

    public function tampil_siswa()
    {
        $id = $this->session->userdata('id_user');
        $this->db->where('id_user', $id);
        $query = $this->db->get('siswa')->result();
        return $query;
    }
    public function upload_berkas($data)
    {
        $this->db->insert('berkas_siswa', $data);
    }
    public function tampil_berkas()
    {
        $id = $this->session->userdata('id_user');
        $this->db->where('id_user', $id);
        $query = $this->db->get('vberkas')->result();
        return $query;
    }
    public function update_profil($data)
    {
        $id = $this->session->userdata('id_user');
        $this->db->from('user');
        $this->db->where('id_user', $id);
        $query = $this->db->update('user', $data);
    }

    public function update_data_siswa($data)
    {
        $id = $this->session->userdata('id_user');
        $this->db->from('siswa');
        $this->db->where('id_user', $id);
        $query = $this->db->update('siswa', $data);
    }

    public function insert_pembayaran($data)
    {
        $this->db->insert('pembayaran', $data);
    }
    public function detail_profil_siswa()
    {
        $username = $this->session->userdata('username');
        $this->db->where('username', $username);
        $query = $this->db->get('siswa');
        return $query->result_array();
    }

    function ubah_profil_siswa($where, $data)
    {
        $this->db->update('siswa', $data, $where);
    }

    function ubah_foto_siswa($where, $data2)
    {
        $this->db->update('user', $data2, $where);
    }

    function ubah_profil($where, $data)
    {
        $this->db->update('guru', $data, $where);
    }

    function ubah_foto_guru($where, $data2)
    {
        $this->db->update('user', $data2, $where);
    }

    public function get_class_guru()
    {
        $id = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('tahun_akademik');
        $this->db->join('kelas', 'tahun_akademik.id_thn = kelas.id_thn ');
        $this->db->join('mapel', 'kelas.id_kelas = mapel.id_kelas');
        $this->db->join(' guru', 'mapel.id = guru.id');
        $this->db->where('guru.id_user', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_class_siswa()
    {
        $id = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('tahun_akademik');
        $this->db->join('kelas', 'tahun_akademik.id_thn = kelas.id_thn ');
        $this->db->join('mapel', 'kelas.id_kelas = mapel.id_kelas');
        $this->db->join(' guru', 'mapel.id = guru.id');
        $this->db->join('siswa', 'siswa.id_kelas = kelas.id_kelas');
        $this->db->where('siswa.id_user', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_materi($id)
    {
        return $this->db->query("SELECT * FROM materi join video using(id_mapel) where id_mapel = " . $id)->result_array();
    }

    public function get_video($id)
    {
        return $this->db->query("SELECT * FROM video where id_mapel = " . $id)->result_array();
    }

    public function get_kuis($id)
    {
        return $this->db->query("SELECT * FROM kuis where id_mapel = " . $id)->result_array();
    }

    public function get_tugas($id)
    {
        return $this->db->query("SELECT * FROM tugas where id_mapel = " . $id)->result_array();
    }

    public function get_folder($id)
    {
        return $this->db->query("SELECT * FROM folder where id_mapel = " . $id)->result_array();
    }

    public function get_ulangan($id)
    {
        return $this->db->query("SELECT * FROM ulangan where id_mapel = " . $id)->result_array();
    }

    public function tambah_data($data)
    {
        $this->db->insert('materi', $data);
    }

    public function tambah_folder($data)
    {
        $this->db->insert('folder', $data);
    }

    public function tambah_data_vid($data)
    {
        $this->db->insert('video', $data);
    }

    public function tambah_data_tugas($data)
    {
        $this->db->insert('tugas', $data);
    }

    public function tambah_data_ulangan($data)
    {
        $this->db->insert('ulangan', $data);
    }

    public function tambah_data_kuis($data)
    {
        $this->db->insert('kuis', $data);
    }

    public function edit_data_materi($id)
    {
        return $this->db->query("SELECT * FROM materi where id_materi = " . $id)->result_array();
    }

    public function edit_data_video($id)
    {
        return $this->db->query("SELECT * FROM video where id_video = " . $id)->result_array();
    }

    public function edit_data_tugas($id)
    {
        return $this->db->query("SELECT * FROM tugas where id_tugas = " . $id)->result_array();
    }

    public function edit_data_kuis($id)
    {
        return $this->db->query("SELECT * FROM kuis where id_kuis = " . $id)->result_array();
    }

    public function edit_data_ulangan($id)
    {
        return $this->db->query("SELECT * FROM ulangan where id_ulangan = " . $id)->result_array();
    }

    function update_materi($where, $data)
    {
        $this->db->update('materi', $data, $where);
    }

    function update_video($where, $data)
    {
        $this->db->update('video', $data, $where);
    }

    function update_tugas($where, $data)
    {
        $this->db->update('tugas', $data, $where);
    }

    function update_kuis($where, $data)
    {
        $this->db->update('kuis', $data, $where);
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

    public function kumpul_tugas($id)
    {

        return $this->db->query("SELECT * FROM tugas where id_tugas = " . $id)->result_array();
    }

    public function kumpul_kuis($id)
    {

        return $this->db->query("SELECT * FROM kuis where id_kuis = " . $id)->result_array();
    }

    public function kumpul_ulangan($id)
    {

        return $this->db->query("SELECT * FROM ulangan where id_ulangan = " . $id)->result_array();
    }

    public function submit_tugas($data)
    {
        $this->db->insert('kumpul_tugas', $data);
    }

    public function submit_kuis($data)
    {
        $this->db->insert('kumpul_kuis', $data);
    }

    public function submit_ulangan($data)
    {
        $this->db->insert('kumpul_ulangan', $data);
    }

    public function get_kumpultugas($id)
    {
        return $this->db->query("SELECT * FROM kumpul_tugas join siswa using(id_user) where id_tugas = $id order by id desc")->result_array();
    }

    public function get_kumpulkuis($id)
    {
        return $this->db->query("SELECT * FROM kumpul_kuis join siswa using(id_user) where id_kuis = " . $id)->result_array();
    }

    public function get_kumpululangan($id)
    {
        return $this->db->query("SELECT * FROM kumpul_ulangan join siswa using(id_user) where id_ulangan = " . $id)->result_array();
    }

    public function get_notification_siswa()
    {
        $u = $this->session->userdata('id_user');
        return $this->db->query(" SELECT * from kelas join mapel USING(id_kelas) join notification USING(id_mapel) join user on notification.id_user = user.id_user where id_mapel in 
        (SELECT id_mapel from mapel join kelas USING(id_kelas) join siswa USING(id_kelas) join user USING(id_user) where id_user= $u ) order by tanggal desc")->result_array();
    }

    public function get_notification_guru()
    {
        $u = $this->session->userdata('id_user');
        return $this->db->query("SELECT * from kelas join mapel USING(id_kelas) join guru USING(id) JOIN notification USING(id_mapel) JOIN user on notification.id_user = user.id_user WHERE id_mapel in (SELECT id_mapel from mapel join guru USING(id) join user USING(id_user) where id_user= $u ) order by tanggal desc")->result_array();
    }

    public function get_count_materi($id)
    {
        return $this->db->query("SELECT COUNT(id_materi) as jmlhmateri from materi where id_mapel=$id")->result();
    }

    public function get_count_video($id)
    {
        return $this->db->query("SELECT COUNT(id_video) as jmlhvideo from video where id_mapel=$id")->result();
    }

    public function get_count_tugas($id)
    {
        return $this->db->query("SELECT COUNT(id_tugas) as jmlhtugas from tugas where id_mapel=$id")->result();
    }

    public function get_count_kuis($id)
    {
        return $this->db->query("SELECT COUNT(id_kuis) as jmlhkuis from kuis where id_mapel=$id")->result();
    }

    public function get_count_ulangan($id)
    {
        return $this->db->query("SELECT COUNT(id_ulangan) as jmlhulangan from ulangan where id_mapel=$id")->result();
    }

    public function get_count_anggota($id)
    {
        return $this->db->query("SELECT COUNT(nis) as jmlhanggota from siswa where id_kelas=$id")->result();
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




    public function detailkelas($id)
    {
        return $this->db->query("SELECT * from kelas join mapel USING(id_kelas) JOIN guru USING(id) WHERE id_mapel = $id")->result_array();
    }

    public function anggota($id)
    {
        return $this->db->query("SELECT * from siswa WHERE id_kelas = $id order by nis")->result_array();
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

    public function nilaitugas($id)
    {
        $u = $this->session->userdata('id_user');
        return $this->db->query("SELECT * from kumpul_tugas join tugas using(id_tugas) where kumpul_tugas.id_user=$u and kumpul_tugas.id_mapel=$id")->result_array();
    }

    public function nilaikuis($id)
    {
        $u = $this->session->userdata('id_user');
        return $this->db->query("SELECT * from kumpul_kuis join kuis using(id_kuis) where kumpul_kuis.id_user=$u and kumpul_kuis.id_mapel=$id")->result_array();
    }

    public function nilaiulangan($id)
    {
        $u = $this->session->userdata('id_user');
        return $this->db->query("SELECT * from kumpul_ulangan join ulangan using(id_ulangan) where kumpul_ulangan.id_user=$u and kumpul_ulangan.id_mapel=$id")->result_array();
    }

    public function kategori()
    {
        $u = $this->session->userdata('id_user');
        return $this->db->query("SELECT kategori($u) as kategori")->result();
    }




    //----------------------------------------------------------------------------------------

    public function jadwal_guru()
    {
        $id = $this->session->userdata('id_user');
        return $this->db->query("SELECT * FROM jadwal join guru using(id) join kelas using(id_kelas) join mapel using 
        (id_mapel) where id_user = " . $id)->result_array();
    }
}
