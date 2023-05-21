<?php
include '../conn.php';

if(isset($_POST['update'])){

    $id=$_POST['id'];
    $Fname=$_POST['Fname'];
    $Lname=$_POST['Lname'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $phone=$_POST['phone'];
    $Gender=$_POST['Gender'];
    $Package=$_POST['Package'];
    $GAddress=$_POST['GAddress'];
    $shift=$_POST['shift'];

    $query ="UPDATE `bookin` SET Fname='$Fname', Lname='$Lname', address='$address', 
            email='$email', phone='$phone', age='$age', Gender='$Gender', GAddress='$GAddress',
             shift='$shift', Package='$Package'
             WHERE id='$id'";

    // $result=mysqli_query($mysqli,$query);
    $result = $mysqli->query($query);

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