<!DOCTYPE html>
<html>
    <head>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title>Booking</title>
        <style>
            img {
                width: 400px;
            }
        </style>

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
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="Booking.php">Booking</a>
                </li>
            </ul>
        </div>
    </nav>
    <?php
    error_reporting(error_reporting() & ~E_NOTICE) ;
    $submit=$_GET['submit'];
    if (empty($submit)) {
      $submit += 1;
    }
    ?>
    <br>
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-sm-6">
                <form action="mybooking.php" method="POST">
                  <div class="form-group">
                    <label >Name</label>
                    <input type="input" class="form-control" name="nama" >
                  <div class="form-group">
                    <label>Check In</label>
                    <input type="date" class="form-control" name="checkin" >
                  </div>
                  <div class="form-group">
                    <label >Duration</label>
                    <input type="input" class="form-control" name="durasi">
                    <small id="durasiHelp" class="form-text text-muted">Days(s)</small>
                  </div>

                  <label class="my-1 mr-2" for="label">Room Type</label>
                  <select class="custom-select my-1 mr-sm-2"  name="roomtype">
                    <option value="1" >Standard</option>
                    <option value="2" >Superior</option>
                    <option value="3" >Luxury</option>
                  </select>
                  <br>
                  <label class="my-1 mr-2" for="label">Add Service(s)</label><br>
                  <small id="jumdurasi" class="form-text text-muted"> $20/Service</small>

                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="roomservice" >
                    <label class="form-check-label" >
                      Room Service
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="breakfast" >
                    <label class="form-check-label" >
                      Breakfast
                    </label>
                  </div>
                  <label for="notelp">Phone Number</label>
                <input type="text" class="form-control" placeholder="" name="phonenumber">
                  <br>
                  <button type="submit" class="btn btn-primary" value="submit" name="submit">Book</button>
                </form>
            </div>
          </div>
            <div class="col-sm-6">
                <?php
                echo "<img src=' $submit.jpg' ";
                ?>
            </div>
    </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>

</html>
