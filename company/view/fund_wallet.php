<?php
    session_start();
    $company = $_SESSION['company_id'];
    include "../classes/dbh.php";
    include "../classes/select.php";
    $package = $_SESSION['package'];
    if($package == 3){
?>
    <div class="info"></div>
<div class="displays allResults" id="staff_list" style="width:90%!important;margin:20px!important">
    <h2>Fund Customer Account</h2>
    <hr>
    <div class="search">
        <input type="search" id="searchStaff" placeholder="Enter keyword" onkeyup="searchData(this.value)">
    </div>
    <table id="room_list_table" class="searchTable">
        <thead>
            <tr style="background:var(--moreColor)">
                <td>S/N</td>
                <td>Customer name</td>
                <td>Phone number</td>
                <td>Wallet balance</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php
                $n = 1;
                $get_details = new selects();
                $details = $get_details->fetch_details_orderCond('customers', 'company',$company, 'customer');
                if(gettype($details) === 'array'){
                foreach($details as $detail):
            ?>
            <tr>
                <td style="text-align:center; color:red;"><?php echo $n?></td>
                <td><?php echo $detail->customer?></td>
                <td><?php echo $detail->phone_numbers?></td>
                <td style="color:green">
                    <?php
                        
                            echo "₦".number_format($detail->wallet_balance, 2);
                    ?>
                </td>
                <td><a style="padding:5px 8px;border-radius:5px;background:var(--otherColor); color:#fff;" href="javascript:void(0)" title="fund account" onclick="showPage('fund_account.php?customer=<?php echo $detail->customer_id?>')"><i class="fas fa-pen"></i></a></td>
                
                
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