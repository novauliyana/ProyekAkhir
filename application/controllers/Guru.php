<?php

class Guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Siswa_m');
    }

    public function index()
    {
        $da['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kelas'] = $this->Siswa_m->get_class_guru();
        $this->load->view('guru/head', $da);
        $this->load->view('guru/kelas/kelas', $data);
        $this->load->view('guru/js');
    }

    public function pesan()
    {
        $da['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('guru/js');
        $this->load->view('guru/head', $da);
        $this->load->view('guru/pesan/pesan');
    }

    public function in($id)
    {
        $da['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kelas'] = $this->Siswa_m->get_class_in($id);
        $this->load->view('guru/head', $da);
        $this->load->view('guru/kelas/in', $data);
        $this->load->view('guru/js');
    }

    public function detailkelas($id)
    {
        $da['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kelas'] = $this->Siswa_m->detailkelas($id);
        $this->load->view('guru/head', $da);
        $this->load->view('guru/kelas/detail', $data);
        $this->load->view('guru/js');
    }

    public function anggota($id)
    {
        $da['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['anggota'] = $this->Siswa_m->anggota($id);
        $data['jumlahanggota'] = $this->Siswa_m->get_count_anggota($id);
        $this->load->view('guru/head', $da);
        $this->load->view('guru/kelas/anggota', $data);
        $this->load->view('guru/js');
    }

    public function materi($id)
    {
        $da['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['materi'] = $this->Siswa_m->get_materi($id);
        $data['jumlahmateri'] = $this->Siswa_m->get_count_materi($id);
        $this->load->view('guru/head', $da);
        $this->load->view('guru/kelas/materi', $data);
        $this->load->view('guru/js');
    }

    public function lihat_materi($id)
    {
        $da['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['materi'] = $this->Siswa_m->get_materi_detail($id);
        $this->load->view('guru/head', $da);
        $this->load->view('guru/kelas/lihat_materi', $data);
        $this->load->view('guru/js');
    }

    public function lihat_tugas($id)
    {
        $da['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['tugas'] = $this->Siswa_m->get_tugas_detail($id);
        $this->load->view('guru/head', $da);
        $this->load->view('guru/kelas/lihat_tugas', $data);
        $this->load->view('guru/js');
    }

    public function lihat_kuis($id)
    {
        $da['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kuis'] = $this->Siswa_m->get_kuis_detail($id);
        $this->load->view('guru/head', $da);
        $this->load->view('guru/kelas/lihat_kuis', $data);
        $this->load->view('guru/js');
    }

    public function lihat_ulangan($id)
    {
        $da['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['ulangan'] = $this->Siswa_m->get_ulangan_detail($id);
        $this->load->view('guru/head', $da);
        $this->load->view('guru/kelas/lihat_ulangan', $data);
        $this->load->view('guru/js');
    }

    public function tugas($id)
    {
        $da['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['tugas'] = $this->Siswa_m->get_tugas($id);
        $data['jumlahtugas'] = $this->Siswa_m->get_count_tugas($id);
        $this->load->view('guru/head', $da);
        $this->load->view('guru/kelas/tugas', $data);
        $this->load->view('guru/js');
    }

    public function kuis($id)
    {
        $da['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array($id);
        $data['kuis'] = $this->Siswa_m->get_kuis($id);
        $data['jumlahkuis'] = $this->Siswa_m->get_count_kuis($id);
        $this->load->view('guru/head', $da);
        $this->load->view('guru/kelas/kuis', $data);
        $this->load->view('guru/js');
    }

    public function ulangan($id)
    {
        $da['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['ulangan'] = $this->Siswa_m->get_ulangan($id);
        $data['jumlahulangan'] = $this->Siswa_m->get_count_ulangan($id);
        $this->load->view('guru/head', $da);
        $this->load->view('guru/kelas/ulangan', $data);
        $this->load->view('guru/js');
    }

    public function addmateri()
    {
        $this->form_validation->set_rules('judul_materi', 'Judul materi', 'required|trim', [
            'required' => 'Judul materi harus diisi!'
        ]);

        if ($this->form_validation->run() == false) {
            $da['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('guru/head', $da);
            $this->load->view('guru/kelas/addmateri');
            $this->load->view('guru/js');
        } else {
            $config['upload_path'] = './assets/materi';
            $config['allowed_types'] = 'api|mp4|mkv|pdf|docx|pptx';
            $this->load->library('upload');
            $this->upload->initialize($config);
            $this->upload->do_upload('image');
            $data_image = $this->upload->data('file_name');
            $location = 'assets/materi/';
            $pict = $location . $data_image;
            $idmapel = $this->input->post('id_mapel');
            $data = array(
                'judul_materi'   => $this->input->post('judul_materi'),
                'deskripsi'      => $this->input->post('deskripsi'),
                'nama_file'      => $data_image,
                'berkas'         => $pict,
                'id_mapel'       => $idmapel,
                'id_user'        => $this->session->userdata('id_user'),
            );

            $this->Siswa_m->tambah_data($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <small><b>Materi berhasil ditambahkan!</b></small>
          </div>');
            redirect('guru/materi/' . $idmapel);
        }
    }

    public function addtugas()
    {
        $this->form_validation->set_rules('judul_tugas', 'Judul materi', 'required|trim', [
            'required' => 'Judul tugas harus diisi!'
        ]);
        $this->form_validation->set_rules('deadline', 'Tanggal Pengumpulan', 'required', [
            'required' => 'Tanggal pengumpulan harus diisi!'
        ]);
        $this->form_validation->set_rules('waktu', 'Waktu Pengumpulan', 'required', [
            'required' => 'Waktu pengumpulan harus diisi!'
        ]);

        if ($this->form_validation->run() == false) {
            $da['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('guru/head', $da);
            $this->load->view('guru/kelas/addtugas');
            $this->load->view('guru/js');
        } else {
            $config['upload_path'] = './assets/materi';
            $config['allowed_types'] = 'api|mp4|mkv|pdf|docx|pptx';
            $this->load->library('upload');
            $this->upload->initialize($config);
            $this->upload->do_upload('image');
            $data_image = $this->upload->data('file_name');
            $location = 'assets/materi/';
            $pict = $location . $data_image;
            $idmapel = $this->input->post('id_mapel');
            $data = array(
                'judul_tugas'   => $this->input->post('judul_tugas'),
                'deskripsi'      => $this->input->post('deskripsi'),
                'deadline'   => $this->input->post('deadline'),
                'waktu'      => $this->input->post('waktu'),
                'nama_file'      => $data_image,
                'file'         => $pict,
                'id_mapel'       => $idmapel,
                'id_user'        => $this->session->userdata('id_user'),
            );

            $this->Siswa_m->tambah_data_tugas($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <small><b>Tugas berhasil ditambahkan!</b></small>
          </div>');
            redirect('guru/tugas/' . $idmapel);
        }
    }



    public function addkuis()
    {
        $this->form_validation->set_rules('judul_kuis', 'Judul kuis', 'required|trim', [
            'required' => 'Judul kuis harus diisi!'
        ]);
        $this->form_validation->set_rules('deadline', 'Tanggal Pengumpulan', 'required', [
            'required' => 'Tanggal pengumpulan harus diisi!'
        ]);
        $this->form_validation->set_rules('waktu', 'Waktu Pengumpulan', 'required', [
            'required' => 'Waktu pengumpulan harus diisi!'
        ]);

        if ($this->form_validation->run() == false) {
            $da['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('guru/head', $da);
            $this->load->view('guru/kelas/addkuis');
            $this->load->view('guru/js');
        } else {
            $config['upload_path'] = './assets/materi';
            $config['allowed_types'] = 'api|mp4|mkv|pdf|docx|pptx';
            $this->load->library('upload');
            $this->upload->initialize($config);
            $this->upload->do_upload('image');
            $data_image = $this->upload->data('file_name');
            $location = 'assets/materi/';
            $pict = $location . $data_image;
            $idmapel = $this->input->post('id_mapel');
            $data = array(
                'judul_kuis'   => $this->input->post('judul_kuis'),
                'deskripsi'      => $this->input->post('deskripsi'),
                'deadline'   => $this->input->post('deadline'),
                'waktu'      => $this->input->post('waktu'),
                'nama_file'      => $data_image,
                'file'         => $pict,
                'id_mapel'       => $idmapel,
                'id_user'        => $this->session->userdata('id_user'),
            );

            $this->Siswa_m->tambah_data_kuis($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <small><b>Kuis berhasil ditambahkan!</b></small>
          </div>');
            redirect('guru/kuis/' . $idmapel);
        }
    }

    public function addulangan()
    {
        $this->form_validation->set_rules('judul_ulangan', 'Judul materi', 'required|trim', [
            'required' => 'Judul ulangan harus diisi!'
        ]);
        $this->form_validation->set_rules('deadline', 'Tanggal Pengumpulan', 'required', [
            'required' => 'Tanggal pengumpulan harus diisi!'
        ]);
        $this->form_validation->set_rules('waktu', 'Waktu Pengumpulan', 'required', [
            'required' => 'Waktu pengumpulan harus diisi!'
        ]);

        if ($this->form_validation->run() == false) {
            $da['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('guru/head', $da);
            $this->load->view('guru/kelas/addulangan');
            $this->load->view('guru/js');
        } else {
            $config['upload_path'] = './assets/materi';
            $config['allowed_types'] = 'api|mp4|mkv|pdf|docx|pptx';
            $this->load->library('upload');
            $this->upload->initialize($config);
            $this->upload->do_upload('image');
            $data_image = $this->upload->data('file_name');
            $location = 'assets/materi/';
            $pict = $location . $data_image;
            $idmapel = $this->input->post('id_mapel');
            $data = array(
                'judul_ulangan'   => $this->input->post('judul_ulangan'),
                'deskripsi'      => $this->input->post('deskripsi'),
                'deadline'   => $this->input->post('deadline'),
                'waktu'      => $this->input->post('waktu'),
                'nama_file'      => $data_image,
                'file'         => $pict,
                'id_mapel'       => $idmapel,
                'id_user'        => $this->session->userdata('id_user'),
            );

            $this->Siswa_m->tambah_data_ulangan($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <small><b>Ulangan berhasil ditambahkan!</b></small>
          </div>');
            redirect('guru/ulangan/' . $idmapel);
        }
    }


    public function edit_materi($id)
    {
        $this->form_validation->set_rules('judul_materi', 'Judul materi', 'required|trim', [
            'required' => 'Judul materi harus diisi!'
        ]);

        if ($this->form_validation->run() == false) {
            $da['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['materi'] = $this->Siswa_m->edit_data_materi($id);
            $this->load->view('guru/head', $da);
            $this->load->view('guru/kelas/editmateri', $data);
            $this->load->view('guru/js');
        } else {
            $id = $this->input->post('id_materi');
            $config['upload_path'] = './assets/materi';
            $config['allowed_types'] = 'pptx|docx|pdf';
            $this->load->library('upload');
            $this->upload->initialize($config);
            $this->upload->do_upload('image');
            $data_image = $this->upload->data('file_name');
            $location =  'assets/materi/';
            $pict = $location . $data_image;
            $idmapel = $this->input->post('id_mapel');

            $data = array(
                'judul_materi'   => $this->input->post('judul_materi'),
                'deskripsi'      => $this->input->post('deskripsi'),
                'nama_file'      => $data_image,
                'berkas'         => $pict
            );

            $where = array(
                'id_materi' => $id
            );

            $this->Siswa_m->update_materi($where, $data, 'materi');
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <small><b>Materi berhasil diubah!</b></small>
          </div>');
            redirect("guru/materi/" . $idmapel);
        }
    }

    public function edit_tugas($id)
    {
        $this->form_validation->set_rules('judul_tugas', 'Judul materi', 'required|trim', [
            'required' => 'Judul tugas harus diisi!'
        ]);

        if ($this->form_validation->run() == false) {
            $da['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['tugas'] = $this->Siswa_m->edit_data_tugas($id);
            $this->load->view('guru/head', $da);
            $this->load->view('guru/kelas/edittugas', $data);
            $this->load->view('guru/js');
        } else {
            $id = $this->input->post('id_tugas');
            $config['upload_path'] = './assets/materi';
            $config['allowed_types'] = 'pptx|docx|pdf';
            $this->load->library('upload');
            $this->upload->initialize($config);
            $this->upload->do_upload('image');
            $data_image = $this->upload->data('file_name');
            $location =  'assets/materi/';
            $pict = $location . $data_image;
            $idmapel = $this->input->post('id_mapel');

            $data = array(
                'judul_tugas'   => $this->input->post('judul_tugas'),
                'deskripsi'      => $this->input->post('deskripsi'),
                'nama_file'      => $data_image,
                'deadline'   => $this->input->post('deadline'),
                'waktu'      => $this->input->post('waktu'),
                'file'         => $pict
            );

            $where = array(
                'id_tugas' => $id
            );

            $this->Siswa_m->update_tugas($where, $data, 'tugas');
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <small><b>Tugas berhasil diubah!</b></small>
          </div>');
            redirect("guru/tugas/" . $idmapel);
        }
    }

    public function edit_kuis($id)
    {
        $this->form_validation->set_rules('judul_kuis', 'Judul materi', 'required|trim', [
            'required' => 'Judul kuis harus diisi!'
        ]);

        if ($this->form_validation->run() == false) {
            $da['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['kuis'] = $this->Siswa_m->edit_data_kuis($id);
            $this->load->view('guru/head', $da);
            $this->load->view('guru/kelas/editkuis', $data);
            $this->load->view('guru/js');
        } else {
            $id = $this->input->post('id_kuis');
            $config['upload_path'] = './assets/materi';
            $config['allowed_types'] = 'pptx|docx|pdf';
            $this->load->library('upload');
            $this->upload->initialize($config);
            $this->upload->do_upload('image');
            $data_image = $this->upload->data('file_name');
            $location =  'assets/materi/';
            $pict = $location . $data_image;
            $idmapel = $this->input->post('id_mapel');

            $data = array(
                'judul_kuis'   => $this->input->post('judul_kuis'),
                'deskripsi'      => $this->input->post('deskripsi'),
                'nama_file'      => $data_image,
                'deadline'   => $this->input->post('deadline'),
                'waktu'      => $this->input->post('waktu'),
                'file'         => $pict
            );

            $where = array(
                'id_kuis' => $id
            );

            $this->Siswa_m->update_kuis($where, $data, 'kuis');
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <small><b>Kuis berhasil diubah!</b></small>
          </div>');
            redirect("guru/kuis/" . $idmapel);
        }
    }

    public function edit_ulangan($id)
    {
        $this->form_validation->set_rules('judul_ulangan', 'Judul materi', 'required|trim', [
            'required' => 'Judul ulangan harus diisi!'
        ]);

        if ($this->form_validation->run() == false) {
            $da['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['ulangan'] = $this->Siswa_m->edit_data_ulangan($id);
            $this->load->view('guru/head', $da);
            $this->load->view('guru/kelas/editulangan', $data);
            $this->load->view('guru/js');
        } else {
            $id = $this->input->post('id_ulangan');
            $config['upload_path'] = './assets/materi';
            $config['allowed_types'] = 'pptx|docx|pdf';
            $this->load->library('upload');
            $this->upload->initialize($config);
            $this->upload->do_upload('image');
            $data_image = $this->upload->data('file_name');
            $location =  'assets/materi/';
            $pict = $location . $data_image;
            $idmapel = $this->input->post('id_mapel');

            $data = array(
                'judul_ulangan'   => $this->input->post('judul_ulangan'),
                'deskripsi'      => $this->input->post('deskripsi'),
                'nama_file'      => $data_image,
                'deadline'   => $this->input->post('deadline'),
                'waktu'      => $this->input->post('waktu'),
                'file'         => $pict
            );

            $where = array(
                'id_ulangan' => $id
            );

            $this->Siswa_m->update_ulangan($where, $data, 'kuis');
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <small><b>Ulangan berhasil diubah!</b></small>
          </div>');
            redirect("guru/ulangan/" . $idmapel);
        }
    }

    public function hapus_materi($id, $idmapel)
    {
        $where = array('id_materi' => $id);
        $this->Siswa_m->hapus_data($where, 'materi');
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <small><b>Materi berhasil dihapus!</b></small>
      </div>');
        redirect('guru/materi/' . $idmapel);
    }

    public function hapus_tugas($id, $idmapel)
    {
        $where = array('id_tugas' => $id);
        $this->Siswa_m->hapus_data($where, 'tugas');
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <small><b>Tugas berhasil dihapus!</b></small>
      </div>');
        redirect('guru/tugas/' . $idmapel);
    }

    public function hapus_kuis($id, $idmapel)
    {
        $where = array('id_kuis' => $id);
        $this->Siswa_m->hapus_data($where, 'kuis');
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <small><b>Kuis berhasil dihapus!</b></small>
      </div>');
        redirect('guru/kuis/' . $idmapel);
    }

    public function hapus_ulangan($id, $idmapel)
    {
        $where = array('id_ulangan' => $id);
        $this->Siswa_m->hapus_data($where, 'ulangan');
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <small><b>Ulangan berhasil dihapus!<b></small>
      </div>');
        redirect('guru/ulangan/' . $idmapel);
    }


    //--------------------------- bagian presensi -----------------------------

    public function presensi()
    {
        $da['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kelas'] = $this->Siswa_m->get_class_guru();
        $this->load->view('guru/head', $da);
        $this->load->view('guru/presensi/presensi', $data);
        $this->load->view('guru/js');
    }

    public function in_presensi($id)
    {
        $da['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['presensi'] = $this->Siswa_m->get_tgl_presensi($id);
        // $data['jumlahmateri'] = $this->Siswa_m->get_count_materi($id);
        $this->load->view('guru/head', $da);
        $this->load->view('guru/presensi/in', $data);
        $this->load->view('guru/js');
    }

    public function lihat_presensi($id)
    {
        $da['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['detailpresensi'] = $this->Siswa_m->get_detail_presensi($id);
        // $data['jumlahmateri'] = $this->Siswa_m->get_count_materi($id);
        $this->load->view('guru/head', $da);
        $this->load->view('guru/presensi/lihat', $data);
        $this->load->view('guru/js');
    }

    public function unduh()
    {
        echo "unduh.php";
    }


    //--------------------------- bagian jadwal -----------------------------

    public function jadwal()
    {
        $da['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jadwal'] = $this->Siswa_m->jadwal_guru();
        $this->load->view('guru/head', $da);
        $this->load->view('guru/jadwal/jadwal', $data);
        $this->load->view('guru/js');
    }


    //--------------------------- bagian profil -----------------------------

    public function profil()
    {
        $da['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('guru/head', $da);
        $this->load->view('guru/profil/profil');
        $this->load->view('guru/js');
    }

    public function ubah_profil($username)
    {
        $username = $this->session->userdata('username');
        $this->form_validation->set_rules(
            'nama',
            'Nama Lengkap',
            'required|trim|max_length[25]',
            [
                'max_length' => 'Nama terlalu panjang!'
            ]
        );
        $this->form_validation->set_rules('tempat_lahir', 'Tempat lahir', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal lahir', 'required|trim');
        $this->form_validation->set_rules(
            'telp_guru',
            'Nomor Handphone',
            'required|trim|max_length[13]|min_length[11]|integer',
            [
                'max_length' => 'Nomor Handphone terlalu panjang!',
                'min_length' => 'Nomor Handphone terlalu pendek!',
                'integer' => 'Nomor Handphone harus angka!'
            ]
        );

        $this->form_validation->set_rules(
            'alamat',
            'Alamat',
            'required|trim|max_length[50]',
            [
                'max_length' => 'Alamat terlalu panjang!'
            ]
        );

        if ($this->form_validation->run() == false) {
            $da['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['guru'] = $this->Siswa_m->detail_profil_guru();
            $this->load->view('guru/head', $da);
            $this->load->view('guru/profil/ubahprofil', $data);
            $this->load->view('guru/js');
        } else {
            $config['upload_path'] = './assets/profil';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $this->load->library('upload');
            $this->upload->initialize($config);
            $this->upload->do_upload('foto_guru');
            $data_image = $this->upload->data('file_name');
            $location =  'assets/profil/';
            $pict = $location . $data_image;
            $data = array(
                'nama_guru'     => $this->input->post('nama'),
                'tempat_lahir'  => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'alamat'        => $this->input->post('alamat'),
                'telp_guru'     => $this->input->post('telp_guru'),
                'foto_guru'     => $pict,
                'id_user'       =>  $this->session->userdata('id_user')
            );

            $data2 = array(
                'image' => $pict,
                'nama'     => $this->input->post('nama')
            );

            $where = array(
                'username' => $username
            );

            $this->Siswa_m->ubah_profil($where, $data, 'guru');
            $this->Siswa_m->ubah_foto_guru($where, $data2, 'user');
            redirect('guru/profil');
        }
    }

    public function kumpultugas($id)
    {
        $da['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kumpultugas'] = $this->Siswa_m->get_kumpultugas($id);
        $data['jumlahkumpultugas'] = $this->Siswa_m->get_count_kumpultugas($id);
        $this->load->view('guru/head', $da);
        $this->load->view('guru/kelas/kumpultugas', $data);
        $this->load->view('guru/js');
    }

    public function kumpulkuis($id)
    {
        $da['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kumpulkuis'] = $this->Siswa_m->get_kumpulkuis($id);
        $data['jumlahkumpulkuis'] = $this->Siswa_m->get_count_kumpulkuis($id);
        $this->load->view('guru/head', $da);
        $this->load->view('guru/kelas/kumpulkuis', $data);
        $this->load->view('guru/js');
    }

    public function kumpululangan($id)
    {
        $da['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kumpululangan'] = $this->Siswa_m->get_kumpululangan($id);
        $data['jumlahkumpululangan'] = $this->Siswa_m->get_count_kumpululangan($id);
        $this->load->view('guru/head', $da);
        $this->load->view('guru/kelas/kumpululangan', $data);
        $this->load->view('guru/js');
    }



    public function editnilaitugas($id)
    {
        $da['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nilaitugas'] = $this->Siswa_m->editnilaitugas($id);
        $this->load->view('guru/head', $da);
        $this->load->view('guru/kelas/nilaitugasguru', $data);;
        $this->load->view('guru/js');
    }

    public function editnilaikuis($id)
    {
        $da['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nilaikuis'] = $this->Siswa_m->editnilaikuis($id);
        $this->load->view('guru/head', $da);
        $this->load->view('guru/kelas/nilaikuisguru', $data);
        $this->load->view('guru/js');
    }

    public function editnilaiulangan($id)
    {
        $da['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nilaiulangan'] = $this->Siswa_m->editnilaiulangan($id);
        $this->load->view('guru/head', $da);
        $this->load->view('guru/kelas/nilaiulanganguru', $data);
        $this->load->view('guru/js');
    }

    public function updatenilaitugas()
    {
        $idmapel = $this->input->post('idmapel');
        $id = $this->input->post('idtugas');
        $data = array(
            'nilai'   => $this->input->post('nilai')
        );

        $where = array(
            'id' => $this->input->post('id')
        );

        $this->Siswa_m->updatenilaitugas($where, $data);
        redirect("guru/kumpultugas/" . $id . '/' . $idmapel);
    }

    public function updatenilaikuis()
    {
        $idmapel = $this->input->post('idmapel');
        $id = $this->input->post('idtugas');
        $data = array(
            'nilai'   => $this->input->post('nilai')
        );

        $where = array(
            'id' => $this->input->post('id')
        );

        $this->Siswa_m->updatenilaikuis($where, $data);
        redirect("guru/kumpulkuis/" . $id . '/' . $idmapel);
    }

    public function updatenilaiulangan()
    {
        $idmapel = $this->input->post('idmapel');
        $id = $this->input->post('idtugas');
        $data = array(
            'nilai'   => $this->input->post('nilai')
        );

        $where = array(
            'id' => $this->input->post('id')
        );

        $this->Siswa_m->updatenilaiulangan($where, $data);
        redirect("guru/kumpululangan/" . $id . '/' . $idmapel);
    }
}
