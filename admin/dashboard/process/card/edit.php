<?php
include '../conn.php';

if(isset($_POST['edit'])&& isset($_FILES['image'])){

    $id=$_POST['id'];
    $Name=$_POST['name'];
    $job=$_POST['job'];
//  $img=$_POST['image'];

// $img =$_FILES['image']['name'];
// $img_type =$_FILES['image']['type'];
// $error =$_FILES['image']['error'];
// $img_size =$_FILES['image']['size'];
// $tmp_name =$_FILES['image']['tmp_name'];


    
//         $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
//         $img_ex_lc = strtolower($img_ex);

//         $allowed_exs = array("jpg","jpeg","png");
//         if(in_array($img_ex_lc,$allowed_exs)){
//             $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
//             $img_upload_path ='upload/' .$new_img_name;
//             move_uploaded_file($tmp_name, 'upload/'.$img_name);

//             $sql="UPDATE `slider` SET image='$img' Name='$Name', job='$job'
//                     WHERE id='$id' ";

//             $result=$mysqli->query($sql);
            
//             header("location:../../teams.php?success");
//         }
//         else{
//             $em ="extension error occure";
//             header("location:../../teams.php?error=$em");
//         }
    
// }
// else{
//     header("location:../../teams.php?error");
// }


    $query ="UPDATE `slider` SET Name='$Name', job='$job'
             WHERE id='$id'";

    // $result=mysqli_query($mysqli,$query);
    $result = $mysqli->query($query);

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