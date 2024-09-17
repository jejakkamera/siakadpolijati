<?php
class Arp_t extends CI_Model
{ //baku
    function __construct()
    {
        parent::__construct();
        $this->load->library('Master_lib');
    }

    function list_arp()
    {
        $data_detail = array(
            'link_json' => base_url('baak/arp/json_list_arp'),
            'header' => 'List ARP',
            'tabel_detail' => 'List ARP',

            'button_name2' => 'ADD List ARP',
            'button_action_link2' => base_url('baak/arp/add_arp'),
            'button_icon2' => 'fa fa-plus',
        );
        $data_isi = array(

            [
                'code_nama' => 'judul_arp',
                'nama' => 'judul_arp',
                'orderable' => '1',
            ],
            // [
            //     'code_nama' => 'deskripsi',
            //     'nama' => 'deskripsi',
            //     'orderable' => '1',
            // ],
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
}
