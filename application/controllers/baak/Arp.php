<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Arp extends CI_Controller
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

        $this->load->model('datatable/Arp_dt', 'arp_dt');
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

    public function list_arp()
    {
        $this->load->model('tabel/Arp_t', 'arp_tabel');
        $data_master = $this->arp_tabel->list_arp();


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

    public function add_arp()
    {
        $data['role'] = $this->db->query('SELECT user.role FROM user GROUP BY role')->result_array();
        $data_gambar = $this->db->get('informasi_gambar')->result_array();
        $this->header();
        $this->load->view(
            'baak/arp/add_list_arp',
            [
                'role' => $data['role'],
                'data_gambar' => $data_gambar
            ]
        );
        $this->footer();
    }

    public function add_arp_action()
    {
        $this->form_validation->set_rules('judul_arp', 'judul_arp', 'trim|required|xss_clean');
        $this->form_validation->set_rules('deskripsi_arp', 'deskripsi_arp', 'trim|required');
        $this->form_validation->set_rules('role[]', 'role', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            redirect('/baak/arp/add_arp');
        } else {
            $data = array(
                'judul_arp' => $this->input->post('judul_arp'),
                'deskripsi_arp' => $this->input->post('deskripsi_arp'),
                'role' => json_encode($this->input->post('role'))
            );
            $this->Master_model->insert_query('arp', $data);
            log_message('info', 'Input - arp by BAAK, data :' . json_encode($data));

            $text = $this->alert->success('Data successfully Add');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('/baak/arp/list_arp'));
        }
    }


    public function edit_arp($id)
    {
        $data['role'] = $this->db->query('SELECT user.role FROM user GROUP BY role')->result_array();
        $data['master'] = get_object_vars($this->Master_model->master_get(['id' => $id], 'arp'));
        $data_gambar = $this->db->get('informasi_gambar')->result_array();
        $this->header();
        $this->load->view(
            'baak/arp/edit_arp',
            [
                'master' => $data['master'],
                'role' => $data['role'],
                'data_gambar' => $data_gambar
            ]
        );
        $this->footer();
    }

    public function edit_arp_action($id)
    {
        $this->form_validation->set_rules('judul_arp', 'judul_arp', 'trim|required|xss_clean');
        $this->form_validation->set_rules('deskripsi_arp', 'deskripsi_arp', 'trim|required');
        $this->form_validation->set_rules('role[]', 'role', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            redirect('/baak/arp/add_arp');
        } else {
            $data = array(
                'judul_arp' => $this->input->post('judul_arp'),
                'deskripsi_arp' => $this->input->post('deskripsi_arp'),
                'role' => json_encode($this->input->post('role'))
            );
            $this->Master_model->update_query(['id' => $id], $data, 'arp');
            log_message('info', 'edit - arp by BAAK, data :' . json_encode($data));

            $text = $this->alert->success('Data successfully Updated');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('/baak/arp/list_arp'));
        }
    }

    public function delete_arp($id)
    {
        $where_ = array(
            'id' => $id
        );

        $cek_ = $this->Master_model->master_get($where_, 'arp');
        if ($cek_) {
            $where_array = array(
                'id' => $id
            );
            $this->Master_model->delete_query($where_array, 'arp');

            $data_history = json_encode($cek_);
            log_message('info', 'Delete - data to arp, data :' . $data_history);

            $text = $this->alert->success('record successfully deleted');
            $this->session->set_flashdata('message', $text);

            redirect(site_url('baak/arp/list_arp'));
        } else {
            $text = $this->alert->danger('Data not Found');
            $this->session->set_flashdata('message', $text);

            redirect(site_url('baak/arp/list_arp'));
        }
    }

    public function json_list_arp()
    {
        header('Content-Type: application/json');
        echo $this->arp_dt->json_list_arp();
    }
}
