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
    <div classs="container">       
        <div class="row">
            <div class="col-md-6 col-sm-12">       
        
                <div class="jumbotron text-center">
                    <h2>Add a user to </h2>
                    <a href="../signup/Signup.php"><button class="btn btn-primary w-50">Go</button></a>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">             
                <div class="jumbotron text-center">
                    <h2>Add Account</h2>
                    <a href="../addaccount/addaccount.php"><button class="btn btn-primary w-50">Go</button></a>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">             
                <div class="jumbotron text-center">
                    <h2>List of users</h2>
                    <a href="../list/list.php"><button class="btn btn-primary w-50">Go</button></a>
                </div>
            </div>
        
        </div> 
    </div>        
   
    
    
</body>
</html>