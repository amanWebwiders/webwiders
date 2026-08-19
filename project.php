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

<section class="news-section section-padding fix" id="portfolio">
    <div class="container">
        <div class="filters pb-5" id="portfolioFilters">
            <a href="javascript:void(0)" class="filters-btns active" data-filter="all">All Projects</a>
            <a href="javascript:void(0)" class="filters-btns" data-filter="mobile">Mobile Apps</a>
            <a href="javascript:void(0)" class="filters-btns" data-filter="web">Web Development</a>
            <a href="javascript:void(0)" class="filters-btns" data-filter="ecommerce">E-Commerce</a>
            <a href="javascript:void(0)" class="filters-btns" data-filter="design">Web Design</a>
        </div>

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
            <div class="col-xl-4 col-lg-6 col-md-6" id="filter-wrapper" data-category="mobile">
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
            </div>

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