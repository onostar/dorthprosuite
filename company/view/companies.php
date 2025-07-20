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
        <a class="download_excel" href="javascript:void(0)" onclick="convertToExcel('user_list_table', 'List of companies')"title="Download to excel"><i class="fas fa-file-excel"></i></a>
    </div>
    <table id="user_list_table" class="searchTable">
        <thead>
            <tr style="background:var(--moreColor)">
                <td>S/N</td>
                <td>Company</td>
                <td>contact</td>
                <td>Email</td>
                <td>Phone No.</td>
                <td>Stores</td>
                <td>status</td>
                <td>Date reg</td>
                <td>Due Date</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $n = 1;
                $get_details = new selects();
                $details = $get_details->fetch_details_order('companies', 'date_created');
                if(gettype($details) === 'array'){
                foreach($details as $detail):
                    
            ?>
            <tr>
                <td style="text-align:center; color:red;"><?php echo $n?></td>
                <td><?php echo $detail->company?></td>
                <td>
                    <?php
                        //get contact
                        $rows = $get_details->fetch_details_2cond('users', 'company', 'user_role', $detail->company_id, 'Admin');
                        foreach($rows as $row){
                            $full_name = $row->full_name;
                        }
                        echo $full_name;
                    ?>
                </td>
                <td><?php echo $detail->email_address?></td>
                <td>
                    <?php
                        //get contact
                        $rows = $get_details->fetch_details_cond('stores', 'company', $detail->company_id);
                        foreach($rows as $row){
                            $phone =  $row->phone_number;
                        }
                        echo $phone;
                    ?>
                </td>
                <td style="color:var(--primaryColor); text-align:center">
                    <?php 
                        //get store
                        $get_store = new selects();
                        $stores = $get_store->fetch_count_cond('stores', 'company', $detail->company_id);
                        echo $stores;
                    ?>
                </td>
                <td>
                    <?php
                        if($detail->package_status == 1){
                            echo "<p style='color:green'>Active</p>";
                        }else{
                            echo "<p style='color:red'Inactive</p>";
                        }
                    ?>
                </td>
                <td style="color:green"><?php echo date("d-M-Y", strtotime($detail->date_created))?></td>
                <td style="color:red"><?php echo date("d-M-Y", strtotime($detail->due_date))?></td>
                
                
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