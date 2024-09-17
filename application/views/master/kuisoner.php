<link href="<?php echo base_url(); ?>assets/themplate/assets/plugins/pivottable/pivot.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/themplate/assets/plugins/pivottable/d3.min.js" rel="stylesheet">
<script src="<?php echo base_url(); ?>assets/themplate/assets/plugins/pivottable/d3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/themplate/assets/plugins/pivottable/c3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/themplate/assets/plugins/pivottable/pivot.js"></script>
<script src="<?php echo base_url(); ?>assets/themplate/assets/plugins/jqueryui/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>assets/themplate/assets/plugins/pivottable/c3_renderers.js"></script>
<style>
    body { font-family: Verdana;}
    .c3-line, .c3-focused {stroke-width: 3px !important;}
    .c3-bar {stroke: white !important; stroke-width: 1;}
    .c3 text { font-size: 12px; color: grey;}
    .tick line {stroke: white;}
    .c3-axis path {stroke: grey;}
    .c3-circle { opacity: 1 !important; }
</style>

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
            <div class="col-lg-12">
            <div class="card">
                        <div class="card-block">
                            <h4 class="card-title">File Download</h4>
                            <div class="message-box">
                                <div class="message-widget message-scroll">
                                    <div id="output"></div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

          
        </div>

		

		<!-- Column -->
	</div>
</div>

<script>
    var salesPivotData = <?php echo json_encode($data_detail); ?> ;
   
    var derivers = $.pivotUtilities.derivers;
    var renderers = $.extend($.pivotUtilities.renderers,
            $.pivotUtilities.c3_renderers);

    $("#output").pivotUI(
        salesPivotData,{
            vals: ['jawaban'],
            aggregatorName: "Average",
            rows:['id_pertanyaan','pertanyaan'],
            cols:['jawaban'],
            rendererName: "Table",
            renderers: $.extend(
                $.pivotUtilities.renderers, 
                $.pivotUtilities.plotly_renderers
            )
        }
    );
   


</script>
