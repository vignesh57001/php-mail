<?php
// ====================
// Switch Case pada PHP
// ====================
// Switch case adalah sebuah program yang menjalankan perintah memeriksa kebenaran sebuah variabel.
// Contoh
// angka bisa di ubah
$angka = 6;

switch ($angka) {
	case 1:
		echo "Ini adalah angka satu"; 
		break;
	case 2:
		echo "ini adalah angka dua";
		break;	
	default:
		echo "ini tidak ada dalam variabel";
		break;
}
?>