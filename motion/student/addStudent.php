<?php

// if(!isset($_SESSION)) {
//     session-start()
// }
include_once("../connection/connection.php");

//Checking Already registered email
// if(isset($_POST['checkemail']) && isset($_POST['stuemail'])){

//  $stuemail = $_POST['stuemail'];
//  $sql = "SELECT stuemail FROM student WHERE  stuemail = '".$stuemail."'";
 
//      $result = $conn->query($sql);
//      $rows = $result->num_rows;
//      echo json_encode($rows);
    
// }

//Register student
if(isset($_POST['stusignup']) && isset($_POST['stuname']) && isset($_POST['stuemail']) &&isset($_POST['stupass'])) {


    $stuname = $_POST['stuname'];
    $stuemail = $_POST['stuemail'];
    $stupass = $_POST['stupass'];



    $sql = " INSERT INTO student(studentName, StudentEmail, StudentPassword) VALUES('$stuname', '$stuemail', '$stupass')";

    if($conn->query($sql)) {
        echo json_encode("ok");
    } else {
        echo json_encode("failed");
    }
    
}


//checking login

// if(isset($_POST['checkloginemail']) && isset($_POST['email']) && isset($_POST['pass']){


    
//     $email = $_POST['email'];
//     $pass = $_POST['pass'];



//     $sql = "SELECT stuEmail, stuPass FROM student WHERE stuEmail ='".$email."' AND  stuPass='".$pass."'";

//     $result = $conn->query($sql);
//     $row = $result->num_rows;

//     if($row == 1) {
//         echo json_encode($row);

//          $_SESSION['is_logged'] =true
//          $_SESSION['stuEmail'] =$email
//     } else if( $row == 0) {
//         echo json_encode($row);
//     }
    
// }


?>