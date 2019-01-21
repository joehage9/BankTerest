<?php 
    require_once("../navigation/nav.php");
    require_once("mainphp.php");    
?>                  
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BankTerest</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.css" />
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>  
        
    <form method="post">
        <div classs="container">       
            <div class="row">
                <div class="col-md-6 col-sm-12">             
                    <div class="jumbotron text-center">
                        <h2>Check balance</h2>
                        <button class="btn btn-primary w-50" type="Submit" name="balanceSubmit">Go</button></a>
                    </div>
                </div>
            
                <div class="col-md-6 col-sm-12">             
                    <div class="jumbotron text-center">
                        <h2>transfer money</h2>
                        <button class="btn btn-primary w-50" type="Submit" name="moneytrSubmit">Go</button></a>
                    </div>
                </div>
            </div> 
        </div>        
    </form>
   
    
    
</body>
</html>