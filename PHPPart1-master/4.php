<?php
// ==================
// Fungsi pada String
//===================
// ada beberapa cara agar Fungsi String berjalan yaitu dengan memanipulasi String
// beriku adalah cara agar memanipulasi String pada PHP :
// 1. menggunakan "strlen()"
// 2. menggunakan "str_word_count()"
// 3. menggunakan "strrev()"
// 4. menggunakan "str_replace()"

// Berikut adalah contoh mengunakan "strlen()"
$kalimat1 = "Jika kita tak pernah jatuh cinta";
echo strlen($kalimat1);
echo "<br/>";

// Berikut adalah contoh menggunakan "str_word_count()"
$kalimat2 = "Jika kita tak pernah jatuh cinta";
echo str_word_count($kalimat2);
echo "<br/>";

//Berikut adalah contoh menggunakan "strrev()"
$kalimat3 = "Atrisa Endya Nur Hidayah";
echo strrev($kalimat3);
echo "<br/>";

//Berikut adalah contoh menggunakan "str_replace()"
$kalimat4 = "Teh Botol Sosro";
echo str_replace("Sosro","Botol",$kalimat4);
?>
