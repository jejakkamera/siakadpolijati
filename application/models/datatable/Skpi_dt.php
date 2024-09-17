<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Skpi_dt extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('datatables');
    }
    function json_list_kategori()
    {
        $this->datatables->select('id,kategori,status');
        $this->datatables->from('skpi_kategori');
        $this->datatables->add_column(
            'action',
            anchor(
                site_url('baak/skpi/kategori/edit/$1'),
                '<i class="fa fa-pencil"></i>',
                'data-toggle="tooltip" data-html="true" title="Edit Kategori" class="btn btn-warning" '
            ) . " | " .

                anchor(
                    site_url('baak/skpi/kategori/delete/$1'),
                    '<i class="fa fa-trash"></i>',
                    'data-toggle="tooltip" data-html="true" title="Hapus Kategori" class="btn btn-danger" onclick="javasciprt: return confirm(\'Apakah Anda Yakin Menghapus Kategori ini ?  \')" '
                ),
            'id'
        );
        return $this->datatables->generate();
    }

    function json_list_skpi()
    {
        $this->datatables->select("skpi_list.id AS id,skpi_list.draft_skpi, IF(skpi_list.`status`='1','Aktif','Tidak Aktif') AS status");
        $this->datatables->from('skpi_list');
        $this->datatables->add_column(
            'action',
            anchor(
                site_url('baak/skpi/kategori/edit/$1'),
                '<i class="fa fa-pencil"></i>',
                'data-toggle="tooltip" data-html="true" title="Edit SKPI" class="btn btn-warning" '
            ) . " | " .

                anchor(
                    site_url('baak/skpi/kategori/delete/$1'),
                    '<i class="fa fa-trash"></i>',
                    'data-toggle="tooltip" data-html="true" title="Hapus SKPI" class="btn btn-danger" onclick="javasciprt: return confirm(\'Apakah Anda Yakin Menghapus SKPI ini ?  \')" '
                ),
            'id'
        );
        return $this->datatables->generate();
    }

    function json_list_skpi_by_mahasiswa($kode_prodi)
    {
        $this->datatables->select('
        skpi_list.id AS id,skpi_list.draft_skpi,
        (CASE
            WHEN skpi_mahasiswa.status = "1" THEN " Validasi SKPI"
            WHEN skpi_mahasiswa.status = "2" THEN "Acc SKPI"
            WHEN skpi_mahasiswa.status = "3" THEN "Tolak Permohonan SKPI"
            ELSE "Belum Upload SKPI"
        END) AS status,skpi_mahasiswa.`file` as file
        ');
        $this->datatables->from('skpi_list');
        $this->datatables->join('skpi_mahasiswa', 'skpi_list.id = skpi_mahasiswa.id_draft_skpi AND skpi_mahasiswa.nim = ' . $this->session->userdata('username'), 'left');
        $this->datatables->join('skpi_prodi', 'skpi_prodi.id_draft = skpi_list.id');
        $this->datatables->where('skpi_prodi.kode_prodi', $kode_prodi);
        // $this->datatables->where('skpi_mahasiswa.nim', $this->session->userdata('username'));

        $this->datatables->add_column(
            'action',
            anchor(
                site_url('mahasiswa/skpi/edit/$1'),
                '<i class="fa fa-pencil"></i>',
                'data-toggle="tooltip" data-html="true" title="Edit SKPI" class="btn btn-warning" '
            ),
            'id'
        );
        $this->datatables->add_column(
            'file',
            anchor(
                site_url('assets/berkas/skpi/$1'),
                '<i class="fa fa-eye"></i>',
                'data-toggle="tooltip" target="_blank" data-html="true" title="Lihat File" class="btn btn-primary" '
            ),
            'file'
        );
        return $this->datatables->generate();
    }


    function json_list_validasi()
    {
        $this->datatables->select(
            'skpi_mahasiswa.id,
            skpi_mahasiswa.nim,
            skpi_mahasiswa.keterangan,
            skpi_mahasiswa.`file` as file,
            (CASE
                WHEN skpi_mahasiswa.status = "1" THEN " Validasi SKPI"
                WHEN skpi_mahasiswa.status = "2" THEN "Acc SKPI"
                WHEN skpi_mahasiswa.status = "3" THEN "Tolak Permohonan SKPI"
                ELSE "Belum Upload SKPI"
            END) AS status,
            mahasiswa.nama,
            dikti_prodi.nama_program_studi,
            skpi_list.draft_skpi
            '
        );
        $this->datatables->from('skpi_mahasiswa');
        $this->datatables->join('mahasiswa', 'mahasiswa.nim = skpi_mahasiswa.nim');
        $this->datatables->join('skpi_list', 'skpi_list.id = skpi_mahasiswa.id_draft_skpi');
        $this->datatables->join('dikti_prodi', 'dikti_prodi.kode_program_studi = mahasiswa.kode_prodi');
		$this->datatables->where('skpi_mahasiswa.status', "1");
        
        // login prodi
        if ($this->session->userdata('role') == 'prodi') {
            $this->datatables->where('mahasiswa.kode_prodi', $this->session->userdata('username'));
        }
        $this->datatables->add_column(
            'file',
            anchor(
                site_url('assets/berkas/skpi/$1'),
                '<i class="fa fa-eye"></i>',
                'data-toggle="tooltip" target="_blank" data-html="true" title="Edit File" class="btn btn-primary" '
            ),
            'file'
        );
        $this->datatables->add_column(
            'action',
            anchor(
                site_url('baak/skpi/validasi/edit/$1'),
                '<i class="fa fa-pencil"></i>',
                'data-toggle="tooltip" data-html="true" title="Edit SKPI" class="btn btn-warning" '
            ) . " | " .

                anchor(
                    site_url('baak/skpi/validasi/delete/$1'),
                    '<i class="fa fa-trash"></i>',
                    'data-toggle="tooltip" data-html="true" title="Hapus SKPI" class="btn btn-danger" onclick="javasciprt: return confirm(\'Apakah Anda Yakin Menghapus Berkas ?  \')" '
                ),
            'id'
        );
        return $this->datatables->generate();
    }

    function json_list_prodi_skpi()
    {
        $this->datatables->select('id_prodi, kode_program_studi, nama_program_studi, status, nama_jenjang_pendidikan,');
        $this->datatables->from('v_prodi');
        // if ($this->session->userdata('role') == 'prodi') {
        //     $this->datatables->where('v_prodi.kode_program_studi', $this->session->userdata('username'));
        // }
        $this->datatables->add_column(
            'action',
            anchor(
                site_url('baak/skpi/kategori/draft_prodi/$1'),
                'Draft SKPI',
                'data-toggle="tooltip" data-html="true" title="Login Info" class="btn btn-primary"'
            ),
            'kode_program_studi'
        );
        return $this->datatables->generate();
    }
}
