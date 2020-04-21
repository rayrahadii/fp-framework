<?php

Class Fungsi {

    protected $ci;

    function __construct() {
        $this->ci =& get_instance();
    }

    function user_login() {
        $this->ci->load->model('anggota_m');
        $anggota_id = $this->ci->session->userdata('anggotaid');
        $user_data = $this->ci->anggota_m->get($anggota_id)->row();
        return $user_data;
    }

}