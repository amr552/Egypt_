<?php
require_once('header.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style href="//css/addpro.css"></style>
</head>
<body>
    

<div class="content m-3 p-3 " id="content">
    <div class="form-container">
        <div class="form-group">
            <label for="uisim">product Name</label>
            <input type="text" name="uisim" id="uisim">
        </div>
        <div class="form-group">
            <label for="uaciklama">product Details</label>
            <textarea name="uaciklama" id="uaciklama"></textarea>
            
        </div>

        <div class="form-group">
            <label for="ufiyat"> Urun Fiyat: </label>
            <input type="number" name="ufiyat" id="ufiyat" min="0">
        </div>

        <div class="form-group">
            <label for="ukategori"> Urun ismi:</label>
            <select name="ukategori" id="ukategori">
                <option value="1">Telefon</option>
                <option value="2">Bilgisayar</option>
                <option value="3">Teblet</option>
            </select>
        </div>
        <div class="form-group">
            <label for="ufoto"> Urun Fotografi: </label>
            <input type="file" name="ufoto" id="ufoto">
        </div>

        <div class="form-group">
            <label for="urenk"> Urun Rengi: </label>
            <input type="radio" name="urenk" id="urenk" value="mavi">Mavi
            <input type="radio" name="urenk" id="urenk" value="gri">Gri
        </div>
        <div class="form-group">
            <label for="ufiyat"> Urun Fiyat: </label>
            <input type="checkbox" name="ureklam[]" id="ureklam" value="internet">Ineternet
            <input type="checkbox" name="ureklam[]" id="ureklam" value="Televizyon">Televizyon
            <input type="checkbox" name="ureklam[]" id="ureklam" value="sm">Sosyal Medya
        </div>

            <div class="form-group">
                <input type="submit" name="submit" value="Urun Kaydet" class="btn btn-primary">

            </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    
</body>
</html>
    <?php require_once("footer.php") ?>