<?php

    include "../classes/dbh.php";
    include "../classes/select.php";


?>
<div class="displays allResults" id="package" style="width:90%!important;margin:0 20px!important">
<div class="info"></div>

    <h2>Manage Packages</h2>
    <hr>
    <div class="search">
        <input type="search" id="searchStaff" placeholder="Enter keyword" onkeyup="searchData(this.value)">
    </div>
    <table id="room_list_table" class="searchTable">
        <thead>
            <tr style="background:var(--moreColor)">
                <td>S/N</td>
                <td>Package</td>
                <td>Price (NGN)</td>
                <td>Stores</td>
                <td>Users</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php
                $n = 1;
                $get_details = new selects();
                $details = $get_details->fetch_details_order('packages', 'package');
                if(gettype($details) === 'array'){
                foreach($details as $detail):
            ?>
            <tr>
                <td style="text-align:center; color:red;"><?php echo $n?></td>
                <td><?php echo strtoupper($detail->package)?></td>
                <td style="color:green"><?php echo number_format($detail->price, 2)?></td>
                <td style="text-align:center"><?php echo $detail->store?></td>
                <td style="text-align:center"><?php echo $detail->users?></td>
                
                <td class="prices">
                    <a style="background:var(--tertiaryColor)!important; color:#fff!important; padding:5px 8px; border-radius:10px;" href="javascript:void(0)" onclick="getForm('<?php echo $detail->package_id?>', 'get_packages.php');"><i class="fas fa-pen"></i></a>
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