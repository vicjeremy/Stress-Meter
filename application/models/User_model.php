<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {


	public function register($data) {
        return $this->db->insert('users', $data);
    }

    public function get_user($username) {
        $query = $this->db->get_where('users', array('username' => $username));
        return $query->row_array();
    }

	public function login($post)
	{
		$pass=$_POST['password'];
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('username', $post['username']);
		$this->db->where('password', md5($post['password']));
		//$this->db->where('password', sha1[$pass]); 
		$query = $this->db->get();
		return $query;
	}
	
	public function get($id = null)
	{
		$this->db->from('users');
		if($id != null){
			$this->db->where('id', $id);
		}
		$query = $this->db->get();
		return $query;
	}
	
	public function get_user_by_id($user_id) {
		// Lakukan query ke database untuk mendapatkan informasi pengguna berdasarkan ID
		$query = $this->db->get_where('users', array('id' => $user_id));

		// Periksa apakah pengguna ditemukan
		if ($query->num_rows() > 0) {
			return $query->row_array(); // Mengembalikan data pengguna dalam bentuk array
		} else {
			return false; // Jika pengguna tidak ditemukan, kembalikan false
		}
	}

	public function save_reset_token($email, $token) {
        // Update kolom reset_token di dalam tabel users berdasarkan email
        $this->db->where('email', $email);
        $this->db->update('users', array('reset_token' => $token));
    }

	public function get_user_by_token($token) {
        // Query ke database untuk mendapatkan data pengguna berdasarkan token
        $query = $this->db->get_where('users', array('reset_token' => $token));

        return $query->row();
    }
    
    public function update_password($user_id, $password) {
        // Update password pengguna berdasarkan user_id
        $this->db->where('id', $user_id);
        $this->db->update('users', array('password' => $password));
    }
}







