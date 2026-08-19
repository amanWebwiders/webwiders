<?php include 'includes/header.php'; ?>


<!-- ==========================================
     START: MEET ZANE CASE STUDY SECTION
     ========================================== -->
<style>
    /* ---------------------------------------------------------
       Strictly Scoped CSS Hierarchy 
       Target: #meetzane-case-study.meetzane-page 
       --------------------------------------------------------- */
    #meetzane-case-study.meetzane-page {
        color: #333;
        font-family: inherit;
        background-color: #fff;
    }
    #meetzane-case-study.meetzane-page h1, 
    #meetzane-case-study.meetzane-page h2, 
    #meetzane-case-study.meetzane-page h3, 
    #meetzane-case-study.meetzane-page h4, 
    #meetzane-case-study.meetzane-page h5,
    #meetzane-case-study.meetzane-page h6 {
        color: #1a1a1a;
        font-weight: 700;
    }
    #meetzane-case-study.meetzane-page .section-spacer {
        padding: 80px 0;
    }
    #meetzane-case-study.meetzane-page .bg-light-gray {
        background-color: #f8f9fa;
    }
    #meetzane-case-study.meetzane-page .theme-text-primary {
        color: #a5110d; /* Theme Primary Color for this page */
    }
    #meetzane-case-study.meetzane-page .btn-custom-primary {
        background-color: #a5110d;
        color: #fff;
        padding: 12px 30px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 600;
        display: inline-block;
        transition: 0.3s ease;
        border: 2px solid #a5110d;
    }
    #meetzane-case-study.meetzane-page .btn-custom-primary:hover {
        background-color: transparent;
        color: #a5110d;
    }
    #meetzane-case-study.meetzane-page .btn-custom-outline {
        background-color: transparent;
        color: #1a1a1a;
        padding: 12px 30px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 600;
        display: inline-block;
        transition: 0.3s ease;
        border: 2px solid #e0e0e0;
    }
    #meetzane-case-study.meetzane-page .btn-custom-outline:hover {
        border-color: #a5110d;
        color: #a5110d;
    }

    /* Glance Table */
    #meetzane-case-study.meetzane-page .glance-row {
        display: flex;
        border-bottom: 1px solid #eaeaea;
        padding: 15px 0;
    }
    #meetzane-case-study.meetzane-page .glance-row:last-child {
        border-bottom: none;
    }
    #meetzane-case-study.meetzane-page .glance-label {
        width: 30%;
        font-weight: 700;
        color: #1a1a1a;
    }
    #meetzane-case-study.meetzane-page .glance-value {
        width: 70%;
        color: #555;
    }

    /* Challenge Cards & Numbered Cards */
    #meetzane-case-study.meetzane-page .num-card {
        background: #fff;
        border: 1px solid #eaeaea;
        border-radius: 8px;
        padding: 30px;
        height: 100%;
        transition: 0.3s ease;
        border-top: 4px solid #a5110d;
        box-shadow: 0 5px 15px rgba(0,0,0,0.03);
    }
    #meetzane-case-study.meetzane-page .num-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    /* Info Cards (Features, Impact) */
    #meetzane-case-study.meetzane-page .info-card {
        background: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        height: 100%;
        border: 1px solid #f1f1f1;
    }
    #meetzane-case-study.meetzane-page .info-card h4, 
    #meetzane-case-study.meetzane-page .info-card h5,
    #meetzane-case-study.meetzane-page .info-card h6 {
        margin-bottom: 15px;
    }
    #meetzane-case-study.meetzane-page .info-card p {
        color: #666;
        font-size: 0.95rem;
        margin-bottom: 0;
    }

    /* Check List */
    #meetzane-case-study.meetzane-page .check-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    #meetzane-case-study.meetzane-page .check-list li {
        position: relative;
        padding-left: 25px;
        margin-bottom: 20px;
        color: #444;
        font-size: 0.95rem;
    }
    #meetzane-case-study.meetzane-page .check-list li::before {
        content: '✓';
        position: absolute;
        left: 0;
        top: 0;
        color: #a5110d;
        font-weight: bold;
    }

    /* Tech Stack Boxes */
    #meetzane-case-study.meetzane-page .tech-box {
        border: 1px solid #eee;
        padding: 20px;
        text-align: center;
        border-radius: 6px;
        font-weight: 600;
        background: #fff;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    #meetzane-case-study.meetzane-page .tech-box p {
        font-size: 0.85rem;
        color: #666;
        margin-top: 10px;
        margin-bottom: 0;
        font-weight: normal;
    }

    /* Goal Step Box */
    #meetzane-case-study.meetzane-page .goal-step-box {
        background: #fff;
        border: 1px solid #eaeaea;
        padding: 30px;
        border-radius: 8px;
        text-align: center;
        height: 100%;
        border-top: 4px solid #a5110d;
    }

    /* About Image Custom Styling */
    #meetzane-case-study.meetzane-page .about-wrapper .about-image {
        box-shadow: 0px 0px 10px #80808047;
        border-radius: 25px;
    }
    #meetzane-case-study.meetzane-page .about-wrapper .about-image img {
        border-radius: 25px;
        width: 100%;
        height: 450px;
        object-fit: cover;
    }

    /* Timeline Icon Colors */
    #meetzane-case-study.meetzane-page .timeline-icon.bg-primary {
        background-color: #a5110d;
        color: #fff;
    }

    /* Solution Cards */
    #meetzane-case-study.meetzane-page .meetzane-solution-card {
        background: #fff;
        border: 1px solid #eaeaea;
        border-radius: 12px;
        padding: 35px 30px;
        height: 100%;
        transition: all 0.3s ease;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    #meetzane-case-study.meetzane-page .meetzane-solution-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #a5110d 0%, #c41e1a 100%);
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }

    #meetzane-case-study.meetzane-page .meetzane-solution-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        border-color: #a5110d;
    }

    #meetzane-case-study.meetzane-page .meetzane-solution-card:hover::before {
        transform: scaleX(1);
    }

    #meetzane-case-study.meetzane-page .meetzane-solution-icon {
        width: 80px;
        height: 80px;
        margin: 0 auto 25px;
        background: linear-gradient(135deg, #a5110d 0%, #c41e1a 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    #meetzane-case-study.meetzane-page .meetzane-solution-card:hover .meetzane-solution-icon {
        transform: scale(1.1);
        box-shadow: 0 10px 25px rgba(165, 17, 13, 0.3);
    }

    #meetzane-case-study.meetzane-page .meetzane-solution-icon i {
        color: #fff;
        font-size: 32px;
    }

    #meetzane-case-study.meetzane-page .meetzane-solution-card h4 {
        font-weight: 700;
        color: #1a1a1a;
        font-size: 20px;
        margin-bottom: 15px;
    }

    #meetzane-case-study.meetzane-page .meetzane-solution-card p {
        color: #666;
        font-size: 15px;
        line-height: 1.6;
        margin: 0;
    }

    @media (max-width: 768px) {
        #meetzane-case-study.meetzane-page .glance-row {
            flex-direction: column;
        }
        #meetzane-case-study.meetzane-page .glance-label, 
        #meetzane-case-study.meetzane-page .glance-value {
            width: 100%;
        }
        #meetzane-case-study.meetzane-page .glance-label {
            margin-bottom: 5px;
        }
    }
