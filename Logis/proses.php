<?php
	$nama		= $_POST['inama'];
	$tujuan     = $_POST['itujuan'];
	$jarak		= $_POST['ijumlah'];
	$biaya		= $_POST['otiket'];
	$total		= $_POST['ototal'];
	
	echo "<head><title>baca</head></title>";
	$fp = fopen("baca.txt", "a+");
	fputs($fp, "$nama|$tujuan|$jarak|$biaya|$total\n");
	fclose($fp);

	echo "Terima kasih menggunakan jasa pengiriman JCC<br>";
	echo "<a href=data.php> Lihat Pesanan </a><br>";
?>