<?php
include("../koneksi.php");

$barang_id = $_GET['barang_id'];

$query = $db->query("SELECT * FROM barang2 WHERE barang_id = '$barang_id'");
$item = $query->fetch_assoc( );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Form Edit</h3>
    <form action="proses_edit.php" method="POST">
    <input type="hidden" name="barang_id" value="<?php echo $item['barang_id']; ?>"></input>
    <table border="0">
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"
            value="<?php echo $item['nama']?>" required>
        </td>
        </tr>
        <tr>
            <td>Stok</td>
            <td><input type="text" name="stok"
            value="<?php echo $item['stok']?>">
        </td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="text" name="harga"
            value="<?php echo $item['harga']?>"></td>
        </tr>
    </table>
    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
</body>
</html>