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
        $da['siswa'] = $this->M_Siswa->tampil_data();
        $data['mapel'] = $this->M_Siswa->kelas();
        $this->load->view('templates/js');
        $this->load->view('templates/head');
        $this->load->view('templates/header', $da);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/body', $data);
    }
    public function kelas()
    {
        $da['siswa'] = $this->M_Siswa->tampil_data();
        $data['mapel'] = $this->M_Siswa->kelas();
        $this->load->view('templates/js');
        $this->load->view('templates/head');
        $this->load->view('templates/header', $da);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/body', $data);
    }
    public function jadwal()
    {
        $da['siswa'] = $this->M_Siswa->tampil_data();
        $this->load->view('templates/js');
        $this->load->view('templates/head');
        $this->load->view('templates/header', $da);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/jadwal');
    }
    public function presensi()
    {
        $da['siswa'] = $this->M_Siswa->tampil_data();
        $data['presensi'] = $this->M_Siswa->presensi();
        $this->load->view('templates/js');
        $this->load->view('templates/head');
        $this->load->view('templates/header', $da);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/presensi', $data);
    }
    public function daftarTugas()
    {
        $da['siswa'] = $this->M_Siswa->tampil_data();
        $this->load->view('templates/js');
        $this->load->view('templates/head');
        $this->load->view('templates/header', $da);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/daftarTugas');
    }
    public function pesan()
    {
        $da['siswa'] = $this->M_Siswa->tampil_data();
        $this->load->view('templates/js');
        $this->load->view('templates/head');
        $this->load->view('templates/header', $da);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/pesan');
    }

    public function profil_siswa()
    {
        $da['siswa'] = $this->M_Siswa->tampil_data();
        $dasis['data_siswa'] = $this->M_Siswa->data_siswa();
        $this->load->view('templates/js');
        $this->load->view('templates/head');
        $this->load->view('templates/header', $da);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/profil_siswa', $dasis);
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
}
