<?php 
    $title = "DorthPro Hotel & Lounge Management Software";
    $description = "All-in-one cloud hotel software for bookings, billing, restaurant orders, and guest management — simple, secure, and accessible anywhere.";
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
                    <img src="images/hotel.webp" alt="hotel software banner">
                </div>
                <div class="taglines">
                    <div class="taglines_note">
                        <h1>DorthPro Hotel & Lounge Manager</h1>
                        <p>Run your hotel, bar, and restaurant with ease — automate bookings, guest check-in/out, inventory, and billing.</p>
                        <div class="btns">
                            <a href="https://wa.me/2347068897068?text=Hi, I'm interested in DorthProSuite Hotel and Lounge management software" target="_blank">Get Started <i class="fab fa-whatsapp"></i></a>
                            <a href="request_demo.php">Request Demo <i class="fas fa-play-circle"></i></a>
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
                <h3>DorthPro Hotel: Your Complete Hotel Management Solution</h3>
                <h4>Manage Your Rooms, Guests, Restaurant & Lounge — All In One Platform</h4>
                <p>DorthPro Hotel is built to simplify day-to-day hotel operations. From guest check-in and reservations to bar and kitchen inventory tracking, billing, and staff monitoring — everything is fully integrated, cloud-based, and easy to use.</p>
                <p>Trusted by boutique hotels, lounges, and resorts for delivering seamless hospitality experiences.</p>
                <hr>
                <div class="feats">
                    <div class="feat">
                        <i class="fas fa-bed"></i>
                        <div class="feat_details">
                            <h3>Guest Check-In/Out</h3>
                            <p>Manage room assignments, durations, and track guest activity in real time.</p>
                        </div>
                    </div>

                    <div class="feat">
                        <i class="fas fa-utensils"></i>
                        <div class="feat_details">
                            <h3>Bar & Kitchen Orders</h3>
                            <p>Link kitchen/bar sales to rooms or direct walk-ins. Reduce delays and eliminate manual mix-ups.</p>
                        </div>
                    </div>

                    <div class="feat">
                        <i class="fas fa-receipt"></i>
                        <div class="feat_details">
                            <h3>Automated Billing</h3>
                            <p>Consolidate all charges per guest (lodging, food, extras) and generate receipts with one click.</p>
                        </div>
                    </div>

                    <div class="feat">
                        <i class="fas fa-chart-pie"></i>
                        <div class="feat_details">
                            <h3>Live Dashboard & Reports</h3>
                            <p>See today’s check-ins, revenue, bookings, and inventory from one easy dashboard.</p>
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
            <h3 style="color:#222">Why Choose DorthPro Hotel?</h3>
            <hr style="color:#222; background:#222">
            <!-- <h2>Powerful Features to Grow Your Business</h2> -->
            <div class="amenities">
                <div class="offer">
                    <i class="fas fa-hotel"></i>
                    <div class="offer_info">
                        <h4>Room Management</h4>
                        <p>Track room availability, cleaning status, bookings, and guest history in one place.</p>
                    </div>
                </div>

                <div class="offer">
                    <i class="fas fa-concierge-bell"></i>
                    <div class="offer_info">
                        <h4>Restaurant & Bar Integration</h4>
                        <p>Connect kitchen, POS, and rooms — charge guests or customers instantly and accurately.</p>
                    </div>
                </div>

                <div class="offer">
                    <i class="fas fa-user-lock"></i>
                    <div class="offer_info">
                        <h4>Staff Roles & Security</h4>
                        <p>Assign access to only what staff need — reception, kitchen, management, etc.</p>
                    </div>
                </div>

                <div class="offer">
                    <i class="fas fa-coins"></i>
                    <div class="offer_info">
                        <h4>Payments & Profit Tracking</h4>
                        <p>Monitor daily revenue, outstanding balances, and full financial breakdowns.</p>
                    </div>
                </div>

                <div class="offer">
                    <i class="fas fa-calendar-alt"></i>
                    <div class="offer_info">
                        <h4>Advance Booking & Walk-ins</h4>
                        <p>Book in advance, reserve rooms, or admit instant guests — all streamlined into your system.</p>
                    </div>
                </div>

                <div class="offer">
                    <i class="fas fa-file-invoice"></i>
                    <div class="offer_info">
                        <h4>Receipts & Invoicing</h4>
                        <p>Print branded receipts and invoices for lodging, meals, and bar purchases instantly.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Demo Video -->
        <section id="product_video">
            <h3>Watch How Dorthpro Hotel Works</h3>
            <!-- <p>This short demo shows how DorthPro helps you manage stock, sales, reports, and more — all from your browser.</p> -->
            <div class="video_wrapper">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/wonWP9ni9fM?si=AYS2X9tNmbi9X_XQ" title="Dorthpro Hotel Demo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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

        
        <!-- Clients -->
        <section id="partners">
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
            <h3>Ready to Simplify Your Hotel and Lounge Operations</h3>
            <p>Start using <strong>DorthPro Hotel</strong> today and experience seamless hospitality management — from bookings to bar, restaurant, and beyond.</p><br>
            <div class="block">
                <a href="request_demo.php" style="background:var(--secondaryColor);font-size:1.1rem">Request a Free Demo <i class="fas fa-play-circle"></i></a>
                <a href="https://wa.me/2347068897068?text=Hi, I'm interested in DorthProSuite Hotel and Lounge management software" target="_blank" style="font-size:1.1rem">Get Started <i class="fab fa-whatsapp"></i></a>
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
