<?php
$con=mysqli_connect("localhost","root","Roshanpius2208","rrr_store")or die(mysqli_error($con));
session_start();

$name =mysqli_real_escape_string($con,$_POST['name']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$message = mysqli_real_escape_string($con,$_POST['message']);
$include="insert into contactus(name,email,message) values('$name','$email','$message')";
$submit=mysqli_query($con,$include)or die(mysqli_error($con));
include 'header.php';
echo("<br>");
echo("<br>");
echo("<br>");
echo("<br>");
echo("<center>");
echo ("<h1>"."<b>"."your response is submitted"."</b>"."</h1>");
echo("</center>");

$_session['email'] = $email;
$_session['id']=mysqli_insert_id($con);
?>