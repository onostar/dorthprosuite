<?php
    session_start();
    $package = $_SESSION['package'];
    $fullname = strtoupper(htmlspecialchars(stripslashes($_POST['full_name'])));
    $username = strtolower(htmlspecialchars(stripslashes($_POST['username'])));
    $role = ucwords(htmlspecialchars(stripslashes($_POST['user_role'])));
    $store = htmlspecialchars(stripslashes($_POST['store_id']));
    $password = 123;
    $company = $_SESSION['company_id'];
    $data = array(
        'full_name' => $fullname,
        'username' => $username,
        'user_role' => $role,
        'store' => $store,
        'user_password' => $password,
        'company' => $company
    );
    // instantiate classes
    include "../classes/dbh.php";
    include "../classes/select.php";
    include "../classes/inserts.php";

    //get number of users allowed by package
    $check = new selects();
    $pkgs = $check->fetch_details_group('packages', 'users', 'package_id', $package);
    $package_users = $pkgs->users;
    //check total users created already for this package
    $users = $check->fetch_count_cond('users', 'company', $company);
    if($users >= $package_users){
        ?>
        <script>
        alert("You have reached the maximum number of users allowed for your current package. Please upgrade your plan to add more users.");
        </script>
        <?php
    }else{
        //check if user exists
        $results = $check->fetch_count_cond('users', 'username', $username);
        if($results > 0){
            echo "<p class='exist'>$username already exists</p>";
        }else{
            //check full name
            $results2 = $check->fetch_count_2cond('users', 'full_name', $fullname, 'company', $company);
            if($results2 > 0){
                echo "<p class='exist'>$fullname already exists</p>";
            }else{
                //create user
                $add_data = new add_data('users', $data);
                $add_data->create_data();
                if($add_data){
                    echo "<p>$fullname Created</p>";
                }
            }
        }
    }