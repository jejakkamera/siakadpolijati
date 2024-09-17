<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Job extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('Feeder_lib');
        $this->load->model('Baak_model');

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


    public function register_list($id)
    {
        $this->load->model('tabel/Job_t', 'job_tabel');
        $data_master = $this->job_tabel->register_list($id);


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
        $this->load->model('tabel/Job_t', 'job_tabel');
        $data_master = $this->job_tabel->list_job();


        $this->header();
        $this->load->view(
            'master/master_list_job',
            [
                'data_detail' => $data_master['data_detail'],
                'data_isi' => $data_master['data_isi'],
            ]
        );
        $this->footer();
    }

    public function json_list_job()
    {
        $this->load->model('datatable/Job_dt');
        header('Content-Type: application/json');
        echo $this->Job_dt->json_list_job();
    }

    public function json_register_list($id)
    {
        $this->load->model('datatable/Job_dt');
        header('Content-Type: application/json');
        echo $this->Job_dt->json_register_list($id);
    }

    public function add_job()
    {
        $this->load->model('form/Job_f', 'job_form');
        $data_master = $this->job_form->add_job();

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

    public function add_job_action()
    {
        $this->form_validation->set_rules('nama_perusahaan', 'nama_perusahaan', 'trim|required|xss_clean');
        $this->form_validation->set_rules('posisi', 'posisi', 'trim|required|xss_clean');
        $this->form_validation->set_rules('type', 'type', 'trim|required|xss_clean');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required|xss_clean');
        $this->form_validation->set_rules('status', 'status', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            redirect('/baak/job/add');
        } else {
            $data = array(
                'nama_perusahaan' => $this->input->post('nama_perusahaan'),
                'posisi' => $this->input->post('posisi'),
                'type' => $this->input->post('type'),
                'keterangan' => '<p id="content">' . $this->input->post('keterangan') . '</p>',
                'status' => $this->input->post('status'),
                'created_by' => "BAAK",
            );
            $this->Master_model->insert_query('job_list', $data);
            log_message('info', 'Input - job_list, data :' . json_encode($data));

            $text = $this->alert->success('Data successfully Add');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('baak/job'));
        }
    }

    public function edit($id)
    {
        $this->load->model('form/Job_f', 'job_form');
        $data_master = $this->job_form->edit($id);
        $data_masters = get_object_vars($this->Master_model->master_get(['id' => $id], 'job_list'));

        $this->header();
        $this->load->view(
            'master/master_form',
            [
                'data_detail' => $data_master['form_detail'],
                'data_isi' => $data_master['data_isi'],
                'data_master' => $data_masters,
                'status' => 'update',
            ]
        );
        $this->footer();
    }

    public function edit_action($id)
    {
        $this->form_validation->set_rules('nama_perusahaan', 'nama_perusahaan', 'trim|required|xss_clean');
        $this->form_validation->set_rules('posisi', 'posisi', 'trim|required|xss_clean');
        $this->form_validation->set_rules('type', 'type', 'trim|required|xss_clean');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required|xss_clean');
        $this->form_validation->set_rules('status', 'status', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            redirect('/baak/job/edit/' . $id);
        } else {
            $data = array(
                'nama_perusahaan' => $this->input->post('nama_perusahaan'),
                'posisi' => $this->input->post('posisi'),
                'type' => $this->input->post('type'),
                'keterangan' => $this->input->post('keterangan'),
                'status' => $this->input->post('status'),
            );
            $this->Master_model->update_query(['id' => $id], $data, 'job_list');
            log_message('info', 'Input - job_list, data :' . json_encode($data));

            $text = $this->alert->success('Data successfully Add');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('baak/job'));
        }
    }

    public function delete($id)
    {
        $where_ = array(
            'id' => $id
        );

        $cek_ = $this->Master_model->master_get($where_, 'job_list');
        if ($cek_) {
            $where_array = array(
                'id' => $id
            );
            $this->Master_model->delete_query($where_array, 'job_list');

            $data_history = json_encode($cek_);
            log_message('info', 'Delete - data to job_list, data :' . $data_history);

            $text = $this->alert->success('record successfully deleted');
            $this->session->set_flashdata('message', $text);

            redirect(site_url('baak/job'));
        } else {
            $text = $this->alert->danger('Data not Found');
            $this->session->set_flashdata('message', $text);

            redirect(site_url('baak/job'));
        }
    }
}
