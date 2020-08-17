<?php

session_start();

if(isset($_POST["btnok"])){
    $_SESSION["who"]=$_POST["txtUserName"];
    header("location:hello.php");

    // $_SESSION["who"]=$_POST["btnok"];
    exit(0);
    }
else{    
    echo "first";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    
    
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
    your name:
    <input type="text" name="txtUserName">   
    <!-- <input type="text" name="txtUserNick">    -->
    <input type="submit" name="btnok" value="OK">   
    </form>
</body>
</html>