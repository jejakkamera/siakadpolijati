<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Arp_dt extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('datatables');
    }


    function json_list_arp()
    {
        $this->datatables->select('id,judul_arp,deskripsi_arp');
        $this->datatables->from('arp');
        $this->datatables->add_column(
            'deskripsi',
            substr('$1', 0, 10),
            'deskripsi_arp'
        );
        $this->datatables->add_column(
            'action',
            anchor(
                site_url('/baak/arp/edit_arp/$1'),
                '<i class="fa fa-pencil"></i>',
                'data-toggle="tooltip" data-html="true" title="Edit Type" class="btn btn-warning" '
            ) . " | " .

                anchor(
                    site_url('/baak/arp/delete_arp/$1'),
                    '<i class="fa fa-trash"></i>',
                    'data-toggle="tooltip" data-html="true" title="Hapus Type" class="btn btn-danger" onclick="javasciprt: return confirm(\'Apakah Anda Yakin Menghapus ARP  ini ?  \')" '
                ),
            'id'
        );
        return $this->datatables->generate();
    }
}
