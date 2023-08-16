<div class="halaman">
	<h2>Daftar Penjualan Nasi Kotak</h2>
	<table width="100%" border="1">
<tr>
	<th>NO</th>
	<th>CABANG</th>
	<th>NAMA PELANGGAN</th>
    <th>NOMOR HP</th>
    <th>JUMLAH KOTAK</th>
    <th>TOTAL TAGIHAN AWAL</th>
    <th>DISKON</th>
    <th>TOTAL TAGIHAN AKHIR</th>
</tr>

<?php
include "rupiah.php";
if (($handle = fopen("data/pemesanan.csv", "r")) !== FALSE) {
	$row = 1;
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		echo "<tr>";
		echo "<td>".$row++."</td>";
		echo "<td>".$data[0]."</td>";
		echo "<td>".$data[1]."</td>";
		echo "<td>".$data[2]."</td>";
        echo "<td>".$data[3]."</td>";
        echo "<td>".rupiah($data[4])."</td>";
        echo "<td>".rupiah($data[5])."</td>";
        echo "<td>".rupiah($data[6])."</td>";
		echo "</tr>";
    } //end while
	fclose($handle);
} //end if

?>
</table>
<?php echo "<p align='right'><a href='data/pemesanan.csv'>Download file CSV</a></p>";?>
	
</div>