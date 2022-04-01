<?php
require_once("header.php");


/*
# require ("connect.php");

// $conn = mysqli_connect('localhost', 'root', '', 'signin');



// if (isset($_POST['submit'])) {
//   $sql = "INSERT INTO signin (username,email,password)
//     VALUES ( '', '','')";



//   if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//   }
// }

// $stmt = $conn->prepare("INSERT INTO signin (username,email, password) VALUES (?,?, ?)");
// $stmt->bind_param($username, $email, $password);

// // set parameters and execute
// $username = "username";
// $email = "email";
// $password = "password";
// $stmt->execute();
// echo "New records created successfully";



// $servername = "localhost";
// $username = "";
// $password = "root";
// $db_name="login";



// try {
//   $conn = new PDO("mysql:host=$servername;dbname=login", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }


//  if($_SERVER['REQUEST_METHOD'] == 'POST'){
//     $username =$_POST['user'];
//     $password =$_POST['pass'];
//     $hashedpass =sha1($password);
//     $stmt =$conn->prepare("SELECT user , password FROM  users where user = ? AND password = ?");
//     $stmt ->execute(array($username ,$hashedpass));
//     $count =$stmt->rowCount();

//     echo $count ;

//  }
*/
?>

<form class="login w-50 p-3  " action="main.php" method="POST" style="padding-buttom : 75px;">
  <div class="row">
    <div class="col-sm-6">
      <div class="card ">
        <div class="card-body">
          <h5 class="card-title" style="text-align: center; font-size:30px"> LOGIN</h5>
          <input class="form-control input-lg" type="text" name="username" id="username" placeholder="username " />
          <input class="form-control input-lg" type="text" name="email" id="email" placeholder="Email " />
          <input class="form-control input-lg" type="password" name="password" id="password" placeholder="password" autocomplete="new-password" />
          <button class="btn btn-lg btn-primary btn-block " name="submit" id="submit" type="submit" value="login" onclick="shops.php"> Login</button><br>
          <div class="footer lg-3 " style="text-align:center; font-size:20px">
            <a href="signup.php " class="m-4 p-3 col-md-4 "> Sign Up</a>
            <a href="FPass.php "> Forget password</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</form>



<?php

?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


<?php require_once("footer.php") ?>