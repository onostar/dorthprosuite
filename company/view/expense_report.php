<?php
    session_start();
    $store  = $_SESSION['store_id'];
    include "../classes/dbh.php";
    include "../classes/select.php";
    $package = $_SESSION['package'];
    if($package != 1){
?>
<div id="expenseReport" class="displays" style="margin:0!important;width:100%!important">
    <div class="select_date" style="width:100%">
        <!-- <form method="POST"> -->
        <section>    
            <div class="from_to_date" style="width:15%">
                <label>Select From Date</label><br>
                <input type="date" name="from_date" id="from_date"><br>
            </div>
            <div class="from_to_date" style="width:15%">
                <label>Select to Date</label><br>
                <input type="date" name="to_date" id="to_date"><br>
            </div>
            <button type="submit" name="search_date" id="search_date" onclick="search('search_expense.php')" style="width:15%">Search <i class="fas fa-search"></i></button>
</section>
    </div>
<div class="displays allResults new_data" id="revenue_report">
    <h2>Expense report for today</h2>
    <hr>
    <div class="search">
        <input type="search" id="searchExpense" placeholder="Enter keyword" onkeyup="searchData(this.value)">
        <a class="download_excel" href="javascript:void(0)" onclick="convertToExcel('data_table', 'Expense Report')"title="Download to excel"><i class="fas fa-file-excel"></i></a>
    </div>
    <table id="data_table" class="searchTable">
        <thead>
            <tr style="background:var(--primaryColor)">
                <td>S/N</td>
                <td>Expense head</td>
                <td>Amount</td>
                <td>Details</td>
                <td>Trans. Date</td>
                <td>Post Time</td>
                <td>Posted by</td>
                
            </tr>
        </thead>
        <tbody>
            <?php
                $n = 1;
                $get_users = new selects();
                $details = $get_users->fetch_details_curdateCon('expenses', 'date(post_date)', 'store', $store);
                if(gettype($details) === 'array'){
                foreach($details as $detail):
            ?>
            <tr>
                <td style="text-align:center; color:red;"><?php echo $n?></td>
                <td style="color:var(--otherColor)">
                    <?php
                        $get_head = new selects();
                        $heads = $get_head->fetch_details_group('expense_heads', 'expense_head', 'exp_head_id', $detail->expense_head);
                        echo $heads->expense_head;
                    ?>
                </td>
                <td><?php echo "₦".number_format($detail->amount, 2)?></td>
                <td><?php echo $detail->details?></td>
                <td style="color:var(--otherColor)"><?php echo date("jS M, Y", strtotime($detail->expense_date));?></td>
                <td style="color:var(--moreColor)"><?php echo date("H:i:sa", strtotime($detail->post_date));?></td>
                <td>
                    <?php
                        //get posted by
                        $get_posted_by = new selects();
                        $checkedin_by = $get_posted_by->fetch_details_group('users', 'full_name', 'user_id', $detail->posted_by);
                        echo $checkedin_by->full_name;
                    ?>
                </td>
                
            </tr>
            <?php $n++; endforeach;}?>
        </tbody>
    </table>
    
    <?php
        if(gettype($details) == "string"){
            echo "<p class='no_result'>'$details'</p>";
        }

        // get sum
        $get_total = new selects();
        $amounts = $get_total->fetch_sum_curdateCon('expenses', 'amount', 'date(post_date)', 'store', $store);
        foreach($amounts as $amount){
            echo "<p class='total_amount' style='color:green'>Total: ₦".number_format($amount->total, 2)."</p>";
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
<script src="../jquery.js"></script>
<script src="../script.js"></script>