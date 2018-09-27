<?php
$localhost = "localhost";
$root = "root";
$password = "";
$db = "aes";
$con = mysqli_connect($localhost, $root, $password, $db);
if (!$con) {
    die("Connection Failed:" . mysql_connect_error());
}else{
    header("location:login.html");
}



session_start();
$uname=$password="";

if($_SERVER["REQUEST_METHOD"]=="POST"){


 $uname=mysqli_real_escape_string($con,$_POST["uname"]);
 $psw=mysqli_real_escape_string($con,$_POST["psw"]);



// $result = mysqli_query($con,"SELECT * FROM signup WHERE Email = '$uname' and Password='$psw'");

// $row = mysqli_fetch_array($result);

// if ($row["Email"] == $uname && $row["Password"] == $psw)
//     echo "You are a validated user.";
// else
//     echo "Sorry, your credentials are not valid, Please try again.";




$result = mysqli_query($con,"SELECT * FROM signup WHERE Email='$uname' and Password='$psw' ");
// $data = mysqli_fetch_array($result,MYSQLI_ASSOC);
 $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
          session_start();
          $_SESSION['login_user'] = true;
     
         header("location: main.php");
      }else {
          echo "<script>alert('Please Check your Email or Password')</script>";
         
        }   
    }
        





   
    
/*
  $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
   */

function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);

}
    
    
?>