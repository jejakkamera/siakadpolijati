<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php';

use Ramsey\Uuid\Uuid;


class Perkuliahan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Feeder_lib');
        $this->load->model('Mahasiswa_model');



        $level = $this->session->userdata('role');
        $action = 'get';
        $access = $this->Master_model->cek_akses('mahasiswa', $level, $action);
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

    public function akademik()
    {
        $this->load->model('Baak_model');

        $nim = $this->session->userdata('username');

        $kurikulum = ($this->Baak_model->mahasiswa_list_kurikulum($nim));
        $info_akademik = $this->Baak_model->master_akademik_mhs($nim);

        // var_dump($kurikulum);
        // die;
        // // print_r($kurikulum[0]);
        $this->header();
        $this->load->view(
            'mahasiswa/akadmik',
            ['kurikulum' => $kurikulum, 'info_akademik' => $info_akademik]
        );
        $this->footer();
    }

    public function riwayat_perkuliahan()
    {
        $this->load->model('Baak_model');

        $nim = $this->session->userdata('username');
        $kurikulum = ($this->Baak_model->mahasiswa_list_kurikulum($nim));
        $info_akademik = $this->Baak_model->master_akademik_mhs($nim);

        //print_r($info_akademik);
        //print_r($kurikulum[0]);
        $this->header();
        // $this->load->view('mahasiswa/riwayat_perkuliahan',
        //     ['kurikulum'=>$kurikulum,'info_akademik'=>$info_akademik]
        // );
        $this->footer();
    }

    public function kartu_kehadiran_action()
    {
        $this->load->model('form/Mhs_f', 'mahasiswa_form');
        $periode = $this->input->post('id_periode', TRUE);
        $nim = $this->session->userdata('username');
        $mahasiswa = $this->Master_model->master_get(['nim' => $nim], 'v_mahasiswa');
        $data = $this->Master_model->master_result_(['id_registrasi_mahasiswa' => $mahasiswa->id_registrasi_mahasiswa, 'periode' => $periode, 'status_frs' => 'setujui'], 'v_frs');
        if ($data) {
            $this->header();
            $this->load->view(
                'mahasiswa/kartu_kehadiran',
                [
                    'periode' => $periode,
                    'kurikulum' => $data,
                    'mahasiswa' => $mahasiswa,
                ]
            );
            $this->footer();
        } else {
            $text = $this->alert->danger('Data Is Null : anda belum mengisi FRS pada periode ' . $periode);
            $this->session->set_flashdata('message', $text);
            redirect('mahasiswa/perkuliahan/kartu_kehadiran/', 'refresh');
        }
    }

    public function kartu_kehadiran_action_cetak($akses, $id_trx)
    {
        $this->load->model('form/Mhs_f', 'mahasiswa_form');
        $data = $this->Master_model->master_get(['id_trx' => $id_trx], 'v_frs');

        if ($data) {
            $nim = $this->session->userdata('username');
            $mahasiswa = $this->Master_model->master_get(['nim' => $nim], 'v_mahasiswa');

            $data4 = $this->load->library('print_kehadiran');
            $this->print_kehadiran->generate(
                'mahasiswa/print_kartu_kehadiran',
                [
                    'periode' => $data->periode,
                    'mk' => $data,
                    'mahasiswa' => $mahasiswa,
                    'akses' => $akses,

                ]
            );

            $this->header();
            $this->load->view(
                'mahasiswa/cetak_kartu_kehadiran',
                [
                    'periode' => $data->periode,
                    'mk' => $data,
                    'mahasiswa' => $mahasiswa,
                    'akses' => $akses,
                ]
            );
            $this->footer();
        } else {
            $text = $this->alert->danger('Data Is Null : Data MK tidak ditemukan ');
            $this->session->set_flashdata('message', $text);
            redirect('mahasiswa/perkuliahan/kartu_kehadiran/', 'refresh');
        }
    }

    public function kartu_kehadiran()
    {
        $this->load->model('form/Mhs_f', 'mahasiswa_form');

        $data_master = $this->mahasiswa_form->kartu_kehadiran();

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

    public function kartu_ujian_action()
    {
        $this->load->model('form/Mhs_f', 'mahasiswa_form');
        $periode = $this->input->post('id_periode', TRUE);
        $type = $this->input->post('type', TRUE);

        $nim = $this->session->userdata('username');
        $mahasiswa = $this->Master_model->master_get(['nim' => $nim], 'v_mahasiswa');
        $data = $this->Master_model->master_result_(['id_registrasi_mahasiswa' => $mahasiswa->id_registrasi_mahasiswa, 'periode' => $periode, 'status_frs' => 'setujui'], 'v_frs');
        if ($data) {
            // $this->header();

            $data4 = $this->load->library('mypdf');
            $this->mypdf->generate(
                'mahasiswa/cetak_kartu_ujian',
                [
                    'periode' => $periode,
                    'kurikulum' => $data,
                    'mahasiswa' => $mahasiswa,
                    'type' => $type

                ]
            );
            // $this->footer();
        } else {
            $text = $this->alert->danger('Data Is Null : anda belum mengisi FRS pada periode ' . $periode);
            $this->session->set_flashdata('message', $text);
            redirect('mahasiswa/perkuliahan/kartu_ujian/', 'refresh');
        }
    }

    public function kartu_ujian()
    {
        $this->load->model('form/Mhs_f', 'mahasiswa_form');

        $data_master = $this->mahasiswa_form->kartu_ujian();

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

    public function transkrip_akademik()
    {

        $this->load->model('form/Mhs_f', 'mahasiswa_form');
        $nim = $this->session->userdata('username');
        $mahasiswa = $this->Master_model->master_get(['nim' => $nim], 'v_mahasiswa');
        $data = $this->Master_model->master_result_(['id_registrasi_mahasiswa' => $mahasiswa->id_registrasi_mahasiswa, 'status_frs' => 'setujui'], 'v_frs_index');
        if ($data) {
            $last_krs = max(array_column($data, 'periode'));
			$cek_kuisoner = $this->Master_model->master_get(['email' => $this->session->userdata('username'), 'periode' => $last_krs], 'kuisoner_jawaban');

            if ($cek_kuisoner == NULL) {
                 redirect('mahasiswa/kuisoner/list_kuisoner/'.$last_krs);
            }

            if (substr($last_krs, -1) != '3') {
                $last_krs = substr($last_krs, 0, 4) . '2';
            }
            $pembayaran = $this->Mahasiswa_model->cek_tagihan_nim_periode($this->session->userdata('username'), $last_krs);
			if(!$pembayaran){
				$text = $this->alert->danger('You do not have access : Lakukan Pembayaran UKT ');
                	$this->session->set_flashdata('message', $text);
                	redirect("mahasiswa/profile/dashboard");
			}
            $this->header();
            $this->load->view(
                'mahasiswa/hasil_studi',
                [
                    'status' => 'transkrip_akademik',
                    'periode' => 'all',
                    'kurikulum' => $data,
                    'mahasiswa' => $mahasiswa,
                ]
            );
            $this->footer();
        } else {
            $text = $this->alert->danger('Data Is Null : anda belum mengisi FRS pada periode ' . $periode);
            $this->session->set_flashdata('message', $text);
            redirect('mahasiswa/perkuliahan/kartu_ujian/', 'refresh');
        }
    }

    public function hasil_studi_action()
    {
        $this->load->model('form/Mhs_f', 'mahasiswa_form');
        $periode = $this->input->post('id_periode', TRUE);
        $nim = $this->session->userdata('username');
        $mahasiswa = $this->Master_model->master_get(['nim' => $nim], 'v_mahasiswa');
        $data = $this->Master_model->master_result_(['id_registrasi_mahasiswa' => $mahasiswa->id_registrasi_mahasiswa, 'periode <=' => $periode, 'status_frs' => 'setujui'], 'v_frs_index');
        $cek_kuisoner = $this->Master_model->master_get(['email' => $this->session->userdata('username'), 'periode' => $periode], 'kuisoner_jawaban');
		
            if ($cek_kuisoner == NULL) {
                redirect('mahasiswa/kuisoner/list_kuisoner/'.$periode);
            }
		
		if ($data) {
            if (substr($periode, -1) != '3') {
				$pembayaran = $this->Mahasiswa_model->cek_tagihan_nim_periode($this->session->userdata('username'), $periode);
				if(!$pembayaran){
					$text = $this->alert->danger('You do not have access : Lakukan Pembayaran UKT ');
						$this->session->set_flashdata('message', $text);
						redirect("mahasiswa/profile/dashboard");
				}
            }
            $this->header();
            $this->load->view(
                'mahasiswa/hasil_studi',
                [
                    'status' => 'hasil_studi',
                    'periode' => $periode,
                    'kurikulum' => $data,
                    'mahasiswa' => $mahasiswa,
                ]
            );
            $this->footer();
        } else {
            $text = $this->alert->danger('Data Is Null : anda belum mengisi FRS pada periode ' . $periode);
            $this->session->set_flashdata('message', $text);
            redirect('mahasiswa/perkuliahan/hasil_studi/', 'refresh');
        }
    }

    public function hasil_studi_detail($id)
    {
        $hasil_studi_detail = $this->Mahasiswa_model->hasil_studi_detail($id);
        echo "<div class='table-responsive'><table class='table table-bordered'><tr>
				<td> Nama Komponen</td>
				<td> Presentase</td>
				<td> Nilai</td>
				<td> Tanggal Input</td>
            </tr> ";
        if ($hasil_studi_detail) {
            foreach ($hasil_studi_detail as $val) {
                echo "<tr>
                    <td>" . $val->komponen . "</td><td> " . $val->presentase . " </td><td>" . $val->nilai . "</td><td> " . $val->insert_date . " </td>
                    </tr>";
            }
        }

        echo " </table></div>";
    }

    public function kehadiran_online($id_krs)
    {
        $cek_ = $this->Mahasiswa_model->presensi_mahasiswa_online(['id_trx' => $id_krs, 'nim' => $this->session->userdata('username')]);
        if (!$cek_) {
            $text = $this->alert->danger('Record not found');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('welcome/dashboard/'));
        }
        $v_jadwal = $this->Master_model->master_get([
            'periode' => $cek_->periode,
            'kode_prodi' => $cek_->kode_prodi,
            'kode_mata_kuliah' => $cek_->kode_mata_kuliah
        ], 'v_jadwal');

        if (!$v_jadwal) {
            $text = $this->alert->danger('Data Is Null : Kelas tidak ditemukan ');
            $this->session->set_flashdata('message', $text);
            redirect('welcome/dashboard', 'refresh');
        }
        $presensi_dosen = $this->Master_model->master_result_order_asc(
            [
                'id_trx_jadwal' => $v_jadwal->id_trx_jadwal,
            ],
            'presensi_dosen',
            'pertemuan'
        );

        $this->header();

        $this->load->view(
            'mahasiswa/presensi',
            [
                'v_jadwal' => $v_jadwal,
                'frs' => $cek_,
                'presensi_dosen' => $presensi_dosen,
                // 'data_isi'=>$data_master['data_isi'],
            ]
        );
        $this->footer();
    }

    public function kehadiran_online_action($id_matkul, $periode, $nim, $pertemuan, $kehadiran)
    {

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
                    'nim' => $nim,
                    'presensi_status_' . $pertemuan => $kehadiran,
                    'tanggal_absen_' . $pertemuan => date('Y-m-d')
                );
                $this->Master_model->insert_query('presensi_mahasiswa', $data);
            }
        }
        echo "<script>alert('refresh windows');window.close();</script>";
    }

    public function hasil_studi()
    {
        $this->load->model('form/Mhs_f', 'mahasiswa_form');

        $data_master = $this->mahasiswa_form->hasil_studi();

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

    public function perwalian()
    {
        $this->load->model('tabel/Baak_t', 'baak_tabel');
        $data_master = $this->baak_tabel->list_perwalian_by_mahasiswa();

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

    public function perwalian_add()
    {
        $this->load->model('form/Baak_f', 'baak_form');
        $data_master = $this->baak_form->perwalian_add($this->session->userdata('username'));
        $this->header();
        $this->load->view(
            'master/master_form',
            [
                'data_detail' => $data_master['form_detail'],
                'data_isi' => $data_master['data_isi'],
                'status' => '',
            ]
        );
        $this->footer();
    }

    public function perwalian_add_action()
    {
        $this->load->model('Baak_model');

        $periode = $this->Baak_model->json_id_periode_aktif('');

        $this->form_validation->set_rules('konten_perwalian', 'konten_perwalian', 'trim|required|xss_clean');
        $this->form_validation->set_rules('tanggal_perwalian', 'tanggal_perwalian', 'trim|required|xss_clean');
        $this->form_validation->set_rules('topik_perwalian', 'topik_perwalian', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            redirect('baak/mahasiswa/perwalian_add/' . $this->session->userdata('username'));
        } else {
            $data = array(
                'nim' => $this->session->userdata('username'),
                'periode' => $periode->kode,
                'topik_pewralian' => $this->input->post('topik_perwalian'),
                'keterangan' => $this->input->post('konten_perwalian'),
                'input_date' => $this->input->post('tanggal_perwalian'),
                'email_dosen' => $this->session->userdata('username')
            );
            $this->Master_model->insert_query('mahasiswa_perwalian', $data);
            log_message('info', 'Input - perwalian, data :' . json_encode($data));

            $text = $this->alert->success('Data successfully Add');
            $this->session->set_flashdata('message', $text);
            redirect(site_url('/mahasiswa/perkuliahan/perwalian'));
        }
    }
    public function jadwal()
    {
        $this->load->model('Baak_model');
        $periode = $this->Baak_model->json_id_periode_aktif('');
        $this->load->model('tabel/Baak_t', 'baak_tabel');
        $data_master = $this->baak_tabel->list_jadwal_by_mahasiswa($periode->kode);

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

    public function mahasiswa_aktif()
    {
        // $this->load->model('Baak_model');
        // $periode = $this->Baak_model->json_id_periode_aktif('');
        $this->load->model('tabel/Baak_t', 'baak_tabel');
        $data_master = $this->baak_tabel->mahasiswa_aktif_by_nim($this->session->userdata('username'));

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

    public function add_mahasiswa_aktif()
    {

        $this->load->model('form/Baak_f', 'baak_form');
        $data_master = $this->baak_form->add_mahasiswa_aktif();
        $this->header();
        $this->load->view(
            'master/master_form',
            [
                'data_detail' => $data_master['form_detail'],
                'data_isi' => $data_master['data_isi'],
                'status' => '',
            ]
        );
        $this->footer();
    }


    public function action_add_mahasiswa_aktif()
    {

        //cek tgihan
        $cek_tagihan = $this->Mahasiswa_model->cek_tagihan_nim_periode($this->session->userdata('username'), $this->input->post('id_periode'));


        if ($cek_tagihan) {
            $this->load->model('Baak_model');
            $cek = $this->Master_model->master_get(['nim' => $this->session->userdata('username'), 'periode' => $this->input->post('id_tahun_ajaran')], 'list_mahasiswa_aktif');

            if (!$cek) {
                $uuid1 = Uuid::uuid1()->toString();
                // get per periode
                $nomer_surat = $this->Baak_model->get_list_mahasiswa_aktif_last_id($this->input->post('id_tahun_ajaran'));

                $data = array(
                    'id_uuid' => $uuid1,
                    'nomer_aktif' => $nomer_surat,
                    'nim' => $this->session->userdata('username'),
                    'periode' => $this->input->post('id_periode'),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                );
                $this->Master_model->insert_query('list_mahasiswa_aktif', $data);
                log_message('info', 'Input - list_mahasiswa_aktif, data :' . json_encode($data));

                $text = $this->alert->success('Data successfully Add');
                $this->session->set_flashdata('message', $text);
                return redirect(site_url('/mahasiswa/perkuliahan/mahasiswa_aktif'));
            } else {
                $text = $this->alert->danger('Data Already Axist');
                $this->session->set_flashdata('message', $text);
                return redirect(site_url('/mahasiswa/perkuliahan/mahasiswa_aktif'));
            }
        }

        $text = $this->alert->danger('You do not have access : Lakukan Pembayaran UKT');
        $this->session->set_flashdata('message', $text);
        return redirect(site_url('/mahasiswa/perkuliahan/mahasiswa_aktif'));



        // var_dump($cek, $this->session->userdata('username'));
        // var_dump($this->input->post());
    }

    public function json_id_periode()
    {
        $this->load->model('Baak_model');
        $mk = $this->input->post('kec');
        header('Content-Type: application/json');
        $data_dosen = $this->Baak_model->json_id_periode($mk);
        echo json_encode($data_dosen);
    }

    public function surat_kelulusan()
    {
        $this->load->model('tabel/Baak_t', 'baak_tabel');
        $data_master = $this->baak_tabel->surat_kelulusan($this->session->userdata('username'));

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

    public function add_surat_kelulusan()
    {
        $cek_data = $this->Master_model->master_get(['nim' => $this->session->userdata('username')], 'list_surat_kelulusan');
		$cek_kuisoner = $this->Master_model->master_get(['email' => $this->session->userdata('username'), 'periode' => 'lulus'], 'kuisoner_jawaban');

            if ($cek_kuisoner == NULL) {
                 redirect('mahasiswa/kuisoner/list_kuisoner_lulus/');
            }

        if ($cek_data != NULL) {
            $text = $this->alert->danger('Data Sudah Ada');
            $this->session->set_flashdata('message', $text);
            return redirect(site_url('/mahasiswa/perkuliahan/surat_kelulusan'));
        }

        $this->load->model('Baak_model');
        $cek_tagihan = $this->Mahasiswa_model->cek_tagihan_kelulusan();

        if ($cek_tagihan == true) {
            $cek_kelulusan = $this->Master_model->master_get(['nim' => $this->session->userdata('username')], 'mahasiswa');
            if ($cek_kelulusan->status_mahasiswa != 'Lulus') {
                $text = $this->alert->danger('Mahasiswa Belum Dinyatakan Lulus');
                $this->session->set_flashdata('message', $text);
                return redirect(site_url('/mahasiswa/perkuliahan/surat_kelulusan'));
            }
            $cek_strata = $this->db->query("
                SELECT dikti_prodi.nama_jenjang_pendidikan 
                FROM mahasiswa 
                JOIN dikti_prodi ON mahasiswa.kode_prodi = dikti_prodi.kode_program_studi 
                WHERE mahasiswa.nim = ?
            ", $this->session->userdata('username'))->row();
            if ($cek_strata->nama_jenjang_pendidikan == "S1") {
                $data_sidang = $this->Master_model->master_get(['nim' => $this->session->userdata('username'), 'sidang' => 'ta'], 'v_ta_s1_mhs_sidang');
            } else {
                $data_sidang = $this->Master_model->master_get(['nim' => $this->session->userdata('username'), 'sidang' => 'ta'], 'v_ta_d3_mhs_sidang');
                var_dump($data_sidang);
            }

            $nomer_surat = $this->Baak_model->get_list_surat_kelulusan_last_id();

            $data = array(
                'uuid' => Uuid::uuid1()->toString(),
                'nomer_aktif' => $nomer_surat,
                'nim' => $this->session->userdata('username'),
                'periode' => $data_sidang->periode,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            );
            $this->Master_model->insert_query('list_surat_kelulusan', $data);
            log_message('info', 'Input - list_surat_kelulusan, data :' . json_encode($data));

            $text = $this->alert->success('Data successfully Add');
            $this->session->set_flashdata('message', $text);
            return redirect(site_url('/mahasiswa/perkuliahan/surat_kelulusan'));
        } elseif ($cek_tagihan == false) {


            $text = $this->alert->danger('Pembayaran Belum selesai');
            $this->session->set_flashdata('message', $text);
            return redirect(site_url('/mahasiswa/perkuliahan/surat_kelulusan'));
        } else {
            $text = $this->alert->danger('Gagal Get Data');
            $this->session->set_flashdata('message', $text);
            return redirect(site_url('/mahasiswa/perkuliahan/surat_kelulusan'));
        }

        // var_dump($status);
        // die;
    }
}
