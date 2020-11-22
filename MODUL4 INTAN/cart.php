<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c81bb2fd05.js" crossorigin="anonymous"></script>

    <title>Cart</title>
  </head>
  <body>
  <?php 
  include 'koneksi.php';
   session_start();
   if($_SESSION['status']!="login"){
    header("location:login.php?pesan=belum_login");   }
   $id = $_SESSION['id'];   
   $data = mysqli_query($koneksi,"select * from user where id='$id'");
   $d = mysqli_fetch_array($data);
   if ($d['tema']== "dark") {
       $tema="white";
   } else {
        $tema="black";
   }  
   ?>
<nav class="navbar navbar-<?php echo $d['tema']?> bg-<?php echo $d['tema']?> sticky-top" style="background-color: #F8F9FB">
    <p class="navbar-brand">WAD Beauty</p>
    <div class="form-inline ml-auto">
    <a href="cart.php" style="color:<?= $tema?>;margin-right:10px;"><i class="fa fa-shopping-cart"></i></a>
        <label style="color:<?= $tema?>;">Selamat Datang,
                     <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color:<?= $tema?>;" role="button" data-toggle="dropdown">
                    <?php echo  $d['nama'] ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="profile.php">Profile</a>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                    </div>   
    </div>
</nav>
<br>
<div class="container">
    <div class="row card-header">
        <div class="col font-weight-bold">
            <label> No.</label>
        </div>
        <div class="col font-weight-bold">
            <label> Nama Barang</label>
        </div>
        <div class="col font-weight-bold">
            <label>Harga</label>
        </div>
        <div class="col font-weight-bold">
            <label> Aksi</label>
        </div>
    </div>
    <?php 
        $total=0;
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from cart where user_id='$id'");
		while($d = mysqli_fetch_array($data)){
            $total = $total +$d['harga'];
		if ($no % 2 == 0) {
            $card="#ebeced";
        } else {
            $card="white";
        }
        	?>
    <div class="row card-body" style="background-color:<?= $card  ?>;">
        <div class="col">
            <label> <?php echo  $no++  ?></label>
        </div>
        <div class="col">
            <label> <?php echo  $d['nama_barang'] ?></label>
        </div>
        <div class="col">
            <label>Rp<?php echo  $d['harga'] ?></label>
        </div>
        <div class="col">
        <a name="hapus" id="hapus" class="btn btn-danger btn-sm" href="hapuscart.php?id=<?php echo $d['id']; ?>">HAPUS</a>
        </div>
    </div>
    <?php
        }
    ?>
        <div class="row card-header">
        <div class="col font-weight-bold">
            Total
        </div>
        
        <div class="col font-weight-bold">
            Rp <?php echo $total ?>.000
        </div>
</div>

<!-- footer -->
<footer class="page-footer font-small">

<!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="index.php"> WAD Beauty</a>
    </div>
</footer>
<br>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>