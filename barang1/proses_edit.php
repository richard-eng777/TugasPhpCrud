<?php
session_start();
include("../koneksi.php");

if (isset($_POST['simpan'])) {
    $barang_id = $_POST['barang_id'];
    $NAMA = $_POST['nama'];
    $STOK = $_POST['stok'];
    $HARGA = $_POST['harga'];

    $sql = "UPDATE barang2 SET
    nama='$NAMA',
    stok='$STOK',
    harga='$HARGA'
    WHERE barang_id=$barang_id";
    $query = mysqli_query($db, $sql);
    if($query) {
        $_SESSION['notifikasi'] = "Data barang berhasil diperbarui!";
    } else {
        $_SESSION['notifikasi'] = "Data barang gagal diperbarui!";
    }
    header('Location: index.php');
} else {
    die("Akses ditolak..");
}
?>