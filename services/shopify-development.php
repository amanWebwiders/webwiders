<?php require_once __DIR__ . '../../config.php';
require_once __DIR__ . '../../includes/header.php'; ?>

<style>
    .feature-box-items1 .content h3 {
        color: white;
        margin-bottom: 0px;
        padding: 0px;
        min-height: 97px;
    }

    .feature-box-items1 .content p {
        min-height: 180px !important;
        margin-bottom: 0px;
    }

    .row.new-right-box {
        overflow-y: scroll;
        max-height: 500px;
    }

    .section-title-area p {
        border-left: none;

    }

    .service-box-items {
        border: none;
        margin-top: 0px;
    }

    .feature-box-items:hover .content.boxes p {
        color: black;
    }

    .industries {
        font-size: 20px !important;
        min-height: auto !important;
    }

    .service-box-items {
        position: relative;
    }

    .service-box-items::after {
        content: "";
        position: absolute;
        top: 15%;
        right: -25px;
        transform: translateY(-50%);
        width: 90px;
        height: 40px;
        background-image: url("./assets/images/Aero.png");
        background-repeat: no-repeat;
        background-size: contain;
    }



    .row .col-lg-4:nth-child(3) .service-box-items::after,
    .row .col-lg-4:nth-child(6) .service-box-items::after {
        display: none;
    }

    @media (max-width:576px) {
        .row.new-right-box {
            overflow-y: auto;
            max-height: 100%;
        }

        .service-box-items::after {
            display: none;
        }
    }
</style>

<div class="contain-wrapp paddingbot-clear new_contant-1">
    <div class="container">
        <div class="row">
            <div class="section-heading mb-2">
                <h2 class="mainhade"><span>E</span>xpert <span>S</span>hopify <span>E</span>commerce
                    <span>W</span>ebsite <span>D</span>evelopment
                </h2>
                <i class="fa-brands fa-shopify"></i>
            </div>
            <div class="col-lg-8 m-auto mb-5">
                <div class="about-content text-center">
                    <p class="mt-3 mt-md-0 mb-4 ">
                        Build high-performing Shopify stores tailored to your brand, with seamless design, secure
                        integrations, and scalable features to drive sales and deliver a smooth shopping experience.
                    </p>
                    <div class="availability justify-content-center">
                        <div class="badges">Get a free Audit for your Shopify </div>
                        <div class="mode">Get A Consultation</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- it staff Start -->
