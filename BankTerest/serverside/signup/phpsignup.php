<?php
    $message=" ";
    $message1=" ";
    if(isset($_POST["SubmitSignupForm"]))
    {     
        try 
        {    
            require_once("../phpFiles/connection.php");
            $First_name=trim($_POST["First_name"]);
            $Last_name=trim($_POST["Last_name"]);
            $Email=trim($_POST["Email"]);
            $Password=trim($_POST["Password"]);
            $confPass=trim($_POST["confirmPassword"]);

            $First_name=stripslashes($_POST["First_name"]);
            $Last_name=stripslashes($_POST["Last_name"]);
            $Email=stripslashes($_POST["Email"]);
            $Password=stripslashes($_POST["Password"]);
            $confPass=stripslashes($_POST["confirmPassword"]);
                        
            strtolower($Email);       
            if(!empty($First_name)&&!empty($Last_name)&&!empty($Email)&&!empty($Password))
            {                
                $table_name="users";
                $mysqlcmd1="SELECT COUNT(Email) as COUNT
                            FROM $table_name
                            WHERE $table_name.Email='$Email'";
                $result=$conn->query($mysqlcmd1);  
                $count=0;

                while($row=$result->fetch(PDO::FETCH_ASSOC))
                {
                    $count=$row["COUNT"];
                }  

                if($count>0)
                {
                    $message1="This email is already taken.";
                }
                else
                {
                    if($Password!=$confPass)
                    {
                        $message="Passwords don't match.";
                    }
                    elseif($Password==$confPass)
                    {
                        $mysqlcmd=" INSERT INTO $table_name(First_name,Last_name,Email,Password,DoB) 
                                    VALUES('".$First_name."','".$Last_name."','".$Email."','".$Password."','".$_POST["DoB"]."')";
                        $conn->exec($mysqlcmd);   
                        if($conn)
                        {
                            header("location:../main/main.php");
                        }   
                    }
                }
            }

                                                       
            
        }
        catch(PDOException $e)
        {
            echo ("Connection failed.");
            // . $e->getMessage()
        }
        finally
        {
            $conn=null;
        }                
    }
?>