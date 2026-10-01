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

            <!-- New 11. Within Us -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="web">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="Within Us – Mental Health, Counseling &amp; Personal Therapy Website"
                            data-category="Web Development"
                            data-tags="WordPress, Mental Health, Therapy, Counseling, Appointment Booking, Wellness"
                            data-about="Within Us is a compassionate, calming mental health, therapy, and personal counseling web platform designed to provide a supportive digital haven for individuals seeking healing, emotional balance, and personal growth. Featuring an empathetic visual tone ('If you need someone to talk to — I'm here'), the website welcomes visitors with serene imagery, soothing earthy typography, and accessible navigation. Prospective clients can learn about the therapist's story and credentials, explore structured counseling pathways (1-on-1 sessions, mindfulness programs, emotional wellness), book free introductory discovery consultations, and schedule private therapy sessions online."
                            data-features="Empathetic &amp; Serene UI/UX: Calming earth tones and mindful typography designed to provide reassurance to visitors in emotional distress.|Therapist Journey &amp; Credentials: Dedicated 'My Story' section showcasing professional qualifications, background, and compassionate guidance philosophy.|Custom Therapy Modules: Structured 'Ways to Work Together' highlighting 1-on-1 counseling, mindfulness workshops, and guided recovery.|Free Introductory Discovery Sessions: Frictionless introductory booking system allowing new clients to easily schedule an intro conversation.|Integrated Appointment Scheduling: Real-time booking calendar with automated time-slot selection for confidential private sessions.|Mental Wellness Articles &amp; Blog: Educational resource hub covering mindfulness techniques, stress management, and emotional well-being.|Newsletter Subscription: Seamless email newsletter opt-in for weekly mental health insights and personal self-care guides.|Fully Responsive Experience: Flawlessly optimized across desktop, tablet, and mobile devices for effortless accessibility."
                            data-tools="WordPress, PHP, Elementor Pro, MySQL, WooCommerce Bookings, Custom CSS"
                            data-img="assets/images/portfolio/With in Us.png">
                            <img src="assets/images/portfolio/With in Us.png" alt="Within Us Therapy Website"
                                class="web-project-img">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Within Us – Mental Health &amp; Therapy Website</h5>
                    </div>
                </div>
            </div>

            <!-- New 12. CXAI Enterprise Workplace -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="web">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="CXAI – AI-Driven Enterprise Workplace Experience Platform"
                            data-category="Web Development"
                            data-tags="Artificial Intelligence, Enterprise SaaS, Node.js, Bootstrap, Workforce Automation"
                            data-about="CXAI (CKN) is an advanced AI-driven enterprise workplace experience and workforce productivity platform designed for Fortune 500 corporations and modern distributed teams. Engineered with a sophisticated dark-and-navy enterprise interface, CXAI centralizes employee workspaces, predictive task management, automated organizational workflows, and executive analytics into a unified cloud portal. Enterprise leaders can streamline internal communications, deploy generative AI copilots for staff, monitor productivity metrics, and manage enterprise security with single sign-on (SSO) and granular role governance."
                            data-features="AI-Powered Workplace Engine: Intelligent conversational enterprise copilot automating daily repetitive tasks, queries, and team scheduling.|Unified Workspace Portal: Centralized hub ('Unlap') consolidating internal documents, departmental tools, and team collaboration.|Predictive Analytics &amp; KPI Metrics: Dedicated 'Maximize' intelligence module delivering real-time performance insights and operational tracking.|Adaptive Enterprise Solutions: Tailored feature suites (Adapt, Boost, Maximize) adjusting dynamically to cross-functional organizational workflows.|Enterprise-Grade Security &amp; Compliance: Fortune 500 ready architecture with SAML SSO, end-to-end encryption, and role-based access controls.|Interactive SaaS Pricing &amp; Onboarding: Transparent tier selection with automated enterprise trial requests and custom deployment options.|Responsive Multi-Device Dashboard: High-performance interface adapting seamlessly across executive workstations, iPads, and smartphones."
                            data-tools="HTML5, CSS3, Bootstrap 5, JavaScript (ES6+), Node.js, Express.js, MongoDB, RESTful APIs"
                            data-img="assets/images/portfolio/CXAI.png">
                            <img src="assets/images/portfolio/CXAI.png" alt="CXAI Enterprise Workplace Platform"
                                class="web-project-img">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>CXAI – AI Enterprise Workplace Platform</h5>
                    </div>
                </div>
            </div>

            <!-- New 13. DeltaWorx -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="web">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.6s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="DeltaWorx – Student Recruitment &amp; Staffing Solutions Platform"
                            data-category="Web Development"
                            data-tags="Recruitment, Student Jobs, Staffing Agency, Laravel, Bootstrap, Job Portal"
                            data-about="DeltaWorx is an intelligent student staffing and recruitment web platform built to connect ambitious university students with leading corporations, hospitality giants, and retail brands across Belgium and Europe. Taglined 'The perfect student for the job', DeltaWorx offers companies a fast, flexible staffing pipeline while empowering students to gain paid work experience that aligns with their academic schedules. Recruiters can post shift-based or seasonal job openings, filter vetted candidate profiles, review student credentials, and manage digital contracts seamlessly within an interactive employer portal."
                            data-features="Smart Student Talent Matching: Proprietary hiring algorithm pairing verified student candidates with vacancies based on skills and study schedules.|Employer Corporate Dashboard: Robust employer console for publishing listings, tracking applicant pipelines, and scheduling candidate interviews.|Interactive Regional Operations Map: Visual map showing operational hubs, partner client branches, and active deployment regions across Belgium.|Structured 4-Step Hiring Process: Transparent onboarding workflow covering registration, skill assessment, automated matching, and contract signing.|Prominent Client Showcase: Trust badges and partnership showcases featuring major industry employers (NH Hotels, Dalesis, Ecolog).|Flexible Student Availability Planner: Student calendar management allowing candidates to block off exam weeks and select available work shifts.|Digital Contracting &amp; Compliance: Automated student labor contract generation with digital signature capture and labor law compliance.|Mobile-First Responsive Layout: Engineered with Bootstrap 5 to deliver optimal user experience across desktops, tablets, and smartphones."
                            data-tools="HTML5, CSS3, Bootstrap 5, JavaScript, Laravel, PHP, MySQL, Blade Engine"
                            data-img="assets/images/portfolio/DeltaWorx.png">
                            <img src="assets/images/portfolio/DeltaWorx.png"
                                alt="DeltaWorx Student Recruitment Platform" class="web-project-img">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>DeltaWorx – Student Recruitment &amp; Staffing Platform</h5>
                    </div>
                </div>
            </div>

            <!-- New 14. Sidelick Pet Care -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="web">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="Sidelick – On-Demand Pet Sitting &amp; Dog Walking Web Platform"
                            data-category="Web Development"
                            data-tags="Pet Care, Dog Walking, Pet Sitting, Booking Platform, Laravel, Bootstrap"
                            data-about="Sidelick is a friendly, community-centered on-demand pet care, dog walking, and boarding web platform that connects pet parents with vetted, loving pet caregivers in their local neighborhood. Created with a playful, trustworthy visual identity ('Meet Pet Lovers Around You'), the portal allows dog and cat owners to search for local sitters offering Dog Walking, Overnight Pet Boarding, Daycare, and Drop-In Visits. Sitter profiles include verification badges, customer reviews, photo galleries, and hourly rates, enabling pet owners to schedule services and pay securely with total peace of mind."
                            data-features="Intuitive Pet Service Search Widget: Instant filtering by pet type (Dog, Cat), care type (Walking, Boarding, Daycare), location, and dates.|Verified Caregiver Profiles: Dedicated sitter pages showcasing verified badges, client reviews, background checks, and home environment details.|'Pet Care Made Easy' 4-Step Guide: Clear step-by-step user onboarding guiding owners from search and meet-and-greets to booking and live updates.|Interactive Calendar &amp; Booking Engine: Dynamic date picker with instant price quote calculations and automated reservation holds.|Photo &amp; Video Update Integration: Service tracking ensuring sitters can provide pet parents with daily photo updates and walking logs.|Secure Online Payments: Integrated payment gateway with escrow-style holding until services are successfully completed.|Ratings &amp; Testimonial System: Authentic verified reviews ensuring transparency, accountability, and animal welfare standards.|Cross-Device Responsive Design: Mobile-optimized Bootstrap layout ensuring effortless booking on desktop, tablet, and mobile browsers."
                            data-tools="HTML5, CSS3, Bootstrap 5, JavaScript, Laravel, PHP, MySQL, Stripe API"
                            data-img="assets/images/portfolio/Sidelick.png">
                            <img src="assets/images/portfolio/Sidelick.png" alt="Sidelick Pet Care Web Platform"
                                class="web-project-img">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Sidelick – Pet Sitting &amp; Dog Walking Platform</h5>
                    </div>
                </div>
            </div>

            <!-- New 15. TetrisDuel -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="web">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="TetrisDuel – Real-Time 1v1 Competitive Multiplayer Arcade Web Game"
                            data-category="Web Development"
                            data-tags="Gaming, Real-Time Multiplayer, WebSockets, Node.js, HTML5 Canvas, Arcade"
                            data-about="TetrisDuel is a competitive, fast-paced 1v1 real-time multiplayer arcade web game where puzzle gamers battle head-to-head in synchronized block-clearing showdowns. Styled in an electric cyberpunk dark neon arcade aesthetic, the platform features dual side-by-side matrices where players drop and rotate tetrominoes in real time. Clearing multiple lines triggers punishment garbage rows sent directly onto the rival's board. Powered by Node.js and Socket.io WebSockets, TetrisDuel features zero-latency input handling, live in-game chat, spectator mode, global leaderboards, and responsive gameplay optimized for keyboards, touchscreens, and desktop browsers."
                            data-features="Real-Time 1v1 PvP Duel Engine: Low-latency synchronized multiplayer battle system driven by Node.js and Socket.io WebSockets.|Dual Split-Screen Matrix: Side-by-side live game boards showing real-time player moves, falling tetrominoes, and opponent ghost pieces.|Garbage Row Attack Mechanics: Strategic offensive system where multi-line clears send penalty garbage blocks into the rival's grid.|In-Game Live Chat &amp; Reaction Feed: Interactive central chat module between duel boards for real-time messaging, banter, and combat logs.|Live Match Scoreboard &amp; Piece Counter: Dynamic scoring display (e.g. 3,500 vs 2,500), level speeds, match timers, and sent piece counters.|Global Leaderboards &amp; Ranked Matchmaking: Competitive MMR ranking ladders, instant matchmaking queues, and player match statistics.|Interactive Rules &amp; Game Guide: Comprehensive guide explaining basic rules, piece rotations, line clears, and combo multipliers.|Cross-Platform Responsive Canvas: Smooth HTML5 Canvas rendering scaling across widescreen desktop displays, tablets, and smartphones."
                            data-tools="HTML5 Canvas, CSS3, Bootstrap 5, JavaScript (ES6+), Node.js, Socket.io, Express.js"
                            data-img="assets/images/portfolio/Tatrisduel.png">
                            <img src="assets/images/portfolio/Tatrisduel.png" alt="TetrisDuel Arcade Web Game"
                                class="web-project-img">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>TetrisDuel – Real-Time 1v1 Arcade Game</h5>
                    </div>
                </div>
            </div>

            <!-- New 16. Enodx -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.6s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="Enodx – Smart School, Student Bus Tracking &amp; Campus Ecosystem"
                            data-category="Mobile Development"
                            data-tags="EdTech, School Management, GPS Bus Tracking, Driver Rating, Wallet &amp; Payroll, Student Attendance"
                            data-about="Enodx is an integrated smart school management and student transport tracking mobile application designed to connect teachers, school bus drivers, and parents into a unified, secure digital ecosystem. Built to maximize child safety and simplify school operations, Enodx allows parents to track school buses in real time via live GPS mapping, receive immediate boarding/drop alerts, monitor daily student attendance, manage tuition fees through a built-in digital wallet, and submit feedback or performance ratings for drivers. For school administrators and teachers, Enodx streamlines classroom rosters, schedules, automated driver payroll calculations, and incident reporting—delivering transparency, convenience, and complete peace of mind."
                            data-features="Tri-Party Unified Ecosystem: Dedicated coordinated workflows connecting school administrators, teachers, bus drivers, and parents in real time.|Live GPS School Bus Tracking: Real-time map monitoring with route progression, estimated time of arrival (ETA), and instant geofenced stop alerts.|Student Attendance &amp; Class Rosters: One-tap digital attendance logging for teachers with automated push notifications sent to parents.|Driver Performance &amp; Feedback Rating: In-app rating and review system enabling parents to evaluate drivers on punctuality, road safety, and behavior.|Digital Wallet &amp; Fee Payments: Seamless in-app wallet for tuition payments, cafeteria dues, and activity fees with instant digital receipts.|Automated Payroll Management: Streamlined driver and staff payroll calculation with working hours, trip logs, and expense tracking.|Secure In-App Communication: Direct broadcast announcements, parent-teacher queries, and urgent transit notifications."
                            data-tools="Flutter, Firebase, Manage Expenses"
                            data-img="assets/images/portfolio/Enodx-3.png">
                            <img src="assets/images/portfolio/Enodx-3.png" alt="Enodx School &amp; Bus Tracking App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Enodx – Smart School &amp; Bus Tracking App</h5>
                    </div>
                </div>
            </div>

            <!-- New 17. Country Campfire -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.8s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="Country Campfire – Outdoor Adventure, Holiday Park &amp; Camping Booking App"
                            data-category="Mobile Development"
                            data-tags="Travel, Camping, Holiday Parks, Itinerary Planner, Google Maps, Expense Tracker, Outdoor Recreation"
                            data-about="Country Campfire is an intuitive outdoor adventure, caravan holiday park, and campsite booking mobile application tailored for nature lovers, backpackers, and road trippers. Whether planning weekend getaways or cross-country caravan expeditions across scenic locations like Port Elliot Holiday Park, the app allows travelers to discover verified camping grounds, check real-time pitch availability, view amenity facilities, and book stays effortlessly. Travelers can create custom adventure itineraries, log start and end dates, upload adventure photos and videos into private trip journals, track campsite and equipment expenses, and navigate easily with interactive GPS terrain and campsite pin maps."
                            data-features="Interactive Campsite &amp; Park Discovery: Browse verified campgrounds, national parks, and caravan holiday parks with high-res galleries and star ratings.|Custom Adventure &amp; Trip Itinerary Planner: Create and manage personalized adventure lists with custom start/end dates and daily activity itineraries.|Interactive GPS Map Navigation: Pinpoint nearby campgrounds, parking spots, tent zones, and outdoor amenities on a custom interactive map.|Trip Media Journal &amp; Photo Gallery: Upload, organize, and store travel photos and video memories directly linked to specific adventure trips.|Campground Expense Management: Keep track of pitch booking fees, equipment rentals, park permits, and shared group travel expenses.|Campsite Reviews &amp; Community Ratings: Genuine traveler ratings and reviews detailing site hygiene, campfire policies, and pet-friendly status.|Offline Map &amp; Trip Access: Access booked itineraries, emergency contacts, and campsite directions even in low-connectivity wilderness areas."
                            data-tools="Flutter, Node.js, Manage Expenses"
                            data-img="assets/images/portfolio/Country Campfire.png">
                            <img src="assets/images/portfolio/Country Campfire.png" alt="Country Campfire App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Country Campfire – Camping &amp; Adventure Booking App</h5>
                    </div>
                </div>
            </div>

            <!-- New 18. Dallas Vibez -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="Dallas Vibez – Luxury Social Commerce, Creator Feed &amp; Digital Wallet App"
                            data-category="Mobile Development"
                            data-tags="Social Commerce, E-Commerce, Creator Economy, Digital Wallet, Expense Tracker, Flutter"
                            data-about="Dallas Vibez is an ultra-modern luxury social commerce and creator marketplace mobile application engineered to seamlessly merge social networking, lifestyle content discovery, and frictionless shopping into a single opulent dark-and-gold visual interface. Users can share immersive short stories, publish curated travel and fashion feeds, interact with top influencers, and purchase trending fashion items directly from their favorite creators' posts with a single tap. The application integrates an advanced multi-currency digital wallet for managing personal expenses, split payments, instant cashbacks, and seamless merchant payouts, alongside a powerful seller dashboard for creators to track sales analytics and manage inventories."
                            data-features="Integrated Social Commerce Feed: Explore dynamic photo/video feeds, 24-hour stories, and lifestyle content with direct shoppable product tags.|Luxury Multi-Currency Digital Wallet: Real-time balance oversight, one-tap deposits, instant withdrawals, and detailed expense ledgers.|Interactive E-Commerce Storefront: Seamless product browsing, multi-angle lookbooks, size and color swatch selectors, discounts, and one-tap checkout.|Creator &amp; Influencer Profiles: Comprehensive profile hubs showcasing follower metrics, verified badges, media portfolios, and shoppable storefronts.|Robust Seller &amp; Merchant Dashboard: Real-time revenue analytics (Total Sales, Order Volume graphs), inventory control, and fulfillment tracking.|End-to-End Order Tracking: Transparent order lifecycle monitoring across Processing, Shipped, Out for Delivery, and Delivered stages.|AI-Powered Recommendation Feed: Smart algorithmic curation matching user fashion and lifestyle preferences with relevant products and trending creators."
                            data-tools="Flutter, Node.js, Manage Expenses"
                            data-img="assets/images/portfolio/Dallas-Vibez.png">
                            <img src="assets/images/portfolio/Dallas-Vibez.png" alt="Dallas Vibez App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Dallas Vibez – Luxury Social Commerce &amp; Wallet App</h5>
                    </div>
                </div>
            </div>

            <!-- New 19. E-Care -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="E-Care – Smart Telemedicine &amp; Doctor Appointment Booking App"
                            data-category="Mobile Development"
                            data-tags="Healthcare, Telemedicine, Doctor Booking, Clinic Management, Video Consultation, AI Diagnostics"
                            data-about="E-Care is an advanced, compliant telemedicine and healthcare consultation mobile application designed to bridge the gap between patients and certified medical professionals. Engineered with a calming clinical blue-and-white visual aesthetic, E-Care delivers on-demand virtual healthcare through two tailored portals for patients and healthcare practitioners. Patients can explore specialized medical departments—ranging from General Medicine and Pediatrics to Mental Health and Allied Health Care—view detailed doctor credentials, check consultation fees, and schedule both in-clinic and HD video consultations. E-Care simplifies healthcare delivery through integrated digital prescriptions, calendar appointment management, and automated medical reminders."
                            data-features="Dual Dedicated Portals: Streamlined independent onboarding and navigation for healthcare providers and patients/clients.|Multi-Specialty Doctor Directory: Browse vetted doctors, specialists, mental health counselors, and therapists with transparent fee structures.|Interactive Calendar Slot Booking: Select flexible consultation dates and real-time available time slots (morning and afternoon hours).|Doctor Credential Profiles: Review physician medical degrees, board certifications, clinical interests, spoken languages, and patient reviews.|AI-Powered Symptom Pre-Screener: Smart AI triage assistant guiding patients to the appropriate medical specialist based on reported symptoms.|Secure Teleconsultation Suite: Encrypted HD video appointments, private in-app audio calls, and chat consultations.|Digital Prescriptions &amp; Medical History: Centralized electronic health records (EHR) with downloadable digital prescriptions and appointment history."
                            data-tools="Flutter, Backend Laravel, AI APIs"
                            data-img="assets/images/portfolio/E-Cara.png">
                            <img src="assets/images/portfolio/E-Cara.png" alt="E-Care Telemedicine App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>E-Care – Smart Telemedicine &amp; Doctor Booking App</h5>
                    </div>
                </div>
            </div>

            <!-- New 20. Enceinte -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.6s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="Enceinte – Pregnancy Tracker, Maternal Care &amp; Motherhood Community App"
                            data-category="Mobile Development"
                            data-tags="Maternal Health, Pregnancy Tracker, Motherhood Community, AI Health Assistant, Parenting, Healthcare"
                            data-about="Enceinte is a compassionate maternal wellness, pregnancy tracking, and motherhood community mobile application designed to guide expecting and new mothers through every step of their maternity journey. Featuring a tender, reassuring pastel design aesthetic, the application provides clinically verified medical articles covering pregnancy stages, prenatal nutrition, maternal mental health, and postpartum recovery. Enceinte connects expecting mothers through an empathetic peer community feed where they can share personal stories, exchange advice, and build trusted friendships via direct messaging and group chats, backed by an AI maternity assistant for quick answers to common pregnancy queries."
                            data-features="Comprehensive Maternity Article Library: Curated obstetric articles, trimester guides, and evidence-based nutrition tips with search and bookmarks.|Empathetic Motherhood Social Feed: Dedicated community space for mothers to publish personal journeys, photos, thoughts, and words of encouragement.|Interactive Maternal Support Community: Follow top contributors, react with likes and comments, and save inspiring posts to private collections.|Private Direct Messaging &amp; Group Chats: Connect 1-on-1 with fellow expecting mothers or join localized maternity support groups in real time.|AI Maternal Health Assistant: 24/7 AI-driven conversational guidance providing fast, reliable answers to common prenatal and dietary questions.|Trimester Milestones &amp; Health Journal: Record weekly fetal development milestones, symptom logs, medical appointments, and bump memories.|Doctor &amp; Hospital Bag Checklists: Smart interactive planning tools to prepare for hospital delivery and newborn essentials."
                            data-tools="Flutter, Firebase, AI APIs"
                            data-img="assets/images/portfolio/Enceinte.png">
                            <img src="assets/images/portfolio/Enceinte.png" alt="Enceinte Pregnancy App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Enceinte – Pregnancy Tracker &amp; Maternal Care App</h5>
                    </div>
                </div>
            </div>

            <!-- New 21. ICAN -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.8s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="ICAN – Smart Kids Chore Management, Task Gamification &amp; Allowance App"
                            data-category="Mobile Development"
                            data-tags="Parenting, Gamification, Chore Tracker, Allowance, Task Manager, Family App"
                            data-about="ICAN is an interactive family chore management and positive habit-building mobile application designed to help parents motivate children to complete household tasks through gamified reward points and automated allowances. Parents can create individual child profiles (John, Sam, Tom, Lily), assign age-appropriate daily chores—such as doing dishes, folding laundry, vacuuming, and cleaning rooms—set custom point values (e.g. 50 points per task), and schedule recurring routines. Children stay engaged by tracking their completed task lists and watching their points tally grow into digital allowances or real-world family privileges. The app includes tiered family subscription plans, real-time completion approvals, and comprehensive chore history ledgers."
                            data-features="Multi-Child Family Profiles: Effortlessly add and customize individual child profiles with unique avatars and assigned task lists.|Gamified Task Point System: Reward children with custom points (e.g., 50 Points for Laundry, Vacuuming, Making Bed) upon chore completion.|Interactive 'Add Chore' Scheduler: Quick chore creation wizard with custom descriptions, due dates, assignee selectors, and difficulty tiers.|Real-Time Task Verification: Parents can review completed chore submissions and approve point credits before releasing allowances.|Allowance &amp; Expense Tracking: Manage children's earned allowances, savings goals, and family rewards ledger seamlessly.|Active &amp; Completed Chore History: Filter tasks by 'Running' and 'Completed' tabs to track accountability and habit consistency.|Family Subscription Plans: Flexible tiered family plans ($1.99, $2.99, $4.99/mo) supporting multiple devices and parental controls."
                            data-tools="Flutter, Firebase, Manage Expenses"
                            data-img="assets/images/portfolio/ICAN.png">
                            <img src="assets/images/portfolio/ICAN.png" alt="ICAN Chore App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>ICAN – Kids Chore &amp; Family Task Management App</h5>
                    </div>
                </div>
            </div>

            <!-- New 22. ESN -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="ESN – Clinical Facial Anatomy Mapping &amp; Aesthetic SOAP Notes App"
                            data-category="Mobile Development"
                            data-tags="HealthTech, Aesthetic Medicine, SOAP Notes, Anatomy Mapping, Dermatology, AI Diagnostics"
                            data-about="ESN (Easy SOAP Note) is a specialized medical documentation and anatomical mapping mobile application created for dermatologists, plastic surgeons, and aesthetic injection practitioners. The platform modernizes patient charting by replacing paper records with high-precision digital facial and anatomical mappers. Clinicians can annotate injection sites (Botox, dermal fillers) directly onto standardized clinical face diagrams, cross-reference Delphi Consensus and NYU anatomical terminology maps, record coronal forehead units, and generate compliant Subjective, Objective, Assessment, and Plan (SOAP) clinical notes with pinch-to-zoom precision, historical comparison, and cloud-encrypted HIPAA-ready records."
                            data-features="Interactive 3D/2D Facial Anatomy Mapper: High-definition facial diagrams with precise point-and-click injection site plotting and zoom controls.|Standardized Medical Terminology Maps: Built-in clinical references including Delphi Consensus Maps and NYU Numbers Maps for anatomical accuracy.|Digital Aesthetic SOAP Notes: Comprehensive Subjective, Objective, Assessment, and Plan charting with editable anatomical notes.|Multi-Angle Anatomical Views: Effortlessly toggle between frontal, profile, left, and right oblique facial orientations.|Historical Treatment Tracking: Compare past injection sessions, dosage units, and patient progress over time with dated entry logs.|HIPAA-Ready Cloud Security: Secure encrypted patient database ensuring strict medical confidentiality and regulatory compliance.|Offline Sync &amp; Stylus Support: Smooth touch and stylus annotation capabilities with real-time cloud data synchronization."
                            data-tools="Flutter, Backend Laravel, AI APIs"
                            data-img="assets/images/portfolio/ESN anatomy app.png">
                            <img src="assets/images/portfolio/ESN anatomy app.png" alt="ESN Anatomy App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>ESN – Clinical Facial Anatomy &amp; SOAP Notes App</h5>
                    </div>
                </div>
            </div>

            <!-- New 23. Salon Link -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="Salon Link – On-Demand Beauty Stylist &amp; Salon Job Marketplace App"
                            data-category="Mobile Development"
                            data-tags="Beauty &amp; Wellness, On-Demand Services, Salon Booking, Stylist Marketplace, GPS Map, Fintech"
                            data-about="Salon Link is an on-demand beauty services marketplace and freelance stylist hiring application connecting independent hair stylists, aesthetic professionals, and barbers with salons and clients. Designed with a sleek, minimalist dark-slate luxury visual aesthetic, the app features an interactive geo-location map showcasing nearby beauty jobs and freelance salon opportunities within a specified radius (e.g., 10km). Stylists can review job requirements, apply with a single tap, negotiate service contracts, coordinate schedules via encrypted in-app chat, and track booking payments across 'Payment Pending' and 'Payment Done' milestones with automated digital invoicing."
                            data-features="Interactive Radius Map Discovery: Locate verified salon shifts, chair rentals, and client gigs on a live GPS map with radius filters.|One-Tap Job Application: Browse detailed job briefs, pay rates, dates, and requirements with instant application submission.|Integrated Real-Time Chat: Secure in-app messaging between salons and stylists for consultation, shift coordination, and portfolio reviews.|Appointment &amp; Shift Management: Centralized calendar tracking active, completed, and upcoming appointments across salon locations.|Escrow &amp; Transparent Payments: Real-time settlement tracking with dedicated 'Payment Pending' and 'Payment Done' status badges.|Professional Stylist Profiles: Showcase verified licenses, hair and beauty portfolios, client reviews, and hourly service rates.|Automated Push Notifications: Instant alerts for new nearby salon job posts, application acceptances, and booking confirmations."
                            data-tools="Flutter, Node.js, Manage Expenses"
                            data-img="assets/images/portfolio/Hair &amp; Beauty.png">
                            <img src="assets/images/portfolio/Hair &amp; Beauty.png" alt="Salon Link App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Salon Link – Beauty Stylist &amp; Salon Marketplace App</h5>
                    </div>
                </div>
            </div>

            <!-- New 24. GroceryGo -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.6s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="GroceryGo – Hyperlocal Fresh Grocery Delivery &amp; Nearby Store App"
                            data-category="Mobile Development"
                            data-tags="Quick Commerce, Grocery Delivery, E-Commerce, Food &amp; Beverage, Live Order Tracking"
                            data-about="GroceryGo is an ultrafast on-demand grocery delivery mobile application designed to connect neighborhood supermarkets and fresh produce vendors with local shoppers for convenient 30-minute doorstep deliveries. Featuring an inviting, fresh pastel UI, customers can discover nearby partner grocery stores, search across diverse product categories—including organic fruits, farm-fresh vegetables, dairy, and poultry—apply multi-tier discount coupons, and checkout in seconds. The app provides end-to-end transparency through real-time order status tracking, automated delivery driver matching, live GPS route estimation, and a streamlined digital cart summary."
                            data-features="Nearby Grocery Store Discovery: Auto-detect user geolocation to connect with the closest neighborhood marts for rapid fulfillment.|30-Minute Fast Delivery: Streamlined logistics pipeline ensuring rapid dispatch and doorstep delivery in under 30 minutes.|Smart Category &amp; Product Search: Intuitive browsing through Fruits, Dairy, Vegetables, Meat, and Pantry staples with live stock indicators.|Smart Cart &amp; Multi-Tier Coupon Engine: Apply promo codes ('Save more, Buy more'), view itemized totals, and review discounts.|Live Order Lifecycle Tracking: Real-time progress updates from Order Placed and Store Packed to Out for Delivery and Delivery Complete.|Product Ratings &amp; Reviews: Easy post-delivery rating system allowing customers to evaluate fruit and vegetable freshness.|Secure Multi-Payment Gateway: Support for digital wallets, credit/debit cards, UPI, and Cash on Delivery with electronic receipts."
                            data-tools="Flutter, Firebase, Manage Expenses"
                            data-img="assets/images/portfolio/grocery.png">
                            <img src="assets/images/portfolio/grocery.png" alt="GroceryGo App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>GroceryGo – Hyperlocal Fresh Grocery Delivery App</h5>
                    </div>
                </div>
            </div>

            <!-- New 25. FreshMate -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.8s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="FreshMate – Quick-Commerce Farm-Fresh Grocery &amp; Festive Offer App"
                            data-category="Mobile Development"
                            data-tags="Quick Commerce, Fresh Farm Produce, Supermarket, Indian Grocery, Deals &amp; Offers, AI Inventory"
                            data-about="FreshMate is a feature-rich quick-commerce and farm-fresh grocery shopping mobile application designed for urban households. Deployed with hyperlocal pincode-based routing (e.g., Indore 452001), FreshMate delivers fresh vegetables (Coriander, Pak Choi, Italian Basil, Capsicum), seasonal fruits (Choosa Mango, Avocado, Dragon Fruit), and everyday staples directly from regional farm partners within hours. The app features a lively festive campaign center ('Happy Diwali - Saving on Festive Needs'), dedicated 'Offer Store' clearance deals, smart multi-weight selectors (10g, 250g, 750g, 1kg), bilingual search, and a friendly mascot ('Be a FreshMate') that builds strong brand loyalty."
                            data-features="Hyperlocal Pincode Geofencing: Automatic address matching and inventory display based on exact delivery zones (e.g. Indore 452001).|Farm-to-Fork Fresh Produce Catalog: Farm-sourced vegetables, exotic greens (Pak Choi, Basil), seasonal fruits, and dairy essentials.|Dedicated 'Offer Store' &amp; Festive Deals: Dynamic promotional banners, percentage discounts (up to 50% OFF), and festive combo sales.|Multi-Weight &amp; Unit Selectors: Effortlessly choose packaging sizes from 10g sprigs to 250g, 750g, or 1kg bulk bags with dynamic price adjustment.|Top Selling Items &amp; Quick Add: One-tap '+ Add' buttons with incremental quantity counters directly on product cards.|AI-Powered Smart Recommendations: Algorithmic cart suggestions for cooking recipes, daily dairy refills, and complementary spices.|Comprehensive Customer Hub: Order tracking, digital invoices, customer support chat, and multi-address management."
                            data-tools="Flutter, Backend Laravel, AI APIs"
                            data-img="assets/images/portfolio/Fresh mate- grocery app.png">
                            <img src="assets/images/portfolio/Fresh mate- grocery app.png" alt="FreshMate Grocery App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>FreshMate – Farm-Fresh Grocery &amp; Quick Commerce App</h5>
                    </div>
                </div>
            </div>

            <!-- New 26. J4T -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="J4T – On-Demand Freelancer &amp; Local Skilled Services Marketplace App"
                            data-category="Mobile Development"
                            data-tags="Freelance Marketplace, On-Demand Services, Real-Time Chat, Geolocation, Task Booking, Flutter"
                            data-about="J4T (Job 4 Today) is a comprehensive on-demand freelance services and local tradesperson booking mobile application developed using Flutter. Connecting homeowners and businesses with verified nearby professionals, J4T makes finding skilled help as simple as tapping a screen. Users can browse specialized categories—from PC repair and interior painting to gardening and skilled handiwork—filter service providers by exact mileage radius (e.g., within 0.20 to 9.50 miles), view transparent pricing, and post immediate or scheduled job requisitions. The app features integrated real-time text chat, direct in-app voice calling, seamless job lifecycle tracking (Open, Assigned, Completed), and instant contractor verification."
                            data-features="Proximity-Based Freelancer Discovery: Search and discover nearby verified professionals filtered by precise mileage distance (0.2 to 20 miles).|Instant Job Posting Wizard: Post customized task requisitions ('Post the Job') with budget, photos, and timeline requirements.|Real-Time In-App Messaging &amp; Calling: Direct, encrypted chat and voice calling between clients and freelancers for seamless coordination.|Completed Jobs &amp; History Ledger: Comprehensive overview of past contracts with itemized invoices, mileage records, and task receipts.|Verified Service Provider Profiles: Transparent profiles featuring customer reviews, job success rates, hourly pricing, and skill badges.|Dynamic Status &amp; Availability: Real-time contractor status indicators, availability toggles, and instant task acceptance notifications.|Secure Payment &amp; Escrow Protection: Digital payment holding until job milestones are verified and completed to satisfaction."
                            data-tools="Flutter, Node.js, Firebase"
                            data-img="assets/images/portfolio/J4T.png">
                            <img src="assets/images/portfolio/J4T.png" alt="J4T Freelance Services App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>J4T – Freelance &amp; Local Services Marketplace</h5>
                    </div>
                </div>
            </div>

            <!-- New 27. ScratchWin -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="ScratchWin – Gamified Digital Scratch Card, Rewards &amp; Wallet Commission App"
                            data-category="Mobile Development"
                            data-tags="Fintech, Gaming Rewards, Digital Wallet, Commission Tracker, Manage Expenses, Flutter"
                            data-about="ScratchWin is a high-engagement gamified reward, digital scratch card, and affiliate commission tracking mobile application designed with a sleek, luxury dark-mode interface with vibrant neon accents. Built to deliver excitement alongside real financial earning opportunities, users can scratch interactive digital cards (e.g. 1 of 12 series) to win cash prizes, coin multipliers, and promotional bonuses. The application integrates an enterprise-grade digital wallet that enables members to track daily earnings ($233.000+), monitor downstream affiliate spend commissions ($50.00+), review timestamped user transaction logs, and manage expenses with instant payouts, PIN security, and automated balance synchronization."
                            data-features="Interactive Multi-Touch Scratch Cards: Realistic haptic feedback and dynamic scratch-off surface revealing randomized prizes and jackpots.|Comprehensive Digital Wallet: Live oversight of daily earnings, earned commissions, account balance, and withdrawal processing.|Real-Time Affiliate Transaction History: Granular ledger showing downstream user transactions (e.g. User A, B, C, D spend logs) with timestamps.|Commission &amp; Expense Tracking: Automated calculation of partner commissions, platform cuts, and expense records with visual graphs.|Tiered Card Catalog &amp; Packs: Multi-level scratch cards with varying difficulty tiers, coin rewards, and daily login bonuses.|Instant Bank &amp; Wallet Payouts: Secure integration with payment gateways for real-time fund transfers and gift card redemptions.|Fraud Detection &amp; Security: Cryptographic validation of game outcomes, anti-tamper algorithms, and biometric/PIN authentication."
                            data-tools="Flutter, Firebase, Manage Expenses"
                            data-img="assets/images/portfolio/scratch-win.png">
                            <img src="assets/images/portfolio/scratch-win.png" alt="ScratchWin Rewards App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>ScratchWin – Gamified Rewards &amp; Wallet Commission App</h5>
                    </div>
                </div>
            </div>

            <!-- New 28. Majestic Auto Glass -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.6s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="Majestic Auto Glass – Field Service Fleet Routing &amp; Technician Navigation App"
                            data-category="Mobile Development"
                            data-tags="Field Service, Fleet Management, Route Optimization, Google Maps, Logistics, Automotive"
                            data-about="Majestic Auto Glass is an enterprise mobile field service and multi-stop route dispatch application created specifically for mobile automotive glass repair and replacement technicians. Developed with a modern gold-and-navy executive visual identity, the app empowers technicians to execute daily on-site service appointments with maximum efficiency. Technicians can view assigned daily jobs ('Created Route'), filter customers by scheduled date, and initiate turn-by-turn route navigation via Google Maps integration with smart waypoint re-sequencing (Route A, Route B, Route C, Route D) to bypass traffic delays. The application features direct customer dialing, digital work order completion, photo documentation before/after windshield installation, and full service history archives."
                            data-features="Smart Multi-Stop Route Optimization: Automated sequencing of daily customer visits (Route A to D) minimizing travel time and fuel consumption.|Turn-by-Turn GPS Navigation: Live interactive Google Maps integration with one-tap 'Start Route' voice guidance and traffic awareness.|Created Route &amp; Job Dispatch Queue: Clean chronological listing of scheduled client addresses, contact numbers, and repair details.|Customer Profile &amp; Quick Actions: Instant one-tap calling, SMS dispatch updates, and estimated arrival time (ETA) notifications.|Digital Work Orders &amp; POD: Capture on-site customer signatures, job timestamps, and pre/post-repair windshield inspection photos.|Service History &amp; Archive: Dedicated 'Current' and 'Completed' tabs for auditing past technician runs and repair warranties.|Offline Route Caching: Seamless route and work order access even in basements, underground garages, or low-cellular zones."
                            data-tools="Flutter, Laravel, AI APIs"
                            data-img="assets/images/portfolio/majestic-auto-glass.png">
                            <img src="assets/images/portfolio/majestic-auto-glass.png" alt="Majestic Auto Glass App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Majestic Auto Glass – Fleet Routing &amp; Field Service App</h5>
                    </div>
                </div>
            </div>

            <!-- New 29. Khidmah Home -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.8s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="Khidmah Home (خدمة هوم) – On-Demand Home Improvement &amp; Contractor Marketplace"
                            data-category="Mobile Development"
                            data-tags="Home Services, Arabic/English RTL, Construction, Handyman, Bidding Marketplace, Manage Expenses"
                            data-about="Khidmah Home (خدمة هوم – At Your Service) is a bilingual (Arabic and English) on-demand home improvement, maintenance, and contractor marketplace mobile application. Tailored for the Middle Eastern and global property maintenance markets, the platform bridges homeowners with certified trade professionals across core categories: Design, Construction, Installation, Maintenance, and Shipping. Homeowners can post work orders, review bids from verified tradesmen, compare portfolio ratings, and track live job progress. For contractors and service workers, Khidmah Home provides a complete assignment suite with proposal submission (160+ active tenders), milestone invoicing, expense monitoring, and job status management."
                            data-features="Bilingual RTL/LTR Architecture: Native support for Arabic and English UI layouts, localized typography, and regional formatting.|6-Category Home Service Matrix: Streamlined access to Design, Construction, Installation, Handyman Maintenance, and Material Shipping.|Proposals &amp; Bidding Marketplace: Homeowners receive competitive contractor quotes with clear price breakdowns (e.g. $99.00 / $19.50).|Assignment &amp; Task Control Center: Dedicated 'My Work' and 'My Assignments' dashboards for active, pending, and completed service tasks.|Contractor Verification &amp; 5-Star Reviews: Trust-focused contractor profiles featuring licensed certifications and authentic client ratings.|Direct Contractor Communication: Integrated in-app messaging and proposal negotiation tools ('Send', 'Meet') for prompt coordination.|Expense &amp; Milestone Payment Tracking: Flexible milestone escrow payments, material cost logging, and automated digital service receipts."
                            data-tools="Flutter, Laravel, Firebase"
                            data-img="assets/images/portfolio/khidmah-home.png">
                            <img src="assets/images/portfolio/khidmah-home.png" alt="Khidmah Home App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Khidmah Home – Home Improvement &amp; Contractor App</h5>
                    </div>
                </div>
            </div>

            <!-- New 30. LoanMe -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="LoanMe – Quick &amp; Secure Digital Lending &amp; Personal Loan Management App"
                            data-category="Mobile Development"
                            data-tags="Fintech, Digital Lending, Personal Loans, AI Credit Scoring, Manage Expenses, Financial Calculator"
                            data-about="LoanMe is a modern, bank-grade digital lending, loan origination, and personal debt management mobile application developed using Flutter. Featuring a clean, reassuring azure-blue financial interface, LoanMe allows qualified borrowers to request personal loans—such as Home Renovation ($15,000 – $16,000), Education, or Medical funding—with instant matching across trusted digital lenders. Borrowers can track active loan parameters in real time (e.g. 8.5% interest rate, 15-month term, $1,325 monthly installment), calculate amortization schedules, communicate securely with financial advisors via encrypted in-app chat, and track upcoming due dates and repayment histories to maintain healthy credit scores."
                            data-features="Frictionless Loan Request Application: Create customized loan requests in minutes ('Create Loan Request') with purpose, amount, and term selectors.|Real-Time Loan Overview Dashboard: Instant visibility into active debts, monthly installment dues ($1,325/mo), interest rates, and maturity dates.|Dual Lenders &amp; Borrower Matching Engine: Automated algorithm pairing loan applicants with verified credit institutions based on credit risk.|In-App Financial Advisor Chat: Secure real-time messaging with dedicated loan officers and advisors (e.g. Jordy Dorkidis, Lindsey Septimus).|Repayment Schedule &amp; Due Date Tracking: Visual calendar alerts for upcoming EMIs, grace periods, and automated penalty-free payment reminders.|Comprehensive Loan History Archive: Filter past loans by All, Pending, Overdue, and Completed states with downloadable financial statements.|Digital KYC &amp; AI Risk Evaluation: Fast identity verification, document OCR, bank account linking, and bank-grade data encryption."
                            data-tools="Flutter, Firebase, AI APIs, Manage Expenses"
                            data-img="assets/images/portfolio/loanme.png">
                            <img src="assets/images/portfolio/loanme.png" alt="LoanMe Personal Loans App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>LoanMe – Quick &amp; Secure Digital Loans App</h5>
                    </div>
                </div>
            </div>

            <!-- New 31. VitalPulse -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="VitalPulse – Smart Health, Habit &amp; Vital Signs Tracker App"
                            data-category="Mobile Development"
                            data-tags="HealthTech, Habit Tracker, Blood Glucose, Step Counter, Medication Reminder, AI Health"
                            data-about="VitalPulse is a smart health monitoring and personal wellness tracking mobile application designed to empower users to take control of their daily physical well-being. Engineered with a calming frosted-glass pastel visual design, the app centralizes critical daily vitals into an intuitive dashboard: daily step counter with goal progression (e.g. 2,053 of 6,000 steps), hydration water intake logger (20 ml loggers), blood glucose readings (100 mg/dL), and a comprehensive medication reminder schedule (Medicine 1 to 4 with dosages). Users can monitor their progress via calendar timelines, earn achievement badges (Blood Glucose Badge, React Recovery, Boast Badge), and review AI-driven insights to foster long-term healthy habits."
                            data-features="Real-Time Pedometer &amp; Step Goal Tracker: Interactive semi-circle gauge tracking daily steps against target goals with historical calendars.|Hydration Water Intake Logger: Quick-tap water logging interface with visual progress animation to maintain optimal daily hydration.|Blood Glucose &amp; Vitals Logging: Track daily glucose levels (mg/dL) with trend indicators (normal, elevated) and automated repeat alerts.|Medication Schedule &amp; Dosage Reminders: Comprehensive medicine catalog tracking dosages (e.g., 20mg, 30mg) with push reminders.|Gamified Health Badges &amp; Achievements: Unlock collectible milestones (Luxert Badge, Recovery Badges) for maintaining wellness streaks.|Weekly &amp; Monthly Progress Calendars: Visual charts displaying vitals fluctuations, step consistency, and habit adherence.|AI Health Insights &amp; Sync: Smart algorithmic recommendations based on logged vitals and seamless integration with wearable devices."
                            data-tools="Flutter, Firebase, AI APIs"
                            data-img="assets/images/portfolio/vital-pulse.png">
                            <img src="assets/images/portfolio/vital-pulse.png" alt="VitalPulse Health Tracker App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>VitalPulse – Health &amp; Vital Signs Tracker App</h5>
                    </div>
                </div>
            </div>

            <!-- New 32. Matbakh -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.6s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="Matbakh – Home Chef, Artisan Recipes &amp; Gourmet Food Delivery App"
                            data-category="Mobile Development"
                            data-tags="Food Delivery, Home Chef, Gourmet Dining, Cloud Kitchen, Recipe Marketplace, E-Commerce"
                            data-about="Matbakh (مطبخ – The Kitchen) is a specialized culinary marketplace and artisanal food delivery mobile application connecting passionate home chefs and boutique cloud kitchens with food lovers. Styled in an appetizing coral-red interface, Matbakh allows users to discover verified local chefs (such as Chef Richard Sam), explore curated home recipes (Farmhouse Pizza, Corn 'n Cheese, Roasted Chicken, Fresh Veggies), and order authentic, freshly prepared home-cooked meals. Customers can filter food by daily meal occasions—Breakfast, Lunch, Dinner, Drinks, and Snacks—track chef ratings, customize recipe portions, and enjoy fast doorstep delivery with real-time order tracking."
                            data-features="Verified Home Chef Profiles: Explore independent chef storefronts featuring bios, specialties, star ratings, and authentic customer reviews.|Curated Recipe &amp; Food Catalog: High-resolution food lookbooks showcasing signature dishes (Pizzas, Strips, Roasted Chicken, Healthy Bowls).|Meal Occasion Filtering: Instant categorization for Breakfast, Lunch, Dinner, Drinks, and Snacks tailored to dining preferences.|Interactive Search &amp; Ingredient Filters: Fast search across ingredients, diet preferences (Veggie, Halal, Gluten-Free), and chef specialties.|Smart Cart &amp; Order Customization: Customize ingredient toppings, add cooking notes for chefs, and review instant price summaries.|Live Kitchen &amp; Delivery Tracking: Follow order lifecycle stages from Chef Preparation to Dispatch and Doorstep Delivery.|Secure In-App Checkout: Integrated payment processing supporting digital wallets, credit/debit cards, and cash on delivery."
                            data-tools="Flutter, Node.js, Firebase"
                            data-img="assets/images/portfolio/matbakh.png">
                            <img src="assets/images/portfolio/matbakh.png" alt="Matbakh Food Delivery App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Matbakh – Home Chef &amp; Gourmet Food Delivery App</h5>
                    </div>
                </div>
            </div>

            <!-- New 33. Mokalik -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.8s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="Mokalik – Auto Spare Parts, Mechanic Dispatch &amp; Vehicle Repair Marketplace App"
                            data-category="Mobile Development"
                            data-tags="Auto Repair, Spare Parts Marketplace, Mechanic Booking, Geolocation, Fleet Service, E-Commerce"
                            data-about="Mokalik is a comprehensive automotive aftermarket, spare parts marketplace, and on-demand mobile mechanic dispatch application tailored for vehicle owners and repair workshops. Featuring a vibrant magenta-and-white visual identity, the app allows drivers to order vehicle-specific spare parts—such as Bosch Engine Oil ($40), AC Compressors ($180), Evaporators ($85), Headlight Bulbs, Subwoofers, and Injection Pumps—filtered by exact car make and model (e.g., IVM 6490 A). In addition to parts delivery, Mokalik integrates an interactive GPS service map connecting car owners with certified roadside mechanics and automotive service hubs for prompt diagnostics and on-site installations."
                            data-features="Vehicle-Specific Parts Finder: Instant filtering of OEM and aftermarket components tailored to exact car models (e.g. IVM 6490 A).|Interactive Mechanic Service Map: Live GPS map pinpointing certified nearby repair garages and mobile mechanic units in real time.|Extensive Spare Parts Catalog: Browse Engine Oil, AC Compressors, Fuel Pumps, Lighting, and Accessories with transparent pricing.|Frictionless Checkout &amp; Order Management: Streamlined ordering with customer assignment ('Behalf of Rocky Smith') and unique Order IDs.|Work Order &amp; Delivery Tracking: Real-time status updates from parts dispatch to mechanic arrival and repair completion.|Workshop Billing &amp; Invoicing: Itemized billing detailing component costs, mechanic labor charges, and digital warranty receipts.|Mechanic Dispatch &amp; Roadside Assistance: One-tap emergency breakdown support connecting drivers with available road mechanics."
                            data-tools="Flutter, Laravel, Manage Expenses"
                            data-img="assets/images/portfolio/mokalik.png">
                            <img src="assets/images/portfolio/mokalik.png" alt="Mokalik Auto Parts App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Mokalik – Auto Spare Parts &amp; Mechanic App</h5>
                    </div>
                </div>
            </div>

            <!-- New 34. MCA-OPP -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="MCA-OPP – Maritime Exam Preparation &amp; Officer Certification App"
                            data-category="Mobile Development"
                            data-tags="EdTech, Maritime Exam, OOW Preparation, Timed Quizzes, Officer Certification, Test Prep"
                            data-about="MCA-OPP (Officer Practice Partner) is an advanced maritime education, mock examination, and certification preparation mobile application created for aspiring Merchant Navy deck officers and Officer of the Watch (OOW) candidates. Designed with an authoritative deep-navy maritime aesthetic, the application prepares mariners for rigorous MCA examinations across General Knowledge, English proficiency, navigation rules, and safety regulations. Trainees can take timed mock examinations (e.g., 30 questions in 30 minutes), review detailed scoring metrics (Correct Answers vs. Questions to Improve On), access tiered subscription plans (Officer Plan £6.99/mo), and track historical purchase transactions seamlessly."
                            data-features="MCA &amp; OOW Standardized Question Bank: Hundreds of verified maritime exam questions covering navigation, safety, and seamanship.|Timed Exam Simulation Engine: Realistic 30-minute exam countdown timer replicating official maritime certification test conditions.|Interactive Score Analytics &amp; Breakdown: Circular completion gauges highlighting correct answers (16/08) and targeted areas for improvement.|Flexible Officer Subscription Plans: In-app subscription tiers (Officer £6.99/Month) offering unlimited practice questions and timed trials.|Comprehensive Exam History &amp; Review: Review past test attempts, question-by-question explanations, and historical performance graphs.|Transaction History Ledger: Transparent financial record of test pack purchases and active recurring subscription renewals.|Multi-Platform Social Authentication: Rapid user onboarding via Email, Google, and Facebook with cross-device study synchronization."
                            data-tools="Flutter, Firebase, Manage Expenses"
                            data-img="assets/images/portfolio/mca-opp.png">
                            <img src="assets/images/portfolio/mca-opp.png" alt="MCA-OPP Maritime Exam App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>MCA-OPP – Maritime Exam &amp; Officer Prep App</h5>
                    </div>
                </div>
            </div>

            <!-- New 35. Don't Be Lonely -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="Don't Be Lonely – Live Video Dating, Matchmaking &amp; Social Chat App"
                            data-category="Mobile Development"
                            data-tags="Dating App, Video Chat, Live Matchmaking, Social Networking, In-App Gifts, Virtual Economy"
                            data-about="Don't Be Lonely is an engaging live video dating, social discovery, and instant video chat mobile application crafted to help singles combat isolation and form genuine relationships worldwide. Styled in a vibrant coral-pink and modern soft-blue aesthetic, the application pairs users through real-time random video matching ('Start Chat', 'SKIP') with verified international profiles (e.g. Susanne, Germany). Users can enjoy crystal-clear HD 1-on-1 video calls with interactive audio waveforms, participate in direct text messaging, and express affection through an integrated virtual gift economy where users can purchase and redeem 'Hearts' packs (from 30 to 2,000 Hearts) or send virtual presents."
                            data-features="Instant 1-on-1 Video Matching: Connect face-to-face with verified singles worldwide with fast swipe and skip controls.|Virtual Hearts Economy &amp; Store: Tiered in-app coin packs ($1.99 to $99.99 for 30 to 2,000 Hearts) for sending premium gifts.|Live Video Call Controls: High-definition video streaming with real-time audio waveform indicators and picture-in-picture view.|Direct Real-Time Text Messaging: Private chat inbox with delivery statuses, photo sharing, and scheduling for offline connections.|Safety &amp; Verified Profiles: Geolocation verification (e.g. Germany), safety reporting flags, and automated content moderation.|Heart Beats &amp; Engagement Metrics: Dynamic interactive elements tracking connection chemistry ('9 Heart beats/minute').|Redeemable Creator Rewards: Seamless redemption pipeline allowing popular broadcasters to convert received virtual hearts into earnings."
                            data-tools="Flutter, Node.js, AI APIs, Manage Expenses"
                            data-img="assets/images/portfolio/dont-be-lonely.png">
                            <img src="assets/images/portfolio/dont-be-lonely.png" alt="Don't Be Lonely Dating App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Don't Be Lonely – Live Video Dating App</h5>
                    </div>
                </div>
            </div>

            <!-- New 36. Snapdz -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.6s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="Snapdz – Private Event Photo Vaults &amp; Collaborative Media Rooms App"
                            data-category="Mobile Development"
                            data-tags="Photo Sharing, Event Vaults, Private Rooms, Real-Time Chat, Short Video Reels, Flutter"
                            data-about="Snapdz is a creative private photo vault, collaborative event album, and media-sharing mobile application crafted to bring friends, families, and colleagues together around life's best memories. Featuring an owl-inspired visual identity with playful wooden door motifs representing private digital rooms, users can create themed memory vaults for Marriages, Family reunions, School graduations, or Corporate offices. Members can join via invite links or QR codes, upload high-resolution photos and video clips, engage in room-specific real-time group chats, and publish short video stories and reels with interactive community comments."
                            data-features="Themed Private Media Rooms: Create and organize custom event albums (Marriage, Family, Office, School) with dedicated access permissions.|Dual Room Management: Seamlessly navigate between 'My Created Rooms' (25+) and 'Invited Rooms' (105+) with instant search.|Invite via Link &amp; QR Code: Quick frictionless room onboarding through shareable secret links and scannable QR invites.|Real-Time In-Room Messaging: Built-in private chat channel within each media room for comments, reactions, and banter.|Full-Screen Video Reels &amp; Stories: Immersive short video player with like counts (44K+), timestamped comments, and sharing.|Standard &amp; VIP Membership Tiers: Account management with tiered cloud storage limits and extended membership validity.|High-Resolution Cloud Backup: Secure end-to-end encrypted storage preserving original camera quality for every captured moment."
                            data-tools="Flutter, Node.js, Firebase"
                            data-img="assets/images/portfolio/snapdz.png">
                            <img src="assets/images/portfolio/snapdz.png" alt="Snapdz Photo Vaults App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Snapdz – Private Event Albums &amp; Media Rooms App</h5>
                    </div>
                </div>
            </div>

            <!-- New 37. Pilgrim Paths -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.8s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="Pilgrim Paths – Camino de Santiago Route Navigation &amp; Albergue Booking App"
                            data-category="Mobile Development"
                            data-tags="Travel, Camino de Santiago, Hiking Navigation, Elevation Profile, Albergue Booking, Pilgrimage"
                            data-about="Pilgrim Paths is a specialized hiking navigation, itinerary planning, and accommodation booking mobile application built for pilgrims and backpackers walking the iconic Camino de Santiago routes (Camino Francés, Camino del Norte, etc.). Developed in an organic earthy olive-green aesthetic, the app guides travelers daily from departure to arrival towns (e.g. León to La Robla). Trekkers can track real-time elevation profiles (831m to 1,005m ascent/descent), discover nearby pilgrim hostels (Albergues from $20 to $30/night), locate essential services like hospitals, restaurants, and supermarkets, and navigate confidently using interactive GPS trail maps with offline route caching."
                            data-features="Daily Camino Stage Planner: Select custom daily start and end waypoints (e.g., León to La Robla) with distance and difficulty estimates.|Real-Time Elevation &amp; Terrain Profile: Visual mountain elevation charts tracking meters gained (+831m) and elevation loss (-800m).|Albergue &amp; Hotel Reservation: Book certified pilgrim hostels ($20-$30/night) with guest reviews, amenity badges, and instant confirmation.|Essential Waypoint Services: Locate nearby restaurants, emergency medical centers/hospitals, water points, and shops along the trail.|Interactive GPS Trail Map: Detailed Camino map featuring live GPS location, route markers, Cashell Woods trail segments, and map sharing.|Pilgrim Community Reviews: Authentic ratings and first-hand recommendations from fellow pilgrims on albergue cleanliness and hospitality.|Offline Trail Caching: Full access to elevation maps, emergency contacts, and booked stays even in mountain valleys without cellular coverage."
                            data-tools="Flutter, Laravel, Firebase"
                            data-img="assets/images/portfolio/pilgrim-paths.png">
                            <img src="assets/images/portfolio/pilgrim-paths.png" alt="Pilgrim Paths App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Pilgrim Paths – Camino Pilgrimage &amp; Trail Booking App</h5>
                    </div>
                </div>
            </div>

            <!-- New 38. Pocket Care -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="Pocket Care – Smart Pet Health Tracker, Activity Monitor &amp; Vet Records App"
                            data-category="Mobile Development"
                            data-tags="Pet Care, Smart Health Tracker, Activity Monitor, Vet Checkups, Wearable Sync, Animal Wellness"
                            data-about="Pocket Care is a pet health monitoring, wearable activity tracking, and veterinary checkup mobile application designed for loving pet parents and caretakers. Featuring a friendly pastel-pink and soft-slate interface, the app allows users to manage multiple pet profiles (such as dogs Chie and Panchu), sync with smart pet collars, track daily physical activity (e.g., active calorie burn 9.4 Kcal and step counters), and record historical health assessments (overall health score 75%). Caretakers can also record and store high-definition video clips of pet symptoms or checkup sessions, access training guides, and share comprehensive digital health journals with veterinarians."
                            data-features="Multi-Pet Patient Profiles: Centralized management of dogs and cats (Chie, Panchu) with breed, gender, and age records.|Smart Collar &amp; Device Pairing: Seamless Bluetooth/Wi-Fi synchronization ('Connect your device!') with smart activity tracking collars.|Daily Activity &amp; Calorie Burn: Visual weekly energy graphs tracking active Kcal burned and daily steps with healthy benchmark goals.|Video Checkup &amp; Symptom Recordings: Capture and catalog video logs of pet physical condition with timestamps for vet consultations.|Health History &amp; Vitals Diary: Monitor holistic health indices (75% optimal status), heart rate, and historical recovery milestones.|Pet Training &amp; Behavioral Modules: Built-in training guides and obedience habit modules curated by certified animal behaviorists.|Veterinary Feedback &amp; Review System: Dedicated feedback channel for rating vet visits, clinics, and logging specialist care advice."
                            data-tools="Flutter, Firebase, AI APIs"
                            data-img="assets/images/portfolio/pocket-pet.png">
                            <img src="assets/images/portfolio/pocket-pet.png" alt="Pocket Care Pet App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Pocket Care – Pet Health &amp; Activity Tracker App</h5>
                    </div>
                </div>
            </div>

            <!-- New 39. Petgram -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="Petgram – Pet Social Network, Stories &amp; Live Video Streaming App"
                            data-category="Mobile Development"
                            data-tags="Social Media, Pet Community, Live Streaming, Virtual Gifts, Short Video Reels, Manage Expenses"
                            data-about="Petgram is an engaging lifestyle social networking and live-streaming mobile application tailored for pet parents, animal enthusiasts, and pet influencers. Styled in an azure-blue modern social aesthetic, Petgram enables users to share high-resolution photo galleries and short video reels of their furry companions, engage in direct one-on-one messaging with friends across the globe, and explore trending animal content on a dynamic discovery grid. The platform incorporates an interactive live video broadcast studio with a coin-based virtual gift economy ('Send a gift - 400 coins'), where viewers can send animated presents like teddy bears, luxury cars, hearts, and rockets to support pet creators."
                            data-features="Immersive Social Photo &amp; Video Feed: Browse multi-photo carousels and scenic travel posts with friends with full like and comment features.|Real-Time Direct Messaging: Private encrypted 1-on-1 chat inbox with photo attachments, conversation search, and active status indicators.|Explore &amp; Video Reels Discovery: Algorithmic media grid highlighting trending animal moments, humorous pet reels, and popular creators.|Interactive Live Video Broadcasting: Stream live pet playtime sessions with real-time viewer interactions and live commentary bubbles.|Virtual Coin &amp; Gift Economy: Viewers purchase coin packs to send animated gifts (Teddy Bears, Sports Cars, Hearts, Rockets) to creators.|Creator Revenue &amp; Expense Tracking: Manage received gift coins, monitor balance earnings, and request cashouts with complete transparency.|Pet Community Badges &amp; Tags: Tag fellow pet owners in posts, follow favorite animal influencers, and join localized pet parent clubs."
                            data-tools="Flutter, Node.js, Manage Expenses"
                            data-img="assets/images/portfolio/petgram.png">
                            <img src="assets/images/portfolio/petgram.png" alt="Petgram Pet Social App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Petgram – Pet Social Network &amp; Live Stream App</h5>
                    </div>
                </div>
            </div>

            <!-- New 40. TradePro -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.6s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="TradePro – Forex, Indices &amp; Multi-Asset CFD Trading Platform App"
                            data-category="Mobile Development"
                            data-tags="Fintech, Forex Trading, Candlestick Charts, Order Execution, Stock Market, Manage Expenses"
                            data-about="TradePro is a high-performance cross-platform financial trading and multi-asset market analytics mobile application built for retail traders and investment enthusiasts. Designed with an ultra-sleek dark institutional trading interface, TradePro provides real-time tick-by-tick streaming quotes across Forex currency pairs (e.g., EUR/USD, Silver/USD), commodities, and global indices. Traders can analyze markets with interactive multi-timeframe candlestick charts (M1, M5, H1, D1) powered by technical indicators (Bollinger Bands, Moving Averages), execute instant buy/sell orders with Take Profit and Stop Loss levels, monitor open positions and swaps, and toggle effortlessly between demo practice accounts and live broker accounts."
                            data-features="Real-Time Streaming Quotes: Live bid/ask price feeds across major Forex pairs, gold, silver, and global market indices.|Interactive Technical Candlestick Charts: Multi-timeframe zooming charts (M1 to Monthly) equipped with technical indicators and drawing tools.|Instant Order Execution &amp; SL/TP: Place instant market orders with customized Stop Loss and Take Profit risk management parameters.|Positions &amp; Trade History Ledger: Monitor active profit/loss (P&amp;L), closed order summaries, overnight swap fees, and execution timestamps.|Demo &amp; Multi-Broker Account Switcher: Practice strategies risk-free with virtual capital or link live broker accounts with one tap.|Price Alerts &amp; Volatility Notifications: Instant push alerts for breakout price thresholds, spread updates, and economic news.|Bank-Grade Financial Security: Biometric authentication, encrypted order transmission, and two-factor transaction security."
                            data-tools="Flutter, Node.js, Manage Expenses"
                            data-img="assets/images/portfolio/forex-trading.png">
                            <img src="assets/images/portfolio/forex-trading.png" alt="TradePro Trading App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>TradePro – Forex &amp; CFD Trading Platform</h5>
                    </div>
                </div>
            </div>

            <!-- New 41. QUADS U -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.8s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="QUADS U – College Campus Virtual Tours &amp; Student Mentorship App"
                            data-category="Mobile Development"
                            data-tags="EdTech, Campus Virtual Tours, Student Mentorship, College Discovery, Appointment Booking"
                            data-about="QUADS U ('Connect, Explore, Learn') is an innovative higher-education discovery, virtual campus touring, and peer mentorship mobile application designed to connect prospective college students with current undergraduates. Featuring an energetic navy-and-pastel visual identity, the app empowers high school students and families to explore university campuses from anywhere in the world through personalized 1-on-1 virtual tours. Prospective applicants can search by academic majors (Chemistry, Computer Science, Accounting), browse verified student guide profiles (such as Kasey B, Adriana C), schedule video tour sessions in their preferred time zone (EST), and receive honest, firsthand advice about dorm life, academics, and college culture."
                            data-features="Personalized Virtual Campus Tours: Book 1-on-1 interactive video walk-throughs of university campuses guided by current students.|Academic Subject &amp; Major Categorization: Filter student mentors across Chemistry, Computer Science, Business, and Accounting.|Verified Student Guide Profiles: Explore student credentials, undergraduate institutions, reviews, and 'What makes me a unique guide'.|Smart Session Scheduling: Flexible calendar booking with automatic time-zone synchronization (EST) and unique booking IDs.|Session Management Hub: Filter mentorship appointments across All, Running, Completed, and Cancelled stages.|Direct In-App Coordination: Secure messaging with campus guides to customize tour itineraries and ask specific admissions questions.|Campus Resource Library: Access college blogs, virtual campus maps, dorm guides, and financial aid tips curated by student bodies."
                            data-tools="Flutter, Firebase, Laravel"
                            data-img="assets/images/portfolio/quads-u.png">
                            <img src="assets/images/portfolio/quads-u.png" alt="QUADS U Campus App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>QUADS U – Campus Tours &amp; Student Mentorship</h5>
                    </div>
                </div>
            </div>

            <!-- New 42. CareConnect -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="CareConnect – On-Demand Telehealth &amp; Doctor Video Consultation App"
                            data-category="Mobile Development"
                            data-tags="HealthTech, Telemedicine, Doctor Booking, HD Video Call, Family Profiles, AI Diagnostics"
                            data-about="CareConnect is a comprehensive on-demand telemedicine and doctor video consultation mobile application engineered to bring quality medical healthcare directly into patients' homes. Built with a clean clinical blue-and-white visual identity, CareConnect supports multi-member family accounts (John, Smith, Myla) under a single login. Patients can browse certified healthcare practitioners, specialists, and bone orthopedics (such as Dr. Chan Jack), check real-time clinic or video availability, select flexible consultation time slots (20-min sessions), and engage in secure encrypted HD split-screen video consultations. The app simplifies medical billing with upfront fee breakdowns and automated prescription delivery."
                            data-features="Multi-Member Family Profiles: Add and manage dependents and family members (John, Smith, Myla) under one patient account.|Specialist Doctor Directory: Browse board-certified physicians, bone specialists, and counselors with transparent fees and reviews.|Real-Time Slot Booking: Interactive calendar selector allowing patients to choose morning, afternoon, or evening video consult slots.|Encrypted HD Video Consultations: High-definition split-screen video appointments with mute controls and camera flipping.|Itemized Consultation Billing: Upfront payment breakdown detailing doctor fees ($50), platform charges, and digital invoices ($99 total).|In-App Chat &amp; Appointment Messaging: Connect directly with clinic coordinators for pre-appointment screening and follow-ups.|Digital Prescriptions &amp; EHR Records: Download signed digital prescriptions and access complete medical consultation histories."
                            data-tools="Flutter, Firebase, AI APIs"
                            data-img="assets/images/portfolio/doctor-telehealth.png">
                            <img src="assets/images/portfolio/doctor-telehealth.png" alt="CareConnect Telehealth App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>CareConnect – Telehealth &amp; Doctor Video Consult App</h5>
                    </div>
                </div>
            </div>

            <!-- New 43. Recite Pro -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="Recite Pro – AI-Powered Quran Tajweed &amp; Prayer Recitation App"
                            data-category="Mobile Development"
                            data-tags="Islamic App, Quran Recitation, Tajweed AI, Audio Recording, Prayer Practice, EdTech"
                            data-about="Recite Pro is an advanced Islamic educational and Quranic recitation mobile application powered by speech-recognition AI to help Muslims around the world perfect their Tajweed, Quran reading, and daily prayer recitations. Designed with a peaceful teal-and-gold Islamic visual motif, Recite Pro offers structured learning modules for Quran Surahs (e.g. Surah An-Naas), Azan, Durood, Arabic Alphabets, and daily prayer practices. Learners can record their voice recitations directly in the app, listen to syllable-by-syllable audio waveforms, and receive instant AI analysis across five critical Tajweed criteria: Consistency, Speed, Intonation, Pitch, and Pronunciation."
                            data-features="Comprehensive Islamic Practice Modules: Structured learning libraries covering Quran, Azan, Durood, Arabic Alphabets, and Prayers.|Interactive Audio Recording Studio: Practice Ayah recitations with real-time waveform capture and native audio playback.|AI-Powered Tajweed Scoring Engine: Evaluates recitations against 5 key metrics: Consistency, Speed, Intonation, Pitch, and Pronunciation.|Overall Recitation Mastery Gauge: Circular analytics dial tracking overall accuracy score (e.g. 60% Overall) with personalized improvement tips.|Verse Transliteration &amp; Translations: English phonetics and meaning accompany classical Arabic script for accessible comprehension.|Personal Favorites &amp; Bookmarks: Bookmark favorite Surahs and daily Duas for quick daily memorization routines.|Daily Recitation Streaks &amp; Progress: Track consistent daily revision habits with historical milestone logs and achievement badges."
                            data-tools="Flutter, Firebase, AI APIs"
                            data-img="assets/images/portfolio/recite-pro.png">
                            <img src="assets/images/portfolio/recite-pro.png" alt="Recite Pro Islamic App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Recite Pro – Quran Tajweed &amp; Prayer Recitation App</h5>
                    </div>
                </div>
            </div>

            <!-- New 44. Ref Sorted -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.6s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="Ref Sorted – Sports Match Official &amp; Referee Dispatch App"
                            data-category="Mobile Development"
                            data-tags="Sports Tech, Referee Booking, Match Officials, Soccer League, Game Scheduler, Manage Expenses"
                            data-about="Ref Sorted ('Game On') is an on-demand sports match official scheduling and referee dispatch mobile application engineered to solve the grassroots sports referee shortage. Styled in an athletic Irish emerald-green visual identity, the platform connects sports clubs, team coaches, and league administrators with certified, background-checked referees across soccer, Gaelic football, and youth leagues. Coaches can post upcoming fixtures in under 3 minutes (e.g. Riverside FC vs Valley United, U14 Boys), set match times (10:00 AM, 1:00 PM), and track official assignments. Qualified referees can review nearby matches, accept assignments, log match cards, and receive digital match fees directly."
                            data-features="Dual Coach &amp; Referee Roles: Dedicated role onboarding allowing coaches to post matches and referees to accept assignments.|Quick 3-Step Game Creation Wizard: Schedule new matches with age group (U14 Boys), sport type, venue location, and kickoff times.|Match Status Control Board: Real-time overview of fixtures across Open Games (3), Past Games (12), and active 'Game On' status.|Automated Official Dispatch: Smart notification system instantly broadcasting newly posted matches to verified nearby referees.|Referee Match Fee &amp; Expense Management: Transparent compensation tracking, match fee disbursements, and league financial records.|Matchday Roster &amp; Card Reporting: Referees can record yellow/red cards, match scores, and disciplinary incidents post-game.|Push Notifications &amp; Fixture Reminders: Instant alerts for referee acceptance, match cancellations, and field time updates."
                            data-tools="Flutter, Node.js, Manage Expenses"
                            data-img="assets/images/portfolio/ref-sorted.png">
                            <img src="assets/images/portfolio/ref-sorted.png" alt="Ref Sorted Sports App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Ref Sorted – Sports Match Official &amp; Referee App</h5>
                    </div>
                </div>
            </div>

            <!-- New 45. EcoPoints -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.8s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="EcoPoints – Waste Recycling, Carbon Offset &amp; Gamified Rewards App"
                            data-category="Mobile Development"
                            data-tags="GreenTech, Waste Recycling, Sustainability, Gamification, Reward Points, E-Commerce"
                            data-about="EcoPoints is an environmental sustainability, circular economy, and waste recycling reward mobile application designed to incentivize citizens and corporations to recycle household plastics, packaging, and electronics. Engineered in a fresh botanical green aesthetic, the app allows users to document recyclable items by snapping photos (1 to 3 images), categorizing materials across Automotive, Baby, and Books, and submitting them to verified neighborhood recycling hubs. In return, recyclers earn points (130 Points per submission) redeemable in an integrated rewards marketplace for electronic gadgets (instant cameras, smartphones), beverages (Pepsi, yogurt), and snack essentials."
                            data-features="Photo Waste Submission Wizard: Upload 1 to 3 photos of recyclable plastics and packaging with geolocation verification.|Recycling Hub Geofencing: Hyperlocal discovery of collection centers and recycling bins across Indore and urban zones.|Gamified Point Reward Engine: Earn standardized points (e.g. 130 Points) for validated scrap and plastic donations.|Rich Gift Redemption Marketplace: Exchange earned points for lifestyle gadgets, cameras, grocery goods, and discount vouchers.|Recycling Campaign Directory: Browse corporate and community green drives with validity timers and sharing capabilities.|Environmental Impact Dashboard: Visualize personal carbon offsets, weight of plastics saved, and eco-milestones achieved.|Multi-Category Waste Classification: Categorize items under Automotive, Electronics, Plastic, Paper, and Everyday Packaging."
                            data-tools="Flutter, Firebase, Manage Expenses"
                            data-img="assets/images/portfolio/ecopoints.png">
                            <img src="assets/images/portfolio/ecopoints.png" alt="EcoPoints Recycling App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>EcoPoints – Waste Recycling &amp; Rewards App</h5>
                    </div>
                </div>
            </div>

            <!-- New 46. Securotek -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="Securotek – MiFID II Compliant Secure Financial Messaging &amp; Audit Trail App"
                            data-category="Mobile Development"
                            data-tags="Fintech, Enterprise Security, MiFID II Compliance, Encrypted Messaging, Audit Logs, Voice Recording"
                            data-about="Securotek is a bank-grade, regulatory-compliant enterprise communication and financial messaging mobile application built to fulfill stringent MiFID II, SEC, and FINRA communication recordkeeping requirements for financial firms. Styled with a trustworthy teal-and-navy enterprise visual identity, Securotek replaces unauthorized consumer chat apps with an audited, end-to-end encrypted messaging ecosystem. Investment advisors, brokers, and operations teams can communicate securely with clients and internal departments (Administration, Finance, HR), initiate recorded voice and video consultations, search archived conversations, and store tamper-proof logs directly on corporate compliance servers."
                            data-features="MiFID II Regulatory Compliance: Automated archiving of all client-advisor communications with timestamped compliance server sync.|End-to-End Encrypted Messaging: Military-grade AES-256 encrypted 1-on-1 and group chats preventing data leaks.|Enterprise Contact Directory: Organized staff hierarchy categorizing contacts by department (Finance, HR, Operations, Admin).|Encrypted Voice &amp; Video Calling: Direct audio and video consultations with automatic call-recording hooks for regulatory audits.|Tamper-Proof Audit Trail: Immutable historical transcripts and message retrieval logs for compliance officer oversight.|Granular Role-Based Access: Centralized governance enabling administrators to control user permissions and monitor security status.|Multi-Factor Biometric Login: Enhanced login authentication with Face ID, fingerprint scanning, and device certificate binding."
                            data-tools="Flutter, Node.js, Firebase"
                            data-img="assets/images/portfolio/securotek.png">
                            <img src="assets/images/portfolio/securotek.png" alt="Securotek Enterprise Messaging App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Securotek – MiFID II Secure Financial Messaging</h5>
                    </div>
                </div>
            </div>

            <!-- New 47. Pergola & Living -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="Pergola &amp; Living – Outdoor Architectural Pergolas &amp; Glazing Catalog App"
                            data-category="Mobile Development"
                            data-tags="Architecture, Pergolas, Outdoor Living, Sales CRM, Product Catalog, Commercial Quotation"
                            data-about="Pergola & Living is an architectural outdoor design, shade structure catalog, and sales lead tracking mobile application tailored for outdoor living manufacturers, installers, and interior architects. Deployed in an elegant Italian warm-terracotta visual design, the app showcases luxury outdoor architectural systems—including Bioclimatic Pergolas, Pergotenda retractable canopies, sliding glass walls (Vetrate Scorrevoli), sunshades (Tende), insect screens (Zanzariere), and carports. Field sales consultants can explore product dimensions and specs, calculate multi-item quotations ($16,158.00 total with automated taxes and discounts), manage client leads (e.g. John Smith), and track pipeline conversion metrics through interactive monthly sales graphs."
                            data-features="Comprehensive Architectural Systems Catalog: High-res lookbooks for Bioclimatic Pergolas, Sliding Glass Facades, and Sunshades.|Integrated Sales Quotation Builder: Generate itemized customer estimates with unit pricing ($8,643.22/unit), taxes, and promo codes.|Lead &amp; Pipeline Conversion Analytics: Track monthly appointment volume, closed deals, and revenue trends with visual charts.|Client &amp; Appointment Manager: Dedicated CRM hub organizing client accounts, installation addresses, and consultation notes.|Multi-Category Shade Navigation: Effortlessly filter between Pergotenda, Vetrate, Tende, Zanzariere, Pensiline, and Carports.|Custom Specification Sheets: Access detailed engineering specs, fabric types, Anthracite aluminum finishes, and motorization options.|Instant Proposal Sharing: Export branded PDF quotations and digital contracts to clients with a single tap."
                            data-tools="Flutter, Laravel, Manage Expenses"
                            data-img="assets/images/portfolio/pergola-living.png">
                            <img src="assets/images/portfolio/pergola-living.png" alt="Pergola & Living Catalog App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Pergola &amp; Living – Pergolas &amp; Glazing Catalog App</h5>
                    </div>
                </div>
            </div>

            <!-- New 48. Roulette Tracker -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.6s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="Roulette Tracker – Live Casino Number, Spin &amp; Frequency Analytics App"
                            data-category="Mobile Development"
                            data-tags="Gaming Analytics, Casino Strategy, Probability Engine, Live Roulette, Spin Tracker, Data Visualization"
                            data-about="Roulette Tracker is a specialized statistical analysis and real-time spin logging mobile application designed for casino enthusiasts and roulette strategy analysts. Crafted in an opulent black-and-gold casino aesthetic, the app allows players to track live roulette tables across multiple casino platforms (with custom spin counts like 20, 07, 05). Users can log rolled numbers into an intuitive multi-row wheel matrix (e.g. 33, 13, 27, 3, 21), calculate cold and hot number frequencies, evaluate dozen and column distributions, and clear or edit recorded spin logs with instant one-tap session resets and comprehensive statistical reporting."
                            data-features="Multi-Casino Table Tracker: Monitor and compare spin data across several live casino tables simultaneously with total count counters.|Interactive Number Matrix Grid: Rapid numerical input interface recording each wheel outcome into clear historical rows.|Hot &amp; Cold Number Frequency Engine: Real-time probability algorithms identifying frequent and overdue numbers.|Dozen, Column &amp; Sector Analytics: Visual breakdowns tracking odd/even, red/black, and table quadrant distributions.|Session History &amp; Fast Edits: Edit mis-clicked numbers, delete specific entries, or use 'Clear All' for rapid table resets.|Custom Table Preset Management: Save favorite casino brands and roulette variants (European, American, French) for quick access.|Offline Analytics Calculation: Instant mathematical processing with zero lag, ensuring responsive tracking during fast live spins."
                            data-tools="Flutter, Firebase, AI APIs"
                            data-img="assets/images/portfolio/roulette-tracker.png">
                            <img src="assets/images/portfolio/roulette-tracker.png" alt="Roulette Tracker Casino App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Roulette Tracker – Casino Spin &amp; Analytics App</h5>
                    </div>
                </div>
            </div>

            <!-- New 49. MotoRide -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.8s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="MotoRide – On-Demand Bike Taxi &amp; Express Courier Dispatch App"
                            data-category="Mobile Development"
                            data-tags="Bike Taxi, Ride Hailing, Motorcycle Courier, Geolocation, Driver Wallet, Manage Expenses"
                            data-about="MotoRide is a rapid urban motorcycle taxi, two-wheeler ride-hailing, and on-demand parcel dispatch mobile application engineered to beat city traffic. Built with a signature golden-taxi yellow and navy visual theme, the platform serves riders and bike couriers through high-efficiency routing. Couriers can view multi-step pickups and deliveries on a live city map (e.g. 228 Pukhraj Corporate, Indore), receive turn-by-turn navigation, access transparent ride pay details ($25 USD per ride), raise dispute tickets if needed, and manage earnings through a dedicated digital wallet featuring real-time balances ($250.00 USD), withdrawal requests, and customer rating summaries."
                            data-features="Multi-Stop Route Navigation: Live GPS mapping with clear waypoint sequencing (Pickup, Step 1, Step 2) for optimal delivery time.|Driver Earnings &amp; Digital Wallet: Real-time wallet balance oversight ($250.00 USD) with itemized transaction receipts and instant withdrawals.|Customer Booking &amp; Ride Details: View passenger name, pickup address, rating stars (5.0 Reviews), and calculated ride fares ($25 USD).|In-App Dispute &amp; Support System: Dedicated 'Raise Dispute' module for rapid administrative resolution of routing or payment issues.|One-Tap Trip Completion: Fast 'Finish' action with automated fare settlement and electronic receipt generation for passengers.|Two-Way Rating &amp; Review System: Comprehensive post-trip evaluation ('Rate Customer') ensuring safety, punctuality, and mutual respect.|Driver Online / Offline Toggle: Flexible schedule control allowing couriers to activate shifts and receive ride dispatch alerts instantly."
                            data-tools="Flutter, Node.js, Manage Expenses"
                            data-img="assets/images/portfolio/motoride.png">
                            <img src="assets/images/portfolio/motoride.png" alt="MotoRide Bike Taxi App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>MotoRide – Bike Taxi &amp; Courier Dispatch App</h5>
                    </div>
                </div>
            </div>

            <!-- New 50. SWEEP -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="SWEEP – Sports Sweepstakes, Tournament Drafts &amp; Live Leaderboard App"
                            data-category="Mobile Development"
                            data-tags="Sports Betting, Sweepstakes, Golf Tournaments, Fantasy Draft, Live Leaderboard, Digital Wallet"
                            data-about="SWEEP is an interactive sports sweepstakes, tournament drafting, and real-time leaderboard mobile application designed for sports enthusiasts and competitive betting groups. Engineered with a crisp emerald green and clean athletic aesthetic, SWEEP empowers users to create customized private sweeps with friends or join public pools across major golf and sports tournaments. Entrants can manage draft rounds (picking star players across primary, secondary, and final stages), allocate virtual chips (3,000 chips), track live hole-by-hole scores (-12, Thru F, Today -3), receive real-time tournament alerts, and monitor their digital wallet balances (€0.00 Wallet) seamlessly."
                            data-features="Create &amp; Join Sweeps: Set up custom private sweeps with friends or join public sweepstakes pools across major sports tournaments.|Live Tournament Leaderboard: Real-time scoring matrix showing player positions (POS), total strokes/points, thru round status, and track flags.|Player Chips &amp; Wagering Engine: Allocate and monitor virtual chips (3,000 chips per entrant) with automated payout calculations.|Multi-Round Draft Grid: Visual drag-and-drop or card selection interface for drafting players across primary, secondary, and final rounds.|In-App Digital Wallet: Multi-currency balance management (€0.00 Wallet) with secure top-ups, winnings ledger, and transaction logs.|Tournament Dispatch &amp; Push Alerts: Instant notification feed for tournament invites (e.g. Tournament #498765442), score changes, and prize pool updates.|Profile &amp; Member Standings: Dedicated player profiles, global ranking tables, and comprehensive historical tournament archives."
                            data-tools="Flutter, Node.js, Manage Expenses"
                            data-img="assets/images/portfolio/sweep.png">
                            <img src="assets/images/portfolio/sweep.png" alt="SWEEP Sports Sweepstakes App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>SWEEP – Sports Sweepstakes &amp; Live Leaderboard App</h5>
                    </div>
                </div>
            </div>

            <!-- New 51. Morpion Tic Tac Toe -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="Morpion Tic Tac Toe – Neon Cyberpunk Multiplayer &amp; AI Board Game App"
                            data-category="Mobile Development"
                            data-tags="Multiplayer Gaming, Tic Tac Toe, Gomoku, Skill-Based Gaming, Real-Time WebSockets, AI Bot Engine"
                            data-about="Morpion Tic Tac Toe is an electrifying, cyberpunk-inspired neon strategy puzzle and skill-based board gaming application that elevates classic Morpion (Tic Tac Toe &amp; Gomoku) into a high-stakes competitive experience. Rendered in glowing neon pink, electric cyan, and deep space purple, the platform features real-time 1v1 Player vs Player showdowns, challenging AI bot single-player matches powered by adaptive heuristic engines, and multi-round prize tournaments ($100 Prize Value, 10 rounds). Players compete on expansive grid boards, racing against a high-tension turn timer (0:05) to connect five in a row, climb global leadership rankings, and strategize via in-game match chat."
                            data-features="Diverse Match Modes: Seamless matchmaking across 1v1 Player vs Player, intelligent Player vs AI bot, and competitive bracket Tournaments.|Cyberpunk Neon Visuals: Immersive synthwave aesthetic with glowing electric-blue grids, vibrant neon X and O tokens, and celebratory win animations.|Dynamic Grid Gomoku Arena: Expanded tactical grid matrix where players align consecutive markers while defending against opponent strategies.|Round Timer &amp; Prize Pools: High-tension 5-second move timers, multi-round series (Round 1/10), and real-time prize pool displays ($100 Prize).|Smart AI Bot Engine: Multi-tier artificial intelligence with adaptive heuristics ranging from casual warmups to grandmaster tactical puzzles.|Global Leaderboards &amp; Invitations: Track player skill ratings, game win/loss results, and send instant room invite links to friends.|In-Game Real-Time Interaction: Live spectator view, fast rematch triggering, and built-in interactive match chat for multiplayer camaraderie."
                            data-tools="Flutter, Firebase, AI APIs"
                            data-img="assets/images/portfolio/morpion-tic-tac-toe.png">
                            <img src="assets/images/portfolio/morpion-tic-tac-toe.png" alt="Morpion Tic Tac Toe Neon Board Game App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Morpion Tic Tac Toe – Cyberpunk Neon Board Game App</h5>
                    </div>
                </div>
            </div>

            <!-- New 52. Simplix -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.6s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="Simplix – On-Demand Home Services &amp; Handyman Booking App"
                            data-category="Mobile Development"
                            data-tags="Home Services, Handyman Marketplace, Plumber &amp; Electrician, In-App Chat, Service Booking, Geolocation"
                            data-about="Simplix is an intuitive on-demand home maintenance, tradesperson hiring, and local contractor marketplace mobile application connecting homeowners with vetted trade professionals. Bathed in an inviting sunset-orange and warm neutral interface, Simplix takes the hassle out of home repairs across 9+ service categories including Plumbers, Electricians, Gardeners, Cleaners, Carpenters, Locksmiths, Auto Repair, and Home Inspectors. Homeowners can browse top-rated local experts (like John Doe, Plumber 4.7★), confirm service appointments with instant booking notifications, communicate via direct messaging with audio/video calling capabilities, and track job milestones effortlessly."
                            data-features="Comprehensive Trades Directory: Instant category access to plumbers, electricians, gardeners, cleaners, carpenters, locksmiths, and inspectors.|Top-Rated Provider Profiles: View verified professional ratings (4.7★), experience badges, service rates, and client reviews before booking.|Instant Service Booking Engine: Streamlined appointment scheduling with real-time slot selection and booking confirmation screens.|Integrated In-App Messaging: Real-time chat with assigned technicians including read receipts, image attachments, and direct voice/video calling.|Live Location &amp; Service Radius: Geolocation-based technician search localized to specific cities and neighborhoods (e.g. Los Angeles).|Job Status Tracking &amp; History: Transparent stages from booking accepted to job completed, with digital invoices and work receipts.|Community Forum &amp; Maintenance Tips: Interactive user community for home improvement advice, troubleshooting guides, and contractor recommendations."
                            data-tools="Flutter, Laravel, Firebase"
                            data-img="assets/images/portfolio/simplix.png">
                            <img src="assets/images/portfolio/simplix.png" alt="Simplix Home Services App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Simplix – On-Demand Home Services &amp; Handyman App</h5>
                    </div>
                </div>
            </div>

            <!-- New 53. Skyviora -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.8s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="Skyviora – Study Abroad, University Admissions &amp; Visa Advisory App"
                            data-category="Mobile Development"
                            data-tags="Study Abroad, Higher Education, University Admissions, Visa Consultation, Global Travel, Academic Counseling"
                            data-about="Skyviora is an elite study abroad, international higher education discovery, and global visa advisory mobile application crafted for ambitious students aspiring to study at premier universities across Europe, the UK, and North America. Designed with an ultra-premium royal navy and brushed-gold visual aesthetic, Skyviora acts as a digital educational passport. Prospective students can explore top global destinations (UK, France, Italy, Germany), discover and compare renowned institutions (such as University of Oxford, Technical University of Munich), book university admission counseling, track visa application milestones, and access curated guides on living costs, student accommodations, and scholarship programs."
                            data-features="Global University Directory: Curated database of world-class universities with comprehensive program details, admission criteria, and tuition fees.|Country &amp; Destination Guides: Comprehensive European study destination insights covering visa regulations, climate, cost of living, and culture.|Visa Booking &amp; Advisory Engine: Book dedicated one-on-one consultations with certified immigration and student visa advisors.|Affiliated College &amp; Program Explorer: Deep-dive into specific colleges (e.g. Oxford colleges like Exeter, Somerville) and specialized degree tracks.|Digital Skyviora Passport: Centralized document locker safeguarding academic transcripts, language exam scores (IELTS/TOEFL), and visa records.|Bookmark &amp; Shortlist System: Save favorite universities and comparative programs with real-time application deadline reminders.|Student Reviews &amp; Alumni Network: Real experiences and testimonials from international students living in Berlin, London, Paris, and Rome."
                            data-tools="Flutter, Firebase, Laravel"
                            data-img="assets/images/portfolio/skyviora.png">
                            <img src="assets/images/portfolio/skyviora.png" alt="Skyviora Study Abroad App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Skyviora – Study Abroad &amp; University Admissions App</h5>
                    </div>
                </div>
            </div>

            <!-- New 54. Tarif -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="Tarif – On-Demand Multi-Category Marketplace &amp; Quick Delivery App"
                            data-category="Mobile Development"
                            data-tags="Quick Commerce, Multi-Vendor Marketplace, Food Delivery, Pharmacy &amp; Grocery, Order Tracking, Manage Expenses"
                            data-about="Tarif is a high-speed, all-in-one on-demand hyper-local marketplace mobile application delivering groceries, restaurant meals, pharmacy essentials, electronics, and lifestyle products within minutes. Built in an energetic warm-orange and clean modern UI, Tarif connects consumers to their favorite local retail brands (including Pizza Hut, McDonald's, and local pharmacies) from a unified interface. Shoppers can pinpoint their delivery address (e.g. Pukhraj Corporate, Indore), explore curated multi-vendor categories, view transparent delivery timelines (20–30 min) and ratings (4.9★), customize cart orders with real-time price calculations, and monitor order fulfillment from dispatch to doorstep."
                            data-features="Multi-Sector Hyperlocal Marketplace: Seamless shopping across Food, Medicine, Fresh Groceries, Consumer Electronics, and Lifestyle items.|Pinpoint Geolocation &amp; Address Manager: Accurate GPS delivery drop-off pinpointing with saved address presets (Home, Office, Custom).|Restaurant &amp; Store Storefronts: Detailed merchant pages featuring product catalogues (250+ items), store ratings (4.5★), distance, and user reviews.|Dynamic Product Customization: Interactive product view with customizable variants, portion sizes, preparation notes, and fast quantity adjustments.|Live Order Tracking &amp; ETA: Real-time countdown timer (e.g. '08:50 Min left') and status breakdown across Pending, Dispatched, and Completed orders.|Smart Search &amp; Proximity Filtering: Fast multi-criteria search filtering by item distance (150m), discounts, ratings, and dietary preferences.|Expense &amp; Digital Cart Management: Clear itemized cost breakdowns, coupon code applications, free delivery thresholds, and automated tax receipts."
                            data-tools="Flutter, Node.js, Manage Expenses"
                            data-img="assets/images/portfolio/tarif.png">
                            <img src="assets/images/portfolio/tarif.png" alt="Tarif Marketplace App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Tarif – Multi-Category Marketplace &amp; Delivery App</h5>
                    </div>
                </div>
            </div>

            <!-- New 55. Lucky Spin & Tic Tac 5 -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="Lucky Spin &amp; Tic Tac 5 – Casual Rewards, Gamification &amp; Puzzle Events App"
                            data-category="Mobile Development"
                            data-tags="Casual Gaming, Gamification, Lucky Spin Wheel, Puzzle Challenges, In-App Rewards, Daily Missions"
                            data-about="Lucky Spin &amp; Tic Tac 5 is a vibrant, feature-packed casual gaming, daily reward quests, and interactive arcade mini-game mobile application engineered for maximum user engagement. Set against an animated sky-blue theme with playful cartoon mascots, the app combines luck-based mechanics with skill puzzle tournaments. Players can spin the Lucky Spin Premium wheel to win coins, gems, and treasure chests, crack open Piggy Banks, take on Trivia Pass quizzes, and participate in time-limited global events such as the Tic Tac 5 puzzle series and pirate sailing quests. Comprehensive gamification hooks—such as milestone chests (2/5 progress), level-up energy meters, team leagues, and 70% off flash sales—keep players actively engaged daily."
                            data-features="Lucky Spin Premium Wheel: Dynamic multi-slice prize wheel with animated physics, spin multipliers, and tiered milestone treasure chest unlocks.|Tic Tac 5 &amp; Mini-Game Events: Time-limited event challenges (Ends in 01:52:12) featuring 5-in-a-row puzzle battles and nautical pirate quests.|Special Chest &amp; Daily Missions: Continuous progression meters tracking player actions with automated badge notifications and gem payouts.|Piggy Bank &amp; In-App Economy: Interactive coin-saving bank system allowing users to accumulate bonuses and unlock discounted coin bundles ($120).|Trivia Pass &amp; Skill Competitions: Multi-category trivia challenges and IQ puzzle rounds rewarding top players with global leaderboard standings.|Team System &amp; Player Rankings: Compete with friends or join gaming teams to combine scores, unlock team chests, and claim seasonal awards.|Flash Offers &amp; In-App Store: Integrated monetization shop offering 70% off discount bundles, extra lives, booster tokens, and custom wheel skins."
                            data-tools="Flutter, Firebase, Manage Expenses"
                            data-img="assets/images/portfolio/lucky-spin-rewards.png">
                            <img src="assets/images/portfolio/lucky-spin-rewards.png" alt="Lucky Spin &amp; Tic Tac 5 Gaming App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Lucky Spin &amp; Tic Tac 5 – Casual Rewards &amp; Gaming App</h5>
                    </div>
                </div>
            </div>

            <!-- New 56. Valet A Day -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.6s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="Valet A Day – On-Demand Valet Parking &amp; Concierge Booking App"
                            data-category="Mobile Development"
                            data-tags="Valet Parking, Car Concierge, Vehicle Management, Geolocation, Digital Wallet, Booking Engine"
                            data-about="Valet A Day is a premier on-demand personal valet parking, car concierge, and vehicle logistics mobile application designed for seamless city parking and event hospitality. Wrapped in a refreshing mint-green and clean white aesthetic, the dual-role platform serves both vehicle owners (Clients) and certified parking attendants (Valets). Drivers can explore nearby licensed valets on an interactive live GPS map (covering prime urban districts), filter attendants by verified customer ratings (4.7★ with 9,200+ bookings) and security badges, register personal vehicles with VIN credentials, schedule valet pickups ($50 / 2 hours), and process contactless escrow payments through a built-in digital wallet ($2,500.00 balance)."
                            data-features="Interactive GPS Map &amp; List Search: Locate nearby certified valets in real-time with toggleable Map View and List View interfaces.|Verified Valet Profiles: View attendant credentials, past customer ratings (4.7★), total serviced vehicles (9,200+), and security badges.|Vehicle &amp; VIN Registry: Secure digital garage storing automobile make, model, manufacturing year, and unique VIN documentation.|Comprehensive Booking Configuration: Book flexible valet slots ($50 / 2 hr), set pickup/drop-off times, and add passenger or pet notes.|Integrated Digital Wallet: Manage funds with high-limit balances ($2,500.00$), instant auto-refills, and detailed transaction records.|Dual Role Client &amp; Valet Ecosystem: Dedicated client dashboard for bookings and specialized valet interface for accepting parking requests.|Emergency &amp; Security Protocol: Store emergency contacts, verified driver licenses, and contactless digital key handoff logs."
                            data-tools="Flutter, Laravel, Firebase"
                            data-img="assets/images/portfolio/valet-aday.png">
                            <img src="assets/images/portfolio/valet-aday.png" alt="Valet A Day Concierge Parking App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Valet A Day – On-Demand Valet Parking &amp; Concierge App</h5>
                    </div>
                </div>
            </div>

            <!-- New 57. AudioCast Live -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.8s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="AudioCast Live – Real-Time Voice Broadcasting &amp; Audio Recording App"
                            data-category="Mobile Development"
                            data-tags="Live Audio Streaming, Voice Recording, Audio Waveforms, Social Audio, Podcasting, Real-Time WebSockets"
                            data-about="AudioCast Live is a dynamic real-time voice streaming, high-fidelity audio recording, and social podcasting mobile application designed for content creators, broadcasters, and remote teams. Styled in a vibrant sunset-orange and warm cream visual palette, AudioCast enables users to host live audio rooms or capture studio-grade voice memos with live pulsating waveform visualization (e.g. 00:05:52). Broadcasters can go live instantly, broadcast audio streams to multiple connected listeners (with live participant counters like Joined Users: 19), archive audio sessions into a searchable 'Old Recordings' library, and share voice clips directly with contacts or user groups with one tap."
                            data-features="Studio-Grade Voice Recorder: High-definition audio capture with real-time waveform visualizers, elapsed timer counters, and instant pause/resume.|Live Audio Room Broadcasting: 'Go Live' streaming engine allowing creators to broadcast audio sessions to rooms with live participant counts (19+ users).|Multi-User Audio Sharing: Select individual contacts or use 'Select All' to dispatch recordings directly across team or friend networks.|Archived Recordings Library: Centralized 'Old Recordings' catalog with timestamped logs, duration metadata, and one-tap playback.|Live Waveform &amp; Speaker Control: Real-time amplitude audio rendering with output toggling between loudspeaker, earpiece, and Bluetooth devices.|Instant Social Match &amp; Invites: Seamless contact discovery and direct push notifications inviting followers to live broadcast rooms.|Lightweight Cloud Sync &amp; Backup: Instant cloud saving powered by secure storage buckets for lossless voice playback anytime, anywhere."
                            data-tools="Flutter, Node.js, Firebase"
                            data-img="assets/images/portfolio/audiocast-live.png">
                            <img src="assets/images/portfolio/audiocast-live.png" alt="AudioCast Live Voice Recording App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>AudioCast Live – Voice Recording &amp; Audio Broadcast App</h5>
                    </div>
                </div>
            </div>

            <!-- New 58. Bella07 -->
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
                <div class="news-box-items mt-0">
                    <div class="news-image wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <a href="javascript:void(0);" class="open-project-details" data-bs-toggle="offcanvas"
                            data-bs-target="#projectOffcanvas"
                            data-title="Bella07 – Soccer Training, Drills &amp; Athletic Performance Analytics App"
                            data-category="Mobile Development"
                            data-tags="Sports Analytics, Soccer Training, Athletic Drills, Workout Tracker, Video Coaching, AI Performance"
                            data-about="Bella07 is a cutting-edge soccer coaching, drill management, and athletic performance tracking mobile application tailored for competitive football players, academy coaches, and sports trainers. Clad in a striking neon-green and pitch-turf stadium aesthetic, Bella07 turns daily training into measurable athletic excellence. Athletes can log daily football sessions and cardio routines along an interactive training timeline, study video tutorial drills (ball control, dribbling, shooting, passing), monitor annual athletic hours (105 Hours logged, 50 Hours this month), analyze completed vs incomplete workout ratios (102 finished / 40 pending), and access personalized training calendars to optimize match readiness."
                            data-features="Daily Training Timeline: Chronological workout planner tracking football drills, strength routines, and cardio sessions with quick-add (+) controls.|Video Drill Tutorial Library: Step-by-step HD football training video tutorials with coaching breakdowns and tactical execution tips.|Comprehensive Athletic Statistics: Performance dashboard highlighting annual training hours (105 Hours), monthly hours (50 Hours), and completion ratios.|Interactive Soccer Calendar: Calendar schedule synchronizing upcoming academy sessions, match days, tactical meetings, and recovery days.|Workout Completion &amp; Milestone Analytics: Track completed workouts (102 finished) against missed sessions to maintain consistent athletic discipline.|Custom Drill Creation &amp; Notes: Coaches and players can build bespoke training routines, set target repetitions, and annotate training feedback.|Personalized Player Profile: Tailored athlete dashboard storing player stats, preferred positions, physical metrics, and historical drill logs."
                            data-tools="Flutter, Firebase, AI APIs"
                            data-img="assets/images/portfolio/bella07-soccer.png">
                            <img src="assets/images/portfolio/bella07-soccer.png" alt="Bella07 Soccer Training App">
                        </a>
                    </div>
                    <div class="news-content">
                        <h5>Bella07 – Soccer Training &amp; Performance Analytics App</h5>
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

        <div class="mb-4">
            <div class="row g-2" id="oc-image-grid">
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
                            let colClass = images.length === 1 ? 'col-12' : 'col-6';
                            let imgHeight = images.length === 1 ? '320px' : '180px';

                            let extraCss = (category === 'Web Development') ? 'object-position: center;' : '';

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