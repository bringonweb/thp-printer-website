<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Thp-Printer</title>
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
        .about-hero {
            height: 50vh;
            min-height: 400px;
            background: linear-gradient(135deg, rgba(67, 97, 238, 0.85), rgba(79, 55, 201, 0.85)), url('https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80') no-repeat center center/cover;
            display: flex;
            align-items: center;
            color: white;
            text-align: center;
            padding-top: 70px;
        }

        .about-hero-content {
            max-width: 800px;
            margin: 0 auto;
            animation: fadeInUp 1s ease;
            padding: 0 20px;
        }

        .about-hero h1 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            font-weight: 700;
            line-height: 1.2;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .about-hero p {
            font-size: 1.1rem;
            margin-bottom: 25px;
            opacity: 0.9;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
        }

        /* About Content Section */
        .about-content {
            background-color: #f9f9f9;
        }

        .about-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            align-items: center;
        }

        .about-text h2 {
            font-size: 1.8rem;
            margin-bottom: 15px;
            color: var(--dark-color);
        }

        .about-text p {
            margin-bottom: 15px;
            color: #666;
            font-size: 0.95rem;
        }

        .about-image {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
        }

        .about-image:hover {
            transform: translateY(-5px);
            box-shadow: var(--box-shadow-hover);
        }

        /* Mission Section */
        .mission {
            background-color: white;
        }

        .mission-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .mission-card {
            background-color: #f9f9f9;
            border-radius: 8px;
            padding: 30px;
            text-align: center;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
        }

        .mission-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--box-shadow-hover);
        }

        .mission-icon {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 15px;
        }

        .mission-card h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: var(--dark-color);
        }

        .mission-card p {
            color: #666;
            font-size: 0.9rem;
        }

        /* Process Section */
        .process {
            background-color: #f9f9f9;
        }

        .process-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            counter-reset: step-counter;
        }

        .process-step {
            background-color: white;
            border-radius: 8px;
            padding: 30px;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
            position: relative;
            padding-left: 80px;
        }

        .process-step:hover {
            transform: translateY(-5px);
            box-shadow: var(--box-shadow-hover);
        }

        .process-step::before {
            counter-increment: step-counter;
            content: counter(step-counter);
            position: absolute;
            left: 20px;
            top: 30px;
            width: 40px;
            height: 40px;
            background-color: var(--primary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.2rem;
        }

        .process-step h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: var(--dark-color);
        }

        .process-step p {
            color: #666;
            font-size: 0.9rem;
        }

        /* Values Section */
        .values {
            background-color: white;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        .value-card {
            background-color: #f9f9f9;
            border-radius: 8px;
            padding: 25px;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .value-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--box-shadow-hover);
        }

        .value-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background-color: var(--primary-color);
            transition: var(--transition);
        }

        .value-card:hover::before {
            width: 6px;
        }

        .value-icon {
            font-size: 1.8rem;
            color: var(--primary-color);
            margin-bottom: 15px;
        }

        .value-card h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: var(--dark-color);
        }

        .value-card p {
            color: #666;
            font-size: 0.9rem;
        }

        /* Stats Section */
        .stats {
            background: linear-gradient(135deg, rgba(67, 97, 238, 0.9), rgba(79, 55, 201, 0.9)), url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80') no-repeat center center/cover;
            color: white;
            text-align: center;
            padding: 50px 0;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 30px;
        }

        .stat-item {
            padding: 20px;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .stat-title {
            font-size: 1rem;
            opacity: 0.9;
        }

        /* CTA Section */
        .cta {
            background-color: var(--primary-color);
            color: white;
            text-align: center;
            padding: 50px 0;
        }

        .cta h2 {
            font-size: 1.8rem;
            margin-bottom: 20px;
        }

        .cta p {
            margin-bottom: 25px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            opacity: 0.9;
        }

        .cta .btn {
            background-color: white;
            color: var(--primary-color);
        }

        .cta .btn:hover {
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

            .about-hero h1 {
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

            .nav-center.active {
                left: 0;
            }

            .nav-links {
                flex-direction: column;
                gap: 25px;
                text-align: center;
            }

            .nav-right .call-btn span {
                display: none;
            }

            .about-hero {
                height: 45vh;
                min-height: 350px;
            }

            .about-hero h1 {
                font-size: 2rem;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 576px) {
            .section-title h2 {
                font-size: 1.6rem;
            }

            .about-hero h1 {
                font-size: 1.8rem;
            }

            .about-hero p {
                font-size: 1rem;
            }

            .mission-card,
            .process-step,
            .value-card {
                padding: 25px 20px;
            }

            .stat-number {
                font-size: 2rem;
            }

            .cta h2 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <?php include 'partials/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="about-hero">
        <div class="container">
            <div class="about-hero-content">
                <h1>Our Commitment to Excellence</h1>
                <p>Discover what makes Thp-Printer the trusted choice for printer repair services</p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section about-section">
        <div class="container">
            <div class="about-container">
                <div class="about-text">
                    <h2>Who We Are</h2>
                    <p>Founded in 2010, Thp-Printer began as a small team of printer technicians with a shared vision:
                        to provide reliable, affordable printer repair services with exceptional customer care.</p>
                    <p>What started as a local repair shop has grown into a trusted regional service provider, helping
                        thousands of residential and business clients keep their printers running smoothly.</p>
                    <p>Our team of certified technicians combines technical expertise with a genuine passion for solving
                        printer problems. We stay current with the latest printer technologies and repair techniques
                        through continuous training and certification.</p>
                    <a href="services.html" class="btn">Our Services</a>
                </div>
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                        alt="Our Repair Center">
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="section mission">
        <div class="container">
            <div class="section-title">
                <h2>Our Mission & Vision</h2>
                <p>Guiding principles that drive everything we do at PrintFix Pro</p>
            </div>
            <div class="mission-grid">
                <div class="mission-card">
                    <div class="mission-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Our Mission</h3>
                    <p>To provide fast, reliable printer repair services that minimize downtime and maximize
                        productivity for our clients, delivered with exceptional customer service.</p>
                </div>
                <div class="mission-card">
                    <div class="mission-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Our Vision</h3>
                    <p>To become the most trusted name in printer repair services, known for technical excellence, fair
                        pricing, and outstanding customer experiences.</p>
                </div>
                <div class="mission-card">
                    <div class="mission-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Our Promise</h3>
                    <p>Honest assessments, transparent pricing, and quality repairs backed by our satisfaction
                        guarantee. Your printer problems become our priority.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="section process">
        <div class="container">
            <div class="section-title">
                <h2>Our Repair Process</h2>
                <p>How we deliver fast, reliable printer repairs every time</p>
            </div>
            <div class="process-steps">
                <div class="process-step">
                    <h3>Diagnosis</h3>
                    <p>We start with a thorough assessment to identify the root cause of your printer issues.</p>
                </div>
                <div class="process-step">
                    <h3>Transparent Quote</h3>
                    <p>You'll receive a detailed estimate with no hidden fees before any work begins.</p>
                </div>
                <div class="process-step">
                    <h3>Quality Repair</h3>
                    <p>Our certified technicians perform repairs using high-quality parts and proven techniques.</p>
                </div>
                <div class="process-step">
                    <h3>Testing & Delivery</h3>
                    <p>We thoroughly test your printer and provide maintenance tips before returning it to you.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="section values">
        <div class="container">
            <div class="section-title">
                <h2>Our Core Values</h2>
                <p>The principles that guide our work and relationships</p>
            </div>
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                    <h3>Quality</h3>
                    <p>We stand behind our work with a satisfaction guarantee and use only high-quality parts in all
                        repairs.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <h3>Integrity</h3>
                    <p>Honest assessments and transparent pricing - we'll never recommend unnecessary repairs.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Efficiency</h3>
                    <p>We value your time and work quickly to minimize downtime and get you back to printing.</p>
                </div>
                <!-- <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Expertise</h3>
                    <p>Continuous training ensures our technicians are experts on the latest printer technologies.</p>
                </div> -->
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <!-- <section class="stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number">2,500+</div>
                    <div class="stat-title">Printers Repaired</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">98%</div>
                    <div class="stat-title">Success Rate</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">24/7</div>
                    <div class="stat-title">Support Available</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">500+</div>
                    <div class="stat-title">Happy Clients</div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Call to Action Section -->
    <!-- <section class="cta-section">
        <div class="container">
            <h2>Ready to Fix Your Printer?</h2>
            <p>Contact us today for fast, reliable printer repair services you can trust.</p>
            <a href="tel:+18665589610" class="btn animate-pulse">Call Now</a>
        </div>
    </section> -->
    <?php include 'partials/footer.php'; ?>


    <script>
        // Mobile Menu Toggle
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

        // // Header scroll effect
        // const header = document.getElementById('header');
        // window.addEventListener('scroll', () => {
        //     if (window.scrollY > 100) {
        //         header.classList.add('scrolled');
        //     } else {
        //         header.classList.remove('scrolled');
        //     }
        // });

        // // Smooth scrolling for anchor links
        // document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        //     anchor.addEventListener('click', function (e) {
        //         e.preventDefault();
        //         const targetId = this.getAttribute('href');
        //         if (targetId === '#') return;

        //         const targetElement = document.querySelector(targetId);
        //         if (targetElement) {
        //             window.scrollTo({
        //                 top: targetElement.offsetTop - 80,
        //                 behavior: 'smooth'
        //             });
        //         }
        //     });
        // });

        // // Animate elements when they come into view
        const animateOnScroll = () => {
            const elements = document.querySelectorAll('.about-container, .mission-card, .process-step, .value-card');

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
        document.querySelectorAll('.about-container, .mission-card, .process-step, .value-card').forEach(element => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(30px)';
            element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        });

        window.addEventListener('scroll', animateOnScroll);
        window.addEventListener('load', animateOnScroll);
    </script>
</body>

</html>