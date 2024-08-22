<?php

class Auth_model extends CI_Model
{
	public function check_existing_user($username, $email) {
	    $this->db->where('username', $username);
	    $this->db->or_where('email', $email);
	    $query = $this->db->get('users'); // Ganti 'users' dengan nama tabel yang sesuai

	    return $query->num_rows() > 0; // Mengembalikan true jika ada hasil, false jika tidak
	}

	public function insert_akn($data) {
		$this->db->insert('users', $data);
	}
}