</style>

<div id="meetzane-case-study" class="meetzane-page">

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
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Meet Zane</h1>
            </div>
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                <li>
                    <a href="index.php">
                        Home
                    </a>
                </li>
                <li>
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                    Meet Zane
                </li>
            </ul>
        </div>
    </div>
</div>


<section class="news-section section-padding section-bg bg-white pb-0">

    <div class="left-shape">
        <img src="assets/img/news/left-shape.png" alt="img">
    </div>

    <div class="container">
        <div class="section-title-area d-flex flex-wrap justify-content-between align-items-start mb-5">
            <div class="section-title mb-0">
                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                    Meet Zane – Your AI Mental <br>Wellness Companion
                </h2>
                <p class="section-title-desc wow fadeInUp" data-wow-delay=".4s">
                    Meet Zane is an AI-powered mental wellness platform designed to provide personalized, judgment-free conversations and self-reflection support. It combines AI-driven conversations with evidence-based approaches such as CBT, REBT, and mindfulness to help users build healthier thinking patterns and emotional wellbeing.
                </p>
            </div>
        </div>
    </div>



</section>


<!-- About Section Start -->
<section class="about-section fix section-padding mt-0" style="background: #fff">
    <div class="left-shape float-bob-y">
        <img src="assets/img/about/left-shape.png" alt="img">
    </div>
    <div class="container">
        <div class="about-wrapper">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="assets/img/case-studies/meet-zane.png" alt="Meet Zane" class="wow img-custom-anim-left"
                            data-wow-duration="1.5s" data-wow-delay="0.3s">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <div class="sub-title bg-color-2 wow fadeInUp">
                                <span>ABOUT MEET ZANE</span>
                            </div>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                Making Mental Wellness Support More Accessible
                            </h2>
                        </div>
                        <p class="mt-3 mt-md-0 mb-3 wow fadeInUp" data-wow-delay=".5s">
                            Many people need a safe space to reflect on their thoughts and emotions but may find it difficult to access traditional support whenever they need it. Meet Zane was designed to provide an accessible, private, and judgment-free digital space where users can talk, reflect, and develop healthier emotional habits.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- The Challenge Section -->
