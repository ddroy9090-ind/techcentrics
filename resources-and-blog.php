<?php include 'includes/common-header.php'; ?>

<div class="page-wrapper">
    <?php include 'includes/main-header.php'; ?>
    <!-- page content -->
    <div class="page-content demo_two">

        <<!-- Title Bar -->
            <section class="tbar tbar--blogs">
                <style>
                    /* Scoped to this section only */
                    .tbar.tbar--blogs {
                        --ink: #0e2330;
                        --muted: #5f7381;
                        --line: #e6edf3;
                        --bg1: #f7fbfd;
                        --bg2: #ffffff;
                        --brand: #074da3;
                        background:
                            radial-gradient(900px 260px at 10% -30%, rgba(15, 75, 95, .10), transparent 70%),
                            radial-gradient(700px 220px at 95% -20%, rgba(11, 106, 133, .08), transparent 70%),
                            linear-gradient(180deg, var(--bg1) 0%, var(--bg2) 100%);
                        border-bottom: 1px solid var(--line);
                        padding: 56px 0 28px;
                    }

                    .tbar .ctn {
                        max-width: 1240px;
                        margin: 0 auto;
                        padding: 0 22px
                    }

                    .tbar h1 {
                        margin: 0 0 6px;
                        font-size: clamp(28px, 5vw, 46px);
                        letter-spacing: -.01em;
                        color: var(--ink)
                    }

                    .tbar .sub {
                        margin: 0;
                        color: var(--muted);
                        font-size: 15px
                    }

                    .tbar .row {
                        display: flex;
                        justify-content: space-between;
                        align-items: end;
                        gap: 16px;
                        flex-wrap: wrap;
                        margin-top: 12px
                    }

                    .tbar .crumbs {
                        font-size: 14px;
                        color: #6f8795;
                        display: flex;
                        align-items: center;
                        gap: 8px
                    }

                    .tbar .crumbs a {
                        color: inherit;
                        text-decoration: none
                    }

                    .tbar .crumbs .sep {
                        opacity: .6
                    }

                    .tbar .actions {
                        display: flex;
                        gap: 8px;
                        flex-wrap: wrap
                    }

                    .tbar .chip {
                        font-size: 12px;
                        font-weight: 600;
                        padding: 7px 12px;
                        border-radius: 999px;
                        border: 1px solid var(--line);
                        background: #fff;
                        color: #31525f
                    }

                    .tbar .btn {
                        border-radius: 999px;
                        padding: 9px 14px;
                        font-weight: 700;
                        text-decoration: none
                    }

                    .tbar .btn--ghost {
                        border: 1px solid var(--line);
                        color: #31525f;
                        background: #fff
                    }

                    .tbar .btn--brand {
                        background: var(--brand);
                        color: #fff;
                        border: 1px solid transparent
                    }
                </style>

                <div class="ctn" role="region" aria-label="Blogs header">
                    <h1>Blogs</h1>
                    <p class="sub">Insights, updates, and how-tos from the Techcentrics team.</p>

                    <div class="row">
                        <!-- Breadcrumb -->
                        <nav class="crumbs" aria-label="Breadcrumb">
                            <a href="/">Techcentrics</a>
                            <span class="sep"><i class="pbmit-base-icon-angle-right" aria-hidden="true"></i></span>
                            <span aria-current="page">Blogs</span>
                        </nav>


                    </div>
                </div>
            </section>
            <!-- Title Bar End -->


            <div class="page-content">

                <!-- Blog Start -->
                <section class="section-lg">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="pbmit-heading-subheading animation-style2">
                                    <h4 class="pbmit-subtitle">Techcentrics Blog</h4>
                                    <h2 class="pbmit-title">Insights into Enterprise IT, Cloud & Analytics</h2>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog-two_desc">
                                    Discover expert-written articles covering SPSS analytics, IAM trends, cloud
                                    modernization, data security, and the future of hybrid infrastructure—directly from
                                    Techcentrics specialists.
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slider" data-autoplay="false" data-dots="false" data-arrows="false"
                            data-columns="3" data-margin="30" data-effect="slide">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <article class="pbmit-ele-blog pbmit-blog-style-1">
                                        <div class="post-item">
                                            <div class="pbmit-featured-container">
                                                <div class="pbmit-featured-img-wrapper">
                                                    <div class="pbmit-featured-wrapper">
                                                        <img src="images/homepage-2/blog/blog-01.jpg" class="img-fluid"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pbminfotech-box-content">
                                                <div
                                                    class="pbmit-meta-cat-wrapper pbmit-meta-line d-flex align-items-center">
                                                    <div class="pbmit-meta-category">
                                                        <a href="javascript:void(0)" rel="category tag">Predictive
                                                            Analytics</a>
                                                    </div>
                                                    <div class="pbmit-meta-date">
                                                        <span class="pbmit-date-wrap">14 Jul, 2024</span>
                                                    </div>
                                                </div>
                                                <h3 class="pbmit-post-title">
                                                    <a href="javascript:void(0)">Unlocking Smarter Decisions with IBM
                                                        SPSS</a>
                                                </h3>
                                                <div class="pbmit-svg-btn"> <a class="btn-arrow" href="image/spss.pdf"
                                                        download="images/spss.pdf"> Read More <svg
                                                            class="pbmit-svg-arrow" xmlns="http://www.w3.org/2000/svg"
                                                            width="10" height="19" viewBox="0 0 19 19">
                                                            <line x1="1" y1="18" x2="17.8" y2="1.2"></line>
                                                            <line x1="1.2" y1="1" x2="18" y2="1"></line>
                                                            <line x1="18" y1="17.8" x2="18" y2="1"></line>
                                                        </svg> </a>
                                                </div>
                                            </div>
                                            <a href="images/spss.pdf" download="spss.pdf" class="pbmit-link"></a>
                                        </div>
                                    </article>
                                </div>
                                <div class="swiper-slide">
                                    <article class="pbmit-ele-blog pbmit-blog-style-1">
                                        <div class="post-item">
                                            <div class="pbmit-featured-container">
                                                <div class="pbmit-featured-img-wrapper">
                                                    <div class="pbmit-featured-wrapper">
                                                        <img src="images/homepage-2/blog/blog-02.jpg" class="img-fluid"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pbminfotech-box-content">
                                                <div
                                                    class="pbmit-meta-cat-wrapper pbmit-meta-line d-flex align-items-center">
                                                    <div class="pbmit-meta-category">
                                                        <a href="javascript:void(0)" rel="category tag">IAM &
                                                            Security</a>
                                                    </div>
                                                    <div class="pbmit-meta-date">
                                                        <span class="pbmit-date-wrap">5 Aug, 2024</span>
                                                    </div>
                                                </div>
                                                <h3 class="pbmit-post-title">
                                                    <a href="javascript:void(0)">Tanflow IAM Suite: Security Meets
                                                        Scalability</a>
                                                </h3>
                                                <div class="pbmit-svg-btn">
                                                    <a class="btn-arrow" href="image/tanflow.pdf"
                                                        download="tanflow.pdf">
                                                        Read More
                                                        <svg class="pbmit-svg-arrow" xmlns="http://www.w3.org/2000/svg"
                                                            width="10" height="19" viewBox="0 0 19 19">
                                                            <line x1="1" y1="18" x2="17.8" y2="1.2"></line>
                                                            <line x1="1.2" y1="1" x2="18" y2="1"></line>
                                                            <line x1="18" y1="17.8" x2="18" y2="1"></line>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="images/tanflow.pdf" download="tanflow.pdf" class="pbmit-link"></a>
                                        </div>
                                    </article>
                                </div>
                                <div class="swiper-slide">
                                    <article class="pbmit-ele-blog pbmit-blog-style-1">
                                        <div class="post-item">
                                            <div class="pbmit-featured-container">
                                                <div class="pbmit-featured-img-wrapper">
                                                    <div class="pbmit-featured-wrapper">
                                                        <img src="images/homepage-2/blog/blog-03.jpg" class="img-fluid"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pbminfotech-box-content">
                                                <div
                                                    class="pbmit-meta-cat-wrapper pbmit-meta-line d-flex align-items-center">
                                                    <div class="pbmit-meta-category">
                                                        <a href="javascript:void(0)" rel="category tag">Cloud
                                                            Infrastructure</a>
                                                    </div>
                                                    <div class="pbmit-meta-date">
                                                        <span class="pbmit-date-wrap">28 Sep, 2024</span>
                                                    </div>
                                                </div>
                                                <h3 class="pbmit-post-title">
                                                    <a href="javascript:void(0)">Modernizing Legacy Systems with Hybrid
                                                        Cloud</a>
                                                </h3>
                                                <div class="pbmit-svg-btn">
                                                    <a class="btn-arrow" href="javascript:void(0)">
                                                        Read More
                                                        <svg class="pbmit-svg-arrow" xmlns="http://www.w3.org/2000/svg"
                                                            width="10" height="19" viewBox="0 0 19 19">
                                                            <line x1="1" y1="18" x2="17.8" y2="1.2"></line>
                                                            <line x1="1.2" y1="1" x2="18" y2="1"></line>
                                                            <line x1="18" y1="17.8" x2="18" y2="1"></line>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)" class="pbmit-link"></a>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Blog End -->
            </div>

    </div>
    <!-- page content End -->
    <?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/common-footer.php'; ?>