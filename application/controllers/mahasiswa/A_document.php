<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_document extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        $this->load->library('Feeder_lib');
        $this->load->model('Mahasiswa_model');

        $level=$this->session->userdata('role');
        $action='get';
        $access = $this->Master_model->cek_akses('mahasiswa',$level,$action);
        if($access==0){
            $text = $this->alert->danger('You do not have access');
			$this->session->set_flashdata('message', $text);
			redirect("welcome/dashboard");
		}
	}

	public function header(){
		if($this->session->userdata('isLogin')==TRUE){
			$this->load->view('master/header');
		}else{
			redirect('/welcome/login', 'refresh');
		}
		
	}

	public function footer(){
			$this->load->view('master/footer');
	}

	public function upload_action($id_trx){
		$nim = $this->session->userdata('username');
		$rule=$this->Master_model->master_get(['user'=>$nim,'id_list'=>$id_trx],'a_document_upload');
		if($rule){
			if($rule->status=='accepted'){
				$text = $this->alert->danger('Data failed Uplaod. Info : status accepted');
                $this->session->set_flashdata('message', $text);
                redirect("mahasiswa/a_document/#dokument"); 
			}

			$this->Master_model->delete_query(['id_upload'=>$rule->id_upload], 'a_document_upload');
			unlink('./assets/berkas/a_document/'.$rule->file);
            
		}

			$config['upload_path']          = './assets/berkas/a_document/';
            $config['allowed_types']        = 'pdf';
            $new_name = time().'_'.$this->session->userdata('username').'_ad.pdf';
		    $config['file_name'] = $new_name;
			$this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('berkas'))
            {
                $text = $this->alert->danger('Data failed Added. Info :'.$this->upload->display_errors());
                    $this->session->set_flashdata('message', $text);
                    return redirect("mahasiswa/a_document/upload/".$id_trx);
            }
            else
            {
				$nama_berkas = $this->upload->data("file_name");
                    $data=array(
                        'user'=>$this->session->userdata('username'),
                        'file'=>$nama_berkas,
                        'id_list'=>$id_trx,
                    );
                    $this->Master_model->insert_query('a_document_upload',$data);
					
				$this->Master_model->insert_history('insert','a_document',json_encode($data));

				$text = $this->alert->success('Document was upload');
				$this->session->set_flashdata('message', $text);
				redirect("mahasiswa/a_document/#dokument"); 
			}
		
        
	}

	public function upload($id_trx){
		$this->load->model('form/Mhs_f', 'mahasiswa_form');

        $data_master=$this->mahasiswa_form->a_document_upload($id_trx);

		$this->header();
        $this->load->view('master/master_form',
            [
                'data_detail'=>$data_master['form_detail'],
                'data_isi'=>$data_master['data_isi'],
                'status'=>null,
            ]
        );
		$this->footer();
	}

	public function index(){
		$nim = $this->session->userdata('username');
		$dokument_list = $this->Mahasiswa_model->a_dokument_list_mhs($nim );
        $informasi_text = $this->Master_model->master_get(['id'=>2],'informasi_text');           

		$this->header();
        $this->load->view('mahasiswa/a_document',
            ['informasi_text'=>$informasi_text,'dokument_list'=>$dokument_list]
        );
		$this->footer();
	}


}