<?php
require 'commonforlast3.php'
?>
<?php
session_start();
if(isset($_session['id'])){
    echo "hello".$_session['email'];
}
else{
    echo "hello guest!";
}

?>
<html>
    <head>
        
        <title> newpassword </title><!-- comment -->
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"><!-- comment -->
            <script type="text/javascript" src="bootstrap/js/jquery-3.6.0.min.js"><!-- comment --></script>
                <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
                <link rel="stylesheet" type="text/css" href="index.css">
        
        
        
        <style>
        .space{
        background-color:white;
        }
        </style>
        
      
    </head>
    <body>
        <div class="space"><br><br><br>
                <div class="container">
                    <center>
                <div class="row">
                    <div class=" col-lg-offset-3 col-lg-6">
                        <center>       
        <form method="post" action="change.php">
            <!-- comment -->
                <h2> <b>Change Password</b></h2>
                <div class="form-group">
                <input type="password" name="old-pass" class="form-control" placeholder="old pass" required="true" >
                </div><br>
                 <div class="form-group">
                <input type="password" name="new-pass" class="form-control" placeholder="new pass" required="true" pattern=".{6,}">
                 </div><br>
                  <div class="form-group">
                <input type="password" name="retype new pass" class="form-control" placeholder="retype new pass" required="true" pattern=".{6,}">
                  </div> <br>
                 
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary" > change</button>
                </div>
                
                
                
                
                
                    </div><!-- comment -->
                </div>
        </form>
                        </center>
            </div>
        </div>
       
    </body>
</html><br><br><br><br>
    <?php
    require'footer.php';
    ?>
