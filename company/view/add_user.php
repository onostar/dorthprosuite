<?php
    session_start();
    $company = $_SESSION['company_id'];
    $package = $_SESSION['package'];
    include "../classes/dbh.php";
    include "../classes/select.php";
    if($package != 1){
?>
<div id="addUser" class="displays">
    <div class="info"></div>
    <div class="add_user_form" style="width:90%">
        <h3>Add Users</h3>
        <!-- <form method="POST" id="addUserForm"> -->
        <section class="addUserForm">
            <div class="inputs">
                <input type="text" name="full_name" id="full_name" placeholder="Enter full name" required>
                <input type="text" name="username" id="username" placeholder="Enter username" required>
                <select name="user_role" id="user_role" required style="padding:10px;border-radius:10px">
                    <option value="" selected>Select role</option>
                    <option value="Admin">Admin</option>
                    <option value="cashier">Cashier</option>
                    <option value="sales rep">Sales Rep</option>
                    <option value="Inventory Officer">Inventory Officer</option>
                </select>
                <select name="store_id" id="store_id" style="padding:10px; border-radius:10px">
                    <option value=""selected required>select store</option>
                    <?php
                        $get_str = new selects();
                        $rows = $get_str->fetch_details_cond('stores', 'company', $company);
                        foreach($rows as $row){
                    ?>
                    <option value="<?php echo $row->store_id?>"><?php echo $row->store?></option>
                    <?php } ?>
                </select>
                <button type="submit" id="add_user" name="add_user" title="add user" onclick="addUser()"><i class="fas fa-plus"></i></button>
            </div>
        </section>    
        <!-- </form> -->
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