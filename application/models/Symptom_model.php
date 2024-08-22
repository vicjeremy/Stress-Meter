<?php
class Symptom_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function getSymptomByName($name) {
        return $this->db->get_where('symptoms', array('name' => $name))->row_array();
    }
}