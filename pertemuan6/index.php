<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>

        <?php
        //panggil file connection.php untuk koneksi ke database
        include 'connection.php';
        //query select data
        $sql = "SELECT * FROM tb_mahasiswa";
        //eksekusi query
        $result = $conn->query($sql);

        //mengambil data dari database dan dimasukkan ke perulangan
        foreach ($result as $key => $row) { ?>
            <!-- Menampilkan data ke dalam row tabel -->
            <tr>
                <td>
                    <?php echo $row['id_mhs']; ?>
                </td>
                <td>
                    <?php echo $row['nama_mhs']; ?>
                </td>
                <td>
                    <?php echo $row['nim_mhs']; ?>
                </td>
                <td>
                    <?php echo $row['alamat_mhs']; ?>
                </td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id_mhs']; ?>">Edit</a> |
                    <a href="hapus.php?id=<?php echo $row['id_mhs']; ?>">Hapus</a>
                </td>
            </tr>

        <?php } ?>

    </tbody>
</table>
<br><br>

<a href="tambah.php">Tambah Data Mahasiswa</a>