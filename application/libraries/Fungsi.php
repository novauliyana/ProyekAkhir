<?php

class Fungsi
{
    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
    }

    function user_login()
    {
        $this->ci->load->model('Ppdb_m');
        $userid = $this->ci->session->userdata('username');
        $user_data = $this->ci->Ppdb_m->get($userid)->row();
        return $user_data;
    }

    function ortu_login()
    {
        $this->ci->load->model('Ortu_m');
        $user = $this->ci->session->userdata('id');
        $user_data = $this->ci->Ortu_m->get($user)->row();
        return $user_data;
    }
}
