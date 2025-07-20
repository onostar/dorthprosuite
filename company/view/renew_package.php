<?php 
    $title = "Dorthpro | Package Renewal";
    
    include "../classes/dbh.php";
    include "../classes/select.php";
    session_start();
    if(isset($_SESSION['company']) && isset($_SESSION['user'])){
        $company = $_SESSION['company_id'];
        $email = $_SESSION['user'];
        $user = $_SESSION['user_id'];
        $role = $_SESSION['role'];
        $get_com = new selects();
        $comp = $get_com->fetch_details_group('companies', 'company', 'company_id', $company);
        $company_name = $comp->company;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dorthpro is an online inventory and sales management software for retail and wholesale stores, pharmacies, stock register, etc">
    <meta name="keyword" content="Sales, Inventory, purchases, retail, wholesale, analytics, accounting, reports" />
	<meta name="author" content="Onostar Media"/>
	<meta name="og:url" property="og:url" content="https://">
    <meta name="og:type "property="og:type" content="website">
    <meta name="og:title" property="og:title" content="" />
    <meta name="og:site_name" property="og:site_name" content="" />
    <meta name="og:description" property="og:description" content="Dorthpro is an online inventory and sales management software for retail and wholesale stores, pharmacies, stock register, etc">
    <meta name="keyword" content="Sales, Inventory, purchases, retail, wholesale, analytics, accounting, reports">
    <meta name="og:image" property="og:image" itemprop="image" content="images/icon.png">
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="300" />
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../fontawesome-free-6.0.0-web/css/all.css">
    <link rel="stylesheet" href="../../fontawesome-free-6.0.0-web/css/all.min.css">
    
    <link rel="icon" href="../../images/icon.png" type="image/png" size="32X32">
    <link rel="stylesheet" href="../../style.css">
</head>
<style>
    .invest_form{
        width:50%;
    }
    h2{
        font-size:1.2rem;
    }
    h3{
        font-size:1rem;
    }
    @media screen and (max-width:650px){
        .invest_form{
        width:100%;
    }
    }
</style>
<body>
    <section class="top_head" id="topHeader">
        <div class="social_media">
            <ul>
                <li><a href="https://facebook.com/onostarmedia"><i class="fab fa-facebook"></i></a></li>
                <li><a href="https://www.linkedin.com/company/onostar-media"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="https://twiter.com/onostar_media"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://instagram.com/onostarmedia"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
        <div class="contact_phone">
            <ul>
                <!-- <li>
                    <a><i class="far fa-clock"></i>Mon - Sat : 8:00am - 6:00pm</a>
                </li> -->
                <li><a href="javascript:void(0)"><i class="far fa-envelope"></i>info@dorthpro.com</a></li>
               
                <!-- <li><a href="javascript:void(0);"><i class="fas fa-users"></i>Alumni</a></li>
                <li><a href="javascript:void(0)">Portal<i class="fas fa-sign-in-alt"></i></a></li> -->
            </ul>
        </div>
    </section>
    <main>
        <section id="investment" style="align-items:center;flex-direction:column; margin-top:10px!important">
            
           <div class="logos">
           <a href="../index.php"><img src="../../images/icon.png" alt="logo"></a>
           </div>
           <?php
                    if(isset($_SESSION['success'])){
                        echo "<p class='success succeed' style='color:green'>" . $_SESSION['success']. "</p>
                        <script>
                            setTimeout(function(){
                                $('.succeed').hide();
                            }, 5000);
                        </script>
                        ";
                        unset($_SESSION['success']);
                    }
                ?>
                
                <?php
                    if(isset($_SESSION['error'])){
                        echo "<p class='error succeed'>" . $_SESSION['error']. "</p>
                        <script>
                            setTimeout(function(){
                                $('.succeed').hide();
                            }, 5000)
                        </script>";
                        unset($_SESSION['error']);
                    }
                ?>
            <div class="invest_form">
                <section id="contact_form">
                    <h2 style="color:var(--secondaryColor);text-transform:uppercase;text-align:center"><?php echo $company_name?></h2>
                    <h3 style="text-align:center!important">Update Service Package</h3>
                    <input type="hidden" name="user" id="user" value="<?php echo $user?>">
                    <input type="hidden" name="username" id="username" value="<?php echo $email?>">
                    <input type="hidden" name="company" id="company" value="<?php echo $company?>">
                    <?php if($role == "Admin"){?>
                    <div class="datas">
                        <label for="package">Select Package</label><br>
                        <select name="package" id="package" style="padding:5px;width:100%" onchange="getPackage(this.value)">
                            <option value=""selected>Select Package</option>
                            <?php
                                $get_pkg = new selects();
                                $rows = $get_pkg->fetch_details_negCond1('packages', 'package_id', 4);
                                foreach($rows as $row){
                            ?>
                            <option value="<?php echo $row->package_id?>"><?php echo strtoupper($row->package)." (₦".number_format($row->price, 2).")"?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="data" id="pop_features">
                        
                    </div>
                    <button type="submit" name="register" id="register" style="background:var(--primaryColor)!important" onclick="renewPackage()">Continue <i class="fas fa-arrow-right"></i></button>
                    <?php }else{?>
                    <div class="data">
                        <p style="text-align:center">Kindy Contact your Admin to update your service package</p>
                    </div>
                    <?php }?>
                </section>
                
            </div>
        </section>
        
    </main>
    <?php include "../../footer.php"?>

    
    <script src="../jquery.js"></script>
    <script src="../script.js"></script>
    <!-- <script src="https://dropin-sandbox.vpay.africa/dropin/v1/initialise.js"></script> -->
    <script src="https://dropin.vpay.africa/dropin/v1/initialise.js"></script>
</body>
</html>

<?php }else{
        header("Location: ../../index.php");
}
    ?>