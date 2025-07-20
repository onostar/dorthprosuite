<?php
    session_start();
    $company = $_SESSION['company_id'];
    if (isset($_GET['item_id'])){
        $id = $_GET['item_id'];

    // instantiate class
    include "../classes/dbh.php";
    include "../classes/select.php";

    $get_item = new selects();
    $rows = $get_item->fetch_details_cond('users', 'user_id', $id);
     if(gettype($rows) == 'array'){
        foreach($rows as $row):
            $strs = $get_item->fetch_details_cond('stores', 'store_id', $row->store);
            foreach($strs as $str){
                $store = $str->store;
            }
            
        
    ?>
    <div class="add_user_form priceForm" style="width:70%; margin:5px 0;">
        <h3 style="background:var(--primaryColor); text-align:left">Change location for <?php echo strtoupper($row->full_name)?></h3>
        <section class="addUserForm" style="text-align:left;">
            <div class="inputs">
                <!-- <div class="data item_head"> -->
                    <input type="hidden" name="user_id" id="user_id" value="<?php echo $row->user_id?>" required>
                <div class="data" style="width:auto">
                    <label for="rol">Store</label>
                    <select name="user_store" id="user_store">
                        <option value="<?php echo $row->store?>" selected><?php echo $store?></option>
                        <?php
                            $results = $get_item->fetch_details_cond('stores', 'company', $company);
                            foreach($results as $result){
                        ?>
                        <option value="<?php echo $result->store_id?>"><?php echo $result->store?></option>
                        <?php }?>
                    </select>
                </div>
                <div class="data adjust_btn" style="width:auto; display:flex;">
                    <button type="submit" id="adjust_rol" name="adjust_rol" onclick="updateStore()"> Update</button>
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