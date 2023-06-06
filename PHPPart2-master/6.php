<?php 
// =====================
// Setter dan Getter PHP
// =====================
// setter berfungsi untuk men-set atau mengatur sebuah nilai didalam sebuah 
// attribute, sedangkan getter berfungsi untuk mendapatkan sebuah value atau 
// nilai dari attribute yang terdapat pada setter, contoh
class kendaraan {
	private $nama;
	private $warna;
	private $jenis;
	private $keterangan;

	// method untuk setter
	public function setnama($a){
		$this->nama = $a;
	}
	public function setwarna($a){
		$this->warna = $a;
	}
	public function setjenis($a){
		$this->jenis = $a;
	}
	public function setketerangan($a){
		$this->keterangan = $a;
	}

	// method untuk getter
	public function getnama() {
		return $this->nama; 
	}
	public function getwarna() {
		return $this->warna;
	}
	public function getjenis() {
		return $this->jenis;
	}
	public function getketerangan() {
		return $this->keterangan;
	}
}

// proses instansiasi object
// buat sebuah object kendaraan
$kendaraan = new kendaraan;
// masukan sebuah nama didalam method setter
$kendaraan->setnama("Mobil");
$kendaraan->setwarna("Merah");
$kendaraan->setjenis("roda empat");
$kendaraan->setketerangan("mobil perlu dilakukan pengecekan");

// menampilkan  nama yang telah di set diatas
echo "Nama Kendaraan : <b>".$kendaraan->getnama()."</b> <br>"; 
echo "Warna Kendaraan : <b>".$kendaraan->getwarna()."</b> <br>";
echo "Jenis Kendaraan : <b>".$kendaraan->getjenis()."</b> <br>";
echo "Keterangan Kendaraan : <b>".$kendaraan->getketerangan()."</b> <br>"; 
?>