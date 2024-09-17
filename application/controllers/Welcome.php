<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php';

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;
use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;

class Welcome extends CI_Controller
{

	public function header()
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$this->load->view('master/header');
		} else {
			redirect('/welcome/login', 'refresh');
		}
	}

	public function footer()
	{
		$this->load->view('master/footer');
	}

	public function index()
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			redirect('/welcome/dashboard', 'refresh');
		} else {
			redirect('/welcome/login', 'refresh');
		}
	}

	public function login()
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			redirect('/welcome/dashboard', 'refresh');
		} else {
			$this->load->view('login');
			$this->footer();
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('', 'refresh');
	}

	public function login_proses()
	{
		$id = $this->input->post("uname_id", TRUE);
		$pass = $this->input->post("pass", TRUE);

		$this->form_validation->set_rules('uname_id', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('pass', 'Password', 'trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE) {

			$kembali = 'Pastikan Username Dan Password di Isi Dengan Benar';
			$data = array(
				'text' => $kembali,
				'kode' => 0,
			);
			echo json_encode($data);
		} else {

			$this->load->model('m_login');
			$pass = md5($pass);
			$cek = $this->m_login->cek_user($id, $pass);

			if (count($cek) == 1) { //cek data berdasarkan username & pass

				foreach ($cek as $cek) {
					$username = $cek['username'];
					$password = $cek['password'];
					$role = $cek['role'];
					$user_status = $cek['user_status'];
					//mengambil data(level/hak akses) dari database
				}

				$this->session->set_userdata(array(
					'isLogin'   => TRUE,
					'username'  => $username,
					'role'      => $role,
					'user_status'      => $user_status,
					//set session hak akses
				));

				$kembali = 'Selamat Datang ' . $username;
				$data = array(
					'text' => $kembali,
					'kode' => 1,
				);
				echo json_encode($data);
			} else {

				$kembali = ' Username Dan Password Tidak Ditemukan / Belum aktif';
				$data = array(
					'text' => $kembali,
					'kode' => 0,
				);
				echo json_encode($data);
			}
		}
	}

	public function profile()
	{
		if ($this->session->userdata('role') == 's_a') {
		} elseif ($this->session->userdata('role') == 'prodi') {
		} elseif ($this->session->userdata('role') == 'dosen') {
		} elseif ($this->session->userdata('role') == 'pegawai_baak') {
		} elseif ($this->session->userdata('role') == 'mhs') {
			redirect("mahasiswa/profile");
		}
	}

	public function baak_dashboard()
	{
		$username = $this->session->userdata('username');
		$role = $this->session->userdata('role');

		if ($role and $username) {
			$data_informasi_text = $this->Master_model->master_get(['id' => 1], 'informasi_text');
			$data_informasi_file = $this->db->get('informasi_file')->result_array();
			$data_informasi_gambar = $this->db->get('informasi_gambar')->result_array();

			$this->header();
			$this->load->view('dashboard/baak_dashboard', [
				'data_informasi_text' => $data_informasi_text,
				'data_informasi_file' => $data_informasi_file,
				'data_informasi_gambar' => $data_informasi_gambar
			]);
			$this->footer();
		} else {
			redirect("welcome/logout");
		}
	}

	public function databaak_dashboard_periode()
	{
		$this->load->model('Baak_model');
		$periodes = get_object_vars($this->Baak_model->master_get_set_frs());
		$awal = (substr($periodes['id_periode'], 0, 4) - 2) . '1';
		$count_krs_periode = $this->db->query("CALL count_krs_periode(" . $awal . "," . $periodes['id_periode'] . ")")->result_array();
		$data = $count_krs_periode;
		$periode = array();
		$prodi = array();
		foreach ($data as $v) {
			if (isset($periode[$v['periode']])) {
				// found duplicate
				continue;
			}
			// remember unique item
			$periode[$v['periode']] = $v['periode'];
		}

		foreach ($data as $v) {
			if (isset($periode[$v['name']])) {
				// found duplicate
				continue;
			}
			// remember unique item
			$prodi[$v['name']] = $v['name'];
		}


		$data_periode = array_values($periode);
		$data_prodi = array_values($prodi);
		$chart = array();
		$series = array();

		foreach ($data_prodi as $row1) {
			$chart[$row1] = array();
			foreach ($data_periode as $row2) {
				$chart[$row1][$row2] = 0;
				foreach ($count_krs_periode as $row3) {
					if ($row3['periode'] == $row2 and $row3['name'] == $row1) {
						$chart[$row1][$row2] = (int) $row3['value'];
					}
				}
			}
			$chart[$row1] = array_values($chart[$row1]);
			array_push(
				$series,
				[
					"name" => $row1,
					"type" => 'bar',
					"stack" => 'ad',
					"emphasis" => ['focus' => 'focus'],
					"data" => $chart[$row1]
				]
			);
		}

		echo json_encode([
			'periode' => ($data_periode),
			'prodi' => ($data_prodi),
			'series' => ($series),
		]);
	}

	public function databaak_dashboard()
	{
		$dikti_prodi = $this->Master_model->master_result(['status' => 'A'], 'dikti_prodi');
		$mahasiswa = $this->Master_model->master_result(['status_mahasiswa' => 'aktif'], 'mahasiswa');
		$dosen = $this->Master_model->master_result(['status_pegawai' => 'dosen_tetap', 'nidn !=' => '', 'id_status_aktif' => '1'], 'pegawai');
		$this->load->model('Baak_model');
		$periode = get_object_vars($this->Baak_model->master_get_set_frs());
		$krs = $this->db->query("CALL count_krs(" . $periode['id_periode'] . ")")->result_array();

		echo json_encode([
			'dikti_prodi' => count($dikti_prodi),
			'mahasiswa' => count($mahasiswa),
			'dosen' => count($dosen),
			'periode' => ($periode),
			'krs' => ($krs),
		]);
	}

	public function default_dashboard()
	{
		$username = $this->session->userdata('username');
		$role = $this->session->userdata('role');

		if ($role and $username) {
			$data_informasi_text = $this->Master_model->master_get(['id' => 1], 'informasi_text');
			$data_informasi_file = $this->db->get('informasi_file')->result_array();
			$data_informasi_gambar = $this->db->get('informasi_gambar')->result_array();

			$this->header();
			$this->load->view('dashboard/dashboard', [
				'data_informasi_text' => $data_informasi_text,
				'data_informasi_file' => $data_informasi_file,
				'data_informasi_gambar' => $data_informasi_gambar
			]);
			$this->footer();
		} else {
			redirect("welcome/logout");
		}
	}


	public function dosen_dashboard()
	{
		$username = $this->session->userdata('username');
		$role = $this->session->userdata('role');

		if ($role and $username) {
			$this->load->model('Baak_model');
			$data_informasi_text = $this->Master_model->master_get(['id' => 1], 'informasi_text');
			$data_informasi_file = $this->db->get('informasi_file')->result_array();
			$data_informasi_gambar = $this->db->get('informasi_gambar')->result_array();

			$periode = get_object_vars($this->Baak_model->master_get_set_frs());

			$email = $this->session->userdata('username');
			$dosen_profile = get_object_vars($this->Master_model->master_get(['email' => $email], 'v_dosen'));
			$count = ($this->db->query('select count(mahasiswa_dosen_wali.nim) as total from pegawai join mahasiswa_dosen_wali on mahasiswa_dosen_wali.id_dosen=pegawai.id join mahasiswa on mahasiswa.nim=mahasiswa_dosen_wali.nim where mahasiswa.status_mahasiswa="aktif" and pegawai.email="' . $this->session->userdata('username') . '"')->result());

			$jadwal = ($this->db->query('select count(mata_kuliah_jadwal.id_trx_jadwal) as total from pegawai 
			join mata_kuliah_jadwal on mata_kuliah_jadwal.id_dosen=pegawai.id  where mata_kuliah_jadwal.periode="' . $periode['id_periode'] . '"  and pegawai.email="' . $this->session->userdata('username') . '"')->result());
			// print_r($periode);die();
			$this->header();
			$this->load->view('dashboard/dashboard', [
				'data_informasi_text' => $data_informasi_text,
				'data_informasi_file' => $data_informasi_file,
				'data_informasi_gambar' => $data_informasi_gambar,
				'periode' => $periode,
				'count' => $count[0]->total,
				'jadwal' => $jadwal[0]->total,
				'dosen_profile' => $dosen_profile
			]);
			$this->footer();
		} else {
			redirect("welcome/logout");
		}
	}

	public function dashboard()
	{
		if ($this->session->userdata('role') == 's_a') {
			$this->default_dashboard();
		} elseif ($this->session->userdata('role') == 'prodi') {
			$this->default_dashboard();
		} elseif ($this->session->userdata('role') == 'dosen') {
			$this->dosen_dashboard();
		} elseif ($this->session->userdata('role') == 'pegawai_baak') {
			$this->baak_dashboard();
		} elseif ($this->session->userdata('role') == 'mhs') {
			redirect("mahasiswa/profile/dashboard");
		} else {
			redirect("welcome/logout");
		}
	}




	public function rdd()
	{

		$this->load->model('tabel/rdd_t', 'rdd_tabel');
		$data_master = $this->rdd_tabel->list_rdd_by_role();


		$this->header();
		$this->load->view(
			'master/master_list',
			[
				'data_detail' => $data_master['data_detail'],
				'data_isi' => $data_master['data_isi'],
			]
		);
		$this->footer();
	}

	public function json_list_rdd_by_role()
	{
		$this->load->model('datatable/Rdd_dt', 'rdd_dt');
		header('Content-Type: application/json');
		echo $this->rdd_dt->json_list_rdd_by_role();
	}

	public function arp()
	{

		$this->header();
		$this->load->view(
			'arp',
			['master' => $this->Master_model->master_result([], 'arp')]
		);
		$this->footer();
	}

	public function surat_keterangan_mahasiswa_cuti($uuid){
		$cek = $this->Master_model->master_get(['id_uuid' => $uuid,'status'=>'Accepted'], 'list_mahasiswa_cuti');
		if ($cek) {
			$this->load->model('Baak_model');
			$pengesahan = $this->Master_model->master_get(['id' => 1], 'pengesahan');
			
			$writer = new PngWriter();
			$qrCode = QrCode::create(base_url('welcome/surat_keterangan_mahasiswa_cuti/' . $cek->id_uuid))
				->setEncoding(new Encoding('UTF-8'));
			$result = $writer->write($qrCode);
			$dataUri = $result->getDataUri();
			$mahasiswa = $this->db->query("
				SELECT 
					mahasiswa.nim,
					mahasiswa.nama,
					dikti_prodi.nama_program_studi,
					dikti_prodi.nama_jenjang_pendidikan
				FROM mahasiswa
				JOIN dikti_prodi ON dikti_prodi.kode_program_studi = mahasiswa.kode_prodi
				WHERE mahasiswa.nim = ?
				", [$cek->nim])->row();
			$periode = $this->db->query("
				SELECT * from v_dikti_semester where id_semester = ? ", $cek->periode)->row();
			$this->load->view('surat_keterangan_cuti', [
				'nomer_surat' => $cek->nomer_aktif . '/STMIK/K/I/' . date('Y', strtotime($cek->created_at)),
				'nama' => $mahasiswa->nama,
				'nim' => $mahasiswa->nim,
				'prodi' => $mahasiswa->nama_program_studi,
				'jenjang' => $mahasiswa->nama_jenjang_pendidikan,
				'periode' => $periode->nama_semester,
				'tanggal' => $this->format_indo($cek->created_at),
				'link' => $cek->id_uuid,
				'pengesahan' => $pengesahan,
				'qr_code' => $dataUri,
				'uuid' => $cek->id_uuid
			]);
		}else{
			echo "Data Tidak Ditemukan";
		}
	}

	public function surat_keterangan_mahasiswa_aktif($uuid)
	{
		$cek = $this->Master_model->master_get(['id_uuid' => $uuid], 'list_mahasiswa_aktif');
		if ($cek) {
			// Create QR code
			$this->load->model('Baak_model');
			$pengesahan = $this->Master_model->master_get(['id' => 1], 'pengesahan');
			
			$writer = new PngWriter();
			$qrCode = QrCode::create(base_url('welcome/surat_keterangan_mahasiswa_aktif/' . $cek->id_uuid))
				->setEncoding(new Encoding('UTF-8'));
			$result = $writer->write($qrCode);
			$dataUri = $result->getDataUri();

			$mahasiswa = $this->db->query("
				SELECT 
					mahasiswa.nim,
					mahasiswa.nama,
					dikti_prodi.nama_program_studi,
					dikti_prodi.nama_jenjang_pendidikan
				FROM mahasiswa
				JOIN dikti_prodi ON dikti_prodi.kode_program_studi = mahasiswa.kode_prodi
				WHERE mahasiswa.nim = ?
				", [$cek->nim])->row();

			$semester = $this->db->query("
			SELECT
				v_frs.semester
			FROM v_frs
			where nim = ? and periode LIKE ? ORDER BY id_trx DESC LIMIT 1 
			", [$cek->nim, $cek->periode . '%'])->row();

			$periode = $this->db->query("
			SELECT * from v_dikti_semester where id_semester = ?
			", $cek->periode)->row();


			$this->load->view('surat_keterangan_aktif', [
				'nomer_surat' => $cek->nomer_aktif . '/STMIK/K/I/' . date('Y', strtotime($cek->created_at)),
				'nama' => $mahasiswa->nama,
				'nim' => $mahasiswa->nim,
				'prodi' => $mahasiswa->nama_program_studi,
				'jenjang' => $mahasiswa->nama_jenjang_pendidikan,
				'semester' => $periode->semester,
				'periode' => $periode->nama_semester,
				'tanggal' => $this->format_indo($cek->created_at),
				'link' => $cek->id_uuid,
				'qr_code' => $dataUri,
				'pengesahan' => $pengesahan,
				'uuid' => $cek->id_uuid
			]);
		} else {
			echo "Data Tidak Ditemukan";
		}
	}

	public function download_surat_permohonan_magang($id)
	{
		$where_ = array(
			'id' => $id,
			'nim' => $this->session->userdata('username')
		);
		$cek_ = $this->Master_model->master_get($where_, 'permohonan_magang');

		if ($cek_) {
			if ($cek_->status == '3' || $cek_->status == '0') {
				$text = $this->alert->danger('Tidak bisa unduh surat,status masih validasi atau ditolak');
				$this->session->set_flashdata('message', $text);
				redirect("mahasiswa/magang/dashboard/" . $cek_->periode);
			}

			$nomer_surat = $cek_->nomer_aktif . "/STMIK/K/VIII/" . date('Y', strtotime($cek_->created_at));
			$mahasiswa = $this->db->query("
				SELECT 
					mahasiswa.nim,
					mahasiswa.nama,
					dikti_prodi.nama_program_studi,
					dikti_prodi.nama_jenjang_pendidikan
				FROM mahasiswa
				JOIN dikti_prodi ON dikti_prodi.kode_program_studi = mahasiswa.kode_prodi
				WHERE mahasiswa.nim = ?
				", [$cek_->nim])->row();

			$semester = $this->db->query("
			SELECT
				v_frs.semester
			FROM v_frs
			where nim = ? and periode LIKE ? ORDER BY id_trx DESC LIMIT 1 
			", [$cek_->nim, $cek_->periode . '%'])->row();

			$periode = $this->db->query("
			SELECT * from v_dikti_semester where id_semester = ?
			", $cek_->periode)->row();

			$writer = new PngWriter();
			$qrCode = QrCode::create(base_url('welcome/surat_keterangan_mahasiswa_aktif/' . $cek_->uuid))
				->setEncoding(new Encoding('UTF-8'));
			$result = $writer->write($qrCode);
			$dataUri = $result->getDataUri();

			$this->load->view('mahasiswa/magang/surat_permohonan', [
				'data' => $cek_,
				'nomer_surat' => $nomer_surat,
				'nama' => $mahasiswa->nama,
				'nim' => $mahasiswa->nim,
				'prodi' => $mahasiswa->nama_program_studi,
				'jenjang' => $mahasiswa->nama_jenjang_pendidikan,
				'semester' => $semester->semester,
				'periode' => $periode->nama_semester,
				'tanggal' => $this->format_indo($cek_->created_at),
				'qr_code' => $dataUri,
				'uuid' => $cek_->uuid
			]);
		} else {
			$text = $this->alert->danger('Data Tidak Ditemukan');
			$this->session->set_flashdata('message', $text);
			redirect("mahasiswa/magang/dashboard/" . $cek_->periode);
		}
	}

	function format_indo($date)
	{
		// $qrCode = QrCode::create('Life is too short to be generating QR codes');
		// echo "<img src='" . $qrCode . "'>";
		// die;
		date_default_timezone_set('Asia/Jakarta');
		// Buatlah sebuah array berisikan hari dan bulan
		$Hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
		$Bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

		// Buatlah sebuah pemisahan untuk tahun, bulan, hari, dan waktu
		$tahun = substr($date, 0, 4);
		$bulan = substr($date, 5, 2);
		$tgl = substr($date, 8, 2);
		$waktu = substr($date, 11, 5);
		$hari = date("w", strtotime($date));
		$result = $tgl . " " . $Bulan[(int)$bulan - 1] . " " . $tahun;

		return $result;
	}

	public function surat_kelulusan($uuid)
	{
		$cek = $this->Master_model->master_get(['uuid' => $uuid], 'list_surat_kelulusan');
		if ($cek) {
			// Create QR code
			$writer = new PngWriter();
			$qrCode = QrCode::create(base_url('welcome/surat_keterangan_mahasiswa_aktif/' . $cek->id_uuid))
				->setEncoding(new Encoding('UTF-8'));
			$result = $writer->write($qrCode);
			$dataUri = $result->getDataUri();

			$mahasiswa = $this->db->query(
				"
				SELECT 
					mahasiswa.nim,
					mahasiswa.nama,
					dikti_prodi.nama_program_studi,
					dikti_prodi.nama_jenjang_pendidikan
				FROM mahasiswa
				JOIN dikti_prodi ON dikti_prodi.kode_program_studi = mahasiswa.kode_prodi
				WHERE mahasiswa.nim = ?
				",
				[$cek->nim]
			)->row();
			$data_sidang = $this->Master_model->master_get(['nim' => $cek->nim, 'sidang' => 'ta'], 'v_ta_s1_mhs_sidang');


			$this->load->view('surat_kelulusan', [
				'nomer_surat' => $cek->nomer_aktif . '/STMIK/AK/' . date('Y', strtotime($cek->created_at)),
				'nama' => $mahasiswa->nama,
				'nim' => $mahasiswa->nim,
				'prodi' => $mahasiswa->nama_program_studi,
				'jenjang' => $mahasiswa->nama_jenjang_pendidikan,
				'tanggal' => $this->format_indo($cek->created_at),
				'link' => $cek->uuid,
				'tanggal_kelulusan' => $this->format_indo($data_sidang->tanggal_sidang),
				'qr_code' => $dataUri,
				'uuid' => $cek->uuid
			]);
		} else {
			echo "Data Tidak Ditemukan";
		}
	}
}
