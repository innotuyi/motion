<?php
include('./layout/header.php');
include('./connection/connection.php');
include('./function/function.php');
?>
 <div class="col-sm-7 mt-5  ">
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#courses">
  <h3>Add New Course</h3>
  </button>
   <div class="row mx-5 p-2">
  
   
           <!-- table -->
           <div class="mx-t mt-5 text-center">
           <p class="bg-dark text-white p-2">Courses</p>
           <table class="table table-dark">
                  <thead>
                    <tr>
                     <th>#</th>
                      <th>Category</th>
                      <th> Level</th>
                      <th>Course</th>
                      <th> duration</th>
                       <th> Image</th>
                       <th>Price</th>
                        <th colspan="2">Action</th>
                        <th></th>
                    </tr>
                  </thead>
                  <tbody>
               
                
                  <?php
                  $courses= course();
                   foreach($courses as $course){ ?>
                   <tr>
                 <td><?php echo ($course->CourseId);?></td>
                 <td><?php echo ($course->CaName);?></td>
                 <td><?php echo ($course->name);?></td>
                 <td><?php echo ($course->CourseName);?></td>
                 <!-- <td><?php echo ($course->description);?></td> -->
                 <td><?php echo ($course->duration);?><span class="text-danger">Hours</span></td>
                 <td><img style='width:150px; height:160px;' src="./image/<?php echo($course->image);?>"></td>
                 <td><?php echo ($course->price);?></td>
                   <td><a  class="btn btn-primary" href='view.php?id=<?php echo($course->CourseId)?>' title='View Record' data-toggle='tooltip'> <i class="fa fas-eye"></i></i>view</td>
                   <td><a  class="btn btn-secondary" href='editcourse.php?u=<?php echo($course->CourseId); ?>' title='View Record' data-toggle='tooltip'> <i class="fa fas-edit"></i></i>Edit</td>
                   <td><a class="btn btn-danger" href='register.php?dco=<?php echo($course->CourseId); ?>' title='View Record' data-toggle='tooltip'> <i class="fa fas-trash"></i>Delete</i></td>
                   </tr>
                   
                    <?php
                    }
                    ?>
                  
                  </tbody>
                </table>         
           </div>
           <!-- end of table -->
           <div class="">
           
   </div>

 
  </div>

  
</div>




  <?php
include('./layout/footer.php');


 ?>
