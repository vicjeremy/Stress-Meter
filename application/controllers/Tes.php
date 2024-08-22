<?php

class Tes extends CI_Controller{

 public function __construct(){
        parent::__construct();
        check_not_login();
        $this->load->model('Tes_model');
    }

    public function index(){
        $level = $this->session->userdata('level');

        if ($level == 3) {
            check_not_login();
            $this->load->view('header');
            $this->load->view('menu');
            $this->load->view('view_user');
        } elseif($level == 1) {
            $this->load->view('header');
            $this->load->view('menu');
            $this->load->view('view_admin');
        }else{
            //mbuh
        }
    }

    public function tts(){
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('soal1');
    }

    public function vsoal2(){
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('soal2');
    }

    public function vsoal3(){
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('soal3');
    }

    public function vsoal4(){
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('soal4');
    }

    public function vsoal5(){
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('soal5');
    }

    public function vsoal6(){
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('soal6');
    }

    public function vsoal7(){
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('soal7');
    }

    public function vsoal8(){
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('soal8');
    }

    public function vsoal9(){
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('soal9');
    }

    public function vsoal10(){
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('soal10');
    }

    public function vsoal11(){
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('soal11');
    }

    public function vsoal12(){
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('soal12');
    }

    public function vsoal13(){
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('soal13');
    }

    public function vsoal14(){
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('soal14');
    }

    public function vsoal15(){
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('soal15');
    }

