<?php
session_start();
if($_SESSION=['login_user']==true){
session_destroy();
    echo 'You have been logged out. <a href="home.html">Go back</a>';
}
echo "your not login this email";
?>