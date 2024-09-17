<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_json extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Feeder_lib');
        $this->load->model('Baak_model');
        $this->load->model('datatable/Skpi_dt', 'Skpi_dt');
    }

    public function json_list_kategori()
    {

        header('Content-Type: application/json');
        echo $this->Skpi_dt->json_list_kategori();
    }

    public function json_list_skpi()
    {
        header('Content-Type: application/json');
        echo $this->Skpi_dt->json_list_skpi();
    }

    public function json_list_validasi()
    {
        header('Content-Type: application/json');
        echo $this->Skpi_dt->json_list_validasi();
    }

    public function json_prodi()
    {
        header('Content-Type: application/json');
        echo $this->Baak_dt->json_prodi();
    }

    public function json_list_prodi_skpi()
    {
        header('Content-Type: application/json');
        echo $this->Skpi_dt->json_list_prodi_skpi();
    }
}
