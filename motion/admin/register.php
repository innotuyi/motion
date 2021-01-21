<?php
include("./connection/connection.php");
include('./function/function.php');
// Register user  Start

if (isset($_POST["RegisterUser"])) {

    $urole =$_POST['roleId'];
    $uname = $_POST['uname'];
    $uemail = $_POST['uemail'];
    $uphone = $_POST['uphone'];
    $upassword = $_POST['upassword'];

    $sql = "INSERT INTO  users (RoleId,name,email,phone,password) VALUES('$urole', '$uname','$uemail','$uphone','$upassword')";
  if($conn->query($sql)) 
    {
        header("location:users.php");
    } else {
       

        echo("query failed");
        
    }


   
}

if (isset($_POST["edituser"])) {

    $id = $_POST['id'];
    $roleId = $_POST['RoleId'];
    $name= $_POST['name'];
    $email = $_POST['email'];
    $phone= $_POST['phone'];
    $pass= $_POST['password'];
    $sql = "UPDATE users set name ='$name', email='$email', phone='$phone', password='$pass'
     WHERE id = '$id'";

    if($conn->query($sql)) 
    {

        header("location:users.php");
    } else {
        exit("failed");
        
    }
   
}

if (isset($_GET["du"])) {

    $id = $_GET['du'];
   $sql = "DELETE  FROM users WHERE id = '$id' ";
    if($conn->query($sql)) 
    {

        header("location:users.php");
    } else {
        exit("failed");
        
    }  
}

//register user End

 


//Register course

