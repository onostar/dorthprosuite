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
            height: 80vh;
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

        <!-- What You Get -->
        <section id="features">
            <div class="features">
                <h3>What You Get with DorthPro</h3>
                <h4>Reliable POS built for retail, wholesale, and modern businesses</h4>
                <p>Whether you're running a pharmacy, supermarket, or distribution company, DorthPro helps you sell faster, track stock accurately, and make better decisions with real-time business data.</p>
                <p>Trusted by over 100 businesses with more than 50,000 transactions processed monthly.</p>
                <hr>
                <div class="feats">
                    <div class="feat">
                        <i class="fa-solid fa-bolt"></i>
                        <div class="feat_details">
                            <h3>Fast Transactions</h3>
                            <p>Process sales quickly and reduce customer wait time with an optimized POS interface.</p>
                        </div>
                    </div>

                    <div class="feat">
                        <i class="fa-solid fa-cloud"></i>
                        <div class="feat_details">
                            <h3>100% Cloud-Based</h3>
                            <p>Access your business data securely from any device, anywhere, anytime — all you need is internet.</p>
                        </div>
                    </div>

                    <div class="feat">
                        <i class="fa-solid fa-laptop"></i>
                        <div class="feat_details">
                            <h3>User-Friendly Interface</h3>
                            <p>Intuitive layout designed for speed and ease — perfect even for new staff with minimal training.</p>
                        </div>
                    </div>

                    <div class="feat">
                        <i class="fa-solid fa-chart-line"></i>
                        <div class="feat_details">
                            <h3>Smart Business Reports</h3>
                            <p>Track your sales, stock, profits, and staff performance in real time with intelligent, easy-to-read reports.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="feature_img">
                <img src="images/wallpaper3.webp" alt="Our services" loading="lazy">
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
        <!-- testimonials -->
        <section id="testimonies">
            <h3>What Our Clients Say</h3>
            <hr>
            <div class="box">
                <div class="testimonies">
                    <div class="testimony">
                        <div class="test_img">
                            <img src="images/vinta_logo.jpg" alt="Vinta Supermarket">
                        </div>
                        <div class="test_note">
                            <p>"DorthPro transformed how we manage inventory across our branches. It's reliable and easy to use!"</p>
                            <div class="testifier">
                                <img src="images/vinta_logo.jpg" alt="testifier">
                                <span>- CEO, Vinta Supermarket</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimony">
                        <div class="test_img">
                            <img src="images/elgra.jpg" alt="Elgra Pharmacy">
                        </div>
                        <div class="test_note">
                            <p>"I can now track sales and profits, as well as manage patient consultations in real time even while traveling. Highly recommend."</p>
                            <div class="testifier">
                                <img src="images/elgra.jpg" alt="testifier">
                                <span>- Pharm Daniel, Elgra Pharmacy</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimony">
                        <div class="test_img">
                            <img src="images/brothers_pharmacy.jpg" alt="Brothers Pharmacy">
                        </div>
                        <div class="test_note">
                            <p>"Using DorthPro helped us reduce stock losses and manage our Supermarket sales better. It’s perfect for growing businesses like ours."</p>
                            <div class="testifier">
                                <img src="images/ag.png" alt="testifier">
                                <span>- Mrs. Winifred, AG Market Place</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimony">
                        <div class="test_img">
                            <img src="images/mico.jpg" alt="Mico Stores">
                        </div>
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
                    <img src="images/medcafe.jpg" alt="partners">
                    <figcaption>Medcafe Pharmacy, Abuja</figcaption>
                </figure>
                <figure>
                    <img src="images/icon1.png" alt="partners">
                    <figcaption>Cure Corner Pharmacy</figcaption>
                </figure>
                <figure>
                    <img src="images/vs_logo.png" alt="partners" loading="lazy">
                    <figcaption>VS Supermarket</figcaption>
                </figure>
                <figure>
                    <img src="images/icon1.png" alt="partners" loading="lazy">
                    <figcaption>Tetfund Urology Centre, UBTH</figcaption>
                </figure>
                <figure>
                    <img src="images/icon1.png" alt="partners">
                    <figcaption>J & B Care Global</figcaption>
                </figure>
                <figure>
                    <img src="images/roteech.webp" alt="partners">
                    <figcaption>Rotech</figcaption>
                </figure>
                <figure>
                    <img src="images/vinta_logo.jpg" alt="partners" loading="lazy">
                    <figcaption>Vinta Supermarket</figcaption>
                </figure>
                <figure>
                    <img src="images/ag.png" alt="partners">
                    <figcaption>AG Market Place</figcaption>
                </figure>
                <figure>
                    <img src="images/elgra.jpg" alt="partners">
                    <figcaption>Elgra Pharmacy</figcaption>
                </figure>
                <figure>
                    <img src="images/bclassic.png" alt="partners">
                    <figcaption>B Classic Pharma</figcaption>
                </figure>
            </div>
        </section>
       
        <section id="quote_request">
            <h3>Ready to Take Control of Your Business?</h3>
            <p>Start using DorthPro POS today. See how easy it is to manage sales, stock, and profits.</p><br>
            <div class="block">
                <a href="request_demo.php" style="background:var(--secondaryColor)">Request a Free Demo <i class="fas fa-play-circle"></i></a>
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
    </main>

    <?php include "footer.php"?>
</body>
</html>
