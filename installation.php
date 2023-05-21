

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE GYM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php
        include 'link.php';
    ?>

</head>
<body>



<?php

$server='localhost';
$username = 'root';
$password = '';
$database = 'phpthegym';


    $conn = new mysqli($server,$username,$password);
    if(!$conn){
        echo "Eror in connecting Mysql";
    }
    else{
        $create = "create database $database";
        $query = $conn->query($create);
        
        if(!$query){
            echo "Error creating Database";
        }
        else{
            $conn = new mysqli($server,$username,$password,$database);
            if(!$conn){
                echo "error connecting to Mysql / Database";
            }
            else{
                $bookin = "create table bookin(
                    id int(255) primary key,
                    Fname varchar(255),
                    Lname varchar(255),
                    address int(3),
                    email varchar(255),
                    age int(10),
                    phone varchar(255),
                    Gender varchar(255),
                    Package varchar(255),
                    Gaddress varchar(255),
                    shift varchar(255)
                )";
                $query=$conn->query($bookin);  

                $gallary = "create table gallary(
                    id int(255) primary key,
                    image varchar(255)
                )";
                $query=$conn->query($gallary); 

                $slider = "create table slider(
                    id int(255) primary key,
                    Name varchar(255),
                    job varchar(255),
                    image varchar(255)
                )";
                $query=$conn->query($slider);
                
                $loginform = "create table loginform(
                    id int(255) primary key,
                    username varchar(255),
                    password varchar(255)
                )";
                $query=$conn->query($loginform); 

                if($query){
                    $INSERT="INSERT INTO `loginform` (`username`, `password`) VALUES ( 'admin', 'admin')";
                    $query=$conn->query($INSERT); 

                }


                header("location:index.php?success");
            }
        }
    }




?>


</body>
</html>
