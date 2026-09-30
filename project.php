<?php include 'includes/header.php'; ?>


<div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/breadcrumb.jpg');">
    <div class="left-shape">
        <img src="assets/img/breadcrumb-shape.png" alt="img">
    </div>
    <div class="right-shape">
        <img src="assets/img/breadcrumb-shape-2.png" alt="img">
    </div>
    <div class="container">
        <div class="page-heading">
            <div class="breadcrumb-sub-title">
                <h1 class="wow fadeInUp" data-wow-delay=".3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">our Portfolio </h1>
            </div>
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                <li>
                    <a href="<?= url('/') ?>">Home :</a>
                </li>
                <li>
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                    our Portfolio
                </li>
            </ul>
        </div>
    </div>
</div>

<section class="news-section section-padding fix pt-3 " id="portfolio">
    <div class="container">
        <!-- <div class="filters pb-5" id="portfolioFilters">
            <a href="javascript:void(0)" class="filters-btns active" data-filter="all">All Projects</a>
            <a href="javascript:void(0)" class="filters-btns" data-filter="mobile">Mobile Apps</a>
            <a href="javascript:void(0)" class="filters-btns" data-filter="web">Web Development</a>
            <a href="javascript:void(0)" class="filters-btns" data-filter="ecommerce">E-Commerce</a>
            <a href="javascript:void(0)" class="filters-btns" data-filter="design">Web Design</a>
        </div> -->

        <div class="row g-4">
            <!-- 1. Misy -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="Misy – Ride Booking Platform (Rider & Driver Apps)"
                            data-category="Mobile Development" data-tags="Ride Booking, Flutter, Apps"
                            data-about="Misy is a complete ride-hailing solution consisting of separate Rider and Driver mobile applications developed using Flutter. The platform enables users to book rides seamlessly while allowing drivers to receive requests, navigate to pickup locations, manage trips, and track earnings efficiently. Built with a shared Flutter codebase for Android, the apps provide a fast, responsive, and consistent user experience. The application integrates real-time location tracking, maps, notifications, and secure authentication to ensure reliable communication between riders and drivers throughout the ride lifecycle."
                            data-features="Separate Rider and Driver applications|Cross-platform support (Android)|Ride booking and instant driver matching|Real-time driver location tracking|Google Maps integration with navigation|Live trip status updates|Push notifications for ride events|Secure user authentication|Trip history and fare details|Driver online/offline availability|Profile and vehicle management|Responsive UI with optimized performance|Implemented real-time ride updates with accurate location synchronization between riders and drivers.|Optimized map rendering and GPS tracking to reduce delays and improve navigation accuracy.|Managed complex trip states including ride requests, acceptance, arrival, trip start, completion, and cancellation.|Reduced redundant API calls using efficient state management and background updates.|Ensured smooth communication through push notifications for ride requests and status changes.|Built a scalable architecture with reusable components, making future feature additions and maintenance easier."
                            data-tools="Flutter, Firebase, REST APIs, Google Maps, Geolocation, Push Notifications, Payment Gateway Integration"
                            data-img="assets/images/portfolio/misy-app.png">
                            <img src="assets/images/portfolio/misy-app.png" alt="Misy App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Misy – Ride Booking Platform</h5>
                    </div>
                </div>
            </div>

            <!-- 2. Meet Zane -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas" data-title="Meet Zane- personal AI companion"
                            data-category="Mobile Development" data-tags="AI, Therapy, Health"
                            data-about="Meet Zane is your personal AI companion designed to help you reflect, heal, and grow. Built with care, compassion, and advanced psychology-based technology, Meet Zane bridges the gap between traditional therapy and self-understanding — giving you the space to talk, think, and believe in your own worth again. Whether you’re processing stress, exploring emotions, or simply needing to feel heard, Meet Zane listens — judgment-free, 24/7."
                            data-features="How it works|You simply talk. Meet Zane listens.|Through intelligent conversation, it identifies what kind of support you might benefit from — drawing from techniques across CBT, ACT, mindfulness, emotional regulation, and more than ten therapeutic frameworks."
                            data-tools="" data-img="assets/images/portfolio/meet-zane-app.png">
                            <img src="assets/images/portfolio/meet-zane-app.png" alt="Meet Zane App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Meet Zane- personal AI companion</h5>
                    </div>
                </div>
            </div>

            <!-- 3. HerStay -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.6s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas" data-title="HerStay Women’s Travel Companion App"
                            data-category="Mobile Development" data-tags="Travel, Social, Companion"
                            data-about="Meet HerStay — the women-first travel and accommodation platform designed to help female travelers connect, stay, and explore the world more safely, affordably, and socially. Whether you’re planning a solo adventure, searching for a travel companion, looking to split accommodations, or hoping to meet like-minded women around the world, HerStay helps create trusted travel connections through a community-centered experience built specifically for women. Designed for modern female travelers, digital nomads, students, remote workers, and explorers, HerStay combines social connection with practical travel planning in one elegant platform."
                            data-features="HerStay makes it easier to:|Connect with compatible female travelers|Find shared accommodations and travel stays|Match based on destination, travel style, budget, and interests|Communicate securely through in-app messaging|Build trusted connections before your trip|Travel more confidently with community-focused safety features"
                            data-tools="" data-img="assets/images/portfolio/her-stay.png">
                            <img src="assets/images/portfolio/her-stay.png" alt="HerStay App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>HerStay Women’s Travel Companion App</h5>
                    </div>
                </div>
            </div>

            <!-- 4. Velvet Dating -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.8s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas" data-title="Velvet Dating Application"
                            data-category="Mobile Development" data-tags="Dating, Social"
                            data-about="This app is a modern mobile dating platform built to help users connect faster and more meaningfully through location-based discovery, smart matching, and premium visibility features. Developed as a high-performance cross-platform mobile application, it leverages React Native to deliver a seamless, native-like experience across both Android and iOS devices. The platform offers flexible discovery options, allowing users to browse nearby profiles in a clean grid layout or switch to an interactive real-time map. This hybrid mobile app experience enables users to explore connections as they happen. Each profile displays essential details such as photos, age, and match percentage, making interactions fast and intuitive with simple swipe-based actions. To enhance visibility and engagement, the app includes a powerful Boost feature. When activated, Boost places a user’s profile at the top of the Explore feed and Map view for 30 minutes, significantly increasing profile exposure, likes, and ma"
                            data-features="" data-tools="" data-img="assets/images/portfolio/velvet-dating.png">
                            <img src="assets/images/portfolio/velvet-dating.png" alt="Velvet Dating">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Velvet Dating Application</h5>
                    </div>
                </div>
            </div>

            <!-- 5. Trivia Game -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas" data-title="Trivia Game Mobile App Development"
                            data-category="Mobile Development" data-tags="Gaming, Mobile App"
                            data-about="Trivia Game Mobile App Development"
                            data-features="Features and User Flow:|Loading Screen Loads user data.|Daily Bounce Popup: Presents 7-day gifts.|Social Offers Popup: Allows users to buy boxes, gold, chests containing gifts.|Navigation Bar:|Home Screen:|User Data: Displays user image, level, medals (from tower duels), and gold.|Settings: Sound settings, connect with Facebook, newsletter, support, terms & conditions, delete account.|Lucky Spin: Spin wheel with gifts; non-premium users watch a non-skippable video ad.|Missions: 4 missions per day.|Piggy Bank: A feature where users can save rewards.|Pick A Prize: Offers a chance to pick a prize.|Special Offers: Displays current special offers.|Events: Lists ongoing events.|Trivia Pass: Monthly pass with premium and free gifts, requires VIP membership.|Ranking: Displays user rankings.|Social Chest: Social feature where chests can be collected.|Play Now: Offers three game modes:|Classic Mode: Turn-based, multiplayer auto-matching.|Daily Challenge: Single-player mode. Tower Duel: Real-"
                            data-tools="" data-img="assets/images/portfolio/trivia-game.png">
                            <img src="assets/images/portfolio/trivia-game.png" alt="Trivia Game">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Trivia Game Mobile App Development</h5>
                    </div>
                </div>
            </div>

            <!-- 6. Sidelick -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="Sidelick – Pet Sitting & Dog Walking Mobile App"
                            data-category="Mobile Development" data-tags="Pet Care, On-Demand"
                            data-about="Sidelick is a cross-platform mobile application that connects pet owners with trusted pet sitters and dog walkers. Developed using Flutter, the app delivers a seamless booking experience, secure payments, real-time communication, and live service updates. It is designed to simplify pet care while providing pet owners with peace of mind through reliable and transparent services."
                            data-features="Cross-platform support (Android & iOS)|Pet sitter and dog walker discovery|Home boarding, daycare, and drop-in visits|Real-time booking and schedule management|In-app chat and instant notifications|GPS tracking for dog walks|Photo and video updates during services|Secure online payments via Stripe|Ratings and reviews|User-friendly and responsive UI|Built a scalable cross-platform application with a single Flutter codebase.|Implemented real-time booking updates and notifications for a smooth user experience.|Integrated secure payment processing while ensuring reliable transaction handling.|Optimized state management and API synchronization for consistent data across screens.|Enhanced app performance by reducing load times and improving UI responsiveness.|Managed complex booking flows, service availability, and user interactions while maintaining a clean and intuitive interface."
                            data-tools="Flutter, Firebase, REST APIs, Google Maps, Push Notifications, Stripe"
                            data-img="assets/images/portfolio/sidelick-app.png">
                            <img src="assets/images/portfolio/sidelick-app.png" alt="Sidelick App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Sidelick – Pet Sitting & Dog Walking Mobile App</h5>
                    </div>
                </div>
            </div>

            <!-- 7. Mind Therapy -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="web">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.6s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas" data-title="Mind Therapy Appointment Booking Website"
                            data-category="Web Development" data-tags="Healthcare, Therapy, Booking"
                            data-about="A secure mind therapy website designed to help users book appointments with professional therapists easily. The platform supports online therapy sessions, client management, & confidential communication in a trusted digital environment. Built for accessibility &reliability, it improves mental wellness services through a smooth & private online experience."
                            data-features="Secure login & user profiles|Online appointment scheduling|Therapist directory & search|Payment processing & invoices|Documents, resources, & reviews|Privacy & confidentiality controls"
                            data-tools="" data-img="assets/images/portfolio/mind-therapy.png">
                            <img src="assets/images/portfolio/mind-therapy.png" alt="Mind Therapy"
                                class="web-project-img">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Mind Therapy Appointment Booking Website</h5>
                    </div>
                </div>
            </div>

            <!-- 8. Professional Business Website -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="web">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.8s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas" data-title="Professional Business Website Solutions"
                            data-category="Web Development" data-tags="Corporate, Portfolio"
                            data-about="Get your business website designed to showcase your showroom, services, & expertise in a professional & engaging way. The website helps customers visit your showroom without appointments, schedule one-on-one consultations, & receive expert guidance. Built to highlight your offerings, it improves online visibility, customer trust, &business growth."
                            data-features="Business profile & service pages|Appointment scheduling system|Consultation & inquiry forms|Multilingual content support|Mobile-friendly & responsive design|Contact & location management"
                            data-tools="" data-img="assets/images/portfolio/business-website.png">
                            <img src="assets/images/portfolio/business-website.png" alt="Business Website"
                                class="web-project-img">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Professional Business Website Solutions</h5>
                    </div>
                </div>
            </div>

            <!-- 9. Food Delivery App -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas" data-title="Food Delivery App (Flutter + Node JS)"
                            data-category="Mobile Development" data-tags="Food Delivery, E-commerce"
                            data-about="This project is a full-scale on-demand food delivery application built to connect customers, delivery partners, and administrators through a single, unified ecosystem. The platform is designed with a strong focus on performance, scalability, and user experience, making it suitable for startups as well as growing food delivery businesses. The solution enables users to discover restaurants, browse menus, add items to cart, and place orders with a smooth and intuitive flow. Real-time order tracking ensures transparency throughout the delivery process, while secure payment handling and wallet functionality improve user convenience and trust."
                            data-features="The system includes three dedicated modules: 🔸 A customer mobile app, 🔸 A delivery partner app, and 🔸 A feature-rich admin panel.|Customers can track orders live, manage wallets, receive push notifications, and view order history.|Delivery partners can accept or reject orders, follow optimized routes, and update delivery status in real time. The admin panel provides complete control over users, restaurants, orders, payments, commissions, and operational insights through real-time dashboards."
                            data-tools="Flutter for cross-platform mobile development, Node JS for backend services, NoSQL database management, cloud backend services, real-time data synchronization, push notifications, and secure payment integration."
                            data-img="assets/images/portfolio/food-delivery.png">
                            <img src="assets/images/portfolio/food-delivery.png" alt="Food Delivery">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Food Delivery App (Flutter + Node JS)</h5>
                    </div>
                </div>
            </div>

            <!-- 10. Social Media Mini App -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas" data-title="Social Media Mini App"
                            data-category="Mobile Development" data-tags="Social Media, Chat"
                            data-about="This project is a lightweight yet powerful social media mini application designed to deliver fast, engaging, and real-time user interactions. The platform focuses on core social networking features while maintaining high performance and smooth user experience across devices. Users can create and browse feeds, interact with posts through likes, and share short stories to keep content fresh and engaging. Real-time chat functionality enables instant messaging, helping users stay connected and interact seamlessly within the platform. The application is designed with a clean interface and intuitive navigation to encourage user engagement and retention."
                            data-features="The app includes dynamic news feeds, post interactions such as likes, story sharing, and real-time messaging.|Push-based updates ensure instant content refresh, while secure user authentication protects user data.|The system supports scalable data handling to manage growing user activity efficiently."
                            data-tools="React JS for building a responsive and interactive frontend, cloud backend services for real-time data synchronization, user authentication, media storage, and scalable application infrastructure."
                            data-img="assets/images/portfolio/social-media-mini-app.png">
                            <img src="assets/images/portfolio/social-media-mini-app.png" alt="Social Media Mini App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Social Media Mini App</h5>
                    </div>
                </div>
            </div>

            <!-- 11. Multi Service Delivery -->
            <!-- <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.6s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas" data-title="Multi Service Delivery Mobile App"
                            data-category="Mobile Development" data-tags="Delivery, Multi-vendor"
                            data-about="This project is a complete multi-service delivery mobile application designed for businesses where drivers pick up and deliver orders from multiple stores or vendors. The platform supports a wide range of delivery use cases such as food, groceries, retail items, and local services, all managed through a single, scalable system. The app is built to provide a smooth user journey from discovery to delivery, focusing on speed, accuracy, and real-time visibility. Customers can easily browse stores, explore products or menus, place orders, and track deliveries live on the map."
                            data-features="The solution includes user registration and profile management, multi-store vendor listings, product and menu browsing, cart and checkout, secure in-app payments, promo codes, and order history.|Real-time order tracking, geo-location, and map integration ensure transparency throughout the delivery process.|A dedicated delivery partner app allows drivers to manage availability, schedules, pickups, and drop-offs efficiently.|Ratings and reviews help maintain service quality, while push notifications keep users updated at every stage.|A powerful admin panel enables complete control over users, vendors, orders, payments, offers, and platform operations.|Business Value: The platform improves operational efficiency, supports multiple vendors, and delivers a reliable end-to-end delivery management experience for growing on-demand businesses."
                            data-tools="" data-img="assets/images/portfolio/multi-service-delivery.png">
                            <img src="assets/images/portfolio/multi-service-delivery.png" alt="Multi Service Delivery">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Multi Service Delivery Mobile App</h5>
                    </div>
                </div>
            </div> -->

            <!-- 12. BodaBoda Taxi App -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.8s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas" data-title="BodaBoda Taxi App"
                            data-category="Mobile Development" data-tags="Transport, Taxi App"
                            data-about="BodaBoda Taxi App is an on-demand taxi booking solution designed to provide fast and reliable rides from source to destination. The app allows users to find nearby taxis based on location and zip code, calculate ride fares automatically according to distance, and book rides with ease. The platform focuses on convenience, real-time tracking, and transparent pricing to deliver a smooth urban transportation experience. Customers can search for taxis near them, book rides instantly, and track their taxi in real time until pickup and drop-off. Secure payments and driver ratings help ensure trust and service quality across the platform."
                            data-features="User login and signup|Browse and search nearby taxis|Location and zip code based ride matching|Distance-based fare calculation|Instant taxi booking|Secure payment gateway integration|Real-time taxi tracking|Trip history|Driver and user rating and reviews|Notifications and ride updates"
                            data-tools="Mobile app development for riders and drivers, Real-time location and map integration, Backend API development, Secure payment processing, Push notifications, Scalable cloud infrastructure"
                            data-img="assets/images/portfolio/bodaboda-taxi.png">
                            <img src="assets/images/portfolio/bodaboda-taxi.png" alt="BodaBoda Taxi">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>BodaBoda Taxi App</h5>
                    </div>
                </div>
            </div>

            <!-- 13. On-Demand Service Marketplace -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="On-Demand Service Marketplace App (Urban Service Model)"
                            data-category="Mobile Development" data-tags="Marketplace, Services"
                            data-about="This on-demand service marketplace app is designed to help businesses connect customers with reliable service providers through a fast, intuitive, and scalable digital platform. With over 11 years of experience delivering successful solutions in taxi dispatch, food delivery, healthcare, and fitness domains, this service focuses on building secure, high-performance apps tailored to real business needs. The platform allows customers to book services effortlessly, service providers to manage jobs efficiently, and administrators to control the entire ecosystem from a centralized dashboard. The goal is to deliver a seamless end-to-end service booking experience with transparency, speed, and trust."
                            data-features="Customer App: Easy service search and discovery, Instant booking and scheduling, Real-time service tracking, Secure digital payments, Favorite service providers, Ratings and reviews, In-app customer support, Push notifications and updates|Service Provider App: Real-time job notifications, Accept or reject service requests, Order and task management, Flexible working schedules, Availability status control, Earnings and revenue tracking|Admin Panel: Centralized management dashboard, Smart service matching algorithm, User and provider management, Pricing and commission control, Detailed analytics and reports"
                            data-tools="Cross-platform mobile app development|Scalable backend architecture|Real-time tracking and notifications|Secure payment gateway integration|Cloud hosting and deployment|Performance optimization and security"
                            data-img="assets/images/portfolio/demand-marketplace.png">
                            <img src="assets/images/portfolio/demand-marketplace.png" alt="On-Demand Marketplace">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>On-Demand Service Marketplace App (Urban Service Model)</h5>
                    </div>
                </div>
            </div>


            <!-- New 1. AgreeSplit INC -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="AgreeSplit INC – Smart Bill Splitting &amp; Expense Agreement App"
                            data-category="Mobile Development"
                            data-tags="Expense Tracker, Bill Splitting, Fintech, Agreements"
                            data-about="AgreeSplit is a smart and transparent expense-sharing and formal agreement mobile application designed to simplify how friends, roommates, and travel groups split bills and manage shared financial commitments. Beyond traditional bill tracking, AgreeSplit introduces digital peer-to-peer agreements that help users legally and mutually acknowledge shared obligations, pending settlements, and personal contracts. With an intuitive and clean iOS/Android mobile interface, users can create group or individual splits, upload receipts, track unsettled dues, manage follow-up requests, and access small claims guidelines for total peace of mind."
                            data-features="Individual &amp; Group Bill Splitting: Flexible options to split household expenses, trips, or dining bills evenly or custom.|Digital Written Agreements: Create, review, and digitally sign binding agreements between members for shared financial responsibilities.|Unsettled vs Settled Bill Dashboard: Clear real-time visualization of who owes whom with instant settlement updates.|Member Network &amp; Directory: Keep track of mutual contacts, follow teammates, and send gentle payment reminders.|Small Claims &amp; Legal Reference Guide: Integrated guide and tips for transparent conflict resolution and contract assurance.|Push Notifications: Instant alerts for newly added expenses, agreement approvals, and payment confirmations.|Multi-Currency &amp; Receipt Uploads: Seamless attachment of receipts and bill breakdowns for clear audit trails."
                            data-tools="Flutter, Firebase, Manage Expenses"
                            data-img="assets/images/portfolio/Agreesplit INC.png">
                            <img src="assets/images/portfolio/Agreesplit INC.png" alt="AgreeSplit INC">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>AgreeSplit – Expense Agreement &amp; Bill Splitting</h5>
                    </div>
                </div>
            </div>

            <!-- New 2. Artista Tour -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="Artista Tour – Tour Guide &amp; Travel Experience Booking Platform"
                            data-category="Mobile Development" data-tags="Travel, Tourism, Tour Guide, Booking App"
                            data-about="Artista Tour is a dedicated travel experience and local guide booking mobile application that bridges travelers with certified local tour guides. Whether exploring architectural landmarks like Sagrada Familia or embarking on hidden city cultural walks, users can discover, schedule, and book custom guided experiences in just a few taps. For guides, the app offers a comprehensive business management suite featuring schedule scheduling, booking management, ticket capacity tracking, and an integrated earnings wallet with automated payouts and administrative commission handling."
                            data-features="Dual Onboarding Flow: Dedicated registration and tailored interfaces for both travelers/customers and professional tour guides.|Interactive Tour Catalog: Detailed sightseeing listings with rich imagery, duration, start locations, and ratings.|Real-Time Availability &amp; Booking: Secure instant reservation with transparent seat capacity and time-slot scheduling.|Tour Guide Business Suite: Create and publish custom itineraries, set pricing/free tours, and manage booking approvals.|Integrated Digital Wallet: Transparent earnings breakdown, commission tracking, and seamless payout withdrawal requests.|In-App Notifications &amp; Alerts: Immediate reminders for upcoming bookings, tour status changes, and traveler queries."
                            data-tools="Flutter, Node.js" data-img="assets/images/portfolio/Artista Tour.png">
                            <img src="assets/images/portfolio/Artista Tour.png" alt="Artista Tour">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Artista Tour – Travel &amp; Tour Guide Booking App</h5>
                    </div>
                </div>
            </div>

            <!-- New 3. BIG JQK -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.6s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="BIG JQK – Contact Network Marketing &amp; Referral Earnings App"
                            data-category="Mobile Development" data-tags="Fintech, Referral Network, Affiliate, Wallet"
                            data-about="BIG JQK is a high-yield affiliate networking and commission tracking mobile application designed to streamline promotional pushes and referral campaigns. The app provides members with a modern dashboard showcasing real-time earnings, active user metrics, and campaign execution mechanisms such as 'Push Self' and 'We Push'. With built-in contact synchronization (WhatsApp, Telegram, Phone) and an integrated wallet control center, users can effortlessly manage marketing campaigns, track performance bonuses, and request instant earnings withdrawals."
                            data-features="Interactive Earnings Dashboard: Gauge-style earnings monitor displaying cumulative revenue, active users, and campaign IDs.|Push Campaign Management: Dedicated 'Push Self' and 'We Push' modules for automated promotional sharing and affiliate outreach.|Direct Social Contact Sync: Quick connect and messaging integration with WhatsApp, Telegram, and native contacts.|Secure Wallet Control: Real-time ledger of completed commissions, transaction histories, and instant withdrawal request processing.|Multi-Tier Referral Tracking: Monitor downstream active users and dynamic commission rewards.|High Security Authentication: Encrypted user sessions, PIN/Biometric verification, and fraud prevention mechanisms."
                            data-tools="Flutter, Firebase Backend" data-img="assets/images/portfolio/BIG JQK.png">
                            <img src="assets/images/portfolio/BIG JQK.png" alt="BIG JQK App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>BIG JQK – Affiliate Referral &amp; Earnings App</h5>
                    </div>
                </div>
            </div>

            <!-- New 4. Aphrova AI -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.8s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="Aphrova AI – Next-Gen Generative AI Face Swap &amp; Art Studio"
                            data-category="Mobile Development"
                            data-tags="Artificial Intelligence, AI Face Swap, Image Generation, Deep Learning"
                            data-about="Aphrova AI is a state-of-the-art generative mobile studio that unleashes the creative power of deep learning and computer vision into the palm of your hand. Featuring a luxury dark-mode design with glowing crimson accents, the app allows users to perform hyper-realistic Face Swaps across varied style presets, animate static portraits into dynamic dance routines, and generate custom AI art through tailored natural language prompts (Cyberpunk, Monet, Fantasy, and more). Equipped with a tokenized credit system, user gallery, and high-resolution rendering pipelines, it provides an ultra-fast, premium AI creation suite."
                            data-features="Hyper-Realistic Face Swap: Instant face transfer across curated models, movie posters, and high-fashion aesthetics.|AI Dance &amp; Motion Animation: Transform static images into rhythmic dance clips and expressive video clips.|Text-to-Image AI Art Studio: Type natural language descriptions with custom style filters (Cyberpunk, General, Monet, etc.) to generate artwork in seconds.|Token &amp; Credit Economy: Integrated credit tracking and in-app purchase system for rendering high-demand AI tasks.|Style Swap &amp; Dress-Up: Instant wardrobe and persona changing with realistic garment and lighting blending.|High-Speed Cloud Inference: Cloud GPU pipeline delivering generated media in ultra-high resolution with minimal latency."
                            data-tools="Flutter, Firebase, AI APIs" data-img="assets/images/portfolio/Ai App.png">
                            <img src="assets/images/portfolio/Ai App.png" alt="Aphrova AI">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Aphrova AI – AI Face Swap &amp; Creative Studio</h5>
                    </div>
                </div>
            </div>

            <!-- New 5. BeAmOrg -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="BeAmOrg – Enterprise HRMS, Attendance &amp; Workforce Management App"
                            data-category="Mobile Development"
                            data-tags="Enterprise, HRMS, Task Management, Attendance, Team Collaboration"
                            data-about="BeAmOrg is an all-in-one enterprise workforce management and employee self-service mobile application. Crafted to empower modern corporate and remote teams, the application brings time tracking, daily attendance punch-in/out, task boards, leave approvals, company announcements, and project meeting schedules into a clean, unified mobile hub. Employees can submit leave requests, monitor project deadlines, and interact via internal corporate messaging, while managers and HR admins retain complete visibility over workforce productivity and operational workflows."
                            data-features="Geo-Verified Punch-In/Out Attendance: Easy one-tap daily attendance check-in and check-out with accurate time stamping.|Interactive Task &amp; Project Board: Categorized daily and completed task tracking with priority badges (High, Medium, Normal) and status progression.|Leave Request &amp; Approvals: End-to-end leave application workflow with day counters, status pills (Approved, Pending), and reason submission.|Company Messages &amp; Announcements: Internal communication channel for real-time team broadcasts and direct employee chats.|Upcoming Meetings &amp; Schedule: Agenda tracker showing time, project names, and assigned meeting hosts.|Comprehensive Employee Profile: Centralized digital ID, department details, team hierarchy, and assigned organizational modules."
                            data-tools="Flutter, Node.js" data-img="assets/images/portfolio/BeAmOrg.png">
                            <img src="assets/images/portfolio/BeAmOrg.png" alt="BeAmOrg Enterprise App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>BeAmOrg – Enterprise HRMS &amp; Workforce Management</h5>
                    </div>
                </div>
            </div>

            <!-- New 6. Carpooling App -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="Daily Commute &amp; Urban Carpooling Mobile App"
                            data-category="Mobile Development"
                            data-tags="Carpooling, Ride Sharing, Daily Commute, Green Transport"
                            data-about="This smart urban carpooling and ride-sharing mobile application connects daily commuters, corporate workers, and students heading in the same direction. Designed to cut travel costs and reduce urban traffic congestion, riders can effortlessly discover verified carpools between home, workplaces, and university campuses. Drivers can publish daily recurring schedules, set available passenger seats, and manage recurring morning and evening commute times. The platform features an instant 'Switch to Driver Mode' toggle, integrated ride history, scheduled pool planning, in-app rider chat, and an instant alternative taxi booking fallback."
                            data-features="Find &amp; Book Carpools: Discover verified shared rides matching daily home-to-work or university routes.|Driver &amp; Passenger Mode: Seamless one-tap toggle to alternate between booking seats and offering rides as a driver.|Recurring Commute Planner: Schedule daily recurring departure times with seat capacity counters and morning/evening toggles.|Seat Availability &amp; Requests: Live passenger count with real-time seat status (e.g., 2 seats left, instant booking).|In-App Chat &amp; Coordination: Integrated rider-driver messaging for convenient pickup point and timing alignment.|Carpools History &amp; Analytics: Full record of completed shared rides, fare distributions, and cost-savings statistics.|Taxi Booking Fallback: One-tap option to book a standard taxi if no carpooling matches are available on the route."
                            data-tools="Flutter, Firebase" data-img="assets/images/portfolio/car pooling.png">
                            <img src="assets/images/portfolio/car pooling.png" alt="Carpooling App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Urban Carpooling &amp; Daily Commute App</h5>
                    </div>
                </div>
            </div>

            <!-- New 7. ByYourWay Parcel & Freight Delivery -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="ByYourWay – On-Demand Parcel &amp; Heavy Freight Logistics App"
                            data-category="Mobile Development"
                            data-tags="Logistics, Parcel Delivery, Freight, Courier, Real-Time Tracking"
                            data-about="ByYourWay is a modern parcel, logistics, and freight delivery application designed to simplify intercity cargo and package transportation ('Parcel Your Package By Your Way'). Whether shipping light parcels or handling heavy freight up to 200kg+, shippers can create instant dispatch requests, assign verified transport drivers, track packages on live maps, and monitor shipments across defined lifecycle states: Pending, Running, and Completed. The clean, user-centric mobile UI equips businesses and individual senders with transparent freight pricing, driver verification badges, and comprehensive delivery audit trails."
                            data-features="Effortless Shipment Creation: One-tap 'Add Shipment' wizard with weight specifications (e.g., 200 kg), pickup, and drop destinations.|Real-Time GPS Tracking: Live route visualization and parcel milestone tracking ('Track Shipment') from origin to destination.|Multi-State Shipment Monitoring: Filter and manage logistics through intuitive Pending, Running, and Completed order tabs.|Driver Allocation &amp; Verification: View assigned driver profile photos, driver license IDs, and direct communication links.|Transparent Pricing &amp; Weight Tiers: Clear fixed-rate or weight-based fare calculation ($50.00 base pricing, distance multipliers).|Shipped &amp; Delivery Confirmations: Digital POD (Proof of Delivery) with timestamped delivery receipts and status badges.|Comprehensive History &amp; Requests: Centralized requests manager for recurring corporate and commercial supply chains."
                            data-tools="Flutter, Laravel" data-img="assets/images/portfolio/Byyourway.png">
                            <img src="assets/images/portfolio/Byyourway.png" alt="ByYourWay Parcel Delivery">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>ByYourWay – Parcel &amp; Freight Logistics App</h5>
                    </div>
                </div>
            </div>

            <!-- New 8. Car Rental Mobile Application -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.6s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="Car Rental – On-Demand Vehicle Fleet &amp; Self-Drive Booking App"
                            data-category="Mobile Development"
                            data-tags="Car Rental, Vehicle Booking, Fleet Management, Map Discovery"
                            data-about="Car Rental is an end-to-end self-drive and chauffeur vehicle rental mobile app crafted for travelers, corporate clients, and urban explorers. Users can discover a diverse fleet of verified vehicles—from practical hatchbacks and sedans (Toyota Corolla) to premium SUVs and MUVs (Kia Carens, Hyundai Creta). The app features interactive map-based vehicle locating, flexible date-picker duration scheduling, transparent tier pricing (Daily, 7-day, 15-day, 30-day packages), detailed engine and transmission specifications, and complete booking lifecycle oversight (Pending, Active, Completed, Cancelled)."
                            data-features="Interactive Map Vehicle Discovery: View real-time available rental vehicles on an interactive city street map.|Comprehensive Vehicle Catalog: Explore cars with detailed specifications (Fuel type, Seating capacity, Intercity options, Transmission).|Flexible Date Picker &amp; Rental Duration: Choose custom start and end dates with automatic multi-day rate calculations.|Tiered Discount Packages: Dynamic pricing models with special discounts for 7-day ($70/day), 15-day ($120/day), or 30-day leases.|Instant Booking &amp; Reservation Confirmation: Frictionless checkout with vehicle reserve hold and digital security deposit handling.|Booking History &amp; Status Tracking: Track reservation states including Pending approval, Completed trips, and cancellation management.|User Rating &amp; Review System: Transparent feedback scores (star ratings) and authentic vehicle condition feedback."
                            data-tools="Flutter, Firebase" data-img="assets/images/portfolio/Car Rental.png">
                            <img src="assets/images/portfolio/Car Rental.png" alt="Car Rental App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Car Rental – Vehicle Fleet &amp; Booking App</h5>
                    </div>
                </div>
            </div>

            <!-- New 9. Clothing Partner LTD -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.8s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="Clothing Partner LTD – Multi-Brand Fashion &amp; Apparel B2B/B2C Marketplace"
                            data-category="Mobile Development"
                            data-tags="E-Commerce, Fashion, Clothing, B2B Marketplace, Barcode Scanner"
                            data-about="Clothing Partner LTD is a sophisticated mobile commerce and fashion distribution platform tailored for apparel retailers, brand distributors (such as Hermes Paris), and fashion shoppers. Designed with a luxury dark and clean contrast visual identity, users can browse seasonal collections (Flored shirts, T-shirt dresses, mini-shorts), filter by department, color swatches, and sizing, view interactive product lookbooks, and scan physical products in-store via a built-in barcode scanner. Retail partners benefit from vendor profile management, catalog publishing, and digital order processing."
                            data-features="Brand Showcase &amp; Vendor Profiles: Dedicated designer and boutique storefronts with verified contact emails and seller bios.|Advanced Search &amp; Multi-Facet Filters: Deep filtering by Popularity, Price (Low-High), Category, Department, Color palettes, and Sizes (M, L, XL, XXL).|Interactive Product Detail Page: Multi-angle fashion lookbook, color swatch picker, size selector, discounted pricing, and customer reviews.|Integrated Barcode / QR Code Scanner: Scan physical retail garment tags in real-time to retrieve instant stock and online listings.|Recently Viewed &amp; Wishlist: Quick-access shelf for past viewed styles and favorited seasonal clothing lines.|Product Management for Partners: Seamless catalog uploading with photo uploads, pricing discounts, and inventory status (In Stock / Out).|Secure Authentication &amp; Profile Center: Comprehensive profile management, security settings, password updates, and order history."
                            data-tools="Flutter, Node.js" data-img="assets/images/portfolio/Clothing Partner LTD.png">
                            <img src="assets/images/portfolio/Clothing Partner LTD.png" alt="Clothing Partner LTD">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Clothing Partner – Fashion &amp; Apparel Marketplace</h5>
                    </div>
                </div>
            </div>

            <!-- New 10. CallToFix -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="CallToFix – On-Demand Home Services &amp; Skilled Worker Booking App"
                            data-category="Mobile Development"
                            data-tags="On-Demand Services, Home Renovation, Handyman, Service Marketplace"
                            data-about="CallToFix ('Truly Canadian') is a premier on-demand home maintenance, renovation, and skilled handyman services mobile application. Connecting homeowners with over 2,000+ verified professionals and service workers across Canada, CallToFix offers streamlined booking for Home Renovations (Basement, Bathroom, Kitchen), Appliance Repairs, AC &amp; HVAC Services, Maid Services, Towing, and Snow Removal. Homeowners can browse upfront pricing, select custom service packages or video consultations, apply coupons, pick convenient time slots, and schedule certified contractors with absolute confidence."
                            data-features="2000+ Verified Service Pros: Access licensed, background-checked Canadian tradesmen, contractors, and handymen.|Comprehensive Multi-Category Grid: Dedicated booking categories for Home Renovations, AC Services, Maid Services, Towing, and Snow Removal.|Upfront Transparent Pricing: Fixed package fees (e.g. $100 AC Service / Video Consult) with detailed breakdown of included tasks.|Smart Cart &amp; Slot Booking: Add multiple services to cart, apply promotional discount coupons, and pick custom calendar dates/time slots.|Video Consultation Mode: Instant remote diagnosis and virtual consultation with expert technicians before home visits.|Real-Time Order Tracking &amp; History: Monitor booked service stages from worker assignment to arrival and service completion.|Secure Digital Payments: Built-in support for credit cards, Apple Pay, Google Pay, and digital invoicing."
                            data-tools="Flutter, Node.js" data-img="assets/images/portfolio/Call to fix.png">
                            <img src="assets/images/portfolio/Call to fix.png" alt="CallToFix Canadian Home Services">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>CallToFix – On-Demand Home Services &amp; Handyman App</h5>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<!-- Offcanvas HTML Popup Structure -->
