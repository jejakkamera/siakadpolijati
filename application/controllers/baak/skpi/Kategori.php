<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->library('Feeder_lib');
        // $this->load->model('Baak_model');
        $this->load->model('form/Skpi_f', 'skpi_form');

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

    public function list_kategori()
    {
        $this->load->model('tabel/skpi_t', 'skpi_tabel');
        $data_master = $this->skpi_tabel->list_kategori();


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

    public function list_skpi()
    {
        $this->load->model('tabel/skpi_t', 'skpi_tabel');
        $data_master = $this->skpi_tabel->list_skpi();


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


    public function add()
    {
        $data_master = $this->skpi_form->kategori_skpi_add();

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

    public function add_action()
    {

        // $this->form_validation->set_rules('kode_prodi', 'kode_prodi', 'trim|required|xss_clean');
        $this->form_validation->set_rules('draft_skpi', 'draft_skpi', 'trim|required|xss_clean');
        $this->form_validation->set_rules('status', 'status', 'trim|required|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            redirect('/baak/skpi/kategori/add');
        } else {
            $data = array(
                // 'kode_prodi' => $this->input->post('kode_prodi'),
                'draft_skpi' => $this->input->post('draft_skpi'),
                'status' => $this->input->post('status'),
            );
            $this->Master_model->insert_query('skpi_list', $data);
            log_message('info', 'Input - skpi_list, data :' . json_encode($data));

            $text = $this->alert->success('Data successfully Add');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('baak/skpi/kategori/list_skpi'));
        }
    }

    public function edit($id)
    {
        $data_masters = get_object_vars($this->Master_model->master_get(['id' => $id], 'skpi_list'));
        $data_master = $this->skpi_form->kategori_skpi_edit($id);
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

        // $this->form_validation->set_rules('kode_prodi', 'kode_prodi', 'trim|required|xss_clean');
        $this->form_validation->set_rules('draft_skpi', 'draft_skpi', 'trim|required|xss_clean');
        $this->form_validation->set_rules('status', 'status', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            redirect('/baak/skpi/kategori/edit/' . $id);
        } else {
            $cek_ = $this->Master_model->master_get(['id' => $id], 'skpi_list');

            if (!$cek_) {
                $text = $this->alert->danger('SKPI Not Found');
                $this->session->set_flashdata('message', $text);
                redirect(site_url('baak/skpi/kategori/list_skpi'));
            } else {
                $data = array(
                    // 'kode_prodi' => $this->input->post('kode_prodi'),
                    'draft_skpi' => $this->input->post('draft_skpi'),
                    'status' => $this->input->post('status'),
                    'updated_at' => date('Y-m-d H:i:s')
                );
                $this->Master_model->update_query(['id' => $id], $data, 'skpi_list');
                log_message('info', 'Update - skpi_list, data :' . json_encode($data));

                $text = $this->alert->success('Data successfully Update');
                $this->session->set_flashdata('message', $text);
                redirect(site_url('baak/skpi/kategori/list_skpi'));
            }
        }
    }

    public function delete($id)
    {
        $where_ = array(
            'id' => $id
        );

        $cek_ = $this->Master_model->master_get($where_, 'skpi_list');
        if ($cek_) {
            $where_array = array(
                'id' => $id
            );
            $this->Master_model->delete_query($where_array, 'skpi_list');

            $data_history = json_encode($cek_);
            log_message('info', 'Delete - data to skpi_list, data :' . $data_history);

            $text = $this->alert->success('record successfully deleted');
            $this->session->set_flashdata('message', $text);

            redirect(site_url('baak/skpi/kategori/list_skpi'));
        } else {
            $text = $this->alert->danger('Data not Found');
            $this->session->set_flashdata('message', $text);

            redirect(site_url('baak/skpi/kategori/list_skpi'));
        }
    }

    public function list_prodi_skpi()
    {
        $this->load->model('tabel/skpi_t', 'skpi_tabel');
        $data_master = $this->skpi_tabel->list_prodi_skpi();


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

    public function draft_prodi($id_prodi)
    {
        $draft = $this->Master_model->master_result(['status' => '1'], 'skpi_list');
        $prodi = $this->Master_model->master_get(['kode_program_studi' => $id_prodi], 'dikti_prodi');

        $postDraft = [];
        foreach ($draft as $key => $value) {
            $skpi_prodi = $this->Master_model->master_get(['kode_prodi' => $id_prodi, 'id_draft' => $value['id']], 'skpi_prodi');

            if ($skpi_prodi) {
                $postDraft[] = array(
                    'draft' => $value,
                    'selected' => True
                );
            } else {
                $postDraft[] = array(
                    'draft' => $value,
                    'selected' => False
                );
            }
        }
        // var_dump($postDraft);
        // die;
        $this->header();
        $this->load->view(
            'baak/skpi/skpi_prodi',
            [
                'draft' => $postDraft,
                'prodi' => $prodi
            ]
        );
        $this->footer();
    }

    public function add_skpi_prodi($kode_prodi)
    {

        $this->Master_model->delete_query(['kode_prodi' => $kode_prodi], 'skpi_prodi');

        foreach ($this->input->post('draft') as $key => $value) {
            $data = array(
                // 'kode_prodi' => $this->input->post('kode_prodi'),
                'id_draft' => $value,
                'kode_prodi' => $kode_prodi,
            );
            $this->Master_model->insert_query('skpi_prodi', $data);
            log_message('info', 'Input - skpi_prodi, data :' . json_encode($data));
        }

        $text = $this->alert->success('Data successfully Add');
        $this->session->set_flashdata('message', $text);
        redirect(site_url('baak/skpi/kategori/list_prodi_skpi'));
    }
}