<section class="about-section fix section-padding mt-0 new-section" style="background: #f0eeee">
    <div class="container">
        <div class="about-wrapper">
            <div class="row g-4">
                <div class="section-heading">
                    <h2 class="mainhade line-heading">Our Services</h2>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <h3 class="">
                                <span> Expert Shopify Development Services</span>
                            </h3>
                        </div>
                        <p class="mt-3 mt-md-0 mb-4 ">
                            Whether you’re launching a new eCommerce venture or moving from a platform that no longer
                            meets your business needs, your store should be more than just a basic setup with a standard
                            theme. It should represent your brand, run smoothly, support your operations, and scale as
                            your business grows.
                        </p>
                        <p class="mt-3 mt-md-0 mb-4 ">
                            At Webwiders, we provide end-to-end Shopify development services to help businesses build
                            scalable, high-performing, and conversion-focused eCommerce stores. From Shopify consulting
                            and store setup to custom Shopify development, Shopify Plus solutions, and ongoing
                            optimization, our Shopify experts help you launch, manage, and grow a powerful online store
                            while unlocking the full potential of the Shopify platform.
                        </p>
                        <!-- <div class="availability">
                            <div class="badges">Get a free Audit for your Shopify </div>
                            <div class="mode">Get A Consultation</div>
                        </div> -->

                    </div>
                </div>

                <div class="col-lg-6 ">
                    <div class="about-content">
                        <div class="row new-right-box">
                            <div class="col-12 ">
                                <div class="feature-box-items">
                                    <div class="content">
                                        <h3>Shopify Consulting</h3>
                                        <p>Our Shopify consultants help you plan the right strategy for your eCommerce
                                            business. From platform selection and store architecture planning to feature
                                            recommendations and growth strategies, we guide you through every stage of
                                            building a successful Shopify store.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="feature-box-items">
                                    <div class="content">
                                        <h3>Custom Shopify eCommerce Development</h3>
                                        <p>We build custom Shopify stores designed for performance, scalability, and
                                            seamless user experience. Our Shopify developers create feature-rich stores
                                            that allow businesses to sell products efficiently while ensuring smooth
                                            navigation and high conversions.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="feature-box-items">
                                    <div class="content">
                                        <h3>Shopify Theme Development & Customization</h3>
                                        <p>Our team excels in developing custom Shopify themes that deliver visually engaging and fully responsive eCommerce stores. Whether it’s enhancing an existing theme or creating one from the ground up, we craft high-converting designs that boost user engagement and strengthen your brand presence.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="feature-box-items">
                                    <div class="content">
                                        <h3>Figma / Adobe XD to Shopify Conversion</h3>
                                        <p>Got your store design in Figma or Adobe XD? We transform your UI into a fully functional Shopify website with pixel-perfect precision, responsive design, and high performance—while preserving the exact look and feel of your original concept.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="feature-box-items">
                                    <div class="content">
                                        <h3>Shopify App Development & Integration</h3>
                                        <p>Enhance your store’s capabilities with custom Shopify app development and seamless third-party integrations. We build tailored apps and integrate powerful tools to automate tasks, streamline operations, and improve overall store performance and efficiency.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="feature-box-items">
                                    <div class="content">
                                        <h3>Shopify Migration Services</h3>
                                        <p>Our Shopify migration specialists ensure a smooth transition from platforms like WooCommerce, Magento, BigCommerce, or custom solutions to Shopify. We securely transfer products, customer data, orders, and content with minimal downtime, maintaining data integrity and uninterrupted store performance.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="feature-box-items">
                                    <div class="content">
                                        <h3>Shopify Store Optimization</h3>
                                        <p>We provide Shopify store optimization services to improve website speed,
                                            performance, SEO, and user experience. Our optimization strategies focus on
                                            faster loading times, better navigation, and improved conversion rates.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="feature-box-items">
                                    <div class="content">
                                        <h3>Shopify Plus Development</h3>
                                        <p>Our team delivers advanced Shopify Plus development solutions for enterprise-level eCommerce brands. Leveraging powerful Shopify Plus features, we create scalable, high-performance stores built to manage heavy traffic, complex workflows, and continuous business expansion.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="feature-box-items">
                                    <div class="content">
                                        <h3>Shopify 2.0 Upgrade & Migration</h3>
                                        <p>Upgrade your store to Shopify Online Store 2.0 for enhanced speed, greater customization flexibility, and improved management tools. Our experts handle a seamless upgrade, ensuring you fully leverage the latest Shopify features and performance benefits.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="feature-box-items">
                                    <div class="content">
                                        <h3>Shopify Store Maintenance & Support</h3>
                                        <p>Our Shopify maintenance and support services keep your store secure, up-to-date, and performing at its best. From fixing issues and optimizing performance to handling security updates and ongoing support, we ensure smooth and reliable store operations.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="feature-box-items">
                                    <div class="content">
                                        <h3>White Label Shopify Development</h3>
                                        <p>Our white label Shopify development services are ideal for agencies looking
                                            to expand their offerings without hiring an in-house team. We work as your
                                            development partner a
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- it staff End -->


<!-- Hire developer steps start-->

<section class="about-section fix section-padding mt-0 new-section" style="background: #ffffff">
    <div class="container">
        <div class="about-wrapper">
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="about-content">
                        <div class="section-heading">
                            <h2 class="mainhade line-heading">What we give you in your shopify Developement</h2>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-6 " data-wow-delay=".2s"
                                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                <div class="feature-box-items1">
                                    <div class="content">
                                        <h3 class="content-head">Premium Shopify store design
                                        </h3>
                                        <p>A refined Shopify theme design with structured layouts, proper spacing, and brand-driven typography that enhances trust and delivers a better user experience, helping lower bounce rates and boost engagement.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 " data-wow-delay=".4s"
                                style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                <div class="feature-box-items1">
                                    <div class="content">
                                        <h3 class="content-head">Fast-loading Shopify with lower drop-offs</h3>
                                        <p>We develop mobile-first Shopify stores with performance-driven coding and speed optimization to deliver fast loading times and seamless navigation, ensuring a smooth and efficient checkout experience.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 " data-wow-delay=".6s"
                                style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                <div class="feature-box-items1">
                                    <div class="content">
                                        <h3 class="content-head">Conversion-focused Shopify pages</h3>
                                        <p>Optimized Shopify product pages (PDP), advanced filtering options, and well-organized collection pages designed to boost user engagement and maximize add-to-cart conversion rates.</p><br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 " data-wow-delay=".6s"
                                style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                <div class="feature-box-items1">
                                    <div class="content">
                                        <h3 class="content-head">SEO-friendly Shopify store Developement</h3>
                                        <p>A structured Shopify site architecture with optimized metadata, SEO-friendly URLs, and best SEO practices to enhance search visibility and support sustainable long-term organic growth.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 " data-wow-delay=".6s"
                                style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                <div class="feature-box-items1">
                                    <div class="content">
                                        <h3 class="content-head">Easy-to-manage Shopify store backend</h3>
                                        <p>A streamlined Shopify store setup with modular sections and flexible content blocks, allowing your team to easily manage products, pages, and updates without any technical hassle.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 " data-wow-delay=".6s"
                                style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                <div class="feature-box-items1">
                                    <div class="content">
                                        <h3 class="content-head">Shopify store launch support & checklist</h3>
                                        <p>End-to-end Shopify store launch support, including QA testing, pre-launch validation, and post-launch performance checks to ensure a smooth, stable, and successful go-live.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Hire developer steps End-->