<section class="journey-section fix section-padding mt-0" style="background: #f0eeee">
    <div class="container">
        <!-- Section Title Area -->
        <div class="section-title-area d-flex flex-wrap justify-content-between align-items-start mb-5">
            <div class="section-title col-lg-6">
                <div class="sub-title bg-color-2 wow fadeInUp">
                    <span>THE CHALLENGE</span>
                </div>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                    Challenges in Mental Wellness Support
                </h2>
                <p class="section-title-desc wow fadeInUp" data-wow-delay=".4s">
                    Managing multiple recruitment vendors can become complicated when hiring teams rely on spreadsheets, emails, messaging platforms, and disconnected processes. Tracking requirements, finding suitable vendors, comparing responses, and maintaining communication can consume valuable time and make the hiring process harder to manage.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="timeline-centered">

                    <!-- Challenge 1 (Right Aligned - Default) -->
                    <article class="timeline-entry wow fadeInUp" data-wow-delay=".2s">
                        <div class="timeline-entry-inner">
                            <time class="timeline-time"><span>01</span></time>
                            <div class="timeline-icon bg-info">
                                <i class="fa-solid fa-clock"></i>
                            </div>
                            <div class="timeline-label">
                                <h2>Accessible Support</h2>
                                <p>Users need a convenient way to access emotional wellbeing support whenever they need a space to talk or reflect.</p>
                            </div>
                        </div>
                    </article>

                    <!-- Challenge 2 (Left Aligned) -->
                    <article class="timeline-entry left-aligned wow fadeInUp" data-wow-delay=".3s">
                        <div class="timeline-entry-inner">
                            <time class="timeline-time"><span>02</span></time>
                            <div class="timeline-icon bg-warning">
                                <i class="fa-solid fa-gears"></i>
                            </div>
                            <div class="timeline-label">
                                <h2>Beyond Generic Chatbots</h2>
                                <p>The platform needed to provide more structured and purposeful conversations rather than simple AI responses.</p>
                            </div>
                        </div>
                    </article>

                    <!-- Challenge 3 (Right Aligned) -->
                    <article class="timeline-entry wow fadeInUp" data-wow-delay=".4s">
                        <div class="timeline-entry-inner">
                            <time class="timeline-time"><span>03</span></time>
                            <div class="timeline-icon bg-primary">
                                <i class="fa-solid fa-bell"></i>
                            </div>
                            <div class="timeline-label">
                                <h2>Personalized Conversations</h2>
                                <p>A meaningful experience requires conversations that adapt to the user's emotions, concerns, and individual context.</p>
                            </div>
                        </div>
                    </article>

                    <!-- Challenge 4 (Left Aligned) -->
                    <article class="timeline-entry left-aligned wow fadeInUp" data-wow-delay=".5s">
                        <div class="timeline-entry-inner">
                            <time class="timeline-time"><span>04</span></time>
                            <div class="timeline-icon bg-secondary">
                                <i class="fa-solid fa-chart-line"></i>
                            </div>
                            <div class="timeline-label">
                                <h2>Continuous Self-Reflection</h2>
                                <p>reflect on their experiences, and track their personal progress.</p>
                            </div>
                        </div>
                    </article>

                    <!-- Challenge 5 (Right Aligned) -->
                    <article class="timeline-entry wow fadeInUp" data-wow-delay=".4s">
                        <div class="timeline-entry-inner">
                            <time class="timeline-time"><span>05</span></time>
                            <div class="timeline-icon bg-success">
                                <i class="fa-solid fa-bullseye"></i>
                            </div>
                            <div class="timeline-label">
                                <h2>Our Objective</h2>
                                <p>Build an AI-powered wellness companion that combines personalized conversations, guided self-reflection, and evidence-based therapeutic approaches into one supportive digital experience.</p>
                            </div>
                        </div>
                    </article>

                    <!-- Timeline Bottom Endpoint (Rocket Icon) -->
                    <article class="timeline-entry begin wow fadeInUp" data-wow-delay=".6s">
                        <div class="timeline-entry-inner">
                            <div class="timeline-icon bg-primary">
                                <i class="fa-solid fa-rocket"></i>
                            </div>
                        </div>
                    </article>

                </div>
            </div>
        </div>
    </div>
