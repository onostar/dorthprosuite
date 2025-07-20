<?php
    session_start();
    date_default_timezone_set("Africa/Lagos");
    $company = $_SESSION['company_id'];
    $supplier = strtoupper(htmlspecialchars(stripslashes($_POST['supplier'])));
    $contact = ucwords(htmlspecialchars(stripslashes($_POST['contact_person'])));
    $phone = htmlspecialchars(stripslashes(($_POST['phone'])));
    $email = htmlspecialchars(stripslashes(($_POST['email'])));
    $date = date("Y:m:d H:i:s");

    $data = array(
        'vendor' => $supplier,
        'contact_person' => $contact,
        'phone' => $phone,
        'company' => $company,
        'email_address' => $email,
        'created_date' => $date
    );

    // instantiate class
    include "../classes/dbh.php";
    include "../classes/select.php";
    include "../classes/inserts.php";

   //check if vendor already exists
   $check = new selects();
   $results = $check->fetch_count_2cond('vendors', 'vendor', $supplier, 'company', $company);
   if($results > 0){
       echo "<p class='exist'><span>$supplier</span> already exists</p>";
   }else{
       //add reason
       $add_data = new add_data('vendors', $data);
       $add_data->create_data();
       if($add_data){
           echo "<p><span>$supplier</span> created successfully!</p>";
       }
   }