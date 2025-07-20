<?php
    session_start();    
    // if(isset($_POST['change_prize'])){
        $item = htmlspecialchars(stripslashes($_POST['id']));
        $package = ucwords(htmlspecialchars(stripslashes($_POST['package_name'])));
        $price = htmlspecialchars(stripslashes($_POST['price']));
        $store = htmlspecialchars(stripslashes($_POST['stores']));
        $users = htmlspecialchars(stripslashes($_POST['users']));

        // instantiate classes
        include "../classes/dbh.php";
        include "../classes/update.php";

        //update package
        $update = new Update_table();
        $update->update_quadruple('packages', 'package', $package, 'price', $price, 'users', $users, 'store', $store, 'package_id', $item);
        if($update){
             echo "<div class='success'><p>Package updated successfully! <i class='fas fa-thumbs-up'></i></p></div>";
        }else{
            echo "<p style='background:red; color:#fff; padding:5px'>Failed to modify role <i class='fas fa-thumbs-down'></i></p>";
        }
    // }