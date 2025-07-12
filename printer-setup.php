<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printer Setup & Support | 24/7 Expert Help</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f0f4f8;
        }

        section {
            padding-left: 5%;
            padding-right: 5%;
        }

        .support-section {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            padding: 60px 10%;
            background-image: url('/assets/1.jpg');
            background-size: cover;
            background-position: center;
            position: relative;
            min-height: 500px;
        }

        .support-section::before {
            content: "";
            position: absolute;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.55);
            z-index: 0;
        }

        .content-box {
            z-index: 1;
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            max-width: 580px;
            width: 100%;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
            margin-left: 0;
            margin-right: auto;
        }

        .content-box h2 {
            font-size: 26px;
            color: #000;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .content-box h3 {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 15px;
            color: #111;
        }

        .content-box p {
            font-size: 16px;
            line-height: 1.5;
            color: #333;
            margin-bottom: 20px;
        }

        .support-btn {
            display: inline-block;
            background-color: #007BFF;
            color: #fff;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            transition: background 0.3s ease;
        }

        .support-btn:hover {
            background-color: #0056b3;
        }

        @media (max-width: 1024px) {
            .support-section {
                flex-direction: column-reverse;
                text-align: center;
            }

            .content-box {
                max-width: 90%;
            }
        }

        .support-banner {
            padding: 40px 5%;
            background: #fff;
            color: #111;
            text-align: center;
        }

        .top-call {
            margin-bottom: 30px;
        }

        .main-call-btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: #0072ce;
            color: white;
            border-radius: 30px;
            font-weight: bold;
            font-size: 16px;
            text-decoration: none;
            margin-bottom: 10px;
        }

        .top-call .note {
            font-size: 14px;
            margin-top: 10px;
            color: #333;
        }

        .top-call h2 {
            font-weight: 700;
            font-size: 22px;
            margin-top: 5px;
        }

        .support-content {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 40px;
            flex-wrap: wrap;
            text-align: left;
            margin-top: 30px;
        }

        .support-text {
            flex: 1 1 400px;
            max-width: 600px;
        }

        .support-text h3 {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .support-text p {
            font-size: 16px;
            line-height: 1.7;
            color: #444;
            margin-bottom: 20px;
        }

        .sub-call-btn {
            display: inline-block;
            padding: 10px 25px;
            background-color: #0072ce;
            color: white;
            border-radius: 25px;
            font-weight: bold;
            text-decoration: none;
            font-size: 15px;
        }

        .support-image {
            flex: 1 1 300px;
            max-width: 400px;
            text-align: center;
        }

        .support-image img {
            width: 100%;
            height: auto;
        }

        .printer-services {
            padding: 40px 5%;
            background: #fff;
            color: #000;
        }

        .services-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-bottom: 60px;
        }

        .service-box {
            background: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 16px;
            padding: 20px;
            width: 220px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .service-box:hover {
            transform: translateY(-5px);
        }

        .service-box .icon {
            font-size: 36px;
            color: #0072ce;
            margin-bottom: 15px;
        }

        .service-box h3 {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .service-box p {
            font-size: 14px;
            line-height: 1.5;
            color: #444;
        }

        .printer-guide {
            display: flex;
            align-items: center;
            gap: 40px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .image-wrapper {
            flex: 1 1 300px;
            max-width: 400px;
        }

        .image-wrapper img {
            width: 100%;
            border-radius: 50%;
            border: 8px solid #fff;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .text-wrapper {
            flex: 1 1 300px;
            max-width: 600px;
        }

        .text-wrapper h4 {
            color: #0072ce;
            font-weight: 600;
            margin-bottom: 10px;
            font-size: 16px;
            text-transform: uppercase;
        }

        .text-wrapper h2 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 15px;
            color: #000;
        }

        .text-wrapper p {
            font-size: 16px;
            line-height: 1.6;
            color: #444;
        }

        .printer-support-section {
            padding: 40px 5%;
            background-color: #f8f8f8;
            color: #222;
        }

        .content-wrapper {
            max-width: 1100px;
            margin: 0 auto;
        }

        .content-wrapper p {
            font-size: 18px;
            line-height: 1.7;
            margin-bottom: 25px;
        }

        .printer-services-list {
            list-style-type: disc;
            padding-left: 20px;
        }

        .printer-services-list li {
            margin-bottom: 15px;
            font-size: 16px;
            line-height: 1.6;
        }

        .printer-services-list strong {
            color: #000;
            font-weight: 600;
        }

        @media (max-width: 768px) {

            .support-banner,
            .support-content,
            .support-text,
            .support-image,
            .content-wrapper p,
            .printer-services-list li,
            .text-wrapper p {
                font-size: 14px;
                text-align: center;
            }

            .text-wrapper h2,
            .support-text h3,
            .top-call h2 {
                font-size: 18px;
            }

            .support-section {
                padding: 30px 20px;
                min-height: auto;
                justify-content: center;
            }

            .content-box {
                margin: 0 15px;
            }

            .content-box h2 {
                font-size: 22px;
            }

            .content-box h3 {
                font-size: 18px;
            }

            .content-box p {
                font-size: 14px;
                margin-bottom: 20px;
            }

            .support-btn {
                width: 100%;
                text-align: center;
                padding: 12px 15px;
                font-size: 15px;
            }
        }
    </style>
</head>

<body>
    <?php include 'partials/navbar.php'; ?>
    <section class="support-section">
        <div class="content-box">
            <h2>Need Printer Help?</h2>
            <h3>Talk to Real Experts 24/7</h3>
            <p>
                From setup to maintenance and repairs, we provide complete printer solutions with live support around
                the clock.
                Trusted by thousands, we handle all major brands with professional care.
            </p>
            <a href="#" class="support-btn"><i class="fas fa-headset"></i> Talk to Support Now</a>
        </div>
    </section>

    <section class="support-banner">
        <div class="top-call">
            <a href="tel:+18665589610" class="main-call-btn">Call Us +1 (866) 558-9610</a>
            <p class="note">Note: There is no charge for setup & support</p>
            <h2>24/7 Customer Support and Service</h2>
        </div>
        <div class="support-content">
            <div class="support-text">
                <h3>We Provide Printer Solutions</h3>
                <p>
                    We have been giving printers services for many years and we are the best printers support as a
                    result of
                    99.9% determination rate. As a specialist co-op consumer loyalty is our fundamental need and are
                    client experts
                    official are completely prepared on all best brand Hp, Epson, Brother, Canon, & Dell printer models
                    not just the
                    updated one’s additionally we are the main support supplier who is putting forth help not only
                    through site help,
                    moreover, we are the best online support for all the printers.
                </p>
                <a href="tel:+18665589610" class="sub-call-btn">📞 Call Now</a>
            </div>
            <div class="support-image">
                <img src="assets/2.webp" alt="Printer Setup Guide">
            </div>
        </div>
    </section>

    <section class="printer-services">
        <div class="services-container">
            <div class="service-box">
                <div class="icon">📊</div>
                <h3>Setup</h3>
                <p>Well, it is not difficult to set up your printer’s yourself. You can follow simple instructions to
                    set up your printer yourself.</p>
            </div>
            <div class="service-box">
                <div class="icon">☁️</div>
                <h3>Installation</h3>
                <p>If you still face any difficulty, you can communicate with experts at Printer Setup Number for expert
                    guidance and assistance.</p>
            </div>
            <div class="service-box">
                <div class="icon">🖨️</div>
                <h3>Repair</h3>
                <p>We will provide online printer repair solutions for you. You can contact us for any printer. Our team
                    will help you to fix the problem.</p>
            </div>
            <div class="service-box">
                <div class="icon">👍</div>
                <h3>Maintenance</h3>
                <p>We will also provide online printer maintenance for our customers. You can contact us for any brand
                    printer.</p>
            </div>
        </div>
        <div class="printer-guide">
            <div class="image-wrapper">
                <img src="/assets/3.png" alt="Printer Setup Guide">
            </div>
            <div class="text-wrapper">
                <h4>DISCOVER OUR COMPANY</h4>
                <h2>A Complete Guide To Setup Your Printer</h2>
                <p>
                    Choose to select a shared printer by name, if you already know the printer name. Now enter the path
                    to the printer.
                    For example, with a network named hope and a printer named hp, the network path would be:
                    <strong>\\hope\hp</strong>.
                </p>
            </div>
        </div>
    </section>

    <section class="printer-support-section">
        <div class="content-wrapper">
            <p>
                Are you facing Printer offline issues? <strong>Look no further!</strong> Our expert team is here to
                provide
                you with comprehensive Printer troubleshooting, setup, and support services. We understand the
                frustration
                that comes with Printer offline errors—whether you're using a Mac or Windows 10, wired or wireless, or
                even
                USB connections. Our goal is to help you get your Printer back online quickly and efficiently.
            </p>

            <ul class="printer-services-list">
                <li><strong>Printer Offline Troubleshooting:</strong> Is your Printer showing an offline status? Our
                    troubleshooting experts are skilled at diagnosing and resolving offline issues for all printer
                    brands
                    and models.</li>
                <li><strong>Printer Setup:</strong> Need help setting up your printer? Our step-by-step setup guides
                    make
                    the process seamless from unpacking to printing.</li>
                <li><strong>Printer Support:</strong> Our friendly support team is just a call away to assist with any
                    printer-related questions and concerns.</li>
                <li><strong>Printer Installation:</strong> Whether it's your first time or you're reinstalling, we’ll
                    walk
                    you through every step to configure your Printer properly.</li>
                <li><strong>Printer Help:</strong> Contact us for immediate and effective solutions for any Printer
                    problems.</li>
                <li><strong>Printer Offline Fix:</strong> If your Printer is offline, our proven solutions can bring it
                    back
                    online quickly and reliably.</li>
                <li><strong>Printer Configuration:</strong> We assist in customizing Printer settings to meet your
                    performance needs.</li>
                <li><strong>Printer Assistance:</strong> Don't face Printer issues alone—our support team is ready to
                    help
                    with any challenge.</li>
                <li><strong>Printer Offline on Mac:</strong> We resolve Mac-specific Printer offline issues with
                    precision
                    and care.</li>
                <li><strong>Printer Driver Installation:</strong> Let our experts install the correct Printer drivers to
                    ensure flawless functionality.</li>
                <li><strong>Printer Troubleshooting:</strong> We fix all types of Printer problems—network, software, or
                    hardware related.</li>
                <li><strong>Printer Offline on Windows 10:</strong> Facing issues on Windows 10? Our experts can resolve
                    them quickly and effectively.</li>
                <li><strong>Network Printer Problems:</strong> We diagnose and repair network-related Printer
                    connectivity
                    issues efficiently.</li>
                <li><strong>Printer Offline Network Issue:</strong> Our technicians resolve network-specific offline
                    errors
                    for long-term stability.</li>
                <li><strong>Wireless Printer Setup:</strong> Wireless setup made easy—let us handle the technical
                    configuration for you.</li>
                <li><strong>Printer Technical Support:</strong> Our tech experts are equipped to solve complex and
                    advanced
                    Printer problems.</li>
                <li><strong>Printer Offline Wireless:</strong> Is your wireless Printer offline? We’ll restore wireless
                    connectivity in no time.</li>
                <li><strong>USB Printer Setup:</strong> Step-by-step USB Printer setup support to get you printing fast.
                </li>
                <li><strong>Printer Offline Status:</strong> Tired of constant offline errors? We’ll find and fix the
                    root
                    cause.</li>
                <li><strong>Printer Software Setup:</strong> Ensure optimal Printer performance with proper software
                    installation and setup.</li>
            </ul>

            <p class="closing-line">
                At Printer Setup, we’re dedicated to providing top-notch Printer support and assistance for all your
                Printer-related needs. No matter the issue or configuration, we’ve got the expertise to keep your
                Printer
                running smoothly. <strong>Contact us today for reliable, spam-free Printer support!</strong>
            </p>
        </div>
    </section>
    <?php include 'partials/footer.php'; ?>
    <?php
    // Footer styles
    ?>
    <style>
        /* Footer Styles */
        footer {
            background-color: var(--dark-color);
            color: white;
            padding: 60px 0 20px;
        }

        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-col h3 {
            font-size: 1.3rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-col h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background-color: var(--primary-color);
        }

        .footer-col p {
            margin-bottom: 15px;
            opacity: 0.8;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            opacity: 0.8;
            transition: var(--transition);
            display: inline-block;
        }

        .footer-links a:hover {
            opacity: 1;
            color: var(--accent-color);
            transform: translateX(5px);
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .social-links a:hover {
            background-color: var(--primary-color);
            transform: translateY(-5px);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            opacity: 0.7;
            font-size: 0.9rem;
        }
    </style>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-col">
                    <h3>Thp-Printer</h3>
                    <p>Your trusted partner for all printer repair and maintenance needs. We're committed to providing
                        fast, reliable, and affordable printing solutions.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="/index.php">Home</a></li>
                        <li><a href="/about-us.php">About Us</a></li>

                        <li><a href="/contact-us">Contact</a></li>
                        <li><a href="/printer-setup.php">Printer Setup</a></li>
                        <li><a href="/privacy-policy.php">Privacy policy</a></li>
                        <li><a href="/terms-and-condition">Terms and Condition</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Services</h3>
                    <ul class="footer-links">
                        <li><a href="#">Printer Repair</a></li>
                        <li><a href="#">Maintenance</a></li>
                        <li><a href="#">Installation</a></li>
                        <li><a href="#">Remote Support</a></li>
                        <li><a href="#">Ink Refills</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Contact Info</h3>
                    <p><i class="fas fa-map-marker-alt"></i> 123 Printer Street, Tech City, TC 12345</p>
                    <p><i class="fas fa-phone-alt"></i> +1 (866) 558-9610</p>
                    <p><i class="fas fa-envelope"></i> support@thp-printer.com</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Thp-Printer. All Rights Reserved. | <a href="#">Privacy Policy</a> |
                    <a href="#">Terms of Service</a>
                </p>
            </div>
        </div>
    </footer>

</body>

</html>