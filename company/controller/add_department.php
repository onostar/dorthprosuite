<?php
    session_start();
    $company = $_SESSION['company_id'];
    $department = strtoupper(htmlspecialchars(stripslashes($_POST['department'])));
    $data = array(
        'department' => $department,
        'company' => $company
    );
    //instantiate class
    
    include "../classes/dbh.php";
    include "../classes/select.php";
    include "../classes/inserts.php";

    //check if department exists
    $check = new selects();
    $results = $check->fetch_count_2cond('departments', 'department', $department, 'company', $company);
    if($results > 0){
        echo "<p class='exist'>$department already exists</p>";
    }else{
        //add new record
        $add_data = new add_data('departments', $data);
        $add_data->create_data();
        if($add_data){
            echo "<p>$department added</p>";
        }
    }
    