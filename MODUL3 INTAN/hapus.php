<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"delete from event_table where id='$id'");
header("location:home.php");
?>