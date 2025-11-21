<?php
// koneksi database
    include("koneksi.php");

    #Mengambil Value dari form tambah
    $jd_buku = $_POST['jd_buku'];
    $pengarang = $_POST['pengarang'];
    $kategori = $_POST['kategori'];
    $th_terbit = $_POST['th_terbit'];

    #Query Insert Data
    $query = "INSERT INTO perpustakaan (jd_buku, pengarang, kategori, th_terbit) VALUES ('$jd_buku', '$pengarang', '$kategori', '$th_terbit')";

    $tambah = mysqli_query($koneksi,$query);

    if($tambah){
        header("location:tampildata.php");
    }else{
        echo "Gagal Menambahkan Data";
    }







?>