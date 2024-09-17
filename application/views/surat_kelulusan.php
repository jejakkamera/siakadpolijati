<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Surat Keterangan Aktif</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.3.0/paper.css" />
    <!-- <link rel="stylesheet" href="dist/paper.css" /> -->

    <style>
        @page {
            size: A5;
        }

        .header {
            display: flex;
            flex-direction: row;
            gap: 5px;
            justify-content: flex-start;
            align-items: flex-start;
            margin-left: 10px;
            margin-right: 10px;
        }

        .header-text {
            text-align: center;
            margin-top: -10px;
        }

        .margin-bottom {
            margin-bottom: -18px;
        }

        .divider {
            border-color: black;
            margin-top: -5px;
        }

        .contract-title {
            font-weight: bold;
            text-transform: capitalize;
            text-align: center;
        }

        .contract-content {
            margin-left: 15px;
            margin-right: 15px;
        }
    </style>
</head>

<body class="A4">
    <section class="sheet padding-10mm">
        <article>
            <div class="header">
                <!-- <img src="<?php echo base_url('assets/images/ubp-logo.jpg'); ?>" width="110" /> -->
                <div class="header-text">
                    <img src="<?= base_url('assets\kop_surat_aktif.png') ?>" width="100%" alt="">
                    <!-- <h3 class="margin-bottom">UNIVERSITAS BUANA PERJUANGAN KARAWANG</h3>
                    <h4 class="margin-bottom">
                        LEMBAGA PENELITIAN DAN PENGABDIAN KEPADA MASYARAKAT
                    </h4>
                    <h4 class="margin-bottom">TERAKREDITASI BAN-PT dan LAM-PTKes</h4>
                    <p class="margin-bottom">
                        Jl. H.S Ronggowaluyo Telukjambe Timur Karawang 41361 Tel./Fax.
                        (0267) 8403140
                    </p>
                    <p>Site: http://ubpkarawang.ac.id Email: info@ubpkarawang.ac.id</p> -->
                </div>
            </div>
            <!-- <hr class="divider" /> -->
            <div class="contract-title">
                <p class="margin-bottom" style="text-decoration: underline;">SURAT KETERANGAN</p>

                <p>Nomor: <?= $nomer_surat ?></p>
            </div>
            <div class="contract-content">
                <p>
                    Yang bertanda tangan di bawah ini:
                </p>
                <table>
                    <tr>
                        <td style="width: 300px; vertical-align: top">
                            NAMA
                        </td>
                        <td style="width: 300px; text-align: justify">
                            : Dr. Lila Setiyani, S.T., M.Kom.
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 300px; vertical-align: top">
                            JABATAN
                        </td>
                        <td style="width: 300px; text-align: justify">
                            : Ketua Sekolah Tinggi Manajemen Informatika
                            Dan Komputer Rosma Karawang
                        </td>
                    </tr>

                </table>
                <p>menerangkan bahwa:</p>
                <table>
                    <tr>
                        <!-- <td style="vertical-align: top; width: 30px">1.</td> -->
                        <td style="width: 300px; vertical-align: top">
                            NAMA
                        </td>
                        <td style="width: 300px; text-align: justify">
                            : <?= $nama ?>
                        </td>
                    </tr>
                    <tr>
                        <!-- <td style="vertical-align: top; width: 30px">1.</td> -->
                        <td style="width: 300px; vertical-align: top">
                            NIM
                        </td>
                        <td style="width: 300px; text-align: justify">
                            : <?= $nim ?>
                        </td>
                    </tr>
                    <tr>
                        <!-- <td style="vertical-align: top; width: 30px">1.</td> -->
                        <td style="width: 300px; vertical-align: top">
                            PROGRAM STUDI
                        </td>
                        <td style="width: 300px; text-align: justify">
                            : <?= $prodi ?>
                        </td>
                    </tr>
                    <tr>
                        <!-- <td style="vertical-align: top; width: 30px">1.</td> -->
                        <td style="width: 300px; vertical-align: top">
                            PROGRAM PENDIDIKAN
                        </td>
                        <td style="width: 300px; text-align: justify">
                            : <?= $jenjang ?>
                        </td>
                    </tr>


                </table>

                <br>
                <div style="text-align: justify">
                    Telah mengikuti ujian sidang Tugas Akhir Sekolah Tinggi Manajemen Informatika dan Komputer Rosma pada tanggal <?= $tanggal_kelulusan ?> dan yang bersangkutan dinyatakan <b>LULUS</b>.
                </div>
                <br>
                <div style="text-align: justify">
                    Demikianlah surat keterangan ini kami buat untuk digunakan sesuai keperluan, atas perhatian dan kerjasamanya diucapkan terima kasih.
                </div>
                <br>
                <br>

                <table>
                    <tr>
                        <td>
                            <br>
                            <img src="<?= $qr_code ?>" width="130" alt="">
                            <br>
                            <small><?= $uuid ?></small>
                            <br>
                            <br>
                            <br>
                            <i>Tembusan :
                                <ol>
                                    <li>Arsip</li>
                                </ol>
                            </i>
                        </td>
                        <td></td>
                        <td>
                            <div style="float: right;margin-right:20px;margin-left:200px">

                                <table>
                                    <tr>
                                        <td>Karawang, <?= $tanggal ?></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>
                                                Sekolah Tinggi Manajemen
                                                <br>
                                                Informatika dan Komputer Rosma
                                            </b>
                                        </td>
                                    </tr>
                                </table>

                                <table>
                                    <tr>
                                        <td>
                                            <img width="160" src="<?= base_url('assets\stempel_surat_aktif_2.png') ?>" alt="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <b>
                                            <td>Dr. Lila Setiyani, S.T., M.Kom</td>
                                        </b>
                                    </tr>
                                    <tr>
                                        <b>
                                            <td>Ketua</td>
                                        </b>
                                    </tr>
                            </div>

                        </td>
                    </tr>
                </table>
            </div>
        </article>
    </section>

    <script>
        window.print()
    </script>
</body>

</html>