<?php
// ==============
// visibility PHP
// ==============
// visibility atau access modifier pada php di gunakan untuk mengatur
// hak akses terhadap property dan method dari sebuah class
// visibility dibagi menjadi 4 hak akses yaitu:
// 1. Private
// private adalah hak akses yang paling rendah, jika property atau method 
// yg menggunakan hak akses private, maka property atau method tersebut
// hanya dapat diakses di lingkup class dimana property atau method tersebut
// didefinisikan, contoh nya
/*class Komputer{
	var $prosesor = "Core i7";
	private $memory = "4G B";
	
	function get_data()
	{
		return $this->prosesor." - ".$this->memory;
	}
}
$komputer_atrisa = new Komputer();
echo $komputer_atrisa->get_data();
*/

// 2. Protected
// visibility selanjut nya adalah Protected, jika protected atau method menggunakan
// hak akses protected maka, property atau method tersebut hanya bisa diakses melalui 
// class nya itu sendiri dan class turunannya
/*class komputer
{
	protected $prosesor = "Core i7";
	protected $memory = "4 GB";
	protected function memutar_video()
	{
		return "Komputer memutar video";
	}
 
	function get_data_komputer()
	{
		return $this->prosesor." ".$this->memory;
	}
}
 
class laptop extends komputer
{
	function get_data_laptop()
	{
		return $this->prosesor." ".$this->memory;
	}
}
 
$komputer_budi = new komputer();
$laptop_budi = new laptop();
echo $komputer_budi->get_data_komputer();
echo "<br/>";
echo $laptop_budi->get_data_laptop();
echo "<br/>";
echo $komputer_budi->memutar_video();
*/

/*
Keterangan :

- Perhatikan pada line 4 dan 5 class komputer, kita memiliki 2 property (prosesor, memory) memiliki visibility protected
- Perhatikan pada line 27, kita coba mengakses method get_data_komputer melalui object komputer_budi, dimana method get_data_komputer mengakses nilai property prosesor, dan property memory yang visibility protected, maka dibrowser ditampilkan text “Core i7 4 GB”
- Jadi nilai dari property yang visibility protected dapat diakses  melalui method yang berada didalam class itu sendiri.
- Perhatikan pada line 29, kita coba mengakses method get_data_laptop melalui object laptop_budi, object laptop_budi menggunakan class laptop, dimana class laptop merupakan class turunan dari class komputer, didalam method get_data_laptop kita mengekses nilai property prosesor dan property memory yang visibility protected, maka dibrowser ditampilkan text “Core i7 4 GB”, jadi nilai property yang visibility protected tetap dapat diakses dalam class turunannya, dalam contoh ini adalah class laptop yang merupakan turunan dari class komputer.
- Perhatikan pada line 31 kita coba mengakses method memutar_video yang memiliki visibility protected, kita mengakses method tersebut melalui object komputer_budi, hal tersebut akan menghasilkan error seperti gambar diatas, dikarenakan kita mengakses method protected langsung melalui object, hal tersebut tidak diperbolehkan untuk property atau method yang memiliki visibility protected.
*/

// 3. Public 
// Visibility selanjutnya adalah public, visibility public adalah visibility tertinggi yang ada pada oop, jika sebuah property atau method menggunakan public, maka property atau method tersebut dapat diakses melalui class itu sendiri, ataupun melalui object, contoh
/*class komputer
{
	public $prosesor = "Core i7";
	public $memory = "4 GB";
	public function memutar_video()
	{
		return "Komputer memutar video";
	}
}
 
$komputer_kalua = new komputer();
echo $komputer_kalua->prosesor;
echo "<br/>";
echo $komputer_kalua->memory;
echo "<br/>";
echo $komputer_kalua->memutar_video();
*/