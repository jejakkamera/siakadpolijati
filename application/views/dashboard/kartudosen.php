<!DOCTYPE html>
<html>
<head>
	<title>Kartu Dosen</title>
	<style>
		body {
			background-size: cover;
			background-repeat: no-repeat;
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}
		.card {
            background-image: url('<?php echo base_url('assets/kartuMHS.png'); ?>'); /*ganti dengan lokasi file background yang digunakan*/
			background-size: 100% 100%;
            width: 7in;
			height: 4in;
			margin: 0.5in;
			border-radius: 10px;
			background-color: white;
			/* box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); */
			display: flex;
		}
		.card__photo {
            width: 1.5in;
            height: 2in;

            margin-left:1.2in;
            margin-top:1in;
            margin-right: 0.5in;
            border-radius: 10px;
            border: 1px solid white;
            box-shadow: 0 0 1px rgba(0,0,0,0.5);
			/* flex: 0 0 30%; */
			/* background-color: #f2f2f2; */
			/* border-top-left-radius: 10px;
			border-bottom-left-radius: 10px; */
			background-image: url('<?php echo base_url('assets/img_mahasiswa/'.$data_profile['foto']); ?>'); /*ganti dengan lokasi file foto mahasiswa*/
			background-size: cover;
			background-position: center;
			
		}
		.judul {
			font-weight:bold;
			position: absolute;
            font-size: 25px;
            margin-left:1.2in;
            margin-top:0.2in;
		}
		.card__details {
			flex: 1;
			padding: 0.1in;
			display: flex;
			flex-direction: column;
			justify-content: center;
			font-weight:bold;
			/* font-size: large; */
		}
		.card__details h1 {
			font-size: 30px;
			margin: 0;
		}
		.card__details p {
			font-size: 20px;
			margin: 0;
		}
        .card__details {
			flex: 1;
			padding: 0.1in;
			display: flex;
			flex-direction: column;
			justify-content: center;
			font-weight:bold;
			/* font-size: large; */
		}
	</style>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
	<script>
		function generatePDF() {
            window.jsPDF = window.jspdf.jsPDF
			const doc = new jsPDF({
				orientation: "landscape",
				unit: "in",
				format: [7, 4]
			});
			const card = document.querySelector(".card");
			html2canvas(card).then(function(canvas) {
				const imgData = canvas.toDataURL('image/jpeg');
				doc.addImage(imgData, 'JPEG', 0, 0, 7, 4);
				doc.save('kartu_Dosen.pdf');
			});
		}
	</script>
</head>
<body>
    
	<div class="card">
    <div class="judul">Kartu Dosen</div>
		<div class="card__photo"></div>
		
		<div class="card__details">
			<div class="table">
				<table class="table">
					<tbody>
						<tr>
							<td>NIDN / NIP</td>
							<td>:</td>
							<td><?= $data_profile['nidn'] ?>/<?= $data_profile['nip'] ?></td>
						</tr>
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td><?= $data_profile['nama'] ?></td>
						</tr>
                        <tr>
							<td>Email</td>
							<td>:</td>
							<td><?= $data_profile['email'] ?></td>
						</tr>
						<tr>
							<td>Homebase</td>
							<td>:</td>
							<td><?= $data_profile['nama_homebase'] ?></td>
						</tr>
						
						
					</tbody>
				</table>
			</div>
		</div>
		</div>
	</div>
	<button onclick="generatePDF()">Download PDF</button>
	<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
</body>
</html>
