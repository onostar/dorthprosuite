<?php
    session_start();    
    // if(isset($_POST['change_prize'])){
        $item = htmlspecialchars(stripslashes($_POST['user_id']));
        $store = htmlspecialchars(stripslashes($_POST['user_store']));

        // instantiate classes
        include "../classes/dbh.php";
        include "../classes/update.php";
        include "../classes/select.php";

        //get item name
        $get_name = new selects();
        $row = $get_name->fetch_details_group('users', 'full_name', 'user_id', $item);
        $item_name = $row->full_name;
        //update role
        $change_level = new Update_table();
        $change_level->update('users', 'store', 'user_id', $store, $item);
        if($change_level){
             echo "<div class='success'><p>$item_name's location updated successfully! <i class='fas fa-thumbs-up'></i></p></div>";
        }else{
            echo "<p style='background:red; color:#fff; padding:5px'>Failed to update location <i class='fas fa-thumbs-down'></i></p>";
        }
    // }