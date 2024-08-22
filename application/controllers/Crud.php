<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');



	
class Crud extends CI_Controller {
	public function __construct(){
		parent::__construct();
		check_not_login();
		$this->load->model('m_crud');
		//$this->filter('auth');

	}
	
	
	/*function index(){
		check_not_login();
		$rs_data ['result'] = $this->m_crud->get_data();
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('index3', $rs_data);
		
	}*/

	public function index()
    {
        $level = $this->session->userdata('level');

        if ($level == 3) {
            check_not_login();
			$rs_data ['result'] = $this->m_crud->get_data();
			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('index3', $rs_data);
        } elseif($level == 2) {
        	$this->load->view('header');
			$this->load->view('menu');
            $this->load->view('view_dosen');
        }else{
        	$this->load->view('header');
			$this->load->view('menu');
        	$this->load->view('view_admin');
        }
    }

	
	function view(){
		$rs_data ['result'] = $this->m_crud->get_data();
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('view', $rs_data);
	}
	
	public function upload_file(){
		$config['allowed_types'] = 'jpeg|jpg|png';
		$config['upload_path'] = './uploads/';
		$this->load->library('upload', $config);
		
		if ($this->upload->do_upload('foto')) {
			// File berhasil diunggah
			$data = $this->upload->data();
			$file_name = $data['file_name'];

			// Simpan path/lokasi file dalam database
			$this->db->set('foto', './uploads/' . $file_name);
			$this->db->where('nim', $nim);
			$this->db->update('mahasiswa');
		} else {
			// Gagal mengunggah file
			$error = $this->upload->display_errors();
			echo $error;
		}
	}


	
	function add(){
		//$this->load->view('form');
		$data['status_kawin'] = $this->m_crud->get_status_kawin(); // Mengambil data status kawin dari model
		$data['agama'] = $this->m_crud->get_agama(); // Mengambil data agama dari model
		$data['prodi'] = $this->m_crud->get_prodi(); // Mengambil data prodi dari model
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('input', $data); // Mengirimkan data status kawin ke view
	}
	
	function insert() {
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$jk = $this->input->post('jenis_kelamin');
		$tgl = $this->input->post('tanggal_lahir');
		$id_sts = $this->input->post('id_status');
		$id_agm = $this->input->post('id_agama');
		$hobi = $this->input->post('hobi');
		$hobiString = implode(',', $hobi);
		$id_prd = $this->input->post('kode_prodi');
		$semester = $this->input->post('semester');

		// Mendapatkan ID entitas terkait
		$idEntitas = 'foto'; 

		// Mendapatkan ekstensi file foto yang diunggah
		$ext = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);

		// Membuat nama unik dengan menggunakan kombinasi ID entitas dan timestamp
		$namaUnik = $idEntitas . '_' . time() . '.' . $ext;

		// File path untuk menyimpan foto
		$dir = "./uploads/";
		$tmpFile = $_FILES['foto']['tmp_name'];

		// Memindahkan file ke file path yang sudah ditentukan dengan nama unik
		move_uploaded_file($tmpFile, $dir . $namaUnik);

		$params = array(
			'nim' => $nim,
			'nama' => $nama,
			'jenis_kelamin' => $jk,
			'tanggal_lahir' => $tgl,
			'id_status' => $id_sts,
			'id_agama' => $id_agm,
			'hobi' => $hobiString,
			'id_prodi' => $id_prd,
			'semester' => $semester,
			'foto' => $namaUnik
		);

