<?php

include 'connect.php';

$name = $price = $count = $type = $photo = $details = $ureklam = "";






if (isset($_POST["submit"])) {
    // $u_isim=guvenliksagla($_POST["uisim"]);
    // $name =  $_POST["name"];
    // $sql = "INSERT INTO item (pname, pprice ,pcount ,ptype,pphoto,pdetails) 
    // VALUES ($name, '200', '','','','')";
    // $conn->query($sql);

    $ureklam_str = implode("", $_POST["ureklam"]);
    //echo $ureklam_str;

    if (empty($_POST["pname"])) {
        $name = "urun isim alani bos olamaz . <br>";
    }
    if (empty($_POST["pprice"])) {
        $price = "urun aciklama alani bos olamaz . <br>";
    }

    if (empty($_POST["pcount"])) {
        $pcount = "urun fiyat alani bos olamaz . <br>";
    }

    if (empty($_POST["ptype"])) {
        $ptype = "urun fiyat alani bos olamaz . <br>";
    }

    if (empty($_POST["pphoto"])) {
        $pphoto = "urun fiyat alani bos olamaz . <br>";
    }
    if (empty($_POST["pdetails"]) || empty($_POST["ureklam"])) {
        $pdetails = "urun fiyat alani bos olamaz . <br>";
    } else {
        $ureklam_str = implode(" ", $_POST["ureklam"]);
        echo $ureklam_str;
    }
}

$uploakdOK = 1;
if (isset($_FILES["pphoto"]) && empty($_FILES["pphoto"])) {
    $check = getimagesize($_FILES["pphoto"]["tmp_name"]);
    if ($check !== false) {
        $ufoto = "Foto turu " . $check["mime"] . ".";
        $uploakdOK = 1;
    } else {
        $ufoto = "Bir foto secin Lufen .";
        $uploakdOK = 0;
    }
} else {
    $pphoto_err = "choose a photo ";
    $uploadOK = 0;
}

$photo_name = " ";

if ($uploadOK == 1 || file_exists($_FILES["pphoto"]["temp_name"]) || is_uploaded_file($_FILES["pphoto"]["tmp_name"])) {
    $fname = $_FILES["pphoto"]["name"];
    $tmpName = $_FILES["pphoto"]["tmp_name"];
    $ext = strtolower(pathinfo($fname, PATHINFO_EXTENSION));
    $yeni_isim = $fname . "_" . uniqid(rand(), true) . "." . $ext;
    $path = "img/" . $yeni_isim;
    if (move_uploaded_file($tmpName, $path)) {
        $foto_name = $yeni_isim;
    } else {
        $ufoto_err .= "Dosya yuklenirken bir hata olustu ";
    }
}

if (
    !empty($_POST["pname"]) &&
    !empty($_POST["pprice"]) &&
    !empty($_POST["pcount"]) &&
    !empty($_POST["ptype"]) &&
    !empty($_POST["pphoto"]) &&
    !empty($_POST["pdetails"]) &&
    !empty($ureklam_str)
) {
    if (empty($photo_name)) {


        $sorgu = $db->prepare("insert into urunler (pname ,pprice,pcount,ptype,pphoto,pdetails,ureklam) 
    values (?,?,?,?,?,?,?)");
        $insert = $sorgu->execute([
            guvenliksagla($_POST["pname"]),
            guvenliksagla($_POST["pdetails"]),
            guvenliksagla($_POST["pprice"]),
            $_POST["ptype"],
            $photo_name,
            $_POST["pcount"],
            $ureklam_str
        ]);

        if ($insert) {
            $son_eleman = $db->lastInsertId();
            echo $son_eleman . " nolu urun sisteme girilmistir .";
        } else {
            echo "kayitta bir sorunu olustu ";
        }
    }
}
