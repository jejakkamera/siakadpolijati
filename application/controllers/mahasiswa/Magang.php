<?php
defined('BASEPATH') or exit('No direct script access allowed');

require 'vendor/autoload.php';

use Ramsey\Uuid\Uuid;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\Writer\PngWriter;

class Magang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Feeder_lib');
        $this->load->model('Mahasiswa_model');
        $this->url = url_siku;
        $this->key = key_siku;

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
        $this->load->model('tabel/Baak_t', 'baak_tabel');
        $data_master = $this->baak_tabel->list_periode_magang();

        //print_r($data_master);
        $this->header();

        $this->load->view(
            'master/master_list',
            [
                'data_detail' => $data_master['data_detail'],
                'data_isi' => $data_master['data_isi'],
            ]
        );
        //$this->load->view('baak/mahasiswa_filter');
        $this->footer();
    }

    public function history()
    {
        $this->load->model('tabel/Baak_t', 'baak_tabel');
        $data_master = $this->baak_tabel->list_history_magang();

        //print_r($data_master);
        $this->header();

        $this->load->view(
            'master/master_list',
            [
                'data_detail' => $data_master['data_detail'],
                'data_isi' => $data_master['data_isi'],
            ]
        );
        //$this->load->view('baak/mahasiswa_filter');
        $this->footer();
    }

    public function daftar($periode)
    {
        $rule_date = $this->Master_model->master_get(['periode' => $periode], 'magang_list');

        $start = strtotime($rule_date->buka_daftar);
        $close = strtotime($rule_date->tutup_daftar);
        $now = strtotime(date('Y-m-d'));
        if ($start < $now and $now < $close and $rule_date->status == 'open') {
        } else {
            $text = $this->alert->warning('registration has closed');
            $this->session->set_flashdata('message', $text);
            redirect("mahasiswa/magang/");
        }
        $rules = $this->Master_model->master_result(['periode' => $periode], 'magang_rule');
        if ($rules) {
            $rule = $this->Master_model->master_result(['periode' => $periode, 'nim' => $this->session->userdata('username')], 'magang_mhs_rule');
            if (!$rule) {
                $text = $this->alert->warning('anda belum melakukan pembayaran');
                $this->session->set_flashdata('message', $text);
                redirect("mahasiswa/magang/cek_rule/" . $periode);
            }
        }
        $this->load->model('form/Mhs_f', 'mahasiswa_form');

        $data_master = $this->mahasiswa_form->daftar_magang($periode);

        $this->header();
        $this->load->view(
            'master/master_form',
            [
                'data_detail' => $data_master['form_detail'],
                'data_isi' => $data_master['data_isi'],
                'status' => null,
            ]
        );
        $this->footer();
    }

    public function cek_rule($periode)
    {
        $rule = $this->Master_model->master_result(['periode' => $periode, 'step' => 'daftar'], 'magang_rule');
        if (!$rule) {
            $text = $this->alert->success('rule ok');
            $this->session->set_flashdata('message', $text);
            redirect("mahasiswa/magang/daftar/" . $periode);
        }
        foreach ($rule as $row) {
            $this->output->set_header('Access-Control-Allow-Origin: *');

            $url = $this->url . 'api/cek_rule';
            $data = array('key' => $this->key, 'id_rule' => $row['id_rule'], 'nim' => $this->session->userdata('username'));
            $options = array(
                'http' => array(
                    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method'  => 'POST',
                    'content' => http_build_query($data)
                )
            );

            $context  = stream_context_create($options);
            $result = file_get_contents($url, false, $context);
            $result = json_decode($result);
            if ($result->status_code == '000') {
                $data = $result->data;
                if ($data->status_bayar == 'sudah') {
                    $data = array(
                        'periode' => $periode,
                        'nim' => $this->session->userdata('username'),
                    );
                    $this->Master_model->insert_query('magang_mhs_rule', $data);

                    $text = $this->alert->success('rule ok');
                    $this->session->set_flashdata('message', $text);
                    redirect("mahasiswa/magang/daftar/" . $periode);
                }
            }
        }
        $text = $this->alert->warning('anda belum melakukan pembayaran');
        $this->session->set_flashdata('message', $text);
        redirect("mahasiswa/magang/");
    }

    public function dashboard($periode)
    {
        $data_masters = ($this->Master_model->master_get(['periode' => $periode, 'nim' => $this->session->userdata('username')], 'v_magang_mhs'));
        // var_dump($data_masters);
        // die;
        if ($data_masters) {

            $this->load->model('Baak_model');
            $nim = $this->session->userdata('username');
            $mahasiswa = ($this->Master_model->master_get(['nim' => $this->session->userdata('username')], 'mahasiswa'));

            $jadwal_sidang = ($this->Mahasiswa_model->jadwal_sidang_magang($periode, $mahasiswa->kode_prodi));
            $history_bimbingan = $this->Master_model->master_result(['nim' => $nim], 'history_bimbingan_magang');
            $permohonan_magang = $this->Master_model->master_result(['nim' => $nim], 'permohonan_magang');
            // var_dump($info_akademik);
            // die;
            //print_r($kurikulum[0]);
            $this->header();
            $this->load->view(
                'mahasiswa/magang/dashboard',
                [
                    'data_masters' => $data_masters,
                    'history_bimbingan' => $history_bimbingan,
                    'jadwal_sidang' => $jadwal_sidang,
                    'permohonan_magang' => $permohonan_magang,
                    'periode' => $periode
                ]
            );
            $this->footer();
        } else {
            $text = $this->alert->warning('you not registered');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('mahasiswa/magang/'));
        }
    }

    public function daftar_magang_action($periode)
    {
        // $nama_pt = $this->input->post('nama_pt');
        $this->form_validation->set_rules('nama_pt', 'nama_pt', 'trim|required|xss_clean');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        if (($this->form_validation->run() == TRUE)) {
            $data_masters = ($this->Master_model->master_get(['periode' => $periode, 'nim' => $this->session->userdata('username')], 'magang_mhs_list'));
            if ($data_masters) {
                $text = $this->alert->warning('you have registered in : ' . $data_masters->nama_pt);
                $this->session->set_flashdata('message', $text);
                redirect(site_url('mahasiswa/magang/'));
            }

            $data = array(
                'periode' => $periode,
                'nama_pt' => $this->input->post('nama_pt'),
                'nim' => $this->session->userdata('username'),
            );
            $this->Master_model->insert_query('magang_mhs_list', $data);

            $text = $this->alert->success('saved successfully, registered in : ' . $this->input->post('nama_pt'));
            $this->session->set_flashdata('message', $text);
            redirect(site_url('mahasiswa/magang/'));
        } else {
            $this->daftar($periode);
        }
    }

    public function json_list_periode_magang()
    {
        $this->load->model('datatable/Baak_dt', 'Baak_dt');

        header('Content-Type: application/json');
        echo $this->Baak_dt->json_list_periode_magang_mhs();
    }

    public function json_list_history_magang()
    {
        $this->load->model('datatable/Baak_dt', 'Baak_dt');

        header('Content-Type: application/json');
        echo $this->Baak_dt->json_list_history_magang();
    }

    public function pendaftar_sidang_magang($id_trx)
    {
        $rule_date = $this->Master_model->master_get(['id_trx' => $id_trx], 'magang_jadwal_sidang');
        if (!$rule_date) {
            $text = $this->alert->warning('schedule not found');
            $this->session->set_flashdata('message', $text);
            redirect("mahasiswa/magang/");
        }
        $start = strtotime($rule_date->buka_daftar);
        $close = strtotime($rule_date->tutup_daftar);
        $now = strtotime(date('Y-m-d'));

        if ($start < $now and $now < $close) {
        } else {
            $text = $this->alert->warning('registration has closed');
            $this->session->set_flashdata('message', $text);
            redirect("mahasiswa/magang/");
        }

        $cek_rule_byid = $this->Master_model->master_get(['nim' => $this->session->userdata('username'), 'id_rule' => $rule_date->id_rule], 'magang_mhs_rule');
        if (!$cek_rule_byid) {
            $this->cek_rule_byid($rule_date->periode, $rule_date->id_rule, 'mahasiswa/magang/dashboard/' . $rule_date->periode);
        }

        $this->load->model('form/Mhs_f', 'mahasiswa_form');

        $data_master = $this->mahasiswa_form->pendaftar_sidang_magang($id_trx);

        $this->header();
        $this->load->view(
            'master/master_form',
            [
                'data_detail' => $data_master['form_detail'],
                'data_isi' => $data_master['data_isi'],
                'status' => null,
            ]
        );
        $this->footer();
    }

    public function pendaftar_sidang_magang_action($id_trx)
    {
        $rule_date = $this->Master_model->master_get(['id_trx' => $id_trx], 'magang_jadwal_sidang');
        if (!$rule_date) {
            $text = $this->alert->warning('schedule not found');
            $this->session->set_flashdata('message', $text);
            redirect("mahasiswa/magang/");
        }

        $this->form_validation->set_rules('judul', 'judul', 'trim|required|xss_clean');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        if (($this->form_validation->run() == TRUE)) {
            $config['upload_path']          = './assets/berkas/magang/';
            $config['allowed_types']        = 'pdf';
            $new_name = time() . '_' . $this->session->userdata('username') . '_magang.pdf';
            $config['file_name'] = $new_name;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('berkas')) {
                $text = $this->alert->danger('Data failed Added. Info :' . $this->upload->display_errors());
                $this->session->set_flashdata('message', $text);
                return redirect("mahasiswa/magang/pendaftar_sidang_magang/" . $id_trx);
            } else {
                $rule_date = $this->Master_model->master_get(['id_trx' => $id_trx], 'magang_jadwal_sidang');
                $magang_mhs_list = $this->Master_model->master_get(['periode' => $rule_date->periode, 'nim' => $this->session->userdata('username')], 'magang_mhs_list');

                if (in_array($magang_mhs_list->progres, ['sidang', 'penilaian'])) {
                    $text = $this->alert->warning('You do not have access. you progres : ' . $magang_mhs_list->progres);
                    $this->session->set_flashdata('message', $text);
                    redirect("mahasiswa/magang/dashboard/" . $magang_mhs_list->periode);
                }

                if (!$magang_mhs_list) {
                    $text = $this->alert->warning('id trx registration not found');
                    $this->session->set_flashdata('message', $text);
                    redirect("mahasiswa/magang/");
                }

                $nama_berkas = $this->upload->data("file_name");
                $data = array(
                    'berkas' => $nama_berkas,
                    'id_sidang' => $id_trx,
                    'judul' => $this->input->post('judul'),
                    'tgl_berkas' => (date('Y-m-d H:i:s')),
                    'progres' => 'daftar sidang',
                );

                $this->Master_model->update_query(['id_trx' => $magang_mhs_list->id_trx, 'nim' => $this->session->userdata('username')], $data, 'magang_mhs_list');

                $text = $this->alert->success('registration was update');
                $this->session->set_flashdata('message', $text);
                redirect("mahasiswa/magang/dashboard/" . $magang_mhs_list->periode);
            }
        } else {
            $this->pendaftar_sidang_magang($id_trx);
        }
    }

    public function add_bimbingan($nim)
    {
        $this->load->model('form/Mhs_f', 'mahasiswa_form');

        $data_master = $this->mahasiswa_form->add_bimbingan_magang($nim);

        $this->header();
        $this->load->view(
            'master/master_form',
            [
                'data_detail' => $data_master['form_detail'],
                'data_isi' => $data_master['data_isi'],
                'status' => null,
            ]
        );
        $this->footer();
    }

    public function add_bimbingan_action($nim)
    {
        $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required|xss_clean');
        if (($this->form_validation->run() == TRUE)) {
            $new_name = null;

            if (!empty($_FILES['berkas']['name'])) {
                $config['upload_path']          = './assets/berkas/history_bimbingan/';
                $config['allowed_types']        = 'pdf';
                $new_name = time() . '_' . $nim . '_bimbingan.pdf';
                $config['file_name'] = $new_name;

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('berkas')) {
                    $text = $this->alert->danger('Data failed Added. Info :' . $this->upload->display_errors());
                    $this->session->set_flashdata('message', $text);
                    return redirect("mahasiswa/magang/add_bimbingan/" . $nim);
                }
            }

            if ($this->session->userdata('role') == 'mhs') {
                $data = array(
                    'nim' => $nim,
                    'email_dosen' => null,
                    'file' => $new_name,
                    'keterangan' => $this->input->post('keterangan', TRUE),
                    'user_create' => $this->Master_model->user_cek_ident(),
                );
            } else {
                $data = array(
                    'nim' => $nim,
                    'email_dosen' => $this->session->userdata('username'),
                    'file' => $new_name,
                    'keterangan' => $this->input->post('keterangan', TRUE),
                    'user_create' => $this->Master_model->user_cek_ident(),
                );
            }
            $this->Master_model->insert_query('history_bimbingan_magang', $data);

            $data_masters = ($this->Master_model->master_get_max(['nim' => $nim], 'magang_mhs_list', 'periode'));
            $text = $this->alert->success('History Bimbingan add');
            $this->session->set_flashdata('message', $text);
            redirect("mahasiswa/magang/dashboard/" . $data_masters->periode);
        } else {
            $this->add_bimbingan($nim);
        }
    }

    public function cek_rule_byid($periode, $id_rule, $link)
    {
        $this->output->set_header('Access-Control-Allow-Origin: *');

        $url = $this->url . 'api/cek_rule';
        $data = array('key' => $this->key, 'id_rule' => $id_rule, 'nim' => $this->session->userdata('username'));
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
        );

        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $result = json_decode($result);
        if ($result->status_code == '000') {
            $data = $result->data;
            if ($data->status_bayar == 'sudah') {
                $data = array(
                    'periode' => $periode,
                    'id_rule' => $id_rule,
                    'nim' => $this->session->userdata('username'),
                );
                $this->Master_model->insert_query('magang_mhs_rule', $data);

                return ok;
                // $text = $this->alert->success('rule ok');
                // $this->session->set_flashdata('message', $text);
                // redirect($link);
            }
        }


        $text = $this->alert->warning('anda belum melakukan pembayaran');
        $this->session->set_flashdata('message', $text);
        redirect($link);
    }

    public function add_permohonan_magang($nim, $periode)
    {

        $cek = $this->db->query('SELECT id,status FROM permohonan_magang where nim = ? and periode = ? ORDER BY id DESC LIMIT 1', [$nim, $periode])->row();

        if ($cek->status == '0') {
            $text = $this->alert->warning('Status permohonan Magang Sebelumnya Masih validasi');
            $this->session->set_flashdata('message', $text);
            return redirect('/mahasiswa/magang/dashboard/' . $periode);
        }
        if ($cek->status == '1') {
            $text = $this->alert->warning('Proses Permohonan Magang Belum Selesai');
            $this->session->set_flashdata('message', $text);
            return redirect('/mahasiswa/magang/dashboard/' . $periode);
        }

        $this->load->model('form/Mhs_f', 'mahasiswa_form');

        $data_master = $this->mahasiswa_form->add_permohonan_magang($nim);

        $this->header();
        $this->load->view(
            'master/master_form',
            [
                'data_detail' => $data_master['form_detail'],
                'data_isi' => $data_master['data_isi'],
                'status' => null,
            ]
        );
        $this->footer();
    }

    public function add_permohonan_magang_action($nim)
    {
        $this->form_validation->set_rules('nama_penerima', 'Nama Penerima', 'trim|required|xss_clean');
        $this->form_validation->set_rules('persone', 'Persone', 'trim|required|xss_clean');
        $this->form_validation->set_rules('jabatan_penerima', 'Jabatan Penerima', 'trim|required|xss_clean');
        $this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'trim|required|xss_clean');
        $this->form_validation->set_rules('tujuan', 'Tujuan', 'trim|required|xss_clean');

        if ($this->form_validation->run() == TRUE) {
            $this->load->model('Baak_model');
            $data_masters = ($this->Master_model->master_get_max(['nim' => $nim], 'magang_mhs_list', 'periode'));
            $nomer_surat = $this->Baak_model->get_list_permohonan_magang_last_id($data_masters->periode);
            $data = array(
                'uuid'  => Uuid::uuid1()->toString(),
                'nomer_aktif' => $nomer_surat,
                'nim' => $nim,
                'nama_penerima' => $this->input->post('nama_penerima'),
                'persone' => $this->input->post('persone'),
                'jabatan_penerima' => $this->input->post('jabatan_penerima'),
                'nama_perusahaan' => $this->input->post('nama_perusahaan'),
                'tujuan' => $this->input->post('tujuan'),
                'periode' => $data_masters->periode,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            );

            $this->Master_model->insert_query('permohonan_magang', $data);


            log_message('info', 'Input - permohonan_magang, data :' . json_encode($data));

            $text = $this->alert->success('Permohonan Magang Add');
            $this->session->set_flashdata('message', $text);
            redirect("mahasiswa/magang/dashboard/" . $data_masters->periode);
        } else {
            return redirect('mahasiswa/magang/add_permohonan_magang/' . $nim);
        }
    }

    public function edit_permohonan_magang($id)
    {
        $this->load->model('form/Mhs_f', 'mahasiswa_form');

        $data_masters = get_object_vars($this->Master_model->master_get(['id' => $id], 'permohonan_magang'));


        if ($data_masters['status'] != '0') {
            $text = $this->alert->danger('Edit Permohonan Ditolak');
            $this->session->set_flashdata('message', $text);
            return redirect("mahasiswa/magang/dashboard/" . $data_masters['periode']);
        }

        $data_master = $this->mahasiswa_form->edit_permohonan_magang($id);
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

    public function edit_permohonan_magang_action($id)
    {
        $this->form_validation->set_rules('nama_penerima', 'Nama Penerima', 'trim|required|xss_clean');
        $this->form_validation->set_rules('persone', 'Persone', 'trim|required|xss_clean');
        $this->form_validation->set_rules('jabatan_penerima', 'Jabatan Penerima', 'trim|required|xss_clean');
        $this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'trim|required|xss_clean');
        $this->form_validation->set_rules('tujuan', 'Tujuan', 'trim|required|xss_clean');

        if ($this->form_validation->run() == TRUE) {
            $where_ = array(
                'id' => $id,
            );

            $cek_ = $this->Master_model->master_get($where_, 'permohonan_magang');

            if ($cek_) {
                $data = array(
                    'nama_penerima' => $this->input->post('nama_penerima'),
                    'persone' => $this->input->post('persone'),
                    'jabatan_penerima' => $this->input->post('jabatan_penerima'),
                    'nama_perusahaan' => $this->input->post('nama_perusahaan'),
                    'tujuan' => $this->input->post('tujuan'),
                    'updated_at' => date('Y-m-d H:i:s'),
                );
                $this->Master_model->update_query(['id' => $id], $data, 'permohonan_magang');

                $data_masters = ($this->Master_model->master_get_max(['nim' => $cek_->nim], 'magang_mhs_list', 'periode'));
                log_message('info', 'Edit - permohonan_magang, data :' . json_encode($data));

                $text = $this->alert->success('Permohonan Magang Edit');
                $this->session->set_flashdata('message', $text);
                redirect("mahasiswa/magang/dashboard/" . $data_masters->periode);
            } else {
                $text = $this->alert->danger('Permohonan Magang Not Found');
                $this->session->set_flashdata('message', $text);
                return redirect('mahasiswa/magang/edit_permohonan_magang/' . $id);
            }
        } else {
            return redirect('mahasiswa/magang/edit_permohonan_magang/' . $id);
        }
    }

    public function delete_permohonan_magang($nim, $id)
    {
        $where_ = array(
            'id' => $id,
            'nim' => $nim
        );

        $cek_ = $this->Master_model->master_get($where_, 'permohonan_magang');
        $data_masters = ($this->Master_model->master_get_max(['nim' => $nim], 'magang_mhs_list', 'periode'));

        if ($cek_) {

            $where_array = array(
                'id' => $id,
                'nim' => $nim
            );
            $this->Master_model->delete_query($where_array, 'permohonan_magang');

            $data_history = json_encode($cek_);
            log_message('info', 'Delete - data to permohonan_magang, data :' . $data_history);

            $text = $this->alert->success('record successfully deleted');
            $this->session->set_flashdata('message', $text);

            redirect("mahasiswa/magang/dashboard/" . $data_masters->periode);
        } else {
            $text = $this->alert->danger('Data not Found');
            $this->session->set_flashdata('message', $text);
            redirect("mahasiswa/magang/dashboard/" . $data_masters->periode);
        }
    }

    public function upload_keputusan($id)
    {
        $this->load->model('form/Mhs_f', 'mahasiswa_form');
        $where_ = array(
            'id' => $id,
            'nim' => $this->session->userdata('username')
        );

        $cek_ = $this->Master_model->master_get($where_, 'permohonan_magang');
        if ($cek_) {
            if ($cek_->status != '1') {
                $text = $this->alert->danger('Permohonan Harus ACC');
                $this->session->set_flashdata('message', $text);
                redirect("mahasiswa/magang/dashboard/" . $data_masters->periode);
            }

            $data_master = $this->mahasiswa_form->upload_keputusan($id);

            $this->header();
            $this->load->view(
                'master/master_form',
                [
                    'data_detail' => $data_master['form_detail'],
                    'data_isi' => $data_master['data_isi'],
                    'status' => null,
                ]
            );
            $this->footer();
        } else {
            $text = $this->alert->danger('Data not Found');
            $this->session->set_flashdata('message', $text);
            redirect("mahasiswa/magang/dashboard/" . $data_masters->periode);
        }
    }

    public function upload_keputusan_action($id)
    {
        $this->form_validation->set_rules('status', 'status', 'trim|required|xss_clean');

        if ($this->form_validation->run() == TRUE) {
            $where_ = array(
                'id' => $id,
                'nim' => $this->session->userdata('username')
            );
            $cek_ = $this->Master_model->master_get($where_, 'permohonan_magang');
            if ($cek_) {
                $config['upload_path']          = './assets/berkas/magang/';
                $config['allowed_types']        = 'pdf';
                $new_name = $this->session->userdata('username') . '_' . rand(10, 100) . '_keputusan.pdf';
                $config['file_name'] = $new_name;

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('berkas')) {
                    $text = $this->alert->danger('Data failed Added. Info :' . $this->upload->display_errors());
                    $this->session->set_flashdata('message', $text);
                    redirect("mahasiswa/magang/upload_keputusan/" . $id);
                }

                $data = array(
                    'status' => $this->input->post('status'),
                    'file_keputusan' => $new_name
                );
                $this->Master_model->update_query(['id' => $id], $data, 'permohonan_magang');

                log_message('info', 'Upload_keputusan - permohonan_magang, data :' . json_encode($data));

                $text = $this->alert->success('Keputusan Magang Edit');
                $this->session->set_flashdata('message', $text);
                redirect("mahasiswa/magang/dashboard/" . $cek_->periode);
            } else {
                redirect("mahasiswa/magang/upload_keputusan/" . $id);
            }
        } else {
            redirect("mahasiswa/magang/upload_keputusan/" . $id);
        }
    }

    public function download_surat_permohonan($id)
    {
        $where_ = array(
            'id' => $id,
            'nim' => $this->session->userdata('username')
        );
        $cek_ = $this->Master_model->master_get($where_, 'permohonan_magang');

        if ($cek_) {
            if ($cek_->status == '3' || $cek_->status == '0') {
                $text = $this->alert->danger('Tidak bisa unduh surat,status masih validasi atau ditolak');
                $this->session->set_flashdata('message', $text);
                redirect("mahasiswa/magang/dashboard/" . $cek_->periode);
            }
			
        	$pengesahan = $this->Master_model->master_get(['periode'=>$cek_->periode], 'magang_list');
			if(!$pengesahan->ttd){
				$text = $this->alert->danger('Tidak bisa unduh surat,Penegsah not found');
                $this->session->set_flashdata('message', $text);
                redirect("mahasiswa/magang/dashboard/" . $cek_->periode);
			}
            $nomer_surat = $cek_->nomer_aktif . "/STMIK/K/VIII/" . date('Y', strtotime($cek_->created_at));
            $mahasiswa = $this->db->query("
				SELECT 
					mahasiswa.nim,
					mahasiswa.nama,
					dikti_prodi.nama_program_studi,
					dikti_prodi.nama_jenjang_pendidikan
				FROM mahasiswa
				JOIN dikti_prodi ON dikti_prodi.kode_program_studi = mahasiswa.kode_prodi
				WHERE mahasiswa.nim = ?
				", [$cek_->nim])->row();

            // $semester = $this->db->query("
			// SELECT
			// 	v_frs.semester
			// FROM v_frs
			// where nim = ? and periode LIKE ? ORDER BY id_trx DESC LIMIT 1 
			// ", [$cek_->nim, $cek_->periode . '%'])->row();

            $periode = $this->db->query("
			SELECT * from v_dikti_semester where id_semester = ?
			", $cek_->periode)->row();

            $writer = new PngWriter();
            $qrCode = QrCode::create(base_url('welcome/download_surat_permohonan_magang/' . $cek_->uuid))
                ->setEncoding(new Encoding('UTF-8'));
            $result = $writer->write($qrCode);
            $dataUri = $result->getDataUri();

            $this->load->view('mahasiswa/magang/surat_permohonan', [
                'pengesahan' => $pengesahan,
                'data' => $cek_,
                'nomer_surat' => $nomer_surat,
                'nama' => $mahasiswa->nama,
                'nim' => $mahasiswa->nim,
                'prodi' => $mahasiswa->nama_program_studi,
                'jenjang' => $mahasiswa->nama_jenjang_pendidikan,
                'semester' => $periode->semester,
                'periode' => $periode->nama_semester,
                'tanggal' => $this->format_indo($cek_->created_at),
                'qr_code' => $dataUri,
                'uuid' => $cek_->uuid
            ]);
        } else {
            $text = $this->alert->danger('Data Tidak Ditemukan');
            $this->session->set_flashdata('message', $text);
            redirect("mahasiswa/magang/dashboard/" . $cek_->periode);
        }
    }

    function format_indo($date)
    {
        // $qrCode = QrCode::create('Life is too short to be generating QR codes');
        // echo "<img src='" . $qrCode . "'>";
        // die;
        date_default_timezone_set('Asia/Jakarta');
        // Buatlah sebuah array berisikan hari dan bulan
        $Hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
        $Bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

        // Buatlah sebuah pemisahan untuk tahun, bulan, hari, dan waktu
        $tahun = substr($date, 0, 4);
        $bulan = substr($date, 5, 2);
        $tgl = substr($date, 8, 2);
        $waktu = substr($date, 11, 5);
        $hari = date("w", strtotime($date));
        $result = $tgl . " " . $Bulan[(int)$bulan - 1] . " " . $tahun;

        return $result;
    }

    public function job_register_delete($id_job)
	{
		$where_ = array(
            'id_job' => $id_job,
            'nim' => $this->session->userdata('username')
        );
        $cek_ = $this->Master_model->master_get($where_, 'job_register');
        if($cek_ ){

            $this->Master_model->delete_query($where_, 'job_register');

            $data_history = json_encode($cek_);
            log_message('info', 'Delete - data to permohonan_magang, data :' . $data_history);
			
			$text = $this->alert->success('record successfully deleted');
            $this->session->set_flashdata('message', $text);
			
                return redirect("mahasiswa/magang/job");
		}else{
			$text = $this->alert->danger('Data failed delete.' );
                $this->session->set_flashdata('message', $text);
                return redirect("mahasiswa/magang/job");
		}
	}

    public function job_register_action($id_job)
	{
			$config['upload_path']          = './assets/berkas/magang/';
            $config['allowed_types']        = 'pdf';
            $new_name = time() . '_' . $this->session->userdata('username') . '_job.pdf';
            $config['file_name'] = $new_name;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $text = $this->alert->danger('Data failed Added. Info :' . $this->upload->display_errors());
                $this->session->set_flashdata('message', $text);
                return redirect("mahasiswa/magang/job" . $id_trx);
            } else {
               
                $nama_berkas = $this->upload->data("file_name");
                $data = array(
                    'file' => $nama_berkas,
                    'id_job' => $id_job,
                    'nim' => $this->session->userdata('username'),
                );
				$this->Master_model->insert_query('job_register', $data);
               
                $text = $this->alert->success('registration was insert');
                $this->session->set_flashdata('message', $text);
                redirect("mahasiswa/magang/job_register/" . $id_job);
            }
	}

    public function job_register($id_job){
		$where_ = array(
            'id_job' => $id_job,
            'nim' => $this->session->userdata('username')
        );
        $cek_ = $this->Master_model->master_get($where_, 'job_register');
        
		if($cek_){
			$job = $this->Master_model->master_get(['id'=>$id_job], 'job_list');
			$this->header();
			$this->load->view(
				'mahasiswa/job_register',
				[
					'job_register' => $cek_,
					'job' => $job,
				]
			);
			$this->footer();
		}else{
			$this->load->model('form/Job_f');

			$data_master = $this->Job_f->job_register($id_job);

			$this->header();
			$this->load->view(
				'master/master_form',
				[
					'data_detail' => $data_master['form_detail'],
					'data_isi' => $data_master['data_isi'],
					'status' => null,
				]
			);
			$this->footer();
		}
	}

    public function job()
    {
        $this->load->model('tabel/Job_t', 'job_tabel');
        $data_master = $this->job_tabel->list_job_mahasiswa();

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

    public function json_list_job_mahasiswa()
    {
        $this->load->model('datatable/Job_dt');
        header('Content-Type: application/json');
        echo $this->Job_dt->json_list_job_mahasiswa();
    }
}
