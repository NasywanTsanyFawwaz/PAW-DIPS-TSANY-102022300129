<?php
include 'connect.php';

// Cek Apakah ada data yang dikirim
if (isset($_POST['create'])) {
    $judul = $_POST["judul"];

    $penulis = $_POST["penulis"];

    $tahun_terbit = $_POST["tahun terbit"];

    $query = "INSERT INTO db_buku (judul, penulis, tahun terbit)
    VALUES ('$judul','$penulis','$tahun_terbit')";
    mysqli_query($conn, $query);
    // Definisikan query untuk insert data

    if (mysqli_affected_rows($conn) > 0) {
        header("location: katalog_buku.php");
    } else {
        echo "
        <script>
            alert('Data gagal ditambahkan');
            document.location.href = katalog_buku.php
        </script>
        ";
        exit;
    }
}
?>