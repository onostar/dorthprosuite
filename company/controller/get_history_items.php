<?php
    session_start();
    $company = $_SESSION['company_id'];
    $store = $_SESSION['store_id'];
    $item = htmlspecialchars(stripslashes($_POST['item']));
    // instantiate class
    include "../classes/dbh.php";
    include "../classes/select.php";

    $get_item = new selects();
    $rows = $get_item->fetch_details_like2Equal1Cond('items', 'item_name', 'barcode', $item, 'company', $company);
     if(gettype($rows) == 'array'){
        foreach($rows as $row):
            
        
    ?>
    <div class="results">
        <a href="javascript:void(0)" onclick="getItemHistory('<?php echo $row->item_id?>')"><?php echo $row->item_name;?></a>
    </div>
   
    
<?php
    endforeach;
    }else{
        echo "No resullt found";
    }
?>