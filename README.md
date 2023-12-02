# Lab9web

Nama : Muhammad Azwa Dipani

NIM  : 312210417

Kelas : TI.22.A1

## DAFTAR ISI <br>
| No | Description | Link |
|-----|------|-----|
|1|Instruksi Praktikum|[Click Here](#instruksi-praktikum)|
|2|Langkah-langkah Praktikum|[Click Here](#langkah-langkah-praktikum)|
|3|Pertanyaan dan Tugas|[Click Here](#pertanyaan-dan-tugas)|

## Instruksi Praktikum
1. Persiapkan text editor misalnya VSCode

2. Buat folder baru dengan nama `lab9_php_modular` pada docroot webserver (htdocs)

3. Ikuti langkah-langkah praktikum yang akan dijelaskan berikutnya

## Langkah-langkah Praktikum
- Jalankan Apache dan MySQL server dari menu XAMPP Control
- Kemudian buat folder baru dengan nama lab9_php_modular pada docroot webserver (c:\xampp\htdocs). Kemudian buka melalui browser dengan mengakses URL: http://localhost/lab9_php_modular/.

![img](pictures/Screenshot%20(209).png)

1. Buat file dengan nama `header.php`
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contoh Modularisasi</title>
    <link href="style.css" rel="stylesheet" type="text/stylesheet" media="screen" />
</head>
<body>
    <div class="container">
        <header>
            <h1>Modularisasi Menggunakan Require</h1>
        </header>
        <nav>
            <a href="home.php">Home</a>
            <a href="about.php">Tentang</a>
            <a href="kontak.php">Kontak</a>
        </nav>
```

2. Buat file dengan nama `footer.php`
```
        <footer>
            <p>&copy; 2021, Informatika, Universitas Pelita Bangsa</p>
        </footer>
    </div>
</body>
</html>
```

3. Buat file dengan nama `home.php`
```
<?php require('header.php'); ?>

<div class="content">
    <h2>Ini Halaman Home</h2>
    <p>Ini adalah bagian content dari halaman.</p>
</div>

<?php require('footer.php'); ?>
```

4. Buat file dengan nama `about.php`
```
<?php require('header.php'); ?>

<div class="content">
    <h2>Ini Halaman About</h2>
    <p>Ini adalah bagian content dari halaman.</p>
</div>

<?php require('footer.php'); ?>
```

- Output halaman `Home` :
![img](pictures/Screenshot%20(210).png)


- Output halaman `About` :
![img](pictures/Screenshot%20(211).png)


## Pertanyaan dan Tugas
> Implementasikan konsep modularisasi pada kode program Praktikum 8 tentang database, sehingga setiap halamannya memiliki template tampilan yang sama.

1. Buat folder baru dengan nama `lab9_php_praktikum`
![img](pictures/Screenshot%20(212).png)

- Setelah itu buat beberapa file sama seperti file-file yang ada pada praktikum 8, untuk script lebih lengkapnya kalian dapat langsung lihat pada folder [lab9_php_praktikum](https://github.com/AzwaDipani/Lab9web/tree/main/lab9_php_praktikum).

2. Hasil Output `koneksi.php` :
![img](pictures/Screenshot%20(213).png)

3. Hasil Output `home.php` :
![img](pictures/Screenshot%20(214).png)


5. Hasil Output `tambah.php` :
![img](pictures/Screenshot%20(215).png)

![img](pictures/Screenshot%20(216).png)

![img](pictures/Screenshot%20(217).png)


5. Hasil Output `ubah.php` :
![img](pictures/Screenshot%20(218).png)

![img](pictures/Screenshot%20(219).png)


6. Hasil Output `hapus.php` :
![img](pictures/Screenshot%20(220).png)


## Selesai, Terima Kasih