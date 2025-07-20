<?php

    if (isset($_GET['item_id'])){
        $id = $_GET['item_id'];
    

    // instantiate class
    include "../classes/dbh.php";
    include "../classes/select.php";

    $get_item = new selects();
    $rows = $get_item->fetch_details_cond('packages', 'package_id', $id);
     if(gettype($rows) == 'array'){
        foreach($rows as $row):
            
    ?>
    <div class="add_user_form priceForm" style="width:100%!important; margin:5px 0!important;">
        <h3 style="background:var(--primaryColor); text-align:left">Update <?php echo strtoupper($row->package)?> package details</h3>
        <section class="addUserForm" style="text-align:left;">
            <div class="inputs">
                <!-- <div class="data item_head"> -->
                    <input type="hidden" name="id" id="id" value="<?php echo $id?>" required>
                <div class="data" style="width:30%">
                    <label for="package_name">Package</label>
                    <input type="text" name="package_name" id="package_name" value="<?php echo $row->package?>">
                </div>
                <div class="data" style="width:30%">
                    <label for="rol">Price (NGN)</label>
                    <input type="text" name="price" id="price" value="<?php echo $row->price?>">
                </div>
                <div class="data" style="width:30%">
                    <label for="rol">Stores</label>
                    <input type="text" name="stores" id="stores" value="<?php echo $row->store?>">
                </div>
                <div class="data" style="width:30%">
                    <label for="rol">Users</label>
                    <input type="text" name="users" id="users" value="<?php echo $row->users?>">
                </div>
                <div class="data adjust_btn" style="width:30%; display:flex;">
                    <button type="submit" id="adjust_rol" name="adjust_rol" onclick="updatePackage()"> Update</button>
                    <a href="javascript:void(0)" title="close form" style='background:red; padding:10px; border-radius:5px; color:#fff' onclick="closeForm()">Return </a>
                </div>
            </div>
        </section>   
    </div>
    
<?php
    endforeach;
     }
    }    
?>