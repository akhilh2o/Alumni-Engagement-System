<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

include "connection.php";
if($_POST){
    $user=$_POST["username"];
    $query=mysqli_query($con,"select * from Signup where Email='$user'")or die(mysqli_error($con));
    $count=mysqli_num_rows($query);
    $row=mysqli_fetch_array($query);
    if($count==0)


    
    
    
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'guptaakhilesh978@gmail.com';                 // SMTP username
        $mail->Password = 'cbcefec98680b0a42ac61c1f08cc630e';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
        
        //Recipients
        $mail->setFrom('guptaakhilesh978@gmail.com', 'Akhilesh Gupta');
        $mail->addAddress('$user', '$user');     // Add a recipient

        $mail->addAddress('guptaakhilesh978@gmail.com');               // Name is optional
        $mail->addReplyTo('guptaakhilesh978@gmail.com', 'Information');
        $mail->addCC('cc@example.com');
        $mail->addBCC('bcc@example.com');
        
        //Attachments
        $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        
        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Forget Passsword';
        $mail->Body = 'Hi'.$user.' this is your password:'. $row['password'];
        $mail->AltBody = 'Hi' . $user . ' this is your password:' . $row['password'];
        
        $mail->send();
        echo 'Message has been sent in your email';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css">
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<title>Logout page</title>
</head>
<body>
  
    <div class="container" >
        <div class="text-center " style="margin-top:20%;">
            
                
                
                <form action="forget.php" method="POST">
                    <p class="text-center text-danger"> Are You Really Want To Recover Your Password?</p> <br><br>
                    <label for="username"> Enter Email</label>
                    <input type="text" name="username" id="user">
                    <button type="submit" class="btn-primary">Submit</button><br><br>
                    <a href="login.html"><button type="button" class="btn-danger"> Cencel</button></a>
                    
                </form>
                <style>
                    body{
                     background:#EEEEEE;
                      font-family: 'Montserrat', sans-serif;
                    }
                form{
                   margin-left:28%;
                    width:500px;
                    height:300px;
                      box-shadow: 10px 10px 5px #aaaaaa;
                      padding:30px;
                      background:white;
                }
                
                </style>
       
        </div>
    </div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/js/bootstrap.min.js"></script>
</body>
</html>
