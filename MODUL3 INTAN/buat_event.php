<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Buat Event</title>
  </head>

  <body style="font-family: Times new roman;"> 
    <nav  class="navbar navbar-dark" style="background-color: #0077B6;">
          <a class="navbar-brand">EAD EVENTS</a>
          <form action="buat_event.php" class="form-inline">
              <a class="navbar-text-right text-white" href="home.php"style=" margin-right: 15px;">Home</a>             
              <button class="btn btn-outline-light my-2 my-sm-0" type="submit" href="buat_event.php" style=" margin-right: 15px;">Buat Event</button>
          </form>
</nav>
<div class= "container">
<h4 class ="mt-3" style="color: #0077B6;">Buat Event</h4>
     <div class="row">
     <div class="col-md-6">
     <div class="card" style="margin-left: 30px; margin-bottom:30px;">
        <div class="card-header bg-danger"></div>
            <div class="card-body">
            <form action="simpan.php" method="post">
                <div class="form-group">
                    <label for="nama" class ="font-weight-bold">Name</label>
                    <input type="input" name="name" class="form-control" id="nama">
                </div>
                <div class="form-group">
                    <label for="deskripsi" class ="font-weight-bold">Deskripsi</label>
                    <textarea name="deskripsi"class="form-control" id="deskripsi" rows="5"></textarea>
                </div>

                <label for="gambar" class ="font-weight-bold">Upload Gambar</label><br>
                <div class="custom-file">
                    <input type="file" name="gambar"class="custom-file-input" id="customFile">
                    <label class="custom-file-label text-muted" for="customFile">Pilih gambar</label>
                </div><p><br>

                <div class="form-group">
                <label for="kategori" class ="font-weight-bold">Kategori</label>
                                <br>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="kategori"  value="Online">
                                  <label class="form-check-label font-weight-bold">Online</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="kategori"  value="Offline">
                                  <label class="form-check-label font-weight-bold" >Offline</label>
                                </div>
                </div>
            </div>
        </div>
     </div>

     <div class="col-md-6">
     <div class="card" style="margin-right: 30px; margin-bottom:30px;">
        <div class="card-header bg-primary"></div>
            <div class="card-body">
                <div class="form-group">
                    <label for="tanggal" class ="font-weight-bold">Tanggal</label>
                     <input class="form-control" id="tanggal" name="tanggal" type="date">
                </div>
                <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="mulai" class ="font-weight-bold">Jam Mulai</label>
                                    <select class="form-control" name="mulai">
                                        <option  name="mulai" selected>19:00</option>
                                        <option name = "mulai">14:00</option>
                                        <option name = "mulai">09:00</option>
                                      </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="berakhir" class ="font-weight-bold">Jam Berakhir</label>
                                    <select class="form-control" name = "berakhir">
                                        <option name = "berakhir" selected>20:00</option>
                                        <option name = "berakhir">15:00</option>
                                        <option name = "berakhir">10:00</option>
                                      </select>
                                </div>
                            </div>
                <div class="form-group">
                    <label for="tempat" class ="font-weight-bold">Tempat</label>
                    <input type="text" name="tempat" class="form-control" id="tempat">
                </div>

                <div class="form-group">
                    <label for="harga" class ="font-weight-bold">Harga</label>
                    <input type="text" name="harga"class="form-control" id="harga">
                </div>

                <label for="checkboxButton" class ="font-weight-bold">Benefit</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input " name="benefit[]"type="checkbox" value="Snack">
                    <label class="form-check-label font-weight-bold">Snack</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="benefit[]" type="checkbox" value="Sertifikat">
                    <label class="form-check-label font-weight-bold">Sertifikat</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="benefit[]" type="checkbox" value="Souvenir"> 
                    <label class="form-check-label font-weight-bold">Souvenir</label>
                </div><p>

                <div class="text text-right">
                    <button class="btn btn-primary btn-sm" type="submit">Submit</button>
                    <a class="btn btn-danger btn-sm"href="home.php">Cancel</a>
                </div>
            </form>    
            </div>
        </div>
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




















