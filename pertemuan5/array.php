<?php
//Tipe data array
echo "Tipe data array <br>";
$buah = ["Apel", "Jeruk", "Mangga", "Durian"];
echo $buah[0] . "<br>";
echo $buah[3] . "<br>";

//perulangan foreach
echo "<br>Perulangan Foreach <br>";
foreach ($buah as $b) {
    echo $b . "<br>";
}
