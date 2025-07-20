<?php
    session_start();
    $package = $_SESSION['package'];
    $menu = htmlspecialchars(stripslashes($_POST['menu']));
    // echo $menu;
    // instantiate class
    include "../classes/dbh.php";
    include "../classes/select.php";
    if($package == 1){
        $get_cat = new selects();
        $rows = $get_cat->fetch_details_3Cond('sub_menus', 'status', 'menu', 'package', 0, $menu, $package);
?>
        <option value=""selected>Select sub-menu</option>
        <?php
        if(is_array($rows) == 'array'){
        foreach ($rows as $row) {
        ?>
        <option value="<?php echo $row->sub_menu_id?>"><?php echo $row->sub_menu?></option>
        <?php
            }   
        }else{
            echo "<option value=''selected>No Result Found</option>";
        }
    
    }elseif($package == 2){
        $get_cat = new selects();
        $rows = $get_cat->fetch_details_4Cond('sub_menus', 'status', 'menu', 'package', 0, $menu, 1, 2);
      
        ?>
            <option value=""selected>Select sub-menu</option>
            <?php
            if(is_array($rows) == 'array'){
            foreach ($rows as $row) {
            ?>
            <option value="<?php echo $row->sub_menu_id?>"><?php echo $row->sub_menu?></option>
            <?php
                }   
            }else{
                echo "<option value=''selected>No Result Found</option>";
            }
    }elseif($package == 3){
        $get_cat = new selects();
        $rows = $get_cat->fetch_details_5Cond('sub_menus', 'status', 'menu', 'package', 0, $menu, 1, 2, 3);
      
        ?>
            <option value=""selected>Select sub-menu</option>
            <?php
            if(is_array($rows) == 'array'){
            foreach ($rows as $row) {
            ?>
            <option value="<?php echo $row->sub_menu_id?>"><?php echo $row->sub_menu?></option>
            <?php
                }   
            }else{
                echo "<option value=''selected>No Result Found</option>";
            }
    
    }else{
        $get_cat = new selects();
        $rows = $get_cat->fetch_details_2Cond('sub_menus', 'status', 'menu', 0, $menu);
      
        ?>
            <option value=""selected>Select sub-menu</option>
            <?php
            if(is_array($rows) == 'array'){
            foreach ($rows as $row) {
            ?>
            <option value="<?php echo $row->sub_menu_id?>"><?php echo $row->sub_menu?></option>
            <?php
                }   
            }else{
                echo "<option value=''selected>No Result Found</option>";
            }
    }
?>