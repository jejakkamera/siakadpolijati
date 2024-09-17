<?php
defined('BASEPATH') or exit('No direct script access allowed');

class A_document extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->library('Feeder_lib');
        // $this->load->model('Baak_model');
        $this->load->model('form/A_document_f', 'a_document');

        $level = $this->session->userdata('role');
        $action = 'get';
        $access = $this->Master_model->cek_akses('baak', $level, $action);
        if ($access == 0) {
            $text = $this->alert->danger('You do not have access');
            $this->session->set_flashdata('message', $text);
            redirect("welcome/dashboard");
        }
    }

    public function header()
    {
        if ($this->session->userdata('isLogin') == TRUE) {
            $this->load->view('master/header');
        } else {
            redirect('/welcome/login', 'refresh');
        }
    }

    public function footer()
    {
        $this->load->view('master/footer');
    }

    public function acc_list($id_list)
    {
        $this->load->model('tabel/skpi_t', 'skpi_tabel');
        $data_master = $this->a_document->acc_list($id_list);
        $this->header();
        $this->load->view(
            'master/master_list',
            [
                'data_detail' => $data_master['data_detail'],
                'data_isi' => $data_master['data_isi'],
            ]
        );
        $this->footer();
    }

    public function upload_list($id_list)
    {
        $this->load->model('tabel/skpi_t', 'skpi_tabel');
        $data_master = $this->a_document->upload_list($id_list);
        $this->header();
        $this->load->view(
            'master/master_list',
            [
                'data_detail' => $data_master['data_detail'],
                'data_isi' => $data_master['data_isi'],
            ]
        );
        $this->footer();
    }

    public function index()
    {
        $this->load->model('tabel/skpi_t', 'skpi_tabel');
        $data_master = $this->a_document->tabel_list();
        $this->header();
        $this->load->view(
            'master/master_list',
            [
                'data_detail' => $data_master['data_detail'],
                'data_isi' => $data_master['data_isi'],
            ]
        );
        $this->footer();
    }

    public function informasi_skpi(){
        $this->header();
        $data_text = $this->Master_model->master_get(['id'=>3], 'informasi_text');

        $this->load->view('baak/informasi_a_document',['data_text' => $data_text,'id'=>3]);
        $this->footer();
    }

    public function informasi(){
        $this->header();
        $data_text = $this->Master_model->master_get(['id'=>2], 'informasi_text');

        $this->load->view('baak/informasi_a_document',['data_text' => $data_text,'id'=>2]);
        $this->footer();
    }

    public function edit($id_trx){
        $data_masters=get_object_vars($this->Master_model->master_get(['id_trx' => $id_trx],'a_document_list'));
        $data_master=$this->a_document->edit($id_trx);
		$this->header();
        $this->load->view('master/master_form',
            [
                'data_detail'=>$data_master['form_detail'],
                'data_isi'=>$data_master['data_isi'],
                'data_master'=>$data_masters,
                'status'=>'update',
            ]
        );
		$this->footer();

    }

    public function delete($id_trx){
        $where_=array(
			'id_list'=>$id_trx
		);

		$cek_=$this->Master_model->master_get($where_,'a_document_upload');
        if(!$cek_){
            $where_array=array(
				'id_trx'=>$id_trx
			);
			$this->Master_model->delete_query($where_array, 'a_document_list');

			$data_history=json_encode($cek_);
			log_message('info', 'Delete - data to a_document_list, data :'.$data_history);

			$text = $this->alert->success('record successfully deleted');
			$this->session->set_flashdata('message', $text);
			redirect(site_url('baak/skpi/a_document'));

        }else{
            $text = $this->alert->danger('Data cannot delete');
			$this->session->set_flashdata('message', $text);
			redirect(site_url('baak/skpi/a_document'));
        }
    }

    public function edit_action($id_trx){
        $this->form_validation->set_rules('document_name', 'document_name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('user_for', 'user_for', 'trim|required|xss_clean');
        $this->form_validation->set_rules('status', 'status', 'trim|required|xss_clean');
        if ( ($this->form_validation->run() == TRUE)   ) {
            $where_=array(
				'id_trx'=>$id_trx,
			);
	
			$cek_=$this->Master_model->master_get($where_,'a_document_list');
            if($cek_){
                $data = array(
                    'document_name' => $this->input->post('document_name',TRUE),
                    'user_for' => $this->input->post('user_for',TRUE),
                    'status' => $this->input->post('status',TRUE),
                );

                $this->Master_model->update_query(['id_trx'=>$id_trx], $data, 'a_document_list');
				log_message('info', 'Update - a_document_list, data :'.json_encode($data));
				
				$text = $this->alert->success('Data successfully Update');
				$this->session->set_flashdata('message', $text);
				redirect(site_url('baak/skpi/a_document'));

            }else{

                $text = $this->alert->danger('TRX Not Found');
				$this->session->set_flashdata('message', $text);
				redirect(site_url('baak/skpi/a_document'));
            }
        }else{
            $this->edit($id_trx);
        }
    }

    public function add_action(){
        $this->form_validation->set_rules('document_name', 'document_name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('user_for', 'user_for', 'trim|required|xss_clean');
        $this->form_validation->set_rules('status', 'status', 'trim|required|xss_clean');
        if ( ($this->form_validation->run() == TRUE)   ) {
            $data = array(
                'document_name' => $this->input->post('document_name',TRUE),
                'user_for' => $this->input->post('user_for',TRUE),
                'status' => $this->input->post('status',TRUE),
            );

            $this->Master_model->insert_query('a_document_list',$data);
				log_message('info', 'Input - data to a_document_list, data :'.json_encode($data));
				
				$text = $this->alert->success('Data successfully Add');
				$this->session->set_flashdata('message', $text);
				redirect(site_url('baak/skpi/a_document'));
			
        }else{
			$this->add();
		}
		
    }

    public function add(){
        $data_master=$this->a_document->add();

		$this->header();
        $this->load->view('master/master_form',
            [
                'data_detail'=>$data_master['form_detail'],
                'data_isi'=>$data_master['data_isi'],
                'data_master'=>null,
                'status'=>null,
            ]
        );
		$this->footer();
    }

    public function validate_action($id_upload){
    $a_document_upload = $this->Master_model->master_get(['id_upload'=>$id_upload], 'a_document_upload');
       if($a_document_upload){
            $this->form_validation->set_rules('status', 'status', 'trim|required|xss_clean');
            $this->form_validation->set_rules('status_info', 'status_info', 'trim|required|xss_clean');
            if ( ($this->form_validation->run() == TRUE)   ) {
                $this->Master_model->update_query(['id_upload'=>$id_upload], ['status'=>$this->input->post('status',TRUE),'status_info'=>$this->input->post('status_info',TRUE)
                                                                    ], 'a_document_upload');
                $text = $this->alert->success('Data successfully upload');
                $this->session->set_flashdata('message', $text);
                redirect(site_url('baak/skpi/a_document/upload_list/'.$a_document_upload->id_list));
            }else{
                $this->validate($id_upload);
            }
       }else{
        $text = $this->alert->danger('TRX Not Found');
        $this->session->set_flashdata('message', $text);
        redirect(site_url('baak/skpi/a_document')); 
       }
    }

    public function validate($id_upload){
        $a_document_upload = $this->Master_model->master_get(['id_upload'=>$id_upload], 'a_document_upload');
        $data_master=$this->a_document->validate($a_document_upload);

		$this->header();
        $this->load->view('master/master_form',
            [
                'data_detail'=>$data_master['form_detail'],
                'data_isi'=>$data_master['data_isi'],
                'data_master'=>null,
                'status'=>null,
            ]
        );
		$this->footer();
    }

    public function informasi_save($id){
        $input_text=$this->input->post('input_text',TRUE);
    
        $this->Master_model->update_query(['id'=>$id], ['text' =>$input_text], 'informasi_text');
        $text = $this->alert->success('Data successfully Added');
				$this->session->set_flashdata('message', $text);
		if($id==2){
			return redirect("baak/skpi/a_document");
		}elseif($id==3){
			return redirect("baak/skpi/kategori/list_prodi_skpi");
		}		
        
    }

}
