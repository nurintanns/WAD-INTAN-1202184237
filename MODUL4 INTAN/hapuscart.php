<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"delete from cart where id='$id'");
 
// mengalihkan halaman kembali ke home
header("location:cart.php");
 
?>