<?php
    session_start();
    $company = $_SESSION['company_id'];
    $package = $_SESSION['package'];
    $store = ucwords(htmlspecialchars(stripslashes($_POST['store_name'])));
    $store_address = htmlspecialchars(stripslashes($_POST['store_address']));
    $phone = htmlspecialchars(stripslashes(($_POST['phone'])));

    $data = array(
        'company' => $company,
        'store' => $store,
        'store_address' => $store_address,
        'phone_number' => $phone
    );
    // instantiate class
    include "../classes/dbh.php";
    include "../classes/select.php";
    include "../classes/inserts.php";
    //get number of stores allowed by package
    $check = new selects();
    $pkgs = $check->fetch_details_group('packages', 'store', 'package_id', $package);
    $package_stores = $pkgs->store;
    //check total stores created already for this package
    $stores = $check->fetch_count_cond('stores', 'company', $company);
    if($stores >= $package_stores){
        ?>
        <script>
            alert("You have reached the maximum number of stores allowed for your current package. Please upgrade your plan to add more stores.");
        </script>

        <?php
    }else{
        //check if store exist
        $check = new selects();
        $results = $check->fetch_count_2cond('stores', 'company', $company, 'store', $store);
        if($results > 0){
            echo "<p class='exist'>$store already exists</p>";
        }else{
            //add new store
            $add_data = new add_data('stores', $data);
            $add_data->create_data();
            if($add_data){
                echo "<p>$store added</p>";
            }
        }
    }