-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2025 at 04:08 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dorthpro_suite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admissions`
--

CREATE TABLE `admissions` (
  `admission_id` int(11) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `other_names` varchar(50) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `course` varchar(100) NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admissions`
--

INSERT INTO `admissions` (`admission_id`, `last_name`, `other_names`, `phone`, `email_address`, `gender`, `course`, `reg_date`) VALUES
(1, 'Odigie ', 'Freedom Uhunoma ', '08107851208', 'freedomuhunomaodigie@gmail.com', 'Male', 'Frontend', '2025-03-11 19:24:47');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `title` varchar(1024) NOT NULL,
  `details` text NOT NULL,
  `photo` varchar(1024) NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `title`, `details`, `photo`, `post_date`) VALUES
(1, 'Innovation And Business Growth', 'INNOVATION Is Often The Fuel That Drives Business Growth. When Companies Innovate, They Create New Products, Services, Processes, Or Business Models That Meet Evolving Market Needs, Improve Efficiency, Or Open Up New Opportunities. Here&#039;s How Innovation Contributes To Business Growth:\n\n\n\n\n1. Competitive Advantage: Innovation Allows Businesses To Differentiate Themselves From Competitors. Whether It&#039;s Through Unique Features, Better Quality, Or Superior Customer Experience, Innovative Companies Can Attract And Retain Customers More Effectively.\n\n2. Increased Efficiency: Innovations In Processes And Technology Can Streamline Operations, Reduce Costs, And Improve Productivity. This Efficiency Often Translates To Higher Profits And Allows Businesses To Scale More Effectively.\n\n3. Market Expansion: Innovative Products Or Services Can Open Up New Markets Or Expand Existing Ones. By Offering Something Novel Or Addressing Previously Unmet Needs, Businesses Can Reach New Customer Segments And Grow Their Market Share.\n\n4. Adaptation To Change: In Rapidly Changing Markets, Businesses Need To Continually Innovate To Stay Relevant. Whether It&#039;s Adapting To New Technologies, Consumer Preferences, Or Regulatory Requirements, Innovation Enables Companies To Evolve And Thrive In Dynamic Environments.\n\n5. Attracting Talent And Investment: Innovative Companies Tend To Attract Top Talent Who Are Drawn To Opportunities To Work On Cutting-edge Projects. Additionally, Investors Often Favor Businesses With A Track Record Of Innovation, Seeing Them As More Likely To Deliver Long-term Growth And Returns.\n\n6. Brand Enhancement: Being Perceived As Innovative Can Enhance A Company&#039;s Brand Image And Reputation. Customers, Partners, And Stakeholders Are More Likely To Trust And Engage With Businesses That Are Seen As Forward-thinking And Creative.\n\nTo Foster Innovation And Drive Business Growth, Companies Should Create A Culture That Values Experimentation, Rewards Risk-taking, And Encourages Collaboration Across Teams. Investing In Research And Development, Staying Attuned To Market Trends, And Actively Seeking Feedback From Customers Are Also Critical Components Of An Effective Innovation Strategy.\n\nHARNESSING INNOVATION\nHarnessing Innovation In Business Involves Creating An Environment That Fosters Creativity, Encourages Experimentation, And Supports The Implementation Of New Ideas To Drive Growth And Competitiveness. Here Are Some Strategies To Effectively Harness Innovation In Business:\n\n1. Cultivate A Culture Of Innovation: Foster An Organizational Culture That Values And Rewards Creativity, Risk-taking, And Continuous Improvement. Encourage Employees To Share Ideas, Collaborate Across Teams, And Challenge The Status Quo.\n\n2. Invest In Research And Development (R&amp;D): Allocate Resources To Research And Development Initiatives Aimed At Exploring New Technologies, Products, And Services. Create Dedicated Teams Or Departments Focused On Innovation And Provide Them With The Necessary Tools And Resources To Experiment And Prototype.\n\n3. Empower Employees: Empower Employees At All Levels To Contribute To The Innovation Process. Encourage Them To Take Ownership Of Their Ideas And Provide Opportunities For Them To Develop And Test New Concepts. Support Professional Development And Training Programs To Enhance Employees&#039; Skills And Knowledge.\n\n4. Foster Strategic Partnerships: Collaborate With External Partners, Including Startups, Universities, Research Institutions, And Other Companies, To Access New Technologies, Expertise, And Market Insights. Strategic Partnerships Can Help Accelerate Innovation And Expand The Organization&#039;s Capabilities.\n\n5. Embrace Open Innovation: Look Beyond Internal Resources And Tap Into External Sources Of Innovation. Engage With Customers, Suppliers, And Other Stakeholders To Co-create Solutions And Gather Feedback. Open Innovation Frameworks Allow For The Exchange Of Ideas And Knowledge Across Organizational Boundaries.\n\n6. Implement Agile Practices: Adopt Agile Methodologies And Iterative Approaches To Project Management And Product Development. Break Projects Into Smaller, Manageable Tasks, And Prioritize Flexibility And Responsiveness To Changes In Market Dynamics Or Customer Needs.\n\n7. Create Innovation Spaces: Design Physical Or Virtual Spaces Where Employees Can Collaborate, Brainstorm, And Prototype Ideas. These Innovation Hubs Can Serve As Creative Environments Conducive To Experimentation And Idea Generation.\n\n8. Measure And Track Innovation Metrics: Establish Key Performance Indicators (KPIs) To Evaluate The Effectiveness Of Innovation Efforts. Track Metrics Such As The Number Of New Product Launches, Revenue From New Sources, And Employee Engagement In Innovation Activities.\n\n9. Promote Diversity And Inclusion: Embrace Diversity Of Thought, Background, And Experience Within The Organization. Research Shows That Diverse Teams Are More Innovative And Better Equipped To Solve Complex Problems. Foster An Inclusive Environment Where All Employees Feel Valued And Empowered To Contribute.\n\n10. Adapt And Learn From Failure: Encourage A Culture Where Failure Is Viewed As An Opportunity To Learn And Iterate. Celebrate Both Successes And Failures, And Use Them As Valuable Learning Experiences To Inform Future Innovation Efforts.\n\nBy Implementing These Strategies, Businesses Can Effectively Harness Innovation To Drive Growth, Stay Competitive, And Meet The Evolving Needs Of Customers And Markets.', 'Innovation.jpg', '2024-06-15 12:23:14'),
(2, 'BENEFITS OF BUSINESS PROCESS AUTOMATION', 'Business Process Automation (BPA) Refers To The Use Of Technology And Software To Automate Repetitive Tasks And Streamline Complex Business Processes. Here Are Some Key Aspects And Benefits Of BPA:\r\n\r\nKEY ASPECTS OF BUSINESS PROCESS AUTOMATION:\r\n1. Workflow Automation: BPA Involves Automating Workflows And Tasks That Are Manual, Repetitive, And Rule-based. This Could Include Data Entry, Document Approval Processes, Customer Onboarding, Sales, Inventory Control, Etc.\r\n\r\n2. Integration Of Systems: BPA Often Requires Integrating Various Systems And Applications Within An Organization To Ensure Seamless Flow Of Data And Information Across Different Departments.\r\n\r\n3. Rule-based Decision Making: Automation Tools Are Programmed To Follow Predefined Rules And Logic, Reducing The Need For Human Intervention In Routine Decision-making Processes.\r\n\r\n4. Monitoring And Reporting: BPA Provides Visibility Into Processes Through Real-time Monitoring And Reporting Capabilities, Allowing Businesses To Identify Bottlenecks, Measure Performance, And Make Data-driven Decisions.\r\n\r\n5. Scalability And Consistency: Automation Allows Businesses To Scale Operations Efficiently Without Proportional Increases In Resources. It Also Ensures Consistency And Reduces Errors In Repetitive Tasks.\r\n\r\nBENEFITS OF BUSINESS PROCESS AUTOMATION:\r\n1. Improved Efficiency: By Automating Repetitive Tasks, BPA Frees Up Employees\' Time For More Strategic And Value-added Activities, Thereby Improving Overall Efficiency.\r\n\r\n2. Cost Savings: Automation Reduces Labor Costs Associated With Manual Processes And Can Lead To Savings In Operational Expenses.\r\n\r\n3. Enhanced Accuracy And Compliance: Automation Reduces Human Errors In Data Entry And Processing, Leading To Improved Accuracy And Compliance With Regulations And Organizational Policies.\r\n\r\n4. Faster Processing Times: Automated Workflows Can Significantly Reduce Processing Times For Tasks Such As Approvals, Order Processing, And Customer Service Requests.\r\n\r\n5. Better Customer Experience: Streamlined Processes And Faster Response Times Lead To Improved Customer Satisfaction And Retention.\r\n\r\n6. Business Agility: Automation Makes It Easier For Businesses To Adapt To Changing Market Conditions And Scale Operations As Needed Without Major Disruptions.\r\n\r\nIMPLEMENTATION CONSIDERATIONS:\r\n1. Process Analysis: Identify Processes That Are Suitable For Automation Based On Their Volume, Complexity, And Potential ROI.\r\n\r\n2. Technology Selection: Choose Appropriate BPA Tools And Platforms That Align With Your Business Requirements And Integrate Well With Existing Systems.\r\n\r\n3. Change Management: Prepare Employees For Changes Brought About By Automation, Including Training And Support To Ensure Successful Adoption.\r\n\r\n4. Continuous Improvement: Regularly Monitor Automated Processes To Identify Opportunities For Optimization And Further Automation.\r\n\r\nBusiness Process Automation Is Increasingly Becoming Essential For Organizations Looking To Stay Competitive By Optimizing Efficiency, Reducing Costs, And Improving Overall Agility In A Rapidly Evolving Business Environment.\r\nFor More Information About Business Or Automation, Or If You Need Customized Software For Automating Your Business, Contact Us @ ONOSTARMEDIA – 07068897068 (Whatsapp &amp; Direct Calls)\r\n', 'Business-Automation-Wheel-1.png', '2024-06-19 04:19:24'),
(3, 'DIGITAL TRANSFORMATION', 'HOW BUSINESSES ARE ADOPTING TECHNOLOGY TO TRANSFORM THEIR OPERATIONS AND CUSTOMER EXPERIENCES.\n\nDigital Transformation Refers To The Integration Of Digital Technology Into All Areas Of A Business, Fundamentally Changing How It Operates And Delivers Value To Customers. This Transformation Is Not Just About Adopting New Technologies, But Also About Leveraging Them To Innovate Processes, Improve Efficiency, And Create New Business Models.\n\nBusinesses Are Increasingly Embracing Digital Transformation To Stay Competitive In A Rapidly Evolving Market Landscape. Here Are Key Ways In Which Businesses Are Adopting Technology To Transform Their Operations And Customer Experiences:\n\n1. Data-driven Decision Making: Businesses Are Harnessing Big Data And Analytics To Gain Insights Into Customer Behavior, Market Trends, And Operational Performance. This Data-driven Approach Enables More Informed Decision-making And Personalized Customer Experiences.\n\n2. Automation And AI: Automation Technologies, Powered By Artificial Intelligence (AI) And Machine Learning (ML), Are Being Deployed To Streamline Repetitive Tasks, Enhance Productivity, And Optimize Workflows Across Various Departments Such As Sales, Marketing, Customer Service, And Supply Chain Management.\n\n3. Cloud Computing: Cloud Platforms Provide Scalability, Flexibility, And Cost-efficiency. Businesses Are Migrating Their Operations To The Cloud To Improve Agility, Enable Remote Work Capabilities, And Enhance Data Security.\n\n4. Enhanced Customer Engagement: Digital Channels Such As Mobile Apps, Social Media, And Online Portals Are Used To Engage Customers More Effectively. Businesses Are Leveraging These Channels To Provide Seamless Omnichannel Experiences And Personalized Interactions.\n\n5. E-commerce And Digital Marketing: The Shift Towards E-commerce Has Accelerated Digital Transformation Efforts. Businesses Are Investing In Online Sales Platforms, Digital Marketing Strategies, And E-commerce Technologies To Reach Global Markets And Drive Revenue Growth.\n\n6. Internet Of Things (IoT): IoT Devices Are Connecting Physical Objects And Enabling Real-time Data Collection. Businesses Are Using IoT To Optimize Operations, Monitor Equipment Performance, And Offer New Services That Improve Customer Satisfaction.\n\n7. Cybersecurity: As Digital Transformation Expands The Attack Surface, Cybersecurity Measures Are Critical. Businesses Are Investing In Robust Cybersecurity Strategies And Technologies To Protect Sensitive Data And Maintain Customer Trust.\n\n8. Agile And Collaborative Culture: Digital Transformation Requires A Shift In Organizational Culture Towards Agility, Innovation, And Collaboration. Businesses Are Adopting Agile Methodologies And Fostering A Culture That Embraces Continuous Improvement And Experimentation.\n\n9. Supply Chain Optimization: Technologies Such As Blockchain And Advanced Analytics Are Transforming Supply Chain Management. Businesses Are Improving Visibility, Efficiency, And Sustainability Across Their Supply Chains To Meet Customer Expectations And Reduce Costs.\n\n10. Employee Empowerment: Digital Tools And Technologies Empower Employees To Work More Efficiently And Collaboratively. Businesses Are Providing Training And Support To Ensure Employees Can Leverage These Tools Effectively And Contribute To The Organization\'s Digital Transformation Journey.\n\nOverall, Digital Transformation Is Not Just About Adopting New Technologies, But About Leveraging Them Strategically To Create Value For Customers, Optimize Operations, And Drive Sustainable Growth In A Rapidly Changing Business Environment.\n', 'digital_transformation.png', '2024-06-23 09:00:43'),
(4, 'TRANSFORMING CUSTOMER EXPERIENCE', 'TRANSFORMING CUSTOMER EXPERIENCE: THE ROLE OF TECHNOLOGY IN SHAPING CONSUMER ENGAGEMENT\r\n\r\nIn Today\'s Competitive Marketplace, The Landscape Of Customer Experience (CX) Is Undergoing A Profound Transformation, Driven By Advancements In Technology. Businesses Across Industries Are Increasingly Recognizing The Critical Importance Of Delivering Exceptional CX Not Merely As A Differentiator, But As A Cornerstone Of Their Strategy For Growth And Sustainability. Here\'s How Technology Is Reshaping And Enhancing Customer Experience In The Modern Era:\r\n\r\n1. Personalization At Scale:\r\nTechnology Enables Businesses To Gather And Analyze Vast Amounts Of Customer Data, Allowing For Highly Personalized Interactions. Machine Learning Algorithms And AI-powered Analytics Sift Through Customer Preferences, Behaviors, And Purchasing Patterns To Deliver Tailored Recommendations And Content. This Level Of Personalization Enhances Customer Satisfaction By Anticipating Needs And Preferences, Ultimately Fostering Loyalty And Increasing Lifetime Value.\r\n\r\nFor Example, E-commerce Platforms Use Algorithms To Suggest Products Based On Past Purchases And Browsing History, While Streaming Services Recommend Content Based On Viewing Habits. This Personalized Approach Not Only Enhances Customer Satisfaction But Also Drives Revenue Growth Through Increased Sales And Reduced Churn Rates.\r\n\r\n2. Omni-channel Engagement:\r\nTechnology Has Blurred The Lines Between Physical And Digital Channels, Enabling Businesses To Create Seamless Omni-channel Experiences. Customers Expect Consistency And Continuity Across Various Touchpoints, Whether They Are Interacting Through A Website, Mobile App, Social Media, Or In-store. Integrated CRM Systems And Data Analytics Platforms Unify Customer Data Across Channels, Allowing Businesses To Deliver Personalized Experiences In Real-time.\r\n\r\nRetailers, For Instance, Use Mobile Apps To Send Personalized Promotions To Customers Near Their Physical Stores, While Banks Offer Omnichannel Support For Seamless Banking Experiences Across Web, Mobile, And Branch Interactions. This Holistic Approach Ensures That Customers Receive A Consistent Brand Experience Regardless Of How They Choose To Engage With The Business.\r\n\r\n3. Enhanced Customer Service With AI And Automation:\r\nAI-powered Chatbots And Virtual Assistants Are Transforming Customer Service By Providing Immediate And Personalized Support Around The Clock. These Intelligent Systems Use Natural Language Processing (NLP) To Understand Customer Queries And Provide Relevant Information Or Assistance In Real-time. Chatbots Can Handle Routine Inquiries, Process Orders, And Even Escalate Complex Issues To Human Agents When Necessary, Thereby Improving Response Times And Overall Efficiency.\r\n\r\nMoreover, AI-driven Sentiment Analysis Helps Businesses Gauge Customer Emotions And Feedback From Interactions, Enabling Proactive Measures To Address Concerns And Improve Service Delivery. This Proactive Approach Not Only Resolves Issues Swiftly But Also Enhances Overall Customer Satisfaction And Loyalty.\r\n\r\n4. Empowering Customer Self-Service:\r\nSelf-service Portals And Mobile Apps Empower Customers To Manage Their Accounts, Track Orders, And Resolve Issues Independently, Reducing Dependency On Traditional Customer Service Channels. These Self-service Options Are Enhanced By AI-driven Recommendations And Intuitive User Interfaces, Simplifying Complex Processes And Providing A Frictionless Experience.\r\n\r\nFor Example, Airlines Allow Customers To Check-in, Select Seats, And Even Change Flights Using Mobile Apps, While Utility Companies Provide Self-service Portals For Bill Payments And Account Management. By Empowering Customers With Self-service Tools, Businesses Improve Efficiency, Reduce Operational Costs, And Enhance Customer Satisfaction By Providing Greater Control Over Their Interactions.\r\n\r\n5. Data-driven Insights For Continuous Improvement:\r\nAdvanced Analytics And Data-driven Insights Enable Businesses To Gain A Deeper Understanding Of Customer Behavior And Preferences. By Analyzing Customer Feedback, Purchasing Patterns, And Engagement Metrics, Businesses Can Identify Trends, Anticipate Market Shifts, And Tailor Their Offerings To Meet Evolving Customer Expectations.\r\n\r\nThese Insights Not Only Inform Strategic Decision-making But Also Drive Innovation In Product Development And Service Enhancements. Businesses Can Proactively Introduce New Features, Adjust Pricing Strategies, Or Launch Targeted Marketing Campaigns Based On Data-driven Insights, Thereby Staying Ahead Of Competitors And Maintaining Relevance In A Dynamic Marketplace.\r\n\r\nLOOKING AHEAD: THE FUTURE OF CX\r\n\r\nAs Technology Continues To Evolve, The Future Of Customer Experience Promises Even More Transformative Innovations. Emerging Technologies Such As Augmented Reality (AR), Virtual Reality (VR), And Voice Interfaces Are Poised To Redefine How Customers Interact With Brands, Offering Immersive And Intuitive Experiences That Bridge The Gap Between Physical And Digital Realms.\r\n\r\nFurthermore, Advancements In AI And Machine Learning Will Enable Deeper Personalization And Predictive Capabilities, Allowing Businesses To Anticipate Customer Needs And Deliver Hyper-personalized Experiences In Real-time. The Convergence Of These Technologies Will Undoubtedly Shape The Future Of Customer Experience, Offering New Opportunities For Businesses To Differentiate Themselves And Forge Stronger Connections With Customers.\r\n\r\nIn Conclusion, The Integration Of Technology Into Customer Experience Is Not Just A Trend But A Strategic Imperative For Businesses Aiming To Thrive In Today\'s Digital Economy. By Leveraging Technology To Personalize Interactions, Streamline Processes, Empower Customers, And Derive Actionable Insights, Businesses Can Create Compelling And Memorable Experiences That Drive Customer Satisfaction, Loyalty, And Long-term Growth.\r\n', 'cx.jpeg', '2024-07-04 03:43:30'),
(5, 'Harnessing The Power Of Custom Software Solutions For Your Business', 'In Today\'s Competitive Landscape, Off-the-shelf Software Solutions May Not Always Meet The Unique Needs And Challenges Of Your Business. Custom Software Development Offers A Tailored Approach To Enhancing Efficiency, Scalability, And Innovation Within Your Organization. Here’s How Investing In Custom Software Solutions Can Drive Growth And Success:\r\n\r\n1. Tailored To Your Specific Needs\r\nOff-the-shelf Software Often Comes With Unnecessary Features Or Lacks Critical Functionalities That Your Business Requires. Custom Software Development Allows You To Build Solutions That Precisely Fit Your Workflow, Business Processes, And Industry Requirements. Whether It\'s Automating Specific Tasks, Integrating With Existing Systems, Or Ensuring Compliance With Industry Regulations, Custom Software Ensures That Every Aspect Of Your Operations Is Addressed Efficiently.\r\n\r\n2. Scalability And Flexibility\r\nAs Your Business Grows, So Do Its Technological Requirements. Custom Software Solutions Are Designed To Scale Alongside Your Business, Accommodating Increased Data Volumes, User Bases, And Operational Complexities Without Compromising Performance. Moreover, Custom Software Is Inherently Flexible, Allowing For Iterative Improvements And Updates Based On Evolving Business Needs And Feedback.\r\n\r\n3. Enhanced Efficiency And Productivity\r\nCustom Software Is Engineered To Streamline Workflows And Eliminate Bottlenecks, Thereby Improving Overall Efficiency And Productivity. By Automating Repetitive Tasks, Integrating Disparate Systems, And Providing Real-time Data Insights, Custom Solutions Empower Your Team To Focus On Strategic Initiatives And Deliver Superior Results.\r\n\r\n4. Competitive Advantage\r\nIn A Competitive Market, Differentiation Is Key To Standing Out. Custom Software Solutions Can Give Your Business A Competitive Edge By Enabling Innovation, Optimizing Customer Experiences, And Responding Swiftly To Market Changes. By Aligning Technology With Your Unique Business Goals And Customer Expectations, You Can Enhance Customer Satisfaction And Loyalty While Outperforming Competitors.\r\n\r\n5. Cost-effectiveness In The Long Run\r\nWhile The Initial Investment In Custom Software Development May Seem Higher Than Off-the-shelf Solutions, The Long-term Benefits Often Outweigh The Costs. Custom Software Reduces Reliance On Inefficient Processes, Minimizes Operational Overheads, And Prevents Potential Losses Associated With System Downtime Or Data Breaches. It Offers A Higher Return On Investment (ROI) By Driving Revenue Growth, Reducing Time-to-market For New Products Or Services, And Fostering Innovation-driven Business Strategies.\r\n\r\nCONCLUSION\r\nIn Conclusion, Custom Software Development Is Not Merely A Technological Investment But A Strategic Decision To Optimize Business Operations, Enhance Agility, And Drive Sustainable Growth. By Partnering With ONOSTAR MEDIA, Your Business Can Leverage Tailored Solutions To Address Specific Challenges, Capitalize On Opportunities, And Achieve Long-term Success In A Dynamic Digital Economy.\r\n', 'Benefits-of-Custom-Software-Development-768x389.jpg', '2024-07-22 02:37:10'),
(6, 'NAVIGATING TECH CHALLENGES IN BUSINESS: HOW OUR PRODUCT CAN TRANSFORM YOUR OPERATIONS', 'In Today\'s Fast-paced Digital Landscape, Businesses Face A Myriad Of Technological Challenges That Can Impede Growth, Productivity, And Innovation. From Data Security To Integration Issues, The Struggle To Keep Up With Rapid Technological Advancements Is Real. But With The Right Tools And Strategies, These Obstacles Can Be Effectively Managed. Here’s A Look At Some Common Tech Challenges Businesses Encounter And How Our Products Is Designed To Address And Resolve These Issues.\r\n\r\nCOMMON TECH CHALLENGES BUSINESSES FACE\r\n\r\n1. DATA SECURITY THREATS\r\n   - CHALLENGE: With Cyber Threats Becoming Increasingly Sophisticated, Ensuring The Security Of Sensitive Data Is A Major Concern For Businesses Of All Sizes. Data Breaches, Ransomware Attacks, And Phishing Scams Are Just A Few Examples Of Potential Threats.\r\n   - IMPACT: A Security Breach Can Lead To Significant Financial Losses, Legal Issues, And Damage To Your Company’s Reputation.\r\n\r\n2. INTEGRATION DIFFICULTIES\r\n   - CHALLENGE: As Businesses Adopt New Technologies, Integrating Them With Existing Systems Can Be Complex And Time-consuming. Incompatible Software, Data Silos, And Inconsistent Processes Can Disrupt Operations And Hinder Efficiency.\r\n   - IMPACT: Poor Integration Can Lead To Decreased Productivity, Increased Operational Costs, And Wasted Resources.\r\n\r\n3. SCALABILITY ISSUES\r\n   - CHALLENGE: Growing Businesses Need Technology Solutions That Can Scale With Their Needs. Many Businesses Face Challenges When Their Tech Solutions Are Not Flexible Enough To Accommodate Growth.\r\n   - IMPACT: Without Scalable Solutions, Businesses May Struggle With Performance Issues, High Costs, And The Need For Frequent System Upgrades.\r\n\r\n4. TECH SKILL GAPS\r\n   - CHALLENGE: Finding And Retaining Skilled IT Professionals Can Be Difficult, Especially For Smaller Businesses. A Lack Of In-house Expertise Can Lead To Inefficient Use Of Technology And Increased Reliance On External Support.\r\n   - IMPACT: Tech Skill Gaps Can Result In Suboptimal System Performance, Increased Downtime, And Higher Operational Costs.\r\n\r\n5. DATA MANAGEMENT AND ANALYSIS\r\n   - CHALLENGE: Managing And Analyzing Large Volumes Of Data Can Be Overwhelming. Businesses Often Struggle With Data Accuracy, Real-time Reporting, And Deriving Actionable Insights.\r\n   - IMPACT: Ineffective Data Management Can Lead To Poor Decision-making And Missed Opportunities For Growth.\r\n\r\nHOW OUR PRODUCTs CAN HELP\r\n\r\nOur Products Are Designed With These Challenges In Mind, Offering Solutions That Can Transform Your Business Operations And Address The Tech Issues You Face. Here’s How:\r\n\r\n1. ENHANCED DATA SECURITY\r\n   - SOLUTION: Our Product Includes Advanced Security Features Such As End-to-end Encryption, Multi-factor Authentication, And Real-time Threat Detection. These Features Help Protect Your Data From Breaches And Unauthorized Access.\r\n   - BENEFIT: By Ensuring Robust Data Security, You Can Safeguard Your Business From Cyber Threats And Maintain Customer Trust.\r\n\r\n2. SEAMLESS INTEGRATION\r\n   - SOLUTION: We Provide Tools That Facilitate Easy Integration With Existing Systems And Software. Our Platform Supports A Wide Range Of APIs And Offers Customizable Integration Options.\r\n   - BENEFIT: Streamlining Integration Processes Reduces Operational Disruptions And Enhances Overall Efficiency.\r\n\r\n3. SCALABLE SOLUTIONS\r\n   - SOLUTION: Our Product Is Built To Grow With Your Business. It Offers Flexible Scalability Options, Allowing You To Easily Adjust Resources And Features As Your Needs Evolve.\r\n   - BENEFIT: This Ensures That Your Technology Infrastructure Can Keep Pace With Business Growth Without The Need For Frequent, Costly Upgrades.\r\n\r\n4. USER-FRIENDLY INTERFACE\r\n   - SOLUTION: Designed With Simplicity In Mind, Our Product Features An Intuitive Interface That Reduces The Learning Curve And Minimizes The Need For Specialized IT Skills.\r\n   - BENEFIT: This Allows Your Team To Efficiently Use The Technology, Reducing Dependence On External IT Support And Lowering Overall Operational Costs.\r\n\r\n5. ADVANCED DATA MANAGEMENT AND ANALYTICS\r\n   - SOLUTION: Our Product Offers Powerful Data Management And Analytics Tools That Provide Real-time Insights, Accurate Reporting, And Predictive Analytics Capabilities.\r\n   - BENEFIT: By Improving Data Management And Analysis, You Can Make Informed Decisions, Identify Growth Opportunities, And Drive Strategic Initiatives.\r\n\r\nCONCLUSION\r\n\r\nThe Technological Landscape Is Constantly Evolving, And Businesses Must Adapt To Stay Competitive. By Addressing Common Tech Challenges With Our Product’s Advanced Solutions, You Can Enhance Security, Streamline Operations, And Position Your Business For Long-term Success. Embrace The Future Of Technology With Our Innovative Tools And Experience The Difference They Can Make In Overcoming Your Tech Hurdles.\r\n', '5_tech_challenges_and_how_to_navigate_them.png', '2024-08-02 06:51:05'),
(7, 'HOW CUSTOMIZED SOFTWARE SOLUTIONS CAN TRANSFORM YOUR BUSINESS', 'In Today\'s Fast-paced Digital Landscape, Businesses That Want To Stay Competitive Must Embrace Technology. Whether You\'re Managing A Retail Store, Running A Hotel, Or Operating A Healthcare Facility, The Right Software Solution Can Streamline Operations, Reduce Costs, And Enhance Overall Productivity. At ONOSTAR MEDIA We Specialize In Creating Customized Software Solutions That Cater To The Unique Needs Of Businesses Like Yours.\n\nWHY CUSTOMIZED SOFTWARE?\nEvery Business Is Different, And Off-the-shelf Software Often Lacks The Flexibility To Meet Specific Needs. Customized Software, On The Other Hand, Is Tailored To Fit Your Business Processes Perfectly. Here\'s How Custom Solutions Can Make A Difference:\n\n1. ENHANCED EFFICIENCY: Instead Of Forcing Your Business To Adapt To A Pre-designed System, Customized Software Works In Harmony With Your Existing Processes, Reducing Time Spent On Unnecessary Tasks And Automating Routine Activities.\n  \n2. IMPROVED DATA MANAGEMENT: From Inventory Tracking To Sales Reporting, A Personalized Software Solution Ensures That Your Data Is Organized, Easily Accessible, And Ready To Inform Key Business Decisions. This Leads To Better Control And Accuracy Across Operations.\n  \n3. SCALABILITY: As Your Business Grows, So Do Your Needs. With Custom Software, You\'re Not Limited By The Constraints Of Off-the-shelf Packages. Your Software Evolves As Your Company Does, Making It Easy To Add New Features And Integrate New Technologies.\n  \n4. COST EFFICIENCY: While Customized Software May Require An Initial Investment, It Often Saves Businesses Money In The Long Run. By Eliminating The Need For Unnecessary Features And Minimizing Downtime From Adapting Generic Systems, Businesses Can See A Significant Return On Investment.\n  \n5. COMPETITIVE ADVANTAGE: Custom Solutions Give You An Edge Over Competitors Still Relying On Standard Software. By Building Systems Around Your Unique Strengths, You’re Not Just Running A Business—you’re Running A More Agile, Competitive Operation.\n\nOUR EXPERTISE\nAt ONOSTAR MEDIA We’ve Built A Reputation For Providing Innovative And Reliable Software Solutions Across A Variety Of Industries. Here Are Some Areas We Specialize In:\n\n- INVENTORY AND SALES MANAGEMENT: Stay In Control Of Your Stock Levels And Get Real-time Updates On Your Sales. Perfect For Supermarkets, Pharmacies, And Retail Stores.\n  \n- POINT OF SALE (POS) SYSTEMS: Fast And Reliable POS Systems Designed To Enhance Customer Experience And Optimize Transaction Processes.\n  \n- HOTEL AND HOSPITALITY MANAGEMENT: From Booking To Billing, Our Tailored Solutions Ensure That Your Hotel Runs Smoothly, Giving You More Time To Focus On Guest Satisfaction.\n  \n- HOSPITAL MANAGEMENT SYSTEMS: Streamline Patient Records, Billing, And Appointments With Software Built To Handle The Unique Challenges Of Healthcare Facilities.\n  \n- ACCOUNTING AND ASSET MANAGEMENT: Automate Financial Processes And Track Your Assets With Precision, Ensuring Compliance And Efficiency.\n\nWHY PARTNER WITH ONOSTAR MEDIA?\nWe Understand That Businesses, Especially In Nigeria, Are Looking For Cost-effective Yet Powerful Solutions That Drive Growth. Our Team At ONOSTAR MEDIA Takes A Collaborative Approach, Working Closely With Each Client To Understand Their Needs And Develop Software That Fits Like A Glove. Here’s What Sets Us Apart:\n\n- TAILORED SOLUTIONS: Every Line Of Code We Write Is Designed To Solve Your Specific Challenges.\n  \n- USER-CENTERED DESIGN: We Build Software That’s Intuitive And Easy To Use, Minimizing The Learning Curve For Your Team.\n  \n- ONGOING SUPPORT: We Don’t Just Deliver A Product And Walk Away. Our Team Is Here To Provide Continuous Support And Upgrades As Your Business Evolves.\n\nCONCLUSION: Embrace The Future With ONOSTAR MEDIA\nIn An Ever-changing Business World, Having The Right Software Tools Is Crucial To Staying Ahead. Whether You’re Looking To Streamline Operations, Increase Productivity, Or Gain A Competitive Edge, Our Customized Software Solutions Are Designed To Meet Your Business\'s Unique Needs. AT ONOSTAR MEDIA, We’re Not Just Building Software—we’re Building The Future Of Your Business.\n\nLet Us Help You Transform Your Operations And Achieve New Heights Of Success. CONTACT US TODAY To Discuss How We Can Create A Software Solution Tailored To Your Business.\n', 'onostar2.webp', '2024-10-03 11:24:25'),
(8, 'INTRODUCING DORTHPRO SAAS', '🚀 Exciting News! Dorthpro Is Now A SaaS Platform! 🚀\n\nAfter Months Of Development And Fine-tuning, We Are Thrilled To Announce That Dorthpro—our Powerful Sales &amp; Inventory Management Software—is Now Available As A SaaS Solution!\n\n💡 What Does This Mean For Businesses?\n✅ Access Anytime, Anywhere—fully Cloud-based\n✅ Real-time Sales &amp; Inventory Tracking\n✅ Seamless Automation For Smarter Decision-making\n✅ Scalable For Businesses Of All Sizes\n\nThis Is A Major Step Toward Empowering More Businesses With Efficient Operations And Growth-driven Solutions. I’m Excited For What’s Ahead!\n\n💻 Ready To Get Started? Sign Up Today For Free! 👉 Www.dorthpro.com\n\nWould Love To Hear Your Thoughts! Let’s Innovate Together. 🚀', 'dorthpro_introduction.png', '2025-01-31 05:52:31'),
(9, 'Ennnnn', 'Ljhjgfcghdfh', '8052edb2dcb77957ea26b6ff94cf9c6a.jpg', '2025-07-22 06:42:02');

