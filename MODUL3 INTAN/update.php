<?php
include 'koneksi.php';

    $id = $_POST ['id'];
    $name = $_POST ['name'];
    $deskripsi = $_POST ['deskripsi'];
    $gambar = $_POST ['gambar'];
    $kategori = $_POST ['kategori'];
    $tanggal = $_POST ['tanggal'];
    $mulai = $_POST ['mulai'];
    $berakhir = $_POST ['berakhir'];
    $tempat = $_POST ['tempat'];
    $harga = $_POST ['harga'];
    $benefit = implode(",", $_POST['benefit']);

mysqli_query($koneksi,"update event_table set name='$name' where id='$id'");
mysqli_query($koneksi,"update event_table set deskripsi='$deskripsi' where id='$id'");
mysqli_query($koneksi,"update event_table set gambar='$gambar' where id='$id'");
mysqli_query($koneksi,"update event_table set kategori='$kategori' where id='$id'");
mysqli_query($koneksi,"update event_table set tanggal='$tanggal' where id='$id'");
mysqli_query($koneksi,"update event_table set mulai='$mulai' where id='$id'");
mysqli_query($koneksi,"update event_table set berakhir='$berakhir' where id='$id'");
mysqli_query($koneksi,"update event_table set tempat='$tempat' where id='$id'");
mysqli_query($koneksi,"update event_table set harga='$harga' where id='$id'");
mysqli_query($koneksi,"update event_table set benefit='$benefit' where id='$id'");
 
if ($query > 0) {
    echo "<script>alert('Gagal Disimpan');window.location.href='detail.php?id=$id;';</script>";
}else{
    echo "<script>alert('Data telah disimpan'); window.location.href='detail.php?id=$id';</script>";
}

?>