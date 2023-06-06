<?php
// ============================
// Include() dan Require() pada PHP
// ============================
// Include() dan Require() adalah suatu suatu fungsi pada program PHP
// untuk menyisipkan sebuah file PHP di dalam nya.

// Pada dasarnya fungsi include() dan require() memiliki kegunaan yang
// sama, hanya saja pada fungsi include(), jika file yang disertakan
// ternyata tidak ditemukan (karena lokasi yang salah atau memang file
// tidak ada) maka program atau perintah PHP selanjutnya (setelah include)
// akan tetap dijalankan walaupun ditampilkan error. Sedangkan require()
// jika file yang disertakan tidak ditemukan (karena lokasi yang salah atau
// memang file tidak ada) maka program atau perintah PHP selanjutnya (setelah
// include) tidak akan dijalankan.
// Contoh menggunakan Include()
// sebelum itu kita membuat file "tes.php"
include('tes.php'); 

echo "teks diatas di panggil dari tes.php menggunakan include";
echo "<br/>";

require('tes.php');
echo "teks diatas di panggil dari tes.php menggunakan require";
echo "<br/>";

// Sedangkan menggunakan include_once() dan require_once() akan memastikan
// bahwa file yang di sertakan hanya satu kali walaupun di tulis berkali-
// kali, jika tidak menggunakan _once makan terjadi error jika kita mennyertakan
// file lebih dari satu kali
// contoh include_once

include_once('tes2.php');
echo "<br/>";
echo "ini include_once";
echo "<br/>";

// contoh require_once
// require_once('tes2.php');
// echo "<br/>";
// echo "ini require_once";

?>