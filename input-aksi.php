<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){
    
    // ambil data dari formulir
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nama_lower = strtolower($nama);
    $nama_lengkap = ucwords($nama_lower, " ");
    // buat query
    $sql = "INSERT INTO daftar_peserta(nim, nama_lengkap, email) VALUE ('$nim', '$nama_lengkap','$email')";
    $query = mysqli_query($db, $sql);
    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        // header('Location: index.php');
        header('Location: index.php?name='.$nama_lengkap);
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php');
    }
} else {
    die("Akses dilarang...");
}

?>