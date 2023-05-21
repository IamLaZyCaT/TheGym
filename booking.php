<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE GYM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css">
    <?php include 'link.php'; ?>
</head>
<body style="background-color: black;">
   
<nav class="header">
        <div class="navbar navbar-expand-lg navbar-dark bg-black fixed-top">
            <a href="./index.php#home" class="navbar-brand fs-1 ms-5">THE <span class="text-danger">GYM</span></a>
            <!-- for toogle -->
            <button class="navbar-toggler me-5" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button> 

            <div class="collapse navbar-collapse" id="nav1">
                <ul class="navbar-nav ms-auto me-5 ">
                    <li class="nav-list fs-4"><a href="./index.php#home" class="nav-link" ><i class="bi bi-house-door-fill"></i>Home</a></li>
                    <li class="nav-list fs-4"><a href="./index.php#aboutus" class="nav-link" >About</a></li>
                    <li class="nav-list fs-4"><a href="./index.php#gallary" class="nav-link" >Gallary</a> </li>
                    <li class="nav-list fs-4"><a href="./index.php#team" class="nav-link" >Teams</a></li>
                    <li class="nav-list fs-4"><a href="./index.php#package" class="nav-link" >Package</a></li>
                    <!-- <li class="nav-list fs-4"><a href="#mercendaries" class="nav-link">Mercendaries</a></li> -->
                    <li class="nav-list fs-4"><a href="./index.php#contact" class="nav-link" >Contact info</a></li>
                    <li class="nav-list fs-4"><a href="./booking.php" class="nav-link" > Register</a></li>
                </ul>
                <form class="d-flex me-5 ">
                    <input type="Search" placeholder="Search"  aria-label="Search" class="form-control bg-dark text-light">
                    <button class="btn btn-outline-danger ms-2" type="submit">Search</button>
                 </form>
            </div>   
        </div>
    </nav> 


<div class="booking  m-5 ">
<form id="form" action="register.php" method="POST" class="text-light border-light card bg-black p-5 register">
 <!-- action="register.php" method="POST"   -->
   <div class="row">
      <div class="col-lg-6 col-md-12">
         <label for="">First Name</label>
         <br>
         <input type="text" name="Fname" id="Fname"  placeholder="enter first name" class="form-control bg-dark text-light"required>
      </div>
      <div class="col-lg-6 col-md-12">
         <label for="">Last Name</label>
         <br>
         <input type="text" name="Lname" id="Lname" placeholder="enter Last name" class="form-control bg-dark text-light"required>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-6 col-md-12">
         <label for="">Address</label>
         <br>
         <input type="text" name="address" id="address" placeholder="enter Address" class="form-control bg-dark text-light"required>
      </div>
      <div class="col-lg-6 col-md-12">
         <label for="">email</label>
         <br>
         <input type="email" name="email" id="email" placeholder="enter email" class="form-control bg-dark text-light" required>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-6 col-md-12">
         <label for="">Age</label>
         <br>
         <input type="number" name="age" id="age" placeholder="enter Age" class="form-control bg-dark text-light"required>
      </div>
      <div class="col-lg-6 col-md-12">
         <label for="">Phone no.</label>
         <br>
         <input type="number" name="phone" id="phone" placeholder="enter phone no." class="form-control bg-dark text-light"required>
      </div>


   </div>
   <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 gender">
         <br>
        <label for="">Gender : </label>
            <select name="Gender" id="Gender" class="bg-black text-light">
            <option value="male">Male</option>
            <option value="Female">Female</option>
            <option value="other">other</option>
         </select>
            <!-- <input class="opt" type="radio" name="Gender" value="male">  Male
            <input class="opt" type="radio" name="Gender" value="female"> Female
            <input class="opt" type="radio" name="Gender" value="other"> Others -->
            
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
         <br>
         <label for="Package">Choose Package : </label>
         <select name="Package" id="Package" class="bg-black text-light ms-2">
            <option  value="">--Select--</option>
             <option value="Bronze">Bronze</option>
             <option value="Gold">Gold</option>
             <option value="Diamond">Diamond</option>
         </select>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-6 col-md-12" >
         <br>
         <label for="GAddress">Select Suitable Address </label>
         <select name="GAddress" id="GAddress" class="bg-black text-light ms-2">
            <option  value="">--Select--</option>
            <option value="Bhaktapur">Bhaktapur</option>
            <option value="Kathmandu">Kathmandu</option>
            <option value="Pokhara">Pokhara</option>
            <option value="Lalitpur">Lalitpur</option>
            <option value="Butwal">Butwal</option>
        </select>
      </div>
   </div>

   <div class="row">
      <div class="col-lg-6 col-md-12">
         <br>
         <label for="Shift">Shift</label>
         <select name="shift" id="shift" class="bg-black text-light ms-2">
             <option value="Day">Day</option>
             <option value="Morning">Morning</option>
             <option value="evening">evening</option>
         </select>
      </div>
   </div> 
   <div class="row">
      <div id="success" class="text-success"></div>
      <div id="error" class="text-danger"></div>
   </div>
   
   <div class="row">
      <div class="col-lg-4">
         <br>
         <input type="submit" name="submit" id="submit" value="submit" class="btn btn-outline-danger">

      </div>
   </div>
