<?php
// Memasukkan file 'database.php' yang berisi definisi kelas 'database'
require_once 'database.php';

// Definisi kelas 'barang' yang mengambil koneksi dari kelas 'database'
class Barang extends Database {
    // Properti 'db' untuk menyimpan koneksi database
    public $db;

    // Metode 'getData' untuk mengambil data dari tabel 'tb_laptop'
    function getData() {
        // Melakukan query ke tabel 'tb_laptop' menggunakan koneksi database yang diwarisi dari kelas 'Database'
        $query = mysqli_query($this->db, 'SELECT * FROM tb_laptop');
        $brg = [];

        // Membaca hasil query dan menyimpan data dalam array 'brg'
        while ($row = mysqli_fetch_array($query)) {
            $brg[] = $row;
        }

        // Mengembalikan data yang telah diambil
        return $brg;
    }
}
