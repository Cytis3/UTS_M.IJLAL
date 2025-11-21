<?php
    #1. Meng-koneksikan PHP ke MySQL
    include("koneksi.php");

    #2. Mengambil Value dari Form Tambah
    $jd_buku = $_POST['jd_buku'];
    $pengarang = $_POST['pengarang'];
    $kategori = $_POST['kategori'];
    $th_terbit = $_POST['th_terbit'];

    #3. Query Insert (proses tambah data)
    $query = "UPDATE buku SET jd_buku='$jd_buku', pengarang='$pengarang', kategori='$kategori', 
    th_terbit='$th_terbit' WHERE id='$id'";

    $tambah = mysqli_query($koneksi,$query);

    #4. Jika Berhasil triggernya apa? (optional)
    if($tambah){
        header("location:tampildata.php");
    }else{
        echo "Data Gagal ditambah";
    }
?>