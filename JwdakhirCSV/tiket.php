<?php

$error = "";
$nama_lengkap  = "";
$nomor_identitas = "";
$no_hp = "";
$tanggal_kunjungan = "";
$pengunjung_dewasa = "";
$pengunjung_anak = "";
$message = "";

function clean_text($string)
{
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;
}

if (isset($_POST["submit"])) {
	if (empty($_POST["nama_lengkap"])) {
        $error .=
            '<p><label class="text-danger">Masukkan Dengan Benar</label></p>';
    } else {
        $nama_lengkap = clean_text($_POST["nama_lengkap"]);
    }
    if (empty($_POST["nomor_identitas"])) {
        $error .=
		'<p><label class="text-danger">Masukkan Dengan Benar</label></p>';
    } else {
        $nomor_identitas = clean_text($_POST["nomor_identitas"]);
    }
    if (empty($_POST["nomor_identitas"])) {
        $error .=
		'<p><label class="text-danger">Masukkan Dengan Benar</label></p>';
    } else {
		$nomor_identitas = clean_text($_POST["nomor_identitas"]);
    }
    if (empty($_POST["no_hp"])) {
        $error .=
		'<p><label class="text-danger">Masukkan Dengan Benar</label></p>';
    } else {
        $no_hp = clean_text($_POST["no_hp"]);
    }
    if (empty($_POST["tanggal_kunjungan"])) {
        $error .=
		'<p><label class="text-danger">Masukkan Dengan Benar</label></p>';
    } else {
        $tanggal_kunjungan = clean_text($_POST["tanggal_kunjungan"]);
    }
    if (empty($_POST["pengunjung_dewasa"])) {
        $error .=
		'<p><label class="text-danger">Masukkan Dengan Benar</label></p>';
    } else {
        $pengunjung_dewasa = clean_text($_POST["pengunjung_dewasa"]);
    }
    if (empty($_POST["pengunjung_anak"])) {
        $error .=
		'<p><label class="text-danger">Masukkan Dengan Benar</label></p>';
    } else {
        $pengunjung_anak = clean_text($_POST["pengunjung_anak"]);
    }
    if ($error == "") {
        $file_open = fopen("pemesanan.csv", "a");

        $form_data = [
            "nama_lengkap" => $nama_lengkap,
            "nomor_identitas" => $nomor_identitas,
            "no_hp" => $no_hp,
            "tanggal_kunjungan" => $tanggal_kunjungan,
            "pengunjung_dewasa" => $pengunjung_dewasa,
            "pengunjung_anak" => $pengunjung_anak,
          //  "Waduk_Greneng" => $Waduk_Greneng,
          //  "Goa_Terawang" => $Goa_Terawang,
         //   "Goa_Sentono" => $Goa_Sentono,
         //   "Kracakan_Watu_Gong" => $Kracakan_Watu_Gong,
        ];
        fputcsv($file_open, $form_data);
        $error = '<label class="text-success">Data Stored</label>';
        $nama_lengkap  = "";
        $nomor_identitas = "";
        $no_hp = "";
        $tanggal_kunjungan = "";
        $pengunjung_dewasa = "";
        $pengunjung_anak = "";
        $message = "";
     //   $Waduk_Greneng = "";
      //  $Goa_Terawang = "";
       // $Goa_Sentono = "";
       // $Kracakan_Watu_Gong = "";
    }
}

?><!DOCTYPE html>
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
				
				<form  class="login-form" method="post">
					<div class="form-group">
						<input class="form-control rounded-left" id="nama_lengkap" name="nama_lengkap" value="<?php echo $nama_lengkap; ?>" placeholder="Nama Lengkap" required="" type="text">
					</div>
					<div class="form-group">
						<input class="form-control rounded-left" id="nomor_identitas" maxlength="16" name="nomor_identitas" value="<?php echo $nomor_identitas; ?>" placeholder="Nomor Identitas" required="" type="text">
					</div>
					<div class="form-group">
						<input class="form-control rounded-left" id="no_hp" name="no_hp" placeholder="No. HP" value="<?php echo $no_hp; ?>" required="" type="number">
					</div>
					<div class="form-group d-md-flex">
						<select class="form-control rounded-left" id="" name="" onChange="document.getElementById('harga').value = this.value;">
							<option selected value="">
								Pilih Tempat Wisata
							</option>
                            <option value="5000">Waduk Greneng</option>
                            <option value="10000">Goa Terawang</option>
                            <option value="4000">Goa Sentono</option>
                            <option value="2000">Kracakan Watu Gong</option>
						</select> 
					</div>
					<div class="form-group">
						<input class="form-control rounded-left" id="tanggal_kunjungan" name="tanggal_kunjungan" placeholder="Tanggal Kunjungan" value="<?php echo $tanggal_kunjungan; ?>" required="" type="date">
					</div>
					<div class="form-group">
						<input class="form-control rounded-left" id="pengunjung_dewasa" name="pengunjung_dewasa" placeholder="Pengunjung Dewasa" value="<?php echo $pengunjung_dewasa; ?>" required="" type="text">
					</div>
					<div class="form-group">
						<input class="form-control rounded-left" id="pengunjung_anak" name="pengunjung_anak" placeholder="Pengunjung Anak-Anak Usia di bawah 12 Tahun"  value="<?php echo $pengunjung_anak; ?>" required="" type="text">
					</div>
					<div class="form-group">
                        <input class="form-control rounded-left" id="harga" name="harga" type="text" placeholder="Harga"  value="" required> 
					</div>
					<div class="form-group" id="myDIV"></div><input required="" type="checkbox"> <label>Saya dan/atau rombongan telah membaca, mamahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan</label><br>
					<br>
					<div class="form-group d-md-flex">
						<div>
							<label>
								<input class=" btn btn-success rounded submit px-3" onclick="total_bayar()" type="button" value="Hitung Total Bayar"> 
								<button class=" btn btn-primary rounded submit px-3" type="submit" value="submit" name="submit">Pesan Tiket</button>
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
	        var harga_id = document.getElementById("harga").value;
	        var hasildewasa = dewasa * harga_id;
	        var hasilanak = anak * harga_id * 50 / 100;
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