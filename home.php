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
  <link rel="stylesheet" href="style/style.css" type="text/css">
  <link rel="icon" href="images/favicon.png" type="image/gif" sizes="16x16">
  <!-- FAVICON SOURCE: provided by client -->

  <title>BOXY BIKES | Home</title>
</head>

<body>
<?php
    include("includes/header.php");
  ?>
<main>

  <div class="home_head head">
    <h1 class="heading">Home</h1>
    <!-- IMAGE SOURCE: https://www.yelp.com/biz_photos/boxy-bikes-ithaca?select=6EIGpk2iMUfEqMsZXPSCYQ -->
    <a href="https://www.yelp.com/biz_photos/boxy-bikes-ithaca?select=6EIGpk2iMUfEqMsZXPSCYQ" class="cite_h">image source</a>
    </div>


  <div class="row">
    <div class="home_story">
      <h2> Our Story </h2>
      <div class="line">
        <!-- text written by Samantha Chu -->
        At Boxy Bikes, we are dedicated to helping Ithacans make a positive impact on environment by biking more often. We offer all types of bikes, from folding e-bikes to powerful family transportation cargo bikes. Our bikes are reliable, user-friendly, and fun to ride. Come stop by our shop located in Ithaca Commons if you would like to try out any of our bikes, and feel free to browse our website for more information on electric bikes, as well as how to rent or buy a bike!
      </div>
    </div>

    <div class="column">
      <h2> Contact Info</h2>
      <div class="line">
        <ul>
          <li> Fall/Winter hours: Saturday and Sunday 12pm to 5pm;
            Monday-Friday By Email Appointment Only</li>
          <li>Location: Press Bay Alley, 116 West Green St. Ithaca, NY</li>
          <li>Boxy Bikes is located in Press Bay Alley down the stairs and to the right.</li>
          <li>Contact: info@boxybikes.com, (607) 216-8274</li>
        </ul>
      </div>
  </div>

  </div>

  <div class="homeimage">
    <img src="images/home_bikeimage.png" alt="bikeimage" />
    <!-- IMAGE SOURCE: provided by client -->
  </div>


</main>
  <?php include("includes/footer.php");?>
</body>
</html>
