<?php 
    session_start();
    if(isset($_SESSION['user'])){
        
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Inventory system, point of sales, inventory and sales management, retail, supermarket software, sales application">
    <meta name="description" content="An online/offline inventory and sales management software for retail and wholesale stores and pharmacies, stock register, etc">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dorthpro | Verify Account</title>
    <link rel="icon" type="image/png" size="32x32" href="images/icon.png">
    <link rel="stylesheet" href="fontawesome-free-6.0.0-web/css/all.css">
    <link rel="stylesheet" href="fontawesome-free-6.0.0-web/css/all.min.css">
    <link rel="stylesheet" href="../style.css">

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
        <section class="reg_log">
            
            <div class="login_page">
                <h1 style="width:50px">
                    <a href="../index.php">
                        <img src="../images/icon.png" alt="logo">
                    </a>
                </h1>
                
                <h2>Verify your account</h2>
                <p>Kindly Enter the code sent to your mail to complete your registration</p>
                <?php
                    if(isset($_SESSION['success'])){
                        echo "<div class='success'><p>" . $_SESSION['success']. "</p></div>";
                        unset($_SESSION['success']);
                    }
                ?>
                <?php
                    if(isset($_SESSION['error'])){
                        echo "<p class='error'>" . $_SESSION['error']. "</p>";
                        unset($_SESSION['error']);
                    }
                ?>
                <form action="controller/verify_user.php" method="POST">
                    <div class="data">
                        <label for="username">Enter verification code</label>
                        <input type="text" name="verify_code" id="verify_code" value="<?php
                            if(isset($_GET['code'])){
                                echo $_GET['code'];
                            }
                        ?>"required>
                    </div>
                    <div class="data">
                        <button type="submit" id="verify" name="verify">Verify <i class="fas fa-sign-in-alt"></i></button>

                    </div>
                    
                </form>
                <div class="signup_option">
                    <p>Don't have an account yet? <a href="../register.php">Signup now</a></p>
                </div>
                <div id="foot">
                    <p >&copy;<?php echo Date("Y");?> Dorthpro Digitals. All Rights Reserved.</p>

                </div>

            </div>
            <div class="adds">
                <img src="../images/wallpaper3.webp" alt="dorthpro">
            </div>
        </section>
    </main>
    <script src="../jquery.js"></script>
    <script src="../script.js"></script>
</body>
</html>
<?php
    }else{
        header("Location: index.php");
    }
?>