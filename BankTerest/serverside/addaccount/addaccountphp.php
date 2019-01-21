<?php
    $message="";
    if(isset($_POST["SumitAddAccountForm"]))
    {               
        try 
        {                            
            require_once("../phpFiles/connection.php"); 
            $email = trim($_POST['Email']);

            $email = stripslashes($_POST['Email']);
            
            strtolower($email);
         
            if(!empty($_POST['Email'])&&!empty($_POST['amount']))
            {
                $email=str_replace(" ","",$email);
                $table_name ="users";   
                $mysqlcmd=" SELECT id
                            from $table_name 
                            where $table_name.Email='$email'"; 

                $conn->query($mysqlcmd); 
                $result=$conn->query($mysqlcmd);             
                $count=0;
                $userid=null;
                while($row=$result->fetch(PDO::FETCH_ASSOC))
                {
                    $userid=$row["id"];
                    $count++;
                }      
                
                if($count==1)
                { 
                    $amount=$_POST["amount"];
                    $table_name ="accounts";   
                    $mysqlcmd1=" INSERT INTO $table_name(iduser,amount) 
                    VALUES('".$userid."','".$amount."')";

                    $conn->query($mysqlcmd1);   
                    header("location:../main/main.php");                   
                }
                else 
                {
                    $message="Incorrect email/no such user";                    
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