-- --------------------------------------------------------

--
-- Table structure for table `audit_trail`
--

CREATE TABLE `audit_trail` (
  `audit_id` int(11) NOT NULL,
  `store` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `transaction` varchar(255) NOT NULL,
  `previous_qty` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `posted_by` int(11) NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `audit_trail`
--

INSERT INTO `audit_trail` (`audit_id`, `store`, `item`, `transaction`, `previous_qty`, `quantity`, `posted_by`, `post_date`) VALUES
(2340, 1, 300, 'purchase', 0, 20, 1, '2024-06-05 09:19:11'),
(2341, 1, 301, 'purchase', 0, 24, 1, '2024-06-05 09:19:33'),
(2342, 1, 301, 'sales', 24, 1, 1, '2024-06-05 11:36:01'),
(2343, 1, 301, 'sales', 23, 2, 1, '2024-06-05 11:40:12'),
(2344, 1, 300, 'purchase', 20, 3, 1, '2024-06-05 12:42:08'),
(2345, 1, 301, 'sales', 21, 1, 1, '2024-06-05 15:42:44'),
(2346, 1, 300, 'sales', 23, 1, 1, '2024-06-05 16:18:56'),
(2347, 1, 301, 'sales', 20, 2, 1, '2024-06-07 23:47:23'),
(2348, 1, 301, 'sales', 18, 2, 1, '2024-06-08 00:16:05'),
(2349, 1, 300, 'sales', 22, 1, 1, '2024-06-08 00:16:05'),
(2350, 1, 301, 'sales', 16, 2, 1, '2024-06-08 07:56:44'),
(2351, 1, 302, 'purchase', 0, 23, 1, '2024-06-08 08:16:45'),
(2352, 1, 302, 'sales', 23, 2, 1, '2024-06-08 08:49:49'),
(2353, 1, 300, 'sales', 21, 1, 1, '2024-06-08 17:24:50'),
(2354, 1, 302, 'sales', 21, 2, 1, '2024-06-08 17:24:50'),
(2355, 1, 301, 'sales', 14, 2, 1, '2024-06-08 17:26:04'),
(2356, 1, 302, 'sales', 19, 1, 1, '2024-06-08 17:26:04'),
(2357, 1, 300, 'sales', 20, 2, 1, '2024-06-08 17:26:04'),
(2358, 1, 301, 'sales', 12, 3, 1, '2024-06-08 17:31:57'),
(2359, 1, 300, 'sales', 18, 2, 1, '2024-06-08 17:31:57'),
(2360, 1, 300, 'sales', 16, 2, 1, '2024-06-08 17:33:18'),
(2361, 1, 302, 'sales', 18, 3, 1, '2024-06-08 17:33:18'),
(2362, 1, 300, 'sales', 14, 2, 1, '2024-06-08 17:33:58'),
(2363, 1, 301, 'sales', 9, 4, 1, '2024-06-08 17:33:58');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `bank_id` int(11) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`bank_id`, `bank`, `account_number`) VALUES
(1, 'FCMB', '9844408013');

