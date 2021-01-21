<?php
include('./layout/header.php');
include('./connection/connection.php');
include('./function/function.php');
?>

<?php
if($_GET['u']) {

    $course=findCourseByid($_GET['u']);  
}
?>




 <div class="col-sm-7 mt-5  ">
   <div class="row mx-5 p-2">

   <div class="col-sm-5 mx-3 mt-5 ">
   <h2 class="text-center">Edit Course</h2>
   </div>
  
   <form id="studRegForm" action="register.php" method="POST" enctype="multipart/form-data">
   <div class="form-group">
       <i class="fas fa-user"></i> <label for="name"></label>

        <small id="statusMsg1"></small>
        <input type="hidden" class="form-control" id="stuname"  name="id" value =<?php echo $course->CourseId; ?> >
       
      </div>
     <div class="form-group">
       <i class="fas fa-user"></i> <label for="name"></label>

        <small id="statusMsg1"></small>
        <input type="hidden" class="form-control" id="stuname"  name="catid" value =<?php echo $course->CaId; ?> >
       
      </div>
     <div class="form-group">
      <i class="fas fa-envelope"></i> <label for="email"></label>
      <small id="statusMsg2"></small>
       <input type="hidden" class="form-control" id="stuemail"  name="levelid" value =<?php echo $course->levelId ; ?>>
    
     </div>
     <div class="form-group">
       <i class="fas fa-key"></i><label for="pass">Name</label>
       <small id="statusMsg3"></small>
       <input type="texxt" class="form-control" id="studpass" name="name" value =<?php echo $course->CourseName; ?>>
     </div>
     <div class="form-group">
       <i class="fas fa-key"></i><label for="pass">description</label>
       <small id="statusMsg3"></small>
       <input type="text" class="form-control" id="studpass" name="description" value =<?php echo $course->description; ?>>
     </div>
     <div class="form-group">
       <i class="fas fa-key"></i><label for="pass">Duration</label>
       <small id="statusMsg3"></small>
       <input type="number" class="form-control" id="studpass" name="duration" value =<?php echo $course->duration; ?>>
     </div>
     <div class="form-group">
       <i class="fas fa-key"></i><label for="pass">image</label>
       <small id="statusMsg3"></small>
       <input type="file" class="form-control" id="studpass" name="course_img" value =<?php echo $course->image; ?>>
     </div>
     <div class="form-group">
       <i class="fas fa-key"></i><label for="pass"> price</label>
       <small id="statusMsg4"></small>
       <input type="number" class="form-control" id="confirm" name="price" value =<?php echo $course->price; ?>>
     </div>
     <br>
     <div class="form-group">
 <input type="submit" class="form-control bg-danger" name="editcourse" id="btn" value="Edit ">
 </div>
     
   </form>
 
   </div>

 
  </div>

  
</div>




  <?php
include('./layout/footer.php');


 ?>
