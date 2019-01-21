<?php
    $message="";
    if(isset($_POST["submitSigninToProgress"]))
    {               
        try 
        {                            
            require_once("../phpFiles/connection.php"); 
            $email = trim($_POST['Email']);
            $pass = trim($_POST['Password']);

            $email = stripslashes($_POST['Email']);
            $pass = stripslashes($_POST['Password']);
            
            strtolower($email);
         
            if(!empty($_POST['Password']) && !empty($_POST['Email']))
            {
                $email=str_replace(" ","",$email);
                $table_name ="users";   
                $mysqlcmd=" SELECT COUNT(*) as COUNT
                            from $table_name 
                            where $table_name.Email='$email' and $table_name.Password='$pass'"; 

                $conn->query($mysqlcmd); 
                $result=$conn->query($mysqlcmd);             
                $count=0;
                
                while($row=$result->fetch(PDO::FETCH_ASSOC))
                {
                    $count=$row["COUNT"];
                }      
                
                if($count==1)
                { 
                    header("location:../main/main.php?email=$email");                   
                }
                else 
                {
                    $message="Incorrect username / password.";                    
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