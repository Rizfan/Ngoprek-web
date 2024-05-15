<?php
echo "Hello World!";

$nama = "Fikri"; // Tipe data string

$angka = 8; // Tipe data angka

$desimal = 8.4; // Tipe data Float

$boolean = true; // Tipe data Boolean

$array = ["Fikri", "Farhan", "Fadli"]; // Tipe data Array

$date = date("Y-M-l"); // Tipe data Date

$datetime = date("Y-m-d H:i:s"); // Tipe data Date Time

echo $nama . "<br>";
echo $angka . "<br>";
echo $desimal . "<br>";
echo $boolean . "<br>";
echo $array[0] . "<br>";
echo $date . "<br>";
echo $datetime . "<br>";

$penjumlahan = $angka + $desimal; // Operator Aritmatika
$pengurangan = $angka - $desimal; // Operator Aritmatika
$perkalian = $angka * $desimal; // Operator Aritmatika
$pembagian = $angka / $desimal; // Operator Aritmatika
$modulus = $angka % $desimal; // Operator Aritmatika

echo $penjumlahan . "<br>";
echo $pengurangan . "<br>";
echo $perkalian . "<br>";
echo $pembagian . "<br>";
echo $modulus . "<br>";
