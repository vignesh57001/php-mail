<?php
// =================
// Continue pada PHP
// =================
// Continue berfungsi untuk melanjutkan proses perintah for, 
// while, do-while dll di dalam pemograman php
// contoh menggunakan Continue:

for($i=0; $i<10; $i++){
	if ($i==4)
	{
		continue;
	}
	echo "$i";
	echo "<br/>";
}
	echo "angka berjalan";

?>