<?php

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
function ortu_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('username');
    if ($user_session) {
        redirect('ortu');
    }
}
function ortu_not_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('username');
    if (!$user_session) {
        redirect('ortu/log');
    }
}
