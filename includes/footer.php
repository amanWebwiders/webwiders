<?php
// Ensure ASSETS_URL exists (use asset() helper if available, otherwise fallback)
if (!defined('ASSETS_URL')) {
    if (function_exists('asset')) {
        $tmp = rtrim(asset(''), '/');
        define('ASSETS_URL', $tmp !== '' ? $tmp : '/assets');
    } else {
        define('ASSETS_URL', '/assets');
    }
}
?>

<!-- Footer Section Start -->
<section class="footer-section footer-bg fix">
    <div class="container">
        <div class="footer-widgets-wrapper">
            <div class="row">
                <div class="col-xl-5 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <a href="<?= url('/') ?>">
                                <img src="<?php echo asset('img/sitelogo-black.png'); ?>" alt="logo-img">
                            </a>
                            <p>Webwiders is a software development service provider.We provide services that are
                                focused, tailored and cost-effective to suite customer needs and budget. We are equipped
                                to address all strategic and technological issues, including software development,
                                website development of companies with Content strategies, Corporate identity &amp;
                                branding, E-Commerce solutions, Multi-tiered web-based application development, CRM
                                solutions, and Supply chain management.</p>
                        </div>
                        <div class="footer-content">
                            <!-- <p>
                                Phasellus ultricies aliquam volutpat
                                ullamcorper laoreet neque, a lacinia
                                curabitur lacinia mollis
                            </p> -->
                            <div class="social-icon d-flex align-items-center">
                                <a href="https://www.facebook.com/WebWidersSoftwareSolutions" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a>

                                <a href="https://www.instagram.com/webwiderstech/" target="_blank"><i
                                        class="fab fa-instagram"></i></a>

                                <a href="https://www.linkedin.com/company/webwiderssoftwaresolutions/about/"
                                    target="_blank"><i class="fab fa-linkedin-in"></i></a>

                                <!-- <a href="https://www.freelancer.in/u/infowider11"
                                    target="_blank"><img src="./assets/img/freelancer.svg" alt="" class="freelancer-svg"></a>

                                <a href="https://www.upwork.com/agencies/1587762889775751168/"
                                    target="_blank"><i class="fa-brands fa-upwork"></i></a> -->

                                <!-- <a href="designrush.com/agency/software-development/in"
                                    target="_blank"><i class="fab fa-linkedin-in"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 ps-lg-5 ms-auto wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3>Quick Links</h3>
                        </div>
                        <ul class="list-area">
                            <li>
                                <a href="<?= url('about') ?>">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    About us
                                </a>
                            </li>
                            <li>
                                <a href="<?= url('service') ?>">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    Our Services
                                </a>
                            </li>
                            <li>
                                <a href="<?= url('contact') ?>">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    Contact Us
                                </a>
                            </li>
                            <li>
                                <a href="<?= url('career') ?>">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    Career
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo asset('pdf/company-profile.pdf'); ?>" target="_blank">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    Company Profile
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 ps-xl-5  wow fadeInUp" data-wow-delay=".8s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3>Contact Us</h3>
                        </div>
                        <div class="footer-content">
                            <ul class="contact-info">
                                <li>
                                    <i class="fa-regular fa-envelope"></i>
                                    <a href="mailto: info@webwiders.com"> info@webwiders.com</a>
                                </li>
                                <li>
                                    <i class="fa-solid fa-phone-volume"></i>
                                    <a href="tel:+91-951-653-5144"> (+91) 9516 535144</a>
                                </li>
                                <li class="d-flex flex-column">
                                    <h6 class="mb-2" style="color: #a5110d;">Head Office / Development Center:</h6>
                                    <div class="d-flex align-items-baseline">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <p href="https://maps.app.goo.gl/B4o8SKedUx2dVX2W9" target="_blank">
                                            315, Pukhraj Corporate,Near Navlakha Bus Stand, <br>Indore, Madhya Pradesh
                                            India. (452001)
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex flex-column">
                                    <h6 class="mb-2" style="color: #a5110d;">US Business Address:</h6>
                                    <div class="d-flex align-items-baseline">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <a href="#">
                                            1060 Lincoln Ave
                                            Suite 20 #1220
                                            San Jose, <br>CA 95125
                                            United States
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Font Awesome Link (Make sure this is in your <head> if not already there) -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> -->

    <section id="online-plateform">
        <div class="container">
            <div class="row g-3 justify-content-center">

                <!-- Google -->
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="platform-card">
                        <!-- Replace src with your image path -->
                        <img src="./assets/img/google-logo.png" alt="Google" class="platform-logo">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                    </div>
                </div>

                <!-- Facebook -->
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="platform-card">
                        <!-- Replace src with your image path -->
                        <img src="./assets/img/freelancer-logo.png" alt="reelancer" class="platform-logo">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>

                <!-- Clutch -->
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="platform-card">
                        <!-- Replace src with your image path -->
                        <img src="./assets/img/clutch-logo.png" alt="Clutch" class="platform-logo">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                    </div>
                </div>

                <!-- DesignRush -->
                <a href="https://www.designrush.com/agency/software-development/in" class="col-6 col-md-4 col-lg-2" target="_blank">
                    <div class="platform-card">
                        <!-- Replace src with your image path -->
                        <img src="./assets/img/designrush-logo.png" alt="DesignRush" class="platform-logo">
                        <p>As seen on DesignRush</p>
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                    </div>
                </a>

                <!-- Trustpilot -->
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="platform-card">
                        <!-- Replace src with your image path -->
                        <img src="./assets/img/upwork-logo.png" alt="Upwork" class="platform-logo">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                    </div>
                </div>

                <!-- GoodFirms -->
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="platform-card">
                        <!-- Replace src with your image path -->
                        <img src="./assets/img/goodfirms-logo.png" alt="GoodFirms" class="platform-logo">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-wrapper d-flex align-items-center justify-content-between">
                <p class="wow fadeInLeft color-2 copyright-text" data-wow-delay=".3s">
                    © Copyright 2026 Webwiders Software Solutions. All Rights Reserved.
                </p>
                <ul class="footer-menu wow fadeInRight" data-wow-delay=".5s">

                    <!-- <li>
                        <a href="<?= url('contact') ?>">
                            Privacy Policy
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>
</section>

