<?php 
    $title = "DorthPro Hospital Management Software";
    $description = "Streamline your hospital operations — patient records, doctor consultations, pharmacy, billing, lab, and more in one powerful cloud-based system.";
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
                        <h1>DorthPro Hospital Management System</h1>
                        <p>Modern cloud-based solution to manage patients, appointments, consultations, billing, pharmacy, lab, and records — all in one secure system.</p>
                        <div class="btns">
                            <a href="https://wa.me/2347068897068?text=Hi, I'm interested in the DorthPro Hospital software" target="_blank">Get Started <i class="fab fa-whatsapp"></i></a>
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
                <h3>What You Get with DorthPro Health</h3>
                <h4>Streamlined Hospital Operations from Reception to Discharge</h4>
                <p>DorthPro Health is a powerful hospital management system designed for clinics, hospitals, and medical centers. It simplifies patient care, records, billing, and staff management — all from a single interface.</p>
                <p>Trusted by healthcare providers to manage thousands of patient records, lab results, pharmacy transactions, and more.</p>
                <hr>
                <div class="feats">
                    <div class="feat">
                        <i class="fa-solid fa-user-plus"></i>
                        <div class="feat_details">
                        <h3>Patient Registration</h3>
                        <p>Capture and manage complete patient details, history, and appointments seamlessly.</p>
                        </div>
                    </div>

                    <div class="feat">
                        <i class="fa-solid fa-file-medical-alt"></i>
                        <div class="feat_details">
                        <h3>Medical Records</h3>
                        <p>Maintain accurate and up-to-date electronic medical records with ease.</p>
                        </div>
                    </div>

                    <div class="feat">
                        <i class="fa-solid fa-flask"></i>
                        <div class="feat_details">
                        <h3>Lab & Diagnostics</h3>
                        <p>Request, process, and review lab tests and results — with auto updates to patient files.</p>
                        </div>
                    </div>

                    <div class="feat">
                        <i class="fa-solid fa-pills"></i>
                        <div class="feat_details">
                        <h3>Pharmacy Management</h3>
                        <p>Track prescriptions, dispense drugs, and manage pharmacy inventory with alerts.</p>
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
            <h3>Why Choose DorthPro Health?</h3>
            <hr>
            <h2>Comprehensive Features for Smarter Healthcare</h2>
            <div class="amenities">
                <div class="offer">
                <i class="fas fa-bed-pulse"></i>
                <div class="offer_info">
                    <h4>Inpatient & Outpatient Care</h4>
                    <p>Manage admissions, discharges, consultations, and patient flow without confusion.</p>
                </div>
                </div>

                <div class="offer">
                <i class="fas fa-user-nurse"></i>
                <div class="offer_info">
                    <h4>Nursing Module</h4>
                    <p>Allow nurses to track vitals, monitor patients, and update treatment progress efficiently.</p>
                </div>
                </div>

                <div class="offer">
                <i class="fas fa-money-bill-wave"></i>
                <div class="offer_info">
                    <h4>Billing & Payments</h4>
                    <p>Handle consultations, lab, drugs, and service charges with accurate billing and receipts.</p>
                </div>
                </div>

                <div class="offer">
                <i class="fas fa-stethoscope"></i>
                <div class="offer_info">
                    <h4>Doctor Dashboard</h4>
                    <p>Empower doctors with quick access to patient histories, diagnoses, prescriptions, and results.</p>
                </div>
                </div>

                <div class="offer">
                <i class="fas fa-chart-pie"></i>
                <div class="offer_info">
                    <h4>Reports & Analytics</h4>
                    <p>Track performance, revenue, patient trends, and departmental activities in real time.</p>
                </div>
                </div>

                <div class="offer">
                <i class="fas fa-cloud"></i>
                <div class="offer_info">
                    <h4>Cloud Access</h4>
                    <p>Work securely from anywhere — manage your hospital across branches with internet access.</p>
                </div>
                </div>
            </div>
            </section>
        <!-- Product Demo Video -->
        <section id="product_video" style="display:none">
            <h3>Watch How Dorthpro Hotel Works</h3>
            <!-- <p>This short demo shows how DorthPro helps you manage stock, sales, reports, and more — all from your browser.</p> -->
            <div class="video_wrapper">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/wonWP9ni9fM?si=AYS2X9tNmbi9X_XQ" title="Dorthpro Hotel Demo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </section>
        <!-- testimonials -->
        <!-- <section id="testimonies">
            <h3>What Our Clients Say</h3>
            <hr>
            <div class="box">
                <div class="testimonies">
                    <div class="testimony">
                        <div class="test_note">
                            <p>"We used to struggle with tracking room occupancy and bar sales separately. Now with DorthPro Hotel, everything is synced in real time. Billing is fast and guests are happier"</p>
                            <div class="testifier">
                                <img src="images/dexdee_logo.jpg" alt="testifier">
                                <span>- Mr. Desmond, Dexdee Resort</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimony">
                        <div class="test_note">
                            <p>"Running our bar and restaurant used to be stressful—orders got mixed up, and tracking stock was a mess. Since we switched to DorthPro Hotel, everything is organized. From table orders to stock control and daily reports, the system handles it smoothly. It’s like having an extra manager on duty!"</p>
                            <div class="testifier">
                                <img src="images/asgard.jpg" alt="testifier">
                                <span>- Accountant, Asgard Lounge</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimony">
                        <div class="test_note">
                            <p>"Dqube Eatery runs smoother than ever since we started using DorthPro. Orders go straight from the counter to the kitchen, no mix-ups, no delays. Stock tracking, staff control, and daily sales are now super easy to manage. It's the best decision we've made for our business."</p>
                            <div class="testifier">
                                <img src="images/icon.png" alt="testifier">
                                <span>- Mrs. Edith, D-qube Eatery</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimony">
                        <div class="test_note">
                            <p>"Running our bar and restaurant used to be stressful—orders got mixed up, and tracking stock was a mess. Since we switched to DorthPro Hotel, everything is organized. From table orders to stock control and daily reports, the system handles it smoothly. It’s like having an extra manager on duty!"</p>
                            <div class="testifier">
                                <img src="images/asgard.jpg" alt="testifier">
                                <span>- Accountant, Asgard Lounge</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                -->
        
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
        <section id="faq">
            <h3>Frequently Asked Questions</h3>
            <div class="faq_items">
                <div class="faq_item">
                    <h4>Can I use this in a small clinic?</h4>
                    <p>Yes, DorthPro Health works for both small clinics and large hospitals with multi-departments.</p>
                </div>
                <div class="faq_item">
                    <h4>Is it accessible remotely?</h4>
                    <p>Yes. It is a cloud-based system — doctors and admins can log in from anywhere securely.</p>
    
                </div>
                <div class="faq_item">
                    <h4>Do you offer training?</h4>
                    <p>Yes, we provide onboarding, setup assistance, and training for all staff roles.</p>
                </div>
            </div>
        </section>
        <!-- hero section -->
        <section id="quote_request">
            <h3>Ready to Transform Your Hospital?</h3>
            <p>Request a free demo today or chat with our support team to get started.</p><br>
            <div class="block">
                <a href="request_demo.php" style="background:var(--secondaryColor);font-size:1.1rem">Request a Free Demo <i class="fas fa-play-circle"></i></a>
                <a href="https://wa.me/2347068897068?text=Hi, I'm interested in DorthPro Hospital management system" target="_blank" style="font-size:1.1rem">Get Started <i class="fab fa-whatsapp"></i></a>
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
