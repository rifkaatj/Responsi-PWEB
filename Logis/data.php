<?php
	echo "<head><title>Jasa Kirim</title></head>";
	$fp=fopen("baca.txt", "r");
	echo "<table border=0>";
	echo "<a href=index.html> Menu Utama </a><br><br>";
	while ($isi=fgets($fp,80)) 
	{
		$pisah=explode("|", $isi);
		echo "<tr><td>Nama </td><td>  : $pisah[0]</td></tr>";
		echo "<tr><td>Tujuan </td><td>: $pisah[1]</td></tr>";
		echo "<tr><td>Jarak </td><td> : $pisah[2]</td></tr>";
		echo "<tr><td>Biaya </td><td> : $pisah[3]</td></tr>";
		echo "<tr><td>Total </td><td> : $pisah[4]</td></tr>
		<tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
	}

	echo "</table>";
?>