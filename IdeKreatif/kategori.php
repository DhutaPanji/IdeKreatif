<?php
// Memasukkan header halaman
include '.includes/header.php';
// Menyertakan file untuk menampilkan notifikasi (jika ada)
include '.includes/toast_notification.php';
?>

<div class="container-xxl flex-grow-1 container-p-y">
<!-- Tabel data kategori -->
<div class="card">
<div class="card-header d-flex justify-content-between align-items-center">
<h4>Data Kategori</h4>
<!-- Tombol untuk menambah kategori baru -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCategory">
Tambah Kategori
</button>
</div>
<div class="card-body">
<div class="table-responsive text-nowrap">
<table id="datatable" class="table table-hover">
<thead>
<tr class="text-center">
<th width="50px">#</th>
<th>Nama</th>
<th width="150px">Pilihan</th>
</tr>
</thead>
<tbody class="table-border-bottom-0">


<!-- Mengambil data kategori dari database -->
<?php
$index = 1;
$query = "SELECT * FROM categories";
$query = "SELECT * FROM category";
$exec = mysqli_query($conn, $query); // Pastikan $conn sudah didefinisikan (koneksi database)

while ($category = mysqli_fetch_assoc($exec)): // Loop untuk setiap kategori
while ($category = mysqli_fetch_assoc($exec)): 
?>
<tr>
<!-- menampilkan nomor kategori, dan opsi -->