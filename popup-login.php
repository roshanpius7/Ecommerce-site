
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
            pop-up login
            </title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.6.0.min.js"></script><!-- comment -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    
    <body>
        <div class="space">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="thumbnail">
                        <img src="img/5.jpg"><!-- comment -->
                        <div class="caption">
                            <center>
                            <h3>Sony DSLR
                                
                            </h3>
                            <p>
                               Price:Rs.40000.00 
                            </p>
                            
                            <button class="btn btn-primary btn-block color"><a href=""> Order Now!</a>
                                
                            </button>
                            <center>
                        </div>
                        <a href="header.php"></a>
                    </div>
                </div>
                       <div class="col-lg-4">
                <div class="thumbnail">
                    <img src="img/2.jpg" alt="Sony DSLR"><!-- comment -->
                    <div class="caption">
                        <center>
                        <h3> Sony DSLR </h3> 
                        <p> Price:Rs.40000.00</p>
                        <button type="button" class="btn btn-primary btn-block color"> <a href=""> Order Now!</a></button>
                        </center>
                    </div>
                    
                </div>     
            </div> 
                
                
                <div class="col-lg-4">
                <div class="thumbnail">
                    <img src="img/4.jpg" alt="Olympus DSLR"><!-- comment -->
                    <div class="caption">
                        <center>
                        <h3> Olympus DSLR </h3> 
                        <p> Price:Rs.80000.00</p>
                        <button type="button" class="btn btn-primary btn-block color"> <a href="">Order Now!</a></button>
                        </center>
                    </div>
                    
                </div>     
            </div>
                
                
                
            </div>
        </div>
        </div>
            <?php
            include 'footer.php';
            ?>
        
        
        <div class="bg-modal">
          
            <div class="modal-content">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="close"> <a href="index.php">  +   </a></div>
                        <h4> Login form</h4>
                    </div>
                    <div class="panel-body">
                        <p class="text-warning"> don't have a account? <a href="signup.php">register</a></p>
                        <form method="post" action="conform.php">
                            
                        <div class="form-group">
                            <input type="email" name="email"  placeholder="Email" class="form-control" required="true" pattern="[a-zA-Z0-9._\-]+@[a-zA-Z0-9.\-]+\.[a-zA-Z]{2,4}" >
                      
                        </div>
                            
                            <div class="form-group">
                                <input type="password" name="password"  placeholder="Password" class="form-control" required="true"pattern=".{6,}">
                      
                            
                            </div><!-- comment -->
                            
                            
                            
                            
                             <div class="form-group">
                                 <button type="submit" name="submit" class="btn btn-primary"><a href="products.php"> Login</a></button>
                                </div>
                            
                        </form>
                       
                        <p class="text-warning"> Forgot Password? <a href="newpassword.php"> click here</a></p>
                            
                
                        
                    </div>
                    
                </div>
                
                </div>
                
                  
            
        </div>
    </body>
</html>