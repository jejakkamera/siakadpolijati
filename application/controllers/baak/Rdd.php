<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rdd extends CI_Controller
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

        $this->load->model('datatable/Rdd_dt', 'rdd_dt');
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

    public function type()
    {
        $this->load->model('tabel/Rdd_t', 'rdd_tabel');
        $data_master = $this->rdd_tabel->list_type();


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

    public function add_type()
    {
        $this->load->model('form/Rdd_f', 'rdd_form');
        $data_master = $this->rdd_form->type_add();

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

    public function add_type_action()
    {
        $this->form_validation->set_rules('type', 'type', 'trim|required|xss_clean');
        $this->form_validation->set_rules('status', 'status', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            redirect('/baak/rdd/add_type');
        } else {
            $data = array(
                'type' => $this->input->post('type'),
                'status' => $this->input->post('status'),
            );
            $this->Master_model->insert_query('rdd_type', $data);
            log_message('info', 'Input - rdd_type, data :' . json_encode($data));

            $text = $this->alert->success('Data successfully Add');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('baak/rdd/type'));
        }
    }

    public function type_edit($id)
    {
        $this->load->model('form/Rdd_f', 'rdd_form');
        $data_masters = get_object_vars($this->Master_model->master_get(['id' => $id], 'rdd_type'));
        $data_master = $this->rdd_form->type_edit($id);
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

    public function type_edit_action($id)
    {
        $this->form_validation->set_rules('type', 'type', 'trim|required|xss_clean');
        $this->form_validation->set_rules('status', 'status', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            redirect('/baak/rdd/type_edit/' . $id);
        } else {
            $cek_ = $this->Master_model->master_get(['id' => $id], 'rdd_type');

            if (!$cek_) {
                $text = $this->alert->danger('Kategori Not Found');
                $this->session->set_flashdata('message', $text);
                redirect(site_url('baak/rdd/type'));
            } else {
                $data = array(
                    'type' => $this->input->post('type'),
                    'status' => $this->input->post('status'),
                    'updated_at' => date('Y-m-d H:i:s')
                );
                $this->Master_model->update_query(['id' => $id], $data, 'rdd_type');
                log_message('info', 'Update - rdd_type, data :' . json_encode($data));

                $text = $this->alert->success('Data successfully Update');
                $this->session->set_flashdata('message', $text);
                redirect(site_url('baak/rdd/type'));
            }
        }
    }

    public function type_delete($id)
    {
        $where_ = array(
            'id' => $id
        );

        $cek_ = $this->Master_model->master_get($where_, 'rdd_type');
        if ($cek_) {
            $where_array = array(
                'id' => $id
            );
            $this->Master_model->delete_query($where_array, 'rdd_type');

            $data_history = json_encode($cek_);
            log_message('info', 'Delete - data to rdd_type, data :' . $data_history);

            $text = $this->alert->success('record successfully deleted');
            $this->session->set_flashdata('message', $text);

            redirect(site_url('baak/rdd/type'));
        } else {
            $text = $this->alert->danger('Data not Found');
            $this->session->set_flashdata('message', $text);

            redirect(site_url('baak/rdd/type'));
        }
    }

    public function list()
    {
        $this->load->model('tabel/rdd_t', 'rdd_tabel');
        $data_master = $this->rdd_tabel->list_rdd();


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

    public function add_list()
    {
        $data['role'] = $this->db->query('SELECT user.role FROM user GROUP BY role')->result_array();
        $data['type'] = $this->db->query('SELECT * FROM rdd_type where status = "aktif" ')->result_array();
        $this->header();
        $this->load->view(
            'baak/rdd/add_list_rdd',
            [
                'prodi' => $data['prodi'],
                'type' => $data['type'],
                'role' => $data['role'],
            ]
        );
        $this->footer();
    }

    public function add_list_action()
    {
        $this->form_validation->set_rules('type', 'type', 'trim|required|xss_clean');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required|xss_clean');
        $this->form_validation->set_rules('nomer_rdd', 'nomer_rdd', 'trim|required|xss_clean');
        $this->form_validation->set_rules('subjek', 'subjek', 'trim|required');
        $this->form_validation->set_rules('role[]', 'role', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            redirect('/baak/rdd/add_list');
        } else {
            $config['upload_path']          = './assets/berkas/rdd/';
            $config['allowed_types']        = 'pdf';
            $new_name = time() . '_' . rand(10, 100) . '_rdd.pdf';
            $config['file_name'] = $new_name;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $text = $this->alert->danger('Data failed Added. Info :' . $this->upload->display_errors());
                $this->session->set_flashdata('message', $text);
                return redirect('/baak/rdd/add_list');
            }

            $data = array(
                'tanggal' => $this->input->post('tanggal'),
                'id_type' => $this->input->post('type'),
                'nomer_rdd' => $this->input->post('nomer_rdd'),
                'subjek' => $this->input->post('subjek'),
                'file' => $new_name,
                'role' => json_encode($this->input->post('role'))
            );
            $this->Master_model->insert_query('rdd_list', $data);
            log_message('info', 'Input - rdd_list by BAAK, data :' . json_encode($data));

            $text = $this->alert->success('Data successfully Add');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('/baak/rdd/list'));
        }
    }

    public function list_edit($id)
    {
        $data['role'] = $this->db->query('SELECT user.role FROM user GROUP BY role')->result_array();
        $data['master'] = get_object_vars($this->Master_model->master_get(['id' => $id], 'rdd_list'));
        $data['type'] = $this->db->query('SELECT * FROM rdd_type where status = "aktif" ')->result_array();

        $this->header();
        $this->load->view(
            'baak/rdd/edit_list_rdd',
            [
                'master' => $data['master'],
                'type' => $data['type'],
                'role' => $data['role'],
            ]
        );
        $this->footer();
    }


    public function edit_list_action($id)
    {
        $this->form_validation->set_rules('type', 'type', 'trim|required|xss_clean');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required|xss_clean');
        $this->form_validation->set_rules('nomer_rdd', 'nomer_rdd', 'trim|required|xss_clean');
        $this->form_validation->set_rules('subjek', 'subjek', 'trim|required');
        $this->form_validation->set_rules('role[]', 'role', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            redirect('/baak/rdd/edit_list/' . $id);
        } else {
            $where_ = array(
                'id' => $id
            );
            $cek_ = $this->Master_model->master_get($where_, 'rdd_list');

            $config['upload_path']          = './assets/berkas/rdd/';
            $config['allowed_types']        = 'pdf';
            $new_name = time() . '_' . rand(10, 100) . '_rdd.pdf';
            $config['file_name'] = $new_name;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $data = array(
                    'tanggal' => $this->input->post('tanggal'),
                    'id_type' => $this->input->post('type'),
                    'nomer_rdd' => $this->input->post('nomer_rdd'),
                    'subjek' => $this->input->post('subjek'),
                    'role' => json_encode($this->input->post('role'))
                    // 'file' => $new_name
                );
            } else {
                unlink(FCPATH . 'assets/berkas/rdd/' . $cek_->file); // delete file
                $data = array(
                    'tanggal' => $this->input->post('tanggal'),
                    'id_type' => $this->input->post('type'),
                    'nomer_rdd' => $this->input->post('nomer_rdd'),
                    'subjek' => $this->input->post('subjek'),
                    'file' => $new_name,
                    'role' => json_encode($this->input->post('role'))
                );
            }


            $this->Master_model->update_query(['id' => $id], $data, 'rdd_list');
            log_message('info', 'Validasi - rdd_list, data :' . json_encode($data));

            $text = $this->alert->success('Data successfully Updated');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('baak/rdd/list'));
        }
    }

    public function list_delete($id)
    {
        $where_ = array(
            'id' => $id
        );

        $cek_ = $this->Master_model->master_get($where_, 'rdd_list');
        if ($cek_) {
            $where_array = array(
                'id' => $id
            );
            $this->Master_model->delete_query($where_array, 'rdd_list');

            $data_history = json_encode($cek_);
            log_message('info', 'Delete - data to rdd_list, data :' . $data_history);

            $text = $this->alert->success('record successfully deleted');
            $this->session->set_flashdata('message', $text);

            redirect(site_url('baak/rdd/list'));
        } else {
            $text = $this->alert->danger('Data not Found');
            $this->session->set_flashdata('message', $text);

            redirect(site_url('baak/rdd/list'));
        }
    }

    public function json_list_type()
    {
        header('Content-Type: application/json');
        echo $this->rdd_dt->json_list_type();
    }

    public function json_list_rdd()
    {
        header('Content-Type: application/json');
        echo $this->rdd_dt->json_list_rdd();
    }
}
