<div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    
                   
                </div>
                <div class="row">
                    <div class="col-lg-12">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>   
                        <div class="card card-outline-danger">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Perangkat Pembelajaran</h4>
                            </div>
                            <div class="card-block">

                                <div class="tab-content tabcontent-border">
                                <?php if($this->session->userdata('role')=='dosen'){ ?>
                                <a href="<?php echo base_url(); ?>dosen/perkuliahan/perangkat_perkuliahan_periode" class="btn btn-info waves-effect waves-light" type="button"><span class="btn-label"><i class="fa fa-arrow-left"></i></span>List Tahun Akademik</a> 
                                <?php } ?> 
                                    <?php if(in_array($jadwal->status_rps,['proses']) && $this->session->userdata('role')=='pegawai_baak'){ ?>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" >Putusan RPS</button>
                                    <?php } ?>   
                                    <?php if(in_array($jadwal->status_rps,['draf','revisi'])){ ?>
                                        
                                        <a href="<?php echo base_url(); ?>dosen/perkuliahan/simpan_draf/<?php echo $id_jadwal; ?>" class="btn btn-success waves-effect waves-light" type="button"><span class="btn-label"><i class="fa fa-save"></i></span>Simpan Perangkat Pembelajaran</a> 
                                        <br>
                                    <?php } ?>
                                     <div class="tab-pane active" id="dashboard" role="tabpanel">
                                        <table id="mytable" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        
                                            <tbody>
                                                <tr>
                                                    <td style="width:30%">
                                                        Status 
                                                        <button type="button" class="btn" data-toggle="popover" title="Status" data-content="Status memiliki 4 jenis : Draf, Proses, Revisi, Diterima.  Sebelum perkuliahan, dosen harus melengkapi perangkat pembelajaran sebelum perkuliahan. "><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                                                    </td>
                                                    <td>
                                                        <?= strtoupper($jadwal->status_rps); ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width:30%">
                                                        Periode
                                                    </td>
                                                    <td>
                                                        <?= $jadwal->periode; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width:30%">
                                                        Program Studi
                                                    </td>
                                                    <td>
                                                        <?= $jadwal->nama_program_studi; ?> (<?= $jadwal->nama_jenjang_pendidikan; ?>)
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width:30%">
                                                        Matakuliah
                                                    </td>
                                                    <td>
                                                        <?= $jadwal->kode_mata_kuliah; ?>- <?= $jadwal->nama_mata_kuliah; ?> ( <?= $jadwal->sks_mata_kuliah; ?> SKS)
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width:30%">
                                                        Kelas 
                                                    </td>
                                                    <td>
                                                        <?= $jadwal->angkatan; ?>- <?= $jadwal->nama_kelas; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width:30%">
                                                        Ruangan 
                                                    </td>
                                                    <td>
                                                        <?= $jadwal->ruang; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width:30%">
                                                        Waktu 
                                                    </td>
                                                    <td>
                                                        <?= $jadwal->hari; ?>, <?= $jadwal->nama_waktu; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width:30%">
                                                        Dosen 
                                                    </td>
                                                    <td>
                                                        <?= $jadwal->nama_id_dosen; ?>,
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width:30%">
                                                        RPS 
                                                    </td>
                                                    <td>
                                                        <?php if($jadwal->file_rps){?>
                                                            <embed type="application/pdf" src="<?php echo base_url(); ?>assets/berkas/rps/<?=$jadwal->file_rps?>" width="90%" height="400"></embed><br>
                                                        <?php }else{ echo "not found file"; } ?> Upload : <?=$jadwal->rps_last_edit ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
<br>
<?php if($jadwal->file_rps and in_array($jadwal->status_rps,['draf','revisi','proses']) ){?>

<?php }else{ ?> 
	<a href="<?php echo base_url(); ?>dosen/perkuliahan/upload_rps/<?php echo $id_jadwal; ?>" class="btn btn-info">Upload RPS</a>
<?php } ?>      

