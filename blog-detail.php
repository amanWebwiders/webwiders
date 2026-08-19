<?php
$slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$blog = null;
$recentBlogs = [];
$sidebarCategories = [];
$allSidebarTags = [];

require_once __DIR__ . '/config.php';

if (isset($pdo) && $pdo) {
    try {
        if (!empty($slug)) {
            $stmt = $pdo->prepare("
                SELECT b.*, c.name as category_name, c.slug as category_slug 
                FROM blogs b 
                LEFT JOIN categories c ON b.category_id = c.id 
                WHERE b.slug = :slug AND b.status = 'published' 
                AND (b.published_at IS NULL OR b.published_at <= NOW()) 
                LIMIT 1
            ");
            $stmt->execute(['slug' => $slug]);
            $blog = $stmt->fetch();
        } elseif (!empty($id)) {
            $stmt = $pdo->prepare("
                SELECT b.*, c.name as category_name, c.slug as category_slug 
                FROM blogs b 
                LEFT JOIN categories c ON b.category_id = c.id 
                WHERE b.id = :id AND b.status = 'published' 
                AND (b.published_at IS NULL OR b.published_at <= NOW()) 
                LIMIT 1
            ");
            $stmt->execute(['id' => $id]);
            $blog = $stmt->fetch();
        }

        // Fallback to latest published blog if no post specified
        if (!$blog) {
            $stmt = $pdo->query("
                SELECT b.*, c.name as category_name, c.slug as category_slug 
                FROM blogs b 
                LEFT JOIN categories c ON b.category_id = c.id 
                WHERE b.status = 'published' 
                AND (b.published_at IS NULL OR b.published_at <= NOW()) 
                ORDER BY b.is_featured DESC, COALESCE(b.published_at, b.created_at) DESC 
                LIMIT 1
            ");
            $blog = $stmt->fetch();
        }

        // Recent blogs for sidebar
        $recentStmt = $pdo->query("
            SELECT b.*, c.name as category_name 
            FROM blogs b 
            LEFT JOIN categories c ON b.category_id = c.id 
            WHERE b.status = 'published' 
            AND (b.published_at IS NULL OR b.published_at <= NOW()) 
            ORDER BY COALESCE(b.published_at, b.created_at) DESC 
            LIMIT 4
        ");
        $recentBlogs = $recentStmt->fetchAll();

        // Categories list for sidebar (only active categories)
        $catStmt = $pdo->query("
            SELECT c.*, COUNT(b.id) as blog_count 
            FROM categories c
            INNER JOIN blogs b ON b.category_id = c.id AND b.status = 'published' AND (b.published_at IS NULL OR b.published_at <= NOW())
            GROUP BY c.id
            HAVING blog_count > 0
            ORDER BY c.name ASC
        ");
        $sidebarCategories = $catStmt->fetchAll();

        // Collect all distinct tags across published blogs for sidebar tagcloud
        $tagsStmt = $pdo->query("
            SELECT tags, meta_keywords 
            FROM blogs 
            WHERE status = 'published' 
            AND (published_at IS NULL OR published_at <= NOW())
        ");
        $tagRows = $tagsStmt->fetchAll();
        $tagSet = [];
        foreach ($tagRows as $trow) {
            $rawTags = !empty($trow['tags']) ? $trow['tags'] : $trow['meta_keywords'];
            if (!empty($rawTags)) {
                $parts = explode(',', $rawTags);
                foreach ($parts as $p) {
                    $cleanP = trim($p);
                    if ($cleanP !== '' && !in_array($cleanP, $tagSet)) {
                        $tagSet[] = $cleanP;
                    }
                }
            }
        }
        $allSidebarTags = array_slice($tagSet, 0, 12);
    } catch (Exception $e) {
        error_log("Error in blog-detail.php: " . $e->getMessage());
    }
}
?>

<?php include 'includes/header.php'; ?>

<!-- Dynamic Page Meta Title if Blog exists -->
<?php if ($blog && !empty($blog['meta_title'])): ?>
    <script>document.title = "<?= addslashes($blog['meta_title']) ?>";</script>
<?php elseif ($blog): ?>
    <script>document.title = "<?= addslashes($blog['title']) ?> - WebWiders";</script>
<?php endif; ?>

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
                    <?= $blog ? htmlspecialchars($blog['title']) : 'Blog Detail' ?>
                </h1>
            </div>
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                <li>
                    <a href="<?= url('/') ?>">Home</a>
                </li>
                <li>
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                    <a href="<?= url('blog') ?>">Blog</a>
                </li>
                <li>
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                    <?= $blog ? htmlspecialchars($blog['title']) : 'Blog Detail' ?>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- News Details Section Start -->
<section class="news-details-section section-padding">
    <div class="container">
        <?php if ($blog): ?>
            <div class="news-details-wrapper">
                <div class="row g-4">
                    <div class="col-12 col-lg-8">
                        <div class="news-post-details">
                            <div class="single-news-post">
                                <?php if (!empty($blog['featured_image'])): ?>
                                    <div class="post-featured-thumb mb-4">
                                        <img src="<?= htmlspecialchars(get_blog_image_url($blog['featured_image'])) ?>" 
                                             alt="<?= htmlspecialchars($blog['title']) ?>"
                                             style="width: 100%; border-radius: 12px; max-height: 480px; object-fit: cover;">
                                    </div>
                                <?php endif; ?>

                                <div class="post-content">
                                    <ul class="post-list d-flex align-items-center mb-4">
                                        <li>
                                            <i class="fa-regular fa-user"></i> By <?= htmlspecialchars($blog['author'] ?? 'Admin') ?>
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <?= date('d M, Y', strtotime($blog['published_at'] ?? $blog['created_at'])) ?>
                                        </li>
                                        <?php if (!empty($blog['category_name'])): ?>
                                            <li>
                                                <i class="fa-solid fa-tag"></i>
                                                <?= htmlspecialchars($blog['category_name']) ?>
                                            </li>
                                        <?php endif; ?>
                                    </ul>

                                    <h2 class="mb-4" style="color: #222; font-weight: 700;"><?= htmlspecialchars($blog['title']) ?></h2>

                                    <?php if (!empty($blog['short_description'])): ?>
                                        <div class="lead-text mb-4 p-3" style="background: #f8f9fa; border-left: 4px solid var(--primary-red, #ff0000); font-size: 1.1rem; color: #555; border-radius: 4px;">
                                            <?= htmlspecialchars($blog['short_description']) ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php 
                                        $contentHtml = $blog['content'];
                                        $adminUrl = env('ADMIN_URL', 'http://localhost/adminwebwider/');
                                        $storageUrl = env('STORAGE_URL', 'http://localhost/adminwebwider/public/storage/');
                                        $contentHtml = str_replace(rtrim($adminUrl, '/') . '/storage/', $storageUrl, $contentHtml);
                                        $contentHtml = preg_replace('/src=["\']\/?storage\//i', 'src="' . $storageUrl, $contentHtml);
                                    ?>
                                    <div class="blog-content-body mt-4">
                                        <?= $contentHtml ?>
                                    </div>
                                </div>
                            </div>

                            <!-- Dynamic Tags / Hashtags & Social Share Section -->
                            <div class="row tag-share-wrap mt-5 mb-5 pt-4 border-top">
                                <div class="col-lg-8 col-12">
                                    <?php 
                                    $blogTags = !empty($blog['tags']) ? array_map('trim', explode(',', $blog['tags'])) : (!empty($blog['meta_keywords']) ? array_map('trim', explode(',', $blog['meta_keywords'])) : []);
                                    ?>
                                    <?php if (!empty($blogTags)): ?>
                                        <div class="tagcloud">
                                            <span>Tags:</span>
                                            <?php foreach ($blogTags as $btag): ?>
                                                <a href="blog.php?tag=<?= urlencode($btag) ?>"><?= htmlspecialchars($btag) ?></a>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="col-lg-4 col-12 mt-3 mt-lg-0 text-lg-end">
                                    <div class="social-share">
                                        <span class="me-3 fw-bold">Share:</span>
                                        <?php 
                                        $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 'https' : 'http';
                                        $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
                                        $reqUri = $_SERVER['REQUEST_URI'] ?? '';
                                        $fullUrl = urlencode($protocol . '://' . $host . $reqUri);
                                        $encodedTitle = urlencode($blog['title']);
                                        ?>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?= $fullUrl ?>" target="_blank" class="me-2 text-dark" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://twitter.com/intent/tweet?url=<?= $fullUrl ?>&text=<?= $encodedTitle ?>" target="_blank" class="me-2 text-dark" title="Share on X/Twitter"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?= $fullUrl ?>" target="_blank" class="me-2 text-dark" title="Share on LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="https://api.whatsapp.com/send?text=<?= $encodedTitle ?>%20<?= $fullUrl ?>" target="_blank" class="text-success" title="Share on WhatsApp"><i class="fab fa-whatsapp"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar Section -->
                    <div class="col-12 col-lg-4">
                        <div class="main-sidebar sticky-style">
                            <!-- Search Widget -->
                            <div class="single-sidebar-widget mb-4">
                                <div class="wid-title">
                                    <h4>Search</h4>
                                </div>
                                <div class="search-widget">
                                    <form action="<?= url('blog') ?>" method="GET">
                                        <input type="text" name="search" placeholder="Search blogs..." required>
                                        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    </form>
                                </div>
                            </div>

                            <!-- Categories Widget -->
                            <?php if (!empty($sidebarCategories)): ?>
                                <div class="single-sidebar-widget mb-4">
                                    <div class="wid-title">
                                        <h4>Categories</h4>
                                    </div>
                                    <div class="news-widget-categories">
                                        <ul>
                                            <?php foreach ($sidebarCategories as $scat): ?>
                                                <li>
                                                    <a href="<?= url('blog') ?>#cat-<?= htmlspecialchars($scat['slug']) ?>">
                                                        <?= htmlspecialchars($scat['name']) ?>
                                                    </a>
                                                    <span>(<?= $scat['blog_count'] ?>)</span>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <!-- Recent Posts Widget -->
                            <?php if (!empty($recentBlogs)): ?>
                                <div class="single-sidebar-widget mb-4">
                                    <div class="wid-title">
                                        <h3>Recent Posts</h3>
                                    </div>
                                    <div class="recent-post-area">
                                        <?php foreach ($recentBlogs as $rblog): ?>
                                            <div class="recent-items d-flex align-items-center mb-3">
                                                <div class="recent-thumb me-3">
                                                    <img src="<?= htmlspecialchars(get_blog_image_url($rblog['featured_image'])) ?>" 
                                                         alt="<?= htmlspecialchars($rblog['title']) ?>"
                                                         style="width: 70px; height: 70px; object-fit: cover; border-radius: 8px;">
                                                </div>
                                                <div class="recent-content">
                                                    <p class="mb-1" style="font-size: 12px; color: #888;">
                                                        <i class="fa-solid fa-calendar-days me-1"></i>
                                                        <?= date('d M, Y', strtotime($rblog['published_at'] ?? $rblog['created_at'])) ?>
                                                    </p>
                                                    <h6 class="mb-0" style="font-size: 14px; line-height: 1.3;">
                                                        <a href="<?= url('blog-detail/' . urlencode($rblog['slug'])) ?>" style="color: #222;">
                                                            <?= htmlspecialchars($rblog['title']) ?>
                                                        </a>
                                                    </h6>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <!-- Popular Tags / Hashtags Widget -->
                            <?php if (!empty($allSidebarTags)): ?>
                                <div class="single-sidebar-widget mb-4">
                                    <div class="wid-title">
                                        <h4>Popular Tags</h4>
                                    </div>
                                    <div class="news-widget-categories">
                                        <div class="tagcloud">
                                            <?php foreach ($allSidebarTags as $stag): ?>
                                                <a href="blog.php?tag=<?= urlencode($stag) ?>"><?= htmlspecialchars($stag) ?></a>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="text-center py-5">
                <h2>Blog Post Not Found</h2>
                <p class="text-muted">The requested blog post is not available.</p>
                <a href="<?= url('blog') ?>" class="theme-btn mt-3">Back to Blogs</a>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
