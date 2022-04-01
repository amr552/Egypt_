<?php
require_once('header.php');
#include 'connect.php';
// $servername = "localhost";
// $username = "";
// $password = "root";
// $dbname = "product";




$dsn = "localhost";
$dbUser = "root";
$dbPassword = "";
// $dbName = "contact";

try {
    $dsn = "mysql:dbname=products;host=localhost";
    $pdo = new PDO($dsn, $dbUser, $dbPassword);
    echo "connection successful ";
} catch (PDOException $e) {
    echo "DB connection failed"  . $e->getMessage();
}


$status = "";
if (isset($_POST["submit"])) {
    $fname= $_POST['fname'];
    $fphoto= $_POST['fphoto'];
    $fdetails = $_POST['fdetails'];
    $fprice = $_POST['fprice'];
    $fcount = $_POST['fcount'];

    if (empty($fname) || empty($fphoto) || empty($fdetails)|| empty($fprice)|| empty($fcount)) {
        $status = "All fields are compulsaory";
    } else {
        if (strlen($fname) >= 255 || !preg_match("/^[a-zA-Z'\s]+$/", $fname)) {
            $status = "please enter a valid name";
        }else {
            $sorgu = $pdo->prepare("INSERT INTO items (fname ,photo ,fdetails,fprice,fcount)VALUES (?,?,?,?,?)");
            // $stmt = $pdo->prepare($sql);
            $stmt = $sorgu->execute([
                $fname, $fphoto, $fdetails,$fprice,$fcount,
            ]);
            $status = "your message was sent";
            $fname = "";
            $fphoto = "";
            $fdetails = "";
            $fprice = "";
            $fcount = "";
        }
    }
}
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




  <div class="carousel slide b-4 m-4" action ="" mathod="POST">
    <div class="text-dark bg-dark p-4">

      <div class="main-card bg-white">
        <div class=" d-flex justify-content-start">
          <img class="menu-image" src="photo/38.jpg" alt="Card image">
          <div class="text-left p-4">
            <h5 class="card-title">shops</h5>
            <p class="card-text">Do not forget getting some gift for your family from Egypt as a remember </p>
          </div>
        </div>
      </div>
      <div class="img  img-thumbnail h-25 p-3">
        <div class="card-deck carousel slide b-4 m-4 ">
          <div class="card-group p-top-4">
            <div class="card">
              <img name="fphoto" class="card-img-top img-fluid img-thumbnail" src="photo/s1.jpg" alt="Card image cap" id="s1" style=" height: 60% ;">
              <div class="card-body" style=" height: 20% ;">
                <h5 class="text-center" name ="fname">Egyptian girl from Nubia</h5>
                <div class="text text-center">
                 
                  <br>   <p name="fdetails">  By    : Oil on canvas 
                  <br>  Size  : 50x70 cm </p>
              <br>  <p name="fprice">price : 150$ </p>
              <br>  <p name ="fcount"> count : 10 </p>
                 
                
                </div>
                    <button class="btn btn-primary btn-lg" id='girl'  onclick="window.location.href=details.php " method="POST" name="buy" style="align-content:center" >BUY</button>
              </div>
            

               
            </div>


            <div class="card">
              <img name ="photo" class="card-img-top img-fluid img-thumbnail" src="photo/s10.jpg" alt="Card image cap" id="s1" style=" height: 60% ;">
              <div class="card-body" style=" height: 20% ;">
                <h5 name="fname" class="text-center">cats</h5>
                <p class="text-justify">
               
                 
                  <br>   <p name="fdetails">  By    : Oil on canvas 
                  <br>  Size  : 50x70 cm </p>
              <br>  <p name="fprice">price : 200$ </p>
              <br>  <p name ="fcount"> count : 20 </p>
                 
                
               
               </p>
              </div>

              <div class="card-footer">
                <div class="btn btn-block">
                  <div class="btn btn-block">
                    <button class="btn btn-primary btn-lg" id='cat' onclick="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" name="buy">BUY</button>

                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <img name="photo" class="card-img-top img-thumbnail " src="photo/s4.jpg" alt="Card image cap" style=" height: 60% ;">
              <div class="card-body" style=" height: 20% ;">
                <h5 name="fname" class="card-title">stone</h5>
                <p class="card-text">
                 
                 <br>   <p name="fdetails">  By    : Oil on canvas 
                 <br>  Size  : 50x70 cm </p>
             <br>  <p name="fprice">price : 160$ </p>
             <br>  <p name ="fcount"> count : 100 </p>
                
               
               
              </p>
              </div>
              <div class="card-footer">
                <div class="btn btn-block">
                  <div class="btn btn-block">
                    <button class="btn btn-primary btn-lg" id='horse' onclick="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" name="buy">BUY</button>

                  </div>
                </div>
              </div>
            </div>

          </div>




          <div class="card-group p-top-4">
            <div class="card">
              <img name="photo" class="card-img-top img-thumbnail" src="photo/s9.jpg" alt="Card image cap" style=" height: 60% ;">
              <div class="card-body" style=" height: 20 rem;">
                <h5 name="fname" class="card-title">Brides</h5>
                <p class="card-text">
                 
                 <br>   <p name="fdetails">  By    : Oil on canvas 
                 <br>  Size  : 50x70 cm </p>
             <br>  <p name="fprice">price : 150$ </p>
             <br>  <p name ="fcount"> count : 10 </p>
                
               
              
              .</p>
              </div>
              <div class="card-footer">
                <div class="btn btn-block">
                  <div class="btn btn-block">
                    <button class="btn btn-primary btn-lg" id='doll' onclick="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" name="buy">BUY</button>

                  </div>
                </div>
              </div>
            </div>


            <div class="card">
              <img name="photo" class="card-img-top img-thumbnail" src="photo/s6.jpg" alt="Card image cap" style=" height: 60% ;">
              <div class="card-body" style=" height: 20 rem;">
                <h5 name="fname" class="card-title">ice cap</h5>
                <p class="card-text">
                 <br>   <p name="fdetails">  By    : Oil on canvas 
                 <br>  Size  : 50x70 cm </p>
             <br>  <p name="fprice">price : 150$ </p>
             <br>  <p name ="fcount"> count : 10 </p>
              .</p>
              </div>
              <div class="card-footer">
                <div class="btn btn-block">
                  <div class="btn btn-block">
                    <button class="btn btn-primary btn-lg" id='py' onclick="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" name="buy">BUY</button>

                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <img name="photo" class="card-img-top img-thumbnail " src="photo/s8.jpg" alt="Card image cap" style=" height: 60% ;">
              <div class="card-body" style=" height: 20% ;">
                <h5 name="fname"class="card-title">caps</h5>
                <p class="card-text">
                 <br>   <p name="fdetails">  By    : Oil on canvas 
                 <br>  Size  : 50x70 cm </p>
             <br>  <p name="fprice">price : 150$ </p>
             <br>  <p name ="fcount"> count : 10 </p>
              </p>
              </div>
              <div class="card-footer">
                <div class="btn btn-block">
                  <div class="btn btn-block">
                    <button class="btn btn-primary btn-lg" id='caps' onclick="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" name="buy">BUY</button>

                  </div>
                </div>
              </div>
            </div>

          </div>


          <div class="card-group">
            <div class="card">
              <img name="photo" class="card-img-top img-thumbnail" src="photo/s7.jpg" alt="Card image cap" style=" height: 60% ;">
              <div class="card-body">
                <h5 name="fname"class="card-title">chickolata</h5>
                <p class="card-text">
                 <br>   <p name="fdetails">  By    : Oil on canvas 
                 <br>  Size  : 50x70 cm </p>
             <br>  <p name="fprice">price : 150$ </p>
             <br>  <p name ="fcount"> count : 10 </p>
               </p>
              </div>
              <div class="card-footer">
                <div class="btn btn-block">
                  <div class="btn btn-block">
                    <button class="btn btn-primary btn-lg" id='ston' onclick="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" name="buy">BUY</button>

                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <img name="photo"class="card-img-top img-thumbnail" src="photo/s2.jpg" alt="Card image cap" style=" height: 60% ;">
              <div class="card-body">
                <h5 name="fname"class="card-title">water</h5>
                
                 <br>   <p name="fdetails">  By    : Oil on canvas 
                 <br>  Size  : 50x70 cm </p>
             <br>  <p name="fprice">price : 150$ </p>
             <br>  <p name ="fcount"> count : 10 </p>
              
              </div>
              <div class="card-footer">
                <div class="btn btn-block">
                  <div class="btn btn-block">
                    <button class="btn btn-primary btn-lg" id='icecap' onclick="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" name="buy">BUY</button>

                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <img name="photo" class="card-img-top img-thumbnail" src="photo/s3.jpg" alt="Card image cap" style=" height: 60% ;">
              <div class="card-body">
                <h5 name="fname" class="card-title">nothing</h5>
                <p class="card-text">
                 <br>   <p name="fdetails">  By    : Oil on canvas 
                 <br>  Size  : 50x70 cm </p>
             <br>  <p name="fprice">price : 150$ </p>
             <br>  <p name ="fcount"> count : 10 </p>
               </p>
              </div>
              <div class="card-footer">
                <div class="btn btn-block">
                  <div class="btn btn-block">
                    <button class="btn btn-primary btn-lg" id='foto' onclick="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" name="buy">BUY</button>

                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>

      <div id="carouselExampleIndicators" class="sticky-top" data-ride="carousel">


        <div class="card-deck">

          <div class="card">
            <img src="photo/4.jpg" class="card-img-top" alt="Tour">
            <div class="card-body">
              <h5 class="card-title">Tour</h5>
              <p class="card-text">There are a lot of places that your time will not be enough to count all of them ,one of them is Nile rever that the begest Nile in the world so look at the beautiful nation around you</p>

            </div>
            <div class="card-footer">
              <a href="tour.php" class="btn btn-primary">See More</a><br>
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>


          <div class="card">
            <img src="photo/15.jpg" class="card-img-top" alt="Hotel">
            <div class="card-body">
              <h5 class="card-title">Hotels</h5>
              <p class="card-text">we offer best hotels to you and the price will surprise you </p>

            </div>
            <div class="card-footer">
              <a href="hotel.php" class="btn btn-primary">See More</a><br>
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>

          <div class="card">
            <img src="photo/20.jpg" class="card-img-top" alt="famous people">
            <div class="card-body">
              <h5 class="card-title">famous people</h5>
              <p class="card-text">Egypt not just history but there are a lot of beautiful egyption people do sth great </p>

            </div>
            <div class="card-footer">
              <a href="people.php" class="btn btn-primary">See More</a> <br>
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>


          <div class="card">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="photo/12.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="photo/19.jpg" alt="Second slide">
                </div>

                <div class="carousel-item">
                  <img class="d-block w-100" src="photo/16.jpg" alt="Second slide">
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

            <div class="card-body">
              <h5 class="card-title">Shops</h5>
              <p class="card-text">Egypt common with handmade goods so Do not forget take sth to remember</p>
            </div>
            <div class="card-footer">
              <a href="shops.php" class="btn btn-primary">See More</a><br>
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>

          </div>
        </div>

      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html> 
