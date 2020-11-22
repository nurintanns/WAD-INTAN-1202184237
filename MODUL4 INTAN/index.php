<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c81bb2fd05.js" crossorigin="anonymous"></script>

    <title>Home</title>
  </head>
  <body>
  <?php 
    include 'koneksi.php';
    session_start();
    if($_SESSION['status']!="login"){
    header("location:login.php?berhasil=2");   }
    $id = $_SESSION['id'];   
    $data = mysqli_query($koneksi,"select * from user where id='$id'");
    $d = mysqli_fetch_array($data);
    if (isset($_COOKIE['navbar'])) {
    $navbar=$_COOKIE['navbar'];
            if ($_COOKIE['navbar']== "dark") {
                $tema="white";
                $button="dark";
            } else if($_COOKIE['navbar']== "light") {
                $tema="black";
                $button="primary";
            } else {
                $tema="black";
                $button= $_COOKIE['navbar']; 
            }
    } else{
    $navbar="light";
    $tema ="black";    
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
if ($berhasil == 1) {
?>
  <div class="alert alert-warning" role="alert"> Berhasil Ditambahkan</div>
<?php
    } else if ($berhasil==2){
?>
  <div class="alert alert-warning" role="alert"> Berhasil login!</div>
<?php 
    } else if ($berhasil == 3) {
?>
    <div class="alert alert-warning" role="alert"> Anda Masih Login </div>
<?php
    }
?>
            <div class="row justify-content-center mt-1">
            <div class="col-sm-8 py-4">
                <div class="panel panel-default" style="background: rgb(69,220,227);background: linear-gradient(90deg, rgba(69,220,227,1) 0%, rgba(135,226,191,1) 50%, rgba(254,236,134,1) 100%);">
                    <div class="panel-heading py-4" style="text-align:center;">
                        <h3>WAD Beauty</h3>
                        <p>Tersedia Skin Care dengan harga murah tapi bukan murahan dan berkualitas</p>
                    </div>
                    <div class="panel-body">
                        <form action="simpancart.php" method="post">
                            <input type="hidden" value="YUJA NIACIN 30 DAYS BLEMISH CARE SERUM" name="nama" id="">
                            <input type="hidden" value="169.000" name="harga" id="">
                            <div class="card-group">
                                <div class="card">
                                    <img src="1.jpeg" class="img-fluid "style="width: 500px;">  
                                    <div class="card-body">
                                        <h5 class="card-title" >YUJA NIACIN 30 DAYS BLEMISH CARE SERUM</h5>
                                        <p class="card-text" style="font-size: 12px;">Produk terbaru dari somebymi yang memiliki manfaat untuk Whitening + blemish care +
                                        Anti-wrinkle, sangat recomended untuk masalah kulit kusam, kulit kering dan bekas jerawat atau FLEK hitam.
                                        </p>
                                        <hr/>
                                        <p class="card-text" style="font-size: 12px;" name="harga"><b>Rp169.000</b></p>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm btn-block" name="submit" value="1">Tambah ke keranjang</button>
                                    </div>
                                    </form>
                                </div>
                            

                                <div class="card">
                                <form action="simpancart.php" method="post">
                                    <input type="hidden" value="SOMEBYMI Snail Truecica Miracle Repair Cream" name="nama" id="">
                                    <input type="hidden" value="180.000" name="harga" id="">
                                    <img src="2.jpeg" class="img-fluid "style="width: 500px;">  
                                    <div class="card-body">
                                    <h5 class="card-title" >SOMEBYMI Snail Truecica Miracle Repair Cream</h5>
                                    <p class="card-text" style="font-size: 12px;">Sebagai pelembab, krim ini mampu memberikan kelembapan yang menyeluruh dan tahan lama bagi kulit,
                                        sehingga terasa halus, lembap dan kenyal. Mencerahkan, menghambat penuaan seperti keriput dan garis halus, juga menenangkan
                                        kulit yang iritasi, dengan kandungan 420,000ppm Snail Truecica.
                                    </p>
                                    <hr/>
                                    <p class="card-text" style="font-size: 12px;" name="harga"><b>Rp.180.000</b></p>
                                    </div>
                                    <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm btn-block" name="submit" value="2">Tambah ke keranjang</button>
                                    </div>
                                    </form>
                                </div>

                                <div class="card">
                                <form action="simpancart.php" method="post">
                                    <input type="hidden" value="30 DAYS MIRACLE TONER" name="nama" id="">
                                    <input type="hidden" value="108.000" name="harga" id="">
                                    <img src="3.jpeg" class="img-fluid "style="width: 500px;">
                                    <div class="card-body">
                                    <h5 class="card-title">30 DAYS MIRACLE TONER</h5>
                                    <p class="card-text" style="font-size: 12px;">Dengan kandungan AHA, BHA dan PHA bekerja secara efektif untuk membuat kulit
                                        lebih bersih dan lebih bersinar, mengandung 10.000 ppm ekstrak meningkatkan elastisitas dan menutrisi kulit Anda tanpa efek
                                        iritasi karena tidak mengandung 20 bahan 500 dan pewarna berbahaya.
                                    </p>
                                    <hr/>
                                    <p class="card-text" style="font-size: 12px;" name="harga"><b>Rp.108.000</b></p>
                                    </div>
                                    <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm btn-block" name="submit" value="3">Tambah ke keranjang</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

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