<?php
 // INCLUDE ON EVERY TOP-LEVEL PAGE!
include("includes/init.php");

//empty variable
$messages2 = array();

include("includes/delete_from_wishlist.php");
$current = basename($_SERVER['PHP_SELF']);



function makeBike($type, $name, $price, $path, $src){

  echo('<div class="gallery_img">');
  echo ('<a href="bike.php?' . http_build_query( array( 'name' => $name ) ) . '">');
  echo('<img alt="One of our bikes available for purchase" src="' . $path . '"/></a>');
  echo('<div class="gallery_info">');
  echo('<h3>'. $type . '</h3>');
  echo('<h4>'. $name . '</h4>');

  echo('<h4>$'. $price . ' USD </h4>');
  echo('<!--Image Source:' . $src . '-->');
  echo('<a class="cite" href="' . $src . '">source</a>');
  echo('</div></div>');
}

function makeWish($type, $name, $price, $path, $src, $id){

  echo('<div class="wish_img">');
  echo('<a href="bike.php?' . http_build_query( array( 'name' => $name ) ) . '"><img alt="stand in bike" src="' . $path . '"/></a>');
  echo('<div class="wish_info">');
  echo('<p>'. $type . '</p>');
  echo('<p>'. $name . '</p>');
  echo('<p>'. $price . 'USD <p>');
  echo('<!--Image Source:' . $src . '-->');
  echo('<a class="cite" href="' . $src . '">source</a>');

  echo("<form id='deletewish' action='gallery.php?" . http_build_query(array('name' => $name)) . "' method='POST'> <input type='hidden' name='bike_id_delete' value='" . $id . "'/> <input type='submit' class='delete_wish_button' value='Remove from List' name='wish_delete' alt='press to delete from wishlist'/> </form>" );

  echo('</div></div>');
}

$show_list = FALSE;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" href="images/favicon.png" type="image/gif" sizes="16x16">
  <link rel="stylesheet" href="style/style.css" type="text/css">

  <title>BOXY BIKES | Bikes</title>
</head>

<body>

<?php
    include("includes/header.php");
?>

<main class="gallery_pg center">
  <div class="head gallery_head">
    <h1>Our Bikes</h1>
      <!-- IMAGE SOURCE: https://iam.innogy.com/-/media/innogy/images/ueber-innogy/innogy-vor-Ort/STA02/STA02-e-bikes-2560x960.jpg?db=web&mw=1280&w=4320&hash=71FD37BEE81055D3B6A56B5E136BEFB32B3A01EC -->
    <a href="https://iam.innogy.com/-/media/innogy/images/ueber-innogy/innogy-vor-Ort/STA02/STA02-e-bikes-2560x960.jpg?db=web&mw=1280&w=4320&hash=71FD37BEE81055D3B6A56B5E136BEFB32B3A01EC" class="cite_h">image source</a>
  </div>


  <?php include("includes/show_wishlist.php");

  //  message deleting from wishlist
    foreach($messages2 as $message2) {
      echo "<h6><strong>" . htmlspecialchars($message2) . "</strong></h6>\n";
    }
    ?>

  <div class="wishlist <?php if($show_list==TRUE) {echo("show_list");} ?>">

    <div class="wish_title">
      <?php if($show_list==TRUE){ echo('<h2>Your Wishlist</h2>'); } ?>
    </div>

    <div class="wishlist_stuff">
      <div class="button_holder">

        <?php if($show_list==FALSE) {?>
        <!-- show wishlist button -->
        <form id="show_wishlist" action="gallery.php" method="GET">
          <input type="hidden" name="dummy_var" value="dummy_var" />
          <input type="image" id="wish_button" class="show_wish" name="wish_button" alt="press to show wishlist" src="images/wishlist_button.png" />
            <!-- source: Button made by Samantha Chu -->
        </form>
        <?php } ?>

        <?php if($show_list==TRUE) {?>
        <!-- hide wishlist button -->
        <form id="hide_wishlist" action="gallery.php" method="GET">
          <input type="hidden" name="dummy_hide" value="dummy_hide" />
          <input type="image" id="wish_button" class="show_wish" name="wish_button_hide" alt="press to close wishlist" src="images/wishlist_button.png" />
            <!-- source: Button made by Samantha Chu -->
        </form>
        <?php } ?>

      </div>

      <div class="wishlist_items">
      <?php

      if ($show_list==TRUE) {
        foreach ($wished as $wished_bike) {
          makeWish($wished_bike["type"], $wished_bike["name"], $wished_bike["price"], $wished_bike["image_path"], $wished_bike["source"], $wished_bike['id']);
        }
      }
      ?>
      </div>
    </div>
  </div>

  <h3 id="notice">Notice: Our bikes are only available for purchase in store. Check the home page for our hours of operation!</h3>

  <h2 class="co_bike">Commuter Bikes</h2>
  <div class=gallery_container>
    <?php
      $sql_comm = 'SELECT * FROM bikes WHERE category = "Commuter"';
      $params_comm = array();
      $comm_bikes = exec_sql_query($db, $sql_comm, $params_comm)->fetchAll();
      foreach ($comm_bikes as $bike) {
        makeBike($bike["type"],$bike["name"],$bike["price"],$bike["image_path"],$bike["source"]);
      }
    ?>
  </div>

  <h2 class="ca_bike">Cargo Bikes</h2>
  <div class=gallery_container>
  <?php
      $sql_cargo = 'SELECT * FROM bikes WHERE category = "Cargo"';
      $params_cargo = array();
      $cargo_bikes = exec_sql_query($db, $sql_cargo, $params_cargo)->fetchAll();
      foreach ($cargo_bikes as $bike) {
        makeBike($bike["type"],$bike["name"],$bike["price"],$bike["image_path"],$bike["source"]);
      }
    ?>
  </div>

  <h2 class="sp_bike">Specialty Bikes</h2>
  <div class=gallery_container>
  <?php
      $sql_spec = 'SELECT * FROM bikes WHERE category = "Specialty"';
      $params_spec = array();
      $spec_bikes = exec_sql_query($db, $sql_spec, $params_spec)->fetchAll();
      foreach ($spec_bikes as $bike) {
        makeBike($bike["type"],$bike["name"],$bike["price"],$bike["image_path"],$bike["source"]);
      }
    ?>
  </div>
</main>

<?php include("includes/footer.php");?>
</body>
</html>
