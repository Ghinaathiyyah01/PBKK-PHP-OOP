<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Mengimpor stylesheet Bootstrap dari CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <!-- Membuat judul halaman -->
    <h1 align="center" style="padding:10px;">DAFTAR HARGA LAPTOP</h1>
    
    <!-- Membuka tabel dengan menggunakan Bootstrap -->
    <table class="table table-striped">
        <tr style="font-weight:bold;">
            <!-- Header kolom-kolom tabel -->
            <td>NO</td>
            <td>NAMA</td>
            <td>MERK</td>
            <td>HARGA</td>
        </tr>
        <?php 
            // Mengimpor file 'barang.php' yang berisi definisi kelas 'barang'
            include 'barang.php';

            // Inisialisasi nomor urut
            $no = 1;

            // Membuat objek dari kelas 'barang'
            $data = new barang();

            // Loop untuk mengambil data dari metode 'getData' dalam objek 'barang'
            foreach($data->getData() as $dt){
        ?>
        <!-- Baris data dalam tabel -->
        <tr>
            <!-- Nomor urut -->
            <td><?php echo $no++; ?></td>

            <!-- Nama laptop -->
            <td><?php echo $dt['nama']; ?></td>

            <!-- Merk laptop -->
            <td><?php echo $dt['merk']; ?></td>

            <!-- Harga laptop -->
            <td><?php echo $dt['harga']; ?></td>
        </tr>
        <?php
            }
        ?>
    </table>
    <!-- Penutup elemen 'body' -->
</body>
</html>
