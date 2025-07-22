

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
                            <li><a href="dorthpro_pos.php" title="Point of sales and inventory management"><i class="fas fa-cash-register"></i> Inventory & Sales</a></li>
                            <li><a href="dorthpro_health.php" title="Hospital Management system"><i class="fas fa-user-doctor"></i> Hospital Management</a></li>
                            <li><a href="dorthpro_lab.php" title="Laboratory Information System"><i class="fas fa-microscope"></i> Laboratory Information System</a></li>
                            <li><a href="dorthpro_loan.php" title="Microfinanace & Loan management"><i class="fas fa-piggy-bank"></i> Microfinance & Loan Management</a></li>
                            <li><a href="dorthpro_accounting.php" title="Accounting & asset management system"><i class="fas fa-calculator"></i> Acounting Management</a></li>
                            <li><a href="dorthpro_hotel.php" title="Hotel management system"><i class="fas fa-hotel"></i> Hotel & Lounge Software</a></li>
                            <li><a href="dorthpro_edu.php" title="School management system"><i class="fas fa-user-graduate"></i> School Management</a></li>
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
                    <img src="images/coding.jpg" alt="banner">
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
                        <a href="dorthpro_pos.php">View Details <i class="fas fa-paper-plane"></i></a>
                    </figcaption>
                </figure>

                <figure>
                    <img src="images/hotel_icon.png" alt="icon">
                    <figcaption>
                        <h3>DorthPro Hotel & Lounge</h3>
                        <p>Streamline guest check-ins, reservations, billing, and manage your bar and restaurant inventory from one easy-to-use platform.</p><br>
                        <a href="dorthpro_hotel.php">View Details <i class="fas fa-paper-plane"></i></a>
                    </figcaption>
                </figure>

                <figure>
                    <img src="images/hospital_icon.png" alt="icon">
                    <figcaption>
                        <h3>DorthPro Hospital Management</h3>
                        <p>Complete hospital and clinic solution — manage patient records, appointments, consultations, labs, pharmacy, billing, and corporate accounts in one place.</p><br>
                        <a href="dorthpro_health.php">View Details <i class="fas fa-paper-plane"></i></a>
                    </figcaption>
                </figure>

                <figure>
                    <img src="images/lab_icon.png" alt="icon">
                    <figcaption>
                        <h3>DorthPro Laboratory System</h3>
                        <p>Manage all diagnostic center operations — test requests, sample tracking, results reporting, doctor access, billing, and patient records — all in one system.</p><br>
                        <a href="dorthpro_lab.php">View Details <i class="fas fa-paper-plane"></i></a>
                    </figcaption>
                </figure>

                <figure>
                    <img src="images/accounting.jpg" alt="icon">
                    <figcaption>
                        <h3>DorthPro Accounting</h3>
                        <p>Full-featured accounting software with invoicing, asset management, depreciation tracking, and key financial statements like cash flow, profit & loss, and balance sheet.</p><br>
                        <a href="dorthpro_accounting.php">View Details <i class="fas fa-paper-plane"></i></a>
                    </figcaption>
                </figure>

                <figure>
                    <img src="images/loan_icon.png" alt="icon">
                    <figcaption>
                        <h3>DorthPro Loan & Microfinance</h3>
                        <p>Loan management made simple — automate applications, approvals, disbursements, repayments, interest tracking, penalties, and reports. Built for microfinance and cooperatives.</p><br>
                        <a href="dorthpro_loan.php">View Details <i class="fas fa-paper-plane"></i></a>
                    </figcaption>
                </figure>

                <figure>
                    <img src="images/school_app.png" alt="icon">
                    <figcaption>
                        <h3>DorthPro School Manager</h3>
                        <p>All-in-one school management solution — admissions, attendance, grading, fees, communication, and academic records — all on one platform.</p><br>
                        <a href="dorthpro_edu.php">View Details <i class="fas fa-paper-plane"></i></a>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
        <!-- quote in full -->
        <section id="quote_request">
            <h3>TOGETHER WE INNOVATE THE FUTURE</h3>
            <p>Looking for other Customized software solutions, We are an enterprise software development company that is inspired by the future. Our success is directly derived from the continued success of our Clients in health, retail, hospitality and other sectors of business.<br>We are dedicated to always delivering on our promise to be the results driven partner that our Clients expect. When it comes to Customized Applications, we are your ideal partner</p><br>
            <div class="block">
                <a href="https://www.onostarmedia.dorthpro.com" target="_blank">View other Solutions <i class="fas fa-paper-plane"></i></a>
            </div>
        </section>
        <!-- team -->
        <!-- <section id="team">
            <h2>The Amazing team behind our Establishment</h2>
            <hr>
            <p>We have a qualified team of Scientists, Pharmacist, health technicians, and top professionals in the health sector.</p>
            <div class="team">
            <figure>
                    <img src="images/d1.jpg" alt="management photo">
                    <figcaption>
                        <h3>DR (PHARM) Nelson Akogo (B.Pharm, PharmD, MPSN)<span>MD, CEO</span></h3>
                        <div class="socials">
                            <i class="fab fa-facebook-square" style="color:#3b5998"></i>
                            <i class="fab fa-twitter-square" style="color:#00acee"></i>
                            <i class="fab fa-linkedin" style="color:#0072b1"></i>
                        </div>
                        
                    </figcaption>
                </figure>
                
            </div>
            <div class="more_team">
                <a href="about.php#team" title="View team members">View more <i class="fas fa-angle-double-right"></i></a>
            </div> 
        </section> -->
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
                    <img src="images/icon1.png" alt="partners">
                    <figcaption>Cure Corner Pharmacy</figcaption>
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
                    <img src="images/icon1.png" alt="partners" loading="lazy">
                    <figcaption>Tetfund Urology Centre, UBTH</figcaption>
                </figure>
                <figure>
                    <img src="images/jevi.png" alt="partners">
                    <figcaption>Jevi Austin Int. Co </figcaption>
                </figure>
                <figure>
                    <img src="images/icon1.png" alt="partners">
                    <figcaption>J & B Care Global</figcaption>
                </figure>
                <figure>
                    <img src="images/steel_coven.jpg" alt="partners">
                    <figcaption>Steel Coven Nig</figcaption>
                </figure>
                <figure>
                    <img src="images/icon1.png" alt="partners" loading="lazy">
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
                    <img src="images/icon1.png" alt="partners">
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
                    <img src="images/icon1.png" alt="partners">
                    <figcaption>Maxime Pharmacy</figcaption>
                </figure>
                <!-- <figure>
                    <img src="images/icon1.png" alt="partners">
                    <figcaption>1FCA Divine Ventures</figcaption>
                </figure> -->
                <!-- <figure>
                    <img src="images/temix.jpg" alt="partners">
                    <figcaption>Temix empire</figcaption>
                </figure> -->
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
        
        
        <!-- <section id="testimonies">
            <h2>testimonies from our Clients</h2>
            <hr>
            <div class="box">
                <div class="testimonies">
                    <div class="testimony">
                        <div class="test_img">
                            <img src="images/team_01-540x518.jpg" alt="James Chester">
                        </div>
                        <div class="test_note">
                            <p>"I couldn’t be happier with the service I was provided. Everyone took ample time with me to ensure that my visit exceeded my expectations."</p>
                            <div class="testifier">
                                <img src="images/team_01-540x518.jpg" alt="testifier">
                                <span>- James Chester</span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="testimony">
                        <div class="test_img">
                            <img src="images/team_02-540x518.jpg" alt="Andre Coleman morgans">
                        </div>
                        <div class="test_note">
                            <p>"We have used Bob and sil to provide services that our competitions cannot begin to offer. That has given us a decisive edge in our market. Now we can produce even more with sustainable energy"</p>
                            <div class="testifier">
                                <img src="images/team_02-540x518.jpg" alt="testifier">
                                <span>- Eddie Smith</span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="testimony">
                        <div class="test_img">
                            <img src="images/team_03-540x518.jpg" alt="Will pilo">
                        </div>
                        <div class="test_note">
                            <p>"We have been engaged with Bob and sil for several months now. They have been very responsive to all requests. Investing with Irecco has brought more financial value to us as a company as well as development."</p>
                            <div class="testifier">
                                <img src="images/team_03-540x518.jpg" alt="testifier">
                                <span>- Damian wilsbrock</span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="testimony">
                        <div class="test_img">
                            <img src="images/team_04-540x518.jpg" alt="Will pilo">
                        </div>
                        <div class="test_note">
                            <p>"Bob and SIl globale an excellent service, be it on a business or personal level.I found the company's various investment plans very helpful to the growth of my business and i am heading on a great path to finanncial freedom"</p>
                            <div class="testifier">
                                <img src="images/team_04-540x518.jpg" alt="testifier">
                                <span>- Sean Mendoz</span>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </section> -->
        <!-- hero 2 -->
        
        
        
        
        
    </main>
    
    <?php include "footer.php"?>
    </div>
</body>
</html>