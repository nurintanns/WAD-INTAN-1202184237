<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>My Booking</title>
  </head>
  <body>
      <?php
      error_reporting(error_reporting() & ~E_NOTICE) ; 
      $nama = $_POST ['nama'];
      $checkin = date('d/m/yy');
      $checkin = $_POST ['checkin'];
      $durasi = $_POST ['durasi'];
      $checkout = date('d/m/Y', strtotime('+'.$durasi.'days', strtotime($checkin)));
      $roomtype = $_POST ['roomtype'];
      $phonenumber = $_POST ['phonenumber'];
      $roomservice = $_POST ['roomservice'];
      $breakfast =$_POST ['breakfast'];
      $pricestandard = 90; 
      $pricesuperior = 150 ;
      $priceluxury = 200 ;

      ?>
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
                    <a class="nav-link" href="Booking.php">Booking</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class = "container">
    <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-11 py-4">
    <fieldset>
        <table class="table">
            <tr class = "font-weight-bold">
                <td >Booking Number</td>
                <td>Name</td> 
                <td>Check-in</td>
                <td>Check-out</td>
                <td>Room Type</td>
                <td>Phone Number</td>
                <td>Service</td>
                <td>Total Price</td>
            </tr>
            <tr>
                <td class = "font-weight-bold"><?= rand() ?> </td>
                <td><?= $nama ?> </td>
                <td><?= $checkin ?> </td>
                <td><?= $checkout ?> </td>
                <td><?php
                        if ($roomtype ==1) {
                            echo " Standard";
                        }
                        else if($roomtype ==2 ) {
                            echo "Superior";
                        }
                        else if($roomtype ==3 ) {
                            echo "Luxury";
                        }
                        ?> </td>
                <td><?= $phonenumber ?> </td>
                <td><?php if ($breakfast == 1) {
                                    echo "<ul><li>Breakfast</li></ul>" ;
                                    $pricestandard += 20 ;
                                    $pricesuperior += 20 ;
                                    $priceluxury += 20 ;
                                }
                                if ($roomservice == 1) {
                                    echo "<ul><li>Room service</li></ul>" ;
                                    $pricestandard += 20 ;
                                    $pricesuperior += 20 ;
                                    $priceluxury += 20 ;
                                }
                                if ($roomservice != 1 && $breakfast != 1 ) {
                                    echo "No service" ;
                                }  
                                ?> </td>
                <td><?php if ($roomtype == 1) {
                                    $totalprice = ($durasi*$pricestandard);
                                    echo "$totalprice";
                                }
                                if ($roomtype == 2) {
                                    $totalprice = ($durasi*$pricesuperior);
                                    echo "$totalprice";
                                }
                                if ($roomtype == 3) {
                                    $totalprice = ($durasi*$priceluxury);
                                    echo "$totalprice";
                                }
                                 ?></td>
                
    </fieldset>
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