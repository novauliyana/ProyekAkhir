<?php

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'valid_email' => 'Format email tidak valid',
            'required' => 'Email tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Password tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Login';
            $this->load->view('auth/js');
            $this->load->view('auth/head', $data);
            $this->load->view('auth/login');
        } else {
            $this->login();
        }
    }

    public function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        //jika usernya ada
        if ($user) {
            //jika usernya aktif
            if ($user['is_active'] == 1) {
                //cek password
                if ($password == $user['password']) {
                    $data = [
                        'email' => $user['email'],
                        'username' => $user['username'],
                        'nama' => $user['nama'],
                        'role_id' => $user['role_id'],
                        'image' => $user['image'],
                        'id_user' => $user['id_user']
                    ];
                    $this->session->set_userdata($data);

                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } elseif ($user['role_id'] == 2) {
                        redirect('home');
                    } else {
                        redirect('guru/index');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    <small><b>Password salah!</b></small></div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    <small><b>This email has not been activated !</b></small>
                  </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-dismissible alert-danger">
            <small><b>Email tidak terdaftar!</b></small>
          </div>');
            redirect('auth');
        }
    }

    public function forgotPassword()
    {
        $this->load->view('auth/js');
        $this->load->view('auth/head');
        $this->load->view('auth/forgot');

        //$this->_sendEmail();
    }

    public function kirimEmail()
    {
        $this->_sendEmail();
    }

    private function _sendEmail()
    {
        $password = random_string('numeric', 5);
        $email = $this->input->post('email');

        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'nuliyana81@gmail.com',
            'smtp_pass' => 'Kaniels24',
            'smtp_port' => 465,
            'mail_type' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n",
        ];

        $this->load->library('email', $config);
        $this->email->initialize($config);

        $this->email->from('nuliyana81@gmail.com', 'Admin SMA Prestasi Prima');
        $this->email->to($email);
        $this->email->subject('Konfirmasi Perubahan Password');
        $this->email->message("Password baru anda adalah :  $password");

        if ($this->email->send()) {
            $data2 = array(
                'password'     => $password
            );
            $this->db->where('email', $email);
            $this->db->update('user', $data2);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            <small><b>Password baru anda telah dikirimkan melalui email!</b></small></div>');
            redirect('auth');
            //return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            <small><b>You have been logged out!</b></small></div>');
        redirect('auth');
    }
}
