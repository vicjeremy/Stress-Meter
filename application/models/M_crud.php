<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');
	
class M_crud extends CI_Model{

function __construct(){
	parent::__construct();
	
	}
	
	function index() {
	
	}
	
	function get_data(){
		#$sql = "SELECT nim, nama, jenis_kelamin, tanggal_lahir, id_status, id_agama, hobi, foto FROM mahasiswa";
		#$sql= "SELECT a.*,b.nama_agama from mahasiswa a JOIN agama b ON a.id_agama=b.id_agama";
		#$sql = "SELECT a.*, b.nama_agama, c.nama_status FROM mahasiswa a JOIN agama b ON a.id_agama = b.id_agama JOIN status_kawin c ON a.id_status = c.id_status JOIN prodi d ON a.id_prodi = d.id_prodi";
		$sql = "SELECT a.*, b.nama_agama, c.nama_status, d.nama_prodi FROM mahasiswa a JOIN agama b ON a.id_agama = b.id_agama JOIN status_kawin c ON a.id_status = c.id_status JOIN prodi d ON a.id_prodi = d.id_prodi";


		$query = $this->db->query($sql);
		if ($query->num_rows()>0){
			$result = $query->result_array();
			$query->free_result();
			return $result;
		}else{
			return array();
		}
	}
	
