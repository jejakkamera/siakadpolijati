<?php
class Skpi_t extends CI_Model
{ //baku
    function __construct()
    {
        parent::__construct();
        $this->load->library('Master_lib');
    }

    function list_kategori()
    {
        $data_detail = array(
            'link_json' => base_url('baak/skpi/data_json/json_list_kategori'),
            'header' => 'List Kategori SKPI',
            'tabel_detail' => 'List Kategori SKPI',

            'button_name2' => 'ADD List Kategori SKPI',
            'button_action_link2' => base_url('baak/skpi/kategori/add'),
            'button_icon2' => 'fa fa-plus',
        );

        $data_isi = array(

            [
                'code_nama' => 'kategori',
                'nama' => 'kategori',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'status',
                'nama' => 'status',
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


    function list_skpi()
    {
        $data_detail = array(
            'link_json' => base_url('baak/skpi/data_json/json_list_skpi'),
            'header' => 'List Draft SKPI',
            'tabel_detail' => 'List Draft SKPI',

            'button_name2' => 'ADD List SKPI',
            'button_action_link2' => base_url('baak/skpi/kategori/add'),
            'button_icon2' => 'fa fa-plus',
        );

        $data_isi = array(

            [
                'code_nama' => 'draft_skpi',
                'nama' => 'Draft SKPI',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'status',
                'nama' => 'Status',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'action',
                'nama' => 'Action',
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

    function list_skpi_by_mahasiswa()
    {
        $data_detail = array(
            'link_json' => base_url('/mahasiswa/skpi/json_list_skpi_by_mahasiswa'),
            'header' => 'List SKPI Mahasiswa',
            'tabel_detail' => 'List SKPI Mahasiswa',

            // 'button_name2' => 'ADD  SKPI',
            // 'button_action_link2' => base_url('/mahasiswa/skpi/add'),
            // 'button_icon2' => 'fa fa-plus',
        );

        $data_isi = array(
            [
                'code_nama' => 'draft_skpi',
                'nama' => 'Draft SKPI',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'status',
                'nama' => 'status',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'file',
                'nama' => 'file',
                'orderable' => '0',
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

    function validasi()
    {
        $data_detail = array(
            'link_json' => base_url('baak/skpi/data_json/json_list_validasi'),
            'header' => 'List SKPI Mahasiswa',
            'tabel_detail' => 'List SKPI Mahasiswa',

            'button_name2' => 'View Permahasiswa',
            'button_action_link2' => base_url('baak/mahasiswa'),
            'button_icon2' => 'fa fa-user',
        );
        $data_isi = array(
            [
                'code_nama' => 'nim',
                'nama' => 'Nim',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'nama',
                'nama' => 'Nama',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'nama_program_studi',
                'nama' => 'Nama Program Studi',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'draft_skpi',
                'nama' => 'Draft SKPI',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'status',
                'nama' => 'Status',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'file',
                'nama' => 'File',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'action',
                'nama' => 'Action',
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

    function list_prodi_skpi()
    {
        $data_detail = array(
            'link_json' => base_url('baak/skpi/data_json/json_list_prodi_skpi'),
            'header' => 'List Prodi SKPI',
            'tabel_detail' => 'List Prodi SKPI',

            'button_name2' => 'Information',
            'button_action_link2' => base_url('/baak/skpi/a_document/informasi_skpi'),
            'button_icon2' => 'fa fa-info',
        );
        $data_isi = array(
            [
                'code_nama' => 'kode_program_studi',
                'nama' => 'Kode Prodi',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'nama_program_studi',
                'nama' => 'Nama Prodi',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'nama_jenjang_pendidikan',
                'nama' => 'Jenjang',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'action',
                'nama' => 'Action',
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
