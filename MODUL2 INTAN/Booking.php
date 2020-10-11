<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Booking</title>
  </head>
  <body>
  
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"></div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" value ="standard" href="Booking.php" >Booking</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class = "container">
    <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-4 py-5">
        <form action = "mybooking.php" method="post">
        <fieldset class="form-group">
        <div class="form-group row">
            <div class="col-sm-12">
            <label for="nama">Name</label>
            <input type="text" class="form-control" placeholder="" name="nama">
            </div>
            </div>
            <div class="form-group row">
            <div class="col-sm-12">
            <label class="checkin">Check-in</label>
            <input  class="form-control" type="date" placeholder="dd/mm/yyyy" name="checkin">
            </div>
            </div>
            <div class="form-group row">
            <div class="col-sm-12">
            <label class="durasi">Duration</label>
            <input type="text" class="form-control" placeholder="" name="durasi">
            <small id="jumdurasi" class="form-text text-muted"> Day(s)</small>
            </div>
            </div>
            <div class="form-group row">
            <div class="col-sm-12">
            <label for="room">Room Type</label>
            <select class="custom-select" id="validationCustom04" required name ="roomtype">
                    <option value ="1">Standard</option>
                    <option value ="2">Superior</option>
                    <option value ="3">Luxury</option>
                </select>
            </div>
            </div>
            <div class="form-group row">
            <div class="col-sm-12">
            <label for="room">Add services</label>
            <small id="jumdurasi" class="form-text text-muted"> $20/Service</small>
            <div class="form-check">
             <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="roomservice">
            <label class="form-check-label" for="defaultCheck1">Room Service</label>
            <br>
            <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name ="breakfast">
            <label class="form-check-label" for="defaultCheck1">Breakfast</label>
            </div>
            </div>
            </div>
            <div class="form-group row">
            <div class="col-sm-12">
            <label for="notelp">Phone Number</label>
            <input type="text" class="form-control" placeholder="" name="phonenumber">
            </div>
            </div>
            <div class="form-group row">
            <div class="col-sm-12">
            <button type="submit" class="btn btn-primary btn-block">Book<a href="mybooking.php"></button></a>
            </div>
            </div>
        </fieldset>
        </form>
        </div>
        <div class="col-sm-2"></div>
        <div class="col-sm-1 mt-5">
        <?php
      error_reporting(error_reporting() & ~E_NOTICE) ; ?>
        <?php

                if($_GET['roomtype'] == 'standard'){
                    echo '<img src = "standard.jpg" width="400px" ';
                    } else  if ($_GET['roomtype'] == 'superior'){
                    echo '<img src = "superior.jpg" width="400px">';
                    }
                    else  if ($_GET ['roomtype'] == 'luxury') {
                    echo '<img src = "luxury.jpg" width="400px"';
                    }
                ?>
        </div>
    </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>