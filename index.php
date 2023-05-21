<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Gym</title>
    <!-- icon -->
    <link rel="icon" href="assets/image/icon-01.png">
    <!-- bootstrap online -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- font awsome online -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- style css -->
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<body>
    <!-- including navbar  -->
<?php include 'pages/components/navbar.php'; ?>

    <!-- HOME background -->
<div class="banner-image w-100 vh-100 d-flex align-items-center img-fluid" id="home">
   <div class="container ms-5">
       <h1 class="text-light" >Don't wish for it . Work for it..</h1>
       <h3 class="text-light">JOIN THE CLASSES FOR RESULT</h3>
       <button class="btn btn-outline-danger button"><a href="booking.php" class="nav-link text-light" >Join Now</a></button> 
   </div> 
</div>

<!-- About us -->
<div class="aboutus bg-black text-light" id="aboutus">
   <div class="container">
       <div class="row">
           <div class="col-lg-5 col-md-6 col-sm-12 d-flex align-content-center">
           <img class=" p-5 mt-5 img-fluid" src="assets/image/gym..png" alt="gym photo" >
           </div>
           <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
           <h1 class="heading p-5 d-flex justify-content-center mt-5 topic"><u class="text-danger">About</u> </h1>
        <p class="px-3 par text-center">We believe that the key to making life changing transformations is to ease out the journey by showing you the path and being the cheerleaders of your body transformation journey.
           Here at The Physique Workshop, we provide you the exact tools you'll require to change your life around.
        </p>
        <p class="px-3 par text-center">
           We have trainers who will not only help you through scientific methods, but also motivate, push you and be your friend when needed.
           We are a complete gym, with highly customized guidance by our expert trainers providing you customized workout and diet systems.
        </p>
        <p class="px-3 par text-center">
        With branches all over Kathmandu, you won't have reasons as to why you can't walk into one of our five branches.</p>
       </div>
   </div>
  
</div>
</div>


<!-- Gallary -->
<div class="gallary container-fluid bg-black text-light pt-5" id="gallary">
 <h1 class="d-flex justify-content-center p-5 topic" ><u class="text-danger">Gallaries</u></h1>

   <div class="row d-flex flex-wrap-wrap w-100">
       <div class="column">
           <img src="assets/image/1.png" alt="">
        </div>
       <div class="column">
           <img src="assets/image/6.png" alt="">
           <img src="assets/image/7.png" alt="">
         </div>
     </div>
 
   <button  class="btn btn-outline-danger d-flex ms-auto me-5 mt-5">
       <a href="gallary.php" class="nav-link text-light">More</a>
   </button>
   
</div>


<!-- Teams --> 

<div class="team container-fluid bg-black text-light p-5" id="team">
   <h1 class="d-flex justify-content-center p-5 topic" ><u class="text-danger mt-3">Teams</u></h1>

   <?php include 'slider1.php'; ?>

</div>






<!-- Package -->

<div class="package container-fluid bg-black text-light" id="package">
  <h1 class="d-flex justify-content-center p-5 topic" ><u class="text-danger m-5">Package</u></h1>

  <div class="container box row">
     <div class="card border-light text-white bg-black mb-3" style="max-width:18rem">
        <div class="card-header text-center border-light">
          <strong class="fs-1" style="color: #CD853F"><i class="fa-solid fa-medal" style="color: #CD853F"></i>BRONZE</strong> 
        </div>
        <div class="card-body">
           <div class="card-sub-title text-danger fs-4"> NRP.2500 </div>
           <div class="card-text" style="color: #CD853F">
             <ul>
                <li><i class="fa-solid fa-dumbbell"></i>  for 2 week</li>
                <li><i class="fa-solid fa-dumbbell"></i>  limited Access(8AM-10AM)</li>
                <li><i class="fa-solid fa-dumbbell"></i>  Fingerprint Entry</li>
             </ul> 
           </div>
        </div>
     </div>
     <div class="card border-light text-white bg-black mb-3" style="max-width:18rem">
        <div class="card-header text-center border-light">
          <strong class="fs-1" style="color: gold;"><i class="fa-solid fa-ring" style="color: gold;"></i>GOLD</strong> 
        </div>
        <div class="card-body">
           <div class="card-sub-title text-danger fs-4"> NRP.5000  </div>
           <div class="card-text" style="color: gold;">
             <ul>
                <li><i class="fa-solid fa-dumbbell"></i>  for 1 month</li>
                <li><i class="fa-solid fa-dumbbell"></i>  unlimited Access(8AM-6PM)</li>
                <li><i class="fa-solid fa-dumbbell"></i>  Fingerprint Entry</li>
                <li><i class="fa-solid fa-dumbbell"></i>  10% discount(for first 5)</li>
                <li><i class="fa-solid fa-dumbbell"></i>  Eligible to enter compition</li>
             </ul> 
           </div>
        </div>
     </div>
     <div class="card border-light text-white bg-black mb-3" style="max-width:18rem">
        <div class="card-header text-center border-light">
          <strong class="fs-1" style='color:#b9f2ff;'><i class="fa-solid fa-gem" style='color:#b9f2ff;'></i>Diamond</strong> 
        </div>
        <div class="card-body">
           <div class="card-sub-title text-danger fs-4" > NRP.10000  </div>
           <div class="card-text" style='color:#b9f2ff;'>
             <ul>
                <li><i class="fa-solid fa-dumbbell"></i>  for 3 month</li>
                <li><i class="fa-solid fa-dumbbell"></i>  unlimited Access(8AM-6PM)</li>
                <li><i class="fa-solid fa-dumbbell"></i>  Fingerprint Entry</li>
                <li><i class="fa-solid fa-dumbbell"></i>  15% discount(for first 10)</li>
                <li><i class="fa-solid fa-dumbbell"></i>  Eligible to enter compition and will have chance get 20% discount </li>
             </ul> 
           </div>
        </div>
     </div>
  </div>
    
        <div class="d-flex justify-content-center">
           <button  class="btn btn-outline-danger  me-5 mt-5">
              <a href="table.php" class="nav-link text-light ">More details</a>
          </button>
        </div>
 


