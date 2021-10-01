<?php
$con=mysqli_connect("localhost","root","Roshanpius2208","rrr_store");
session_start();
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['password']);
include 'header.php';
echo("<br>");
echo("<br>");
echo("<br>");
echo("<br>");
echo("<center>");
if($email == $email){
echo ("<h1>"."<b>"."logged in successfully"."</h1>"."</b>");

}
else{
        echo ("<h1>"."<b>"."please signup"."</h1>"."</b>");
    }
echo("</center");

$_session['email'] = $email;

?>