<?php
// ============
// OOP pada PHP
// ============
// OOP atau Object Oriented Programming adalah 
// metode pemograman yang lebih berorientasi pada objek
// atau pemograman yang lebih berpusat terhadap objek.
// sebenarnya OOP lebih di dukung pada pemograman
// JAVA dan C++, tetapi di PHP sudah sangant di 
// dukung pada PHP5.
// berikut adalah penggunaan metode pada OOP dasar:

// 1. Class adalah sebuah konsep oop yang digunakan
// untuk membungkus data atau abstraksi prosedural atau
// library untuk menyimpan property dan method.

// 2. Property bisa di sebut juga dengan variable dari Class.

// 3. Method adalah suatu operasi berupa fungsi-fungsi yang dapat
// dapat di kerjakan oleh suatu objek.

// contoh Class, property dan method

// ini adalah class yg bernama "motor"
class Motor{
	// ini adalah property
	var $warna;
	var $merek;

	// ini adalah method
	function maju(){
		// isi fungsi
	}

	function mundur(){
		//isi fungsi
	}

}

//output class
$Motor = new Motor();