-- --------------------------------------------------------

--
-- Table structure for table `bonus`
--

CREATE TABLE `bonus` (
  `bonus_id` int(11) NOT NULL,
  `customer` int(11) NOT NULL,
  `sales_rep` int(11) NOT NULL,
  `invoice` varchar(50) NOT NULL,
  `post_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bonus`
--

INSERT INTO `bonus` (`bonus_id`, `customer`, `sales_rep`, `invoice`, `post_date`) VALUES
(1, 13, 18, 'RT1080624058276118', '2024-06-08 17:31:57'),
(2, 15, 18, 'RT1080624053277718', '2024-06-08 17:33:58');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `department` varchar(255) NOT NULL,
  `category` varchar(1024) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `department`, `category`, `price`) VALUES
(1, '1', 'Pharmacy', 0),
(12, '1', 'Anti-biotics', 0),
(13, '1', 'Anti-malaria', 0);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `company_id` int(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`company_id`, `company`, `logo`, `date_created`) VALUES
(1, 'Onostar Media', 'new_logo1a-removebg-preview.png', '2025-06-01 14:46:39');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `phone_numbers` varchar(20) NOT NULL,
  `customer_address` varchar(100) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `wallet_balance` int(11) NOT NULL,
  `product` varchar(255) NOT NULL,
  `reg_number` int(11) NOT NULL,
  `store` int(11) NOT NULL,
  `reg_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer`, `phone_numbers`, `customer_address`, `customer_email`, `wallet_balance`, `product`, `reg_number`, `store`, `reg_date`) VALUES
