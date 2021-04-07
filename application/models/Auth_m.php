<?php

class Auth_m extends CI_Model
{

    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
    }

    public function tambah_data($data)
    {
        $this->db->insert('user', $data);
    }

    // public function get($id_ortu = null)
    // {
    //     $this->db->from('user');
    //     if ($id_ortu != null) {
    //         $this->db->where('', $id_ortu);
    //     }
    //     $query = $this->db->get();
    //     return $query;
    // }
    function cek_already_login()
    {
        $ci = &get_instance();
        $user_session = $ci->session->userdata('username');
        if ($user_session) {
            redirect('ppdbhal');
        }
    }
    function cek_not_login()
    {
        $ci = &get_instance();
        $user_session = $ci->session->userdata('username');
        if (!$user_session) {
            redirect('ppdb/log');
        }
    }

    function user_login()
    {
        $userid = $this->ci->session->userdata('username');
        $user_data = $this->ci->Ppdb_m->get($userid)->row();
        return $user_data;
    }

    function change($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
}
