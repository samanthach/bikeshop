<?php
if ($_POST["bike_id"]){

    $_name = $_POST['bike-name'];
    $_price = $_POST['bike-price'];
    $_path = $_POST['bike-path'];
    $_descr = $_POST['bike-descr'];
    $_src = $_POST['bike-src'];

    $bike = intval($_POST['bike_id']);

    $params_insert = array(
        ":session" => $session,
        ":bike_id" => $bike
    );

    // check if same bike & session already in table
    // can't wish list the same bike twice
    $sqlCheckRepeat = "SELECT COUNT(*) FROM wishlist WHERE (session_id = :session AND bike_id = :bike_id)";
    $num = exec_sql_query($db, $sqlCheckRepeat, $params_insert)->fetchAll();


    if ($num[0][0] == 0){
        $sqlInsertItem = "INSERT INTO wishlist (session_id, bike_id) VALUES (:session, :bike_id)";
        $result_insert = exec_sql_query($db, $sqlInsertItem, $params_insert);
        if($result_insert) {
            array_push($messages1, "Success! Bike added to wishlist.");
        } else {
            array_push($messages1, "Unable to add to wishlist.");
        }
// when the bike is aleady in the wishlist
    } else {
        array_push($messages1, "You already have this bike in your wishlist.");
    }
}

?>