<?php include'footer.php'; ?>
<?php
/*
// $dsn='mysql:host=localhost;dbname=products';
// $username='root';
// $passowrd='';

// try {
// 	$db=new PDO($dsn,$username);
// 	#$db=new PDO($dsn,$username ,$password);

// } catch (PDOException $e) {
// 	$error_message ="database eroor: ";
// 	$error_message.= $e -> getMessage();
// 	echo $error_message;
	
// }




//  try {
//    $conn = new PDO($dsn, $username);
//    // set the PDO error mode to exception
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    $sql = "INSERT INTO items (photo, fname,fprice, fdetails,fcount)
//    VALUES ('', '', '','','')";
//    // use exec() because no results are returned
//    $conn->exec($sql);
//    echo "New record created successfully";
//  } catch(PDOException $e) {
//    echo $sql . "<br>" . $e->getMessage();
//  }


// if (isset($_POST["submit"]))
//  {
//     // $u_isim=guvenliksagla($_POST["uisim"]);

//     $ureklam_str = implode("", $_POST["ureklam"]);
//     //echo $ureklam_str;

//     if (empty($_POST["uisim"])) {
//         $uisim = "urun isim alani bos olamaz . <br>";
//     }
//     if (empty($_POST["uaciklama"])) {
//         $uaciklama = "urun aciklama alani bos olamaz . <br>";
//     }

//     if (empty($_POST["ufiyat"])) {
//         $ufiyat = "urun fiyat alani bos olamaz . <br>";
//     }

//     if (empty($_POST["ukategori"])) {
//         $ufiyat = "urun fiyat alani bos olamaz . <br>";
//     }

//     if (empty($_POST["urenk"])) {
//         $ufiyat = "urun fiyat alani bos olamaz . <br>";
//     }
//     if (empty($_POST["ureklam"]) || empty($_POST["ureklam"])) {
//         $ufiyat = "urun fiyat alani bos olamaz . <br>";
//     } else {
//         $ureklam_str = implode(" ", $_POST["ureklam"]);
//         echo $ureklam_str;
//     }
//   }

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "products";
// // Create connection
// $conn = new mysqli($servername, $username, $password);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }





// $sql = "INSERT INTO item (name, price ,count ,details) 
// VALUES ('', '', '','')";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully" .$conn->query($sql);
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

*/
?>