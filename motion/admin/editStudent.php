<?php
include('./layout/header.php');
include('./connection/connection.php');
include('./function/function.php');
?>

<?php
if($_GET['u']) {

    $student=findStudentByid($_GET['u']);  
}
?>




 <div class="col-sm-7 mt-5  ">
   <div class="row mx-5 p-2">

   <div class="col-sm-5 mx-3 mt-5 ">
   <h2 class="text-center">Edit student</h2>
   </div>
  
   <form id="studRegForm" action="register.php" method="POST">
   <div class="form-group">
       <i class="fas fa-user"></i> <label for="name"></label>

        <small id="statusMsg1"></small>
        <input type="hidden" class="form-control" id="stuname"  name="stuid" value =<?php echo $student->SId; ?> >
       
      </div>
     <div class="form-group">
       <i class="fas fa-user"></i> <label for="name">Name</label>

        <small id="statusMsg1"></small>
        <input type="text" class="form-control" id="stuname"  name="studname" value =<?php echo $student->StudentName; ?> >
       
      </div>
     <div class="form-group">
      <i class="fas fa-envelope"></i> <label for="email">Email </label>
      <small id="statusMsg2"></small>
       <input type="email" class="form-control" id="stuemail"  name="studemail" value =<?php echo $student->StudentEmail; ?>>
    
     </div>
     <div class="form-group">
       <i class="fas fa-key"></i><label for="pass">Phone</label>
       <small id="statusMsg3"></small>
       <input type="number" class="form-control" id="studpass" name="studphone" value =<?php echo $student->StudentPhone; ?>>
     </div>
     <div class="form-group">
       <i class="fas fa-key"></i><label for="pass"> Password</label>
       <small id="statusMsg4"></small>
       <input type="password" class="form-control" id="confirm" name="studpass" value =<?php echo $student->StudentPassword; ?>>
     </div>
     <br>
     <div class="form-group">
 <input type="submit" class="form-control bg-danger" name="editstudent" id="btn" value="Edit ">
 </div>
     
   </form>
 
   </div>

 
  </div>

  
</div>




  <?php
include('./layout/footer.php');


 ?>
