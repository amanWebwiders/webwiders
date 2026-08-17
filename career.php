<?php include 'includes/header.php'; ?>

<div class="contain-wrapp paddingbot-clear " style="overflow: visible !important;">
    <div class="container">

        <div class="career-section">
            <div class="section-heading text-center mb-5">
                <h1 class="mainhade"><span>S</span>ubmit <span>Y</span>our <span>R</span>esume</h1>
                <i class="fa fa-graduation-cap"></i>
                <p class="lead">We are looking for some fresh talents. Please fill out the form below to apply for
                    exciting opportunities.</p>
            </div>

            <form method="post" id="career-form" enctype="multipart/form-data"
                action="https://www.webwiders.com/careermail.php">
                <input type="hidden" name="action" value="careerform">

                <div class="row form-row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="fname">Full Name <span class="text-danger">*</span></label>
                            <input type="text" name="fname" id="fname" class="form-control" required
                                placeholder="Enter your full name">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="email">Email Address <span class="text-danger">*</span></label>
                            <input type="email" name="email" id="email" class="form-control" required
                                placeholder="example@email.com">
                        </div>
                    </div>
                </div>

                <div class="row form-row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="contact">Contact Number <span class="text-danger">*</span></label>
                            <input type="tel" name="contact" id="contact" class="form-control" required
                                placeholder="Enter 10-digit mobile number">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="">
                            <label for="designation">Apply for Position <span class="text-danger">*</span></label>
                              <select class="form-control" required>
                                    <option value="">Select Designation</option>
                                    <option value="Accountant">Accountant</option>
                                    <option value="Android Developer">Android Developer</option>
                                    <option value="Business Development Executive">Business Development Executive
                                    </option>
                                    <option value="Business Development/IT Sales">Business Development/IT Sales</option>
                                    <option value="Business Development Manager">Business Development Manager</option>
                                    <option value="Graphics Designer">Graphics Designer</option>
                                    <option value="Human Resource">Human Resource</option>
                                    <option value="IOS Developer">IOS Developer</option>
                                    <option value="PHP Developer">PHP Developer</option>
                                    <option value="Software Testing">Software Testing</option>
                                    <option value="Web Designer">Web Designer</option>
                                    <option value="Wordpress Developer">Wordpress Developer</option>
                                </select>
                        </div>
                    </div>
                </div>

                <div class="row form-row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="cctc">Current CTC (LPA) <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="number" name="cctc" id="cctc" class="form-control" required
                                    placeholder="0.00" min="0" step="0.01">
                                <span class="input-group-text">LPA</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="ectc">Expected CTC (LPA) <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="number" name="ectc" id="ectc" class="form-control" required
                                    placeholder="0.00" min="0" step="0.01">
                                <span class="input-group-text">LPA</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row form-row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                         <label for="experience">Experience <span class="text-danger">*</span></label>
                        <select class="form-control" required>
                            <option value="">Select Experience</option>
                            <option value="Fresher">Fresher</option>
                            <option value="6 month - 1 year">6 month - 1 year</option>
                            <option value="1 year - 2 year">1 year - 2 year</option>
                            <option value="2 year - 3 year">2 year - 3 year</option>
                            <option value="More then 3 year">More than 3 years</option>
                        </select>
                    </div>
                    <!-- Optional Resume Upload Field (Uncomment if needed) -->
                    <!--
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="resume">Upload Resume</label>
                                <input type="file" name="resume" id="resume" class="form-control" accept=".pdf,.doc,.docx">
                                <small class="text-muted">Supported formats: PDF, DOC, DOCX (Max 5MB)</small>
                            </div>
                        </div>
                        -->
                </div>

                <div class="row mt-4">
                    <div class="col-md-12 text-center">
                        <div class="form-group">
                            <button type="submit" class="btn btn-submit" id="submit">
                                <i class="fa fa-paper-plane me-2"></i>Submit Application
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>


<?php include 'includes/footer.php'; ?>