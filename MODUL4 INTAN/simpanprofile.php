<?php
include 'koneksi.php';
session_start();
    if ($_POST['password'] == NULL){
        header("location:profile.php?berhasil=2");    
    } else {
            $id = $_SESSION['id'];   
            $pw=$_POST['password'];
            $confirm=$_POST['konfirmasi'];
            if ($pw != $confirm) {  
                header("location:profile.php?berhasil=0");
            }else {
                include 'koneksi.php';
                $nama = $_POST ['nama'];
                $email = $_POST ['email'];
                $nohp = $_POST ['nohp'];
                $password = $_POST ['password'];
                $tema = $_POST ['navbar'];

                $query = mysqli_query($koneksi,"update user set nama='$nama',email='$email', no_hp='$nohp', password='$password',tema='$tema'  where id='$id'");
                if ($query > 0) {
                    header("location:profile.php?berhasil=1");
                }else{
                    echo "<script>alert('Gagal Disimpan');</script>";
                }
            }  
    }
    
?>