<section class="service-section fix section-padding" style="background: #f0eeee">
    <div class="container">
        <div class="section-title-area">
            <div class="section-title">
                <div class="section-heading mb-0">
                    <h2 class="mainhade line-heading">Our Shopify Development Process</h2>
                    <p class="mt-3 mt-md-0 mb-0 ">
                        A simple and transparent Shopify development workflow that takes your store from idea to launch while ensuring performance, scalability, and a smooth user experience.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s"
                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="service-box-items">
                    <div class="content">
                        <h4>1. Discovery & Strategy</h4>
                        <p>We begin with Shopify consulting to understand your business goals, products, target audience, and required features. This stage helps define the right Shopify store development strategy for long-term growth.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                <div class="service-box-items">
                    <div class="content">
                        <h4>2. Wireframing & Store Architecture</h4>
                        <p>Our team plans the Shopify store structure, including page layouts, navigation flow, product hierarchy, and user journey to ensure a clear and conversion-focused shopping experience.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s"
                style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                <div class="service-box-items">
                    <div class="content">
                        <h4>3. Design & Shopify Development</h4>
                        <p>We design and develop your store using custom Shopify theme development and branding elements. Our developers ensure your store is responsive, visually engaging, and optimized for conversions.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s"
                style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                <div class="service-box-items">
                    <div class="content">
                        <h4>4. App Integration & Quality Testing</h4>
                        <p>Essential Shopify apps, payment gateways, and shipping integrations are installed and configured. Our QA team performs thorough Shopify testing, ensuring smooth checkout flows, secure payments, and flawless functionality.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s"
                style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                <div class="service-box-items">
                    <div class="content">
                        <h4>5. Store Launch</h4>
                        <p>Your Shopify store goes live with complete launch support. We perform final checks, speed optimization, and provide a post-launch performance checklist to track store growth.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s"
                style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                <div class="service-box-items">
                    <div class="content">
                        <h4>6. Growth & Optimization</h4>
                        <p>After launch, we help scale your store through Shopify SEO optimization, conversion rate optimization (CRO), performance marketing, and ongoing store improvements.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="about-section fix section-padding mt-0 new-section" style="background: #ffffff">
    <div class="container">
        <div class="about-wrapper">
            <div class="row g-4 mt-5">
                <div class="section-heading mb-4">
                    <h2 class="mainhade line-heading">Why Choose Our Shopify Development Services</h2>
                </div>

                <div class="col-lg-12 ">
                    <div class="about-content">
                        <div class="row row-cols-lg-3 row-cols-md-3 row-cols-12">
                            <div class="col">
                                <div class="feature-box-items it-box">
                                    <div class="content boxes">
                                        <h3 class="content-head">Agile Shopify Development Process</h3>
                                        <div class="list-link">
                                            <p>From planning to deployment, we follow an agile Shopify development approach that allows flexibility, faster updates, and quicker time-to-market while building high-quality eCommerce stores.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="feature-box-items it-box">
                                    <div class="content boxes">
                                        <h3 class="content-head">On-Time Project Delivery</h3>
                                        <div class="list-link">
                                            <p>Our Shopify development team follows structured timelines for each stage of the project. Using modern tools and efficient workflows, we deliver responsive Shopify stores on schedule.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="feature-box-items it-box">
                                    <div class="content boxes">
                                        <h3 class="content-head">Affordable Shopify Development Solutions</h3>
                                        <div class="list-link mb-md-2 mb-0">
                                            <p>We offer cost-effective Shopify development services with transparent pricing. When you hire Shopify developers from our team, you get high-quality results without hidden costs.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="feature-box-items it-box">
                                    <div class="content boxes">
                                        <h3 class="content-head">Shopify Quality Assurance & Testing</h3>
                                        <div class="list-link">
                                            <p>Before launch, our QA specialists perform comprehensive Shopify testing, including performance checks, payment gateway testing, security validation, and checkout optimization.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="feature-box-items it-box">
                                    <div class="content boxes">
                                        <h3 class="content-head">Dedicated Shopify Developers</h3>
                                        <div class="list-link">
                                            <p>Our team includes experienced Shopify experts and developers who specialize in custom Shopify development, theme customization, and Shopify app integration for businesses of all sizes.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="feature-box-items it-box">
                                    <div class="content boxes">
                                        <h3 class="content-head">Custom Shopify Solutions</h3>
                                        <div class="list-link">
                                            <p>We create custom Shopify stores tailored to your brand and business model. From theme customization to advanced features, we ensure your store is mobile-friendly, scalable, and optimized for eCommerce success.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- FAQ's Start-->

