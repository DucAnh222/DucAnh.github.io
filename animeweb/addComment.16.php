<?php
session_start();
include('connect.php');

foreach ($_POST as $key => $entry)
{
     print $key . ": " . $entry . "<br>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION["user_id17"];
    $email = $_SESSION["email"];
    $message= $_POST["message"];


    $sql = "INSERT INTO comments (user_id17, email, message) VALUES ($user_id, '$email', '$message')";
    echo $sql;

    if ($connection->query($sql) === TRUE) {
        echo "Data inserted successfully";
        header("Location:watch16.php");
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    $connection->close();
}
?>