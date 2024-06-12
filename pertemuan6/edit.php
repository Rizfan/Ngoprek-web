<?php
//ambil id dari url
$id = $_GET['id'];
//panggil file connection.php untuk koneksi ke database
include 'connection.php';
//query hapus data
$sql = "SELECT * FROM tb_mahasiswa WHERE id_mhs = $id";
//eksekusi query
$result = $conn->query($sql);
//ambil data dari database 1 row
$row = $result->fetch_assoc();
?>

<form action="" method="POST">
    <label for="nim">NIM</label>
    <input type="text" name="nim" required value="<?= $row['nim_mhs'] ?>">
    <br><br>
    <label for="nama">Nama</label>
    <input type="text" name="nama" required value="<?= $row['nama_mhs'] ?>">
    <br><br>
    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" required value="<?= $row['alamat_mhs'] ?>">
    <br><br>
    <button type="submit" name="submit">Ubah Data</button>
</form>

<?php

//submit di klik
if (isset($_POST['submit'])) {
    //ambil data dari form
    $nim = htmlspecialchars($_POST['nim']);
    $nama = htmlspecialchars($_POST['nama']);
    $alamat = htmlspecialchars($_POST['alamat']);

    //query update data
    $sql = "UPDATE tb_mahasiswa SET nim_mhs = '$nim', nama_mhs = '$nama', alamat_mhs = '$alamat' WHERE id_mhs = $id";

    //eksekusi query
    $result = $conn->query($sql);

    //jika berhasil maka akan tampil alert dan halaman akan diarahkan ke index.php
    if ($result) {
        echo "<script>alert('Data berhasil diubah!'); document.location.href='index.php'; </script>";
    } else {
        echo "<script>alert('Data gagal diubah!'); document.location.href='index.php'; </script>";
    }
}
