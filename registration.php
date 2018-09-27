<!DOCTYPE html>
<html>

<head>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home || Alumni Engagement System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="registration.css" />


</head>

<body>
    <div class="header">
        <div id="tag">
            <h1>Alumni Engagement
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; System</h1>
        </div>
        <div id="nav">
            <a href="Home.html">Home</a>

            <a href="login.html">Login</a>


        </div>
        <div id="socialmedia">
            <a href="www.facebook.com">
                <i class="fa fa-facebook-square    "> Facebook</i>
            </a>
            <a href="www.google.com">
                <i class="fa fa-google-plus-circle" aria-hidden="true"> Google</i>
            </a>
            <a href="www.twitter.com">
                <i class="fa fa-twitter    "> Twitter</i>
            </a>
            <a href="www.pinterest.com">
                <i class="fa fa-pinterest-square    "> Pinterest</i>
            </a>

        </div>
    </div>
<?php
$nameErr="";
$workErr="";
$occupationErr="";
$emailErr="";
$phoneErr="";
$passwordErr="";
$boolean=false;



                
$localhost="localhost";
$root="root";
$password="";
$db="aes";
$con= mysqli_connect($localhost, $root, "",$db); // Establishing connection with server..


function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}

if(isset($_POST['submit'])){


$name=$work=$occupation=$email=$phone=$password="";



if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST['name'])){
        $nameErr="Name is Required";
       $boolean=false;
    }else{
        $name=test_input($_POST['name']); // Fetching Values from URL.
        $boolean=true;
    }

   if(empty($_POST['work'])){
       $workErr="Institution/Organization Name Required";
       $boolean=false;
   }else{
       $work=test_input($_POST['work']);
       $boolean=true;
    }
  if(empty($_POST['occupation'])){
      $occupationErr="This is Mendatary";
      $boolean=false;
  }else{
      $occupation=test_input($_POST['occupation']);
     $boolean=true;
    }

 if(empty($_POST['email'])){
     $emailErr="Email is Required";
     $boolean=false;
 }else{
     $email=test_input($_POST['email']);
      $boolean=true; 
    }

if(empty($_POST['phone'])){
    $phoneErr="Phone number is required";
    $boolean=false;
}else{
    
$phone=test_input($_POST['phone']);
$boolean=true;
}
if(empty($_POST['password'])){
    $passwordErr="Password is Required";
    $boolean=false;
}else{

    $password=test_input($_POST['password']); // Password Encryption, If you like you can also lea
    $boolean=true;
}
    
      
}
// Check if e-mail address syntax is valid or not

$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    
      $emailErr="Email is not currect";
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
}else
{
echo "Error....!!";
}
}else{
     $emailErr="This email is already exist";
}
}
}
mysqli_close ($con);
?>






    <div class="container">
        <div class="main">
            <h2>Create Account</h2><br><br>
            <form method="POST" action="<?php echo htmlentities($_SERVER[ 'PHP_SELF ']);?>">

                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" name="name" placeholder="Your Full Name" required />
                <span class="error">*<?php echo $nameErr; ?> </span>
                <hr> <br>


                <i class="fa fa-building-o" aria-hidden="true"></i>
                <input type="text" name="work" placeholder="Name of Institute/Organazation" required />
                <span class="error">* <?php echo $workErr; ?> </span>
                <hr>
                <br>
                <i class="fa fa-user"></i>
                <select name="occupation" id="occupation" required>
                    <option value="0">---Select---</option>
                    <option value="Student">Student</option>
                    <option value="Faculty">Faculty</option>
                    <option value="Alumni">Alumni</option>
                    <option value="Others">Others</option>
                </select>
                <span class="error">*<?php echo $occupationErr; ?> </span>
                <br>
                <hr>
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <input type="email" name="email" id="email" placeholder="Email" required />
                <span class="error">*<?php echo $emailErr; ?> </span>
                <br>
                <hr>
                <i class="fa fa-mobile-phone" aria-hidden="true"></i>
                <input type="text" name="phone" id="phone" placeholder="Phone Number" required/>
                <span class="error">*<?php echo $phoneErr; ?> </span>
                <br>
                <hr>
                <i class="fa fa-lock "></i>
                <input type="password" name="password" id="password" placeholder="Password" required/>
                <span class="error">*<?php echo $passwordErr; ?> </span>
                <br>
                <hr>

                <input type="submit" name="submit" value="Create Account"><br><br>

                <p>I have Already Account <a href="login.html">Login Please</a></p>



            </form>

        </div>

    </div>





    <div class="copyright">
        <span>All Reserve Rights @ 2018</span>
    </div>

   

</body>

</html>