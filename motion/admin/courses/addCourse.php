<?php
include_once("../connection/connection.php");
if(isset($_POST['courseRegister']) && isset($_POST['name']) && isset($_POST['desc']) && isset($_POST['duration']) && isset($_POST['price']) && isset($_POST['img'])) {


    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $duration = $_POST['duration'];
    $price = $_POST['price'];
    $target_dir = "../image/";
    $file = basename($_FILES["img"]["name"]);
     $target_file = $target_dir . basename($_FILES["img"]["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);



    $sql = " INSERT INTO courses(CourseName, description, duration, image, price) VALUES('$name', 
    '$desc', '$duration','$price','$file')";

    if($conn->query($sql)) {
        echo json_encode("ok");
    } else {
        echo json_encode("failed");
    }
    
}


?>