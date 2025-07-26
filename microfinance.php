<?php  
    $title = "DorthPro Loan & Microfinance Software";
    $description = "Streamline your lending operations with DorthPro Microfinance Software. Automate loan applications, manage repayments, calculate interest, and generate financial reports — all in one place.";
    include "controller/connections.php";
    include "admin/classes/dbh.php";
    include "admin/classes/select.php";
    include ('product_head.php');
?>
<body>
    <style>
        #aboutBanner {
            height: 90vh;
        }

        .taglines a {
            padding: 12px;
            border-radius: 15px;
        }

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

    <!-- Banner Section -->
    <div id="slider">
        <div class="slides">
            <div class="slide">
                <div class="banner_img">
                    <img src="images/loan_banner.jpg" alt="Loan and Microfinance software banner">
                </div>
                <div class="taglines">
                    <div class="taglines_note">
                        <h1>DorthPro Loan & Microfinance Software</h1>
                        <p>Powerful lending automation for microfinance institutions, digital lenders, cooperatives, and credit unions.</p>
                        <div class="btns">
                            <a href="https://wa.me/2347068897068?text=Hi, I'm interested in DorthPro Loan & Microfinance software" target="_blank">Get Started <i class="fab fa-whatsapp"></i></a>
                            <a href="request_demo.php">Request Demo <i class="fas fa-play-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main>
        <!-- Feature Overview -->
        <section id="features">
            <div class="features">
                <h3>Smart Loan Management</h3>
                <h4>Everything You Need to Lend Responsibly</h4>
                <p>DorthPro gives microfinance institutions the tools to streamline loan applications, disbursements, repayments, and performance tracking. Stay compliant, reduce risk, and serve clients better.</p>
                <hr>
                <div class="feats">
                    <div class="feat">
                        <i class="fas fa-file-signature"></i>
                        <div class="feat_details">
                            <h3>Loan Application & Approval</h3>
                            <p>Customize loan forms, eligibility rules, and automate the approval workflow.</p>
                        </div>
                    </div>
                    <div class="feat">
                        <i class="fas fa-wallet"></i>
                        <div class="feat_details">
                            <h3>Repayment Tracking</h3>
                            <p>Monitor repayments, generate schedules, and handle partial or missed payments with ease.</p>
                        </div>
                    </div>
                    <div class="feat">
                        <i class="fas fa-percentage"></i>
                        <div class="feat_details">
                            <h3>Interest & Penalty Automation</h3>
                            <p>Auto-calculate interest, penalties, and due amounts with full transparency.</p>
                        </div>
                    </div>
                    <div class="feat">
                        <i class="fas fa-chart-pie"></i>
                        <div class="feat_details">
                            <h3>Real-Time Financial Reports</h3>
                            <p>Track performance with loan aging, portfolio at risk, income, and disbursement reports.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="feature_img">
                <img src="images/loan_desktop.png" alt="Loan Dashboard" loading="lazy">
                <img src="images/loan_laptop.png" alt="Loan App Mobile View" loading="lazy">
            </div>
        </section>

        <!-- Why Choose -->
        <section id="amenities">
            <h3>Why Choose DorthPro Loan System?</h3>
            <hr>
            <h2>Built for Transparency, Growth & Compliance</h2>
            <div class="amenities">
                <div class="offer">
                    <i class="fas fa-users"></i>
                    <div class="offer_info">
                        <h4>Borrower Management</h4>
                        <p>Maintain a full borrower profile — contact info, credit history, guarantors, and more.</p>
                    </div>
                </div>
                <div class="offer">
                    <i class="fas fa-calculator"></i>
                    <div class="offer_info">
                        <h4>Loan Calculator</h4>
                        <p>Auto-generate repayment plans with flexible terms, interest types, and schedules.</p>
                    </div>
                </div>
                <div class="offer">
                    <i class="fas fa-bell"></i>
                    <div class="offer_info">
                        <h4>Payment Reminders</h4>
                        <p>Send SMS/email reminders before repayment due dates to reduce defaults.</p>
                    </div>
                </div>
                <div class="offer">
                    <i class="fas fa-lock"></i>
                    <div class="offer_info">
                        <h4>Role-Based Access</h4>
                        <p>Staff access is based on their role — loans, collections, finance, admin, etc.</p>
                    </div>
                </div>
                <div class="offer">
                    <i class="fas fa-cloud-upload-alt"></i>
                    <div class="offer_info">
                        <h4>Cloud-Based & Secure</h4>
                        <p>Access your loan system from any device. Encrypted and protected 24/7.</p>
                    </div>
                </div>
                <div class="offer">
                    <i class="fas fa-balance-scale"></i>
                    <div class="offer_info">
                        <h4>Regulatory Reporting</h4>
                        <p>Export NDIC/NIRSAL-compliant reports with just a click.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Demo -->
        <section id="product_video" style="display:none">
            <h3>See DorthPro in Action</h3>
            <p>This quick demo shows how DorthPro helps microfinance teams automate loans, repayments, and compliance reporting — all from one dashboard.</p>
            <div class="video_wrapper">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/XUe_LzUQy_Y" title="Loan software demo" frameborder="0" allowfullscreen></iframe>
            </div>
        </section>

        <!-- Testimonials -->
        <section id="testimonies" style="display:none">
            <h3>What Our Clients Say</h3>
            <hr>
            <div class="box">
                <div class="testimonies">
                    <div class="testimony">
                        <div class="test_note">
                            <p>"DorthPro has transformed how we disburse and track loans. We’ve cut paperwork by 90% and now manage our entire portfolio digitally."</p>
                            <div class="testifier">
                                <img src="images/client1.png" alt="Client">
                                <span>- Mr. Emmanuel<br>Manager, Hope Cooperative Society</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimony">
                        <div class="test_note">
                            <p>"The automated interest and reminder features help reduce defaults. It’s exactly what we needed."</p>
                            <div class="testifier">
                                <img src="images/client2.png" alt="Client">
                                <span>- Mrs. Grace<br>MD, Capital Field Microfinance</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ -->
        <section id="faq">
            <h3>Frequently Asked Questions</h3>
            <div class="faq_items">
                <div class="faq_item">
                    <h4>Can this handle multiple branches?</h4>
                    <p>Yes, you can manage multiple branches under one system with centralized oversight.</p>
                </div>
                <div class="faq_item">
                    <h4>Is it secure and compliant?</h4>
                    <p>Absolutely. DorthPro uses encryption, audit trails, and supports regulatory reporting standards.</p>
                </div>
                <div class="faq_item">
                    <h4>Do you offer onboarding?</h4>
                    <p>Yes, we assist with setup, staff training, and provide ongoing support.</p>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section id="quote_request">
            <h3>Ready to Simplify Your Lending?</h3>
            <p>Join dozens of lenders already using DorthPro to manage loans more efficiently and securely.</p><br>
            <div class="block">
                <a href="request_demo.php" style="background:var(--secondaryColor);font-size:1.1rem">Request a Free Demo <i class="fas fa-play-circle"></i></a>
                <a href="https://wa.me/2347068897068?text=Hi, I'm interested in DorthPro Loan and Microfinance software" target="_blank" style="background:var(--tertiaryColor);font-size:1.1rem">Get Started <i class="fab fa-whatsapp"></i></a>
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
                        <img src="images/lab_icon.png" alt="icon">
                        <figcaption>
                            <h3>DorthPro Laboratory System</h3>
                            <p>Manage all diagnostic center operations — test requests, sample tracking, results reporting, doctor access, billing, and patient records — all in one system.</p><br>
                            <a href="laboratory.php">View Details <i class="fas fa-paper-plane"></i></a>
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
        <?php include "footer.php"?>
    </main>
</body>
</html>
