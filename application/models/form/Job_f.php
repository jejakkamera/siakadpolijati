<?php
class Job_f extends CI_Model
{ //baku
    function __construct()
    {
        parent::__construct();
        // $this->db = $this->load->database('default', TRUE);
        // $this->nmdb =$this->db1->database;

    }


    function add_job()
    {
        $form_detail = array(
            'action' => base_url('baak/job/add_job_action'),
            'form_detail' => 'Add Job',
        );
        $data_isi = array(
            [
                'kode_form' => 'nama_perusahaan',
                'nama_form' => 'Nama Perusahaan',
                'tipe' => 'text',
                'placeholder' => 'Isi Nama Perusahaan',
                'required' => '1',
                'readonly' => '0',
            ],
            [
                'kode_form' => 'posisi',
                'nama_form' => 'Posisi',
                'tipe' => 'text',
                'placeholder' => 'Isi Posisi',
                'required' => '1',
                'readonly' => '0',
            ],
            [
                'kode_form' => 'type',
                'nama_form' => 'Type',
                'tipe' => 'text',
                'placeholder' => 'Isi Type',
                'required' => '1',
                'readonly' => '0',
            ],

            [
                'kode_form' => 'keterangan',
                'nama_form' => 'Keterangan',
                'tipe' => 'wyswyg',
                'placeholder' => 'Keterangan',
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

    function edit($id)
    {
        $form_detail = array(
            'action' => base_url('baak/job/edit_action/' . $id),
            'form_detail' => 'Edit Job',
        );
        $data_isi = array(
            [
                'kode_form' => 'nama_perusahaan',
                'nama_form' => 'Nama Perusahaan',
                'tipe' => 'text',
                'placeholder' => 'Isi Nama Perusahaan',
                'required' => '1',
                'readonly' => '0',
            ],
            [
                'kode_form' => 'posisi',
                'nama_form' => 'Posisi',
                'tipe' => 'text',
                'placeholder' => 'Isi Posisi',
                'required' => '1',
                'readonly' => '0',
            ],
            [
                'kode_form' => 'type',
                'nama_form' => 'Type',
                'tipe' => 'text',
                'placeholder' => 'Isi Type',
                'required' => '1',
                'readonly' => '0',
            ],

            [
                'kode_form' => 'keterangan',
                'nama_form' => 'Keterangan',
                'tipe' => 'wyswyg',
                'placeholder' => 'Keterangan',
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

    function job_register($id)
    {
        $form_detail = array(
            'action' => base_url('mahasiswa/magang/job_register_action/' . $id),
            'form_detail' => 'Register Job',
        );
        $data_isi = array(
           
            [
                'kode_form' => 'file',
                'nama_form' => 'File Register',
                'tipe' => 'upload',
                'placeholder' => 'File Register',
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
