<?php
session_start();
include('connect.php');
foreach ($_POST as $key => $entry)
{
     print $key . ": " . $entry . "<br>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id= $_POST["user_Id"];
    $email = $_POST["loginEmail"];
    $msg = $_POST["message"];
    
    $sql= "SELECT * FROM `users` WHERE  email = '$email' and password = '$password'";
    echo $sql;

    $result = $connection->query($sql);

    if($result -> num_rows === 1)
    {
        echo("sent successful");
        $_SESSION['user_Id'] = $id;
        header('Location:watch.php');
        return;
    }
    }else{
        echo ("Incorrect details");
    }   

    $connection->close();

?>