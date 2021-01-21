<?php
include('./layout/header.php');
include('./connection/connection.php');
include('./function/function.php');
?>
 <div class="col-sm-7 mt-5  ">
   <div class="row mx-5 p-2">
  
   <div class="col-sm-5 mx-3 mt-5 ">
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Add New  User
  </button>
   </div>
  
 
           <!-- table -->
           <div class="mx-t mt-5 text-center">
           <p class="bg-dark text-white p-2"> Users</p>

           <table class="table bg-dark text-light">
                  <thead>
                    <tr>
                     <th>#</th>
                      <th>Role Id</th>
                      <th> Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Password</th>
                        <th colspan="2">Action</th>
                        <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  
                  <?php
                  $users= user();
                   foreach($users as $user){ ?>
                   <tr>
                 <td><?php echo ($user->id);?></td>
                 <td><?php echo ($user->RoleId);?></td>
                 <td><?php echo ($user->name);?></td>
                 <td><?php echo ($user->email);?></td>
                 <td><?php echo ($user->phone);?></td>
                 <td><?php echo ($user->password);?></td>
                <td><a class="btn btn-primary" href='view.php? id=<?php echo ($user->id); ?>' title='View Record' data-toggle='tooltip'> <i class="fa fas-eye"></i></i>view</td>
                <td><a class="btn btn-secondary" href='edituser.php?u=<?php echo ($user->id); ?>' title='View Record' data-toggle='tooltip'> <i class="fa fas-edit"></i></i>Edit</td>
                   <td><a class="btn btn-danger" href='register.php?du=<?php echo ($user->id); ?>' title='View Record' data-toggle='tooltip'> <i class="fa fas-trash"></i>Delete</i></td>
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

  
</div>




  <?php
include('./layout/footer.php');


 ?>
