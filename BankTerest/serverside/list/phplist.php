<?php
    require_once("../phpFiles/connection.php");
    $message=" ";
    $data=" ";   
    try 
    {   
        $table_name="users,accounts";
        $mysqlcmd=" SELECT users.id as iduser, accounts.idaccounts, users.Email, accounts.amount
                    FROM $table_name
                    WHERE users.id=accounts.iduser";
        
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
            amount
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