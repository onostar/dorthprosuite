<?php
session_start();
$company = $_SESSION['company_id'];
    include "../classes/dbh.php";
    include "../classes/select.php";
   

    //get user
    if(isset($_SESSION['user'])){
        $username = $_SESSION['user'];
        //get user role
        $get_role = new selects();
        $roles = $get_role->fetch_details_group('users', 'user_role', 'username', $username);
        $role = $roles->user_role;
         //pagination
        if(!isset($_GET['page'])){
            $page_number = 1;
        }else{
            $page_number = $_GET['page'];
        }
        //set limit
        $limit = 50;
        //calculate offset
        $offset = ($page_number - 1) * $limit;
        $prev_page = $page_number - 1;
        $next_page = $page_number + 1;
        $adjacents = "2";
        //get number of pages
        $get_pages = new selects();
        $pages = $get_pages->fetch_count_cond('items', 'company', $company);
        $total_pages = ceil($pages/$limit);
        //get second to last page
        $second_to_last = $total_pages - 1;

?>
    <div class="info"></div>
<div class="displays allResults" id="bar_items">
    <h2>List of items with prices</h2>
    <hr>
    <div class="search">
        <input type="search" id="searchRoom" placeholder="Enter keyword" onkeyup="searchData(this.value)">
        <a class="download_excel" href="javascript:void(0)" onclick="convertToExcel('item_list_table', 'List of items')"title="Download to excel"><i class="fas fa-file-excel"></i></a>
    </div>
    <table id="item_list_table" class="searchTable">
        <thead>
            <tr style="background:var(--moreColor)">
                <td>S/N</td>
                <td>Category</td>
                <td>Item name</td>
                <?php 
                    if($role == "Admin"){
                ?>
                <td>Cost</td>
                <?php }?>
                <td>Price</td>
                <td>Bar code</td>
                <td>Status</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $n = 1;
                $get_items = new selects();
                $details = $get_items->fetch_details_orderCond('items', 'company', $company, 'item_name');
                if(gettype($details) === 'array'){
                foreach($details as $detail):
            ?>
            <tr>
                <td style="text-align:center; color:red;"><?php echo $n?></td>
                <td style="color:var(--moreClor);">
                    <?php
                        //get category name
                        $get_cat_name = new selects();
                        $cat_name = $get_cat_name->fetch_details_group('departments', 'department', 'department_id', $detail->department);
                        echo $cat_name->department;
                    ?>
                </td>
                <td><?php echo $detail->item_name?></td>
                <?php
                    if($role == "Admin"){
                ?>
                <td>
                    <?php 
                        echo "₦".number_format($detail->cost_price, 2);
                    ?>
                </td>
                <?php } ?>
                <td>
                    <?php 
                        echo "₦".number_format($detail->sales_price, 2);
                    ?>
                </td>
                <td><?php echo $detail->barcode?></td>
                <td>
                    <?php
                        if($detail->item_status == 0){
                            echo "<span style='color:green'>Active <i class='fas fa-check'></i></span>";
                        }else{
                            echo "<span style='color:red'>Disabled <i class='fas fa-ban'></i></span>";
                        }
                    ?>
                </td>
                
            </tr>
            
            <?php $n++; endforeach;}?>
        </tbody>
    </table>
    <div class="page_links">
        <?php
            if(gettype($details) == "array"){
                echo "<p><strong>Pages ".$page_number." of ".$total_pages."</strong></p>";
        ?>
        <ul class="pages">
            <?php
                if($page_number > 1){
            ?>
                <li><a href="javascript:void(0)" onclick="showPage('item_list.php?page=1')"title="Go to first page"><< First page</a></li>
                <li><a href="javascript:void(0)" onclick="showPage('item_list.php?page=<?php echo $prev_page?>')"title="Go to previous page">< Previous</a></li>
            <?php
            }
                if($page_number < $total_pages){
                   
            ?>
                <li><a href="javascript:void(0)" onclick="showPage('item_list.php?page=<?php echo $next_page?>')" title="Go to next page">Next ></a></li>
                <li><a href="javascript:void(0)" onclick="showPage('item_list.php?page=<?php echo $total_pages?>')" title="Go to last page">Last Page >></a></li>
                <?php }?>
        </ul>
        <?php }?>
    </div>
    <?php
        if(gettype($details) == "string"){
            echo "<p class='no_result'>'$details'</p>";
        }
    
    ?>
</div>
<?php }?>