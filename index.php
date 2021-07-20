

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./assets/css/dashboard.css" rel="stylesheet">

	<style>
		.table th, .table td {
			white-space: nowrap;
		}
		.table-xs td, .table-xs th {
			padding: .3rem;
			font-size: 10px;
		}

	</style>

  </head>

  <body style="font-family: 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif">
	<div id="_top_navbar"></div>

    <div class="container-fluid">
      <div class="row">
		<div id="_side_navbar"></div>

		<!-- Editable table -->
        <main id="contentDashboard" role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

			<div class="card">
				<div class="card-body">

					<!-- Table for Application -->
					<div id="table-application" class="table-editable">
						<span class="table-add float-right mb-3 mr-2" >
							<a href="#!" class="text-success" >
								<i class="fas fa-plus fa-2x" aria-hidden="true"></i></a >
						</span>
						<h3>Table for Application</h3>

						<table class="table table-bordered table-responsive-md table-sm text-center table-striped">
							<thead>
								<tr>
									<th class="text-center position-sticky"></th>
									<th class="text-center">Cumulative</th>
									<th class="text-center">Week 1</th>
									<th class="text-center">Week 2</th>
									<th class="text-center">Week 3</th>
									<th class="text-center">Week 4</th>
									<th class="text-center">Week 5</th>
									<th class="text-center">Week 6</th>
									<th class="text-center">Week 7</th>
									<th class="text-center">Week 8</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								<td class="pt-3-half position-sticky">Total Number of Application</td>
								<td class="pt-3-half">190</td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								</tr>
								<tr>
								<td class="pt-3-half position-sticky">Number of Application Approved</td>
								<td class="pt-3-half">60</td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								</tr>
								<tr>
								<td class="pt-3-half position-sticky">Number of Application In Rejected</td>
								<td class="pt-3-half">35</td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								</tr>
								<tr>
								<td class="pt-3-half position-sticky">Number of Application In Process</td>
								<td class="pt-3-half">95</td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								</tr>
							</tbody>
						</table>	
					</div>

					<!-- Table for derivative analytic of applications -->
					<div id="table-derivative-analytic">
						<h3>Table for Derivative analytic of applications</h3>
						<span class="table-add float-right mb-3 mr-2" >
							<a href="#!" class="text-success" >
								<i class="fas fa-plus fa-2x" aria-hidden="true"></i></a >
						</span>
						<table class="table table-bordered table-responsive-md table-sm text-center table-striped">
							<thead>
								<tr>
									<th class="text-center"></th>
									<th class="text-center">Cumulative</th>
									<th class="text-center">Week 1</th>
									<th class="text-center">Week 2</th>
									<th class="text-center">Week 3</th>
									<th class="text-center">Week 4</th>
									<th class="text-center">Week 5</th>
									<th class="text-center">Week 6</th>
									<th class="text-center">Week 7</th>
									<th class="text-center">Week 8</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								<td class="pt-3-half">Approved / Total <br>(percentage)</td>
								<td class="pt-3-half">190</td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								</tr>
								<tr>
								<td class="pt-3-half">Process / total <br>(percentage)</td>
								<td class="pt-3-half">60</td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								</tr>
							</tbody>
						</table>	

					</div>

					<!-- Table for budget-->
					<div id="table-budget">

						<h3>Table for Budget</h3>
						<span class="table-add float-right mb-3 mr-2" >
							<a href="#!" class="text-success" >
								<i class="fas fa-plus fa-2x" aria-hidden="true"></i>
								</a>
						</span>
						<table class="table table-bordered table-responsive-md table-sm text-center">
							<thead>
								<tr>
									<th class="text-center table-secondary">Amount of money dispersed</th>
									<th class="text-center table-secondary">Total</th>
									<th class="text-center table-secondary">Starting</th>
									<th class="text-center table-secondary">Cumulative</th>
									<th class="text-center">Week 1</th>
									<th class="text-center">Week 2</th>
									<th class="text-center">Week 3</th>
									<th class="text-center">Week 4</th>
									<th class="text-center">Week 5</th>
									<th class="text-center">Week 6</th>
									<th class="text-center">Week 7</th>
									<th class="text-center">Week 8</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								<td class="pt-3-half table-secondary">Program Bakul Makanan</td>
								<td class="pt-3-half table-secondary">3.2</td>
								<td class="pt-3-half table-secondary"></td>
								<td class="pt-3-half table-secondary">1.1</td>
								<td class="pt-3-half" contenteditable="true"></td>
								<td class="pt-3-half" contenteditable="true"></td>
								<td class="pt-3-half" contenteditable="true"></td>
								<td class="pt-3-half" contenteditable="true"></td>
								<td class="pt-3-half" contenteditable="true"></td>
								<td class="pt-3-half" contenteditable="true"></td>
								<td class="pt-3-half" contenteditable="true"></td>
								<td class="pt-3-half" contenteditable="true"></td>
								</tr>
								<tr>
								<td class="pt-3-half table-secondary">Bantuan Khas OKU</td>
								<td class="pt-3-half table-secondary">1.5</td>
								<td class="pt-3-half table-secondary"></td>
								<td class="pt-3-half table-secondary">0.7</td>
								<td class="pt-3-half" contenteditable="true"></td>
								<td class="pt-3-half" contenteditable="true"></td>
								<td class="pt-3-half" contenteditable="true"></td>
								<td class="pt-3-half" contenteditable="true"></td>
								<td class="pt-3-half" contenteditable="true"></td>
								<td class="pt-3-half" contenteditable="true"></td>
								<td class="pt-3-half" contenteditable="true"></td>
								<td class="pt-3-half" contenteditable="true"></td>
								</tr>
								<tr>
								<td class="pt-3-half table-dark">Total</td>
								<td class="pt-3-half table-dark">4.7</td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark">1.8</td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								</tr>
							</tbody>
						</table>

					</div>

					<!-- Table for applicants -->
					<div id="table for applicants">

						<h3>Table for applicants</h3>
						<span class="table-add float-right mb-3 mr-2"
						><a href="#!" class="text-success"
							><i class="fas fa-plus fa-2x" aria-hidden="true"></i></a
						></span>
						<table class="table table-bordered table-responsive-md table-sm text-center table-striped">
							<thead>
								<tr>
									<th class="text-center">Application ID</th>
									<th class="text-center">Initiative with filter</th>
									<th class="text-center">Date created</th>
									<th class="text-center">Name</th>
									<th class="text-center">IC</th>
									<th class="text-center">Tel</th>
									<th class="text-center">Email</th>
									<th class="text-center">Status</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								<td class="pt-3-half">1</td>
								<td class="pt-3-half">Program Bakul</td>
								<td class="pt-3-half">17/07/2021</td>
								<td class="pt-3-half">Encik Johari</td>
								<td class="pt-3-half">911911-05-1234</td>
								<td class="pt-3-half">0133333333</td>
								<td class="pt-3-half">johari@gmail.com</td>
								<td class="pt-3-half">Active</td>
								</tr>
								<tr>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								<td class="pt-3-half"></td>
								</tr>
							</tbody>
						</table>	

					</div>

					<div id="table-data-permohonan-mingguan-super-admin">

						<h3>DATA PERMOHONAN MINGGUAN</h3>
						<span class="table-add float-right mb-3 mr-2" >
							<a href="#" class="text-success" >
								<i class="fas fa-plus fa-2x" aria-hidden="true"></i>
								</a>
						</span>

						<?php	
							/*$datas = [
								['ST1',	'Program Bakul Makanan',	  '3,280,000.00',	 'ADA',	  '0.45',	  '1,480,000.00',	  '1,800,000.00'],
								['ST1',	'Khairat Kematian',	  '1,500,000.00',	 'ADA',	  '0.05',	  '70,000.00',	  '1,430,000.00'],
								['ST1',	'Bantuan Khas OKU',	  '600,000.00',	 'ADA',	  '0.02',	  '10,000.00',	  '590,000.00'],
								['ST1',	'Moratorium Usahawan Hijrah',	  '11,350,000.00',	 'HABIS',	  '1.00',	  '11,350,000.00',	  '-'],
								['ST1',	'Pembangunan Hotline aduan keganasan rumahtangga',	  '100,000.00',	 'HABIS',	  '1.00',	  '100,000.00',	  '-'],
								['ST1',	'Penangguhan bayaran balik pinjaman TKWBNS',	  '1,300,000.00',	 'HABIS',	  '1.00',	  '1,300,000.00',	  '-'],
								['ST2',	'Program Tuisyen Rakyat Selangor',	  '2,100,000.00',	 'HABIS',	  '1.00',	  '2,100,000.00',	  '-'],
								['ST1',	'Portal ePTRS',	  '500,000.00',	 'ADA',	  '0.60',	  '300,000.00',	  '200,000.00'],
								['ST1',	'Penangguhan Sewa PPR & Smart Sewa',	  '900,000.00',	 'HABIS',	  '1.00',	  '900,000.00',	  '-'],
								['ST1',	'Bantuan Khas Pengusaha & Guru Tadika',	'',	 'HABIS',	 '#DIV/0!',	  '101,000.00',	'- 101,000.00'], 
								['ST1',	'Penangguhan bayaran pinjaman biasiswa YS',	  '1,000,000.00',	 'HABIS',	  '1.00',	  '1,000,000.00',	  '-'],
								['ST1',	'Bantuan mahasiswa Selangor',	  '1,500,000.00',	 'ADA',	  '0.40',	  '600,000.00',	  '900,000.00'],
								['ST1',	'Bantuan Kewangan Sektor Pelancongan',	  '2,550,000.00',	 'ADA',	  '0.39',	  '1,000,000.00',	  '1,550,000.00'],
								['ST1',	'Skim Internet Selangor SISM40',	'',	 'HABIS',	 '#DIV/0!',	  '-',	  '-'],
								['ST1',	'Data Internet Selangor',	  '17,500,000.00',	 'ADA',	  '0.09',	  '1,500,000.00',	  '16,000,000.00'],
								['ST2',	'Selangor Advance',	  '200,000,000.00',	 'ADA',	  '0.04',	  '8,000,000.00',	  '192,000,000.00'],
								['ST2',	'Program Jaminan Bekalan Makanan',	  '10,000,000.00',	 'ADA',	  '0.00',	  '1,000.00',	  '9,999,000.00'],
								['ST2',	'Program Agro Prihatin',	  '1,500,000.00',	 'ADA',	  '0.47',	  '700,000.00',	  '800,000.00'],
								['ST2',	'Program Peningkatan Hasil',	  '1,930,000.00',	 'HABIS',	  '1.00',	  '1,930,000.00',	  '-'],
								['ST2',	'Pinjaman Hijrah Selangor',	  '80,000,000.00',	 'ADA',	  '0.19',	  '15,000,000.00',	  '65,000,000.00'],
								['ST2',	'PLATS Selangor',	'',	 'HABIS',	 '#DIV/0!',	  '500,000.00',	'- 500,000.00'],
								['ST3',	'Saringan Komuniti C19',	  '10,700,000.00',	 'ADA',	  '0.07',	  '700,000.00',	  '10,000,000.00'],
								['ST3',	'Home Assessment Tool',	  '1,250,000.00',	 'ADA',	  '-  ',	  '-  ',	  '1,250,000.00'],
								['ST3',	'Rebat Pengangkutan Pengambilan Vaksin',	  '1,000,000.00',	 'ADA',	  '0.70',	  '700,000.00',	  '300,000.00'],
								['ST3',	'Kawalan Kesihatan Tempat Kerja',	  '500,000.00',	 'HABIS',	  '1.00',	  '500,000.00',	  '-  '],
								['ST3',	'Program Vaksinasi C19 Selangor',	  '200,000,000.00',	 'ADA',	  '0.04',	  '7,000,000.00',	  '193,000,000.00'],
							];*/
							$datas = [

								['strategi'=>'ST1',	'program'=>'Program Bakul Makanan',	  'peruntukan'=>'3,280,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.45',	  'kumulatif-jumlah'=>'1,480,000.00',	  'kumulatif-baki'=>'1,800,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Khairat Kematian',	  'peruntukan'=>'1,500,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.05',	  'kumulatif-jumlah'=>'70,000.00',	  'kumulatif-baki'=>'1,430,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Bantuan Khas OKU',	  'peruntukan'=>'600,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.02',	  'kumulatif-jumlah'=>'10,000.00',	  'kumulatif-baki'=>'590,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Moratorium Usahawan Hijrah',	  'peruntukan'=>'11,350,000.00',	 'semak'=>'HABIS',	  'pemberian-kumulatif'=>'1.00',	  'kumulatif-jumlah'=>'11,350,000.00',	  'kumulatif-baki'=>'-', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Pembangunan Hotline aduan keganasan rumahtangga',	  'peruntukan'=>'100,000.00',	 'semak'=>'HABIS',	  'pemberian-kumulatif'=>'1.00',	  'kumulatif-jumlah'=>'100,000.00',	  'kumulatif-baki'=>'-', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Penangguhan bayaran balik pinjaman TKWBNS',	  'peruntukan'=>'1,300,000.00',	 'semak'=>'HABIS',	  'pemberian-kumulatif'=>'1.00',	  'kumulatif-jumlah'=>'1,300,000.00',	  'kumulatif-baki'=>'-', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST2',	'program'=>'Program Tuisyen Rakyat Selangor',	  'peruntukan'=>'2,100,000.00',	 'semak'=>'HABIS',	  'pemberian-kumulatif'=>'1.00',	  'kumulatif-jumlah'=>'2,100,000.00',	  'kumulatif-baki'=>'-', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Portal ePTRS',	  'peruntukan'=>'500,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.60',	  'kumulatif-jumlah'=>'300,000.00',	  'kumulatif-baki'=>'200,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Penangguhan Sewa PPR & Smart Sewa',	  'peruntukan'=>'900,000.00',	 'semak'=>'HABIS',	  'pemberian-kumulatif'=>'1.00',	  'kumulatif-jumlah'=>'900,000.00',	  'kumulatif-baki'=>'-', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Bantuan Khas Pengusaha & Guru Tadika',	'peruntukan'=>'',	 'semak'=>'HABIS',	 'pemberian-kumulatif'=>'#DIV/0!',	  'kumulatif-jumlah'=>'101,000.00',	'kumulatif-baki'=>'- 101,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Penangguhan bayaran pinjaman biasiswa YS',	  'peruntukan'=>'1,000,000.00',	 'semak'=>'HABIS',	  'pemberian-kumulatif'=>'1.00',	  'kumulatif-jumlah'=>'1,000,000.00',	  'kumulatif-baki'=>'-', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Bantuan mahasiswa Selangor',	  'peruntukan'=>'1,500,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.40',	  'kumulatif-jumlah'=>'600,000.00',	  'kumulatif-baki'=>'900,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Bantuan Kewangan Sektor Pelancongan',	  'peruntukan'=>'2,550,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.39',	  'kumulatif-jumlah'=>'1,000,000.00',	  'kumulatif-baki'=>'1,550,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Skim Internet Selangor SISM40',	'peruntukan'=>'',	 'semak'=>'HABIS',	 'pemberian-kumulatif'=>'#DIV/0!',	  'kumulatif-jumlah'=>'-',	  'kumulatif-baki'=>'-', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Data Internet Selangor',	  'peruntukan'=>'17,500,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.09',	  'kumulatif-jumlah'=>'1,500,000.00',	  'kumulatif-baki'=>'16,000,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST2',	'program'=>'Selangor Advance',	  'peruntukan'=>'200,000,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.04',	  'kumulatif-jumlah'=>'8,000,000.00',	  'kumulatif-baki'=>'192,000,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST2',	'program'=>'Program Jaminan Bekalan Makanan',	  'peruntukan'=>'10,000,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.00',	  'kumulatif-jumlah'=>'1,000.00',	  'kumulatif-baki'=>'9,999,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST2',	'program'=>'Program Agro Prihatin',	  'peruntukan'=>'1,500,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.47',	  'kumulatif-jumlah'=>'700,000.00',	  'kumulatif-baki'=>'800,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST2',	'program'=>'Program Peningkatan Hasil',	  'peruntukan'=>'1,930,000.00',	 'semak'=>'HABIS',	  'pemberian-kumulatif'=>'1.00',	  'kumulatif-jumlah'=>'1,930,000.00',	  'kumulatif-baki'=>'-', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST2',	'program'=>'Pinjaman Hijrah Selangor',	  'peruntukan'=>'80,000,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.19',	  'kumulatif-jumlah'=>'15,000,000.00',	  'kumulatif-baki'=>'65,000,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST2',	'program'=>'PLATS Selangor',	'peruntukan'=>'',	 'semak'=>'HABIS',	 'pemberian-kumulatif'=>'#DIV/0!',	  'kumulatif-jumlah'=>'500,000.00',	'kumulatif-baki'=>'- 500,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST3',	'program'=>'Saringan Komuniti C19',	  'peruntukan'=>'10,700,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.07',	  'kumulatif-jumlah'=>'700,000.00',	  'kumulatif-baki'=>'10,000,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST3',	'program'=>'Home Assessment Tool',	  'peruntukan'=>'1,250,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'-  ',	  'kumulatif-jumlah'=>'-  ',	  'kumulatif-baki'=>'1,250,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST3',	'program'=>'Rebat Pengangkutan Pengambilan Vaksin',	  'peruntukan'=>'1,000,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.70',	  'kumulatif-jumlah'=>'700,000.00',	  'kumulatif-baki'=>'300,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST3',	'program'=>'Kawalan Kesihatan Tempat Kerja',	  'peruntukan'=>'500,000.00',	 'semak'=>'HABIS',	  'pemberian-kumulatif'=>'1.00',	  'kumulatif-jumlah'=>'500,000.00',	  'kumulatif-baki'=>'-  ', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST3',	'program'=>'Program Vaksinasi C19 Selangor',	  'peruntukan'=>'200,000,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.04',	  'kumulatif-jumlah'=>'7,000,000.00',	  'kumulatif-baki'=>'193,000,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']]
							];
						?>

						<table class="table table-bordered table-responsive text-center table-xs">
							<thead>
								<tr>
									<th class="text-center col-5"><br>Strategi</th>
									<th class="text-center"><br>Program</th>
									<th class="text-center"><br>Peruntukan (RM)</th>
									<th class="text-center"><br>Semak</th>
									<th class="text-center">% Pemberian<br>Kumulatif</th>
									<th class="text-center">Kumulatif<br>Jumlah diberikan (RM)</th>
									<th class="text-center">Kumulatif<br>Baki (RM)</th>
									<th class="text-center">Minggu 1 (5/7/21)<br>RM diberikan</th>
									<th class="text-center">Minggu 2 (12/7/21)<br>RM diberikan</th>
									<th class="text-center">Minggu 3 (19/7/21)<br>RM diberikan</th>
									<th class="text-center">Minggu 4 (26/7/21)<br>RM diberikan</th>
									<th class="text-center">Minggu 5 (2/8/21)<br>RM diberikan</th>
									<th class="text-center">Minggu 6 (9/8/21)<br>RM diberikan</th>
									<th class="text-center">Minggu 7 (16/8/21)<br>RM diberikan</th>
									<th class="text-center">Minggu 8 (23/8/21)<br>RM diberikan</th>
									<th class="text-center">Minggu 9 (30/8/21)<br>RM diberikan</th>
									<th class="text-center">Minggu 10 (6/9/21)<br>RM diberikan</th>
									<th class="text-center">Minggu 11 (13/9/21)<br>RM diberikan</th>
									<th class="text-center">Minggu 12 (20/9/21)<br>RM diberikan</th>
									<th class="text-center">Minggu 13 (27/9/21)<br>RM diberikan</th>
									<th class="text-center">Minggu 14<br>RM diberikan</th>
									<th class="text-center">Minggu 15<br>RM diberikan</th>
									<th class="text-center">Minggu 16<br>RM diberikan</th>
									<th class="text-center">Minggu 17<br>RM diberikan</th>
									<th class="text-center">Minggu 18<br>RM diberikan</th>
									<th class="text-center">Minggu 19<br>RM diberikan</th>
									<th class="text-center">Minggu 20<br>RM diberikan</th>
									<th class="text-center">Minggu 21<br>RM diberikan</th>
									<th class="text-center">Minggu 22<br>RM diberikan</th>
									<th class="text-center">Minggu 23<br>RM diberikan</th>
									<th class="text-center">Minggu 24<br>RM diberikan</th>
									<th class="text-center">Minggu 25<br>RM diberikan</th>
									<th class="text-center">Minggu 26<br>RM diberikan</th>
									<th class="text-center">Minggu 27<br>RM diberikan</th>
									<th class="text-center">Minggu 28<br>RM diberikan</th>
									<th class="text-center">Minggu 29<br>RM diberikan</th>
									<th class="text-center">Minggu 30<br>RM diberikan</th>
									<th class="text-center">Minggu 31<br>RM diberikan</th>
									<th class="text-center">Minggu 32<br>RM diberikan</th>
									<th class="text-center">Minggu 33<br>RM diberikan</th>
									<th class="text-center">Minggu 34<br>RM diberikan</th>
									<th class="text-center">Minggu 35<br>RM diberikan</th>
									<th class="text-center">Minggu 36<br>RM diberikan</th>
									<th class="text-center">Minggu 37<br>RM diberikan</th>
									<th class="text-center">Minggu 38<br>RM diberikan</th>
									<th class="text-center">Minggu 39<br>RM diberikan</th>
									<th class="text-center">Minggu 40<br>RM diberikan</th>
								</tr>
							</thead>
							<tbody>
								<?php for($i=0; $i<count($datas); $i++):?>
								<tr>
								<td class="pt-3-half"><?= $datas[$i]['strategi']?></td>
								<td class="pt-3-half text-left"><?= $datas[$i]['program']?></td>
								<td class="pt-3-half text-right"><?= $datas[$i]['peruntukan']?></td>
								<td class="pt-3-half"><?= $datas[$i]['semak']?></td>
								<td class="pt-3-half"><?= $datas[$i]['pemberian-kumulatif']?></td>
								<td class="pt-3-half text-right"><?= $datas[$i]['kumulatif-jumlah']?></td>
								<td class="pt-3-half text-right"><?= $datas[$i]['kumulatif-baki']?></td>
								<?php for($j=0; $j<count($datas[$i]['minggu']); $j++):?>
								<td class="pt-3-half text-right" contenteditable="true"><?= $datas[$i]['minggu'][$i]?></td>
								<?php endfor;?>
								</tr>
								<?php endfor;?>

								<tr>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark text-right">Total</td>
								<td class="pt-3-half table-dark text-right">551,060,000.00</td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark">0.10</td>
								<td class="pt-3-half table-dark text-right">56,842,000.00</td>
								<td class="pt-3-half table-dark text-right">494,218,000.00</td>
								<td class="pt-3-half table-dark text-right">46,685,000.00</td>
								<td class="pt-3-half table-dark text-right">10,157,000.00</td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								</tr>
							</tbody>
						</table>

					</div>

					<div id="table-data-permohonan-mingguan-super-admin">

						<h3>DATA PERMOHONAN MINGGUAN</h3>
						<span class="table-add float-right mb-3 mr-2" >
							<a href="#" class="text-success" >
								<i class="fas fa-plus fa-2x" aria-hidden="true"></i>
								</a>
						</span>

						<?php	
							/*$datas = [
								['ST1',	'Program Bakul Makanan',	  '3,280,000.00',	 'ADA',	  '0.45',	  '1,480,000.00',	  '1,800,000.00'],
								['ST1',	'Khairat Kematian',	  '1,500,000.00',	 'ADA',	  '0.05',	  '70,000.00',	  '1,430,000.00'],
								['ST1',	'Bantuan Khas OKU',	  '600,000.00',	 'ADA',	  '0.02',	  '10,000.00',	  '590,000.00'],
								['ST1',	'Moratorium Usahawan Hijrah',	  '11,350,000.00',	 'HABIS',	  '1.00',	  '11,350,000.00',	  '-'],
								['ST1',	'Pembangunan Hotline aduan keganasan rumahtangga',	  '100,000.00',	 'HABIS',	  '1.00',	  '100,000.00',	  '-'],
								['ST1',	'Penangguhan bayaran balik pinjaman TKWBNS',	  '1,300,000.00',	 'HABIS',	  '1.00',	  '1,300,000.00',	  '-'],
								['ST2',	'Program Tuisyen Rakyat Selangor',	  '2,100,000.00',	 'HABIS',	  '1.00',	  '2,100,000.00',	  '-'],
								['ST1',	'Portal ePTRS',	  '500,000.00',	 'ADA',	  '0.60',	  '300,000.00',	  '200,000.00'],
								['ST1',	'Penangguhan Sewa PPR & Smart Sewa',	  '900,000.00',	 'HABIS',	  '1.00',	  '900,000.00',	  '-'],
								['ST1',	'Bantuan Khas Pengusaha & Guru Tadika',	'',	 'HABIS',	 '#DIV/0!',	  '101,000.00',	'- 101,000.00'], 
								['ST1',	'Penangguhan bayaran pinjaman biasiswa YS',	  '1,000,000.00',	 'HABIS',	  '1.00',	  '1,000,000.00',	  '-'],
								['ST1',	'Bantuan mahasiswa Selangor',	  '1,500,000.00',	 'ADA',	  '0.40',	  '600,000.00',	  '900,000.00'],
								['ST1',	'Bantuan Kewangan Sektor Pelancongan',	  '2,550,000.00',	 'ADA',	  '0.39',	  '1,000,000.00',	  '1,550,000.00'],
								['ST1',	'Skim Internet Selangor SISM40',	'',	 'HABIS',	 '#DIV/0!',	  '-',	  '-'],
								['ST1',	'Data Internet Selangor',	  '17,500,000.00',	 'ADA',	  '0.09',	  '1,500,000.00',	  '16,000,000.00'],
								['ST2',	'Selangor Advance',	  '200,000,000.00',	 'ADA',	  '0.04',	  '8,000,000.00',	  '192,000,000.00'],
								['ST2',	'Program Jaminan Bekalan Makanan',	  '10,000,000.00',	 'ADA',	  '0.00',	  '1,000.00',	  '9,999,000.00'],
								['ST2',	'Program Agro Prihatin',	  '1,500,000.00',	 'ADA',	  '0.47',	  '700,000.00',	  '800,000.00'],
								['ST2',	'Program Peningkatan Hasil',	  '1,930,000.00',	 'HABIS',	  '1.00',	  '1,930,000.00',	  '-'],
								['ST2',	'Pinjaman Hijrah Selangor',	  '80,000,000.00',	 'ADA',	  '0.19',	  '15,000,000.00',	  '65,000,000.00'],
								['ST2',	'PLATS Selangor',	'',	 'HABIS',	 '#DIV/0!',	  '500,000.00',	'- 500,000.00'],
								['ST3',	'Saringan Komuniti C19',	  '10,700,000.00',	 'ADA',	  '0.07',	  '700,000.00',	  '10,000,000.00'],
								['ST3',	'Home Assessment Tool',	  '1,250,000.00',	 'ADA',	  '-  ',	  '-  ',	  '1,250,000.00'],
								['ST3',	'Rebat Pengangkutan Pengambilan Vaksin',	  '1,000,000.00',	 'ADA',	  '0.70',	  '700,000.00',	  '300,000.00'],
								['ST3',	'Kawalan Kesihatan Tempat Kerja',	  '500,000.00',	 'HABIS',	  '1.00',	  '500,000.00',	  '-  '],
								['ST3',	'Program Vaksinasi C19 Selangor',	  '200,000,000.00',	 'ADA',	  '0.04',	  '7,000,000.00',	  '193,000,000.00'],
							];*/
							$datas = [

								['strategi'=>'ST1',	'program'=>'Program Bakul Makanan',	  'peruntukan'=>'3,280,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.45',	  'kumulatif-jumlah'=>'1,480,000.00',	  'kumulatif-baki'=>'1,800,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Khairat Kematian',	  'peruntukan'=>'1,500,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.05',	  'kumulatif-jumlah'=>'70,000.00',	  'kumulatif-baki'=>'1,430,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Bantuan Khas OKU',	  'peruntukan'=>'600,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.02',	  'kumulatif-jumlah'=>'10,000.00',	  'kumulatif-baki'=>'590,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Moratorium Usahawan Hijrah',	  'peruntukan'=>'11,350,000.00',	 'semak'=>'HABIS',	  'pemberian-kumulatif'=>'1.00',	  'kumulatif-jumlah'=>'11,350,000.00',	  'kumulatif-baki'=>'-', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Pembangunan Hotline aduan keganasan rumahtangga',	  'peruntukan'=>'100,000.00',	 'semak'=>'HABIS',	  'pemberian-kumulatif'=>'1.00',	  'kumulatif-jumlah'=>'100,000.00',	  'kumulatif-baki'=>'-', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Penangguhan bayaran balik pinjaman TKWBNS',	  'peruntukan'=>'1,300,000.00',	 'semak'=>'HABIS',	  'pemberian-kumulatif'=>'1.00',	  'kumulatif-jumlah'=>'1,300,000.00',	  'kumulatif-baki'=>'-', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST2',	'program'=>'Program Tuisyen Rakyat Selangor',	  'peruntukan'=>'2,100,000.00',	 'semak'=>'HABIS',	  'pemberian-kumulatif'=>'1.00',	  'kumulatif-jumlah'=>'2,100,000.00',	  'kumulatif-baki'=>'-', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Portal ePTRS',	  'peruntukan'=>'500,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.60',	  'kumulatif-jumlah'=>'300,000.00',	  'kumulatif-baki'=>'200,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Penangguhan Sewa PPR & Smart Sewa',	  'peruntukan'=>'900,000.00',	 'semak'=>'HABIS',	  'pemberian-kumulatif'=>'1.00',	  'kumulatif-jumlah'=>'900,000.00',	  'kumulatif-baki'=>'-', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Bantuan Khas Pengusaha & Guru Tadika',	'peruntukan'=>'',	 'semak'=>'HABIS',	 'pemberian-kumulatif'=>'#DIV/0!',	  'kumulatif-jumlah'=>'101,000.00',	'kumulatif-baki'=>'- 101,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Penangguhan bayaran pinjaman biasiswa YS',	  'peruntukan'=>'1,000,000.00',	 'semak'=>'HABIS',	  'pemberian-kumulatif'=>'1.00',	  'kumulatif-jumlah'=>'1,000,000.00',	  'kumulatif-baki'=>'-', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Bantuan mahasiswa Selangor',	  'peruntukan'=>'1,500,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.40',	  'kumulatif-jumlah'=>'600,000.00',	  'kumulatif-baki'=>'900,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Bantuan Kewangan Sektor Pelancongan',	  'peruntukan'=>'2,550,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.39',	  'kumulatif-jumlah'=>'1,000,000.00',	  'kumulatif-baki'=>'1,550,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Skim Internet Selangor SISM40',	'peruntukan'=>'',	 'semak'=>'HABIS',	 'pemberian-kumulatif'=>'#DIV/0!',	  'kumulatif-jumlah'=>'-',	  'kumulatif-baki'=>'-', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Data Internet Selangor',	  'peruntukan'=>'17,500,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.09',	  'kumulatif-jumlah'=>'1,500,000.00',	  'kumulatif-baki'=>'16,000,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST2',	'program'=>'Selangor Advance',	  'peruntukan'=>'200,000,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.04',	  'kumulatif-jumlah'=>'8,000,000.00',	  'kumulatif-baki'=>'192,000,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST2',	'program'=>'Program Jaminan Bekalan Makanan',	  'peruntukan'=>'10,000,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.00',	  'kumulatif-jumlah'=>'1,000.00',	  'kumulatif-baki'=>'9,999,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST2',	'program'=>'Program Agro Prihatin',	  'peruntukan'=>'1,500,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.47',	  'kumulatif-jumlah'=>'700,000.00',	  'kumulatif-baki'=>'800,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST2',	'program'=>'Program Peningkatan Hasil',	  'peruntukan'=>'1,930,000.00',	 'semak'=>'HABIS',	  'pemberian-kumulatif'=>'1.00',	  'kumulatif-jumlah'=>'1,930,000.00',	  'kumulatif-baki'=>'-', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST2',	'program'=>'Pinjaman Hijrah Selangor',	  'peruntukan'=>'80,000,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.19',	  'kumulatif-jumlah'=>'15,000,000.00',	  'kumulatif-baki'=>'65,000,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST2',	'program'=>'PLATS Selangor',	'peruntukan'=>'',	 'semak'=>'HABIS',	 'pemberian-kumulatif'=>'#DIV/0!',	  'kumulatif-jumlah'=>'500,000.00',	'kumulatif-baki'=>'- 500,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST3',	'program'=>'Saringan Komuniti C19',	  'peruntukan'=>'10,700,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.07',	  'kumulatif-jumlah'=>'700,000.00',	  'kumulatif-baki'=>'10,000,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST3',	'program'=>'Home Assessment Tool',	  'peruntukan'=>'1,250,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'-  ',	  'kumulatif-jumlah'=>'-  ',	  'kumulatif-baki'=>'1,250,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST3',	'program'=>'Rebat Pengangkutan Pengambilan Vaksin',	  'peruntukan'=>'1,000,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.70',	  'kumulatif-jumlah'=>'700,000.00',	  'kumulatif-baki'=>'300,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST3',	'program'=>'Kawalan Kesihatan Tempat Kerja',	  'peruntukan'=>'500,000.00',	 'semak'=>'HABIS',	  'pemberian-kumulatif'=>'1.00',	  'kumulatif-jumlah'=>'500,000.00',	  'kumulatif-baki'=>'-  ', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST3',	'program'=>'Program Vaksinasi C19 Selangor',	  'peruntukan'=>'200,000,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.04',	  'kumulatif-jumlah'=>'7,000,000.00',	  'kumulatif-baki'=>'193,000,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']]
							];
						?>

						<table class="table table-bordered table-responsive text-center table-xs">
							<thead>
								<tr>
									<th class="text-center col-1"><br>Strategi</th>
									<th class="text-center col-5"><br>Program</th>
									<th class="text-center col-2"><br>Peruntukan (RM)</th>
									<th class="text-center col-2"><br>Semak</th>
									<th class="text-center col-2">% Pemberian<br>Kumulatif</th>
									<th class="text-center col-2">Kumulatif<br>Jumlah diberikan (RM)</th>
									<th class="text-center col-2">Kumulatif<br>Baki (RM)</th>
								</tr>
							</thead>
							<tbody>
								<?php for($i=0; $i<count($datas); $i++):?>
								<tr>
								<td class="pt-3-half"><?= $datas[$i]['strategi']?></td>
								<td class="pt-3-half text-left"><?= $datas[$i]['program']?></td>
								<td class="pt-3-half text-right"><?= $datas[$i]['peruntukan']?></td>
								<td class="pt-3-half"><?= $datas[$i]['semak']?></td>
								<td class="pt-3-half"><?= $datas[$i]['pemberian-kumulatif']?></td>
								<td class="pt-3-half text-right"><?= $datas[$i]['kumulatif-jumlah']?></td>
								<td class="pt-3-half text-right"><?= $datas[$i]['kumulatif-baki']?></td>
								</tr>
								<?php endfor;?>

								<tr>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark text-right">Total</td>
								<td class="pt-3-half table-dark text-right">551,060,000.00</td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark">0.10</td>
								<td class="pt-3-half table-dark text-right">56,842,000.00</td>
								<td class="pt-3-half table-dark text-right">494,218,000.00</td>
								</tr>
							</tbody>
						</table>

					</div>

					<div id="table-data-permohonan-mingguan-super-admin">

						<h3>DATA PERMOHONAN MINGGUAN</h3>
						<span class="table-add float-right mb-3 mr-2" >
							<a href="#" class="text-success" >
								<i class="fas fa-plus fa-2x" aria-hidden="true"></i>
								</a>
						</span>

						<?php	
							/*$datas = [
								['ST1',	'Program Bakul Makanan',	  '3,280,000.00',	 'ADA',	  '0.45',	  '1,480,000.00',	  '1,800,000.00'],
								['ST1',	'Khairat Kematian',	  '1,500,000.00',	 'ADA',	  '0.05',	  '70,000.00',	  '1,430,000.00'],
								['ST1',	'Bantuan Khas OKU',	  '600,000.00',	 'ADA',	  '0.02',	  '10,000.00',	  '590,000.00'],
								['ST1',	'Moratorium Usahawan Hijrah',	  '11,350,000.00',	 'HABIS',	  '1.00',	  '11,350,000.00',	  '-'],
								['ST1',	'Pembangunan Hotline aduan keganasan rumahtangga',	  '100,000.00',	 'HABIS',	  '1.00',	  '100,000.00',	  '-'],
								['ST1',	'Penangguhan bayaran balik pinjaman TKWBNS',	  '1,300,000.00',	 'HABIS',	  '1.00',	  '1,300,000.00',	  '-'],
								['ST2',	'Program Tuisyen Rakyat Selangor',	  '2,100,000.00',	 'HABIS',	  '1.00',	  '2,100,000.00',	  '-'],
								['ST1',	'Portal ePTRS',	  '500,000.00',	 'ADA',	  '0.60',	  '300,000.00',	  '200,000.00'],
								['ST1',	'Penangguhan Sewa PPR & Smart Sewa',	  '900,000.00',	 'HABIS',	  '1.00',	  '900,000.00',	  '-'],
								['ST1',	'Bantuan Khas Pengusaha & Guru Tadika',	'',	 'HABIS',	 '#DIV/0!',	  '101,000.00',	'- 101,000.00'], 
								['ST1',	'Penangguhan bayaran pinjaman biasiswa YS',	  '1,000,000.00',	 'HABIS',	  '1.00',	  '1,000,000.00',	  '-'],
								['ST1',	'Bantuan mahasiswa Selangor',	  '1,500,000.00',	 'ADA',	  '0.40',	  '600,000.00',	  '900,000.00'],
								['ST1',	'Bantuan Kewangan Sektor Pelancongan',	  '2,550,000.00',	 'ADA',	  '0.39',	  '1,000,000.00',	  '1,550,000.00'],
								['ST1',	'Skim Internet Selangor SISM40',	'',	 'HABIS',	 '#DIV/0!',	  '-',	  '-'],
								['ST1',	'Data Internet Selangor',	  '17,500,000.00',	 'ADA',	  '0.09',	  '1,500,000.00',	  '16,000,000.00'],
								['ST2',	'Selangor Advance',	  '200,000,000.00',	 'ADA',	  '0.04',	  '8,000,000.00',	  '192,000,000.00'],
								['ST2',	'Program Jaminan Bekalan Makanan',	  '10,000,000.00',	 'ADA',	  '0.00',	  '1,000.00',	  '9,999,000.00'],
								['ST2',	'Program Agro Prihatin',	  '1,500,000.00',	 'ADA',	  '0.47',	  '700,000.00',	  '800,000.00'],
								['ST2',	'Program Peningkatan Hasil',	  '1,930,000.00',	 'HABIS',	  '1.00',	  '1,930,000.00',	  '-'],
								['ST2',	'Pinjaman Hijrah Selangor',	  '80,000,000.00',	 'ADA',	  '0.19',	  '15,000,000.00',	  '65,000,000.00'],
								['ST2',	'PLATS Selangor',	'',	 'HABIS',	 '#DIV/0!',	  '500,000.00',	'- 500,000.00'],
								['ST3',	'Saringan Komuniti C19',	  '10,700,000.00',	 'ADA',	  '0.07',	  '700,000.00',	  '10,000,000.00'],
								['ST3',	'Home Assessment Tool',	  '1,250,000.00',	 'ADA',	  '-  ',	  '-  ',	  '1,250,000.00'],
								['ST3',	'Rebat Pengangkutan Pengambilan Vaksin',	  '1,000,000.00',	 'ADA',	  '0.70',	  '700,000.00',	  '300,000.00'],
								['ST3',	'Kawalan Kesihatan Tempat Kerja',	  '500,000.00',	 'HABIS',	  '1.00',	  '500,000.00',	  '-  '],
								['ST3',	'Program Vaksinasi C19 Selangor',	  '200,000,000.00',	 'ADA',	  '0.04',	  '7,000,000.00',	  '193,000,000.00'],
							];*/
							$datas = [

								['strategi'=>'ST1',	'program'=>'Program Bakul Makanan',	  'peruntukan'=>'3,280,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.45',	  'kumulatif-jumlah'=>'1,480,000.00',	  'kumulatif-baki'=>'1,800,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Khairat Kematian',	  'peruntukan'=>'1,500,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.05',	  'kumulatif-jumlah'=>'70,000.00',	  'kumulatif-baki'=>'1,430,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Bantuan Khas OKU',	  'peruntukan'=>'600,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.02',	  'kumulatif-jumlah'=>'10,000.00',	  'kumulatif-baki'=>'590,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Moratorium Usahawan Hijrah',	  'peruntukan'=>'11,350,000.00',	 'semak'=>'HABIS',	  'pemberian-kumulatif'=>'1.00',	  'kumulatif-jumlah'=>'11,350,000.00',	  'kumulatif-baki'=>'-', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Pembangunan Hotline aduan keganasan rumahtangga',	  'peruntukan'=>'100,000.00',	 'semak'=>'HABIS',	  'pemberian-kumulatif'=>'1.00',	  'kumulatif-jumlah'=>'100,000.00',	  'kumulatif-baki'=>'-', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Penangguhan bayaran balik pinjaman TKWBNS',	  'peruntukan'=>'1,300,000.00',	 'semak'=>'HABIS',	  'pemberian-kumulatif'=>'1.00',	  'kumulatif-jumlah'=>'1,300,000.00',	  'kumulatif-baki'=>'-', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST2',	'program'=>'Program Tuisyen Rakyat Selangor',	  'peruntukan'=>'2,100,000.00',	 'semak'=>'HABIS',	  'pemberian-kumulatif'=>'1.00',	  'kumulatif-jumlah'=>'2,100,000.00',	  'kumulatif-baki'=>'-', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Portal ePTRS',	  'peruntukan'=>'500,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.60',	  'kumulatif-jumlah'=>'300,000.00',	  'kumulatif-baki'=>'200,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Penangguhan Sewa PPR & Smart Sewa',	  'peruntukan'=>'900,000.00',	 'semak'=>'HABIS',	  'pemberian-kumulatif'=>'1.00',	  'kumulatif-jumlah'=>'900,000.00',	  'kumulatif-baki'=>'-', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Bantuan Khas Pengusaha & Guru Tadika',	'peruntukan'=>'',	 'semak'=>'HABIS',	 'pemberian-kumulatif'=>'#DIV/0!',	  'kumulatif-jumlah'=>'101,000.00',	'kumulatif-baki'=>'- 101,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Penangguhan bayaran pinjaman biasiswa YS',	  'peruntukan'=>'1,000,000.00',	 'semak'=>'HABIS',	  'pemberian-kumulatif'=>'1.00',	  'kumulatif-jumlah'=>'1,000,000.00',	  'kumulatif-baki'=>'-', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Bantuan mahasiswa Selangor',	  'peruntukan'=>'1,500,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.40',	  'kumulatif-jumlah'=>'600,000.00',	  'kumulatif-baki'=>'900,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Bantuan Kewangan Sektor Pelancongan',	  'peruntukan'=>'2,550,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.39',	  'kumulatif-jumlah'=>'1,000,000.00',	  'kumulatif-baki'=>'1,550,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Skim Internet Selangor SISM40',	'peruntukan'=>'',	 'semak'=>'HABIS',	 'pemberian-kumulatif'=>'#DIV/0!',	  'kumulatif-jumlah'=>'-',	  'kumulatif-baki'=>'-', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Data Internet Selangor',	  'peruntukan'=>'17,500,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.09',	  'kumulatif-jumlah'=>'1,500,000.00',	  'kumulatif-baki'=>'16,000,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST2',	'program'=>'Selangor Advance',	  'peruntukan'=>'200,000,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.04',	  'kumulatif-jumlah'=>'8,000,000.00',	  'kumulatif-baki'=>'192,000,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST2',	'program'=>'Program Jaminan Bekalan Makanan',	  'peruntukan'=>'10,000,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.00',	  'kumulatif-jumlah'=>'1,000.00',	  'kumulatif-baki'=>'9,999,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST2',	'program'=>'Program Agro Prihatin',	  'peruntukan'=>'1,500,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.47',	  'kumulatif-jumlah'=>'700,000.00',	  'kumulatif-baki'=>'800,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST2',	'program'=>'Program Peningkatan Hasil',	  'peruntukan'=>'1,930,000.00',	 'semak'=>'HABIS',	  'pemberian-kumulatif'=>'1.00',	  'kumulatif-jumlah'=>'1,930,000.00',	  'kumulatif-baki'=>'-', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST2',	'program'=>'Pinjaman Hijrah Selangor',	  'peruntukan'=>'80,000,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.19',	  'kumulatif-jumlah'=>'15,000,000.00',	  'kumulatif-baki'=>'65,000,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST2',	'program'=>'PLATS Selangor',	'peruntukan'=>'',	 'semak'=>'HABIS',	 'pemberian-kumulatif'=>'#DIV/0!',	  'kumulatif-jumlah'=>'500,000.00',	'kumulatif-baki'=>'- 500,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST3',	'program'=>'Saringan Komuniti C19',	  'peruntukan'=>'10,700,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.07',	  'kumulatif-jumlah'=>'700,000.00',	  'kumulatif-baki'=>'10,000,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST3',	'program'=>'Home Assessment Tool',	  'peruntukan'=>'1,250,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'-  ',	  'kumulatif-jumlah'=>'-  ',	  'kumulatif-baki'=>'1,250,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST3',	'program'=>'Rebat Pengangkutan Pengambilan Vaksin',	  'peruntukan'=>'1,000,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.70',	  'kumulatif-jumlah'=>'700,000.00',	  'kumulatif-baki'=>'300,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST3',	'program'=>'Kawalan Kesihatan Tempat Kerja',	  'peruntukan'=>'500,000.00',	 'semak'=>'HABIS',	  'pemberian-kumulatif'=>'1.00',	  'kumulatif-jumlah'=>'500,000.00',	  'kumulatif-baki'=>'-  ', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST3',	'program'=>'Program Vaksinasi C19 Selangor',	  'peruntukan'=>'200,000,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.04',	  'kumulatif-jumlah'=>'7,000,000.00',	  'kumulatif-baki'=>'193,000,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']]
							];
						?>

						<table class="table table-bordered table-responsive text-center table-xs">
							<thead>
								<tr>
									<th class="text-center col-5"><br>Strategi</th>
									<th class="text-center"><br>Program</th>
									<th class="text-center"><br>Peruntukan (RM)</th>
									<th class="text-center">Minggu 1 (5/7/21)<br>RM diberikan</th>
									<th class="text-center">Minggu 2 (12/7/21)<br>RM diberikan</th>
									<th class="text-center">Minggu 3 (19/7/21)<br>RM diberikan</th>
									<th class="text-center">Minggu 4 (26/7/21)<br>RM diberikan</th>
									<th class="text-center">Minggu 5 (2/8/21)<br>RM diberikan</th>
									<th class="text-center">Minggu 6 (9/8/21)<br>RM diberikan</th>
									<th class="text-center">Minggu 7 (16/8/21)<br>RM diberikan</th>
									<th class="text-center">Minggu 8 (23/8/21)<br>RM diberikan</th>
									<th class="text-center">Minggu 9 (30/8/21)<br>RM diberikan</th>
									<th class="text-center">Minggu 10 (6/9/21)<br>RM diberikan</th>
									<th class="text-center">Minggu 11 (13/9/21)<br>RM diberikan</th>
									<th class="text-center">Minggu 12 (20/9/21)<br>RM diberikan</th>
									<th class="text-center">Minggu 13 (27/9/21)<br>RM diberikan</th>
									<th class="text-center">Minggu 14<br>RM diberikan</th>
									<th class="text-center">Minggu 15<br>RM diberikan</th>
									<th class="text-center">Minggu 16<br>RM diberikan</th>
									<th class="text-center">Minggu 17<br>RM diberikan</th>
									<th class="text-center">Minggu 18<br>RM diberikan</th>
									<th class="text-center">Minggu 19<br>RM diberikan</th>
									<th class="text-center">Minggu 20<br>RM diberikan</th>
									<th class="text-center">Minggu 21<br>RM diberikan</th>
									<th class="text-center">Minggu 22<br>RM diberikan</th>
									<th class="text-center">Minggu 23<br>RM diberikan</th>
									<th class="text-center">Minggu 24<br>RM diberikan</th>
									<th class="text-center">Minggu 25<br>RM diberikan</th>
									<th class="text-center">Minggu 26<br>RM diberikan</th>
									<th class="text-center">Minggu 27<br>RM diberikan</th>
									<th class="text-center">Minggu 28<br>RM diberikan</th>
									<th class="text-center">Minggu 29<br>RM diberikan</th>
									<th class="text-center">Minggu 30<br>RM diberikan</th>
									<th class="text-center">Minggu 31<br>RM diberikan</th>
									<th class="text-center">Minggu 32<br>RM diberikan</th>
									<th class="text-center">Minggu 33<br>RM diberikan</th>
									<th class="text-center">Minggu 34<br>RM diberikan</th>
									<th class="text-center">Minggu 35<br>RM diberikan</th>
									<th class="text-center">Minggu 36<br>RM diberikan</th>
									<th class="text-center">Minggu 37<br>RM diberikan</th>
									<th class="text-center">Minggu 38<br>RM diberikan</th>
									<th class="text-center">Minggu 39<br>RM diberikan</th>
									<th class="text-center">Minggu 40<br>RM diberikan</th>
								</tr>
							</thead>
							<tbody>
								<?php for($i=0; $i<count($datas); $i++):?>
								<tr>
								<td class="pt-3-half"><?= $datas[$i]['strategi']?></td>
								<td class="pt-3-half text-left"><?= $datas[$i]['program']?></td>
								<td class="pt-3-half text-right"><?= $datas[$i]['peruntukan']?></td>
								<?php for($j=0; $j<count($datas[$i]['minggu']); $j++):?>
								<td class="pt-3-half" contenteditable="true"><?= $datas[$i]['minggu'][$i]?></td>
								<?php endfor;?>
								</tr>
								<?php endfor;?>

								<tr>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark text-right">Total</td>
								<td class="pt-3-half table-dark text-right">551,060,000.00</td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								</tr>
							</tbody>
						</table>

						<table class="table table-bordered table-responsive text-center table-xs">
							<thead>
								<tr>
									<th class="text-center col-5"><br>Strategi</th>
									<th class="text-center"><br>Program</th>
									<th class="text-center"><br>Peruntukan (RM)</th>
									<th class="text-center">Minggu 1 (5/7/21)</th>
									<th class="text-center">Minggu 2 (12/7/21)</th>
									<th class="text-center">Minggu 3 (19/7/21)</th>
									<th class="text-center">Minggu 4 (26/7/21)</th>
									<th class="text-center">Minggu 5 (2/8/21)</th>
									<th class="text-center">Minggu 6 (9/8/21)</th>
									<th class="text-center">Minggu 7 (16/8/21)</th>
									<th class="text-center">Minggu 8 (23/8/21)</th>
									<th class="text-center">Minggu 9 (30/8/21)</th>
									<th class="text-center">Minggu 10 (6/9/21)</th>
									<th class="text-center">Minggu 11 (13/9/21)</th>
									<th class="text-center">Minggu 12 (20/9/21)</th>
									<th class="text-center">Minggu 13 (27/9/21)</th>
									<th class="text-center">Minggu 14</th>
									<th class="text-center">Minggu 15</th>
									<th class="text-center">Minggu 16</th>
									<th class="text-center">Minggu 17</th>
									<th class="text-center">Minggu 18</th>
									<th class="text-center">Minggu 19</th>
									<th class="text-center">Minggu 20</th>
									<th class="text-center">Minggu 21</th>
									<th class="text-center">Minggu 22</th>
									<th class="text-center">Minggu 23</th>
									<th class="text-center">Minggu 24</th>
									<th class="text-center">Minggu 25</th>
									<th class="text-center">Minggu 26</th>
									<th class="text-center">Minggu 27</th>
									<th class="text-center">Minggu 28</th>
									<th class="text-center">Minggu 29</th>
									<th class="text-center">Minggu 30</th>
									<th class="text-center">Minggu 31</th>
									<th class="text-center">Minggu 32</th>
									<th class="text-center">Minggu 33</th>
									<th class="text-center">Minggu 34</th>
									<th class="text-center">Minggu 35</th>
									<th class="text-center">Minggu 36</th>
									<th class="text-center">Minggu 37</th>
									<th class="text-center">Minggu 38</th>
									<th class="text-center">Minggu 39</th>
									<th class="text-center">Minggu 40</th>
								</tr>
							</thead>
							<tbody>
								<?php for($i=0; $i<count($datas); $i++):?>
								<tr>
								<td class="pt-3-half"><?= $datas[$i]['strategi']?></td>
								<td class="pt-3-half text-left"><?= $datas[$i]['program']?></td>
								<td class="pt-3-half text-right"><?= $datas[$i]['peruntukan']?></td>
								<?php for($j=0; $j<count($datas[$i]['minggu']); $j++):?>
								<td class="pt-3-half text-right" contenteditable="true"><?= $datas[$i]['minggu'][$i]?></td>
								<?php endfor;?>
								</tr>
								<?php endfor;?>

								<tr>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark">Total</td>
								<td class="pt-3-half table-dark">551,060,000.00</td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								</tr>
							</tbody>
						</table>

					</div>

					<div id="table-data-permohonan-mingguan-super-admin">

						<h3>DATA PERMOHONAN MINGGUAN</h3>
						<span class="table-add float-right mb-3 mr-2" >
							<a href="#" class="text-success" >
								<i class="fas fa-plus fa-2x" aria-hidden="true"></i>
								</a>
						</span>

						<?php	
							/*$datas = [
								['ST1',	'Program Bakul Makanan',	  '3,280,000.00',	 'ADA',	  '0.45',	  '1,480,000.00',	  '1,800,000.00'],
								['ST1',	'Khairat Kematian',	  '1,500,000.00',	 'ADA',	  '0.05',	  '70,000.00',	  '1,430,000.00'],
								['ST1',	'Bantuan Khas OKU',	  '600,000.00',	 'ADA',	  '0.02',	  '10,000.00',	  '590,000.00'],
								['ST1',	'Moratorium Usahawan Hijrah',	  '11,350,000.00',	 'HABIS',	  '1.00',	  '11,350,000.00',	  '-'],
								['ST1',	'Pembangunan Hotline aduan keganasan rumahtangga',	  '100,000.00',	 'HABIS',	  '1.00',	  '100,000.00',	  '-'],
								['ST1',	'Penangguhan bayaran balik pinjaman TKWBNS',	  '1,300,000.00',	 'HABIS',	  '1.00',	  '1,300,000.00',	  '-'],
								['ST2',	'Program Tuisyen Rakyat Selangor',	  '2,100,000.00',	 'HABIS',	  '1.00',	  '2,100,000.00',	  '-'],
								['ST1',	'Portal ePTRS',	  '500,000.00',	 'ADA',	  '0.60',	  '300,000.00',	  '200,000.00'],
								['ST1',	'Penangguhan Sewa PPR & Smart Sewa',	  '900,000.00',	 'HABIS',	  '1.00',	  '900,000.00',	  '-'],
								['ST1',	'Bantuan Khas Pengusaha & Guru Tadika',	'',	 'HABIS',	 '#DIV/0!',	  '101,000.00',	'- 101,000.00'], 
								['ST1',	'Penangguhan bayaran pinjaman biasiswa YS',	  '1,000,000.00',	 'HABIS',	  '1.00',	  '1,000,000.00',	  '-'],
								['ST1',	'Bantuan mahasiswa Selangor',	  '1,500,000.00',	 'ADA',	  '0.40',	  '600,000.00',	  '900,000.00'],
								['ST1',	'Bantuan Kewangan Sektor Pelancongan',	  '2,550,000.00',	 'ADA',	  '0.39',	  '1,000,000.00',	  '1,550,000.00'],
								['ST1',	'Skim Internet Selangor SISM40',	'',	 'HABIS',	 '#DIV/0!',	  '-',	  '-'],
								['ST1',	'Data Internet Selangor',	  '17,500,000.00',	 'ADA',	  '0.09',	  '1,500,000.00',	  '16,000,000.00'],
								['ST2',	'Selangor Advance',	  '200,000,000.00',	 'ADA',	  '0.04',	  '8,000,000.00',	  '192,000,000.00'],
								['ST2',	'Program Jaminan Bekalan Makanan',	  '10,000,000.00',	 'ADA',	  '0.00',	  '1,000.00',	  '9,999,000.00'],
								['ST2',	'Program Agro Prihatin',	  '1,500,000.00',	 'ADA',	  '0.47',	  '700,000.00',	  '800,000.00'],
								['ST2',	'Program Peningkatan Hasil',	  '1,930,000.00',	 'HABIS',	  '1.00',	  '1,930,000.00',	  '-'],
								['ST2',	'Pinjaman Hijrah Selangor',	  '80,000,000.00',	 'ADA',	  '0.19',	  '15,000,000.00',	  '65,000,000.00'],
								['ST2',	'PLATS Selangor',	'',	 'HABIS',	 '#DIV/0!',	  '500,000.00',	'- 500,000.00'],
								['ST3',	'Saringan Komuniti C19',	  '10,700,000.00',	 'ADA',	  '0.07',	  '700,000.00',	  '10,000,000.00'],
								['ST3',	'Home Assessment Tool',	  '1,250,000.00',	 'ADA',	  '-  ',	  '-  ',	  '1,250,000.00'],
								['ST3',	'Rebat Pengangkutan Pengambilan Vaksin',	  '1,000,000.00',	 'ADA',	  '0.70',	  '700,000.00',	  '300,000.00'],
								['ST3',	'Kawalan Kesihatan Tempat Kerja',	  '500,000.00',	 'HABIS',	  '1.00',	  '500,000.00',	  '-  '],
								['ST3',	'Program Vaksinasi C19 Selangor',	  '200,000,000.00',	 'ADA',	  '0.04',	  '7,000,000.00',	  '193,000,000.00'],
							];*/
							$datas = [

								['strategi'=>'ST1',	'program'=>'Program Bakul Makanan',	  'peruntukan'=>'3,280,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.45',	  'kumulatif-jumlah'=>'1,480,000.00',	  'kumulatif-baki'=>'1,800,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Khairat Kematian',	  'peruntukan'=>'1,500,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.05',	  'kumulatif-jumlah'=>'70,000.00',	  'kumulatif-baki'=>'1,430,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Bantuan Khas OKU',	  'peruntukan'=>'600,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.02',	  'kumulatif-jumlah'=>'10,000.00',	  'kumulatif-baki'=>'590,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Moratorium Usahawan Hijrah',	  'peruntukan'=>'11,350,000.00',	 'semak'=>'HABIS',	  'pemberian-kumulatif'=>'1.00',	  'kumulatif-jumlah'=>'11,350,000.00',	  'kumulatif-baki'=>'-', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Pembangunan Hotline aduan keganasan rumahtangga',	  'peruntukan'=>'100,000.00',	 'semak'=>'HABIS',	  'pemberian-kumulatif'=>'1.00',	  'kumulatif-jumlah'=>'100,000.00',	  'kumulatif-baki'=>'-', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Penangguhan bayaran balik pinjaman TKWBNS',	  'peruntukan'=>'1,300,000.00',	 'semak'=>'HABIS',	  'pemberian-kumulatif'=>'1.00',	  'kumulatif-jumlah'=>'1,300,000.00',	  'kumulatif-baki'=>'-', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST2',	'program'=>'Program Tuisyen Rakyat Selangor',	  'peruntukan'=>'2,100,000.00',	 'semak'=>'HABIS',	  'pemberian-kumulatif'=>'1.00',	  'kumulatif-jumlah'=>'2,100,000.00',	  'kumulatif-baki'=>'-', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Portal ePTRS',	  'peruntukan'=>'500,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.60',	  'kumulatif-jumlah'=>'300,000.00',	  'kumulatif-baki'=>'200,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Penangguhan Sewa PPR & Smart Sewa',	  'peruntukan'=>'900,000.00',	 'semak'=>'HABIS',	  'pemberian-kumulatif'=>'1.00',	  'kumulatif-jumlah'=>'900,000.00',	  'kumulatif-baki'=>'-', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Bantuan Khas Pengusaha & Guru Tadika',	'peruntukan'=>'',	 'semak'=>'HABIS',	 'pemberian-kumulatif'=>'#DIV/0!',	  'kumulatif-jumlah'=>'101,000.00',	'kumulatif-baki'=>'- 101,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Penangguhan bayaran pinjaman biasiswa YS',	  'peruntukan'=>'1,000,000.00',	 'semak'=>'HABIS',	  'pemberian-kumulatif'=>'1.00',	  'kumulatif-jumlah'=>'1,000,000.00',	  'kumulatif-baki'=>'-', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Bantuan mahasiswa Selangor',	  'peruntukan'=>'1,500,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.40',	  'kumulatif-jumlah'=>'600,000.00',	  'kumulatif-baki'=>'900,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Bantuan Kewangan Sektor Pelancongan',	  'peruntukan'=>'2,550,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.39',	  'kumulatif-jumlah'=>'1,000,000.00',	  'kumulatif-baki'=>'1,550,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Skim Internet Selangor SISM40',	'peruntukan'=>'',	 'semak'=>'HABIS',	 'pemberian-kumulatif'=>'#DIV/0!',	  'kumulatif-jumlah'=>'-',	  'kumulatif-baki'=>'-', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST1',	'program'=>'Data Internet Selangor',	  'peruntukan'=>'17,500,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.09',	  'kumulatif-jumlah'=>'1,500,000.00',	  'kumulatif-baki'=>'16,000,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST2',	'program'=>'Selangor Advance',	  'peruntukan'=>'200,000,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.04',	  'kumulatif-jumlah'=>'8,000,000.00',	  'kumulatif-baki'=>'192,000,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST2',	'program'=>'Program Jaminan Bekalan Makanan',	  'peruntukan'=>'10,000,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.00',	  'kumulatif-jumlah'=>'1,000.00',	  'kumulatif-baki'=>'9,999,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST2',	'program'=>'Program Agro Prihatin',	  'peruntukan'=>'1,500,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.47',	  'kumulatif-jumlah'=>'700,000.00',	  'kumulatif-baki'=>'800,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST2',	'program'=>'Program Peningkatan Hasil',	  'peruntukan'=>'1,930,000.00',	 'semak'=>'HABIS',	  'pemberian-kumulatif'=>'1.00',	  'kumulatif-jumlah'=>'1,930,000.00',	  'kumulatif-baki'=>'-', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST2',	'program'=>'Pinjaman Hijrah Selangor',	  'peruntukan'=>'80,000,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.19',	  'kumulatif-jumlah'=>'15,000,000.00',	  'kumulatif-baki'=>'65,000,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST2',	'program'=>'PLATS Selangor',	'peruntukan'=>'',	 'semak'=>'HABIS',	 'pemberian-kumulatif'=>'#DIV/0!',	  'kumulatif-jumlah'=>'500,000.00',	'kumulatif-baki'=>'- 500,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST3',	'program'=>'Saringan Komuniti C19',	  'peruntukan'=>'10,700,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.07',	  'kumulatif-jumlah'=>'700,000.00',	  'kumulatif-baki'=>'10,000,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST3',	'program'=>'Home Assessment Tool',	  'peruntukan'=>'1,250,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'-  ',	  'kumulatif-jumlah'=>'-  ',	  'kumulatif-baki'=>'1,250,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST3',	'program'=>'Rebat Pengangkutan Pengambilan Vaksin',	  'peruntukan'=>'1,000,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.70',	  'kumulatif-jumlah'=>'700,000.00',	  'kumulatif-baki'=>'300,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST3',	'program'=>'Kawalan Kesihatan Tempat Kerja',	  'peruntukan'=>'500,000.00',	 'semak'=>'HABIS',	  'pemberian-kumulatif'=>'1.00',	  'kumulatif-jumlah'=>'500,000.00',	  'kumulatif-baki'=>'-  ', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']],
								['strategi'=>'ST3',	'program'=>'Program Vaksinasi C19 Selangor',	  'peruntukan'=>'200,000,000.00',	 'semak'=>'ADA',	  'pemberian-kumulatif'=>'0.04',	  'kumulatif-jumlah'=>'7,000,000.00',	  'kumulatif-baki'=>'193,000,000.00', 'minggu'=>['','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','']]
							];
						?>

						<table class="table table-bordered table-responsive text-center table-xs">
							<thead>
								<tr>
									<th class="text-center col-5"></th>
									<th class="text-center col-5"></th>
									<th class="text-center col-5">Peruntukan</th>
									<th class="text-center col-5">TERKINI</th>
									<th class="text-center col-5">TERKINI</th>
									<th class="text-center col-5" colspan=4>Data Permohonan (Kumulatif)</th>
									<th class="text-center" colspan=4>Minggu 1 (5/7/21)</th>
									<th class="text-center" colspan=4>Minggu 2 (12/7/21)</th>
									<th class="text-center" colspan=4>Minggu 3 (19/7/21)</th>
									<th class="text-center" colspan=4>Minggu 4 (26/7/21)</th>
									<th class="text-center" colspan=4>Minggu 5 (2/8/21)</th>
									<th class="text-center" colspan=4>Minggu 6 (9/8/21)</th>
									<th class="text-center" colspan=4>Minggu 7 (16/8/21)</th>
									<th class="text-center" colspan=4>Minggu 8 (23/8/21)</th>
									<th class="text-center" colspan=4>Minggu 9 (30/8/21)</th>
									<th class="text-center" colspan=4>Minggu 10 (6/9/21)</th>
									<th class="text-center" colspan=4>Minggu 11 (13/9/21)</th>
									<th class="text-center" colspan=4>Minggu 12 (20/9/21)</th>
									<th class="text-center" colspan=4>Minggu 13 (27/9/21)</th>
									<th class="text-center" colspan=4>Minggu 14</th>
									<th class="text-center" colspan=4>Minggu 15</th>
									<th class="text-center" colspan=4>Minggu 16</th>
									<th class="text-center" colspan=4>Minggu 17</th>
									<th class="text-center" colspan=4>Minggu 18</th>
									<th class="text-center" colspan=4>Minggu 19</th>
									<th class="text-center" colspan=4>Minggu 20</th>
									<th class="text-center" colspan=4>Minggu 21</th>
									<th class="text-center" colspan=4>Minggu 22</th>
									<th class="text-center" colspan=4>Minggu 23</th>
									<th class="text-center" colspan=4>Minggu 24</th>
									<th class="text-center" colspan=4>Minggu 25</th>
									<th class="text-center" colspan=4>Minggu 26</th>
									<th class="text-center" colspan=4>Minggu 27</th>
									<th class="text-center" colspan=4>Minggu 28</th>
									<th class="text-center" colspan=4>Minggu 29</th>
									<th class="text-center" colspan=4>Minggu 30</th>
									<th class="text-center" colspan=4>Minggu 31</th>
									<th class="text-center" colspan=4>Minggu 32</th>
									<th class="text-center" colspan=4>Minggu 33</th>
									<th class="text-center" colspan=4>Minggu 34</th>
									<th class="text-center" colspan=4>Minggu 35</th>
									<th class="text-center" colspan=4>Minggu 36</th>
									<th class="text-center" colspan=4>Minggu 37</th>
									<th class="text-center" colspan=4>Minggu 38</th>
									<th class="text-center" colspan=4>Minggu 39</th>
									<th class="text-center" colspan=4>Minggu 40</th>
								</tr>
								<tr>
									<th class="text-center col-5">Strategi</th>
									<th class="text-center">Program</th>
									<th class="text-center">(RM)</th>
									<th class="text-center">A/JP (%)</th>
									<th class="text-center">P/JP (%)</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
									<th class="text-center">JP</th>
									<th class="text-center">A</th>
									<th class="text-center">T</th>
									<th class="text-center">P</th>
								</tr>
							</thead>
							<tbody>
								<?php for($i=0; $i<count($datas); $i++):?>
								<tr>
								<td class="pt-3-half"><?= $datas[$i]['strategi']?></td>
								<td class="pt-3-half text-left"><?= $datas[$i]['program']?></td>
								<td class="pt-3-half text-right"><?= $datas[$i]['peruntukan']?></td>
								<td class="pt-3-half text-right"></td>
								<td class="pt-3-half text-right"></td>
								<td class="pt-3-half text-right"></td>
								<td class="pt-3-half text-right"></td>
								<td class="pt-3-half text-right"></td>
								<td class="pt-3-half text-right"></td>
								<?php for($j=0; $j<count($datas[$i]['minggu']); $j++):?>
								<?php for($h=0; $h<4; $h++):?>
								<td class="pt-3-half text-right" contenteditable="true"></td>
								<?php endfor;?>
								<?php endfor;?>
								</tr>
								<?php endfor;?>

								<tr>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark text-left">Total</td>
								<td class="pt-3-half table-dark text-right">551,060,000.00</td>
								<td class="pt-3-half table-dark text-right"></td>
								<td class="pt-3-half table-dark text-right"></td>
								<td class="pt-3-half table-dark text-right"></td>
								<td class="pt-3-half table-dark text-right"></td>
								<td class="pt-3-half table-dark text-right"></td>
								<td class="pt-3-half table-dark text-right"></td>
								<?php for($j=0; $j<40; $j++):?>
								<?php for($h=0; $h<4; $h++):?>
								<td class="pt-3-half table-dark text-right"></td>
								<?php endfor;?>
								<?php endfor;?>
								</tr>
							</tbody>
						</table>

						<table class="table table-bordered table-responsive text-center table-xs">
							<thead>
								<tr>
									<th class="text-center col-5"><br>Strategi</th>
									<th class="text-center"><br>Program</th>
									<th class="text-center"><br>Peruntukan (RM)</th>
									<th class="text-center">Minggu 1 (5/7/21)</th>
									<th class="text-center">Minggu 2 (12/7/21)</th>
									<th class="text-center">Minggu 3 (19/7/21)</th>
									<th class="text-center">Minggu 4 (26/7/21)</th>
									<th class="text-center">Minggu 5 (2/8/21)</th>
									<th class="text-center">Minggu 6 (9/8/21)</th>
									<th class="text-center">Minggu 7 (16/8/21)</th>
									<th class="text-center">Minggu 8 (23/8/21)</th>
									<th class="text-center">Minggu 9 (30/8/21)</th>
									<th class="text-center">Minggu 10 (6/9/21)</th>
									<th class="text-center">Minggu 11 (13/9/21)</th>
									<th class="text-center">Minggu 12 (20/9/21)</th>
									<th class="text-center">Minggu 13 (27/9/21)</th>
									<th class="text-center">Minggu 14</th>
									<th class="text-center">Minggu 15</th>
									<th class="text-center">Minggu 16</th>
									<th class="text-center">Minggu 17</th>
									<th class="text-center">Minggu 18</th>
									<th class="text-center">Minggu 19</th>
									<th class="text-center">Minggu 20</th>
									<th class="text-center">Minggu 21</th>
									<th class="text-center">Minggu 22</th>
									<th class="text-center">Minggu 23</th>
									<th class="text-center">Minggu 24</th>
									<th class="text-center">Minggu 25</th>
									<th class="text-center">Minggu 26</th>
									<th class="text-center">Minggu 27</th>
									<th class="text-center">Minggu 28</th>
									<th class="text-center">Minggu 29</th>
									<th class="text-center">Minggu 30</th>
									<th class="text-center">Minggu 31</th>
									<th class="text-center">Minggu 32</th>
									<th class="text-center">Minggu 33</th>
									<th class="text-center">Minggu 34</th>
									<th class="text-center">Minggu 35</th>
									<th class="text-center">Minggu 36</th>
									<th class="text-center">Minggu 37</th>
									<th class="text-center">Minggu 38</th>
									<th class="text-center">Minggu 39</th>
									<th class="text-center">Minggu 40</th>
								</tr>
							</thead>
							<tbody>
								<?php for($i=0; $i<count($datas); $i++):?>
								<tr>
								<td class="pt-3-half"><?= $datas[$i]['strategi']?></td>
								<td class="pt-3-half text-left"><?= $datas[$i]['program']?></td>
								<td class="pt-3-half text-right"><?= $datas[$i]['peruntukan']?></td>
								<?php for($j=0; $j<count($datas[$i]['minggu']); $j++):?>
								<td class="pt-3-half text-right" contenteditable="true"><?= $datas[$i]['minggu'][$i]?></td>
								<?php endfor;?>
								</tr>
								<?php endfor;?>

								<tr>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark text-right">Total</td>
								<td class="pt-3-half table-dark text-right">551,060,000.00</td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								<td class="pt-3-half table-dark"></td>
								</tr>
							</tbody>
						</table>

					</div>


				</div>

			</div>
			<!-- Editable table -->

        </main>

        <main id="contentBudget" role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

			<div class="row">

				<!-- budget chart -->
				<div class="col-md-6">
					<select>
						<option selected="true">Week 1 - Week 8</option>
						<option>Week 8 - Week 16</option>
					</select>
					<canvas class="my-4" id="budgetChart" width="900" height="380"></canvas>
				</div>

				<!-- gauge chart-->
				<div class="col-md-6">
					<div class="text-center mt-5">
						<span style="font-size: 12px;"><strong>Total Budget Dispersed</strong></span>
						<div id="gaugeArea2"></div>
					</div>
				</div>

			</div>

			<div class="row">

				<div class="col-md-6">
					<select>
						<option selected="true">Week 1 - Week 8</option>
						<option>Week 8 - Week 16</option>
					</select>

					<canvas class="my-4" id="applicationChart" width="900" height="380"></canvas>
				</div>

				<div class="col-md-6">
					<select>
						<option selected="true">Week 1 - Week 8</option>
						<option>Week 8 - Week 16</option>
					</select>
					<canvas class="my-4" id="totalAppApprChart" width="900" height="380"></canvas>
				</div>

			</div>

			<div class="row">
				<div class="col-md-6">
					<select>
						<option selected="true">Week 1 - Week 8</option>
						<option>Week 8 - Week 16</option>
					</select>
					<canvas class="my-4" id="totalCumulativeAppApprovedChart" width="900" height="380"></canvas>
				</div>

				<div class="col-md-6">
					<select>
						<option selected="true">Week 1 - Week 8</option>
						<option>Week 8 - Week 16</option>
					</select>
					<canvas class="my-4" id="totalCumulativeAppReceivedChart" width="900" height="380"></canvas>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4"> </div>
				<div class="col-md-4">
					<canvas class="my-4" id="keseluruhanChart" width="900" height="380"></canvas>
				</div>



			</div>
			<div class="row">
				<div class="col-md-4">
					<canvas class="my-4" id="strategi1Chart" width="900" height="380"></canvas>
				</div>
				<div class="col-md-4">
					<canvas class="my-4" id="strategi2Chart" width="900" height="380"></canvas>
				</div>
				<div class="col-md-4">
					<canvas class="my-4" id="strategi3Chart" width="900" height="380"></canvas>
				</div>

			</div>

			<div class="row">
				<div class="col-md-12">
					<select>
						<option selected="true">Week 1 - Week 8</option>
						<option>Week 8 - Week 16</option>
					</select>
					<canvas class="my-4" id="d3Chart" width="900" height="380"></canvas>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<select>
						<option selected="true">Week 1 - Week 8</option>
						<option>Week 8 - Week 16</option>
					</select>
					<canvas class="my-4" id="d2Chart" width="900" height="380"></canvas>
				</div>

				<div class="col-md-12">
					<select>
						<option selected="true">Week 1 - Week 8</option>
						<option>Week 8 - Week 16</option>
					</select>
					<canvas class="my-4" id="d4Chart" width="900" height="380"></canvas>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<select>
						<option selected="true">Week 1 - Week 8</option>
						<option>Week 8 - Week 16</option>
					</select>
					<canvas class="my-4" id="c1Chart" width="900" height="380"></canvas>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<select>
						<option selected="true">Week 1 - Week 8</option>
						<option>Week 8 - Week 16</option>
					</select>
					<canvas class="my-4" id="c2Chart" width="900" height="380"></canvas>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<select>
						<option selected="true">Week 1 - Week 8</option>
						<option>Week 8 - Week 16</option>
					</select>
					<canvas class="my-4" id="c3Chart" width="900" height="380"></canvas>
				</div>

				<div class="col-md-12">
					<select>
						<option selected="true">Week 1 - Week 8</option>
						<option>Week 8 - Week 16</option>
					</select>
					<canvas class="my-4" id="c4Chart" width="900" height="380"></canvas>
				</div>
			</div>

        </main>

      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <!-- Icons -->
    <script src="./node_modules/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="./node_modules/chart.js/dist/chart.js"></script>
    <script src="./node_modules/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js"></script>
    <script src="./node_modules/gauge-chart/dist/bundle.js"></script>

	<script>
		$("#_top_navbar").load("_top_navbar.html");
		$("#_side_navbar").load("_side_navbar.html");
		$("#content").load("_dashboard.html");

		function getRandomArbitrary(min, max) {
			return Math.random() * (max - min) + min;
		}

		const MONTHS = [
			'January',
			'February',
			'March',
			'April',
			'May',
			'June',
			'July',
			'August',
			'September',
			'October',
			'November',
			'December'
		];

		const WEEKS = [
			'Week 1',
			'Week 2',
			'Week 3',
			'Week 4',
			'Week 5',
			'Week 6',
			'Week 7',
			'Week 8',
		];

		const MINGGU = [
			'1',
			'2',
			'3',
			'4',
			'5',
			'6',
			'7',
			'8',
			'9',
			'10',
			'11',
			'12',
			'13',
			'14',
			'15',
			'16',
			'17',
			'18',
			'19',
			'20',
			'21',
			'22',
			'23',
			'24',
		];

		const INITIATIVE = [
			'Program Bakul Makanan',
			'Khairat Kematian',
			'Bantuan Khas OKU',
			'Moratorium Usahawan Hijrah',
			'Pembangunan Hotline aduan keganasan rumahtangga',
			'Penangguhan bayaran balik pinjaman TKWBNS',
			'Program Tuisyen Rakyat Selangor',
			'Portal ePTRS',
			'Penangguhan Sewa PPR & Smart Sewa',
			'Bantuan Khas Pengusaha & Guru Tadika',
			'Penangguhan bayaran pinjaman biasiswa YS',
			'Bantuan mahasiswa Selangor',
			'Bantuan Kewangan Sektor Pelancongan',
			'Skim Internet Selangor SISM40',
			'Data Internet Selangor',
			'Selangor Advance',
			'Program Jaminan Bekalan Makanan',
			'Program Agro Prihatin',
			'Program Peningkatan Hasil',
			'Pinjaman Hijrah Selangor',
			'PLATS Selangor',
			'Saringan Komuniti C19 Home Assessment Tool Rebat Pengangkutan Pengambilan Vaksin',
			'Kawalan Kesihatan Tempat Kerja',
			'Program Vaksinasi C19 Selangor'
		];

		const red = "rgb(220, 53, 69, 0.5)";
		const redBorderColor = "rgb(255, 99, 132)";
		const blue = "rgb(0, 148, 248, 0.5)";
		const blueBorderColor = "rgb(54, 162, 235)";
		const green = "rgb(23, 162, 184, 0.5)";
		const greenBorderColor = "rgb(23, 162, 184)";

	</script>

	<!-- Dashboard Chart -->
    <script>
      var ctx = document.getElementById("dashboardChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: MONTHS,
          datasets: [{
			label: "Budget",
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034, 10012, 22020, 112233],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>

	<!-- Status Chart -->
    <script>


		var dataset1 = [], dataset2 = [];
		for(var i = 0; i<3;i++) {
			dataset1.push(getRandomArbitrary(10000, 20000));
		}

		var data = {
			labels: [
				'Process',
				'Approved',
				'Rejected'
			],
			datasets: [{
				label: 'Status Chart',
				data: dataset1,
				backgroundColor: [
				red,
				blue,
				green
				],
				hoverOffset: 4
			}]
		};

		var ctx = document.getElementById("statusChart");
		var myChart = new Chart(ctx, {
			type: 'doughnut',
			data: data,
			options: {
				scales: {
				y: {
					beginAtZero: true
				}
				}
			},
		});
    </script>

	<!-- Budget Chart -->
    <script>

		var dataset1 = [], dataset2 = [];
		for(var i = 0; i<MONTHS.length;i++) {
			dataset1.push(getRandomArbitrary(10000, 20000));
		}
		for(var i = 0; i<MONTHS.length;i++) {
			dataset2.push(getRandomArbitrary(10000, 20000));
		}
		var data = {
			labels: INITIATIVE,
			datasets: [
				{
				label: 'Total',
				data: dataset1,
				borderColor: redBorderColor,
				backgroundColor: red,
				},
				{
				label: 'Cumulative',
				data: dataset2,
				borderColor: blueBorderColor,
				backgroundColor: blue 
				}
			]
		};

		var ctx = document.getElementById("budgetChart");
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: data,
			options: {
				indexAxis: 'y',
				// Elements options apply to all of the options unless overridden in a dataset
				// In this case, we are setting the border of each horizontal bar to be 2px wide
				elements: {
				bar: {
					borderWidth: 2,
				}
				},
				responsive: true,
				plugins: {
				legend: {
					position: 'right',
				},
				title: {
					display: true,
					text: 'Budget'
				}
				}
			},
		});
    </script>

	<!-- Total applications approved and received Chart -->
    <script>

		var dataset1 = [], dataset2 = [];
		for(var i = 0; i<WEEKS.length;i++) {
			dataset1.push(getRandomArbitrary(10000, 20000));
		}
		for(var i = 0; i<WEEKS.length;i++) {
			dataset2.push(getRandomArbitrary(10000, 20000));
		}
		var data = {
			labels: WEEKS,
			datasets: [
				{
				label: 'Total applications approved',
				data: dataset1,
				borderColor: redBorderColor,
				backgroundColor: red,
				stack: 'combined',
				type: 'bar'
				},
				{
				label: 'Total applications received',
				data: dataset2,
				borderColor: blueBorderColor,
				backgroundColor: blue,
				stack: 'combined',
				}
			]
		};

		var ctx = document.getElementById("totalAppApprChart");
		var myChart = new Chart(ctx, 	{
			type: 'line',
			data: data,
			options: {
				plugins: {
				title: {
					display: true,
					text: 'Total Application vs Total Application Approved'
				}
				},
				scales: {
					y: {
						stacked: true
					}
				}
			},
		});
    </script>

	<!-- Total applications approved and Cumulative applications approved Chart -->
    <script>

		var dataset1 = [], dataset2 = [];
		for(var i = 0; i<WEEKS.length;i++) {
			dataset1.push(getRandomArbitrary(10000, 20000));
		}
		var sum = 0;
		for(var i = 0; i<WEEKS.length;i++) {
			if(i!=0) {
				sum += getRandomArbitrary(10000, 20000);
			} else {
				sum = dataset1[0];
			}
			dataset2.push(sum);
		}
		var data = {
			labels: WEEKS,
			datasets: [
				{
					label: 'Total application approved',
					data: dataset1,
					borderColor: redBorderColor,
					backgroundColor: red,
					stack: 'combined',
					type: 'bar'
				},
				{
					label: 'Cumulative applications approved',
					data: dataset2,
					borderColor: blueBorderColor,
					backgroundColor: blue,
					stack: 'combined',
					order: 1
				}
			]
		};

		var ctx = document.getElementById("totalCumulativeAppApprovedChart");
		var myChart = new Chart(ctx, 	{
			type: 'line',
			data: data,
			options: {
				responsive: true,
				plugins: {
				title: {
					display: true,
					text: 'Total Application Approved vs Cumulative Application Approved'
				}
				},
				scales: {
				x: {
					display: true,
				},
				y: {
					display: true,
					type: 'logarithmic',
				}
				}
			},
		});
    </script>

	<!-- Total applications received and Cumulative applications received Chart -->
    <script>

		var dataset1 = [], dataset2 = [];
		for(var i = 0; i<WEEKS.length;i++) {
			dataset1.push(getRandomArbitrary(10000, 20000));
		}
		var sum = 0;
		for(var i = 0; i<WEEKS.length;i++) {
			if(i!=0) {
				sum += getRandomArbitrary(10000, 20000);
			} else {
				sum = dataset1[0];
			}
			dataset2.push(sum);
		}
		var data = {
			labels: WEEKS,
			datasets: [
				{
					label: 'Total application received',
					data: dataset1,
					borderColor: "rgb(255, 99, 132)",
					backgroundColor: red,
					stack: 'combined',
					type: 'bar'
				},
				{
					label: 'Cumulative applications received',
					data: dataset2,
					borderColor: "rgb(54, 162, 235)",
					backgroundColor: blue,
					stack: 'combined',
				}
			]
		};

		var ctx = document.getElementById("totalCumulativeAppReceivedChart");
		var myChart = new Chart(ctx, 	{
			type: 'line',
			data: data,
			options: {
				responsive: true,
				plugins: {
				title: {
					display: true,
					text: 'Total Application Received vs Cumulative Application Received'
				}
				},
				scales: {
				x: {
					display: true,
				},
				y: {
					display: true,
					type: 'logarithmic',
				}
				}
			},
		});
    </script>

	<script>
		let element1 = document.querySelector('#gaugeArea1');
		let options1 = {
			hasNeedle: true,
			needleColor: 'black',
			//arcColors: ['rgb(44, 151, 222)', 'lightgray'],
			arcColors: ['rgb(255, 84, 84)', 'rgb(61, 204, 91)'],
			arcDelimiters: [70],
			rangeLabel: ['0 Juta', '2 Juta'],
			//centralLabel: '70%',
			arcLabels: ['1.4 Juta'],
			needleStartValue: 50,
		}
		GaugeChart
		.gaugeChart(element1, 400, options1)
		.updateNeedle(70)

		let element2 = document.querySelector('#gaugeArea2');

		let options2 = {
			hasNeedle: true,
			needleColor: 'black',
			//arcColors: ['rgb(44, 151, 222)', 'lightgray'],
			arcColors: ['rgb(255, 84, 84)', 'lightgray'],
			arcDelimiters: [38],
			rangeLabel: ['0 Juta', '4.7 Juta'],
			centralLabel: '38%',
			arcLabels: ['1.8 Juta'],
			needleStartValue: 50,
		}

		GaugeChart .gaugeChart(element2, 400, options2) .updateNeedle(38)
	</script>

	<!-- Cumulative applications approved and received Chart -->
    <script>

		var dataset1 = [], dataset2 = [],dataset3 = [];
		for(var i = 0; i<WEEKS.length;i++) {
			dataset1.push(getRandomArbitrary(10000, 20000));
		}
		for(var i = 0; i<WEEKS.length;i++) {
			dataset2.push(getRandomArbitrary(10000, 20000));
		}
		for(var i = 0; i<WEEKS.length;i++) {
			dataset3.push(getRandomArbitrary(10000, 20000));
		}
		var data = {
			labels: WEEKS,
			datasets: [
				{
					label: 'Number of Application Approved',
					data: dataset1,
					borderColor: "rgb(255, 99, 132)",
					backgroundColor: red,
				},
				{
					label: 'Number of Application Rejected',
					data: dataset2,
					borderColor: "rgb(54, 162, 235)",
					backgroundColor: blue,
				},
				{
					label: 'Number of Application In Process',
					data: dataset3,
					borderColor: "rgb(255, 159, 64)",
					backgroundColor: green
				}
			]
		};

		var ctx = document.getElementById("applicationChart");
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: data,
			options: {
				plugins: {
				title: {
					display: true,
					text: 'Application Status'
				},
				},
				responsive: true,
				scales: {
				x: {
					stacked: true,
				},
				y: {
					stacked: true
				}
				}
			}
		});
    </script>

	<!-- PSK 2.0: Keseluruhan Chart -->
    <script>


		var dataset1 = [], dataset2 = [];
		for(var i = 0; i<3;i++) {
			dataset1.push(getRandomArbitrary(10000, 20000));
		}

		var data = {
			labels: [
				'Peruntukan (RM)',
				'Pemberian (RM)',
				'Baki (RM)'
			],
			datasets: [{
				label: 'PKS 2.0: Keseluruhan',
				data: dataset1,
				backgroundColor: [
				red,
				blue,
				green
				],
				hoverOffset: 4
			}]
		};

		var ctx = document.getElementById("keseluruhanChart");
		var myChart = new Chart(ctx, {
			type: 'doughnut',
			plugins: [ChartDataLabels],
			data: data,
			options: {
				responsive: true,
				plugins: {
					legend: {
						position: 'top',
					},
					title: {
						display: true,
						text: 'PKS 2.0: Kesuluruhan'
					},
					datalabels: {
						formatter: (value) => {
						return parseFloat(value).toFixed(2);value;
						}
					}
				}
			},
			});
    </script>

	<!-- strategi1 -->
    <script>


		var dataset1 = [], dataset2 = [];
		for(var i = 0; i<3;i++) {
			dataset1.push(getRandomArbitrary(10000, 20000));
		}

		var data = {
			datasets: [{
				label: 'Strategi 1',
				data: dataset1,
				backgroundColor: [
				red,
				blue,
				green
				],
				hoverOffset: 4
			}]
		};

		var ctx = document.getElementById("strategi1Chart");
		var myChart = new Chart(ctx, {
			type: 'doughnut',
			plugins: [ChartDataLabels],
			data: data,
			options: {
				responsive: true,
				plugins: {
					legend: {
						position: 'top',
						display: false
					},
					title: {
						display: true,
						text: 'Strategi 1'
					},
					datalabels: {
						formatter: (value) => {
						return parseFloat(value).toFixed(2);value;
						}
					}
				}
			},
			});
    </script>

	<!-- strategi2 -->
    <script>


		var dataset1 = [], dataset2 = [];
		for(var i = 0; i<3;i++) {
			dataset1.push(getRandomArbitrary(10000, 20000));
		}

		var data = {
			datasets: [{
				label: 'Strategi 2',
				data: dataset1,
				backgroundColor: [
				red,
				blue,
				green
				],
				hoverOffset: 4
			}]
		};

		var ctx = document.getElementById("strategi2Chart");
		var myChart = new Chart(ctx, {
			type: 'doughnut',
			plugins: [ChartDataLabels],
			data: data,
			options: {
				responsive: true,
					plugins: {
					legend: {
						position: 'top',
					},
					title: {
						display: true,
						text: 'Strategi 2'
					},
					datalabels: {
						formatter: (value) => {
						return parseFloat(value).toFixed(2);value;
						}
					}
				}
			},
		});
    </script>

	<!-- strategi3 -->
    <script>


		var dataset1 = [], dataset2 = [];
		for(var i = 0; i<3;i++) {
			dataset1.push(getRandomArbitrary(10000, 20000));
		}

		var data = {
			datasets: [{
				label: 'Strategi 3',
				data: dataset1,
				backgroundColor: [
				red,
				blue,
				green
				],
				hoverOffset: 4
			}]
		};

		var ctx = document.getElementById("strategi3Chart");
		var myChart = new Chart(ctx, {
			type: 'doughnut',
			plugins: [ChartDataLabels],
			data: data,
			options: {
				responsive: true,
				plugins: {
					legend: {
						position: 'top',
					},
					title: {
						display: true,
						text: 'Strategi 3'
					},
					datalabels: {
						formatter: (value) => {
						return parseFloat(value).toFixed(2);value;
						}
					}
				}
			},
			});
    </script>

	<!-- JUMLAH PEMBERIAN BANTUAN (JUMLAH BESAR) SETIAP MINGGU-->
    <script>

		var dataset1 = [], dataset2 = [],dataset3 = [];
		for(var i = 0; i<MINGGU.length;i++) {
			dataset1.push(getRandomArbitrary(10000, 20000));
		}
		var sum = 0;
		for(var i = 0; i<MINGGU.length;i++) {
			if(i!=0) {
				sum += getRandomArbitrary(10000, 20000);
			} else {
				sum = dataset1[0];
			}
			dataset2.push(sum);
		}
		var data = {
				labels: MINGGU,
				datasets: [{
				label: 'JUMLAH PEMBERIAN BANTUAN',
				data: dataset1,
				borderColor: redBorderColor,
				backgroundColor: red,
				hoverOffset: 4,
				order: 0,
				yAxisID: 'y',
				type: 'bar'
			},{
				label: 'JUMLAH BESAR',
				data: dataset2,
				borderColor: blueBorderColor,
				backgroundColor: blue,
				hoverOffset: 4,
				order: 1,
				yAxisID: 'y1',
			}]
		};

		var ctx = document.getElementById("d2Chart");
		var myChart = new Chart(ctx, {
			type: 'line',
			data: data,
			options: {
				responsive: true,
				interaction: {
				mode: 'index',
				intersect: false,
				},
				stacked: false,
				plugins: {
				title: {
					display: true,
					text: 'JUMLAH PEMBERIAN BANTUAN (JUMLAH BESAR) SETIAP MINGGU'
				}
				},
				scales: {
				y: {
					type: 'linear',
					display: true,
					position: 'left',
				},
				y1: {
					type: 'linear',
					display: true,
					position: 'right',

					// grid line settings
					grid: {
					drawOnChartArea: false, // only want the grid lines for one axis to show up
					},
				},
				}
			},
			});
    </script>

	<!-- TAHAP PEMBERIAN (%) KUMULATIF TERKINI MENGIKUT PROGRAM-->
    <script>

		var dataset1 = [], dataset2 = [],dataset3 = [];
		for(var i = 0; i<INITIATIVE.length;i++) {
			dataset1.push(getRandomArbitrary(10000, 20000));
		}
		var data = {
			labels: INITIATIVE,
			datasets: [
				{
					label: 'PEMBERIAN (%) KUMULATIF',
					data: dataset1,
					borderColor: "rgb(255, 99, 132)",
					backgroundColor: red,
				},
			]
		};

		var ctx = document.getElementById("d3Chart");
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: data,
			options: {
				plugins: {
				title: {
					display: true,
					text: 'TAHAP PEMBERIAN (%) KUMULATIF TERKINI MENGIKUT PROGRAM'
				},
				},
				responsive: true,
				scales: {
				x: {
					stacked: true,
				},
				y: {
					stacked: true
				}
				}
			}
		});
    </script>

	<!-- PEMBERIAN BANTUAN MINGGU INI BERBANDING SEBELUMNYA-->
    <script>

		var dataset1 = [], dataset2 = [],dataset3 = [];
		for(var i = 0; i<INITIATIVE.length;i++) {
			dataset1.push(getRandomArbitrary(10000, 20000));
		}
		var data = {
			labels: INITIATIVE,
			datasets: [
				{
					label: 'PEMBERIAN BANTUAN',
					data: dataset1,
					borderColor: "rgb(255, 99, 132)",
					backgroundColor: red,
				}
			]
		};

		var ctx = document.getElementById("d4Chart");
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: data,
			options: {
				plugins: {
				title: {
					display: true,
					text: 'PEMBERIAN BANTUAN MINGGU INI BERBANDING SEBELUMNYA'
				},
				},
				responsive: true,
				scales: {
				x: {
					stacked: true,
				},
				y: {
					stacked: true
				}
				}
			}
		});
    </script>

	<!-- C1. PSK 2.0: STATUS PERMOHONAN-->
    <script>


		var dataset1 = [], dataset2 = [];
		for(var i = 0; i<3;i++) {
			dataset1.push(getRandomArbitrary(10000, 20000));
		}

		var data = {
			labels: [
				'JP',
				'A',
				'T',
				'P'
			],
			datasets: [{
				label: 'PKS 2.0: STATUS PERMOHONAN',
				data: dataset1,
				backgroundColor: [
				red,
				blue,
				green
				],
				hoverOffset: 4
			}]
		};

		var ctx = document.getElementById("c1Chart");
		var myChart = new Chart(ctx, {
			type: 'doughnut',
			data: data,
			options: {
				responsive: true,
				plugins: {
				legend: {
					position: 'top',
				},
				title: {
					display: true,
					text: 'PKS 2.0: STATUS PERMOHONAN'
				}
				}
			},
			});
    </script>

	<!-- C2. JUMLAH PEMOHON DAN KECEKAPAN AGIHAN MINGGU TERKINI -->
    <script>

		var dataset1 = [], dataset2 = [];
		var dataset1 = [], dataset2 = [];
		for(var i = 0; i<INITIATIVE.length;i++) {
			dataset1.push(getRandomArbitrary(10000, 20000));
		}
		for(var i = 0; i<INITIATIVE.length;i++) {
			dataset2.push(getRandomArbitrary(10000, 20000));
		}

		var data = {
			labels: INITIATIVE,
			datasets: [{
				label: 'JUMLAH PEMOHON',
				data: dataset2,
				borderColor: blueBorderColor,
				backgroundColor: blue,
				hoverOffset: 4,
				type: 'line',
				order: 1,
				},{
				label: '% AGIHAN',
				data: dataset1,
				borderColor: redBorderColor,
				backgroundColor: red,
				hoverOffset: 4,
				order: 0
			}]
		};

		var ctx = document.getElementById("c2Chart");
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: data,
			options: {
				responsive: true,
				plugins: {
				legend: {
					position: 'top',
				},
				title: {
					display: true,
					text: 'JUMLAH PEMOHON DAN KECEKAPAN AGIHAN MINGGU TERKINI'
				}
				}
			},
			});
    </script>

	<!-- C3. JUMLAH PEMOHON DAN AGIHAN MINGGU TERKINI -->
    <script>

		var dataset1 = [], dataset2 = [];
		var dataset1 = [], dataset2 = [];
		for(var i = 0; i<INITIATIVE.length;i++) {
			dataset1.push(getRandomArbitrary(10000, 20000));
		}
		for(var i = 0; i<INITIATIVE.length;i++) {
			dataset2.push(getRandomArbitrary(10000, 20000));
		}

		var data = {
			labels: INITIATIVE,
				datasets: [{
				label: 'JUMLAH PEMOHON',
				data: dataset1,
				borderColor: redBorderColor,
				backgroundColor: red,
				hoverOffset: 4
			},{
				label: 'JUMLAH AGIHAN',
				data: dataset2,
				borderColor: blueBorderColor,
				backgroundColor: blue,
				hoverOffset: 4
			}]
		};

		var ctx = document.getElementById("c3Chart");
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: data,
			options: {
				indexAxis: 'y',
				// Elements options apply to all of the options unless overridden in a dataset
				// In this case, we are setting the border of each horizontal bar to be 2px wide
				elements: {
				bar: {
					borderWidth: 2,
				}
				},
				responsive: true,
				plugins: {
				legend: {
					position: 'right',
				},
				title: {
					display: true,
					text: 'JUMLAH PEMOHON DAN AGIHAN SETIAP PROGRAM (TERKINI)'
				}
				}
			},
			});
    </script>

	<!-- C4. PERBANDINGAN JUMLAH PERMOHONAN & JUMLAH AGIHAN SETIAP PROGRAM (MINGGU TERKINI VS MINGGU SEBELUMNYA -->
    <script>

		var dataset1 = [], dataset2 = [];
		var dataset1 = [], dataset2 = [];
		for(var i = 0; i<INITIATIVE.length;i++) {
			dataset1.push(getRandomArbitrary(10000, 20000));
		}
		for(var i = 0; i<INITIATIVE.length;i++) {
			dataset2.push(getRandomArbitrary(10000, 20000));
		}

		var data = {
				labels: INITIATIVE,
				datasets: [{
				label: '% PERMOHONAN',
				data: dataset1,
				borderColor: redBorderColor,
				backgroundColor: red,
				hoverOffset: 4
			},{
				label: '% AGIHAN',
				data: dataset2,
				borderColor: blueBorderColor,
				backgroundColor: blue,
				hoverOffset: 4
			}]
		};

		var ctx = document.getElementById("c4Chart");
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: data,
			options: {
				responsive: true,
				plugins: {
				legend: {
					position: 'top',
				},
				title: {
					display: true,
					text: 'PERBANDINGAN JUMLAH PERMOHONAN DAN JUMLAH AGIHAN SETIAP PROGRAM (% MINGGU TERKINI BERBANDING MINGGU SEBELUMNYA)'
				}
				}
			},
			});
    </script>


  </body>
</html>
