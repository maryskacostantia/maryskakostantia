# Perpustakaan Universitas Muhammadiyah Yogyakarta (UMY)
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    <style>
        .navbar {
            overflow: hidden;
            background-color: #333;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            cursor: pointer;
            font-size: 16px;  
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #555;
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="#home">Home</a>
    <a href="#news">News</a>
    <div class="dropdown">
        <button class="dropbtn">Dropdown 
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="halaman selamt datang.html">Link 1</a>
            <a href="tabel bahan .html">Link 2</a>
            <a href="table table-bordered.html">Link 3</a>
        </div>
    </div>
</div>

<header>
    <h1>Selamat Datang Di Perpustakaan Maryska Kostantia!</h1>
    <p>Perkenalkan nama saya Maryska Kostantia, dengan nim 222201013 Program Studi D3 Perpustakaan, mata kuliah pemrograman web. Ini adalah perpustakaan homepage pertama saya, karena baru belajar tentang cara membuat website Perpustakaan Universitas Muhammadiyah Yogyakarta (UMY).</p>
    <p><a href="https://library.umy.ac.id/">Website Perpustakaan Universitas Muhammadiyah Yogyakarta (UMY)</a></p>
</header>

<main>
 <section>
    <h2>Profil Perpustakaan UMY</h2>
    <img src="images.jpeg" alt="Perpustakaan Universitas Muhammadiyah Yogyakarta" />
    <h3>Video Profil</h3>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/UnKv-MU1vUk?si=hcKps_V0Ww3kn5LI" allowfullscreen title="Video Profil Perpustakaan UMY"></iframe>
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

<html>
<head>
    <title>Perpustakaan</title>
    <style type="text/css">
        h2 {
            color: blue;
            font-family: sans;
        }
        p {
            color: green;
        }
    </style>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Online</title>
    <style>
        /* General styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            text-align: center;
            color: #333;
        }

        /* Book list styling */
        .book-list .book-item {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .book-list .book-item:last-child {
            border-bottom: none;
        }

        .alert, .info {
            margin: 20px 0;
            padding: 15px;
            border-radius: 5px;
            text-align: center;
        }

        .alert {
            background-color: #f8d7da;
            color: #721c24;
        }

        .info {
            background-color: #d4edda;
            color: #155724;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Selamat datang di Perpustakaan Online</h1>

        <div id="book-list" class="book-list">
            <h2>Daftar Buku:</h2>
            <!-- List buku akan ditampilkan di sini -->
        </div>

        <div>
            <label for="bookCount">Masukkan jumlah buku yang ingin dipinjam:</label>
            <input type="number" id="bookCount" min="1" max="10">
            <button onclick="borrowBooks()">Pinjam Buku</button>
        </div>

        <div id="message" class="alert"></div>
    </div>

    <script>
        // Array of book objects
        let books = [
            { title: "Pemrograman Web", author: "John Doe", available: true },
            { title: "Algoritma Dasar", author: "Jane Smith", available: true },
            { title: "Pemrograman Python", author: "Mark Lee", available: false },
            { title: "Database Modern", author: "Sara Ali", available: true },
            { title: "Sistem Operasi", author: "David Kim", available: false }
        ];

        // Function to display books
        function displayBooks() {
            const bookListDiv = document.getElementById("book-list");
            bookListDiv.innerHTML = "<h2>Daftar Buku:</h2>"; // Reset daftar buku
            for (let i = 0; i < books.length; i++) {
                let book = books[i];
                let bookItem = document.createElement("div");
                bookItem.classList.add("book-item");
                bookItem.innerHTML = `<strong>${book.title}</strong> oleh ${book.author} - ${book.available ? 'Tersedia' : 'Tidak Tersedia'}`;
                bookListDiv.appendChild(bookItem);
            }
        }

        // Function to borrow books
        function borrowBooks() {
            const bookCount = parseInt(document.getElementById("bookCount").value);
            const messageDiv = document.getElementById("message");

            if (isNaN(bookCount) || bookCount < 1) {
                messageDiv.className = "alert";
                messageDiv.textContent = "Harap masukkan jumlah buku yang valid!";
                return;
            }

            // Check the number of available books
            let availableBooks = books.filter(book => book.available);
            if (bookCount > availableBooks.length) {
                messageDiv.className = "alert";
                messageDiv.textContent = `Hanya ada ${availableBooks.length} buku yang tersedia.`;
                return;
            }

            // Borrow the requested number of books
            let booksToBorrow = [];
            for (let i = 0; i < books.length && booksToBorrow.length < bookCount; i++) {
                if (books[i].available) {
                    booksToBorrow.push(books[i].title);
                    books[i].available = false;  // Mark the book as borrowed
                }
            }

            // Display success message
            messageDiv.className = "info";
            messageDiv.textContent = `Anda berhasil meminjam buku: ${booksToBorrow.join(", ")}.`;

            // Update the book list
            displayBooks();
        }

        // Show the list of books on page load
        window.onload = displayBooks;
    </script>

</body>
</html>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pameran Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .gallery {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .book-item {
            margin: 15px;
            text-align: center;
        }

        .book-item img {
            width: 200px;
            height: auto;
            cursor: pointer;
            border-radius: 10px;
            transition: transform 0.3s;
        }

        .book-item img:hover {
            transform: scale(1.1);
        }

        .description {
            display: none;
            margin-top: 10px;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Pameran Buku</h1>

        <div class="gallery">
            <div class="book-item">
                <img src="buku 1.png" alt="Buku 1" onclick="showDescription('deskripsiBuku1')">
                <div id="deskripsiBuku1" class="description">
                    <p><strong>Buku 1:</strong> Dunia sekarang yang tak bisa lepas dari penggunaan internet membuat ketersediaan website terasa penting. Oleh sebab itu, penting untuk tahu dan paham pemrograman web supaya mampu membuat web sendiri demi kepentingan pribadi. Buku ini membantu siapa pun yang ingin membuat web untuk pertama kalinya.!</p>
                </div>
            </div>
            <div class="book-item">
                <img src="buku 2.jpeg" alt="Buku 2" onclick="showDescription('deskripsiBuku2')">
                <div id="deskripsiBuku2" class="description">
                    <p><strong>Buku 2:</strong> Buku ini memahami Konsep Dasar Pemrograman Free Pascal & Database Bagi Mahasiswa merupakan karya Yuliana Mose, Dedi Sorongan dan Agatha C.E.M Jamlean. Buku ini membahas tentang peran algoritma dalam komputasi, dasar-dasar algoritma, interpretasi persoalan ke dalam flowchart, mengenal bahasa pemrograman, tipe data, struktur program, membangun program aplikasi, studi kasus permasalahan sederhana, studi kasus konversi, studi kasus percabangan lanjutan, studi kasus perulangan, studi kasus struktur logika case, studi kasus procedure & function, analisis algoritma program aplikasi terpublikasi jurnal ilmiah, serta menggunakan database.</p>
                </div>
            </div>
            <div class="book-item">
                <img src="buku 3.png" alt="Buku 3" onclick="showDescription('deskripsiBuku3')">
                <div id="deskripsiBuku3" class="description">
                    <p><strong>Buku 3:</strong> Rangkaian konferensi DEXA telah mendapatkan reputasinya sendiri dan posisi yang dihormati sebagai platform untuk pertukaran ide di antara para ahli teori dan praktisi di bidang ilmu komputer yang lebih luas, namun terutama di bidang basis data dan teknologi berbasis pengetahuan.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showDescription(id) {
            // Menyembunyikan semua deskripsi
            let descriptions = document.querySelectorAll('.description');
            descriptions.forEach(function(description) {
                description.style.display = 'none';
            });

            // Menampilkan deskripsi yang diklik
            let descriptionToShow = document.getElementById(id);
            descriptionToShow.style.display = 'block';
        }
    </script>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plugin jQuery Sederhana</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .box {
            width: 100px;
            height: 100px;
            margin: 10px;
            display: inline-block;
            border: 1px solid #ccc;
            text-align: center;
            line-height: 100px; /* Vertically center text */
        }
    </style>
</head>
<body>

    <h1>Contoh Penggunaan Plugin jQuery</h1>
    <div class="box">Kotak 1</div>
    <div class="box">Kotak 2</div>
    <div class="box">Kotak 3</div>

    <button id="changeColor">Ubah Warna</button>

    <script>
        // Plugin jQuery untuk mengubah warna latar belakang
        (function($) {
            $.fn.changeBgColor = function(options) {
                var settings = $.extend({
                    background: 'red'
                }, options);

                return this.each(function() {
                    $(this).css('background-color', settings.background);
                });
            };
        })(jQuery);

        // Menggunakan plugin saat tombol diklik
        $(document).ready(function() {
            $('#changeColor').click(function() {
                $('.box').changeBgColor({ background: 'lightblue' });
            });
        });
    </script>

</body>
</html>

<footer>
    <p>© 2024 Perpustakaan Maryska Kostantia</p>
</footer>

<html>
<head>
    <title>Perpustakaan</title>
</head>
<body>
    <h2 style="color: blue; font-family: sans;"></h2>
    <p style="color: green;"></p>
</body>
</html>
