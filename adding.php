<?php include 'header.php';
include 'connect.php';


// $sql = "INSERT INTO item (pname, pprice ,pcount ,ptype,pphoto,pdetails) 
// VALUES ('', '', '','','','')";



// if ($conn->query($sql) === TRUE) {
//     $last_id = $conn->insert_id;
//     echo "New record created successfully. Last inserted ID is: " . $last_id;
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }




?>
<div class="carousel slide b-4 m-4">
    <form method="POST" action="control.php">
        <div class="form-group">
            <label for="name">name of product</label>
            <input type="text" class="form-control" id="name" placeholder="get in your product name" name="name">
        </div>
        <div class="form-group">
            <label for="price"> price of product</label>
            <input type="number" class="form-control" id="price" placeholder="get in your product price" name="price">
        </div>
        <div class="form-group">
            <label for="price">counting of product</label>
            <input type="number" class="form-control" id="count" placeholder="get in numbers of product you have" name="count">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Product Type</label>
            <select class="form-control" id="exampleFormControlSelect1" name="type">
                <option>Hand made</option>
                <option>status</option>
                <option>Papyrus</option>
                <option>painting</option>

            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">product photo</label>
            <input type="file" class="form-control-file" id="name" name="photo">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">details</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="details"></textarea>
        </div>
        <button class="btn btn-primary" type="submit" name="submit" onclick="">get in</button>

    </form>
</div>
<?php include 'footer.php';

?>