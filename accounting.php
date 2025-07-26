<?php  
    $title = "DorthPro Accounting & Asset Management Software";
    $description = "Simplify your financial processes — manage income, expenses, assets, and generate real-time reports with DorthPro Accounting.";
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

    <div id="slider">
        <div class="slides">
            <div class="slide">
                <div class="banner_img">
                    <img src="images/accounting.webp" alt="Accounting software banner">
                </div>
                <div class="taglines">
                    <div class="taglines_note">
                        <h1>DorthPro Accounting & Asset Management</h1>
                        <p>Track your finances, assets, income and expenses with ease — accurate reports, automated processes, and smarter decisions for your business.</p>
                        <div class="btns">
                            <a href="https://wa.me/2347068897068?text=Hi, I'm interested in DorthPro Accounting software" target="_blank">Get Started <i class="fab fa-whatsapp"></i></a>
                            <a href="request_demo.php">Request Demo <i class="fas fa-play-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main>
        <!-- Overview -->
        <section id="features">
            <div class="features">
                <h3>Smart Business Accounting</h3>
                <h4>Everything You Need to Stay in Control</h4>
                <p>DorthPro Accounting simplifies daily finance tasks. From invoicing and asset management to real-time reporting, it gives you clear visibility into your financial health — anytime, anywhere.</p>
                <hr>
                <div class="feats">
                    <div class="feat">
                        <i class="fa-solid fa-file-invoice-dollar"></i>
                        <div class="feat_details">
                            <h3>Invoicing</h3>
                            <p>Create and send professional invoices, track payment status, and manage receivables.</p>
                        </div>
                    </div>
                    <div class="feat">
                        <i class="fa-solid fa-receipt"></i>
                        <div class="feat_details">
                            <h3>Expense Management</h3>
                            <p>Log and categorize business expenses easily for accurate reporting and budgeting.</p>
                        </div>
                    </div>
                    <div class="feat">
                        <i class="fa-solid fa-coins"></i>
                        <div class="feat_details">
                            <h3>Profit & Loss</h3>
                            <p>Generate real-time income statements to evaluate business performance.</p>
                        </div>
                    </div>
                    <div class="feat">
                        <i class="fa-solid fa-cubes"></i>
                        <div class="feat_details">
                            <h3>Asset Tracking</h3>
                            <p>Manage company assets, depreciation, and book values across their lifecycle.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="feature_img">
                <img src="images/dorthpro_accounting_desktop.png" alt="DorthPro Accounting Dashboard" loading="lazy">
                <img src="images/dorthpro_accounting_laptop.png" alt="DorthPro on Mobile" loading="lazy">
            </div>
        </section>

        <!-- Why Choose -->
        <section id="amenities">
            <h3>Why Choose DorthPro Accounting?</h3>
            <hr>
            <h2>Built for Clarity, Control & Compliance</h2>
            <div class="amenities">
                <div class="offer">
                    <i class="fas fa-cash-register"></i>
                    <div class="offer_info">
                        <h4>Multi-Channel Transactions</h4>
                        <p>Handle multiple income streams — from sales to rentals, services, and more.</p>
                    </div>
                </div>
                <div class="offer">
                    <i class="fas fa-chart-line"></i>
                    <div class="offer_info">
                        <h4>Visual Reports & Graphs</h4>
                        <p>Generate financial reports like balance sheet, P&L, cash flow, and more.</p>
                    </div>
                </div>
                <div class="offer">
                    <i class="fas fa-building"></i>
                    <div class="offer_info">
                        <h4>Asset Depreciation</h4>
                        <p>Track asset lifecycle and calculate depreciation automatically.</p>
                    </div>
                </div>
                <div class="offer">
                    <i class="fas fa-wallet"></i>
                    <div class="offer_info">
                        <h4>Bank & Wallet Reconciliation</h4>
                        <p>Reconcile cash accounts with real transactions — reduce errors and mismatches.</p>
                    </div>
                </div>
                <div class="offer">
                    <i class="fas fa-user-shield"></i>
                    <div class="offer_info">
                        <h4>Access Controls</h4>
                        <p>Assign roles and permissions to staff based on responsibility and access level.</p>
                    </div>
                </div>
                <div class="offer">
                    <i class="fas fa-cloud"></i>
                    <div class="offer_info">
                        <h4>Cloud-Based System</h4>
                        <p>Access your books securely — anytime, from any device.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Product Demo Video -->
        <section id="product_video">
            <h3>See DorthPro Accounting in Action</h3>
            <p>Watch a quick demo on how DorthPro helps you track finances, manage assets, and stay audit-ready at all times.</p>
            <div class="video_wrapper">
               <iframe width="560" height="315" src="https://www.youtube.com/embed/shkmoBNXxJw?si=C1TK_svgrtfnea7t" title="Accounting software demo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </section>

        <!-- Testimonials -->
        <section id="testimonies">
            <h3>What Our Users Say</h3>
            <hr>
            <div class="box">
                <div class="testimonies">
                    <div class="testimony">
                        <div class="test_note">
                            <p>"DorthPro Accounting makes our financials easy to understand. Reports are accurate, and asset tracking is seamless!"</p>
                            <div class="testifier">
                                <img src="images/icon.png" alt="Client">
                                <span>- Mr. Godwin<br>Accountant, Tonnac Recycling Technologies</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimony">
                        <div class="test_note">
                            <p>"DorthPro has completely simplified our invoicing process. We now generate professional invoices in seconds and track payments effortlessly."</p>
                            <div class="testifier">
                                <img src="images/jevi.png" alt="Client">
                                <span>- Mrs. Helen<br>Accountant, Jevi Austin Int.</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimony">
                        <div class="test_note">
                            <p>"DorthPro Accounting makes our financials easy to understand. Reports are accurate, and asset tracking is seamless!"</p>
                            <div class="testifier">
                                <img src="images/icon.png" alt="Client">
                                <span>- Mr. Godwin<br>Accountant, Tonnac Recycling Technologies</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimony">
                        <div class="test_note">
                            <p>"DorthPro has completely simplified our invoicing process. We now generate professional invoices in seconds and track payments effortlessly."</p>
                            <div class="testifier">
                                <img src="images/jevi.png" alt="Client">
                                <span>- Mrs. Helen<br>Accountant, Jevi Austin Int.</span>
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
                    <h4>Can this work for small businesses?</h4>
                    <p>Yes, it's perfect for SMEs and also scalable for larger enterprises.</p>
                </div>
                <div class="faq_item">
                    <h4>Does it include asset depreciation?</h4>
                    <p>Yes, assets can be categorized and depreciation is auto-calculated.</p>
                </div>
                <div class="faq_item">
                    <h4>Can I download financial reports?</h4>
                    <p>Yes, reports can be exported as PDF, Excel, or CSV formats.</p>
                </div>
                <div class="faq_item">
                    <h4>Will I get training?</h4>
                    <p>Yes. We provide setup guidance, role-specific training, and ongoing support.</p>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section id="quote_request">
            <h3>Ready to Take Control of Your Finances?</h3>
            <p>Get started with DorthPro Accounting today — and simplify how you manage money, assets, and reports.</p><br>
            <div class="block">
                <a href="request_demo.php" style="background:var(--secondaryColor);font-size:1.1rem">Request a Free Demo <i class="fas fa-play-circle"></i></a>
                <a href="https://wa.me/2347068897068?text=Hi, I'm interested in DorthPro Accounting Software" target="_blank" style="background:var(--tertiaryColor);font-size:1.1rem">Get Started <i class="fab fa-whatsapp"></i></a>
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