</section>


<!-- Our Solution Section -->
<section class="service-section fix section-padding" style="background: #fff">
    <div class="left-shape float-bob-y">
        <img src="assets/img/service/left-shape.png" alt="img">
    </div>
    <div class="right-shape">
        <img src="assets/img/service/right-shape.png" alt="img">
    </div>
    <div class="bg-shape">
        <img src="assets/img/service/bg-shape.png" alt="img">
    </div>

    <div class="container">
        <!-- Section Title Area -->
        <div class="section-title-area mb-5">
            <div class="section-title">
                <div class="sub-title bg-color-2 wow fadeInUp">
                    <span>OUR SOLUTION</span>
                </div>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                    A Personalized AI Companion for Mental Wellbeing
                </h2>
                <p class="section-title-desc wow fadeInUp mt-3" data-wow-delay=".4s" style="max-width: 900px; margin: 0;">
                    WebWiders developed Meet Zane as an AI-powered mental wellness companion that combines conversational AI with structured self-reflection and evidence-based therapeutic approaches. The platform is designed to give users a supportive space to talk, understand their emotions, and develop healthier habits.
                </p>
            </div>
        </div>

        <!-- What We Built Section -->
        <div class="section-title-area mb-5">
            <h3 class="wow fadeInUp" data-wow-delay=".2s" style="font-size: 28px; font-weight: 700; color: #1a1a1a;">What We Built</h3>
        </div>

        <div class="row g-4">
            <!-- Card 1: Personalized AI Conversations -->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                <div class="meetzane-solution-card h-100">
                    <div class="meetzane-solution-icon">
                        <i class="fa-solid fa-comments"></i>
                    </div>
                    <h4>Personalized AI Conversations</h4>
                    <p>Users can have natural, private conversations with Zane around their thoughts, feelings, and everyday challenges.</p>
                </div>
            </div>

            <!-- Card 2: Guided Journaling -->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="meetzane-solution-card h-100">
                    <div class="meetzane-solution-icon">
                        <i class="fa-solid fa-book-open"></i>
                    </div>
                    <h4>Guided Journaling</h4>
                    <p>Structured journaling encourages users to process experiences and maintain a consistent self-reflection practice.</p>
                </div>
            </div>

            <!-- Card 3: Evidence-Based Approaches -->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="meetzane-solution-card h-100">
                    <div class="meetzane-solution-icon">
                        <i class="fa-solid fa-brain"></i>
                    </div>
                    <h4>Evidence-Based Approaches</h4>
                    <p>The experience incorporates techniques inspired by approaches such as CBT, REBT, ACT, mindfulness, and emotional regulation.</p>
                </div>
            </div>

            <!-- Card 4: Wellbeing Tracking -->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="meetzane-solution-card h-100">
                    <div class="meetzane-solution-icon">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <h4>Wellbeing Tracking</h4>
                    <p>Users can monitor their emotional wellbeing and personal progress over time.</p>
                </div>
            </div>

            <!-- Card 5: Emotional Insights -->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="meetzane-solution-card h-100">
                    <div class="meetzane-solution-icon">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
                    <h4>Emotional Insights</h4>
                    <p>AI helps users reflect on conversations and identify patterns that can support greater self-awareness.</p>
                </div>
            </div>

            <!-- Card 6: Voice Interaction -->
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                <div class="meetzane-solution-card h-100">
                    <div class="meetzane-solution-icon">
                        <i class="fa-solid fa-microphone"></i>
                    </div>
                    <h4>Voice Interaction</h4>
                    <p>Voice-based interaction provides a more natural and conversational way to engage with the AI companion.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Features Section Start -->
