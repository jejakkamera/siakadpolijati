<?php
class A_document_f extends CI_Model
{ 
    function __construct()
    {
        parent::__construct();
        // $this->db = $this->load->database('default', TRUE);
        // $this->nmdb =$this->db1->database;

    }

    function json_a_document_acc_list($id_list)
    {
        $this->load->library('datatables');

        $this->datatables->select('id_upload,file,id_list,upload_date,user,status,nama,nim');
        $this->datatables->from('a_document_upload');
        $this->datatables->join('mahasiswa','mahasiswa.nim=a_document_upload.user');
        $this->datatables->where('a_document_upload.status','accepted');
        $this->datatables->where('a_document_upload.id_list',$id_list);
        $this->datatables->add_column(
            'file',
            anchor(
                site_url('assets/berkas/a_document/$1'),
                '<i class="fa fa-eye"></i>',
                'data-toggle="tooltip" data-html="true" title="Validate" target="_blank" '
            )           
            ,
            'file'
        );
        return $this->datatables->generate();

    }

    function json_a_document_upload_list($id_list)
    {
        $this->load->library('datatables');

        $this->datatables->select('id_upload,file,id_list,upload_date,user,status,nama,nim');
        $this->datatables->from('a_document_upload');
        $this->datatables->join('mahasiswa','mahasiswa.nim=a_document_upload.user');
        $this->datatables->where('a_document_upload.status','upload');
        $this->datatables->where('a_document_upload.id_list',$id_list);
        $this->datatables->add_column(
            'action',
            anchor(
                site_url('baak/skpi/a_document/validate/$1'),
                '<i class="fa fa-check"></i>',
                'data-toggle="tooltip" data-html="true" title="Validate" class="btn btn-warning"'
            )           
            ,
            'id_upload'
        );
        $this->datatables->add_column(
            'file',
            anchor(
                site_url('assets/berkas/a_document/$1'),
                '<i class="fa fa-eye"></i>',
                'data-toggle="tooltip" data-html="true" title="Validate" target="_blank" '
            )           
            ,
            'file'
        );
        return $this->datatables->generate();

    }

    function json_a_document_list()
    {
        $this->load->library('datatables');

        $this->datatables->select('id_trx,document_name,user_for,status');
        $this->datatables->from('a_document_list');
        $this->datatables->add_column(
            'action',
            anchor(
                site_url('baak/skpi/a_document/delete/$1'),
                '<i class="fa fa-trash"></i>',
                'data-toggle="tooltip" data-html="true" title="Delete" class="btn btn-danger"'
            ).' '.
            anchor(
                site_url('baak/skpi/a_document/edit/$1'),
                '<i class="fa fa-pencil"></i>',
                'data-toggle="tooltip" data-html="true" title="Edit" class="btn btn-warning"'
            ) .' | '.           
            anchor(
                site_url('baak/skpi/a_document/upload_list/$1'),
                '<i class="fa fa-list"></i>',
                'data-toggle="tooltip" data-html="true" title="List User Upload" class="btn btn-primary"'
            )            
            ,
            'id_trx'
        );
        return $this->datatables->generate();

    }