<div class="offcanvas offcanvas-end shadow" tabindex="-1" id="projectOffcanvas" aria-labelledby="projectOffcanvasLabel"
    style="width: 550px; max-width: 100vw;">

    <!-- Header -->
    <div class="offcanvas-header bg-light border-bottom p-4">
        <div>
            <h4 class="offcanvas-title fw-bold text-dark mb-1" id="oc-title">Project Title</h4>
            <p class="mb-0 fw-semibold small" style="color: var(--theme, #6A47ED);" id="oc-category">Category</p>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <!-- Body -->
    <div class="offcanvas-body p-4 custom-scrollbar">

        <!-- Project Images Grid (Supports Single/Multiple Images with Lightbox) -->
        <div class="mb-4">
            <div class="row g-2" id="oc-image-grid">
                <!-- JS ke through images yahan dynamically grid me aayengi -->
            </div>
        </div>

        <!-- Tags -->
        <div class="d-flex align-items-center mb-4 pb-3 border-bottom">
            <i class="fa-solid fa-tags text-muted me-2"></i>
            <p class="text-secondary small mb-0 fw-medium" id="oc-tags">Tag 1, Tag 2</p>
        </div>

        <!-- About Project -->
        <div class="mb-4">
            <h6 class="fw-bold mb-3 text-dark d-flex align-items-center">
                <i class="fa-solid fa-circle-info me-2" style="color: var(--theme, #6A47ED);"></i> About the Project
            </h6>
            <p id="oc-about" class="text-muted small" style="line-height: 1.7;">
                Project details will appear here...
            </p>
        </div>

        <!-- Key Features (Enclosed in a soft background box) -->
        <div class="mb-4 p-4 bg-light rounded-3 border border-light">
            <h6 class="fw-bold mb-2 text-dark d-flex align-items-center">
                <i class="fa-solid fa-star text-warning me-2"></i> Key Features
            </h6>
            <p class="text-muted small mb-3 border-bottom pb-2">The system includes these dedicated modules:</p>
            <ul id="oc-features" class="list-unstyled text-muted small mb-0" style="line-height: 1.8;">
                <!-- Features dynamically added here via JS -->
            </ul>
        </div>

        <!-- Tools & Technologies -->
        <div class="mb-2">
            <h6 class="fw-bold mb-3 text-dark d-flex align-items-center">
                <i class="fa-solid fa-laptop-code text-info me-2"></i> Tools &amp; Technologies
            </h6>
            <div class="d-inline-block bg-white border shadow-sm rounded-3 p-3 w-100">
                <p id="oc-tools" class="text-muted small mb-0 fw-medium" style="line-height: 1.6;">
                    Technologies used will appear here...
                </p>
            </div>
        </div>

    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const projectLinks = document.querySelectorAll('.open-project-details');

        projectLinks.forEach(link => {
            link.addEventListener('click', function () {
                // Fetch data from attributes
                const title = this.getAttribute('data-title');
                const category = this.getAttribute('data-category');
                const tags = this.getAttribute('data-tags');
                const about = this.getAttribute('data-about');
                const features = this.getAttribute('data-features') ? this.getAttribute('data-features').split('|') : [];
                const tools = this.getAttribute('data-tools');

                // Image URLs ko comma se split karna
                const imgData = this.getAttribute('data-img');
                const images = imgData ? imgData.split(',') : [];

                // Populate Text Data
                document.getElementById('oc-title').textContent = title;
                document.getElementById('oc-category').textContent = category;
                document.getElementById('oc-tags').textContent = tags;
                document.getElementById('oc-about').textContent = about;

                // Handling Tools
                const toolsElement = document.getElementById('oc-tools');
                if (tools && tools.trim() !== "") {
                    toolsElement.textContent = tools;
                    toolsElement.parentElement.parentElement.style.display = 'block';
                } else {
                    toolsElement.parentElement.parentElement.style.display = 'none';
                }

                // Populate Features List
                const featuresContainer = document.getElementById('oc-features');
                featuresContainer.innerHTML = '';
                if (features.length > 0 && features[0].trim() !== "") {
                    features.forEach(feature => {
                        if (feature.trim() !== "") {
                            featuresContainer.innerHTML += `<li class="mb-2"><i class="fa-solid fa-circle-check text-success me-2"></i> ${feature}</li>`;
                        }
                    });
                    featuresContainer.parentElement.style.display = 'block';
                } else {
                    featuresContainer.parentElement.style.display = 'none';
                }

                // Populate Image Grid & Fancybox
                const imageGrid = document.getElementById('oc-image-grid');
                imageGrid.innerHTML = ''; // Clear old images

                if (images.length > 0) {
                    images.forEach((imgSrc, index) => {
                        let cleanSrc = imgSrc.trim();
                        if (cleanSrc !== "") {
                            // Agar sirf 1 image hai toh full width (col-12), agar zyada hain toh half width (col-6)
                            let colClass = images.length === 1 ? 'col-12' : 'col-6';
                            let imgHeight = images.length === 1 ? '320px' : '180px'; // Multiple images ke liye height adjust ki hai

                            // Check if category is 'Web Development' to align image top in lightbox as well
                            let extraCss = (category === 'Web Development') ? 'object-position: top center;' : '';

                            imageGrid.innerHTML += `
                            <div class="${colClass}">
                                <a href="${cleanSrc}" data-fancybox="project-gallery-${title.replace(/\s+/g, '-')}">
                                    <img src="${cleanSrc}" alt="Project Image" class="img-fluid rounded-4 shadow-sm w-100" style="height: ${imgHeight}; object-fit: cover; border: 1px solid #eee; ${extraCss}">
                                </a>
                            </div>
                        `;
                        }
                    });
                }
            });
        });
    });
</script>

<?php include 'includes/footer.php'; ?>