<?php
 // INCLUDE ON EVERY TOP-LEVEL PAGE!
include("includes/init.php");
$current = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" href="images/favicon.png" type="image/gif" sizes="16x16">
  <link rel="stylesheet" href="style/style.css" type="text/css">


  <title>BOXY BIKES | Rent</title>
</head>

<body>
<?php
    include("includes/header.php");
  ?>

<main class="margin_bottom">
  <div class="head rent_head">
    <h1>Rent a bike</h1>
    <!-- IMAGE SOURCE: https://cdn.shopify.com/s/files/1/0670/8905/files/Hero-Image-2_1400x.progressive.jpg?v=1554396536 -->
    <a href="https://cdn.shopify.com/s/files/1/0670/8905/files/Hero-Image-2_1400x.progressive.jpg?v=1554396536" class="cite_h">image source</a>
  </div>


  <div class="row">
  <div class="column">
  <h2>Try a bike before you buy!</h2>
    <div class="line">
    To rent a bike contact us at info@boxybikes.com or call <u>(607) 216-8274.</u> Tell us the bike(s) you want and the dates and times you would like to reserve. We’ll invoice you by email for the reservation. By reserving a bike you agree to this rental agreement. You can check out and check in during our regular hours or by appointment.
    </div>
  </div>


  <div class="column">
    <h2>What are THE rental rates?</h2>

    <div class="line">
    <ul>
    <li>$15/hour</li>
    <li>$39 return the same day</li>
    <li>$49 return the next day</li>
    <li>$190 weekly</li>
    <li>$390 monthly</li>
    <li>$850 for a four month semester</li>
    </ul>
    </div>

  </div>
</div>

<div class="faq">
    <!-- text source: provided by our client, Boxy Bikes -->
  <h2>Can I rent biking gear as well?</h2>
  <p>
  All of our rental bikes are electric. All bikes are provided with a helmet and cable lock. Overnight ebike rentals are provided with a charger for charging the bike overnight. If you plan to ride at night we can provide front and rear lights.
  </p>

  <h2>What types of bikes are available?</h2>
  <ul>
    <li>
      <h3>Juiced U500 compact cargo bike</h3>
      <p>This is a very comfortable bike with a 40 mile range. It is an excellent hill climber. It can carry lots of stuff including small people. We have one of these bikes available for rent.</p>
    </li>
    <li>
      <h3>Electric mountain bikes</h3>
      <p>These bikes are faster than the U500 but require a rider who is used to an athletic riding posture and who is used to changing gears appropriately for climbing hills. They have a 25-mile range. They weigh only slightly more than a non-electric bike. We have three of these bikes available.</p>
    </li>
    <li>
      <h3>Yuba Mundo electric cargo bike.</h3>
      <p>We can fit child seats or rails to these bikes to carry kids. They can also be used to carry loads of a few hundred pounds. We have one of these bikes available for rent.</p>
    </li>
  </ul>
</div>

</main>
<?php include("includes/footer.php");?>

</body>
</html>
