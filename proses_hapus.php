<?php
// Sertakan file koneksi.php
require 'koneksi.php';

// Pastikan metode yang digunakan adalah POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Ambil nilai id dari formulir
        $id = isset($_POST['id']) ? $_POST['id'] : null;

        // Query hapus untuk tabel images
        $hapusImageQuery = "DELETE FROM images WHERE id_image = :id";
        $stmtImage = $pdo->prepare($hapusImageQuery);
        $stmtImage->bindParam(':id', $id);
        $stmtImage->execute();

        // Query hapus untuk tabel audios
        $hapusAudioQuery = "DELETE FROM audios WHERE id_audio = :id";
        $stmtAudio = $pdo->prepare($hapusAudioQuery);
        $stmtAudio->bindParam(':id', $id);
        $stmtAudio->execute();

        // Berikan notifikasi bahwa hapus berhasil
        echo "Data berhasil dihapus";

    } catch (PDOException $e) {
        // Tangani kesalahan jika terjadi
        echo "Error: " . $e->getMessage();
    }
} else {
    // Jika bukan metode POST, berikan pesan kesalahan
    echo "Metode yang tidak valid";
}
?>