(19, 'Medfill Pharmacy &amp; Stores', '08037889178, 0703115', '1 Emmanuel Street, Arab Road, Kubwa Fct', '', 0, 'Sales and Inentory', 2024110412, 1, '2024-11-19'),
(20, 'G-reality Medicine &amp; Stores', '07030662253', '4 Welfare Road, Upper Sakponba, Benin City', 'nil', 0, 'Sales &amp; Inventory', 2024114907, 0, '2024-11-19'),
(21, 'Cure Corner Pharmacy', '08031146327, 0703208', '162 Okporo Rd, Rumudara', 'curecornerpharma12@gmail.com ', 0, 'Sales &amp; Inventory', 2024116002, 0, '2024-11-25'),
(22, 'Renaissance Skin Care', '0810 763 7158, 09035', 'Opposite Immigration Office, Oregbeni Market, Ramat Park, Benin', 'nil', 0, 'Sales &amp; Inventory', 2024119318, 0, '2024-11-26'),
(23, 'Marzbee Lounge Hotel', '+44 7479 228260', '58 Lamina Ganiyu Street, Alakuko, Lagos State', 'nil', 0, 'Hotel Management', 2024116679, 0, '2024-11-19'),
(24, 'Wamok Pharmacy', '07078419008', 'SHOP 21, ILORIN SOLIDARITY SHOPPING COMPLEX,  MANDATE  MARKET ROAD, OFF ADEWOLE , ILORIN', 'nil', 0, 'Sales And Inventory', 2025015375, 0, '2025-01-10');

