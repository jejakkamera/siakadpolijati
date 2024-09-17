<?php
class Rdd_f extends CI_Model
{ //baku
    function __construct()
    {
        parent::__construct();
        // $this->db = $this->load->database('default', TRUE);
        // $this->nmdb =$this->db1->database;

    }

    function type_add()
    {
        $form_detail = array(
            'action' => base_url('baak/rdd/add_type_action'),
            'form_detail' => 'Add Type',
        );

        $data_isi = array(
            [
                'kode_form' => 'type',
                'nama_form' => 'type',
                'tipe' => 'text',
                'placeholder' => 'Isi Type',
                'required' => '1',
                'readonly' => '0',
            ],
            [
                'kode_form' => 'status',
                'nama_form' => 'status',
                'tipe' => 'select',
                'select_data' => [
                    ['id' => 'aktif', 'value' => 'Aktif'],
                    ['id' => 'tidak_aktif', 'value' => 'Tidak Aktif'],
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

    function type_edit($id)
    {
        $form_detail = array(
            'action' => base_url('baak/rdd/type_edit_action/' . $id),
            'form_detail' => 'Edit Type ',
        );

        $data_isi = array(
            [
                'kode_form' => 'type',
                'nama_form' => 'type',
                'tipe' => 'text',
                'placeholder' => 'Isi type',
                'required' => '1',
                'readonly' => '0',
            ],
            [
                'kode_form' => 'status',
                'nama_form' => 'status',
                'tipe' => 'select',
                'select_data' => [
                    ['id' => 'aktif', 'value' => 'Aktif'],
                    ['id' => 'tidak_aktif', 'value' => 'Tidak Aktif'],
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
