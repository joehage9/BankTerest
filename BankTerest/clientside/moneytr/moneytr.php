<?php 
    require_once("../navigation/nav.php");
    require_once("phpmoneytr.php");    
?>                  
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BankTerest | money transfer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.css" />
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>  
        
    <div class="jumbotron">        
        <div class="row">
            <div class="col-sm-12">

                <form method="POST">   
                    <h1 class="form-group">money transfer</h1>        
                    <div class="form-group">
                        <label>Account number</label>
                        <input  class="form-control" type="number" name="initialAccount" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Reciever account number:</label>    
                        <input  class="form-control" type="number" name="recieverAccount" required>                       
                    </div>   
                    
                    <div class="form-group">
                        <label>Amount:</label>    
                        <input  class="form-control" type="number" name="amountTransferred" required>                       
                    </div>   

                    <div class="text-danger">  
                        <?php
                            echo $message;
                        ?>
                    </div>             
                    <input class="btn btn-primary" type="submit" value="Submit" name="submitTransferProgress">
                </form>   
            </div>            
        </div>
    </div>
    
    
</body>
</html>