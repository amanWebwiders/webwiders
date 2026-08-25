<!-- Contact Section Start -->
<section class="contact-section fix section-padding">
    <div class="container">
        <div class="section-title-area">
            <div class="section-title">
                <div class="sub-title bg-color-3 wow fadeInUp">
                    <span class="wow fadeInUp">Contact us</span>
                </div>
                <h2 class=" wow fadeInUp" data-wow-delay=".3s">
                    How can we help you today?
                </h2>
            </div>
            <!-- <p class="white-text wow fadeInUp" data-wow-delay=".5s">
                The a long established fact that a reader will be <br> distracted the readable content of page when <br> looking at layout the point.
            </p> -->
        </div>
        <div class="contact-wrapper">
            <div class="row g-4">
                <div class="col-xl-8 m-auto">
                    <div class="contact-form-area">
                        <h3>Get in Touch</h3>
                        <form action="<?= url('process-contact') ?>" id="contact-form" method="POST">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <input type="text" name="first-name" id="first-name" placeholder="First Name" required>
                                    </div>
                                </div>
                                  <div class="col-lg-6">
                                    <div class="form-clt">
                                        <input type="text" name="last-name" id="last-name" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <input type="email" name="email" id="email" placeholder="Email Address" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <input type="text" name="number" id="number" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-clt">
                                        <textarea name="message" id="message" placeholder="Message" required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="theme-btn">
                                        Submit Now
                                        <i class="fa-solid fa-arrow-right ms-1"></i>
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
    </div>
</section>