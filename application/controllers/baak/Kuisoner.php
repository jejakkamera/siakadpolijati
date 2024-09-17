<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kuisoner extends CI_Controller
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

    public function list_kuisoner_dosen()
    {
        $this->load->model('tabel/Kuisoner_t', 'kuisoner_tabel');
        $data_master = $this->kuisoner_tabel->list_kuisoner();


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

    public function json_list_kuisoner_dosen()
    {
        $this->load->model('datatable/Kuisoner_dt');
        header('Content-Type: application/json');
        echo $this->Kuisoner_dt->json_list_kuisoner_dosen();
    }

    public function kuisoner_dosen_select()
    {
        $this->load->model('form/Kuisoner_f', 'kuisoner_form');
        $data_master = $this->kuisoner_form->kuisoner_dosen_select();

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

    public function kuisoner_dosen_select_action()
    {
        $this->form_validation->set_rules('id_periode', 'id_periode', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            redirect('/baak/kuisoner/kuisoner_dosen_select');
        } else {
            $sql = "SELECT kuisoner_jawaban.id trx,periode,id_pertanyaan,email,jawaban,pertanyaan
                FROM kuisoner_pertanyaan 
				join kuisoner_jawaban on kuisoner_jawaban.id_pertanyaan=kuisoner_pertanyaan.id
                where kuisoner_pertanyaan.role='dosen' and kuisoner_jawaban.periode=".$this->input->post('id_periode');
            $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
            }	else{
                $result = null;
            }
            $this->header();
            $this->load->view(
                'master/kuisoner',
                [
                    'data_detail' => $result,
                ]
            );
            $this->footer();
        }
        
    }

    public function add_kuisoner_dosen()
    {
        $this->load->model('form/Kuisoner_f', 'kuisoner_form');
        $data_master = $this->kuisoner_form->add_kuisoner_dosen();

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

    public function add_kuisoner_dosen_action()
    {

        $this->form_validation->set_rules('pertanyaan', 'pertanyaan', 'trim|required|xss_clean');
        $this->form_validation->set_rules('status', 'status', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            redirect('/baak/kuisoner/add_kuisoner_dosen');
        } else {
            $data = array(
                'pertanyaan' => $this->input->post('pertanyaan'),
                'status' => $this->input->post('status'),
                'role' => 'dosen',
            );
            $this->Master_model->insert_query('kuisoner_pertanyaan', $data);
            log_message('info', 'Input - pertanyaan_kuisoner_dosen, data :' . json_encode($data));

            $text = $this->alert->success('Data successfully Add');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('baak/kuisoner/list_kuisoner_dosen'));
        }
    }


    public function edit_kuisoner_dosen($id)
    {
        $this->load->model('form/Kuisoner_f', 'kuisoner_form');
        $data_master = $this->kuisoner_form->edit_kuisoner_dosen($id);
        $data_masters = get_object_vars($this->Master_model->master_get(['id' => $id], 'kuisoner_pertanyaan'));

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

    public function edit_kuisoner_dosen_action($id)
    {
        $this->form_validation->set_rules('pertanyaan', 'pertanyaan', 'trim|required|xss_clean');
        $this->form_validation->set_rules('status', 'status', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            redirect('/baak/kuisoner/edit_kuisoner_dosen/' . $id);
        } else {
            $data = array(
                'pertanyaan' => $this->input->post('pertanyaan'),
                'status' => $this->input->post('status'),
            );
            $this->Master_model->update_query(['id' => $id], $data, 'kuisoner_pertanyaan');
            log_message('info', 'Input - pertanyaan_kuisoner_dosen, data :' . json_encode($data));

            $text = $this->alert->success('Data successfully Add');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('baak/kuisoner/list_kuisoner_dosen'));
        }
    }

    public function delete_kuisoner_dosen($id)
    {
        $where_ = array(
            'id' => $id
        );

        $cek_ = $this->Master_model->master_get($where_, 'kuisoner_pertanyaan');
        if ($cek_) {
            $data = array(
                'show' => 'no',
            );
            $this->Master_model->update_query(['id' => $id], $data, 'kuisoner_pertanyaan');
            log_message('info', 'Delete - data to kuisoner_pertanyaan, data :' . $data_history);

            $text = $this->alert->success('record successfully deleted');
            $this->session->set_flashdata('message', $text);

            redirect(site_url('baak/kuisoner/list_kuisoner_dosen'));
        } else {
            $text = $this->alert->danger('Data not Found');
            $this->session->set_flashdata('message', $text);

            redirect(site_url('baak/kuisoner/list_kuisoner_dosen'));
        }
    }

     public function list_kuisoner_mhs()
    {
        $this->load->model('tabel/Kuisoner_t', 'kuisoner_tabel');
        $data_master = $this->kuisoner_tabel->list_kuisoner_mhs();


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

	 public function kuisoner_mhs_select_action()
    {
        $this->form_validation->set_rules('id_periode', 'id_periode', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            redirect('/baak/kuisoner/kuisoner_mhs_select');
        } else {
            $sql = "SELECT kuisoner_jawaban.id trx,periode,id_pertanyaan,email,jawaban,pertanyaan
                FROM kuisoner_pertanyaan 
				join kuisoner_jawaban on kuisoner_jawaban.id_pertanyaan=kuisoner_pertanyaan.id
                where kuisoner_pertanyaan.role='mhs' and kuisoner_jawaban.periode=".$this->input->post('id_periode');
            $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
            }	else{
                $result = null;
            }
            $this->header();
            $this->load->view(
                'master/kuisoner',
                [
                    'data_detail' => $result,
                ]
            );
            $this->footer();
        }
        
    }

	public function kuisoner_mhs_select()
    {
        $this->load->model('form/Kuisoner_f', 'kuisoner_form');
        $data_master = $this->kuisoner_form->kuisoner_mhs_select();

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

    public function json_list_kuisoner_mhs()
    {
        $this->load->model('datatable/Kuisoner_dt');
        header('Content-Type: application/json');
        echo $this->Kuisoner_dt->json_list_kuisoner_mhs();
    }

    public function add_kuisoner_mhs()
    {
        $this->load->model('form/Kuisoner_f', 'kuisoner_form');
        $data_master = $this->kuisoner_form->add_kuisoner_mhs();

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

    public function add_kuisoner_mhs_action()
    {

        $this->form_validation->set_rules('pertanyaan', 'pertanyaan', 'trim|required|xss_clean');
        $this->form_validation->set_rules('status', 'status', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            redirect('/baak/kuisoner/add_kuisoner_mhs');
        } else {
            $data = array(
                'pertanyaan' => $this->input->post('pertanyaan'),
                'status' => $this->input->post('status'),
                'role' => 'mhs',
            );
            $this->Master_model->insert_query('kuisoner_pertanyaan', $data);
            log_message('info', 'Input - pertanyaan_kuisoner_mhs, data :' . json_encode($data));

            $text = $this->alert->success('Data successfully Add');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('baak/kuisoner/list_kuisoner_mhs'));
        }
    }


    public function edit_kuisoner_mhs($id)
    {
        $this->load->model('form/Kuisoner_f', 'kuisoner_form');
        $data_master = $this->kuisoner_form->edit_kuisoner_mhs($id);
        $data_masters = get_object_vars($this->Master_model->master_get(['id' => $id], 'kuisoner_pertanyaan'));

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

    public function edit_kuisoner_mhs_action($id)
    {
        $this->form_validation->set_rules('pertanyaan', 'pertanyaan', 'trim|required|xss_clean');
        $this->form_validation->set_rules('status', 'status', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            redirect('/baak/kuisoner/edit_kuisoner_mhs/' . $id);
        } else {
            $data = array(
                'pertanyaan' => $this->input->post('pertanyaan'),
                'status' => $this->input->post('status'),
            );
            $this->Master_model->update_query(['id' => $id], $data, 'kuisoner_pertanyaan');
            log_message('info', 'Input - pertanyaan_kuisoner_mhs, data :' . json_encode($data));

            $text = $this->alert->success('Data successfully Add');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('baak/kuisoner/list_kuisoner_mhs'));
        }
    }

    public function delete_kuisoner_mhs($id)
    {
        $where_ = array(
            'id' => $id
        );

        $cek_ = $this->Master_model->master_get($where_, 'kuisoner_pertanyaan');
        if ($cek_) {
            $data = array(
                'show' => 'no',
            );
            $this->Master_model->update_query(['id' => $id], $data, 'kuisoner_pertanyaan');
            log_message('info', 'Delete - data to kuisoner_pertanyaan, data :' . $data_history);

            $text = $this->alert->success('record successfully deleted');
            $this->session->set_flashdata('message', $text);

            redirect(site_url('baak/kuisoner/list_kuisoner_mhs'));
        } else {
            $text = $this->alert->danger('Data not Found');
            $this->session->set_flashdata('message', $text);

            redirect(site_url('baak/kuisoner/list_kuisoner_mhs'));
        }
    }

     public function list_kuisoner_lulusan()
    {
        $this->load->model('tabel/Kuisoner_t', 'kuisoner_tabel');
        $data_master = $this->kuisoner_tabel->list_kuisoner_lulusan();


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

    public function json_list_kuisoner_lulusan()
    {
        $this->load->model('datatable/Kuisoner_dt');
        header('Content-Type: application/json');
        echo $this->Kuisoner_dt->json_list_kuisoner_lulusan();
    }

    public function add_kuisoner_lulusan()
    {
        $this->load->model('form/Kuisoner_f', 'kuisoner_form');
        $data_master = $this->kuisoner_form->add_kuisoner_lulusan();

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

    public function add_kuisoner_lulusan_action()
    {

        $this->form_validation->set_rules('pertanyaan', 'pertanyaan', 'trim|required|xss_clean');
        $this->form_validation->set_rules('status', 'status', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            redirect('/baak/kuisoner/add_kuisoner_lulusan');
        } else {
            $data = array(
                'pertanyaan' => $this->input->post('pertanyaan'),
                'status' => $this->input->post('status'),
                'role' => 'lulusan',
            );
            $this->Master_model->insert_query('kuisoner_pertanyaan', $data);
            log_message('info', 'Input - pertanyaan_kuisoner_lulusan, data :' . json_encode($data));

            $text = $this->alert->success('Data successfully Add');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('baak/kuisoner/list_kuisoner_lulusan'));
        }
    }


    public function edit_kuisoner_lulusan($id)
    {
        $this->load->model('form/Kuisoner_f', 'kuisoner_form');
        $data_master = $this->kuisoner_form->edit_kuisoner_lulusan($id);
        $data_masters = get_object_vars($this->Master_model->master_get(['id' => $id], 'kuisoner_pertanyaan'));

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

    public function edit_kuisoner_lulusan_action($id)
    {
        $this->form_validation->set_rules('pertanyaan', 'pertanyaan', 'trim|required|xss_clean');
        $this->form_validation->set_rules('status', 'status', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            redirect('/baak/kuisoner/edit_kuisoner_lulusan/' . $id);
        } else {
            $data = array(
                'pertanyaan' => $this->input->post('pertanyaan'),
                'status' => $this->input->post('status'),
            );
            $this->Master_model->update_query(['id' => $id], $data, 'kuisoner_pertanyaan');
            log_message('info', 'Input - pertanyaan_kuisoner_lulusan, data :' . json_encode($data));

            $text = $this->alert->success('Data successfully Add');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('baak/kuisoner/list_kuisoner_lulusan'));
        }
    }

    public function delete_kuisoner_lulusan($id)
    {
        $where_ = array(
            'id' => $id
        );

        $cek_ = $this->Master_model->master_get($where_, 'kuisoner_pertanyaan');
        if ($cek_) {
            $data = array(
                'show' => 'no',
            );
            $this->Master_model->update_query(['id' => $id], $data, 'kuisoner_pertanyaan');
            log_message('info', 'Delete - data to kuisoner_pertanyaan, data :' . $data_history);

            $text = $this->alert->success('record successfully deleted');
            $this->session->set_flashdata('message', $text);

            redirect(site_url('baak/kuisoner/list_kuisoner_lulusan'));
        } else {
            $text = $this->alert->danger('Data not Found');
            $this->session->set_flashdata('message', $text);

            redirect(site_url('baak/kuisoner/list_kuisoner_lulusan'));
        }
    }

	 public function kuisoner_lulusan_select()
    {
        $this->load->model('form/Kuisoner_f', 'kuisoner_form');
        $data_master = $this->kuisoner_form->kuisoner_lulusan_select();

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

    public function kuisoner_lulusan_select_action()
    {
        $this->form_validation->set_rules('id_periode', 'id_periode', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            redirect('/baak/kuisoner/kuisoner_lulusan_select');
        } else {
            $sql = "SELECT kuisoner_jawaban.id trx,periode,id_pertanyaan,email,jawaban,pertanyaan
                FROM kuisoner_pertanyaan 
				join kuisoner_jawaban on kuisoner_jawaban.id_pertanyaan=kuisoner_pertanyaan.id
                where kuisoner_pertanyaan.role='lulusan'" ;
            $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
            }	else{
                $result = null;
            }
            $this->header();
            $this->load->view(
                'master/kuisoner',
                [
                    'data_detail' => $result,
                ]
            );
            $this->footer();
        }
        
    }
}
