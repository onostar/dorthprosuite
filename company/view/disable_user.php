<?php
    session_start();
    $company = $_SESSION['company_id'];
    $package = $_SESSION['package'];
    include "../classes/dbh.php";
    include "../classes/select.php";
    if($package != 1){

?>
    <div class="info"></div>
<div class="displays allResults" id="disable_user">
    <h2>Disable user account</h2>
    <hr>
    <div class="search">
        <input type="search" id="searchDisable" placeholder="Enter keyword" onkeyup="searchData(this.value)">
    </div>
    <table id="disable_table" class="searchTable">
        <thead>
            <tr>
                <td>S/N</td>
                <td>Full Name</td>
                <td>Username</td>
                <td>User role</td>
                <td>Date created</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php
                $n = 1;
                $get_users = new selects();
                $details = $get_users->fetch_details_3cond1neg('users', 'status', 'company', 'user_role', 0, $company, 'Admin');
                if(gettype($details) === 'array'){
                foreach($details as $detail):
            ?>
            <tr>
                <td style="text-align:center;color:red"><?php echo $n?></a></td>
                <td><?php echo $detail->full_name;?></td>
                <td><?php echo $detail->username;?></td>
                <td><?php echo $detail->user_role;?></td>
                <td><?php echo date("jS M, Y", strtotime($detail->reg_date));?></td>
                <td><a style="box-shadow:2px 2px 2px #c4c4c4; padding:5px 10px; text-align:center; border-radius:10px;color:#fff!important; background:red" href="javascript:void(0)" title="Disable user account" onclick="disableUser('<?php echo $detail->user_id?>')">Disable</a></td>
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