-- --------------------------------------------------------

--
-- Table structure for table `customer_trail`
--

CREATE TABLE `customer_trail` (
  `id` int(11) NOT NULL,
  `customer` int(11) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `amount` int(11) NOT NULL,
  `store` int(11) NOT NULL,
  `posted_by` int(11) NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_trail`
--

INSERT INTO `customer_trail` (`id`, `customer`, `description`, `amount`, `store`, `posted_by`, `post_date`) VALUES
(1, 2, 'Credit sales', 13000, 2, 3, '2023-09-24 08:10:06'),
(2, 3, 'Credit sales', 293000, 2, 3, '2023-09-25 11:21:18'),
(3, 2, 'Credit sales', 42000, 2, 3, '2023-09-25 11:36:53'),
(4, 4, 'Credit sales', 58800, 2, 3, '2023-09-25 11:41:53'),
(5, 2, 'Credit sales', 77600, 2, 3, '2023-09-29 08:26:40'),
(6, 7, 'Credit sales', 408100, 1, 9, '2023-09-30 09:43:51'),
(7, 4, 'Credit sales', 143600, 2, 3, '2023-09-30 12:36:08'),
(8, 2, 'Credit sales', 44000, 2, 3, '2023-09-30 13:23:26'),
(9, 11, 'Credit sales', 929750, 2, 2, '2023-10-02 12:38:55'),
(10, 3, 'Deposit', 176600, 2, 2, '2023-10-02 12:53:38'),
(11, 3, 'Deposit', 293000, 2, 2, '2023-10-02 12:58:26'),
(12, 3, 'Debt payment', 293000, 2, 2, '2023-10-02 12:59:09'),
(13, 7, 'Deposit', 208000, 2, 2, '2023-10-02 13:01:01'),
(14, 12, 'Credit sales', 39925, 7, 1, '2024-02-27 23:21:20'),
(15, 12, 'Credit sales', 2475, 7, 1, '2024-03-08 16:29:19'),
(16, 12, 'Credit sales', 1084, 7, 1, '2024-03-11 20:03:44'),
(17, 12, 'Credit sales', 769, 7, 1, '2024-03-16 10:44:13'),
(18, 12, 'Credit sales', 384, 7, 1, '2024-04-06 11:52:57'),
(19, 12, 'Credit sales', 384, 7, 1, '2024-04-06 11:53:29'),
(20, 12, 'Credit sales', 1284, 7, 1, '2024-04-10 22:15:21'),
(21, 1, 'Credit sales', 2000, 1, 1, '2024-04-10 22:23:09'),
(22, 1, 'Credit sales', 2800, 1, 1, '2024-04-10 22:26:51');

-- --------------------------------------------------------

--
-- Table structure for table `debtors`
--

CREATE TABLE `debtors` (
  `debtor_id` int(11) NOT NULL,
  `customer` int(11) NOT NULL,
  `invoice` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `store` int(11) NOT NULL,
  `debt_status` int(11) NOT NULL,
  `posted_by` int(11) NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `debtors`
--

INSERT INTO `debtors` (`debtor_id`, `customer`, `invoice`, `amount`, `store`, `debt_status`, `posted_by`, `post_date`) VALUES
(1, 2, 'WS224092312227363', 13000, 2, 0, 3, '2023-09-24 08:10:06'),
(2, 3, 'WS225092304605913', 293000, 2, 1, 3, '2023-09-25 11:21:18'),
(3, 2, 'WS225092304758813', 42000, 2, 0, 3, '2023-09-25 11:36:53'),
(4, 4, 'WS225092304861343', 58800, 2, 0, 3, '2023-09-25 11:41:53'),
(5, 2, 'WS229092301426573', 77600, 2, 0, 3, '2023-09-29 08:26:40'),
(6, 7, 'WS130092302012019', 408100, 1, 0, 9, '2023-09-30 09:43:51'),
(7, 4, 'WS230092305528543', 143600, 2, 0, 3, '2023-09-30 12:36:08'),
(8, 2, 'WS230092306503413', 44000, 2, 0, 3, '2023-09-30 13:23:26'),
(9, 11, 'WS202102304264562', 929750, 2, 0, 2, '2023-10-02 12:38:55'),
(10, 12, 'WS727022410692661', 39925, 7, 0, 1, '2024-02-27 23:21:20'),
(11, 12, 'SR708032404808071', 2475, 7, 0, 1, '2024-03-08 16:29:19'),
(12, 12, 'SR711032408485381', 1084, 7, 0, 1, '2024-03-11 20:03:44'),
(13, 12, 'SR716032410887171', 769, 7, 0, 1, '2024-03-16 10:44:13'),
(14, 12, 'SR706042411718821', 384, 7, 0, 1, '2024-04-06 11:52:57'),
(15, 12, 'SR706042411558821', 384, 7, 0, 1, '2024-04-06 11:53:29'),
(16, 12, 'SR710042410625271', 1284, 7, 0, 1, '2024-04-10 22:15:21'),
(17, 1, 'WS110042410351081', 2000, 1, 0, 1, '2024-04-10 22:23:09'),
(18, 1, 'WS110042410256851', 2800, 1, 0, 1, '2024-04-10 22:26:51');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` int(11) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `department`) VALUES
(1, 'Pharmacy');

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `deposit_id` int(11) NOT NULL,
  `store` int(11) NOT NULL,
  `customer` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_mode` varchar(50) NOT NULL,
  `invoice` varchar(50) NOT NULL,
  `details` varchar(255) NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp(),
  `posted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `expense_id` int(11) NOT NULL,
  `store` int(11) NOT NULL,
  `posted_by` int(11) NOT NULL,
  `expense_head` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `details` text NOT NULL,
  `expense_date` datetime NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expense_heads`
--

CREATE TABLE `expense_heads` (
  `exp_head_id` int(11) NOT NULL,
  `expense_head` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expense_heads`
--

