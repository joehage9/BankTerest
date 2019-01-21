<?php 
    require_once("phpsignin.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BankTerest | Sign in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.css" />
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
    
    <div class="jumbotron">        
        <div class="row">
            <div class="col-sm-12">

                <form method="POST">   
                    <h1 class="form-group">Sign In</h1>        
                    <div class="form-group">
                        <label for="exampleInputEmail">Email:</label>
                        <input  class="form-control" type="email" name="Email" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword">Password:</label>    
                        <input  class="form-control" type="password" name="Password" required>                       
                    </div>     
                    <div class="text-danger">  
                        <?php
                            echo $message;
                        ?>
                    </div>             
                    <input class="btn btn-primary" type="submit" value="Submit" name="submitSigninToProgress">
                </form>   
            </div>            
        </div>
    </div>
    
</body>
</html>