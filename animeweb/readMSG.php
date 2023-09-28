<?php
session_start();
include('connect.php');
foreach ($_POST as $key => $entry)
{
     print $key . ": " . $entry . "<br>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id= $_POST["user_id"];
    $email = $_POST["loginEmail"];
    $msg = $_POST["msg"];
    
    $sql= "SELECT * FROM `users` WHERE  email = '$email' and password = '$password'";
    echo $sql;

    $result = $connection->query($sql);

    if($result -> num_rows === 1)
    {
        echo("sent successful");
        $_SESSION['user_id'] = $id;
        header('Location:Chatgroup.php');
        return;
    }
    }else{
        echo ("Incorrect details");
    }   

    $connection->close();

?>