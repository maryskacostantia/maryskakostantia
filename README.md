# Perpustakaan Universitas Muhammadiyah Yogyakarta (UMY)

Selamat Datang Di Perpustakaan Maryska Kostantia!
Perkenalkan nama saya Maryska Kostantia, Nim 222201013 Program Studi D3 Perpustakaan Mata kuliah Pemrograman Web. Ini adalah perpustakaan homepage pertama saya, karena saya baru belajar tentang cara membuat website perpustakaan Universitas Muhammadiyah Yogyakarta (UMY) * [website perpustakaan Universitas Muhammadiyah Yogyakarta (UMY). 
](https://library.umy.ac.id/)

<p>Berikut Gambar Perpustakaan Universitas Muhammadiyah Yogyakarta (UMY)
       <img src="images.jpeg"/>

<h1>Video Profil Perpustakaan Universitas Muhammadiyah Yogyakarta (UMY)</h1>
  <iframe 
    width="560" 
    height="315" 
    src="https://youtu.be/UnKv-MU1vUk" 
    title="YouTube video player" 
    frameborder="0" 
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
    allowfullscreen>
  </iframe>
</body>

<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>AUDIO/AUTOPLAY</title>
</head>
<body>
  <h1>AUDIO/AUTOPLAY</h1>
  <audio controls>
    <source src="start.mp3"type=audio/mpeg>
  </audio>
</body>
       
</html>

<h2>Formulir Perpustakaan Universitas Muhammadiyah Yogyakarta (UMY)</h2>
    <form action="#" method="post">
        <table>
            <tr>
                <th>Nama</th>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <th>NIM</th>
                <td><input type="text" name="nim" required></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><textarea name="alamat" rows="3" required></textarea></td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>
                    <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
                    <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan
                </td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <th>No HP</th>
                <td><input type="text" name="no_hp" required></td>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <td><input type="text" name="tempat_lahir" required></td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td><input type="date" name="tanggal_lahir" required></td>
            </tr>
        </table>
        <br>
        <input type="submit" value="Submit">
    </form>

</body>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Bahan Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Daftar Bahan Buku</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Laut Bercerita</td>
                <td>Leila S. Chudori</td>
                <td>KPG (Kepustakaan Populer Gramedia)</td>
                <td>2017</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Hujan Bulan Juni</td>
                <td>Sapardi Djoko Damono</td>
                <td>Gramedia Pustaka Utama</td>
                <td>1994</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Robohnya Surau Kami</td>
                <td>AA Navis</td>
                <td>Pustaka Jaya</td>
                <td>1970</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Ronggeng Dukuh Paruk</td>
                <td>Ahmad Tohari</td>
                <td>Pustaka Jaya</td>
                <td>1982</td>
            </tr>
        </tbody>
    </table>
<body>
<h2>Formulir Pemesanan Buku</h2>
    <form action="#" method="post">
        <table>
            <tr>
                <th>Nama</th>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <th>Nomor Anggota Perpustakaan</th>
                <td><input type="text" name="nomor anggota perpustakaan" required></td>
            </tr>
            <tr>
                <th>Tanggal Pemesanan</th>
                <td><textarea name="Tanggal Pemesanan" rows="3" required></textarea></td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>
                    <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
                    <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan
                </td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <th>No HP</th>
                <td><input type="text" name="no_hp" required></td>
            </tr>
            <tr>
                <th>Penulis Buku</th>
                <td><input type="text" name="Penulis Buku" required></td>
            </tr>
            <tr>
                <th>No ISBN</th>
               <td><input type="text" name="no isbn" required></td>
            </tr>
             <tr>
                <th>Judul Buku Yang Dipesan</th>
                <td><input type="text" name="judul buku yang dipesan" required></td>
            </tr>
        </table>
        <br>
        <input type="submit" value="Submit">
    </form>

</body>
<h2>Formulir Perpanjangan peminjaman buku </h2>
    <form action="#" method="post">
        <table>
            <tr>
                <th>Nama</th>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <th>Nomor Anggota Perpustakaan</th>
                <td><input type="text" name="nomor anggota perpustakaan" required></td>
            </tr>
            <tr>
                <th>Tanggal Pemesanan</th>
                <td><textarea name="Tanggal Peminjamanan" rows="3" required></textarea></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <th>No Telepon</th>
                <td><input type="text" name="no telepon" required></td>
            </tr>
            <tr>
                <th>No ISBN</th>
                <td><input type="text" name="no isbn" required></td>
            </tr>
             <tr>
                <th>Tanggal Perpanjangan Buku</th>
                <td><input type="date" name="Tanggal perpanjangan buku" required></td>
            </tr>
        </table>
        <br>
        <input type="submit" value="Submit">
    </form>
        <h1> Pengertian HTML dan CSS </h1>
        <p>HTML adalah bahasa markup standar yang digunakan untuk membuat struktur dan konten halaman web. Dalam HTML, pengembang web mendefinisikan elemen-elemen seperti teks, gambar, tautan, formulir, dan elemen lainnya yang membentuk tampilan halaman web. HTML menggunakan tag-tag untuk menandai elemen-elemen ini sehingga peramban web tahu cara menampilkan mereka.</p>
    
        <p>CSS adalah bahasa stylesheet yang digunakan untuk mengontrol tata letak dan tampilan halaman web. Dengan CSS, Anda dapat mengatur warna, ukuran, spasi, jenis font, dan banyak properti tata letak lainnya untuk elemen-elemen HTML. Penggunaan CSS memungkinkan pemisahan antara struktur dan tata letak, sehingga HTML dapat fokus pada struktur konten, sementara CSS mengontrol cara konten tersebut ditampilkan.</p> 
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Website Perpustakaan </title>
</head>
<body>
    <nav class="navbar">
        <ul class="menu">
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Tentang</a></li>
            <li>
                <a href="#">Layanan</a>
                <ul class="dropdown">
                    <li><a href="#">Layanan 1</a></li>
                    <li><a href="#">Layanan 2</a></li>
                    <li><a href="#">Layanan 3</a></li>
                </ul>
            </li>
            <li><a href="#">Kontak</a></li>
        </ul>
    </nav>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menu dengan Dropdown</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #333;
            position: relative;
            z-index: 999;
        }

        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .navbar li {
            display: inline-block;
            position: relative;
        }

        .navbar li a {
            color: white;
            display: block;
            padding: 10px 20px;
            text-decoration: none;
        }

        .navbar ul ul {
            position: absolute;
            top: 100%;
            display: none;
            background-color: #333;
            min-width: 160px; /* Lebar minimum untuk dropdown */
        }

        .navbar ul ul li {
            display: block;
        }

        .navbar li:hover > ul {
            display: block; /* Menampilkan dropdown saat hover */
        }

        .navbar ul ul li a:hover {
            background-color: #555; /* Warna latar saat hover di submenu */
        }
    </style>
</head>

<body>
    <div id="halaman">
        <nav class="navbar">
            <ul>
                <li><a href="#">Menu</a></li>
                <li>
                    <a href="#">Dropdown</a>
                    <ul>
                        <li><a href="#">Submenu-1</a></li>
                        <li><a
