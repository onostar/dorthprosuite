<?php
    session_start();
    $company = $_SESSION['company_id'];
    include "../classes/dbh.php";
    include "../classes/select.php";
    $package = $_SESSION['package'];
    if($package != 1){
?>

<div class="displays allResults" id="staff_list" style="width:90%!important;margin:0 20px!important">
<div class="info"></div>

    <h2>Change Staff Location</h2>
    <hr>
    <div class="search">
        <input type="search" id="searchStaff" placeholder="Enter keyword" onkeyup="searchData(this.value)">
    </div>
    <table id="room_list_table" class="searchTable">
        <thead>
            <tr style="background:var(--moreColor)">
                <td>S/N</td>
                <td>Full Name</td>
                <td>Username</td>
                <td>Store</td>
                <td>Date Reg</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php
                $n = 1;
                $get_details = new selects();
                $details = $get_details->fetch_details_negCond('users', 'user_role', 'Admin', 'company', $company);
                if(gettype($details) === 'array'){
                foreach($details as $detail):
            ?>
            <tr>
                <td style="text-align:center; color:red;"><?php echo $n?></td>
                <td><?php echo $detail->full_name?></td>
                <td style="color:var(--otherColor)"><?php echo $detail->username?></td>
                <!-- <td ><?php echo $detail->user_role?></td> -->
                <td>
                    <?php
                        $get_store = new selects();
                        $strs = $get_store->fetch_details_group('stores', 'store', 'store_id', $detail->store);
                        echo $strs->store;
                    ?>
                </td>
               
                <td><?php echo date("d-m-Y", strtotime($detail->reg_date))?></td>
                
                <td class="prices">
                    <a style="background:var(--otherColor)!important; color:#fff!important; padding:5px 8px; border-radius:10px;" href="javascript:void(0)" class="each_prices" onclick="getForm('<?php echo $detail->user_id?>', 'get_user_location.php');"><i class="fas fa-pen"></i></a>
                </td>
            </tr>
            
            <?php $n++; endforeach;}?>
        </tbody>
    </table>
    
    <?php
        if(gettype($details) == "string"){
            echo "<p class='no_result'>'$details'</p>";
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

<style>
    @media screen and (max-width:800px){
        #staff_list, .displays{
            width:100%!important;
        }
    }
</style>