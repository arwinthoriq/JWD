<!DOCTYPE html>
<html>
<head>
	<title>Proyek DTS VSGA 2023 | www.proyek-DTS-VSGA.com</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<!-- 
Author : Kang Handoko 
Site : www.proyek-DTS-VSGA.com
-->
<div class="content">
	<header>
		<h1 class="judul">DTS - VSGA 2023</h1>
		<h3 class="deskripsi">Kelas Junior Web Developer</h3>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="index.php?page=pesan"><b>PEMESANAN</b></a></li>
			<li><a href="index.php?page=data"><b>DAFTAR PENJUALAN</b></a></li>
			<li><a href="index.php?page=tutorial"><b>TUTORIAL</b></a></li>
		</ul>
	</div>
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'pesan':
				include "halaman/input_pemesanan.php";
				break;
			case 'data':
				include "halaman/data_pemesanan.php";
				break;
			case 'tutorial':
				include "halaman/tutorial.php";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/input_pemesanan.php";
	}
 
	 ?>
 
	</div>
</div>
</body>
</html>


