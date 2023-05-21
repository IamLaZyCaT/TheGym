<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Gym Admin</title>
    <!-- icon -->
    <link rel="icon" href="../assets/image/icon-01.png">
    <!-- bootstrap online -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- font awsome online -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- style css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-black">
    <!-- navigation bar -->
<nav class="header">
        <div class="navbar navbar-expand-lg navbar-dark bg-black fixed-top">
            <a href="#home" class="navbar-brand fs-1 ms-5">THE <span class="text-danger">GYM</span></a>
        </div>
</nav>
<!-- form -->
<div class="container bg-black d-flex justify-content-center align-items-center col mt-5 admin-log" >
    <form  id="form" method="POST" action="login.php"> 
        <div class="form card  border-light bg-black d-flex justify-content-center align-items-center m-5 p-5">
               <div class="row bg-black">
                    <div class="col">
                        <label class="card-head fs-3 text-danger" for="">Admin LogIn</label>
                    </div>

                    
                </div>
                <div class="row">
                    <div class="col">
                        <label for=""><i class="fa-solid fa-user text-danger "></i class="tx"> Username</label>
                        <input type="text" name="username" id="username" class="bg-black text-danger form-control mb-3" placeholder="Enter Username">
                       
                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <label for=""><i class="fa-solid fa-lock text-danger"></i class="tx"> Password</label>
                        <input type="password" name="password" id="password" class="bg-black text-light form-control" placeholder="Enter Password">
                    </div>

                </div>
                <div class="row">
                
                  <div id="error_message" class="text-danger"></div>
                  <div id="success_message" class="text-success"></div>
        
                </div>
                <div class="row">
                    <input type="submit" name="submit" id="submit" class=" btn btn-outline-danger mt-5" value="log In">
                </div>
               </div> 
              
    </form>
</div>
        
</body>
<script>
   $(document).ready(function(){  
   
   $('#submit').click(function(){
       event.preventDefault();
        var username = $('#username').val();  
        var password = $('#password').val();
        
        if(username == '' ||password == '' )  
        {  
             $('#error_message').html("All Fields are required"); 
             setTimeout(function(){
                        $('#error_message').fadeOut("slow");
                    },2000);
         
            
        }  
      
        
        else {
         
             $('#error_message').html('');  
             $.ajax({  
                  url:"mailer.php",  
                  method:"POST",  
                  data:{usename:username,password:password}, 
                  beforeSend:function(){
                   $('#submit').val("connecting...");
                   }, 
                  success:function(data){  
                       $("form").trigger("reset");  
                       $('#success_message').fadeIn().html(data);
                       setTimeout(function(){  
                            $('#success_message').fadeOut("Slow");  
                       }, 2000);  
                      $('#submit').val("Send Message");

                  }  
             });  
        } 
        

        
   });  
});
   
 </script>
</html>