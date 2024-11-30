<?php
session_start();
include("../koneksi.php");

if (isset($_POST['simpan'])) {
    $NAMA = $_POST['nama'];
    $STOK = $_POST['stok'];
    $HARGA = $_POST['harga'];

    $sql = "INSERT INTO barang2 (nama, stok, harga)
    VALUES ('$NAMA', '$STOK', '$HARGA')";

    $query = mysqli_query($db, $sql);

    if($query) {
        $_SESSION['notifikasi'] = "Data barang berhasil ditambahkan!";
    } else {
        $_SESSION['notifikasi'] = "Data barang gagal ditambahkan!";
    }
    header('Location: index.php');
} else {
    die("akses ditolak...");
}
?>