<?php
// =====================
// Inheritence pada PHP
// =====================
// Inheritence (Pewarisan/Penurunan) adalah konsep pemrograman 
// dimana sebuah class dapat ‘menurunkan’ property dan method 
// yang dimilikinya kepada class lain.
// Konsep inheritance digunakan untuk memanfaatkan fitur 
// ‘code reuse’ untuk menghindari duplikasi kode program.
// berikut adalah conto dari Inheritence


class Binatang{
	var $nama;
	var $warna;

	public function beli_Binatang(){
		return "Beli binatang baru";
	}
}

class Kucing extends Binatang{

	public function lihat_Binatang() {
		return "nama: $this->nama, warna: $this->warna";
	}
}

$Kucing_baru = new Kucing();

$Kucing_baru->nama = "Oren";
$Kucing_baru->warna = "Orange";

echo $Kucing_baru->beli_Binatang();
echo "<br/>";
echo $Kucing_baru->lihat_Binatang();
