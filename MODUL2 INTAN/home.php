<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Home</title>
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
                <li class="nav-item active">
                    <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Booking.php">Booking</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="judul">
            <h4>EAD HOTEL</h4>
            <h5>Welcome To 5 Star Hotel</h5>
        </div>
        <div class="mt-5"></div>
        <div class ="row">
        <div class="card-deck">
            <div class="card1">
            <div class="card">  
            <form action="Booking.php" method="get">
              <img src = "standard.jpg" class="card-img1" alt="...">
              <div class="card-body">
                <h5 class="card-title">Standard</h5>
                <h6 class="card-title" style = "color: dodgerblue;">$ 90/Day</h6>
                <br>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-light">Facilities</li>
                    <li class="list-group-item">1 Single Bed</li>
                    <li class="list-group-item">1 Bathroom</li>
                  </ul>
              </div>
              <div class="card-footer">
              <input type="hidden" name="roomtype" value="standard">
              <button type="submit" class="btn btn-primary">Book Now</button>
              </form>
              </div>
            </div>
        </div>
        <div class="card2">
            <div class="card"> 
            <form action="Booking.php" method="get"> 
              <img src="superior.jpg" class="card-img1" alt="...">
              <div class="card-body">
                <h5 class="card-title">Superior</h5>
                <h6 class="card-title" style = "color: dodgerblue;">$ 150/Day</h6>
                <br>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-light">Facilities</li>
                    <li class="list-group-item">1 Double Bed</li>
                    <li class="list-group-item">1 Television and Wi-Fi</li>
                    <li class="list-group-item">1 Bathroom with hot water</li>
                  </ul>
              </div>
              <div class="card-footer">
              <input type="hidden" name="roomtype" value="superior">
              <button type="submit" class="btn btn-primary">Book Now</button>
             </form>
              </div>
            </div>
        </div>
        <div class="card3">
            <div class="card">  
            <form action="Booking.php" method="get">
              <img src="luxury.jpg" class="card-img1" alt="...">
              <div class="card-body">
                <h5 class="card-title">Luxury</h5>
                <h6 class="card-title" style = "color: dodgerblue;">$ 200/Day</h6>
                <br>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-light">Facilities</li>
                    <li class="list-group-item">2 Double Bed</li>
                    <li class="list-group-item">2 Bathroom with hot water</li>
                    <li class="list-group-item">1 Kitchen</li>
                    <li class="list-group-item">1 Television and Wi-Fi</li>
                    <li class="list-group-item">1 Workroom</li>
                  </ul>
              </div>
              <div class="card-footer">
              <input type="hidden" name="roomtype" value="luxury">
              <button type="submit" class="btn btn-primary">Book Now</button>
            </form>
              </div>
            </div>
        </div>
          </div>
        </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>

</html>