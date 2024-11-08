<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perkuliahan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Feeder_lib');
        $this->load->model('Baak_model');
        $this->load->model('Dosen_model');

        $level = $this->session->userdata('role');
        $action = 'get';
        $access = $this->Master_model->cek_akses('dosen_perkuliahan', $level, $action);
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

    public function kehadiran_dosen_jadwal()
    {
        $this->load->model('tabel/Dosen_t', 'dosen_tabel');
        $periode = $this->Baak_model->json_id_periode_aktif('');
        // $periode=$this->Baak_model->master_get_set_input_nilai();
        $data_master = $this->dosen_tabel->kehadiran_dosen_jadwal($periode);

        //print_r($data_master);
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

    public function perangkat_perkuliahan_periode_now()
    {
        $periode = $this->Baak_model->json_id_periode_aktif('');
        $this->perangkat_perkuliahan_list($periode->kode);
    }

    public function perangkat_perkuliahan_list($periode)
    {
        $this->load->model('tabel/Dosen_t', 'dosen_tabel');
        $cek_periode = $this->Master_model->master_get(['id_semester' => $periode], 'dikti_semester');
        $data_master = $this->dosen_tabel->perangkat_perkuliahan_list($cek_periode);

        //print_r($data_master);
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


    public function presensi_dosen_delete($id)
    {

        $cek_ = $this->Master_model->master_get(['id_trx_absen' => $id], 'rekap_presensi_dosen_detail');
        if ($cek_) {
            $text = $this->alert->danger('Error : Cannot Delete, TRX has recapitulated');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('dosen/perkuliahan/presensi_dosen/' . $cek_->id_trx_jadwal));
        } else {
            $cek_ = $this->Master_model->master_get(['id' => $id], 'presensi_dosen');
            if ($cek_ && $cek_->email == $this->session->userdata('username')) {

                $this->Master_model->insert_history('delete', 'presensi_dosen', json_encode($cek_));
                $this->Master_model->delete_query(['id' => $id], 'presensi_dosen');
                $text = $this->alert->success('Data Successfully Delete');
                $this->session->set_flashdata('message', $text);
                redirect(site_url('dosen/perkuliahan/presensi_dosen/' . $cek_->id_trx_jadwal));
            }
        }
    }

    public function presensi_dosen_edit_action($id)
    {
        $data_masters = ($this->Master_model->master_get(['id' => $id], 'presensi_dosen'));
        if ($data_masters && $data_masters->email == $this->session->userdata('username')) {
            $this->form_validation->set_rules('tanggal_masuk', 'tanggal_masuk', 'trim|required|xss_clean');
            $this->form_validation->set_rules('materi', 'materi', 'trim|required|xss_clean');
            $this->form_validation->set_rules('methode', 'methode', 'trim|required|xss_clean');
            $this->form_validation->set_rules('pertemuan', 'pertemuan', 'trim|required|xss_clean');
            if (($this->form_validation->run() == TRUE)) {
                $data = array(
                    'tanggal_masuk' => $this->input->post('tanggal_masuk', TRUE),
                    'materi' => $this->input->post('materi', TRUE),
                    'methode' => $this->input->post('methode', TRUE),
                    // 'pertemuan'=>$this->input->post('pertemuan',TRUE),
                );
                if ($data_masters->status_rekap == 'rencana') {
                    $data['status_rekap'] = 'input';
                    $data['tanggal_presensi'] = date("Y-m-d H:i:s");
                }

                $this->Master_model->update_query(['id' => $id], $data, 'presensi_dosen');
                log_message('info', 'Update - presensi_dosen, data :' . json_encode($data_masters));

                $text = $this->alert->success('Data successfully edit');
                $this->session->set_flashdata('message', $text);
                redirect(site_url('dosen/perkuliahan/presensi_dosen/' . $data_masters->id_trx_jadwal));
            } else {
                $this->presensi_dosen_edit($id);
            }
        } else {
            $text = $this->alert->danger('Record Not Found');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('dosen/perkuliahan/kehadiran_dosen_jadwal'));
        }
    }

    public function presensi_dosen_add_action($id)
    {
        $this->form_validation->set_rules('tanggal_masuk', 'tanggal_masuk', 'trim|required|xss_clean');
        $this->form_validation->set_rules('materi', 'materi', 'trim|required|xss_clean');
        $this->form_validation->set_rules('methode', 'methode', 'trim|required|xss_clean');
        $cek_ = $this->Master_model->master_get(['id_trx_jadwal' => $id], 'mata_kuliah_jadwal');
        if ($cek_) {
            if (($this->form_validation->run() == TRUE)) {
                $this->load->model('Dosen_model');
                $cek_presensi = $this->Dosen_model->last_presensi_dosen($id);
                $pertemuan = $cek_presensi->pertemuan + 1;
                if ($pertemuan > 16) {
                    $text = $this->alert->danger('Maximal transaksi pertemuan 16.');
                    $this->session->set_flashdata('message', $text);
                    redirect(site_url('dosen/perkuliahan/kehadiran_dosen_jadwal'));
                }
                // echo $pertemuan;
                $data = array(
                    'id_trx_jadwal' => $id,
                    'id_matkul' => $cek_presensi->id_matkul,
                    'periode' => $cek_presensi->periode,
                    'id_kelas' => $cek_presensi->id_kelas,
                    'pertemuan' => $pertemuan,
                    'email' => $this->session->userdata('username'),
                    'tanggal_masuk' => $this->input->post('tanggal_masuk', TRUE),
                    'tanggal_presensi' => date("Y-m-d H:i:s"),
                    'materi' => $this->input->post('materi', TRUE),
                    'methode' => $this->input->post('methode', TRUE),
                );
                // print_r($data);
                $this->Master_model->insert_query('presensi_dosen', $data);

                $text = $this->alert->success('Data successfully Add');
                $this->session->set_flashdata('message', $text);
                redirect(site_url('dosen/perkuliahan/presensi_dosen/' . $id));
            } else {
                $this->presensi_dosen_add($id_trx);
            }
        } else {
            $text = $this->alert->danger('Record Not Found');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('dosen/perkuliahan/kehadiran_dosen_jadwal'));
        }
    }

    public function presensi_dosen($id)
    {

        $v_jadwal = $this->Master_model->master_get(['id_trx_jadwal' => $id], 'v_jadwal');
        if (in_array($v_jadwal->status_rps, ['draf', 'revisi'])) {
            $text = $this->alert->danger('Error : Status RPS');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('dosen/perkuliahan/perangkat_pembelajaran/' . $id));
        }

        $this->load->model('tabel/Dosen_t', 'dosen_tabel');
        $cek_ = $this->Master_model->master_get(['id_trx_jadwal' => $id], 'v_jadwal');
        $data_master = $this->dosen_tabel->presensi_dosen($id, $cek_);

        //print_r($data_master);
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

    public function presensi_dosen_edit($id)
    {
        $cek_ = $this->Master_model->master_get(['id_trx_absen' => $id], 'rekap_presensi_dosen_detail');
        if ($cek_) {
            $text = $this->alert->danger('Error : Cannot Edit, TRX has recapitulated');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('dosen/perkuliahan/presensi_dosen/' . $cek_->id_trx_jadwal));
        } else {
            $data_masters = get_object_vars($this->Master_model->master_get(['id' => $id], 'presensi_dosen'));
            if ($data_masters) {
                $this->load->model('form/Dosen_f', 'dosen_form');
                $data_master = $this->dosen_form->presensi_dosen_edit($id, $data_masters);
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
                $text = $this->alert->danger('Record Not Found');
                $this->session->set_flashdata('message', $text);
                redirect(site_url('dosen/perkuliahan/kehadiran_dosen_jadwal'));
            }
        }
    }

    public function presensi_dosen_add($id_trx)
    {
        $this->load->model('form/Dosen_f', 'dosen_form');
        $cek_ = $this->Master_model->master_get(['id_trx_jadwal' => $id_trx], 'v_jadwal');
        $data_master = $this->dosen_form->presensi_dosen_add($id_trx, $cek_);

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



    public function upload_rps_action($id_trx)
    {
        $config['upload_path']          = './assets/berkas/rps/';
        $config['allowed_types']        = 'pdf';
        $new_name = time() . '_' . $id_trx . '_rps.pdf';
        $config['file_name'] = $new_name;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('berkas')) {
            $text = $this->alert->danger('Data failed Added. Info :' . $this->upload->display_errors());
            $this->session->set_flashdata('message', $text);
            return redirect("dosen/perkuliahan/upload_rps/" . $id_trx);
        } else {
            $data = array(
                'file_rps' => $this->upload->data("file_name"),
                'rps_last_edit' => $this->Master_model->user_cek_ident()
            );
            $this->Master_model->update_query(['id_trx_jadwal' => $id_trx], $data, 'mata_kuliah_jadwal');

            $text = $this->alert->success('saved successfully');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('dosen/perkuliahan/perangkat_pembelajaran/' . $id_trx));
        }
    }

    public function upload_rps($id_trx)
    {
        $this->load->model('form/Dosen_f', 'dosen_form');
        $cek_ = $this->Master_model->master_get(['id_trx_jadwal' => $id_trx], 'v_jadwal');
        $data_master = $this->dosen_form->upload_rps($id_trx, $cek_);

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

    public function presensi_mahasiswa()
    {
        $this->load->model('tabel/Dosen_t', 'dosen_tabel');
        $periode = $this->Baak_model->json_id_periode_aktif('');
        // $periode=$this->Baak_model->master_get_set_input_nilai();
        $data_master = $this->dosen_tabel->presensi_mahasiswa($periode);

        //print_r($data_master);
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

    public function presensi_mahasiswa_pertemuan($id_trx)
    {
        $this->load->model('tabel/Dosen_t', 'dosen_tabel');
        $cek_ = $this->Master_model->master_get(['id_trx_jadwal' => $id_trx], 'v_jadwal');
        if (!$cek_) {
            $text = $this->alert->danger('Record not found');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('dosen/perkuliahan/presensi_mahasiswa/'));
        }
        $data_master = $this->dosen_tabel->presensi_mahasiswa_pertemuan($cek_);

        //print_r($data_master);
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

    public function presensi_mahasiswa_pertemuan_report($id_trx)
    {
        $this->load->model('tabel/Dosen_t', 'dosen_tabel');
        $cek_ = $this->Master_model->master_get(['id_trx_jadwal' => $id_trx], 'v_jadwal');
        if (!$cek_) {
            $text = $this->alert->danger('Record not found');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('dosen/perkuliahan/presensi_mahasiswa/'));
        }
        $data_master = $this->dosen_tabel->presensi_mahasiswa_pertemuan_report($cek_);

        //print_r($data_master);
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

    public function presensi_mahasiswa_pertemuan_list_action($id_matkul, $periode, $pertemuan)
    {
        $list_nim = $this->input->post('nim', TRUE);
        foreach ($list_nim as $row) {
            $kehadiran = $this->input->post('presensi_status_' . $row, TRUE);
            if ($kehadiran) {
                $cek_ = $this->Master_model->master_get(['id_matkul' => $id_matkul, 'periode' => $periode, 'nim' => $row], 'presensi_mahasiswa');
                if ($cek_) {
                    $presensi_status_ = 'presensi_status_' . $pertemuan;
                    if ($cek_->$presensi_status_ != $kehadiran) {
                        $data = array(
                            'presensi_status_' . $pertemuan => $kehadiran,
                            'tanggal_absen_' . $pertemuan => date('Y-m-d')
                        );
                        $where_array = array(
                            'id_trx' => $cek_->id_trx
                        );
                        $this->Master_model->update_query($where_array, $data, 'presensi_mahasiswa');
                    }
                } else {
                    $data = array(
                        'id_matkul' => $id_matkul,
                        'periode' => $periode,
                        'nim' => $row,
                        'presensi_status_' . $pertemuan => $kehadiran,
                        'tanggal_absen_' . $pertemuan => date('Y-m-d')
                    );
                    $this->Master_model->insert_query('presensi_mahasiswa', $data);
                }
            }
            // echo $row;
            // echo $this->input->post('presensi_status_'.$row,TRUE);
        }
    }

    public function presensi_mahasiswa_pertemuan_list($id_trx, $pertemuan)
    {
        $cek_ = $this->Master_model->master_get(['id_trx_jadwal' => $id_trx], 'v_jadwal');
        $this->load->model('Dosen_model');
        $list_mhs = $this->Dosen_model->presensi_mahasiswa_pertemuan_list($cek_);
        //print_r($list_mhs);
        $this->header();
        $this->load->view(
            'dosen/presensi_mahasiswa_pertemuan_list',
            [
                'id_trx' => $id_trx,
                'list_mhs' => $list_mhs,
                'cek_' => $cek_,
                'pertemuan' => $pertemuan
            ]
        );
        $this->footer();
    }

    public function input_nilai_presensi_action($id_trx)
    {
        $komponen =  $this->input->post('id_komponen', TRUE);
        $cek_jadwal = $this->Master_model->master_get(['id_trx_jadwal' => $id_trx], 'v_jadwal');
        $data_presensi = $this->Dosen_model->report_presensi($cek_jadwal->id_matkul, $cek_jadwal->periode);
        foreach ($data_presensi as $rowz) {
            $id_trx_frs = $this->Master_model->master_get(['id_matkul' => $cek_jadwal->id_matkul, 'periode' => $cek_jadwal->periode, 'nim' => $rowz->nim], 'v_frs')->id_trx;
            $nilai = round($rowz->nilai, 2);
            if ($nilai and ($nilai > 0 and $nilai < 101)) {
                $cek_ = $this->Master_model->master_get(['id_komponen' => $komponen, 'id_trx_frs' => $id_trx_frs], 'frs_mhs_nilai');
                if ($cek_) {
                    if ($cek_->nilai != $nilai) {
                        $data = array(
                            'nilai' => $nilai,
                            'update_date' => date('Y-m-d')
                        );
                        $where_array = array(
                            'id_trx_nilai' => $cek_->id_trx_nilai
                        );
                        $this->Master_model->update_query($where_array, $data, 'frs_mhs_nilai');

                        $datas = array(
                            'id_trx_history' => date('ymdhsi') . '_' . $komponen . '_' . $id_trx_frs,
                            'id_komponen' => $komponen,
                            'id_trx_frs' => $id_trx_frs,
                            'nilai_asal' => $cek_->nilai,
                            'nilai_berubah' => $nilai,
                            'log' => $this->Master_model->user_cek_ident()
                        );
                        $this->Master_model->insert_query('history_nilai', $datas);
                    }
                } else {
                    $data = array(
                        'id_komponen' => $komponen,
                        'id_trx_frs' => $id_trx_frs,
                        'nilai' => $nilai,
                        'log' => $this->Master_model->user_cek_ident()
                    );
                    $this->Master_model->insert_query('frs_mhs_nilai', $data);

                    $datas = array(
                        'id_trx_history' => date('ymdhsi') . '_' . $komponen . '_' . $id_trx_frs,
                        'id_komponen' => $komponen,
                        'id_trx_frs' => $id_trx_frs,
                        'nilai_asal' => 0,
                        'nilai_berubah' => $nilai,
                        'log' => $this->Master_model->user_cek_ident()
                    );
                    $this->Master_model->insert_query('history_nilai', $datas);
                }
            }
        }

        $text = $this->alert->success('Success');
        $this->session->set_flashdata('message', $text);
        redirect(site_url('dosen/perkuliahan/report_nilai/' . $id_trx));
    }

    public function input_nilai_presensi($id_trx)
    {
        $this->load->model('form/Dosen_f', 'dosen_form');
        $cek_ = $this->Master_model->master_get(['id_trx_jadwal' => $id_trx], 'v_jadwal');
        $nilai_komponen = $this->Master_model->master_result(['periode' => $cek_->periode, 'id_matkul' => $cek_->id_matkul], 'nilai_komponen');
        if (!$nilai_komponen) {
            $text = $this->alert->danger('Komponen nilai is NULL');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('dosen/perkuliahan/presensi_mahasiswa_pertemuan_report/' . $id_trx));
        }
        $data_master = $this->dosen_form->input_nilai_presensi($id_trx, $nilai_komponen);

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

    public function input_nilai()
    {
        $periode = $this->Baak_model->master_get_set_input_nilai();
        // cek kuisoner

        $this->load->model('tabel/Dosen_t', 'dosen_tabel');

        $data_master = $this->dosen_tabel->input_nilai($periode);

        //print_r($data_master);
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

    public function history_nilai($id_trx, $nim, $nama)
    {
        $history = $this->Baak_model->history_nilai($id_trx);
        echo $nim . "-" . $nama;
        echo '<table id="mytable" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Komponen</th>
            <th>Nilai Asal</th>
            <th>Nilai perubahan</th>
            <th>Date</th>
            <th>Detail</th>
        </tr>
    </thead><tbody>';
        if ($history) {
            foreach ($history as $row) {
                echo " <tr>
            <td>" . $row->komponen . "</td>
            <td>" . $row->nilai_asal . "</td>
            <td>" . $row->nilai_berubah . "</td>
            <td>" . $row->date . "</td>
            <td>" . $row->log . "</td></tr>";
            }
        }
        echo " </tbody></table>";
    }

    public function komponen_nilai_edit_action($id, $id_trx)
    {
        $cek_ = $this->Master_model->master_get(['id' => $id], 'nilai_komponen');
        if ($cek_) {
            $cek_ = $this->Master_model->master_get(['id_trx_jadwal' => $id_trx], 'v_jadwal');
            $cek_s = $this->Master_model->master_result(['id_matkul' => $cek_->id_matkul, 'periode' => $cek_->periode, 'kode_prodi' => $cek_->kode_prodi], 'nilai_komponen');
            $total = 0;
            foreach ($cek_s as $row) {
                if ($row['id'] != $id) {
                    $total = $total + $row['presentase'];
                }
            }

            $komponen = $this->input->post('komponen');
            $presentase = $this->input->post('presentase');
            $total = $total + $presentase;
            if ($total > 100) {
                $text = $this->alert->danger('Percentage > 100 %');
                $this->session->set_flashdata('message', $text);
                redirect(site_url('dosen/perkuliahan/komponen_nilai/' . $id_trx));
            }

            $data = array(
                'komponen' => preg_replace("/[^0-9] /", "", $komponen),
                'presentase' => $presentase,
                'update_info' => $this->Master_model->user_cek_ident(),
            );
            $this->Master_model->update_query(['id' => $id], $data, 'nilai_komponen');

            $text = $this->alert->success('Data successfully Add');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('dosen/perkuliahan/komponen_nilai/' . $id_trx));
        } else {
            $text = $this->alert->danger('Percentage > 100 %');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('dosen/perkuliahan/komponen_nilai/' . $id_trx));
        }
    }

    public function komponen_nilai_edit($id, $id_trx)
    {
        $cek_ = $this->Master_model->master_get(['id' => $id], 'nilai_komponen');
        if ($cek_) {
            $this->load->view(
                'dosen/komponen_nilai_edit',
                [
                    'id_trx' => $id_trx,
                    'cek_' => $cek_,
                    'action' => base_url('dosen/perkuliahan/komponen_nilai_edit_action/' . $id . '/' . $id_trx),
                ]
            );
        } else {
            echo "no data";
        }
    }

    public function komponen_nilai($id_trx)
    {
        $cek_ = $this->Master_model->master_get(['id_trx_jadwal' => $id_trx], 'v_jadwal');
        $cek_ = $this->Master_model->master_result(['id_matkul' => $cek_->id_matkul, 'periode' => $cek_->periode, 'kode_prodi' => $cek_->kode_prodi], 'nilai_komponen');

        $this->header();
        $this->load->view(
            'dosen/komponen_nilai',
            [
                'id_trx' => $id_trx,
                'cek_' => $cek_,
                'action' => base_url('dosen/perkuliahan/komponen_nilai_add/' . $id_trx),
            ]
        );
        $this->footer();
    }

    public function komponen_nilai_add($id_trx)
    {
        $cek_ = $this->Master_model->master_get(['id_trx_jadwal' => $id_trx], 'v_jadwal');
        if ($cek_) {
            $cek_s = $this->Master_model->master_result(['id_matkul' => $cek_->id_matkul, 'periode' => $cek_->periode, 'kode_prodi' => $cek_->kode_prodi], 'nilai_komponen');
            $total = 0;
            foreach ($cek_s as $row) {
                $total = $total + $row['presentase'];
            }

            $nama = $this->input->post('nama');
            $presentase = $this->input->post('presentase');
            $id_matkul = $cek_->id_matkul;
            $periode = $cek_->periode;
            $kode_prodi = $cek_->kode_prodi;

            $total = $total + $presentase;
            if ($total > 100) {
                $text = $this->alert->danger('Percentage > 100 %');
                $this->session->set_flashdata('message', $text);
                redirect(site_url('dosen/perkuliahan/komponen_nilai/' . $id_trx));
            }
            $data = array(
                'komponen' => preg_replace("/[^0-9] /", "", $nama),
                'presentase' => $presentase,
                'id_matkul' => $id_matkul,
                'periode' => $periode,
                'kode_prodi' => $kode_prodi,
                'insert_info' => $this->Master_model->user_cek_ident(),
            );

            $this->Master_model->insert_query('nilai_komponen', $data);

            $text = $this->alert->success('Data successfully Add');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('dosen/perkuliahan/komponen_nilai/' . $id_trx));
        } else {
            $text = $this->alert->success('Record not found');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('dosen/perkuliahan/input_nilai'));
        }
    }

    public function input_nilai_list($id_trx)
    {
        $cek_ = $this->Master_model->master_get(['id_trx_jadwal' => $id_trx], 'v_jadwal');
        $komponen = $this->input->post('komponen');
        $nilai_komponen = $this->Master_model->master_get(['id' => $komponen], 'nilai_komponen');
        $this->load->model('Dosen_model');
        $list_mhs = $this->Dosen_model->input_nilai_list($cek_, $komponen);
        //print_r($list_mhs);
        $this->header();
        $this->load->view(
            'dosen/input_nilai_list',
            [
                'id_trx' => $id_trx,
                'list_mhs' => $list_mhs,
                'komponen' => $komponen,
                'nilai_komponen' => $nilai_komponen,
                'cek_' => $cek_
            ]
        );
        $this->footer();
    }

    public function report_nilai($id_trx)
    {
        $cek_ = $this->Master_model->master_get(['id_trx_jadwal' => $id_trx], 'v_jadwal');
        if ($cek_) {
            $cek_s = $this->Master_model->master_result(['id_matkul' => $cek_->id_matkul, 'periode' => $cek_->periode, 'kode_prodi' => $cek_->kode_prodi], 'nilai_komponen');

            $nilai_skala = $this->Master_model->master_result_order_asc(['periode' => $cek_->periode, 'kode_prodi' => $cek_->kode_prodi], 'nilai_skala', 'nilai_index');

            $coloum = '';
            foreach ($cek_s as $rows) {
                $coloum = $coloum . 'MAX(case when id_komponen = ' . $rows['id'] . ' then nilai END) ' . $rows['komponen'] . ', ';
            }
            $list_mhs = $this->Dosen_model->report_nilai($cek_, $coloum);

            $this->header();
            $this->load->view(
                'dosen/report_nilai',
                [
                    'nilai_komponen' => $cek_s,
                    'list_mhs' => $list_mhs,
                    'id_trx' => $id_trx,
                    'cek_' => $cek_,
                    'nilai_skala' => $nilai_skala

                ]
            );
            $this->footer();
        } else {
            $text = $this->alert->success('Record not found');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('dosen/perkuliahan/input_nilai'));
        }
    }

    public function input_nilai_report($id_trx)
    {
        $cek_ = $this->Master_model->master_get(['id_trx_jadwal' => $id_trx], 'v_jadwal');
        if ($cek_) {
            $cek_s = $this->Master_model->master_result(['id_matkul' => $cek_->id_matkul, 'periode' => $cek_->periode, 'kode_prodi' => $cek_->kode_prodi], 'nilai_komponen');

            $nilai_skala = $this->Master_model->master_result_order_asc(['periode' => $cek_->periode, 'kode_prodi' => $cek_->kode_prodi], 'nilai_skala', 'nilai_index');

            $coloum = '';
            foreach ($cek_s as $rows) {
                $coloum = $coloum . 'MAX(case when id_komponen = ' . $rows['id'] . ' then nilai END) ' . $rows['komponen'] . ', ';
            }
            $list_mhs = $this->Dosen_model->report_nilai($cek_, $coloum);

            // $this->header();
            $this->load->view('master/report_excel', ['name_file' => "Nilai"]);
            $this->load->view(
                'dosen/input_nilai_report',
                [
                    'nilai_komponen' => $cek_s,
                    'list_mhs' => $list_mhs,
                    'id_trx' => $id_trx,
                    'cek_' => $cek_,
                    'nilai_skala' => $nilai_skala

                ]
            );
            // $this->footer();
        } else {
            $text = $this->alert->success('Record not found');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('dosen/perkuliahan/input_nilai'));
        }
    }

    public function input_nilai_select($id_trx)
    {

        $periode = $this->Baak_model->master_get_set_input_nilai();
        $start = strtotime($periode->tgl_pengisian);
        $close = strtotime($periode->tgl_penutupan);
        $now = strtotime(date('Y-m-d'));

        if ($start < $now and $now < $close and $periode->pengisian_frs == 'buka') {

            $cek_kuisoner = $this->Master_model->master_get(['email' => $this->session->userdata('username'), 'periode' => $periode->kode], 'kuisoner_jawaban');

            if ($cek_kuisoner == NULL) {
                 redirect('dosen/kuisoner/list_kuisoner_dosen');
            }

            $cek_ = $this->Master_model->master_get(['id_trx_jadwal' => $id_trx], 'v_jadwal');
            if ($cek_) {
                $cek_s = $this->Master_model->master_result(['id_matkul' => $cek_->id_matkul, 'periode' => $cek_->periode, 'kode_prodi' => $cek_->kode_prodi], 'nilai_komponen');
                $this->header();
                $this->load->view(
                    'dosen/input_nilai_select',
                    [
                        'id_trx' => $id_trx,
                        'master_saji' => $cek_,
                        'komponen_nilai' => $cek_s,
                        'action' => base_url('dosen/perkuliahan/input_nilai_list/' . $id_trx)
                    ]
                );
                $this->footer();
            } else {
                $text = $this->alert->success('Record not found');
                $this->session->set_flashdata('message', $text);
                redirect(site_url('dosen/perkuliahan/input_nilai'));
            }
        } else {
            $text = $this->alert->danger('You do not have access : Pengisian Nilai di tutup');
            $this->session->set_flashdata('message', $text);
            redirect("dosen/perkuliahan/input_nilai");
        }
    }

    public function report_nilai_action()
    {
        $list_nim = $this->input->post('id_trx', TRUE);
        foreach ($list_nim as $row) {
            $nilai = $this->input->post('nilai_' . $row, TRUE);
            $nilai_huruf = $this->input->post('nilai_huruf_' . $row, TRUE);
            if ($nilai and ($nilai > 0 and $nilai < 101)) {
                $cek_ = $this->Master_model->master_get(['id_trx' => $row], 'frs_mhs_mk');
                if ($cek_) {
                    if ($cek_->nilai_angka != $nilai) {
                        $data = array(
                            'feeder_update_nilai' => 'belum',
                            'nilai_angka' => $nilai,
                            'nilai_huruf' => $nilai_huruf,
                            'last_edit' => date('Y-m-d H:i:s')
                        );
                        $where_array = array(
                            'id_trx' => $row
                        );
                        $this->Master_model->update_query($where_array, $data, 'frs_mhs_mk');
                        $this->Master_model->insert_history('approve_nilai', 'frs_mhs_mk', json_encode($data));
                    }
                }
            }
        }
    }

    public function input_nilai_list_action($komponen)
    {
        $list_nim = $this->input->post('id_trx', TRUE);
        foreach ($list_nim as $row) {
            $nilai = $this->input->post('nilai_' . $row, TRUE);
            //  print_r($nilai);
            //  echo $row;
            //  echo "<br>";
            if ($nilai and ($nilai > 0 and $nilai < 101)) {
                $cek_ = $this->Master_model->master_get(['id_komponen' => $komponen, 'id_trx_frs' => $row], 'frs_mhs_nilai');
                if ($cek_) {
                    if ($cek_->nilai != $nilai) {
                        $data = array(
                            'nilai' => $nilai,
                            'update_date' => date('Y-m-d')
                        );
                        $where_array = array(
                            'id_trx_nilai' => $cek_->id_trx_nilai
                        );
                        $this->Master_model->update_query($where_array, $data, 'frs_mhs_nilai');

                        $datas = array(
                            'id_trx_history' => date('ymdhsi') . '_' . $komponen . '_' . $row,
                            'id_komponen' => $komponen,
                            'id_trx_frs' => $row,
                            'nilai_asal' => $cek_->nilai,
                            'nilai_berubah' => $nilai,
                            'log' => $this->Master_model->user_cek_ident()
                        );
                        $this->Master_model->insert_query('history_nilai', $datas);
                    }
                } else {
                    $data = array(
                        'id_komponen' => $komponen,
                        'id_trx_frs' => $row,
                        'nilai' => $nilai,
                        'log' => $this->Master_model->user_cek_ident()
                    );
                    $this->Master_model->insert_query('frs_mhs_nilai', $data);

                    $datas = array(
                        'id_trx_history' => date('ymdhsi') . '_' . $komponen . '_' . $row,
                        'id_komponen' => $komponen,
                        'id_trx_frs' => $row,
                        'nilai_asal' => 0,
                        'nilai_berubah' => $nilai,
                        'log' => $this->Master_model->user_cek_ident()
                    );
                    $this->Master_model->insert_query('history_nilai', $datas);
                }
            }
            // echo $row;
            // echo $this->input->post('presensi_status_'.$row,TRUE);
        }
    }

    public function perangkat_pembelajaran($id)
    {
        $v_jadwal = $this->Master_model->master_get(['id_trx_jadwal' => $id], 'v_jadwal');
        $pertemuan = $this->Master_model->master_result_order_asc(['id_trx_jadwal' => $id], 'presensi_dosen', 'pertemuan');

        $this->header();
        $this->load->view(
            'dosen/perangkat_pembelajaran',
            [
                'jadwal' => $v_jadwal,
                'id_jadwal' => $id,
                'pertemuan' => $pertemuan,
            ]
        );
        $this->footer();
    }

    public function perangkat_perkuliahan_periode()
    {
        $this->load->model('tabel/Dosen_t', 'dosen_tabel');
        $data_master = $this->dosen_tabel->perangkat_perkuliahan_periode();
        //print_r($data_master);
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

    public function add_pertemuan_perangkat_pembelajaran_action($id)
    {
        $this->form_validation->set_rules('rencana_tanggal_masuk', 'rencana_tanggal_masuk', 'trim|required|xss_clean');
        $this->form_validation->set_rules('rencana_materi', 'rencana_materi', 'trim|required|xss_clean');
        $this->form_validation->set_rules('rencana_methode', 'rencana_methode', 'trim|required|xss_clean');
        $cek_ = $this->Master_model->master_get(['id_trx_jadwal' => $id], 'mata_kuliah_jadwal');
        if ($cek_) {
            if (($this->form_validation->run() == TRUE)) {
                $this->load->model('Dosen_model');
                // $cek_presensi = $this->Dosen_model->last_presensi_dosen($id);
                $cek_presensi = $this->Master_model->master_get(['id_trx_jadwal' => $id], 'v_jadwal');
				$cek_s = $this->Master_model->master_get(['id_trx_jadwal' => $id, 'pertemuan' => $this->input->post('pertemuan', TRUE)], 'presensi_dosen');
                if ($cek_s) {
                    $text = $this->alert->danger('Pertemuan Sudah Ada');
                    $this->session->set_flashdata('message', $text);
                    redirect(site_url('dosen/perkuliahan/add_pertemuan_perangkat_pembelajaran/' . $id));
                }
                // echo $pertemuan;
                $data = array(
                    'id_trx_jadwal' => $id,
                    'id_matkul' => $cek_presensi->id_matkul,
                    'periode' => $cek_presensi->periode,
                    'id_kelas' => $cek_presensi->id_kelas,
                    'pertemuan' => $this->input->post('pertemuan', TRUE),
                    'email' => $this->session->userdata('username'),
                    'rencana_tanggal_masuk' => $this->input->post('rencana_tanggal_masuk', TRUE),
                    'rencana_materi' => $this->input->post('rencana_materi', TRUE),
                    'rencana_methode' => $this->input->post('rencana_methode', TRUE),
                );
                // print_r($data);
                $this->Master_model->insert_query('presensi_dosen', $data);

                $text = $this->alert->success('Data successfully Add');
                $this->session->set_flashdata('message', $text);
                redirect(site_url('dosen/perkuliahan/perangkat_pembelajaran/' . $id));
            } else {
                $this->add_pertemuan_perangkat_pembelajaran($id_trx);
            }
        } else {
            $text = $this->alert->danger('Record Not Found');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('dosen/perkuliahan/kehadiran_dosen_jadwal'));
        }
    }

    public function edit_pertemuan_perangkat_pembelajaran($id_trx, $pertemuan)
    {
        $cek_ = $this->Master_model->master_get(['id_trx_jadwal' => $id_trx, 'pertemuan' => $pertemuan], 'rekap_presensi_dosen_detail');
        if ($cek_) {
            $text = $this->alert->danger('Error : Cannot Edit, TRX has recapitulated');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('dosen/perkuliahan/perangkat_pembelajaran/' . $id_trx));
        } else {
            $data_masters = get_object_vars($this->Master_model->master_get(['id_trx_jadwal' => $id_trx, 'pertemuan' => $pertemuan, 'status_rekap' => 'rencana'], 'presensi_dosen'));
            if ($data_masters) {
                $this->load->model('form/Dosen_f', 'dosen_form');
                $data_master = $this->dosen_form->edit_pertemuan_perangkat_pembelajaran($id_trx, $pertemuan);
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
                $text = $this->alert->danger('Record Not Found');
                $this->session->set_flashdata('message', $text);
                redirect(site_url('dosen/perkuliahan/kehadiran_dosen_jadwal'));
            }
        }
    }

    public function edit_pertemuan_perangkat_pembelajaran_action($id_trx, $pertemuan)
    {
        $data_masters = ($this->Master_model->master_get(['id_trx_jadwal' => $id_trx, 'pertemuan' => $pertemuan, 'status_rekap' => 'rencana'], 'presensi_dosen'));
        if ($data_masters && $data_masters->email == $this->session->userdata('username')) {
            $this->form_validation->set_rules('rencana_tanggal_masuk', 'rencana_tanggal_masuk', 'trim|required|xss_clean');
            $this->form_validation->set_rules('rencana_materi', 'rencana_materi', 'trim|required|xss_clean');
            $this->form_validation->set_rules('rencana_methode', 'rencana_methode', 'trim|required|xss_clean');
            if (($this->form_validation->run() == TRUE)) {
                $data = array(
                    'rencana_tanggal_masuk' => $this->input->post('rencana_tanggal_masuk', TRUE),
                    'rencana_materi' => $this->input->post('rencana_materi', TRUE),
                    'rencana_methode' => $this->input->post('rencana_methode', TRUE),
                );

                $this->Master_model->update_query(['id_trx_jadwal' => $id_trx, 'pertemuan' => $pertemuan, 'status_rekap' => 'rencana'], $data, 'presensi_dosen');
                log_message('info', 'Update - rencana_pembelajaran_dosen, data :' . json_encode($data_masters));

                $text = $this->alert->success('Data successfully edit');
                $this->session->set_flashdata('message', $text);
                redirect(site_url('dosen/perkuliahan/perangkat_pembelajaran/' . $id_trx));
            } else {
                $this->edit_pertemuan_perangkat_pembelajaran($id_trx, $pertemuan);
            }
        } else {
            $text = $this->alert->danger('Record Not Found');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('dosen/perkuliahan/perangkat_pembelajaran' . $id_trx));
        }
    }

    public function simpan_draf($id_trx)
    {
        $v_jadwal = $this->Master_model->master_get(['id_trx_jadwal' => $id_trx], 'v_jadwal');
        $pertemuan = $this->Master_model->master_result_order_asc(['id_trx_jadwal' => $id_trx], 'presensi_dosen', 'pertemuan');
        if (count($pertemuan) <= 6) {
            $text = $this->alert->danger('Error : Please check meeting list again - silahkan cek kembali list pertemuan');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('dosen/perkuliahan/perangkat_pembelajaran/' . $id_trx));
        }
        // if(!$v_jadwal->file_rps){
        //     $text = $this->alert->danger('Error : RPS empty - RPS Kosong');
        //     $this->session->set_flashdata('message', $text);
        //     redirect(site_url('dosen/perkuliahan/perangkat_pembelajaran/'.$id_trx));
        // }
        if (!in_array($v_jadwal->status_rps, ['draf', 'revisi'])) {
            $text = $this->alert->danger('Error : Status RPS');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('dosen/perkuliahan/perangkat_pembelajaran/' . $id_trx));
        }
        $data = array(
            'status' => "proses",
        );
        $this->Master_model->update_query(['id_trx_jadwal' => $id_trx], $data, 'mata_kuliah_jadwal');

        $text = $this->alert->success('saved successfully');
        $this->session->set_flashdata('message', $text);
        redirect(site_url('dosen/perkuliahan/perangkat_pembelajaran/' . $id_trx));
    }

    public function delete_pertemuan_perangkat_pembelajaran($id_trx, $pertemuan)
    {
        $cek_ = $this->Master_model->master_get(['id_trx_jadwal' => $id_trx, 'pertemuan' => $pertemuan], 'rekap_presensi_dosen_detail');
        if ($cek_) {
            $text = $this->alert->danger('Error : Cannot Delete, TRX has recapitulated');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('dosen/perkuliahan/presensi_dosen/' . $cek_->id_trx_jadwal));
        } else {
            $data_masters = get_object_vars($this->Master_model->master_get(['id_trx_jadwal' => $id_trx, 'pertemuan' => $pertemuan, 'status_rekap' => 'rencana'], 'presensi_dosen'));

            $this->Master_model->insert_history('delete', 'pertemuan_perangkat_pembelajaran', json_encode($data_masters));

            $this->Master_model->delete_query(['id_trx_jadwal' => $id_trx, 'pertemuan' => $pertemuan], 'presensi_dosen');
            $text = $this->alert->success('Data Successfully Delete');
            $this->session->set_flashdata('message', $text);

            redirect(site_url('dosen/perkuliahan/perangkat_pembelajaran/' . $id_trx));
        }
    }

    public function copy_draf_action($id_trx_to, $id_trx_from)
    {
        //persiapan jadwal
        $v_jadwal = $this->Master_model->master_get(['id_trx_jadwal' => $id_trx_to], 'v_jadwal');
        $pertemuan = $this->Master_model->master_result_order_asc(['id_trx_jadwal' => $id_trx_to], 'presensi_dosen', 'pertemuan');

        //cek ketersediaan jadwal
        $v_jadwal_from = $this->Master_model->master_get(['id_trx_jadwal' => $id_trx_from, 'status_rps' => 'draf'], 'v_jadwal');

        if ($v_jadwal_from) {
            $this->Master_model->update_query(['id_trx_jadwal' => $id_trx_from], ['file_rps' => $v_jadwal->file_rps], 'mata_kuliah_jadwal');

            foreach ($pertemuan as $row) {
                $pertemuan_trx_from = $this->Master_model->master_get(['id_trx_jadwal' => $id_trx_from, 'pertemuan' => $row['pertemuan']], 'presensi_dosen');

                //jika pertemuan sudah ada
                if ($pertemuan_trx_from) {
                    $this->Master_model->update_query(
                        ['id_trx_jadwal' => $id_trx_from, 'pertemuan' => $row['pertemuan']],
                        [
                            'rencana_materi' => $row['rencana_materi'],
                            'rencana_methode' => $row['rencana_methode'],
                            'rencana_tanggal_masuk' => $row['rencana_tanggal_masuk'],
                        ],
                        'presensi_dosen'
                    );
                } else {
                    $cek_presensi = $this->Dosen_model->last_presensi_dosen($id_trx_from);

                    $data = array(
                        'id_trx_jadwal' => $id_trx_from,
                        'id_matkul' => $cek_presensi->id_matkul,
                        'periode' => $cek_presensi->periode,
                        'id_kelas' => $cek_presensi->id_kelas,
                        'pertemuan' => $row['pertemuan'],
                        'email' => $this->session->userdata('username'),

                        'rencana_tanggal_masuk' => $row['rencana_tanggal_masuk'],
                        'rencana_materi' => $row['rencana_materi'],
                        'rencana_methode' => $row['rencana_methode'],
                    );
                    $this->Master_model->insert_query('presensi_dosen', $data);
                }
            }

            log_message('info', 'Copy - presensi_dosen, data :' . json_encode($data_masters));
            $text = $this->alert->success('Data Successfully Copy');
            $this->session->set_flashdata('message', $text);

            redirect(site_url('dosen/perkuliahan/perangkat_pembelajaran/' . $id_trx_from));
        } else {
            $text = $this->alert->danger('Error : Cannot Delete, TRX has recapitulated');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('dosen/perkuliahan/presensi_dosen/' . $id_trx_from));
        }
    }

    public function copy_draf($id_trx)
    {
        $cek_ = $this->Master_model->master_get(['id_trx_jadwal' => $id_trx], 'v_jadwal');

        $this->load->model('tabel/Dosen_t', 'dosen_tabel');
        $cek_periode = $this->Master_model->master_get(['id_semester' => $cek_->periode], 'dikti_semester');
        $data_master = $this->dosen_tabel->copy_draf($cek_periode, $id_trx);

        //print_r($data_master);
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

    public function add_pertemuan_perangkat_pembelajaran($id_trx)
    {
        $this->load->model('form/Dosen_f', 'dosen_form');
        $cek_ = $this->Master_model->master_get(['id_trx_jadwal' => $id_trx], 'v_jadwal');
        $data_master = $this->dosen_form->add_pertemuan_perangkat_pembelajaran($id_trx, $cek_);

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
    public function jadwal()
    {

        $periode = $this->Baak_model->json_id_periode_aktif('');
        $this->load->model('tabel/Baak_t', 'baak_tabel');
        $data_master = $this->baak_tabel->list_jadwal_by_dosen($periode->kode);

        //print_r($data_master);
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
