<?php
require_once "app/Mhsw.php";

$mhsw = new Mhsw();
$rows = $mhsw->tampil();
?>

<html>

<head>
    <title>DATA MAHASISWA</title>
    <link rel="stylesheet" href="./layout/assets/css/style.css">
</head>

<body>
    <h1>DATA MAHASISWA</h1>

    <table border="1" cellpadding="10">
        <tr align="center">
            <td>NO</td>
            <td>NIM</td>
            <td>NAMA</td>
            <td>ALAMAT</td>
            <td colspan="2">AKSI</td>
        </tr>

        <?php foreach ($rows as $row) { ?>

            <tr align="center">
                <td><?php echo $row['mhsw_id']; ?></td>
                <td><?php echo $row['mhsw_nim']; ?></td>
                <td><?php echo $row['mhsw_nama']; ?></td>
                <td><?php echo $row['mhsw_alamat']; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["mhsw_id"]; ?>" class="btn-ubah">Ubah</a>
                </td>
                <td>
                    <a href="hapus.php?id=<?= $row["mhsw_id"]; ?>" class="btn-hapus" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>

            </tr>

        <?php } ?>

    </table><br>
    <a href="tambah.php" class="btn-tambah">TAMBAH</a>
</body>

</html>