<section class="service-section fix section-padding section-new-padding" style="background: #f0eeee">
    <div class="bg-shape-2">
        <img src="assets/img/service/bg-shape-2.png" alt="img">
    </div>
    <div class="container">
        <div class="section-title-area d-flex flex-wrap justify-content-between align-items-end mb-5">
            <div class="section-title mb-0">
                <div class="sub-title bg-color-2 wow fadeInUp">
                    <span>FEATURES</span>
                </div>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                    Features Designed for Personal Growth & Wellbeing
                </h2>
            </div>
        </div>

        <div class="row g-4">
            <!-- Card 1: AI Wellness Conversations -->
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="service-card-items h-100">
                    <h3 class="title">
                        <p>AI Wellness Conversations</p>
                    </h3>
                    <div class="custom-service-icon-wrapper">
                        <i class="fa-solid fa-comments custom-service-icon"></i>
                    </div>
                    <div class="content">
                        <p>
                            Engage in personalized, judgment-free conversations designed to encourage reflection and emotional awareness.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 2: Emotional Insights -->
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="service-card-items h-100">
                    <h3 class="title">
                        <p>Emotional Insights</p>
                    </h3>
                    <div class="custom-service-icon-wrapper">
                        <i class="fa-solid fa-lightbulb custom-service-icon"></i>
                    </div>
                    <div class="content">
                        <p>
                            Identify recurring themes and patterns from conversations to support greater self-awareness.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 3: Evidence-Based Techniques -->
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                <div class="service-card-items h-100">
                    <h3 class="title">
                        <p>Evidence-Based Techniques</p>
                    </h3>
                    <div class="custom-service-icon-wrapper">
                        <i class="fa-solid fa-brain custom-service-icon"></i>
                    </div>
                    <div class="content">
                        <p>
                            Incorporates approaches such as CBT, ACT, mindfulness, emotional regulation, and other therapeutic frameworks.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 4: Wellbeing & Progress Tracking -->
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="service-card-items h-100">
                    <h3 class="title">
                        <p>Wellbeing & Progress Tracking</p>
                    </h3>
                    <div class="custom-service-icon-wrapper">
                        <i class="fa-solid fa-chart-line custom-service-icon"></i>
                    </div>
                    <div class="content">
                        <p>
                            Track reflections and personal wellbeing over time to recognize changes and areas for growth.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 5: Guided Journaling -->
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="service-card-items h-100">
                    <h3 class="title">
                        <p>Guided Journaling</p>
                    </h3>
                    <div class="custom-service-icon-wrapper">
                        <i class="fa-solid fa-book-open custom-service-icon"></i>
                    </div>
                    <div class="content">
                        <p>
                            Reflect on thoughts, experiences, and emotions through structured journaling prompts.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 6: Voice Conversations -->
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                <div class="service-card-items h-100">
                    <h3 class="title">
                        <p>Voice Conversations</p>
                    </h3>
                    <div class="custom-service-icon-wrapper">
                        <i class="fa-solid fa-microphone custom-service-icon"></i>
                    </div>
                    <div class="content">
                        <p>
                            Interact with the AI companion through voice for a more natural and engaging conversational experience.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Features Section End -->


