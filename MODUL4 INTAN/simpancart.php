<?php
    include 'koneksi.php';
    session_start();
    $id = $_SESSION['id'];   
    
        $nama = $_POST ['nama'];
        $harga = $_POST ['harga'];

        $query = mysqli_query($koneksi, "INSERT INTO cart VALUES('','$id','$nama','$harga')");

        if ($query > 0) {
            header("location:index.php?berhasil=1");    
        }else{
            header("location:index.php?berhasil=0");
        }
    
  
?>