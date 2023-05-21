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
                            
                                <a class="dropdown-item" href="../logout.php" data-toggle="modal" data-target="#logoutModal">
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

                   <form action="process/card/edit.php" method="POST" enctype="multipart/form-data">
<?php
include './process/conn.php';
    $id=$_POST['id'];
    $select = "select * from slider where id='$id'";
$query = mysqli_query($mysqli,$select);

while($res=mysqli_fetch_array($query)){
    echo "<input type='hidden' name='id' id='id' value='" . $res['id'] . "'> ";
                   echo "<label for='name'>name</label>";
                   echo "<br>";
                   echo "<input type='text' name='name' id='name' placeholder='name'value='" . $res['Name'] . "'> ";
                   echo " <br>";
                  echo " <label for='job'>job  </label>";
                  echo " <br>";
                  echo " <input type='text' name='job' id='job' placeholder='job' value='" . $res['job'] . "'> ";
                  echo " <br>";
                  echo " <label for='image'>image</label>";
                  echo " <br>";
                  echo " <input type='file' name='image' id='image' ";
                  echo " <br>";
                  echo " <input type='submit' name='edit' id='edit'  value='Edit' class='btn btn-dark mt-3 '>";


}

?>
                    
                   </form>
                  


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->






            <?php 
                include 'includes/footer.php';
                include 'includes/scripts.php';
            ?>