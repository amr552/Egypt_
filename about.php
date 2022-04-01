<?php require_once("header.php");
 $dsn = "localhost";
 $dbUser = "root";
 $dbPassword = "";
 // $dbName = "contact";

 try {
     $dsn = "mysql:dbname=contact;host=localhost";
     $pdo = new PDO($dsn, $dbUser, $dbPassword);
     echo "connection successful ";
 } catch (PDOException $e) {
     echo "DB connection failed"  . $e->getMessage();
 }


 $status = "";
 if (isset($_POST["submit"])) {
     $name = $_POST['name'];
     $email = $_POST['email'];
     $message = $_POST['message'];

     if (empty($name) || empty($email) || empty($message)) {
         $status = "All fields are compulsaory";
     } else {
         if (strlen($name) >= 255 || !preg_match("/^[a-zA-Z'\s]+$/", $name)) {
             $status = "please enter a valid name";
         } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
             $status = "please enter a valid email";
         } else {
             $sorgu = $pdo->prepare("INSERT INTO con (Full_name ,email ,Message)VALUES (?,?,?)");
             // $stmt = $pdo->prepare($sql);
             $stmt = $sorgu->execute([
                 $name, $email, $message,
             ]);
             $status = "your message was sent";
             $name = "";
             $email = "";
             $message = "";
         }
     }
 }


?>

  <div class="carousel slide b-4 m-4">
    <div class="jumbotron">
      <h1 class="display-4">About US</h1>
      <p class="lead">we help you to know more about Egypt on all side Shopping ,Tours ,Hotel and history </p>
      <hr class="my-4">
      <!-- <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> -->
      <p class="lead">
      <form action="contact.php" method="POST" class=" carousel slide b-4   " style="height:50% ; width:50%; ">
        <h4 style="text-align: center; color:blue ; font-size:30px">Contact With Us :) </h4>
        <div class="form-group">
          <!-- <label for="exampleFormControlInput1">Email address</label> -->
          <input type="text" name="name" class="form-control" id="" placeholder="Your Full Name">
        </div>
        <div class="form-group">
          <!-- <label for="exampleFormControlInput1">Email address</label> -->
          <input type="email"  name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>


          <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Write here your Message" rows="10" ></textarea>
          <button class="btn-primary m-3 p-2 " type="submit" name="submit" id="submit" onclick="<?php echo $_SERVER['PHP_SELF'] ?>"> contact us here</button>
        </div>
      </form>
        <!-- <a class="btn btn-primary btn-lg" href="contact.php" role="button"></a> -->
      </p>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


<?php require_once("footer.php") ?>