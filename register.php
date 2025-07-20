<?php 
    session_start();
    $title = "Register Account";
    // include ('head.php');
    header("Location: https://wa.me/+2347068897068");
?>

<body>
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
                <li><a href="javascript:void(0)"><i class="far fa-envelope"></i>info@dorthpro.com</a></li>
              
            </ul>
        </div>
    </section>
    <main>
        <section id="investment" style="align-items:center;flex-direction:column;margin-top:5px">
            
           <div class="logos">
                <a href="index.php"><img src="images/icon.png" alt="logo"></a>
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
                <form action="company/controller/register.php" method="POST" id="contact_form">
                    <h3>Start with a One Month free Professional account</h3>
                    
                    <div class="datas">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="datas">
                        <div class="pass">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="password" required><br>
                        </div>
                        <div class="show_password">
                            <a href="javascript:void(0)" onclick="togglePassword()"><span class='icon'><i class="fas fa-eye"></i></span> <span class='icon_txt'>Show password</span></a>
                        </div>
                    </div>
                    <div class="datas">
                        <div class="pass">
                            <label for="password">Confirm Password</label>
                            <input type="password" name="confirm_password" id="confirm_password" class="password" required><br>
                        </div>
                        <div class="show_password">
                            <a href="javascript:void(0)" onclick="togglePassword()"><span class='icon'><i class="fas fa-eye"></i></span> <span class='icon_txt'>Show password</span></a>
                        </div>
                    </div>
                    
                    <button type="submit" style="background:var(--primaryColor)!important;" name="register" id="register">Sign up <i class="fas fa-paper-plane"></i></button>
                </form>
                <div class="signup_option">
                    <p>Already have an account? <a href="company/index.php">Login now</a></p>
                </div>
            </div>
        </section>
        
    </main>
    <?php include "footer.php"?>

    <script src="jquery.js"></script>
    <script src="script.js"></script>
</body>
</html>