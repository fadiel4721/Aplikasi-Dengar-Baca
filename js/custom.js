var audioElements = document.querySelectorAll("audio");
var playPauseButtons = document.querySelectorAll("button");
var playPauseImgs = document.querySelectorAll("button img");
var clickCounts = new Array(audioElements.length).fill(0);
var isPlaying = false;
var isEnded = false;
var pauseTimes = new Array(audioElements.length).fill(0);

// playPauseButtons.forEach(function (button, index) {
//   button.addEventListener("click", function () {
//     if (isEnded) {
//       // Jika audio telah selesai, reset dan putar dari awal
//       isEnded = false;
//       clickCounts[index] = 1;
//     }

//     if (clickCounts[index] === 1 || isEnded) {
//       playAudio(index);
//     } else if (clickCounts[index] === 2) {
//       pauseAudio(index);
//     } else if (!isEnded) {
//       // Jika audio belum selesai, lanjutkan dari posisi terakhir
//       playAudio(index);
//     }
//   });
// });

function playAudio(index) {
  var audio = audioElements[index];
  var playPauseImg = playPauseImgs[index];

  if (isPlaying) {
    // Jika sedang di-pause, lanjutkan dari posisi terakhir
    audio.currentTime = pauseTimes[index];
    audio.play();
  } else {
    audio.play();
    playPauseImg.style.filter = "brightness(0.8)"; // Efek cahaya merah saat tombol di-play
    // Mengubah gambar tombol sesuai dengan indeks audio
    switch (index) {
      case 0:
        playPauseImg.src = "img/A.jpg"; // Mengganti gambar menjadi tombol pause
        break;
      case 1:
        playPauseImg.src = "img/B.jpg"; // Mengganti gambar menjadi tombol pause
        break;
      case 2:
        playPauseImg.src = "img/C.jpg"; // Mengganti gambar menjadi tombol pause
        break;
      case 3:
        playPauseImg.src = "img/D.jpg"; // Mengganti gambar menjadi tombol pause
        break;
      case 4:
        playPauseImg.src = "img/E.jpg"; // Mengganti gambar menjadi tombol pause
        break;
      case 5:
        playPauseImg.src = "img/F.jpg"; // Mengganti gambar menjadi tombol pause
        break;
      case 6:
        playPauseImg.src = "img/G.jpg"; // Mengganti gambar menjadi tombol pause
        break;
      case 7:
        playPauseImg.src = "img/H.jpg"; // Mengganti gambar menjadi tombol pause
        break;
      case 8:
        playPauseImg.src = "img/I.jpg"; // Mengganti gambar menjadi tombol pause
        break;
      case 9:
        playPauseImg.src = "img/J.jpg"; // Mengganti gambar menjadi tombol pause
        break;
      case 10:
        playPauseImg.src = "img/K.jpg"; // Mengganti gambar menjadi tombol pause
        break;
      case 11:
        playPauseImg.src = "img/L.jpg"; // Mengganti gambar menjadi tombol pause
        break;
      case 12:
        playPauseImg.src = "img/M.jpg"; // Mengganti gambar menjadi tombol pause
        break;
      case 13:
        playPauseImg.src = "img/N.jpg"; // Mengganti gambar menjadi tombol pause
        break;
      case 14:
        playPauseImg.src = "img/O.jpg"; // Mengganti gambar menjadi tombol pause
        break;
      case 15:
        playPauseImg.src = "img/P.jpg"; // Mengganti gambar menjadi tombol pause
        break;
      case 16:
        playPauseImg.src = "img/Q.jpg"; // Mengganti gambar menjadi tombol pause
        break;
      case 17:
        playPauseImg.src = "img/R.jpg"; // Mengganti gambar menjadi tombol pause
        break;
      case 18:
        playPauseImg.src = "img/S.jpg"; // Mengganti gambar menjadi tombol pause
        break;
      case 19:
        playPauseImg.src = "img/T.jpg"; // Mengganti gambar menjadi tombol pause
        break;
      case 20:
        playPauseImg.src = "img/U.jpg"; // Mengganti gambar menjadi tombol pause
        break;
      case 21:
        playPauseImg.src = "img/V.jpg"; // Mengganti gambar menjadi tombol pause
        break;
      case 22:
        playPauseImg.src = "img/W.jpg"; // Mengganti gambar menjadi tombol pause
        break;
      case 23:
        playPauseImg.src = "img/X.jpg"; // Mengganti gambar menjadi tombol pause
        break;
      case 24:
        playPauseImg.src = "img/Y.jpg"; // Mengganti gambar menjadi tombol pause
        break;
      case 25:
        playPauseImg.src = "img/Z.jpg"; // Mengganti gambar menjadi tombol pause
        break;
      case 26:
        playPauseImg.src = "img/1.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 27:
        playPauseImg.src = "img/2.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 28:
        playPauseImg.src = "img/3.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 29:
        playPauseImg.src = "img/4.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 30:
        playPauseImg.src = "img/5.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 31:
        playPauseImg.src = "img/6.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 32:
        playPauseImg.src = "img/7.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 33:
        playPauseImg.src = "img/8.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 34:
        playPauseImg.src = "img/9.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 35:
        playPauseImg.src = "img/10.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 36:
        playPauseImg.src = "img/Anjing.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 37:
        playPauseImg.src = "img/Ayam.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 38:
        playPauseImg.src = "img/Bebek.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 39:
        playPauseImg.src = "img/Beruang.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 40:
        playPauseImg.src = "img/Buaya.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 41:
        playPauseImg.src = "img/Elang.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 42:
        playPauseImg.src = "img/Gajah.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 43:
        playPauseImg.src = "img/Harimau.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 44:
        playPauseImg.src = "img/Ikan.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 45:
        playPauseImg.src = "img/Jerapah.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 46:
        playPauseImg.src = "img/Kambing.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 47:
        playPauseImg.src = "img/Katak.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 48:
        playPauseImg.src = "img/Kelinci.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 49:
        playPauseImg.src = "img/Koala.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 50:
        playPauseImg.src = "img/Kucing.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 51:
        playPauseImg.src = "img/Kuda.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 52:
        playPauseImg.src = "img/Monyet.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 53:
        playPauseImg.src = "img/Panda.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 54:
        playPauseImg.src = "img/Rusa.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 55:
        playPauseImg.src = "img/Sapi.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 56:
        playPauseImg.src = "img/Serigala.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 57:
        playPauseImg.src = "img/Tupai.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 58:
        playPauseImg.src = "img/Unta.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 59:
        playPauseImg.src = "img/Zebra.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 60:
        playPauseImg.src = "img/Arsitek.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 61:
        playPauseImg.src = "img/Chef.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 62:
        playPauseImg.src = "img/Dokter.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 63:
        playPauseImg.src = "img/Fotografer.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 64:
        playPauseImg.src = "img/Guru.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 65:
        playPauseImg.src = "img/Hakim.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 66:
        playPauseImg.src = "img/Montir.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 67:
        playPauseImg.src = "img/Nahkoda.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 68:
        playPauseImg.src = "img/Pelukis.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 69:
        playPauseImg.src = "img/Pemadam.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 70:
        playPauseImg.src = "img/Penari.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 71:
        playPauseImg.src = "img/Penyanyi.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 72:
        playPauseImg.src = "img/Petani.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 73:
        playPauseImg.src = "img/Pilot.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 74:
        playPauseImg.src = "img/Polisi.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 75:
        playPauseImg.src = "img/Presiden.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 76:
        playPauseImg.src = "img/Tentara.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 77:
        playPauseImg.src = "img/Basket.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 78:
        playPauseImg.src = "img/Bersepeda.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 79:
        playPauseImg.src = "img/Bola.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 80:
        playPauseImg.src = "img/MencuciBaju.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 81:
        playPauseImg.src = "img/Menulis.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 82:
        playPauseImg.src = "img/Menyapu.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 83:
        playPauseImg.src = "img/Musik.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 84:
        playPauseImg.src = "img/Olahraga.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 85:
        playPauseImg.src = "img/Memasak.jpg"; // Mengganti gambar menjadi tombol play
        break;
      case 86:
        playPauseImg.src = "img/Memancing.jpg"; // Mengganti gambar menjadi tombol play
        break;

      // Tambahkan case untuk audio lainnya di sini sesuai kebutuhan
      default:
        playPauseImg.src = "img/default.jpg"; // Gambar default jika tidak sesuai
        break;
    }
  }
  isPlaying = true;
}

