<?php 
    $title = "Complete Organization setup";
    session_start();
    include "../classes/dbh.php";
    include "../classes/select.php";
    if(isset($_SESSION['company']) && isset($_SESSION['user'])){
        // $company = $_SESSION['company'];
        $user = $_SESSION['user'];
        //get company id
        $get_det = new selects();
        $results = $get_det->fetch_details_group('users', 'company','username', $_SESSION['user']);
        $company = $results->company;
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
        <section id="investment" style="align-items:center;flex-direction:column; margin-top:5px;">
            
           <div class="logos">
                <a href="../index.php"><img src="../../images/icon.png" alt="logo"></a>
           </div>
           <?php
                    if(isset($_SESSION['success'])){
                        echo "<p class='success succeed' style='background:green;color:#fff'>" . $_SESSION['success']. "</p>
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
                <form action="../controller/complete_setup.php" method="POST" id="contact_form">
                    <h3>Organizational Details</h3>
                    <input type="hidden" name="user" id="user" value="<?php echo $user?>">
                    <input type="hidden" name="comp_id" id="comp_id" value="<?php echo $company?>">
                    <div class="datas">
                        <label for="email">Business Name</label>
                        <input type="text" name="company" id="company" required>
                    </div>
                    <div class="datas">
                        <label for="email">Your Full Name</label>
                        <input type="text" name="full_name" id="full_name" required>
                    </div>
                    <div class="inputs" style="display:flex;justify-content:space-between;gap:.8rem">
                        <div class="datas" style="width:48%">
                            <label for="address">Adress</label>
                            <input type="text" name="address" id="address" required><br>
                        </div>
                        <div class="datas" style="width:48%">
                            <label for="phone">Phone Numbers</label>
                            <input type="tel" name="phone" id="phone" required><br>
                        </div>
                    </div>
                    <button type="submit" name="register"style="background:var(--primaryColor)!important" id="register">Get Started <i class="fas fa-paper-plane"></i></button>
                </form>
                
            </div>
        </section>
        
    </main>
    <?php include "../../footer.php"?>
<!-- </div> -->
    <!-- <div class="help" id="help">
        <a target="_blank" href="https://api.whatsapp.com/send?phone=2348157985866"><i class="fab fa-whatsapp"></i> Hello, How can we help?</a>
    </div> -->
   
    <!-- addvert -->
    <!-- <div class="addverts">
        <div class="close_add">
            <i class="fas fa-close"></i>
        </div>
        <div class="clear"></div>
        <div class="add_box">
            <h3>Welcome to IppSSolar</h3>
            <div class="welcome_plans">
                <img src="images/ippssolar_logo2.png" alt="logo">
                <p>Have you invested with Ippssolar today? Hurry now as interest rates is now very high. Offer lasts not so long</p>
                <div class="learn">
                    <a href="#investment" id="learn">Learn more <i class="fas fa-info"></i></a>
                </div>
                
            </div>
        </div>
    </div> -->
    <!-- chat -->
    <!-- <div id="chat">
        <div class="chat_icon" title="Live chat">
            <i class="fas fa-comments"></i>
        </div>
        <div class="chat_close" title="Close chat">
            <i class="fas fa-comment-slash"></i>
        </div>
        <div class="chat_message">
            <h2>Live Chat <i class="far fa-comment"></i></h2>
            <div class="all_chat">
                <div id="chat1">
                    <div class="main_chats">
                        <div class="sender">
                            <i class="fas fa-user-tie"></i>
                            <p>Customer service</p>
                        </div>
                        <p class="chats">Hi. This is customer service<br> Welcome to Bob and sil global. We ar e a world class Renewable energy service company. How may we be of service today?</p>
                        
                    </div>
                </div>
                <div id="chat3">
                    <div class="main_chats">
                        <div class="sender">
                            <i class="fas fa-user-tie"></i>
                            <p>Customer service</p>
                        </div>
                        <p class="chats"> Ask me anything, i am here to help</p>
                        
                    </div>
                </div>
                
                
            </div>
            
             <form action="" id="chat_box">
                <input type="text" name="messages" id="messages" placeholder="Type your message here">
                <a href="views/login_page.php"><i class="fas fa-paper-plane"></i></a>
             </form>   
                
            
        </div>
        
    </div> -->
    <script src="jquery.js"></script>
    <script src="script.js"></script>
</body>
</html>

<?php 
}else{
    header("Location: ../index.php");
}
?>