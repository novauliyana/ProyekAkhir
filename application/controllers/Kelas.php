<?php

class Kelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Siswa');
    }
    public function index()
    {
        $da['siswa'] = $this->M_Siswa->tampil_data();
        $data['mapel'] = $this->M_Siswa->kelas();
        $this->load->view('templates/js');
        $this->load->view('templates/head');
        $this->load->view('templates/header', $da);
        $this->load->view('templates/sidebar');
        $this->load->view('kelas/body', $data);
    }

    public function detail_kelas($id)
    {
        $da['siswa'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['mapel'] = $this->M_Siswa->get_class_in($id);
        $this->load->view('templates/js');
        $this->load->view('templates/head');
        $this->load->view('templates/header', $da);
        $this->load->view('templates/sidebar');
        $this->load->view('kelas/body', $data);
    }

    public function materi()
    {
        $da['siswa'] = $this->M_Siswa->tampil_data();
        $data['materi'] = $this->M_Siswa->get_materi();
        $this->load->view('templates/js');
        $this->load->view('templates/head');
        $this->load->view('templates/header', $da);
        $this->load->view('templates/sidebar');
        $this->load->view('kelas/materi', $data);
    }

    public function coba()
    {
        $da['siswa'] = $this->M_Siswa->tampil_data();
        $this->load->view('templates/js');
        $this->load->view('templates/head');
        $this->load->view('templates/header', $da);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/coba');
    }

    public function kuis()
    {
        $da['siswa'] = $this->M_Siswa->tampil_data();
        $data['materi'] = $this->M_Siswa->get_materi();
        $this->load->view('templates/js');
        $this->load->view('templates/head');
        $this->load->view('templates/header', $da);
        $this->load->view('templates/sidebar');
        $this->load->view('kelas/kuis', $data);
    }

    public function ulangan()
    {
        $da['siswa'] = $this->M_Siswa->tampil_data();
        $data['materi'] = $this->M_Siswa->get_materi();
        $this->load->view('templates/js');
        $this->load->view('templates/head');
        $this->load->view('templates/header', $da);
        $this->load->view('templates/sidebar');
        $this->load->view('kelas/ulangan', $data);
    }

    public function kumpulTugas()
    {
        $da['siswa'] = $this->M_Siswa->tampil_data();
        $data['materi'] = $this->M_Siswa->get_materi();
        $this->load->view('templates/js');
        $this->load->view('templates/head');
        $this->load->view('templates/header', $da);
        $this->load->view('templates/sidebar');
        $this->load->view('kelas/kumpulTugas', $data);
    }

    public function lihatTugas()
    {
        $da['siswa'] = $this->M_Siswa->tampil_data();
        $data['materi'] = $this->M_Siswa->get_tugas();
        $this->load->view('templates/js');
        $this->load->view('templates/head');
        $this->load->view('templates/header', $da);
        $this->load->view('templates/sidebar');
        $this->load->view('kelas/lihatTugas', $data);
    }


    public function tugas()
    {
        $da['siswa'] = $this->M_Siswa->tampil_data();
        $data['materi'] = $this->M_Siswa->get_tugas();
        $this->load->view('templates/js');
        $this->load->view('templates/head');
        $this->load->view('templates/header', $da);
        $this->load->view('templates/sidebar');
        $this->load->view('kelas/tugas', $data);
    }

    public function inPresensi()
    {
        $da['siswa'] = $this->M_Siswa->tampil_data();
        $this->load->view('templates/js');
        $this->load->view('templates/head');
        $this->load->view('templates/header', $da);
        $this->load->view('templates/sidebar');
        $this->load->view('kelas/presensiForm');
    }

    public function buktiAbsen()
    {
        $id = $this->session->userdata('id_user');
        $ambil = $this->db->get_where('presensi', ['id_user' => $id])->row_array();

        //cek apakah sudah absen
        if ($ambil) {
            //upload foto
            $config['max_size'] = 2048;
            $config['allowed_types'] = "png|jpg|jpeg";
            $config['remove_spaces'] = TRUE;
            $config['overwrite'] = TRUE;
            $config['upload_path'] = 'assets/images/presensi/';

            $this->load->library('upload');
            $this->upload->initialize($config);
            $this->upload->do_upload('foto');
            $data_image = $this->upload->data('file_name');
            $location = 'assets/images/presensi/';
            $pict = $location . $data_image;

            $data = [
                'foto_absensi' => $pict,
                'id_kelas' => 2,
                'id_mapel' => 2,
                'id_user' => $id,
                'status' => 'sudah absen'
            ];
            $this->db->insert('presensi', $data);
            redirect('Kelas');
        } else {
            redirect('Kelas/inPresensi');
        }
    }

    public function lihatKuis()
    {
        $da['siswa'] = $this->M_Siswa->tampil_data();
        $this->load->view('templates/js');
        $this->load->view('templates/head');
        $this->load->view('templates/header', $da);
        $this->load->view('templates/sidebar');
        $this->load->view('kelas/lihatKuis');
    }

    public function lihatUlangan()
    {
        $da['siswa'] = $this->M_Siswa->tampil_data();
        $this->load->view('templates/js');
        $this->load->view('templates/head');
        $this->load->view('templates/header', $da);
        $this->load->view('templates/sidebar');
        $this->load->view('kelas/lihatUlangan');
    }
}
