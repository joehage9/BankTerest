<?php
    $message="";
    $recieverInitialAmount=0;
    $initialAmount=0;
    if(isset($_POST["submitTransferProgress"]))
    {               
        try 
        {                            
            require_once("../phpFiles/connection.php"); 
            $initialAccount = trim($_POST['initialAccount']);
            $recieverAccount = trim($_POST['recieverAccount']);
            $amountT = trim($_POST['amountTransferred']);

            $initialAccount = stripslashes($_POST['initialAccount']);
            $recieverAccount = stripslashes($_POST['recieverAccount']);
            $amountT = stripslashes($_POST['amountTransferred']);
            
            $email=$_GET["email"];
            strtolower($email);
         
            if(!empty($_POST['initialAccount']) && !empty($_POST['amountTransferred'])&& !empty($_POST['recieverAccount']))
            {
                $table_name1="accounts";
                $sqlcmd="   SELECT COUNT(*) as COUNT
                            FROM $table_name1
                            WHERE accounts.idaccounts='$initialAccount'";

                $result=$conn->query($sqlcmd);             
                $count0=0;
                
                while($row=$result->fetch(PDO::FETCH_ASSOC))
                {
                    $count0=$row["COUNT"];
                }    
                $sqlcmd1="   SELECT COUNT(*) as COUNT
                            FROM $table_name1
                            WHERE accounts.idaccounts='$recieverAccount'";

                $result=$conn->query($sqlcmd1);             
                $count1=0;
                
                while($row=$result->fetch(PDO::FETCH_ASSOC))
                {
                    $count1=$row["COUNT"];
                }        
                $countL=$count0+$count1;
                if($countL==2)
                {
                    $email=str_replace(" ","",$email);
                    $table_name ="users,accounts";   
                    $mysqlcmd=" SELECT accounts.amount
                                FROM $table_name
                                WHERE users.id=accounts.iduser and accounts.idaccounts='$initialAccount' and users.Email='$email'";
        
                    $conn->query($mysqlcmd); 
                    $result=$conn->query($mysqlcmd);             
                    $count=0;
                    
                    while($row=$result->fetch(PDO::FETCH_ASSOC))
                    {
                        $initialAmount=$row["amount"];
                    }      
                    
                    $mysqlcmd1=" SELECT accounts.amount
                                FROM accounts
                                WHERE accounts.idaccounts='$recieverAccount'";
        
                    $conn->query($mysqlcmd1); 
                    $result=$conn->query($mysqlcmd1);   
                    
                    while($row=$result->fetch(PDO::FETCH_ASSOC))
                    {
                        $recieverInitialAmount=$row["amount"];
                    }      
                    if($initialAmount>$amountT)
                    {
                        $newAmount=$initialAmount-$amountT;//l hseb li nchel menno cash
                        $newAmountReciever=$recieverInitialAmount+$amountT;//l hseb li nzed 3le cash
                        
                        $mysqlcmd2="UPDATE accounts SET amount = '$newAmount' where accounts.idaccounts=$initialAccount";
                        $mysqlcmd3="UPDATE accounts SET amount = '$newAmountReciever' where accounts.idaccounts=$recieverAccount";
                        
                        $conn->exec($mysqlcmd2);
                        $conn->exec($mysqlcmd3);
                        header("location:../main/main.php?email=$email");
                    }
                    else
                    {
                        $message="amount tranferred is higher than the amount available.";
                    }
                }
                else
                {
                    $message="one of the accounts is incorrect";
                }
            }     
        }
        catch(PDOException $e)
        {
            echo ("Connection failed.");
            //  . $e->getMessage()
        }
        finally
        {
            $conn=null;
        }                
    }

?>