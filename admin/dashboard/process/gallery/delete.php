<?php
include '../conn.php';

if(isset($_POST['delete_image'])){

    $id=$_POST['del_id'];
    $image=$_POST['del_image'];

    $query ="DELETE FROM gallary WHERE id='$id'";
    $result=mysqli_query($mysqli,$query);

    if($result){
        header('location:../../gallery.php');
    }
    else{
        $em ="unknown error occure";
            header("location:../../gallary.php?error=$em");
    }
}

?>