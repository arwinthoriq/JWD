<div class="halaman">
	<h2>Penjelasan Aplikasi Pemesanan Nasi Kotak</h2>
	<hr>
	<?php
		$myfile = fopen("readme.txt", "r") or die("Unable to open file!");
		echo fread($myfile,filesize("readme.txt"));
		fclose($myfile);
	?>	
</div>