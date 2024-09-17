<?php
class Kuisoner_t extends CI_Model
{ //baku
    function __construct()
    {
        parent::__construct();
        $this->load->library('Master_lib');
    }

    function list_kuisoner()
    {
        $data_detail = array(
            'link_json' => base_url('baak/kuisoner/json_list_kuisoner_dosen'),
            'header' => 'List kuisoner dosen',
            'tabel_detail' => 'List kusioner dosen',

            'button_name' => 'ADD kuisoner',
            'button_action_link' => base_url('baak/kuisoner/add_kuisoner_dosen'),
            'button_icon' => 'fa fa-plus',

            'button_name2' => 'Report',
            'button_action_link2' => base_url('baak/kuisoner/kuisoner_dosen_select'),
            'button_icon2' => 'fa fa-bar-chart',
        );
        $data_isi = array(
            [
                'code_nama' => 'pertanyaan',
                'nama' => 'pertanyaan',
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

    function list_kuisoner_mhs()
    {
        $data_detail = array(
            'link_json' => base_url('baak/kuisoner/json_list_kuisoner_mhs'),
            'header' => 'List kuisoner Mahasiswa',
            'tabel_detail' => 'List kusioner Mahasiswa',

            'button_name' => 'ADD kuisoner',
            'button_action_link' => base_url('baak/kuisoner/add_kuisoner_mhs'),
            'button_icon' => 'fa fa-plus',

			'button_name2' => 'Report',
            'button_action_link2' => base_url('baak/kuisoner/kuisoner_mhs_select'),
            'button_icon2' => 'fa fa-bar-chart',
        );
        $data_isi = array(
            [
                'code_nama' => 'pertanyaan',
                'nama' => 'pertanyaan',
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

    function list_kuisoner_lulusan()
    {
        $data_detail = array(
            'link_json' => base_url('baak/kuisoner/json_list_kuisoner_lulusan'),
            'header' => 'List kuisoner Lulusan',
            'tabel_detail' => 'List kusioner Lulusan',

            'button_name' => 'ADD kuisoner',
            'button_action_link' => base_url('baak/kuisoner/add_kuisoner_lulusan'),
            'button_icon' => 'fa fa-plus',

            'button_name2' => 'Report',
            'button_action_link2' => base_url('baak/kuisoner/kuisoner_lulusan_select'),
            'button_icon2' => 'fa fa-bar-chart',
        );
        $data_isi = array(
            [
                'code_nama' => 'pertanyaan',
                'nama' => 'pertanyaan',
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
