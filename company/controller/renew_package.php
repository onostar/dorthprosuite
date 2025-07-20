<?php
    date_default_timezone_set("Africa/Lagos");

    $fee = htmlspecialchars(stripslashes($_POST['fee']));
    $package = htmlspecialchars(stripslashes($_POST['package']));
    $user = htmlspecialchars(stripslashes($_POST['user']));
    $company = htmlspecialchars(stripslashes($_POST['company']));
    // $trx_number = htmlspecialchars(stripslashes($_POST['trx_number']));
    $date = date("Y-m-d H:i:s");
    $current_date = date("Y-m-d");
    include "../classes/dbh.php";
    include "../classes/select.php";
    include "../classes/inserts.php";
    include "../classes/update.php";
    $data = array(
        'company' => $company,
        'package' => $package,
        'amount' => $fee,
        'renewed_by' => $user,
        'renew_date' => $date
    );
    //get due date
    /* $get_det = new selects();
    $pkgs = $get_det->fetch_details_group('companies', 'due_date', 'company_id', $company);
    $due_date = $pkgs->due_date; */
    $new_due_date = date("Y-m-d", strtotime("+30 days", strtotime($current_date)));

    //update company package
    $update = new Update_table();
    $update->update_double('companies', 'package', $package, 'due_date', $new_due_date, 'company_id', $company);
    if($update){
        //insert into renewal table
        $add_data = new add_data('renewals', $data);
        $add_data->create_data();
    }

    ?>
