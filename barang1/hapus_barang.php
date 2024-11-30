<?php
session_start();
include("../koneksi.php");

if (isset($_GET['barang_id'])){
    // Ambil ID dari URL
    $barang_id = $_GET['barang_id'];

    // Buat query untuk menghapus data siswa berdsarkan ID
    $sql = " DELETE FROM barang2 WHERE barang_id=$barang_id";
    $query = mysqli_query($db, $sql);

    // Simpan pesan notifikasi dalam sesi berdasarkan hasil query
    if ($query){
        $_SESSION['notifikasi'] = "Data barang berhasil dihapus!";
    } else {
        $_SESSION['notifikasi'] = "Data barang gagal dihapus!";
    }
    header('Location: index.php');
} else {
    die("Akses ditolak...");
}