<?php
include '../conn.php';

if(isset($_POST['delete'])){

    $id=$_POST['del_id'];

    $query ="DELETE FROM bookin WHERE id='$id'";
    $result=mysqli_query($mysqli,$query);

    if($result){
        $em ="success";
        header("location:../../register.php?$em");
    }
    else{
        $em ="unknown error occure";
            header("location:../../register.php?error=$em");
    }
}

?>