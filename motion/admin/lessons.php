<?php
include('./layout/header.php');
include('./connection/connection.php');
include('./function/function.php');
?>
 <div class="col-sm-7 mt-5  ">
   <div class="row mx-5 p-2">
 

   <div class="col-sm-5 mx-3 mt-5 ">
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#lesson">
  <h3>Add New Lesson</h3>
  </button>
   </div>
  
   <!-- <form method='POST'  action ="register.php" id="courseRegisterForm" enctype="multipart/form-data">
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
</form> -->
           <!-- table -->

             <!-- table -->
           <div class="mx-t mt-5 text-center">
           <p class="bg-dark text-white p-2"> courses orderd</p>
           <table class="table bg-dark text-light">
                  <thead>
                    <tr>
                     <th>#</th>
                      <th> Lesson</th>
                      <th> Course </th>
                      <th>Author</th>
                     <th>Description</th>
                     <th>Price</th>
                       <th>video</th>
                        <th colspan="2">Action</th>
                        <th></th>
                    </tr>
                  </thead>
                  <tbody>
                 
                  <?php
                  $lessons= lesson();
                   foreach($lessons as $lesson){ ?>
                   <tr>
                 <td><?php echo ($lesson->LessonId);?></td>
                 <td><?php echo ($lesson->LessonName);?></td>
                 <td><?php echo ($lesson->CourseName);?></td>
                 <td><?php echo ($lesson->name);?></td>
                 <td><?php echo ($lesson->LessonDesc );?></td>
                 <td><?php echo ($course->price);?><span class="text-danger">FRW</span></td>
                  <td>
                 <video  style="width:200px; height:100px" controls>
                 <source src="./video/<?php echo($lesson->video);?>">
                 </video>
                 
                  </td>
                 
                   <td><a href='view.php? id=<?php echo($lesson->LessonId); ?>' title='View Record' data-toggle='tooltip'> <i class="fa fas-eye"></i></i>view</td>
                   <td><a href='editlesson.php?u=<?php echo($lesson->LessonId); ?>' title='View Record' data-toggle='tooltip'> <i class="fa fas-edit"></i></i>Edit</td>
                   <td><a href='register.php?dle=<?php echo($lesson->LessonId); ?>' title='View Record' data-toggle='tooltip'> <i class="fa fas-trash"></i>Delete</i></td>
                   </tr>
                   
                    <?php
                    }
                    ?>
                  
                  </tbody>
                </table>  
          
 </div>
           <!-- end of table -->
           
           
   </div>

 
  </div>

  
</div>




  <?php
include('./layout/footer.php');


 ?>
