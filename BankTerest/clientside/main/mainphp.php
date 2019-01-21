<?php
    require_once("main.php");
    $email=$_GET["email"];
    if(isset($_POST["balanceSubmit"]))
    {
        header("location:../profile/profile.php?email=$email");
    }
    
    if(isset($_POST["moneytrSubmit"]))
    {
        header("location:../moneytr/moneytr.php?email=$email");
    }
?>