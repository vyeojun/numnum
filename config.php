<?php
// Mengaktifkan error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Konfigurasi database
$host = 'localhost'; // Sesuaikan jika Anda menggunakan host lain
$username = 'root'; // Username default XAMPP biasanya 'root'
$password = ''; // Password default kosong pada XAMPP
$dbname = 'nwind'; // Pastikan nama database sesuai dengan yang diimpor

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    echo "Koneksi berhasil!"; // Hapus ini setelah testing
}
?>
