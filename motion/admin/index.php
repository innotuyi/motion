<?php
include('./layout/header.php');
include('./connection/connection.php');

include('./function/function.php');
?>

   <div class="col-sm-9 mt-5">
   <div class="row mx-5 text-center">
   <!-- one card -->
      <div class="col-sm-4 mt-5">
          <div class="card text-white bg-danger" style="max-width:18rem">

                <div class="card-header">courses</div>
                <div class="card-body">
                <h1 class ="card-tittle">
                      <?php
                        $stmt = $conn->prepare("SELECT * FROM courses ");
                        $stmt->execute();
                         $stmt->rowCount();

                         echo( $stmt->rowCount());


                      ?>
                </h1>
                <a href="" class="btn text-white ">view</a>
                </div>
          </div>
      </div>
        <!-- one card -->
      <div class="col-sm-4 mt-5">
          <div class="card text-white bg-success" style="max-width:18rem">

                <div class="card-header">Payment</div>
                <div class="card-body">
                <h1 class ="card-tittle">
                <?php
                        $stmt = $conn->prepare("SELECT * FROM payment ");
                        $stmt->execute();
                         $stmt->rowCount();

                         echo( $stmt->rowCount());
;

                      ?>
                </h1>

                <a href="" class="btn text-white ">view</a>
                </div>
          </div>
      </div>

        <!-- one card -->
        <div class="col-sm-4 mt-5">
          <div class="card text-white bg-primary" style="max-width:18rem">

                <div class="card-header">Order</div>
                <div class="card-body">
                <h1 class ="card-tittle">
                <?php
                        $stmt = $conn->prepare("SELECT * FROM order ");
                        $stmt->execute();
                         $stmt->rowCount();

                         echo( $stmt->rowCount());
;

                      ?>
                </h1>
                <a href="" class="btn text-white ">view</a>
                </div>
          </div>
      </div>
        <!-- one card -->
        <div class="col-sm-4 mt-5">
          <div class="card text-white bg-danger" style="max-width:18rem">

                <div class="card-header">Lessons</div>
                <div class="card-body">
                <h1 class ="card-tittle">
                <?php
                        $stmt = $conn->prepare("SELECT * FROM lesson ");
                        $stmt->execute();
                         $stmt->rowCount();

                         echo( $stmt->rowCount());


                      ?>
                </h1>
                <a href="" class="btn text-white ">view</a>
                </div>
          </div>
      </div>
        <!-- one card -->
      <div class="col-sm-4 mt-5">
          <div class="card text-white bg-success" style="max-width:18rem">

                <div class="card-header">Student</div>
                <div class="card-body">
                <h1 class ="card-tittle">
                <?php
                        $stmt = $conn->prepare("SELECT * FROM student ");
                        $stmt->execute();
                         $stmt->rowCount();

                         echo( $stmt->rowCount());


                      ?>
                </h1>
                <a href="" class="btn text-white ">view</a>
                </div>
          </div>
      </div>

        <!-- one card -->
        <div class="col-sm-4 mt-5">
          <div class="card text-white bg-primary" style="max-width:18rem">

                <div class="card-header">Users</div>
                <div class="card-body">
                <h1 class ="card-tittle">
                <?php
                        $stmt = $conn->prepare("SELECT * FROM users ");
                        $stmt->execute();
                         $stmt->rowCount();

                         echo( $stmt->rowCount());

                      ?>
                </h1>
                <a href="" class="btn text-white ">view</a>
                </div>
          </div>
      </div>
          <!-- one card -->
           </div>
 <!-- end of card -->

<?php
include('./layout/footer.php')

?>