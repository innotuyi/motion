<?php
include('./layout/header.php');
include('./connection/connection.php');
include('./function/function.php');
?>
 <div class="col-sm-7 mt-5  ">
   <div class="row mx-5 p-2">
   <div class="col-sm-5 mx-3 mt-5 ">
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Category">
   Add Category
  </button>
   </div>
  

           <!-- table -->
           <div class="mx-t mt-5 text-center">
           <p class="bg-dark text-white p-2">Categories</p>
          

           <table class="table table-dark ">
                  <thead>
                    <tr>
                        <th>#</th>
                      <th>Name</th>
                      <th  colspan='2'>Action</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $categories= category();
                   foreach($categories as $cat){ ?>
                   <tr>
                 <td> <?php echo ($cat->CaId);?></td>
                   <td> <?php echo($cat->CaName);?></td>
                   <td><a  class ="btn btn-primary" href='viewUser.php? id=<?php echo($cat->CaId); ?>' title='View Record' data-toggle='tooltip'> <i class="fa fas-eye"></i></i>view</td>
                   <td><a  class ="btn btn-secondary" href='editCategory.php? u=<?php echo($cat->CaId); ?>' title='Edit Record' data-toggle='tooltip'> <i class="fa fas-edit"></i></i>Edit</td>
                   <td><a   class ="btn btn-danger"  href='register.php?dele=<?php echo($cat->CaId); ?>' title='Delete Record' data-toggle='tooltip'> <i class="fa fas-trash"></i>Delete</i></td>
                   </tr>
                   
                    <?php
                    }
                    ?>
                  
                  </tbody>
                </table>
           </div>
           <div >
             <!-- end of table -->
 </a></div>
           
   </div>

 
  </div>

  
</div>




  <?php
include('./layout/footer.php');


 ?>
