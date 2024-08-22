<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		check_already_login();
		$this->load->view('login1');
	}
	
	public function process_login()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])){
			$this->load->model('user_model');
			$query = $this->user_model->login($post);
			if($query->num_rows() > 0){
				$row = $query->row();
				$params = array(
					'id'=>$row->id,
					'level'=>$row->level
				);
				$this->session->set_userdata($params);
				redirect('tes/');
			}else{
				$data['error'] = 'Username atau password salah';
				$this->load->view('login1', $data);
			}
			
		}
	}

	public function add_akn() {
		$this->load->view('register');
	}

	/*public function save_akn() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$status = $this->input->post('status');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$level = $this->input->post('level');

		$data = array(
			'username' => $username,
			'password' => md5($password),
			'status' => $status,
			'nama' => $nama,
			'email' => $email,
			'level' => $level
			
		);

		$this->m_crud->insert_akn($data);
		redirect('tes/');
	}*/

	public function save_akn() {
	    $username = $this->input->post('username');
		$password = $this->input->post('password');
		$status = $this->input->post('status');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$level = $this->input->post('level');

		// Lakukan validasi secara manual
		if (empty($password)) {
		    $error = "Kolom Password harus diisi.";
		} elseif (strlen($password) < 8 || !preg_match('/[A-Z]/', $password)) {
		    $error = "Password minimal harus memiliki 8 karakter dan mengandung setidaknya satu huruf besar.";
		}

		if (isset($error)) {
		    // Jika terdapat error, tampilkan pesan kesalahan dan kembalikan ke halaman registrasi
		    $data['error'] = $error;
		    $this->load->view('register', $data);
		} else {
		    // Cek apakah username atau email sudah ada di database
		    $existing_user = $this->Auth_model->check_existing_user($username, $email);

		    if ($existing_user) {
		        $data['error'] = 'Username atau Email sudah digunakan';
		        $this->load->view('register', $data);
		    } else {
		        // Jika belum ada, simpan data
		        $data = array(
		            'username' => $username,
		            'password' => md5($password),
		            'status' => $status,
		            'nama' => $nama,
		            'email' => $email,
		            'level' => $level
		        );

		        $this->Auth_model->insert_akn($data);
		        redirect('tes/');
		    }
		}

	}

	
	public function logout()
	{
		$params = array('id', 'level');
		$this->session->unset_userdata($params);
		redirect('login');
	}

}
