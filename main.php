<?php
require_once('header.php');

// $conn=mysqli_connect('localhost','root','root','login');
// if(!$conn){
//     echo 'Error: '.mysqli_connect_error();

// }

// $user=$_POST["user"];
// $password=$_POST["pass"];


// if(isset($_POST['submit'])){
//     $sql="INSERT INTO "

// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>

<body>






    <?php /*
<div class="main">
            <div class="navbar">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                 <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" >
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        </nav>

            </div>


*/ ?>


    <div class="container" > <?php #position-sticky 
                            ?>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="" data-slide-to="0" class="active"></li>
                <li data-target="" data-slide-to="1"></li>
                <li data-target="" data-slide-to="2"></li>
                <li data-target="" data-slide-to="3"></li>
                <li data-target="" data-slide-to="4"></li>
            </ol>


            <div class="carousel-inner "style="margin-top: 10px;">
                <div class="carousel-item active" >
                    <img class="d-block w-100 img-fluid " src="photo/12.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-fluid" src="photo/19.jpg" alt="Second slide" >
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100 img-fluid" src="photo/16.jpg" alt="Second slide">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="photo/1.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="photo/3.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="line-p-3 line-Blue">
            <hr>
        </div>
        
            <div class="card-deck">

                <div class="card">
                    <img src="photo/4.jpg" class="card-img-top" alt="Tour" style="height: 40%;">
                    <div class="card-body">
                        <h5 class="card-title">Tour</h5>
                        <p class="card-text">There are a lot of places that your time will not be enough to count all of them ,one of them is Nile rever that the begest Nile in the world so look at the beautiful nation around you</p>

                    </div>
                    <div class="card-footer">
                        <a target="_blank" href="tour.php" class="btn btn-primary">See More</a><br>
                        
                    </div>
                </div>


                <div class="card">
                    <img src="photo/15.jpg" class="card-img-top" alt="Hotel" style="height: 40%;">
                    <div class="card-body">
                        <h5 class="card-title">Hotels</h5>
                        <p class="card-text">we offer best hotels to you and the price will surprise you </p>

                    </div>
                    <div class="card-footer">
                        <a target="_blank"href="hotel.php" class="btn btn-primary">See More</a><br>
                       
                    </div>
                </div>

                <div class="card">
                    <img src="photo/20.jpg" class="card-img-top" alt="famous people" style="height: 40%;">
                    <div class="card-body">
                        <h5 class="card-title">famous people</h5>
                        <p class="card-text">Egypt not just history but there are a lot of beautiful egyption people do sth great </p>

                    </div>
                    <div class="card-footer">
                        <a target="_blank" href="people.php" class="btn btn-primary">See More</a> <br>
                       
                    </div>
                </div>


                <div class="card">
                    <img src="photo/26.jpg" class="card-img-top" alt="Hotel" style="height: 40%;">

                    <div class="card-body">
                        <h5 class="card-title">Shops</h5>
                        <p class="card-text">Egypt common with handmade goods so Do not forget take sth to remember</p>
                    </div>
                    <div class="card-footer">
                        <a target="_blank" href="shops.php" class="btn btn-primary">See More</a><br>
                       
                    </div>
                </div>

            
        </div>
    </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    </div>
</body>

</html>

<?php require_once("footer.php") ?>