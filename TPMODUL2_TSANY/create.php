<?php
require 'connect.php';

// ==================1==================
// If statement untuk mengecek POST request dari form
// Lalu definisikan variabel-variabel untuk menyimpan data yang dikirim dari POST
if (isset($_POST['create'])) {
    $bukuName = $_POST["judul"];
    $penulisName = $_POST["penulis"];
    $tahunterbitName = $_POST["tahun_terbit"];

    
    
    // ==================2==================
    // Definisikan $query untuk melakukan koneksi ke database
    $query = "INSERT INTO katalog_buku (judul, penulis, tahun_terbit)
    VALUES ('$bukuName', '$penulisName', '$tahunterbitName')";
    mysqli_query($conn, $query);

    // ==================3==================
    // Eksekusi query

    if (mysqli_affected_rows($conn) > 0) {
        header("location: katalog_buku.php");
    } else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
}
?>