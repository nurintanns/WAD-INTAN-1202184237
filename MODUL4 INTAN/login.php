<?php 
if (isset($_COOKIE['login'])) {
    if ($_COOKIE['login'] == 'true') {
        include 'koneksi.php';
        $_SESSION['status'] = "login";
        $_SESSION['id'] = $_COOKIE['id'];
        header("location:index.php?berhasil=3");
    }
}
if (isset($_POST['login'])) {
    session_start();
    include 'koneksi.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
    $data = mysqli_query($koneksi,"select * from user where email='$email' and password='$password'");
    $d = mysqli_fetch_array($data);
    
    $cek = mysqli_num_rows($data);
    if($cek > 0){
        $_SESSION['status'] = "login";
        $_SESSION['name'] = $d['name'];
        $_SESSION['id'] = $d['id'];
        if (isset($_POST['remember'])) {
            setcookie('id',$d['id'],time()+3600);
            setcookie('login','true',time()+3600);
        }
        header("location:index.php?berhasil=2");
    } else{
        header("location:login.php?berhasil=0");
    }    
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Login</title>
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
    $berhasil =4;
    }
if ($berhasil == 0) {
?>
  <div class="alert alert-danger" role="alert"> Gagal Login!</div>
<?php
    } else if ($berhasil == 1) { ?>
    <div class="alert alert-warning" role="alert"> Berhasil Logout!</div>
<?php
    } else if ($berhasil == 2) { ?>
    <div class="alert alert-danger" role="alert"> Belum Login!</div>
<?php
    }
?>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <h2 class="text-center">
                    Login
                    <hr/></h2>
                <div class="card-body">
                    <form method="post">
                        <div class="form-group">
                            <label>E-mail</label>
                            <input name="email"type="email" class="form-control" placeholder="Masukkan Alamat Email">
                        </div>
                        
                        <div class="form-group">
                            <label>Kata Sandi</label>
                            <input class="form-control" name="password" type="password" placeholder="Masukkan Password">
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" name="remember" value="remember"type="checkbox" value="">
                        <label class="form-check-label">Remember Me</label>
                        </div>
                        <div class="form-group text-center">
                            <button name="login" value="true" type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
                <div class="border-top card-body text-center">Belum punya akun? <a href="register.php">Registrasi</a></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>