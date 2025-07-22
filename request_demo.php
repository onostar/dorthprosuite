<?php 
    session_start();
    $title = "Dorthpro Suite - Request Demo";
    include ('head.php');
?>
<body>
    <!-- <div class="loading">
        <div class="loader">
            <div class="circle"></div>
            <div class="circle"></div>
        </div>
    </div> -->
    <!-- <div class="main"> -->
        <?php include "header.php"?>
        <div id="slider">
            <div class="about_banner">
                <div class="slide">
                    <div class="banner_img">
                        <img src="images/fotoban.jpg" alt="icht">
                    </div>
                    <div class="taglines">
                        <h1>Request Demo</h1>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <main>
        <!-- Request Live Demo Page -->
        <section id="request-demo" class="demo-section">
            <div class="container">
                <div class="demo-header">
                    <h2>Request a Live Demo</h2>
                    <p>See DorthProSuite in action and discover how it can simplify and power your business operations — retail, healthcare, hospitality, finance, or education.</p>
                </div>

                <div class="demo-form-container">
                    <form action="admin/controller/submit-demo-request.php" method="POST" class="demo-form">
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
                        <label for="industry">Business Type / Industry *</label>
                        <select id="industry" name="industry" required>
                            <option value="">-- Select Industry --</option>
                            <option value="Sales and Inventory">Sales & Inventory (Supermarkets / Pharmacies)</option>
                            <option value="Hospitals">Hospitals / Clinics</option>
                            <option value="Diagnostics">Diagnostics (Laboratory / Radiology)</option>
                            <option value="Finance">Microfinance / Loans</option>
                            <option value="Accounting">Accounting & Asset Management</option>
                            <option value="Hospitality">Hotel / Lounge</option>
                            <option value="Education">School / Training</option>
                            <option value="Other">Other</option>
                        </select>
                        </div>

                        <div class="form-group">
                        <label for="date">Preferred Date & Time</label>
                        <input type="datetime-local" id="date" name="preferred_datetime" />
                        </div>

                        <div class="form-group">
                        <label for="message">Additional Message (Optional)</label>
                        <textarea id="message" name="message" rows="4" placeholder="Let us know anything specific you'd like to see..."></textarea>
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn-primary">Request Demo <i class="fas fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        
    </main>
    <?php include "footer.php"?>

    <?php
        if(isset($_SESSION['success'])){
            echo $_SESSION['success'];
            // session_destroy();
            unset($_SESSION['success']);

        }
        if(isset($_SESSION['error'])){
            echo $_SESSION['error'];
            // session_destroy();
            unset($_SESSION['error']);
        }
    ?>
    <script src="jquery.js"></script>
    <script src="script.js"></script>
</body>
</html>