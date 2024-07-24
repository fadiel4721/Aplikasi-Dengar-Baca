<?php
session_start(); // Mulai sesi

// Pengecekan apakah pengguna telah login
if (!isset($_SESSION['ceklogin']) || $_SESSION['ceklogin'] !== true) {
    header("Location: homepage_user.php"); // Redirect ke halaman login jika belum login
    exit();
}

require 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" type="text/css" href="./css/home-copy.css">
    <link rel="stylesheet" href="./css/home-admin.css">
</head>

<body>

    <nav>
        <div class="wrapper">
            <div class="logo">
                <li class="list" data-audio="media/Dengar.mp3"><a href=".logo" onclick="playAudioAndNavigate(event, '#')">Dengar&<span>Baca</span>.</a>
                </li>
            </div>
            <div class="menu">
                <ul>
                    <li class="list active" data-audio="media/Huruf.mp3">
                        <a href="#huruf" onclick="playAudioAndNavigate(event, '#huruf')">
                            <span class="icon"><ion-icon name="text-outline"></ion-icon></span>
                            <span class="text">Huruf</span>
                        </a>
                    </li>
                    <li class="list" data-audio="media/Angka.mp3">
                        <a href="#angka" onclick="playAudioAndNavigate(event, '#angka')">
                            <span class="icon"><ion-icon name="logo-electron"></ion-icon></span>
                            <span class="text">Angka</span>
                        </a>
                    </li>
                    <li class="list" data-audio="media/Hewan.mp3">
                        <a href="#hewan" onclick="playAudioAndNavigate(event, '#hewan')">
                            <span class="icon"><ion-icon name="paw-outline"></ion-icon></span>
                            <span class="text">Hewan</span>
                        </a>
                    </li>
                    <li class="list" data-audio="media/Profesi.mp3">
                        <a href="#profesi" onclick="playAudioAndNavigate(event, '#profesi')">
                            <span class="icon"><ion-icon name="school-outline"></ion-icon></span>
                            <span class="text">Profesi</span>
                        </a>
                    </li>
                    <li class="list" data-audio="media/Aktivitas.mp3">
                        <a href="#katakerja" onclick="playAudioAndNavigate(event, '#katakerja')">
                            <span class="icon"><ion-icon name="body-outline"></ion-icon></span>
                            <span class="text">Aktivitas</span>
                        </a>
                    </li>
                    <li class="list" data-audio="media/Daftar.mp3">
                        <a href=".list" onclick="playAudioAndNavigate(event, '#')" class="tbl-biru" id="form-open">Sign up</a>
                    </li>
                    <li class="list">
                        <a href="proses_logout.php" class="tbl-biru" id="form-open" onclick="return konfirmasi();">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="home">
        <div class="form_container">
            <i class="uil uil-times form_close"></i>
            <!-- login form -->
            <div class=" form login_form">
                <form action="proses_daftar.php" method="post">
                    <h2>Sign up</h2>
                    <div class="input_box">
                        <input type="username" name="username" placeholder="Masukkan Username" required>
                        <i class="uil uil-user email"></i>
                    </div>
                    <div class="input_box">
                        <input type="password" name="password" placeholder="Buat password" required>
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide"></i>
                    </div>
                    <div class="input_box">
                        <input type="password" name="passwordconfirm" placeholder="Konfirmasi password" required>
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide"></i>
                    </div>

                    <div class="option_field">
                        <span class="checkbox">

                            <label for="check"></label>
                        </span>
                    </div>
                    <input class="input-field" type="submit" name="submit" value="submit">
                </form>
            </div>
        </div>
        <div class="wrapper">
            <!-- untuk home -->
            <section id="home">
                <img src="https://img.freepik.com/free-vector/hand-holding-headphones-listening-music-person-enjoying-sound-radio-playlist-with-headset-flat-vector-illustration-entertainment-concept-banner-website-design-landing-web-page_74855-24614.jpg?w=740&t=st=1707127787~exp=1707128387~hmac=f56da4b1cb44c09943dc9048db9b4d6f6ae4fa7466a0e7d151368c93704d3305" />
                <div class="kolom" data-audio="media/Belajarbaca.mp3">
                    <a href=".deskripsi" onclick="playAudioAndNavigate(event, '#')">
                        <p class="deskripsi">Belajar Baca #dirumahaja</p>
                        <h2>Tetap Sehat, Tetap Semangat!</h2>
                </div>
                </a>
            </section>
            <!-- keterangan -->
            <section id="keterangan">
                <div class="keterangan">
                    <div class="kolom" data-audio="media/Buta.mp3">
                        <a href=".keterangan" onclick="playAudioAndNavigate(event, '#')">
                            <h2>Apa Itu Buta Huruf?</h2>
                            <p>Buta huruf adalah kondisi di mana seseorang tidak bisa membaca atau menulis.</p>
                            <p>Ini bisa disebabkan oleh berbagai faktor, termasuk kurangnya akses terhadap pendidikan formal, kondisi medis seperti disleksia, atau keadaan sosial-ekonomi yang tidak memungkinkan untuk mendapatkan pendidikan yang memadai.</p>
                            <p>Bagaimana ya cara mengatasi buta huruf tersebut?</p>
                            <p>berikut ini adalah cara mengatasinya!!</p>
                    </div>
                    </a>
                    <img src="./img/think.jpg" alt="">
                </div>
            </section>
            <section id="keterangan2">
                <div class="keterangan">
                    <div class="kolom">
                        <h2>Cara mengatasi Buta Huruf!</h2>
                        <p>Mengatasi buta huruf melibatkan berbagai strategi dan program pendidikan yang dirancang untuk membantu orang dewasa belajar membaca dan menulis. Berikut adalah beberapa langkah yang dapat diambil untuk membantu seseorang mengatasi buta huruf:</p>
                        <li> Pendidikan Dasar: Memberikan akses terhadap pendidikan dasar yang berkualitas adalah langkah pertama yang penting. Program pendidikan formal yang menyediakan kursus membaca dan menulis dapat membantu individu memperoleh keterampilan dasar.</li><br>
                        <li>Program Literasi Dewasa: Program khusus untuk orang dewasa yang mengalami buta huruf sering kali tersedia di banyak komunitas. Program-program ini dirancang untuk memberikan dukungan yang intensif dan personal kepada peserta untuk membantu mereka memperoleh keterampilan membaca, menulis, dan kemampuan komunikasi lainnya.</li><br>
                        <li>Teknologi: Penggunaan teknologi dapat menjadi alat yang kuat dalam membantu orang yang buta huruf. Aplikasi dan perangkat lunak yang dirancang khusus untuk pembelajaran membaca dan menulis dapat membantu meningkatkan kemampuan literasi.</li>
                    </div>
                </div>
            </section>
            <section id="nah1">
                <img src="https://img.freepik.com/premium-vector/handsome-man-showing-pointing-fingers-upper-left-corner-with-happy-expression-advices-use-this-copy-space-wisely-concept-illustration_270158-262.jpg?w=740" alt="" id="nah">
                <div class="nah" data-audio="Nah.mp3">
                    <a href=".nah" onclick="playAudioAndNavigate(event, '#')">
                        <h2>Nah!! dengan adanya Website ini kita sebagai Developer ingin membantu teman-teman kita yang kurang dalam membaca dan membantu anak yang susah dalam membaca!!</h2>
                </div>
                </a>
            </section>
            <h2>Tempat Kelola Gambar Untuk Admin</h2>
            <!-- untuk courses -->
            <p id="huruf"></p>
            <section id="courses">
                <div class="kolom">
                    <div class="huruf1">
                        <img src="https://img.freepik.com/free-vector/audiobook-concept-illustration_114360-6854.jpg?w=360&t=st=1707127568~exp=1707128168~hmac=477b19e0dd166c00b8d23746e901d5a317f03660eee4ddde3a6b3e935f49ecd6" />
                        <p class="deskripsi">Ayok Mulai Dari Huruf!</p>
                    </div>
                    <h2>Huruf.</h2>
                    <div class="audio-controls">
                        <!-- Audio 1 -->
                        <?php
                        $sql = "SELECT * FROM medias WHERE category = 'huruf'";
                        $medias = mysqli_query($koneksi, $sql);
                        ?>
                        <?php foreach ($medias as $media) : ?>
                            <audio id="audio<?= $media['id_media'] ?>">
                                <source src="<?= $media['audio'] ?>" type="audio/mpeg">
                            </audio>
                            <!-- Tombol 1 -->
                            <button onclick="togglePlayPause('#audio<?= $media['id_media'] ?>', '#imageButton<?= $media['id_media'] ?>')">
                                <img id="imageButton<?= $media['id_media'] ?>" src="<?= $media['image'] ?>" alt="Play" width="50rem" height="50rem">
                            </button>
                            <form class="edit-form" action="proses_edit.php" method="post" enctype="multipart/form-data">
                                <!-- Input Edit Image -->
                                <input type="file" name="editImage" class="editImage" onchange="uploadImage(this, <?= $media['id_media'] ?>)">
                                <!-- <input type="submit" name="submitEditImage" value="Edit Image"> -->
                            </form>
                            <form class="edit-audio" action="proses_edit_2.php" method="post" enctype="multipart/form-data">
                                <!-- Input Edit Audio -->
                                <input type="file" name="editAudio" class="editAudio" onchange="uploadAudio(this, <?= $media['id_media'] ?>)">
                                <!-- <input type="submit" name="submitEditAudio" value="Edit Audio"> -->
                            </form>
                        <?php endforeach ?>

                    </div>

                    <h2>Kelola Gambar untuk Huruf</h2>
                    <p><a href="" class="tbl-biru">Kelola huruf</a></p>
                </div>
            </section>
            <!-- huruf end -->

            <!-- angka start -->
            <p id="angka"></p>
            <section id="courses">
                <div class="kolom">
                    <div class="huruf1">
                        <img src="https://img.freepik.com/free-vector/audiobook-concept-illustration_114360-6854.jpg?w=360&t=st=1707127568~exp=1707128168~hmac=477b19e0dd166c00b8d23746e901d5a317f03660eee4ddde3a6b3e935f49ecd6" />
                        <p class="deskripsi">Selanjutnya Angka!</p>
                    </div>
                    <h2>Angka.</h2>
                    <div class="audio-controls">
                        <?php
                        $sql = "SELECT * FROM medias WHERE category = 'angka'";
                        $medias = mysqli_query($koneksi, $sql);
                        ?>
                        <?php foreach ($medias as $media) : ?>
                            <audio id="audio<?= $media['id_media'] ?>">
                                <source src="<?= $media['audio'] ?>" type="audio/mpeg">
                            </audio>
                            <!-- Tombol 1 -->
                            <button onclick="togglePlayPause('#audio<?= $media['id_media'] ?>', '#imageButton<?= $media['id_media'] ?>')">
                                <img id="imageButton<?= $media['id_media'] ?>" src="<?= $media['image'] ?>" alt="Play" width="50rem" height="50rem">
                            </button>
                            <form class="edit-form" action="proses_edit.php" method="post" enctype="multipart/form-data">
                                <!-- Input Edit Image -->
                                <input type="file" name="editImage" class="editImage" onchange="uploadImage(this, <?= $media['id_media'] ?>)">
                                <!-- <input type="submit" name="submitEditImage" value="Edit Image"> -->
                            </form>
                            <form class="edit-audio" action="proses_edit_2.php" method="post" enctype="multipart/form-data">
                                <!-- Input Edit Audio -->
                                <input type="file" name="editAudio" class="editAudio" onchange="uploadAudio(this, <?= $media['id_media'] ?>)">
                                <!-- <input type="submit" name="submitEditAudio" value="Edit Audio"> -->
                            </form>
                        <?php endforeach ?>

                    </div>
                    <h2>Kelola gambar untuk angka</h2>
                    <p><a href="" class="tbl-biru">Kelola angka</a></p>
                </div>
            </section>
            <p id="hewan"></p>
            <section id="courses">
                <div class="kolom">
                    <div class="huruf1">
                        <img src="https://img.freepik.com/free-vector/audiobook-concept-illustration_114360-6854.jpg?w=360&t=st=1707127568~exp=1707128168~hmac=477b19e0dd166c00b8d23746e901d5a317f03660eee4ddde3a6b3e935f49ecd6" />
                        <p class="deskripsi">Ayok Kita Cari Tau Nama-Nama Hewan!</p>
                    </div>
                    <h2>Hewan</h2>
                    <div class="audio-controls">
                        <?php
                        $sql = "SELECT * FROM medias WHERE category = 'hewan'";
                        $medias = mysqli_query($koneksi, $sql);
                        ?>
                        <?php foreach ($medias as $media) : ?>
                            <audio id="audio<?= $media['id_media'] ?>">
                                <source src="<?= $media['audio'] ?>" type="audio/mpeg">
                            </audio>
                            <!-- Tombol 1 -->
                            <button onclick="togglePlayPause('#audio<?= $media['id_media'] ?>', '#imageButton<?= $media['id_media'] ?>')">
                                <img id="imageButton<?= $media['id_media'] ?>" src="<?= $media['image'] ?>" alt="Play" width="50rem" height="50rem">
                            </button>
                            <form class="edit-form" action="proses_edit.php" method="post" enctype="multipart/form-data">
                                <!-- Input Edit Image -->
                                <input type="file" name="editImage" class="editImage" onchange="uploadImage(this, <?= $media['id_media'] ?>)">
                                <!-- <input type="submit" name="submitEditImage" value="Edit Image"> -->
                            </form>
                            <form class="edit-audio" action="proses_edit_2.php" method="post" enctype="multipart/form-data">
                                <!-- Input Edit Audio -->
                                <input type="file" name="editAudio" class="editAudio" onchange="uploadAudio(this, <?= $media['id_media'] ?>)">
                                <!-- <input type="submit" name="submitEditAudio" value="Edit Audio"> -->
                            </form>
                        <?php endforeach ?>
                    </div>
                    <h2>Kelola Gambar Untuk Hewan</h2>
                    <p><a href="" class="tbl-biru">Kelola Hewan</a></p>
                </div>

            </section>
            <p id="profesi"></p>
            <section id="courses">

                <div class="kolom">
                    <div class="huruf1">
                        <img src="https://img.freepik.com/free-vector/audiobook-concept-illustration_114360-6854.jpg?w=360&t=st=1707127568~exp=1707128168~hmac=477b19e0dd166c00b8d23746e901d5a317f03660eee4ddde3a6b3e935f49ecd6" />
                        <p class="deskripsi">Cita - cita kalian ingin berprofesi menjadi apa ya?</p>
                    </div>
                    <h2>Profesi</h2>
                    <div class="audio-controls">
                        <?php
                        $sql = "SELECT * FROM medias WHERE category = 'profesi'";
                        $medias = mysqli_query($koneksi, $sql);
                        ?>
                        <?php foreach ($medias as $media) : ?>
                            <audio id="audio<?= $media['id_media'] ?>">
                                <source src="<?= $media['audio'] ?>" type="audio/mpeg">
                            </audio>
                            <!-- Tombol 1 -->
                            <button onclick="togglePlayPause('#audio<?= $media['id_media'] ?>', '#imageButton<?= $media['id_media'] ?>')">
                                <img id="imageButton<?= $media['id_media'] ?>" src="<?= $media['image'] ?>" alt="Play" width="50rem" height="50rem">
                            </button>
                            <form class="edit-form" action="proses_edit.php" method="post" enctype="multipart/form-data">
                                <!-- Input Edit Image -->
                                <input type="file" name="editImage" class="editImage" onchange="uploadImage(this, <?= $media['id_media'] ?>)">
                                <!-- <input type="submit" name="submitEditImage" value="Edit Image"> -->
                            </form>
                            <form class="edit-audio" action="proses_edit_2.php" method="post" enctype="multipart/form-data">
                                <!-- Input Edit Audio -->
                                <input type="file" name="editAudio" class="editAudio" onchange="uploadAudio(this, <?= $media['id_media'] ?>)">
                                <!-- <input type="submit" name="submitEditAudio" value="Edit Audio"> -->
                            </form>
                        <?php endforeach ?>
                    </div>
                    <h2>Kelola Gambar Untuk Profesi</h2>
                    <p><a href="" class="tbl-biru">Kelola Profesi</a></p>
                </div>
            </section>
            <p id="katakerja"></p>
            <section id="courses">
                <div class="kolom">
                    <div class="huruf1">
                        <img src="https://img.freepik.com/free-vector/audiobook-concept-illustration_114360-6854.jpg?w=360&t=st=1707127568~exp=1707128168~hmac=477b19e0dd166c00b8d23746e901d5a317f03660eee4ddde3a6b3e935f49ecd6" />
                        <p class="deskripsi">Kegiatan Sehari - Hari Kalian Ngapain Aja Sih?</p>
                    </div>
                    <h2>Aktivitas</h2>
                    <div class="audio-controls">
                        <?php
                        $sql = "SELECT * FROM medias WHERE category = 'aktivitas'";
                        $medias = mysqli_query($koneksi, $sql);
                        ?>
                        <?php foreach ($medias as $media) : ?>
                            <audio id="audio<?= $media['id_media'] ?>">
                                <source src="<?= $media['audio'] ?>" type="audio/mpeg">
                            </audio>
                            <!-- Tombol 1 -->
                            <button onclick="togglePlayPause('#audio<?= $media['id_media'] ?>', '#imageButton<?= $media['id_media'] ?>')">
                                <img id="imageButton<?= $media['id_media'] ?>" src="<?= $media['image'] ?>" alt="Play" width="50rem" height="50rem">
                            </button>
                            <form class="edit-form" action="proses_edit.php" method="post" enctype="multipart/form-data">
                                <!-- Input Edit Image -->
                                <input type="file" name="editImage" class="editImage" onchange="uploadImage(this, <?= $media['id_media'] ?>)">
                                <!-- <input type="submit" name="submitEditImage" value="Edit Image"> -->
                            </form>
                            <form class="edit-audio" action="proses_edit_2.php" method="post" enctype="multipart/form-data">
                                <!-- Input Edit Audio -->
                                <input type="file" name="editAudio" class="editAudio" onchange="uploadAudio(this, <?= $media['id_media'] ?>)">
                                <!-- <input type="submit" name="submitEditAudio" value="Edit Audio"> -->
                            </form>
                        <?php endforeach ?>

                    </div>
                    <h2>Kelola Gambaar Untuk Aktifitas</h2>
                    <p><a href="" class="tbl-biru">Kelola Aktifitas</a></p>
                </div>

            </section>

            <!-- untuk tutors -->
            <section id="tutors">
                <!-- <div class="tengah">
                    <div class="kolom">
                        <p class="deskripsi">Guru Kami</p>
                        <h2>Para Guru Kami</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, optio!</p>
                    </div>
                    <div class="tutor-list">
                        <div class="kartu-tutor">
                            <img src="https://takumi.ac.id/wp-content/uploads/elementor/thumbs/Pak-Reza-qbktbh8cpz3xisyuv78maneboycsnlitodkgo04e3c.png" />
                            <p>Reza Ilyasa, M.Kom</p>
                        </div>
                        <div class="kartu-tutor">
                            <img src="https://takumi.ac.id/wp-content/uploads/elementor/thumbs/Rifky-Akbar-Vetian-qex3gtsf4see8qsux00yv0wlhhb9kmjvl7trtpd0ew.jpg" />
                            <p>Rifky Akbar Vetian, MTI</p>
                        </div>
                        <div class="kartu-tutor">
                            <img src="https://takumi.ac.id/wp-content/uploads/elementor/thumbs/Bu-Dina-qj1v1rt3n6cwvso6t9ptzdm805zujqxt9alr19h848.jpg" />
                            <p>Dina Dwi Astartia, M.Pd</p>
                        </div>
                        <div class="kartu-tutor">
                            <img src="https://takumi.ac.id/wp-content/uploads/elementor/thumbs/Bu-Thiky-qbktxus074y8amb0sgkq1f9zqtuq8g52jc2esqgrxs.png" />
                            <p>R. Thiky Adelina P., M.Pd</p>
                        </div>
                    </div>
                </div> -->
            </section>

        </div>
        <div id="contact">
            <div class="wrapper">
                <div class="footer">
                    <div class="footer-section">
                        <h3>About</h3>
                        <p>Kami adalah sebuah platform yang berdedikasi untuk menyediakan konten edukasi berkualitas bagi pengguna kami. Dengan berbagai topik yang menarik, kami bertujuan untuk memberikan pembelajaran kepada anak-anak dan orang yang tidak bisa baca dan tulis.</p>
                    </div>
                    <div class="footer-section">
                        <h3>Contact</h3>
                        <p>Kebon Kopi, Jl. Raya Kodam, RT.004/RW.002, Serang, Cikarang Sel., Kabupaten Bekasi, Jawa Barat 17530</p>
                        <p><i class="fas fa-envelope"></i>Email:fadielmuhammad20@gmail.com</p>
                        <p><i class="fas fa-phone"></i>Telepon: +62 852-8158-7856</p>
                    </div>
                    <div class="footer-section">
                        <h3>Social</h3>
                        <p><b>YouTube: </b><a href="https://www.youtube.com/channel/yourchannel">Kunjungi saluran YouTube kami</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <div class="footer2">
            <p>&copy; 2024 dengar&baca, Trio-tech</p>
        </div>
        <audio id="audioPlayer"></audio>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script>
            function playMusic(audioSrc, destination) {
                let audioPlayer = document.getElementById('audioPlayer');
                audioPlayer.src = audioSrc;
                audioPlayer.play();
                audioPlayer.addEventListener('ended', function() {
                    setTimeout(function() {
                        window.location.href = destination;
                    }, 0);
                });
            }

            function playAudioAndNavigate(event, destination) {
                event.preventDefault(); // Mencegah navigasi bawaan link
                let audioSrc = event.currentTarget.parentElement.dataset.audio;
                playMusic(audioSrc, destination);
            }
        </script>
        <script>
            let list = document.querySelectorAll('.list');

            function activeLink() {
                list.forEach((item) =>
                    item.classList.remove('active'));
                this.classList.add('active');
            }
            list.forEach((item) =>
                item.addEventListener('click', activeLink))
        </script>
        <script>
            function konfirmasi() {
                return confirm('Apakah Anda Yakin Untuk Log Out?');
            }
        </script>
        <script src="js/custom.js"></script>
        <script src="js/script.js"></script>
</body>

</html>