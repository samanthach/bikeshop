
<?php
    // Deleting a bike from wishlist.
    if ($_POST["wish_delete"]){
        $bike = intval($_POST['bike_id_delete']);

        $params_delete = array(
        ":session" => $session,
        ":bike_id_delete" => $bike
        );
        // check if bike exists in the wishlist
        $sqlCheckRepeat = "SELECT COUNT(*) FROM wishlist WHERE (session_id = :session AND bike_id = :bike_id_delete)";
        $num = exec_sql_query($db, $sqlCheckRepeat, $params_delete)->fetchAll();

        if ($num[0][0] >= 1){
            $sqlDeleteItem = "DELETE FROM wishlist WHERE session_id = :session AND bike_id = :bike_id_delete";

            $result_delete = exec_sql_query($db, $sqlDeleteItem, $params_delete);

            if ($result_delete){
                array_push($messages2, "Bike deleted from the wishlist.");
            } else {
                array_push($messages2, "Unable to remove from list.");
            }

    }
    }


?>
