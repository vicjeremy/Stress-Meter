<?php
class Rule_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function getRules() {
        // Ambil semua aturan inferensi dari tabel 'rules'
        return $this->db->get('rules')->result_array();
    }
}
