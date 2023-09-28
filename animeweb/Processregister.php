<?php
session_start();
include('connect.php');

foreach ($_POST as $key => $entry)
{
     print $key . ": " . $entry . "<br>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["registerEmail"];
    $password = $_POST["registerPassword"];

    $sql= "SELECT * FROM `users` WHERE  email = '$email'";
    echo $sql;
    $result = $connection->query($sql);
    if($result -> num_rows >0)
    {
        echo "user already exist";
        header("Location: alert1.php");
    }
    else {
    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
    echo $sql;

    if ($connection->query($sql) === TRUE) {
        echo "Data inserted successfully";
        header("Location: alert2.php");
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
    }}

    $connection->close();

?>