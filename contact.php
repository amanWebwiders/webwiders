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
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Contact</h1>
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
                    Contact
                </li>
            </ul>
        </div>
    </div>
</div>

<?php include 'includes/contact-section.php'; ?>

<?php include 'includes/footer.php'; ?>