<!-- Technology Section Start -->
<section class="technology-section fix section-padding" style="background: #f0eeee">
    <div class="container">
        <div class="row g-4">

            <!-- Left Side: Main Title (Sticky) -->
            <div class="col-xl-5">
                <div class="pricing-content">
                    <div class="section-title">
                        <div class="sub-title bg-color-2 wow fadeInUp">
                            <span>TECHNOLOGY</span>
                        </div>
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">
                            Technology <br> Stack
                        </h2>
                        <p class="wow fadeInUp mt-3" data-wow-delay=".4s"
                            style="color: #666; max-width: 90%; line-height: 1.6;">
                            Meet Zane combines conversational AI, mobile technology, and personalized wellbeing features to create an accessible and engaging digital experience for self-reflection and personal growth.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right Side: Technology Grid with Badges -->
            <div class="col-xl-7">
                <div class="row g-4">

                    <!-- Front End -->
                    <div class="col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="tech-category-box h-100"
                            style="background: #fff; padding: 25px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
                            <h4 style="font-size: 20px; font-weight: 700; margin-bottom: 15px;"><i
                                    class="fa-solid fa-desktop"
                                    style="color: #a5110d; margin-right: 8px;"></i> Mobile
                            </h4>
                            <div class="tech-list">
                                <p style="color: #666; margin: 0; line-height: 1.6;">
                                    [Flutter / React Native / Native]
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Back End -->
                    <div class="col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="tech-category-box h-100"
                            style="background: #fff; padding: 25px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
                            <h4 style="font-size: 20px; font-weight: 700; margin-bottom: 15px;"><i
                                    class="fa-solid fa-server"
                                    style="color: #a5110d; margin-right: 8px;"></i> Backend
                            </h4>
                            <div class="tech-list">
                                <p style="color: #666; margin: 0; line-height: 1.6;">
                                    [Actual Backend]
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- AI & Automation -->
                    <div class="col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="tech-category-box h-100"
                            style="background: #fff; padding: 25px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
                            <h4 style="font-size: 20px; font-weight: 700; margin-bottom: 15px;"><i
                                    class="fa-solid fa-robot"
                                    style="color: #a5110d; margin-right: 8px;"></i> Database
                            </h4>
                            <div class="tech-list">
                                <p style="color: #666; margin: 0; line-height: 1.6;">
                                    [Actual Database]
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Cloud & DevOps -->
                    <div class="col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="tech-category-box h-100"
                            style="background: #fff; padding: 25px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
                            <h4 style="font-size: 20px; font-weight: 700; margin-bottom: 15px;"><i
                                    class="fa-solid fa-cloud"
                                    style="color: #a5110d; margin-right: 8px;"></i> AI / LLM
                            </h4>
                            <div class="tech-list">
                                <p style="color: #666; margin: 0; line-height: 1.6;">
                                    [Actual AI Technology / API]
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Databases -->
                    <div class="col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="tech-category-box h-100"
                            style="background: #fff; padding: 25px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
                            <h4 style="font-size: 20px; font-weight: 700; margin-bottom: 15px;"><i
                                    class="fa-solid fa-database"
                                    style="color: #a5110d; margin-right: 8px;"></i> Cloud & APIs
                            </h4>
                            <div class="tech-list">
                                <p style="color: #666; margin: 0; line-height: 1.6;">
                                    [Actual Services]
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<!-- Product Experience Gallery -->
<section class="service-section fix section-padding section-new-padding" style="background: #fff;">
    <div class="bg-shape-2">
        <img src="assets/img/service/bg-shape-2.png" alt="img">
    </div>
    <div class="container">
        <div class="section-title-area d-flex flex-wrap justify-content-between align-items-end mb-5">
            <div class="section-title mb-0">
                <div class="sub-title bg-color-2 wow fadeInUp">
                    <span>APP EXPERIENCE</span>
                </div>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                    App Experience
                </h2>
            </div>
        </div>

        <div class="row g-3 g-md-4">
            <!-- Gallery Item 1 -->
            <div class="col-6 col-md-4 col-lg-2 wow fadeInUp" data-wow-delay=".1s">
                <div class="meetzane-product-card h-100 text-center"
                    style="background: #f8f9fa; padding: 25px 15px; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease; border: 1px solid #eaeaea;">
                    <div class="icon-wrapper mb-3"
                        style="width: 60px; height: 60px; margin: 0 auto; background: #a5110d; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fa-solid fa-comments" style="color: #fff; font-size: 24px;"></i>
                    </div>
                    <h6 class="fw-bold mb-0" style="color: #333; font-size: 14px; line-height: 1.4;">
                        AI Conversation
                    </h6>
                </div>
            </div>
            <!-- Gallery Item 2 -->
            <div class="col-6 col-md-4 col-lg-2 wow fadeInUp" data-wow-delay=".2s">
                <div class="meetzane-product-card h-100 text-center"
                    style="background: #f8f9fa; padding: 25px 15px; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease; border: 1px solid #eaeaea;">
                    <div class="icon-wrapper mb-3"
                        style="width: 60px; height: 60px; margin: 0 auto; background: #a5110d; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fa-solid fa-microphone" style="color: #fff; font-size: 24px;"></i>
                    </div>
                    <h6 class="fw-bold mb-0" style="color: #333; font-size: 14px; line-height: 1.4;">
                        Voice Interaction
                    </h6>
                </div>
            </div>
            <!-- Gallery Item 3 -->
            <div class="col-6 col-md-4 col-lg-2 wow fadeInUp" data-wow-delay=".3s">
                <div class="meetzane-product-card h-100 text-center"
                    style="background: #f8f9fa; padding: 25px 15px; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease; border: 1px solid #eaeaea;">
                    <div class="icon-wrapper mb-3"
                        style="width: 60px; height: 60px; margin: 0 auto; background: #a5110d; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fa-solid fa-book-open" style="color: #fff; font-size: 24px;"></i>
                    </div>
                    <h6 class="fw-bold mb-0" style="color: #333; font-size: 14px; line-height: 1.4;">
                        Guided Journal
                    </h6>
                </div>
            </div>
            <!-- Gallery Item 4 -->
            <div class="col-6 col-md-4 col-lg-2 wow fadeInUp" data-wow-delay=".4s">
                <div class="meetzane-product-card h-100 text-center"
                    style="background: #f8f9fa; padding: 25px 15px; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease; border: 1px solid #eaeaea;">
                    <div class="icon-wrapper mb-3"
                        style="width: 60px; height: 60px; margin: 0 auto; background: #a5110d; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fa-solid fa-lightbulb" style="color: #fff; font-size: 24px;"></i>
                    </div>
                    <h6 class="fw-bold mb-0" style="color: #333; font-size: 14px; line-height: 1.4;">
                        Emotional Insights
                    </h6>
                </div>
            </div>
            <!-- Gallery Item 5 -->
            <div class="col-6 col-md-4 col-lg-2 wow fadeInUp" data-wow-delay=".5s">
                <div class="meetzane-product-card h-100 text-center"
                    style="background: #f8f9fa; padding: 25px 15px; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease; border: 1px solid #eaeaea;">
                    <div class="icon-wrapper mb-3"
                        style="width: 60px; height: 60px; margin: 0 auto; background: #a5110d; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fa-solid fa-chart-line" style="color: #fff; font-size: 24px;"></i>
                    </div>
                    <h6 class="fw-bold mb-0" style="color: #333; font-size: 14px; line-height: 1.4;">
                        Wellbeing / Progress
                    </h6>
                </div>
            </div>
            <!-- Gallery Item 6 -->
            <div class="col-6 col-md-4 col-lg-2 wow fadeInUp" data-wow-delay=".6s">
                <div class="meetzane-product-card h-100 text-center"
                    style="background: #f8f9fa; padding: 25px 15px; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease; border: 1px solid #eaeaea;">
                    <div class="icon-wrapper mb-3"
                        style="width: 60px; height: 60px; margin: 0 auto; background: #a5110d; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fa-solid fa-seedling" style="color: #fff; font-size: 24px;"></i>
                    </div>
                    <h6 class="fw-bold mb-0" style="color: #333; font-size: 14px; line-height: 1.4;">
                        Personal Growth / Programs
                    </h6>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Business Impact Section -->
