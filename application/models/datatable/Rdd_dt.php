<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rdd_dt extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('datatables');
    }

    function json_list_type()
    {
        $this->datatables->select('id,type,status');
        $this->datatables->from('rdd_type');
        $this->datatables->add_column(
            'action',
            anchor(
                site_url('/baak/rdd/type_edit/$1'),
                '<i class="fa fa-pencil"></i>',
                'data-toggle="tooltip" data-html="true" title="Edit Type" class="btn btn-warning" '
            ) . " | " .

                anchor(
                    site_url('/baak/rdd/type_delete/$1'),
                    '<i class="fa fa-trash"></i>',
                    'data-toggle="tooltip" data-html="true" title="Hapus Type" class="btn btn-danger" onclick="javasciprt: return confirm(\'Apakah Anda Yakin Menghapus Type ini ?  \')" '
                ),
            'id'
        );
        return $this->datatables->generate();
    }

    function json_list_rdd()
    {
        $this->datatables->select('rdd_list.id,rdd_type.type,tanggal,nomer_rdd,subjek,file');
        $this->datatables->from('rdd_list');
        $this->datatables->join('rdd_type', 'rdd_type.id = rdd_list.id_type');
        $this->datatables->add_column(
            'file',
            anchor(
                site_url('assets/berkas/rdd/$1'),
                '<i class="fa fa-eye"></i>',
                'data-toggle="tooltip" target="_blank" data-html="true" title="Edit File" class="btn btn-primary" '
            ),
            'file'
        );
        $this->datatables->add_column(
            'action',
            anchor(
                site_url('/baak/rdd/list_edit/$1'),
                '<i class="fa fa-pencil"></i>',
                'data-toggle="tooltip" data-html="true" title="Edit list" class="btn btn-warning" '
            ) . " | " .

                anchor(
                    site_url('/baak/rdd/list_delete/$1'),
                    '<i class="fa fa-trash"></i>',
                    'data-toggle="tooltip" data-html="true" title="Hapus list" class="btn btn-danger" onclick="javasciprt: return confirm(\'Apakah Anda Yakin Menghapus List ini ?  \')" '
                ),
            'id'
        );
        return $this->datatables->generate();
    }

    function json_list_rdd_by_role()
    {
        $this->datatables->select('rdd_list.id,rdd_type.type,tanggal,nomer_rdd,subjek,file');
        $this->datatables->from('rdd_list');
        $this->datatables->join('rdd_type', 'rdd_type.id = rdd_list.id_type');
        $this->datatables->like('rdd_list.role',   $this->session->userdata('role'));
        $this->datatables->add_column(
            'file',
            anchor(
                site_url('assets/berkas/rdd/$1'),
                '<i class="fa fa-eye"></i>',
                'data-toggle="tooltip" target="_blank" data-html="true" title="Edit File" class="btn btn-primary" '
            ),
            'file'
        );

        return $this->datatables->generate();
    }
}
