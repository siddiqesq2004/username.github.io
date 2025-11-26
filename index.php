<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace Landing</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="logo">MarketPro</div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#testimonials">Testimonials</a></li>
            <li><a href="#" class="login-btn">Login</a></li>
            <!-- To enable logout, uncomment this -->
            <!-- <li><a href="#" class="logout-btn">Logout</a></li> -->
        </ul>
    </nav>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="hero-content">
            <h1>Hire the Best Professionals for Your Project</h1>
            <p>Connect with skilled experts and bring your ideas to life effortlessly.</p>
            <button class="cta-btn">Get Started</button>
        </div>
    </section>

    <!-- SERVICES SECTION -->
    <section id="services" class="services-section">
        <h2 class="section-title">Our Services</h2>

        <div class="services-container">
            <div class="service-card">
                <h3>Post Your Project</h3>
                <p>Easily create and publish your project requirements.</p>
            </div>

            <div class="service-card">
                <h3>Hire Professionals</h3>
                <p>Browse skilled experts and choose the perfect match.</p>
            </div>

            <div class="service-card">
                <h3>Receive Proposals</h3>
                <p>Get quotes and proposals tailored for your project.</p>
            </div>

            <div class="service-card">
                <h3>Secure Payments</h3>
                <p>Pay safely through our trusted platform.</p>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS SECTION -->
    <section id="testimonials" class="testimonials-section">
        <h2 class="section-title">What Our Users Say</h2>

        <div class="testimonial-slider">

            <div class="testimonial-card active">
                <p>"This platform helped me find the perfect professional. Amazing experience!"</p>
                <h4>- Rahul M.</h4>
            </div>

            <div class="testimonial-card">
                <p>"Very smooth process from posting a project to getting it completed."</p>
                <h4>- Priya S.</h4>
            </div>

            <div class="testimonial-card">
                <p>"Great quality freelancers, excellent support. Highly recommend!"</p>
                <h4>- Karthik R.</h4>
            </div>

        </div>

        <div class="slider-buttons">
            <span class="slider-btn" onclick="changeSlide(0)"></span>
            <span class="slider-btn" onclick="changeSlide(1)"></span>
            <span class="slider-btn" onclick="changeSlide(2)"></span>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="cta-section">
        <h2>Ready to Start Your Project?</h2>
        <p>Join MarketPro today and connect with expert professionals.</p>
        <button class="cta-main-btn">Get Started Now</button>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
        <p>© 2025 MarketPro. All rights reserved.</p>
    </footer>

    <!-- JAVASCRIPT -->
    <script src="assets/js/main.js"></script>
</body>
</html>