    function acc_list($id_list)
    {
        $data_detail = array(
            'link_json' => base_url('baak/data_json/json_a_document_acc_list/'.$id_list),
            'header' => 'Academic Dokumen Accepted:',
            'tabel_detail' => 'Academic Dokumen Accepted:',

            'button_name3' => 'Upload List',
            'button_action_link3' => base_url('/baak/skpi/a_document/upload_list/'.$id_list),
            'button_icon3' => 'fa fa-upload',

            'button_name2' => 'Master Academic Dokumen',
            'button_action_link2' => base_url('/baak/skpi/a_document'),
            'button_icon2' => 'fa fa-home',
        );

        $data_isi = array(
            [
                'code_nama' => 'nim',
                'nama' => 'NIM',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'nama',
                'nama' => 'Nama',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'file',
                'nama' => 'File',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'upload_date',
                'nama' => 'Stuatus',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'status',
                'nama' => 'Stuatus',
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

    function upload_list($id_list)
    {
        $data_detail = array(
            'link_json' => base_url('baak/data_json/json_a_document_upload_list/'.$id_list),
            'header' => 'Academic Dokumen Upload:',
            'tabel_detail' => 'Academic Dokumen Upload:',

            'button_name' => 'Accepted List',
            'button_action_link' => base_url('/baak/skpi/a_document/acc_list/'.$id_list),
            'button_icon' => 'fa fa-check',

            'button_name2' => 'Master Academic Dokumen',
            'button_action_link2' => base_url('/baak/skpi/a_document'),
            'button_icon2' => 'fa fa-home',
        );

        $data_isi = array(
            [
                'code_nama' => 'nim',
                'nama' => 'NIM',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'nama',
                'nama' => 'Nama',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'file',
                'nama' => 'File',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'upload_date',
                'nama' => 'Stuatus',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'status',
                'nama' => 'Stuatus',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'action',
                'nama' => 'Action',
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

    function tabel_list()
    {
        $data_detail = array(
            'link_json' => base_url('baak/data_json/json_a_document_list'),
            'header' => 'Master Academic Dokumen :',
            'tabel_detail' => 'Master Academic Dokumen :',

            'button_name' => 'Add ',
            'button_action_link' => base_url('/baak/skpi/a_document/add'),
            'button_icon' => 'fa fa-plus',

            'button_name2' => 'Information',
            'button_action_link2' => base_url('/baak/skpi/a_document/informasi'),
            'button_icon2' => 'fa fa-info',
        );

        $data_isi = array(
            [
                'code_nama' => 'document_name',
                'nama' => 'Nama Dokumen',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'user_for',
                'nama' => 'User',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'status',
                'nama' => 'Stuatus',
                'orderable' => '1',
            ],
            [
                'code_nama' => 'action',
                'nama' => 'Action',
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

    function data_isi(){
        return $data_isi = array(

            [
                'kode_form' => 'document_name',
                'nama_form' => 'Nama Dokumen',
                'tipe' => 'text',
                'placeholder' => 'ijazah,KK',
                'required' => '1',
                'readonly' => '0',
            ],
            [
                'kode_form' => 'user_for',
                'nama_form' => 'Suser',
                'tipe' => 'select',
                'select_data' => [
                    ['id' => 'mhs', 'value' => 'Mahasiswa'],
                    ['id' => 'dosen', 'value' => 'Dosen'],
                ],
                'placeholder' => 'live',
                'required' => '1',
                'readonly' => '0',
            ],
            [
                'kode_form' => 'status',
                'nama_form' => 'Status',
                'tipe' => 'select',
                'select_data' => [
                    ['id' => 'aktif', 'value' => 'Aktif'],
                    ['id' => 'tidak', 'value' => 'Tidak Aktif'],
                ],
                'placeholder' => 'live',
                'required' => '1',
                'readonly' => '0',
            ],


        );
    }

    function edit($id_trx)
    {
        $form_detail = array(
            'action' => base_url('baak/skpi/a_document/edit_action/' . $id_trx),
            'form_detail' => 'Add Jadwal',
        );
        
        $data = [
            'form_detail' => $form_detail,
            'data_isi' => $this->data_isi(),
        ];

        return $data;
    }

    function add()
    {
        $form_detail = array(
            'action' => base_url('baak/skpi/a_document/add_action'),
            'form_detail' => 'Add Academic Dokumen',
        );
       

        $data = [
            'form_detail' => $form_detail,
            'data_isi' => $this->data_isi(),
        ];

        return $data;
    }

    function validate($a_document_upload)
    {
        $form_detail = array(
            'action' => base_url('baak/skpi/a_document/validate_action/'.$a_document_upload->id_upload),
            'form_detail' => 'Validate Academic Dokumen' ,
        );
        
        $data_isi=[
            [
                'kode_form' => base_url('assets/berkas/a_document/'.$a_document_upload->file),
                'nama_form' => 'File PDF',
                'tipe' => 'pdf',
                'placeholder' => 'File Sudah benar',
                'required' => '1',
                'readonly' => '0',
            ],
            [
                'kode_form' => 'status',
                'nama_form' => 'Status',
                'tipe' => 'select',
                'select_data' => [
                    ['id' => 'accepted', 'value' => 'Accepted'],
                    ['id' => 'reject', 'value' => 'Reject'],
                ],
                'placeholder' => 'live',
                'required' => '1',
                'readonly' => '0',
            ],
            [
                'kode_form' => 'status_info',
                'nama_form' => 'Keterangan',
                'tipe' => 'text',
                'placeholder' => 'File Sudah benar',
                'required' => '1',
                'readonly' => '0',
            ],
        ];

        $data = [
            'form_detail' => $form_detail,
            'data_isi' => $data_isi,
        ];

        return $data;
    }

}