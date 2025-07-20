<?php
    include "../classes/dbh.php";
    include "../classes/select.php";
?>
<div id="add_sub_menu" class="displays" style="width:50%!important; margin:20px 20px!important;">
    <div class="info"></div>
    <div class="add_user_form">
        <h3>Create sub-menus</h3>
        <!-- <form method="POST" id="addUserForm"> -->
        <form >
            <div class="inputs">
                <div class="data">
                    <label for="packages">Package</label>
                    <select name="packages" id="packages">
                        <option value=""selected required>Select Package</option>
                        <?php
                            $get_dep = new selects();
                            $pkgs = $get_dep->fetch_details('packages');
                            foreach($pkgs as $pkg){
                        ?>
                        <option value="<?php echo $pkg->package_id?>"><?php echo $pkg->package?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="data">
                    <label for="department">Select menu</label>
                    <select name="menus" id="menus">
                        <option value=""selected required>Choose Menu</option>
                        <?php
                            $rows = $get_dep->fetch_details('menus');
                            foreach($rows as $row){
                        ?>
                        <option value="<?php echo $row->menu_id?>"><?php echo $row->menu?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="data">
                    <label for="sub_menu">Sub-Menu</label>
                    <input type="text" name="sub_menu" id="sub_menu" placeholder="Enter sub-menu" required>
                </div>
                
                <div class="data">
                    <label for="url">Sub-menu Link</label>
                    <input type="text" name="sub_menu_url" id="sub_menu_url" placeholder="Enter sub-menu url" required>
                </div>
                <button type="submit" id="add_cat" name="add_cat" onclick="addSubMenu()">Save record <i class="fas fa-layer-group"></i></button>
            </div>
        </form>    
    </div>
</div>