INSERT INTO `expense_heads` (`exp_head_id`, `expense_head`) VALUES
(1, 'Utility'),
(2, 'Fuel &amp; Diesel');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inventory_id` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `store` int(11) NOT NULL,
  `cost_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `batch_number` varchar(20) NOT NULL,
  `expiration_date` date NOT NULL,
  `reorder_level` int(11) NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inventory_id`, `item`, `store`, `cost_price`, `quantity`, `batch_number`, `expiration_date`, `reorder_level`, `post_date`) VALUES
(534, 300, 1, 200, 12, '', '2027-12-30', 10, '2024-06-05 09:19:11'),
(535, 301, 1, 0, 5, '', '2028-12-30', 10, '2024-06-05 09:19:33'),
(536, 302, 1, 1600, 15, '', '2027-05-12', 10, '2024-06-08 08:16:45');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `department` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `cost_price` float NOT NULL,
  `sales_price` float NOT NULL,
  `pack_size` int(11) NOT NULL,
  `pack_price` int(11) NOT NULL,
  `wholesale` int(11) NOT NULL,
  `wholesale_pack` int(11) NOT NULL,
  `wholesale_cost` float NOT NULL,
  `carton_role` float NOT NULL,
  `carton_size` int(11) NOT NULL,
  `markup` float NOT NULL,
  `reorder_level` int(11) NOT NULL,
  `barcode` varchar(255) NOT NULL,
  `photo` varchar(1024) NOT NULL,
  `photo2` varchar(1024) NOT NULL,
  `photo3` varchar(1024) NOT NULL,
  `description` text NOT NULL,
  `dosage` text NOT NULL,
  `commission` float NOT NULL,
  `item_status` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `department`, `category`, `item_name`, `cost_price`, `sales_price`, `pack_size`, `pack_price`, `wholesale`, `wholesale_pack`, `wholesale_cost`, `carton_role`, `carton_size`, `markup`, `reorder_level`, `barcode`, `photo`, `photo2`, `photo3`, `description`, `dosage`, `commission`, `item_status`, `date_created`) VALUES
(300, '1', 1, 'Active Vitafizz', 200, 300, 0, 0, 0, 0, 0, 0, 0, 0, 10, '0', 'Business-Automation-Wheel-1.png', '', '', 'Vitamin C Tabets For Extra Energey', 'Jkhkj Hkkljlnn,n', 3.5, 0, '2024-06-04 16:11:15'),
(301, '1', 1, 'Ucom Tablets', 0, 500, 0, 0, 0, 0, 0, 0, 0, 0, 10, '0', 'Customer-Experience.jpg', 'ban02.jpg', 'b1.jpg', 'This Is A Blah Blah Blah Blah', '', 2.5, 0, '2024-06-04 16:36:23'),
(302, '1', 13, 'Amartem Forte', 1600, 2500, 0, 0, 0, 0, 0, 0, 0, 0, 10, '0', 'armatem.webp', 'amatem2.jpg', 'amatem3.jpeg', 'Amartem Forte Is A Blah Blah', '', 10, 0, '2024-06-05 12:49:15'),
(303, '1', 13, 'Mtn 4g Mifi', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, '0', 'app1.png', 'clinical1-2.png', 'chef pee.png', 'This Is Used To Access The Internet', 'Enter Sim Card, Recharge It And Start Browsing The Internet', 0, 0, '2024-06-08 15:14:40');

-- --------------------------------------------------------

--
-- Table structure for table `item_transfers`
--

CREATE TABLE `item_transfers` (
  `transfer_id` int(11) NOT NULL,
  `item_from` int(11) NOT NULL,
  `item_to` int(11) NOT NULL,
  `removed_qty` int(11) NOT NULL,
  `added_qty` int(11) NOT NULL,
  `store` int(11) NOT NULL,
  `posted_by` int(11) NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `menu_id` int(11) NOT NULL,
  `menu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`menu_id`, `menu`) VALUES
(1, 'Admin menu'),
(2, 'Sales menu'),
(3, 'Inventory'),
(4, 'Financial mgt'),
(5, 'Reports'),
(6, 'Financial reports'),
(7, 'Production'),
(8, 'Articles');

-- --------------------------------------------------------

--
-- Table structure for table `monthly_target`
--