<!--<< All JS Plugins >>-->
<script src="<?php echo asset('js/jquery-3.7.1.min.js'); ?>"></script>
<!-- Fancybox JS -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
<!--<< Viewport Js >>-->
<script src="<?php echo asset('js/viewport.jquery.js'); ?>"></script>
<!--<< Bootstrap Js >>-->
<script src="<?php echo asset('js/bootstrap.bundle.min.js'); ?>"></script>
<!--<< Nice Select Js >>-->
<script src="<?php echo asset('js/jquery.nice-select.min.js'); ?>"></script>
<!--<< Waypoints Js >>-->
<script src="<?php echo asset('js/jquery.waypoints.js'); ?>"></script>
<!--<< Counterup Js >>-->
<script src="<?php echo asset('js/jquery.counterup.min.js'); ?>"></script>
<!--<< Swiper Slider Js >>-->
<script src="<?php echo asset('js/swiper-bundle.min.js'); ?>"></script>
<!--<< MeanMenu Js >>-->
<script src="<?php echo asset('js/jquery.meanmenu.min.js'); ?>"></script>
<!--<< Magnific Popup Js >>-->
<script src="<?php echo asset('js/jquery.magnific-popup.min.js'); ?>"></script>
<!--<< Wow Animation Js >>-->
<script src="<?php echo asset('js/wow.min.js'); ?>"></script>
<!--<< Circle Progress Js >>-->
<script src="<?php echo asset('js/circle-progress.js'); ?>"></script>
<!--<< Main.js >>-->
<script src="<?php echo asset('js/main.js'); ?>"></script>


