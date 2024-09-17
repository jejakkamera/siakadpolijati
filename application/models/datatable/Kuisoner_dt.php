<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kuisoner_dt extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('datatables');
    }

    function json_list_kuisoner_dosen()
    {
        $this->datatables->select("id,pertanyaan,IF(status='0','Tidak Aktif','Aktif') as status");
        $this->datatables->from('kuisoner_pertanyaan');
        $this->datatables->where('role','dosen');
        $this->datatables->where('show','yes');
        $this->datatables->add_column(
            'action',
            anchor(
                site_url('/baak/kuisoner/edit_kuisoner_dosen/$1'),
                '<i class="fa fa-pencil"></i>',
                'data-toggle="tooltip" data-html="true" title="Edit" class="btn btn-warning" '
            ) . " | " .

                anchor(
                    site_url('/baak/kuisoner/delete_kuisoner_dosen/$1'),
                    '<i class="fa fa-trash"></i>',
                    'data-toggle="tooltip" data-html="true" title="Hapus" class="btn btn-danger" onclick="javasciprt: return confirm(\'Apakah Anda Yakin Menghapus Kuisoner  ini ?  \')" '
                ),
            'id'
        );
        return $this->datatables->generate();
    }

    function json_list_kuisoner_mhs()
    {
        $this->datatables->select("id,pertanyaan,IF(status='0','Tidak Aktif','Aktif') as status");
        $this->datatables->from('kuisoner_pertanyaan');
        $this->datatables->where('role','mhs');
        $this->datatables->where('show','yes');
        $this->datatables->add_column(
            'action',
            anchor(
                site_url('/baak/kuisoner/edit_kuisoner_mhs/$1'),
                '<i class="fa fa-pencil"></i>',
                'data-toggle="tooltip" data-html="true" title="Edit" class="btn btn-warning" '
            ) . " | " .

                anchor(
                    site_url('/baak/kuisoner/delete_kuisoner_mhs/$1'),
                    '<i class="fa fa-trash"></i>',
                    'data-toggle="tooltip" data-html="true" title="Hapus" class="btn btn-danger" onclick="javasciprt: return confirm(\'Apakah Anda Yakin Menghapus Kuisoner  ini ?  \')" '
                ),
            'id'
        );
        return $this->datatables->generate();
    }

    function json_list_kuisoner_lulusan()
    {
        $this->datatables->select("id,pertanyaan,IF(status='0','Tidak Aktif','Aktif') as status");
        $this->datatables->from('kuisoner_pertanyaan');
        $this->datatables->where('role','lulusan');
        $this->datatables->where('show','yes');
        $this->datatables->add_column(
            'action',
            anchor(
                site_url('/baak/kuisoner/edit_kuisoner_lulusan/$1'),
                '<i class="fa fa-pencil"></i>',
                'data-toggle="tooltip" data-html="true" title="Edit" class="btn btn-warning" '
            ) . " | " .

                anchor(
                    site_url('/baak/kuisoner/delete_kuisoner_lulusan/$1'),
                    '<i class="fa fa-trash"></i>',
                    'data-toggle="tooltip" data-html="true" title="Hapus" class="btn btn-danger" onclick="javasciprt: return confirm(\'Apakah Anda Yakin Menghapus Kuisoner  ini ?  \')" '
                ),
            'id'
        );
        return $this->datatables->generate();
    }
}
