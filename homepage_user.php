<?php
require 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-t04mJl34zbIhH0e3Kg8Vvr2C/Ag1A3FwF3p31k44Bl5/6/PgHtp6vOhN51TkPShu7j0NqyQh2lls64FYuzi5+g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" type="text/css" href="./css/home-copy.css">
</head>

<body>

    <nav>
        <a href="welcome.php" class="text"><i class="fa-solid fa-arrow-left">Kembali</i></a>

        <div class="wrapper">


            <div class="logo">
                <li class="list" data-audio="media/Dengar.mp3"><a href="#" onclick="playAudioAndNavigate(event, '#')">Dengar&<span>Baca</span>.</a>
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
                    <li class="list" data-audio="media/login.mp3">
                        <a href=".list" onclick="playAudioAndNavigate(event, '#')" class="tbl-biru" id="form-open">Login</a>
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
                <form action="proses_login.php" method="post">
                    <h2>Login</h2>
                    <div class="input_box">
                        <input type="username" name="username" placeholder="Masukkan Username" required>
                        <i class="uil uil-user email"></i>
                    </div>
                    <div class="input_box">
                        <input type="password" name="password" placeholder="Masukkan Password" required>
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide"></i>
                    </div>
                    <div class="option_field">
                        <span class="checkbox">
                            <label for="check"></label>
                        </span>
                        <!-- <a href="reset_password.php" class="forgot_pw">Forgot Password?</a> -->
                    </div>
                    <input class="input-fields" type="submit" name="kirim" value="Login">
                </form>
            </div>
        </div>
        <div class="wrapper">
            <!-- untuk home -->
            <section id="home">
                <img src="https://img.freepik.com/free-vector/hand-holding-headphones-listening-music-person-enjoying-sound-radio-playlist-with-headset-flat-vector-illustration-entertainment-concept-banner-website-design-landing-web-page_74855-24614.jpg?w=740&t=st=1707127787~exp=1707128387~hmac=f56da4b1cb44c09943dc9048db9b4d6f6ae4fa7466a0e7d151368c93704d3305" />
                <div class="kolom" data-audio="media/Belajarbaca.mp3">
                    <a href=".deskripsi" onclick="playAudioAndNavigate(event,'#')">
                        <p class="deskripsi">Belajar Baca #dirumahaja</p>
                        <h2>Tetap Sehat, Tetap Semangat!</h2>
                </div>
                </a>
            </section>
            <!-- keterangan -->
            <section id="keterangan">
                <div class="keterangan">
                    <div class="kolom" data-audio="media/Apaitubuta.mp3,media/Ataukeadaan.mp3">
                        <a href=".keterangan" onclick="playSequentialAudios(event, '#keterangan')">
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
                    <div class="kolom" data-audio="media/Caramengatasi.mp3,media/Berikut.mp3,media/Program.mp3,media/Pendidikan.mp3,media/Literasi.mp3,media/Teknologi.mp3">
                        <a href=".keterangan" onclick="playSequentialAudios(event, '#keterangan2')">
                            <h2>Cara mengatasi Buta Huruf!</h2>
                            <p>Mengatasi buta huruf melibatkan berbagai strategi dan program pendidikan yang dirancang untuk membantu orang dewasa belajar membaca dan menulis. Berikut adalah beberapa langkah yang dapat diambil untuk membantu seseorang mengatasi buta huruf:</p>
                            <h4>Program-program ini dirancang untuk memberikan dukungan yang intensif dan personal kepada peserta untuk membantu mereka memperoleh keterampilan membaca,menulis, dan kemampuan komunikasi lainnya!</h4><br>
                            <li> Pendidikan Dasar: Memberikan akses terhadap pendidikan dasar yang berkualitas adalah langkah pertama yang penting. Program pendidikan formal yang menyediakan kursus membaca dan menulis dapat membantu individu memperoleh keterampilan dasar.</li><br>
                            <li>Program Literasi Dewasa: Program khusus untuk orang dewasa yang mengalami buta huruf sering kali tersedia di banyak komunitas. Program-program ini dirancang untuk memberikan dukungan yang intensif dan personal kepada peserta untuk membantu mereka memperoleh keterampilan membaca, menulis, dan kemampuan komunikasi lainnya.</li><br>
                            <li>Teknologi: Penggunaan teknologi dapat menjadi alat yang kuat dalam membantu orang yang buta huruf. Aplikasi dan perangkat lunak yang dirancang khusus untuk pembelajaran membaca dan menulis dapat membantu meningkatkan kemampuan literasi.</li>
                    </div>
                    </a>
                </div>
            </section>
            <section id="nah1">
                <img src="https://img.freepik.com/premium-vector/handsome-man-showing-pointing-fingers-upper-left-corner-with-happy-expression-advices-use-this-copy-space-wisely-concept-illustration_270158-262.jpg?w=740" alt="" id="nah">
                <div class="nah" data-audio="media/Nah.mp3">
                    <a href=".nah" onclick="playAudioAndNavigate(event,'#nah1')">
                        <h2>Nah!! dengan adanya Website ini kita sebagai Developer ingin membantu teman-teman kita yang kurang dalam membaca dan membantu anak yang susah dalam membaca!!</h2>
                </div>
                </a>
            </section>
            <div id="belajar" class="belajar" data-audio="media/Maribelajar.mp3">
                <a href="#" onclick="playAudioAndNavigate(event,'#belajar')">
                    <p id="aa">Mari kita belajar belajar Membaca Bersama!!!</p>
            </div>
            </a>
            <!-- untuk courses -->
            <p id="huruf"></p>
            <section id="courses">
                <div class="kolom">
                    <div class="huruf1">
                        <img src="https://img.freepik.com/free-vector/audiobook-concept-illustration_114360-6854.jpg?w=360&t=st=1707127568~exp=1707128168~hmac=477b19e0dd166c00b8d23746e901d5a317f03660eee4ddde3a6b3e935f49ecd6" />
                        <div class="woi" data-audio="media/Ayohuruf.mp3">
                            <a href="#" onclick="playAudioAndNavigate(event,'#huruf')">
                                <p class="deskripsi">Ayok Mulai Dari Huruf!</p>
                        </div>
                    </div>
                    <h2>Huruf.</h2>
                    <div class="audio-controls">
                        <?php
                        // Query untuk mengambil semua data dari tabel medias dengan kategori 'huruf'
                        $sql = "SELECT * FROM medias WHERE category = 'huruf'";
                        $medias = mysqli_query($koneksi, $sql);

                        if (mysqli_num_rows($medias) > 0) {
                            foreach ($medias as $media) {
                        ?>
                                <!-- Button dengan gambar dan audio -->
                                <button onclick="togglePlayPause('#audio<?= $media['id_media'] ?>', '#imageButton<?= $media['id_media'] ?>')">
                                    <img id="imageButton<?= $media['id_media'] ?>" src="<?= $media['image'] ?>" alt="Play" width="50rem" height="50rem">
                                </button>
                                <!-- Audio dengan ID yang sesuai -->
                                <audio id="audio<?= $media['id_media'] ?>" controls style="display: none;">
                                    <source src="<?= $media['audio'] ?>" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                        <?php
                            }
                        } else {
                            echo "Tidak ada data gambar atau audio yang tersedia.";
                        }
                        ?>




                    </div>
                    <div class="belajar1" data-audio="media/Denganbelajar.mp3">
                        <a href=".belajar1" onclick="playAudioAndNavigate(event, '#huruf')">
                            <p>Dengan belajar huruf kita, bisa mengajarkan anak-anak kita atau orang yang tidak bisa baca huruf menjadi Bisa!</p>
                    </div>
                    </a>
                    <iframe class="yt" src="https://www.youtube.com/embed/cQKKRKhC1Yw?si=Oi6b4iHN-suN9hAd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <p><a href="https://www.youtube.com/watch?v=cQKKRKhC1Yw" class="tbl-biru" target="_blank">Pelajari Lebih Lanjut</a></p>
                </div>
            </section>
            <!-- huruf end -->

            <!-- angka start -->
            <p id="angka"></p>
            <section id="courses">
                <div class="kolom">
                    <div class="huruf1">
                        <img src="https://img.freepik.com/free-vector/audiobook-concept-illustration_114360-6854.jpg?w=360&t=st=1707127568~exp=1707128168~hmac=477b19e0dd166c00b8d23746e901d5a317f03660eee4ddde3a6b3e935f49ecd6" />
                        <div class="aneh" data-audio="media/Selanjutnya.mp3">
                            <a href="#" onclick="playAudioAndNavigate(event, '#angka')">
                                <p class="deskripsi">Selanjutnya Angka!</p>
                        </div>
                        </a>
                    </div>
                    <h2>Angka.</h2>
                    <div class="audio-controls">
                        <?php
                        // Query untuk mengambil semua data dari tabel medias dengan kategori 'huruf'
                        $sql = "SELECT * FROM medias WHERE category = 'angka'";
                        $medias = mysqli_query($koneksi, $sql);

                        if (mysqli_num_rows($medias) > 0) {
                            foreach ($medias as $media) {
                        ?>
                                <!-- Button dengan gambar dan audio -->
                                <button onclick="togglePlayPause('#audio<?= $media['id_media'] ?>', '#imageButton<?= $media['id_media'] ?>')">
                                    <img id="imageButton<?= $media['id_media'] ?>" src="<?= $media['image'] ?>" alt="Play" width="50rem" height="50rem">
                                </button>
                                <!-- Audio dengan ID yang sesuai -->
                                <audio id="audio<?= $media['id_media'] ?>" controls style="display: none;">
                                    <source src="<?= $media['audio'] ?>" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                        <?php
                            }
                        } else {
                            echo "Tidak ada data gambar atau audio yang tersedia.";
                        }
                        ?>

                    </div>
                    <div class="belajar1" data-audio="media/Denganbelajar.mp3">
                        <a href=".belajar1" onclick="playAudioAndNavigate(event, '#angka')">
                            <p>Ayo kita coba mengenal angka!</p>
                    </div>
                    <iframe class="yt" src="https://www.youtube.com/embed/SzehfSmzQpY?si=E6q1zmD8E1RfJU_K" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <p><a href="https://www.youtube.com/watch?v=SzehfSmzQpY" class="tbl-biru" target="_blank">Pelajari Lebih Lanjut</a></p>
                </div>
            </section>
            <p id="hewan"></p>
            <section id="courses">
                <div class="kolom">
                    <div class="huruf1">
                        <img src="https://img.freepik.com/free-vector/audiobook-concept-illustration_114360-6854.jpg?w=360&t=st=1707127568~exp=1707128168~hmac=477b19e0dd166c00b8d23746e901d5a317f03660eee4ddde3a6b3e935f49ecd6" />
                        <div class="hewan" data-audio="media/Ayohewan.mp3">
                            <a href="#" onclick="playAudioAndNavigate(event,'#hewan')">
                                <p class="deskripsi">Ayok Kita Cari Tau Nama-Nama Hewan!</p>
                        </div>
                        </a>
                    </div>
                    <h2>Hewan</h2>
                    <div class="audio-controls">
                        <?php
                        // Query untuk mengambil semua data dari tabel medias dengan kategori 'huruf'
                        $sql = "SELECT * FROM medias WHERE category = 'hewan'";
                        $medias = mysqli_query($koneksi, $sql);

                        if (mysqli_num_rows($medias) > 0) {
                            foreach ($medias as $media) {
                        ?>
                                <!-- Button dengan gambar dan audio -->
                                <button onclick="togglePlayPause('#audio<?= $media['id_media'] ?>', '#imageButton<?= $media['id_media'] ?>')">
                                    <img id="imageButton<?= $media['id_media'] ?>" src="<?= $media['image'] ?>" alt="Play" width="50rem" height="50rem">
                                </button>
                                <!-- Audio dengan ID yang sesuai -->
                                <audio id="audio<?= $media['id_media'] ?>" controls style="display: none;">
                                    <source src="<?= $media['audio'] ?>" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                        <?php
                            }
                        } else {
                            echo "Tidak ada data gambar atau audio yang tersedia.";
                        }
                        ?>
                    </div>
                    <div class="belajar1" data-audio="media/Denganbelajar.mp3">
                        <a href=".belajar1" onclick="playAudioAndNavigate(event, '#hewan')">
                            <p>Belajar mengenal nama-nama Hewan!, agar anak kita tau apa saja nama hewan yang ada di sekitanya!</p>
                    </div>
                    <iframe class="yt" src="https://www.youtube.com/embed/EhmYnuRUCig?si=xGKHsGRzpPa24q9w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <p><a href="https://www.youtube.com/watch?v=EhmYnuRUCig" class="tbl-biru" target="_blank">Pelajari Lebih Lanjut</a></p>
                </div>

            </section>
            <p id="profesi"></p>
            <section id="courses">

                <div class="kolom">
                    <div class="huruf1">
                        <img src="https://img.freepik.com/free-vector/audiobook-concept-illustration_114360-6854.jpg?w=360&t=st=1707127568~exp=1707128168~hmac=477b19e0dd166c00b8d23746e901d5a317f03660eee4ddde3a6b3e935f49ecd6" />
                        <div class="cita" data-audio="media/Cita.mp3">
                            <a href="#" onclick="playAudioAndNavigate(event,'#profesi')">
                                <p class="deskripsi">Cita - cita kalian ingin berprofesi menjadi apa ya?</p>
                            </a>
                        </div>
                    </div>
                    <h2>Profesi</h2>
                    <div class="audio-controls">
                        <?php
                        // Query untuk mengambil semua data dari tabel medias dengan kategori 'huruf'
                        $sql = "SELECT * FROM medias WHERE category = 'profesi'";
                        $medias = mysqli_query($koneksi, $sql);

                        if (mysqli_num_rows($medias) > 0) {
                            foreach ($medias as $media) {
                        ?>
                                <!-- Button dengan gambar dan audio -->
                                <button onclick="togglePlayPause('#audio<?= $media['id_media'] ?>', '#imageButton<?= $media['id_media'] ?>')">
                                    <img id="imageButton<?= $media['id_media'] ?>" src="<?= $media['image'] ?>" alt="Play" width="50rem" height="50rem">
                                </button>
                                <!-- Audio dengan ID yang sesuai -->
                                <audio id="audio<?= $media['id_media'] ?>" controls style="display: none;">
                                    <source src="<?= $media['audio'] ?>" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                        <?php
                            }
                        } else {
                            echo "Tidak ada data gambar atau audio yang tersedia.";
                        }
                        ?>
                    </div>
                    <div class="belajar1" data-audio="media/Denganbelajar.mp3">
                        <a href=".belajar1" onclick="playAudioAndNavigate(event, '#profesi')">
                            <p>Cita-cita adalah suatu impian semua orang, jadi dengan belajar mengenal nama dari cita-cita anak kita akan tau apa yang mereka cita-citakan!</p>
                    </div>
                    <iframe class="yt" src="https://www.youtube.com/embed/e20vGbPkdfo?si=X0Rswe1rvthyEv92" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <p><a href="https://www.youtube.com/watch?v=e20vGbPkdfo" class="tbl-biru" target="_blank">Pelajari Lebih Lanjut</a></p>
                </div>
            </section>
            <p id="katakerja"></p>
            <section id="courses">
                <div class="kolom">
                    <div class="huruf1">
                        <img src="https://img.freepik.com/free-vector/audiobook-concept-illustration_114360-6854.jpg?w=360&t=st=1707127568~exp=1707128168~hmac=477b19e0dd166c00b8d23746e901d5a317f03660eee4ddde3a6b3e935f49ecd6" />
                        <div data-audio="media/Kegiatan.mp3">
                            <a href="#" onclick="playAudioAndNavigate(event, '#katakerja')">
                                <p class="deskripsi">Kegiatan Sehari - Hari Kalian Ngapain Aja Sih?</p>
                            </a>
                        </div>
                    </div>
                    <h2>Aktivitas</h2>
                    <div class="audio-controls">
                        <?php
                        // Query untuk mengambil semua data dari tabel medias dengan kategori 'huruf'
                        $sql = "SELECT * FROM medias WHERE category = 'aktivitas'";
                        $medias = mysqli_query($koneksi, $sql);

                        if (mysqli_num_rows($medias) > 0) {
                            foreach ($medias as $media) {
                        ?>
                                <!-- Button dengan gambar dan audio -->
                                <button onclick="togglePlayPause('#audio<?= $media['id_media'] ?>', '#imageButton<?= $media['id_media'] ?>')">
                                    <img id="imageButton<?= $media['id_media'] ?>" src="<?= $media['image'] ?>" alt="Play" width="50rem" height="50rem">
                                </button>
                                <!-- Audio dengan ID yang sesuai -->
                                <audio id="audio<?= $media['id_media'] ?>" controls style="display: none;">
                                    <source src="<?= $media['audio'] ?>" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                        <?php
                            }
                        } else {
                            echo "Tidak ada data gambar atau audio yang tersedia.";
                        }
                        ?>
                    </div>
                    <div class="belajar1" data-audio="media/Denganbelajar.mp3">
                        <a href=".belajar1" onclick="playAudioAndNavigate(event, '#katakerja')">
                            <p>Dengan adanya kegiatan atau Hoby anak kita jadi semakin aktif dan kreatif!</p>
                    </div>

                    <iframe width="560" height="315" src="https://www.youtube.com/embed/_FP806Nma4o?si=v-FaStDdtMWXhdQ6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <p><a href="https://www.youtube.com/watch?v=_FP806Nma4o" class="tbl-biru" target="_blank">Pelajari Lebih Lanjut</a></p>
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
            <!-- untuk partners -->
            <section id="partners">
                <div class="tengah">
                    <div class="kolom">
                        <p class="deskripsi">Thank you!</p>
                        <h2>Terimakasih</h2>
                        <p>Terimakasih telah mengunjungi Website Kami semoga kalian Bersemangat untuk Belajar! dan kelak akan menjadi orang yang Sukses!</p>
                    </div>
                    <div class="terimakasih" align="center">
                        <img src="./img/thaks.jpg" alt="">
                    </div>
                    <!-- <div class="partner-list">
                        <div class="kartu-partner">
                            <img src="https://www.designevo.com/res/templates/thumb_small/black-wheat-and-mortarboard.png" />
                        </div>
                        <div class="kartu-partner">
                            <img src="https://image.freepik.com/free-vector/campus-collage-university-education-logo-design-template_7492-63.jpg" />
                        </div>
                        <div class="kartu-partner">
                            <img src="https://image.freepik.com/free-vector/campus-collage-university-education-logo-design-template_7492-62.jpg" />
                        </div>
                        <div class="kartu-partner">
                            <img src="https://www.designevo.com/res/templates/thumb_small/encircled-branches-and-book.png" />
                        </div>
                        <div class="kartu-partner">
                            <img src="https://image.freepik.com/free-vector/campus-collage-university-education-logo-design-template_7492-64.jpg" />
                        </div>
                    </div>
                </div> -->

            </section>

        </div><!-- end wrapper -->
        <section class="testimoni">
            <div class="kt">

            </div>
        </section>
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
            function playSequentialAudios(event, target) {
                event.preventDefault();

                var kolom = event.target.closest('.kolom');
                var audioUrls = kolom.dataset.audio.split(','); // Memisahkan URL audio menjadi array
                var audioIndex = 0; // Indeks audio yang sedang diputar

                // Fungsi rekursif untuk memutar audio berikutnya secara berurutan
                function playNextAudio() {
                    if (audioIndex < audioUrls.length) {
                        var audio = new Audio(audioUrls[audioIndex]);
                        audio.play();
                        audio.addEventListener('ended', function() {
                            audioIndex++; // Pindah ke audio berikutnya setelah selesai diputar
                            playNextAudio(); // Memanggil fungsi untuk memutar audio berikutnya
                        });
                    }
                }

                // Memulai pemutaran audio berurutan
                playNextAudio();
            }
        </script>
        <script>
            // Fungsi untuk toggle play/pause audio dan mengubah ikon gambar
            function togglePlayPause(audioId, imgId) {
                var audio = document.querySelector(audioId);
                var img = document.querySelector(imgId);

                // Jika audio sedang diputar, jeda (pause) audio dan ganti ikon gambar
                if (audio.paused) {
                    audio.play();
                    img.src = "pause_icon.png"; // Ganti dengan ikon pause
                } else {
                    audio.pause();
                    audio.currentTime = 0; // Mulai dari awal ketika dijeda
                    img.src = "play_icon.png"; // Ganti dengan ikon play
                }
            }
        </script>
        <script src="js/script.js"></script>
        <script src="js/custom.js"></script>
</body>

</html>