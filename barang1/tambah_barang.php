<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Tambah Barang</h3>
    <form action="proses_tambah.php" method="POST">
        <table border="0">
        <tr>
            <td>Nama Barang</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>Stok</td>
            <td><input type="text" name="stok" required></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="text" name="harga" required></td>
        </tr>
        </table>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
</body>
</html>