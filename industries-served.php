<?php include 'includes/common-header.php'; ?>

<div class="page-wrapper">
    <?php include 'includes/main-header.php'; ?>

    <div class="page-content demo_two">

        <!-- Local styles (safe overrides) -->
        <style>
            /* Title bar */
            .pbmit-title-bar-wrapper {
                background: radial-gradient(1000px 400px at 10% -10%, rgba(15, 75, 95, .25), transparent),
                    linear-gradient(180deg, #074da3 0%, #0a2e39 100%);
                color: #fff;
                padding: 72px 0;
            }

            .pbmit-title-bar-wrapper .pbmit-tbar-title {
                color: #fff;
                margin-bottom: 8px;
            }

            .pbmit-breadcrumb-inner,
            .pbmit-breadcrumb-inner a {
                color: rgba(255, 255, 255, .9);
            }

            .pbmit-breadcrumb-inner .sep {
                margin: 0 8px;
                opacity: .8;
            }

            /* Industries grid */
            .industries-grid {
                display: grid;
                grid-template-columns: repeat(12, 1fr);
                gap: 24px;
            }

            .industries-grid .col {
                grid-column: span 12;
            }

            @media (min-width:576px) {
                .industries-grid .col {
                    grid-column: span 6;
                }
            }

            @media (min-width:992px) {
                .industries-grid .col {
                    grid-column: span 4;
                }
            }

            .industry-card {
                position: relative;
                border-radius: 20px;
                overflow: hidden;
                background: #0e1a21;
                box-shadow: 0 8px 24px rgba(0, 0, 0, .12);
                transition: transform .35s ease, box-shadow .35s ease;
            }

            .industry-card:hover {
                transform: translateY(-4px) scale(1.01);
                box-shadow: 0 16px 40px rgba(0, 0, 0, .18);
            }

            .industry-media {
                position: relative;
                aspect-ratio: 4/3;
                background: #0b1317;
            }

            .industry-media img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                display: block;
                filter: saturate(1.05);
                transition: transform .6s ease;
            }

            .industry-card:hover .industry-media img {
                transform: scale(1.06);
            }

            .industry-overlay {
                position: absolute;
                inset: 0;
                background: linear-gradient(180deg, rgba(0, 0, 0, .05) 20%, rgba(0, 0, 0, .55) 100%);
            }

            .industry-content {
                position: absolute;
                left: 0;
                right: 0;
                bottom: 0;
                padding: 18px 18px 16px;
                color: #fff;
            }

            .chip {
                display: inline-block;
                font-size: 12px;
                padding: 8px 10px;
                border-radius: 999px;
                background: rgba(255, 255, 255, .14);
                backdrop-filter: blur(2px);
                margin-bottom: 10px;
            }

            .industry-title {
                font-size: 18px;
                margin: 0;
                letter-spacing: .2px;
                color: #fff;
            }

            .industry-link {
                position: absolute;
                inset: 0;
                z-index: 5;
            }

            /* Sections */
            .section-md {
                padding: 64px 0 24px;
            }

            .section-lgx {
                padding: 72px 0;
            }

            /* FAQ */
            .accordion .accordion-item {
                border: 1px solid #e9eef2;
                border-radius: 14px;
                overflow: hidden;
                margin-bottom: 14px;
            }

            .accordion-button {
                padding: 16px 18px;
            }

            .accordion-body {
                padding: 16px 18px 18px;
                color: #4a5b66;
            }

            .accordion-button:focus {
                box-shadow: none;
            }

            .accordion-button:not(.collapsed) {
                background: #f4f8fb;
            }

            /* Contact */
            .contact_col_1 {
                background: #0f2f3a;
                color: #fff;
                border-radius: 20px 0 0 20px;
                padding: 32px;
            }

            .contact_col_2 {
                background: #fff;
                border: 1px solid #e9eef2;
                border-left: 0;
                border-radius: 0 20px 20px 0;
                padding: 32px;
            }

            @media (max-width:767.98px) {

                .contact_col_1,
                .contact_col_2 {
                    border-radius: 20px;
                }

                .contact_col_2 {
                    margin-top: 16px;
                }
            }

            .contact_form h2 {
                font-size: 20px;
                margin-bottom: 16px;
            }

            .form-control {
                border-radius: 12px;
                border: 1px solid #e1e8ee;
                padding: 12px 14px;
            }

            .form-control:focus {
                border-color: #074da3;
                box-shadow: 0 0 0 3px rgba(15, 75, 95, .12);
            }

            /* Buttons */
            .pbmit-btn {
                border-radius: 999px;
                padding: 10px 18px;
            }
        </style>

        <!-- Title Bar -->
        <div class="pbmit-title-bar-wrapper">
            <div class="container">
                <div class="pbmit-title-bar-content">
                    <div class="pbmit-title-bar-content-inner">
                        <h1 class="pbmit-tbar-title">Industries Served</h1>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="Home" href="/" class="home"><span>Techcentrics</span></a></span>
                                <span class="sep"><i class="pbmit-base-icon-angle-right"></i></span>
                                <span><span class="post-root post post-post current-item">Industries Served</span></span>
                            </div>
                        </div>
                        <p class="mt-2" style="opacity:.9">Domain-focused solutions for enterprise & mid-market—built for uptime, security, and scale.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Title Bar End-->

        <div class="page-content">

            <!-- Industries Grid -->
            <section class="section-md">
                <div class="container">
                    <div class="industries-grid">

                        <!-- Banking & Financial Services -->
                        <div class="col">
                            <article class="industry-card">
                                <div class="industry-media">
                                    <img src="images/Banking.png" alt="Banking & Financial Services">
                                    <div class="industry-overlay"></div>
                                </div>
                                <div class="industry-content">
                                    <span class="chip">Finance</span>
                                    <h3 class="industry-title">Banking &amp; Financial Services</h3>
                                </div>
                                <a class="industry-link" href="single-detail-style-1.html" aria-label="Banking & Financial Services"></a>
                            </article>
                        </div>

                        <!-- Healthcare & Life Sciences -->
                        <div class="col">
                            <article class="industry-card">
                                <div class="industry-media">
                                    <img src="images/healthcare .png" alt="Healthcare & Life Sciences">
                                    <div class="industry-overlay"></div>
                                </div>
                                <div class="industry-content">
                                    <span class="chip">Healthcare</span>
                                    <h3 class="industry-title">Healthcare &amp; Life Sciences</h3>
                                </div>
                                <a class="industry-link" href="single-detail-style-1.html" aria-label="Healthcare & Life Sciences"></a>
                            </article>
                        </div>

                        <!-- Government & Public Sector -->
                        <div class="col">
                            <article class="industry-card">
                                <div class="industry-media">
                                    <img src="images/govermmentsector.png" alt="Government & Public Sector">
                                    <div class="industry-overlay"></div>
                                </div>
                                <div class="industry-content">
                                    <span class="chip">Government</span>
                                    <h3 class="industry-title">Government &amp; Public Sector</h3>
                                </div>
                                <a class="industry-link" href="single-detail-style-1.html" aria-label="Government & Public Sector"></a>
                            </article>
                        </div>

                        <!-- Retail & E-commerce -->
                        <div class="col">
                            <article class="industry-card">
                                <div class="industry-media">
                                    <img src="images/e-commerce.png" alt="Retail & E-commerce">
                                    <div class="industry-overlay"></div>
                                </div>
                                <div class="industry-content">
                                    <span class="chip">Retail</span>
                                    <h3 class="industry-title">Retail &amp; E-commerce</h3>
                                </div>
                                <a class="industry-link" href="single-detail-style-1.html" aria-label="Retail & E-commerce"></a>
                            </article>
                        </div>

                        <!-- Manufacturing -->
                        <div class="col">
                            <article class="industry-card">
                                <div class="industry-media">
                                    <img src="images/manufactoring.png" alt="Manufacturing">
                                    <div class="industry-overlay"></div>
                                </div>
                                <div class="industry-content">
                                    <span class="chip">Manufacturing</span>
                                    <h3 class="industry-title">Manufacturing</h3>
                                </div>
                                <a class="industry-link" href="single-detail-style-1.html" aria-label="Manufacturing"></a>
                            </article>
                        </div>

                        <!-- Telecommunications -->
                        <div class="col">
                            <article class="industry-card">
                                <div class="industry-media">
                                    <img src="images/telecommunication .png" alt="Telecommunications">
                                    <div class="industry-overlay"></div>
                                </div>
                                <div class="industry-content">
                                    <span class="chip">Telecom</span>
                                    <h3 class="industry-title">Telecommunications</h3>
                                </div>
                                <a class="industry-link" href="single-detail-style-1.html" aria-label="Telecommunications"></a>
                            </article>
                        </div>

                        <!-- Education & Research -->
                        <div class="col">
                            <article class="industry-card">
                                <div class="industry-media">
                                    <img src="images/education.png" alt="Education & Research">
                                    <div class="industry-overlay"></div>
                                </div>
                                <div class="industry-content">
                                    <span class="chip">Education</span>
                                    <h3 class="industry-title">Education &amp; Research</h3>
                                </div>
                                <a class="industry-link" href="single-detail-style-1.html" aria-label="Education & Research"></a>
                            </article>
                        </div>

                        <!-- Logistics & Supply Chain -->
                        <div class="col">
                            <article class="industry-card">
                                <div class="industry-media">
                                    <img src="images/Logistics.png" alt="Logistics & Supply Chain">
                                    <div class="industry-overlay"></div>
                                </div>
                                <div class="industry-content">
                                    <span class="chip">Logistics</span>
                                    <h3 class="industry-title">Logistics &amp; Supply Chain</h3>
                                </div>
                                <a class="industry-link" href="single-detail-style-1.html" aria-label="Logistics & Supply Chain"></a>
                            </article>
                        </div>

                        <!-- Energy & Utilities -->
                        <div class="col">
                            <article class="industry-card">
                                <div class="industry-media">
                                    <img src="images/Energy and utilities.png" alt="Energy & Utilities">
                                    <div class="industry-overlay"></div>
                                </div>
                                <div class="industry-content">
                                    <span class="chip">Energy</span>
                                    <h3 class="industry-title">Energy &amp; Utilities</h3>
                                </div>
                                <a class="industry-link" href="single-detail-style-1.html" aria-label="Energy & Utilities"></a>
                            </article>
                        </div>

                    </div>
                </div>
            </section>
            <!-- Industries Grid End -->

            <!-- Faq Start -->
            <section class="section-lgx">
                <div class="container">
                    <div class="pbmit-heading-subheading animation-style2 text-center">
                        <h4 class="pbmit-subtitle">Frequently Asked Question</h4>
                        <h2 class="pbmit-title">Happy to Answer All Your Questions</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xl-6">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item active">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            <span class="pbmit-accordion-icon pbmit-accordion-icon-right">
                                                <span class="pbmit-accordion-icon-closed">
                                                    <i class="pbmit-cleanfin-icon pbmit-cleanfin-icon-up-arrow"></i>
                                                </span>
                                                <span class="pbmit-accordion-icon-opened">
                                                    <i class="pbmit-cleanfin-icon pbmit-cleanfin-icon-thin-download-arrow"></i>
                                                </span>
                                            </span>
                                            <span class="pbmit-accordion-title">
                                                <span>01.</span>
                                                What industries does Techcentrics serve?
                                            </span>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Techcentrics provides IT and digital solutions across diverse industries, including BFSI, Healthcare, Manufacturing, Retail, Education, Government, Logistics, and more. We tailor our services for both enterprise and mid-market clients.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <span class="pbmit-accordion-icon pbmit-accordion-icon-right">
                                                <span class="pbmit-accordion-icon-closed">
                                                    <i class="pbmit-cleanfin-icon pbmit-cleanfin-icon-up-arrow"></i>
                                                </span>
                                                <span class="pbmit-accordion-icon-opened">
                                                    <i class="pbmit-cleanfin-icon pbmit-cleanfin-icon-thin-download-arrow"></i>
                                                </span>
                                            </span>
                                            <span class="pbmit-accordion-title">
                                                <span>02.</span>
                                                What are your core services?
                                            </span>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            We specialize in system integration, cloud migration, cybersecurity (including VAPT), digital transformation, data analytics, managed IT support, and advanced ERP & IAM deployments.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <span class="pbmit-accordion-icon pbmit-accordion-icon-right">
                                                <span class="pbmit-accordion-icon-closed">
                                                    <i class="pbmit-cleanfin-icon pbmit-cleanfin-icon-up-arrow"></i>
                                                </span>
                                                <span class="pbmit-accordion-icon-opened">
                                                    <i class="pbmit-cleanfin-icon pbmit-cleanfin-icon-thin-download-arrow"></i>
                                                </span>
                                            </span>
                                            <span class="pbmit-accordion-title">
                                                <span>03.</span>
                                                Do you offer customized solutions?
                                            </span>
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Yes, every engagement begins with a deep-dive analysis of your business needs. Our team crafts tailor-made strategies and architectures that fit your environment, objectives, and budget.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <span class="pbmit-accordion-icon pbmit-accordion-icon-right">
                                                <span class="pbmit-accordion-icon-closed">
                                                    <i class="pbmit-cleanfin-icon pbmit-cleanfin-icon-up-arrow"></i>
                                                </span>
                                                <span class="pbmit-accordion-icon-opened">
                                                    <i class="pbmit-cleanfin-icon pbmit-cleanfin-icon-thin-download-arrow"></i>
                                                </span>
                                            </span>
                                            <span class="pbmit-accordion-title">
                                                <span>04.</span>
                                                Where do you operate geographically?
                                            </span>
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Techcentrics serves clients across India and with remote support for global projects. We have teams on the ground in key markets to ensure prompt response and implementation.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Right Side FAQ -->
                        <div class="col-md-12 col-xl-6">
                            <div class="accordion" id="accordionExample1">
                                <div class="accordion-item active">
                                    <h2 class="accordion-header" id="heading1">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                            <span class="pbmit-accordion-icon pbmit-accordion-icon-right">
                                                <span class="pbmit-accordion-icon-closed">
                                                    <i class="pbmit-cleanfin-icon pbmit-cleanfin-icon-up-arrow"></i>
                                                </span>
                                                <span class="pbmit-accordion-icon-opened">
                                                    <i class="pbmit-cleanfin-icon pbmit-cleanfin-icon-thin-download-arrow"></i>
                                                </span>
                                            </span>
                                            <span class="pbmit-accordion-title">
                                                <span>05.</span>
                                                What support do you offer after project completion?
                                            </span>
                                        </button>
                                    </h2>
                                    <div id="collapse1" class="accordion-collapse collapse show"
                                        aria-labelledby="heading1" data-bs-parent="#accordionExample1">
                                        <div class="accordion-body">
                                            We provide end-to-end support, including post-implementation monitoring, helpdesk services, regular security audits, and ongoing optimization. Annual and flexible support packages are available.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                            <span class="pbmit-accordion-icon pbmit-accordion-icon-right">
                                                <span class="pbmit-accordion-icon-closed">
                                                    <i class="pbmit-cleanfin-icon pbmit-cleanfin-icon-up-arrow"></i>
                                                </span>
                                                <span class="pbmit-accordion-icon-opened">
                                                    <i class="pbmit-cleanfin-icon pbmit-cleanfin-icon-thin-download-arrow"></i>
                                                </span>
                                            </span>
                                            <span class="pbmit-accordion-title">
                                                <span>06.</span>
                                                Is my data secure with Techcentrics?
                                            </span>
                                        </button>
                                    </h2>
                                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                                        data-bs-parent="#accordionExample1">
                                        <div class="accordion-body">
                                            Absolutely. Data privacy and security are top priorities. We implement industry-leading security protocols, conduct VAPT, and maintain strict compliance with GDPR and other international standards.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                            <span class="pbmit-accordion-icon pbmit-accordion-icon-right">
                                                <span class="pbmit-accordion-icon-closed">
                                                    <i class="pbmit-cleanfin-icon pbmit-cleanfin-icon-up-arrow"></i>
                                                </span>
                                                <span class="pbmit-accordion-icon-opened">
                                                    <i class="pbmit-cleanfin-icon pbmit-cleanfin-icon-thin-download-arrow"></i>
                                                </span>
                                            </span>
                                            <span class="pbmit-accordion-title">
                                                <span>07.</span>
                                                Can you integrate with our existing infrastructure?
                                            </span>
                                        </button>
                                    </h2>
                                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                        data-bs-parent="#accordionExample1">
                                        <div class="accordion-body">
                                            Yes. Our experts work with legacy, hybrid, and cloud-native environments, ensuring seamless integration with your current infrastructure—minimizing disruption and maximizing ROI.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                            <span class="pbmit-accordion-icon pbmit-accordion-icon-right">
                                                <span class="pbmit-accordion-icon-closed">
                                                    <i class="pbmit-cleanfin-icon pbmit-cleanfin-icon-up-arrow"></i>
                                                </span>
                                                <span class="pbmit-accordion-icon-opened">
                                                    <i class="pbmit-cleanfin-icon pbmit-cleanfin-icon-thin-download-arrow"></i>
                                                </span>
                                            </span>
                                            <span class="pbmit-accordion-title">
                                                <span>08.</span>
                                                How do I get a quote or start a project?
                                            </span>
                                        </button>
                                    </h2>
                                    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                        data-bs-parent="#accordionExample1">
                                        <div class="accordion-body">
                                            Simply reach out via our <a href="contact-us.php">contact form</a>, email, or phone. Our solutions team will connect to understand your needs and provide a tailored proposal with timelines and cost details.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Right Side FAQ End -->
                    </div>
                </div>
            </section>
            <!-- Faq End -->

            <!-- Contact Form -->
            <section class="section-lgx">
                <div class="container">
                    <div class="row g-0">
                        <div class="col-md-4 contact_col_1">
                            <div class="pbmit-heading-subheading animation-style2">
                                <h4 class="pbmit-subtitle" style="color:#b9dbe6;">Contact Us</h4>
                                <h2 class="pbmit-title text-white">We’re Here to Help</h2>
                            </div>
                            <div class="contact-form_leftbox">
                                <div class="contact-us-left_inner">
                                    <div class="contact-form-left_title">
                                        <div class="pbmit-heading-subheading mb-0 animation-style2">
                                            <h2 class="pbmit-title" style="font-size:18px;">Let’s Discuss Your Next Tech Project</h2>
                                        </div>
                                    </div>
                                    <div class="pbmit-social-link mt-3">
                                        <h3 style="font-size:14px; font-weight:600; opacity:.9;">Follow us :</h3>
                                        <ul class="pbmit-social-links" style="gap:8px;">
                                            <li class="pbmit-social-li pbmit-social-facebook"><a href="#" target="_blank"><span><i class="pbmit-base-icon-facebook-squared"></i></span></a></li>
                                            <li class="pbmit-social-li pbmit-social-twitter"><a href="#" target="_blank"><span><i class="pbmit-base-icon-twitter"></i></span></a></li>
                                            <li class="pbmit-social-li pbmit-social-instagram"><a href="#" target="_blank"><span><i class="pbmit-base-icon-instagram"></i></span></a></li>
                                            <li class="pbmit-social-li pbmit-social-youtube"><a href="#" target="_blank"><span><i class="pbmit-base-icon-youtube-play"></i></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="mt-3" style="line-height:1.8;">
                                        <strong>Email:</strong> <a style="color:#e8f6fb;" href="mailto:info@tech-centrics.com">info@tech-centrics.com</a><br>
                                        <strong>Phone:</strong> <a style="color:#e8f6fb;" href="tel:+918178212409">+91-8178212409</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 contact_col_2">
                            <div class="contact-form_main">
                                <p>
                                    Ready to transform your business with innovative IT solutions?
                                    Share your requirements below and our team will respond with a tailored approach for your industry.
                                </p>
                                <div class="contact_form">
                                    <form method="post" class="contact-form" id="contact-form" action="mail.php">
                                        <h2>Get in Touch with Us</h2>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Your Name" name="name" required>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="email" class="form-control" placeholder="Email Address" name="email" required>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Phone Number" name="phone" required>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Subject" name="subject" required>
                                            </div>
                                            <div class="col-md-12">
                                                <textarea name="message" cols="40" rows="6" class="form-control" placeholder="How can we help you? Please describe your project, requirements, or questions." required></textarea>
                                            </div>
                                            <div class="col-sm-12">
                                                <button type="submit" class="pbmit-btn pbmit-btn-shape-round pbmit-btn-primary">
                                                    <i class="form-btn-loader fa fa-circle-o-notch fa-spin fa-fw margin-bottom d-none"></i>
                                                    <span class="pbmit-button-content-wrapper">
                                                        <span class="pbmit-button-text">Submit Now</span>
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="col-md-12 col-lg-12 message-status"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>

    </div>

     <?php include 'includes/footer.php'; ?>

</div>

<?php include 'includes/common-footer.php'; ?>