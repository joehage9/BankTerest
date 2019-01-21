<?php
    require_once("../phpFiles/connection.php");
    require_once("profile.php");
    $message=" ";
    $data=" ";   
    try 
    {   
        $email=$_GET["email"];
        $table_name="users,accounts";
        $mysqlcmd=" SELECT users.id as iduser, accounts.idaccounts, users.Email, accounts.amount
                    FROM $table_name
                    WHERE users.id=accounts.iduser and users.Email='$email'";
        
        $result=$conn->query($mysqlcmd);  
        
        while($row=$result->fetch(PDO::FETCH_ASSOC))
        {
            $message=$message."<tr><td>".$row["iduser"]."</td><td>".$row["idaccounts"]."</td><td>".$row["Email"]."</td><td>".$row["amount"]."</td></tr>";
        }  
        $data=" 
        <th>
            iduser
        </th> 
        <th>
            idaccounts 
        </th>
        <th>
            Email
        </th>
        <th>
            amount (USD)
        </th>";
        
        
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
    
?>