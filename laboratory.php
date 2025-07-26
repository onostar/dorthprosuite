<?php 
    $title = "DorthPro Laboratory Information System";
    $description = "Run your diagnostics or medical laboratory smarter — manage patients, test requests, billing, and reporting in one cloud-based system.";
    include "controller/connections.php";
    include "admin/classes/dbh.php";
    include "admin/classes/select.php";
    include ('product_head.php');
?>
<body>
    <style>
        /* General Landing Page Fixes */
        #aboutBanner {
            height: 90vh;
        }

        .taglines a {
            padding: 12px;
            border-radius: 15px;
        }
        /* Feature Section */
        #features {
            width: 90%;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
        }

        .features h4 {
            font-size: 1rem;
            font-family: "Poppins", sans-serif;
            font-weight: bolder;
        }

        #features .features {
            width: 50%;
        }

        .feature_img img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        /* Mobile Responsiveness */
        @media screen and (max-width: 800px) {
            #features, .features {
                flex-direction: column;
                width: 100%;
            }
            #features .features {
                width: 100%;
            }
        }

    </style>

    <?php include ('header.php')?>

    <div id="slider">
        <div class="slides">
            <div class="slide">
                <div class="banner_img">
                    <img src="images/hospital_banner.png" alt="hotel software banner">
                </div>
                <div class="taglines">
                    <div class="taglines_note">
                        <h1>DorthPro Laboratory Information System</h1>
                        <p>Streamline your lab operations, manage test workflows, patient records, results, billing, and reporting — all in one smart platform.</p>
                        <div class="btns">
                            <a href="https://wa.me/2347068897068?text=Hi, I'm interested in the DorthPro Laboraotory software" target="_blank">Get Started <i class="fab fa-whatsapp"></i></a>
                            <a href="request_demo.php">Request Demo <i class="fas fa-play-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main>

        <!-- What dorthpro is -->
        <section id="features">
            <div class="features">
                <h3>All-in-One Laboratory Management</h3>
                <h4>From Test Request to Result Reporting</h4>
                <p>DorthPro LIS empowers diagnostic labs and medical laboratories to simplify sample management, track results, handle billing, and deliver accurate patient reports — faster and more securely.</p>
                <hr>
                <div class="feats">
                    <div class="feat">
                        <i class="fa-solid fa-user-injured"></i>
                        <div class="feat_details">
                            <h3>Patient Records</h3>
                            <p>Register and manage patient details, history, and lab interactions in one place.</p>
                        </div>
                    </div>
                    <div class="feat">
                        <i class="fa-solid fa-vial"></i>
                        <div class="feat_details">
                            <h3>Sample Tracking</h3>
                            <p>Track samples from collection through processing to result — avoid delays and mix-ups.</p>
                        </div>
                    </div>
                    <div class="feat">
                        <i class="fa-solid fa-file-medical"></i>
                        <div class="feat_details">
                            <h3>Test Result Management</h3>
                            <p>Input, review, and approve results. Auto-generate printable patient reports instantly.</p>
                        </div>
                    </div>
                    <div class="feat">
                        <i class="fa-solid fa-money-check-alt"></i>
                        <div class="feat_details">
                            <h3>Billing & Invoicing</h3>
                            <p>Auto-generate bills for each test, accept payments, and issue receipts — all in one step.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="feature_img">
                <img src="images/dorthpro_hospital.png" alt="DorthPro Hospital" loading="lazy">
                <img src="images/dorthpro_hospital_laptop.png" alt="DorthPro Hospital" loading="lazy">
            </div>
            </section>

        <!-- Why Choose DorthPro -->
        <section id="amenities">
            <h3>Why Choose DorthPro Lab?</h3>
            <hr>
            <h2>Smart Features for Smart Labs</h2>
            <div class="amenities">
                <div class="offer">
                    <i class="fas fa-flask"></i>
                    <div class="offer_info">
                        <h4>Flexible Test Setup</h4>
                        <p>Create custom test categories, units, ranges, and reporting formats.</p>
                    </div>
                </div>
                <div class="offer">
                    <i class="fas fa-chart-bar"></i>
                    <div class="offer_info">
                        <h4>Real-Time Reporting</h4>
                        <p>Monitor daily activities, finances, and test volumes with dynamic reports.</p>
                    </div>
                </div>
                <div class="offer">
                    <i class="fas fa-envelope-open-text"></i>
                    <div class="offer_info">
                        <h4>Email & SMS Notifications</h4>
                        <p>Automatically notify clients when results are ready.</p>
                    </div>
                </div>
                <div class="offer">
                    <i class="fas fa-cloud-upload-alt"></i>
                    <div class="offer_info">
                        <h4>Cloud-Based Access</h4>
                        <p>Work securely from anywhere — accessible by doctors, lab scientists, and management.</p>
                    </div>
                </div>
                <div class="offer">
                    <i class="fas fa-file-medical-alt"></i>
                    <div class="offer_info">
                        <h4>Custom Result Templates</h4>
                        <p>Design reusable result formats for different tests and departments — fast and consistent every time.</p>
                    </div>
                </div>
                <div class="offer">
                    <i class="fas fa-sync-alt"></i>
                    <div class="offer_info">
                        <h4>Automated Workflow</h4>
                        <p>From sample collection to result delivery, streamline the lab process and minimize delays.</p>
                    </div>
                </div>
            </div>
        </section>

       <!-- Product Demo Video -->
        <section id="product_video">
            <h3>See DorthPro Lab in Action</h3>
            <p>Watch this quick demo to discover how DorthPro Laboratory Information System simplifies test management, result generation, and lab operations — all from one smart dashboard.</p>
            <div class="video_wrapper">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/cSxjmt_06ZM?si=hfHsSk125gZuLO_4" title="DorthPro Lab Demo Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </section>
        <!-- testimonials -->
        <section id="testimonies">
            <h3>What Our Clients Say</h3>
            <hr>
            <div class="box">
                <div class="testimonies">
                    <div class="testimony">
                        <div class="test_note">
                            <p>"DorthPro LIS has streamlined our entire lab process — from test entry to result delivery. It's fast, accurate, and saves us hours every day."</p>
                            <div class="testifier">
                                <img src="images/stjude_logo.png" alt="testifier">
                                <span>- Ify Johnson, Lab Scientist, St. Jude Lab</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimony">
                        <div class="test_note">
                            <p>"DorthPro LIS has streamlined our entire lab process — from test entry to result delivery. It's fast, accurate, and saves us hours every day."</p>
                            <div class="testifier">
                                <img src="images/stjude_logo.png" alt="testifier">
                                <span>- Ify Johnson, Lab Scientist, St. Jude Lab</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimony">
                        <div class="test_note">
                            <p>"DorthPro LIS has streamlined our entire lab process — from test entry to result delivery. It's fast, accurate, and saves us hours every day."</p>
                            <div class="testifier">
                                <img src="images/stjude_logo.png" alt="testifier">
                                <span>- Ify Johnson, Lab Scientist, St. Jude Lab</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimony">
                        <div class="test_note">
                            <p>"DorthPro LIS has streamlined our entire lab process — from test entry to result delivery. It's fast, accurate, and saves us hours every day."</p>
                            <div class="testifier">
                                <img src="images/stjude_logo.png" alt="testifier">
                                <span>- Ify Johnson, Lab Scientist, St. Jude Lab</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
               
        
        <!-- Clients -->
        <!-- <section id="partners">
            <h3>Some of Our Clients</h3>
            <div class="partners">
                <figure>
                    <img src="images/asgard.jpg" alt="Client" loading="lazy">
                    <figcaption>Asgard Lounge</figcaption>
                </figure>
                <figure>
                    <img src="images/marzbee_logo.png" alt="Client" loading="lazy">
                    <figcaption>Marzbee Hotel,Lagos</figcaption>
                </figure>
                <figure>
                    <img src="images/dexdee_logo.jpg" alt="Client" loading="lazy">
                    <figcaption>Dexdee Resort</figcaption>
                </figure>
                <figure>
                    <img src="images/cavaz.jpg" alt="Client" loading="lazy">
                    <figcaption>Cavaz Chop House</figcaption>
                </figure>
                <figure>
                    <img src="images/icon.png" alt="Client" loading="lazy">
                    <figcaption>D-Qube Eatery</figcaption>
                </figure>
                <figure>
                    <img src="images/icon.png" alt="Client" loading="lazy">
                    <figcaption>Nicee Bakes</figcaption>
                </figure>
                <figure>
                    <img src="images/icon.png" alt="Rossy tasty room" loading="lazy">
                    <figcaption>Rossy tasty room</figcaption>
                </figure>
                
                
            </div>
        </section> -->
        <!-- faq -->
        <section id="faq">
            <h3>Frequently Asked Questions</h3>
            <div class="faq_items">
                <div class="faq_item">
                    <h4>Can I use this in a small diagnostic lab?</h4>
                    <p>Absolutely. DorthPro LIS is designed for labs of all sizes — from small diagnostic centers to large facilities.</p>
                </div>
                <div class="faq_item">
                    <h4>Is it accessible remotely?</h4>
                    <p>Yes, it's fully cloud-based. Lab staff, doctors, and management can securely access the system from anywhere.</p>
                </div>
                <div class="faq_item">
                    <h4>Can I customize test templates?</h4>
                    <p>Yes, you can create and edit test templates, reference ranges, result formats, and categories to match your workflow.</p>
                </div>
                <div class="faq_item">
                    <h4>Will I receive notifications when results are ready?</h4>
                    <p>Yes. Clients and doctors can receive instant SMS or email alerts when test results are available.</p>
                </div>
                <div class="faq_item">
                    <h4>Is training included?</h4>
                    <p>Yes, we offer full onboarding, role-based training, and continuous support to ensure smooth adoption.</p>
                </div>
                <div class="faq_item">
                    <h4>Can it be used offline?</h4>
                    <p>By default it runs online, but we offer an offline-compatible version for environments with poor connectivity.</p>
                </div>
            </div>
        </section>
        <!-- hero section -->
        <section id="quote_request">
            <h3>Ready to Upgrade Your Laboratory?</h3>
            <p>Let DorthPro Laboratory System simplify your processes, save time, and improve accuracy.</p><br>
            <div class="block">
                <a href="request_demo.php" style="background:var(--secondaryColor);font-size:1.1rem">Request a Free Demo <i class="fas fa-play-circle"></i></a>
                <a href="https://wa.me/2347068897068?text=Hi, I'm interested in DorthPro Laboratory Software" target="_blank" style="background:var(--tertiaryColor);font-size:1.1rem">Get Started <i class="fab fa-whatsapp"></i></a>
            </div>
        </section>
        <!-- other products -->
        <section id="core_service">
                <h3>Discover Other Dorthpro Products</h3>
                <div class="core_services">
                    <figure>
                        <img src="images/pos_icon.jpg" alt="icon">
                        <figcaption>
                            <h3>DorthPro POS</h3>
                            <p>Powerful sales and inventory software for retail and wholesale stores, supermarkets, and pharmacies. Track stock, sales, expenses, and generate insightful business reports effortlessly.</p><br>
                            <a href="sales_inventory.php">View Details <i class="fas fa-paper-plane"></i></a>
                        </figcaption>
                    </figure>

                    <figure>
                        <img src="images/hotel_icon.png" alt="icon">
                        <figcaption>
                            <h3>DorthPro Hotel & Lounge</h3>
                            <p>Streamline guest check-ins, reservations, billing, and manage your bar and restaurant inventory from one easy-to-use platform.</p><br>
                            <a href="hotel.php">View Details <i class="fas fa-paper-plane"></i></a>
                        </figcaption>
                    </figure>

                    <figure>
                        <img src="images/hospital_icon.png" alt="icon">
                        <figcaption>
                            <h3>DorthPro Hospital Management</h3>
                            <p>Complete hospital and clinic solution — manage patient records, appointments, consultations, labs, pharmacy, billing, and corporate accounts in one place.</p><br>
                            <a href="hospital.php">View Details <i class="fas fa-paper-plane"></i></a>
                        </figcaption>
                    </figure>

                    <figure>
                        <img src="images/accounting.jpg" alt="icon">
                        <figcaption>
                            <h3>DorthPro Accounting</h3>
                            <p>Full-featured accounting software with invoicing, asset management, depreciation tracking, and key financial statements like cash flow, profit & loss, and balance sheet.</p><br>
                            <a href="accounting.php">View Details <i class="fas fa-paper-plane"></i></a>
                        </figcaption>
                    </figure>

                    <figure>
                        <img src="images/loan_icon.png" alt="icon">
                        <figcaption>
                            <h3>DorthPro Loan & Microfinance</h3>
                            <p>Loan management made simple — automate applications, approvals, disbursements, repayments, interest tracking, penalties, and reports. Built for microfinance and cooperatives.</p><br>
                            <a href="microfinance.php">View Details <i class="fas fa-paper-plane"></i></a>
                        </figcaption>
                    </figure>

                    <figure>
                        <img src="images/school_app.png" alt="icon">
                        <figcaption>
                            <h3>DorthPro School Manager</h3>
                            <p>All-in-one school management solution — admissions, attendance, grading, fees, communication, and academic records — all on one platform.</p><br>
                            <a href="school.php">View Details <i class="fas fa-paper-plane"></i></a>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </section>
    </main>

    <?php include "footer.php"?>
</body>
</html>
