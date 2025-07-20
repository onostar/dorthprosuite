<?php
    include "../classes/dbh.php";
    include "../classes/select.php";
    if(isset($_GET['package'])){
        $package = $_GET['package'];
        //get package price
        $get_details = new selects();
        $rows = $get_details->fetch_details_cond('packages', 'package_id', $package);
        foreach($rows as $row){
            $package_name = $row->package;
            $price = $row->price;
            $store = $row->store;
            $users = $row->users;
        }
?>
<style>
    ul{
        list-style: none!important;
        padding:0 10px;
    }
    li i{
        color:rgb(15, 140, 161);
        font-size:.8rem!important;
    }
    h3{
        text-align:left;
    }
</style>
    <h3 style="color:rgb(54, 54, 54)"><?php echo $package_name?> (<?php echo "₦".number_format($price)?>/Month)</h3>
    <h4>Popular Features</h4>
    <input type="hidden" name="fee" id="fee" value="<?php echo $price?>">
    <?php 
        if($package == 1){
    ?>
    <div class="pop_feats">
        <ul>
            <li><i class="fas fa-check"></i> Retail Sales</li>
            <li><i class="fas fa-check"></i>  Inventory Control</li>
            <li><i class="fas fa-check"></i>  Purchase</li>
            <li><i class="fas fa-check"></i>  Reports & Analytics</li>
            <li><i class="fas fa-check"></i>  <?php echo $users?> User</li>
            <li><i class="fas fa-check"></i>  <?php echo $store?> Store/Location</li>
        </ul>
    </div>
<?php 
    }elseif($package == 2){
?>
    <ul>
        <li><i class="fas fa-check"></i> Retail Sales</li>
        <li><i class="fas fa-check"></i>  Inventory Control</li>
        <li><i class="fas fa-check"></i>  Purchase</li>
        <li><i class="fas fa-check"></i>  Expense Manager</li>
        <li><i class="fas fa-check"></i>  Reports & Analytics</li>
        <li><i class="fas fa-check"></i>  <?php echo $users?> Users</li>
        <li><i class="fas fa-check"></i>  <?php echo $store?> Stores/Locations</li>
    </ul>
<?php
    }elseif($package == 3){
?>
    <ul>
        <li><i class="fas fa-check"></i> Retail & Wholesale</li>
        <li><i class="fas fa-check"></i> Customer management</li>
        <li><i class="fas fa-check"></i>  Reports & Analytics</li>
        <li><i class="fas fa-check"></i> Financial Management</li>
        <li><i class="fas fa-check"></i>  <?php echo $users?> Users</li>
        <li><i class="fas fa-check"></i>  <?php echo $store?> Stores/Locations</li>
        
    </ul>
<?php
    }else{
?>
    <ul>
        <li><i class="fas fa-check"></i> Customer Management</li>
        <li><i class="fas fa-check"></i> Sales Rep Commissions</li>
        <li><i class="fas fa-check"></i> SMS Integration</li>
        <li><i class="fas fa-check"></i> Customizable features</li>
        <li><i class="fas fa-check"></i> Unlimited Users</li>
        <li><i class="fas fa-check"></i> Multiple Stores/Location</li>
        
    </ul>
<?php
    }
    }
?>