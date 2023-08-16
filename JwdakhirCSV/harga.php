<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<title>Wisata Blora</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/elegant-icons.css" rel="stylesheet" type="text/css">
	<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
	<link href="css/nice-select.css" rel="stylesheet" type="text/css">
	<link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
	<link href="css/slicknav.min.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
	<script src="js/jquery-3.7.0.js">
	</script>
	<script src="js/jquery.dataTables.min.js">
	</script>
	<style>
		.card {
			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
			transition: 0.3s;
			width: 40%;
		}
		.card:hover {
			box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
		}
		.container {
			padding: 2px 16px;
		}
	</style>
</head>
<body style="background-color: #f8f9fd;">
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-2">
					<div class="header__logo">
						<h4>WISATABLORA</h4>
					</div>
				</div>
				<div class="col-lg-10">
					<div class="header__options">
						<nav class="header__menu mobile-menu">
							<ul>
								<li>
									<a href="index.php">Home</a>
								</li>
								<li class="active">
									<a href="harga.php">Harga</a>
								</li>
								<li>
									<a href="tiket.php">Pesan Tiket</a>
								</li>
								<li>
									<a href="riwayat.php">Riwayat</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>
	<?php
		$CSVvar = fopen("wisata.csv", "r");
		if ($CSVvar !== FALSE) {
	?>
	<section class="arrival spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="section-title">
						<br>
						<h2>Wisata Blora</h2><span style="color:#47f07a;">Rekomendasi Tempat Wisata di Blora</span>
					</div>
				</div>
			</div>
			<table class="display" id="example" style="width:100%">
				<thead>
					<tr>
						<th>Gambar</th>
						<th>Nama</th>
						<th>Lokasi</th>
						<th>Harga</th>
					</tr>
				</thead>
				<tbody>
				<?php
					while (! feof($CSVvar)) {
						$data = fgetcsv($CSVvar, 1000, ",");
						if (! empty($data)) {
				?>				
					<tr>
						<td><?php echo "<img src='img/".$data[3]."'>";?></td>
						<td><?php  echo $data[1]?></td>
						<td><?php  echo $data[2]?></td>
						<td>Rp <?php  echo $data[4]?></td>
					</tr>
				<?php } ?>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</section>
	<?php
		}
		fclose($CSVvar);
	?>
	<footer class="footer">
		<div class="container">
			<div class="footer__copyright">
				<div class="row">
					<div class="col-lg-12 text-center">
						<p>Tugas Akhir Pelatihan Junior Web Developer 2023 | Arwin Thoriq R</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script src="js/jquery-3.3.1.min.js">
	</script> 
	<script src="js/bootstrap.min.js">
	</script> 
	<script src="js/jquery.magnific-popup.min.js">
	</script> 
	<script src="js/mixitup.min.js">
	</script> 
	<script src="js/jquery.nice-select.min.js">
	</script> 
	<script src="js/jquery.nicescroll.min.js">
	</script> 
	<script src="js/jquery.slicknav.js">
	</script> 
	<script src="js/owl.carousel.min.js">
	</script> 
	<script src="js/main.js">
	</script> 
	<script src="js/jquery-3.7.0.js">
	</script> 
	<script src="js/jquery.dataTables.min.js">
	</script> 
	<script>
	   $(document).ready(function() {
	   $('#example').DataTable();
	} );
	</script>
</body>
</html>