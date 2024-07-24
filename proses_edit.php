<?php
// if(isset($_POST['submitEditImage1'])) {
    $file = $_FILES['image'];

    $fileName = $_FILES['image']['name'];
    $fileTmpName = $_FILES['image']['tmp_name'];
    $fileSize = $_FILES['image']['size'];
    $fileError = $_FILES['image']['error'];
    $fileType = $_FILES['image']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'uploads/img/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);

                // Sertakan file koneksi.php untuk menghubungkan ke database
                require 'koneksi.php';

                // Fungsi untuk melakukan update informasi gambar ke database
                function updateImageInfo($fileNameNew, $id, $koneksi) {
                    $sql = "UPDATE medias SET image = ? WHERE id_media = ?";
                    $stmt = $koneksi->prepare($sql);
                    $stmt->bind_param('si', $fileNameNew, $id);
                    $stmt->execute();
                    $stmt->close();
                }

                // Mendapatkan id gambar yang dikirim dari form
                $id_media = $_POST['id_media'];

                // Panggil fungsi untuk melakukan update informasi gambar ke database
                updateImageInfo($fileDestination, $id_media, $koneksi);

                // Kirim nama file gambar baru kembali ke halaman HTML
                echo $fileNameNew;
            } else {
                echo "File terlalu besar!";
            }
        } else {
            echo "Error mengunggah file!";
        }
    } else {
        echo "Jenis file ini tidak diizinkan!";
    }
// }
?>
