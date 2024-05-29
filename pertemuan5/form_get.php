<form method="get">
    <label for="nim">NIM</label>
    <input type="number" name="nim" id="nim">
    <br>
    <label for="no_telp">No Telp</label>
    <input type="number" name="no_telp" id="no_telp">
    <br>
    <button type="submit" name="submit">Kirim</button>
</form>

<?php

if (isset($_GET['submit'])) {
    $nim = $_GET['nim'];
    $no_telp = $_GET['no_telp'];
    echo "NIM : $nim <br>";
    echo "No Telp : $no_telp <br>";
}
?>