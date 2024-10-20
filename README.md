# Perpustakaan Universitas Muhammadiyah Yogyakarta (UMY)

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Perpustakaan</title>
    <!-- Link ke file stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>

<body class="container">

<!-- Header Section -->
<header id="header">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Website perpustakaan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>            
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">                
                <!-- Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu Utama</a>                    
                    <!-- Submenu Items -->
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Buku Baru</a></li>
                        <li><a class="dropdown-item" href="#">Kategori Buku</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Tentang Kami</a></li>
                    </ul>
                </li>                
            </ul>        
       </div >
     </ nav >
   </ header >
   <!-- Main Content Area -->
   < main id = "mainContent" style ="display:flex;flex-wrap : wrap ;justify-content:center;" >
      <!-- Kolom I -->
      < div class = "col-md-4 text-center mt-5" > 
          < h2 > Selamat Datang Di Website Perpustakaan !< /h2 > 
           < p > Silahkan cari buku favoritmu disini.< /p > 
         </ div >
      <!-- Kolom II --> 
      < div class = " col-md -6 text-left ml - auto mr -auto mt -5 ">  
         <!-- Konten Kolom II-->   
         < article class ='card ' style='margin-bottom :10px;'>    
             < img src ='https://via.placeholder.com/150x200' alt ='Gambar Buku'/>     
              < div class =' card-body '>       
                  < h5 class ='card-title'> Judul Buku Terbaru!< /h5 >      
                   < p class ='card-text'> Deskripsi singkat tentang judul bukunya .< /p >      
                 </ div >    
               </article>


               <!-- Konten Lainnya-->
               <article class ='card'>
                   <img src ='https://via.placeholder.com/150x200'alt ='Gambar Buku'/>
                   <divclass ='cardbody'>
                       <h5class ='cardtitle'>Judul Bukuterbaru!</h5>
                       <pcardtext>Deskripsi singkat mengenai bukunya.</pcardtext>
                     </div>
                   </article>

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

   <html>
        <h1> Pengertian HTML dan CSS </h1>
        <p>HTML adalah bahasa markup standar yang digunakan untuk membuat struktur dan konten halaman web. Dalam HTML, pengembang web mendefinisikan elemen-elemen seperti teks, gambar, tautan, formulir, dan elemen lainnya yang membentuk tampilan halaman web. HTML menggunakan tag-tag untuk menandai elemen-elemen ini sehingga peramban web tahu cara menampilkan mereka.</p>
        <p>CSS adalah bahasa stylesheet yang digunakan untuk mengontrol tata letak dan tampilan halaman web. Dengan CSS, Anda dapat mengatur warna, ukuran, spasi, jenis font, dan banyak properti tata letak lainnya untuk elemen-elemen HTML. Penggunaan CSS memungkinkan pemisahan antara struktur dan tata letak, sehingga HTML dapat fokus pada struktur konten, sementara CSS mengontrol cara konten tersebut ditampilkan.</p> 
</html>
