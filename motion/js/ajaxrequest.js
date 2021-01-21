


// $(document).ready(function(){

//     // Ajall call for Already exist email verification
//     $("#stuemail").on("keypress blur", function() {
//         var stuemail = $("#stuemail").val();

//         $.ajax({

//             url:"student/addstudent.php",
//             method:"POST",  
//             data: {
//                 checkemail:"checkemail",

//                 stuemail:stuemail
//             } ,

//             success:function(data) {

//                 console.log(data);
//                 if (data != 0) { 

//                     $("#statusMsg2").html("<small style='color:red';>Email Id is alread used</small>"),
//                     $("#signup").attr("disabled",true);
//                 } else if(data == 0 && reg.test(stuemail)){
//                     $("#statusMsg2").html("<small style='color:green';>Here you Go</small>"),
//                     $("#signup").attr("disabled",false)

//                 } else if(stuemail.trim() != '' && !reg.test(stuemail) ) {
//                     $("#statusMsg2").html("<small style='color:red';>provide valid email eg  exemple@gmail.com</small>"),
//                     $("#signup").attr("disabled",false);
//                 }
//                 else if(stuemail ==''){
//                     $("#statusMsg2").html("<small style='color:green';>Enter valid email</small>") 

//                 }
//             }
//         }); 
  
//     });
// });


function addStud() {

    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

    var stuname = $("#stuname").val()
    var stuemail = $("#stuemail").val()
    var stupass = $("#studpass").val()
    var confirm = $("#confirm").val()
        //check form data on submission

    if(stuname.trim() == '') {

        $("#statusMsg1").html("<small style='color:red';>Please enter your name</small>");
        $("#stuname").focus();
        return false
    }  else if(stuemail.trim() == '') {

        $("#statusMsg2").html("<small style='color:red';>Please enter your email</small>");
        $("#stuemail").focus();
        return false

    }

    else if(stuemail.trim() != '' && !reg.test(stuemail) ) {
        $("#statusMsg2").html("<small style='color:red';>provide valid email eg  exemple@gmail.com</small>");
        $("#stuemail").focus();
        return false

    }



    else if(stupass.trim() == '') {

        $("#statusMsg3").html("<small style='color:red';>Please enter your password</small>");
        $("#stupass").focus();
        return false

    }
    else if(confirm.trim() == '') {

        $("#statusMsg4").html("<small style='color:red';>Please enter your password</small>");
        $("#confirm").focus();
        return false

    }


    else {
        $.ajax( {
            url:'student/addStudent.php',
            method:'POST',
            dataType:'json',
            data: {
    
                stusignup:"stusignup",
                stuname : stuname,
                stuemail : stuemail,
                stupass : stupass,
                confirm : confirm
                
    
            },
    
            success:function(data) {
                console.log(data);
    
                if(data == "ok") {
    
                    $("#sucessMsg").html("<span class='alert alert-success'>Registration successful</span>");
                    clearStudRegField();
                } else if (data == "failed") {
                    $("#sucessMsg").html("<span class='alert alert-danger'>Registration failed</span>");
    
    
                }
            }
        })


    }
  

} 



function clearStudRegField() {
    $("#studRegForm").trigger("reset");
    $("#statusMsg1").html('');
    $("#statusMsg2").html('');
    $("#statusMsg3").html('');
}



//Adding courses
function addCourse() {

    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

    var name = $("#name").val()
    var desc = $("#desc").val()
   
    var duration = $("#duration").val()
    var price = $("#price").val()
    var img = $("#img").val()
        //check form data on submission

    if(name.trim() == '') {

        $("#courseMsg1").html("<small style='color:red';>Please Enter Course Name</small>");
        $("#name").focus();
        return false
    }  else if(desc.trim() == '') {

        $("#courseMsg2").html("<small style='color:red';>Please enter description</small>");
        $("#desc").focus();
        return false

    }

else if(duration.trim() == '') {

    $("#courseMsg3").html("<small style='color:red';>Please Enter duration</small>");
    $("#duration").focus();
    return false

}
else if(price.trim() == '') {

    $("#courseMsg4").html("<small style='color:red';>Please  Enter Course Price</small>");
    $("#price").focus();
    return false

}
else if(img.trim() == '') {

    $("#courseMsg5").html("<small style='color:red';> Please Select Image</small>");
    $("#img").focus();
    return false

}
    else {    
            $.ajax( {
            url:'courses/addCourse.php',
            method:'POST',
            dataType:'json',
            data: {
    
                courseRegister:courseRegister,
                name : name,
                desc: desc,
                duration:duration,
                price:price,
                img:img
                
    
            },
    
            success:function(data) {


                console.log(data);
    
                if(data == "ok") {
    
                    $("#sucessMsg").html("<span class='alert alert-success'>Registration successful</span>");
                    clearStudRegField();
                } else if (data == "failed") {
                    $("#sucessMsg").html("<span class='alert alert-danger'>Registration failed</span>");
    
    
                }
            }
        })


    }
  

} 



function clearStudRegField() {
    $("#courseRegisterForm").trigger("reset");
    $("#courseMsg1").html('');
    $("#courseMsg2").html('');
    $("#courseMsg3").html('');
    $("#courseMsg4").html('');
    $("#courseMsg5").html('');
}



//Adding courses end

//ajall for student verifacation
// function checkLogin(){


//     var email = $("#email").val()
//     var pass= $("#pass").val()

//     $.ajax( {
//         url:'student/addStudent.php',
//         method:'POST',
//         dataType:'json',
//         data: {

//             checkloginemail:"checkloginemail",
//             email : email,
//             passs : pass,
           

//         },

//         success:function(data) {
//             // console.log(data);

//             if(data == 0) {
//                 $("#statuslog").html("<small class ='alert alert-danger'>Email or Password is incorrect</small>")

//             }  else if (data == 1) {
//                 $("#statuslog").html(
//                 "<div class ='spinner-border text-success' role='status>Email or Password is incorrect</div>"); 
//                 setTimeout(() => {
//                     window.location.href ="Index.php";
                    
//                 }, 1000);

//             }
            
            
//         },
//     });
// }

