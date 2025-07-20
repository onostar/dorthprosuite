<?php
    session_start();
    $package = $_SESSION['package'];
    include "../classes/dbh.php";
    include "../classes/select.php";
    if($package != 1){
?>

<div id="add_store" class="displays">
    <div class="info" style="width:35%; margin:20px 0"></div>
    <div class="add_user_form" style="width:35%; margin:20px 0!important">
        <h3 style="background:var(--moreColor)">Add store details</h3>
        <!-- <form method="POST" id="addUserForm"> -->
        <section>
            <div class="inputs">
                <div class="data" style="width:100%; margin:10px 0">
                    <label for="store"> Location</label>
                    <input type="text" name="store_name" id="store_name" required>
                </div>
                <div class="data" style="width:100%; margin:10px 0">
                    <label for="store_address"> Address</label>
                    <input type="text" name="store_address" id="store_address" required>
                </div>
                <div class="data" style="width:100%; margin:10px 0">
                    <label for="phone"> Phone numbers</label>
                    <input type="tel" name="phone" id="phone" required>
                </div>
            </div>
            <div class="inputs">
                <div class="data">
                    <button type="submit" id="add_store" name="add_store" onclick="addStore()">Create location <i class="fas fa-save"></i></button>
                </div>
            </div>
        </section>    
    </div>
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