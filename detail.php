<?php
require_once('header.php');


$dsn='mysql:host=localhost;dbname=products';
$username='root';
$passowrd='';
try {
	$db=new PDO($dsn,$username);
	#$db=new PDO($dsn,$username ,$password);

} catch (PDOException $e) {
	$error_message ="database eroor: ";
	$error_message.= $e -> getMessage();
	echo $error_message;
	exit();
}
// $sql = ("SELECT count From item");
// $result = $conn->query($sql);
// $row = $result->fetch_assoc();


// $servername = "localhost";
// $username = "";
// $password = "root";
// $dbname = "product";

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   $sql = "INSERT INTO item (name, price, count,details)
//   VALUES ('', '', '','')";
//   // use exec() because no results are returned
//   $conn->exec($sql);
//   echo "New record created successfully";
// } catch(PDOException $e) {
//   echo $sql . "<br>" . $e->getMessage();
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

    <div class="carousel slide b-4 m-4">
        <div class="body cd-p-4 ">
            <div class="text-dark bg-dark p-4">

                <div class="main-card bg-white">
                    <div class=" d-flex justify-content-start">
                        <img class="menu-image" src=" <?php echo $resim ?>" alt="Card image">
                        <div class="card-body" style=" height: 20% ;">
                            <h3 class="text-center">Egyptian girl from Nubia</h3>
                            <p class="text-justify">

                                <strong>
                                    By : Oil on canvas
                                    <br> Size : 50×70 cm
                                    <br> price : 150$
                                </strong>

                            </p>
                            <br> <button type="submit" class="btn btn-primary" name="buy" onclick=" adding.php ">Buy </button>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>

<?php require_once("footer.php") ?>