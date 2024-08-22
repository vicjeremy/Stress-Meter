<?php
class Expert_system extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Symptom_model');
        $this->load->model('Rule_model');
    }

    public function index() {
        $data['symptoms'] = $this->Symptom_model->getSymptomByName();
        $this->load->view('diagnose_view', $data);
    }

    public function diagnose() {
        $selected_symptoms = $this->input->post('symptoms');

        // Mendapatkan ID gejala dari nama gejala yang dipilih
        $symptom_ids = array();
        foreach ($selected_symptoms as $symptom_name) {
            $symptom = $this->Symptom_model->getSymptomByName($symptom_name);
            if ($symptom) {
                $symptom_ids[] = $symptom['id'];
            }
        }

        // Memeriksa apakah seseorang mungkin mengalami stres berdasarkan gejala yang dipilih
        $is_stressed = $this->Rule_model->isStressed($symptom_ids);

        if ($is_stressed) {
            echo "Anda mungkin mengalami stres.";
        } else {
            echo "Anda tidak mengalami stres.";
        }
    }
}