<div class="page-wrapper">
	<!-- ============================================================== -->
	<!-- Container fluid  -->
	<!-- ============================================================== -->
	<div class="container-fluid">
		<!-- ============================================================== -->
		<!-- Bread crumb and right sidebar toggle -->
		<!-- ============================================================== -->
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
		<button id="print" class="btn btn-default btn-outline" class="btn btn-success waves-effect waves-light" ><span><i
											class="fa fa-print"></i> Print</span></button>
			
											<div class="col-md-12">
				<div class="card card-block printableArea">

					<hr>
					<div class="row">
						
						<div class="col-md-12">
						<table width="100%"  >
							<tr>
								<td width="30%" style="text-align:right !important" ><img   src="<?php echo base_url('assets/logo_rosma_kw_100.png');  ?>" alt="Logo"></td>
								<td width="40%" style="text-align:center !important"><h2>Form Pengambilan Ijazah</h2></td>
								<td width="30%" style="text-align:left !important">Form-STMIK-BAAK/PI <br> </td>
								
							</tr>
						</table>
						<hr>
                            <table width="100%" >
                                <tr>
                                    <td width="15%" >Nim</td>
                                    <td width="5%">:</td>
                                    <td width="30%"><?php echo $wisuda->nim; ?></td>
                                    <td width="15%" >Program Studi</td>
                                    <td width="5%">:</td>
                                    <td width="30%"><?php echo $wisuda->nama_jenjang_pendidikan; ?> - <?php echo $wisuda->nama_program_studi; ?></td>
                                </tr>
                                <tr>
                                    <td width="15%" >Nama</td>
                                    <td width="5%">:</td>
                                    <td width="30%"><?php echo $wisuda->nama; ?></td>
                                    <td width="15%">Tanggal Cetak</td>
                                    <td width="5%">:</td>
                                    <td width="30%"><?php echo date('d-F-Y'); ?></td>
                                </tr>
                            </table>
						</div>
						<div class="col-md-12">
							<?php if($hutang==0){  ?>
								<br>
								Menyatakan telah menyelesaikan seluruh matakuliah. dan telah menyelesaikan administrasi lainya.
								<hr>
								<table width="100%" >
                                <tr>
									<td width="30%" >BAAK</td>
                                    <td width="40%" >Keuangan</td>
                                    <td width="30%" >Perpustakaan</td>
                                </tr>
								<tr>
									<td width="30%" >&ensp;</td>
                                    <td width="40%" >&ensp;</td>
                                    <td width="30%" >&ensp;</td>
                                </tr>
								<tr>
									<td width="30%" >&ensp;</td>
                                    <td width="40%" >&ensp;</td>
                                    <td width="30%" >&ensp;</td>
                                </tr>
                                <tr>
									<td width="30%" >..................</td>
                                    <td width="40%" >..................</td>
                                    <td width="30%" >..................</td>
                                </tr>
                            </table>
							<?php }else{ ?>
                                <div class="table-responsive m-t-40" style="clear: both;">
                                <table width="100%" >
                                    <tr>
                                        <td width="30%" >Periode</td>
                                        <td width="40%" >Total Tagihan</td>
                                        <td width="30%" >Total Bayar</td>
                                    </tr>
									<?php foreach($data_hutang as $row){ ?>
										<tr>
                                        	<td width="30%" ><?php echo $row->periode ?></td>
                                        	<td width="40%" ><?php echo $row->total_tagihan ?></td>
                                        	<td width="30%" ><?php echo $row->total_bayar ?></td>
                                    	</tr>
									<?php } ?>
                                </table>
                                
                                </div>
							<?php } ?>

                            <div class="table-responsive m-t-40" style="clear: both;">
								
                                
                            </div>
						</div>
						
					</div>
				</div>
			</div>
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
	<script src="<?php echo base_url(); ?>assets/themplate/horizontal/js/jquery.PrintArea.js" type="text/JavaScript">
	</script>
						<div class="row">
							<div class="col-md-12">
								<div class="modal fade bs-example-modal-lg" id="personInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLabel1">Detail Nilai</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                loading
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
						</div>
								
<script>
    /* must apply only after HTML has loaded */
    $(document).ready(function () {
        $('#personInfo').on('show.bs.modal', function(e) {
            /* get data written in data-person-name field*/ 
            var personid_trx = $(e.relatedTarget).data('person-id_trx');
            var mk = $(e.relatedTarget).data('person-mk');
            var Nim = '<button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title"> Detail Nilai : '+mk+'</h4>';
            /* append that to form our service url */
            $.get('<?php echo site_url(); ?>mahasiswa/perkuliahan/hasil_studi_detail/' + personid_trx, function( data ) {
                $('#personInfo .modal-body').html(data);
                $('#personInfo .modal-header').html(Nim);
              });
        });
    });
</script>

<script src="<?php echo base_url(); ?>assets/themplate/horizontal/js/jquery.PrintArea.js" type="text/JavaScript">
	</script>
	<script>
		$(document).ready(function () {
			$("#print").click(function () {
				var mode = 'iframe'; //popup
				var close = mode == "popup";
				var options = {
					mode: mode,
					popClose: close
				};
				$("div.printableArea").printArea(options);
			});
		});

	</script>