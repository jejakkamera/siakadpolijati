<?php (!defined('BASEPATH')) and exit('No direct script access allowed');

class Master_lib
{
    private $_ci;
    public function __construct()
    {
        $this->_ci = &get_instance();
    }

    public function master_list($data_h)
    {
        // $where_=array(
        // 	'module'=>$menu_list
        // );
        // $data_h=$this->_ci->Master_model->ms_list($where_,'tabel');


        if ($data_h) {
            //'coloum'=>'[{"COLUMNS":[{ "data": "nim"},{ "data": "nim"},{ "data": "tahun"}, { "data": "tanggal"},{ "data": "uang_masuk"},{ "data": "cicilan"}, { "data": "action", "orderable":false,"bSearchable": false}]}]'
            //print_r($data_h[0]['code_nama']);
            $coloum = '[{"COLUMNS":[{ "data": "' . $data_h[0]['code_nama'] . '"},';
            $search_able = array();
            $i = 1;
            foreach ($data_h as $rows) {
                $coloum = $coloum . '{ "data": "' . $rows['code_nama'] . '"';
                if ($rows['orderable'] == 1) {
                    $coloum = $coloum . '},';
                    array_push($search_able, $i);
                } else {
                    $coloum = $coloum . ', "orderable":false,"bSearchable": false},';
                }
                $i++;
            }
            $coloum = $coloum . ']}]';
            $data = array(
                'header' => $data_h,
                'coloum' => $coloum,
                'search' => $search_able,
            );
            return $data;
        } else {
            return null;
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
}
