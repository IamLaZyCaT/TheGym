<?php
session_start();

if(!isset($_SESSION['username'])){
  header("location: ../index.php");
}

include 'includes/header.php';

include 'includes/navbar.php';

?>

 <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-dark" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                            
                                <a class="dropdown-item" href="../logout.php" >
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
            
<?php
 
 include './process/conn.php';

 $select="SELECT * FROM bookin";
 $query=mysqli->query($mysqli,$select);

?>

<form action="process/resigter/add.php" method="POST" class="text-light border-light card bg-black p-5 register">
   <div class="row">
    
      <div class="col-lg-6 col-md-12">
         <label for="" class="text-dark">First Name</label>
         <br>
         <input type="text" name="Fname" id="Fname"  placeholder="enter first name" class="form-control"required>
      </div>
      <div class="col-lg-6 col-md-12">
         <label for="" class="text-dark">Last Name</label>
         <br>
         <input type="text" name="Lname" id="Lname" placeholder="enter Last name" class="form-control "required>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-6 col-md-12">
         <label for="" class="text-dark">Address</label>
         <br>
         <input type="text" name="address" id="address" placeholder="enter Address" class="form-control"required>
      </div>
      <div class="col-lg-6 col-md-12">
         <label for="" class="text-dark">email</label>
         <br>
         <input type="email" name="email" id="email" placeholder="enter email" class="form-control" required>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-6 col-md-12">
         <label for="" class="text-dark">Age</label>
         <br>
         <input type="number" name="age" id="age" placeholder="enter Age" class="form-control"required>
      </div>
      <div class="col-lg-6 col-md-12">
         <label for="" class="text-dark">Phone no.</label>
         <br>
         <input type="number" name="phone" id="Phone" placeholder="enter phone no." class="form-control "required>
      </div>


   </div>
   <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 gender text-dark">
         <br>
        <label for="" class="text-dark">Gender : </label>
            <!-- <select name="gender" id="gender" class="bg-black text-light">
            <option value="male">Male</option>
            <option value="Female">Female</option>
            <option value="other">other</option>
         </select> -->
            <input class="opt text-dark" type="radio" name="Gender" value="male">  Male
            <input class="opt text-dark" type="radio" name="Gender" value="female"> Female
            <input class="opt text-dark" type="radio" name="Gender" value="other"> Others
            
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
         <br>
         <label for="Package" class="text-dark">Choose Package : </label>
         <select name="Package" id="Package" class=" ms-2">
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
         <label for="GAddress" class="text-dark">Select Suitable Address </label>
         <select name="GAddress" id="GAddress" class=" ms-2">
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
         <label for="Shift" class="text-dark">Shift</label>
         <select name="shift" id="Package" class=" ms-2">
             <option value="Day" class="text-dark">Day</option>
             <option value="Morning" class="text-dark">Morning</option>
             <option value="evening" class="text-dark">evening</option>
         </select>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-4">
         <br>
         <input type="submit" name="submit" id="submit" value="submit" class="btn btn-outline-danger">

      </div>
   </div>
</form>
                  


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->






            <?php 
                include 'includes/footer.php';
                include 'includes/scripts.php';
            ?>