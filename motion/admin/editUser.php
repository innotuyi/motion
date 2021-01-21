<?php
include('./layout/header.php');
include('./connection/connection.php');
include('./function/function.php');
?>

<?php
if($_GET['u']) {

    $user=findUserByid($_GET['u']);  
}
?>




 <div class="col-sm-7 mt-5  ">
   <div class="row mx-5 p-2">

   <div class="col-sm-5 mx-3 mt-5 ">
   <h2 class="text-center">Edit user</h2>
   </div>
  
   <form id="studRegForm" action="register.php" method="POST">
   <div class="form-group">
       <i class="fas fa-user"></i> <label for="name"></label>

        <small id="statusMsg1"></small>
        <input type="hidden" class="form-control" id="stuname"  name="id" value =<?php echo $user->id; ?> >
       
      </div>
     <div class="form-group">
       <i class="fas fa-user"></i> <label for="name"></label>

        <small id="statusMsg1"></small>
        <input type="hidden" class="form-control" id="stuname"  name="roleid" value =<?php echo $user->RoleId; ?> >
       
      </div>
     <div class="form-group">
      <i class="fas fa-envelope"></i> <label for="email">Name </label>
      <small id="statusMsg2"></small>
       <input type="text" class="form-control" id="stuemail"  name="name" value =<?php echo $user->name; ?>>
    
     </div>
     <div class="form-group">
       <i class="fas fa-key"></i><label for="pass">Email</label>
       <small id="statusMsg3"></small>
       <input type="email" class="form-control" id="studpass" name="email" value =<?php echo $user->email; ?>>
     </div>
     <div class="form-group">
       <i class="fas fa-key"></i><label for="pass">Phone</label>
       <small id="statusMsg3"></small>
       <input type="number" class="form-control" id="studpass" name="phone" value =<?php echo $user->phone; ?>>
     </div>
     <div class="form-group">
       <i class="fas fa-key"></i><label for="pass"> Password</label>
       <small id="statusMsg4"></small>
       <input type="password" class="form-control" id="confirm" name="password" value =<?php echo $user->password; ?>>
     </div>
     <br>
     <div class="form-group">
 <input type="submit" class="form-control bg-danger" name="edituser" id="btn" value="Edit ">
 </div>
     
   </form>
 
   </div>

 
  </div>

  
</div>




  <?php
include('./layout/footer.php');


 ?>
