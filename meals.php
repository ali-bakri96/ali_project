<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "best_restaurant";
$con = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if(mysqli_connect_error()) {
    echo "your connection to db is failed!";
    exit();
}

?>

<?php

$file_uri = array_filter(explode("/", $_SERVER["REQUEST_URI"]));
$page_uri = $file_uri[count($file_uri)];
$page_title = strtoupper(str_replace(".php", "", $page_uri));

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?=$page_title;?></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
      <h1 class="header">Ali Restaurant</h1>
      <ul class="menu">
        <li> <a href="home.php">Home</a> </li>
        <li> <a href="meals.php">Meals</a> </li>
        <li> <a href="drinks.php">Drinks</a> </li>
        <li> <a href="desserts.php">Desserts</a> </li>
        <li> <a href="about.php">About</a> </li>
      </ul>
     
<div class="menupages">
  <h1>Our Meals</h1>
<div>
  <h2>Burger</h2>
  <img src="images/burger.jpg" alt="burger" width="300px" height="250px">
  <p>Price: $8</p>
</div>
<div>
  <h2>Shawarma</h2>
  <img src="images/shawarma.jpg" alt="shawarma" width="300px" height="250px">
  <p>Price: $7</p>
</div>
</div>
<div class="footer">
  &copy; 2020 Ali Restaurant
</div>
</div>
<script src="main.js" charset="utf-8"></script>
</body>
</html>
