<?php
class Rdd_t extends CI_Model
{ //baku
    function __construct()
    {
        parent::__construct();
        $this->load->library('Master_lib');
    }

    function list_type()
    {
        $data_detail = array(
            'link_json' => base_url('baak/rdd/json_list_type'),
            'header' => 'List Type',
            'tabel_detail' => 'List Type',

            'button_name2' => 'ADD List Type',
            'button_action_link2' => base_url('baak/rdd/add_type'),
            'button_icon2' => 'fa fa-plus',
        );

        $data_isi = array(

            [
                'code_nama' => 'type',
                'nama' => 'type',
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

    function list_rdd()
    {
        $data_detail = array(
            'link_json' => base_url('baak/rdd/json_list_rdd'),
            'header' => 'List Regulation Decree and Documentation',
            'tabel_detail' => 'List Regulation Decree and Documentation',

            'button_name2' => 'ADD List ',
            'button_action_link2' => base_url('baak/rdd/add_list'),
            'button_icon2' => 'fa fa-plus',
        );
        $data_isi = array(

            [
                'code_nama' => 'file',
                'nama' => 'file',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'type',
                'nama' => 'type',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'tanggal',
                'nama' => 'tanggal',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'nomer_rdd',
                'nama' => 'nomer_rdd',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'subjek',
                'nama' => 'subjek',
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

    function list_rdd_by_role()
    {
        $data_detail = array(
            'link_json' => base_url('welcome/json_list_rdd_by_role'),
            'header' => 'List Regulation Decree and Documentation',
            'tabel_detail' => 'List Regulation Decree and Documentation',
        );
        $data_isi = array(

            [
                'code_nama' => 'file',
                'nama' => 'file',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'type',
                'nama' => 'type',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'tanggal',
                'nama' => 'tanggal',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'nomer_rdd',
                'nama' => 'nomer_rdd',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'subjek',
                'nama' => 'subjek',
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
