<?php include 'includes/header.php'; ?>

<?php
$searchQuery = isset($_GET['search']) ? trim($_GET['search']) : '';
$tagQuery = isset($_GET['tag']) ? trim($_GET['tag']) : '';

$filteredBlogs = null;
if (!empty($searchQuery) && isset($pdo) && $pdo) {
    try {
        $stmt = $pdo->prepare("
            SELECT b.*, c.name as category_name 
            FROM blogs b 
            LEFT JOIN categories c ON b.category_id = c.id 
            WHERE b.status = 'published' 
            AND (b.published_at IS NULL OR b.published_at <= NOW()) 
            AND (b.title LIKE :s OR b.short_description LIKE :s OR b.content LIKE :s) 
            ORDER BY b.is_featured DESC, COALESCE(b.published_at, b.created_at) DESC
        ");
        $stmt->execute(['s' => '%' . $searchQuery . '%']);
        $filteredBlogs = $stmt->fetchAll();
    } catch (Exception $e) {
        error_log("Error in blog search: " . $e->getMessage());
    }
} elseif (!empty($tagQuery) && isset($pdo) && $pdo) {
    try {
        $stmt = $pdo->prepare("
            SELECT b.*, c.name as category_name 
            FROM blogs b 
            LEFT JOIN categories c ON b.category_id = c.id 
            WHERE b.status = 'published' 
            AND (b.published_at IS NULL OR b.published_at <= NOW()) 
            AND (b.tags LIKE :t OR b.meta_keywords LIKE :t) 
            ORDER BY b.is_featured DESC, COALESCE(b.published_at, b.created_at) DESC
        ");
        $stmt->execute(['t' => '%' . $tagQuery . '%']);
        $filteredBlogs = $stmt->fetchAll();
    } catch (Exception $e) {
        error_log("Error in tag filter: " . $e->getMessage());
    }
}

// Fetch Slider Blogs
$sliderBlogs = [];
if (isset($pdo) && $pdo) {
    try {
        $stmt = $pdo->prepare("
            SELECT b.*, c.name as category_name 
            FROM blogs b 
            LEFT JOIN categories c ON b.category_id = c.id 
            WHERE b.status = 'published' 
            AND (b.published_at IS NULL OR b.published_at <= NOW()) 
            ORDER BY b.is_featured DESC, COALESCE(b.published_at, b.created_at) DESC 
            LIMIT 6
        ");
        $stmt->execute();
        $sliderBlogs = $stmt->fetchAll();
    } catch (Exception $e) {
        error_log("Error fetching slider blogs: " . $e->getMessage());
    }
}

// Fetch ONLY Categories that HAVE AT LEAST ONE Published Blog
$categoriesWithBlogs = [];
if (isset($pdo) && $pdo) {
    try {
        $catStmt = $pdo->query("
            SELECT c.*, COUNT(b.id) as published_blog_count
            FROM categories c
            INNER JOIN blogs b ON b.category_id = c.id
            WHERE b.status = 'published'
            AND (b.published_at IS NULL OR b.published_at <= NOW())
            GROUP BY c.id
            HAVING published_blog_count > 0
            ORDER BY c.name ASC
        ");
        $categories = $catStmt->fetchAll();

        foreach ($categories as $cat) {
            $blogStmt = $pdo->prepare("
                SELECT b.*, c.name as category_name 
                FROM blogs b 
                LEFT JOIN categories c ON b.category_id = c.id 
                WHERE b.category_id = :cat_id 
                AND b.status = 'published' 
                AND (b.published_at IS NULL OR b.published_at <= NOW()) 
                ORDER BY b.is_featured DESC, COALESCE(b.published_at, b.created_at) DESC
            ");
            $blogStmt->execute(['cat_id' => $cat['id']]);
            $catBlogs = $blogStmt->fetchAll();
            
            if (!empty($catBlogs)) {
                $categoriesWithBlogs[] = [
                    'category' => $cat,
                    'blogs' => $catBlogs
                ];
            }
        }

        // Uncategorized blogs
        $uncatStmt = $pdo->query("
            SELECT b.*, 'Uncategorized' as category_name 
            FROM blogs b 
            WHERE b.category_id IS NULL 
            AND b.status = 'published' 
            AND (b.published_at IS NULL OR b.published_at <= NOW()) 
            ORDER BY b.is_featured DESC, COALESCE(b.published_at, b.created_at) DESC
        ");
        $uncatBlogs = $uncatStmt->fetchAll();
        if (!empty($uncatBlogs)) {
            $categoriesWithBlogs[] = [
                'category' => ['id' => 0, 'name' => 'Other Blogs', 'slug' => 'others'],
                'blogs' => $uncatBlogs
            ];
        }
    } catch (Exception $e) {
        error_log("Error fetching category blogs: " . $e->getMessage());
    }
}
?>

<!-- Breadcrumb Section Start -->
<div class="breadcrumb-wrapper bg-cover">
    <div class="left-shape">
        <img src="assets/img/breadcrumb-shape.png" alt="img">
    </div>
    <div class="right-shape">
        <img src="assets/img/breadcrumb-shape-2.png" alt="img">
    </div>
    <div class="container">
        <div class="page-heading">
            <div class="breadcrumb-sub-title">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">
                    <?php if (!empty($searchQuery)): ?>
                        Search: "<?= htmlspecialchars($searchQuery) ?>"
                    <?php elseif (!empty($tagQuery)): ?>
                        Tag: #<?= htmlspecialchars($tagQuery) ?>
                    <?php else: ?>
                        Blog
                    <?php endif; ?>
                </h1>
            </div>
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                <li><a href="index.php">Home</a></li>
                <li><i class="fa-solid fa-chevron-right"></i></li>
                <li><a href="blog.php">Blog</a></li>
                <?php if (!empty($searchQuery) || !empty($tagQuery)): ?>
                    <li><i class="fa-solid fa-chevron-right"></i></li>
                    <li>Filtered Results</li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Search or Tag Filtered Results View -->
<?php if ($filteredBlogs !== null): ?>
    <section class="section-padding news-section">
        <div class="container blogs-container">
            <div class="section-title-area mb-5">
                <div class="section-title">
                    <h2>
                        <?php if (!empty($searchQuery)): ?>
                            Search Results for "<?= htmlspecialchars($searchQuery) ?>"
                        <?php else: ?>
                            Blogs tagged with "#<?= htmlspecialchars($tagQuery) ?>"
                        <?php endif; ?>
                    </h2>
                    <p class="text-muted">Found <?= count($filteredBlogs) ?> post(s)</p>
                </div>
                <a href="blog.php" class="btn btn-outline-secondary">Clear Filter</a>
            </div>

            <?php if (!empty($filteredBlogs)): ?>
                <div class="row g-4">
                    <?php foreach ($filteredBlogs as $fblog): ?>
                        <div class="col-md-6 col-12">
                            <div class="news-standard-wrapper h-100" style="background: #fff; padding: 20px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
                                <div class="news-standard-items row">
                                    <div class="col-12">
                                        <div class="thumb">
                                            <img src="<?= htmlspecialchars(get_blog_image_url($fblog['featured_image'])) ?>" 
                                                 alt="<?= htmlspecialchars($fblog['title']) ?>"
                                                 style="width: 100%; height: 260px; object-fit: cover; border-radius: 8px;">
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex align-items-center mt-3">
                                        <div class="content text-content-right w-100">
                                            <p>
                                                <small><i class="fa-regular fa-calendar-days me-1"></i> <?= date('F j, Y', strtotime($fblog['published_at'] ?? $fblog['created_at'])) ?></small>
                                                <?php if (!empty($fblog['category_name'])): ?>
                                                    <span class="badge bg-secondary ms-2"><?= htmlspecialchars($fblog['category_name']) ?></span>
                                                <?php endif; ?>
                                            </p>
                                            <h3 style="font-size: 20px; color: #222;"><?= htmlspecialchars($fblog['title']) ?></h3>
                                            <?php if (!empty($fblog['short_description'])): ?>
                                                <p class="text-muted mt-2 mb-3" style="font-size: 14px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                                    <?= htmlspecialchars($fblog['short_description']) ?>
                                                </p>
                                            <?php endif; ?>
                                            <a href="blog-detail.php?slug=<?= urlencode($fblog['slug']) ?>" class="theme-btn mt-2">See Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="text-center py-5">
                    <h4>No blogs found matching your search.</h4>
                    <a href="blog.php" class="theme-btn mt-3">View All Blogs</a>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php else: ?>
    <!-- Normal Blog Page View -->
    <section class="news-section section-padding section-bg bg-white">
        <div class="left-shape">
            <img src="assets/img/news/left-shape.png" alt="img">
        </div>

        <div class="container">
            <div class="section-title-area d-flex flex-wrap justify-content-between align-items-start mb-5">
                <div class="section-title mb-0">
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        Technology Insights & <br>Resources
                    </h2>
                    <p class="section-title-desc wow fadeInUp" data-wow-delay=".4s">
                        Stay ahead with expert insights on AI, software development, web technologies, mobile apps, cloud
                        computing, UI/UX design, digital transformation, and emerging technology trends. Explore practical
                        guides, industry updates, and best practices from the Webwiders team.
                    </p>
                </div>
                <div class="main-button wow fadeInUp" data-wow-delay=".5s">
                    <a href="#" data-bs-toggle="offcanvas" data-bs-target="#getCallOffcanvas"> <span class="theme-btn">
                            Get a Call </span><span class="arrow-btn"><i class="fa-solid fa-turn-up"></i></span></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Updates Swiper Section -->
    <section class="testimonial-section fix section-padding pt-0" style="background: #f9f9fc;">
        <div class="container">
            <div class="testimonial-wrapper">
                <div class="section-title-area mb-5">
                    <div class="section-title">
                        <div class="sub-title bg-color-2 wow fadeInUp">
                            <span>LATEST UPDATES</span>
                        </div>
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">
                            Our Latest News <br> & Insights
                        </h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="swiper brand-slider">
                            <div class="swiper-wrapper">
                                <?php if (!empty($sliderBlogs)): ?>
                                    <?php foreach ($sliderBlogs as $slide): ?>
                                        <div class="swiper-slide">
                                            <div class="news-standard-wrapper"
                                                style="background: #fff; padding: 20px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
                                                <div class="news-standard-items row">
                                                    <div class="col-12">
                                                        <div class="thumb">
                                                            <img src="<?= htmlspecialchars(get_blog_image_url($slide['featured_image'])) ?>" 
                                                                 alt="<?= htmlspecialchars($slide['title']) ?>"
                                                                 style="width: 100%; height: 240px; object-fit: cover; border-radius: 8px;">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex align-items-center mt-4">
                                                        <div class="content text-content-right w-100">
                                                            <p style="color: #666; margin-bottom: 10px;">
                                                                <small><i class="fa-regular fa-calendar-days me-2"></i> <?= date('F j, Y', strtotime($slide['published_at'] ?? $slide['created_at'])) ?></small>
                                                                <?php if (!empty($slide['category_name'])): ?>
                                                                    <span class="badge bg-secondary ms-2"><?= htmlspecialchars($slide['category_name']) ?></span>
                                                                <?php endif; ?>
                                                                <?php if (!empty($slide['is_featured'])): ?>
                                                                    <span class="badge bg-warning text-dark ms-1"><i class="fa-solid fa-star me-1"></i>Featured</span>
                                                                <?php endif; ?>
                                                            </p>
                                                            <h3 class="mb-3" style="font-size: 20px; color: #222; min-height: 52px;"><?= htmlspecialchars($slide['title']) ?></h3>
                                                            <a href="blog-detail.php?slug=<?= urlencode($slide['slug']) ?>" class="theme-btn">See Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <div class="swiper-slide">
                                        <div class="news-standard-wrapper text-center p-4" style="background: #fff; border-radius: 12px;">
                                            <p class="mb-0">No published blogs found at the moment.</p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="swiper-pagination mt-4 position-relative"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dynamic Category Sections -->
    <?php if (!empty($categoriesWithBlogs)): ?>
        <?php 
        $sectionIdx = 0;
        foreach ($categoriesWithBlogs as $catGroup): 
            $cat = $catGroup['category'];
            $blogs = $catGroup['blogs'];
            $bgStyle = ($sectionIdx % 2 === 1) ? 'style="background: #f0eeee"' : '';
            $sectionIdx++;
        ?>
        <section class="section-padding news-section" id="cat-<?= htmlspecialchars($cat['slug'] ?? 'cat') ?>" <?= $bgStyle ?>>
            <div class="container blogs-container">
                <div class="section-title-area mb-5">
                    <div class="section-title">
                        <div class="sub-title bg-color-2 wow fadeInUp">
                            <span><?= htmlspecialchars($cat['name']) ?></span>
                        </div>
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">
                            <?= htmlspecialchars($cat['name']) ?>
                        </h2>
                    </div>
                </div>
                <div class="row g-4">
                    <?php foreach ($blogs as $blog): ?>
                        <div class="col-md-6 col-12">
                            <div class="news-standard-wrapper h-100" style="background: #fff; padding: 20px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
                                <div class="news-standard-items row">
                                    <div class="col-12">
                                        <div class="thumb">
                                            <img src="<?= htmlspecialchars(get_blog_image_url($blog['featured_image'])) ?>" 
                                                 alt="<?= htmlspecialchars($blog['title']) ?>"
                                                 style="width: 100%; height: 260px; object-fit: cover; border-radius: 8px;">
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex align-items-center mt-3">
                                        <div class="content text-content-right w-100">
                                            <p>
                                                <small><i class="fa-regular fa-calendar-days me-1"></i> <?= date('F j, Y', strtotime($blog['published_at'] ?? $blog['created_at'])) ?></small>
                                                <small class="ms-2 text-muted"><i class="fa-regular fa-user me-1"></i> <?= htmlspecialchars($blog['author'] ?? 'Admin') ?></small>
                                            </p>
                                            <h3 style="font-size: 20px; color: #222;"><?= htmlspecialchars($blog['title']) ?></h3>
                                            <?php if (!empty($blog['short_description'])): ?>
                                                <p class="text-muted mt-2 mb-3" style="font-size: 14px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                                    <?= htmlspecialchars($blog['short_description']) ?>
                                                </p>
                                            <?php endif; ?>
                                            <a href="blog-detail.php?slug=<?= urlencode($blog['slug']) ?>" class="theme-btn mt-2">See Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php endforeach; ?>
    <?php else: ?>
        <section class="section-padding news-section">
            <div class="container text-center">
                <h3>No blogs available.</h3>
                <p class="text-muted">Please add and publish blogs from the Admin Panel.</p>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>

<!-- Cta Section Start -->
<section class="cta-section section-padding pb-0">
    <div class="rokect-shape float-bob-y">
        <img src="assets/img/rokect.png" alt="img">
    </div>
    <div class="container">
        <div class="cta-wrapper bg-cover" style="background-image: url('assets/img/cta-bg.jpg');">
            <div class="cta-img wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s">
                <img src="assets/img/cta-img.png" alt="img">
            </div>

            <div class="">
                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                    Need Expert Development <br> Support?
                </h2>
                <p class="wow fadeInUp mt-3" data-wow-delay=".4s"
                    style="font-size: 18px; max-width: 600px; color: #fff;">
                    Whether you're building a web application, mobile app, AI solution, or custom software, our
                    experienced team is ready to help.
                </p>
            </div>

            <div class="main-button d-flex flex-wrap gap-4 mt-4 wow fadeInUp" data-wow-delay=".5s">
                <a href="contact.php" class="d-inline-flex align-items-center">
                    <span class="theme-btn"> Contact Us </span>
                    <span class="arrow-btn"><i class="fa-regular fa-arrow-up-right"></i></span>
                </a>
                <a href="hire.php" class="d-inline-flex align-items-center">
                    <span class="theme-btn" style="background: #ffffff; color: #222;"> Hire A Developer </span>
                    <span class="arrow-btn" style="background: #ffffff; color: #222;"><i
                            class="fa-regular fa-arrow-up-right"></i></span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- OFFCANVAS FREE CONSULTATION FORM -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="getCallOffcanvas"
    aria-labelledby="getCallOffcanvasLabel" style="width: 500px; max-width: 100vw;">
    <div class="offcanvas-header px-4 pt-4 pb-0">
        <button type="button" class="btn-close ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body px-4 pb-4">
        <h3 class="fw-bold mb-3 text-center" style="color: #2c3e50;">Request a Call Back</h3>
        <p class="mb-4 text-muted text-center" style="font-size: 0.75rem; line-height: 1.6;">
            Leave your details below, and one of our experts will give you a call shortly to discuss your requirements.
        </p>
        <form class="text-start">
            <div class="row g-3">
                <div class="col-12">
                    <input type="text" class="form-control bg-white py-2" placeholder="Full Name*" required>
                </div>
                <div class="col-md-6">
                    <input type="tel" class="form-control bg-white py-2" placeholder="Phone Number*" required>
                </div>
                <div class="col-md-6">
                    <input type="email" class="form-control bg-white py-2" placeholder="Email Address*" required>
                </div>
                <div class="col-12">
                    <textarea class="form-control bg-white" rows="3"
                        placeholder="What would you like to discuss? (Optional)"></textarea>
                </div>
                <div class="col-12 text-center mt-4">
                    <button type="submit" class="btn fw-bold px-5 py-2 w-100"
                        style="background-color: var(--primary-red, #ff0000); color: white; border-radius: 25px;">
                        REQUEST A CALL
                    </button>
                </div>
                <div class="col-12 text-center mt-2">
                    <small class="text-muted" style="font-size: 0.75rem;">This site is protected by reCAPTCHA.</small>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include 'includes/contact-section.php'; ?>
<?php include 'includes/footer.php'; ?>
