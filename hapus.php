<?php
require_once "app/Mhsw.php";

$mhsw = new Mhsw();

if (!isset($_GET['id'])) {
    echo "Gagal mendapatkan ID";
    exit;
}

$id = $_GET['id'];


if ($mhsw->hapus($id)) {
    header("Location: index.php");
    exit;
} else {
    echo "Gagal menghapus data";
}
?>
