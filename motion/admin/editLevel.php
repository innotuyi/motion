<?php
include('./layout/header.php');
include('./connection/connection.php');
include('./function/function.php');
?>

<?php
if($_GET['u']) {

    $level=findLevelByid($_GET['u']);  
}
?>




 <div class="col-sm-7 mt-5  ">
   <div class="row mx-5 p-2">

   <div class="col-sm-5 mx-3 mt-5 ">
   <h2 class="text-center">Edit level</h2>
   </div>
  
   <form method='POST'  action ="register.php" id="levelRegisterForm" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name"> id</label>
    <small id="courseMsg1"></small>
    <input type="hidden" class="form-control" id="name"  value =<?php echo $level->id; ?>  name="id" >   
  </div>
  <br>
  <small id="courseMsg"></small>
  <div class="form-group">
    <label for="name"> Category name</label>
    <small id="courseMsg1"></small>
    <input type="text" class="form-control" id="name"  value =<?php echo $level->name; ?>  name="name" >   
  </div>
  <br>
  <small id="courseMsg"></small>
 <div class="form-group">
 <input type="submit" class="form-control" name="editlevel" id="btn" value="Edit ">
 </div>
 <a href="courses.php" class="bt btn-dager">
 <i class="fas fa-plus fa-2x"></i>Edit level
 </a></div>
           
   </div>

 
  </div>

  
</div>




  <?php
include('./layout/footer.php');


 ?>
a