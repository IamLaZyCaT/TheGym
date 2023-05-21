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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Register</h1>
                        
                    </div>

                    <div>
                        <button class="btn btn-primary"><a href="add.php" class="text-light text-decoration-none">Add User</a></button>
                    </div>


                    <div class="mt-5">
                        <h1 class="h3 mb-0 text-gray-800">Register List</h1>

                             <?php
                                  include 'process/conn.php';

                                    $sql = "SELECT * FROM bookin";
                                    $result=$mysqli->query($sql);
                            ?>

                            <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Fname</th>
                                <th scope="col">Lname</th>
                                <th scope="col">address</th>
                                <th scope="col">email</th>
                                <th scope="col">age</th>
                                <th scope="col">phone</th>
                                <th scope="col">gender</th>
                                <th scope="col">Package</th>
                                <th scope="col">Gymaddress</th>
                                <th scope="col">shift</th>
                                <th scope="col">Delete</th>
                                <th scope="col">Edit</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                    if($result->num_rows>0){
                                        foreach($result as $row){
                                ?>

                                <tr>
                                
                                <td><?php  echo $row['id']; ?></td>
                                <td><?php  echo $row['Fname']; ?></td>
                                <td><?php  echo $row['Lname']; ?></td>
                                <td><?php  echo $row['address']; ?></td>
                                <td><?php  echo $row['email']; ?></td>
                                <td><?php  echo $row['age']; ?></td>
                                <td><?php  echo $row['phone']; ?></td>
                                <td><?php  echo $row['Gender']; ?></td>
                                <td><?php  echo $row['Package']; ?></td>
                                <td><?php  echo $row['GAddress']; ?></td>
                                <td><?php  echo $row['shift']; ?></td>
                                <td>
                                <!-- <button type="submit" name="delete" class="btn btn-danger"> <a href="process/delrow.php" class="text-light text-decoration-none">del</a>  </button> -->
                                <form action="process/resigter/delrow.php" method="POST">
                                        <input type="hidden" name="del_id" id="del_id" value="<?php echo $row['id'];  ?>"> 

                                       <button type="submit" name="delete" class="btn btn-danger">del</button>   
                                    </form>     
                                </td>
                                <td>
                                <!-- <button type="submit" name="update" class="btn btn-primary"> <a href="process/update.php" class="text-light text-decoration-none">upd</a>  </button> -->
                                <form action="update.php" method="POST">
                                        <input type="hidden" name="id" id="id" value="<?php echo $row['id'];  ?>"> 
                                        <input type="hidden" name="Fname" id="Fname" value="<?php echo $row['Fname'];  ?>"> 
                                        <input type="hidden" name="Lname" id="Lname" value="<?php echo $row['Lname'];  ?>"> 
                                        <input type="hidden" name="address" id="address" value="<?php echo $row['address'];  ?>"> 
                                        <input type="hidden" name="email" id="email" value="<?php echo $row['email'];  ?>"> 
                                        <input type="hidden" name="age" id="age" value="<?php echo $row['age'];  ?>"> 
                                        <input type="hidden" name="phone" id="phone" value="<?php echo $row['phone'];  ?>"> 
                                        <input type="hidden" name="Gender" id="Gender" value="<?php echo $row['Gender'];  ?>"> 
                                        <input type="hidden" name="Package" id="Package" value="<?php echo $row['Package'];  ?>"> 
                                        <input type="hidden" name="GAddress" id="GAddress" value="<?php echo $row['GAddress'];  ?>"> 
                                        <input type="hidden" name="shift" id="shift" value="<?php echo $row['shift'];  ?>"> 

                                       <button type="submit" name="update" class="btn btn-primary">upd</button>   
                                    </form>   
                                   
                                       
                                </td>
                                </tr>
                                <?php
                                    }
                                }
                                else{
                                    
                                }
                             ?>
                               
                            </tbody>
                            </table>
                    </div>
                  


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->






            <?php 
                include 'includes/footer.php';
                include 'includes/scripts.php';
            ?>