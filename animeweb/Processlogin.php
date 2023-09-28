<?php
session_start();
include('connect.php');
foreach ($_POST as $key => $entry)
{
     print $key . ": " . $entry . "<br>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["loginEmail"];
    $password = $_POST["loginPassword"];
    
    $sql= "SELECT * FROM `users` WHERE  email = '$email' and password = '$password'";
    echo $sql;

    $result = $connection->query($sql);

    if($result -> num_rows === 1)
    {
        echo("Login successful");
        while($row = $result -> fetch_assoc()) {
            $_SESSION['user_id'] = $row["id"];
            $_SESSION['user_id2'] = $row["id"];
            $_SESSION['user_id3'] = $row["id"];
            $_SESSION['user_id4'] = $row["id"];
            $_SESSION['user_id5'] = $row["id"];
            $_SESSION['user_id6'] = $row["id"];
            $_SESSION['user_id7'] = $row["id"];
            $_SESSION['user_id8'] = $row["id"];
            $_SESSION['user_id9'] = $row["id"];
            $_SESSION['user_id10'] = $row["id"];
            $_SESSION['user_id11'] = $row["id"];
            $_SESSION['user_id12'] = $row["id"];
            $_SESSION['user_id13'] = $row["id"];
            $_SESSION['user_id14'] = $row["id"];
            $_SESSION['user_i15'] = $row["id"];
            $_SESSION['user_id16'] = $row["id"];
            $_SESSION['user_id17'] = $row["id"];
        }
        $_SESSION['email'] = $email;
        header('Location:index.php');
    }else{
        echo ("Incorrect details");
        header('Location:alert3.php');
    }   }

    $connection->close();

?>