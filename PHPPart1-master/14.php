<?php
//============================================
// Cara menampilkan Tanggal dan Waktu pada PHP
// ===========================================
// berikut adalah variabel untuk menampilkan tanggal
// l = menampilkan Nama Hari pada hari ini
// D = menampilkan Nama Hari pada hari ini dalam bentuk tiga digit
// d = menampilkan Tanggal pada hari ini
// M = menampilkan Bulan pada hari ini
// m = menampilkan Nama Bulan pada hari ini
// Y = menampilkan Tahun dalam bentuk angka pada hari ini
// y = menampilkan Tahun dalam bentuk dua digit angka terakhir pada hari ini
// berikut adalah contoh variabel untuk menampilkan waktu
echo date('l, d-m-Y');
echo "<br/>";
echo date('d-M-y');
echo "<br/>";
echo date('D-m-y');
echo "<br/>";

// berikut adalah variabel untuk menampilkan waktu
// s = untuk menampilkan detik saat ini dalam tampilan angka 0-59
// i = untuk menampilkan menit saat ini dalam tampilan angka 0-59
// h = untuk menampilkan jam saat ini dalam tampilan angka 1-12
// H = untuk menampilkan jam saat ini dalam format 24 jam
// a = untuk menampilkan waktu am atau pm saat ini

echo date('h:i:s a');
?>