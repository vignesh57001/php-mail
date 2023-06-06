<?php
// ==================================
// Construct dan Destruct pada PHP
// ==================================
// Construct adalah method khusus yang akan dijalankan secara 
// otomatis pada saat sebuah objek dibuat (instansiasi), yakni 
// ketika perintah “new” dijalankan.
// Sedangkan Destruct adalah method khusus yang dijalankan 
// secara otomatis pada saat sebuah objek dihapus.
class Binatang{
	var $nama;
	var $warna;
	
	function __construct(){
		// isi fungsi construct
		echo "ini adalah construct <br/>";
	}

	function __destruct(){
		//isi fungsi destruct
		echo "Ini adalah destruct <br/>";
	}

	//method tampilkan nama Binatang
	function tampilkan_nama(){
		return "Ini adalah Binatang kucing <br/>";
	}

	//method tampilkan warna Binatang
	function warna_kulit(){
		return "Warna kulit abu-abu <br/>";
	}
}

// inisiasi class Binatang
$Binatang = new Binatang();

// memanggil method tampilkan_nama Binatang dari class Binatang
echo $Binatang->tampilkan_nama();
echo $Binatang->warna_kulit();
?>
