<?php

// $conn=mysql_connect("localhost","root","","phpmygym");
include '../conn.php';

if(isset($_POST['submit'])){
    $Name =$_POST['name'];
    $job= $_POST['job'];
    $image=$_FILES['image'];
    print_r($_FILES['image']);
    
    $img_name =$_FILES['image']['name'];
    $img_type =$_FILES['image']['type'];
    $error =$_FILES['image']['error'];
    $img_size =$_FILES['image']['size'];
    $tmp_name =$_FILES['image']['tmp_name'];

    // move_uploaded_file($tmp_name,'uploadimage/'.$img_name);

    if($error===0){
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);

        $allowed_exs = array("jpg","jpeg","png");
        if(in_array($img_ex_lc,$allowed_exs)){
            $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
            $img_upload_path ='upload/' .$new_img_name;
            move_uploaded_file($tmp_name, 'upload/'.$img_name);

            // $sql="INSERT INTO gallary(image,Name,job) VALUES('$img_name')";
           $sql= "INSERT INTO `slider` ( `Name`, `job`, `image`) VALUES ( '$Name', '$job', '$img_name')";
            $result=$mysqli->query($sql);
            header('location:../../teams.php');
        }
        else{
            $em ="extension error occure";
            header("location:../../index.php?error=$em");
        }
    }
    else{
        $em ="unknown error occure";
        header("location:../../index.php?error=$em");

    }
// }
// else{
//     $em ="image already exit";
//     header("location:../../index.php?error=$em");
// }
}
else{
header('location:../../index.php');
}


?>