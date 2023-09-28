<?php
session_start();
include('links.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;

}

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
</style>
</head>
<body>

<p> <a onclick href ="index.php">Home</a> 
<p> <a onclick href ="444.php">Anime series</a>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

   
<h2>Chat Messages</h2>

<h2> welcome</h2>

<?php 
include('connect.php');

$sql= "SELECT * FROM chat";

$result = $connection->query($sql);

if($result -> num_rows > 0)
{
    while($row = $result -> fetch_assoc()) {
         $email = $row["email"];
         $message = $row["message"];
         $timestamp = $row["timestamp"];
         echo '<div class="container darker">
         <img src="https://images.pexels.com/photos/3094799/pexels-photo-3094799.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Avatar" class="right" style="width:100%;">
<label for="Name">'.$email.'</label>
  <p>'.$message.'</p>
  <span class="time-right"> '.$timestamp.' </span>
</div>';
    }
}

$connection->close();
?>

<h2> add your message</h2>

<form action="addMSG.php" method="post" >
              
      <input type="text" name="message" id="message" class="form-control" autocomeplete="off"/>
         <br>
         <input type="submit" name="submit" class="btn btn-primary" style="float:right;" value="send"/>
</form>

</body>
</html>