<?php
// Syntaks PHP

// Standart Output
//echo, print
//print_r : untuk melihat isi array
//var_dump : untuk melihat isi variable

echo "Firman Syariffudin <br> "; 
print "Firman Syariffudin <br>";
print_r ("Firman Syariffudin <br>");
var_dump ('Firman Syariffudin') ;
echo"<br>";
echo 123 ;
echo"<br>";
echo true;
echo"<br>";


// VARIABLE DAN TIPEDATA
//VARIABLE
$nama = "Firman";
echo "Halo, Nama Saya $nama";
echo"<br>";
//kalau pakai kutip satu maka akan tampil
echo 'Halo, Nama Saya $nama';
echo"<br>";
//end VARIABLE

//Operator
//ARITMATIKA
echo 1+1;
echo"<br>";

$x = 10;
$y = 200;
echo "Hasilnya= "; echo $x * $y;
echo "<br>";

//PENGGABUNG STRING / CONCATENATION / CONCAT
$namaDepan = "Firman";
$namaBelakang= "Syariffudin";
echo $namaDepan." ".$namaBelakang ;
echo "<br>";

//Assignment
// =, +=, -=, *=, /=, %=, .=
$x = 1;
$x += 5;
echo $x;
echo "<br>";
$nama = "Firman";
$nama .= " ";
$nama .= "Syariffudin";
echo $nama;
echo "<br>";

//PERBANDINGAN
// <, >, <=, >=, !=, ==
//IDENTITAS 
// ===, !==
var_dump( 1 < 5 );
var_dump( 1 > 5 );
var_dump( 1 == 5 );
var_dump( 1 == "1" );
var_dump( 1 === "1" );
var_dump( 1 !== "1" );
echo "<br>";

//LOGIKA
// &&, ||, !
//&&= dua duanya harus benar maka true
//||= cukup satu yg benar maka true
//!= kebalikan 
$x = 10 ;
var_dump($x < 20 && $x % 2 == 0);
echo "<br>";






?>
