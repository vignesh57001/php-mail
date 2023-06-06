<?php
// ================
// Foreach pada PHP
// ================
// Foreach adalah perulangan khusus untuk pembacaan nilai array melalui variabel perantara

echo "<h2> Contoh Foreach </h2>";

$nama = array("elsa","anna","stephan");

for($a=0; $a<count($nama); $a++){
	echo $nama[$a]."<br/>";
}
?>
