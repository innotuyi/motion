
<?php
include('layout/header.php');

?>

<h2>Courses</h2>

<div class="contaner-fluid bg-dark">
    <div class="row">

        <img src="image/courses.jpg" alt="" style="width:100%; height:400px;object-fit:cover;box-shadow:10px">
        
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">

        <div class="car-body">
            <h2 class="card-title">course name:photoshop</h2>
            <p>Description:loremloremloremloremloremloremloremloremloremlorem</p>
            <p class="card-text">Duration:10days</p>
            <form action="">
                
                <p class="card-text d-line"> price:<small><del>&#8377 200</del> 
                          <span class="font-weight-bold">&#8377 200</span></small></p>
                <button class="btn btn-primary btn-lg text-white font-weight-bold" type="submit" name="buy" value="Buy Now"></button>
            </form>

        </div>
        </div>
    </div>
</div>


<?php
include("layout/footer.php")

?>