<section class="service-section fix section-padding section-new-padding" style="background: #f0eeee;">
    <div class="bg-shape-2">
        <img src="assets/img/service/bg-shape-2.png" alt="img">
    </div>
    <div class="container">
        <div class="section-title-area d-flex flex-wrap justify-content-between align-items-end mb-5">
            <div class="section-title mb-0">
                <div class="sub-title bg-color-2 wow fadeInUp">
                    <span>BUSINESS IMPACT</span>
                </div>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                    Making Personal Wellbeing More Accessible
                </h2>
                <p class="section-title-desc wow fadeInUp mt-3" data-wow-delay=".4s"
                    style="line-height: 1.6; color: #666; max-width: 700px;">
                    Meet Zane brings conversational AI, guided reflection, and wellbeing tools together in one digital experience, giving users a convenient way to talk, reflect, and develop greater self-awareness in their everyday lives.
                </p>
            </div>
        </div>

        <div class="row g-4">

            <!-- Card 1 -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay=".2s">
                <div class="service-card-items h-100"
                    style="padding: 25px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); border-radius: 12px; background: #fff;">
                    <div class="icon mb-3" style="font-size: 24px; color: #a5110d;">
                        <i class="fa-solid fa-user-circle"></i>
                    </div>
                    <h3 class="title mb-3" style="font-size: 18px; font-weight: 700; color: #222;">
                        Personalized Experience
                    </h3>
                    <div class="content">
                        <p style="color: #666; font-size: 14px; line-height: 1.6; margin: 0;">
                            AI-driven conversations adapt to each user's needs, creating a more relevant and engaging experience.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay=".3s">
                <div class="service-card-items h-100"
                    style="padding: 25px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); border-radius: 12px; background: #fff;">
                    <div class="icon mb-3" style="font-size: 24px; color: #a5110d;">
                        <i class="fa-solid fa-mirror"></i>
                    </div>
                    <h3 class="title mb-3" style="font-size: 18px; font-weight: 700; color: #222;">
                        Encourages Self-Reflection
                    </h3>
                    <div class="content">
                        <p style="color: #666; font-size: 14px; line-height: 1.6; margin: 0;">
                            Journaling, insights, and guided conversations help users better understand their thoughts and emotions.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s">
                <div class="service-card-items h-100"
                    style="padding: 25px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); border-radius: 12px; background: #fff;">
                    <div class="icon mb-3" style="font-size: 24px; color: #a5110d;">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <h3 class="title mb-3" style="font-size: 18px; font-weight: 700; color: #222;">
                        Always Accessible
                    </h3>
                    <div class="content">
                        <p style="color: #666; font-size: 14px; line-height: 1.6; margin: 0;">
                            Users can access their digital wellbeing companion whenever they need a space for reflection.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                <div class="service-card-items h-100"
                    style="padding: 25px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); border-radius: 12px; background: #fff;">
                    <div class="icon mb-3" style="font-size: 24px; color: #a5110d;">
                        <i class="fa-solid fa-arrow-trend-up"></i>
                    </div>
                    <h3 class="title mb-3" style="font-size: 18px; font-weight: 700; color: #222;">
                        Supports Long-Term Growth
                    </h3>
                    <div class="content">
                        <p style="color: #666; font-size: 14px; line-height: 1.6; margin: 0;">
                            Progress tracking and ongoing interactions encourage users to build consistent wellbeing and self-reflection habits.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- Call To Action Section Start -->
