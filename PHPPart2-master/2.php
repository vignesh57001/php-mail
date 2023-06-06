<?php
// =========================================
// berikut adalah implementasi oop dalam php
// =========================================

//nama class "Binatang"
class Binatang{
	
	//property
	var $nama;
	var $warna;

	//method Binatang
	function tampilkan_Binatang(){
		return "Nama Binatang yaitu Kucing <br/>";
	}

	function warna_kulit(){
		return "Warna kulit Abu-abu <br/>";
	}

}

//output class
$Binatang = new Binatang();

//memanggil method tampikan_Binatang
echo $Binatang->tampilkan_Binatang();

//memanggil method warna_kulit
echo $Binatang->warna_kulit();

