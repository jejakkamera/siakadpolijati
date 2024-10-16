<div class="page-wrapper">
	<!-- ============================================================== -->
	<!-- Container fluid  -->
	<!-- ============================================================== -->
	<div class="container-fluid">
		<!-- ============================================================== -->
		<!-- Bread crumb and right sidebar toggle -->
		<!-- ============================================================== -->
		<?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
		<div class="row page-titles">
		</div>

		<!-- ============================================================== -->
		<!-- End Bread crumb and right sidebar toggle -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Start Page Content -->
		<!-- ============================================================== -->
		<!-- Row -->

		<div class="row">
            <div class="col-lg-4">
            <div class="card">
                        <div class="card-block">
                            <h4 class="card-title">File Download</h4>
                            <div class="message-box">
                                <div class="message-widget message-scroll">
                                    <!-- Message -->
                                    <?php foreach ($data_informasi_file as $key) {?>
                                        <a href="<?= base_url().'/assets/informasi/'.$key['file'] ?>">
                                            <div class="user-img"> <span class="round" style="background-color: #FF8D19;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span></div>
                                            <div class="mail-contnet">
                                                <h5><?= str_replace('_',' ',$key['file']) ?></h5> <span class="mail-desc">PDF</span> </div>
                                        </a>
                                    <?php } ?>
                                    <!-- Message -->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="col-lg-8">
				<?php if ($this->session->userdata('role') == 'dosen') { ?>
						<div class="card">
                            <div class="card-block">
                                <div class="d-flex flex-row">
                                    <div class="" id='foto' > <img alt="user" class="img-circle" width="100" src="<?php echo base_url('assets/img_mahasiswa/'.$dosen_profile['foto'])?>" alt=""> <br> 
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#rubahFoto">
										Ubah Foto
									</button> </div>
                                    <div class="p-l-20">
                                        <h3 class="font-medium" id="nama" ><?= $dosen_profile['nama']; ?></h3>
                                        <h6 id='nim'><?= $dosen_profile['nidn']; ?></h6>
                                        <h6 id="status_mahasiswa">(<?= $dosen_profile['nama_status_aktif']; ?>) <?= $dosen_profile['status_pegawai']; ?> </h6>
                                        <h6 id="status_mahasiswa"><?= $dosen_profile['nama_homebase']; ?> </h6>
                                        
                                        <a class="btn btn-success" href="<?php echo base_url('dosen/profile/kartu_dosen/1'); ?>" target="_blank" rel="noopener noreferrer"><i class="fa fa-id-card"></i> Kartu Dosen</a>
                                        										
                                    </div>
                                </div>
                                <div class="row m-t-40">
                                    <div class="col-3 b-r">
                                        <h2 class="font-light" id="total_sks"><?= $count; ?></h2>
                                        <h6>Mahasiswa Aktif</h6></div>
                                    <div class="col-3 b-r">
                                        <h2 class="font-light" id="ipk"><?= $jadwal; ?></h2>
                                        <h6>Total Kelas</h6></div>
                                    <div class="col-3 b-r">
                                        <h2 class="font-light" id="ipk"><?= $dosen_profile['jafung']; ?></h2>
                                        <h6>Jabatan Akademik</h6></div>
                                    <div class="col-3 b-r">
                                        <h2 class="font-light" id="ipk"><?= $periode['nama_id_periode']; ?></h2>
                                        <h6>Periode</h6></div>
                                </div>
                            </div>
                        </div>

						<div class="modal fade" id="rubahFoto" tabindex="-1" aria-labelledby="rubahFotoLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="rubahFotoLabel">Ubah Foto Profil</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
												<?php echo form_open_multipart( base_url().'dosen/profile/edit_gambar/'.$dosen_profile['id_dosen']);?>
											<div class="form-group">
												<label for="foto">foto</label> *JPG
												<input type="file" name="foto" value="<?= $dosen_profile['foto'] ?>" class="form-control"
													id="foto">
											</div>
										
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										<button  type="submit" class="btn btn-primary">Save changes</button>
										</form>
									</div>
								</div>
							</div>
						</div>

				<?php } ?>
                <div class="card card-outline-inverse">
                    <div class="card-header">
                                <h4 class="m-b-0 text-white">Sistem Informasi Akademik </h4></div>
                            <div class="card-block">
                                <h3 class="card-title">POLITEKNIK JATILUHUR</h3>
                                <p class="card-text"><?= $data_informasi_text->text ?>.</p>
                                <a style="background-color: #FF8D19; border: 1px solid #FF8D19" href="<?php echo base_url('welcome/arp'); ?>" class="btn btn-primary">Academic Regulation</a>
                                <a style="background-color: #FF8D19; border: 1px solid #FF8D19" href="<?php echo base_url('welcome/rdd'); ?>" class="btn btn-primary">Regulation Decree and Documentation</a>
                            </div>
                    </div>
                   
                </div>
            </div>
        </div>

		

		<!-- Column -->
	</div>
</div>
<!-- Row -->
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
