<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $asal_lab = $_POST['select_lab'];
    $sepatah_kata = $_POST['sepatah_kata'];

    // buat query
    $sql = "INSERT INTO buku_tamu(nama, asal_lab,sepatah_kata) VALUE ('$nama', '$asal_lab','$sepatah_kata')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        // header('Location: index.php');
        
        header('Location: index.php?name='.$nama);
        
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php');
    }


} else {
    die("Akses dilarang...");
}

?>