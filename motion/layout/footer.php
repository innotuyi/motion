

    </div>


<footer class="container-fluid bg-dark text-center mt-5 p-2">
<small class="text-white">
    copyright &copy; 2021 Designed by Innocent
</small>
</footer>

<!-- start of  student registration  -->

<!-- Modal -->
<div class="modal fade" id="student" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
 <div class="modal-header"  style="background-color:#ffcd42;padding:1rem">
   <h5 class="modal-title" id="exampleModalLabel">Student Registration</h5>
   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>
 <div  style="background-color:#ffcd42;padding:1rem">
 <div class="modal-body">

<form id="studRegForm">
     <div class="form-group">
       <i class="fas fa-user"></i> <label for="name">Name</label>

        <small id="statusMsg1"></small>
        <input type="email" class="form-control" id="stuname"  name="studname" placeholder=" Name">
       
      </div>
     <div class="form-group">
      <i class="fas fa-envelope"></i> <label for="email">Email address</label>
      <small id="statusMsg2"></small>
       <input type="email" class="form-control" id="stuemail"  name="studname" placeholder=" email">
       <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
     </div>
     <div class="form-group">
       <i class="fas fa-key"></i><label for="pass">Password</label>
       <small id="statusMsg3"></small>
       <input type="password" class="form-control" id="studpass" name="stupass" placeholder="Password">
     </div>
     <div class="form-group">
       <i class="fas fa-key"></i><label for="pass">Confirm Password</label>
       <small id="statusMsg4"></small>
       <input type="password" class="form-control" id="confirm" name="stupass" placeholder="Password">
     </div>
     
   </form>
 
 </div>
 <div class="modal-footer">
 <span  id="sucessMsg"></span>
   <button  class="btn btn-primary" onclick="addStud()" id="signup">Sign up</button>

   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
   </div>
 </div>
</div>
</div>
</div>

<!-- end of  student registration  -->


<!-- start of student login -->
<div class="modal fade" id="studentlogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
 <div class="modal-header" style="background-color:#ffcd42;padding:1rem">
   <h5 class="modal-title" id="exampleModalLabel">Student Login</h5>
   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>
 <div class="form-back"  style="background-color:#ffcd42;padding:1rem">

 <div class="modal-body">


          
            <form>
     <div class="form-group">
      <i class="fas fa-envelope"></i> <label for="email">Email</label>
       <input type="email" class="form-control" id="email"  name="email" placeholder=" email" autocomplete="false">

     </div>
     <div class="form-group">
       <i class="fas fa-key"></i><label for="pass">Password</label>
       <input type="password" class="form-control" name ="pass" id="pass" name="stupass" placeholder="Password">
     </div>
   
   </form>
           
 
 </div>
 <div class="modal-footer">
  <small id="statuslog"> </small>
   <button  class="btn btn btn-secondary" id="stubtn"  onclick="checkLogin()" >Login</button>

   <button type="button" class="btn btn-danger" data-dismiss="modal">cancel</button>
   </div>
 </div>
</div>
</div>
</div>

 <!-- start of video model -->
 <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"  style="width:70%">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body" >
            <video  width="100%" controls>
                <source src="video/p.mp4" type="video/mp4">
            </video>
      
        </div>
        
      </div>
    </div>
  </div>
  <!-- End of video model -->


<!-- end of student login -->
<!-- all javascript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/ajaxrequest.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="js/all.min.js"></script>

</body>
</html>
