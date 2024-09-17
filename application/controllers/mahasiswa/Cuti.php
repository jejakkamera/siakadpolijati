<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'vendor/autoload.php';
use Ramsey\Uuid\Uuid;

class Cuti extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        $this->load->library('Feeder_lib');
        $this->load->model('Mahasiswa_model');
        $this->load->model('tabel/Baak_t', 'baak_tabel');
        $this->load->model('Baak_model');

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

	public function json_list_cuti(){
        $this->load->model('datatable/Baak_dt', 'Baak_dt');

        header('Content-Type: application/json');
        echo $this->Baak_dt->json_list_cuti();
    }

    public function add_action()
    {
        $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required|xss_clean');
        $this->form_validation->set_rules('periode', 'periode', 'trim|required|xss_clean');
        
        if ($this->form_validation->run() == FALSE) {
            redirect('/mahasiswa/cuti/add');
        } else {
            $where_ = array(
                'periode' => $this->input->post('periode'),
                'nim' => $this->session->userdata('username')
            );
            $cek_ = $this->Master_model->master_get($where_, 'list_mahasiswa_cuti');
            if($cek_){
                $text = $this->alert->danger('Pengajuan Cuti : Duplicate');
                $this->session->set_flashdata('message', $text);
                redirect('/mahasiswa/cuti');
            }
            $data = array(
                'keterangan' => $this->input->post('keterangan'),
                'periode' => $this->input->post('periode'),
                'nim' => $this->session->userdata('username'),
                'id_uuid' => Uuid::uuid1()->toString(),
                'nomer_aktif' => $this->Baak_model->get_list_mahasiswa_cuti_last_id($this->input->post('periode'))
                ,
            );
            $this->Master_model->insert_query('list_mahasiswa_cuti', $data);
            $text = $this->alert->success('Pengajuan Cuti : Add');
            $this->session->set_flashdata('message', $text);
            redirect('/mahasiswa/cuti');
        }
        
    }

    public function add()
    {
        $this->load->model('form/Mbkm_f', 'mbkm_form');
        
        $periode=$this->Baak_model->json_id_periode_aktif('');
        $data_master = $this->mbkm_form->add_cuti($periode);
        $this->header();
        $this->load->view(
            'master/master_form',
            [
                'data_detail' => $data_master['form_detail'],
                'data_isi' => $data_master['data_isi'],
                'data_master' => null,
                'status' => null,
            ]
        );
        $this->footer();
    }

	public function index(){
		$nim = $this->session->userdata('username');
		$data_master = $this->baak_tabel->list_cuti();
		
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

}
