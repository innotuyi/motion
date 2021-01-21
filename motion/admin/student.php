<?php
include('./layout/header.php');
include('./connection/connection.php');
include('./function/function.php');
?>
 <div class="col-sm-9 mt-5">
   <div class="row mx-5 text-center">
     <!-- table -->
           <div class="mx-t mt-5 text-center">
           <p class="bg-dark text-white p-2">Registered Students</p>

           <table class="table bg-dark text-light">
                  <thead>
                    <tr>
                     <th>#</th>
                      <th>Name</th>
                      <th> Email</th>
                      <th>Phone</th>
                      <th>Password</th>
                        <th colspan="2">Action</th>
                        <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  
                  <?php
                  $students= student();
                   foreach($students as $student){ ?>
                   <tr>
                 <td><?php echo ($student->SId);?></td>
                 <td><?php echo ($student->StudentName);?></td>
                 <td><?php echo ($student->StudentEmail);?></td>
                 <td><?php echo ($student->StudentPhone);?></td>
                 <td><?php echo ($student->StudentPassword);?></td>
                   <td><a  class="btn btn-primary" href='view.php? id=<?php echo ($student->SId); ?>' title='View Record' data-toggle='tooltip'> <i class="fa fas-eye"></i></i>view</td>
                   <td><a  class="btn btn-secondary" href='editStudent.php?u=<?php echo ($student->SId); ?>' title='View Record' data-toggle='tooltip'> <i class="fa fas-edit"></i></i>Edit</td>
                   <td><a class="btn btn-danger" href='register.php?d=<?php echo ($student->SId); ?>' title='View Record' data-toggle='tooltip'> <i class="fa fas-trash"></i>Delete</i></td>
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
  include("./layout/footer.php")

 ?>
