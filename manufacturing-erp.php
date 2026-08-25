<?php include 'includes/header.php'; ?>


<!-- Breadcrumb Section Start -->
<div class="breadcrumb-wrapper bg-cover" style="">
    <div class="left-shape">
        <img src="assets/img/breadcrumb-shape.png" alt="img">
    </div>
    <div class="right-shape">
        <img src="assets/img/breadcrumb-shape-2.png" alt="img">
    </div>
    <div class="container">
        <div class="page-heading">
            <div class="breadcrumb-sub-title">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Manufacturing ERP</h1>
            </div>
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                <li>
                    <a href="<?= url('/') ?>">
                        Home
                    </a>
                </li>
                <li>
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                    Manufacturing ERP
                </li>
            </ul>
        </div>
    </div>
</div>


<section class="product-details-section section-padding">
    <div class="container">
        <!-- 1. SOFTWARE TOP SECTION (Dashboard Image & Basic Info) -->
        <div class="project-details-items mb-5">
            <div class="row g-4 align-items-center">
                <!-- Software Mockup/Dashboard Image -->
                <div class="col-lg-6">
                    <div class="details-image">
                        <img src="assets/img/healthcare.png" alt="Manufacturing ERP Dashboard"
                            style="width: 100%; border-radius: 10px; box-shadow: 0px 10px 30px rgba(0,0,0,0.1);">
                    </div>
                </div>

                <!-- Software Information -->
                <div class="col-lg-6">
                    <div class="project-details-content ps-lg-4">
                        <div class="details-left">
                            <div class="section-title">
                                <div class="sub-title bg-color-2 wow fadeInUp"
                                    style="visibility: visible; animation-name: fadeInUp;">
                                    <span>Manufacturing ERP Solution</span>
                                </div>
                            </div>
                            <h2>Complete Manufacturing Management ERP</h2>
                            <!-- Tagline/Highlight -->
                            <h5 class="mt-3 mb-4" style="color: var(--theme, #6A47ED); font-weight: 600;">For Modern
                                Production & Assembly Enterprises</h5>

                            <p class="mb-4">
                                Manage Production, Inventory, Supply Chain, Quality Control, and Finance from a single,
                                cloud-based platform. Streamline your factory operations with our highly secure and
                                scalable ERP solution.
                            </p>
                        </div>

                        <!-- Software Meta Data (Reusing client-details class) -->
                        <div class="details-right mt-4 mb-4">
                            <ul class="client-details">
                                <li>Deployment: <span>Cloud & On-Premise</span></li>
                                <li>Access: <span>Role-Based Security</span></li>
                                <li>Support: <span>24x7 Dedicated Helpdesk</span></li>
                            </ul>
                        </div>

                        <!-- Call to Action Buttons -->
                        <div class="mt-4 d-flex gap-3">
                            <a href="#demo-section" class="theme-btn">
                                Book a Free Demo <i class="fa-solid fa-industry"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="mt-5 mb-5">

        <!-- 2. SOFTWARE BOTTOM SECTION (Overview, Modules, Form & Sidebar) -->
        <div class="news-details-wrapper">
            <div class="row g-4">

                <!-- Left Main Content -->
                <div class="col-12 col-lg-8">

                    <!-- Overview & Key Modules -->
                    <div class="project-details-content mb-5">
                        <h3>What is Manufacturing ERP?</h3>
                        <p class="mt-3 mb-4">
                            Manufacturing ERP is a comprehensively integrated system designed to manage all
                            aspects of a factory's operations. From raw material procurement to production planning, 
                            quality control, and final dispatch, our ERP ensures smooth workflows, minimizes production 
                            bottlenecks, and maximizes yield.
                        </p>

                        <h3 class="mt-5 mb-3">Complete Manufacturing Modules</h3>
                        <div class="list-items">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <ul class="d-flex flex-column gap-3">
                                        <li><span><i class="fa-solid fa-check me-2" style="color: #6A47ED;"></i>
                                                <strong>Production Planning:</strong> Master production schedules, BOMs, and routing.</span></li>
                                        <li><span><i class="fa-solid fa-check me-2" style="color: #6A47ED;"></i>
                                                <strong>Inventory Management:</strong> Track raw materials, WIP, and finished goods.</span></li>
                                        <li><span><i class="fa-solid fa-check me-2" style="color: #6A47ED;"></i>
                                                <strong>Supply Chain & Purchase:</strong> Vendor management and automated purchase orders.</span></li>
                                        <li><span><i class="fa-solid fa-check me-2" style="color: #6A47ED;"></i>
                                                <strong>Quality Control (QC):</strong> Defect tracking, inspections, and compliance checks.</span></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="d-flex flex-column gap-3">
                                        <li><span><i class="fa-solid fa-check me-2" style="color: #6A47ED;"></i>
                                                <strong>Sales & Distribution:</strong> Quotations, order tracking, and dispatch planning.</span></li>
                                        <li><span><i class="fa-solid fa-check me-2" style="color: #6A47ED;"></i>
                                                <strong>Asset & Maintenance:</strong> Predictive machine maintenance and downtime tracking.</span></li>
                                        <li><span><i class="fa-solid fa-check me-2" style="color: #6A47ED;"></i>
                                                <strong>Financial Accounting:</strong> Product costing, tax, and integrated ledgers.</span></li>
                                        <li><span><i class="fa-solid fa-check me-2" style="color: #6A47ED;"></i>
                                                <strong>Reports & Analytics:</strong> Real-time OEE metrics and production dashboards.</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <h3 class="mt-5 mb-3">Why Factories Choose Us</h3>
                        <p class="mb-4">
                            Trusted by 500+ manufacturing units. We provide a highly secure, data-compliant system
                            with real-time shop floor visibility, ensuring your plant runs at peak efficiency without costly downtime.
                        </p>
                    </div>

                    <!-- Book A Demo Form (Reused from comments section) -->
                    <div class="news-post-details" id="demo-section">
                        <div class="comments-area" style="background: #f8f9fa; padding: 40px; border-radius: 15px;">
                            <div class="comment-form-wrap">
                                <h3>Book a Free Demo</h3>
                                <p class="mb-4">Fill out the form below and our ERP expert will contact you to schedule
                                    a personalized walkthrough.</p>
                                <form action="<?= url('process-demo') ?>" id="demo-form" method="POST">
                                    <input type="hidden" name="product_name" value="Manufacturing ERP">
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <span>Full Name*</span>
                                                <input type="text" name="name" placeholder="John Doe" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <span>Work Email*</span>
                                                <input type="email" name="email" placeholder="john@company.com"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <span>Company/Factory Name*</span>
                                                <input type="text" name="company" placeholder="Apex Manufacturing Ltd."
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <span>Phone Number*</span>
                                                <input type="text" name="phone" placeholder="+91 XXXXX XXXXX" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-clt">
                                                <span>Your Requirements*</span>
                                                <textarea name="message"
                                                    placeholder="Tell us about your specific module requirements..."></textarea>
                                            </div>
                                        </div>
                                        <?php require_once __DIR__ . '/includes/captcha-helper.php'; render_captcha_html(); ?>
                                        <div class="col-lg-12">
                                            <button type="submit" class="theme-btn w-100 justify-content-center">
                                                Request Demo <i class="fa-solid fa-arrow-right-long"></i>
                                            </button>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-message mt-3"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Sidebar -->
                <div class="col-12 col-lg-4 mt-5 mt-lg-0">
                    <div class="main-sidebar sticky-style">

                        <!-- Security Info Widget (Customized Search Widget) -->
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h4>Data Security</h4>
                            </div>
                            <div class="news-widget-categories">
                                <ul class="d-flex flex-column gap-2">
                                    <li><i class="fa-solid fa-shield-halved me-2 text-success"></i> ISO 27001 Compliant</li>
                                    <li><i class="fa-solid fa-lock me-2 text-success"></i> End-to-End Encryption</li>
                                    <li><i class="fa-solid fa-cloud-arrow-up me-2 text-success"></i> Automated Cloud
                                        Backups</li>
                                </ul>
                            </div>
                        </div>

                        <!-- User Roles Categories -->
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h4>Rule-Based Access</h4>
                            </div>
                            <div class="news-widget-categories">
                                <ul>
                                    <li class="active"><a href="#">Super Admin</a> <span>(Full Access)</span></li>
                                    <li><a href="#">Plant Manager</a> <span>(Operations)</span></li>
                                    <li><a href="#">Store Manager</a> <span>(Inventory)</span></li>
                                    <li><a href="#">Quality Inspector</a> <span>(QC/QA)</span></li>
                                    <li><a href="#">Accountant</a> <span>(Finance)</span></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Add-On Integrations (Reusing Recent Posts) -->
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h3>Popular Add-Ons</h3>
                            </div>
                            <div class="recent-post-area">
                                <div class="recent-items align-items-center">
                                    <div class="recent-thumb"
                                        style="width: 60px; height: 60px; border-radius: 8px; background: #eee; display:flex; align-items:center; justify-content:center;">
                                        <i class="fa-solid fa-barcode fs-3" style="color: var(--theme);"></i>
                                    </div>
                                    <div class="recent-content">
                                        <h6 class="mb-1">
                                            <a href="#">Barcode / RFID Tracking</a>
                                        </h6>
                                        <span class="fs-6 text-muted">Automate stock taking</span>
                                    </div>
                                </div>
                                <div class="recent-items align-items-center mt-3">
                                    <div class="recent-thumb"
                                        style="width: 60px; height: 60px; border-radius: 8px; background: #eee; display:flex; align-items:center; justify-content:center;">
                                        <i class="fa-solid fa-fingerprint fs-3" style="color: var(--theme);"></i>
                                    </div>
                                    <div class="recent-content">
                                        <h6 class="mb-1">
                                            <a href="#">Biometric Integration</a>
                                        </h6>
                                        <span class="fs-6 text-muted">Worker shift & attendance</span>
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




<?php include 'includes/footer.php'; ?>