<?php
// ====================================================
// Membuat Form dengan method GET, POST dan REQUEST PHP
// ====================================================
// pertama kita akan membuat file lagi dengan judul
// index.php, karena di dalam index.php ini kita
// akan memunculkan form nya. berikut adalah contoh nya
// membuat method dan menangkap method nama menggunakan GET:
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];

// menampilkan data 
echo "Nama anda adalah " . $nama;
echo "<br/>";
echo "Alamat anda " . $alamat;


// menggunakan method POST:

// $nama = $_POST['nama'];
// $alamat = $_POST['alamat'];

// Menampilkan data

//echo "Nama anda adalah " . $nama;
//echo "<br/>";
//echo "Alamat anda " . $alamat;


// menggunakan method REQUEST:

// $nama = $_POST['nama'];
// $alamat = $_POST['alamat'];

// Menampilkan data

//echo "Nama anda adalah " . $nama;
//echo "<br/>";
//echo "Alamat anda " . $alamat;


?>
