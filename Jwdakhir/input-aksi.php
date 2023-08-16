<?php 
    include "koneksi.php";
    $nama_lengkap = $_POST['nama_lengkap'];
    $wisata = $_POST['wisata'];
    $nomor_identitas = $_POST['nomor_identitas'];
    $no_hp = $_POST['no_hp'];
    $tanggal_kunjungan = $_POST['tanggal_kunjungan'];
    $pengunjung_dewasa = $_POST['pengunjung_dewasa'];
    $pengunjung_anak = $_POST['pengunjung_anak'];
    mysqli_query($kon, "INSERT INTO pemesanan VALUES('', '$wisata','$nama_lengkap','$nomor_identitas','$no_hp','$tanggal_kunjungan','$pengunjung_dewasa','$pengunjung_anak')");
    header("location:riwayat.php");
?>