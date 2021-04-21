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

    public function profil()
    {
        $da['siswa'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $dasis['data_siswa'] = $this->M_Siswa->data_siswa();
        $this->load->view('siswa/js');
        $this->load->view('siswa/head');
        $this->load->view('siswa/header', $da);
        $this->load->view('siswa/sidebar');
        $this->load->view('siswa/profil/profil');
    }

    public function profil_siswa()
    {
        $da['siswa'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $dasis['data_siswa'] = $this->M_Siswa->data_siswa();
        $this->load->view('siswa/js');
        $this->load->view('siswa/head');
        $this->load->view('siswa/header', $da);
        $this->load->view('siswa/sidebar');
        $this->load->view('siswa/profil/ubah_profil', $dasis);
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

    public function inPresensi($id)
    {
        $da['siswa'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['mapel'] = $this->M_Siswa->get_class_in($id);
        $this->load->view('siswa/js');
        $this->load->view('siswa/head');
        $this->load->view('siswa/header', $da);
        $this->load->view('siswa/sidebar');
        $this->load->view('siswa/kelas/presensiForm', $data);
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
            redirect('Home/kelas');
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

    //chat

    public function dashboard()
    {
        $da['siswa'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();

        $username = $this->session->userdata('username');
        $id = $this->session->userdata('id_user');
        if (!$username) {
            redirect('home');
        }

        $this->db->where('username !=', $username);
        $data['users'] = $this->db->get('user')->result();
        $data['isread'] = $this->db->query("SELECT isread,chats.to FROM chats WHERE chats.isread=0 AND chats.to=$id GROUP BY isread")->result();

        $this->load->view('siswa/js');
        $this->load->view('siswa/head');
        $this->load->view('siswa/header', $da);
        $this->load->view('siswa/sidebar');
        $this->load->view('chat/dashboard', $data);
    }

    public function chat($to)
    {
        $da['siswa'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $dataUser['users'] = $this->db->get('user')->result();
        $username = $this->session->userdata('username');
        $id = $this->session->userdata('id_user');

        if (!$username) {
            redirect('home');
        }

        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $message = $this->input->post('message');

            $data  = [
                'from' => $id,
                'to' => $to,
                'message' => $message,
                'isread' => 0
            ];

            $this->db->insert('chats', $data);
            redirect('home/chat/' . $to);
        } else {
            $this->db->where_in('from', [$id, $to]);
            $this->db->where_in('to', [$id, $to]);
            $this->db->order_by('created_at', 'ASC');
            $data['to'] = $to;
            $data['chats'] = $this->db->get('chats')->result();

            $this->load->view('siswa/js');
            $this->load->view('siswa/head');
            $this->load->view('siswa/header', $da);
            $this->load->view('siswa/sidebar');
            $this->load->view('chat/chat', $data);
        }
    }

    public function ajax($to)
    {
        $id = $this->session->userdata('id_user');

        $this->db->where_in('from', [$id, $to]);
        $this->db->where_in('to', [$id, $to]);
        $this->db->order_by('created_at', 'ASC');
        $data['to'] = $to;
        $data['chats'] = $this->db->get('chats')->result();

        $result = '<div class="border rounded">';

        foreach ($data['chats'] as $item) {
            if ($item->from == $id) {
                $result .= '<div class="text-right"><span class="mr-2 text-primary" style="font-size:22px;">' . $item->message . '</span><br><span style="font-size:11px;" class="text-secondary mr-2">' . date('d-m-Y H:i:s', strtotime($item->created_at)) . '</span></div>';
            } else {
                $result .= '<div class="text-left"><span class="ml-2" style="font-size:22px;">' . $item->message . '</span><br><span style="font-size:11px;" class="text-secondary ml-2">' . date('d-m-Y H:i:s', strtotime($item->created_at)) . '</span></div>';
            }
        }
        $result .= '</div>';
        echo $result;
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
    }

    public function view($page, $data = [])
    {
        $this->load->view('siswa/header');
        $this->load->view($page, $data);
    }
}
