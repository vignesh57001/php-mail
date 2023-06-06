<?php
// ==============
// Break pada PHP
// ==============
// Break biasanya menghentikan sebuah proses perintah for,
// foreach, while, do-while dll di dalam php
// Contoh menggunakan Break:

for($i=0; $i<10; $i++){
	if ($i==4)
	{
		break;
	}
	echo "$i";
	echo "<br/>";
}
echo "angka berhenti";

?>