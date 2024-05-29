<?php

if (isset($_POST['submit'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $alamat = htmlspecialchars($_POST['alamat']);
    echo "Nama : $nama <br>";
    echo "Alamat : $alamat <br>";
}
