<?php
    session_start();
    $company = $_SESSION['company_id'];
    $package = $_SESSION['package'];
    include "../classes/dbh.php";
    include "../classes/select.php";
    if($package != 1){
?>
<div id="add_rights" class="displays">
    <div class="add_user_form" style="width:30%; margin:10px;">
        <h3>Add rights to user</h3>
        <!-- <form method="POST" id="addUserForm"> -->
        <section >
            <div class="inputs">
                <div class="data" style="width:100%; margin:10px 0;">
                    <label for="user">Select User</label>
                    <select name="user" id="user" onchange="getRights(this.value)">
                        <option value=""selected required>Select user</option>
                        <?php
                            $get_user = new selects();
                            $rows = $get_user->fetch_details_negCond('users', 'user_role', 'Admin', 'company', $company);
                            foreach($rows as $row){
                        ?>
                        <option value="<?php echo $row->user_id?>"><?php echo $row->full_name?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="data" style="width:100%; margin:10px 0;">
                    <label for="menu">Select Menu</label>
                    <select name="menu" id="menu" onchange="getSubmenu(this.value)">
                        <option value=""selected required>Select menu</option>
                        <?php
                            $get_user = new selects();
                            $rows = $get_user->fetch_details('menus');
                            foreach($rows as $row){
                        ?>
                        <option value="<?php echo $row->menu_id?>"><?php echo $row->menu?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="data" style="width:100%; margin:10px 0;">
                    <label for="sub_menu">Add rights</label>
                    <select name="sub_menu" id="sub_menu" onchange="addRights(this.value)">
                        <option value=""selected required>Select sub-menu</option>
                        
                    </select>
                </div>
                
            </div>
                            </section>   
        <div class="info"></div>
    </div>
    <!-- all rights for selected user -->
    <div class="rights allResults" id="user_rights">

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