<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <title>Home</title>

        <style>
            }
            img {
                width: 400px;
            }
            h4 {
                color :blue;
                text-align: center;
            }
            h5 {
                color :blue;
                text-align: center;
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
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Booking.php">Booking</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <h4>EAD HOTEL</h4>
    <h5>Welcome To 5 Star Hotel</h5>

    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-sm-4 1">
                <div class="card" style="width: 18rem; text-align: center;">
                    <img src="1.jpg" class="card-img-top" alt="...">
                    <form action="Booking.php" method="GET">
                    <div class="card-body">
                    <h5 class="card-title">Standard</h5>
                <h6 class="card-title text-center" style = "color: dodgerblue;">$ 90/Day</h6>
                <br>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-light">Facilities</li>
                    <li class="list-group-item">1 Single Bed</li>
                    <li class="list-group-item">1 Bathroom</li>
                  </ul>
                  <button type="submit" value="1" name="submit" class="btn btn-primary">Book Now</button>
                        </form>
                        </p>
                    </div>
                  </div>
            </div>
            <div class="col-sm-4 2">
                <div class="card" style="width: 18rem; text-align: center;">
                    <img src="2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <form action="booking.php" method="GET">
                      <h5 class="card-title">Superior</h5>
                <h6 class="card-title text-center" style = "color: dodgerblue;">$ 150/Day</h6>
                <br>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-light">Facilities</li>
                    <li class="list-group-item">1 Double Bed</li>
                    <li class="list-group-item">1 Television and Wi-Fi</li>
                    <li class="list-group-item">1 Bathroom with hot water</li>
                  </ul>
                  <button type="submit" value="2" name="submit" class="btn btn-primary">Book Now</button>
                        </form>
                        </p>
                    </div>
                  </div>
            </div>
            <div class="col-sm-4 3">
                <div class="card" style="width: 18rem; text-align: center;">
                    <img src="3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">     
                      <form action="Booking.php" method="GET">
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
                       <button type="submit" value="3" name="submit" class="btn btn-primary">Book Now</button>
                        </form>
                        </p>
                    </div>
                  </div>
                
            </div>

        </div>

    </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>

</html>
