<?php
class Mahasiswa_model extends CI_Model
{ //baku
    function __construct()
    {
        parent::__construct();
        $this->url = url_siku;
        $this->key = key_siku;
        $this->client_id = client_id;
        $this->secret_key = secret_key;
        $this->url_bni = url_bni;
    }

    function presensi_mahasiswa_online($cek_)
    {
        $this->db->select('v_frs.nim,v_frs.suspend,v_frs.nama,v_frs.periode,v_frs.id_matkul,
        v_frs.kode_prodi,
        v_frs.kode_mata_kuliah,
		presensi_status_1,
		presensi_status_2,
		presensi_status_3,
		presensi_status_4,
		presensi_status_5,
		presensi_status_6,
		presensi_status_7,
		presensi_status_8,
		presensi_status_9,
		presensi_status_10,
		presensi_status_11,
		presensi_status_12,
		presensi_status_13,
		presensi_status_14,
		presensi_status_15,
		presensi_status_16,
		tanggal_absen_1,
		tanggal_absen_2,
		tanggal_absen_3,
		tanggal_absen_4,
		tanggal_absen_5,
		tanggal_absen_6,
		tanggal_absen_7,
		tanggal_absen_8,
		tanggal_absen_9,
		tanggal_absen_10,
		tanggal_absen_11,
		tanggal_absen_12,
		tanggal_absen_13,
		tanggal_absen_14,
		tanggal_absen_15,
		tanggal_absen_16,
		');
        $this->db->join('presensi_mahasiswa', 'presensi_mahasiswa.id_matkul = v_frs.id_matkul and presensi_mahasiswa.periode = v_frs.periode and presensi_mahasiswa.nim = v_frs.nim', 'left');
        $this->db->where('v_frs.id_trx', $cek_['id_trx']);
        $this->db->where('v_frs.nim', $cek_['nim']);
        $this->db->where('v_frs.transfer', 'tidak');
        return $this->db->get('v_frs')->row();
    }

    function hasil_studi_detail($id_trx_frs)
    {
        $this->db->select('*');
        $this->db->from('frs_mhs_nilai');
        $this->db->join('nilai_komponen', 'nilai_komponen.id=frs_mhs_nilai.id_komponen');
        $this->db->where('id_trx_frs', $id_trx_frs);

        $query = $getData = $this->db->get();

        if ($getData->num_rows() > 0)

            return $query->result();

        else

            return null;
    }

    function jadwal_sidang_magang($periode, $kode_prodi)
    {
        $this->db->select('*');
        $this->db->from('magang_jadwal_sidang');
        $this->db->where('periode', $periode);
        $this->db->where('kode_prodi', $kode_prodi);
        $this->db->where('tutup_daftar >=', date('Y-m-d'));
        $query = $getData = $this->db->get();

        if ($getData->num_rows() > 0)

            return $query->result();

        else

            return null;
    }

    function jadwal_sidang_ta_s1($periode, $kode_prodi)
    {
        $this->db->select('*');
        $this->db->from('ta_s1_jadwal_sidang');
        // $this->db->where('periode',$periode);
        $this->db->where('kode_prodi', $kode_prodi);
        $this->db->where('tutup_daftar >=', date('Y-m-d'));
        $query = $getData = $this->db->get();

        if ($getData->num_rows() > 0)

            return $query->result();

        else

            return null;
    }

    function jadwal_sidang_ta_d3($periode, $kode_prodi)
    {
        $this->db->select('*');
        $this->db->from('ta_d3_jadwal_sidang');
        // $this->db->where('periode',$periode);
        $this->db->where('kode_prodi', $kode_prodi);
        $this->db->where('tutup_daftar >=', date('Y-m-d'));
        $query = $getData = $this->db->get();

        if ($getData->num_rows() > 0)

            return $query->result();

        else

            return null;
    }

    function a_dokument_list_mhs($nim)
    {
        $this->db->select('id_trx,document_name,id_upload,id_upload,file,upload_date,a_document_upload.status,status_info');
        $this->db->from('a_document_list');
        $this->db->join('a_document_upload', 'a_document_list.id_trx=a_document_upload.id_list and a_document_upload.user=' . $nim, 'left');
        $this->db->where('user_for', 'mhs');
        $this->db->where('a_document_list.status', 'aktif');
        $query = $getData = $this->db->get();

        if ($getData->num_rows() > 0)

            return $query->result();

        else

            return null;
    }

    function profile($nim)
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join('dikti_prodi', 'kode_program_studi = mahasiswa.kode_prodi');
        $this->db->join('mahasiswa_profile', 'mahasiswa.nim = mahasiswa_profile.nim');
        $this->db->where('mahasiswa.nim', $nim);
        $query = $getData = $this->db->get();

        if ($getData->num_rows() > 0)

            return $query->result_array();

        else

            return null;
    }

    function jadwal_yudisium($periode, $kode_prodi)
    {
        $this->db->select('*');
        $this->db->from('yudisium');
        // $this->db->where('periode',$periode);
        $this->db->where('kode_prodi', $kode_prodi);
        $this->db->where('tanggal_penutupan >=', date('Y-m-d'));
        $query = $getData = $this->db->get();

        if ($getData->num_rows() > 0)

            return $query->result();

        else

            return null;
    }


    function cek_tagihan_nim_periode($nim, $periode)
    {
        $this->output->set_header('Access-Control-Allow-Origin: *');
        $url = $this->url . 'api/get_tagihan_periode';
        $data = array('key' => $this->key, 'nim' => $nim, 'periode' => $periode);
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
        );

        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $data_json = json_decode($result);

        if ($data_json->data != null) {
            // $sisa = $data_json->data->total_tagihan - $data_json->data->total_bayar;
            if ($data_json->data->total_bayar<0) {
                return false;
            }
            return true;
        }
        return false;
    }

    function cek_tagihan_kelulusan()
    {
        $this->output->set_header('Access-Control-Allow-Origin: *');
        $url = $this->url . 'api/get_tagihan';
        $data = array('key' => $this->key, 'nim' => $this->session->userdata('username'));
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
        );

        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $data_json = json_decode($result);

        if ($data_json->status_code == 000) {
            $status = false;
            foreach ($data_json->data as $key => $value) {
                if ($value->total_tagihan - $value->total_bayar != 0) {
                    $status = false;
                } else {
                    $status = true;
                }
            }
        } else {
            $status = "Gagal Get Data";
        }

        return $status;
    }
}
