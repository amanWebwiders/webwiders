<?php require_once __DIR__ . '/captcha-helper.php'; ?>
<!-- OFFCANVAS FREE CONSULTATION FORM (Right Side Panel) -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="consultationOffcanvas"
    aria-labelledby="consultationOffcanvasLabel" style="width: 500px; max-width: 100vw;">

    <div class="offcanvas-header px-4 pt-4 pb-0">
        <button type="button" class="btn-close ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body px-4 pb-4">
        <h3 class="fw-bold mb-3 text-center" style="color: #2c3e50;">Book a Free Consultation</h3>
        <p class="mb-4 text-muted text-center" style="font-size: 0.75rem; line-height: 1.6;">
            Discuss your specific needs with our experts. Schedule a 30-minute free consultation call to see how we can
            help your business grow.
        </p>

        <form action="<?= url('process-consultation') ?>" id="consultation-form" method="POST" class="text-start">
            <div class="row g-3">
                <!-- Name -->
                <div class="col-md-6">
                    <input type="text" name="first_name" class="form-control bg-white py-2" placeholder="First Name*" required>
                </div>
                <div class="col-md-6">
                    <input type="text" name="last_name" class="form-control bg-white py-2" placeholder="Last Name*" required>
                </div>

                <!-- Contact & Company -->
                <div class="col-md-6">
                    <input type="email" name="email" class="form-control bg-white py-2" placeholder="Work Email*" required>
                </div>
                <div class="col-md-6">
                    <input type="tel" name="phone" class="form-control bg-white py-2" placeholder="Phone Number*" required>
                </div>

                <div class="col-12">
                    <input type="text" name="company" class="form-control bg-white py-2" placeholder="Company Name*" required>
                </div>

                <!-- Consultation Specifics -->
                <div class="col-12">
                    <select name="primary_goal" class="form-select bg-white text-muted py-2">
                        <option value="" selected disabled>What is your primary goal?*</option>
                        <option value="Optimize current operations">Optimize current operations</option>
                        <option value="New software implementation">New software implementation</option>
                        <option value="System integration & APIs">System integration & APIs</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <!-- Date & Time Picker -->
                <div class="col-md-6">
                    <input type="date" name="preferred_date" class="form-control bg-white py-2 text-muted" required min="<?= date('Y-m-d') ?>" title="Preferred Date">
                </div>
                <div class="col-md-6">
                    <select name="preferred_time" class="form-select bg-white text-muted py-2">
                        <option value="" selected disabled>Preferred Time*</option>
                        <option value="Morning (9 AM - 12 PM)">Morning (9 AM - 12 PM)</option>
                        <option value="Afternoon (1 PM - 5 PM)">Afternoon (1 PM - 5 PM)</option>
                    </select>
                </div>

                <!-- Message -->
                <div class="col-12">
                    <textarea name="message" class="form-control bg-white" rows="3" placeholder="Briefly describe what you'd like to discuss..."></textarea>
                </div>

                <?php render_captcha_html(); ?>

                <!-- Submit Button -->
                <div class="col-12 text-center mt-4">
                    <button type="submit" class="btn fw-bold px-5 py-2 w-100" style="background-color: var(--primary-red, #ff0000); color: white; border-radius: 25px;">BOOK MY SESSION</button>
                </div>

                <div class="col-12 text-center mt-2">
                    <small class="text-muted" style="font-size: 0.75rem;">This site is protected by reCAPTCHA.</small>
                </div>

                <div class="col-12">
                    <div class="form-message mt-3"></div>
                </div>
            </div>
        </form>
    </div>
</div>