function pauseAudio(index) {
  var audio = audioElements[index];
  var playPauseImg = playPauseImgs[index];

  audio.pause();
  pauseTimes[index] = audio.currentTime; // Simpan posisi waktu saat audio di-pause
  isPlaying = false;
  playPauseImg.style.filter = "none"; // Hapus efek cahaya merah saat tombol di-pause
  // Mengubah gambar tombol sesuai dengan indeks audio
  switch (index) {
    case 0:
      playPauseImg.src = "img/A.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 1:
      playPauseImg.src = "img/B.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 2:
      playPauseImg.src = "img/C.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 3:
      playPauseImg.src = "img/D.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 4:
      playPauseImg.src = "img/E.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 5:
      playPauseImg.src = "img/F.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 6:
      playPauseImg.src = "img/G.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 7:
      playPauseImg.src = "img/H.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 8:
      playPauseImg.src = "img/I.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 9:
      playPauseImg.src = "img/J.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 10:
      playPauseImg.src = "img/K.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 11:
      playPauseImg.src = "img/L.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 12:
      playPauseImg.src = "img/M.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 13:
      playPauseImg.src = "img/N.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 14:
      playPauseImg.src = "img/O.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 15:
      playPauseImg.src = "img/P.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 16:
      playPauseImg.src = "img/Q.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 17:
      playPauseImg.src = "img/R.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 18:
      playPauseImg.src = "img/S.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 19:
      playPauseImg.src = "img/T.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 20:
      playPauseImg.src = "img/U.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 21:
      playPauseImg.src = "img/V.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 22:
      playPauseImg.src = "img/W.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 23:
      playPauseImg.src = "img/X.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 24:
      playPauseImg.src = "img/Y.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 25:
      playPauseImg.src = "img/Z.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 26:
      playPauseImg.src = "img/1.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 27:
      playPauseImg.src = "img/2.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 28:
      playPauseImg.src = "img/3.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 29:
      playPauseImg.src = "img/4.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 30:
      playPauseImg.src = "img/5.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 31:
      playPauseImg.src = "img/6.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 32:
      playPauseImg.src = "img/7.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 33:
      playPauseImg.src = "img/8.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 34:
      playPauseImg.src = "img/9.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 35:
      playPauseImg.src = "img/10.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 37:
      playPauseImg.src = "img/Ayam.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 38:
      playPauseImg.src = "img/Bebek.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 39:
      playPauseImg.src = "img/Beruang.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 40:
      playPauseImg.src = "img/Buaya.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 41:
      playPauseImg.src = "img/Elang.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 42:
      playPauseImg.src = "img/Gajah.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 43:
      playPauseImg.src = "img/Harimau.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 44:
      playPauseImg.src = "img/Ikan.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 45:
      playPauseImg.src = "img/Jerapah.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 46:
      playPauseImg.src = "img/Kambing.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 47:
      playPauseImg.src = "img/Katak.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 48:
      playPauseImg.src = "img/Kelinci.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 49:
      playPauseImg.src = "img/Koala.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 50:
      playPauseImg.src = "img/Kucing.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 51:
      playPauseImg.src = "img/Kuda.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 52:
      playPauseImg.src = "img/Monyet.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 53:
      playPauseImg.src = "img/Panda.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 54:
      playPauseImg.src = "img/Rusa.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 55:
      playPauseImg.src = "img/Sapi.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 56:
      playPauseImg.src = "img/Serigala.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 57:
      playPauseImg.src = "img/Tupai.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 58:
      playPauseImg.src = "img/Unta.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 59:
      playPauseImg.src = "img/Zebra.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 60:
      playPauseImg.src = "img/Arsitek.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 61:
      playPauseImg.src = "img/Chef.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 62:
      playPauseImg.src = "img/Dokter.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 63:
      playPauseImg.src = "img/Fotografer.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 64:
      playPauseImg.src = "img/Guru.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 65:
      playPauseImg.src = "img/Hakim.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 66:
      playPauseImg.src = "img/Montir.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 67:
      playPauseImg.src = "img/Nahkoda.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 68:
      playPauseImg.src = "img/Pelukis.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 69:
      playPauseImg.src = "img/Pemadam.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 70:
      playPauseImg.src = "img/Penari.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 71:
      playPauseImg.src = "img/Penyanyi.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 72:
      playPauseImg.src = "img/Petani.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 73:
      playPauseImg.src = "img/Pilot.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 74:
      playPauseImg.src = "img/Polisi.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 75:
      playPauseImg.src = "img/Presiden.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 76:
      playPauseImg.src = "img/Tentara.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 77:
      playPauseImg.src = "img/Basket.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 78:
      playPauseImg.src = "img/Bersepeda.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 79:
      playPauseImg.src = "img/Bola.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 80:
      playPauseImg.src = "img/MencuciBaju.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 81:
      playPauseImg.src = "img/Menulis.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 82:
      playPauseImg.src = "img/Menyapu.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 83:
      playPauseImg.src = "img/Musik.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 84:
      playPauseImg.src = "img/Olahraga.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 85:
      playPauseImg.src = "img/Memasak.jpg"; // Mengganti gambar menjadi tombol play
      break;
    case 86:
      playPauseImg.src = "img/Memancing.jpg"; // Mengganti gambar menjadi tombol play
      break;

    // Tambahkan case untuk audio lainnya di sini sesuai kebutuhan
    default:
      playPauseImg.src = "img/default-play.jpg"; // Gambar default jika tidak sesuai
      break;
  }
}