<section class="cta-section section-padding" style="text-align center;" id="meetzane-cta">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 m-auto text-center">

                <div class="section-title mb-4 wow fadeInUp" data-wow-delay=".2s">
                    <h2>Ready to Build an AI-Powered Digital Product?</h2>
                </div>

                <p class="wow fadeInUp" data-wow-delay=".4s"
                    style="font-size: 18px; color: #555; line-height: 1.6; margin-bottom: 40px;">
                    WebWiders helps businesses transform AI ideas into practical, user-focused applications—from intelligent assistants and SaaS platforms to personalized mobile experiences.
                </p>

             <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <div class="main-button wow fadeInUp mt-4" data-wow-delay=".3s" style="max-width:unset;">

                        <a href="#" class="offcanvas-btn" data-bs-toggle="offcanvas"
                            data-bs-target="#consultationOffcanvas"> <span class="theme-btn">
                                Build Your AI Solution
                            </span><span class="arrow-btn"><i class="fa-solid fa-turn-up"></i></span></a>
                    </div>


                    <div class="main-button wow fadeInUp mt-md-4" data-wow-delay=".3s" style="max-width:unset;">
                        <a href="on-demand-hire.php" class="offcanvas-btn hire-btn">
                            <span class="theme-btn">
                                Hire AI & Mobile App Developers
                            </span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Call To Action Section End -->


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

        <form class="text-start">
            <div class="row g-3">
                <!-- Name -->
                <div class="col-md-6">
                    <input type="text" class="form-control bg-white py-2" placeholder="First Name*" required>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control bg-white py-2" placeholder="Last Name*" required>
                </div>

                <!-- Contact & Company -->
                <div class="col-md-6">
                    <input type="email" class="form-control bg-white py-2" placeholder="Work Email*" required>
                </div>
                <div class="col-md-6">
                    <input type="tel" class="form-control bg-white py-2" placeholder="Phone Number*" required>
                </div>

                <div class="col-12">
                    <input type="text" class="form-control bg-white py-2" placeholder="Company Name*" required>
                </div>

                <!-- Consultation Specifics -->
                <div class="col-12">
                    <select class="form-select bg-white text-muted py-2" required>
                        <option value="" selected disabled>What is your primary goal?*</option>
                        <option value="optimize">Optimize current operations</option>
                        <option value="implementation">New software implementation</option>
                        <option value="integration">System integration & APIs</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <!-- Date & Time Picker -->
                <div class="col-md-6">
                    <!-- Date input gives a native calendar popup -->
                    <input type="date" class="form-control bg-white py-2 text-muted" required title="Preferred Date">
                </div>
                <div class="col-md-6">
                    <select class="form-select bg-white text-muted py-2" required>
                        <option value="" selected disabled>Preferred Time*</option>
                        <option value="morning">Morning (9 AM - 12 PM)</option>
                        <option value="afternoon">Afternoon (1 PM - 5 PM)</option>
                    </select>
                </div>

                <!-- Message -->
                <div class="col-12">
                    <textarea class="form-control bg-white" rows="3"
                        placeholder="Briefly describe what you'd like to discuss..."></textarea>
                </div>

                <!-- Submit Button -->
                <div class="col-12 text-center mt-4">
                    <button type="submit" class="btn fw-bold px-5 py-2 w-100"
                        style="background-color: var(--primary-red, #ff0000); color: white; border-radius: 25px;">BOOK
                            MY SESSION</button>
                </div>

                <!-- Footer Text -->
                <div class="col-12 text-center mt-2">
                    <small class="text-muted" style="font-size: 0.75rem;">This site is protected by reCAPTCHA.</small>
                </div>
            </div>
        </form>
    </div>
</div>

</div>
<!-- ==========================================
     END: MEET ZANE CASE STUDY SECTION
     ========================================== -->

<?php include 'includes/footer.php'; ?>