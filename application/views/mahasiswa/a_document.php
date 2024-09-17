<script src="<?php echo base_url(); ?>assets/themplate/assets/plugins/bootstrap/js/bootstrap-tab-history.js"></script>
<div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    
                <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
		
                </div>
                <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item"> <a data-toggle="tab"          data-tab-history="true"          data-tab-history-changer="push"          data-tab-history-update-url="true" class="nav-link active" data-toggle="tab" href="#information" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Information</span></a> </li>
                                    <li class="nav-item"> <a data-toggle="tab"          data-tab-history="true"          data-tab-history-changer="push"          data-tab-history-update-url="true" class="nav-link" data-toggle="tab" href="#dokument" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Dokumen</span></a> </li>
                                </ul>
                            </div>
                            <div class="card-block">
                                <div class="tab-content tabcontent">
                                <div class="tab-pane active" id="information" role="tabpanel">
                                    <?= $informasi_text->text ?>
                                </div>
                                <div class="tab-pane" id="dokument" role="tabpanel">
                                   <div class="table-responsive">
                                    <table class="table table-primary">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nama Dokument</th>
                                                <th scope="col">Berkas</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                foreach($dokument_list as $row){
                                            ?>
                                                <tr>
                                                    <td><?= $row->document_name; ?></td>
                                                    <td><?php if($row->status){  ?> <a href="#" onClick="MyWindow=window.open('<?php echo base_url('assets/berkas/a_document/'.$row->file); ?>','MyWindow','width=900,height=600'); return false;"><i class="fa fa-eye"></i></a> <?php  }else{ echo "No data"; }; ?></td>
                                                    <td><?php if($row->status){ echo $row->status; }else{ echo "No data"; }; ?></td>
                                                    <td><a href="<?php echo base_url('mahasiswa/a_document/upload/'.$row->id_trx); ?>" class="btn btn-info"><i class="fa fa-upload"></i></a></td>
                                                </tr>
                                            <?php
                                                }
                                            ?>
                                          
                                        </tbody>
                                    </table>
                                   </div>
                                   
                                </div>
                            </div></div>
                        </div>
                    </div>
                <!-- Row -->
               
            </div>

                  