<?php if(in_array($jadwal->status_rps,['draf','revisi'])){ ?>
          <a href="<?php echo base_url(); ?>dosen/perkuliahan/add_pertemuan_perangkat_pembelajaran/<?php echo $id_jadwal; ?>" class="btn btn-info">Tambah Pertemuan</a> | 
        <a href="<?php echo base_url(); ?>dosen/perkuliahan/copy_draf/<?php echo $id_jadwal; ?>" class="btn btn-warning waves-effect waves-light" type="button" onclick="return confirm('Anda yakin ? Seluruh data pada jadwal ini akan diganti !!!')"  ><span class="btn-label"><i class="fa fa-copy"></i></span>Copy dari jadwal lain</a>
<?php } ?>
<hr>                                    
                                    <table id="mytable" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        
                                        <thead>
                                            <tr>
                                                <td style="width:15%">
                                                    Pertemuan
                                                </td>
                                                <td style="width:35%">
                                                    Rencana
                                                </td>
                                                <td style="width:35%">
                                                    Pelaksanaan
                                                </td>
                                                <td style="width:15%">
                                                    Status
                                                </td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php if($pertemuan){ ?>
                                           <?php foreach($pertemuan as $rows){ ?>
                                            <tr>
                                                <td style="width:15%">
                                                    <?= $rows['pertemuan']  ?>
                                                    <?php if(in_array($jadwal->status_rps,['draf','revisi'])){ ?>
                                                        <a data-toggle="tooltip" data-html="true" title="Rubah Rencana Pembelajaran" href="<?php echo base_url(); ?>dosen/perkuliahan/edit_pertemuan_perangkat_pembelajaran/<?php echo $id_jadwal; ?>/<?= $rows['pertemuan']  ?>" class="btn btn-info"><i class="fa fa-pencil"></i></a> 
                                                        <a data-toggle="tooltip" data-html="true" title="Hapus Rencana Pembelajaran" href="<?php echo base_url(); ?>dosen/perkuliahan/delete_pertemuan_perangkat_pembelajaran/<?php echo $id_jadwal; ?>/<?= $rows['pertemuan']  ?>" class="btn btn-warning" onclick="return confirm('Anda yakin ? Data pada jadwal ini akan terhapus !!!')"><i class="fa fa-eraser"></i></a> 
                                                    <?php } ?>
                                                     </td>
                                                <td style="width:35%">
                                                <?= 'Tanggal '.$rows['rencana_tanggal_masuk'].'<br> Materi : '.$rows['rencana_materi'].'<br> Methode : '.$rows['rencana_methode']  ?>
                                                </td>
                                                <td style="width:35%">
                                                <?= 'Tanggal '.$rows['tanggal_masuk'].'<br> Materi : '.$rows['materi'].'<br> Methode : '.$rows['methode']  ?>
                                                </td>
                                                <td style="width:15%">
                                                    <?= $rows['status_rekap'] ?> - <?= $rows['tanggal_presensi'] ?>
                                                </td>
                                            </tr>
                                           <?php } ?>
                                           <?php }else{ echo "not found";} ?>
                                        </tbody>
                                    </table>

                                    </div>
                                    
                                </div>

<?php if(in_array($jadwal->status_rps,['proses']) && $this->session->userdata('role')=='pegawai_baak'){ ?>                                    
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Putusan RPS</h4>
        </div>
        <div class="modal-body">
        <form action='<?php echo base_url(); ?>baak/frs/putusan_rps/<?php echo $id_jadwal; ?>' method="post">
          <div class="form-group">
            <label for="putusan" class="col-form-label">Putusan:</label>
            <select name="putusan" class="col-form-label" >
                <option value="revisi">Revisi</option>
                <option value="diterima">Diterima</option>
            </select>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Keterangan:</label>
            <textarea class="form-control" name="keterangan" id="message-text"></textarea>
          </div>
          <button type="submit" class="btn btn-success"> <span class="btn-label"><i class="fa fa-check"></i></span> Simpan</button>
                                       
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div><?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
               
            </div>

            <script>
            $(function () {
                $('.example-popover').popover({
                    container: 'body'
                })
            })
            </script>

