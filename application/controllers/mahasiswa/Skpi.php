<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Skpi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Feeder_lib');
        $this->load->model('Mahasiswa_model');
        $this->load->model('datatable/Skpi_dt', 'Skpi_dt');


        $level = $this->session->userdata('role');
        $action = 'get';
        $access = $this->Master_model->cek_akses('mahasiswa_profile', $level, $action);
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

    public function json_list_skpi_by_mahasiswa()
    {
        $mahasiswa = $this->Master_model->master_get(['nim' => $this->session->userdata('username')], 'mahasiswa');
        header('Content-Type: application/json');
        echo $this->Skpi_dt->json_list_skpi_by_mahasiswa($mahasiswa->kode_prodi);
    }

    public function json_list_kategori()
    {
        $this->load->model('Skpi_model');
        $mk = $this->input->post('kec');
        header('Content-Type: application/json');
        $data = $this->Skpi_model->json_select_kategori($mk);
        echo json_encode($data);
    }


    public function index()
    {
		$data_text = $this->Master_model->master_get(['id'=>3], 'informasi_text');

		$text = $this->alert->warning($data_text->text);
        $this->session->set_flashdata('message2', $text);
        
		$this->load->model('tabel/skpi_t', 'skpi_tabel');
        $data_master = $this->skpi_tabel->list_skpi_by_mahasiswa();

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
        $this->load->model('form/Skpi_f', 'skpi_form');
        $data_master = $this->skpi_form->skpi_mahasiswa_add();
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

        $this->form_validation->set_rules('id_kategori', 'id_kategori', 'trim|required|xss_clean');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            redirect('/mahasiswa/skpi/add');
        } else {
            $config['upload_path']          = './assets/berkas/skpi/';
            $config['allowed_types']        = 'pdf';
            $new_name = time() . '_' . $this->session->userdata('username') . '_skpi.pdf';
            $config['file_name'] = $new_name;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('berkas')) {
                $text = $this->alert->danger('Data failed Added. Info :' . $this->upload->display_errors());
                $this->session->set_flashdata('message', $text);
                return redirect("mahasiswa/skpi/add");
            }

            $data = array(
                'keterangan' => $this->input->post('keterangan'),
                'id_kategori' => $this->input->post('id_kategori'),
                'nim' => $this->session->userdata('username'),
                'file' => $new_name
            );
            $this->Master_model->insert_query('skpi_mahasiswa', $data);
            log_message('info', 'Input - skpi_mahasiswa, data :' . json_encode($data));

            $text = $this->alert->success('Data successfully Add');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('mahasiswa/skpi'));
        }
    }


    public function edit($id)
    {
        $data['master'] = get_object_vars($this->Master_model->master_get(['id_draft_skpi' => $id, 'nim' => $this->session->userdata('username')], 'skpi_mahasiswa'));

        if ($data['master'] != NULL) {
            if ($data['master']['status'] == '2') {
                $text = $this->alert->danger('Data SKPI status sudah ACC tidak bisa di edit');
                $this->session->set_flashdata('message', $text);
                redirect(site_url('mahasiswa/skpi'));
            }
            // if ($data['master']['status'] == 'Ditolak') {
            //     $text = $this->alert->danger('Data SKPI status sudah Ditolak tidak bisa di edit');
            //     $this->session->set_flashdata('message', $text);
            //     redirect(site_url('mahasiswa/skpi'));
            // }


            $this->header();
            $this->load->view(
                'mahasiswa/skpi/edit_skpi_mahasiswa',
                [
                    'master' => $data['master'],
                    'id_draft' => $id,
                ]
            );
            $this->footer();
        } else {
            $this->header();
            $this->load->view(
                'mahasiswa/skpi/edit_skpi_mahasiswa',
                [
                    'master' => $data['master'],
                    'id_draft' => $id
                ]
            );
            $this->footer();
        }
    }


    public function edit_action($id)
    {

        $where_ = array(
            'id_draft_skpi' => $id,
            'nim' => $this->session->userdata('username')

        );

        $cek_ = $this->Master_model->master_get($where_, 'skpi_mahasiswa');
        $config['upload_path']          = './assets/berkas/skpi/';
        $config['allowed_types']        = 'pdf';
        $new_name = time() . '_' . $this->session->userdata('username')  . rand(10, 1000) . '_skpi.pdf';
        $config['file_name'] = $new_name;
        $this->load->library('upload', $config);

        if ($cek_ == NULL) {
            if ($this->upload->do_upload('berkas')) {
                $data = array(
                    'id_draft_skpi' => $id,
                    'nim' => $this->session->userdata('username'),
                    'file' => $new_name,
                    'status' => '1'
                );
                $this->Master_model->insert_query('skpi_mahasiswa', $data);
                log_message('info', 'Input - skpi_mahasiswa, data :' . json_encode($data));

                $text = $this->alert->success('Data successfully Add');
                $this->session->set_flashdata('message', $text);
                return redirect(site_url('mahasiswa/skpi'));
            } else {
                $text = $this->alert->danger('Data failed Edit. Info :' . $this->upload->display_errors());
                $this->session->set_flashdata('message', $text);
                return redirect("mahasiswa/skpi/edit/" . $id);
            }
        } else {

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('berkas')) {

                unlink(FCPATH . 'assets/berkas/skpi/' . $cek_->file); // delete file
                $data = array(
                    'updated_at' => date('Y-m-d H:i:s'),
                    'file' => $new_name
                );
                $this->Master_model->update_query([
                    'id_draft_skpi' => $id,
                    'nim' => $this->session->userdata('username')
                ], $data, 'skpi_mahasiswa');
                log_message('info', 'edit - skpi_mahasiswa, data :' . json_encode($data));

                $text = $this->alert->success('Data successfully Updated');
                $this->session->set_flashdata('message', $text);
                redirect(site_url('mahasiswa/skpi'));
            } else {
                $text = $this->alert->success('Data successfully Updated');
                $this->session->set_flashdata('message', $text);
                redirect(site_url('mahasiswa/skpi'));
            }
        }
    }


    public function delete($id)
    {
        $where_ = array(
            'id' => $id
        );

        $cek_ = $this->Master_model->master_get($where_, 'skpi_mahasiswa');
        if ($cek_) {

            $where_array = array(
                'id' => $id
            );
            $this->Master_model->delete_query($where_array, 'skpi_mahasiswa');
            unlink(FCPATH . 'assets/berkas/skpi/' . $cek_->file); // delete file

            $data_history = json_encode($cek_);
            log_message('info', 'Delete - data to skpi_mahasiswa, data :' . $data_history);

            $text = $this->alert->success('record successfully deleted');
            $this->session->set_flashdata('message', $text);

            redirect(site_url('mahasiswa/skpi'));
        } else {
            $text = $this->alert->danger('Data not Found');
            $this->session->set_flashdata('message', $text);

            redirect(site_url('mahasiswa/skpi'));
        }
    }
}
