<?php
$con=mysqli_connect("localhost","root","Roshanpius2208","rrr_store")or die(mysqli_error($con));
session_start();

$old_pass =mysqli_real_escape_string($con,$_POST['old-pass']);
$new_pass = mysqli_real_escape_string($con,$_POST['new-pass']);
$retype_new_pass = mysqli_real_escape_string($con,$_POST['retype new pass']);
$done="update user set password= '$new_pass' where user.password='$old_pass'";
$submit=mysqli_query($con,$done)or die(mysqli_error($con));
include 'header.php';
echo("<br>");
echo("<br>");
echo("<br>");
echo("<br>");
echo("<center>");

echo ("<h1>"."<b>"."your password is changed "."</b>"."</h1>");
echo("</center>");


$_session['id']=mysqli_insert_id($con);
?>