<?php
require 'commonforlast3.php';
?>
<html>
    <head>
        <title>
            Cart
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
            
                   <table class="table table-bordered ">
                    <tbody>
                        <tr><th> item number</th><th>item name</th><th>price</th><th>  </th></tr><!-- comment -->
                         <tr><th>           </th><th>   </th><th>  </th><th>  </th></tr>
                         <tr><th> </th><th>total</th><th> rs 0</th><th> <button type="button" class="btn btn-primary color"><a href="success.php">conform order</a></button></th></tr>
                    </tbody>
        
                         </table>
        </div>
       
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      
        
        <?php
require 'footer.php';
?>
       
    </body><!-- comment -->
</html><!-- comment -->
