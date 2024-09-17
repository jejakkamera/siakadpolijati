<?php
defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class Mbkm extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('Feeder_lib');
        // $this->load->model('Mahasiswa_model');
        // $this->url = url_siku;
        // $this->key = key_siku;

        $level = $this->session->userdata('role');
        $action = 'get';
        $access = $this->Master_model->cek_akses('mahasiswa_magang', $level, $action);
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

    public function index()
    {
        $this->load->model('tabel/Mbkm_t', 'mbkm_tabel');
        $data_master = $this->mbkm_tabel->list_mbkm();

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

    public function json_list_mbkm()
    {
        $this->load->model('datatable/Mbkm_dt');
        header('Content-Type: application/json');
        echo $this->Mbkm_dt->json_list_mbkm();
    }

    public function add()
    {
        $this->load->model('form/Mbkm_f', 'mbkm_form');
        $data_master = $this->mbkm_form->add();
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
        $this->load->model('Baak_model');
        $this->form_validation->set_rules('kegiatan', 'kegiatan', 'trim|required|xss_clean');
        $this->form_validation->set_rules('penyelenggara', 'penyelenggara', 'trim|required|xss_clean');
        $this->form_validation->set_rules('tanggal_mulai', 'tanggal_mulai', 'trim|required|xss_clean');
        $this->form_validation->set_rules('tanggal_akhir', 'tanggal_akhir', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            redirect('/mahasiswa/mbkm/add');
        } else {
            $config['upload_path']          = './assets/berkas/mbkm/';
            $config['allowed_types']        = 'pdf';
            $new_name = time() . '_' . $this->session->userdata('username') . '_mbkm.pdf';
            $config['file_name'] = $new_name;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('surat_rekomendasi')) {
                $text = $this->alert->danger('Data failed Added. Info :' . $this->upload->display_errors());
                $this->session->set_flashdata('message', $text);
                redirect('/mahasiswa/mbkm/add');
            }
            //$periode = $this->Baak_model->master_get_set_input_nilai(); 
            //periode KRS
            $periode = $this->Baak_model->json_id_periode_aktif('');
            $data = array(
                'periode' => $periode->kode,
                'nim' => $this->session->userdata('username'),
                'kegiatan' => $this->input->post('kegiatan'),
                'penyelenggara' => $this->input->post('penyelenggara'),
                'tanggal_mulai' => $this->input->post('tanggal_mulai'),
                'tanggal_akhir' => $this->input->post('tanggal_akhir'),
                'status' => '1',
                'surat_rekomendasi' => $new_name
            );
            $this->Master_model->insert_query('mbkm', $data);
            log_message('info', 'Input - mbkm, data :' . json_encode($data));

            $text = $this->alert->success('Data successfully Add');
            $this->session->set_flashdata('message', $text);
            redirect('/mahasiswa/mbkm');
        }
    }

    public function edit($id)
    {
        $data_masters = get_object_vars($this->Master_model->master_get(['id' => $id, 'nim' => $this->session->userdata('username')], 'mbkm'));

        if ($data_masters) {
            if ($data_masters['status'] != '1') {
                $text = $this->alert->danger('Tidak bisa edit,status sudah lulus/tidak lulus');
                $this->session->set_flashdata('message', $text);
                redirect("mahasiswa/mbkm");
            }
            $this->load->model('form/Mbkm_f', 'mbkm_form');
            $data_master = $this->mbkm_form->edit($id);
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
        } else {
            $text = $this->alert->danger('Data Not Found');
            $this->session->set_flashdata('message', $text);
            redirect("mahasiswa/mbkm");
        }
    }

    public function edit_action($id)
    {

        $this->form_validation->set_rules('kegiatan', 'kegiatan', 'trim|required|xss_clean');
        $this->form_validation->set_rules('penyelenggara', 'penyelenggara', 'trim|required|xss_clean');
        $this->form_validation->set_rules('tanggal_mulai', 'tanggal_mulai', 'trim|required|xss_clean');
        $this->form_validation->set_rules('tanggal_akhir', 'tanggal_akhir', 'trim|required|xss_clean');
        // $this->form_validation->set_rules('status', 'status', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {

            redirect('/mahasiswa/mbkm/edit/' . $id);
        } else {
            $where_ = array(
                'id' => $id,
                'nim' => $this->session->userdata('username')
            );

            $cek_ = $this->Master_model->master_get($where_, 'mbkm');
            if ($cek_) {
                $config['upload_path']          = './assets/berkas/mbkm/';
                $config['allowed_types']        = 'pdf';
                $new_name = time() . '_' . $this->session->userdata('username') . '_mbkm.pdf';
                $config['file_name'] = $new_name;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('surat_rekomendasi')) {
                    $data = array(
                        'kegiatan' => $this->input->post('kegiatan'),
                        'penyelenggara' => $this->input->post('penyelenggara'),
                        'tanggal_mulai' => $this->input->post('tanggal_mulai'),
                        'tanggal_akhir' => $this->input->post('tanggal_akhir'),
                        // 'status' => $this->input->post('status'),
                    );
                } else {
                    $data = array(
                        'kegiatan' => $this->input->post('kegiatan'),
                        'penyelenggara' => $this->input->post('penyelenggara'),
                        'tanggal_mulai' => $this->input->post('tanggal_mulai'),
                        'tanggal_akhir' => $this->input->post('tanggal_akhir'),
                        // 'status' => $this->input->post('status'),
                        'surat_rekomendasi' => $new_name
                    );
                }

                $this->Master_model->update_query(['id' => $id], $data, 'mbkm');

                log_message('info', 'Upload_keputusan - mbkm, data :' . json_encode($data));

                $text = $this->alert->success('Data Magang Edit');
                $this->session->set_flashdata('message', $text);
                redirect('/mahasiswa/mbkm');
            } else {
                $text = $this->alert->danger('Data MBKM Not Found');
                $this->session->set_flashdata('message', $text);
                redirect('/mahasiswa/mbkm/edit/' . $id);
            }
        }
    }

    public function update_status($id)
    {
        $data_masters = get_object_vars($this->Master_model->master_get(['id' => $id, 'nim' => $this->session->userdata('username')], 'mbkm'));

        if ($data_masters) {
            if ($data_masters['status'] != '1') {
                $text = $this->alert->danger('Tidak bisa edit,status sudah lulus/tidak lulus');
                $this->session->set_flashdata('message', $text);
                redirect("mahasiswa/mbkm");
            }
            $this->load->model('form/Mbkm_f', 'mbkm_form');
            $data_master = $this->mbkm_form->update_status($id);
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
        } else {
            $text = $this->alert->danger('Data Not Found');
            $this->session->set_flashdata('message', $text);
            redirect("mahasiswa/mbkm");
        }
    }

    public function update_status_action($id)
    {
        $this->form_validation->set_rules('status', 'status', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            redirect('/mahasiswa/mbkm/update_status/' . $id);
        } else {
            $where_ = array(
                'id' => $id,
                'nim' => $this->session->userdata('username')
            );

            $cek_ = $this->Master_model->master_get($where_, 'mbkm');
            $cek_ = $this->Master_model->master_get($where_, 'mbkm');
            if ($cek_) {
                $config['upload_path']          = './assets/berkas/mbkm/';
                $config['allowed_types']        = 'pdf';
                $new_name = time() . '_' . $this->session->userdata('username') . '_mbkm_transkip.pdf';
                $config['file_name'] = $new_name;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('transkip')) {
                    $data = array(
                        'status' => $this->input->post('status'),
                    );
                } else {
                    $data = array(
                        'status' => $this->input->post('status'),
                        'transkip' => $new_name
                    );
                }

                $this->Master_model->update_query(['id' => $id], $data, 'mbkm');

                log_message('info', 'Upload_keputusan - mbkm, data :' . json_encode($data));

                $text = $this->alert->success('Update Status successfully');
                $this->session->set_flashdata('message', $text);
                redirect('/mahasiswa/mbkm');
            } else {
                $text = $this->alert->danger('Data MBKM Not Found');
                $this->session->set_flashdata('message', $text);
                redirect('/mahasiswa/mbkm/update_status/' . $id);
            }
        }
    }

    public function delete($id)
    {
        $where_ = array(
            'id' => $id,
            'nim' => $this->session->userdata('username')
        );

        $cek_ = $this->Master_model->master_get($where_, 'mbkm');

        if ($cek_) {

            $this->Master_model->delete_query($where_, 'mbkm');

            $data_history = json_encode($cek_);
            log_message('info', 'Delete - data to mbkm, data :' . $data_history);

            $text = $this->alert->success('record successfully deleted');
            $this->session->set_flashdata('message', $text);

            redirect("mahasiswa/mbkm");
        } else {
            $text = $this->alert->danger('Data not Found');
            $this->session->set_flashdata('message', $text);
            redirect("mahasiswa/mbkm");
        }
    }
}
