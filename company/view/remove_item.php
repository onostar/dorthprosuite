<?php
    session_start();
    $store = $_SESSION['store_id'];
    include "../classes/dbh.php";
    include "../classes/select.php";
    
    if(isset($_SESSION['success'])){
        echo $_SESSION['success'];
    }

    
?>
<div id="remove_item">


    <div class="info" style="width:100%!important; margin:0!important"></div>
    <div class="displays allResults" style="width:80%;">
        <h2>Remove item from store</h2>
        <hr>
        
            <section class="addUserForm">
                <div class="add_user_form" style="width:50%; margin:10px 0; box-shadow:none">
                    <h3 style="background:var(--primaryColor); color:#fff; text-align:left!important;" >Remove quantity </h3>
                    <div class="inputs">
                        <!-- bar items form -->
                        <div class="data" id="bar_items" style="width:100%; margin:2px 0">
                            <!-- <label for="item"> Search Items</label> -->
                            <input type="text" name="item" id="item" required placeholder="Search item" onkeyup="checkOtherItems(this.value, getItemDetails, 'get_item_removal.php')">
                            <div id="sales_item">
                                
                            </div>
                        </div>
                    
                    </div>
                </div>
            </section>
</div>