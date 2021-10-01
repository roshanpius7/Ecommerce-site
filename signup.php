





<?php


require 'header.php';
echo("<br>.<br>.<br>");
?>

<?php
session_start();

if (isset($_session['id'])){
    echo "hello" . $_session['email'];
    
}
else{
    echo ("<center>"."<h2>"."<b>"."Hello guest !"."</h2>"."</b>"."</center>");
}
?>

<html>
    <head>
        <title>
            livesupport
        </title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.6.0.min.js"></script><!-- comment -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="index.css">
        <style>
        .space{
        background-color:white;
        }
        </style>
    </head>
    <body>
        <div class="space">
        <div class="container">
            <center>
            <div class="row">
                <div class="col-lg-12">
                    
                    <img src="img/hand.jpg">
                
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    
                    <form method="post" action="connect1.php">
            <!-- comment -->
                <h1> <b>Sign up </b></h1>
                <div class="form-group">
                <input type="text" name="name"  class="form-control" placeholder="Name" required="true">
                </div>
                 <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required="true" pattern="[a-zA-Z0-9._\-]+@[a-zA-Z0-9.\-]+\.[a-zA-Z]{2,4}">
                 </div>
                  <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required="true" pattern=".{6,}">
                </div> 
                 <div class="form-group">
                <input type="number" name="contact" class="form-control" placeholder="Contact no." required="true">
                </div> 
                 <div class="form-group">
                <input type="text" name="city" class="form-control" placeholder="City" required="true">
                </div> 
                 <div class="form-group">
                <input type="text" name="address" class="form-control" placeholder="address" required="true">
                </div>
                <div class="form-group">
                    <button type="submit" name="submit"  class="btn btn-primary" >submit</button>
                </div>
                
        </div>
        </div>
        </div>
            </center>
        </div>
    </body>
    
</html>
 <?php
 require'footer.php';
 ?>