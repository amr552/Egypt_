<?php

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
// 	exit();
// }

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






// $servername = "localhost";
// $username = "root";
// $password = "";
// #$dbname = "signin";

// // Create connection
// $conn = new mysqli($servername, $username, $password);

// // Check connection
// if ($conn->connect_error) {
// 	die("Connection failed: " . $conn->connect_error);
// } else {
// 	#mysqli_select_db($conn,  $dbname);

// 	echo "Connected successfully";
// }




// require "config.php";
// function guvenliksagla($text, $x = 10)
// {
//     $text = trim($text);
//     $text = htmlspecialchars($text);
//     return $text;
// }
// //echo "Form kontrol";
// //echo "<br>";
// $uisim = $uaciklama = $ufiyat = $ukategori = $urenk = $ureklam = $ufoto = "";


// if (isset($_POST["submit"])) {
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

//     $uploakdOK = 1;
//     if (isset($_FILES["ufoto"]) && empty($_FILES["ufoto"])) {
//         $check = getimagesize($_FILES["ufoto"]["tmp_name"]);
//         if ($check !== false) {
//             $ufoto = "Foto turu " . $check["mime"] . ".";
//             $uploakdOK = 1;
//         } else {
//             $ufoto = "Bir foto secin Lufen .";
//             $uploakdOK = 0;
//         }

//         $foto_name = " ";

//         if ($uploadOK == 1 || file_exists($_FILES["ufoto"]["temp_name"]) || is_uploaded_file($_FILES["ufoto"]["tmp_name"])) {
//             $fname = $_FILES["ufoto"]["name"];
//             $tmpName = $_FILES["ufoto"]["tmp_name"];
//             $ext = strtolower(pathinfo($fname, PATHINFO_EXTENSION));
//             $yeni_isim = $fname . "_" . uniqid(rand(), true) . "." . $ext;
//             $path = "img/" . $yeni_isim;
//             if (move_uploaded_file($tmpName, $path)) {
//                 $foto_name = $yeni_isim;
//             } else {
//                 $ufoto_err .= "Dosya yuklenirken bir hata olustu ";
//             }
//         }

//         //veritabanina sorgu gonderme 
//         // 
//         if (
//             !empty($_POST["ukategori"]) &&
//             !empty($_POST["uisim"]) &&
//             !empty($_POST["uaciklama"]) &&
//             !empty($_POST["ufiyat"]) &&
//             !empty($_POST["urenk"]) &&
//             !empty($ureklam_str)
//         ) {
//             if (empty($foto_name)) {
            

//         $sorgu = $db->prepare("insert into urunler (uisim ,uaciklama,ufiyat,ukategori,ufoto,urenk,ureklam) 
//         values (?,?,?,?,?,?,?)");
//         $insert = $sorgu->execute([
//             guvenliksagla($_POST["uisim"]),
//             guvenliksagla($_POST["uaciklama"]),
//             guvenliksagla($_POST["ufiyat"]),
//             $_POST["ukategori"],
//             $foto_name,
//             $_POST["urenk"],
//             $ureklam_str
//         ]);

//         if ($insert) {
//             $son_eleman = $db->lastInsertId();
//             echo $son_eleman . " nolu urun sisteme girilmistir .";
//         } else {
//             echo "kayitta bir sorunu olustu ";
//         }
//     }
// }
// }
// }









	// $dsn ='mysql:host=localhost;dbname=shop';
	// $user='root';
	// $pass='';
	// $option =array (
	// 	MYSQLi::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',

	// );
	// try {
	// 	$con=new PDO($dsn,$user,$pass,$option );
	// 	$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	// 	echo 'you are connected welcome';
	// }catch (PDOException $e){
	// 	echo 'Failed to connected' . $e ->getMessage();
	// }



	// $dsn ='mysql:host=localhost;dbname=product';
	// $user='root';
	// $pass='';
	// $option =array (
	// 	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',

	// );
	// try {
	// 	$con=new PDO($dsn,$user,$pass,$option );
	// 	$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	// 	echo 'you are connected welcome';
	// }catch (PDOException $e){
	// 	echo 'Failed to connected' . $e ->getMessage();
    // 	}







// $servername = "localhost";
// $username = "";
// $password = "root";
// $db_name="login";
// try {
//   $conn = new "mysql:host=".$servername.";dbname=".$db_name." ", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  
//   echo "New records created successfully";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }


// $servername ="localhost";
// $username ="root" ;
// $password="";
// $dbname="product";

// $conn=new mysqli($servername , $username ,$password ,$dbname) ;
// if ($conn->connect_error) {
// 	die("connection failed" ) . $conn->connect_error;

// }else 
// 	echo "connection successful ";