    public function soal1() {
        // Mulai session jika belum dimulai
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $jawaban_soal_1 = $this->input->post('jawaban_soal_1');

            if ($jawaban_soal_1 == 'ya') {
                $_SESSION['proses1'] = 1 * 0.4;
                redirect('Tes/vsoal2');
            } else if ($jawaban_soal_1 == 'mungkin') {
                $_SESSION['proses1'] = 0.4 * 0.4;
                redirect('Tes/vsoal2');
            } else if ($jawaban_soal_1 == 'mungkin tidak') {
                $_SESSION['proses1'] = -0.4 * 0.4;
                redirect('Tes/vsoal2');
            } else if ($jawaban_soal_1 == 'tidak') {
                $_SESSION['proses1'] = -1 * 0.4;
                redirect('Tes/vsoal2');
            } else {
                // mbuh
            }
        }
    }

    public function soal2() {
        // Mulai session jika belum dimulai
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $proses1 = isset($_SESSION['proses1']) ? $_SESSION['proses1'] : 0;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $jawaban_soal_2 = $this->input->post('jawaban_soal_2');

            if ($jawaban_soal_2 == 'ya') {
                $_SESSION['proses2'] = 1 * 0.4;
                redirect('Tes/vsoal3');
            } else if ($jawaban_soal_2 == 'mungkin') {
                $_SESSION['proses2'] = 0.4 * 0.4;
                redirect('Tes/vsoal3');
            } else if ($jawaban_soal_2 == 'mungkin tidak') {
                $_SESSION['proses2'] = -0.4 * 0.4;
                redirect('Tes/vsoal3');
            } else if ($jawaban_soal_2 == 'tidak') {
                $_SESSION['proses2'] = -1 * 0.4;
                redirect('Tes/vsoal3');
            } else {
                // mbuh
            }
        }
    }

    public function soal3() {
        // Mulai session jika belum dimulai
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $proses1 = isset($_SESSION['proses1']) ? $_SESSION['proses1'] : 0;
        $proses2 = isset($_SESSION['proses2']) ? $_SESSION['proses2'] : 0;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $jawaban_soal_3 = $this->input->post('jawaban_soal_3');

            if ($jawaban_soal_3 == 'ya') {
                $_SESSION['proses3'] = 1 * 0.4;
                redirect('Tes/vsoal4');
            } else if ($jawaban_soal_3 == 'mungkin') {
                $_SESSION['proses3'] = 0.4 * 0.4;
                redirect('Tes/vsoal4');
            } else if ($jawaban_soal_3 == 'mungkin tidak') {
                $_SESSION['proses3'] = -0.4 * 0.4;
                redirect('Tes/vsoal4');
            }else if ($jawaban_soal_3 == 'tidak') {
                $_SESSION['proses3'] = -1 * 0.4;
                redirect('Tes/vsoal4');           
            } else {
                // mbuh
            }
        }
    }

    public function soal4() {
        // Mulai session jika belum dimulai
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $proses1 = isset($_SESSION['proses1']) ? $_SESSION['proses1'] : 0;
        $proses2 = isset($_SESSION['proses2']) ? $_SESSION['proses2'] : 0;
        $proses3 = isset($_SESSION['proses3']) ? $_SESSION['proses3'] : 0;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $jawaban_soal_4 = $this->input->post('jawaban_soal_4');

            if ($jawaban_soal_4 == 'ya') {
                $_SESSION['proses4'] = 1 * 0.4;
                redirect('Tes/vsoal5');
            } else if ($jawaban_soal_4 == 'mungkin') {
                $_SESSION['proses4'] = -0.5 * 0.4;
                redirect('Tes/vsoal5');
            } else if ($jawaban_soal_4 == 'mungkin tidak') {
                $_SESSION['proses4'] = -0.4 * 0.4;
                redirect('Tes/vsoal5');
            } else if ($jawaban_soal_4 == 'tidak') {
                $_SESSION['proses4'] = -1 * 0.4;
                redirect('Tes/vsoal5');
            } else {
                // mbuh
            }
        }
    }

    public function soal5() {
        // Mulai session jika belum dimulai
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $proses1 = isset($_SESSION['proses1']) ? $_SESSION['proses1'] : 0;
        $proses2 = isset($_SESSION['proses2']) ? $_SESSION['proses2'] : 0;
        $proses3 = isset($_SESSION['proses3']) ? $_SESSION['proses3'] : 0;
        $proses4 = isset($_SESSION['proses4']) ? $_SESSION['proses4'] : 0;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $jawaban_soal_5 = $this->input->post('jawaban_soal_5');

            if ($jawaban_soal_5 == 'ya') {
                $_SESSION['proses5'] = 1 * 0.4;
                redirect('Tes/vsoal6');
            } else if ($jawaban_soal_5 == 'mungkin') {
                $_SESSION['proses5'] = 0.4 * 0.4;
                redirect('Tes/vsoal6');
            } else if ($jawaban_soal_5 == 'mungkin tidak') {
                $_SESSION['proses5'] = -0.4 * 0.4;
                redirect('Tes/vsoal6');
            } else if ($jawaban_soal_5 == 'tidak') {
                $_SESSION['proses5'] = -1 * 0.4;
                redirect('Tes/vsoal6');
            } else {
                // mbuh
            }
        }
    }

    public function soal6() {
        // Mulai session jika belum dimulai
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $proses1 = isset($_SESSION['proses1']) ? $_SESSION['proses1'] : 0;
        $proses2 = isset($_SESSION['proses2']) ? $_SESSION['proses2'] : 0;
        $proses3 = isset($_SESSION['proses3']) ? $_SESSION['proses3'] : 0;
        $proses4 = isset($_SESSION['proses4']) ? $_SESSION['proses4'] : 0;
        $proses5 = isset($_SESSION['proses5']) ? $_SESSION['proses5'] : 0;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $jawaban_soal_6 = $this->input->post('jawaban_soal_6');

            if ($jawaban_soal_6 == 'ya') {
                $_SESSION['proses6'] = 1 * 0.6;
                redirect('Tes/vsoal7');
            } else if ($jawaban_soal_6 == 'mungkin') {
                $_SESSION['proses6'] = 0.4 * 0.6;
                redirect('Tes/vsoal7');
            } else if ($jawaban_soal_6 == 'mungkin tidak') {
                $_SESSION['proses6'] = -0.4 * 0.6;
                redirect('Tes/vsoal7');
            } else if ($jawaban_soal_6 == 'tidak') {
                $_SESSION['proses6'] = -1 * 0.6;
                redirect('Tes/vsoal7');  
            } else {
                // mbuh
            }
        }
    }

    public function soal7() {
        // Mulai session jika belum dimulai
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $proses1 = isset($_SESSION['proses1']) ? $_SESSION['proses1'] : 0;
        $proses2 = isset($_SESSION['proses2']) ? $_SESSION['proses2'] : 0;
        $proses3 = isset($_SESSION['proses3']) ? $_SESSION['proses3'] : 0;
        $proses4 = isset($_SESSION['proses4']) ? $_SESSION['proses4'] : 0;
        $proses5 = isset($_SESSION['proses5']) ? $_SESSION['proses5'] : 0;
        $proses6 = isset($_SESSION['proses6']) ? $_SESSION['proses6'] : 0;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $jawaban_soal_7 = $this->input->post('jawaban_soal_7');

            if ($jawaban_soal_7 == 'ya') {
                $_SESSION['proses7'] = 1 * 0.6;
                redirect('Tes/vsoal8');
            } else if ($jawaban_soal_7 == 'mungkin') {
                $_SESSION['proses7'] = 0.4 * 0.6;
                redirect('Tes/vsoal8');
            } else if ($jawaban_soal_7 == 'mungkin tidak') {
                $_SESSION['proses7'] = -0.4 * 0.6;
                redirect('Tes/vsoal8');
            } else if ($jawaban_soal_7 == 'tidak') {
                $_SESSION['proses7'] = -1 * 0.6;
                redirect('Tes/vsoal8');
            } else {
                // mbuh
            }
        }
    }

    public function soal8() {
        // Mulai session jika belum dimulai
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $proses1 = isset($_SESSION['proses1']) ? $_SESSION['proses1'] : 0;
        $proses2 = isset($_SESSION['proses2']) ? $_SESSION['proses2'] : 0;
        $proses3 = isset($_SESSION['proses3']) ? $_SESSION['proses3'] : 0;
        $proses4 = isset($_SESSION['proses4']) ? $_SESSION['proses4'] : 0;
        $proses5 = isset($_SESSION['proses5']) ? $_SESSION['proses5'] : 0;
        $proses6 = isset($_SESSION['proses6']) ? $_SESSION['proses6'] : 0;
        $proses7 = isset($_SESSION['proses7']) ? $_SESSION['proses7'] : 0;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $jawaban_soal_8 = $this->input->post('jawaban_soal_8');

            if ($jawaban_soal_8 == 'ya') {
                $_SESSION['proses8'] = 1 * 0.6;
                redirect('Tes/vsoal9');
            } else if ($jawaban_soal_8 == 'mungkin') {
                $_SESSION['proses8'] = 0.4 * 0.6;
                redirect('Tes/vsoal9');
            } else if ($jawaban_soal_8 == 'mungkin tidak') {
                $_SESSION['proses8'] = -0.4 * 0.6;
                redirect('Tes/vsoal9');
            } else if ($jawaban_soal_8 == 'tidak') {
                $_SESSION['proses8'] = -1 * 0.6;
                redirect('Tes/vsoal9');
            } else {
                // mbuh
            }
        }
    }

    public function soal9() {
        // Mulai session jika belum dimulai
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $proses1 = isset($_SESSION['proses1']) ? $_SESSION['proses1'] : 0;
        $proses2 = isset($_SESSION['proses2']) ? $_SESSION['proses2'] : 0;
        $proses3 = isset($_SESSION['proses3']) ? $_SESSION['proses3'] : 0;
        $proses4 = isset($_SESSION['proses4']) ? $_SESSION['proses4'] : 0;
        $proses5 = isset($_SESSION['proses5']) ? $_SESSION['proses5'] : 0;
        $proses6 = isset($_SESSION['proses6']) ? $_SESSION['proses6'] : 0;
        $proses7 = isset($_SESSION['proses7']) ? $_SESSION['proses7'] : 0;
        $proses8 = isset($_SESSION['proses8']) ? $_SESSION['proses8'] : 0;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $jawaban_soal_9 = $this->input->post('jawaban_soal_9');

            if ($jawaban_soal_9 == 'ya') {
                $_SESSION['proses9'] = 1 * 0.6;
                redirect('Tes/vsoal10');
            } else if ($jawaban_soal_9 == 'mungkin') {
                $_SESSION['proses9'] = 0.4 * 0.6;
                redirect('Tes/vsoal10');
            } else if ($jawaban_soal_9 == 'mungkin tidak') {
                $_SESSION['proses9'] = -0.4 * 0.6;
                redirect('Tes/vsoal10');
            } else if ($jawaban_soal_9 == 'tidak') {
                $_SESSION['proses9'] = -1 * 0.6;
                redirect('Tes/vsoal10');
            } else {
                // mbuh
            }
        }
    }

    public function soal10() {
        // Mulai session jika belum dimulai
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $proses1 = isset($_SESSION['proses1']) ? $_SESSION['proses1'] : 0;
        $proses2 = isset($_SESSION['proses2']) ? $_SESSION['proses2'] : 0;
        $proses3 = isset($_SESSION['proses3']) ? $_SESSION['proses3'] : 0;
        $proses4 = isset($_SESSION['proses4']) ? $_SESSION['proses4'] : 0;
        $proses5 = isset($_SESSION['proses5']) ? $_SESSION['proses5'] : 0;
        $proses6 = isset($_SESSION['proses6']) ? $_SESSION['proses6'] : 0;
        $proses7 = isset($_SESSION['proses7']) ? $_SESSION['proses7'] : 0;
        $proses8 = isset($_SESSION['proses8']) ? $_SESSION['proses8'] : 0;
        $proses9 = isset($_SESSION['proses9']) ? $_SESSION['proses9'] : 0;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $jawaban_soal_10 = $this->input->post('jawaban_soal_10');

            if ($jawaban_soal_10 == 'ya') {
                $_SESSION['proses10'] = 1 * 0.6;
                redirect('Tes/vsoal11');
            } else if ($jawaban_soal_10 == 'mungkin') {
                $_SESSION['proses10'] = 0.4 * 0.6;
                redirect('Tes/vsoal11');
            } else if ($jawaban_soal_10 == 'mungkin tidak') {
                $_SESSION['proses10'] = -0.4 * 0.6;
                redirect('Tes/vsoal11');
            } else if ($jawaban_soal_10 == 'tidak') {
                $_SESSION['proses10'] = -1 * 0.6;
                redirect('Tes/vsoal11');
            } else {
                // mbuh
            }
        }
    }

    public function soal11() {
        // Mulai session jika belum dimulai
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $proses1 = isset($_SESSION['proses1']) ? $_SESSION['proses1'] : 0;
        $proses2 = isset($_SESSION['proses2']) ? $_SESSION['proses2'] : 0;
        $proses3 = isset($_SESSION['proses3']) ? $_SESSION['proses3'] : 0;
        $proses4 = isset($_SESSION['proses4']) ? $_SESSION['proses4'] : 0;
        $proses5 = isset($_SESSION['proses5']) ? $_SESSION['proses5'] : 0;
        $proses6 = isset($_SESSION['proses6']) ? $_SESSION['proses6'] : 0;
        $proses7 = isset($_SESSION['proses7']) ? $_SESSION['proses7'] : 0;
        $proses8 = isset($_SESSION['proses8']) ? $_SESSION['proses8'] : 0;
        $proses9 = isset($_SESSION['proses9']) ? $_SESSION['proses9'] : 0;
        $proses10 = isset($_SESSION['proses10']) ? $_SESSION['proses10'] : 0;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $jawaban_soal_11 = $this->input->post('jawaban_soal_11');

            if ($jawaban_soal_11 == 'ya') {
                $_SESSION['proses11'] = 1 * 0.8;
                redirect('Tes/vsoal12');
            } else if ($jawaban_soal_11 == 'mungkin') {
                $_SESSION['proses11'] = 0.4 * 0.8;
                redirect('Tes/vsoal12');
            } else if ($jawaban_soal_11 == 'mungkin tidak') {
                $_SESSION['proses11'] = -0.4 * 0.8;
                redirect('Tes/vsoal12');
            } else if ($jawaban_soal_11 == 'tidak') {
                $_SESSION['proses11'] = -1 * 0.8;
                redirect('Tes/vsoal12');
            } else {
                // mbuh
            }
        }
    }

    public function soal12() {
        // Mulai session jika belum dimulai
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $proses1 = isset($_SESSION['proses1']) ? $_SESSION['proses1'] : 0;
        $proses2 = isset($_SESSION['proses2']) ? $_SESSION['proses2'] : 0;
        $proses3 = isset($_SESSION['proses3']) ? $_SESSION['proses3'] : 0;
        $proses4 = isset($_SESSION['proses4']) ? $_SESSION['proses4'] : 0;
        $proses5 = isset($_SESSION['proses5']) ? $_SESSION['proses5'] : 0;
        $proses6 = isset($_SESSION['proses6']) ? $_SESSION['proses6'] : 0;
        $proses7 = isset($_SESSION['proses7']) ? $_SESSION['proses7'] : 0;
        $proses8 = isset($_SESSION['proses8']) ? $_SESSION['proses8'] : 0;
        $proses9 = isset($_SESSION['proses9']) ? $_SESSION['proses9'] : 0;
        $proses10 = isset($_SESSION['proses10']) ? $_SESSION['proses10'] : 0;
        $proses11 = isset($_SESSION['proses11']) ? $_SESSION['proses11'] : 0;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $jawaban_soal_12 = $this->input->post('jawaban_soal_12');

            if ($jawaban_soal_12 == 'ya') {
                $_SESSION['proses12'] = 1 * 0.8;
                redirect('Tes/vsoal13');
            } else if ($jawaban_soal_12 == 'mungkin') {
                $_SESSION['proses12'] = 0.4 * 0.8;
                redirect('Tes/vsoal13');
            } else if ($jawaban_soal_12 == 'mungkin tidak') {
                $_SESSION['proses12'] = -0.4 * 0.8;
                redirect('Tes/vsoal13');
            } else if ($jawaban_soal_12 == 'tidak') {
                $_SESSION['proses12'] = -1 * 0.8;
                redirect('Tes/vsoal13');
            } else {
                // mbuh
            }
        }
    }

    public function soal13() {
        // Mulai session jika belum dimulai
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $proses1 = isset($_SESSION['proses1']) ? $_SESSION['proses1'] : 0;
        $proses2 = isset($_SESSION['proses2']) ? $_SESSION['proses2'] : 0;
        $proses3 = isset($_SESSION['proses3']) ? $_SESSION['proses3'] : 0;
        $proses4 = isset($_SESSION['proses4']) ? $_SESSION['proses4'] : 0;
        $proses5 = isset($_SESSION['proses5']) ? $_SESSION['proses5'] : 0;
        $proses6 = isset($_SESSION['proses6']) ? $_SESSION['proses6'] : 0;
        $proses7 = isset($_SESSION['proses7']) ? $_SESSION['proses7'] : 0;
        $proses8 = isset($_SESSION['proses8']) ? $_SESSION['proses8'] : 0;
        $proses9 = isset($_SESSION['proses9']) ? $_SESSION['proses9'] : 0;
        $proses10 = isset($_SESSION['proses10']) ? $_SESSION['proses10'] : 0;
        $proses11 = isset($_SESSION['proses11']) ? $_SESSION['proses11'] : 0;
        $proses12 = isset($_SESSION['proses12']) ? $_SESSION['proses12'] : 0;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $jawaban_soal_13 = $this->input->post('jawaban_soal_13');

            if ($jawaban_soal_13 == 'ya') {
                $_SESSION['proses13'] = 1 * 0.8;
                redirect('Tes/vsoal14');
            } else if ($jawaban_soal_13 == 'mungkin') {
                $_SESSION['proses13'] = 0.4 * 0.8;
                redirect('Tes/vsoal14');
            } else if ($jawaban_soal_13 == 'mungkin tidak') {
                $_SESSION['proses13'] = -0.4 * 0.8;
                redirect('Tes/vsoal14');
            } else if ($jawaban_soal_13 == 'tidak') {
                $_SESSION['proses13'] = -1 * 0.8;
                redirect('Tes/vsoal14');
            } else {
                // mbuh
            }
        }
    }

    public function soal14() {
        // Mulai session jika belum dimulai
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $proses1 = isset($_SESSION['proses1']) ? $_SESSION['proses1'] : 0;
        $proses2 = isset($_SESSION['proses2']) ? $_SESSION['proses2'] : 0;
        $proses3 = isset($_SESSION['proses3']) ? $_SESSION['proses3'] : 0;
        $proses4 = isset($_SESSION['proses4']) ? $_SESSION['proses4'] : 0;
        $proses5 = isset($_SESSION['proses5']) ? $_SESSION['proses5'] : 0;
        $proses6 = isset($_SESSION['proses6']) ? $_SESSION['proses6'] : 0;
        $proses7 = isset($_SESSION['proses7']) ? $_SESSION['proses7'] : 0;
        $proses8 = isset($_SESSION['proses8']) ? $_SESSION['proses8'] : 0;
        $proses9 = isset($_SESSION['proses9']) ? $_SESSION['proses9'] : 0;
        $proses10 = isset($_SESSION['proses10']) ? $_SESSION['proses10'] : 0;
        $proses11 = isset($_SESSION['proses11']) ? $_SESSION['proses11'] : 0;
        $proses12 = isset($_SESSION['proses12']) ? $_SESSION['proses12'] : 0;
        $proses13 = isset($_SESSION['proses13']) ? $_SESSION['proses13'] : 0;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $jawaban_soal_14 = $this->input->post('jawaban_soal_14');

            if ($jawaban_soal_14 == 'ya') {
                $_SESSION['proses14'] = 1 * 0.8;
                redirect('Tes/vsoal15');
            } else if ($jawaban_soal_14 == 'mungkin') {
                $_SESSION['proses14'] = 0.4 * 0.8;
                redirect('Tes/vsoal15');
            } else if ($jawaban_soal_14 == 'mungkin tidak') {
                $_SESSION['proses14'] = -0.4 * 0.8;
                redirect('Tes/vsoal15');
            } else if ($jawaban_soal_14 == 'tidak') {
                $_SESSION['proses14'] = -1 * 0.8;
                redirect('Tes/vsoal15');
            } else {
                // mbuh
            }
        }
    }

    public function soal15() {
        // Mulai session jika belum dimulai
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $proses1 = isset($_SESSION['proses1']) ? $_SESSION['proses1'] : 0;
        $proses2 = isset($_SESSION['proses2']) ? $_SESSION['proses2'] : 0;
        $proses3 = isset($_SESSION['proses3']) ? $_SESSION['proses3'] : 0;
        $proses4 = isset($_SESSION['proses4']) ? $_SESSION['proses4'] : 0;
        $proses5 = isset($_SESSION['proses5']) ? $_SESSION['proses5'] : 0;
        $proses6 = isset($_SESSION['proses6']) ? $_SESSION['proses6'] : 0;
        $proses7 = isset($_SESSION['proses7']) ? $_SESSION['proses7'] : 0;
        $proses8 = isset($_SESSION['proses8']) ? $_SESSION['proses8'] : 0;
        $proses9 = isset($_SESSION['proses9']) ? $_SESSION['proses9'] : 0;
        $proses10 = isset($_SESSION['proses10']) ? $_SESSION['proses10'] : 0;
        $proses11 = isset($_SESSION['proses11']) ? $_SESSION['proses11'] : 0;
        $proses12 = isset($_SESSION['proses12']) ? $_SESSION['proses12'] : 0;
        $proses13 = isset($_SESSION['proses13']) ? $_SESSION['proses13'] : 0;
        $proses14 = isset($_SESSION['proses14']) ? $_SESSION['proses14'] : 0;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $jawaban_soal_15 = $this->input->post('jawaban_soal_15');

            if ($jawaban_soal_15 == 'ya') {
                $_SESSION['proses15'] = 1 * 0.8;
                redirect('Tes/proses');
            } else if ($jawaban_soal_15 == 'mungkin') {
                $_SESSION['proses15'] = 0.4 * 0.8;
                redirect('Tes/proses');
            } else if ($jawaban_soal_15 == 'mungkin tidak') {
                $_SESSION['proses15'] = -0.4 * 0.8;
                redirect('Tes/proses');
            } else if ($jawaban_soal_15 == 'tidak') {
                $_SESSION['proses15'] = -1 * 0.8;
                redirect('Tes/proses');
            } else {
                // mbuh
            }
        }
    }

    public function proses(){

        // Mengambil nilai-nilai proses dari session
        $proses1 = isset($_SESSION['proses1']) ? $_SESSION['proses1'] : 0;
        $proses2 = isset($_SESSION['proses2']) ? $_SESSION['proses2'] : 0;
        $proses3 = isset($_SESSION['proses3']) ? $_SESSION['proses3'] : 0;
        $proses4 = isset($_SESSION['proses4']) ? $_SESSION['proses4'] : 0;
        $proses5 = isset($_SESSION['proses5']) ? $_SESSION['proses5'] : 0;
        $proses6 = isset($_SESSION['proses6']) ? $_SESSION['proses6'] : 0;
        $proses7 = isset($_SESSION['proses7']) ? $_SESSION['proses7'] : 0;
        $proses8 = isset($_SESSION['proses8']) ? $_SESSION['proses8'] : 0;
        $proses9 = isset($_SESSION['proses9']) ? $_SESSION['proses9'] : 0;
        $proses10 = isset($_SESSION['proses10']) ? $_SESSION['proses10'] : 0;
        $proses11 = isset($_SESSION['proses11']) ? $_SESSION['proses11'] : 0;
        $proses12 = isset($_SESSION['proses12']) ? $_SESSION['proses12'] : 0;
        $proses13 = isset($_SESSION['proses13']) ? $_SESSION['proses13'] : 0;
        $proses14 = isset($_SESSION['proses14']) ? $_SESSION['proses14'] : 0;
        $proses15 = isset($_SESSION['proses15']) ? $_SESSION['proses15'] : 0;

        // Hitung nilai akhir
        $hasil = $proses1 + $proses2 * (1 - $proses1);
        $hasil2 = $hasil + $proses3 * (1 - $hasil);
        $hasil3 = $hasil2 + $proses4 * (1 - $hasil2);
        $hasil4 = $hasil3 + $proses5 * (1 - $hasil3);
        $hasil5 = $hasil4 + $proses6 * (1 - $hasil4);
        $hasil6 = $hasil5 + $proses7 * (1 - $hasil5);
        $hasil7 = $hasil6 + $proses8 * (1 - $hasil6);
        $hasil8 = $hasil7 + $proses9 * (1 - $hasil7);
        $hasil9 = $hasil8 + $proses10 * (1 - $hasil8);
        $hasil10 = $hasil9 + $proses11 * (1 - $hasil9);
        $hasil11 = $hasil10 + $proses12 * (1 - $hasil10);
        $hasil12 = $hasil11 + $proses13 * (1 - $hasil11);
        $hasil13 = $hasil12 + $proses14 * (1 - $hasil12);
        $hasil14 = $hasil13 + $proses15 * (1 - $hasil13);
        $persen = $hasil14 * 100;

        if ($persen < 0) {
            $persen = 0;
        }
        // Tentukan tingkat stres berdasarkan persentase
        if ($persen == 0) {
            $tingkat_stres = 'Tidak Stress';
        } elseif ($persen > 0 && $persen <= 40) {
            $tingkat_stres = 'Stress Ringan';
        } elseif ($persen > 40 && $persen <= 80) {
            $tingkat_stres = 'Stress Sedang';
        } elseif ($persen > 80 && $persen <=100) {
            $tingkat_stres = 'Stress Berat';
        } else {
            $tingkat_stres = 'Tidak Diketahui';
        }

        $nama = ucfirst($this->fungsi->user_login()->nama);
        $email = ucfirst($this->fungsi->user_login()->email);

        $data = array(
            'nama' => $nama,
            'email' => $email,
            'rata_rata_skor' => $persen,
            'tingkat_stres' => $tingkat_stres
        );

        $this->db->insert('tingkat_stres', $data);

        redirect('Tes/hasil');
    }

    // public function hasil(){
    //     $data['tingkat_stres'] = $this->Tes_model->get_hasil();
    //     $this->load->view('header');
    //     $this->load->view('menu');
    //     $this->load->view('hasil', $data);
    // }

    public function hasil(){
        // 1. Dapatkan nama pengguna yang login saat ini
        $user_nama = $this->fungsi->user_login()->nama;

        // 2. Gunakan nama pengguna tersebut sebagai kriteria dalam kueri database
        $this->db->where('nama', $user_nama);
        $query = $this->db->get('tingkat_stres');

        // 3. Tampilkan hasil yang telah disaring
        $data['tingkat_stres'] = $query->result();


        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('hasil', $data);
    }

    public function hasil_admin(){
       // 1. Kueri database untuk mengambil semua data dari tabel tingkat_stres
        $query = $this->db->get('tingkat_stres');

        // 2. Tampilkan hasil yang telah diambil
        $data['tingkat_stres'] = $query->result();

        // 3. Load view untuk menampilkan hasil
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('hasil_adm', $data);
    }

    public function edit_diagnosa($id){
        $data['tingkat_stres'] = $this->Tes_model->get_stress_id($id);
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('edit_adm', $data);
    }

    public function update_adm(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $rata_rata_skor = $this->input->post('rata_rata_skor');
        $tingkat_stres = $this->input->post('tingkat_stres');
        
        $data = array(
            'nama' => $nama,
            'email' => $email,
            'rata_rata_skor' => $rata_rata_skor,
            'tingkat_stres' => $tingkat_stres

        );
        
        $this->Tes_model->update_adm($id, $data);
        
        redirect('Tes/hasil_admin');
    }

    public function delete_diagnosa($id){
        $this->Tes_model->delete_adm($id);
        
        redirect('Tes/hasil_admin');
    }

    public function delete_diagnosa_user($id){
        $this->Tes_model->delete_adm($id);
        
        redirect('Tes/hasil');
    }

    public function diagram_pie()
    {
        check_not_login();
        $data['hasil'] = $this->Tes_model->tingkat_stress();
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('diagram', $data);
    }

    public function view_akn() {
        $data['status'] = $this->Tes_model->get_akun();
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('view_akun', $data);
    }

    public function delete_akn($id) {
        $this->Tes_model->delete_akn($id);
        
        redirect('crud/view_akn');
    }

    public function d_stress() {
         /*// Ambil id pengguna dari sesi
        $id = $this->session->userdata('id');

        // Mengambil rata-rata skor sesuai dengan id pengguna dari model
        $data['rata_rata_skor'] = $this->Tes_model->get_rata_rata_skor_by_user_id($id);
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('diagram_stress', $data);*/

        $user_nama = $this->fungsi->user_login()->nama;
        $this->db->select('rata_rata_skor');
        $this->db->where('nama', $user_nama);
        $query = $this->db->get('tingkat_stres');

        if ($query->num_rows() > 0) {
            $data['rata_rata_skor'] = $query->row()->rata_rata_skor;
        } else {
            $data['rata_rata_skor'] = null;
        }

        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('diagram_stress', $data);
    }
}
