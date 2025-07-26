

<?php 
    $title = "Dorthpro Suite | Powerful Business Software for Africa";
    include "controller/connections.php";
    include "admin/classes/dbh.php";
    include "admin/classes/select.php";
    include ('head.php');
    
?>
<body>
    
    <section class="top_head" id="topHeader">
        <div class="social_media">
            <ul>
                <li><a href="https://facebook.com/onostarmedia"><i class="fab fa-facebook"></i></a></li>
                <li><a href="https://www.linkedin.com/company/onostar-media"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="https://twitter.com/onostar_media"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://instagram.com/onostarmedia"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
        <div class="contact_phone">
            <ul>
                <li><a href="javascript:void(0)"><i class="far fa-envelope"></i>info@dorthprosuite.com</a></li>
               
            </ul>
        </div>
    </section>
    <section id="banner">
        <header id="mainHeader" class="main_header">
            <h2>
                <a href="index.php">
                    <img src="images/dorthpro1.png" alt="Dorthpro suite logo">
                </a>
            </h2>
            <nav id="navigation">
                <ul>
                    <li><a href="about.php" title="who we are"><i class="fas fa-bank"></i>About us</a></li>
                    <li>
                        <a href="javascript:void(0)" title="Our Products"><i class="fas fa-server"></i>  Products <i class="fas fa-chevron-down"></i></a>
                        <ul>
                            <li><a href="sales_inventory.php" title="Point of sales and inventory management"><i class="fas fa-cash-register"></i> Dorthpro POS</a></li>
                            <li><a href="hospital.php" title="Hospital Management system"><i class="fas fa-user-doctor"></i> Hospital Management</a></li>
                            <li><a href="laboratory.php" title="Laboratory Information System"><i class="fas fa-microscope"></i> Laboratory Information System</a></li>
                            <li><a href="microfinance.php" title="Microfinanace & Loan management"><i class="fas fa-piggy-bank"></i> Microfinance & Loan Management</a></li>
                            <li><a href="accounting.php" title="Accounting & asset management system"><i class="fas fa-calculator"></i> Acounting Management</a></li>
                            <li><a href="hotel.php" title="Hotel management system"><i class="fas fa-hotel"></i> Hotel & Lounge Software</a></li>
                            <li><a href="school.php" title="School management system"><i class="fas fa-user-graduate"></i> School Management</a></li>
                        </ul>
                    
                    </li>
                    <li><a href="articles.php" title="Blog and articles"><i class="fa-solid fa-newspaper"></i>Blog</a></li>

                    <li><a href="partners.php" title="Partnership"><i class="fas fa-handshake"></i>Become a partner</a></li>
                   
                    <li id="login"><a href="request_demo.php" title="Request demo"><i class="fas fa-chalkboard-teacher"></i> Request Live demo</a></li>
                </ul>
            </nav>
            <div class="menu-icon" onclick="displayMenu()"><a href="javascript:void(0);"><i class="fas fa-bars"></i></a></div>
        </header>
        <div id="slider">
            <div class="slides">
                <div class="slide">
                    <div class="banner_img">
                        <img src="images/wallpaper.jpg" alt="business software banner">
                    </div>
                    <div class="taglines">
                        <div class="taglines_note">
                            <h1>Empower Your Business with the Complete Software Suite </h1>
                            <p>From retail to hospitals, Laboratories, hotels, and finance — DorthProSuite delivers powerful, affordable software tailored to African businesses.</p>
                            
                            <div class="btns">
                                
                                <a href="#core_service">Explore Products <i class="fas fa-info"></i></a>
                                <a href="request_demo.php">Request Demo <i class="fas fa-play-circle"></i></a>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
            
        </div>
      
    </section>
    
    
    <main>
        
        <!-- about page -->
        <section id="about_us">
            <div class="about_banner">
                <div class="clients">
                    <img src="images/dorthpro_suite.png" alt="banner">
                </div>
            </div>
            <div class="about_text">
                <h3>Who we are</h3>
                <h2>Empowering African Businesses with Smart, Affordable Software!</h2>
                <div class="notes">
                    <div class="notes_1">
                        Onostar Media is a Nigerian software company dedicated to building simple, powerful tools that solve real business problems across Africa. Backed by years of hands-on experience, we created <strong>DorthProSuite</strong> — an all-in-one platform designed to help businesses run operations smarter, faster, and more efficiently. From retail and healthcare to education, hospitality, and finance, our solutions are built to fit African businesses and help them grow.</p>
                        <a href="about.php"class="about_btn">Read more <i class="fas fa-paper-plane"></i></a>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- features -->
        <section id="features">
            <div class="features">
                <h3>Features</h3>
                <h4>Smart solution that helps save time</h4>
                <!-- <h2>General and specialized ICT solutions</h2> -->
                 <p>DorthProSuite is a flexible business software suite built to simplify your operations — whether you manage a retail store, pharmacy, hospital, school, hotel, or finance institution. Here’s what you can do with DorthProSuite:</p>
                <hr>
                <div class="feats">
                    <div class="feat">
                        <i class="fa-solid fa-cash-register"></i>
                        <div class="feat_details">
                        <h3>Sales & Inventory</h3>
                        <p>Manage transactions, invoices, stock levels, and product movement with ease.</p>
                        </div>
                    </div>

                    <div class="feat">
                        <i class="fa-solid fa-file-invoice-dollar"></i>
                        <div class="feat_details">
                        <h3>Finance & Expenses</h3>
                        <p>Track payments, categorize expenses, and stay in control of your business finances.</p>
                        </div>
                    </div>

                    <div class="feat">
                        <i class="fa-solid fa-chart-bar"></i>
                        <div class="feat_details">
                        <h3>Reports & Insights</h3>
                        <p>Access real-time analytics on sales, inventory, performance, and profit trends.</p>
                        </div>
                    </div>

                    <div class="feat">
                        <i class="fa-solid fa-layer-group"></i>
                        <div class="feat_details">
                        <h3>Industry Modules</h3>
                        <p>Includes specialized tools for hospitals, schools, loans, hospitality, and retail businesses.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="feature_img">
                <img src="images/wallpaper3.webp" alt="Our services" loading="lazy">
            </div>
        </section>
       
        <!-- why choose us -->
        <section id="amenities">
            <h3>Why choose Dorthpro</h3>
            <hr>
            <h2>Tailored Software That Works for You</h2>
            <div class="amenities">
                <div class="offer">
                <i class="fas fa-lock"></i>
                <div class="offer_info">
                    <h4>Data Security & Privacy</h4>
                    <p>Your business data belongs to you. We prioritize security, and we never sell or exploit your information.</p>
                </div>
                </div>
                <div class="offer">
                <i class="fas fa-cogs"></i>
                <div class="offer_info">
                    <h4>Modular & Customizable</h4>
                    <p>Pick only the modules you need. We tailor features to your industry, size, and growth plans.</p>
                </div>
                </div>
                <div class="offer">
                <i class="fas fa-laptop-code"></i>
                <div class="offer_info">
                    <h4>Expert-built Technology</h4>
                    <p>Created by experienced developers at Onostar Media, with over a decade of building smart business tools.</p>
                </div>
                </div>
                <div class="offer">
                <i class="fas fa-hand-holding-dollar"></i>
                <div class="offer_info">
                    <h4>Affordable Plans</h4>
                    <p>No hidden fees. Get enterprise-grade software at pricing that supports small and growing businesses.</p>
                </div>
                </div>
                <div class="offer">
                <i class="fas fa-rocket"></i>
                <div class="offer_info">
                    <h4>Continuous Updates</h4>
                    <p>We continuously evolve with client feedback, industry needs, and modern tech trends.</p>
                </div>
                </div>
                <div class="offer">
                <i class="fas fa-headset"></i>
                <div class="offer_info">
                    <h4>Fast & Friendly Support</h4>
                    <p>We’re always just a message away — ready to assist you 24/7 with onboarding or technical help.</p>
                </div>
                </div>
            </div>
        </section>
         <!-- hero -->
         <section id="hero" style="display:none;">
            <div class="hero_image">
                <img src="images/hero.jpg" alt="hero image">
            </div> 
            <div class="hero_notes">
                <div class="note">
                    <i class="fas fa-briefcase"></i>
                    <h3>100+</h3>
                    <p>Projects Completed</p>
                </div>
                <div class="note">
                <i class="fas fa-user-tie"></i>
                    <h3>12</h3>
                    <p>IT Specialists</p>
                </div>
                <div class="note">
                    <i class="fab fa-uncharted"></i>
                    <h3>6</h3>
                    <p>Smart Solutions</p>
                </div>
                <div class="note">
                    <i class="fas fa-users"></i>
                    <h3>100+</h3>
                    <p>Satsified Clients</p>
                </div>
            </div>
        </section>
       <!-- products -->
    <section id="core_service">
        <div class="core_tool">
            <img src="images/banner4.jpg" alt="core service tools">
        </div>
        <div class="core">
            <div class="core_notes">
                <h3>Products</h3>
                <h2>There's a DorthPro for Every Business</h2>
                <p>Whether you're running a small shop or managing multiple branches, DorthProSuite offers tailored software to simplify your daily operations. Select a product below to start managing your business smarter and faster.</p>
            </div>

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
        <section id="quote_request">
            <h3>Innovating the Future, Together</h3>
            <p>At Onostar Media, we specialize in building smart, reliable software tailored for businesses in healthcare, retail, finance, hospitality, and beyond.  
            <br>From point-of-sale systems to hospital, lab, accounting, and microfinance platforms — our solutions are designed to help you scale faster and work smarter.
            <br>Partner with us to turn your vision into powerful, result-driven software.</p><br>
            <div class="block">
                <a href="https://www.onostarmedia.dorthpro.com" target="_blank">Explore More Solutions <i class="fas fa-paper-plane"></i></a>
            </div>
        </section>
        <!--Partners -->
        <section id="partners">
            <h3>Some of Our Clients</h3>
            <!-- <h4>We work with Amazing Clients</h4> -->
            <div class="partners">
                <figure>
                    <img src="images/asgard.jpg" alt="partners" loading="lazy">
                    <figcaption>Asgard Lounge & Restaurant</figcaption>
                </figure>
                <figure>
                    <img src="images/medcafe.jpg" alt="partners">
                    <figcaption>Medcafe Pharmacy, Abuja</figcaption>
                </figure>
                <figure>
                    <img src="images/icon.png" alt="partners">
                    <figcaption>Cure Corner Pharmacy</figcaption>
                </figure>
                <figure>
                    <img src="images/enascolin.jpg" alt="partners">
                    <figcaption>Enascolin Ventures</figcaption>
                </figure>
                <figure>
                    <img src="images/creamella.jpg" alt="partners" loading="lazy">
                    <figcaption>Creamella Foods Ltd</figcaption>
                </figure>
                <figure>
                    <img src="images/vs_logo.png" alt="partners" loading="lazy">
                    <figcaption>VS Supermarket</figcaption>
                </figure>
                <figure>
                    <img src="images/cavaz.jpg" alt="partners" loading="lazy">
                    <figcaption>Cavaz Chop House </figcaption>
                </figure>
                <figure>
                    <img src="images/icon.png" alt="partners" loading="lazy">
                    <figcaption>Tetfund Urology Centre, UBTH</figcaption>
                </figure>
                <figure>
                    <img src="images/jevi.png" alt="partners">
                    <figcaption>Jevi Austin Int. Co </figcaption>
                </figure>
                <figure>
                    <img src="images/icon.png" alt="partners">
                    <figcaption>J & B Care Global</figcaption>
                </figure>
                <figure>
                    <img src="images/steel_coven.jpg" alt="partners">
                    <figcaption>Steel Coven Nig</figcaption>
                </figure>
                <figure>
                    <img src="images/icon.png" alt="partners" loading="lazy">
                    <figcaption>OUD Store, Abuja</figcaption>
                </figure>
                <figure>
                    <img src="images/stjude_logo.png" alt="partners" loading="lazy">
                    <figcaption>St.Jude Laboratory</figcaption>
                </figure>
                <figure>
                    <img src="images/roteech.webp" alt="partners">
                    <figcaption>Rotech</figcaption>
                </figure>
                <figure>
                    <img src="images/marzbee_logo.png" alt="partners" loading="lazy">
                    <figcaption>Marzbee Hotel & Lounge</figcaption>
                </figure>
                <figure>
                    <img src="images/vinta_logo.jpg" alt="partners" loading="lazy">
                    <figcaption>Vinta Supermarket</figcaption>
                </figure>
                <figure>
                    <img src="images/dexdee_logo.jpg" alt="partners">
                    <figcaption>Drifters Dexdee Golf Resort</figcaption>
                </figure>
                <figure>
                    <img src="images/icon.png" alt="partners">
                    <figcaption>Solmik Supermarket</figcaption>
                </figure>
                <figure>
                    <img src="images/ag.png" alt="partners">
                    <figcaption>AG Market place</figcaption>
                </figure>
                <figure>
                    <img src="images/elgra.jpg" alt="partners">
                    <figcaption>Elgra Pharmacy</figcaption>
                </figure>
                <figure>
                    <img src="images/bclassic.png" alt="partners">
                    <figcaption>B Classic Pharma</figcaption>
                </figure>
                
                <figure>
                    <img src="images/icon.png" alt="partners">
                    <figcaption>Maxime Pharmacy</figcaption>
                </figure>
            </div>
        </section>
        <Section id="plans">
            <h3 class="plans_title">Our Articles</h3>
            <h2>Check out our latest blog posts</h2>
            <div class="plans">
                <?php
                    // get only four articles
                    $get_products = $connectdb->prepare("SELECT SUBSTRING_INDEX (details, ' ', 10) AS details, title, article_id, photo, post_date FROM articles ORDER BY post_date DESC LIMIT 4");
                    $get_products->execute();
                    if($get_products->rowCount() > 0){
                        $rows = $get_products->fetchAll();
                        foreach($rows as $row):
                ?>
                <div class="plan_form" id="plan1">
                    <figure>
                        <div class="project_img">
                            <div class="pro_img">
                                <img src="<?php echo 'admin/photos/'.$row->photo?>" alt="<?php echo $row->title?>">
                            </div>
                            <a href="article_info.php?id=<?php echo $row->article_id?>"> <i class="fas fa-eye"></i></a>
                        </div>
                        <figcaption>
                            <h3><?php echo strtoupper($row->title)?></h3>
                            <p class="course_details">
                               <?php echo $row->details?>...
                            </p>
                            <div class="author">
                                <img src="images/icon.png" alt="logo">
                                <p style="color:var(--moreColor);" class="author_name"><?php echo date("jS M, Y", strtotime($row->post_date))?></p>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                
                <?php endforeach; }else{?>
                <p style="color:var(--moreColor); text-align:center">No New article</p>
                <?php }?>
                
            </div>
            
                <?php if($get_products->rowCount() > 0){?>
                    <a id="moreProjects" href="articles.php" title="View more products">View all articles <i class="fas fa-angle-double-right"></i></a>
                <?php }?>
        </Section>
        
        
        
        
        
        
        
    </main>
    
    <?php include "footer.php"?>
    </div>
</body>
</html>