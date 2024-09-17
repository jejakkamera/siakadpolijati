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
            <div class="col-md-8">
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
		   

            <div class="col-md-4">
                        <div class="card">
                            <div class="row">
                                <div class="col-12">
                                    <div class="social-widget">
                                        <div class="soc-header box-facebook"> <h5 class="m-b-0 text-white">Periode Semester</h5>  <hr> <?= $periode['nama_id_periode']; ?> 
                                        <br> <h6 class="m-b-0 text-white"> Pengisian FRS : <?= date('j F, Y', strtotime($periode['tgl_pengisian']));  ?> - <?= date('j F, Y', strtotime($periode['tgl_penutupan']));  ?> </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-block">
                                <div class="d-flex flex-row">
                                    <div class="" id='foto' ><i class="fa fa-spinner fa-spin"></i></div>
                                    <div class="p-l-20">
                                        <h3 class="font-medium" id="nama" ><i class="fa fa-spinner fa-spin"></i></h3>
                                        <h6 id='nim'><i class="fa fa-spinner fa-spin"></i></h6>
                                        <h6 id="status_mahasiswa"><i class="fa fa-spinner fa-spin"></i></h6>
                                        <p id='kartu_mhs'></p>
                                    </div>
                                </div>
                                <div class="row m-t-40">
                                    <div class="col-3 b-r">
                                        <h2 class="font-light" id="total_sks"><i class="fa fa-spinner fa-spin"></i></h2>
                                        <h6>Total SKS</h6></div>
                                    <div class="col-3 b-r">
                                        <h2 class="font-light" id="ipk"><i class="fa fa-spinner fa-spin"></i></h2>
                                        <h6>IPK</h6></div>
                                    <div class="col-6">
                                        <h3 class="font-light" id="ukt">Rp. <i class="fa fa-spinner fa-spin"></i></h2>
                                        <h6>Sisa UKT</h6></div>
                                </div>
                            </div>
                                
                        </div>
                        
                </div>
                <div class="col-md-4">
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
                        <div class="card">
								<div class="card-block">
									<div id="main" style="width:100%; height:400px;"><i class="fa fa-spinner fa-spin fa-5x fa-fw"></i></div>
								</div>
							</div>
						</div>
            </div>

		<div class="row">
        
           
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

<script src="https://cdn.jsdelivr.net/npm/echarts@5.4.0/dist/echarts.min.js"></script>

<script>
    
var chart = echarts.init(document.getElementById('main'));

    $.getJSON('<?php echo base_url(); ?>mahasiswa/profile/ips_mhs', function(data_ips){
        option = {
        title: {
            text: 'Hasil Persemester'
        },
        tooltip : {
            trigger: 'axis',
        },
        toolbox: {
            show : true,
            feature : {
				dataView: { readOnly: false },
                magicType: {show: true, type: ['line', 'bar']},
                restore : {show: true},
                saveAsImage : {show: true}
				
            }
        },
        color: ["#55ce63", "#009efb", "#f62d51", "#ffbc34", "#2f3d4a", "#009efb", "#f62d51", "#ffbc34", "#2f3d4a"],
        calculable : true,
        legend: {
            data:['IPS','SKS']
        },
        xAxis: [
            {
                type : 'category',
                boundaryGap: false,
                data : data_ips.periode
            }
        ],
        yAxis: [
            {
                type : 'value',
				name : '.',
            }
        ],
       
        series : [
                    {
                        name: 'IPS',
                        type: 'line',
						"markLine": {
							"data": [
								{
									"type": "average",
									"name": "Average"
								}
							]
						},
                        data: data_ips.ips
                    },
                    {
                        name: 'SKS',
                        type: 'line',
						"markLine": {
							"data": [
								{
									"type": "average",
									"name": "Average"
								}
							]
						},
                        data: data_ips.total_sks
                    },
                ]
    };
    chart.setOption(option);
    });

    $.getJSON('<?php echo base_url(); ?>mahasiswa/profile/data_dashboard', function(datas){
        
        document.getElementById("ukt").innerHTML = "Rp. "+datas.ukt;
        document.getElementById("total_sks").innerHTML = datas.ipk_mhs.total_sks;
        let num = (datas.ipk_mhs.kumulatif/datas.ipk_mhs.total_sks);
        let n = num.toFixed(2);
        document.getElementById("ipk").innerHTML = n;
        document.getElementById("nama").innerHTML = datas.data_mahasiswa.nama;
        document.getElementById("nim").innerHTML = datas.data_mahasiswa.nim+'-'+datas.data_mahasiswa.nama_program_studi;
        document.getElementById("status_mahasiswa").innerHTML = 'Status Mahasiswa : '+datas.data_mahasiswa.status_mahasiswa;
        let url ='<?php echo base_url()?>';
        document.getElementById("foto").innerHTML = '<img src="'+url+'assets/img_mahasiswa/'+datas.data_mahasiswa.foto+'" alt="user" class="img-circle" width="100">';
        document.getElementById("kartu_mhs").innerHTML = '<a class="btn btn-success"  href="'+url+'mahasiswa/profile/kartu_mhs/'+datas.data_mahasiswa.nim+'"  target="_blank" ><i class="fa fa-id-card"></i> Kartu Mahasiswa</a>';


    });
</script>
