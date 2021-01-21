 
 <!-- Courses modal start -->
 
 
 <!-- The Modal -->
 <div class="modal fade" id="courses">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Courses</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form method='POST'  action ="register.php" id="courseRegisterForm" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name">name</label>
    <small id="courseMsg1"></small>
    <input type="text" class="form-control" id="name" name="name" placeholder="course name">
     </div>
<div class="form-group">
    <label for="exampleFormControlSelect1">Select Category</label>
    <select class="form-control form-control-lg" id="category" name="CatId" >
    <?php 
     $categories= category();
 foreach ($categories as $cat) {   ?>
  <option value="<?php echo ($cat->CaId); ?>">
       <?php echo ($cat->CaName); ?>
       </option>
<?php  }  ?>
       </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Select Course Level</label>
    <select class="form-control" id="exampleFormControlSelect1" name="LevelId">
    <?php 
     $levels = level();
 foreach ($levels as $level) {   ?>
  <option value="<?php echo ($level->id); ?>">
       <?php echo ($level->name); ?>
       </option>
<?php  }  ?>
       </select>
  </div>

  <div class="form-group">
    <label for="des">description</label>
    <small id="courseMsg2"></small>
    <input type="text" class="form-control" id="desc"  name ="desc" placeholder="description">
  </div>
  
  <div class="form-group">
    <label for="name">course duration</label>
    <small id="courseMsg3"></small>
    <input type="number" class="form-control" id="duration" name="duration" placeholder="duration">
    
  </div>
  <div class="form-group">
    <label for="name">course  price</label>
    <small id="courseMsg4"></small>
    <input type="number" class="form-control" id="price2" name="price" placeholder="selling price">
    
  </div>
  <div class="form-group">
    <label for="name">image</label>
    <small id="courseMsg5"></small>
    <input type="file" class="form-control" id="img" name="course_image">
    
  </div>
  <br>
  <small id="courseMsg"></small>
  
 
  <input type="submit" class="form-control btn btn-danger" name="Register" id="btn" value="Register">
</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

<!-- Courses modal end -->

 <!-- ---------------------------------Lesson start-------------------------------------------- -->

  <!-- The Modal -->
  <div class="modal fade" id="lesson">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        
   <form method='POST'  action ="register.php" id="courseRegisterForm" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name"> Lesson name</label>
    <small id="courseMsg1"></small>
    <input type="text" class="form-control" id="name" name="Lname" placeholder="Lesson Name">
    
  </div>
  <div class="form-group">
    <label for="name">Lesson description</label>
    <small id="courseMsg1"></small>
    <input type="text" class="form-control" id="name" name="Ldesc" placeholder="Lesson Description"> 
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Select Course Name</label>
    <select class="form-control form-control-lg" id="course" name="CourseId" >
    <?php 
     $courses= course();
 foreach ($courses as $course) {   ?>
  <option value="<?php echo ($course->CourseId); ?>">
       <?php echo ($course->CourseName); ?>
       </option>
      <?php  }  ?>
       </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Select user</label>
    <select class="form-control form-control-lg" id="user" name="id" >
    <?php 
     $users= user();
 foreach ($users as $user) {   ?>
  <option value="<?php echo ($user->id); ?>">
       <?php echo ($user->name); ?>
       </option>
      <?php  }  ?>
       </select>
  </div>
  <div class="form-group">
    <label for="name">video Lecture</label>
    <small id="courseMsg5"></small>
    <input type="file" class="form-control" id="video" name="Lvideo">
    
  </div>
  <br>
  <small id="courseMsg"></small>
  
 
  <input type="submit" class="form-control bg-danger" name="RegisterVideo" id="btn" value="Register">
</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>


  <!-- ---------------------------------Lesson End -------------------------------------------- -->
  
  

  <!-- ---------------------------------level Start -------------------------------------------- -->

  <!-- The Modal -->
  <div class="modal fade" id="level">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Level</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form method='POST'  action ="register.php" id="levelRegisterForm" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name"> Level name</label>
    <small id="courseMsg1"></small>
    <input type="text" class="form-control" id="name" name="Lename" placeholder="Lesson Name">
    
  </div>
  <br>
  <small id="courseMsg"></small>
  
 
  <input type="submit" class="  form-control btn btn-lg btn-danger" name="Registerlevel" id="btn" value="Register">
</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
   <!-- ---------------------------------level Start -------------------------------------------- -->




  <!-- The Modal -->
  <div class="modal fade" id="role">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Role</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         
   <form method='POST'  action ="register.php" id="levelRegisterForm" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name"> Role name</label>
    <small id="courseMsg1"></small>
    <input type="text" class="form-control" id="name" name="Loname" placeholder="Role Name">  
  </div>
  <br>
  <small id="courseMsg"></small>
   <input type="submit" class="btn form-control btn-danger" name="RegisterRole" id="btn" value="Register">
</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  
  <!-- -------------------------Role End-------------------------------------------- -->

  

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">User</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form method='POST'  action ="register.php" id="levelRegisterForm" enctype="multipart/form-data">
   <div class="form-group">
    <label for="exampleFormControlSelect1">User Type</label>
    <select class="form-control form-control-lg" id="courolerse" name="roleId" >
    <?php 
     $roles = role();
 foreach ($roles as $role) {   ?>
  <option value="<?php echo ($role->RoleId); ?>">
       <?php echo ($role->RoleName); ?>
       </option>
      <?php  }  ?>
       </select>
  </div>

  <div class="form-group">
    <label for="name">Name</label>
    <small id="courseMsg1"></small>
    <input type="text" class="form-control" id="name" name="uname" placeholder=" Your Name">
     </div>
    <div class="form-group">
    <label for="name"> Email</label>
    <small id="courseMsg1"></small>
    <input type="email" class="form-control" id="name" name="uemail" placeholder="Your Email">
     </div>
     <div class="form-group">
    <label for="name">Phone</label>
    <small id="courseMsg1"></small>
    <input type="number" class="form-control" id="name" name="uphone" placeholder="Phone Number">
     </div>
     <div class="form-group">
    <label for="name">Password</label>
    <small id="courseMsg1"></small>
    <input type="Password" class="form-control" id="name" name="upassword" placeholder="Your Password">
     </div>
  <input type="submit" class="btn btn-lg btn-primary" name="RegisterUser" id="btn" value="Register">
</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  
  
  
  
  
  
  
  
  <!-- category modal -->


  <!-- The Modal -->
  <div class="modal fade" id="Category">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Category</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form method='POST'  action ="register.php" id="levelRegisterForm" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name">Name</label>
    <small id="courseMsg1"></small>
    <input type="text" class="form-control" id="name" name="cname" placeholder="Category Name">   
  </div>
  <br>
  <small id="courseMsg"></small>
 <div class="form-group">
 <input type="submit" class="form-control btn-danger" name="registerCategory" id="btn" value="Register">
 </div>
</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    
  <!-- category modal end-->


   <!-- courses modal -->


  <!-- The Modal -->
  <div class="modal fade" id="Category">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Category</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">



        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    
  <!-- courses modal end-->



  

 
  












<footer class="container-fluid bg-dark text-center mt-5 p-2">
<small class="text-white">
    copyright &copy; 2021 Designed by Innocent
</small>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../js/ajaxrequest.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="js/all.min.js"></script>
</body>
</html>