	// Fungsi untuk mengambil data status kawin dari tabel status_kawin
    function get_status_kawin() {
		$sql = "SELECT id_status, nama_status FROM status_kawin";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
			$result = $query->result_array();
			$query->free_result();
			return $result;
		} else {
			return array();
		}
	}
	
    // Fungsi untuk mengambil data agama dari tabel agama
    function get_agama() {
		$sql = "SELECT id_agama, nama_agama FROM agama";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
			$result = $query->result_array();
			$query->free_result();
			return $result;
		} else {
			return array();
		}
	}

	function get_prodi() {
		$sql = "SELECT id_prodi, nama_prodi FROM prodi";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
			$result = $query->result_array();
			$query->free_result();
			return $result;
		} else {
			return array();
		}
	}

	
	function insert($params = '') {
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

		// Mendapatkan ID entitas terkait (misalnya, ID mahasiswa)
		$idEntitas = 'foto'; // Ganti dengan ID entitas yang sesuai

		// Mendapatkan ekstensi file foto yang diunggah
		$ext = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);

		// Membuat nama unik dengan menggunakan kombinasi ID entitas dan timestamp
		$namaUnik = $idEntitas . '_' . time() . '.' . $ext;

		// File path untuk menyimpan foto
		$dir = "./uploads/";
		$tmpFile = $_FILES['foto']['tmp_name'];

		// Memindahkan file ke file path yang sudah ditentukan dengan nama unik
		move_uploaded_file($tmpFile, $dir . $namaUnik);

		$sql = "INSERT INTO mahasiswa (nim, nama, jenis_kelamin, tanggal_lahir, id_status, id_agama, hobi, id_prodi, semester, foto)
				VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$params = array(
			$nim,
			$nama,
			$jk,
			$tgl,
			$id_sts,
			$id_agm,
			$hobiString,
			$id_prd,
			$semester,
			$namaUnik
		);

		$this->db->query($sql, $params);

		// Ambil nama status berdasarkan ID status
		$statusQuery = $this->db->get_where('status_kawin', array('id_status' => $id_sts));
		$statusRow = $statusQuery->row_array();
		$namaStatus = $statusRow['nama_status'];

		// Ambil nama agama berdasarkan ID agama
		$agamaQuery = $this->db->get_where('agama', array('id_agama' => $id_agm));
		$agamaRow = $agamaQuery->row_array();
		$namaAgama = $agamaRow['nama_agama'];

		// Ambil nama prodi berdasarkan ID prodi
		$prodiQuery = $this->db->get_where('prodi', array('id_prodi' => $id_prd));
		$prodiRow = $prodiQuery->row_array();
		$namaprodi = $prodiRow['nama_prodi'];

		$result = array(
			'nim' => $nim,
			'nama' => $nama,
			'jenis_kelamin' => $jk,
			'tanggal_lahir' => $tgl,
			'id_status' => $namaStatus,
			'id_agama' => $namaAgama,
			'hobi' => $hobiString,
			'id_prodi' => $namaprodi,
			'semester' => $semester,
			'foto' => $namaUnik
		);

		return $result;
	}
	
	function insert_agm($params = '') {
		$id_agm = $this->input->post('id_agama');
		$nm_agm = $this->input->post('nama_agama');
		
		$sql = "INSERT INTO agama (id_agama, nama_agama)
				VALUES (?, ?)";

		$params = array(
			$id_agm,
			$nm_agm,
		);

		$this->db->query($sql, $params);

		$result = array(
			'id_agama' => $id_agm,
			'nama_agama' => $nm_agm,
		);

		return $result;
	}

	
	
	function edit($params) {
		// Memanggil fungsi get_agama untuk mendapatkan data agama
		$agamaOptions = $this->get_agama();
		$statusOptions = $this->get_status_kawin();
		$prodiOptions = $this->get_prodi();

		$sql = "SELECT * FROM mahasiswa WHERE nim = ?";
		$query = $this->db->query($sql, $params);
		if ($query->num_rows() > 0) {
			$result = $query->row_array();
			$query->free_result();

			// Pecah string hobby menjadi array
			$result['hobi'] = explode(',', $result['hobi']);

			// Simpan data Agama dalam array $result
			$result['agama_options'] = $agamaOptions;
			$result['status_options'] = $statusOptions;
			$result['prodi_options'] = $prodiOptions;

			// Menyimpan foto kedalam result
			$result['foto'] = (!empty($result['foto'])) ? $result['foto'] : '';
			
			// Mengambil file foto dan disimpan kedalam result
			$result['foto_path'] = (!empty($result['foto'])) ? base_url('./uploads/' . $result['foto']) : '';

			// Simpan Foto lama kedalam result
			$result['old_foto'] = $result['foto'];

			// Mengambil File foto jika memang ada
			if (!empty($result['foto'])) {
				$fileDir = 'uploads/';
				$filePath = $fileDir . $result['foto'];

				// Cek jika file ada
				if (file_exists($filePath)) {
					$result['foto_data'] = [
						'name' => $result['foto'],
						'path' => $filePath
					];
				} else {
					// Jika file tidak ditemukan, set foto_data menjadi null
					$result['foto_data'] = null;
				}
			} else {
				// Jika tidak ada foto, set foto_data menjadi null
				$result['foto_data'] = null;
			}

			return $result;
		} else {
			return array();
		}
	}


	
	function update($params) {
		$nim = $params['nim'];
		$nama = $params['nama'];
		$jk = $params['jenis_kelamin'];
		$tgl = $params['tanggal_lahir'];
		$id_sts = $params['id_status'];
		$id_agm = $params['id_agama'];
		$hobi = $params['hobi'];
		$hobiString = implode(',', $hobi);
		$id_prd = $params['id_prodi'];
		$semester = $params['semester'];

		// Mendapatkan ID entitas terkait (misalnya, ID mahasiswa)
		$idEntitas = 'foto'; // Ganti dengan ID entitas yang sesuai, misalnya $nim

		// Mendapatkan nilai default untuk foto dan hobi
		$oldFoto = $params['old_foto'];
		$foto = (!empty($params['foto'])) ? $params['foto'] : $oldFoto;
		$hobiString = $params['hobi'];

		// Informasi file foto yang diunggah
		$fotoName = $_FILES['foto']['name'];
		$tmpFile = $_FILES['foto']['tmp_name'];

		// Cek apakah ada file foto yang diunggah saat tombol submit diklik
		if (!empty($tmpFile)) {
			// File path untuk menyimpan foto
			$dir = "uploads/";

			// Mendapatkan ekstensi file foto yang diunggah
			$ext = pathinfo($fotoName, PATHINFO_EXTENSION);

			// Membuat nama unik dengan menggunakan kombinasi ID entitas dan timestamp
			$namaUnik = $idEntitas . '_' . time() . '.' . $ext;

			// Memindahkan file ke file path yang sudah ditentukan dengan nama unik
			move_uploaded_file($tmpFile, $dir . $namaUnik);

			// Menghapus foto lama jika ada
			if (!empty($oldFoto)) {
				$oldFile = $dir . $oldFoto;
				if (file_exists($oldFile)) {
					unlink($oldFile);
				}
			}
		} else {
			// Gunakan foto yang sudah ada di database
			$namaUnik = $foto;
		}

		// Update data mahasiswa
		$data = array(
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

		$this->db->where('nim', $nim);
		$this->db->update('mahasiswa', $data);
	}
	
	/*function update($params) {
		$nim = $params['nim'];
		$nama = $params['nama'];
		$jk = $params['jenis_kelamin'];
		$tgl = $params['tanggal_lahir'];
		$id_sts = $params['id_status'];
		$id_agm = $params['id_agama'];
		$hobi = $params['hobi'];
		$hobiString = implode(',', $hobi);

		// Mendapatkan ID entitas terkait (misalnya, ID mahasiswa)
		$idEntitas = 'foto'; // Ganti dengan ID entitas yang sesuai, misalnya $nim

		// Mendapatkan nilai default untuk foto dan hobi
		$oldFoto = $params['old_foto'];
		$foto = (!empty($params['foto'])) ? $params['foto'] : $oldFoto;
		$hobiString = $params['hobi'];

		// Informasi file foto yang diunggah
		$fotoName = $_FILES['foto']['name'];
		$tmpFile = $_FILES['foto']['tmp_name'];

		// Cek apakah ada file foto yang diunggah saat tombol submit diklik
		if (!empty($fotoName)) {
			// File path untuk menyimpan foto
			$dir = "uploads/";

			// Mendapatkan ekstensi file foto yang diunggah
			$ext = pathinfo($fotoName, PATHINFO_EXTENSION);

			// Membuat nama unik dengan menggunakan kombinasi ID entitas dan timestamp
			$namaUnik = $idEntitas . '_' . time() . '.' . $ext;

			// Memindahkan file ke file path yang sudah ditentukan dengan nama unik
			move_uploaded_file($tmpFile, $dir . $namaUnik);

			// Menghapus foto lama jika ada
			if (!empty($oldFoto)) {
				$oldFile = $dir . $oldFoto;
				if (file_exists($oldFile)) {
					unlink($oldFile);
				}
			}
		} else {
			// Gunakan foto yang sudah ada di database
			$namaUnik = $foto;
		}

		// Update data mahasiswa
		$data = array(
			'nama' => $nama,
			'jenis_kelamin' => $jk,
			'tanggal_lahir' => $tgl,
			'id_status' => $id_sts,
			'id_agama' => $id_agm,
			'hobi' => $hobiString,
			'foto' => $foto,
			'old_foto' => $oldFoto
		);

		$this->db->where('nim', $nim);
		$this->db->update('mahasiswa', $data);
	}*/
	
	/*function hapus($params){
		$sql = "DELETE FROM mahasiswa WHERE nim = ? ";
		return $this->db->query($sql, $params);
	}*/
	
	function hapus($params){
		// Mendapatkan data foto sebelum dihapus
		$sql = "SELECT foto FROM mahasiswa WHERE nim = ?";
		$query = $this->db->query($sql, $params);
		$result = $query->row_array();

		// Hapus file foto dari folder uploads jika foto tersedia
		if (!empty($result['foto'])) {
			$file_path = './uploads/' . $result['foto'];
			if (file_exists($file_path)) {
				unlink($file_path);
			}
		}

		// Jalankan perintah DELETE untuk menghapus data dari tabel mahasiswa
		$sql = "DELETE FROM mahasiswa WHERE nim = ?";
		return $this->db->query($sql, $params);
	}


	public function getDataByNim($nim) {
        $this->db->where('nim', $nim);
        $query = $this->db->get('mahasiswa');
        return $query->row_array();
    }
	
	public function getFotoByNim($nim) {
        $this->db->select('foto');
        $this->db->from('mahasiswa'); // Ganti 'nama_tabel' dengan nama tabel yang sesuai
        $this->db->where('nim', $nim);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->foto;
        } else {
            return '';
        }
    }
	
	
	public function insert_agama($data) {
		$this->db->insert('agama', $data); // Ganti 'nama_tabel' dengan nama tabel agama yang sesuai
	}
	
	public function get_agama_by_id($id_agama){
		$this->db->where('id_agama', $id_agama);
		return $this->db->get('agama')->row_array();
	}
	
	public function update_agama($id_agama, $data){
		$this->db->where('id_agama', $id_agama);
		$this->db->update('agama', $data);
	}

	

	public function delete_agama($id_agama){
		$this->db->where('id_agama', $id_agama);
		$this->db->delete('agama');
	}
	
	//STATUS
	
	public function insert_status($data) {
		$this->db->insert('status_kawin', $data);
	}

	public function get_status_kawin2() {
		return $this->db->get('status_kawin')->result_array();
	}

	public function get_status_kawin_by_id($id_status) {
		$this->db->where('id_status', $id_status);
		return $this->db->get('status_kawin')->row_array();
	}

	public function update_status($id_status, $data) {
		$this->db->where('id_status', $id_status);
		$this->db->update('status_kawin', $data);
	}

	public function delete_status($id_status) {
		$this->db->where('id_status', $id_status);
		$this->db->delete('status_kawin');
	}

	public function getAllMahasiswa() {
		$query = $this->db->get('mahasiswa');
		return $query->result_array();
	}
	
	//HAK AKSES
	
	public function insert_akn($data) {
		$this->db->insert('users', $data);
	}
	
	public function get_akun() {
		return $this->db->get('users')->result_array();
	}
	
	public function get_akun_by_id($id) {
		$this->db->where('id', $id);
		return $this->db->get('users')->row_array();
	}
	
	public function update_akn($id, $data) {
		$this->db->where('id', $id);
		$this->db->update('users', $data);
	}
	
	public function delete_akn($id) {
		$this->db->where('id', $id);
		$this->db->delete('users');
	}

	public $table = 'mahasiswa';
	public $id = 'nim';

	public function get_by_id($nim){
		$this->db->where('nim', $nim);
		return $this->db->get($this->table)->row();
	}

	public function get_nama_prodi($id_prodi)
	{
	    $this->db->where('id_prodi', $id_prodi);
	    $query = $this->db->get('prodi');

	    $result = $query->row_array();

	    return $result['nama_prodi'];
	}
	
}
	
