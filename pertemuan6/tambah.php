<form action="" method="POST">
    <label for="nim">NIM</label>
    <input type="text" name="nim" required>
    <br><br>
    <label for="nama">Nama</label>
    <input type="text" name="nama" required>
    <br><br>
    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" required>
    <br><br>
    <button type="submit" name="submit">Tambah Data</button>
</form>

<?php
//panggil file connection.php untuk koneksi ke database
include 'connection.php';

//submit di klik
if (isset($_POST['submit'])) {
    //ambil data dari form
    $nim = htmlspecialchars($_POST['nim']);
    $nama = htmlspecialchars($_POST['nama']);
    $alamat = htmlspecialchars($_POST['alamat']);
    //query insert data
    $sql = "INSERT INTO tb_mahasiswa VALUES (NULL,'$nim', '$nama', '$alamat')";
    //eksekusi query
    $result = $conn->query($sql);
    //jika berhasil maka akan tampil alert dan halaman akan diarahkan ke index.php
    if ($result) {
        echo "<script>alert('Data berhasil ditambahkan'); document.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Data gagal ditambahkan'); document.location.href='index.php';</script>";
    }
}