if (isset($_POST["Register"])) {
    $cat =$_POST['CatId'];
    $level= $_POST['LevelId'];
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $duration = $_POST['duration'];
    $price = $_POST['price'];
    $target_dir = "./image/";
    $file =$_FILES["course_image"]["name"]; 
    $target_file = $target_dir . basename($_FILES["course_image"]["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if(file_exists($target_file)) {

         $store =  $file =$_FILES["course_image"]["name"]; 

         echo($store."Is already exists");

    } else {


    $sql = "INSERT INTO courses(CaId,levelId,CourseName, description, duration, image, price) 
    VALUES( '$cat', '$level', '$name', 
    '$desc', '$duration','$file','$price')";

    if($conn->query($sql)) 
    {

        move_uploaded_file($_FILES["course_image"]["tmp_name"], $target_file);  
        header("location:courses.php");
    } else {
        exit("failed");
        
    }
}
   
 }
if (isset($_POST["editcourse"])) {

    $id = $_POST['id'];
    $caid = $_POST['catid'];
    $levelid= $_POST['levelid'];
    $name = $_POST['name'];
    $desc= $_POST['description'];
    $duration= $_POST['duration'];
    $price= $_POST['price'];
    $target_dir = "./image/";
    $file= $_FILES['course_img']['name'];
    $target_file = $target_dir . basename($_FILES["course_img"]["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
  
    $courses=findCourseByImage($id);
    
    if( $file==null) {

        $imagedata=$courses->image;
    } else {
        if( $img_path=$target_file. $imagedata) {

            unlink($img_path);
            $imagedata= $file;

        }

    }
 $sql = "UPDATE courses set CourseName ='$name', description='$desc', duration='$duration', 
    image='$imagedata', price='$price'
     WHERE CourseId = '$id'";

    if($conn->query($sql)) 
    {
        if( $file==null) {

            echo("update with exististing image");

         
        } else {
    
            move_uploaded_file($_FILES["course_img"]["tmp_name"], $target_file);  
            header("location:courses.php");
        }

       
       
    } else {
        exit("failed");
        
    }
   
}




if (isset($_GET["dco"])) {

    $id = $_GET['dco'];



   $sql = "DELETE  FROM courses WHERE CourseId = '$id' ";
    if($conn->query($sql)) 
    {

        header("location:courses.php");
    } else {
        exit("failed");
        
    }  
}

// Register course End

// Register Lesson Start

if (isset($_POST["RegisterVideo"])) {

    $_course=$_POST['CourseId'];
    $_user=$_POST['id'];
    $lname = $_POST['Lname'];
    $ldesc = $_POST['Ldesc'];
    $target_dir = "./video/";
    $file =$_FILES["Lvideo"]["name"]; 
    $target_file = $target_dir . basename($_FILES["Lvideo"]["tmp_name"]);
       if(file_exists( $target_file)) {

           $store =$_FILES["Lvideo"]["name"]; 
            echo($store."Is Already exists");


       } else {
        $sql = "INSERT INTO lesson(CourseId, UserId,LessonName,LessonDesc,video) VALUES('$_course', '$_user','$lname', '$ldesc','$file')";

        if($conn->query($sql)) 
        {
    
            move_uploaded_file($_FILES["Lvideo"]["tmp_name"], $target_file);  
            header("location:lessons.php");
        } else {
            exit("failed");
            
        }

       }

  
   
}
if (isset($_POST["editlesson"])) {

    $id = $_POST['id'];
    $caid = $_POST['courseid'];
    $levelid= $_POST['userid'];
    $name = $_POST['name'];
    $desc= $_POST['desc'];
    $target_dir = "./video/";
    $video =$_FILES["video"]["name"]; 
    $target_file = $target_dir . basename($_FILES["video"]["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    $videos=findLessonByid($id);
    
    if( $video == NULL ) {

        $videodata=$videos->video;
    } 

 $sql ="UPDATE lesson set LessonName ='$name', LessonDesc='$desc',  video=' $videodata'
   WHERE LessonId = '$id'";

    if($conn->query($sql)) 
    {
            move_uploaded_file($_FILES["video"]["tmp_name"], $target_file);  
            header("location:lessons.php");    
       
    } else {
        exit("failed");
        
    }
}

if (isset($_GET["dle"])) {

    $id = $_GET['dle'];
   $sql = "DELETE  FROM lesson WHERE LessonId = '$id' ";
    if($conn->query($sql)) 
    {

        header("location:lessons.php");
    } else {
        exit("failed");
        
    }  
}


// Register Lesson End


// Register Level Start
if (isset($_POST["Registerlevel"])) {
    $lname = $_POST['Lename'];
   
    $sql = "INSERT INTO level(name) VALUES('$lname')";

    if($conn->query($sql)) 
    {

        header("location:level.php");
    } else {
        exit("failed");
        
    }
}

if (isset($_POST["editlevel"])) {

    $id = $_POST['id'];
    $lname = $_POST['name'];
    $sql = "UPDATE level set name ='$lname' WHERE id = '$id'";

    if($conn->query($sql)) 
    {

        header("location:level.php");
    } else {
        exit("failed");
        
    }


   
}

if (isset($_GET["dc"])) {

    $id = $_GET['dc'];
   $sql = "DELETE  FROM level WHERE id = '$id' ";
    if($conn->query($sql)) 
    {

        header("location:level.php");
    } else {
        exit("failed");
        
    }  
}







// Register Level End

// Register category Start
if (isset($_POST["registerCategory"])) {
    $lname = $_POST['cname'];
    $sql = "INSERT INTO category(CaName) VALUES('$lname')";

    if($conn->query($sql)) 
    {

        header("location:categories.php");
    } else {
        exit("failed");
        
    }


   
}
// Register Category  end
// edit  Category  
if (isset($_POST["edit"])) {

    $id = $_POST['CaId'];
    $lname = $_POST['editname'];
    $sql = "UPDATE category set CaName ='$lname' WHERE CaId = '$id'";

    if($conn->query($sql)) 
    {

        header("location:categories.php");
    } else {
        exit("failed");
        
    }


   
}
if (isset($_GET["dele"])) {

    $id = $_GET['dele'];
   $sql = "DELETE  FROM category WHERE CaId = '$id' ";
    if($conn->query($sql)) 
    {

        header("location:categories.php");
    } else {
        exit("failed");
        
    }


   
}





// edit Category  end


// Register Role Start

if (isset($_POST["RegisterRole"])) {
    $lname = $_POST['Loname'];
   
    $sql = "INSERT INTO role(Rolename) VALUES('$lname')";

    if($conn->query($sql)) 
    {

        header("location:role.php");
    } else {
        exit("failed");
        
    }
   
}

if (isset($_POST["editrole"])) {

    $id = $_POST['id'];
    $lname = $_POST['name'];
    $sql = "UPDATE role set RoleName ='$lname' WHERE RoleId = '$id'";

    if($conn->query($sql)) 
    {

        header("location:role.php");
    } else {
        exit("failed");
        
    }


   
}

if (isset($_GET["dr"])) {

    $id = $_GET['dr'];
   $sql = "DELETE  FROM role WHERE RoleId = '$id' ";
    if($conn->query($sql)) 
    {

        header("location:role.php");
    } else {
        exit("failed");
        
    }


   
}

// Register role  end


//edit student star
if (isset($_POST["editstudent"])) {

    $id = $_POST['stuid'];
    $name = $_POST['studname'];
    $email= $_POST['studemail'];
    $phone = $_POST['studphone'];
    $pass= $_POST['studpass'];
    $sql = "UPDATE student set StudentName ='$name', StudentEmail='$email', StudentPhone='$phone', StudentPassword='$pass'
     WHERE Sid = '$id'";

    if($conn->query($sql)) 
    {

        header("location:student.php");
    } else {
        exit("failed");
        
    }


   
}


if (isset($_GET["d"])) {

    $id = $_GET['d'];
   $sql = "DELETE  FROM student WHERE SId = '$id' ";
    if($conn->query($sql)) 
    {

        header("location:student.php");
    } else {
        exit("failed");
        
    }


   
}


//edit student end


?>