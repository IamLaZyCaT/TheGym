<?php
session_start();

$mysqli = new mysqli("localhost","root","","phpthegym");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
else{
    if(isset($_POST['username'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
    
        // $sql="select * from loginform where username='".$username."'AND password='".$password."' limit 1";

        
        $sql="select id from loginform where username = '$username' and password = '$password'";
        $result=$mysqli->query($sql);
    
        // if(num_rows($result)==1)
        if($result->num_rows>0){
            
            $_SESSION["username"]=$username;
            header("location: ./dashboard/index.php");
        }
        else{
           if(empty($username)){
            $name_error="empty username";
            ?>
                <script>

            window.location.href = "./dashboard/index.php";
            alert ("<?php echo $name_error  ?>");
</script>

<?php
           }
            exit();
        }
    }


}

// $host="localhost";
// $user="root";
// $password="";
// $db="phpthegym";


// mysql_connect($host,$user,$password);
// mysql_selectdb($db);

// if(isset($_POST['username'])){
//     $username=$_POST['username'];
//     $password=$_POST['password'];

//     $sql="select * from loginform where username='".$username."' AND password='".$password."' limit 1";

//     $result=mysql_query($sql);

//     if(mysql_num_rows($result)==1){
//         echo"you have successfully logged in";
//     }
//     else{
//         echo "you have entered wrong password";
//         exit();
//     }
// }

// session_start();


// if(isset($_POST['login'])){
//     $conn = new mysqli('localhost','root','','phpthegym');

//     $username = $conn->real_escape_string($_POST['username']);
//     $password = $conn->real_escape_string($_POST['password']);


//     $data = $conn->query("select id from users where username = '$username' and password = '$password' ");

//     if($data->num_rows>0){
//         $_SESSION['loggedIn']='1';
//         $_SESSION['username']= $username;
//         echo "sucess";
//     }
//     else{
//         echo "fail";
//     }
// }



// mysql_connect("localhost","root"," ");
// mysql_selectdb("phpthegym");

//         if(isset($_POST['submit'])){
//             $username = $_POST['username'];
//             $password= $_POST['password'];

//             $sql="select * from loginform where username='".$username."' AND password='".$password."' limit 1";

//             if($username=='username' && $password=='password'){
//                 header("location:home.html");
//                 exit();
//             }
//             else{
//                 echo "Invalid username/password";
//             }
//         }
   

?>