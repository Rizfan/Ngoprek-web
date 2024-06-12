<?php
//ambil id dari url
$id = $_GET['id'];
//panggil file connection.php untuk koneksi ke database
include 'connection.php';
//query hapus data
$sql = "DELETE FROM tb_mahasiswa WHERE id_mhs = $id";
//eksekusi query
$result = $conn->query($sql);
//jika berhasil maka akan tampil alert dan halaman akan diarahkan ke index.php
if ($result) {
    echo "<script>alert('Data berhasil dihapus!'); document.location.href='index.php'; </script>";
} else {
    echo "<script>alert('Data gagal dihapus!'); document.location.href='index.php'; </script>";
}
