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

    public function list_kuisoner($periode)
    {
        $kuisoner = $this->Master_model->master_result(['status' => '1','role'=>'mhs','show'=>'yes'], 'kuisoner_pertanyaan');
        $this->header();
        $this->load->view(
            'dosen/kuisoner',
            [
                'kuisoner' => $kuisoner,
                'action' => site_url('mahasiswa/kuisoner/jawab_kuisoner/'.$periode),
            ]
        );
        $this->footer();
    }

    public function list_kuisoner_lulus()
    {
        $kuisoner = $this->Master_model->master_result(['status' => '1','role'=>'lulusan','show'=>'yes'], 'kuisoner_pertanyaan');
        $this->header();
        $this->load->view(
            'dosen/kuisoner',
            [
                'kuisoner' => $kuisoner,
                'action' => site_url('mahasiswa/kuisoner/jawab_kuisoner_lulusan/'),
            ]
        );
        $this->footer();
    }

    public function jawab_kuisoner($periode)
    {
        // $periode = $this->Baak_model->master_get_set_input_nilai();
        foreach ($this->input->post('pg') as $key => $value) {

            $text = explode("-", $value);
            $data = array(
                'id_pertanyaan' => $text[0],
                'email' => $this->session->userdata('username'),
                'periode' => $periode,
                'jawaban' => $text[1],
            );
            $this->Master_model->insert_query('kuisoner_jawaban', $data);
        }
        $text = $this->alert->success('Data successfully Add');
        $this->session->set_flashdata('message', $text);
        redirect(site_url('mahasiswa/perkuliahan/transkrip_akademik'));
    }

    public function jawab_kuisoner_lulusan()
    {
        // $periode = $this->Baak_model->master_get_set_input_nilai();
        foreach ($this->input->post('pg') as $key => $value) {

            $text = explode("-", $value);
            $data = array(
                'id_pertanyaan' => $text[0],
                'email' => $this->session->userdata('username'),
                'periode' => 'lulus',
                'jawaban' => $text[1],
            );
            $this->Master_model->insert_query('kuisoner_jawaban', $data);
        }
        $text = $this->alert->success('Data successfully Add');
        $this->session->set_flashdata('message', $text);
        redirect(site_url('mahasiswa/perkuliahan/transkrip_akademik'));
    }
}
