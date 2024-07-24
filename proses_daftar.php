<?php
include 'koneksi.php';

if (isset($_POST['submit'])) { // Periksa apakah tombol submit telah diklik
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash password sebelum disimpan ke database
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert data ke tabel 'user'
    $queryUser = "INSERT INTO user (username, password) VALUES ('$username', '$hashedPassword')";

    // Eksekusi query untuk tabel 'user'
    $resultUser = mysqli_query($koneksi, $queryUser);

    // Periksa apakah query 'user' berhasil dieksekusi
    if (!$resultUser) {
        die("Error in inserting user data: " . mysqli_error($koneksi));
    }

    // Tampilkan pesan sukses dan redirect
    echo '<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>';
    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
    echo '<script>
            $(document).ready(function() {
                Swal.fire({
                    icon: "success",
                    title: "Registrasi Berhasil!",
                    showConfirmButton: false,
                    timer: 3000
                }).then(function() {
                    window.location.href = "homepage_admin.php";
                });
            });
          </script>';
}
?>
