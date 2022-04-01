<?php
include 'header.php';

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
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $username = $_POST['username'];
  $pass = $_POST['pass'];
  $phone = $_POST['phone'];
  $mail = $_POST['mail'];
  $address = $_POST['address'];
  $zipcode = $_POST['zipcode'];
  $cardNo = $_POST['cardNo'];
  $scode = $_POST['scode'];
  $date = $_POST['date'];

  $scode = count($scode);
  $cardNo = count($cardNo);


  if (empty($fname) || empty($lname) || empty($username) || empty($pass) || empty($phone) || empty($mail) || empty($address) || empty($zipcode) || empty($cardNo) || empty($scode) || empty($date)) {
    $status = "All fields are compulsaory";
  } else {
    if (strlen($username, $lname, $name) >= 250 || !preg_match("/^[a-zA-Z'\s]+$/", $name)) {
      $status = "please enter a valid name";
    } elseif ($scode > 3) {
      $status = "please enter security cade in your card right";
    } elseif ($cardNo > 15) {
      $status = "please enter your card Number right";
    } else {
      $sorgu = $pdo->prepare("INSERT INTO login (fname ,lname ,username,password,phoneNo,email,address,zipcode,bcardNo,scode,Expiredate)VALUES (?,?,?,?,?,?,?,?,?,?,?)");
      // $stmt = $pdo->prepare($sql);
      $stmt = $sorgu->execute([
        $fname, $lname, $username, $pass, $phone, $mail, $address, $zipcode,
        $cardNo, $scode, $date,
      ]);
      $status = "your message was sent";
      $fname = "";
      $lname = "";
      $username = "";
      $pass = "";
      $phone = "";
      $mail = "";
      $address = "";
      $zipcode = "";
      $cardNo = "";
      $scode = "";
      $date = "";
    }
  }
}

?>



<body class="bg-light ">

  <div class="container  " style="padding-top: 50px; margin-top: 50px ;">
    <main>

      <div class="row g-5 m-4 p-4">
        <div class="col-md-5 col-lg-4 order-md-last">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary">Your cart</span>
            <span class="badge bg-primary rounded-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Product name</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$12</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Second product</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$8</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Third item</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Promo code</h6>
                <small>EXAMPLECODE</small>
              </div>
              <span class="text-success">−$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong>$20</strong>
            </li>
          </ul>


          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Promo code">
              <button type="submit" class="btn btn-secondary">Redeem</button>
            </div>
          </form>

        </div>
        <div class="col-md-7 col-lg-8">
          <h4 class="mb-3">Billing address</h4>
          <form class="needs-validation" novalidate=""  action="login.php" method="POST">
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="firstName" class="form-label">First name</label>
                <input type="text" name="fname" class="form-control" id="firstName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="lastName" class="form-label">Last name</label>
                <input type="text" name="lname" class="form-control" id="lastName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>

              <div class="col-12">
                <label for="username" class="form-label">Username</label>
                <div class="input-group has-validation">
                  <span class="input-group-text">@</span>
                  <input type="text" name="username" class="form-control" id="username" placeholder="Username" required="">
                  <div class="invalid-feedback">
                    Your username is required.
                  </div>
                </div>
              </div>

              <div class="col-12">
                <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                <input type="email" name="mail" class="form-control" id="email" placeholder="you@example.com">
                <div class="invalid-feedback">
                  Please enter a valid email address for shipping updates.
                </div>
              </div>

              <div class="col-12">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St" required="">
                <div class="invalid-feedback">
                  Please enter your shipping address.
                </div>
              </div>
              <div class="col-12">
                <label for="address" class="form-label">Password</label>
                <input type="password" name="address" class="form-control" id="password" placeholder="" required="">
                <div class="invalid-feedback">
                  Please enter your password.
                </div>
              </div>
              <div class="col-12">
                <label for="address" class="form-label">Phone Number</label>
                <input type="text" name="phone" class="form-control" id="phone" placeholder="" required="">
                <div class="invalid-feedback">
                  Please enter your Phone Number for contact .
                </div>
              </div>

            </div>

            <hr class="my-4 m-4 p-4">

            <h4 class="mb-3">Payment</h4>


            <div class="row gy-3">
              <div class="col-md-6">
                <label for="cc-name" class="form-label">Name on card</label>
                <input type="text" name="Ncard" class="form-control" id="cc-name" placeholder="" required="">
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>

              <div class="col-md-6">
                <label for="cc-number" class="form-label">Credit card number</label>
                <input type="text" name="cardNo" class="form-control" id="cc-number" placeholder="" required="">
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>

              <div class="col-md-3">
                <label for="cc-expiration" class="form-label">Expiration</label>
                <input type="text" name="date" class="form-control" id="cc-expiration" placeholder="" required="">
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>

              <div class="col-md-3">
                <label for="cc-cvv" class="form-label">CVV</label>
                <input type="text" name="scode" class="form-control" id="cc-cvv" placeholder="" required="">
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>

            <hr class="my-4">

            <button class="w-100 btn btn-primary btn-lg" name="submit" id="submit" onclick="window.location.href=login.php" type="submit">Continue to checkout</button>
          </form>
        </div>
      </div>
    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">© 2021 -2022 freedom</p>

    </footer>
  </div>


  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="form-validation.js"></script>


</body>
<!-- 
<div class="carousel slide b-4 m-4">

	<form action="" method="post">
		<h3 style="text-align: center; color:black"> Sign Up</h3>
			<input type="text" placeholder="First Name"		 name="fname" id="fname">
			<input type="text" placeholder="Last Name" 		name="lname" id="lname">
			<br><input type="text" placeholder="User Name"	 name="username" id="username">
			<input type="text" placeholder="Password" 		name="pass" id="pass">
		<br><input type="Number" placeholder="Phone Number " name="phone" id="phone">
			<input type="text" placeholder="E-mail" 		name="mail" id="mail">
			<br><input type="text" placeholder="Adress" 	name="address" id="address">
			<input type="number" placeholder="Zipcode" 		name="zipcode" id="zipcode">
	<br><input type="number" placeholder="Bank Card Number" name="cardNo" id="cardNo">
<input type="number" placeholder="Security code in your card" name="scode" id="scode">
		<br><input type="date" placeholder="Expiration Date" name="date" id="date">
	<br><button type="csubmit" 								name="signup" id="signup"> Customer</button>
		<button type="psubmit" 								name="signup" id="signup"> Personal</button>
	</form>
</div> -->
<?php include 'footer.php' ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!--Fontawesome CDN-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<!--Custom styles-->
</body>

</html>