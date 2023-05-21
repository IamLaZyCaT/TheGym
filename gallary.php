<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="icon" href="assets/image/icon-01.png">
    <?php
        include 'link.php';
    ?>
</head>
<body>
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
    <div class="gallary container-fluid bg-black text-light pt-5" id="gallary">
 <h1 class="d-flex justify-content-center p-5 topic" ><u class="text-danger">Gallaries</u></h1>

   <div class="row d-flex flex-wrap-wrap w-100">
         <?php
           include './conn.php';
            $sql="SELECT * FROM gallary ORDER BY id DESC";
            $result= mysqli_query($conn,$sql);
                
            if(mysqli_num_rows($result)>0){
                while($images = mysqli_fetch_array($result)){
                    ?>
            <div class="column">
            
                <img src="admin/dashboard/process/gallery/upload/<?php echo $images['image'] ?>" alt="">
            </div>
                    


                    <?php

                }
            }

         ?>
     </div>
 
   
</div>
<?php
    include 'pages/components/footer.php';
?>
</body>
</html>