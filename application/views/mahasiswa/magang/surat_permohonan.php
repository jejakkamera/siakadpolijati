<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Surat Permohonan Magang</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.3.0/paper.css" />
	<!-- <link rel="stylesheet" href="dist/paper.css" /> -->

	<style>
		@page {
			size: A5;
		}

		.header {
			display: flex;
			flex-direction: row;
			gap: 5px;
			justify-content: flex-start;
			align-items: flex-start;
			margin-left: 10px;
			margin-right: 10px;
		}

		.header-text {
			text-align: center;
			margin-top: -10px;
		}

		.margin-bottom {
			margin-bottom: -18px;
		}

		.divider {
			border-color: black;
			margin-top: -5px;
		}

		.contract-title {
			font-weight: bold;
			text-transform: capitalize;
			text-align: right;
		}

		.contract-content {
			margin-left: 15px;
			margin-right: 15px;
		}

	</style>
</head>

<body class="A4">
	<section class="sheet padding-10mm">
		<article>
			<div class="header">
				<!-- <img src="<?php echo base_url('assets/images/ubp-logo.jpg'); ?>" width="110" /> -->
				<div class="header-text">
					<img src="<?= base_url('assets\kop_surat_aktif.png') ?>" width="100%" alt="">
					<!-- <h3 class="margin-bottom">UNIVERSITAS BUANA PERJUANGAN KARAWANG</h3>
                    <h4 class="margin-bottom">
                        LEMBAGA PENELITIAN DAN PENGABDIAN KEPADA MASYARAKAT
                    </h4>
                    <h4 class="margin-bottom">TERAKREDITASI BAN-PT dan LAM-PTKes</h4>
                    <p class="margin-bottom">
                        Jl. H.S Ronggowaluyo Telukjambe Timur Karawang 41361 Tel./Fax.
                        (0267) 8403140
                    </p>
                    <p>Site: http://ubpkarawang.ac.id Email: info@ubpkarawang.ac.id</p> -->
				</div>
			</div>
			<!-- <hr class="divider" /> -->
			<div style="text-align:right;">
				<p class="margin-bottom">Karawang, <?= $tanggal ?></p>
			</div>
			<br>
			<br>
			<div class="contract-content">

				<table>
					<tr>
						<td style="width: 50px; vertical-align: top">
							No
						</td>
						<td style="width: 300px; text-align: justify">
							: <?= $nomer_surat ?>
						</td>
					</tr>
					<tr>
						<td style="width: 50px; vertical-align: top">
							Lamp
						</td>
						<td style="width: 300px; text-align: justify">
							: 1
						</td>
					</tr>
					<tr>
						<td style="width: 50px; vertical-align: top">
							Hal
						</td>
						<td style="width: 300px; text-align: justify">
							: <b>Permohonan
								<?= ($data->tujuan == 'Magang') ? 'Magang' : 'Praktek Kerja Lapangan' ?>

							</b>
						</td>
					</tr>
				</table>
				<p>
					Kepada Yth.
					<br>
					<b>
						<?= $data->persone ?>. <?= $data->nama_penerima ?>
						<br>
						<?= $data->jabatan_penerima ?>
						<br>
						Di
						<br>
						<?= $data->nama_perusahaan ?>
					</b>
				</p>
				<p style='text-align:justify'>Dengan hormat,
				</p>
				<p style="text-indent:30px;text-align:justify">
					STMIK Rosma merupakan institusi Pendidikan yang bertujuan untuk menciptakan
					lulusan profesional dan terampil di bidangnya, serta mampu mandiri dan bersaing di tingkat
					nasional. Untuk mewujudkan hal tersebut maka dari itu setiap mahasiswa tingkat akhir di
					wajibkan mengikuti <?= ($data->tujuan == 'Magang') ? 'Magang' : 'Praktek Kerja Lapangan (PKL)' ?>
					sesuai dengan kurikulum dan untuk
					menambah pengetahuan dan wawasan agar mereka betul-betul siap pakai.
				</p>
				<p style="text-indent:30px;text-align:justify">
					Sehubungan dengan itu, kami mohon kepada Bapak/Ibu Pimpinan untuk dapat
					menerima mahasiswa kami melaksanakan
					<?= ($data->tujuan == 'Magang') ? 'Magang' : 'Praktek Kerja Lapangan (PKL)' ?> untuk tahun
					Akademik <?= $periode ?> pada perusahaan yang Bapak/Ibu Pimpin.
				</p>
				<p style="text-indent:30px;text-align:justify">
					Demikian surat ini kami sampaikan kepada Bapak/Ibu Pimpinan. Atas bantuan dan
					kerjasama yang baik kami ucapkan terimakasih.
				</p>

				<br>
				<br>

				<table>
					<tr>
						<td>
							<br>
							<center>
								<img src="<?= $qr_code ?>" width="130" alt="">
							</center>
							<br>
							<small><?= $uuid ?></small>
						</td>
						<td></td>
						<td>
							<div style="margin-right:20px;margin-left:200px">

								<table>
									<tr>
										<td>Hormat Kami</td>
									</tr>
									<tr>
										<td>
											<b>
												<?= $pengesahan->jabatan ?>
											</b>
										</td>
									</tr>
								</table>

								<table>
									<tr>
										<td>
											<img width="160" src="<?= base_url($pengesahan->ttd) ?>"
												alt="">
										</td>
									</tr>
									<tr>
										<b>
											<td><?= $pengesahan->nama ?></td>
										</b>
									</tr>
									<tr>
										<b>
											<td><?= $pengesahan->kode ?></td>
										</b>
									</tr>
								</table>
							</div>

						</td>
					</tr>
				</table>
			</div>
		</article>
	</section>

	<section class="sheet padding-10mm">
		<article>
			<div class="header">
				<!-- <img src="<?php echo base_url('assets/images/ubp-logo.jpg'); ?>" width="110" /> -->
				<div class="header-text">
					<img src="<?= base_url('assets\kop_surat_aktif.png') ?>" width="100%" alt="">
					<!-- <h3 class="margin-bottom">UNIVERSITAS BUANA PERJUANGAN KARAWANG</h3>
                    <h4 class="margin-bottom">
                        LEMBAGA PENELITIAN DAN PENGABDIAN KEPADA MASYARAKAT
                    </h4>
                    <h4 class="margin-bottom">TERAKREDITASI BAN-PT dan LAM-PTKes</h4>
                    <p class="margin-bottom">
                        Jl. H.S Ronggowaluyo Telukjambe Timur Karawang 41361 Tel./Fax.
                        (0267) 8403140
                    </p>
                    <p>Site: http://ubpkarawang.ac.id Email: info@ubpkarawang.ac.id</p> -->
				</div>
			</div>
			<!-- <hr class="divider" /> -->
			<div style="text-align:CENTER;">
				<b>
					<p class="margin-bottom">DAFTAR NAMA MAHASISWA</p>
					<br>
					<p>YANG MENGAJUKAN <?= ($data->tujuan == 'Magang') ? 'MAGANG' : 'PRAKTEK KERJA LAPANGAN' ?> </p>
				</b>
			</div>
			<br>
			<br>
			<div class="contract-content">

				<table>
					<tr>
						<td style="width: 150px; vertical-align: top">
							NAMA
						</td>
						<td style="width: 300px; text-align: justify">
							: <?= $nama ?>
						</td>
					</tr>
					<tr>
						<td style="width: 150px; vertical-align: top">
							NIM
						</td>
						<td style="width: 300px; text-align: justify">
							: <?= $nim ?>
						</td>
					</tr>
					<tr>
						<td style="width: 150px; vertical-align: top">
							PROGRAM STUDI
						</td>
						<td style="width: 300px; text-align: justify">
							: <?= $prodi ?>
						</td>
					</tr>
					<tr>
						<td style="width: 150px; vertical-align: top">
							JENJANG
						</td>
						<td style="width: 300px; text-align: justify">
							: <?= $jenjang ?>
						</td>
					</tr>
					<tr>
						<td style="width: 150px; vertical-align: top">
							SEMESTER
						</td>
						<td style="width: 300px; text-align: justify">
							: <?= $semester ?>
						</td>
					</tr>

				</table>


			</div>
		</article>
	</section>





	<script>
		window.print()

	</script>
</body>

</html>
