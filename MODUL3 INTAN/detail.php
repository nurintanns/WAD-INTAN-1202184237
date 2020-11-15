<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Detail Event</title>
  </head>

  <body style="font-family: Times new roman;">
  <nav  class="navbar navbar-dark" style="background-color: #0077B6;">
          <a class="navbar-brand">EAD EVENTS</a>
          <form action="buat_event.php" class="form-inline">
              <a class="navbar-text-right text-white" href="home.php"style=" margin-right: 15px;">Home</a>             
              <button class="btn btn-outline-light my-2 my-sm-0" type="submit" href="buat_event.php" style=" margin-right: 15px;">Buat Event</button>
          </form>
</nav>
     <h4 class ="mt-3 text-center" style="color: #0077B6; ">Detail Event!</h4>
     <?php 
		include 'koneksi.php';
    $no = 1;
    $id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from event_table where id='$id'");
	$detail = mysqli_fetch_array($data)
		?>
     <div class="card mt-3" style="width: 30rem; margin-left: 500px; margin-bottom: 100px;">
     <img  src="gambar/<?php echo $detail['gambar']; ?>" class="card-img-top">
     <div class="card-body">
         <h5 class="card-title"><?php echo $detail['name']; ?></h5>
         <p class="card-text"><b>Deskripsi</b></p>
         <p class="card-text"><?php echo $detail['deskripsi']; ?></p>
         <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for=""><b>Informasi Event</b></label>
                                    <p class="card-text"><img src="date.svg" width="25px" height="25px" />  <?php echo $detail['tanggal']; ?></p>
                                    <p class="card-text"><img src="place.svg" width="25px" height="25px" />  <?php echo $detail['tempat']; ?></p>
                                    <p class="card-text"><img src="time.svg" width="25px" height="25px" />  <?php echo $detail['mulai']; ?>-<?php echo $detail['berakhir']; ?></p>
                                    <p class="card-text font-weight-bold">Kategori: <?php echo $detail['kategori']; ?></p>
                                    <p class="card-text font-weight-bold">HTM Rp. <?php echo $detail['harga']; ?></p>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for=""><b>Benefit</b></label>
                                    <ul>
                                    <li><?php echo $detail['benefit']; ?></li>
                                    </ul>
                                </div>
                            </div>
         <div class="text text-center">
         <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">Edit</button>
         <a name="hapus" id="hapus" class="btn btn-danger btn-sm" href="hapus.php?id=<?php echo $detail['id']; ?>">Delete</a>
         
         
         </div>
     </div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Content Event </h5>
        <button type="button" class="close" data-dismiss="modal" >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
     <div class="col-md-6">
     <div class="card" style="margin-left: 30px; margin-bottom:30px;">
        <div class="card-header bg-danger"></div>
            <div class="card-body">
            <form action="update.php" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="nama" value="<?php echo $detail['name']; ?>">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi"class="form-control" id="deskripsi" rows="5"><?php echo $detail['deskripsi']; ?></textarea>
                </div>

                <label for="gambar">Upload Gambar</label><br>
                <div class="custom-file">
                    <input type="file" value="<?php echo $detail['gambar']; ?>"name="gambar" id="customFile">
                    <label class="custom-file-label text-muted" for="customFile">Pilih gambar</label>
                </div><p><br>

                <div class="form-group">
                    <label for="kategori">Kategori</label><br>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="kategori"  value="Online">
                                  <label class="form-check-label ">Online</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="kategori"  value="Offline">
                                  <label class="form-check-label " >Offline</label>
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
                    <label for="checkin">Tanggal</label>
                     <input class="form-control" id="tanggal"value="<?php echo $detail['tanggal']; ?>" name="tanggal" type="date">
                </div>
                <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">Jam Mulai</label>
                                    <select class="form-control" name="mulai" >
                                        <option  name="mulai" value="<?php echo $detail['mulai']; ?>"selected>19:00</option>
                                        <option name = "mulai " value="<?php echo $detail['mulai']; ?>">14:00</option>
                                        <option name = "mulai" value="<?php echo $detail['mulai']; ?>">09:00</option>
                                      </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Jam Berakhir</label>
                                   <select class="form-control" name = "berakhir">
                                        <option name = "berakhir" value="<?php echo $detail['mulai']; ?>"selected>20:00</option>
                                        <option name = "berakhir" value="<?php echo $detail['mulai']; ?>">15:00</option>
                                        <option name = "berakhir" value="<?php echo $detail['mulai']; ?>">10:00</option>
                                      </select>
                                </div>
                            </div>
                <div class="form-group">
                    <label for="tempat">Tempat</label>
                    <input type="text" name="tempat" class="form-control" value="<?php echo $detail['tempat']; ?>" id="tempat" >
                </div>

                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" name="harga"class="form-control" value="<?php echo $detail['harga']; ?>"id="harga">
                </div>

                <label for="checkboxButton">Benefit</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="benefit[]"type="checkbox" value="Snack">
                    <label class="form-check-label">Snack</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="benefit[]" type="checkbox" value="Sertifikat">
                    <label class="form-check-label">Sertifikat</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="benefit[]" type="checkbox" value="Souvenir">
                    <label class="form-check-label">Souvenir</label>
                </div><p>

                <div class="text text-right">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary btn-sm" name="id" value="<?php echo $detail['id']; ?>"type="submit">Save Changes</button>
                </div>
            </form>    
            </div>
        </div>
     </div>
     </div>
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