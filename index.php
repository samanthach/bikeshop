<?php
//  INCLUDE ON EVERY TOP-LEVEL PAGE!
include("includes/init.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" href="images/favicon.png" type="image/gif" sizes="16x16">
  <link rel="stylesheet" href="style/style.css" type="text/css">

  <title>BOXY BIKES</title>
</head>

<body>

<div class="landing_container">

  <img class="logo" src="images/logo-small-yellow.png" alt="regular bike" />

    <div class="l_bike_container">
      <img class="landing_bike" src="images/landing_bike_after.gif" alt="electric bike" />
      <!-- IMAGE SOURCE: Provided to us by our client, edited + animated by Abigail Zhong -->
    </div>

  <div id="yellow_bar">
    <div id="landing_button_container">
      <button class="home_btn" onclick="window.location.href='home.php'">Home</button>
      <button class="learn_btn" onclick="window.location.href='learn.php'">Learn</button>
      <button class="bikes_btn" onclick="window.location.href='gallery.php'">Our Bikes</button>
      <button class="rent_btn" onclick="window.location.href='rent.php'">Rent</button>
    </div>
  </div>

</div>

</body>
</html>
