<?php
include('layout/header.php');

?>

     <!-- start of video background -->
     <div class="container-fluid remove-vid-margin">
         <div class="vid-parent">
             <video src="video/back.mp4"  playinline autoplay muted loop></video>
             <div class="vid-overlay"></div>
         </div>
         <div class="vid-content">
             <h1 class="my-content">
             "Don’t bunt. Aim out of the ballpark. Aim for the company of immortals." -- David Ogilvy, advertising tycoon, known as the "Father of Advertising"
             </h1>
                <small>Design can be art. Design can be aesthetics. Design is so simple, that's why it is so complicated." -- Paul Rand, graphic designer</small>
             <br><br>
             <a href="" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#student" style="font-size:1rem">Get Started</a>
         </div>
         </div>
     <!-- end of video background -->

          
       <!-- End of Most popular courses -->

         <!-- start contact us  -->
 
         <div style="background-color:#ffcd42">
         <div class="container mt-4">
             <h2 class="text-center   mb-4"> <span class="text-danger">Get In Touch</span></h2>
             <div class="row ">
                 <div class="col-md-6">
                     <form action="">
                         <div class="form-group">
                             <label for="name"></label>
                             <input type="text" class="form-control" placeholder="Enter  your name" name="name">
                         </div>
                         <div class="form-group">
                            <label for="name"></label>
                            <input type="text" class="form-control" placeholder="Enter your subject" name="subject">
                        </div>
                        <div class="form-group">
                            <label for="name"></label>
                            <input type="text" class="form-control" placeholder="Enter your email">
                        </div>
                        <br>
                        <div class="form-group">
                           
                            <textarea name="" id="" cols="90" rows="3" name="comment" placeholder="How we can help  you?" class="form-control"></textarea>
                            
                        </div>

                        <br>
                        <div class="form-group">
                            <input type="submit"  name= "submit"  value = "Send" class="form-control btn btn-danger">
                        </div>
                     </form>

                 </div>

                   <!-- start Contact second column -->
                   <div class="col-md-6 text-center text-center">
                       <!-- <h4>Company</h4>
                       <p>Contact Number:8383984648<br>
                           Email:Innocen@gmail.com<br>
                       </p> -->
                       <img src="image/chat1.jpg" alt=""  width="100%">
                   </div>
                    <!-- End  Conta
                        ct second column -->
             </div>
         </div>
         
         </div>
         
         <!-- start contact us  -->





         <?php
         include("layout/footer.php")

         ?>

       