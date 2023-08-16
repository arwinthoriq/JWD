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
	<link href="css/style-bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
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
<body>
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
								<li>
									<a href="harga.php">Harga</a>
								</li>
								<li class="active">
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
			<div class="login-wrap p-4 p-md-5">
				<center>
					<h4><b>Form Pemesanan</b></h4>
				</center>
				<form action="input-aksi.php" class="login-form" method="post">
					<div class="form-group">
						<input class="form-control rounded-left" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" required="" type="text">
					</div>
					<div class="form-group">
						<input class="form-control rounded-left" id="nomor_identitas" maxlength="16" name="nomor_identitas" placeholder="Nomor Identitas" required="" type="text">
					</div>
					<div class="form-group">
						<input class="form-control rounded-left" id="no_hp" name="no_hp" placeholder="No. HP" required="" type="number">
					</div>
					<div class="form-group d-md-flex">
						<select class="form-control rounded-left" id="" name="" onchange="location = this.value;">
							<option selected value="">
								Pilih Tempat Wisata
							</option>
							<?php
								include "koneksi.php";
								if (isset($_GET['id'])) {
								$id = $_GET['id'];
								$query = mysqli_query($kon, "SELECT * FROM wisata WHERE id='$id'");
								$result_nama = mysqli_fetch_array($query);
								$nama = $result_nama['nama'];
								} else {
									$nama = "";
								}  
								$query = mysqli_query($kon, 'SELECT * FROM wisata');  
								$result = array(); 
								while ($data = mysqli_fetch_array($query)) {
									$result[] = $data; //result dijadikan array 
								}                                   
								//selanjutnya result array di foreach 
								foreach ($result as $value){                             
							?>
							<option value="tiket.php?id=<?=$value['id']?>">
								<?php echo $value['nama']; ?>
							</option>
								<?php } ?>
						</select> <input class="form-control rounded-left" id="wisata" name="wisata" placeholder="<?php echo $nama ?>" type="text" value="<?php echo $nama ?>">
					</div>
					<div class="form-group">
						<input class="form-control rounded-left" id="tanggal_kunjungan" name="tanggal_kunjungan" placeholder="Tanggal Kunjungan" required="" type="date">
					</div>
					<div class="form-group">
						<input class="form-control rounded-left" id="pengunjung_dewasa" name="pengunjung_dewasa" placeholder="Pengunjung Dewasa" required="" type="text">
					</div>
					<div class="form-group">
						<input class="form-control rounded-left" id="pengunjung_anak" name="pengunjung_anak" placeholder="Pengunjung Anak-Anak Usia di bawah 12 Tahun" required="" type="text">
					</div>
					<?php                
						if (isset($_GET['id'])) {          
							$id	= $_GET['id'];
							$query = mysqli_query($kon, "SELECT * FROM wisata WHERE id='$id'");
							$result = mysqli_fetch_array($query);
							$harga = $result['harga'];
						} else {
							$harga = "";
						}  
					?>
					<div class="form-group">
						<input class="form-control rounded-left" id="harga" placeholder="Harga Tiket Rp <?php echo $harga ?>" type="text">
					</div>
					<div class="form-group" id="myDIV"></div><input required="" type="checkbox"> <label>Saya dan/atau rombongan telah membaca, mamahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan</label><br>
					<br>
					<div class="form-group d-md-flex">
						<div>
							<label>
								<input class=" btn btn-success rounded submit px-3" onclick="total_bayar()" type="button" value="Hitung Total Bayar"> 
								<button class=" btn btn-primary rounded submit px-3" type="submit" value="Simpan">Pesan Tiket</button>
								<a class=" btn btn-danger rounded submit px-3" href="harga.php">Cancel</a>
							</label>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
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
	<script type="text/javascript">	 
	    function total_bayar() {  
	        var dewasa = document.getElementById("pengunjung_dewasa").value;
	        var anak = document.getElementById("pengunjung_anak").value;
	        var hasildewasa = dewasa * <?php  echo $result['harga']?>;
	        var hasilanak = anak * <?php  echo $result['harga']?> * 50 / 100;
	        var total = hasildewasa + hasilanak;
	        document.getElementById("myDIV").innerHTML ="<h5>" + "<b>" + "Total Bayar Rp " + total + "<\/b>" + "<\/h5>" ; 
	    }  
	</script> 
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
</body>
</html>