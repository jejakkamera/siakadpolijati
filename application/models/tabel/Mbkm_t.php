<?php
class Mbkm_t extends CI_Model
{ //baku
    function __construct()
    {
        parent::__construct();
        $this->load->library('Master_lib');
    }

    function list_mbkm()
    {
        $data_detail = array(
            'link_json' => base_url('mahasiswa/mbkm/json_list_mbkm'),
            'header' => 'List MBKM',
            'tabel_detail' => 'List MBKM',

            'button_name2' => 'ADD MBKM',
            'button_action_link2' => base_url('mahasiswa/mbkm/add'),
            'button_icon2' => 'fa fa-plus',
        );
        $data_isi = array(
            [
                'code_nama' => 'periode',
                'nama' => 'periode',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'kegiatan',
                'nama' => 'kegiatan',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'penyelenggara',
                'nama' => 'penyelenggara',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'tanggal_mulai',
                'nama' => 'Tanggal Mulai',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'tanggal_akhir',
                'nama' => 'Tanggal Akhir',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'status',
                'nama' => 'status',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'surat_rekomendasi',
                'nama' => 'Surat Rekomendasi',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'transkip',
                'nama' => 'Transkip',
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
