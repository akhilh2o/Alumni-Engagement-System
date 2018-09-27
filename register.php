<?php
$localhost="localhost";
$root="root";
$password="";
$db="aes";
$con= mysqli_connect($localhost, $root, "",$db); // Establishing connection with server..

/*
function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
}
$name=$work=$occupation=$email=$phone=$password="";

$nameErr=$workErr=$occupationErr=$emailErr=$phoneErr=$passwordErr="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST['name'])){
        $nameErr="Name is Required";
    }else{
        $name=test_input($_POST['name']); // Fetching Values from URL.
    }
   if(empty($_POST['work'])){
       $workErr="Institution/Organization Name Required";
   }else{
       $work=test_input($_POST['work']);
    }
  if(empty($_POST['occupation'])){
      $occupationErr="This is Mendatary";
  }else{
      $occupation=test_input($_POST['occupation']);
    }
 if(empty($_POST['email'])){
     $emailErr="Email is Required";
 }else{
     $email=test_input($_POST['email']);
    }
if(empty($_POST['phone'])){
    $phoneErr="Phone number is required";
}else{
    $phone=test_input($_POST['phone']);
}
if(empty($_POST['password'])){
    $passwordErr="Password is Required";
}else{

    $password=test_input($_POST['password']); // Password Encryption, If you like you can also leave sha1.
}
    
      
}
// Check if e-mail address syntax is valid or not


*/
$name=$_POST["name"];
$email=$_POST["email"];
$work=$_POST['work'];
$occupation=$_POST["occupation"];
$password=$_POST['password'];
$phone=$_POST["phone"];

$email = filter_var($email, FILTER_SANITIZE_EMAIL); 

if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    
      echo "Email is not currect";
}
else
{
$result = mysqli_query($con,"SELECT * FROM signup WHERE email='$email'");
$data = mysqli_num_rows($result);
if(($data)==0){

$query= mysqli_query($con,"insert into signup(FullName, InstituteName,Occupation,Email, PhoneN,Password) values
 ('$name','$work','$occupation','$email', '$phone', '$password')"); // Insert query
if($query){
         header("Location: login.html"); 
}
else
{
echo "Error....!!";

}
}
else{
     echo"This email is already exist";
}
}
mysqli_close ($con);
?>