</div>



<!-- Mercendaries -->
<!-- <div class="Mercendaries container-fluid bg-black text-light" id="mercendaries">
  <h1 class="d-flex justify-content-center p-5 topic" ><u class="text-danger">Mercendaries</u></h1>


</div> -->


<!-- Contact us -->
<div class="package container-fluid bg-black text-light" id="contact">
  <h1 class="d-flex justify-content-center p-5 topic" ><u class="text-danger m-4 p-1">Contact info</u></h1>
  <div class="row d-flex justify-content-center contact">
     <div class="col-lg-5 col-md-12 border-light card text-light bg-black m-3 p-4" style="max-width:40rem">
        <h3>Let's connect</h3>
        <p>If you are interested in body bulding and making healty body then you can contanct us for more detail and you can get many information from us thank you!..</p>
        <table class="m-5">

           <tr>
              <td><i class="fa-solid fa-envelope"></i></td>
              <td>info@123gmail.com </td>
           </tr>
           <tr>
              <td><i class="fa-solid fa-phone"></i></td>
              <td>1234567890 </td>
           </tr>
           <tr>
              <td><i class="fa-solid fa-location-dot"></i></td>
              <td>balambu,kathmandu</td>
           </tr>
           
        </table>
        <div class=" d-flex justify-content-center  justify-content-space-between text-light">
           <div class="col4">
              <a href="#"><i class="fa-brands fa-facebook text-light fs-1"></i></a>
           </div>
            <div class="col4 ms-4"><a href="#"><i class="fa-brands fa-youtube text-light fs-1"></i></a>     </div>                 
            <div class="col4 ms-4"><a href="#"><i class="fa-brands fa-instagram text-light fs-1"></i></a>   </div>             
                         
                           
       </div>
     </div>

     <div class="col-lg-5 col-md-12 border-light card text-light bg-black m-3" style="max-width:40rem">
        <h3>Send us message</h3>
        <!-- <form action="https://maharjanp.com.np/sendmail" method="post" > -->
         <form id='form'>
         <!-- action="mailer.php" method="POST"  -->
           <div class="row ms-2">
              <div class="col-lg-6 col-md-12 ">
                 <label for="">First Name</label>
                 <br>
                 <input type="text" name="Fname" id="Fname" required placeholder="Enter First name" class="form-control bg-dark text-light">
              </div>
              <div class="col-lg-6 col-md-12 ">
                 <label for="">Last Name</label>
                 <br>
                 <input type="text" name="Lname" id="Lname" required placeholder="Enter Last name" class="form-control bg-dark text-light">
              </div>
           </div>
           <div class="row ms-2">
              <div class="col-lg-6 col-md-12 ">
                 phone Number
                 <br>
                 <input type="number" name="number" id="number" required placeholder="Enter number" class="form-control bg-dark text-light">
                 <br>
                 <span class="text-danger msg" id="msg"></span>
                 <br>
              </div>
              <div class="col-lg-6 col-md-12 ">
                 email
                 <br>
                 <input type="email" name="email" id="email" required placeholder="Enter email" class="form-control bg-dark text-light">
              </div>
           </div>

           <div class="row ms-2">
              <div class="col-12">
                 message
                 <br>
                 <textarea name="message" id="message" cols="30" rows="10" placeholder="Your message" class="form-control bg-dark text-light"></textarea>
              </div>
           </div>
           
           <div class="row  ms-2  mt-3 mb-5">
                  <div id="error_message" class="text-danger"></div>
                  <div id="success_message" class="text-success"></div>
           </div>
           

           <div class="row  ms-2  mt-3 mb-5">
              <div class="col-4">
                <input type="submit"  class="btn btn-danger" name="submit" id="submit" value="Submit">
              </div>
           </div>
          


           
        </form>
     </div>
  </div>
</div>  

<?php include 'pages/components/footer.php'; ?>



   

    
</body>
<script>
   $(document).ready(function(){  
   
   $('#submit').click(function(){
       event.preventDefault();
        var Fname = $('#Fname').val();  
        var Lname = $('#Lname').val();
        var number = $('#number').val(); 
        var email = $('#email').val();          
        var message = $('#message').val();  
        if(Fname == '' ||Lname == '' || number==''|| message == '' || email=='')  
        {  
             $('#error_message').html("All Fields are required"); 
             setTimeout(function(){
                        $('#error_message').fadeOut("slow");
                    },2000);
         
            
        }  
      
        
         
            
         
      
        
        else {
         if (number.length==10)
        {  
             $('#error_message').html('');  
             $.ajax({  
                  url:"mailer.php",  
                  method:"POST",  
                  data:{Fname:Fname,Lname:Lname,number:number, message:message , email:email}, 
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
        else {
         $('#error_message').html("Invalid number"); 
             setTimeout(function(){
                        $('#error_message').fadeOut("slow");
                    },2000);
        }
        }

        
   });  
});
   
 </script>



    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</html>

