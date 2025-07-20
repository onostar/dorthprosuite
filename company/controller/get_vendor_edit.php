<?php
    session_start();
    $company = $_SESSION['company_id'];
    $input= htmlspecialchars(stripslashes($_GET['input']));
    // instantiate class
    include "../classes/dbh.php";
    include "../classes/select.php";
    $get_customer = new selects();
    $rows = $get_customer->fetch_details_like3Cond('vendors', 'vendor', 'phone', $input, 'company', $company);
     if(gettype($rows) == 'array'){
        foreach($rows as $row):
        
    ?>
    <div class="results">
        <a href="javascript:void(0)" onclick="showPage('edit_vendor.php?vendor=<?php echo $row->vendor_id?>')"><?php echo $row->vendor?></a>
    </div>
  
    
<?php
    endforeach;
     }else{
        echo "No resullt found";
     }
?>