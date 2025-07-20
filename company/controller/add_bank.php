<?php
    session_start();
    $company = $_SESSION['company_id'];
    $bank = ucwords(htmlspecialchars(stripslashes($_POST['bank'])));
    $acn = htmlspecialchars(stripslashes(($_POST['account_num'])));

    $data = array(
        'bank' => $bank,
        'account_number' => $acn,
        'company' => $company
    );
    //instantiate class
    
    include "../classes/dbh.php";
    include "../classes/select.php";
    include "../classes/inserts.php";

    //check if bank account already exists
    $check = new selects();
    $results = $check->fetch_count_3cond('banks', 'bank', $bank, 'account_number', $acn, 'company', $company);
    if($results > 0){
        echo "<p class='exist'>This <span>$bank</span> account already exists!</p>";
    }else{
        //create user
        $add_data = new add_data('banks', $data);
        $add_data->create_data();
        if($add_data){
            echo "<p><span>$bank</span> added successfully!</p>";
        }
    }