<script>
    // Custom Accordion JavaScript
    document.addEventListener('DOMContentLoaded', function () {
        const accordion = document.getElementById('accordion');
        if (!accordion) {
            // No accordion on this page — nothing to do.
            return;
        }
        const panels = accordion.querySelectorAll('.panel');
        const panelButtons = accordion.querySelectorAll('.panel-title button');

        // Initialize first panel as active
        const firstPanel = panels[0];
        const firstPanelCollapse = firstPanel.querySelector('.panel-collapse');

        // Set first panel to be open by default
        firstPanel.classList.add('active');
        firstPanel.querySelector('.panel-title button').classList.remove('collapsed');
        firstPanelCollapse.classList.add('show');

        // Function to close all panels
        function closeAllPanels() {
            panels.forEach(panel => {
                panel.classList.remove('active');
                const button = panel.querySelector('.panel-title button');
                const collapse = panel.querySelector('.panel-collapse');

                button.classList.add('collapsed');
                collapse.classList.remove('show');
                collapse.style.maxHeight = null;
            });
        }

        // Function to open a specific panel
        function openPanel(panel) {
            panel.classList.add('active');
            const button = panel.querySelector('.panel-title button');
            const collapse = panel.querySelector('.panel-collapse');

            button.classList.remove('collapsed');
            collapse.classList.add('show');
            collapse.style.maxHeight = collapse.scrollHeight + 'px';
        }

        // Add click event listeners to each panel button
        panelButtons.forEach(button => {
            button.addEventListener('click', function (e) {
                // Prevent any default behavior (no redirect)
                e.preventDefault();

                const targetId = this.getAttribute('data-target');
                const targetPanel = document.querySelector(targetId).closest('.panel');
                const targetCollapse = document.querySelector(targetId);

                // Check if the clicked panel is already active
                const isActive = targetPanel.classList.contains('active');

                // Close all panels first
                closeAllPanels();

                // If the clicked panel wasn't active, open it
                if (!isActive) {
                    openPanel(targetPanel);
                }
            });
        });

        // Optional: Close panel when clicking outside
        document.addEventListener('click', function (e) {
            if (!accordion.contains(e.target) && !e.target.classList.contains('panel-title')) {
                // Keep first panel open when clicking outside
                closeAllPanels();
                openPanel(firstPanel);
            }
        });

        // Keyboard navigation support
        accordion.addEventListener('keydown', function (e) {
            const activeElement = document.activeElement;

            // If Enter or Space is pressed on a button, trigger click
            if ((e.key === 'Enter' || e.key === ' ') && activeElement.tagName === 'BUTTON') {
                e.preventDefault();
                activeElement.click();
            }

            // Arrow key navigation
            if (e.key === 'ArrowDown' || e.key === 'ArrowUp') {
                e.preventDefault();

                // Find all focusable elements (buttons)
                const focusableElements = accordion.querySelectorAll('button[data-target]');
                const currentIndex = Array.from(focusableElements).indexOf(activeElement);
                let nextIndex;

                if (e.key === 'ArrowDown') {
                    nextIndex = currentIndex < focusableElements.length - 1 ? currentIndex + 1 : 0;
                } else {
                    nextIndex = currentIndex > 0 ? currentIndex - 1 : focusableElements.length - 1;
                }

                focusableElements[nextIndex].focus();
            }
        });

        // Optional: Resize observer to adjust max-height when content changes
        const resizeObserver = new ResizeObserver(entries => {
            entries.forEach(entry => {
                const panel = entry.target.closest('.panel');
                if (panel && panel.classList.contains('active')) {
                    const collapse = panel.querySelector('.panel-collapse');
                    if (collapse.classList.contains('show')) {
                        collapse.style.maxHeight = collapse.scrollHeight + 'px';
                    }
                }
            });
        });

        // Observe all panel bodies for content changes
        document.querySelectorAll('.panel-body').forEach(body => {
            resizeObserver.observe(body);
        });
    });
</script>



</body>

</html>