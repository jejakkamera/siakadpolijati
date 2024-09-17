<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Job_dt extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('datatables');
    }

    function json_list_job()
    {
        $this->datatables->select("
        id,nama_perusahaan,posisi,type,keterangan,created_at,created_by,
        if(job_list.`status`= '0','Tidak Aktif','Aktif') AS status2");
        $this->datatables->from('job_list');
        $this->datatables->add_column(
            'action',
            anchor(
                site_url('/baak/job/register_list/$1'),
                '<i class="fa fa-list"></i>',
                'data-toggle="tooltip" data-html="true" title="Edit" class="btn btn-info" '
            ) . " | " .
            anchor(
                site_url('/baak/job/edit/$1'),
                '<i class="fa fa-pencil"></i>',
                'data-toggle="tooltip" data-html="true" title="Edit" class="btn btn-warning" '
            ) . " | " .

                anchor(
                    site_url('/baak/job/delete/$1'),
                    '<i class="fa fa-trash"></i>',
                    'data-toggle="tooltip" data-html="true" title="Hapus" class="btn btn-danger" onclick="javasciprt: return confirm(\'Apakah Anda Yakin Menghapus Job  ini ?  \')" '
                ),
            'id'
        );
        return $this->datatables->generate();
    }

    function json_register_list($id)
    {
		$this->datatables->select("mahasiswa.nim,nama,create,file");
        $this->datatables->from('job_register');
		$this->datatables->join('mahasiswa', 'mahasiswa.nim = job_register.nim');
        $this->datatables->where('id_job', $id);
		$this->datatables->add_column(
            'file_regist',
            anchor(
                site_url('/assets/berkas/magang/$1'),
                '<i class="fa fa-file"></i>',
                'target="_blank" data-toggle="tooltip" data-html="true" title="Register" class="btn btn-info" '
            ),
            'file'
        );
		return $this->datatables->generate();
	}

    function json_list_job_mahasiswa()
    {
        $this->datatables->select("
        id,nama_perusahaan,posisi,type,keterangan,created_at,created_by,
        if(job_list.`status`= '0','Tidak Aktif','Aktif') AS status2");
        $this->datatables->from('job_list');
        $this->datatables->where('status', '1');
		$this->datatables->add_column(
            'action',
            anchor(
                site_url('/mahasiswa/magang/job_register/$1'),
                '<i class="fa fa-pencil"></i>',
                'data-toggle="tooltip" data-html="true" title="Register" class="btn btn-info" '
            ),
            'id'
        );

        return $this->datatables->generate();
    }
}
