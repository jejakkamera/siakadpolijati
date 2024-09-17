<link href="<?php echo base_url(); ?>assets/themplate/assets/plugins/datatables/media/css/buttons.dataTables.min.css" id="theme" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/themplate/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/themplate/assets/plugins/summernote/dist/summernote.css" rel="stylesheet" />

        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    
                   
                </div>

 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-block">
                                <h6 class="card-subtitle"> <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>   </h6>
                                <div class="table-responsive m-t-40">

                                <?php echo $v_jadwal->status_rps; ?>
                                    <table id="mytable" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Matakuliah</th>
                                                <th><?php echo $v_jadwal->kode_mata_kuliah.'-'.$v_jadwal->nama_mata_kuliah; ?></th>

                                                <th>Mahasiswa</th>
                                                <th><?php echo $frs->nim.'-'.$frs->nama; ?></th>
                                            </tr>
                                            <tr>
                                                <th>Periode</th>
                                                <th><?php echo $v_jadwal->periode; ?></th>

                                                <th>Nama</th>
                                                <th><?php echo $v_jadwal->nama_program_studi; ?></th>
                                            </tr>
                                            <tr>
                                                <th>Dosen</th>
                                                <th><?php echo $v_jadwal->nama_id_dosen; ?></th>

                                                <th>Perkuliahan</th>
                                                <th><?php echo strtoupper($v_jadwal->hari).'-'.$v_jadwal->nama_waktu.'-'.$v_jadwal->nama_kelas; ?></th>
                                            </tr>
                                        </thead>
                                       
                                    </table>

                                    <table id="mytable" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Pertemuan</th>
                                                <th>Materi</th>
                                                <th>Presensi</th>
                                                <th>Tanggal</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($presensi_dosen as $row){ ?>
                                            <tr>
                                                <td><?= $row['pertemuan'] ?></td>
                                                <td><?= $row['rencana_materi'].'<br>'.$row['rencana_methode'].'<br>'.$row['rencana_tanggal_masuk'] ?></td>
                                                <td><?php $string='presensi_status_'.$row['pertemuan']; if(array_key_exists($string,$frs)){echo $frs->$string;} ?></td>
                                                <td><?php $tglstring='tanggal_absen_'.$row['pertemuan']; if(array_key_exists($tglstring,$frs)){echo $frs->$tglstring;} ?></td>
                                                <td>
                                                    <?php if(!$frs->$string){  ?> 
                                                        <button onclick="Open(<?= $row['pertemuan'] ?>,'hadir')" data-toggle="tooltip" data-html="true" title="Hadir"  class="btn btn-success" target="_blank" > <span><i class="fa fa-check"></i></span></button >
                                                        <button onclick="Open(<?= $row['pertemuan'] ?>,'izin')" data-toggle="tooltip" data-html="true" title="Izin"  class="btn btn-warning" target="_blank" > <span><i class="fa fa-envelope-open-o"></i></span></button >
                                                        <button onclick="Open(<?= $row['pertemuan'] ?>,'tidak_hadir')" data-toggle="tooltip" data-html="true" title="Tidak Hadir"  class="btn btn-danger" target="_blank" > <span><i class="fa fa-window-minimize"></i></span></button >
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                       
                    </div>
                </div>
                <!-- ============================================================== -->
               

                </div>

                <script>
                    function Open(pertemuan,status) {
                        window.open("<?php echo base_url('/mahasiswa/perkuliahan/kehadiran_online_action/'.$frs->id_matkul.'/'.$frs->periode.'/'.$frs->nim)?>/"+pertemuan+'/'+status, "_blank");
                        setTimeout(() => {console.log("Delayed for 2 second.");}, 2000)
                        location.reload(); 
                    }
                </script>
      