
<?php
    //Upvote functionality
    $review_id = intval($_GET['upvote_review']);
    // check if user has already upvoted.
    $reviewCheckUpvote = "SELECT COUNT(*) FROM upvotes WHERE session = :session AND review_id = :review";
    $reviewNumb = exec_sql_query($db,  $reviewCheckUpvote, array(":session" => $session, ":review" => $review_id))->fetchAll();
    $alreadyUpvoted = ($reviewNumb[0][0] > 0);


    if (!$alreadyUpvoted){
    // The user hasn't upvoted yet.
    // Increasing helpfulness by 1.
        $sqlUpvoteReview = "UPDATE reviews SET helpfulness = helpfulness + 1 WHERE id = :review_id";
        $sqlUpvoteDocument = "INSERT INTO upvotes (review_id, session) VALUES (:review, :session)";
    }else{
        // The user has already upvoted. Remove the upvote.
        $sqlUpvoteReview = "UPDATE reviews SET helpfulness = helpfulness - 1 WHERE id = :review_id";
        $sqlUpvoteDocument = "DELETE FROM upvotes WHERE review_id = :review AND session = :session";
    }

    exec_sql_query($db, $sqlUpvoteReview, array(":review_id" => $review_id));
    exec_sql_query($db, $sqlUpvoteDocument, array(":session" => $session, ":review" => $review_id));
?>
