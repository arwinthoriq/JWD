<div class="halaman">
<body>
    <h2>Form Pemesanan Nasi Kotak</h2>
    
    <form method="POST">
        <table>
		<tr><td rowspan="5"><img width="250" height="150" src="images/nasi.jpg" style="border:3px solid black" ></td></tr>
            <tr>
                <td>Cabang</td>
                <td>:</td>
                <td>
                <select name="cabang" value="<?php echo $cabang;?>">
                <?php 
                    $all_cabang = ["Harmoni", "Sarinah", "Grogol", "Senayan", "Pluit", "Cempaka"];

                    for($i=0; $i<count($all_cabang); $i++) {
                        if($all_cabang[$i] != $cabang) {
                            echo "<option value='".$all_cabang[$i]."'>".$all_cabang[$i]."</option>";
                        }
                    }
                ?>
                </select>
                </td>
            </tr>
            <tr>
                <td>Nama Pelanggan</td>
                <td>:</td>
                <td><input type="text" name="pelanggan" placeholder="Masukkan Nama Anda"></td>
            </tr>
            <tr>
                <td>Nomor HP</td>
                <td>:</td>
                <td><input type="text" name="nomor" placeholder="Masukkan Nomor HP Anda"></td>
            </tr>
            <tr>
                <td>Jumlah Kotak</td>
                <td>:</td>
                <td><input type="text" name="jumlah" placeholder="Jumlah yang anda pesan"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="pesan" value="Pesan">
                </td>
            </tr>
        </table>
    </form>
    <hr />
    <h3>Hasil Inputan Pemesanan :</h3>
    <!-- Coding PHP hitung total bayar ketik disini -->
    <?php
	include "rupiah.php";
	
    $harga_satuan = 50000;
    if(isset($_POST['pesan'])){ //ketika di-klik hitung maka mengambil data dari
        $cabang = $_POST['cabang'];
        $pelanggan = $_POST['pelanggan'];
        $nomor_hp = $_POST['nomor'];
        $jumlah = $_POST['jumlah'];
        $tagihan_awal = $harga_satuan * $jumlah;
        $diskon = 0;
        $tagihan_akhir = $tagihan_awal;

        if ($tagihan_awal >= 1000000) {
            $diskon = $tagihan_awal * 0.05;
            $tagihan_akhir = $tagihan_awal - $diskon;
        }
        echo "
            <table width='100%' border='1' cellpadding='4'>
                <tr>
                    <th>Cabang</th>
                    <th>Nama Pelanggan</th>
                    <th>Nomor HP</th>
                    <th>Jumlah Kotak</th>
                    <th>Total Tagihan Awal</th>
                    <th>Diskon</th>
                    <th>Total Tagihan Akhir</th>
                </tr>
                <tr>
                    <td>";echo $cabang; echo"</td>
                    <td>";echo $pelanggan; echo"</td>
                    <td>";echo $nomor_hp; echo "</td>
                    <td>";echo $jumlah; echo "</td>
                    <td>";echo rupiah($tagihan_awal); echo "</td>
                    <td>";echo rupiah($diskon); echo "</td>
                    <td>";echo rupiah($tagihan_akhir); echo "</td>
                </tr>
            </table>
        ";

        //Export CSV
        $arrdata = array($cabang, $pelanggan, $nomor_hp, $jumlah, $tagihan_awal, $diskon, $tagihan_akhir);
	
        $fp = fopen('data/pemesanan.csv', 'a+');
        
        $tulis = fputcsv($fp, $arrdata);
        
        if ($tulis) {
            echo "<h6 align='right'>Data berhasil disimpan</h6>";	
        } else {
            echo "<p align='right'>Data gagal disimpan ....</p>";	
        }
        fclose($fp);
    }
?>
</body>
</div>