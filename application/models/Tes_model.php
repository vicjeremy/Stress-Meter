<?php

class tes_model extends CI_Model
{
   
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function save_tingkat_stres($data) {
        return $this->db->insert('tingkat_stres', $data);
    }

    public function get_hasil() {
        $sql = "SELECT id, nama, email, rata_rata_skor, tingkat_stres FROM tingkat_stres";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    public function get_stress_id($id){
        $this->db->where('id', $id);
        return $this->db->get('tingkat_stres')->row_array();
    }

    public function update_adm($id, $data){
        $this->db->where('id', $id);
        $this->db->update('tingkat_stres', $data);
    }

    public function delete_adm($id){
        $this->db->where('id', $id);
        $this->db->delete('tingkat_stres');
    }

    public function tingkat_stress()
    {
        $this->db->group_by('tingkat_stres');
        $this->db->select('tingkat_stres');
        $this->db->select("count(*) as total");
        return $this->db->from('tingkat_stres')
          ->get()
          ->result();
    }

    public function get_akun() {
        return $this->db->get('users')->result_array();
    }

    public function delete_akn($id) {
        $this->db->where('id', $id);
        $this->db->delete('users');
    }
    
    public function get_pertanyaan()
    {
        return [
            [
                'pertanyaan' => 'Saya lebih suka menghabiskan waktu sendirian atau bersama orang lain?',
                'jawaban' => ['Bersama orang lain', 'Sendirian']
            ],
            [
                'pertanyaan' => 'Saya lebih suka berbicara atau mendengarkan?',
                'jawaban' => ['Berbicara', 'Mendengarkan']
            ],
            [
                'pertanyaan' => 'Saya lebih suka menjadi pusat perhatian atau berada di latar belakang?',
                'jawaban' => ['Pusat perhatian', 'Latar belakang']
            ],
            [
                'pertanyaan' => 'Saya lebih suka bekerja sendiri atau dalam tim?',
                'jawaban' => ['Bekerja sendiri', 'Bekerja dalam tim']
            ],
            [
                'pertanyaan' => 'Saya lebih suka berada di tempat yang ramai atau sepi?',
                'jawaban' => ['Ramai', 'Sepi']
            ]
        ];
    }
}