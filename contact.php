<?php

require 'header.php';

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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="contact.php" method="POST" class="btn  btn-primary border-dark m-4 p-3 carousel slide b-4   " style="height:300px ; width: 300px;">
        <h4>Contact With Us :) </h4>
        <input type="text" placeholder="Full Name" id="name" name="name"> <br>
        <input type="text" placeholder="Email" id="email" name="email"><br>
        <textarea type="text" placeholder="Your Message" id="message" name="message" style="height: 100px; ;width: 200px;;"> </textarea><br>
        <button class="btn-success m-3 p-2" type="submit" name="submit" id="submit" onclick="<?php echo $_SERVER['PHP_SELF'] ?>"> Submit</button>
    </form>
</body>

</html>

<?php
require 'footer.php';
?>