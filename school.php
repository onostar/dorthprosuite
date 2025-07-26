<?php  
    $title = "DorthPro School Management Software";
    $description = "Streamline school operations with DorthPro School Manager. Manage students, grades, fees, attendance, and communication from one powerful, cloud-based platform.";
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

    <!-- Banner -->
    <div id="slider">
        <div class="slides">
            <div class="slide">
                <div class="banner_img">
                    <img src="images/school-management.png" alt="DorthPro School Software Banner">
                </div>
                <div class="taglines">
                    <div class="taglines_note">
                        <h1>DorthPro School Management Software</h1>
                        <p>Smarter school operations — admissions, fees, grading, and student records in one platform.</p>
                        <div class="btns">
                            <a href="https://wa.me/2347068897068?text=Hi, I'm interested in DorthPro School Software" target="_blank">Get Started <i class="fab fa-whatsapp"></i></a>
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
                <h3>Smarter School Management</h3>
                <h4>Everything You Need to Run a Modern School</h4>
                <p>DorthPro gives schools the tools to manage daily operations digitally — saving time, improving accuracy, and simplifying communication across departments.</p>
                <hr>
                <div class="feats">
                    <div class="feat">
                        <i class="fas fa-user-graduate"></i>
                        <div class="feat_details">
                            <h3>Student Records</h3>
                            <p>Manage student bio-data, academic history, and guardians in one place.</p>
                        </div>
                    </div>
                    <div class="feat">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <div class="feat_details">
                            <h3>Class & Subject Management</h3>
                            <p>Assign teachers, subjects, and timetables for each class seamlessly.</p>
                        </div>
                    </div>
                    <div class="feat">
                        <i class="fas fa-coins"></i>
                        <div class="feat_details">
                            <h3>Fees Management</h3>
                            <p>Generate bills, track payments, and view fee balances by term or session.</p>
                        </div>
                    </div>
                    <div class="feat">
                        <i class="fas fa-chart-line"></i>
                        <div class="feat_details">
                            <h3>Academic Results</h3>
                            <p>Input scores and auto-generate report cards with custom grading systems.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="feature_img">
                <img src="images/school.png" alt="School Dashboard" loading="lazy">
            </div>
        </section>

        <!-- Why Choose -->
        <section id="amenities">
            <h3>Why Choose DorthPro School?</h3>
            <hr>
            <h2>All-in-One, Cloud-Based & Secure</h2>
            <div class="amenities">
                <div class="offer">
                    <i class="fas fa-calendar-check"></i>
                    <div class="offer_info">
                        <h4>Attendance Tracking</h4>
                        <p>Mark daily attendance for students and staff with real-time records.</p>
                    </div>
                </div>
                <div class="offer">
                    <i class="fas fa-comments"></i>
                    <div class="offer_info">
                        <h4>SMS/Email Notifications</h4>
                        <p>Communicate with parents on fees, results, or events instantly.</p>
                    </div>
                </div>
                <div class="offer">
                    <i class="fas fa-book-open"></i>
                    <div class="offer_info">
                        <h4>Admissions Automation</h4>
                        <p>Handle student registrations, approvals, and allocation easily.</p>
                    </div>
                </div>
                <div class="offer">
                    <i class="fas fa-chart-pie"></i>
                    <div class="offer_info">
                        <h4>Performance Analytics</h4>
                        <p>Review class, subject, and term-based analytics to guide teaching.</p>
                    </div>
                </div>
                <div class="offer">
                    <i class="fas fa-lock"></i>
                    <div class="offer_info">
                        <h4>Secure Role-Based Access</h4>
                        <p>Teachers, admins, and bursars access only what's relevant to their roles.</p>
                    </div>
                </div>
                <div class="offer">
                    <i class="fas fa-cloud"></i>
                    <div class="offer_info">
                        <h4>Cloud-Based & Scalable</h4>
                        <p>Access from any device. Ideal for primary, secondary, or group of schools.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ -->
        <section id="faq">
            <h3>Frequently Asked Questions</h3>
            <div class="faq_items">
                <div class="faq_item">
                    <h4>Can I use it for multiple campuses?</h4>
                    <p>Yes, DorthPro supports multi-campus structure with centralized control.</p>
                </div>
                <div class="faq_item">
                    <h4>Do parents get access?</h4>
                    <p>Yes. There’s a parent portal for tracking fees, results, and communication.</p>
                </div>
                <div class="faq_item">
                    <h4>Do you offer support and training?</h4>
                    <p>We provide onboarding, support, and documentation for school admins and teachers.</p>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section id="quote_request">
            <h3>Transform the Way You Manage Your School</h3>
            <p>Join leading schools already simplifying operations with DorthPro School Manager.</p><br>
            <div class="block">
                <a href="request_demo.php" style="background:var(--secondaryColor);font-size:1.1rem">Request a Free Demo <i class="fas fa-play-circle"></i></a>
                <a href="https://wa.me/2347068897068?text=Hi, I'm interested in DorthPro School Software" target="_blank" style="background:var(--tertiaryColor);font-size:1.1rem">Get Started <i class="fab fa-whatsapp"></i></a>
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
                        <img src="images/loan_icon.png" alt="icon">
                        <figcaption>
                            <h3>DorthPro Loan & Microfinance</h3>
                            <p>Loan management made simple — automate applications, approvals, disbursements, repayments, interest tracking, penalties, and reports. Built for microfinance and cooperatives.</p><br>
                            <a href="microfinance.php">View Details <i class="fas fa-paper-plane"></i></a>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </section>

        <?php include "footer.php"?>
    </main>
</body>
</html>
