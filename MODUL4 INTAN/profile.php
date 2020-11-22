<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c81bb2fd05.js" crossorigin="anonymous"></script>
    
    <title>Profile</title>
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
<?php 
    if (isset($_GET['berhasil'])){
    $berhasil = $_GET['berhasil'];
    } else {
    $berhasil =4;
    }
    if ($berhasil == 0) {
?>
    <div class="alert alert-danger" role="alert"> Password Tidak Sama! </div>
<?php
    } else if ($berhasil == 1) {
?>
  <div class="alert alert-warning" role="alert"> Berhasil di Update! </div>
<?php
    } else if ($berhasil == 2) {
?>
  <div class="alert alert-danger" role="alert"> Password Tidak Boleh Kosong! </div>
<?php
    }
?>
    
    <h3 class="text-center"> Profile</h3>
        <form action="simpanprofile.php" method="post">
<div class="container">
    <div class="row form-group">
            <label style="width:100px;">Email </label>
        <div class="col">
            <input class="form-control-plaintext" readonly type="text" value="<?php echo $d['email']  ?>" name='email' id="">
        </div>
    </div>
    <div class="row form-group">
            <label style="width:100px;" >Nama </label>
        <div class="col">
            <input class="form-control"type="text" value="<?php echo $d['nama']  ?>" name="nama" id="">
        </div>
    </div>
    <div class="row form-group">
            <label style="width:100px;" >No. Handphone </label>
        <div class="col">
            <input class="form-control"type="text" value="<?php echo $d['no_hp']  ?>"name="nohp" id="">
        </div>
    </div>
    <hr/>
    <div class="row form-group">
            <label style="width:100px;" >Password </label>
        <div class="col">
            <input class="form-control" type="password" name="password" id="">
        </div>
    </div>
    <div class="row form-group">
            <label style="width:100px;" >Password Confirm</label>
        <div class="col">
            <input class="form-control"type="password" name="konfirmasi" id="">
        </div>
    </div>
    <div class="row form-group">
            <label style="width:100px;" >Warna Navbar </label>
    <div class="col">
        <select name="navbar" id="" >
            <option value="light">Light</option>
            <option value="dark">Dark</option>
        </select>
    </div>
    </div>
    <button class="form-control form-group btn-primary btn btn-sm "type="submit">Submit</button>
    <a class="form-control btn-light btn btn-sm " href="index.php">Cancel</a>
</div>

</form>

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