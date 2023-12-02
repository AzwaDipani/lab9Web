<?php require('header.php'); ?>
<style>
 body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.container {
    width: 100%;
    margin: 0 auto;
    padding: 20px;
}

h1 {
    text-align: left;
    margin-bottom: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 0 auto;
}

table img {
    max-width: 100px;
    height: auto;
    display: block;
    margin: auto;
}

th, td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

tr:hover {
    background-color: #f2f2f2;
}

.actions {
    display: flex;
    justify-content: space-between;
    gap: 5px;
}

.actions a {
    text-decoration: none;
    padding: 6px 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    background-color: #f2f2f2;
    color: #333;
}

.actions a:hover {
    background-color: #ddd;
}

a[href^="ubah.php"] {
    background-color: #008CBA;
    color: white;
}

a[href^="hapus.php"] {
    background-color: #f44336;
    color: white;
}

</style>

<div class="container">
        <h1>Data Barang</h1>
        <div class="main">
            <table>
            <tr>
                <th>Gambar</th>
                <th>Nama Barang</th>
                <th>Katagori</th>
                <th>Harga Jual</th>
                <th>Harga Beli</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
                <td><img src="http://localhost/lab8_php_database/img/<?= $row['gambar']; ?>" alt="<?= $row['nama']; ?>" width="31px"></td>
                <td><?= $row['nama'];?></td>
                <td><?= $row['kategori'];?></td>
                <td><?= $row['harga_beli'];?></td>
                <td><?= $row['harga_jual'];?></td>
                <td><?= $row['stok'];?></td>
                <td class="actions">
                <a href="ubah.php?id=<?=$row['id_barang'];?>">ubah</a>
                <a href="hapus.php?id= <?=$row['id_barang'];?>">hapus </a>
            </td>
            </tr>
            <?php endwhile; else: ?>
            <tr>
                <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
            </table>
        </div>
    </div>

<?php require('footer.php'); ?>