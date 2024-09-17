<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Validasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->library('Feeder_lib');
        // $this->load->model('Baak_model');
        $this->load->model('form/Skpi_f', 'skpi_form');

        $level = $this->session->userdata('role');
        $action = 'get';
        $access = $this->Master_model->cek_akses('baak_mahasiswa', $level, $action);
        if ($access == 0) {
            $text = $this->alert->danger('You do not have access');
            $this->session->set_flashdata('message', $text);
            redirect("welcome/dashboard");
        }
    }

    public function json_list_prodi()
    {
        $this->load->model('Skpi_model');
        $mk = $this->input->post('kec');
        header('Content-Type: application/json');
        $data = $this->Skpi_model->json_select_prodi($mk);
        echo json_encode($data);
    }

    public function json_list_mahasiswa($prodi)
    {
        $this->load->model('Skpi_model');
        $mk = $this->input->post('kec');
        header('Content-Type: application/json');
        $data = $this->Skpi_model->json_list_mahasiswa($mk, $prodi);
        echo json_encode($data);
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
        // var_dump($this->session->userdata());
        // die;
        $this->load->model('tabel/skpi_t', 'skpi_tabel');
        $data_master = $this->skpi_tabel->validasi();
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


    // public function add()
    // {
    //     $data['prodi'] = $this->db->query('SELECT * FROM dikti_prodi ')->result_array();
    //     $data['kategori'] = $this->db->query('SELECT * FROM skpi_kategori where status = "aktif" ')->result_array();
    //     $this->header();
    //     $this->load->view(
    //         'baak/skpi/add_skpi_mahasiswa',
    //         [
    //             'prodi' => $data['prodi'],
    //             'kategori' => $data['kategori']
    //         ]
    //     );
    //     $this->footer();
    // }

    // public function add_action()
    // {
    //     // var_dump("adasd");
    //     // die;
    //     // $this->form_validation->set_rules('prodi', 'prodi', 'trim|required|xss_clean');
    //     $this->form_validation->set_rules('mahasiswa', 'mahasiswa', 'trim|required|xss_clean');
    //     $this->form_validation->set_rules('kategori', 'kategori', 'trim|required|xss_clean');
    //     $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required|xss_clean');
    //     if ($this->form_validation->run() == FALSE) {
    //         // var_dump($this->form_validation);
    //         // die;
    //         redirect('/baak/skpi/validasi/add');
    //     } else {
    //         $config['upload_path']          = './assets/berkas/skpi/';
    //         $config['allowed_types']        = 'pdf';
    //         $new_name = time() . '_' . $this->input->post('mahasiswa') . '_skpi.pdf';
    //         $config['file_name'] = $new_name;

    //         $this->load->library('upload', $config);
    //         if (!$this->upload->do_upload('berkas')) {
    //             $text = $this->alert->danger('Data failed Added. Info :' . $this->upload->display_errors());
    //             $this->session->set_flashdata('message', $text);
    //             return redirect("/baak/skpi/validasi/add");
    //         }

    //         $data = array(
    //             'keterangan' => $this->input->post('keterangan'),
    //             'id_kategori' => $this->input->post('kategori'),
    //             'nim' => $this->input->post('mahasiswa'),
    //             'file' => $new_name
    //         );
    //         $this->Master_model->insert_query('skpi_mahasiswa', $data);
    //         log_message('info', 'Input - skpi_mahasiswa by BAAK, data :' . json_encode($data));

    //         $text = $this->alert->success('Data successfully Add');
    //         $this->session->set_flashdata('message', $text);
    //         redirect(site_url('/baak/skpi/validasi'));
    //     }
    // }

    public function edit($id)
    {

        $data['master'] = get_object_vars($this->Master_model->master_get(['id' => $id], 'skpi_mahasiswa'));

        $this->header();
        $this->load->view(
            'baak/skpi/edit_skpi_mahasiswa_validasi',
            [
                'master' => $data['master'],
                'id_draft' => $data['master']['id_draft_skpi'],
                'nim' => $data['master']['nim'],
            ]
        );
        $this->footer();
    }

    public function edit_action($id, $nim)
    {
        $where_ = array(
            'id_draft_skpi' => $id,
            'nim' => $nim

        );

        $cek_ = $this->Master_model->master_get($where_, 'skpi_mahasiswa');
        $config['upload_path']          = './assets/berkas/skpi/';
        $config['allowed_types']        = 'pdf';
        $new_name = time() . '_' . $nim  . rand(10, 1000) . '_skpi.pdf';
        $config['file_name'] = $new_name;
        $this->load->library('upload', $config);

        if ($cek_ == NULL) {
            if ($this->upload->do_upload('berkas')) {
                $data = array(
                    'id_draft_skpi' => $id,
                    'nim' => $nim,
                    'file' => $new_name,
                    'status' => $this->input->post('status')
                );
                $this->Master_model->insert_query('skpi_mahasiswa', $data);
                log_message('info', 'Input - skpi_mahasiswa, data :' . json_encode($data));

                $text = $this->alert->success('Data successfully Add');
                $this->session->set_flashdata('message', $text);
                return redirect(site_url('/baak/skpi/validasi'));
            } else {
                $text = $this->alert->danger('Data failed Edit. Info :' . $this->upload->display_errors());
                $this->session->set_flashdata('message', $text);
                return redirect('/baak/skpi/validasi');
            }
        } else {

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('berkas')) {

                unlink(FCPATH . 'assets/berkas/skpi/' . $cek_->file); // delete file
                $data = array(
                    'updated_at' => date('Y-m-d H:i:s'),
                    'file' => $new_name,
                    'status' => $this->input->post('status')
                );
                $this->Master_model->update_query([
                    'id_draft_skpi' => $id,
                    'nim' => $nim
                ], $data, 'skpi_mahasiswa');
                log_message('info', 'edit - skpi_mahasiswa, data :' . json_encode($data));

                $text = $this->alert->success('Data successfully Updated');
                $this->session->set_flashdata('message', $text);
                redirect(site_url('/baak/skpi/validasi'));
            } else {
                $data = array(
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => $this->input->post('status')
                );
                $this->Master_model->update_query([
                    'id_draft_skpi' => $id,
                    'nim' => $nim
                ], $data, 'skpi_mahasiswa');
                log_message('info', 'edit - skpi_mahasiswa, data :' . json_encode($data));
                $text = $this->alert->success('Data successfully Updated');
                $this->session->set_flashdata('message', $text);
                redirect(site_url('/baak/skpi/validasi'));
            }
        }
    }

    // public function edit_action($id)
    // {

    //     // $this->form_validation->set_rules('kategori', 'kategori', 'trim|required|xss_clean');
    //     // $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required|xss_clean');
    //     $this->form_validation->set_rules('status', 'status', 'trim|required|xss_clean');
    //     if ($this->form_validation->run() == FALSE) {
    //         redirect('/baak/skpi/validasi/edit/' . $id);
    //     } else {

    //         $where_ = array(
    //             'id' => $id
    //         );

    //         $cek_ = $this->Master_model->master_get($where_, 'skpi_mahasiswa');

    //         $config['upload_path']          = './assets/berkas/skpi/';
    //         $config['allowed_types']        = 'pdf';
    //         $new_name = time() . '_' . $this->session->userdata('username') . '_' . $cek_->nim . '_skpi.pdf';
    //         $config['file_name'] = $new_name;

    //         $this->load->library('upload', $config);
    //         if (!$this->upload->do_upload('berkas')) {

    //             $data = array(
    //                 // 'keterangan' => $this->input->post('keterangan'),
    //                 // 'id_kategori' => $this->input->post('kategori'),
    //                 'status' => $this->input->post('status'),
    //                 'updated_at' => date('Y-m-d H:i:s')
    //             );
    //         } else {
    //             unlink(FCPATH . 'assets/berkas/skpi/' . $cek_->file); // delete file
    //             $data = array(
    //                 // 'keterangan' => $this->input->post('keterangan'),
    //                 // 'id_kategori' => $this->input->post('kategori'),
    //                 'status' => $this->input->post('status'),
    //                 'updated_at' => date('Y-m-d H:i:s'),
    //                 'file' => $new_name
    //             );
    //         }

    //         $this->Master_model->update_query(['id' => $id], $data, 'skpi_mahasiswa');
    //         log_message('info', 'Validasi - skpi_mahasiswa, data :' . json_encode($data));

    //         $text = $this->alert->success('Data successfully Updated');
    //         $this->session->set_flashdata('message', $text);
    //         redirect(site_url('baak/skpi/validasi'));
    //     }
    // }


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

            $data_history = json_encode($cek_);
            log_message('info', 'Delete - data to skpi_mahasiswa, data :' . $data_history);

            $text = $this->alert->success('record successfully deleted');
            $this->session->set_flashdata('message', $text);

            redirect(site_url('baak/skpi/validasi'));
        } else {
            $text = $this->alert->danger('Data not Found');
            $this->session->set_flashdata('message', $text);

            redirect(site_url('baak/skpi/validasi'));
        }
    }
}
