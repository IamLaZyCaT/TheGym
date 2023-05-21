<?php
include '../conn.php';

if(isset($_POST['delete'])){

    $id=$_POST['del_id'];

    $query ="DELETE FROM slider WHERE id='$id'";
    $result=mysqli_query($mysqli,$query);

    if($result){
        $em ="success";
        header("location:../../teams.php?$em");
    }
    else{
        $em ="unknown error occure";
            header("location:../../teams.php?error=$em");
    }
}

?>