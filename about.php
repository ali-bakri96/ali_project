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

<div class="about">
  <img src="images/restaurant.jpg" alt="Ali_restaurant">
  <h1>About Our Ali Restaurant</h1>
    <p>
          Ali Restaurant offers you many different options that allow you to choose your favorite meals and help change the daily routine of food and break the boredom of traditional food.<br>
      At Ali restaurant sessions, you will feel relaxed and happy<br>
      In our restaurant, you will find food and sweets made in the original way by the most skilled chef, and all our food is made with love and passion
    </p>
</div>


<div class="footer">
  &copy; 2020 Ali Restaurant
</div>
</div>
<script src="main.js" charset="utf-8"></script>
</body>
</html>
