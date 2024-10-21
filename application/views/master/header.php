<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <title>Siakad Polijati</title>
    <link rel="icon" type="image/png" href="https://polijati.ac.id/wp-content/uploads/2024/08/Logo-Politeknik-Jatiluhur.png" />
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/themplate/assets/images/logo-official1.png"> -->
    <title>POLITEKNIK JATILUHUR</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/themplate/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/themplate/horizontal/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url(); ?>assets/themplate/horizontal/css/colors/blue.css" id="theme" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/themplate/assets/plugins/jquery/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <link href="<?php echo  base_url(); ?>assets/themplate/main/css/main.css" rel="stylesheet">
</head>

<body>
    <nav class="header" style="background-color: rgba(255, 255, 255, 1);">
        <div class="container">
            <div class="top">
                <div class="left">
                    <div class="hamburger-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <img src="https://polijati.ac.id/wp-content/uploads/2024/08/ploijati__1_-removebg-preview-300x87.png" width="120" class="light-logo" alt="homepage" /></span> </a>
                </div>
                
                <ul class="navbar-nav my-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url(); ?>assets/themplate/assets/images/user.png" width="50" alt="user" class="profile-pic" /></a>
                        <div class="dropdown-menu dropdown-menu-right animated flipInY">
                            <div class="dropdown-container">
                                <div class="top">
                                    <div class="left-drop">
                                       <img src="<?php echo base_url(); ?>assets/themplate/assets/images/user.png" alt="user">
                                    </div>
                                    <div class="right-drop">
                                        <h4> <?php echo $this->session->userdata('username'); ?> </h4>
                                        <p class="text-muted"></p><a href="<?php echo base_url('welcome/profile'); ?>" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                                    </div>
                                </div>
                                <ul class="bottom">
                                    <li><a href="<?php echo base_url(); ?>welcome/logout"><i class="fa fa-power-off"></i> Logout</a></li>
                                    <li><a href="<?php echo base_url(); ?>welcome/rdd"><i class="fa fa-book"></i> RDD</a></li>
                                    <li><a href="<?php echo base_url(); ?>welcome/arp"><i class="fa fa-book"></i> ARP</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
            <div class="bottom">
                <a href="<?php echo base_url(); ?>" aria-expanded="false"><i class="fa fa-circle"></i><span class="hide-menu">Dashboard</span></a>
                <?php if ($this->session->userdata('role') == 's_a') { ?>
                    <a href="<?php echo base_url(); ?>admin/super" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">User Login</span></a>
                    <a class="dropdown-child" href="">
                        <i class="fa fa-folder-open-o"></i> Importer Feeder
                    </a>
                    <div class="sidebar-nav">
                        <a href="<?php echo base_url(); ?>admin/feeder/connector">Connector</a>
                        <a href="<?php echo base_url(); ?>admin/feeder/set_periode">Set Periode</a>
                        <div class="dropdown-child-2">
                            <div class="menu">
                                <a href="#">Data PT</a>
                                <div class="box">
                                    <i class="bi bi-chevron-up chevron-1"></i>
                                </div>
                            </div>
                            <div class="sub-menu-2">
                                <a href="<?php echo base_url(); ?>admin/feeder/prodi">Program Studi</a>
                                <a href="<?php echo base_url(); ?>admin/feeder/mahasiswa">Mahasiswa</a>
                                <a href="<?php echo base_url(); ?>admin/feeder/matakuliah">Matakuliah</a>
                                <a href="<?php echo base_url(); ?>admin/feeder/kurikulum">Kurikulum</a>
                                <a href="<?php echo base_url(); ?>admin/feeder/matakuliah_kurikulum">Matakuiliah Kurikulum</a>
                                <a href="<?php echo base_url(); ?>admin/feeder/dosen">Dosen</a>
                                <a href="<?php echo base_url(); ?>admin/feeder/riwayatnilai">KRS & KHS</a>
                            </div>
                        </div>
                        <div class="dropdown-child-2">
                            <div class="menu">
                                <a href="#">Data Dasar</a>
                                <div class="box">
                                    <i class="bi bi-chevron-up chevron-1"></i>
                                </div>
                            </div>
                            <div class="sub-menu-2">
                                <a href="<?php echo base_url(); ?>admin/feeder/Agama">Agama</a>
                                <a href="<?php echo base_url(); ?>admin/feeder/jalurmasuk">Jalur Masuk</a>
                                <a href="<?php echo base_url(); ?>admin/feeder/jalurkeluar">Jalur Keluar</a>
                                <a href="<?php echo base_url(); ?>admin/feeder/jenispendaftaran">Jenis Pendaftaran</a>
                                <a href="<?php echo base_url(); ?>admin/feeder/jenistinggal">Jenis Tinggal</a>
                                <a href="<?php echo base_url(); ?>admin/feeder/jenjangpendidikan">jenjang pendidikan</a>
                                <a href="<?php echo base_url(); ?>admin/feeder/pekerjaan">pekerjaan</a>
                                <a href="<?php echo base_url(); ?>admin/feeder/pembiayaan">pembiayaan</a>
                                <a href="<?php echo base_url(); ?>admin/feeder/penghasilan">penghasilan</a>
                                <a href="<?php echo base_url(); ?>admin/feeder/wilayah">wilayah</a>
                                <a href="<?php echo base_url(); ?>admin/feeder/tahunajaran">tahunajaran</a>
                                <a href="<?php echo base_url(); ?>admin/feeder/statusmahasiswa">statusmahasiswa</a>
                                <a href="<?php echo base_url(); ?>admin/feeder/statusaktif">statusaktif</a>
                                <a href="<?php echo base_url(); ?>admin/feeder/semester">semester</a>
                                <a href="<?php echo base_url(); ?>admin/feeder/sdm">sdm</a>
                                <a href="<?php echo base_url(); ?>admin/feeder/transportasi">transportasi</a>
                            </div>
                        </div>
                        <div class="dropdown-child-2">
                            <div class="menu">
                                <a href="#">Perkuliahan</a>
                                <div class="box">
                                    <i class="bi bi-chevron-up chevron-1"></i>
                                </div>
                            </div>
                            <div class="sub-menu-2">
                                <a href="<?php echo base_url(); ?>admin/feeder/f_GetNilaiTransferPendidikanMahasiswa_list">Get Nilai Transfer</a>
                                <a href="<?php echo base_url(); ?>admin/feeder/push_kelas_perkuliahan">Push Kelas Perkuliahan</a>
                                <a href="<?php echo base_url(); ?>admin/feeder/push_kelas_perkuliahan">Push Pembimbing Akademik (PA)</a>
                            </div>
                        </div>
                        <div class="dropdown-child-2">
                            <div class="menu">
                                <a href="#">Mahasiswa</a>
                                <div class="box">
                                    <i class="bi bi-chevron-up chevron-1"></i>
                                </div>
                            </div>
                            <div class="sub-menu-2">
                                <a href="<?php echo base_url(); ?>admin/feeder/f_UpdateBiodataMahasiswa_list">Update Profile</a>
                            </div>
                        </div>
                    </div>
                    <a class="dropdown-child" href="">
                        <i class="fa fa-folder-open-o"></i> Baak
                    </a>
                    <div class="sidebar-nav">
                        <div class="dropdown-child-2">
                            <div class="menu">
                                <a href="#">Mahasiswa</a>
                                <div class="box">
                                    <i class="bi bi-chevron-up chevron-1"></i>
                                </div>
                            </div>
                            <div class="sub-menu-2">
                                <a href="<?php echo base_url(); ?>baak/mahasiswa">List mahasiswa</a>
                            </div>
                        </div>
                        <div class="dropdown-child-2">
                            <div class="menu">
                                <a href="#">Program Studi</a>
                                <div class="box">
                                    <i class="bi bi-chevron-up chevron-1"></i>
                                </div>
                            </div>
                            <div class="sub-menu-2">
                                <a href="<?php echo base_url(); ?>baak/prodi">List Prodi</a>
                            </div>
                        </div>
                        <div class="dropdown-child-2">
                            <div class="menu">
                                <a href="#">Matakuliah</a>
                                <div class="box">
                                    <i class="bi bi-chevron-up chevron-1"></i>
                                </div>
                            </div>
                            <div class="sub-menu-2">
                                <a href="<?php echo base_url(); ?>baak/matakuliah/kurikulum">Kurikulum</a>
                            </div>
                        </div>
                    </div>
                <?php } elseif ($this->session->userdata('role') == 'pegawai_baak') { ?>
                    <a href="" class="dropdown-child">
                        <i class="fa fa-folder-open-o"></i> Baak                        
                    </a>
                    <div class="sidebar-nav sidebar-nav-baak">
                        <a href="<?php echo base_url(); ?>baak/Informasi">Data Informasi</a>
                        <a href="<?php echo base_url(); ?>baak/baak/pengesahan">Pengesahan</a>
                        <div class="dropdown-child-2">
                            <div class="menu">
                                <a href="#">Mahasiswa</a>
                                <div class="box">
                                    <i class="bi bi-chevron-up chevron-1"></i>
                                </div>
                            </div>
                            <div class="sub-menu-2">
                                <a href="<?php echo base_url(); ?>baak/mahasiswa">List mahasiswa</a>
                                <a href="<?php echo base_url(); ?>baak/mahasiswa/kurikulum">Kurikulum mahasiswa</a>
                                <a href="<?php echo base_url(); ?>baak/mahasiswa/dosen_wali">Dosen Wali Mahasiswa</a>
                                <a href="<?php echo base_url(); ?>baak/mahasiswa/kelas">Kelas Mahasiswa</a>
                            </div>
                        </div>
                        <div class="dropdown-child-2">
                            <div class="menu">
                                <a href="#">Program Studi</a>
                                <div class="box">
                                    <i class="bi bi-chevron-up chevron-1"></i>
                                </div>
                            </div>
                            <div class="sub-menu-2">
                                <a href="<?php echo base_url(); ?>baak/prodi">List Prodi</a>
                            </div>
                        </div>
                        <div class="dropdown-child-2">
                            <div class="menu">
                                <a href="#">Matakuliah</a>
                                <div class="box">
                                    <i class="bi bi-chevron-up chevron-1"></i>
                                </div>
                            </div>
                            <div class="sub-menu-2">
                                <a href="<?php echo base_url(); ?>baak/matakuliah/kurikulum">Kurikulum</a>
                            </div>
                        </div>
                        <div class="dropdown-child-2">
                            <div class="menu">
                                <a href="#">Dosen</a>
                                <div class="box">
                                    <i class="bi bi-chevron-up chevron-1"></i>
                                </div>
                            </div>
                            <div class="sub-menu-2">
                                <a href="<?php echo base_url(); ?>baak/dosen/">List Dosen</a>
                            </div>
                        </div>
                        <div class="dropdown-child-2">
                            <div class="menu">
                                <a href="#">Kuesioner</a>
                                <div class="box">
                                    <i class="bi bi-chevron-up chevron-1"></i>
                                </div>
                            </div>
                            <div class="sub-menu-2">
                                <a href="<?php echo base_url(); ?>baak/kuisoner/list_kuisoner_dosen">Kuesioner Dosen</a>
                                <a href="<?php echo base_url(); ?>baak/kuisoner/list_kuisoner_mhs">Kuesioner Mahasiswa</a>
                                <a href="<?php echo base_url(); ?>baak/kuisoner/list_kuisoner_lulusan">Kuesioner Lulusan</a>
                            </div>
                        </div>
                        <div class="dropdown-child-2">
                            <div class="menu">
                                <a href="#">FRS</a>
                                <div class="box">
                                    <i class="bi bi-chevron-up chevron-1"></i>
                                </div>
                            </div>
                            <div class="sub-menu-2">
                                <a href="<?php echo base_url(); ?>baak/frs/list_ta/">List Tahun Akademik</a>
                                <a href="<?php echo base_url(); ?>baak/frs/set_frs/">Set Pengisian FRS</a>
                                <a href="<?php echo base_url(); ?>baak/frs/set_input_nilai/">Set Input Nilai</a>
                                <a href="<?php echo base_url(); ?>baak/frs/set_kurikulum/">Set MK FRS</a>
                            </div>
                        </div>
                        <div class="dropdown-child-2">
                            <div class="menu">
                                <a href="#">Perkuliahan</a>
                                <div class="box">
                                    <i class="bi bi-chevron-up chevron-1"></i>
                                </div>
                            </div>
                            <div class="sub-menu-2">
                                <a href="<?php echo base_url(); ?>baak/baak/waktu_kuliah">Waktu Kuliah</a>
                                <a href="<?php echo base_url(); ?>baak/baak/list_skala_nilai">Skala nilai</a>
                                <a href="<?php echo base_url(); ?>baak/baak/perkuliahan_rekap">Create Rekap</a>
                                <a href="<?php echo base_url(); ?>baak/baak/perkuliahan_periode">Periode</a>
                            </div>
                        </div>
                        <div class="dropdown-child-2">
                            <div class="menu">
                                <a href="#">SKPI & Dokumen</a>
                                <div class="box">
                                    <i class="bi bi-chevron-up chevron-1"></i>
                                </div>
                            </div>
                            <div class="sub-menu-2">
                                <a href="<?php echo base_url(); ?>baak/skpi/kategori/list_skpi">list Draft SKPI</a>
                                <a href="<?php echo base_url(); ?>baak/skpi/kategori/list_prodi_skpi">list Prodi SKPI </a>
                                <a href="<?php echo base_url(); ?>baak/skpi/validasi">validasi SKPI</a>
                                <a href="<?php echo base_url(); ?>baak/skpi/a_document">Academic Dokumen</a>
                            </div>
                        </div>
                        <div class="dropdown-child-2">
                            <div class="menu">
                                <a href="#">Regulation</a>
                                <div class="box">
                                    <i class="bi bi-chevron-up chevron-1"></i>
                                </div>
                            </div>
                            <div class="sub-menu-2">
                                <a href="<?php echo base_url(); ?>baak/rdd/type">Type</a>
                                <a href="<?php echo base_url(); ?>baak/rdd/list">List</a>
                            </div>
                        </div>
                        <a href="<?php echo base_url(); ?>baak/Arp/list_arp">ARP</a>
                    </div>
                    <a href="" class="dropdown-child">
                        <i class="fa fa-folder-open-o"></i> Pembelajaran
                    </a>
                    <div class="sidebar-nav sidebar-nav-baak-2">
                        <a href="<?php echo base_url(); ?>baak/pembelajaran/set_periode">Set Periode</a>
                        <a href="<?php echo base_url(); ?>baak/pembelajaran/suspend_mahasiswa">Suspend Mahasiswa</a>
                        <a href="<?php echo base_url(); ?>baak/pembelajaran/presensi_dosen_list_prodi">Presensi Dosen</a>
                        <a href="<?php echo base_url(); ?>baak/pembelajaran/presensi_mahasiswa_list_prodi">Presensi Mahasiswa</a>
                        <a href="<?php echo base_url(); ?>baak/pembelajaran/rekap_presensi_dosen">Rekap Presensi Dosen</a>
                        <a href="<?php echo base_url(); ?>baak/pembelajaran/cetak_kartu_ujian">Cetak Kartu Ujian</a>
                        <div class="dropdown-child-2">
                            <div class="menu">
                                <a href="#">FRS</a>
                                <div class="box">
                                    <i class="bi bi-chevron-up chevron-1"></i>
                                </div>
                            </div>
                            <div class="sub-menu-2">
                                <a href="<?php echo base_url(); ?>baak/frs/list_pengisian_frs_mhs/">Pengisian FRS (mahasiswa)</a>
                                <a href="<?php echo base_url(); ?>baak/frs/list_pengisian_frs_mk/">Pengisian FRS (mk)</a>
                                <a href="<?php echo base_url(); ?>baak/frs/list_pengisian_frs_prodi/">Pengisian FRS (Prodi)</a>
                            </div>
                        </div>
                        <div class="dropdown-child-2">
                            <div class="menu">
                                <a href="#">Nilai</a>
                                <div class="box">
                                    <i class="bi bi-chevron-up chevron-1"></i>
                                </div>
                            </div>
                            <div class="sub-menu-2">
                                <a href="<?php echo base_url(); ?>baak/frs/set_kurikulum/report">Matakuliah</a>
                                <a href="<?php echo base_url(); ?>baak/mahasiswa">Mahasiswa</a>
                            </div>
                        </div>
                        <a href="<?php echo base_url(); ?>baak/pembelajaran/rekap_aktivitas_mahasiswa">Rekap Aktivitas Mahasiswa</a>
                        <a href="<?php echo base_url(); ?>baak/pembelajaran/rekap_administrasi_mahasiswa">Rekap administrasi Mahasiswa</a>
                    </div>
                    <a href="" class="dropdown-child">
                        <i class="fa fa-folder-open-o"></i> Pemagangan
                    </a>
                    <div class="sidebar-nav sidebar-nav-baak-3">
                        <a href="<?php echo base_url(); ?>baak/magang/list_periode">Periode</a>
                        <a href="<?php echo base_url(); ?>baak/magang/list_permohonan">Permohonan</a>
                        <a href="<?php echo base_url(); ?>baak/job">Job</a>
                        <a href="<?php echo base_url(); ?>baak/magang/mbkm">MBKM</a>
                    </div>
                    <a href="" class="dropdown-child">
                        <i class="fa fa-folder-open-o"></i> Tugas Akhir                        
                    </a>
                    <div class="sidebar-nav sidebar-nav-baak-4">
                        <a href="<?php echo base_url(); ?>baak/tugas_akhir/ta_s1/list_periode">List Periode</a>
                    </div>
                    <a href="" class="dropdown-child">
                        <i class="fa fa-folder-open-o"></i> Wisuda                        
                    </a>
                    <div class="sidebar-nav sidebar-nav-baak-5">
                        <a href="<?php echo base_url(); ?>baak/wisuda/list_periode">List Periode</a>
                    </div>
                    <a href="" class="dropdown-child">
                        <i class="fa fa-folder-open-o"></i> Transkip                        
                    </a>
                    <div class="sidebar-nav sidebar-nav-baak-6">
                        <a href="<?php echo base_url(); ?>baak/transkript/list">Cetak Transkrip</a>
                    </div>
                <?php } elseif ($this->session->userdata('role') == 'prodi') { ?>
                    <a href="" class="dropdown-child">
                        <i class="fa fa-folder-open-o"></i> Prodi                        
                    </a>
                    <div class="sidebar-nav sidebar-nav-prodi">
                        <div class="dropdown-child-2">
                            <div class="menu">
                                <a href="#">Mahasiswa</a>
                                <div class="box">
                                    <i class="bi bi-chevron-up chevron-1"></i>
                                </div>
                            </div>
                            <div class="sub-menu-2">
                                <a href="<?php echo base_url(); ?>baak/mahasiswa">List mahasiswa</a>
                                <a href="<?php echo base_url(); ?>baak/mahasiswa/kurikulum">Kurikulum mahasiswa</a>
                                <a href="<?php echo base_url(); ?>baak/mahasiswa/dosen_wali">Dosen Wali Mahasiswa</a>
                                <a href="<?php echo base_url(); ?>baak/mahasiswa/kelas">Kelas Mahasiswa</a>
                            </div>
                        </div>
                        <div class="dropdown-child-2">
                            <div class="menu">
                                <a href="#">Program Studi</a>
                                <div class="box">
                                    <i class="bi bi-chevron-up chevron-1"></i>
                                </div>
                            </div>
                            <div class="sub-menu-2">
                                <a href="<?php echo base_url(); ?>baak/prodi">List Prodi</a>
                            </div>
                        </div>
                        <div class="dropdown-child-2">
                            <div class="menu">
                                <a href="#">Matakuliah</a>
                                <div class="box">
                                    <i class="bi bi-chevron-up chevron-1"></i>
                                </div>
                            </div>
                            <div class="sub-menu-2">
                                <a href="<?php echo base_url(); ?>baak/matakuliah/kurikulum">Kurikulum</a>
                            </div>
                        </div>
                        <div class="dropdown-child-2">
                            <div class="menu">
                                <a href="#">Dosen</a>
                                <div class="box">
                                    <i class="bi bi-chevron-up chevron-1"></i>
                                </div>
                            </div>
                            <div class="sub-menu-2">
                                <a href="<?php echo base_url(); ?>baak/dosen/">List Dosen</a>
                            </div>
                        </div>
                        <div class="dropdown-child-2">
                            <div class="menu">
                                <a href="#">FRS Report</a>
                                <div class="box">
                                    <i class="bi bi-chevron-up chevron-1"></i>
                                </div>
                            </div>
                            <div class="sub-menu-2">
                                <a href="<?php echo base_url(); ?>prodi/frs/list_pengisian_frs_mhs/">Pengisian FRS (mahasiswa)</a>
                                <a href="<?php echo base_url(); ?>prodi/frs/list_pengisian_frs_mk/">Pengisian FRS (mk)</a>
                                <a href="<?php echo base_url(); ?>prodi/frs/list_pengisian_frs_prodi/">Pengisian FRS (Prodi)</a>
                            </div>
                        </div>
                    </div>
                    <a href="" class="dropdown-child">
                        <i class='fa fa-pencil-square-o'></i> Perkuliahan                        
                    </a>
                    <div class="sidebar-nav sidebar-nav-prodi-2">
                        <a href="<?php echo base_url(); ?>prodi/perkuliahan/frs">FRS</a>
                        <a href="<?php echo base_url(); ?>baak/pembelajaran/set_periode">Set Periode</a>
                        <a href="<?php echo base_url(); ?>baak/pembelajaran/presensi_dosen_list_prodi">Presensi Dosen</a>
                        <a href="<?php echo base_url(); ?>baak/pembelajaran/presensi_mahasiswa_list_prodi">Presensi Mahasiswa</a>
                        <a href="<?php echo base_url(); ?>baak/pembelajaran/rekap_presensi_dosen">Rekap Presensi Dosen</a>
                        <a href="<?php echo base_url(); ?>baak/frs/jadwal_dosen_all_aktif">Jadwal</a>
                        <div class="dropdown-child-2">
                            <div class="menu">
                                <a href="#">FRS</a>
                                <div class="box">
                                    <i class="bi bi-chevron-up chevron-1"></i>
                                </div>
                            </div>
                            <div class="sub-menu-2">
                                <a href="<?php echo base_url(); ?>baak/frs/list_pengisian_frs_mhs/">Pengisian FRS (mahasiswa)</a>
                                <a href="<?php echo base_url(); ?>baak/frs/list_pengisian_frs_mk/">Pengisian FRS (mk)</a>
                                <a href="<?php echo base_url(); ?>baak/frs/list_pengisian_frs_prodi/">Pengisian FRS (Prodi)</a>
                                <a href="<?php echo base_url(); ?>baak/frs/set_kurikulum/report">Set MK FRS</a>
                            </div>
                        </div>
                        <div class="dropdown-child-2">
                            <div class="menu">
                                <a href="#">Nilai</a>
                                <div class="box">
                                    <i class="bi bi-chevron-up chevron-1"></i>
                                </div>
                            </div>
                            <div class="sub-menu-2">
                                <a href="<?php echo base_url(); ?>baak/frs/set_kurikulum/">Matakuliah</a>
                                <a href="<?php echo base_url(); ?>baak/mahasiswa">Mahasiswa</a>
                            </div>
                        </div>
                        <a href="<?php echo base_url(); ?>baak/pembelajaran/rekap_aktivitas_mahasiswa">Rekap Aktivitas Mahasiswa</a>
                        <a href="<?php echo base_url(); ?>baak/pembelajaran/rekap_administrasi_mahasiswa">Rekap administrasi Mahasiswa</a>
                        <a href="<?php echo base_url(); ?>baak/skpi/validasi">SKPI</a>
                    </div>
                <?php } elseif ($this->session->userdata('role') == 'dosen') { ?>
                    <a href="<?php echo base_url('dosen/profile/dosen_update'); ?>" aria-expanded="false"><i class="fa fa-circle"></i><span class="hide-menu">Profile</span></a>
                    <a class="dropdown-child" href="">
                        <i class='fa fa-users'></i> Mahasiswa
                    </a>
                    <div class="sidebar-nav sidebar-nav-dosen">
                        <a href="<?php echo base_url(); ?>dosen/mahasiswa">Mahasiswa Wali</a>
                        <a href="<?php echo base_url(); ?>dosen/mahasiswa/frs">FRS</a>
                    </div>
                    <a class="dropdown-child" href="">
                        <i class='fa fa-pencil-square-o'></i> Perkuliahan
                    </a>
                    <div class="sidebar-nav sidebar-nav-dosen-2">
                        <a href="<?php echo base_url(); ?>dosen/perkuliahan/perangkat_perkuliahan_periode">Perangkat Perkuliahan</a>
                        <a href="<?php echo base_url(); ?>dosen/perkuliahan/kehadiran_dosen_jadwal">Kehadiran Dosen</a>
                        <a href="<?php echo base_url(); ?>dosen/perkuliahan/presensi_mahasiswa">Kehadiran mahasiswa</a>
                        <a href="<?php echo base_url(); ?>dosen/perkuliahan/input_nilai">Input Nilai</a>
                        <a href="<?php echo base_url(); ?>dosen/perkuliahan/jadwal">jadwal</a>
                    </div>
                    <a class="dropdown-child" href="">
                        <i class='fa fa-pencil-square-o'></i> Pemagangan
                    </a>
                    <div class="sidebar-nav sidebar-nav-dosen-3">
                        <a href="<?php echo base_url(); ?>dosen/magang/list_mahasiswa">Mahasiswa bimbingan </a>
                        <a href="<?php echo base_url(); ?>dosen/magang/list_sidang">Sidang</a>
                    </div>
                    <a class="dropdown-child" href="">
                        <i class='fa fa-bookmark-o'></i>  TA & Skripsi
                    </a>
                    <div class="sidebar-nav sidebar-nav-dosen-4">
                        <a href="<?php echo base_url(); ?>dosen/ta_s1/list_mahasiswa">Bimbingan</a>
                        <a href="<?php echo base_url(); ?>dosen/ta_s1/list_sidang">Sidang</a>
                    </div>
                <?php } elseif ($this->session->userdata('role') == 'mhs') { ?>
                    <a href="" class="dropdown-child">
                        <i class="fa fa-file-text"></i>FRS
                    </a>
                    <div class="sidebar-nav sidebar-nav-mhs">
                        <a href="<?php echo base_url(); ?>mahasiswa/frs/isi_select/">Pengisian</a>
                        <a href="<?php echo base_url(); ?>mahasiswa/frs/lihat_select/">Cetak</a>
                        <a href="<?php echo base_url(); ?>mahasiswa/cuti/">Pengajuan Cuti</a>
                    </div>
                    <a href="" class="dropdown-child">
                        <i class="fa fa-pencil-square-o"></i>Perkuliahan
                    </a>
                    <div class="sidebar-nav sidebar-nav-mhs-2">
                        
                        <a href="<?php echo base_url(); ?>mahasiswa/perkuliahan/akademik">Akademik</a>
                    
                        <a href="<?php echo base_url(); ?>mahasiswa/a_document">Dokumen Akademik</a>
                    <!-- <a href="<?php echo base_url(); ?>mahasiswa/perkuliahan/riwayat_perkuliahan">Riwayat Perkuliahan</a> -->
                    
                        <a href="<?php echo base_url(); ?>baak/frs/list_ta/">E-learning</a>
                    
                        <a href="<?php echo base_url(); ?>mahasiswa/perkuliahan/kartu_kehadiran/">Kehadiran</a>
                    
                        <a href="<?php echo base_url(); ?>mahasiswa/perkuliahan/kartu_ujian/">Kartu Ujian</a>
                    
                        <a href="<?php echo base_url(); ?>mahasiswa/skpi/">SKPI</a>
                    
                        <a href="<?php echo base_url(); ?>mahasiswa/perkuliahan/perwalian/">Perwalian</a>
                    
                        <a href="<?php echo base_url(); ?>mahasiswa/perkuliahan/jadwal/">Jadwal Perkuliahan</a>
                    
                        <a href="<?php echo base_url(); ?>mahasiswa/perkuliahan/mahasiswa_aktif">Surat Mahasiswa Aktif</a>
                    </div>
                    <a href="" class="dropdown-child">
                        <i class="fa fa-clipboard"></i>Hasil Studi
                    </a>
                    <div class="sidebar-nav sidebar-nav-mhs-3">
                        <a href="<?php echo base_url(); ?>mahasiswa/perkuliahan/transkrip_akademik">Hasil Studi Akademik</a>
                        <a href="<?php echo base_url(); ?>mahasiswa/perkuliahan/hasil_studi">Hasil Studi Persemester</a>
                        <a href="<?php echo base_url(); ?>mahasiswa/perkuliahan/surat_kelulusan">Surat Kelulusan</a>
                    </div>
                    <a href="" class="dropdown-child">
                        <i class="fa fa-dollar"></i>Adminstrasi
                    </a>
                    <div class="sidebar-nav sidebar-nav-mhs-4">
                        <a href="<?php echo base_url(); ?>mahasiswa/administrasi/ukt/">UKT</a>
                        <a href="<?php echo base_url(); ?>mahasiswa/administrasi/additional/">Additional</a>
                        <a href="<?php echo base_url(); ?>mahasiswa/administrasi/penaguhan/">Penaguhan</a> 
                    </div>
                    <a class="dropdown-child" href="">
                        <i class="fa fa-suitcase"></i> Pemagangan
                    </a>
                    <div class="sidebar-nav sidebar-nav-mhs-5">
                        <a href="<?php echo base_url(); ?>mahasiswa/magang/">Pendaftaran</a>
                        <a href="<?php echo base_url(); ?>mahasiswa/magang/history">History</a>
                        <a href="<?php echo base_url(); ?>mahasiswa/mbkm">MBKM</a>
                        <a href="<?php echo base_url(); ?>mahasiswa/magang/job">Job Vacancy</a>
                    </div>
                    <a href="" class="dropdown-child">
                        <i class='fa fa-bookmark-o'></i> TA & Skripsi
                    </a>
                    <div class="sidebar-nav sidebar-nav-mhs-6">
                        <a href="<?php echo base_url(); ?>mahasiswa/ta_s1/">Pendaftaran</a>
                        <!-- <li>
                            <a href="<?php echo base_url(); ?>mahasiswa/ta_d3/">Pendaftaran (D3)</a>
                        </li> -->
                    </div>
                    <a href="" class="dropdown-child">
                        <i class='fa fa-graduation-cap'></i> Wisuda
                    </a>
                    <div class="sidebar-nav sidebar-nav-mhs-7">
                        <a href="<?php echo base_url(); ?>mahasiswa/wisuda/list_periode">Daftar</a>
                        <a href="<?php echo base_url(); ?>mahasiswa/wisuda/form_ijazah">Form Pengambilan Ijazah</a>
                    </div>
                <?php } ?>

            </div>
        </div>
    </nav>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div> -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <!-- <div id="main-wrapper"> -->
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->

        <!-- Buat backup header profile disini -->
        
        <!-- Akhir header disini -->

        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->


        <!-- Buat backup sidebar disini -->
        
        <!-- Akhir disini -->

        <div class="menu-vertikal">
            <div class="container">
                <a href="<?php echo base_url(); ?>" aria-expanded="false"><i class="fa fa-circle"></i><span class="hide-menu">Dashboard</span></a>
                <?php if ($this->session->userdata('role') == 's_a') { ?>
                    <a href="<?php echo base_url(); ?>admin/super" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">User Login</span></a>
                    <div class="dropdown-child-vertikal">
                        <div href="" class="dropdown-menu-vertikal">
                            <div class="left">
                                <i class="fa fa-folder-open-o"></i>
                                Importer Feeder
                            </div>
                            <div class="right">
                                <i class="bi bi-chevron-up chevron-vertikal"></i>
                            </div>
                        </div>
                        <div class="submenu-dropdown-vertikal">
                            <a href="<?php echo base_url(); ?>admin/feeder/connector">Connector</a>
                            <a href="<?php echo base_url(); ?>admin/feeder/set_periode">Set Periode</a>
                            <div class="dropdown-child-vertikal-2">
                                <div class="dropdown-menu-vertikal-2">
                                    <a href="#">Data PT</a>
                                    <div class="box"><i class="bi bi-chevron-up chevron-vertikal-2"></i></div>
                                </div>
                                <div class="submenu-dropdown-vertikal-2">
                                    <a href="<?php echo base_url(); ?>admin/feeder/prodi">Program Studi</a>
                                <a href="<?php echo base_url(); ?>admin/feeder/mahasiswa">Mahasiswa</a>
                                <a href="<?php echo base_url(); ?>admin/feeder/matakuliah">Matakuliah</a>
                                <a href="<?php echo base_url(); ?>admin/feeder/kurikulum">Kurikulum</a>
                                <a href="<?php echo base_url(); ?>admin/feeder/matakuliah_kurikulum">Matakuiliah Kurikulum</a>
                                <a href="<?php echo base_url(); ?>admin/feeder/dosen">Dosen</a>
                                <a href="<?php echo base_url(); ?>admin/feeder/riwayatnilai">KRS & KHS</a>
                                </div>
                            </div>
                            <div class="dropdown-child-vertikal-2">
                                <div class="dropdown-menu-vertikal-2">
                                    <a href="#">Data Dasar</a>
                                    <div class="box"><i class="bi bi-chevron-up chevron-vertikal-2"></i></div>
                                </div>
                                <div class="submenu-dropdown-vertikal-2">
                                    <a href="<?php echo base_url(); ?>admin/feeder/Agama">Agama</a>
                                    <a href="<?php echo base_url(); ?>admin/feeder/jalurmasuk">Jalur Masuk</a>
                                    <a href="<?php echo base_url(); ?>admin/feeder/jalurkeluar">Jalur Keluar</a>
                                    <a href="<?php echo base_url(); ?>admin/feeder/jenispendaftaran">Jenis Pendaftaran</a>
                                    <a href="<?php echo base_url(); ?>admin/feeder/jenistinggal">Jenis Tinggal</a>
                                    <a href="<?php echo base_url(); ?>admin/feeder/jenjangpendidikan">jenjang pendidikan</a>
                                    <a href="<?php echo base_url(); ?>admin/feeder/pekerjaan">pekerjaan</a>
                                    <a href="<?php echo base_url(); ?>admin/feeder/pembiayaan">pembiayaan</a>
                                    <a href="<?php echo base_url(); ?>admin/feeder/penghasilan">penghasilan</a>
                                    <a href="<?php echo base_url(); ?>admin/feeder/wilayah">wilayah</a>
                                    <a href="<?php echo base_url(); ?>admin/feeder/tahunajaran">tahunajaran</a>
                                    <a href="<?php echo base_url(); ?>admin/feeder/statusmahasiswa">statusmahasiswa</a>
                                    <a href="<?php echo base_url(); ?>admin/feeder/statusaktif">statusaktif</a>
                                    <a href="<?php echo base_url(); ?>admin/feeder/semester">semester</a>
                                    <a href="<?php echo base_url(); ?>admin/feeder/sdm">sdm</a>
                                    <a href="<?php echo base_url(); ?>admin/feeder/transportasi">transportasi</a>
                                </div>
                            </div>
                            <div class="dropdown-child-vertikal-2">
                                <div class="dropdown-menu-vertikal-2">
                                    <a href="#">Perkuliahan</a>
                                    <div class="box"><i class="bi bi-chevron-up chevron-vertikal-2"></i></div>
                                </div>
                                <div class="submenu-dropdown-vertikal-2">
                                    <a href="<?php echo base_url(); ?>admin/feeder/f_GetNilaiTransferPendidikanMahasiswa_list">Get Nilai Transfer</a>
                                <a href="<?php echo base_url(); ?>admin/feeder/push_kelas_perkuliahan">Push Kelas Perkuliahan</a>
                                <a href="<?php echo base_url(); ?>admin/feeder/push_kelas_perkuliahan">Push Pembimbing Akademik (PA)</a>
                                </div>
                            </div>
                            <div class="dropdown-child-vertikal-2">
                                <div class="dropdown-menu-vertikal-2">
                                    <a href="#">Mahasiswa</a>
                                    <div class="box"><i class="bi bi-chevron-up chevron-vertikal-2"></i></div>
                                </div>
                                <div class="submenu-dropdown-vertikal-2">
                                    <a href="<?php echo base_url(); ?>admin/feeder/f_UpdateBiodataMahasiswa_list">Update Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown-child-vertikal">
                        <div href="" class="dropdown-menu-vertikal">
                            <div class="left">
                                <i class="fa fa-folder-open-o"></i>
                                Baak
                            </div>
                            <div class="right">
                                <i class="bi bi-chevron-up chevron-vertikal"></i>
                            </div>
                        </div>
                        <div class="submenu-dropdown-vertikal">
                            <div class="dropdown-child-vertikal-2">
                                <div class="dropdown-menu-vertikal-2">
                                    <a href="#">Mahasiswa</a>
                                    <div class="box"><i class="bi bi-chevron-up chevron-vertikal-2"></i></div>
                                </div>
                                <div class="submenu-dropdown-vertikal-2">
                                    <a href="<?php echo base_url(); ?>baak/mahasiswa">List mahasiswa</a>
                                </div>
                            </div>
                            <div class="dropdown-child-vertikal-2">
                                <div class="dropdown-menu-vertikal-2">
                                    <a href="#">Program Studi</a>
                                    <div class="box"><i class="bi bi-chevron-up chevron-vertikal-2"></i></div>
                                </div>
                                <div class="submenu-dropdown-vertikal-2">
                                    <a href="<?php echo base_url(); ?>baak/prodi">List Prodi</a>
                                </div>
                            </div>
                            <div class="dropdown-child-vertikal-2">
                                <div class="dropdown-menu-vertikal-2">
                                    <a href="#">Matakuliah</a>
                                    <div class="box"><i class="bi bi-chevron-up chevron-vertikal-2"></i></div>
                                </div>
                                <div class="submenu-dropdown-vertikal-2">
                                    <a href="<?php echo base_url(); ?>baak/matakuliah/kurikulum">Kurikulum</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } elseif ($this->session->userdata('role') == 'pegawai_baak') { ?>
                    <div class="dropdown-child-vertikal">
                        <div href="" class="dropdown-menu-vertikal">
                            <div class="left">
                                <i class="fa fa-folder-open-o"></i>
                                Baak
                            </div>
                            <div class="right">
                                <i class="bi bi-chevron-up chevron-vertikal"></i>
                            </div>
                        </div>
                        <div class="submenu-dropdown-vertikal">
                            <a href="<?php echo base_url(); ?>baak/Informasi">Data Informasi</a>
                            <a href="<?php echo base_url(); ?>baak/baak/pengesahan">Pengesahan</a>
                            <div class="dropdown-child-vertikal-2">
                                <div class="dropdown-menu-vertikal-2">
                                    <a href="#">Mahasiswa</a>
                                    <div class="box"><i class="bi bi-chevron-up chevron-vertikal-2"></i></div>
                                </div>
                                <div class="submenu-dropdown-vertikal-2">
                                    <a href="<?php echo base_url(); ?>baak/mahasiswa">List mahasiswa</a>
                                    <a href="<?php echo base_url(); ?>baak/mahasiswa/kurikulum">Kurikulum mahasiswa</a>
                                    <a href="<?php echo base_url(); ?>baak/mahasiswa/dosen_wali">Dosen Wali Mahasiswa</a>
                                    <a href="<?php echo base_url(); ?>baak/mahasiswa/kelas">Kelas Mahasiswa</a>
                                </div>
                            </div>
                            <div class="dropdown-child-vertikal-2">
                                <div class="dropdown-menu-vertikal-2">
                                    <a href="#">Program Studi</a>
                                    <div class="box"><i class="bi bi-chevron-up chevron-vertikal-2"></i></div>
                                </div>
                                <div class="submenu-dropdown-vertikal-2">
                                    <a href="<?php echo base_url(); ?>baak/prodi">List Prodi</a>
                                </div>
                            </div>
                            <div class="dropdown-child-vertikal-2">
                                <div class="dropdown-menu-vertikal-2">
                                    <a href="#">Matakuliah</a>
                                    <div class="box"><i class="bi bi-chevron-up chevron-vertikal-2"></i></div>
                                </div>
                                <div class="submenu-dropdown-vertikal-2">
                                    <a href="<?php echo base_url(); ?>baak/matakuliah/kurikulum">Kurikulum</a>
                                </div>
                            </div>
                            <div class="dropdown-child-vertikal-2">
                                <div class="dropdown-menu-vertikal-2">
                                    <a href="#">Dosen</a>
                                    <div class="box"><i class="bi bi-chevron-up chevron-vertikal-2"></i></div>
                                </div>
                                <div class="submenu-dropdown-vertikal-2">
                                    <a href="<?php echo base_url(); ?>baak/dosen/">List Dosen</a>
                                </div>
                            </div>
                            <div class="dropdown-child-vertikal-2">
                                <div class="dropdown-menu-vertikal-2">
                                    <a href="#">Kuesioner</a>
                                    <div class="box"><i class="bi bi-chevron-up chevron-vertikal-2"></i></div>
                                </div>
                                <div class="submenu-dropdown-vertikal-2">
                                    <a href="<?php echo base_url(); ?>baak/kuisoner/list_kuisoner_dosen">Kuesioner Dosen</a>
                                    <a href="<?php echo base_url(); ?>baak/kuisoner/list_kuisoner_mhs">Kuesioner Mahasiswa</a>
                                    <a href="<?php echo base_url(); ?>baak/kuisoner/list_kuisoner_lulusan">Kuesioner Lulusan</a>
                                </div>
                            </div>
                            <div class="dropdown-child-vertikal-2">
                                <div class="dropdown-menu-vertikal-2">
                                    <a href="#">FRS</a>
                                    <div class="box"><i class="bi bi-chevron-up chevron-vertikal-2"></i></div>
                                </div>
                                <div class="submenu-dropdown-vertikal-2">
                                    <a href="<?php echo base_url(); ?>baak/frs/list_ta/">List Tahun Akademik</a>
                                    <a href="<?php echo base_url(); ?>baak/frs/set_frs/">Set Pengisian FRS</a>
                                    <a href="<?php echo base_url(); ?>baak/frs/set_input_nilai/">Set Input Nilai</a>
                                    <a href="<?php echo base_url(); ?>baak/frs/set_kurikulum/">Set MK FRS</a>
                                </div>
                            </div>
                            <div class="dropdown-child-vertikal-2">
                                <div class="dropdown-menu-vertikal-2">
                                    <a href="#">Perkuliahan</a>
                                    <div class="box"><i class="bi bi-chevron-up chevron-vertikal-2"></i></div>
                                </div>
                                <div class="submenu-dropdown-vertikal-2">
                                    <a href="<?php echo base_url(); ?>baak/baak/waktu_kuliah">Waktu Kuliah</a>
                                    <a href="<?php echo base_url(); ?>baak/baak/list_skala_nilai">Skala nilai</a>
                                    <a href="<?php echo base_url(); ?>baak/baak/perkuliahan_rekap">Create Rekap</a>
                                    <a href="<?php echo base_url(); ?>baak/baak/perkuliahan_periode">Periode</a>
                                </div>
                            </div>
                            <div class="dropdown-child-vertikal-2">
                                <div class="dropdown-menu-vertikal-2">
                                    <a href="#">SKPI & Dokumen</a>
                                    <div class="box"><i class="bi bi-chevron-up chevron-vertikal-2"></i></div>
                                </div>
                                <div class="submenu-dropdown-vertikal-2">
                                    <a href="<?php echo base_url(); ?>baak/skpi/kategori/list_skpi">list Draft SKPI</a>
                                    <a href="<?php echo base_url(); ?>baak/skpi/kategori/list_prodi_skpi">list Prodi SKPI </a>
                                    <a href="<?php echo base_url(); ?>baak/skpi/validasi">validasi SKPI</a>
                                    <a href="<?php echo base_url(); ?>baak/skpi/a_document">Academic Dokumen</a>
                                </div>
                            </div>
                            <div class="dropdown-child-vertikal-2">
                                <div class="dropdown-menu-vertikal-2">
                                    <a href="#">Regulation</a>
                                    <div class="box"><i class="bi bi-chevron-up chevron-vertikal-2"></i></div>
                                </div>
                                <div class="submenu-dropdown-vertikal-2">
                                    <a href="<?php echo base_url(); ?>baak/rdd/type">Type</a>
                                    <a href="<?php echo base_url(); ?>baak/rdd/list">List</a>
                                </div>
                            </div>
                            <a href="<?php echo base_url(); ?>baak/Arp/list_arp">ARP</a>
                        </div>
                    </div>
                    <div class="dropdown-child-vertikal">
                        <div href="" class="dropdown-menu-vertikal">
                            <div class="left">
                                <i class="fa fa-folder-open-o"></i>
                                Pembelajaran
                            </div>
                            <div class="right">
                                <i class="bi bi-chevron-up chevron-vertikal"></i>
                            </div>
                        </div>
                        <div class="submenu-dropdown-vertikal">
                            <a href="<?php echo base_url(); ?>baak/pembelajaran/set_periode">Set Periode</a>
                            <a href="<?php echo base_url(); ?>baak/pembelajaran/suspend_mahasiswa">Suspend Mahasiswa</a>
                            <a href="<?php echo base_url(); ?>baak/pembelajaran/presensi_dosen_list_prodi">Presensi Dosen</a>
                            <a href="<?php echo base_url(); ?>baak/pembelajaran/presensi_mahasiswa_list_prodi">Presensi Mahasiswa</a>
                            <a href="<?php echo base_url(); ?>baak/pembelajaran/rekap_presensi_dosen">Rekap Presensi Dosen</a>
                            <a href="<?php echo base_url(); ?>baak/pembelajaran/cetak_kartu_ujian">Cetak Kartu Ujian</a>
                            <div class="dropdown-child-vertikal-2">
                                <div class="dropdown-menu-vertikal-2">
                                    <a href="#">FRS</a>
                                    <div class="box"><i class="bi bi-chevron-up chevron-vertikal-2"></i></div>
                                </div>
                                <div class="submenu-dropdown-vertikal-2">
                                    <a href="<?php echo base_url(); ?>baak/frs/list_pengisian_frs_mhs/">Pengisian FRS (mahasiswa)</a>
                                    <a href="<?php echo base_url(); ?>baak/frs/list_pengisian_frs_mk/">Pengisian FRS (mk)</a>
                                    <a href="<?php echo base_url(); ?>baak/frs/list_pengisian_frs_prodi/">Pengisian FRS (Prodi)</a>
                                </div>
                            </div>
                            <div class="dropdown-child-vertikal-2">
                                <div class="dropdown-menu-vertikal-2">
                                    <a href="#">Nilai</a>
                                    <div class="box"><i class="bi bi-chevron-up chevron-vertikal-2"></i></div>
                                </div>
                                <div class="submenu-dropdown-vertikal-2">
                                    <a href="<?php echo base_url(); ?>baak/frs/set_kurikulum/report">Matakuliah</a>
                                    <a href="<?php echo base_url(); ?>baak/mahasiswa">Mahasiswa</a>
                                </div>
                            </div>
                            <a href="<?php echo base_url(); ?>baak/pembelajaran/rekap_aktivitas_mahasiswa">Rekap Aktivitas Mahasiswa</a>
                            <a href="<?php echo base_url(); ?>baak/pembelajaran/rekap_administrasi_mahasiswa">Rekap administrasi Mahasiswa</a>
                        </div>
                    </div>
                    <div class="dropdown-child-vertikal">
                        <div href="" class="dropdown-menu-vertikal">
                            <div class="left">
                                <i class="fa fa-folder-open-o"></i>
                                Pemagangan
                            </div>
                            <div class="right">
                                <i class="bi bi-chevron-up chevron-vertikal"></i>
                            </div>
                        </div>
                        <div class="submenu-dropdown-vertikal">
                            <a href="<?php echo base_url(); ?>baak/magang/list_periode">Periode</a>
                            <a href="<?php echo base_url(); ?>baak/magang/list_permohonan">Permohonan</a>
                            <a href="<?php echo base_url(); ?>baak/job">Job</a>
                            <a href="<?php echo base_url(); ?>baak/magang/mbkm">MBKM</a>
                        </div>
                    </div>
                    <div class="dropdown-child-vertikal">
                        <div href="" class="dropdown-menu-vertikal">
                            <div class="left">
                                <i class="fa fa-folder-open-o"></i>
                                Tugas Akhir
                            </div>
                            <div class="right">
                                <i class="bi bi-chevron-up chevron-vertikal"></i>
                            </div>
                        </div>
                        <div class="submenu-dropdown-vertikal">
                            <a href="<?php echo base_url(); ?>baak/tugas_akhir/ta_s1/list_periode">List Periode</a>
                        </div>
                    </div>
                    <div class="dropdown-child-vertikal">
                        <div href="" class="dropdown-menu-vertikal">
                            <div class="left">
                                <i class="fa fa-folder-open-o"></i>
                                Wisuda
                            </div>
                            <div class="right">
                                <i class="bi bi-chevron-up chevron-vertikal"></i>
                            </div>
                        </div>
                        <div class="submenu-dropdown-vertikal">
                            <a href="<?php echo base_url(); ?>baak/wisuda/list_periode">List Periode</a>
                        </div>
                    </div>
                    <div class="dropdown-child-vertikal">
                        <div href="" class="dropdown-menu-vertikal">
                            <div class="left">
                                <i class="fa fa-folder-open-o"></i>
                                Transkip
                            </div>
                            <div class="right">
                                <i class="bi bi-chevron-up chevron-vertikal"></i>
                            </div>
                        </div>
                        <div class="submenu-dropdown-vertikal">
                            <a href="<?php echo base_url(); ?>baak/transkript/list">Cetak Transkrip</a>
                        </div>
                    </div>
                <?php } elseif ($this->session->userdata('role') == 'prodi') { ?>
                    <div class="dropdown-child-vertikal">
                        <div href="" class="dropdown-menu-vertikal">
                            <div class="left">
                                <i class="fa fa-folder-open-o"></i>
                                Prodi
                            </div>
                            <div class="right">
                                <i class="bi bi-chevron-up chevron-vertikal"></i>
                            </div>
                        </div>
                        <div class="submenu-dropdown-vertikal">
                            <div class="dropdown-child-vertikal-2">
                                <div class="dropdown-menu-vertikal-2">
                                    <a href="#">Mahasiswa</a>
                                    <div class="box"><i class="bi bi-chevron-up chevron-vertikal-2"></i></div>
                                </div>
                                <div class="submenu-dropdown-vertikal-2">
                                    <a href="<?php echo base_url(); ?>baak/mahasiswa">List mahasiswa</a>
                                    <a href="<?php echo base_url(); ?>baak/mahasiswa/kurikulum">Kurikulum mahasiswa</a>
                                    <a href="<?php echo base_url(); ?>baak/mahasiswa/dosen_wali">Dosen Wali Mahasiswa</a>
                                    <a href="<?php echo base_url(); ?>baak/mahasiswa/kelas">Kelas Mahasiswa</a>
                                </div>
                            </div>
                            <div class="dropdown-child-vertikal-2">
                                <div class="dropdown-menu-vertikal-2">
                                    <a href="#">Program Studi</a>
                                    <div class="box"><i class="bi bi-chevron-up chevron-vertikal-2"></i></div>
                                </div>
                                <div class="submenu-dropdown-vertikal-2">
                                    <a href="<?php echo base_url(); ?>baak/prodi">List Prodi</a>
                                </div>
                            </div>
                            <div class="dropdown-child-vertikal-2">
                                <div class="dropdown-menu-vertikal-2">
                                    <a href="#">Matakuliah</a>
                                    <div class="box"><i class="bi bi-chevron-up chevron-vertikal-2"></i></div>
                                </div>
                                <div class="submenu-dropdown-vertikal-2">
                                    <a href="<?php echo base_url(); ?>baak/matakuliah/kurikulum">Kurikulum</a>
                                </div>
                            </div>
                            <div class="dropdown-child-vertikal-2">
                                <div class="dropdown-menu-vertikal-2">
                                    <a href="#">Dosen</a>
                                    <div class="box"><i class="bi bi-chevron-up chevron-vertikal-2"></i></div>
                                </div>
                                <div class="submenu-dropdown-vertikal-2">
                                    <a href="<?php echo base_url(); ?>baak/dosen/">List Dosen</a>
                                </div>
                            </div>
                            <div class="dropdown-child-vertikal-2">
                                <div class="dropdown-menu-vertikal-2">
                                    <a href="#">FRS Report</a>
                                    <div class="box"><i class="bi bi-chevron-up chevron-vertikal-2"></i></div>
                                </div>
                                <div class="submenu-dropdown-vertikal-2">
                                    <a href="<?php echo base_url(); ?>prodi/frs/list_pengisian_frs_mhs/">Pengisian FRS (mahasiswa)</a>
                                    <a href="<?php echo base_url(); ?>prodi/frs/list_pengisian_frs_mk/">Pengisian FRS (mk)</a>
                                    <a href="<?php echo base_url(); ?>prodi/frs/list_pengisian_frs_prodi/">Pengisian FRS (Prodi)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-child-vertikal">
                        <div href="" class="dropdown-menu-vertikal">
                            <div class="left">
                                <i class='fa fa-pencil-square-o'></i> Perkuliahan
                            </div>
                            <div class="right">
                                <i class="bi bi-chevron-up chevron-vertikal"></i>
                            </div>
                        </div>
                        <div class="submenu-dropdown-vertikal">
                            <a href="<?php echo base_url(); ?>prodi/perkuliahan/frs">FRS</a>
                            <a href="<?php echo base_url(); ?>baak/pembelajaran/set_periode">Set Periode</a>
                            <a href="<?php echo base_url(); ?>baak/pembelajaran/presensi_dosen_list_prodi">Presensi Dosen</a>
                            <a href="<?php echo base_url(); ?>baak/pembelajaran/presensi_mahasiswa_list_prodi">Presensi Mahasiswa</a>
                            <a href="<?php echo base_url(); ?>baak/pembelajaran/rekap_presensi_dosen">Rekap Presensi Dosen</a>
                            <a href="<?php echo base_url(); ?>baak/frs/jadwal_dosen_all_aktif">Jadwal</a>
                            <div class="dropdown-child-vertikal-2">
                                <div class="dropdown-menu-vertikal-2">
                                    <a href="#">FRS</a>
                                    <div class="box"><i class="bi bi-chevron-up chevron-vertikal-2"></i></div>
                                </div>
                                <div class="submenu-dropdown-vertikal-2">
                                    <a href="<?php echo base_url(); ?>baak/frs/list_pengisian_frs_mhs/">Pengisian FRS (mahasiswa)</a>
                                    <a href="<?php echo base_url(); ?>baak/frs/list_pengisian_frs_mk/">Pengisian FRS (mk)</a>
                                    <a href="<?php echo base_url(); ?>baak/frs/list_pengisian_frs_prodi/">Pengisian FRS (Prodi)</a>
                                    <a href="<?php echo base_url(); ?>baak/frs/set_kurikulum/report">Set MK FRS</a>
                                </div>
                            </div>
                            <div class="dropdown-child-vertikal-2">
                                <div class="dropdown-menu-vertikal-2">
                                    <a href="#">Nilai</a>
                                    <div class="box"><i class="bi bi-chevron-up chevron-vertikal-2"></i></div>
                                </div>
                                <div class="submenu-dropdown-vertikal-2">
                                    <a href="<?php echo base_url(); ?>baak/frs/set_kurikulum/">Matakuliah</a>
                                    <a href="<?php echo base_url(); ?>baak/mahasiswa">Mahasiswa</a>
                                </div>
                            </div>
                            <a href="<?php echo base_url(); ?>baak/pembelajaran/rekap_aktivitas_mahasiswa">Rekap Aktivitas Mahasiswa</a>
                            <a href="<?php echo base_url(); ?>baak/pembelajaran/rekap_administrasi_mahasiswa">Rekap administrasi Mahasiswa</a>
                            <a href="<?php echo base_url(); ?>baak/skpi/validasi">SKPI</a>
                        </div>
                    </div>
                <?php } elseif ($this->session->userdata('role') == 'dosen') { ?>
                    <a href="<?php echo base_url('dosen/profile/dosen_update'); ?>" aria-expanded="false"><i class="fa fa-circle"></i><span class="hide-menu">Profile</span></a>
                    <div class="dropdown-child-vertikal">
                        <div href="" class="dropdown-menu-vertikal">
                            <div class="left">
                                <i class='fa fa-users'></i>
                                Mahasiswa
                            </div>
                            <div class="right">
                                <i class="bi bi-chevron-up chevron-vertikal"></i>
                            </div>
                        </div>
                        <div class="submenu-dropdown-vertikal">
                            <a href="<?php echo base_url(); ?>dosen/mahasiswa">Mahasiswa Wali</a>
                            <a href="<?php echo base_url(); ?>dosen/mahasiswa/frs">FRS</a>
                        </div>
                    </div>
                    <div class="dropdown-child-vertikal">
                        <div href="" class="dropdown-menu-vertikal">
                            <div class="left">
                                <i class='fa fa-pencil-square-o'></i> Perkuliahan
                            </div>
                            <div class="right">
                                <i class="bi bi-chevron-up chevron-vertikal"></i>
                            </div>
                        </div>
                        <div class="submenu-dropdown-vertikal">
                            <a href="<?php echo base_url(); ?>dosen/perkuliahan/perangkat_perkuliahan_periode">Perangkat Perkuliahan</a>
                            <a href="<?php echo base_url(); ?>dosen/perkuliahan/kehadiran_dosen_jadwal">Kehadiran Dosen</a>
                            <a href="<?php echo base_url(); ?>dosen/perkuliahan/presensi_mahasiswa">Kehadiran mahasiswa</a>
                            <a href="<?php echo base_url(); ?>dosen/perkuliahan/input_nilai">Input Nilai</a>
                            <a href="<?php echo base_url(); ?>dosen/perkuliahan/jadwal">jadwal</a>
                        </div>
                    </div>
                    <div class="dropdown-child-vertikal">
                        <div href="" class="dropdown-menu-vertikal">
                            <div class="left">
                                <i class='fa fa-pencil-square-o'></i> Pemagangan
                            </div>
                            <div class="right">
                                <i class="bi bi-chevron-up chevron-vertikal"></i>
                            </div>
                        </div>
                        <div class="submenu-dropdown-vertikal">
                            <a href="<?php echo base_url(); ?>dosen/magang/list_mahasiswa">Mahasiswa bimbingan </a>
                            <a href="<?php echo base_url(); ?>dosen/magang/list_sidang">Sidang</a>
                        </div>
                    </div>
                    <div class="dropdown-child-vertikal">
                        <div href="" class="dropdown-menu-vertikal">
                            <div class="left">
                                <i class='fa fa-bookmark-o'></i>  TA & Skripsi
                            </div>
                            <div class="right">
                                <i class="bi bi-chevron-up chevron-vertikal"></i>
                            </div>
                        </div>
                        <div class="submenu-dropdown-vertikal">
                            <a href="<?php echo base_url(); ?>dosen/ta_s1/list_mahasiswa">Bimbingan</a>
                            <a href="<?php echo base_url(); ?>dosen/ta_s1/list_sidang">Sidang</a>
                        </div>
                    </div>
                <?php } elseif ($this->session->userdata('role') == 'mhs') { ?>
                    <div class="dropdown-child-vertikal">
                        <div href="" class="dropdown-menu-vertikal">
                            <div class="left">
                                <i class="fa fa-file-text"></i>FRS
                            </div>
                            <div class="right">
                                <i class="bi bi-chevron-up chevron-vertikal"></i>
                            </div>
                        </div>
                        <div class="submenu-dropdown-vertikal">
                            <a href="<?php echo base_url(); ?>mahasiswa/frs/isi_select/">Pengisian</a>
                            <a href="<?php echo base_url(); ?>mahasiswa/frs/lihat_select/">Cetak</a>
                            <a href="<?php echo base_url(); ?>mahasiswa/cuti/">Pengajuan Cuti</a>
                        </div>
                    </div>
                    <div class="dropdown-child-vertikal">
                        <div href="" class="dropdown-menu-vertikal">
                            <div class="left">
                                <i class="fa fa-pencil-square-o"></i>Perkuliahan
                            </div>
                            <div class="right">
                                <i class="bi bi-chevron-up chevron-vertikal"></i>
                            </div>
                        </div>
                        <div class="submenu-dropdown-vertikal">
                            <a href="<?php echo base_url(); ?>mahasiswa/perkuliahan/akademik">Akademik</a>
                    
                            <a href="<?php echo base_url(); ?>mahasiswa/a_document">Dokumen Akademik</a>
                        <!-- <a href="<?php echo base_url(); ?>mahasiswa/perkuliahan/riwayat_perkuliahan">Riwayat Perkuliahan</a> -->
                        
                            <a href="<?php echo base_url(); ?>baak/frs/list_ta/">E-learning</a>
                        
                            <a href="<?php echo base_url(); ?>mahasiswa/perkuliahan/kartu_kehadiran/">Kehadiran</a>
                        
                            <a href="<?php echo base_url(); ?>mahasiswa/perkuliahan/kartu_ujian/">Kartu Ujian</a>
                        
                            <a href="<?php echo base_url(); ?>mahasiswa/skpi/">SKPI</a>
                        
                            <a href="<?php echo base_url(); ?>mahasiswa/perkuliahan/perwalian/">Perwalian</a>
                        
                            <a href="<?php echo base_url(); ?>mahasiswa/perkuliahan/jadwal/">Jadwal Perkuliahan</a>
                        
                            <a href="<?php echo base_url(); ?>mahasiswa/perkuliahan/mahasiswa_aktif">Surat Mahasiswa Aktif</a>
                        </div>
                    </div>
                    <div class="dropdown-child-vertikal">
                        <div href="" class="dropdown-menu-vertikal">
                            <div class="left">
                                <i class="fa fa-clipboard"></i>Hasil Studi
                            </div>
                            <div class="right">
                                <i class="bi bi-chevron-up chevron-vertikal"></i>
                            </div>
                        </div>
                        <div class="submenu-dropdown-vertikal">
                            <a href="<?php echo base_url(); ?>mahasiswa/perkuliahan/transkrip_akademik">Hasil Studi Akademik</a>
                            <a href="<?php echo base_url(); ?>mahasiswa/perkuliahan/hasil_studi">Hasil Studi Persemester</a>
                            <a href="<?php echo base_url(); ?>mahasiswa/perkuliahan/surat_kelulusan">Surat Kelulusan</a>
                        </div>
                    </div>
                    <div class="dropdown-child-vertikal">
                        <div href="" class="dropdown-menu-vertikal">
                            <div class="left">
                                <i class="fa fa-dollar"></i>Adminstrasi
                            </div>
                            <div class="right">
                                <i class="bi bi-chevron-up chevron-vertikal"></i>
                            </div>
                        </div>
                        <div class="submenu-dropdown-vertikal">
                            <a href="<?php echo base_url(); ?>mahasiswa/administrasi/ukt/">UKT</a>
                            <a href="<?php echo base_url(); ?>mahasiswa/administrasi/additional/">Additional</a>
                            <a href="<?php echo base_url(); ?>mahasiswa/administrasi/penaguhan/">Penaguhan</a> 
                        </div>
                    </div>
                    <div class="dropdown-child-vertikal">
                        <div href="" class="dropdown-menu-vertikal">
                            <div class="left">
                                <i class="fa fa-suitcase"></i> Pemagangan
                            </div>
                            <div class="right">
                                <i class="bi bi-chevron-up chevron-vertikal"></i>
                            </div>
                        </div>
                        <div class="submenu-dropdown-vertikal">
                            <a href="<?php echo base_url(); ?>mahasiswa/magang/">Pendaftaran</a>
                            <a href="<?php echo base_url(); ?>mahasiswa/magang/history">History</a>
                            <a href="<?php echo base_url(); ?>mahasiswa/mbkm">MBKM</a>
                            <a href="<?php echo base_url(); ?>mahasiswa/magang/job">Job Vacancy</a>
                        </div>
                    </div>
                    <div class="dropdown-child-vertikal">
                        <div href="" class="dropdown-menu-vertikal">
                            <div class="left">
                                <i class='fa fa-bookmark-o'></i> TA & Skripsi
                            </div>
                            <div class="right">
                                <i class="bi bi-chevron-up chevron-vertikal"></i>
                            </div>
                        </div>
                        <div class="submenu-dropdown-vertikal">
                            <a href="<?php echo base_url(); ?>mahasiswa/ta_s1/">Pendaftaran</a>
                            <!-- <a href="<?php echo base_url(); ?>mahasiswa/ta_d3/">Pendaftaran (D3)</a> -->
                        </div>
                    </div>
                    <div class="dropdown-child-vertikal">
                        <div href="" class="dropdown-menu-vertikal">
                            <div class="left">
                                <i class='fa fa-graduation-cap'></i> Wisuda
                            </div>
                            <div class="right">
                                <i class="bi bi-chevron-up chevron-vertikal"></i>
                            </div>
                        </div>
                        <div class="submenu-dropdown-vertikal">
                            <a href="<?php echo base_url(); ?>mahasiswa/wisuda/list_periode">Daftar</a>
                            <a href="<?php echo base_url(); ?>mahasiswa/wisuda/form_ijazah">Form Pengambilan Ijazah</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
