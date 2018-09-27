<?php
$localhost="localhost";
$root="root";
$password="";
$db="aes";
$con=mysqli_connect($localhost,$root,$password,$db);
if(!$con)
{
    die("Connection Failed:".mysql_connect_error());
}


?>