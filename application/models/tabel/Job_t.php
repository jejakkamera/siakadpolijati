<?php
class Job_t extends CI_Model
{ //baku
    function __construct()
    {
        parent::__construct();
        $this->load->library('Master_lib');
    }

    function list_job()
    {
        $data_detail = array(
            'link_json' => base_url('baak/job/json_list_job'),
            'header' => 'List Job',
            'tabel_detail' => 'List Job',

            'button_name2' => 'ADD List Job',
            'button_action_link2' => base_url('baak/job/add_Job'),
            'button_icon2' => 'fa fa-plus',
        );

        $data_isi = array(

            [
                'code_nama' => 'status2',
                'nama' => 'status2',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'nama_perusahaan',
                'nama' => 'nama_perusahaan',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'posisi',
                'nama' => 'posisi',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'type',
                'nama' => 'type',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'keterangan',
                'nama' => 'keterangan',
                'orderable' => '1',
                'width' => '200px'
            ],
            [
                'code_nama' => 'created_at',
                'nama' => 'created_at',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'created_by',
                'nama' => 'created_by',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'action',
                'nama' => 'action',
                'orderable' => '0',
            ],
        );
        $data_isi = $this->master_lib->master_list($data_isi);

        $data_kirim = array(
            'data_isi' => $data_isi,
            'data_detail' => $data_detail,
        );
        return $data_kirim;
    }

    function register_list($id)
    {
		$data_detail = array(
            'link_json' => base_url('baak/job/json_register_list/'.$id),
            'header' => 'List Register Job',
            'tabel_detail' => 'List Register Job',
        );

		 $data_isi = array(

            [
                'code_nama' => 'nim',
                'nama' => 'nim',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'nama',
                'nama' => 'Nama',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'create',
                'nama' => 'Create',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'file_regist',
                'nama' => 'File',
                'orderable' => '0',
            ],

        );
        $data_isi = $this->master_lib->master_list($data_isi);

        $data_kirim = array(
            'data_isi' => $data_isi,
            'data_detail' => $data_detail,
        );
        return $data_kirim;
	}

    function list_job_mahasiswa()
    {
        $data_detail = array(
            'link_json' => base_url('mahasiswa/magang/json_list_job_mahasiswa'),
            'header' => 'List Job',
            'tabel_detail' => 'List Job',
        );

        $data_isi = array(

            [
                'code_nama' => 'action',
                'nama' => 'Register',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'status2',
                'nama' => 'status2',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'nama_perusahaan',
                'nama' => 'nama_perusahaan',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'posisi',
                'nama' => 'posisi',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'type',
                'nama' => 'type',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'keterangan',
                'nama' => 'keterangan',
                'orderable' => '1',
                'width' => '200px'
            ],
            [
                'code_nama' => 'created_at',
                'nama' => 'created_at',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'created_by',
                'nama' => 'created_by',
                'orderable' => '1',
            ],

        );
        $data_isi = $this->master_lib->master_list($data_isi);

        $data_kirim = array(
            'data_isi' => $data_isi,
            'data_detail' => $data_detail,
        );
        return $data_kirim;
    }
}
