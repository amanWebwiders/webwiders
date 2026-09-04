<?php
/**
 * Common Reusable Consultation Action Button
 *
 * Basic Usage:
 *   <?php include 'includes/consultation-button.php'; ?>
 *   (or inside subdirectories like services/: <?php include __DIR__ . '/../includes/consultation-button.php'; ?>)
 *
 * Customization (optional variables before including):
 *   <?php
 *     $consultation_btn_text  = 'Talk to Our Experts'; // Default: 'Book a Consultation'
 *     $consultation_btn_class = 'hire-btn';            // Default: '' (e.g., 'hire-btn')
 *     $consultation_btn_arrow = true;                 // Default: true (set false to hide arrow)
 *     $consultation_btn_wrap  = true;                 // Default: false (wraps in .main-button)
 *     $consultation_btn_delay = '.3s';                // Default: '.3s' (for animation)
 *     include 'includes/consultation-button.php';
 *   ?>
 */
$c_btn_text  = $consultation_btn_text ?? ($btn_text ?? 'Book a Consultation');
$c_btn_class = trim('offcanvas-btn ' . ($consultation_btn_class ?? ($btn_class ?? '')));
$c_has_arrow = $consultation_btn_arrow ?? ($has_arrow ?? true);
$c_wrap      = $consultation_btn_wrap ?? ($wrap_div ?? false);
$c_delay     = $consultation_btn_delay ?? '.3s';
?>
<?php if ($c_wrap): ?>
<div class="main-button wow fadeInUp" data-wow-delay="<?= htmlspecialchars($c_delay) ?>">
<?php endif; ?>
    <a href="#" class="<?= htmlspecialchars($c_btn_class) ?>" data-bs-toggle="offcanvas" data-bs-target="#consultationOffcanvas">
        <span class="theme-btn"><?= htmlspecialchars($c_btn_text) ?></span>
        <?php if ($c_has_arrow): ?>
            <span class="arrow-btn"><i class="fa-solid fa-turn-up"></i></span>
        <?php endif; ?>
    </a>
<?php if ($c_wrap): ?>
</div>
<?php endif; ?>
