<?php include 'includes/common-header.php'; ?>

<div class="page-wrapper">
    <?php include 'includes/main-header.php'; ?>

    <style>
.pbmit-title-bar-wrapper {
    position: relative;
    background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
                url('images/hero-bg.jpg') center/cover no-repeat; /* Replace with any tech image if you want */
    padding: 80px 0;
    text-align: center;
    color: #fff;
    animation: fadeIn 1s ease-in-out;
}

@keyframes fadeIn {
    from {opacity: 0; transform: translateY(-20px);}
    to {opacity: 1; transform: translateY(0);}
}

.pbmit-title-bar-wrapper h1 {
    font-size: 48px;
    font-weight: 800;
    margin-bottom: 12px;
    color: #fff;
    text-shadow: 1px 1px 8px rgba(0,0,0,0.6);
    letter-spacing: 0.5px;
}

.pbmit-title-bar-wrapper .accent-bar {
    display: block;
    width: 100px;
    height: 4px;
    background: #ffcc00;
    margin: 0 auto 18px;
    border-radius: 3px;
}

.pbmit-breadcrumb {
    font-size: 18px;
    color: #ffffffcc;
    font-weight: 400;
}

.pbmit-breadcrumb a {
    color: #ffffff;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
}
.pbmit-breadcrumb a:hover {
    color: #ffcc00;
}
.pbmit-breadcrumb .sep {
    margin: 0 10px;
    color: #ffffff99;
}
</style>

<div class="pbmit-title-bar-wrapper">
    <div class="container">
        <h1>Terms & Conditions</h1>
        <span class="accent-bar"></span>
        <div class="pbmit-breadcrumb">
            <a href="/">Home</a>
            <span class="sep">›</span>
            <span>Terms & Conditions</span>
        </div>
    </div>
</div>


    <!-- Terms Content -->
    <section class="terms-section">
        <div style="padding: 40px;">
            <p class="last-updated">Last Updated: August 16, 2025</p>

            <p>Welcome to Techcentrics IT Pvt. Ltd. These Terms & Conditions govern your use of our website, services, and solutions. By accessing or using our website, you agree to comply with these terms. If you do not agree, please refrain from using our services.</p>

            <h2>1. Use of Our Services</h2>
            <p>You agree to use our services solely for lawful purposes. You must not use our website or services in a manner that could damage, disable, overburden, or impair our infrastructure.</p>

            <h2>2. Intellectual Property Rights</h2>
            <p>All content on this website, including text, graphics, logos, software, and images, is the intellectual property of Techcentrics IT Pvt. Ltd. or its licensors. Unauthorized use or reproduction is prohibited.</p>

            <h2>3. Confidentiality</h2>
            <p>We respect your confidential information and handle data in accordance with applicable privacy laws. By using our services, you agree to maintain the confidentiality of any proprietary information shared with you.</p>

            <h2>4. Limitation of Liability</h2>
            <p>Techcentrics IT Pvt. Ltd. shall not be held liable for any indirect, incidental, or consequential damages arising from the use or inability to use our services.</p>

            <h2>5. Third-Party Links</h2>
            <p>Our website may contain links to third-party websites. We are not responsible for the content, policies, or practices of these external sites.</p>

            <h2>6. Changes to Terms</h2>
            <p>We reserve the right to update these Terms & Conditions at any time without prior notice. Continued use of our services constitutes your acceptance of any modifications.</p>

            <h2>7. Governing Law</h2>
            <p>These Terms & Conditions are governed by the laws of India. Any disputes arising shall be subject to the exclusive jurisdiction of the courts in Gurugram, Haryana.</p>

            <h2>8. Contact Us</h2>
            <p>If you have any questions about these Terms & Conditions, you may contact us at:</p>
            <ul>
                <li>Email: <a href="mailto:info@tech-centrics.com">info@tech-centrics.com</a></li>
                <li>Phone: +91 98101 23456</li>
                <li>Address: 346, Centrum Plaza, Sec-53, Golf Course Road, Gurugram</li>
            </ul>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
</div>

<style>
    body {
        font-family: 'Inter', sans-serif;
        background: #f8f9fa;
        line-height: 1.6;
        color: #222;
    }
    .pbmit-title-bar-wrapper {
        background: linear-gradient(120deg, #0d1b2a, #1b263b);
        padding: 80px 0;
        color: #fff;
        text-align: center;
    }
    .pbmit-title-bar-wrapper h1 {
        font-size: 48px;
        font-weight: 800;
        margin: 0;
    }
    .pbmit-title-bar-wrapper .accent-bar {
        display: block;
        width: 60px;
        height: 4px;
        background: #00b4d8;
        margin: 12px auto 0;
        border-radius: 2px;
    }
    .pbmit-breadcrumb {
        margin-top: 24px;
        font-size: 14px;
        font-weight: 500;
        color: #ffffffcc;
    }
    .pbmit-breadcrumb a { color:#ffffffcc; }
    .pbmit-breadcrumb a:hover { color:#fff; }
    .pbmit-breadcrumb .sep {
        margin: 0 10px;
        color:#ffffff99;
    }
    .terms-section {
        max-width: 1100px;
        margin: 60px auto;
        padding: 0 20px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 8px 24px rgba(0,0,0,0.05);
    }
    .terms-section h2 {
        font-size: 26px;
        font-weight: 700;
        margin-top: 40px;
        margin-bottom: 12px;
        color: #0d1b2a;
    }
    .terms-section p {
        font-size: 16px;
        margin-bottom: 20px;
        color: #444;
    }
    .terms-section ul {
        padding-left: 20px;
        margin-bottom: 20px;
    }
    .terms-section ul li {
        margin-bottom: 10px;
        font-size: 16px;
        color: #444;
    }
    .last-updated {
        margin-top: 20px;
        font-size: 14px;
        color: #888;
    }
    @media (max-width:768px) {
        .pbmit-title-bar-wrapper h1 { font-size: 36px; }
        .terms-section h2 { font-size: 22px; }
    }
</style>
