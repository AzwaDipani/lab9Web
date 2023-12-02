<?php
include("koneksi.php");
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Praktikum 9</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        
        nav {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
        
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        
        nav a:hover {
            text-decoration: underline;
        }

        nav a[href="home.php"],
        nav a[href="tambah.php"],
        nav a[href="about.php"] {
            color: #fff;
        }

        footer {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            text-align: center;
        }

        footer p {
            margin: 0;
            font-size: 14px;
            color: #666;
}

</style>
</head>
<body>
    <div class="container">
        <nav>
            <a href="home.php">Home</a>
            <a href="tambah.php">Tambah</a>
            <a href="about.php">About</a>
</nav>