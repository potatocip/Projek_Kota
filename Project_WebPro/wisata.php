<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" href = "home.css">
        <link rel = "stylesheet" href = "sejarah.css">
        <link rel = "stylesheet" href = "wisata.css">
        <link rel = "stylesheet" href = "kuliner.css">
        <link rel = "stylesheet" href = "walikota.css">
        <link rel = "stylesheet" href = "visi-misi.css">
        <title>Website Kota Samarinda</title>
    </head>

    <!-- Badan Website-->
    <body>

        <!--Membuat Header-->
        <header>
            <div class = "wisata"></div>
            <div class = "teks-wisata">
                <p3 align = "center">Wisata</p3>
            </div>
        </header>
        <!--End Header-->

        <!--Membuat Isi Konten Website-->
        <content>

            <!-- Section Navigasi -->
            <div class = "menu">
                <nav class = "nav1">
                    <ul>
                        <li><a href = "home.html">Home</a></li>
                        <li><a href = "sejarah.html">Sejarah</a></li>

                        <!-- Membuat navigasi menu pemerintahan menurun ke bawah (dropdown)-->
                        <li class = "dropdown">
                            <a>Pemerintahan</a>
                            <!-- Membuat konten navigasi dropdown -->
                            <div class = "konten-dropdown">
                                <a href = "walikota.html">Walikota & Wakil Walikota</a>
                                <a href = "visi-misi.html">Visi & Misi</a>
                            </div>
                        </li>
                        <li><a href = "wisata.php">Wisata</a></li>
                        <li><a href = "kuliner.html">Kuliner</a></li>
                        <li><a href = "komentar.html">Komentar</a></li>
                    </ul>
                </nav>
            </div>
            <!--End Menu-->

            <!-- Section Isi Website -->
            <div class = "isi-wisata">
                <div class = "konten-wisata">
                    <h1>Tempat Wisata Kota Samarinda</h1>
                    
                    <!-- Isi konten website -->
                    <div class = "isi-konten-wisata">
                        <br>
                        <?php
                        $wisata = array('Desa Budaya Pampang','Air Terjun Tanah Merah','Kebun Raya Unmul Samarinda','Masjid Islamic Center samarinda',
                                        'Rumah Penjara Sangasanga','Pulau Kumala','Kampung Tenun Samarinda', 'Penangkaran Buaya Makroman Samarinda', 
                                        'Air Terjun Pinang Seribu', 'Teluk Lerong Garden');
                        $img = array('image/desa-pampang-2.jpg','image/air-terjun-2.jpg','image/Kebun_Raya_Unmul_Samarinda.jpg',
                                        'image/masjid-islamic.jpg', 'image/rumah-penjara.JPG', 'image/pulau-kumala.jpg', 'image/kampung-tenun-2.png',
                                        'image/penangkaran-buaya.jpg', 'image/pinang-seribu-2.jpg', 'image/teluk-lerong-garden.jpg');
                        $deskripsi = array('<p>Wisata budaya banyak diminati karena selain bisa melihat budaya setempat, Anda juga bisa belajar 
                            tentang budaya lain. Di Samarinda, ada sebuah tempat wisata budaya populer yaitu Desa Budaya Pampang. 
                            Desa ini dihuni oleh suku Dayak Kenyah. Pada akhir pekan, tempat wisata ini banyak dikunjungi oleh 
                            wisatawan luar kota maupun luar negeri. Setiap hari Minggu, pada pukul 13:00-15:00 diadakan pertunjukan 
                            seni di lamin atau gedung pertemuan desa. Gedung ini unik karena berupa rumah adat Dayak dengan ukiran 
                            khas suku.Menariknya, pada saat sedang berlangsung pertunjukan seni, seluruh warga desa akan mengenakan 
                            pakaian adatnya. Anda juga bisa menyewa pakaian adat untuk berfoto dengan latar rumah adat Dayak. Selain 
                            itu, di desa ini juga ada toko suvenir yang menjual beragam kerajinan warga setempat.</p>',
                            '<p>Air Terjun Tanah Merah berada di Dusun Purwosari, Kecamatan Samarida Utara, atau sekitar 
                            14 km dari pusat kota Samarinda. Tempat wisata ini mudah sekali diakses dengan kendaraan umum, 
                            Anda hanya perlu naik angkot jurusan Pasar Segiri - Sungai Siring. Air terjun dengan tinggi 15 
                            meter ini tergolong unik. Air yang mengalir akan terlihat jernih dan bersih, namun saat di bawah, 
                            air akan berubah menjadi keruh kemerahan. Hal ini dikarenakan tanah di sini berjenis gambut.</p>',
                            '<p>Kebun Raya Unmul Samarinda (KRUS) adalah sebuah kebun botani yang terletak di Kota Samarinda, 
                            Kalimantan Timur. Kebun raya ini merupakan kawasan hutan konservasi, tempat kegiatan penelitian, 
                            dan tempat berkumpulnya mahasiswa Universitas Mulawarman (Unmul). Pada mulanya kawasan ini 
                            merupakan wilayah konsesi seluas 300 hektar di Gunung Kapur milik CV. Kayu Mahakam, sebelum 
                            diserahkan kepada rektor Universitas Mulawarman pada tahun 1974. Pada tahun yang sama, 
                            tepatnya pada tanggal 9 Juli 1974, kawasan tersebut diresmikan menjadi hutan pendidikan oleh 
                            direktur CV. Kayu Mahakam, Ali Akbar Afloes, dan rektor Universitas Mulawarman, R. Sambas Wirakusuma, 
                            serta disaksikan oleh Menteri Pendidikan dan Kebudayaan Republik Indonesia, Syarief Thayeb, dan 
                            Gubernur Provinsi Kalimantan Timur, Abdoel Wahab Sjahranie. Luas dari kebun raya yang semula 
                            300 hektar kemudian berkurang 62 hektar pada tahun 2001 karena beralih fungsi menjadi tempat wisata 
                            kebun raya yang sekarang ini menjadi tempat wisata favorit warga Samarinda. Kebun Raya Unmul Samarinda 
                            berjarak 10 km dari pusat kota Samarinda. Tempat wisata ini merupakan hutan pendidikan milik Universitas 
                            Mulawaman, namun terbuka untuk umum. Pengunjung hanya perlu membayar 5.000 Rupiah per orang untuk bisa 
                            masuk ke kebun raya ini.Di kawasan kebun raya, terdapat sebuah danau besar yang bisa Anda kelilingi dengan 
                            menyewa sepeda air. Jika ingin berkeliling kawasan ini, Anda bisa menggunakan andong. Selain itu, tempat 
                            wisata di Samarinda ini juga memiliki kebun binatang mini dan museum kayu yang berisi informasi mengenai 
                            jenis-jenis kayu di Kalimantan.Kebun Raya Unmul Samarinda buka setiap hari kecuali hari Jumat, mulai pukul 
                            09:00 sampai 16:00.</p>',
                            '<p>Masjid ini terletak di Kelurahan Teluk Lerong Ulu, Samarinda. Dibangun pada tahun 2001 dan diresmikan 
                            pada tahun 2008, Masjid Islamic Center menjadi salah satu tempat wisata religi yang paling banyak 
                            dikunjungi di kota ini. Arsitektur masjid terinspirasi dari Hagia Sophia di Turki, misalnya pada kubah 
                            besarnya yang bermotif. Masjid ini memiliki satu menara utama setinggi 99 meter yang disesuaikan dengan 
                            asmaul husna, dan enam menara dengan ukuran lebih pendek yang melambangkan rukun iman. Selain itu, anak 
                            tangga menuju ke lantai utama masjid berjumlah 33 buah, jumlah yang sama dengan butiran tasbih.</p>',
                            '<p>Rumah Penjara ini pada masa lalu dipaksa untuk menampung puluhan orang dalam satu ruangan. Menurut 
                            keterangan salah satu informan di sekitar situs, bangunan Rumah Penjara ini dulunya pada bagian dinding 
                            terdapat kawat besi yang dialiri listrik untuk mencegah para tahanan melarikan diri. Pada halaman depan, 
                            dapat dijumpai sebuah sumur kuno yang diperkirakan sejaman dengan keberadaan Rumah Penjara Sangasanga. Bekas 
                            Rumah Penjara Sangasanga ini merupakan sebuah bangunan panggung yang memiliki 6 ruangan penjara yang sempit. 
                            Bangunan Rumah Penjara ini menggunakan bahan kayu ulin dengan kualitas terbaik, sehingga dapat bertahan 
                            sampai saat ini. Masing-masing ruangan memiliki ukuran 1,2 x 1,5 m dengan sebuah pintu serta  dua buah 
                            ventilasi udara yang berteralis besi pada bagian atas pintu dan sisi belakang belakang. Rumah Penjara ini 
                            digunakan pada masa pemerintahan kolonial Hinda-Belanda di Sangasanga hingga pada masa pendudukan Jepang 
                            dan masa perjuangan mempertahankan kemerdekaan di Sangasanga pada tahun 1947.</p>',
                            '<p>Pulau Kumala merupakan tempat wisata di Samarinda yang berada di tengah Sungai Mahakam. Pulau ini berasal 
                            dari pengendapan lumpur sungai. Jika dilihat, bentuknya memanjang menyerupai perahu yang terbalik. Tempat 
                            wisata ini disebut mirip dengan Taman Mini Indonesia Indah yang berada di Jakarta. Hal ini dikarenakan 
                            Pulau Kumala juga menggambarkan budaya Kalimantan mulai dari bangunan adat, candi dan juga patung lembu. 
                            Selain bangunan bernilai budaya setempat, di sini juga terdapat wahana permainan modern seperti sky tower 
                            setinggi 75 meter, kereta mini, kereta gantung dan juga komemdi putar. Jika ingin menginap, ada DJS Resort 
                            yang menyediakan cottage dan kolam renang.Tempat wisata ini berada di sebelah barat kota Tenggarong, 
                            kabupaten Kutai Kartanegara, atau 27 dari kota Samarinda. Untuk mencapai Pulau Kumala, Anda bisa menyeberang 
                            menggunakan perahu motor atau kereta gantung dari Tenggarong.</p>',
                            '<p>Salah satu yang khas dari kota Samarinda adalah kain tenunnya. Kain tenun khas Samarinda memiliki 
                            motif kotak-kotak yang cantik. Jika ingin membeli kain tenun ini sebagai oleh-oleh, silakan datang 
                            ke Kecamatan Samarinda Seberang. Ada dua kampung yang menjadi pusat kerajinan ini yaitu Kampung Baqa 
                            dan Kampung Masjid.Kedua kampung ini menjadi tempat wisata bagi pengunjung dari luar kota. Di sini, 
                            selain membeli kain, Anda juga bisa melihat proses pembuatannya. Proses pembuatan kain ini masih sangat 
                            sederhana karena tetap menggunakan alat tenun bukan mesin yang disebut ‘Gedokan’. Untuk membuat sehelai 
                            kain tenun, dibutuhkan waktu 3 sampai 7 hari sesuai tingkat kesulitan motif yang diinginkan. Tak mengherankan 
                            jika harganya bisa mencapai ratusan hingga jutaan rupiah untuk tiap helainya. Jika Anda ingin motif yang 
                            berbeda dari yang lain, Anda bisa memesannya terlebih dahulu.</p>',
                            '<p>Penangkaran buaya makroman. Lebih jelasnya tempat ini terletak di Desa pulau atas, kelurahan makroman, 
                            kecamatan palaran kurang lebih berjarak 17km dari pusat kota samarinda. Tempat ini dapat anda tempuh 
                            dengan menggunakan kendaraan beroda dua ataupun kendaraan roda empat. Tempat wisata alam seluas kurang 
                            lebih 7 hektar ini memiliki 3 jenis buaya yang saat ini berada di dalam penangkaran Makroman. nama-nama 
                            dari jenis buaya tersebut yaitu buaya siam, buaya muara, dan buaya sepit. Semua jenis buaya yang ada di 
                            dalam penangkaran ini, adalah jenis buaya yang bisa ditemui di berbagai sungai yang ada di Kalimantan 
                            Timur dan juga di beberapa daerah lain di Indonesia, Ada banyak buaya yang bisa anda lihat kalau sedang 
                            berkunjung ke penangkaran Makroman. Penangkaran ini tidak hanya mengembangbiakkan satu jenis buaya, namun 
                            beberapa jenis buaya. Penangkaran buaya ini baru dikenal orang sekitar awal abad ke-20. Sebagian besar dari 
                            generasi awal dalam penangkaran buaya ini lebih tertuju untuk keperluan atraksi bagi turis saja. Bukan untuk 
                            mengembangbiakkan buaya lalu diambil produknya. Kemudian pada tahun 1960 an operasi komersial untuk 
                            menghasilkan produk dari buaya mulai dilakukan. seperti mengambil telur buaya dari alam liar, atau dengan 
                            cara mengembangbiakkan buaya di dalam penangkaran. Hal ini dilakukan karena semakin punahnya populasi buaya 
                            di alam liar. Dan beberapa dari buaya tersebut dalam ancaman kepunahan.</p>',
                            '<p>Terkadang nama sebuah tempat memiliki makna khusus yang tidak semua orang bisa mengartikan secara mudah. 
                            Sebab, keberadaan nama tempat ini tidak dapat diartikan begitu saja secara harfiah. Hanya saja pada lokasi 
                            air terjun ini terdapat beberapa mata air yang cukup banyak sehingga air terjun yang muncul akan terlihat 
                            sangat indah. Anda pasti akan takjub dan seketika ingin langsung bermain atau berfoto di bawah air terjun 
                            ini. Air terjun ini terletak di Kelurahan Sempaja Utara, Samarinda Utara. Air Terjun Pinang Seribu memiliki 
                            bentuk yang unik karena berupa undakan seperti anak tangga dan bisa dinaiki. Airnya mengalir tidak terlalu 
                            deras sehingga relatif aman untuk bermain bersama anak-anak.Selain bermain air, Anda bisa menyewa sepeda air 
                            seharga 15.000 Rupiah untuk berkeliling danau buatan. Anda juga bisa membayar 10.000 Rupiah untuk memancing 
                            di kolam sepuasnya. Di sini juga terdapat banyak gazebo untuk bersantai sambil menikmati makan siang Anda. 
                            Jika masih ingin berada di tempat wisata ini lebih lama, Anda bisa menginap di villa yang ada di kawasan ini. 
                            Tiket masuk Air Terjun Pinang Seribu adalah 5.000 Rupiah per orang.</p>',
                            '<p>Lokasi wisata ini sangat cantik dan indah sehingga banyak masyarakat yang mengabadikan keindahan ini 
                            dengan berfoto dan video. Latar belakang sungai yang biru dan sejuk menjadi daya tarik tersendiri bagi 
                            para pelancong dan masyarakat sekitar. Teluk ini sangat dekat dengan Sungai Mahakam, sehingga mereka yang 
                            berfoto di teluk ini dapat melihat Sungai Mahakam sebagai latar belakangnya. Angin yang menerpa bagian 
                            teluk ini sangat sejuk dan sepoi, terkadang pada sore hari angin agak kencang sehingga beberapa orang 
                            justru memanfaatkan pose yang pas seperti foto sampul majalah yang sedang diterpa angin kencang. Bagi 
                            pecinta foto, lokasi ini sangat pas dijadikan latar belakang dalam segala situasi.</p>');

                        for($row = 0; $row < 10; $row ++){
                            $no = $row + 1;
                        echo"
                            <h2>$no. $wisata[$row]</h2>
                            <img src = '$img[$row]'/>
                            <p>$deskripsi[$row]</p>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </content>
    </body>
    
    <!--FOOTER -->
    <footer>
        <div class = "copyright">
            <p>&copy; 2023 Kelompok 2 Web Programming.</p>
            <p>All rights reserved.</p> 
        </div>
    </footer>
</html>