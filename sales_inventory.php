<?php 
    $title = "Dorthpro Point of Sales & Inventory management";
    include "controller/connections.php";
    include "admin/classes/dbh.php";
    include "admin/classes/select.php";
    include ('head.php');
?>
<body>
    <style>
        /* General Landing Page Fixes */
        #aboutBanner {
            height: 90vh;
        }

        .taglines a {
            background: var(--secondaryColor);
            color: #fff;
            padding: 12px 24px;
            display: inline-block;
            border-radius: 5px;
            font-weight: bold;
            transition: 0.3s ease;
        }

        .taglines a:hover {
            background: var(--primaryColor);
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
                    <img src="images/wallpaper3.webp" alt="business software banner">
                </div>
                <div class="taglines">
                    <div class="taglines_note">
                        <h1>DorthPro Sales & Inventory System</h1>
                        <p>Run your retail or wholesale business smarter with real-time stock, sales, and expense tracking.</p>
                        <div class="btns">
                            <a href="request_demo.php">Request Live Demo <i class="fas fa-play-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main>

        <!-- What Ydorthpro is -->
        <section id="features">
            <div class="features">
                <h3>DorthPro POS: The Smarter Way to Run Your Business</h3>
                <h4>All-in-One Point of Sale & Inventory Solution</h4>
                <p>DorthPro is a powerful cloud-based sales and inventory software built for modern retail and wholesale businesses. Whether you manage a pharmacy, supermarket, fashion store, or distribution outlet — DorthPro helps you sell faster, track stock in real-time, and stay on top of every transaction.</p>
                <p>Over 100 businesses rely on DorthPro daily, processing more than 50,000 transactions every month with ease, accuracy, and peace of mind.</p>
                <hr>
                <div class="feats">
                    <div class="feat">
                        <i class="fa-solid fa-bolt"></i>
                        <div class="feat_details">
                            <h3>Fast & Seamless Checkout</h3>
                            <p>Speed up sales and reduce queues with an interface optimized for efficiency.</p>
                        </div>
                    </div>

                    <div class="feat">
                        <i class="fa-solid fa-cloud"></i>
                        <div class="feat_details">
                            <h3>100% Cloud-Based</h3>
                            <p>Access your business from anywhere on any device. No servers, no maintenance headaches.</p>
                        </div>
                    </div>

                    <div class="feat">
                        <i class="fa-solid fa-laptop"></i>
                        <div class="feat_details">
                            <h3>User-Friendly & Intuitive</h3>
                            <p>Anyone can use it — no technical training needed. Designed for simplicity and speed.</p>
                        </div>
                    </div>

                    <div class="feat">
                        <i class="fa-solid fa-chart-line"></i>
                        <div class="feat_details">
                            <h3>Insightful Reports</h3>
                            <p>Track performance, profits, and stock movement with intelligent real-time reports.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="feature_img">
                <img src="images/dorthpro_desktop_view.png" alt="Dorthpro Desktop Interface" loading="lazy">
                <img src="images/dorthpro_laptop_mobile.png" alt="Dorthpro laptop-mobile Interface" loading="lazy">
            </div>
        </section>

        <!-- Why Choose DorthPro -->
        <section id="amenities">
            <h3>Why Choose DorthPro POS?</h3>
            <hr>
            <h2>Powerful Features to Grow Your Business</h2>
            <div class="amenities">
                <div class="offer">
                    <i class="fas fa-store"></i>
                    <div class="offer_info">
                        <h4>Multi-Store Management</h4>
                        <p>Manage inventory, staff, and reports across multiple locations — all from a single dashboard.</p>
                    </div>
                </div>

                <div class="offer">
                    <i class="fas fa-users-cog"></i>
                    <div class="offer_info">
                        <h4>Role-Based Access</h4>
                        <p>Control what each staff can see or do. Create custom permissions for users, cashiers, or managers.</p>
                    </div>
                </div>

                <div class="offer">
                    <i class="fas fa-chart-line"></i>
                    <div class="offer_info">
                        <h4>Real-Time Reports</h4>
                        <p>Know what’s selling, what’s left in stock, and your profits — instantly, from anywhere.</p>
                    </div>
                </div>

                <div class="offer">
                    <i class="fas fa-barcode"></i>
                    <div class="offer_info">
                        <h4>Barcode & Receipt Printing</h4>
                        <p>Supports barcode scanning, price tag printing, and custom receipt formats for any industry.</p>
                    </div>
                </div>

                <div class="offer">
                    <i class="fas fa-warehouse"></i>
                    <div class="offer_info">
                        <h4>Stock Management</h4>
                        <p>Track incoming and outgoing products, set reorder alerts, soon to expire items, and monitor inventory across stores and warehouses.</p>
                    </div>
                </div>

                <div class="offer">
                    <i class="fas fa-coins"></i>
                    <div class="offer_info">
                        <h4>Sales, Expenses & Profit</h4>
                        <p>Record income and expenses, view profit margins daily, and track financial health in one place.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Demo Video -->
        <section id="product_video">
            <h3>Watch DorthPro POS in Action</h3>
            <p>This short demo shows how DorthPro helps you manage stock, sales, reports, and more — all from your browser.</p>
            <div class="video_wrapper">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/oidp8euDROc?si=LHx_LRuSGVeNxqb9" title="Dorthpro POS Demo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                            <p>"DorthPro completely changed the way we manage inventory across our branches. Transferring stock between locations is now seamless, and the platform is both reliable and incredibly easy to use."</p>
                            <div class="testifier">
                                <img src="images/vinta_logo.jpg" alt="testifier">
                                <span>- CEO, Vinta Supermarket</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimony">
                        <div class="test_note">
                            <p>"I can now track sales and profits, drug expirations, as well as manage patient consultations in real time even while traveling. Highly recommend."</p>
                            <div class="testifier">
                                <img src="images/elgra.jpg" alt="testifier">
                                <span>- Pharm Daniel, Elgra Pharmacy</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimony">
                        <div class="test_note">
                            <p>"Using DorthPro helped us reduce stock losses and manage our Supermarket sales better. It’s perfect for growing businesses like ours."</p>
                            <div class="testifier">
                                <img src="images/ag.png" alt="testifier">
                                <span>- Mrs. Winifred, AG Market Place</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimony">
                        <div class="test_note">
                            <p>"We manage multiple stores with ease using DorthPro. The multi-user and reporting features are top-notch and simplified our daily operations."</p>
                            <div class="testifier">
                                <img src="images/icon.png" alt="testifier">
                                <span>- Mr. John, J & B Global</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <!-- Clients -->
        <section id="partners">
            <h3>Some of Our Clients</h3>
            <div class="partners">
                <figure>
                    <img src="images/medcafe.jpg" alt="Client" loading="lazy">
                    <figcaption>Medcafe Pharmacy, Abuja</figcaption>
                </figure>
                <figure>
                    <img src="images/icon.png" alt="Client" loading="lazy">
                    <figcaption>Cure Corner Pharmacy</figcaption>
                </figure>
                <figure>
                    <img src="images/elgra.jpg" alt="Client" loading="lazy">
                    <figcaption>Elgra Pharmacy</figcaption>
                </figure>
                <figure>
                    <img src="images/vs_logo.png" alt="Client" loading="lazy">
                    <figcaption>VS Supermarket</figcaption>
                </figure>
                <figure>
                    <img src="images/icon.png" alt="Client" loading="lazy">
                    <figcaption>Tetfund Urology Centre, UBTH</figcaption>
                </figure>
                <figure>
                    <img src="images/icon.png" alt="Client" loading="lazy">
                    <figcaption>J & B Care Global</figcaption>
                </figure>
                <figure>
                    <img src="images/roteech.webp" alt="Client" loading="lazy">
                    <figcaption>Rotech Supermarket</figcaption>
                </figure>
                <figure>
                    <img src="images/vinta_logo.jpg" alt="Client" loading="lazy">
                    <figcaption>Vinta Supermarket</figcaption>
                </figure>
                <figure>
                    <img src="images/bclassic.png" alt="Client" loading="lazy">
                    <figcaption>B Classic Pharma</figcaption>
                </figure>
                <figure>
                    <img src="images/icon.png" alt="Client" loading="lazy">
                    <figcaption>Anny Plus Pharmacy</figcaption>
                </figure>
                <figure>
                    <img src="images/ag.png" alt="Client" loading="lazy">
                    <figcaption>AG Market Place</figcaption>
                </figure>
                <figure>
                    <img src="images/ethvan.jpg" alt="Client" loading="lazy">
                    <figcaption>Wamok Pharmacy, Abuja</figcaption>
                </figure>
                
                
            </div>
        </section>
        <section id="faq">
            <h3>Frequently Asked Questions</h3>
            <div class="faq_items">
                <div class="faq_item">
                    <h4>Is internet required to use DorthPro?</h4>
                    <p>Yes. DorthPro is a fully cloud-based system. You’ll need an internet connection to use it.</p>
                </div>
                <div class="faq_item">
                    <h4>Can I use it on my existing computer?</h4>
                    <p>Yes, it works on most browsers and doesn’t require new hardware installations.</p>
                </div>
                <div class="faq_item">
                    <h4>Do you offer training?</h4>
                    <p>Yes. We provide onboarding and training during setup to ensure your team starts smoothly.</p>
                </div>
            </div>
        </section>
        <!-- hero section -->
        <section id="quote_request">
            <h3>Ready to Take Control of Your Business?</h3>
            <p>Start using DorthPro POS today. See how easy it is to manage sales, stock, and profits.</p><br>
            <div class="block">
                <a href="request_demo.php" style="background:var(--secondaryColor);font-size:1.1rem">Request a Free Demo <i class="fas fa-play-circle"></i></a>
            </div>
        </section>
        <!-- other products -->
        <section id="core_service">
                <h3>Discover Other Dorthpro Products</h3>
                <div class="core_services">
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
