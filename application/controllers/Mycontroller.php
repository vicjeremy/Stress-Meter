<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Dompdf\Dompdf;


class MyController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load library dan model yang diperlukan
        $this->load->library('session');
        $this->load->model('MyModel');
    }

    public function export_pdf() {
        // Ambil data dari model
        $data['result'] = $this->MyModel->getData();

        // Load library Dompdf
        require_once APPPATH . 'libraries/dompdf/autoload.inc.php';

        // Buat objek Dompdf
        $dompdf = new Dompdf();

        // Konten HTML untuk PDF
        $html = $this->load->view('pdf_view', $data, true);

        // Muat konten HTML ke Dompdf
        $dompdf->loadHtml($html);

        // Render PDF
        $dompdf->render();

        // Set nama file PDF yang akan diunduh
        $filename = 'output.pdf';

        // Keluarkan PDF ke browser untuk diunduh
        $dompdf->stream($filename, array('Attachment' => 0));
    }

}
