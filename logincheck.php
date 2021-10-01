<?php

require 'common.php';

$email= $_POST['email'];
$pattern= "[a-zA-Z0-9._\-]+@[a-zA-Z0-9.\-]+\.[a-zA-Z]{2,4}";
if (!preg_match($pattern,$email))
{
    header('location: popup-login.php?email_error= enter correct email');
}
$password= $_POST['password'];
if(strlen($passwowrd)<6){
      header('location: popup-login.php?password_error=enter correct password');

}
$email=mysqli_real_escape_string($con,$email);
$password=mysqli_real_escape_string($con,$password);
?>