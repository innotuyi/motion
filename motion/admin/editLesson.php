<?php
include('./layout/header.php');
include('./connection/connection.php');
include('./function/function.php');
?>

<?php
if($_GET['u']) {

    $lesson=findLessonByid($_GET['u']);  
}
?>




 <div class="col-sm-7 mt-5  ">
   <div class="row mx-5 p-2">

   <div class="col-sm-5 mx-3 mt-5 ">
   <h2 class="text-center">Edit Lesson</h2>
   </div>
  
   <form id="studRegForm" action="register.php" method="POST"  enctype="multipart/form-data">
   <div class="form-group">
       <i class="fas fa-user"></i> <label for="name"></label>

        <small id="statusMsg1"></small>
        <input type="hidden" class="form-control" id="stuname"  name="id" value =<?php echo $lesson->LessonId; ?> >
       
      </div>
     <div class="form-group">
       <i class="fas fa-user"></i> <label for="name"></label>

        <small id="statusMsg1"></small>
        <input type="hidden" class="form-control" id="stuname"  name="courseid" value =<?php echo $lesson->CourseId; ?> >
      </div>
      <div class="form-group">
       <i class="fas fa-user"></i> <label for="name"></label>

        <small id="statusMsg1"></small>
        <input type="hidden" class="form-control" id="stuname"  name="userid" value =<?php echo $lesson->UserId; ?> >
       
      </div>
     <div class="form-group">
      <i class="fas fa-envelope"></i> <label for="email">Name</label>
      <small id="statusMsg2"></small>
       <input type="hidden" class="form-control" id="stuemail"  name="name" value =<?php echo $lesson->LessonName ; ?>>
    
     </div>
     <div class="form-group">
       <i class="fas fa-key"></i><label for="pass">description</label>
       <small id="statusMsg3"></small>
       <input type="texxt" class="form-control" id="studpass" name="desc" value =<?php echo $lesson->LessonDesc; ?>>
     </div>
     <div class="form-group">
       <i class="fas fa-key"></i><label for="pass">video</label>
       <small id="statusMsg3"></small>video
       <input type="file" class="form-control" id="studpass" name="video" value =<?php echo $lesson->video; ?>>
     </div>
   
     <br>
     <div class="form-group">
 <input type="submit" class="form-control bg-danger" name="editlesson" id="btn" value="Edit ">
 </div>
     
   </form>
 
   </div>

 
  </div>

  
</div>




  <?php
include('./layout/footer.php');


 ?>
