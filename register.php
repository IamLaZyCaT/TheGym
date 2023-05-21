<?php
    $Fname=$_POST['Fname'];
    $Lname=$_POST['Lname'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $phone=$_POST['phone'];
    $gender=$_POST['Gender'];
    $package=$_POST['Package'];
    $GAddress=$_POST['GAddress'];
    $shift=$_POST['shift'];

    $servername='localhost';
    $username='root';
    $password='';
    
    $conn =new mysqli('localhost','root','','phpthegym');

    if($conn->connect_error){
        die("Connection failed: " .$conn->connect_error);
    }

    else{
        $insert = "INSERT INTO bookin( Fname, Lname, address, email, phone, age, Gender, GAddress, shift, Package) VALUES ('$Fname','$Lname','$address','$email','$phone','$age','$gender','$GAddress','$shift','$package')";

        $query= $conn->query($insert);
              
        if($query)
{
            // echo"success";
            header("location:index.php?success");
        }
        else{
            // echo"error";
            header("location:index.php?error");
        }
    }

   
?>