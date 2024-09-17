<?php
class Skpi_model extends CI_Model
{ //baku
    function __construct()
    {
        parent::__construct();
    }

    function json_select_kategori($mk)
    {
        $this->db->select('id as kode,kategori as nama');
        $this->db->from('skpi_kategori');
        $this->db->where('status', 'aktif');
        $this->db->like('kategori', $mk);

        $query = $getData = $this->db->get();

        if ($getData->num_rows() > 0)

            return $query->result();

        else

            return null;
    }

    function json_select_prodi($mk)
    {
        $this->db->select('kode_program_studi as kode,nama_program_studi as nama');
        $this->db->from('dikti_prodi');
        $this->db->like('nama_program_studi', $mk);

        $query = $getData = $this->db->get();

        if ($getData->num_rows() > 0)

            return $query->result();

        else

            return null;
    }

    function json_list_mahasiswa($mk, $prodi)
    {
        $this->db->select('nim as kode,CONCAT(nama," - ",nim) as nama');
        $this->db->from('mahasiswa');
        $this->db->where('kode_prodi', $prodi);
        $this->db->like('nama', $mk);

        $query = $getData = $this->db->get();

        if ($getData->num_rows() > 0)

            return $query->result();

        else

            return null;
    }
}
