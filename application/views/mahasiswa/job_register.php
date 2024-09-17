<script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
<link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />
<link href="<?php echo base_url(); ?>assets/themplate/assets/plugins/datatables/media/css/buttons.dataTables.min.css" id="theme" rel="stylesheet">
<script src="<?php echo base_url(); ?>assets/themplate/assets/plugins/jquery/jquery.min.js"></script>
                  <script src="<?php echo base_url(); ?>assets/themplate/assets/plugins/datatables/jquery.dataTables.min.js"></script>

<div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    
                   
                </div>
                <div class="row">
                    <div class="col-lg-12">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>   
                        <div class="card card-outline-danger">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Register Job</h4>
                            </div>
                            <div class="card-block">
                                    <table id="mytable" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                                        <th>Nama Perusahaan</th>
                                                        <th>Posisi</th>
                                                        <th>Keterangan</th>
                                                        <th>Register</th>
                                                        <th>Action</th>
										</tr>
                                        </thead>
                                        <tbody>
												<tr>
                                                        <td><?= $job->nama_perusahaan ?></td>
                                                        <td><?= $job->posisi ?></td>
                                                        <td><?= $job->keterangan ?></td>
                                                        <td><a class='btn btn-info' target='_blank' href="<?= base_url('/assets/berkas/magang/'.$job_register->file); ?>">File</a></td>
                                                        <td><a class='btn btn-danger' href="<?= base_url('mahasiswa/magang/job_register_delete/'.$job_register->id_job); ?>">Delete</a></td>
												</tr>
                                        </tbody>
                                    </table>
                                   
                            </div>
                           
                        </div>
                    </div>
                </div>
                <!-- Row -->
               
            </div>
