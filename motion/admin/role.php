<?php
include('./layout/header.php');
include('./connection/connection.php');
include('./function/function.php');
?>
 <div class="col-sm-7 mt-5  ">
   <div class="row mx-5 p-2">
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#role">
    Add New Level
  </button>
   <div class="col-sm-5 mx-3 mt-5 ">

   <h2 class="text-center">Add role</h2>
   </div>

           <!-- table -->
           <div class="mx-t mt-5 text-center">
           <p class="bg-dark text-white p-2">Roles</p>

           <table class="table bg-dark text-light">
                  <thead>
                    <tr>
                     <th>#</th>
                      <th>Name</th>
                     <th colspan="2">Action</th>
                        <th></th>
                    </tr>
                  </thead>
                  <tbody>
                   
                  <?php
                  $roles=role();
                   foreach($roles as $role){ ?>
                   <tr>
                 <td><?php echo ($role->RoleId);?></td>
                 <td><?php echo ($role->RoleName);?></td>
                 <td><a href='view.php? id=<?php echo($role->RoleId); ?>' title='View Record' data-toggle='tooltip'> <i class="fa fas-eye"></i></i>view</td>
                   <td><a href='editRole.php?u=<?php echo($role->RoleId); ?>' title='View Record' data-toggle='tooltip'> <i class="fa fas-edit"></i></i>Edit</td>
                   <td><a href='register.php?dr=<?php echo($role->RoleId); ?>' title='View Record' data-toggle='tooltip'> <i class="fa fas-trash"></i>Delete</i></td>
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
