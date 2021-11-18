<?php session_start(); 
    if(!isset($_SESSION['user'])) {
        header('Location: ../index.php');
    } 

    // If user is admin return back
    if($_SESSION['user']['role'] == 1) {
        header('Location: ../index.php');
    }
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  
   <title>Tour Company</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/main.css">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
            <link rel="icon"   href="icon.png">

</head>
  
  
<body>
<nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color: rgba(249, 251, 251, 0.92)">
    <a class="navbar-brand" href="#">Sunhill Hotel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#RM">Rooms</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#AB">About Us</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#OH">Our Hotels</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#CU">Contact Us</a>
            </li>


        </ul>
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link" href="#">Welcome <?php echo $_SESSION['user']['firstname'] ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../server.php?logout=1">Log out</a>
            </li>


        </ul>
    </div>
</nav>

 <body>


      

    <div id="roomSection" class="row mt-5">
        <div class="col-md-12">
            <div class="container">
                <form method="POST" action="../server.php">
                    <div class="form-row">
                        <div class="col-md-3">
                            <label for="checkInDate">Check in date</label>
                            <input name ="checkin" id="checkInDate" type="date" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="checkOutDate">Check out date</label>
                            <input name="checkout" id="checkOutDate" type="date" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="roomType">Room</label><br>
                            <select name="rooms" id="roomType" class="form-control custom-select">
                                <option selected>Select One</option>
                                <option value="1">Single</option>
                                <option value="2">Double</option>
                                <option value="3">Deluxe</option>
                                <option value="3">Royal</option>
                                <option value="3">King</option>
                            </select>
                        </div>
                        <div class="col-md-1">
                            <label for="nGuests">Guests</label> <br>
                            <select name="guest" id="nGuests" class="form-control custom-select">
                                <option selected>Select One</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="3">4</option>
                                <option value="3">5</option>
                                <option value="3">6+</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="submit">&nbsp</label>
                            <input id="submit" name="new_reservation" type="submit" class="form-control btn btn-outline-primary">
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>


    <div class="row mt-5">
        <div class="col-md-12 text-center">
            <h3><a name = "RM">Rooms</h3>
            <p><cite>"Make yourself at home"</cite> is our slogan. We offer the best beds in the industry. Sleep well
                and rest well.</p>
        </div>
        <div class="col-md-12 pt-3">
            <div class="container">
                <div class="row">

                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="../images/room1.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Single Room</h4>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <p>From $99</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p>Single Bed</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p>15m2</p>
                                    </div>

                                </div>
                                <div class="row py-3">
                                    <div class="col-md-2">
                                        <i class="fa fa-shower fa-2x"></i>
                                    </div>
                                    <div class="col-md-2">
                                        <i class="fa fa-phone fa-2x"></i>
                                    </div>
                                </div>

                                <a href="#" class="btn btn-outline-dark w-100">Choose Room</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="../images/room2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Double Room</h4>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <p>From $149</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p>Queen size bed</p>
                                    </div>
                                    <div class="col-md-3">
                                        <p>25m2</p>
                                    </div>

                                </div>
                                <div class="row py-3">
                                    <div class="col-md-2">
                                        <i class="fa fa-shower fa-2x"></i>
                                    </div>
                                    <div class="col-md-2">
                                        <i class="fa fa-phone fa-2x"></i>
                                    </div>
                                </div>

                                <a href="#" class="btn btn-outline-dark w-100">Choose Room</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="../images/room3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Deluxe Room</h4>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <p>From $199</p>
                                    </div>
                                    <div class="col-md-5">
                                        <p>King-Size Bed</p>
                                    </div>
                                    <div class="col-md-3">
                                        <p>40m2</p>
                                    </div>

                                </div>
                                <div class="row py-3">
                                    <div class="col-md-2">
                                        <i class="fa fa-shower fa-2x"></i>
                                    </div>
                                    <div class="col-md-2">
                                        <i class="fa fa-phone fa-2x"></i>
                                    </div>
                                    <div class="col-md-2">
                                        <i class="fa fa-wifi fa-2x"></i>
                                    </div>
                                    <div class="col-md-2">
                                        <i class="fa fa-television fa-2x"></i>
                                    </div>
                                    <div class="col-md-2">
                                        <i class="fa fa-cutlery fa-2x"></i>
                                    </div>
                                    <div class="col-md-2">
                                        <i class="fa fa-glass fa-2x"></i>
                                    </div>
                                </div>

                                <a href="#" class="btn btn-outline-dark w-100">Choose Room</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
  
  

    <script  src="js/index.js"></script>



</body>

<footer class="container-fluid">
    <div class="row bg-dark py-5    " style="min-height: 30vh">
        <div class="col-md-12">
            <div class="container text-light">
                <h4 class="text-center">Find us on</h4>

                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light"><i class="fa fa-facebook-official fa-2x" ></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light"><i class="fa fa-twitter-square fa-2x" ></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light"><i class="fa fa-instagram fa-2x" ></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light"><i class="fa fa-google-plus-square fa-2x" ></i></a>
                    </li>
                </ul>

                <p class="text-uppercase text-center mt-5">Copyright &copy Ibrahim Thaqi</p>

            </div>
        </div>


    </div>


</footer>

</html>
