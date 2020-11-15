<?php
include 'koneksi.php';
if (isset($_POST['name'])) {
    $name = $_POST ['name'];
    $deskripsi = $_POST ['deskripsi'];
    $gambar = $_POST ['gambar'];
    $kategori = $_POST ['kategori'];
    $tanggal = $_POST ['tanggal'];
    $mulai = $_POST ['mulai'];
    $berakhir = $_POST ['berakhir'];
    $tempat = $_POST ['tempat'];
    $harga = $_POST ['harga'];
    $benefit = implode("," , $_POST['benefit']);

    $query = mysqli_query($koneksi, "INSERT INTO event_table VALUES('','$name','$deskripsi','$gambar','$kategori','$tanggal','$mulai','$berakhir','$tempat','$harga','$benefit')");

    if ($query > 0) {
        echo "<script>alert('Data telah disimpan'); window.location.href='home.php';</script>";
    }else{
        echo "<script>alert('Gagal Disimpan');window.location.href='simpan.php';</script>";
    }
    }
?>