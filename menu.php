<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/home.css">
</head>

<body>
    <nav class="navbar"> <!-- Mengubah div menjadi navbar -->
        <ul>
            <li class="list active" data-audio="media/Huruf.mp3">
                <a href="index.php" onclick="playAudioAndNavigate(event, 'index.php')">
                    <span class="icon"><ion-icon name="text-outline"></ion-icon></span>
                    <span class="text">Huruf</span>
                </a>
            </li>
            <li class="list" data-audio="media/Angka.mp3">
                <a href="#" onclick="playAudioAndNavigate(event, '#')">
                    <span class="icon"><ion-icon name="logo-electron"></ion-icon></span>
                    <span class="text">Angka</span>
                </a>
            </li>
            <li class="list" data-audio="media/Hewan.mp3">
                <a href="#" onclick="playAudioAndNavigate(event, '#')">
                    <span class="icon"><ion-icon name="paw-outline"></ion-icon></span>
                    <span class="text">Hewan</span>
                </a>
            </li>
            <li class="list" data-audio="media/Profesi.mp3">
                <a href="#" onclick="playAudioAndNavigate(event, '#')">
                    <span class="icon"><ion-icon name="school-outline"></ion-icon></span>
                    <span class="text">Profesi</span>
                </a>
            </li>
            <li class="list" data-audio="media/Katakerja.mp3">
                <a href="#" onclick="playAudioAndNavigate(event, '#')">
                    <span class="icon"><ion-icon name="body-outline"></ion-icon></span>
                    <span class="text">Aktivitas</span>
                </a>
            </li>
            <div class="indicator"></div>
        </ul>
    </nav>
    <audio id="audioPlayer"></audio>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        function playAudio(audioSrc, destination) {
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
            playAudio(audioSrc, destination);
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
</body>

</html>
session_start(); // Mulai sesi

// Pengecekan apakah pengguna telah login
if (!isset($_SESSION['ceklogin']) || $_SESSION['ceklogin'] !== true) {
header("Location: homepage.php"); // Redirect ke halaman login jika belum login
exit();
}