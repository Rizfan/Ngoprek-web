<?php
//struktur kondisi
echo "Struktur Kondisi <br>";
$nilai = 80;
echo "Nilai Anda $nilai <br>";
if ($nilai >= 80) {
    echo "Nilai Anda A <br>";
} else if ($nilai >= 70) {
    echo "Nilai Anda B <br>";
} else if ($nilai >= 60) {
    echo "Nilai Anda C <br>";
} else if ($nilai >= 50) {
    echo "Nilai Anda D <br>";
} else {
    echo "Nilai Anda E <br>";
}

//switch case
echo "<br>Switch Case <br>";
$nilai = "A";
echo "Predikat nilai anda $nilai <br>";
switch ($nilai) {
    case "A":
        echo "Nilai Anda 80 - 100 <br>";
        break;
    case "B":
        echo "Nilai Anda 70 - 79 <br>";
        break;
    case "C":
        echo "Nilai Anda 60 - 69 <br>";
        break;
    case "D":
        echo "Nilai Anda 50 - 59 <br>";
        break;
    default:
        echo "Nilai Anda 0 - 49 <br>";
}
