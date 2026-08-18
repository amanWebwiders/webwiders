<?php include 'includes/header.php'; ?>

<!-- Breadcrumb Section Start -->
<div class="breadcrumb-wrapper bg-cover" >
    <div class="left-shape">
        <img src="assets/img/breadcrumb-shape.png" alt="img">
    </div>
    <div class="right-shape">
        <img src="assets/img/breadcrumb-shape-2.png" alt="img">
    </div>
    <div class="container">
        <div class="page-heading">
            <div class="breadcrumb-sub-title">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Real Estate CRM</h1>
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
                    Real Estate CRM
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
                        <img src="assets/img/healthcare.png" alt="Real Estate ERP Dashboard"
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
                                    <span>Real Estate ERP Solution</span>
                                </div>
                            </div>
                            <h2>Complete Real Estate Management ERP</h2>
                            <!-- Tagline/Highlight -->
                            <h5 class="mt-3 mb-4" style="color: var(--theme, #6A47ED); font-weight: 600;">For Modern
                                Developers, Agencies & Property Managers</h5>

                            <p class="mb-4">
                                Manage Properties, Sales, Leasing, Construction Projects, and Finance from a single,
                                cloud-based platform. Streamline your real estate operations with our highly secure and
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
                                Book a Free Demo <i class="fa-solid fa-building"></i>
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
                        <h3>What is Real Estate ERP?</h3>
                        <p class="mt-3 mb-4">
                            Real Estate ERP is a comprehensively integrated system designed to manage all
                            aspects of property and construction operations. From lead generation and site visits to
                            property handover, lease management, and accounting, our ERP ensures smooth workflows,
                            minimizes delays, and maximizes your ROI.
                        </p>

                        <h3 class="mt-5 mb-3">Complete Real Estate Modules</h3>
                        <div class="list-items">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <ul class="d-flex flex-column gap-3">
                                        <li><span><i class="fa-solid fa-helmet-safety me-2" style="color: #6A47ED;"></i>
                                                <strong>Project & Construction:</strong> Track phases, materials, and
                                                contractors.</span></li>
                                        <li><span><i class="fa-solid fa-city me-2" style="color: #6A47ED;"></i>
                                                <strong>Property Inventory:</strong> Manage units, plots, commercial
                                                spaces, and availability.</span></li>
                                        <li><span><i class="fa-solid fa-handshake me-2" style="color: #6A47ED;"></i>
                                                <strong>Sales & CRM:</strong> Lead tracking, site visits, and booking
                                                management.</span></li>
                                        <li><span><i class="fa-solid fa-key me-2" style="color: #6A47ED;"></i>
                                                <strong>Leasing & Tenant:</strong> Lease agreements, rent collection,
                                                and renewals.</span></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="d-flex flex-column gap-3">
                                        <li><span><i class="fa-solid fa-file-invoice-dollar me-2"
                                                    style="color: #6A47ED;"></i>
                                                <strong>Finance & Accounting:</strong> Payment schedules, invoicing, and
                                                tax calculations.</span></li>
                                        <li><span><i class="fa-solid fa-users-gear me-2" style="color: #6A47ED;"></i>
                                                <strong>Broker Management:</strong> Channel partner tracking,
                                                commissions, and payouts.</span></li>
                                        <li><span><i class="fa-solid fa-id-card me-2" style="color: #6A47ED;"></i>
                                                <strong>HR & Payroll:</strong> Staff attendance, salaries, and
                                                site-worker wages.</span></li>
                                        <li><span><i class="fa-solid fa-chart-pie me-2" style="color: #6A47ED;"></i>
                                                <strong>Reports & Analytics:</strong> Real-time cash flow, project
                                                profitability, and sales dashboards.</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <h3 class="mt-5 mb-3">Why Builders Choose Us</h3>
                        <p class="mb-4">
                            Trusted by 500+ builders and real estate agencies. We provide a highly secure,
                            RERA-compliant system
                            with real-time portfolio visibility, ensuring your projects are delivered on time and within
                            budget.
                        </p>
                    </div>

                    <!-- Book A Demo Form (Reused from comments section) -->
                    <div class="news-post-details" id="demo-section">
                        <div class="comments-area" style="background: #f8f9fa; padding: 40px; border-radius: 15px;">
                            <div class="comment-form-wrap">
                                <h3>Book a Free Demo</h3>
                                <p class="mb-4">Fill out the form below and our ERP expert will contact you to schedule
                                    a personalized walkthrough.</p>
                                <form action="#" id="demo-form" method="POST">
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
                                                <input type="email" name="email" placeholder="john@builder.com"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <span>Company/Agency Name*</span>
                                                <input type="text" name="company" placeholder="Skyline Developers"
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
                                        <div class="col-lg-12">
                                            <button type="submit" class="theme-btn w-100 justify-content-center">
                                                Request Demo <i class="fa-solid fa-arrow-right-long"></i>
                                            </button>
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
                                <h4>Data Security & Compliance</h4>
                            </div>
                            <div class="news-widget-categories">
                                <ul class="d-flex flex-column gap-2">
                                    <li><i class="fa-solid fa-file-shield me-2 text-success"></i> RERA Compliant</li>
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
                                    <li><a href="#">Sales Manager</a> <span>(CRM/Leads)</span></li>
                                    <li><a href="#">Project Manager</a> <span>(Construction)</span></li>
                                    <li><a href="#">Finance Admin</a> <span>(Accounts)</span></li>
                                    <li><a href="#">Broker/Agent</a> <span>(Channel Partner)</span></li>
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
                                        <i class="fa-solid fa-credit-card fs-3" style="color: var(--theme);"></i>
                                    </div>
                                    <div class="recent-content">
                                        <h6 class="mb-1">
                                            <a href="#">Payment Gateway</a>
                                        </h6>
                                        <span class="fs-6 text-muted">Automate EMI/Rent collection</span>
                                    </div>
                                </div>
                                <div class="recent-items align-items-center mt-3">
                                    <div class="recent-thumb"
                                        style="width: 60px; height: 60px; border-radius: 8px; background: #eee; display:flex; align-items:center; justify-content:center;">
                                        <i class="fa-brands fa-whatsapp fs-3 text-success"></i>
                                    </div>
                                    <div class="recent-content">
                                        <h6 class="mb-1">
                                            <a href="#">WhatsApp API</a>
                                        </h6>
                                        <span class="fs-6 text-muted">Client & Broker follow-ups</span>
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