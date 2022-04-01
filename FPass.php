<?php include 'header.php' ;


$dsn = "localhost";
$dbUser = "root";
$dbPassword = "";
// $dbName = "contact";

try {
    $dsn = "mysql:dbname=signin;host=localhost";
    $pdo = new PDO($dsn, $dbUser, $dbPassword);
    echo "connection successful ";
} catch (PDOException $e) {
    echo "DB connection failed"  . $e->getMessage();
}


$status = "";
if (isset($_POST["submit"])) {
    $mail= $_POST['email'];
    $pass= $_POST['pass'];
    

    if (empty($mail) || empty($pass) ) {
        $status = "All fields are compulsaory";
    } else {
            $sorgu = $pdo->prepare("INSERT INTO repassword(email,password)VALUES (?,?)");
            // $stmt = $pdo->prepare($sql);
            $stmt = $sorgu->execute([$mail, $pass] );
            echo 'urun eklendi'.$stmt ;
            $status = "your message was sent";
            $mail = "";
            $pass = "";
        }
    }

?> 

<body class="text-center">
    
<main class="form-signin  col-lg-12" style=" border: 50px; margin: 200px; width:fit-content">
  <form>
    <img class="mb-4" src="photo/untitled.jpg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please renew your password</h1>

    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    
    <div class="form-floating">
      <input type="password"  name="pass" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" onclick="signin.php" type="submit">Save </button>
    
  </form>
</main>


    
  

</body>