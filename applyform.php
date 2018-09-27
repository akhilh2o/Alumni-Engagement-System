<?php
 include_once 'connection.php';

 if($_POST['submit']){
     $fname=$_POST['First_Name'];
     $lname=$_POST['Last_Name'];
     $add=$_POST['Email_Address'];
    $Portfolio = $_POST['Portfolio'];
    $Position= $_POST['Position'];
    $StartDate= $_POST['StartDate'];
    $Phone= $_POST['Phone'];
    $Fax = $_POST['Fax'];
    $Relocate = $_POST['Relocate'];
    $Org = $_POST['Organization'];
    $Reference= $_POST['Reference'];



    
    $query="insert into JobApp (FirstName,LastName,Address,Portfolio,Position,StartDate,Phone,Fax,Relocation,Orgnization,Reference)values('$fname','$lname','$add','$Portfolio','$Position','$StartDate','$Phone','$Fax','$Relocate','$Org','$Reference')";
    $query=mysqli_query($con,$query);
    if($query){
        echo"thank for apply";
        header("location:jobs.html");
    }
    else{
        echo "please fill again";
    }
}


?>