<?php
include 'koneksi.php';
    $password = $_POST['password'];
    $konfirmasi = $_POST['konfirmasi'];
    if ($password != $konfirmasi) {  
        header("location:register.php?berhasil=0");
    } else {
        include 'koneksi.php';
        $nama = $_POST ['nama'];
        $email = $_POST ['email'];
        $nohp = $_POST ['nohp'];
        $password = $_POST ['password'];

        $query = mysqli_query($koneksi, "INSERT INTO user VALUES('','$nama','$email','$nohp','$password', 'light')");

        if ($query > 0) {
            header("location:register.php?berhasil=1");
            echo "<script>alert('Data telah disimpan'); window.location.href='login.php'</script>";
        } else {
            echo "<script>alert('Gagal Disimpan');</script>";
        }
    }
?>
