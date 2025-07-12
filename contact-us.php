<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Thp-Printer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        /* Reset and Base Styles */
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --accent-color: #4cc9f0;
            --dark-color: #1a1a2e;
            --light-color: #f8f9fa;
            --success-color: #4bb543;
            --warning-color: #f0ad4e;
            --danger-color: #d9534f;
            --transition: all 0.3s ease;
            --box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            --box-shadow-hover: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #fff;
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        ul {
            list-style: none;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: var(--primary-color);
            color: white;
            border-radius: 50px;
            font-weight: 500;
            transition: var(--transition);
            border: none;
            cursor: pointer;
            font-size: 16px;
            text-align: center;
        }

        .btn:hover {
            background-color: var(--secondary-color);
            transform: translateY(-3px);
            box-shadow: var(--box-shadow-hover);
        }

        .btn-outline {
            background-color: transparent;
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
        }

        .btn-outline:hover {
            background-color: var(--primary-color);
            color: white;
        }

        .section {
            padding: 60px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 40px;
            position: relative;
        }

        .section-title h2 {
            font-size: 2rem;
            color: var(--dark-color);
            margin-bottom: 15px;
            font-weight: 700;
        }

        .section-title p {
            font-size: 1rem;
            color: #666;
            max-width: 700px;
            margin: 0 auto;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background-color: var(--primary-color);
            border-radius: 2px;
        }



        /* Hero Section */
        .contact-hero {
            height: 50vh;
            min-height: 400px;
            background: linear-gradient(135deg, rgba(67, 97, 238, 0.85), rgba(79, 55, 201, 0.85)), url('https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80') no-repeat center center/cover;
            display: flex;
            align-items: center;
            color: white;
            text-align: center;
            padding-top: 70px;
        }

        .contact-hero-content {
            max-width: 800px;
            margin: 0 auto;
            animation: fadeInUp 1s ease;
            padding: 0 20px;
        }

        .contact-hero h1 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            font-weight: 700;
            line-height: 1.2;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .contact-hero p {
            font-size: 1.1rem;
            margin-bottom: 25px;
            opacity: 0.9;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
        }

        /* Contact Section */
        .contact-section {
            background-color: #f9f9f9;
        }

        .contact-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background-color: var(--primary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .contact-text h3 {
            font-size: 1.2rem;
            margin-bottom: 5px;
            color: var(--dark-color);
        }

        .contact-text p,
        .contact-text a {
            color: #666;
            transition: var(--transition);
            font-size: 0.95rem;
        }

        .contact-text a:hover {
            color: var(--primary-color);
        }

        .contact-form {
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: var(--box-shadow);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--dark-color);
            font-size: 0.95rem;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: inherit;
            font-size: 1rem;
            transition: var(--transition);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.2);
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        /* Map Section */
        .map-section {
            background-color: white;
            padding: 0;
        }

        .map-container {
            height: 400px;
            width: 100%;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: var(--box-shadow);
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* FAQ Section */
        .faq-section {
            background-color: #f9f9f9;
        }

        .faq-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .faq-item {
            background-color: white;
            border-radius: 8px;
            margin-bottom: 15px;
            box-shadow: var(--box-shadow);
            overflow: hidden;
        }

        .faq-question {
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            font-weight: 500;
            color: var(--dark-color);
            transition: var(--transition);
        }

        .faq-question:hover {
            color: var(--primary-color);
        }

        .faq-question i {
            transition: var(--transition);
        }

        .faq-item.active .faq-question i {
            transform: rotate(180deg);
        }

        .faq-answer {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: var(--transition);
        }

        .faq-item.active .faq-answer {
            padding: 0 20px 20px;
            max-height: 500px;
        }

        /* CTA Section */
        .cta-section {
            background-color: var(--primary-color);
            color: white;
            text-align: center;
            padding: 60px 0;
        }

        .cta-section h2 {
            font-size: 1.8rem;
            margin-bottom: 20px;
        }

        .cta-section p {
            margin-bottom: 25px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            opacity: 0.9;
        }

        .cta-section .btn {
            background-color: white;
            color: var(--primary-color);
        }

        .cta-section .btn:hover {
            background-color: var(--light-color);
            color: var(--primary-color);
        }



        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        .animate-pulse {
            animation: pulse 2s infinite;
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .section-title h2 {
                font-size: 1.8rem;
            }

            .contact-hero h1 {
                font-size: 2.2rem;
            }


        }

        @media (max-width: 768px) {
            .section {
                padding: 50px 0;
            }

            .section-title {
                margin-bottom: 30px;
            }

            .mobile-menu-btn {
                display: block;
            }

            .nav-center {
                position: fixed;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100vh;
                background-color: white;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                transition: var(--transition);
                z-index: 1000;
            }



            .contact-hero {
                height: 45vh;
                min-height: 350px;
            }

            .contact-hero h1 {
                font-size: 2rem;
            }

            .contact-form {
                padding: 30px;
            }

            .map-container {
                height: 300px;
            }
        }

        @media (max-width: 576px) {
            .section-title h2 {
                font-size: 1.6rem;
            }

            .contact-hero h1 {
                font-size: 1.8rem;
            }

            .contact-hero p {
                font-size: 1rem;
            }

            .contact-form {
                padding: 25px 20px;
            }

            .contact-item {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .cta-section h2 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <?php include 'partials/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="contact-hero">
        <div class="container">
            <div class="contact-hero-content">
                <h1>Get In Touch</h1>
                <p>We're here to help with all your printer repair needs. Contact us today for fast, reliable service.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section contact-section">
        <div class="container">
            <div class="section-title">
                <h2>Contact Us</h2>
                <p>Have questions or need immediate assistance? Reach out to our friendly support team anytime.</p>
            </div>
            <div class="contact-container">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Our Location</h3>
                            <p>123 Printer Street, Tech City, TC 12345</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Call Us</h3>
                            <p><a href="tel:+18665589610">+1 (866) 558-9610</a></p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Email Us</h3>
                            <p><a href="mailto:support@thp-printer.com">support@thp-printer.com</a></p>
                            <p><a href="mailto:sales@thp-printer.com">sales@thp-printer.com</a></p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Working Hours</h3>
                            <p>Monday - Friday: 8:00 AM - 8:00 PM</p>
                            <p>Saturday: 9:00 AM - 5:00 PM</p>
                            <p>Sunday: Emergency Services Only</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <form id="contactForm" action="send_mail.php" method="POST">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" class="form-control" placeholder="John Doe" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" class="form-control" placeholder="john@example.com" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" class="form-control" placeholder="(123) 456-7890">
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" class="form-control" placeholder="Printer Repair Inquiry">
                        </div>
                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea id="message" class="form-control"
                                placeholder="Describe your printer issue here..." required></textarea>
                        </div>
                        <button type="submit" class="btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.215373510518!2d-73.9878449241646!3d40.74844097138985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQ0JzU0LjQiTiA3M8KwNTknMDkuNyJX!5e0!3m2!1sen!2sus!4v1623862345678!5m2!1sen!2sus"
                    allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section faq-section">
        <div class="container">
            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p>Find quick answers to common questions about our services</p>
            </div>
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How quickly can you respond to a service request?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We typically respond within 1-2 hours during business hours. For emergency services, we offer
                            same-day response times in most cases.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Do you offer remote printer support?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we provide remote support for software and connectivity issues. Many common printer
                            problems can be resolved quickly through our secure remote connection.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <span>What printer brands do you service?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We service all major printer brands including HP, Canon, Epson, Brother, Lexmark, Samsung,
                            and more. Our technicians are certified on most major models.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Do you provide warranty on your repairs?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>All our repairs come with a 90-day warranty. If the same issue reoccurs within this period,
                            we'll fix it at no additional cost.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2>Need Printer Repair Now?</h2>
            <p>Don't let printer problems slow you down. Contact us today for fast, reliable service.</p>
            <a href="tel:+18665589610" class="btn animate-pulse">Call Now</a>
        </div>
    </section>
    <?php include 'partials/footer.php'; ?>



    <script>
        // // Mobile Menu Toggle
        // const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        // const navCenter = document.querySelector('.nav-center');

        // mobileMenuBtn.addEventListener('click', () => {
        //     navCenter.classList.toggle('active');
        //     mobileMenuBtn.innerHTML = navCenter.classList.contains('active') ?
        //         '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
        // });

        // // Close mobile menu when clicking a link
        // document.querySelectorAll('.nav-links a').forEach(link => {
        //     link.addEventListener('click', () => {
        //         navCenter.classList.remove('active');
        //         mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';
        //     });
        // });

        // Header scroll effect
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // FAQ Accordion
        const faqItems = document.querySelectorAll('.faq-item');
        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            question.addEventListener('click', () => {
                item.classList.toggle('active');
            });
        });

        // Form submission
        const contactForm = document.getElementById('contactForm');
        if (contactForm) {
            contactForm.addEventListener('submit', function (e) {
                e.preventDefault();
                // Here you would typically send the form data to a server
                alert('Thank you for your message! We will contact you soon.');
                this.reset();
            });
        }

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Animate elements when they come into view
        const animateOnScroll = () => {
            const elements = document.querySelectorAll('.contact-container, .map-container, .faq-item');

            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.2;

                if (elementPosition < screenPosition) {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }
            });
        };

        // Set initial state for animated elements
        document.querySelectorAll('.contact-container, .map-container, .faq-item').forEach(element => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(30px)';
            element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        });

        window.addEventListener('scroll', animateOnScroll);
        window.addEventListener('load', animateOnScroll);
    </script>
</body>

</html>