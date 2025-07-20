<?php
    session_start();
    $company = $_SESSION['company_id'];
    include "../classes/dbh.php";
    include "../classes/select.php";
    $package = $_SESSION['package'];
    if($package == 3){
?>
    <div class="info"></div>
<div class="displays allResults" id="staff_list" >
    <h2>Customer list</h2>
    <hr>
    <div class="search">
        <input type="search" id="searchStaff" placeholder="Enter keyword" onkeyup="searchData(this.value)">
        <a class="download_excel" href="javascript:void(0)" onclick="convertToExcel('customer_list_table', 'List of customers')"title="Download to excel"><i class="fas fa-file-excel"></i></a>

    </div>
    <table id="customer_list_table" class="searchTable">
        <thead>
            <tr style="background:var(--moreColor)">
                <td>S/N</td>
                <td>Customer name</td>
                <td>Phone number</td>
                <td>Address</td>
                <!-- <td>Email</td> -->
                <!-- <td>Store</td> -->
                <td>Balance</td>
                <td>Date reg</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $n = 1;
                $get_details = new selects();
                $details = $get_details->fetch_details_orderCond('customers', 'company', $company, 'customer');
                if(gettype($details) === 'array'){
                foreach($details as $detail):
            ?>
            <tr>
                <td style="text-align:center; color:red;"><?php echo $n?></td>
                <td><?php echo $detail->customer?></td>
                <td><?php echo $detail->phone_numbers?></td>
                <td><?php echo $detail->customer_address?></td>
                <!-- <td><?php echo $detail->customer_email?></td> -->
                <!-- <td>
                    <?php
                        /* $get_store = new selects();
                        $rows = $get_store->fetch_details_group('stores', 'store', 'store_id', $detail->store);
                        echo $rows->store; */
                    ?>
                </td> -->
                <td style="color:green"><?php echo "₦".number_format($detail->wallet_balance, 2);?>
                </td>
                <td><?php echo date("d-m-Y", strtotime($detail->reg_date))?></td>
                
                
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