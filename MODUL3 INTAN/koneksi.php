<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "wad_modul3_intan";

$koneksi =  mysqli_connect($host, $user, $pass, $database,);

if(!$koneksi){
    echo "<script> 
            alert ('Tidak terkoneksi dengan database'); 
          </script>;";
}
?>