<?php
 function category() {

    global $conn;
    $data = $conn->prepare("SELECT * FROM category");
    $data->execute();
    $res = $data->fetchAll(PDO::FETCH_OBJ);
    return $res;

  }

  function level(){

    global $conn;
    $stmt = $conn->prepare("SELECT * FROM level ");

    $stmt->execute();       
    $data = $stmt->fetchAll(PDO::FETCH_OBJ);

     return $data;

  }
  
  function course(){

    global $conn;
    $stmt = $conn->prepare("SELECT courses.CourseId, courses.CourseName, category.CaName,level.name, courses.duration, courses.image,courses.price FROM courses LEFT join category ON category.CaId=courses.CaId LEFT JOIN level on level.id =courses.levelId order by courses.CourseId ASC");

    $stmt->execute();       
    $data = $stmt->fetchAll(PDO::FETCH_OBJ);

     return $data;

  }

  function role(){

    global $conn;
    $stmt = $conn->prepare("SELECT * FROM role ");

    $stmt->execute();       
    $data = $stmt->fetchAll(PDO::FETCH_OBJ);

     return $data;

  }
  function user(){

    global $conn;
    $stmt = $conn->prepare("SELECT * FROM users ");

    $stmt->execute();       
    $data = $stmt->fetchAll(PDO::FETCH_OBJ);

     return $data;

  }
  function student(){

    global $conn;
    $stmt = $conn->prepare("SELECT * FROM student ");

    $stmt->execute();       
    $data = $stmt->fetchAll(PDO::FETCH_OBJ);

     return $data;

  }
  function lesson(){

    global $conn;
    $stmt = $conn->prepare("SELECT lesson.LessonId,lesson.LessonName,courses.CourseName, users.name, lesson.LessonDesc, lesson.video FROM lesson join courses ON courses.CourseId=lesson.CourseId JOIN users on users.id =lesson.UserId ORDER BY lesson.LessonId");

    $stmt->execute();       
    $data = $stmt->fetchAll(PDO::FETCH_OBJ);

     return $data;

     
  }
  function findCategoryByid($id){
 
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM category WHERE  CaId = ?  LIMIT 1");

    $stmt->bindParam(1, $id);
    $stmt->execute();
        
    if ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
      return $data;
    }
  }
  function findStudentByid($id){
 
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM student WHERE  SId = ?  LIMIT 1");

    $stmt->bindParam(1, $id);
    $stmt->execute();
        
    if ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
      return $data;
    }
  }
  function findLevelByid($id){
 
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM level WHERE  id = ?  LIMIT 1");

    $stmt->bindParam(1, $id);
    $stmt->execute();
        
    if ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
      return $data;
    }
  }
  function findRoleByid($id){
 
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM role WHERE  RoleId = ?  LIMIT 1");

    $stmt->bindParam(1, $id);
    $stmt->execute();
        
    if ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
      return $data;
    }
  }

  function findUserByid($id){
 
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM users WHERE  id = ?  LIMIT 1");

    $stmt->bindParam(1, $id);
    $stmt->execute();
        
    if ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
      return $data;
    }
  }
  function findCourseByid($id){
 
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM courses WHERE  CourseId = ?  LIMIT 1");

    $stmt->bindParam(1, $id);
    $stmt->execute();
        
    if ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
      return $data;
    }
  }
  function findCourseByImage($id){
 
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM courses WHERE  CourseId = ?  LIMIT 1");

    $stmt->bindParam(1, $id);
    $stmt->execute();
        
    if ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
      return $data;
    }
  }
  





  function findLessonByid($id){
 
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM lesson WHERE  LessonId = ?  LIMIT 1");

    $stmt->bindParam(1, $id);
    $stmt->execute();
        
    if ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
      return $data;
    }
  }



?>