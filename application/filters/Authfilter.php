<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthFilter {

    protected $CI;

    public function __construct() {
        $this->CI =& get_instance();
        $this->CI->load->library('session');
        $this->CI->load->helper('url');

        // Periksa apakah pengguna sudah login, jika tidak, redirect ke halaman login
        if (!$this->CI->session->userdata('user_id')) {
            redirect('auth/login');
        }
    }

}
