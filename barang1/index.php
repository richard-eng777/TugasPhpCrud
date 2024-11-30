<?php
include("../koneksi.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10x;
        }
    </style>
</head>
<body>
    <h2>Inventory</h2>
    <?php if (isset($_SESSION['notifikasi'])): ?>
        <p><?php echo $_SESSION['notifikasi']; ?></p>
        <?php unset($_SESSION['notifikasi']); ?>
         <?php endif; ?>
         <table>
            <thead>
                <tr align="center">
                    <th>#</th>
                    <th>Nama Barang</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th><a href="tambah_barang.php">Tambah Data</a></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $query = $db->query("SELECT * FROM barang2");
                while ($item = $query->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $no++?></td>
                    <td><?php echo $item['nama']?></td>
                    <td><?php echo $item['stok']?></td>
                    <td><?php echo $item['harga']?></td>
                    <td align="center">
                        <a href="edit_barang.php?barang_id=<?php echo $item['barang_id']?>">Edit</a>
                        <a onclick="return confirm ('Anda yakin ingin menghapus data?')"href="hapus_barang.php?barang_id=<?php echo $item['barang_id']?>">Hapus</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
         </table>
        <p>Total: <?php echo mysqli_num_rows($query)?></p>
</body>
</html>