<?php
if ($_GET["dummy_var"]){

    if ($show_list == FALSE) {

        $sql_wish = "SELECT * FROM wishlist LEFT JOIN bikes ON wishlist.bike_id = bikes.id WHERE session_id = :session";
        $params_wish = array(
            ":session" => $session
        );
        $wished = exec_sql_query($db, $sql_wish, $params_wish)->fetchAll();

        $show_list = TRUE;

    }
}

if ($_GET["dummy_hide"]){
    if ($show_list == TRUE) {
        $show_list = FALSE;
    }
}


?>
