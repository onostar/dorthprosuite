<?php
    session_start();
    $company = $_SESSION['company_id'];
    $store = $_SESSION['store_id'];
    $item = htmlspecialchars(stripslashes($_POST['item']));
    // instantiate class
    include "../classes/dbh.php";
    include "../classes/select.php";

    $get_item = new selects();
    $rows = $get_item->fetch_details_like2Equal1Cond('items', 'item_name', 'barcode', $item,'company', $company);
     if(is_array($rows)){
        foreach($rows as $row):
            $quantity = 0;
            //get item quantity from inventory
            $get_qty = new selects();
            $qtys = $get_qty->fetch_details_2cond('inventory', 'store', 'item', $store, $row->item_id);
            if(is_array($qtys)){
                $sums = $get_qty->fetch_sum_double('inventory', 'quantity', 'store', $store, 'item', $row->item_id);
                if (is_array($sums) && !empty($sums)) {
                    foreach ($sums as $sum) {
                        $quantity = $sum->total;
                    }
                }
            }
            
    ?>
    <div class="results">
        <a href="javascript:void(0)"  onclick="addSales('<?php echo $row->item_id?>')"><?php echo $row->item_name." (Price => ₦".$row->sales_price.", Qty => ".$quantity.")"?></a>
    </div>
    
    
<?php
    endforeach;
     }else{
        echo "No resullt found";
     }
?>