<section class="faq-section section-padding new-section" style="background: #f0eeee">
    <div class="container">
        <div class="faq-wrapper">
            <div class="row g-4 justify-content-between">
                <div class="col-12">
                    <div class="faq-content sticky-style">
                        <div class="section-title mb-5">
                            <h2 class="wow fadeInUp" data-wow-delay=".3s"
                                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                FAQs
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="faq-accordion-items">
                        <div class="faq-accordion">
                            <div class="accordion" id="accordion">
                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".3s"
                                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false"
                                            aria-controls="faq1">
                                            1. How long does it take to build a Shopify store?
                                        </button>
                                    </h5>
                                    <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion"
                                        style="">
                                        <div class="accordion-body">
                                            The timeline for Shopify store development usually ranges from 7–21 days,
                                            depending on design complexity, custom features, and product uploads. A
                                            custom Shopify development project with integrations or advanced
                                            functionality may take a few additional weeks.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s"
                                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq2" aria-expanded="true" aria-controls="faq2">
                                            2. Do you help with product uploads or migration?
                                        </button>
                                    </h5>
                                    <div id="faq2" class="accordion-collapse show" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            Yes, we assist with Shopify product uploads and store setup, including
                                            importing products, collections, images, and descriptions. Our Shopify
                                            experts ensure your catalog is organized properly for better navigation,
                                            SEO, and conversions.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s"
                                    style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false"
                                            aria-controls="faq3">
                                            3. Can you migrate my existing eCommerce store to Shopify?
                                        </button>
                                    </h5>
                                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            Yes, we provide Shopify migration services from platforms like WooCommerce,
                                            Magento, BigCommerce, or custom websites. We securely transfer products,
                                            customers, orders, and content while maintaining SEO structure and
                                            minimizing downtime.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s"
                                    style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false"
                                            aria-controls="faq4">
                                            4. Can you integrate payment gateways, shipping setup, and third-party apps
                                            into my Shopify store?
                                        </button>
                                    </h5>
                                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            Yes, we handle Shopify payment gateway integration, shipping configuration,
                                            and third-party Shopify app integrations. Our developers ensure secure
                                            payments, smooth checkout, and the right tools to improve store
                                            functionality and user experience.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s"
                                    style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false"
                                            aria-controls="faq5">
                                            5. What is the price of creating a Shopify store?
                                        </button>
                                    </h5>
                                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            The cost of Shopify store development depends on design, custom features,
                                            and integrations. A basic Shopify store setup may start from a few hundred
                                            dollars, while custom Shopify development projects vary based on
                                            requirements and complexity.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s"
                                    style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false"
                                            aria-controls="faq6">
                                            6. How much does it cost to hire a Shopify developer in India?
                                        </button>
                                    </h5>
                                    <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            Hiring a Shopify developer in India typically costs $15–$50 per hour,
                                            depending on experience and project scope. For fixed projects, custom
                                            Shopify development services pricing varies based on features, design, and
                                            integrations.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s"
                                    style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq7" aria-expanded="false"
                                            aria-controls="faq7">
                                            7. Do you provide ongoing support and maintenance for Shopify stores?
                                        </button>
                                    </h5>
                                    <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            Yes, we offer Shopify maintenance and support services including updates,
                                            performance optimization, bug fixes, security checks, and feature
                                            improvements to keep your Shopify store running smoothly and optimized for
                                            conversions.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s"
                                    style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq8" aria-expanded="false"
                                            aria-controls="faq8">
                                            8. How can I request a free consultation for Shopify development services?
                                        </button>
                                    </h5>
                                    <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            Yes, you can schedule a free Shopify consultation with our experts to
                                            discuss your store requirements, features, and growth strategy. Simply book
                                            <a href="#">Call Here</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s"
                                    style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq9" aria-expanded="false"
                                            aria-controls="faq9">
                                            9. Can I get an audit done for my existing Shopify store?
                                        </button>
                                    </h5>
                                    <div id="faq9" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            Yes, we provide a Shopify store audit to review performance, SEO, UX, speed,
                                            and conversion optimization. Our experts identify improvement opportunities
                                            to help increase traffic and sales.<a href="#">Book your audit here:</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s"
                                    style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq10" aria-expanded="false"
                                            aria-controls="faq10">
                                            10. Will my Shopify store be mobile-friendly?
                                        </button>
                                    </h5>
                                    <div id="faq10" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            Yes, we build mobile-responsive Shopify stores using modern Shopify theme
                                            development practices. Your store will work smoothly across smartphones,
                                            tablets, and desktops to ensure a better user experience and higher
                                            conversions.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s"
                                    style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq11" aria-expanded="false"
                                            aria-controls="faq11">
                                            11. What is the difference between Shopify and Shopify Plus?
                                        </button>
                                    </h5>
                                    <div id="faq11" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            Shopify is ideal for small and growing businesses, while Shopify Plus is
                                            designed for enterprise brands needing advanced automation, higher
                                            scalability, and customization. Shopify Plus development supports large
                                            catalogs, high traffic, and complex workflows.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s"
                                    style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq12" aria-expanded="false"
                                            aria-controls="faq12">
                                            12. Can you integrate AI in my Shopify store?
                                        </button>
                                    </h5>
                                    <div id="faq12" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            Yes, we can integrate AI features in Shopify stores using tools like the
                                            OpenAI ChatGPT API. AI chatbots can automatically answer visitor queries,
                                            provide product recommendations, and improve customer support and
                                            engagement.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s"
                                    style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq13" aria-expanded="false"
                                            aria-controls="faq13">
                                            13. What other eCommerce development services do you offer?
                                        </button>
                                    </h5>
                                    <div id="faq13" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            Along with WooCommerce development, we also offer a wide range of eCommerce solutions, including Wordpress & woocomeerce Development Services, PHP Laravel Development Services, and Magento Development Services. Our team helps you choose the right platform based on your business needs, scalability, and customization requirements, ensuring a high-performing and future-ready online store.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ's End-->


