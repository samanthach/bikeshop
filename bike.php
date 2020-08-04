<?php
 // INCLUDE ON EVERY TOP-LEVEL PAGE!
include("includes/init.php");
include("includes/upvote_review.php");

// empty variable
$messages = array();
$messages1 = array();
$messages2 = array();

function makeReview( $person_name, $content, $helpfulness, $id){
  echo('<div class="review_box">');

  echo('<div class="review_content">');
  echo('<h3>' . $person_name . '</h3>');
  echo('<p>'. $content . '</p>');
  echo("</div>");

  echo('<div class="review_likes">');
  echo('<form method="GET"> <input type="hidden" name="name" value="'.$_GET['name'].'"/> <input type="hidden" name="upvote_review" value="'.$id.'" /> <input type="image" class="upvote_button" alt="One of our bikes available for purchase" src="images/upvote_button.png" name="upvote_btn"></form>');
  echo('<p>Helpful?</p>');
  echo('<p>Votes: '. $helpfulness . '</p>');
  echo('</div></div>');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" href="images/favicon.png" type="image/gif" sizes="16x16">
    <!-- FAVICON SOURCE: provided by client -->
  <link rel="stylesheet" href="style/style.css" type="text/css">


  <title>BOXY BIKES | Our Bikes</title>
</head>

<body>
  <?php
    include("includes/header.php");
    $urlBikeQuery = $_GET['name'];
    $sql = "SELECT * FROM bikes WHERE name = :bikeName";
    $params = array(":bikeName" => $urlBikeQuery);
    $result = exec_sql_query($db, $sql, $params);
    $bike = $result->fetchAll();

    $_name = $bike[0]["name"];
    $_price = $bike[0]["price"];
    $_path = $bike[0]["image_path"];
    $_descr = $bike[0]["description"];
    $_src = $bike[0]["source"];

    include("includes/add_to_wishlist.php");
  ?>

<main class="margin_bottom margin_top">
  <?php
    // message adding to wishlist
    foreach($messages1 as $message1) {
      echo "<h6><strong>" . htmlspecialchars($message1) . "</strong></h6>\n";
    }

    echo ('<div class="bike_container">');
    echo('<h2 class="bike_title">'. $_name ."</h2>");
    echo ("<h2>$". $_price ." USD</h2>");
    echo ('<img alt="Boxy Bike" src="' . $_path . '" />');

    echo('<div class="descr_container">');
    echo("<h2>Description</h2>");
    echo ('<p class="descr">'. $_descr ."</p>");
    echo('<!--Image & Text Source:' . $_src . '-->');
    echo ('<a class="cite" href="'. $_src .'">image & text source</a>');
?>
    <div class="wish_stuff">
      <p>Add to Wishlist: </p>
      <form id="wish" action="<?php echo( 'bike.php?' . http_build_query( array( 'name' => $_name ) ) . PHP_EOL); ?>" method="POST">
        <!-- pass in bike name -->
        <input type="hidden" name="bike_id" value="<?php echo($bike[0]["id"]); ?>" />

        <input type="hidden" name="bike-name" value="<?php echo($_name); ?>" />
        <input type="hidden" name="bike-price" value="<?php echo($_price); ?>" />
        <input type="hidden" name="bike-path" value="<?php echo($_path); ?>" />
        <input type="hidden" name="bike-descr" value="<?php echo($_descr); ?>" />
        <input type="hidden" name="bike_src" value="<?php echo($_src); ?>" />

        <input type="image" id="wish_button" name="wish" alt="press to add to wishlist" src="images/wishlist_button.png" />
        <!-- source: Button made by Samantha Chu -->
      </form>
    </div>
</div>
</div>

<?php include("includes/reviews.php");?>

<div class="review_container">

  <h2 class="center">Reviews</h2>

  <div class="add_rev">
    <form id="add_review" action="<?php echo( 'bike.php?' . http_build_query( array( 'name' => $_name ) ) . PHP_EOL); ?>" method="POST">
      <h3>Add a Review!</h3>
      <h4>You can only add 1 review per bike.</h4>

      <?php
        if ($alreadyLeftReview){
          echo "<h4>You have already left a review for this bike. Adding another review will overwrite your original review.</h4>";
        }
      ?>

      <div class="rev_row">
        <label for="customer_name">Your Name:</label>
        <input type="text" name="customer_name" placeholder="Name" maxlength="30" />
      </div>

      <textarea form="add_review" maxlength="700" name="content_rev" placeholder="Write Your Review..." cols="20" rows="10" required></textarea>

      <input type="submit" class="submit_review" name="submit_review" value="Submit">
    </form>
  </div>

  <!-- message -->
  <?php
  // print review submission message here
  foreach($messages as $message) {
    echo "<h6><strong>" . htmlspecialchars($message) . "</strong></h6>\n";
  }
  ?>


  <?php
  foreach($reviews as $review){
    makeReview( $review["customer_name"], $review["content"], $review["helpfulness"], $review[0]);
  } ?>

</div>


</main>
  <?php include("includes/footer.php");?>
</body>
</html>
