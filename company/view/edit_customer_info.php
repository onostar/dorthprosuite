<?php
    session_start();
    $store = $_SESSION['store_id'];
    $package = $_SESSION['package'];
    include "../classes/dbh.php";
    include "../classes/select.php";
    if($package == 3){
    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
        // echo $user_id;
        
?>
<div id="edit_customer">
<div id="sales_form" class="displays all_details">
    
    
    <div class="add_user_form" style="width:50%; margin:10px 0;">
        <!-- <h3 style="background:var(--primaryColor); color:#fff; text-align:left!important;">New Customer order</h3> -->
        
            <!-- search forms -->
        <!-- <form method="POST" id="addUserForm"> -->
            <section class="addUserForm">
                <div class="inputs">
                    <!-- bar items form -->
                    <div class="data" style="width:100%; position:relative;">
                    <label for="customer" style="color:var(--primaryColor)">Search customer</label>
                        <input type="text" name="customer" id="customer" oninput="getCustomerEdit(this.value)" placeholder="Enter customer name or phone number">
                        <div class="search_results" id="search_results">

                        </div>
                    </div>
                    
                    
                </div>
            </section>
            
        </div>
    </div>

</div>
<?php
    }else{
        header("Location: ../index.php");
    }
?>
</div>
<?php 
    }else{
?>
<div class="not_available">
    <p>This Menu is currently unavailable under your subscription plan. To unlock this feature and enjoy its full benefits, we recommend upgrading your account to a higher tier.<br><br>

    Click the button below to explore available plans and upgrade today:</p>

        <a href="renew_package.php" title="upgrade package" target="_blank">Upgrade Now <i class="fas fa-upload"></i></a>
</div>
<?php }?>