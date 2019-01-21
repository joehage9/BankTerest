<?php 
    require_once("../navigation/nav.php");
    require_once("phplist.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BankTerest | overview</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.css" />
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
    <div classs="container">       
        <div class="row">
            <div class="col-sm-12">   
                <div class="form-group">
                    <div class="table-responsive-sm table-hover">
                        <table class="table">
                            <thead>                               
                                <?php echo $data;?>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php echo $message;?>                           
                                </tr>
                            </tbody>
                        </table>                                             
                    </div>        
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>