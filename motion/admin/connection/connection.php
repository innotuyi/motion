<?php

  try{
   
    $conn = new PDO('mysql:host=localhost; dbname=motion','root','' );
  }

  catch(PDOException $e){
    die('Connection Failed');
  }

?>