<?php
// Memasukkan file konfigurasi 'config.php'
require_once 'config.php';

// Definisi kelas 'database' yang mengambil konfigurasi dari kelas 'config'
class Database extends Config {
    // Properti 'db' untuk menyimpan koneksi database
    public $db;

    // Konstruktor kelas, digunakan untuk membuat koneksi database
    public function __construct() {
        // Menggunakan nilai-nilai konfigurasi dari kelas 'config' untuk membuat koneksi database
        $this->db = mysqli_connect($this->hostname, $this->username, $this->password, $this->database);

        // Jika koneksi gagal, tampilkan pesan kesalahan
        if (!$this->db) {
            die("Koneksi database gagal: " . mysqli_connect_error());
        }
    }
}
