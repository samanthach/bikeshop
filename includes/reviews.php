<?php
    $bikes_id= $bike[0]["id"];

    // check if user has already left a review.
    $reviewCountQuery = "SELECT COUNT(*) FROM reviews WHERE session = :session AND bike_id = :bike";
    $reviewNum = exec_sql_query($db,  $reviewCountQuery, array(":session" => $session, ":bike" => $bikes_id))->fetchAll();
    $alreadyLeftReview = ($reviewNum[0][0] > 0);


    // if a new review is added, add to database immediately.

    if ($_POST["submit_review"]){
        $customerName = filter_input(INPUT_POST,"customer_name",FILTER_SANITIZE_STRING);
        $reviewContent = filter_input(INPUT_POST,"content_rev",FILTER_SANITIZE_STRING);

        if (!$alreadyLeftReview){

            // add to database.
            $sqlAddReview = "INSERT INTO reviews (session, bike_id, customer_name, content, helpfulness) VALUES
            (:session, :bike, :cus_name, :cont, 0)";
            $params_add_review = array(
                ":session" => $session,
                ":bike" => $bikes_id,
                ":cus_name" => $customerName,
                ":cont" => $reviewContent
            );
            exec_sql_query($db, $sqlAddReview, $params_add_review);
            $alreadyLeftReview = True;

            // message
            if ($result) {
                array_push($messages, "Thank you for your review!");
                } else {
                array_push($messages, "Fail to submit review");
                }
        }else{
            //overwrite old review with new one.
            $sqlOverwriteReview = "UPDATE reviews SET customer_name = :cus_name, content = :cont, helpfulness = 0 WHERE
            session = :session";
            $params_overwrite_review = array(
                ":session" => $session,
                ":cus_name" => $customerName,
                ":cont" => $reviewContent
            );
            exec_sql_query($db, $sqlOverwriteReview, $params_overwrite_review);

            // message
            if ($result) {
            array_push($messages, "Your review has been overwritten.");
            } else {
            array_push($messages, "Unable to submit review.");
            }
        }

    }

    $sql_rev = "SELECT * FROM reviews LEFT JOIN bikes ON reviews.bike_id = bikes.id WHERE bike_id = :bike_id ORDER BY helpfulness DESC";
    $params_rev = array(
        ":bike_id" => $bikes_id
    );
    $reviews = exec_sql_query($db, $sql_rev, $params_rev)->fetchAll();

?>
