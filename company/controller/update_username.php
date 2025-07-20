<?php
    session_start();
    $company = $_SESSION['company_id'];
    // if(isset($_POST['change_passwords'])){
        $username = strtolower(htmlspecialchars(stripslashes($_POST['username'])));
        $fullname = strtoupper(htmlspecialchars(stripslashes($_POST['full_name'])));
        $password = htmlspecialchars(stripslashes($_POST['password']));
        $user_id = htmlspecialchars(stripslashes($_POST['user_id']));
        // $retype_password = htmlspecialchars(stripslashes($_POST['retype_password']));
        

        // instantiate classes
        include "../classes/dbh.php";
        include "../classes/select.php";
        include "../classes/update.php";
        
        //check if username is taken
        $check_name = new selects();
        $email = $check_name->fetch_count_2cond1neg('users', 'username', $username, 'user_id', $user_id);
        if($email > 0){
            echo "<p>Username already taken</p>";
        }else{
            $name = $check_name->fetch_count_3cond1neg('users', 'full_name', $fullname, 'company', $company, 'user_id', $user_id);
            if($name > 0){
                echo "<p>$fullname already taken</p>";
            }else{
                $update = new Update_table();
                $update->updateUsername($username, $password, $user_id, $fullname);
            // header("Location: ../index.php");
            }
        }