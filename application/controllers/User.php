<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model yang dibutuhkan
        $this->load->model('User_model');
		$this->load->library('session');

    }

    public function profile() {
		check_not_login();
        // Periksa apakah pengguna telah login
        if ($this->session->userdata('user_id')) {
            // Ambil informasi pengguna dari model berdasarkan ID pengguna yang disimpan dalam session
            $user_id = $this->session->userdata('id');
            $user = $this->User_model->get_user_by_id($user_id);

            // Kirim informasi pengguna ke view
            $data['user'] = $user;
			$this->load->view('header');
			$this->load->view('menu');
            $this->load->view('user_profile', $data);
        } else {
            // Pengguna belum login, arahkan ke halaman login atau sesuaikan dengan kebutuhan Anda
            redirect('Auth/login');
        }
    }
	
}
