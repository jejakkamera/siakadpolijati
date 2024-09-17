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
			<!-- Column -->

			<!-- Column -->
			<!-- Column -->
			<div class="col-lg-3 col-xlg-12 ">
                <div class="card card-inverse card-info">
                    <div class="box bg-info text-center">
                        <h1 class="font-light text-white" id="dikti_prodi"><i class="fa fa-spinner fa-spin "></i></h1>
                        <h6 class="text-white">Program Studi</h6>
                    </div>
                </div>        
			</div>
			<div class="col-lg-3 col-xlg-12 ">
                <div class="card card-inverse card-primary">
                    <div class="box bg-primary text-center">
                        <h1 class="font-light text-white" id='mahasiswa'><i class="fa fa-spinner fa-spin "></i></h1>
                        <h6 class="text-white">Mahasiswa Status Aktif</h6>
                    </div>
                </div>        
			</div>
			<div class="col-lg-3 col-xlg-12 ">
                <div class="card card-inverse card-success">
                    <div class="box bg-success text-center">
                        <h1 class="font-light text-white" id='dosen'><i class="fa fa-spinner fa-spin "></i></h1>
                        <h6 class="text-white">Dosen Status Aktif</h6>
                    </div>
                </div>        
			</div>
			<div class="col-lg-3 col-xlg-12 ">
                <div class="card card-inverse card-info">
                    <div class="box bg-info text-center">
                        <h1 class="font-light text-white" id='periode'><i class="fa fa-spinner fa-spin "></i></h1>
                        <h6 class="text-white">Periode Berjalan</h6>
                    </div>
                </div>        
			</div>
		</div>

		<div class="row">
			<div class='col-lg-4 col-xlg-6 mb-4'>
                <div class="card">
                    Pengisian KRS
						<div class="card-block">
							<div id="main-krs" style="width:100%; height:400px;"><i class="fa fa-spinner fa-spin fa-5x fa-fw"></i></div>
                            <a class="btn btn-primary" href="<?php echo base_url('baak/frs/list_pengisian_frs_prodi/'); ?>" >Sumber Data</a>  
                            * Menu : Pembelajaran -> FRS -> Prodi
                        </div>
				</div>
			</div>
			<div class='col-lg-8 col-xlg-6 mb-4'>
                <div class="card">
                    Pengisian KRS Perperiode
						<div class="card-block">
                            <div id="main-period" style="width:100%; height:400px;"><i class="fa fa-spinner fa-spin fa-5x fa-fw"></i></div>
                            <a class="btn btn-primary" href="<?php echo base_url('baak/pembelajaran/rekap_aktivitas_mahasiswa'); ?>" >Sumber Data</a>  
                            * Menu : Pembelajaran -> Rekap Aktivitas Mahasiswa
                        </div>
				</div>
			</div>

			<div class='col-lg-6 col-xlg-6'>


			</div>
		</div>

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
                                            <div class="user-img"> <span class="round"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span></div>
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
                <div class="card card-outline-inverse">
                    <div class="card-header">
                                <h4 class="m-b-0 text-white">Sistem Informasi Akademik </h4></div>
                            <div class="card-block">
                                <h3 class="card-title">STMIK ROSMA</h3>
                                <p class="card-text"><?= $data_informasi_text->text ?>.</p>
                                <a href="<?php echo base_url('welcome/arp'); ?>" class="btn btn-primary">Academic Regulation</a>
                                <a href="<?php echo base_url('welcome/rdd'); ?>" class="btn btn-primary">Regulation Decree and Documentation</a>
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
<script src="https://cdn.jsdelivr.net/npm/echarts@5.4.0/dist/echarts.min.js"></script>

<script>
var chart = echarts.init(document.getElementById('main-krs'));
var chart2 = echarts.init(document.getElementById('main-period'));

    $.getJSON('<?php echo base_url(); ?>welcome/databaak_dashboard', function(datas){
        document.getElementById("dikti_prodi").innerHTML = datas.dikti_prodi;
        document.getElementById("mahasiswa").innerHTML = datas.mahasiswa;
        document.getElementById("dosen").innerHTML = datas.dosen;
        document.getElementById("periode").innerHTML = datas.periode.id_periode;
        option = {
            title: {
                text: 'Pengisian KRS '+datas.periode.id_periode,
                left: 'right'
            },
            tooltip: {
                trigger: 'item'
            },
            legend: {
                orient: 'vertical',
                left: 'left'
            },
            series: [
                {
                name: 'Access From',
                type: 'pie',
                radius: '50%',
                data: datas.krs,
                emphasis: {
                    itemStyle: {
                    shadowBlur: 10,
                    shadowOffsetX: 0,
                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
                }
            ]
        };
        chart.setOption(option);
    });


    $.getJSON('<?php echo base_url(); ?>welcome/databaak_dashboard_periode', function(datas){
        option2 = {
            tooltip: {
                trigger: 'axis',
                axisPointer: {
                type: 'shadow'
                }
            },
            legend: {},
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            xAxis: [
                {
                type: 'category',
                data: datas.periode
                }
            ],
            yAxis: [
                {
                type: 'value'
                }
            ],
            series: datas.series
        };
        chart2.setOption(option2);
    });

</script>


