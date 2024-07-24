<?php
session_start(); // Mulai sesi

require 'koneksi.php';

if (isset($_POST['kirim'])) {
    // Variabel dari formulir
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk mendapatkan data pengguna berdasarkan username
    $query = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($koneksi, $query);

    // Periksa apakah pengguna dengan username yang diberikan ditemukan
    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Periksa apakah kata sandi yang dimasukkan benar
        if (password_verify($password, $user['password'])) {
            // Login berhasil, set sesi atau tampilkan pesan
            $_SESSION['user_id'] = $user['id_user'];
            $_SESSION['username'] = $username;

            $_SESSION['ceklogin'] = true;
            // Tampilkan SweetAlert untuk sukses
            echo '<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>';
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
            echo '<script>
                    $(document).ready(function() {
                        Swal.fire({
                            icon: "success",
                            title: "Login berhasil!",
                            text: "Selamat datang, ' . $username . '", // Menggunakan $email saja
                            showConfirmButton: false,
                            timer: 3000
                        }).then(function() {
                            window.location.href = "homepage_admin.php";
                        });
                    });
                </script>';
            exit(); // Hentikan eksekusi untuk mencegah pengalihan lebih lanjut
        } else {
            $error = "Password yang dimasukkan salah.";
            $redirect = "homepage_user.php";
        }
    } else {
        $error = "Username tidak ditemukan.";
        $redirect = "homepage_user.php";
    }
}

// Tampilkan SweetAlert untuk kesalahan dan pengalihan
echo '<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>';
echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
echo '<script>
        $(document).ready(function() {
            Swal.fire({
                icon: "error",
                title: "Login Gagal!",
                text: "' . $error . '",
                showConfirmButton: false,
                timer: 3000
            }).then(function() {
                window.location.href = "' . $redirect . '"; // Sesuaikan dengan halaman login Anda
            });
        });
      </script>';
exit();
