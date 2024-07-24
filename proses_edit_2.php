<?php
// Pastikan form telah dikirim dengan file audio yang dipilih
if (isset($_FILES['audio']) && isset($_POST['id_media'])) {
    // Ambil informasi file audio yang diunggah
    $file = $_FILES['audio'];

    $fileName = $_FILES['audio']['name'];
    $fileTmpName = $_FILES['audio']['tmp_name'];
    $fileSize = $_FILES['audio']['size'];
    $fileError = $_FILES['audio']['error'];
    $fileType = $_FILES['audio']['type'];

    // Ambil ekstensi file audio
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    // Tentukan ekstensi yang diizinkan
    $allowed = array('mp3', 'wav');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) { // ukuran maksimum file audio (dalam bytes)
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = 'uploads/audio/' . $fileNameNew;

                // Pindahkan file audio ke direktori tujuan
                if (move_uploaded_file($fileTmpName, $fileDestination)) {
                    // Sertakan file koneksi.php untuk menghubungkan ke database
                    require 'koneksi.php';

                    // Fungsi untuk melakukan update informasi audio ke database
                    function updateAudioInfo($fileNameNew, $id, $koneksi)
                    {
                        $sql = "UPDATE medias SET audio = ? WHERE id_media = ?";
                        $stmt = $koneksi->prepare($sql);
                        $stmt->bind_param('si', $fileNameNew, $id);
                        $stmt->execute();
                        $stmt->close();
                    }

                    // Mendapatkan id audio yang dikirim dari form
                    $id_media = $_POST['id_media'];

                    // Panggil fungsi untuk melakukan update informasi audio ke database
                    updateAudioInfo($fileDestination, $id_media, $koneksi);

                    // Kirim nama file audio baru kembali ke halaman HTML
                    echo $fileNameNew;
                } else {
                    echo "Gagal memindahkan file!";
                }
            } else {
                echo "File terlalu besar!";
            }
        } else {
            echo "Error mengunggah file!";
        }
    } else {
        echo "Jenis file ini tidak diizinkan!";
    }
} else {
    echo "Tidak ada file yang dipilih!";
}
