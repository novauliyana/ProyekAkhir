<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->database();
		$this->load->model('M_data');
	}


	public function index()
	{
		$guru = $this->db->query("select * from guru");
		$data['guru'] = $guru->num_rows();
		$siswa = $this->db->query("select * from siswa");
		$data['siswa'] = $siswa->num_rows();
		$kelas = $this->db->query("select * from kelas");
		$data['kelas'] = $kelas->num_rows();
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/js');
	}

	public function datasiswa()
	{
		$data['siswa'] = $this->M_data->get_datasiswa('siswa')->result();
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/datasiswa', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/js');
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['siswa'] = $this->M_data->pencarian($keyword);
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/datasiswa', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/js');
	}

	public function tambahdatasiswa()
	{
		$data['kelas'] = $this->M_data->tampil_kelas('kelas');
		$data['user'] = $this->M_data->tampil_user();
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/tambahdatasiswa', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/js');
	}

	public function tambahdatasiswa_aksi()
	{
		$id_user = $this->session->userdata('id_user');
		$this->form_validation->set_rules('nisn', 'nisn', 'required|trim|is_unique[siswa.nisn]', [
			'is_unique' => 'NISN sudah tersedia!'
		]);
		$this->form_validation->set_rules('nis', 'nis', 'required|trim|is_unique[siswa.nis]', [
			'is_unique' => 'NIS sudah tersedia!'
		]);
		$this->form_validation->set_rules('nama_lengkap', 'nama lengkap', 'required', ['required' => 'Nama Wajib Diisi!']);
		$this->form_validation->set_rules('tempat_lahir', 'tempat lahir', 'required', ['required' => 'Tempat Lahir Wajib Diisi!']);
		$this->form_validation->set_rules('tanggal_lahir', 'tanggal lahir', 'required', ['required' => 'Tanggal Lahir Wajib Diisi!']);
		$this->form_validation->set_rules('agama', 'agama', 'required', ['required' => 'Agama Wajib Diisi!']);
		$this->form_validation->set_rules('no_hp', 'nomor telepon', 'required', ['required' => 'Nomor Telepon Wajib Diisi!']);
		$this->form_validation->set_rules('alamat', 'alamat', 'required', ['required' => 'Alamat Wajib Diisi!']);
		$this->form_validation->set_rules('email', 'email', 'required|trim|is_unique[user.email]', [
			'is_unique' => 'Email sudah tersedia!'
		]);
		$this->form_validation->set_rules('username', 'username', 'required|trim|is_unique[user.username]', [
			'is_unique' => 'username Kelas sudah tersedia!'
		]);
		$this->form_validation->set_rules('password', 'password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'Password dont match!',
			'min_length' => 'Password too short!'
		]);
		$this->form_validation->set_rules('password2', 'Repeat Password', 'required|trim|matches[password]');
		if ($this->form_validation->run() == False) {
			$this->tambahdatasiswa();
		} else {
			$nis			= $this->input->post('nis');
			$nisn			= $this->input->post('nisn');
			$nama_lengkap 	= $this->input->post('nama_lengkap');
			$jenis_kelamin 	= $this->input->post('jenis_kelamin');
			$tempat_lahir 	= $this->input->post('tempat_lahir');
			$tanggal_lahir 	= $this->input->post('tanggal_lahir');
			$agama 			= $this->input->post('agama');
			$no_hp 			= $this->input->post('no_hp');
			$username 		= $this->input->post('username');
			$email		= $this->input->post('email');
			$password 		= $this->input->post('password');
			$alamat 		= $this->input->post('alamat');

			$data = array(
				'nis' => $nis,
				'nisn' => $nisn,
				'nama_lengkap' => $nama_lengkap,
				'jenis_kelamin' => $jenis_kelamin,
				'tempat_lahir' => $tempat_lahir,
				'tanggal_lahir' => $tanggal_lahir,
				'id_kelas'        => $this->input->post('id_kelas'),
				'agama' => $agama,
				'no_hp' => $no_hp,
				'email' => $email,
				'alamat' => $alamat
			);

			$this->db->insert('siswa', $data);

			$data1 = array(
				'role_id'     => 2,
				'nama_lengkap' => $nama_lengkap,
				'no_hp' => $no_hp,
				'email' => $email,
				'username' => $username,
				'password' => $password
				// 'alamat' => $alamat
			);

			$this->db->insert('user', $data1);
			// $this->M_data->insert_datasiswa($data, 'user');
			$this->session->set_flashdata(
				'pesan',
				'<div class="alert alert-success alert-dismissible fade show" role="alert"> 
					Data Siswa Berhasil Ditambah! </div>'
			);
			redirect('admin/datasiswa');
		}
	}

	public function detailsiswa($nis)
	{
		$data['detail'] = $this->M_data->detail_siswa($nis);

		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/detailsiswa', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/js');
	}


	public function dataguru()
	{
		$data['guru'] = $this->M_data->get_dataguru('guru')->result();
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/dataguru', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/js');
	}

	public function searchguru()
	{
		$keyword = $this->input->post('keyword');
		$data['guru'] = $this->M_data->pencarianguru($keyword);
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/dataguru', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/js');
	}

	public function tambahdataguru()
	{
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/tambahdataguru');
		$this->load->view('admin/footer');
		$this->load->view('admin/js');
	}

	public function tambahdataguru_aksi()
	{

		$id_user = $this->session->userdata('id_user');
		$this->form_validation->set_rules('nip', 'nip', 'required|trim|is_unique[guru.nip]', [
			'is_unique' => 'NIP sudah tersedia!'
		]);
		$this->form_validation->set_rules('nama_guru', 'nama guru', 'required', ['required' => 'Nama Wajib Diisi!']);
		$this->form_validation->set_rules('tempat_lahir', 'tempat lahir', 'required', ['required' => 'Tempat Lahir Wajib Diisi!']);
		$this->form_validation->set_rules('tanggal_lahir', 'tanggal lahir', 'required', ['required' => 'Tanggal Lahir Wajib Diisi!']);
		$this->form_validation->set_rules('agama', 'agama', 'required', ['required' => 'Agama Wajib Diisi!']);
		$this->form_validation->set_rules('no_hp', 'nomor telepon', 'required', ['required' => 'Nomor Telepon Wajib Diisi!']);
		$this->form_validation->set_rules('alamat', 'alamat', 'required', ['required' => 'Alamat Wajib Diisi!']);
		$this->form_validation->set_rules('email', 'email', 'required|trim|is_unique[user.email]', [
			'is_unique' => 'Email sudah tersedia!'
		]);
		$this->form_validation->set_rules('username', 'username', 'required|trim|is_unique[user.username]', [
			'is_unique' => 'username Kelas sudah tersedia!'
		]);
		$this->form_validation->set_rules('password', 'password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'Password dont match!',
			'min_length' => 'Password too short!'
		]);
		$this->form_validation->set_rules('password2', 'Repeat Password', 'required|trim|matches[password]');

		if ($this->form_validation->run() == False) {
			$this->tambahdataguru();
		} else {

			$data = [

				'role_id'     => 3,
				'nama_lengkap'        => $this->input->post('nama_guru'),
				'no_hp'       => $this->input->post('no_hp'),
				'email'       => $this->input->post('email'),
				'username'        => $this->input->post('username'),
				'password'       => $this->input->post('password')
			];

			$this->db->insert('user', $data);

			$data2 =  [
				'nip'     => $this->input->post('nip'),
				'nama_guru'        => $this->input->post('nama_guru'),
				'jenis_kelamin'       => $this->input->post('jenis_kelamin'),
				'tempat_lahir'        => $this->input->post('tempat_lahir'),
				'tanggal_lahir'       => $this->input->post('tanggal_lahir'),
				'agama'       => $this->input->post('agama'),
				'email'       => $this->input->post('email'),
				'no_hp'       => $this->input->post('no_hp'),
				'alamat'       => $this->input->post('alamat')
			];
			$this->db->insert('guru', $data2);
			$this->session->set_flashdata(
				'pesan',
				'<div class="alert alert-success alert-dismissible fade show" role="alert"> 
			Data Guru Berhasil Ditambah! </div>'
			);
			redirect('admin/dataguru');
		}
	}

	public function detailguru($nip)
	{
		$data['detail'] = $this->M_data->detail_guru($nip);

		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/detailguru', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/js');
	}

	public function updateguru($nip)
	{
		$where = array('nip' => $nip);
		$data['guru'] = $this->M_data->update_dataguru($where, 'guru');
		$data[''] = $this->M_data->update_dataguru($where, 'guru');
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/updateguru', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/js');
	}

	public function datakelas()
	{
		$data['kelas'] = $this->M_data->get_datakelas('kelas')->result();
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/datakelas', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/js');
	}

	public function tambahdatakelas()
	{
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/tambahdatakelas');
		$this->load->view('admin/footer');
		$this->load->view('admin/js');
	}

	public function tambahdatakelas_aksi()
	{
		$this->form_validation->set_rules('kode_kelas', 'Kode kelas', 'required|trim|is_unique[kelas.kode_kelas]', [
			'is_unique' => 'Kode Kelas sudah tersedia!'
		]);
		$this->form_validation->set_rules('nama_kelas', 'nama kelas', 'required|trim|is_unique[kelas.nama_kelas]', [
			'is_unique' => 'Nama Kelas sudah tersedia!'
		]);
		$this->form_validation->set_rules('th_ajar', 'th ajar', 'required', ['required' => 'Kelas Wajib Diisi!']);
		if ($this->form_validation->run() == False) {
			$this->tambahdatakelas();
		} else {

			$kode_kelas = $this->input->post('kode_kelas');
			$nama_kelas = $this->input->post('nama_kelas');
			$th_ajar = $this->input->post('th_ajar');

			$data = array(
				'kode_kelas'        => $kode_kelas,
				'nama_kelas'        => $nama_kelas,
				'th_ajar'       => $th_ajar
			);

			$this->db->insert('kelas', $data);
			$this->session->set_flashdata(
				'pesan',
				'<div class="alert alert-success alert-dismissible fade show" role="alert"> 
			Data Kelas Berhasil Ditambah! 
			</div>'
			);
			redirect('admin/datakelas');
		}
	}
	public function detailkelas($id_kelas)
	{
		$data['detail'] = $this->M_data->detail_kelas_siswa($id_kelas);
		$data['detailjadwal'] = $this->M_data->detail_jadwal($id_kelas);
		$data['jampel'] = $this->M_data->tampil_jampel('jampel');
		// $data['hari'] = $this->M_data->tampil_hari('hari');
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/detailkelas', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/js');
	}

	public function dkjadwal()
	{
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/dkjadwal');
		$this->load->view('admin/footer');
		$this->load->view('admin/js');
	}
	public function dkabsensi()
	{
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/dkabsensi');
		$this->load->view('admin/footer');
		$this->load->view('admin/js');
	}

	public function tambahakun()
	{
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/tambahakun');
		$this->load->view('admin/footer');
		$this->load->view('admin/js');
	}


	public function akunsiswa()
	{
		$data['usersiswa'] = $this->M_data->get_akunsiswa();
		$data['userguru'] = $this->M_data->get_akunguru();
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/akunsiswa', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/js');
	}
	public function akunguru()
	{
		$data['user'] = $this->M_data->get_akunguru();
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/akunguru', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/js');
	}
	public function mapel()
	{
		$data['mapelipa'] = $this->M_data->get_mapelipa();
		$data['mapelips'] = $this->M_data->get_mapelips();
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/mapel', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/js');
	}

	public function tambahmapel()
	{
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/tambahmapel');
		$this->load->view('admin/footer');
		$this->load->view('admin/js');
	}

	public function tambahmapel_aksi()
	{
		$this->form_validation->set_rules('program', 'program', 'required', ['required' => 'Program Wajib Diisi!']);
		$this->form_validation->set_rules('kode_mapel', 'Kode mapel', 'required|trim|is_unique[mapel.kode_mapel]', [
			'is_unique' => 'Kode mata pelajaran sudah tersedia!'
		]);
		$this->form_validation->set_rules('nama_mapel', 'nama mapel', 'required', ['required' => 'Nama Mata Pelajaran Wajib Diisi!']);
		$this->form_validation->set_rules('semester', 'semester', 'required', ['required' => 'Semester Wajib Diisi!']);
		if ($this->form_validation->run() == False) {
			$this->tambahmapel();
		} else {
			$program = $this->input->post('program');
			$kode_mapel = $this->input->post('kode_mapel');
			$nama_mapel = $this->input->post('nama_mapel');
			$semester = $this->input->post('semester');

			$data = array(
				'program'        => $program,
				'kode_mapel'        => $kode_mapel,
				'nama_mapel'        => $nama_mapel,
				'semester'       => $semester
			);

			$this->db->insert('mapel', $data);
			$this->session->set_flashdata(
				'pesan',
				'<div class="alert alert-success alert-dismissible fade show" role="alert"> 
			Data Mata Pelajaran Berhasil Ditambah! 
			</div>'
			);
			redirect('admin/mapel');
		}
	}

	public function jadwal()
	{
		$data['kelas'] = $this->M_data->tampil_kelas('kelas');
		$data['jampel'] = $this->M_data->tampil_jampel('jampel');
		$this->load->view('admin/jadwal_head');
		$this->load->view('admin/jadwal', $data);
		$this->load->view('admin/jadwal_footer');
		$this->load->view('admin/jadwal_js');
	}

	public function buatjadwal()
	{
		$data['kelas'] = $this->M_data->tampil_kelas('kelas');
		$data['jampel'] = $this->M_data->tampil_jampel('jampel');
		$data['mapel'] = $this->M_data->tampil_mapel('mapel');
		$data['hari'] = $this->M_data->tampil_hari('hari');
		$this->load->view('admin/jadwal_head');
		$this->load->view('admin/buatjadwal', $data);
		$this->load->view('admin/jadwal_footer');
		$this->load->view('admin/jadwal_js');
	}

	public function tambahjadwal_aksi()
	{
		$this->form_validation->set_rules('id_h', 'id_h', 'required', ['required' => 'id_h Wajib Diisi!']);
		if ($this->form_validation->run() == False) {
			$this->buatjadwal();
		} else {

			$id_j        = $this->input->post('id_j');
			$id_h        = $this->input->post('id_h');
			$id_kelas        = $this->input->post('id_kelas');
			$id_mapel        = $this->input->post('id_mapel');

			for ($i = 0; $i < count($id_j); $i++) {
				$data[] = [
					'id_h' => $id_h,
					'id_kelas' => $id_kelas,
					'id_j' => $id_j[$i],
					'id_mapel' => $id_mapel[$i]
				];
			}

			$result = $this->db->insert_batch('jadwal', $data);
			if ($result) {
				$this->session->set_flashdata(
					'pesan',
					'<div class="alert alert-success alert-dismissible fade show" role="alert"> 
			jadwal Berhasil Ditambah! 
			</div>'
				);
				redirect('admin/jadwal');
			} else {
				$this->session->set_flashdata(
					'pesan',
					'<div class="alert alert-warning alert-dismissible fade show" role="alert"> 
			Eror! 
			</div>'
				);
				redirect('admin/buatjadwal');
			}
		}
	}
}