// Tambahan event listener untuk mengubah gambar tombol saat audio berhenti atau selesai
// audioElements.forEach(function (audio, index) {
//   audio.addEventListener("ended", function () {
//     var playPauseImg = playPauseImgs[index];
//     // Tidak ada perubahan gambar saat audio selesai
//     isPlaying = false;
//     clickCounts[index] = 0;
//     isEnded = true; // Tandai bahwa audio telah selesai
//     playPauseImg.style.filter = "none"; // Hapus efek cahaya merah saat audio selesai
//   });
// });

// Tangani pengiriman formulir edit gambar
document.querySelectorAll(".edit-form").forEach((form) => {
  form.addEventListener("submit", function (event) {
    event.preventDefault(); // Menghentikan pengiriman formulir bawaan

    // Dapatkan data formulir
    const formData = new FormData(form);
    console.log(formData);
    // Kirim data ke proses_edit.php menggunakan Fetch API
    fetch("proses_edit.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.text())
      .then((data) => {
        // Jika gambar berhasil diubah, perbarui sumber gambar di tombol
        const imgElement = this.previousElementSibling.querySelector("img");
        imgElement.src = "uploads/img/" + data; // Mengatur sumber gambar baru
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  });
});

// Fungsi playAudio dan pauseAudio diperbarui sesuai kebutuhan Anda
// Anda dapat mengubah switch case sesuai dengan kebutuhan

function togglePlayPause(elAudioId, elImageId) {
  var audio = document.querySelector(elAudioId);
  var playPauseImg = document.querySelector(elImageId);
  playPauseImg.style.filter = "brightness(0.8)"; // Efek cahaya merah saat tombol di-play
  audio.play();
  console.log("audio play");
  audio.addEventListener("ended", function () {
    playPauseImg.style.filter = "none";
    console.log("selesai audio");
  });
}
document.querySelectorAll(".edit-form").forEach((form) => {
  form.addEventListener("submit", function (event) {
    event.preventDefault(); // Menghentikan pengiriman formulir bawaan

    // Dapatkan data formulir
    const formData = new FormData(form);
    console.log(formData);
    // Kirim data ke proses_edit.php menggunakan Fetch API
    fetch("proses_edit.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.text())
      .then((data) => {
        // Jika gambar berhasil diubah, perbarui sumber gambar di tombol
        const imgElement = this.previousElementSibling.querySelector("img");
        imgElement.src = "uploads/img/" + data; // Mengatur sumber gambar baru
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  });
});
function uploadImage(el, id_media) {
  var file = el.files[0];
  var formData = new FormData();
  formData.append("image", file);
  formData.append("id_media", id_media);
  fetch("proses_edit.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.text())
    .then((data) => {
      console.log(data);
      // Jika gambar berhasil diubah, perbarui sumber gambar di tombol
        const imgElement = document.querySelector("#imageButton" + id_media);
        imgElement.src = data; // Mengatur sumber gambar baru
    })
    .catch((error) => {
      console.error("Error:", error);
    });
}
document.querySelectorAll(".edit-audio").forEach((form) => {
  form.addEventListener("submit", function (event) {
    event.preventDefault(); // Menghentikan pengiriman formulir bawaan

    // Dapatkan data formulir
    const formData = new FormData(form);

    // Kirim data ke proses_edit_2.php menggunakan Fetch API
    fetch("proses_edit_2.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.text())
      .then((data) => {
        // Jika audio berhasil diubah, perbarui sumber audio di tag audio
        const audioElement = form.previousElementSibling.querySelector("audio");
        audioElement.src = "uploads/audio/" + data; // Mengatur sumber audio baru
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  });
});

function uploadAudio(el, id_media) {
  var file = el.files[0];
  var formData = new FormData();
  formData.append("audio", file);
  formData.append("id_media", id_media);
  fetch("proses_edit_2.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.text())
    .then((data) => {
      // Jika audio berhasil diubah, perbarui sumber audio di tag audio
      const audioElement = document.querySelector("#audio" + id_media);
      audioElement.src = "uploads/audio/" + data; // Mengatur sumber audio baru
    })
    .catch((error) => {
      console.error("Error:", error);
    });
}

