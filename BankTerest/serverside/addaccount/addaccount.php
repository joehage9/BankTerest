<?php 
    require_once("../navigation/nav.php");
    require_once("addaccountphp.php");
?>                  
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> BankTerest | Sign up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.css" />
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>  
    <div class="jumbotron">
        <div class="row">
            <div class="col-sm-12">
                <form method="POST">           
                    <h1 class="form-group">Register account</h1>
                    <div class="form-group">    
                        <label>Email:</label>                
                        <input class="form-control" type="email" name="Email" required> 
                    </div> 

                    <div class="form-group">    
                        <label>initial amount:</label>                
                        <input class="form-control" type="number" name="amount" required> 
                    </div> 
                    <div class="text-danger">  
                        <?php
                            echo $message;
                        ?>
                    </div> 
                    <div class="form-group">    
                        <input class="btn btn-primary" type="submit" value="Submit" name="SumitAddAccountForm">                    
                    </div> 
                </form>
            </div>
            
        </div>
    </div>    

     
   
    
    
</body>
</html>