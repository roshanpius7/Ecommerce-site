<?php

$con=mysqli_connect("localhost", "root", "Roshanpius2208","rrr_store")or die(mysqli_error($con));
session_start();
$name =mysqli_real_escape_string($con,$_POST['name']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$contactno = mysqli_real_escape_string($con,$_POST['contact']);
$city = mysqli_real_escape_string($con,$_POST['city']);
$address = mysqli_real_escape_string($con,$_POST['address']);
$connect = "insert into user(name,email,password,contact,city,address) values('$name','$email','$password','$contactno','$city','$address')";
$submit = mysqli_query($con,$connect) or die(mysqli_error($con));


include 'header.php';

echo("<br>");
echo("<br>");
echo("<br>");
echo("<br>");
echo("<center>");
echo ("<h1>"."<b>"."signed up successfully"."</h1>"."</b>");
echo("</center>");
$_session['email'] = $email;
$_session['id'] = mysqli_insert_id($con);
?>

