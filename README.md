# Perpustakaan Universitas Muhammadiyah Yogyakarta (UMY)
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Maryska Kostantia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Selamat Datang Di Perpustakaan Maryska Kostantia!</h1>
    <p>Perkenalkan, nama saya Maryska Kostantia, NIM 222201013, Program Studi D3 Perpustakaan. Ini adalah homepage perpustakaan pertama saya.</p>
    <p><a href="https://library.umy.ac.id/">Website Perpustakaan Universitas Muhammadiyah Yogyakarta (UMY)</a></p>
</header>

<main>
    <section>
        <h2>Profil Perpustakaan UMY</h2>
        <img src="images.jpeg" alt="Perpustakaan Universitas Muhammadiyah Yogyakarta" />
        <h3>Video Profil</h3>
        <iframe width="560" height="315" src="https://youtu.be/UnKv-MU1vUk" title="Profil Perpustakaan UMY" allowfullscreen></iframe>
    </section>

    <section>
        <h2>AUDIO</h2>
        <audio controls>
            <source src="start.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
    </section>

    <section>
        <h2>Formulir Pendaftaran</h2>
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
            <input type="submit" value="Submit">
        </form>
    </section>

    <section>
        <h2>Daftar Bahan Buku</h2>
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
    </section>

    <section>
        <h2>Formulir Pemesanan Buku</h2>
        <form action="#" method="post">
            <table>
                <tr>
                    <th>Nama</th>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <th>Nomor Anggota Perpustakaan</th>
                    <td><input type="text" name="nomor_anggota" required></td>
                </tr>
                <tr>
                    <th>Tanggal Pemesanan</th>
                    <td><input type="date" name="tanggal_pemesanan" required></td>
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
                    <td><input type="text" name="penulis_buku" required></td>
                </tr>
                <tr>
                    <th>No ISBN</th>
                    <td><input type="text" name="no_isbn" required></td>
                </tr>
                <tr>
                    <th>Judul Buku Yang Dipesan</th>
                    <td><input type="text" name="judul_buku" required></td>
                </tr>
            </table>
            <input type="submit" value="Submit">
        </form>
    </section>

    <section>
        <h2>Formulir Perpanjangan Peminjaman Buku</h2>
        <form action="#" method="post">
            <table>
                <tr>
                    <th>Nama</th>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <th>Nomor Anggota Perpustakaan</th>
                    <td><input type="text" name="nomor_anggota" required></td>
                </tr>
                <tr>
                    <th>Tanggal Peminjaman</th>
                    <td><input type="date" name="tanggal_peminjaman" required></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <th>No Telepon</th>
                    <td><input type="text" name="no_telepon" required></td>
                </tr>
                <tr>
                    <th>No ISBN</th>
                    <td><input type="text" name="no_isbn" required></td>
                </tr>
                <tr>
                    <th>Tanggal Perpanjangan Buku</th>
                    <td><input type="date" name="tanggal_perpanjangan" required></td>
                </tr>
            </table>
            <input type="submit" value="Submit">
        </form>
    </section>

    <section>
        <h2>Pengertian HTML dan CSS</h2>
        <p>HTML adalah bahasa markup standar yang digunakan untuk membuat struktur dan konten halaman web. Dalam HTML, pengembang web mendefinisikan elemen-elemen seperti teks, gambar, tautan, formulir, dan elemen lainnya yang membentuk tampilan halaman web.</p>
        <p>CSS adalah bahasa stylesheet yang digunakan untuk mengontrol tata letak dan tampilan halaman web. Dengan CSS, Anda dapat mengatur warna, ukuran, spasi, jenis font, dan banyak properti tata letak lainnya untuk elemen-elemen HTML.</p>
    </section>
</main>

<footer>
    <p>© 2024 Perpustakaan Maryska Kostantia</p>
</footer>

</body>
</html>