<section class="about-section fix section-padding mt-0 new-section" style="background: #ffffff">
    <div class="container">
        <div class="about-wrapper">
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="about-content">
                        <div class="section-heading">
                            <h2 class="mainhade line-heading">Indusries</h2>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".2s"
                                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                <div class="feature-box-items1">
                                    <div class="content">
                                        <h3 class="content-head industries">Beauty & Cosmetics</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".4s"
                                style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                <div class="feature-box-items1">
                                    <div class="content">
                                        <h3 class="content-head industries">Fashion & Apparel</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".6s"
                                style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                <div class="feature-box-items1">
                                    <div class="content">
                                        <h3 class="content-head industries">Health & Wellness</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".6s"
                                style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                <div class="feature-box-items1">
                                    <div class="content">
                                        <h3 class="content-head industries">Food & Beverages</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".6s"
                                style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                <div class="feature-box-items1">
                                    <div class="content">
                                        <h3 class="content-head industries">Pet Industry</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".6s"
                                style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                <div class="feature-box-items1">
                                    <div class="content">
                                        <h3 class="content-head industries">B2B eCommerce</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".6s"
                                style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                <div class="feature-box-items1">
                                    <div class="content">
                                        <h3 class="content-head industries">International eCommerce</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".6s"
                                style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                <div class="feature-box-items1">
                                    <div class="content">
                                        <h3 class="content-head industries">Industrial & Manufacturing</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-heading">
                            <h6 class="line-heading mt-5">Launch your Shopify store with us and start selling faster!</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php require_once BASE_PATH . './includes/footer.php'; ?>