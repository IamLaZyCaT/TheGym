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
                            
                                <a class="dropdown-item" href="../logout.php">
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
                        <h1 class="h3 mb-0 text-gray-800">Gallery</h1>
                        
                    </div>
<!-- gallery upload -->
                    <form action="process/gallery/upload.php" method="POST" enctype="multipart/form-data">
                        <input type="file" name="image" accept="image/*" required >
                        <br>
                        <input type="submit" name="submit" value="upload" class="btn btn-dark mt-2">

                    </form>

                

                    <div class="mt-5">
                        <h1 class="h3 mb-0 text-gray-800">Image List</h1>

                             <?php
                                  include 'process/conn.php';

                                    $sql = "SELECT * FROM gallary";
                                    $result=$mysqli->query($sql);
                            ?>

                            <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Image</th>
                                <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                    if($result->num_rows>0){
                                        foreach($result as $row){
                                ?>

                                <tr>
                                <td scope="row"> <?php  echo $row['id']; ?></td>
                                <td><img src="<?php echo"process/gallery/upload/".$row['image'];?>" width="100px" alt="Image"></td>
                                <td>
                                    <!-- <a href="#" class="btn btn-danger">DELETE</a> -->
                                    <form action="process/gallery/delete.php" method="POST">
                                        <input type="hidden" name="del_id" id="del_id" value="<?php echo $row['id'];  ?>"> 
                                        <input type="hidden" name="del_image" id="del_image" value="<?php echo $row['image'];  ?>"> 

                                       <button type="submit" name="delete_image" class="btn btn-danger">DELETE</button>   
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