</form>

</div>           
             <!-- sub-nav -->
             <div class="sub container-fluid bg-black text-light">
              
             <div class="row">
               <div class="col">
                  <a href="#" class="navbar-brand fs-1 ms-5 p-5 text-light d-flex align-content-center">THE <span class="text-danger">GYM</span></a>
               </div>
               <div class="col">
                  <table>
                     <tr><th></th>
                        <th><h1>BRANCHES</h1></th>
                     </tr>
                     
                        <tr>
                           <td><i class="fa-solid fa-dumbbell pe-3"></i></td>
                           <td> Kathmandu</td>
                        </tr>
                        <tr>
                           <td><i class="fa-solid fa-dumbbell"></i></td>
                           <td> Pokhara</td>
                        </tr>
                        <tr>
                           <td><i class="fa-solid fa-dumbbell"></i></td>
                           <td> Lalitpur</td>
                        </tr>
                        <tr>
                           <td><i class="fa-solid fa-dumbbell"></i></td>
                           <td> Bhaktapur</td>
                        </tr>
                  </table>
               </div>
              <div class="col">
                 <table>
                    <tr>
                       <th></th>
                        <th class="fs-2">OPENING TIME</th>
                     </tr>
                     <tr>
                        <td><i class="fa-solid fa-clock-rotate-left ms-1"></i></td>
                        <td class=" ms-1" >  Sun-Fri: 6AM-8PM</td>
                     </tr>
                     <tr>
                        <td><i class="fa-solid fa-clock-rotate-left ms-1"></i></td>
                        <td class=" ms-1">  Sat: Closed</td>
                     </tr>
                 </table>
              </div>
             </div>
             </div>
             
                
                
                <!-- Footer -->
                <footer class="container-fluid bg-black text-light d-flex justify-content-center align-items-center">
                   &copy; copyright 2022 by ASHISH KUMAL / AMAN CHAUDHARY & THE GYM pvt.Ltd. All right reserved.
                </footer>
</body>
<script src="bootstrap-5.1.3-dist/js"></script>





<!-- 

<script>


$(document).ready(function(){  
   
   $('#submit').click(function(){
       event.preventDefault();
        var name = $('#name').val();  
        var email = $('#email').val();          
        var message = $('#message').val();  
        if(Fname == ''|| Lname == '' || address == ''|| email == '' || age==''|| phone == '')  
        {  
             $('#error_message').html("All Fields are required"); 
             setTimeout(function(){
                        $('#error_message').fadeOut("slow");
                    },2000);
        }  
        else {
         if(age>=0)
         {
            if(phone.length==10){
                   $('#error_message').html('');  
             $.ajax({  
                  url:"processes/contactform.php",  
                  method:"POST",  
                  data:{ Fname:Fname,
                                 Lname:Lname,
                                 email:email,
                                 address:address,
                                 phone:phone,
                                 age:age,
                                 Package:Package,
                                 Gender:Gender,
                                 shift:shift , 
                                 GAddress:GAddress}, 
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
                  });} }}
            else{
               $('#error_message').html("Invalid phone number"); 
             setTimeout(function(){
                        $('#error_message').fadeOut("slow");
                    },2000);
              }
            
         
      }
         else{
            $('#error_message').html("Age cann't be negative"); 
               setTimeout(function(){
                        $('#error_message').fadeOut("slow");
                    },2000);
         }
             ;  
         
   });  
});

</script> -->





</html>