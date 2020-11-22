<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Register</title>
  </head>
  <body style="background-color: #E8FAFE">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">WAD Beauty</a>
            <div class="form-inline ml-auto">
                    <a class="navbar-text-right mr-3 text-dark" href="login.php" >Login</a>
                    <a class="navbar-text-right text-dark" href="register.php" >Register</a>
            </div>
    </nav>
    <?php 
    if (isset($_GET['berhasil'])){
    $berhasil = $_GET['berhasil'];
        } else {
    $berhasil = 2;
    }
    if ($berhasil == 0) {
    ?>
    <div class="alert alert-danger" role="alert"> Password Tidak Sama </div>
    <?php
    } else if ($berhasil == 1) {
    ?>
    <div class="alert alert-warning" role="alert"> Berhasil registrasi!</div>
    <?php
    } 
    ?>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <h2 class="text-center"> Registrasi
                    <hr/></h2>
                <div class="card-body">
                    <form action="simpanregister.php" method="POST">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="email" name="email" class="form-control" placeholder="Masukkan Alamat E-mail">
                        </div>
                        <div class="form-group">
                            <label>No. Handphone</label>
                            <input type="text" name="nohp" class="form-control" placeholder="Masukkan Nomor Handphone">
                        </div>
                        <div class="form-group">
                            <label>Kata Sandi</label>
                            <input class="form-control" name="password" type="password" placeholder="Buat Kata Sandi">
                        </div>
                        <div class="form-group">
                            <label>Konfirmasi Kata Sandi</label>
                            <input class="form-control" name="konfirmasi" type="password" placeholder="Konfirmasi Kata Sandi"> 
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Daftar</button>
                        </div>
                    </form>
                </div>
                <div class="border-top card-body text-center">Sudah punya akun? <a href="login.php">Login</a></div>
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