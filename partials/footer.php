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
            <p>&copy; <?php echo date('Y'); ?> Thp-Printer. All Rights Reserved. | <a href="#">Privacy Policy</a> | <a
                    href="#">Terms of Service</a></p>
        </div>
    </div>
</footer>