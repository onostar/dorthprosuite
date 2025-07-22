<?php 
    session_start();
    $title = "Dorthpro Suite - Become a Partner";
    include ('head.php');
?>
<body>
    <?php include "header.php"?>
    
    <div id="slider">
        <div class="about_banner">
            <div class="slide">
                <div class="banner_img">
                    <img src="images/partnership.webp" alt="banner">
                </div>
                <div class="taglines">
                    <h1>Partner with us</h1>
                </div>
            </div>
        </div>
    </div>

    <main>
        <!-- Become a Partner Section -->
        <section id="partner_section" class="demo-section">
            <div class="demo-header">
                <h2>Partner with Us</h2>
                <p>Join us to bring powerful business software to SMEs and enterprises across Africa. Whether you're in sales, consulting, or marketing, this partnership is an opportunity to earn while empowering businesses with tools that work.</p>
            </div>
            <div class="container">
                <div class="partner_why">
                    <!-- Why Partner -->
                    <div class="info-block">
                        <h3><i class="fas fa-handshake" style="color: #0d6efd;"></i> Why Partner With Us?</h3>
                        <p>Onostar Media is behind DorthProSuite — a leading suite of business software for retail, healthcare, hospitality, and finance. As a partner, you’ll get access to a growing ecosystem and recurring income opportunities.</p>
                    </div>

                    <!-- Benefits -->
                    <div class="info-block">
                        <h3><i class="fas fa-gift" style="color: #198754;"></i> What You’ll Gain</h3>
                        <ul>
                            <li>Earn generous commissions — from 10% up to 30% per sale</li>
                            <li>Access to exclusive sales kits, demos, and pitch decks</li>
                            <li>Priority onboarding and dedicated partner support</li>
                            <li>Boost your credibility with a fast-growing software brand</li>
                            <li>Flexible partnership paths tailored to your network</li>
                        </ul>
                    </div>

                    <!-- Who Can Apply -->
                    <div class="info-block">
                        <h3><i class="fas fa-users" style="color: #ffc107;"></i> Who Can Become a Partner?</h3>
                        <ul>
                            <li>Freelancers or marketers with business connections</li>
                            <li>Tech consultants and solution providers</li>
                            <li>Agencies or resellers</li>
                            <li>Business professionals & brand influencers</li>
                        </ul>
                    </div>
                </div>
                <!-- Partner Form -->
                <div class="partner_form">
                    <div class="demo-header mt-4">
                        <h2>Fill the Form Below to Get Started</h2>
                    </div>
                    <div class="demo-form-container">
                        <form action="admin/controller/submit-partner-request.php" method="POST" class="demo-form">
                            <div class="form-group">
                                <label for="full_name">Full Name *</label>
                                <input type="text" id="full_name" name="full_name" required />
                            </div>

                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" name="email" required />
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone Number *</label>
                                <input type="tel" id="phone" name="phone" required />
                            </div>

                            <div class="form-group">
                                <label for="location">Your Location *</label>
                                <input type="text" id="location" name="location" required />
                            </div>

                            <div class="form-group">
                                <label for="experience">Do you have marketing or business experience?</label>
                                <select id="experience" name="experience" required>
                                    <option value="">-- Select --</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Somewhat">Somewhat</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="message">Tell us briefly why you want to partner with us</label>
                                <textarea id="message" name="message" rows="4" placeholder="Your motivation or interest..."></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn-primary">Become a Partner <i class="fas fa-user-plus"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include "footer.php"?>

    <?php
        if(isset($_SESSION['success'])){
            echo $_SESSION['success'];
            unset($_SESSION['success']);
        }
        if(isset($_SESSION['error'])){
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        }
    ?>
    <script src="jquery.js"></script>
    <script src="script.js"></script>
</body>
</html>
