<?php
class Skpi_f extends CI_Model
{ //baku
    function __construct()
    {
        parent::__construct();
        // $this->db = $this->load->database('default', TRUE);
        // $this->nmdb =$this->db1->database;

    }

    function kategori_skpi_add()
    {
        $form_detail = array(
            'action' => base_url('baak/skpi/kategori/add_action'),
            'form_detail' => 'Add Draft SKPI',

			
        );

        $data_isi = array(
            // [
            //     'kode_form' => 'kode_prodi',
            //     'nama_form' => 'Program Studi',
            //     'tipe' => 'select2',
            //     'select_data' => base_url('baak/data_json/json_prodi_kode/'),
            //     'placeholder' => 'programstudi',
            //     'required' => '1',
            //     'readonly' => '0',
            // ],
            [
                'kode_form' => 'draft_skpi',
                'nama_form' => 'Draft SKPI',
                'tipe' => 'text',
                'placeholder' => 'Isi Draft SKPI',
                'required' => '1',
                'readonly' => '0',
            ],
            [
                'kode_form' => 'status',
                'nama_form' => 'status',
                'tipe' => 'select',
                'select_data' => [
                    ['id' => '1', 'value' => 'Aktif'],
                    ['id' => '0', 'value' => 'Tidak Aktif'],
                ],
                'placeholder' => 'live',
                'required' => '1',
                'readonly' => '0',
            ],
        );
        $data = [
            'form_detail' => $form_detail,
            'data_isi' => $data_isi,
        ];

        return $data;
    }

    function kategori_skpi_edit($id)
    {
        $form_detail = array(
            'action' => base_url('baak/skpi/kategori/edit_action/' . $id),
            'form_detail' => 'Edit Draft SKPI',
        );
        $data_isi = array(
            // [
            //     'kode_form' => 'kode_prodi',
            //     'nama_form' => 'Program Studi',
            //     'tipe' => 'select2',
            //     'select_data' => base_url('baak/data_json/json_prodi_kode/'),
            //     // 'placeholder' => 'programstudi',
            //     'required' => '1',
            //     'readonly' => '0',
            // ],
            [
                'kode_form' => 'draft_skpi',
                'nama_form' => 'Draft SKPI',
                'tipe' => 'text',
                'placeholder' => 'Isi Draft SKPI',
                'required' => '1',
                'readonly' => '0',
            ],
            [
                'kode_form' => 'status',
                'nama_form' => 'status',
                'tipe' => 'select',
                'select_data' => [
                    ['id' => '1', 'value' => 'Aktif'],
                    ['id' => '0', 'value' => 'Tidak Aktif'],
                ],
                'placeholder' => 'live',
                'required' => '1',
                'readonly' => '0',
            ],
        );
        $data = [
            'form_detail' => $form_detail,
            'data_isi' => $data_isi,
        ];

        return $data;
    }


    public function skpi_mahasiswa_add()
    {
        $form_detail = array(
            'action' => base_url('mahasiswa/skpi/add_action'),
            'form_detail' => 'Add SKPI',
        );
        $data_isi = array(
            [
                'kode_form' => 'id_kategori',
                'nama_form' => 'kategori',
                'tipe' => 'select2',
                'select_data' => base_url('/mahasiswa/skpi/json_list_kategori'),
                'placeholder' => 'dosen',
                'required' => '0',
                'readonly' => '0',
            ],
            [
                'kode_form' => 'keterangan',
                'nama_form' => 'keterangan',
                'tipe' => 'text',
                'placeholder' => 'Isi keterangan SKPI',
                'required' => '1',
                'readonly' => '0',
            ],
            [
                'kode_form' => 'berkas',
                'nama_form' => 'File *pdf',
                'tipe' => 'upload',
                'placeholder' => 'berkas',
                'required' => '0',
                'readonly' => '0',
            ],
        );
        $data = [
            'form_detail' => $form_detail,
            'data_isi' => $data_isi,
        ];

        return $data;
    }

    public function skpi_mahasiswa_mahasiswa($id)
    {
        $form_detail = array(
            'action' => base_url('mahasiswa/skpi/dit_action/' . $id),
            'form_detail' => 'Edit SKPI',
        );
        $data_isi = array(
            [
                'kode_form' => 'id_kategori',
                'nama_form' => 'kategori',
                'tipe' => 'select2',
                'select_data' => base_url('/mahasiswa/skpi/json_list_kategori'),
                'placeholder' => 'dosen',
                'required' => '0',
                'readonly' => '0',
            ],
            [
                'kode_form' => 'keterangan',
                'nama_form' => 'keterangan',
                'tipe' => 'text',
                'placeholder' => 'Isi keterangan SKPI',
                'required' => '1',
                'readonly' => '0',
            ],
            [
                'kode_form' => 'berkas',
                'nama_form' => 'File *pdf',
                'tipe' => 'upload',
                'placeholder' => 'berkas',
                'required' => '0',
                'readonly' => '0',
            ],
        );
        $data = [
            'form_detail' => $form_detail,
            'data_isi' => $data_isi,
        ];

        return $data;
    }


    public function skpi_validasi_mahasiswa($id)
    {
        $form_detail = array(
            'action' => base_url('/baak/skpi/validasi/edit_action/' . $id),
            'form_detail' => 'Edit SKPI',
        );
        $data_isi = array(
            [
                'kode_form' => 'id_kategori',
                'nama_form' => 'id_kategori',
                'tipe' => 'select2',
                'select_data' => base_url('/mahasiswa/skpi/json_list_kategori'),
                'placeholder' => 'kategori',
                'required' => '0',
                'readonly' => '0',
            ],
            [
                'kode_form' => 'status',
                'nama_form' => 'status',
                'tipe' => 'select',
                'select_data' => [
                    ['id' => 'Validasi', 'value' => 'Validasi'],
                    ['id' => 'ACC', 'value' => 'ACC'],
                    ['id' => 'Perbaikan', 'value' => 'Perbaikan'],
                    ['id' => 'Ditolak', 'value' => 'Ditolak'],
                ],
                'placeholder' => 'live',
                'required' => '1',
                'readonly' => '0',
            ],
            [
                'kode_form' => 'keterangan',
                'nama_form' => 'keterangan',
                'tipe' => 'text',
                'placeholder' => 'Isi keterangan SKPI',
                'required' => '1',
                'readonly' => '0',
            ],
            [
                'kode_form' => 'berkas',
                'nama_form' => 'File *pdf',
                'tipe' => 'upload',
                'placeholder' => 'berkas',
                'required' => '0',
                'readonly' => '0',
            ],
        );
        $data = [
            'form_detail' => $form_detail,
            'data_isi' => $data_isi,
        ];

        return $data;
    }
}
