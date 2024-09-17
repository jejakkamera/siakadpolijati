<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mbkm_dt extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('datatables');
    }
    function json_list_mbkm()
    {
        $this->datatables->select('
        id,
        periode,
        surat_rekomendasi,
        kegiatan,
        penyelenggara,
        tanggal_mulai,
        tanggal_akhir,
        transkip,
        (CASE
            WHEN status = "0" THEN " Tidak Lulus"
            WHEN status = "1" THEN "Pengajuan"
            WHEN status = "2" THEN "Lulus"
        END) AS status
        ');
        $this->datatables->from('mbkm');
        $this->datatables->where('nim', $this->session->userdata('username'));
        $this->datatables->add_column(
            'surat_rekomendasi',
            anchor(
                site_url('assets/berkas/mbkm/$1'),
                '<i class="fa fa-eye"></i>',
                'data-toggle="tooltip" target="_blank" data-html="true" title="Lihat Surat Rekomendasi" class="btn btn-primary" '
            ),
            'surat_rekomendasi'
        );
        $this->datatables->add_column(
            'transkip',
            anchor(
                site_url('assets/berkas/mbkm/$1'),
                '<i class="fa fa-eye"></i>',
                'data-toggle="tooltip" target="_blank" data-html="true" title="Lihat Surat Rekomendasi" class="btn btn-primary" '
            ),
            'transkip'
        );
        $this->datatables->add_column(
            'action',
            anchor(
                site_url('mahasiswa/mbkm/edit/$1'),
                '<i class="fa fa-pencil"></i>',
                'data-toggle="tooltip" data-html="true" title="Edit Kategori" class="btn btn-warning" '
            ) . " | " .


                anchor(
                    site_url('mahasiswa/mbkm/update_status/$1'),
                    '<i class="fa fa-book"></i>',
                    'data-toggle="tooltip" data-html="true" title="Update Status" class="btn btn-info" '
                )
                . " | " .

                anchor(
                    site_url('mahasiswa/mbkm/delete/$1'),
                    '<i class="fa fa-trash"></i>',
                    'data-toggle="tooltip" data-html="true" title="Hapus Kategori" class="btn btn-danger" onclick="javasciprt: return confirm(\'Apakah Anda Yakin Menghapus Data ini ?  \')" '
                ),
            'id'
        );
        return $this->datatables->generate();
    }
}
