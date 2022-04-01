<?php
#require_once('main.php');
# require_once('shops.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> -->

</head>

<body>

    <div class="bg-dark  p-3  font-weight-bold " >
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark  ">
            <nav class="navbar navbar-dark bg-dark">
                <a href="login.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">login</a>
            </nav>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse show" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="main.php">EGYPT</a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="History.php">HISTORY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="tour.php">TOURS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="people.php">FAMOUS PEOPLE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="hotel.php">HOTELS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="shops.php">PRODUCT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="about.php">ABOUT US</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0 ">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>

    <!-- 
    <div class="pos-f-t ">

        <div class="collapse " id="navbarToggleExternalContent">

            <div class="bg-dark  p-3 "> <?php #for spacing between component and  
                                        ?>
                <a href="login.php" class="btn btn-primary">login</a>

                <h4 class="text-white"> <strong>EGYPT</strong> </h4>

                <span class="text-muted">
                        <nav class="nav nav-pills nav-fill navbar-expand-lg  "> <?php #to expand the bar  .. 
                                                                                ?>

                            <div class="container-fluid">
                                <a class="navbar-brand" href="#"><img src="photo/logo.png" alt="image" width="40px" hight="40px"></a>

                                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>

                                <div class="navbar-collapse justify-content-end collapse" id="navbar-wd">
                                    <ul class="navbar-nav">
                                        <li><a class="nav-link active" href="main.php">Home</a></li>
                                        <li> <a class="nav-link dropdown-toggle" href="History.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                History
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="tour.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Tours
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </li>
                                        <li> <a class="nav-link dropdown-toggle" href="shops.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Products
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </li>
                                        <li> <a class="nav-link dropdown-toggle" href="people.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Famous people
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </li>
                                        <li><a class="nav-link" href="hotel.php">Hotels</a></li>
                                        <li><a class="nav-link" href="about.php">Abous us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                   
                </span>
            </div>
        </div>

        <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>

    </div>
 -->


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

</html>