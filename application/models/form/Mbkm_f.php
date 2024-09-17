<?php
class Mbkm_f extends CI_Model
{ //baku
    function __construct()
    {
        parent::__construct();
        // $this->db = $this->load->database('default', TRUE);
        // $this->nmdb =$this->db1->database;

    }

    function add_cuti($periode)
    {
        $form_detail = array(
            'action' => base_url('mahasiswa/cuti/add_action'),
            'form_detail' => 'Add Cuti',
        );
        $data_isi = array(
            [
                'kode_form' => 'periode',
                'nama_form' => 'Periode',
                'tipe' => 'select',
                'select_data' => [
                    ['id' => $periode->kode, 'value' => $periode->nama],
                ],
                'required' => '1',
                'readonly' => '0',
            ],
            [
                'kode_form' => 'keterangan',
                'nama_form' => 'Keterangan Cuti',
                'tipe' => 'text',
                'placeholder' => 'Sakit / Tugas Luar kota / Lainya',
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

    function add()
    {
        $form_detail = array(
            'action' => base_url('mahasiswa/mbkm/add_action'),
            'form_detail' => 'Add MBKM',
        );
        $data_isi = array(
            [
                'kode_form' => 'kegiatan',
                'nama_form' => 'kegiatan',
                'tipe' => 'text',
                'placeholder' => 'Isi kegiatan',
                'required' => '1',
                'readonly' => '0',
            ],
            [
                'kode_form' => 'penyelenggara',
                'nama_form' => 'penyelenggara',
                'tipe' => 'text',
                'placeholder' => 'Isi penyelenggara',
                'required' => '1',
                'readonly' => '0',
            ],
            [
                'kode_form' => 'tanggal_mulai',
                'nama_form' => 'Tanggal Mulai',
                'tipe' => 'date',
                'placeholder' => 'Isi Tanggal Mulai',
                'required' => '1',
                'readonly' => '0',
            ],
            [
                'kode_form' => 'tanggal_akhir',
                'nama_form' => 'Tanggal Berakhir',
                'tipe' => 'date',
                'placeholder' => 'Isi Tanggal Berakhir',
                'required' => '1',
                'readonly' => '0',
            ],
            [
                'kode_form' => 'surat_rekomendasi',
                'nama_form' => 'Surat Rekomendasi *pdf',
                'tipe' => 'upload',
                'placeholder' => 'Isi Surat Rekomendasi',
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

    function edit($id)
    {
        $form_detail = array(
            'action' => base_url('mahasiswa/mbkm/edit_action/' . $id),
            'form_detail' => 'Edit MBKM',
        );
        $data_isi = array(
            [
                'kode_form' => 'kegiatan',
                'nama_form' => 'kegiatan',
                'tipe' => 'text',
                'placeholder' => 'Isi kegiatan',
                'required' => '1',
                'readonly' => '0',
            ],
            [
                'kode_form' => 'penyelenggara',
                'nama_form' => 'penyelenggara',
                'tipe' => 'text',
                'placeholder' => 'Isi penyelenggara',
                'required' => '1',
                'readonly' => '0',
            ],
            [
                'kode_form' => 'tanggal_mulai',
                'nama_form' => 'Tanggal Mulai',
                'tipe' => 'date',
                'placeholder' => 'Isi Tanggal Mulai',
                'required' => '1',
                'readonly' => '0',
            ],
            [
                'kode_form' => 'tanggal_akhir',
                'nama_form' => 'Tanggal Berakhir',
                'tipe' => 'date',
                'placeholder' => 'Isi Tanggal Berakhir',
                'required' => '1',
                'readonly' => '0',
            ],
            [
                'kode_form' => 'surat_rekomendasi',
                'nama_form' => 'Surat Rekomendasi *pdf (Tidak perlu upload jika tidak ingin dirubah)',
                'tipe' => 'upload',
                'placeholder' => 'Isi Surat Rekomendasi',
                'required' => '0',
                'readonly' => '0',
            ],
            // [
            //     'kode_form' => 'status',
            //     'nama_form' => 'status',
            //     'tipe' => 'select',
            //     'select_data' => [
            //         ['id' => '2', 'value' => 'Lulus'],
            //         ['id' => '0', 'value' => 'Tidak Lulus'],
            //     ],
            //     'placeholder' => 'live',
            //     'required' => '1',
            //     'readonly' => '0',
            // ],

        );
        $data = [
            'form_detail' => $form_detail,
            'data_isi' => $data_isi,
        ];

        return $data;
    }

    function update_status($id)
    {
        $form_detail = array(
            'action' => base_url('mahasiswa/mbkm/update_status_action/' . $id),
            'form_detail' => 'Update Status MBKM',
        );
        $data_isi = array(

            [
                'kode_form' => 'transkip',
                'nama_form' => 'Transkip *pdf ',
                'tipe' => 'upload',
                'placeholder' => 'Isi Transkip',
                'required' => '0',
                'readonly' => '0',
            ],
            [
                'kode_form' => 'status',
                'nama_form' => 'status',
                'tipe' => 'select',
                'select_data' => [
                    ['id' => '2', 'value' => 'Lulus'],
                    ['id' => '0', 'value' => 'Tidak Lulus'],
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
}
