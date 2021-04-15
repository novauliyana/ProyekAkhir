<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Siswa');
    }
    public function index()
    {
        $da['siswa'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['mapel'] = $this->M_Siswa->kelas();
        $this->load->view('siswa/js');
        $this->load->view('siswa/head');
        $this->load->view('siswa/header', $da);
        $this->load->view('siswa/sidebar');
        $this->load->view('siswa/body', $data);
    }
    public function kelas()
    {
        $da['siswa'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['mapel'] = $this->M_Siswa->kelas();
        $this->load->view('siswa/js');
        $this->load->view('siswa/head');
        $this->load->view('siswa/header', $da);
        $this->load->view('siswa/sidebar');
        $this->load->view('siswa/body', $data);
    }
    public function jadwal()
    {
        $da['siswa'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $this->load->view('siswa/js');
        $this->load->view('siswa/head');
        $this->load->view('siswa/header', $da);
        $this->load->view('siswa/sidebar');
        $this->load->view('siswa/jadwal/jadwal');
    }
    public function presensi()
    {
        $da['siswa'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['presensi'] = $this->M_Siswa->presensi();
        $this->load->view('siswa/js');
        $this->load->view('siswa/head');
        $this->load->view('siswa/header', $da);
        $this->load->view('siswa/sidebar');
        $this->load->view('siswa/presensi/presensi', $data);
    }
    public function daftarTugas()
    {
        $da['siswa'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $this->load->view('siswa/js');
        $this->load->view('siswa/head');
        $this->load->view('siswa/header', $da);
        $this->load->view('siswa/sidebar');
        $this->load->view('siswa/tugas/daftarTugas');
    }
    public function pesan()
    {
        $da['siswa'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $this->load->view('siswa/js');
        $this->load->view('siswa/head');
        $this->load->view('siswa/header', $da);
        $this->load->view('siswa/sidebar');
        $this->load->view('siswa/pesan/pesan');
    }

    public function profil_siswa()
    {
        $da['siswa'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $dasis['data_siswa'] = $this->M_Siswa->data_siswa();
        $this->load->view('siswa/js');
        $this->load->view('siswa/head');
        $this->load->view('siswa/header', $da);
        $this->load->view('siswa/sidebar');
        $this->load->view('siswa/profil/profil_siswa', $dasis);
    }

    public function ubah_profil($id_user)
    {
        $config['upload_path'] = './assets/profil';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload');
        $this->upload->initialize($config);
        $this->upload->do_upload('foto');
        $data_image = $this->upload->data('file_name');
        $location =  'assets/profil/';
        $pict = $location . $data_image;
        $data = array(
            'alamat'        => $this->input->post('alamat'),
            'no_hp'     => $this->input->post('nohp_siswa')
        );

        $data2 = array(
            'image' => $pict,
            'password'     => $this->input->post('password')
        );

        $where = array(
            'id_user' => $id_user
        );

        $this->M_Siswa->ubah_profil($where, $data, 'siswa');
        $this->M_Siswa->ubah_foto($where, $data2, 'user');
        redirect('Home/index');
    }


    public function inKelas($id)
    {
        $da['siswa'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['mapel'] = $this->M_Siswa->get_class_in($id);
        $this->load->view('siswa/js');
        $this->load->view('siswa/head');
        $this->load->view('siswa/header', $da);
        $this->load->view('siswa/sidebar');
        $this->load->view('siswa/kelas/body', $data);
    }

    public function materi()
    {
        $da['siswa'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['materi'] = $this->M_Siswa->get_materi();
        $this->load->view('siswa/js');
        $this->load->view('siswa/head');
        $this->load->view('siswa/header', $da);
        $this->load->view('siswa/sidebar');
        $this->load->view('siswa/kelas/materi', $data);
    }

    public function kuis()
    {
        $da['siswa'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['materi'] = $this->M_Siswa->get_materi();
        $this->load->view('siswa/js');
        $this->load->view('siswa/head');
        $this->load->view('siswa/header', $da);
        $this->load->view('siswa/sidebar');
        $this->load->view('siswa/kelas/kuis', $data);
    }

    public function ulangan()
    {
        $da['siswa'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['materi'] = $this->M_Siswa->get_materi();
        $this->load->view('siswa/js');
        $this->load->view('siswa/head');
        $this->load->view('siswa/header', $da);
        $this->load->view('siswa/sidebar');
        $this->load->view('siswa/kelas/ulangan', $data);
    }

    public function kumpulTugas()
    {
        $da['siswa'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['materi'] = $this->M_Siswa->get_materi();
        $this->load->view('siswa/js');
        $this->load->view('siswa/head');
        $this->load->view('siswa/header', $da);
        $this->load->view('siswa/sidebar');
        $this->load->view('siswa/kelas/kumpulTugas', $data);
    }

    public function lihatTugas()
    {
        $da['siswa'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['materi'] = $this->M_Siswa->get_tugas();
        $this->load->view('siswa/js');
        $this->load->view('siswa/head');
        $this->load->view('siswa/header', $da);
        $this->load->view('siswa/sidebar');
        $this->load->view('siswa/kelas/lihatTugas', $data);
    }


    public function tugas()
    {
        $da['siswa'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['materi'] = $this->M_Siswa->get_tugas();
        $this->load->view('siswa/js');
        $this->load->view('siswa/head');
        $this->load->view('siswa/header', $da);
        $this->load->view('siswa/sidebar');
        $this->load->view('siswa/kelas/tugas', $data);
    }

    public function inPresensi()
    {
        $da['siswa'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $this->load->view('siswa/js');
        $this->load->view('siswa/head');
        $this->load->view('siswa/header', $da);
        $this->load->view('siswa/sidebar');
        $this->load->view('siswa/kelas/presensiForm');
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
            redirect('Home/inPresensi');
        }
    }

    public function lihatKuis()
    {
        $da['siswa'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $this->load->view('siswa/js');
        $this->load->view('siswa/head');
        $this->load->view('siswa/header', $da);
        $this->load->view('siswa/sidebar');
        $this->load->view('siswa/kelas/lihatKuis');
    }

    public function lihatUlangan()
    {
        $da['siswa'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $this->load->view('siswa/js');
        $this->load->view('siswa/head');
        $this->load->view('siswa/header', $da);
        $this->load->view('siswa/sidebar');
        $this->load->view('siswa/kelas/lihatUlangan');
    }
}
