<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Gym</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css">
    
<link rel="stylesheet" href="assets/css/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    
</head>
<body class="bg-black text-light">
    <!-- navigation bar -->
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

<!-- table -->
<h1 class="d-flex justify-content-center p-5 topic m-5 " >PRICE AND PACKAGE</h1>
<table class="table broze table-dark table-striped ">
    <thead>
      <tr>
        <th scope="col">Regular Membership</th>
        <th scope="col">1 month</th>
        <th scope="col">3 months</th>
        <th scope="col">6 months</th>
        <th scope="col">1 year</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Gym</td>
        <td>Nrs. 3,390</td>
        <td>Nrs. 9,040</td>
        <td>Nrs. 16,385</td>
        <td>Nrs. 28,250</td>
      </tr>
      <tr>
        <td>Gym and Cardio</td>
        <td>Nrs. 4,520</td>
        <td>Nrs. 11,300</td>
        <td>Nrs. 20,905</td>
        <td>Nrs. 36,160</td>
      </tr>
    </tbody>
  </table>
  <p class="text-danger"><i class="fa-solid fa-dumbbell"></i>  All of the above prices includes trainers, fully customized workout plan, nurtition plan and showers facility also.</p>
    
  <table class='price-table table broze table-dark table-striped' id="price-table">
    <thead>
        <th>Day Time Membership</th>
        <th>1 month</th>
        <th>3 months</th>
        <th>6 months</th>
        <th>1 year</th>
    </thead>
    <tbody class="table_body">
          <tr>
              <td>Gym</td>
              <td>Nrs. 2,500</td>
              <td>Nrs. 7,000</td>
              <td>Nrs. 12,000</td>
              <td>Nrs. 20,000</td>
            </tr>
            <tr>
              <td>Gym and Cardio</td>
              <td>Nrs. 3,500</td>
              <td>Nrs. 8,500</td>
              <td>Nrs. 15,000</td>
              <td>Nrs. 25,000</td>
            </tr>
  </tbody>
</table>
<p class="text-danger"><i class="fa-solid fa-dumbbell"></i> Timing - 10 AM to 4 PM</p>
<!-- Personal training -->
<table class='price-table table broze table-dark table-striped' id="price-table">
    <thead>
        <th>Personal training</th>
        <th>1 month</th>
        <th>3 months</th>
    </thead>
    <tbody class="table_body">
          <tr>
              <td>One Person</td>
              <td>Nrs. 11,300</td>
              <td>Nrs. 28,250</td>
          </tr>
          <tr>
            <td>Two Person (EACH)</td>
            <td>Nrs. 9,040</td>
            <td>Nrs. 23,730</td>
          </tr>  
    </tbody>
</table>
<p class="text-danger"><i class="fa-solid fa-dumbbell"></i> All of the above prices includes a personal trainer, fully customized workout plan, nurtition plan and showers facility also.</p>
 <!--  passes -->
 <table class='price-table table broze table-dark table-striped' id="price-table">
    <thead>
        <th>Passes</th>
        <th>1 day</th>
        <th>10 days</th>
    </thead>
    <tbody class="table_body">
          <tr>
              <td>Gym</td>
              <td>Nrs. 395</td>
              <td>Nrs. 2,260</td>
          </tr>
          <tr>
            <td>Gym and Cardio</td>
            <td>&nbsp;</td>
            <td>Nrs. 2,825</td>
          </tr>  
    </tbody>
</table>

<p class="text-danger"><i class="fa-solid fa-dumbbell"></i>  All of the above prices includes trainers and showers facility.</p>

 <!-- locker Charges -->
 <table class='price-table table broze table-dark table-striped' id="price-table">
    <thead>
        <th>Locker Charges</th>
        <th>1 month</th>
        <th>3 months</th>
        <th>6 months</th>
        <th>1 year</th>
    </thead>
    <tbody class="table_body">
          <tr>
              <td>&nbsp;</td>
              <td>Nrs. 395</td>
              <td>Nrs. 1,020</td>
              <td>Nrs. 1,695</td>
              <td>Nrs. 2,825</td>
            </tr>
           
  </tbody>
</table>
<p class="text-danger"><i class="fa-solid fa-dumbbell"></i>  All of the above prices are inclusive of 13% Vat.</p>
</div>





<?php
    include 'pages/components/footer.php';
?>
    
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="bootstrap-5.1.3-dist/js"></script>

<script src="js/test.js"></script>
</html>