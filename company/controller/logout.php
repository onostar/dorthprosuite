<?php
    
    session_start();
    $user = $_SESSION['user_id'];
    include "../classes/dbh.php";
    include "../classes/update.php";
    //update online status
    $update_online = new Update_table();
    $update_online->update('users', 'online','user_id', 0, $user);
    session_destroy();
    session_unset();
    header("Location: ../index.php");