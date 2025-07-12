<?php
// Navbar styles
?>
<style>
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

    @media (max-width: 768px) {
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
    }
</style>

<!-- Header -->
<header id="header">
    <div class="container">
        <nav class="navbar">
            <a href="#" class="logo">
                <i class="fas fa-print"></i>
                <span>Thp-Printer</span>
            </a>

            <div class="nav-center">
                <ul class="nav-links">
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>

            <div class="nav-right">
                <a href="tel:+18665589610" class="call-btn">
                    <i class="fas fa-phone-alt"></i>
                    <span>Call Now</span>
                </a>
            </div>

            <button class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </button>
        </nav>
    </div>
</header>

<script>
    // Mobile Menu Toggle
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const navCenter = document.querySelector('.nav-center');

    mobileMenuBtn.addEventListener('click', () => {
        navCenter.classList.toggle('active');
        mobileMenuBtn.innerHTML = navCenter.classList.contains('active') ?
            '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
    });

    // Close mobile menu when clicking a link
    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', () => {
            navCenter.classList.remove('active');
            mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';
        });
    });

    // Header scroll effect
    const header = document.getElementById('header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
</script>