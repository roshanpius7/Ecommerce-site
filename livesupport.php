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
            <div class="row">
                <div class="col-lg-8">
                    <h2> <b> Live Suppport</b></h2><br><!-- comment -->
                    <p>
                        Messaging is ranked as the #1 route customers would like to take to connect with businesses. With more than 50 billion messages delivered every day, it’s the most popular method to get to loved ones, friends, and these days, your company.

Live Support helps make online messaging an easy task to be able to enable you to connect, convert, and maintain bonds with every customer that comes to you - regardless of the browser or device.
                    </p>
                    
                </div>
                
                <div class="col-lg-2 ">
                    <img src="img/call.png"><!-- comment -->
                    
                </div>
                
                
            </div>
            
            <div class="row">
                <div class="col-lg-8">
                    <form method="post" action="support.php">
                        <h2> <b>contact us </b></h2>
                        <div class="form-group"><!-- comment -->
                            <strong>Name</strong> <br><!-- comment -->
                        <input type="text" name="name" class="form-control">
                        </div>
                         <div class="form-group"><!-- comment -->
                            <strong>Email</strong> <br><!-- comment -->
                        <input type="email" name="email"   class="form-control">
                        </div>
                          <div class="form-group"><!-- comment -->
                            <strong>Message</strong> <br><!-- comment -->
                        <input type="message" name="message" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            
                            <button type="submit"  name="submit" class="btn btn-primary color" > Submit</button>
                        </div>
                        
                        
                    </form>
                    
                </div>
                
                <div class="col-lg-4">
                    
                    <h2>
                        Comapny information
                    </h2>
                    <h4>
                        loaction : Gopal nagar<br> <br>
                        
                        email-id: gopal420@gmail.com<br><br>
                        
                        partners: ROHITH , ROHAN <br> <br>
                        
                        contact.no:1234557<br>
                        
                    </h4>
                </div>
            
        </div>
        </div>
        </div>
    </body>
    
</html>
 <?php
 require'footer.php';
 ?>