CREATE TABLE `monthly_target` (
  `target_id` int(11) NOT NULL,
  `sales_rep` int(11) NOT NULL,
  `month` date DEFAULT NULL,
  `amount` float NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monthly_target`
--

INSERT INTO `monthly_target` (`target_id`, `sales_rep`, `month`, `amount`, `post_date`) VALUES
(5, 18, '2024-06-30', 500000, '2024-06-07 20:44:06');

-- --------------------------------------------------------

--
-- Table structure for table `multiple_payments`
--

CREATE TABLE `multiple_payments` (
  `id` int(11) NOT NULL,
  `store` int(11) NOT NULL,
  `invoice` varchar(255) NOT NULL,
  `cash` int(11) NOT NULL,
  `transfer` int(11) NOT NULL,
  `pos` int(11) NOT NULL,
  `bank` int(11) NOT NULL,
  `posted_by` int(11) NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `other_payments`
--

CREATE TABLE `other_payments` (
  `payment_id` int(11) NOT NULL,
  `customer` int(11) NOT NULL,
  `invoice` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_mode` varchar(20) NOT NULL,
  `store` int(11) NOT NULL,
  `posted_by` int(11) NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `other_payments`
--

INSERT INTO `other_payments` (`payment_id`, `customer`, `invoice`, `amount`, `payment_mode`, `store`, `posted_by`, `post_date`) VALUES
(1, 3, 'WS225092304605913', 293000, 'Wallet', 2, 2, '2023-10-02 12:59:09');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `sales_type` varchar(11) NOT NULL,
  `customer` int(11) NOT NULL,
  `amount_due` int(20) NOT NULL,
  `store` int(11) NOT NULL,
  `amount_paid` int(11) NOT NULL,
  `discount` int(20) NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `bank` int(11) NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp(),
  `sold_by` int(11) NOT NULL,
  `posted_by` int(11) NOT NULL,
  `invoice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `sales_type`, `customer`, `amount_due`, `store`, `amount_paid`, `discount`, `payment_mode`, `bank`, `post_date`, `sold_by`, `posted_by`, `invoice`) VALUES
(171, 'Retail', 0, 500, 1, 500, 0, 'Cash', 0, '2024-06-05 11:36:01', 0, 1, 'RT105062410073821'),
(172, 'Retail', 0, 1000, 1, 1000, 0, 'Cash', 0, '2024-06-05 11:40:11', 0, 1, 'RT105062409056681'),
(173, 'Retail', 0, 500, 1, 500, 0, 'Cash', 0, '2024-06-05 15:42:44', 18, 1, 'RT1050624036120418'),
(174, 'Retail', 0, 300, 1, 300, 0, 'Cash', 0, '2024-06-05 16:18:56', 18, 1, 'RT1050624042435218'),
(175, 'Retail', 0, 1000, 1, 1000, 0, 'Cash', 0, '2024-06-07 23:47:23', 1, 1, 'RT107062411674021'),
(176, 'Retail', 0, 1300, 1, 1300, 0, 'Cash', 0, '2024-06-08 00:16:05', 1, 1, 'RT108062412781931'),
(177, 'Retail', 12, 1000, 1, 1000, 0, 'Cash', 0, '2024-06-08 07:56:44', 18, 1, 'RT1080624072727118'),
(178, 'Retail', 13, 5000, 1, 5000, 0, 'Cash', 0, '2024-06-08 08:49:49', 1, 1, 'RT108062408342361'),
(179, 'Retail', 15, 5300, 1, 5300, 0, 'Cash', 0, '2024-06-08 17:24:50', 18, 1, 'RT1080624052354218'),
(180, 'Retail', 15, 4100, 1, 4100, 0, 'Cash', 0, '2024-06-08 17:26:04', 18, 1, 'RT1080624057174318'),
(181, 'Retail', 13, 2100, 1, 2100, 0, 'Cash', 0, '2024-06-08 17:31:57', 18, 1, 'RT1080624058276118'),
(182, 'Retail', 13, 8100, 1, 8100, 0, 'Cash', 0, '2024-06-08 17:33:18', 18, 1, 'RT1080624058469318'),
(183, 'Retail', 15, 2600, 1, 2600, 0, 'Cash', 0, '2024-06-08 17:33:58', 18, 1, 'RT1080624053277718');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `purchase_id` int(11) NOT NULL,
  `store` int(11) NOT NULL,
  `invoice` varchar(255) NOT NULL,
  `item` int(11) NOT NULL,
  `cost_price` int(255) NOT NULL,
  `sales_price` int(255) NOT NULL,
  `vendor` int(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `expiration_date` date NOT NULL,
  `posted_by` int(11) NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`purchase_id`, `store`, `invoice`, `item`, `cost_price`, `sales_price`, `vendor`, `quantity`, `expiration_date`, `posted_by`, `post_date`) VALUES
(534, 1, '87897', 300, 0, 300, 1, 20, '2027-12-30', 1, '2024-06-05 09:19:11'),
(535, 1, '87897', 301, 0, 500, 1, 24, '2028-12-30', 1, '2024-06-05 09:19:33'),
(536, 1, '78678687', 300, 200, 300, 1, 3, '2027-12-30', 1, '2024-06-05 12:42:08'),
(537, 1, '87686', 302, 1600, 2500, 1, 23, '2027-05-12', 1, '2024-06-08 08:16:45');

-- --------------------------------------------------------

--
-- Table structure for table `remove_items`
--

CREATE TABLE `remove_items` (
  `remove_id` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `store` int(11) NOT NULL,
  `previous_qty` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `removed_by` int(11) NOT NULL,
  `removed_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `remove_reasons`
--

CREATE TABLE `remove_reasons` (
  `remove_id` int(11) NOT NULL,
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `remove_reasons`
--

INSERT INTO `remove_reasons` (`remove_id`, `reason`) VALUES
(1, 'Expiration'),
(2, 'Damages'),
(3, 'Transfer');

-- --------------------------------------------------------

--
-- Table structure for table `rights`
--

CREATE TABLE `rights` (
  `right_id` int(11) NOT NULL,
  `menu` int(11) NOT NULL,
  `sub_menu` int(11) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rights`
--

INSERT INTO `rights` (`right_id`, `menu`, `sub_menu`, `user`) VALUES
(168, 6, 102, 18),
(169, 6, 101, 18),
(170, 2, 13, 18);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `store` int(11) NOT NULL,
  `sales_type` varchar(11) NOT NULL,
  `customer` int(11) NOT NULL,
  `invoice` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `markup` float NOT NULL,
  `price` float NOT NULL,
  `discount` int(11) NOT NULL,
  `total_amount` float NOT NULL,
  `cost` float NOT NULL,
  `commission` float NOT NULL,
  `posted_by` int(11) NOT NULL,
  `sales_status` int(11) NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_id`, `item`, `store`, `sales_type`, `customer`, `invoice`, `quantity`, `markup`, `price`, `discount`, `total_amount`, `cost`, `commission`, `posted_by`, `sales_status`, `post_date`) VALUES
(1192, 301, 1, 'Retail', 0, 'RT105062409056681', 2, 0, 500, 0, 1000, 0, 0, 1, 2, '2024-06-05 09:37:06'),
(1194, 301, 1, 'Retail', 0, 'RT105062410738961', 1, 0, 500, 0, 500, 0, 0, 1, 0, '2024-06-05 10:01:00'),
(1195, 300, 1, 'Retail', 0, 'RT105062410738961', 1, 0, 300, 0, 300, 0, 0, 1, 0, '2024-06-05 10:02:00'),
(1196, 301, 1, 'Retail', 0, 'RT105062410073821', 1, 0, 500, 0, 500, 0, 0, 1, 2, '2024-06-05 10:28:00'),
(1197, 301, 1, 'Retail', 0, 'RT105062401274731', 2, 0, 500, 0, 1000, 0, 2.5, 1, 1, '2024-06-05 13:40:00'),
(1198, 301, 1, 'Retail', 0, 'RT1050624036120418', 1, 0, 500, 0, 500, 0, 2.5, 18, 2, '2024-06-05 15:41:00'),
(1199, 300, 1, 'Retail', 0, 'RT1050624036318118', 2, 0, 300, 0, 600, 400, 3.5, 18, 1, '2024-06-05 15:41:00'),
(1200, 300, 1, 'Retail', 0, 'RT1050624042435218', 1, 0, 300, 0, 300, 200, 10.5, 18, 2, '2024-06-05 16:18:00'),
(1201, 301, 1, 'Retail', 0, 'RT1050624047428918', 4, 0, 500, 0, 2000, 0, 50, 18, 1, '2024-06-05 16:39:00'),
(1202, 301, 1, 'Retail', 0, 'RT1060624097610018', 2, 0, 500, 0, 1000, 0, 25, 18, 1, '2024-06-06 09:00:00'),
(1203, 300, 1, 'Retail', 0, 'RT1060624091235118', 1, 0, 300, 0, 300, 200, 10.5, 18, 0, '2024-06-06 09:00:00'),
(1204, 301, 1, 'Retail', 0, 'RT107062411674021', 2, 0, 500, 0, 1000, 0, 25, 1, 2, '2024-06-07 23:46:00'),
(1205, 301, 1, 'Retail', 0, 'RT108062412781931', 2, 0, 500, 0, 1000, 0, 25, 1, 2, '2024-06-08 00:15:00'),
(1206, 300, 1, 'Retail', 0, 'RT108062412781931', 1, 0, 300, 0, 300, 200, 10.5, 1, 2, '2024-06-08 00:15:00'),
(1207, 301, 1, 'Retail', 12, 'RT1080624072727118', 2, 0, 500, 0, 1000, 0, 25, 18, 2, '2024-06-08 07:44:00'),
(1208, 302, 1, 'Retail', 13, 'RT108062408342361', 2, 0, 2500, 0, 5000, 3200, 500, 1, 2, '2024-06-08 08:18:00'),
(1209, 300, 1, 'Retail', 15, 'RT1080624052354218', 1, 0, 300, 0, 300, 200, 10.5, 18, 2, '2024-06-08 17:24:00'),
(1210, 302, 1, 'Retail', 15, 'RT1080624052354218', 2, 0, 2500, 0, 5000, 3200, 500, 18, 2, '2024-06-08 17:24:00'),
(1211, 301, 1, 'Retail', 15, 'RT1080624057174318', 2, 0, 500, 0, 1000, 0, 25, 18, 2, '2024-06-08 17:25:00'),
(1212, 302, 1, 'Retail', 15, 'RT1080624057174318', 1, 0, 2500, 0, 2500, 1600, 250, 18, 2, '2024-06-08 17:25:00'),
(1213, 300, 1, 'Retail', 15, 'RT1080624057174318', 2, 0, 300, 0, 600, 400, 21, 18, 2, '2024-06-08 17:25:00'),
(1214, 301, 1, 'Retail', 13, 'RT1080624058276118', 3, 0, 500, 0, 1500, 0, 37.5, 18, 2, '2024-06-08 17:31:00'),
(1215, 300, 1, 'Retail', 13, 'RT1080624058276118', 2, 0, 300, 0, 600, 400, 21, 18, 2, '2024-06-08 17:31:00'),
(1216, 300, 1, 'Retail', 13, 'RT108062405326101', 1, 0, 300, 0, 300, 200, 10.5, 1, 0, '2024-06-08 17:32:00'),
(1217, 300, 1, 'Retail', 13, 'RT1080624058469318', 2, 0, 300, 0, 600, 400, 21, 18, 2, '2024-06-08 17:32:00'),
(1218, 302, 1, 'Retail', 13, 'RT1080624058469318', 3, 0, 2500, 0, 7500, 4800, 750, 18, 2, '2024-06-08 17:33:00'),
(1219, 300, 1, 'Retail', 15, 'RT1080624053277718', 2, 0, 300, 0, 600, 400, 21, 18, 2, '2024-06-08 17:33:00'),
(1220, 301, 1, 'Retail', 15, 'RT1080624053277718', 4, 0, 500, 0, 2000, 0, 50, 18, 2, '2024-06-08 17:33:00');

-- --------------------------------------------------------

--
-- Table structure for table `sales_returns`
--

CREATE TABLE `sales_returns` (
  `return_id` int(11) NOT NULL,
  `invoice` varchar(255) NOT NULL,
  `store` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `reason` varchar(1024) NOT NULL,
  `returned_by` int(11) NOT NULL,
  `return_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stock_adjustments`
--

CREATE TABLE `stock_adjustments` (
  `adjust_id` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `store` int(11) NOT NULL,
  `adjusted_by` int(11) NOT NULL,
  `previous_qty` int(11) NOT NULL,
  `new_qty` int(11) NOT NULL,
  `adjust_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `store_id` int(11) NOT NULL,
  `company` int(11) NOT NULL,
  `store` varchar(124) NOT NULL,
  `store_address` varchar(255) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`store_id`, `company`, `store`, `store_address`, `phone_number`, `date_created`) VALUES
(1, 1, 'Upper Sakponba', '8, Upper Sakponba Road, Opp. Nomayo Junction, Benin city', '07064204157', '2023-09-15 15:36:25');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menus`
--

CREATE TABLE `sub_menus` (
  `sub_menu_id` int(11) NOT NULL,
  `menu` int(11) NOT NULL,
  `sub_menu` varchar(255) NOT NULL,
  `url` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_menus`
--

INSERT INTO `sub_menus` (`sub_menu_id`, `menu`, `sub_menu`, `url`, `status`) VALUES
(1, 1, 'Add Users', 'add_user', 0),
(2, 1, 'Disable User', 'disable_user', 0),
(3, 1, 'Activate User', 'activate_user', 0),
(4, 1, 'Reset Password', 'reset_password', 0),
(5, 1, 'Add Category', 'add_department', 0),
(6, 1, 'Add Sub-category', 'add_category', 0),
(7, 1, 'Add Items', 'add_item', 0),
(8, 1, 'Modify Item Details', 'modify_item', 0),
(9, 1, 'Add Bank', 'add_bank', 0),
(10, 1, 'Manage Item Prices', 'item_price', 0),
(11, 1, 'Add Remove Reasons', 'add_remove_reasons', 0),
(12, 2, 'Direct Sales', 'direct_sales', 0),
(13, 2, 'Sales Order', 'wholesale', 0),
(14, 2, 'Post Sales Order', 'post_sales_order', 1),
(15, 2, 'Sales Return', 'sales_return', 0),
(16, 2, 'Reprint Receipt', 'print_receipt', 0),
(17, 3, 'Set Reorder Level', 'reorder_level', 0),
(18, 3, 'Stock Balance', 'stock_balance', 0),
(19, 3, 'Stockin Purchase', 'stockin_purchase', 0),
(20, 3, 'Add Supplier', 'add_vendor', 0),
(21, 3, 'Adjust Quantity', 'stock_adjustment', 0),
(22, 3, 'Remove Item', 'remove_item', 0),
(23, 3, 'Adjust Expiration', 'adjust_expiration', 0),
(24, 4, 'Add Expense Head', 'add_exp_head', 0),
(25, 4, 'Post Expense', 'post_expense', 0),
(26, 5, 'Item List', 'item_list', 0),
(27, 5, 'Bank List', 'bank_list', 0),
(28, 5, 'List Of Suppliers', 'vendor_list', 0),
(29, 5, 'Sales Return Report', 'sales_return_report', 0),
(30, 5, 'Stock Adjustment Report', 'stock_adjustment_report', 0),
(31, 5, 'Item Removed Report', 'item_removed_report', 0),
(33, 5, 'Purchase Reports', 'purchase_reports', 0),
(34, 5, 'Out Of Stock', 'out_of_stock', 0),
(35, 5, 'Soon To Expire', 'expire_soon', 0),
(36, 5, 'Expired Items', 'expired_items', 0),
(37, 5, 'Reached Reorder Level', 'reached_reorder', 0),
(38, 5, 'Item History', 'item_history', 0),
(39, 5, 'Purchase By Item', 'purchase_by_item', 0),
(40, 5, 'Purchase Per Vendor', 'purchase_per_vendor', 0),
(41, 6, 'Revenue By Invoice', 'revenue_report', 0),
(42, 6, 'Cash Sales List', 'cash_list', 0),
(43, 6, 'POS Sales List', 'pos_list', 0),
(44, 6, 'Transfer Sales List', 'transfer_list', 0),
(45, 6, 'Cashier Report', 'cashier_report', 0),
(46, 6, 'Revenue By Category', 'revenue_by_category', 0),
(47, 6, 'Profit And Loss Statement', 'profit_and_loss', 0),
(48, 6, 'Expense Report', 'expense_report', 0),
(49, 5, 'Highest Selling Items', 'highest_selling', 0),
(50, 5, 'Fast Selling Items', 'fast_selling', 0),
(51, 1, 'Change Category', 'change_category', 0),
(52, 1, 'Update Item Barcode', 'update_barcode', 0),
(53, 3, 'Transfer Items', 'transfer_item', 0),
(54, 3, 'Pending Transfer', 'pending_transfer', 0),
(55, 3, 'Accept Items', 'accept_items', 0),
(56, 3, 'Returned Transfer', 'returned_transfer', 0),
(57, 5, 'Transferred Items Report', 'transfer_report', 0),
(58, 5, 'Accept Items Report', 'accept_report', 0),
(59, 3, 'All Store Balance', 'all_store_balance', 0),
(60, 2, 'Wholesale', 'wholesale', 0),
(61, 2, 'Wholesale Order', 'wholesale_order', 1),
(62, 1, 'Add Customer', 'add_customer', 0),
(63, 5, 'Customer List', 'customer_list', 0),
(64, 6, 'Retail Sales', 'retail_sales', 0),
(65, 6, 'Wholesale Report', 'wholesale_report', 0),
(66, 6, 'Customer Statement', 'customer_statement', 0),
(67, 6, 'Credit Sales List', 'credit_sales_list', 0),
(68, 6, 'Debtors Report', 'debtors_list', 0),
(69, 4, 'Pay Debt', 'pay_debt', 0),
(70, 6, 'Debt Payment Report', 'debt_payment_report', 0),
(71, 1, 'Add Menu', 'add_menu', 1),
(72, 1, 'Add Sub-menu', 'add_sub_menu', 1),
(73, 1, 'Edit Sub Menu', 'edit_sub_menu', 1),
(74, 1, 'Manage Profile', 'manage_profile', 1),
(75, 1, 'Add Store', 'add_store', 1),
(76, 1, 'Update Store Details', 'update_store', 0),
(77, 1, 'Add User Rights', 'add_rights', 1),
(78, 1, 'Delete Rights', 'delete_right', 0),
(79, 1, 'Edit Customer Info', 'edit_customer_info', 0),
(80, 4, 'Fund Wallet', 'fund_wallet', 0),
(81, 4, 'Reverse Deposit', 'reverse_deposit', 0),
(82, 1, 'Adjust Expiration', 'adjust_expiration', 0),
(83, 3, 'Transfer Qty Btw Items', 'transfer_qty', 1),
(85, 5, 'List Of Users', 'user_list', 0),
(86, 3, 'Reprint Transfer Receipt', 'reprint_transfer', 0),
(87, 1, 'Give Rights', 'give_user_right', 0),
(88, 7, 'Receive Raw Materials', 'stockin_raw_materials', 0),
(89, 1, 'Manage Mark-up', 'manage_markup', 0),
(90, 2, 'Rep Sales', 'rep_sales', 0),
(91, 3, 'Receive Goods', 'receive_goods', 0),
(92, 1, 'Edit Suplier Info', 'edit_supplier_info', 0),
(93, 6, 'Sales Report', 'all_rep_sales', 0),
(94, 6, 'Sales Rep Report', 'rep_report', 0),
(95, 6, 'Sales Rep Statement', 'sales_rep_statement', 0),
(96, 5, 'Sales Rep List', 'sales_rep_list', 0),
(97, 1, 'Monthly Target', 'monthly_target', 0),
(98, 6, 'Item Revenue', 'revenue_by_item', 0),
(99, 6, 'Revenue Report', 'sales_report', 0),
(100, 6, 'Monthly Revenue', 'monthly_revenue', 0),
(101, 6, 'My Sales Report', 'sales_rep_report', 0),
(102, 6, 'My Monthly Revenue', 'rep_monthly_revenue', 0),
(103, 6, 'Sales Rep Bonus', 'sales_rep_bonus', 0),
(104, 8, 'New Article', 'new_article', 0),
(105, 8, 'All Articles', 'articles', 0);

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `transfer_id` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `from_store` int(11) NOT NULL,
  `to_store` int(11) NOT NULL,
  `invoice` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cost_price` int(11) NOT NULL,
  `sales_price` int(11) NOT NULL,
  `expiration` date NOT NULL,
  `transfer_status` int(11) NOT NULL,
  `posted_by` int(11) NOT NULL,
  `accept_by` int(11) NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(1024) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `home_address` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `user_password` varchar(1024) NOT NULL,
  `status` int(11) NOT NULL,
  `store` int(11) NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `username`, `phone`, `home_address`, `email_address`, `user_role`, `user_password`, `status`, `store`, `reg_date`) VALUES
(1, 'Administrator', 'Sysadmin', '', '', '', 'Admin', '$2y$10$dcUrnR/.PvfK7XeYcP60hOyW2qnPSSvEq/Wxee6lv5DETW8pbGXYu', 0, 1, '2022-09-27 13:47:21'),
(18, 'Kelly Ikpefua', 'Onostar', '', '', '', 'Sales Rep', '$2y$10$dU3nP.iMwSvMh.sJ/hOPdOQiHs5mPKgWokduaW4Kzm3.U5YmXAZmK', 0, 1, '2024-06-05 14:30:26');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `vendor_id` int(11) NOT NULL,
  `vendor` varchar(1024) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`vendor_id`, `vendor`, `contact_person`, `phone`, `email_address`, `created_date`) VALUES
(1, 'Initial Stocking Item', 'Initial Stock', '090909009', 'nil', '2024-06-04 03:10:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admissions`
--
ALTER TABLE `admissions`
  ADD PRIMARY KEY (`admission_id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `audit_trail`
--
ALTER TABLE `audit_trail`
  ADD PRIMARY KEY (`audit_id`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `bonus`
--
ALTER TABLE `bonus`
  ADD PRIMARY KEY (`bonus_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_trail`
--
ALTER TABLE `customer_trail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `debtors`
--
ALTER TABLE `debtors`
  ADD PRIMARY KEY (`debtor_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`deposit_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`expense_id`);

--
-- Indexes for table `expense_heads`
--
ALTER TABLE `expense_heads`
  ADD PRIMARY KEY (`exp_head_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventory_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `item_transfers`
--
ALTER TABLE `item_transfers`
  ADD PRIMARY KEY (`transfer_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `monthly_target`
--
ALTER TABLE `monthly_target`
  ADD PRIMARY KEY (`target_id`);

--
-- Indexes for table `multiple_payments`
--
ALTER TABLE `multiple_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_payments`
--
ALTER TABLE `other_payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `remove_items`
--
ALTER TABLE `remove_items`
  ADD PRIMARY KEY (`remove_id`);

--
-- Indexes for table `remove_reasons`
--
ALTER TABLE `remove_reasons`
  ADD PRIMARY KEY (`remove_id`);

--
-- Indexes for table `rights`
--
ALTER TABLE `rights`
  ADD PRIMARY KEY (`right_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`);

--
-- Indexes for table `sales_returns`
--
ALTER TABLE `sales_returns`
  ADD PRIMARY KEY (`return_id`);

--
-- Indexes for table `stock_adjustments`
--
ALTER TABLE `stock_adjustments`
  ADD PRIMARY KEY (`adjust_id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`store_id`);

--
-- Indexes for table `sub_menus`
--
ALTER TABLE `sub_menus`
  ADD PRIMARY KEY (`sub_menu_id`);

--
-- Indexes for table `transfers`
--
ALTER TABLE `transfers`
  ADD PRIMARY KEY (`transfer_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admissions`
--
ALTER TABLE `admissions`
  MODIFY `admission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `audit_trail`
--
ALTER TABLE `audit_trail`
  MODIFY `audit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2364;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bonus`
--
ALTER TABLE `bonus`
  MODIFY `bonus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `customer_trail`
--
ALTER TABLE `customer_trail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `debtors`
--
ALTER TABLE `debtors`
  MODIFY `debtor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `deposit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `expense_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `expense_heads`
--
ALTER TABLE `expense_heads`
  MODIFY `exp_head_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inventory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=537;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=304;

--
-- AUTO_INCREMENT for table `item_transfers`
--
ALTER TABLE `item_transfers`
  MODIFY `transfer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `monthly_target`
--
ALTER TABLE `monthly_target`
  MODIFY `target_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `multiple_payments`
--
ALTER TABLE `multiple_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `other_payments`
--
ALTER TABLE `other_payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=538;

--
-- AUTO_INCREMENT for table `remove_items`
--
ALTER TABLE `remove_items`
  MODIFY `remove_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `remove_reasons`
--
ALTER TABLE `remove_reasons`
  MODIFY `remove_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rights`
--
ALTER TABLE `rights`
  MODIFY `right_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1221;

--
-- AUTO_INCREMENT for table `sales_returns`
--
ALTER TABLE `sales_returns`
  MODIFY `return_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `stock_adjustments`
--
ALTER TABLE `stock_adjustments`
  MODIFY `adjust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `store_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sub_menus`
--
ALTER TABLE `sub_menus`
  MODIFY `sub_menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `transfers`
--
ALTER TABLE `transfers`
  MODIFY `transfer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=360;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
