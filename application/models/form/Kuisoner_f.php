<?php
class Kuisoner_f extends CI_Model
{ //baku
    function __construct()
    {
        parent::__construct();
        // $this->db = $this->load->database('default', TRUE);
        // $this->nmdb =$this->db1->database;

    }

    function kuisoner_dosen_select()
    {
        $form_detail = array(
            'action' => base_url('baak/kuisoner/kuisoner_dosen_select_action'),
            'form_detail' => 'Select Periode kuisoner',
        );
        $data_isi = array(
            [
                'kode_form' => 'id_periode',
                'nama_form' => 'Periode',
                'tipe' => 'select2',
                'select_data' => base_url('baak/data_json/json_id_periode/'),
                'placeholder' => 'Periode',
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

    function kuisoner_lulusan_select()
    {
        $form_detail = array(
            'action' => base_url('baak/kuisoner/kuisoner_lulusan_select_action'),
            'form_detail' => 'Select Periode kuisoner',
        );
        $data_isi = array(
            [
                'kode_form' => 'id_periode',
                'nama_form' => 'Periode',
                'tipe' => 'select2',
                'select_data' => base_url('baak/data_json/json_id_periode/'),
                'placeholder' => 'Periode',
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

    function kuisoner_mhs_select()
    {
        $form_detail = array(
            'action' => base_url('baak/kuisoner/kuisoner_mhs_select_action'),
            'form_detail' => 'Select Periode kuisoner',
        );
        $data_isi = array(
            [
                'kode_form' => 'id_periode',
                'nama_form' => 'Periode',
                'tipe' => 'select2',
                'select_data' => base_url('baak/data_json/json_id_periode/'),
                'placeholder' => 'Periode',
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

    function add_kuisoner_dosen()
    {
        $form_detail = array(
            'action' => base_url('baak/kuisoner/add_kuisoner_dosen_action'),
            'form_detail' => 'Add kuisoner',
        );
        $data_isi = array(
            [
                'kode_form' => 'pertanyaan',
                'nama_form' => 'Pertanyaan',
                'tipe' => 'text',
                'placeholder' => 'Isi Pertanyaan',
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

    function edit_kuisoner_dosen($id)
    {
        $form_detail = array(
            'action' => base_url('baak/kuisoner/edit_kuisoner_dosen_action/' . $id),
            'form_detail' => 'Edit kuisoner',
        );
        $data_isi = array(
            [
                'kode_form' => 'pertanyaan',
                'nama_form' => 'Pertanyaan',
                'tipe' => 'text',
                'placeholder' => 'Isi Pertanyaan',
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

    function add_kuisoner_mhs()
    {
        $form_detail = array(
            'action' => base_url('baak/kuisoner/add_kuisoner_mhs_action'),
            'form_detail' => 'Add kuisoner',
        );
        $data_isi = array(
            [
                'kode_form' => 'pertanyaan',
                'nama_form' => 'Pertanyaan',
                'tipe' => 'text',
                'placeholder' => 'Isi Pertanyaan',
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

    function edit_kuisoner_mhs($id)
    {
        $form_detail = array(
            'action' => base_url('baak/kuisoner/edit_kuisoner_mhs_action/' . $id),
            'form_detail' => 'Edit kuisoner',
        );
        $data_isi = array(
            [
                'kode_form' => 'pertanyaan',
                'nama_form' => 'Pertanyaan',
                'tipe' => 'text',
                'placeholder' => 'Isi Pertanyaan',
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
    
    function add_kuisoner_lulusan()
    {
        $form_detail = array(
            'action' => base_url('baak/kuisoner/add_kuisoner_lulusan_action'),
            'form_detail' => 'Add kuisoner',
        );
        $data_isi = array(
            [
                'kode_form' => 'pertanyaan',
                'nama_form' => 'Pertanyaan',
                'tipe' => 'text',
                'placeholder' => 'Isi Pertanyaan',
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

    function edit_kuisoner_lulusan($id)
    {
        $form_detail = array(
            'action' => base_url('baak/kuisoner/edit_kuisoner_lulusan_action/' . $id),
            'form_detail' => 'Edit kuisoner',
        );
        $data_isi = array(
            [
                'kode_form' => 'pertanyaan',
                'nama_form' => 'Pertanyaan',
                'tipe' => 'text',
                'placeholder' => 'Isi Pertanyaan',
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
}
