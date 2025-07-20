<?php
    session_start();
    $company = $_SESSION['company_id'];
    include "../classes/dbh.php";
    include "../classes/select.php";
    $package = $_SESSION['package'];
    if($package != 1){
?>
    <div class="info"></div>
<div class="displays allResults" id="staff_list">
    <h2>List of users</h2>
    <hr>
    <div class="search">
        <input type="search" id="searchStaff" placeholder="Enter keyword" onkeyup="searchData(this.value)">
        <a class="download_excel" href="javascript:void(0)" onclick="convertToExcel('user_list_table', 'List of users')"title="Download to excel"><i class="fas fa-file-excel"></i></a>
    </div>
    <table id="user_list_table" class="searchTable">
        <thead>
            <tr style="background:var(--moreColor)">
                <td>S/N</td>
                <td>Full Name</td>
                <td>Username</td>
                <td>Role</td>
                <td>Store</td>
                <td>Status</td>
                <td>Date reg</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $n = 1;
                $get_details = new selects();
                $details = $get_details->fetch_details_negCond('users', 'username', 'Sysadmin', 'company', $company);
                if(gettype($details) === 'array'){
                foreach($details as $detail):
            ?>
            <tr>
                <td style="text-align:center; color:red;"><?php echo $n?></td>
                <td><?php echo $detail->full_name?></td>
                <td style="color:var(--otherColor)"><?php echo $detail->username?></td>
                <td><?php echo $detail->user_role?></td>
                <td style="color:var(--primaryColor)">
                    <?php 
                        //get store
                        $get_store = new selects();
                        $str = $get_store->fetch_details_group('stores', 'store', 'store_id', $detail->store);
                        echo $str->store;
                    ?>
                </td>
                <td>
                    <?php
                        if($detail->status == 0){
                            echo "<p style='color:green'>Active</p>";
                        }else{
                            echo "<p style='color:red'Disabled</p>";
                        }
                    ?>
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