		$this->m_crud->insert($params);
		return redirect('crud/view');
	}

	
	function edit($params = ''){
		$rs_data['result'] = $this->m_crud->edit($params);
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('edit_mhs', $rs_data);
	}
	

	function update() {
    $nim = $this->input->post('nim');
    $nama = $this->input->post('nama');
    $jk = $this->input->post('jenis_kelamin');
    $tgl = $this->input->post('tanggal_lahir');
    $id_sts = $this->input->post('id_status');
    $id_agm = $this->input->post('id_agama');
    $hobi = $this->input->post('hobi');
    $hobiString = implode(',', $hobi);
    $id_prd = $this->input->post('id_prodi');
    $semester = $this->input->post('semester');

    // Cek apakah ada file foto yang diunggah
    if ($_FILES['foto']['name'] !== '') {
        // File upload configuration
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2048;
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        // Menghapus foto lama jika ada
        $oldFoto = $this->m_crud->getFotoByNim($nim);
        if ($oldFoto !== '') {
            $oldFotoPath = './uploads/' . $oldFoto;
            if (file_exists($oldFotoPath)) {
                unlink($oldFotoPath);
            }
        }

        if ($this->upload->do_upload('foto')) {
            $data = $this->upload->data();
            $foto = $data['file_name'];
        } else {
            // Penanganan jika terjadi kesalahan saat mengunggah foto
            $error = $this->upload->display_errors();
            // Gunakan foto default atau beri nilai lain sesuai kebutuhan
            $foto = 'default.jpg';
        }
    } else {
        // Gunakan foto lama jika tidak ada foto yang diunggah
        $foto = $this->m_crud->getFotoByNim($nim);
    }

    $params = array(
        'nim' => $nim,
        'nama' => $nama,
        'jenis_kelamin' => $jk,
        'tanggal_lahir' => $tgl,
        'id_status' => $id_sts,
        'id_agama' => $id_agm,
        'hobi' => $hobiString,
        'id_prodi' => $id_prd,
        'semester' => $semester,
        'foto' => $foto
    );

    $this->m_crud->update($params);

    // Redirect to the list page after updating the data
    redirect('crud/view');
}

	


	function delete($params = ''){
		$this->m_crud->hapus($params);
		return redirect('crud/view');
	}


	/*function input_agama(){
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('input_agama');
	}*/
	
	function view_agama(){
		$data['agama'] = $this->m_crud->get_agama();
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('view_agm', $data);
	}
	
	public function add_agama() {
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('input_agm');
	}
	
	public function save_agama() {
		$nama_agama = $this->input->post('nama_agama');

		$data = array(
			'nama_agama' => $nama_agama
		);

		$this->m_crud->insert_agama($data);
		redirect('crud/view_agm');
	}
	
	public function view_agm(){
		$data['agama'] = $this->m_crud->get_agama();
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('view_agm', $data);
	}
	
	public function edit_agama($id_agama){
		$data['agama'] = $this->m_crud->get_agama_by_id($id_agama);
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('edit_agama', $data);
	}

	public function update_agama(){
		$id_agama = $this->input->post('id_agama');
		$nama_agama = $this->input->post('nama_agama');
		
		$data = array(
			'nama_agama' => $nama_agama
		);
		
		$this->m_crud->update_agama($id_agama, $data);
		
		redirect('crud/view_agm');
	}

	public function delete_agama($id_agama){
		$this->m_crud->delete_agama($id_agama);
		
		redirect('crud/view_agm');
	}
	
	//STATUS
	
	/*public function input_status() {
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('input_status');
	}*/

	public function view_sts() {
		$data['status'] = $this->m_crud->get_status_kawin2();
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('view_sts', $data);
	}

	public function add_status() {
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('input_sts');
	}

	public function save_status() {
		$nama_status = $this->input->post('nama_status');

		$data = array(
			'nama_status' => $nama_status
		);

		$this->m_crud->insert_status($data);
		redirect('crud/view_sts');
	}

	public function edit_status($id_status) {
		$data['status'] = $this->m_crud->get_status_kawin_by_id($id_status);
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('edit_status', $data);
	}

	public function update_status() {
		$id_status = $this->input->post('id_status');
		$nama_status = $this->input->post('nama_status');
		
		$data = array(
			'nama_status' => $nama_status
		);
		
		$this->m_crud->update_status($id_status, $data);
		
		redirect('crud/view_sts');
	}

	public function delete_status($id_status) {
		$this->m_crud->delete_status($id_status);
		
		redirect('crud/view_sts');
	}
	
	//HAK AKSES
	
	public function view_akn() {
		$data['status'] = $this->m_crud->get_akun();
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('view_akun', $data);
	}
	
	public function add_akn() {
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('input_akn');
	}
	
	public function save_akn() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$status = $this->input->post('status');
		$nama = $this->input->post('nama');
		$semester = $this->input->post('semester');
		$email = $this->input->post('email');
		$level = $this->input->post('level');

		$data = array(
			'username' => $username,
			'password' => md5($password),
			'status' => $status,
			'nama' => $nama,
			'semester' => $semester,
			'email' => $email,
			'level' => $level
			
		);

		$this->m_crud->insert_akn($data);
		redirect('crud/view_akn');
	}

	public function edit_akn($id) {
		$data['status'] = $this->m_crud->get_akun_by_id($id);
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('edit_akn', $data);
	}

	public function update_akn() {
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$status = $this->input->post('status');
		$nama = $this->input->post('nama');
		$semester = $this->input->post('semester');
		$email = $this->input->post('email');
		$level = $this->input->post('level');
		
		$data = array(
			'username' => $username,
			'password' => $password,
			'status' => $status,
			'nama' => $nama,
			'semester' => $semester,
			'email' => $email,
			'level' => $level
		);
		
		$this->m_crud->update_akn($id, $data);
		
		redirect('crud/view_akn');
	}

	public function delete_akn($id) {
		$this->m_crud->delete_akn($id);
		
		redirect('crud/view_akn');
	}

	}


