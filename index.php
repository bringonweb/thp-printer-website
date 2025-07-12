<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thp-Printer | Printer Repair & Support</title>
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
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--dark-color);
            margin-bottom: 15px;
            font-weight: 700;
        }

        .section-title p {
            font-size: 1.1rem;
            color: #666;
            max-width: 700px;
            margin: 0 auto;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: var(--primary-color);
            border-radius: 2px;
        }

        /* Header Styles */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: var(--transition);
        }

        header.scrolled {
            background-color: rgba(255, 255, 255, 0.98);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            position: relative;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary-color);
            display: flex;
            align-items: center;
            z-index: 1001;
        }

        .logo i {
            margin-right: 10px;
            font-size: 2rem;
        }

        .nav-center {
            display: flex;
            flex: 1;
            justify-content: center;
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            font-weight: 500;
            position: relative;
            transition: var(--transition);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--primary-color);
            transition: var(--transition);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-links a.active {
            color: var(--primary-color);
        }

        .nav-links a.active::after {
            width: 100%;
        }

        .nav-right {
            display: flex;
            align-items: center;
            z-index: 1001;
        }

        .call-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 10px 20px;
            background-color: var(--primary-color);
            color: white;
            border-radius: 50px;
            font-weight: 500;
            transition: var(--transition);
        }

        .call-btn:hover {
            background-color: var(--secondary-color);
            transform: translateY(-3px);
            box-shadow: var(--box-shadow-hover);
        }

        .mobile-menu-btn {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--dark-color);
            z-index: 1001;
            background: none;
            border: none;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            background: linear-gradient(135deg, rgba(67, 97, 238, 0.85), rgba(79, 55, 201, 0.85)), url('https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80') no-repeat center center/cover;
            display: flex;
            align-items: center;
            color: white;
            text-align: center;
            padding-top: 80px;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            animation: fadeInUp 1s ease;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            font-weight: 700;
            line-height: 1.2;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
        }

        .hero-btns {
            display: flex;
            gap: 20px;
            justify-content: center;
        }

        .hero-btns .btn {
            min-width: 180px;
        }

        .hero-btns .btn-outline {
            background-color: transparent;
            border: 2px solid white;
            color: white;
        }

        .hero-btns .btn-outline:hover {
            background-color: white;
            color: var(--primary-color);
        }

        /* Services Section */
        .services {
            background-color: #f9f9f9;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }

        .service-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
            text-align: center;
            padding: 30px 20px;
            position: relative;
            z-index: 1;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--box-shadow-hover);
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background-color: var(--primary-color);
            transition: var(--transition);
        }

        .service-card:hover::before {
            height: 10px;
        }

        .service-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 15px;
            transition: var(--transition);
        }

        .service-card:hover .service-icon {
            transform: rotateY(180deg);
        }

        .service-card h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: var(--dark-color);
        }

        .service-card p {
            color: #666;
            margin-bottom: 15px;
            font-size: 0.95rem;
        }

        /* Brands Section */
        .brands {
            background-color: white;
        }

        .brands-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 40px;
        }

        .brand-item {
            flex: 0 0 calc(20% - 40px);
            max-width: 150px;
            filter: grayscale(100%);
            opacity: 0.7;
            transition: var(--transition);
        }

        .brand-item:hover {
            filter: grayscale(0);
            opacity: 1;
            transform: scale(1.1);
        }

        /* Why Choose Us Section */
        .features {
            background-color: #f9f9f9;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .feature-card {
            background-color: white;
            border-radius: 10px;
            padding: 40px 30px;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
            text-align: center;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--box-shadow-hover);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            background-color: rgba(67, 97, 238, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 2rem;
            color: var(--primary-color);
            transition: var(--transition);
        }

        .feature-card:hover .feature-icon {
            background-color: var(--primary-color);
            color: white;
        }

        .feature-card h3 {
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: var(--dark-color);
        }

        .feature-card p {
            color: #666;
        }

        /* Testimonials Section */
        .testimonials {
            background-color: white;
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .testimonial-card {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
            position: relative;
        }

        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--box-shadow-hover);
        }

        .testimonial-card::before {
            content: '\201C';
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 5rem;
            color: rgba(67, 97, 238, 0.1);
            font-family: Georgia, serif;
            line-height: 1;
        }

        .testimonial-content {
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .author-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            border: 3px solid var(--primary-color);
        }

        .author-info h4 {
            font-size: 1.1rem;
            margin-bottom: 5px;
            color: var(--dark-color);
        }

        .author-info p {
            color: #666;
            font-size: 0.9rem;
        }

        .rating {
            color: var(--warning-color);
            margin-top: 5px;
        }

        /* Stats Section */
        .stats {
            background: linear-gradient(135deg, rgba(67, 97, 238, 0.9), rgba(79, 55, 201, 0.9)), url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80') no-repeat center center/cover;
            color: white;
            text-align: center;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
        }

        .stat-item {
            padding: 30px;
        }

        .stat-number {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .stat-title {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        /* Footer */
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
        @media (max-width: 1200px) {
            .brand-item {
                flex: 0 0 calc(25% - 40px);
            }
        }

        @media (max-width: 992px) {
            .section-title h2 {
                font-size: 2.2rem;
            }

            .hero h1 {
                font-size: 3rem;
            }

            .nav-links {
                gap: 20px;
            }

            .stat-number {
                font-size: 3rem;
            }
        }

        @media (max-width: 768px) {
            .section {
                padding: 60px 0;
            }

            .section-title h2 {
                font-size: 2rem;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero-btns {
                flex-direction: column;
                align-items: center;
            }

            .hero-btns .btn {
                width: 100%;
                max-width: 250px;
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
                gap: 30px;
                text-align: center;
            }

            .nav-right .call-btn span {
                display: none;
            }

            .brand-item {
                flex: 0 0 calc(33.333% - 40px);
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 576px) {
            .section-title h2 {
                font-size: 1.8rem;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .service-card,
            .feature-card,
            .testimonial-card {
                padding: 25px 15px;
            }

            .brand-item {
                flex: 0 0 calc(50% - 40px);
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .stat-number {
                font-size: 2.5rem;
            }
        }
    </style>
</head>

<body>
    <?php include 'partials/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Expert Printer Repair Services</h1>
                <p>Fast, reliable, and affordable printer repair services for home and business. Our certified
                    technicians are ready to fix your printer issues today!</p>
                <div class="hero-btns">
                    <a href="tel:+18665589610" class="btn animate-pulse">Get Instant Support</a>
                    <a href="tel:+18665589610" class="btn btn-outline">Our Services</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section services">
        <div class="container">
            <div class="section-title">
                <h2>Our Services</h2>
                <p>We offer comprehensive printer repair and maintenance services to keep your printing equipment
                    running smoothly.</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Printer Repair</h3>
                    <p>Expert diagnosis and repair for all printer makes and models.</p>
                    <a href="tel:+18665589610" class="btn btn-outline">Learn More</a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Maintenance</h3>
                    <p>Regular maintenance to prevent breakdowns and extend life.</p>
                    <a href="tel:+18665589610" class="btn btn-outline">Learn More</a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-plug"></i>
                    </div>
                    <h3>Installation</h3>
                    <p>Professional installation and setup of new printers.</p>
                    <a href="tel:+18665589610" class="btn btn-outline">Learn More</a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Remote Support</h3>
                    <p>Quick assistance for software and connectivity issues.</p>
                    <a href="tel:+18665589610" class="btn btn-outline">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Brands Section -->
    <section class="section brands">
        <div class="container">
            <div class="section-title">
                <h2>Brands We Service</h2>
                <p>We work with all major printer brands and models</p>
            </div>
            <div class="brands-container">
                <div class="brand-item">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/HP_logo_2012.svg/1200px-HP_logo_2012.svg.png"
                        alt="HP">
                </div>
                <div class="brand-item">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0e/Canon_Logo.svg/1200px-Canon_Logo.svg.png"
                        alt="Canon">
                </div>
                <div class="brand-item">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/Epson_logo.svg/1200px-Epson_logo.svg.png"
                        alt="Epson">
                </div>
                <div class="brand-item">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/Brother_logo.svg/1200px-Brother_logo.svg.png"
                        alt="Brother">
                </div>
                <div class="brand-item">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Samsung_Logo.svg/1200px-Samsung_Logo.svg.png"
                        alt="Samsung">
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="section features">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose Us</h2>
                <p>We're committed to providing the best printer repair experience</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Fast Service</h3>
                    <p>Same-day service available for most repairs. We understand you can't afford downtime.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Certified Technicians</h3>
                    <p>Our technicians are certified and trained on all major printer brands and models.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Affordable Pricing</h3>
                    <p>Competitive pricing with no hidden fees. We provide upfront quotes before any work begins.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section testimonials">
        <div class="container">
            <div class="section-title">
                <h2>What Our Clients Say</h2>
                <p>Don't just take our word for it. Here's what our satisfied customers have to say about our services.
                </p>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>My office printer was down for 3 days before I called Thp-Printer. They had it working in
                            under an hour! Their technician was knowledgeable and professional. Highly recommended!</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-img">
                            <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Sarah Johnson">
                        </div>
                        <div class="author-info">
                            <h4>Sarah Johnson</h4>
                            <p>Office Manager, TechSolutions Inc.</p>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>I was amazed by how quickly they responded to my emergency call. Fixed my color printer that
                            was producing streaks at a very reasonable price. Will definitely use them again.</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-img">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael Chen">
                        </div>
                        <div class="author-info">
                            <h4>Michael Chen</h4>
                            <p>Graphic Designer</p>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>Their remote support saved me so much time! I couldn't get my wireless printer to connect,
                            and their technician walked me through the process in minutes. Excellent service!</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-img">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Emily Rodriguez">
                        </div>
                        <div class="author-info">
                            <h4>Emily Rodriguez</h4>
                            <p>Small Business Owner</p>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="section stats">
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
    </section>

    <?php include 'partials/footer.php'; ?>

    <script>
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
            const elements = document.querySelectorAll('.service-card, .feature-card, .brand-item, .testimonial-card, .stat-item');

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
        document.querySelectorAll('.service-card, .feature-card, .brand-item, .testimonial-card, .stat-item').forEach(element => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(30px)';
            element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        });

        window.addEventListener('scroll', animateOnScroll);
        window.addEventListener('load', animateOnScroll);
    </script>
</body>

</html>