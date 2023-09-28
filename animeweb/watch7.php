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

    
    <h1>Classroom for heroes</h1>
    
    <p>Episode 1  </p>    

    <div class="d-flex align-items-center">`
    
    <img width="400" src="https://images.unsplash.com/photo-1685654205174-b640e37636b0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2942&q=80" class="mx-auto">

    <div class="anime__details__episodes">
        <div class="section-title">
            <h5>List of episode</h5>
        </div>
        <div>
        <a href="#">Ep 01</a>
        <a href="#">Ep 02</a>
        <a href="#">Ep 03</a>
        <a href="#">Ep 04</a>
        <a href="#">Ep 05</a>
        <a href="#">Ep 06</a>
        <a href="#">Ep 07</a>
        <a href="#">Ep 08</a>
        <a href="#">Ep 09</a>
        <a href="#">Ep 10</a>
        <a href="#">Ep 11</a>
        <a href="#">Ep 12</a>
        <a href="#">Ep 13</a>
        <a href="#">Ep 14</a>
        <a href="#">Ep 15</a>
        <a href="#">Ep 16</a>
        <a href="#">Ep 17</a>
        <a href="#">Ep 18</a>
        <a href="#">Ep 19</a>
        </div>
<h2>Comments</h2>

<?php 
include('connect.php');

$sql= "SELECT * FROM comments7";

$result = $connection->query($sql);

if($result -> num_rows > 0)
{
    while($row = $result -> fetch_assoc()) {
         $email = $row["email"];
         $message = $row["message"];
         $timestamp = $row["timestamp"];
         echo '<div class="container darker">
         <label for="Name">'.$email.'</label>
         <p>'.$message.'</p>
         <span class="time-right"> '.$timestamp.' </span>
       </div>';
           }
       }
       $connection->close();
?>


<h2> add your comment</h2>

<form action="addComment7.php" method="post" >
              
      <input type="text" name="message" id="message" class="form-control" autocomeplete="off"/>
         <br>
         <input type="submit" name="submit" class="btn btn-primary" style="float:right;" value="send"/>
</form>

</body>
</html>