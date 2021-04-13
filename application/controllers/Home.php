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
}
