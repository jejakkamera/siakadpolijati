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

			<div class="col-lg-12 col-xlg-12">


				<div class="card">
					<div class="card-header">
						Data Informasi Text
					</div>
					<div class="card-block">
						<h4 class="card-title">Data Informasi Text</h4>
						<form action="<?= base_url() ?>baak/skpi/a_document/informasi_save/<?= $id ?>" method="post">
							<textarea name="input_text">
                                 <?= $data_text->text ?>
                             </textarea>
							<button type="submit" class='btn btn-primary my-3'>simpan</button>
                            <a class='btn btn-warning' href="<?= base_url() ?>baak/skpi/a_document">Back</a>
						</form>
                        
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
<script src="<?php echo base_url(); ?>asset/adminthem/assets/plugins/icheck/icheck.min.js"></script>
<script src="<?php echo base_url(); ?>asset/adminthem/assets/plugins/icheck/icheck.init.js"></script>
<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>

<script>
	CKEDITOR.replace('input_text');

</script>
