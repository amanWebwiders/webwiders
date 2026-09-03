<?php
// ensure config loaded if this header is included directly
if (!defined('BASE_URL')) {
    require_once dirname(__DIR__) . '/config.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Gramentheme">
    <meta name="description" content="WebWiders Software Solutions">
    <!-- ======== Page title ============ -->
    <title>WebWiders Software Solutions</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="<?php echo asset('/img/favicon.png'); ?>">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="<?php echo asset('/css/bootstrap.min.css'); ?>">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="<?php echo asset('/css/all.min.css'); ?>">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="<?php echo asset('/css/animate.css'); ?>">
    <!--<< Icomoon.css >>-->
    <!-- <link rel="stylesheet" href="assets/css/icomoon.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icomoon/1.0.0/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="<?php echo asset('/css/magnific-popup.css'); ?>">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="<?php echo asset('/css/meanmenu.css'); ?>">
    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="<?php echo asset('/css/swiper-bundle.min.css'); ?>">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="<?php echo asset('/css/nice-select.css'); ?>">
    <!--<< Color.css >>-->
    <link rel="stylesheet" href="<?php echo asset('/css/color.css'); ?>">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="<?php echo asset('/css/main.css'); ?>">
    <!--<< New.css >>-->
    <link rel="stylesheet" href="<?php echo asset('/css/new.css'); ?>">
    <!--<< responsive.css >>-->
    <link rel="stylesheet" href="<?php echo asset('/css/responsive.css'); ?>">
    <!-- Make relative URLs resolve correctly -->
    <base href="<?php echo rtrim(BASE_URL, '/'); ?>/">
    <!-- Canonical SEO URL Tag -->
    <link rel="canonical" href="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . strtok($_SERVER['REQUEST_URI'], '?'); ?>">
    <script src="https://agentic.fuelsmart.io/widget.js" data-agent-id="AGENT_123" data-agent-name="Lisa"
        data-api-base-url="https://agentic.fuelsmart.io"></script>

    <!-- Use absolute asset URLs -->


</head>

<body>
    <!-- Back To Top Start -->
    <button id="back-top" class="back-to-top">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

    <!--<< Mouse Cursor Start >>-->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- Offcanvas Area Start -->
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="<?= url('/') ?>">
                                <img src="<?php echo asset('img/sitelogo-black.png'); ?>" alt="logo-img">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <p class="text d-none d-xl-block">
                        Nullam dignissim, ante scelerisque the is euismod fermentum odio sem semper the is erat, a
                        feugiat leo urna eget eros. Duis Aenean a imperdiet risus.
                    </p>
                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">
                        <h4>Contact Info</h4>
                        <ul>
                            <li class="d-flex flex-column">
                                <h6 class="mb-2" style="color: #a5110d;">Head Office / Development Center:</h6>
                                <div class="d-flex align-items-start">
                                    <div class="offcanvas__contact-icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="#"> 315, Pukhraj Corporate, Near Navlakha Bus Stand,
                                            Indore
                                            Madhya Pradesh India. (452001)</a>
                                    </div>
                                </div>
                            </li>


                            <li class="d-flex flex-column">
                                <h6 class="mb-2" style="color: #a5110d;">US Business Address:</h6>
                                <div class="d-flex align-items-start">
                                    <div class="offcanvas__contact-icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="#">1060 Lincoln Ave Suite 20 #1220 San Jose, CA 95125
                                            United States</a>
                                    </div>
                                </div>
                            </li>



                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="mailto:info@webwiders.com"><span class="mailto:info@example.com">
                                            info@webwiders.com</span></a>
                                </div>
                            </li>

                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="mailto:info@webwiders.com"><span class="mailto:info@example.com">
                                            info@webwiders.com</span></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+91-951-653-5144"> (+91) 9516 535144</a>
                                </div>
                            </li>
                        </ul>
                        <div class="header-button mt-4">

                        </div>
                        <div class="main-button">
                            <a href="<?= url('contact') ?>"> <span class="theme-btn"> Get Started </span><span
                                    class="arrow-btn"><i class="fa-solid fa-turn-up"></i></span></a>
                        </div>
                        <!-- <div class="social-icon d-flex align-items-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>

    <!-- Header Section Start -->
    <header id="header-sticky" class="header-1">
        <div class="container-fluid">
            <div class="mega-menu-wrapper">
                <div class="header-main">
                    <div class="logo">
                        <a href="<?= url('/') ?>" class="header-logo">
                            <img src="<?php echo asset('img/sitelogo-black.png'); ?>" alt="logo-img">
                        </a>
                        <a href="<?= url('/') ?>" class="header-logo-2">
                            <img src="<?php echo asset('img/sitelogo-black.png'); ?>" alt="logo-img">
                        </a>
                    </div>
                    <div class="mean__menu-wrapper">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="active menu-thumb">
                                        <a href="<?= url('/') ?>">
                                            Home
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?= url('about') ?>">
                                            About Us
                                        </a>
                                    </li>

                                    <!-- Desktop start-->

                                    <li class="d-none d-lg-inline-block">
                                        <a href="<?= url('service') ?>">
                                            Services
                                            <i class="fa-solid fa-chevron-down"></i>
                                        </a>
                                        <ul class="submenu">

                                            <!-- 1. Mobile App Development -->
                                            <li class="has-nested-menu">
                                                <a href="#">Mobile App Development <i
                                                        class="fa-solid fa-chevron-right arrow-right"></i></a>
                                                <ul class="nested-submenu">
                                                    <li><a
                                                            href="<?php echo url('/services/iphone-app-development.php'); ?>">iPhone
                                                            App Development</a></li>
                                                    <li><a
                                                            href="<?php echo url('/services/android-app-development.php'); ?>">Android
                                                            App Development</a></li>
                                                    <li><a
                                                            href="<?php echo url('/services/native-mobile-app-development.php'); ?>">Native
                                                            Mobile App Development</a></li>
                                                    <li><a
                                                            href="<?php echo url('/services/hybrid-mobile-app-development.php'); ?>">Hybrid
                                                            Mobile App Development</a></li>
                                                    <li><a
                                                            href="<?php echo url('/services/custom-application-development.php'); ?>">Custom
                                                            Application Development</a></li>
                                                    <li><a
                                                            href="<?php echo url('/services/bootstrap-development.php'); ?>">Bootstrap
                                                            Development</a></li>
                                                    <li><a
                                                            href="<?php echo url('/services/game-dev.php'); ?>">Game
                                                            Development</a></li>
                                                </ul>
                                            </li>

                                            <!-- 2. Web & CMS Development -->
                                            <li class="has-nested-menu">
                                                <a href="#">Web & CMS Development <i
                                                        class="fa-solid fa-chevron-right arrow-right"></i></a>
                                                <ul class="nested-submenu">
                                                    <li><a
                                                            href="<?php echo url('/services/php-website-development.php'); ?>">PHP
                                                            Development</a></li>
                                                    <li><a
                                                            href="<?php echo url('/services/wordpress-development.php'); ?>">WordPress
                                                            Development</a></li>
                                                    <li><a
                                                            href="<?php echo url('/services/angular-js-development.php'); ?>">Angular
                                                            JS</a></li>
                                                    <li><a
                                                            href="<?php echo url('/services/laravel-development.php'); ?>">Laravel</a>
                                                    </li>
                                                    <li><a
                                                            href="<?php echo url('/services/node-js-development.php'); ?>">Node
                                                            JS</a></li>
                                                    <li><a
                                                            href="<?php echo url('/services/codeigniter-development.php'); ?>">CodeIgniter</a>
                                                    </li>
                                                    <li><a
                                                            href="<?php echo url('/services/drupal-development.php'); ?>">Drupal</a>
                                                    </li>
                                                     <li><a
                                                            href="<?php echo url('/services/custom-web-development.php'); ?>">Custom Web Development </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <!-- 3. E-Commerce Development -->
                                            <li class="has-nested-menu">
                                                <a href="#">E-Commerce Development <i
                                                        class="fa-solid fa-chevron-right arrow-right"></i></a>
                                                <ul class="nested-submenu">
                                                    <li><a
                                                            href="<?php echo url('/services/ecommerce-website-design.php'); ?>">Ecommerce
                                                            Design</a></li>
                                                    <li><a
                                                            href="<?php echo url('/services/magento-development.php'); ?>">Magento</a>
                                                    </li>
                                                    <li><a
                                                            href="<?php echo url('/services/woocommerce-development.php'); ?>">WooCommerce</a>
                                                    </li>
                                                    <li><a
                                                            href="<?php echo url('/services/bigcommerce-development.php'); ?>">BigCommerce</a>
                                                    </li>
                                                    <li><a
                                                            href="<?php echo url('/services/shopify-development.php'); ?>">Shopify</a>
                                                    </li>
                                                    <li><a
                                                            href="<?php echo url('/services/shopify-development.php'); ?>">Shopping
                                                            Cart</a></li>
                                                </ul>
                                            </li>

                                            <!-- 4. Web Design -->
                                            <li class="has-nested-menu">
                                                <a href="#">Web Design <i
                                                        class="fa-solid fa-chevron-right arrow-right"></i></a>
                                                <ul class="nested-submenu">
                                                    <li><a href="<?php echo url('/services/html5-development.php'); ?>">HTML5
                                                            Development</a></li>
                                                    <li><a href="<?php echo url('/services/graphic-design.php'); ?>">Graphic
                                                            Design</a></li>
                                                    <li><a href="<?php echo url('/services/logo-designing.php'); ?>">Logo
                                                            Design</a></li>
                                                    <li><a
                                                            href="<?php echo url('/services/website-redesigning.php'); ?>">Website
                                                            Redesign</a></li>
                                                    <li><a
                                                            href="<?php echo url('/services/custom-website-design.php'); ?>">Custom
                                                            Design</a></li>
                                                    <li><a
                                                            href="<?php echo url('/services/responsive-web-design.php'); ?>">Responsive
                                                            Design</a></li>
                                                </ul>
                                            </li>

                                            <!-- 5. Online Marketing -->
                                            <li class="has-nested-menu">
                                                <a href="#">Online Marketing <i
                                                        class="fa-solid fa-chevron-right arrow-right"></i></a>
                                                <ul class="nested-submenu">
                                                    <li><a
                                                            href="<?php echo url('/services/search-engine-optimization.php'); ?>">SEO</a>
                                                    </li>
                                                    <li><a
                                                            href="<?php echo url('/services/ppc-management-services.php'); ?>">PPC
                                                            Management</a></li>
                                                    <li><a
                                                            href="<?php echo url('/services/social-media-marketing.php'); ?>">Social
                                                            Media</a></li>
                                                    <li><a
                                                            href="<?php echo url('/services/search-engine-marketing.php'); ?>">SEM</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <!-- Normal Submenu Items (Jo nested nahi hain) -->
                                            <li><a href="<?= url('on-demand-hire') ?>">On Demand Hire</a></li>

                                        </ul>
                                    </li>
                                    <!-- Desktop end-->









                                    <!-- Desktop -->
                                    <!-- <li class="has-dropdown dropdown mega-dropdown d-none d-lg-inline-block">
                                        <a href="<?= url('service') ?>" class="nav-link dropdown-toggle">
                                            Services <i class="fas fa-chevron-down"></i>
                                        </a>

                                        <div class="mega-menu">
                                            <div class="mega-container">
                                                <div class="mega-row">

                                                    
                                                    <div class="mega-col">
                                                        <h6 class="mega-title">Mobile App Development</h6>
                                                        <ul class="mega-list">
                                                            <li><a
                                                                    href="<?php echo url('/services/iphone-app-development.php'); ?>">iPhone
                                                                    App Development</a></li>
                                                            <li><a
                                                                    href="<?php echo url('/services/android-app-development.php'); ?>">Android
                                                                    App Development</a></li>
                                                            <li><a
                                                                    href="<?php echo url('/services/native-mobile-app-development.php'); ?>">Native
                                                                    Mobile App Development</a></li>
                                                            <li><a
                                                                    href="<?php echo url('/services/hybrid-mobile-app-development.php'); ?>">Hybrid
                                                                    Mobile App Development</a></li>
                                                            <li><a
                                                                    href="<?php echo url('/services/custom-application-development.php'); ?>">Custom
                                                                    Application Development</a></li>
                                                            <li><a
                                                                    href="<?php echo url('/services/bootstrap-development.php'); ?>">Bootstrap
                                                                    Development</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="mega-col">
                                                        <h6 class="mega-title">Web & CMS Development</h6>
                                                        <ul class="mega-list">
                                                            <li><a
                                                                    href="<?php echo url('/services/php-website-development.php'); ?>">PHP
                                                                    Development</a></li>
                                                            <li><a
                                                                    href="<?php echo url('/services/wordpress-development.php'); ?>">WordPress
                                                                    Development</a></li>
                                                            <li><a
                                                                    href="<?php echo url('/services/angular-js-development.php'); ?>">Angular
                                                                    JS</a></li>
                                                            <li><a
                                                                    href="<?php echo url('/services/laravel-development.php'); ?>">Laravel</a>
                                                            </li>
                                                            <li><a
                                                                    href="<?php echo url('/services/node-js-development.php'); ?>">Node
                                                                    JS</a></li>
                                                            <li><a
                                                                    href="<?php echo url('/services/codeigniter-development.php'); ?>">CodeIgniter</a>
                                                            </li>
                                                            <li><a
                                                                    href="<?php echo url('/services/drupal-development.php'); ?>">Drupal</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="mega-col">
                                                        <h6 class="mega-title">E-Commerce Development</h6>
                                                        <ul class="mega-list">
                                                            <li><a
                                                                    href="<?php echo url('/services/ecommerce-website-design.php'); ?>">Ecommerce
                                                                    Design</a></li>
                                                            <li><a
                                                                    href="<?php echo url('/services/magento-development.php'); ?>">Magento</a>
                                                            </li>
                                                            <li><a
                                                                    href="<?php echo url('/services/woocommerce-development.php'); ?>">WooCommerce</a>
                                                            </li>
                                                            <li><a
                                                                    href="<?php echo url('/services/bigcommerce-development.php'); ?>">BigCommerce</a>
                                                            </li>
                                                            <li><a
                                                                    href="<?php echo url('/services/shopify-development.php'); ?>">Shopify</a>
                                                            </li>
                                                            <li><a
                                                                    href="<?php echo url('/services/shopify-development.php'); ?>">Shopping
                                                                    Cart</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="mega-col">
                                                        <h6 class="mega-title">Web Design</h6>
                                                        <ul class="mega-list">
                                                            <li><a
                                                                    href="<?php echo url('/services/html5-development.php'); ?>">HTML5
                                                                    Development</a></li>
                                                            <li><a
                                                                    href="<?php echo url('/services/graphic-design.php'); ?>">Graphic
                                                                    Design</a></li>
                                                            <li><a
                                                                    href="<?php echo url('/services/logo-designing.php'); ?>">Logo
                                                                    Design</a></li>
                                                            <li><a
                                                                    href="<?php echo url('/services/website-redesigning.php'); ?>">Website
                                                                    Redesign</a></li>
                                                            <li><a
                                                                    href="<?php echo url('/services/custom-website-design.php'); ?>">Custom
                                                                    Design</a></li>
                                                            <li><a
                                                                    href="<?php echo url('/services/responsive-web-design.php'); ?>">Responsive
                                                                    Design</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="mega-col">
                                                        <h6 class="mega-title">Online Marketing</h6>
                                                        <ul class="mega-list">
                                                            <li><a
                                                                    href="<?php echo url('/services/search-engine-optimization.php'); ?>">SEO</a>
                                                            </li>
                                                            <li><a
                                                                    href="<?php echo url('/services/ppc-management-services.php'); ?>">PPC
                                                                    Management</a></li>
                                                            <li><a
                                                                    href="<?php echo url('/services/social-media-marketing.php'); ?>">Social
                                                                    Media</a></li>
                                                            <li><a
                                                                    href="<?php echo url('/services/search-engine-marketing.php'); ?>">SEM</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </li> -->
                                    <!-- Desktop End-->

                                    <!-- Mobile -->
                                    <li class="has-dropdown d-block d-lg-none">
                                        <a href="<?= url('service') ?>">
                                            Services
                                            <i class="fa-solid fa-chevron-down"></i>
                                        </a>

                                        <ul class="submenu">

                                            <li class="has-dropdown">
                                                <a href="#">Mobile App Development</a>
                                                <ul class="submenu">
                                                    <li><a
                                                            href="<?php echo url('/services/iphone-app-development.php'); ?>">iPhone
                                                            App Development</a></li>
                                                    <li><a
                                                            href="<?php echo url('/services/android-app-development.php'); ?>">Android
                                                            App Development</a></li>
                                                    <li><a
                                                            href="<?php echo url('/services/native-mobile-app-development.php'); ?>">Native
                                                            Mobile App Development</a></li>
                                                    <li><a
                                                            href="<?php echo url('/services/hybrid-mobile-app-development.php'); ?>">Hybrid
                                                            Mobile App Development</a></li>
                                                    <li><a
                                                            href="<?php echo url('/services/custom-application-development.php'); ?>">Custom
                                                            Application Development</a></li>
                                                    <li><a
                                                            href="<?php echo url('/services/bootstrap-development.php'); ?>">Bootstrap
                                                            Development</a></li>

                                                              <li><a
                                                            href="<?php echo url('/services/game-dev.php'); ?>">Game
                                                            Development</a></li>
                                                </ul>
                                            </li>

                                            <li class="has-dropdown">
                                                <a href="javascript:void(0);">Web & CMS Development</a>
                                                <ul class="submenu">
                                                    <li><a
                                                            href="<?php echo url('/services/php-website-development.php'); ?>">PHP
                                                            Development</a></li>
                                                    <li><a
                                                            href="<?php echo url('/services/wordpress-development.php'); ?>">WordPress
                                                            Development</a></li>
                                                    <li><a
                                                            href="<?php echo url('/services/angular-js-development.php'); ?>">Angular
                                                            JS</a></li>
                                                    <li><a
                                                            href="<?php echo url('/services/laravel-development.php'); ?>">Laravel</a>
                                                    </li>
                                                    <li><a
                                                            href="<?php echo url('/services/node-js-development.php'); ?>">Node
                                                            JS</a></li>
                                                    <li><a
                                                            href="<?php echo url('/services/codeigniter-development.php'); ?>">CodeIgniter</a>
                                                    </li>
                                                    <li><a
                                                            href="<?php echo url('/services/drupal-development.php'); ?>">Drupal</a>
                                                    </li>
                                                     <li><a
                                                            href="<?php echo url('/services/custom-web-development.php'); ?>">Custom Web Development </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="has-dropdown">
                                                <a href="javascript:void(0);">E-Commerce Development</a>
                                                <ul class="submenu">
                                                    <li><a
                                                            href="<?php echo url('/services/ecommerce-website-design.php'); ?>">Ecommerce
                                                            Design</a></li>
                                                    <li><a
                                                            href="<?php echo url('/services/magento-development.php'); ?>">Magento</a>
                                                    </li>
                                                    <li><a
                                                            href="<?php echo url('/services/woocommerce-development.php'); ?>">WooCommerce</a>
                                                    </li>
                                                    <li><a
                                                            href="<?php echo url('/services/bigcommerce-development.php'); ?>">BigCommerce</a>
                                                    </li>
                                                    <li><a
                                                            href="<?php echo url('/services/shopping-cart-solutions.php'); ?>">Shopping
                                                            Cart</a></li>
                                                </ul>
                                            </li>

                                            <li class="has-dropdown">
                                                <a href="javascript:void(0);">Web Design</a>
                                                <ul class="submenu">
                                                    <li><a href="<?php echo url('/services/html5-development.php'); ?>">HTML5
                                                            Development</a></li>
                                                    <li><a href="<?php echo url('/services/graphic-design.php'); ?>">Graphic
                                                            Design</a></li>
                                                    <li><a href="<?php echo url('/services/logo-designing.php'); ?>">Logo
                                                            Design</a></li>
                                                    <li><a
                                                            href="<?php echo url('/services/website-redesigning.php'); ?>">Website
                                                            Redesign</a></li>
                                                    <li><a
                                                            href="<?php echo url('/services/custom-website-design.php'); ?>">Custom
                                                            Design</a></li>
                                                    <li><a
                                                            href="<?php echo url('/services/responsive-web-design.php'); ?>">Responsive
                                                            Design</a></li>
                                                </ul>
                                            </li>

                                            <li class="has-dropdown">
                                                <a href="javascript:void(0);">Online Marketing</a>
                                                <ul class="submenu">
                                                    <li><a
                                                            href="<?php echo url('/services/search-engine-optimization.php'); ?>">SEO</a>
                                                    </li>
                                                    <li><a
                                                            href="<?php echo url('/services/ppc-management-services.php'); ?>">PPC
                                                            Management</a></li>
                                                    <li><a
                                                            href="<?php echo url('/services/social-media-marketing.php'); ?>">Social
                                                            Media</a></li>
                                                    <li><a
                                                            href="<?php echo url('/services/search-engine-marketing.php'); ?>">SEM</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="has-dropdown">
                                                <a href="<?= url('on-demand-hire') ?>">
                                                    On Demand Hire
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <!-- Mobile End-->


                                    <!-- Hire Resource Start-->

                                    <!-- <li class="has-dropdown">
                                        <a href="<?= url('/') ?>">
                                            hire-resources
                                            <i class="fa-solid fa-chevron-down"></i>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="<?= url('hire-resources/hire-android-app-developer') ?>">hire android app
                                                    developer</a></li>
                                            <li><a
                                                    href="<?= url('hire-resources/hire-cross-platform-developer') ?>">hire cross-platform developer</a>
                                            </li>
                                            <li><a
                                                    href="<?= url('hire-resources/hire-magento-developer') ?>">hire magento developer</a>
                                            </li>
                                            <li><a href="<?= url('hire-resources/hire-php-developer') ?>">hire php developer</a>
                                            </li>
                                            <li><a
                                                    href="<?= url('hire-resources/hire-wordpress-developer') ?>">hire wordpress developer</a>
                                            </li>
                                        </ul>
                                    </li> -->

                                    <!-- Hire Resource Start-->



                                    <!-- Our Product start -->

                                    <!-- Desktop -->
                                    <!-- <li class="has-dropdown dropdown mega-dropdown d-none d-lg-inline-block">
                                        <a href="<?= url('service') ?>" class="nav-link dropdown-toggle">
                                            Our Product <i class="fas fa-chevron-down"></i>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="#">Venco</a></li>
                                            <li><a href="#">Medical ERP</a></li>
                                            <li><a href="#">Real State CRM</a></li>
                                            <li><a href="#">Manufacturing ERP</a></li>
                                        </ul>
                                    </li> -->
                                    <!-- Desktop End-->

                                    <!-- Mobile -->
                                    <!-- <li class="has-dropdown d-block d-lg-none">
                                        <a href="#">
                                            Our Product
                                            <i class="fa-solid fa-chevron-down"></i>
                                        </a>

                                        <ul class="submenu">
                                            <li><a href="#">Venco</a></li>
                                            <li><a href="#">Medical ERP</a></li>
                                            <li><a href="#">Real State CRM</a></li>
                                            <li><a href="#">Manufacturing ERP</a></li>
                                        </ul>
                                    </li> -->
                                    <!-- Mobile End-->



                                    <!-- Our Product end -->



                                    <!-- Our Product start-->

                                    <li class="has-dropdown">
                                        <a href="<?= url('pricing') ?>">Pricing</a>
                                    </li>

                                    <li class="has-dropdown">
                                        <a href="<?= url('blog') ?>">Blog</a>
                                    </li>


                                    <!-- New Menu Added 05-08-2026 -->

                                    <!-- <li>
                                        <a href="<?= url('products') ?>">
                                            Our Products
                                            <i class="fa-solid fa-chevron-down"></i>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="the-vanco.php">The Venco</a></li>
                                            <li><a href="<?= url('health-card') ?>">Health Card</a></li>
                                            <li><a href="<?= url('real-estate-crm') ?>">Real Estate CRM</a></li>
                                            <li><a href="<?= url('manufacturing-erp') ?>">Manufacturing ERP</a></li>
                                        </ul>
                                    </li> -->

                                     <!-- <li class="has-dropdown">
                                        <a href="<?= url('blog') ?>">Blog</a>
                                    </li> -->

                                    <!-- Our Product end-->

                                    <!-- New Menu Added 05-08-2026 -->

                                    <li>
                                        <a href="<?= url('project') ?>">
                                            Portfolio
                                        </a>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center">
                        <!-- <a href="#0" class="search-trigger search-icon"><i
                                class="fa-regular fa-magnifying-glass"></i></a> -->
                        <div class="main-button">
                            <a href="<?= url('contact') ?>"> <span class="theme-btn"> Contact Us </span><span class="arrow-btn"><i
                                        class="fa-solid fa-turn-up"></i></span></a>
                        </div>
                        <div class="header__hamburger d-xl-none my-auto">
                            <div class="sidebar__toggle">
                                <i class="fas fa-bars"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>