<?php
include('./layout/header.php');
include('./connection/connection.php');
include('./function/function.php');
?>
 <div class="col-sm-7 mt-5  ">
   <div class="row mx-5 p-2">
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#level">
    Add New Level
  </button>

   <div class="col-sm-5 mx-3 mt-5 ">
  
   </div>
  

           <!-- table -->
    
           <p class="bg-dark text-white  text-center p-2">Levels</p>

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
                  $levels=level();
                   foreach($levels as $level){ ?>
                   <tr>
                 <td><?php echo ($level->id);?></td>
                 <td><?php echo ($level->name);?></td>
                 <td><a class="btn btn-primary"href='view.php? id=<?php echo($level->id); ?>' title='View Record' data-toggle='tooltip'> <i class="fa fas-eye"></i></i>view</td>
                   <td><a class="btn btn-secondary"href='editlevel.php?u=<?php echo($level->id); ?>' title='View Record' data-toggle='tooltip'> <i class="fa fas-edit"></i></i>Edit</td>
                   <td><a  class="btn btn-danger"href='register.php?dc=<?php echo($level->id); ?>' title='View Record' data-toggle='tooltip'> <i class="fa fas-trash"></i>delete</i></td>
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
