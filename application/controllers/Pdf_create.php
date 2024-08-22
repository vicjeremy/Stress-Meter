<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'libraries/TCPDF/tcpdf.php'; // Mengimpor TCPDF

class Pdf_create extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pdf_model'); // Memuat model
    }

    public function exportToPdf()
    {
        // 1. Dapatkan nama pengguna yang login saat ini
        $user_nama = $this->fungsi->user_login()->nama;

        // 2. Gunakan nama pengguna tersebut sebagai kriteria dalam kueri database
        $this->db->where('nama', $user_nama);
        $query = $this->db->get('tingkat_stres');

        // Mendapatkan data dari database berdasarkan nama pengguna
        $data['result'] = $query->result_array();

        // Memuat pustaka TCPDF
        $pdf = new TCPDF();

        // Mengatur properti dokumen PDF
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Jova');
        $pdf->SetTitle('Diagnosa');
        $pdf->SetSubject('Diagnosa');

        // Menambahkan halaman
        $pdf->AddPage();
// Membuat konten PDF
        $html = '<h1 style="text-align: center;">Tabel Diagnosa</h1><hr>'; 
        $html .= '<table border="1" style="width: 100%; border-collapse: collapse;">'; 
        $html .= '<tr>
                    <th style="padding: 8px; border: 1px solid #000;">No</th>
                    <th style="padding: 8px; border: 1px solid #000;">Nama</th>
                    <th style="padding: 8px; border: 1px solid #000;">Email</th>
                    <th style="padding: 8px; border: 1px solid #000;">Tingkat Stress</th>
                    <th style="padding: 8px; border: 1px solid #000;">Diagnosa</th>
                  </tr>';
        $no = 1; // inisialisasi nomor urut
        foreach ($data['result'] as $value) {
            $html .= '<tr>
                        <td style="padding: 8px; border: 1px solid #000;">'.$no.'</td>
                        <td style="padding: 8px; border: 1px solid #000;">'.$value['nama'].'</td>
                        <td style="padding: 8px; border: 1px solid #000;">'.$value['email'].'</td>
                        <td style="padding: 8px; border: 1px solid #000;">'.$value['rata_rata_skor'].'%</td>
                        <td style="padding: 8px; border: 1px solid #000;">'.$value['tingkat_stres'].'</td>
                      </tr>';
        
            $no++; // tambahkan nomor urut setiap kali iterasi
        }
        $html .= '</table>';

        // Menulis konten ke dokumen PDF
        $pdf->writeHTML($html, true, false, true, false, '');

        // Output file PDF ke browser
        $pdf->Output('diagnosa.pdf', 'I');
    }

    public function exportToPdfadm(){
        {
        // Mendapatkan data dari database (misalnya menggunakan model)
        
        $sql = "SELECT id, nama, email, rata_rata_skor, tingkat_stres FROM tingkat_stres";

        $query = $this->db->query($sql);
        $data['result'] = $query->result_array();
        
        //$data['result'] = $this->pdf_model->getData();

        // Memuat pustaka TCPDF
        $pdf = new TCPDF();

        // Mengatur properti dokumen PDF
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Jova');
        $pdf->SetTitle('Diagnosa');
        $pdf->SetSubject('Diagnosa');

        // Menambahkan halaman
        $pdf->AddPage();

        // Membuat konten PDF
        $html = '<h1 style="text-align: center;">Tabel Diagnosa</h1><hr>'; 
        $html .= '<table border="1" style="width: 100%; border-collapse: collapse;">'; 
        $html .= '<tr>
                    <th style="padding: 8px; border: 1px solid #000;">No</th>
                    <th style="padding: 8px; border: 1px solid #000;">Nama</th>
                    <th style="padding: 8px; border: 1px solid #000;">Email</th>
                    <th style="padding: 8px; border: 1px solid #000;">Tingkat Stress</th>
                    <th style="padding: 8px; border: 1px solid #000;">Diagnosa</th>
                  </tr>';
        $no = 1; // inisialisasi nomor urut
        foreach ($data['result'] as $value) {
            $html .= '<tr>
                        <td style="padding: 8px; border: 1px solid #000;">'.$no.'</td>
                        <td style="padding: 8px; border: 1px solid #000;">'.$value['nama'].'</td>
                        <td style="padding: 8px; border: 1px solid #000;">'.$value['email'].'</td>
                        <td style="padding: 8px; border: 1px solid #000;">'.$value['rata_rata_skor'].'%</td>
                        <td style="padding: 8px; border: 1px solid #000;">'.$value['tingkat_stres'].'</td>
                      </tr>';
            $no++; // tambahkan nomor urut setiap kali iterasi
        }
        $html .= '</table>';

        

        // Menulis konten ke dokumen PDF
        $pdf->writeHTML($html, true, false, true, false, '');

        // Output file PDF ke browser
        $pdf->Output('diagnosa.pdf', 'I');
    }
    }

}
