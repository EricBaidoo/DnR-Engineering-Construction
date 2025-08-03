<?php
// Footer section for DnR Engineering Construction
?>

    <!-- =======================
         FOOTER SECTION
    ======================== -->
    <?php include 'contact-section.php'; ?>
    <footer class="footer">
        <div class="footer-container" style="display: flex; flex-direction: column; align-items: center;">
            <div class="footer-main" style="width: 100%; display: flex; flex-wrap: wrap; gap: 2.5rem; justify-content: center; text-align: center;">
                <!-- Brand & Description -->
                <div class="footer-brand" style="justify-content: center; text-align: center;">
                    <img src="assets/images/cropped-DnR-1.jpg" alt="DnR Engineering Construction Logo" class="footer-logo">
                    <div>
                        <span class="footer-company">DnR Engineering Consult</span>
                        <p class="footer-desc">
                            Premier engineering and construction solutions in Ghana. Building trust, delivering excellence.
                        </p>
                    </div>
                </div>
                <!-- Quick Links -->
                <div class="footer-links" style="text-align: center;">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <!-- Contact Info -->
                <div class="footer-contact" style="text-align: center;">
                    <h4>Contact</h4>
                    <ul>
                        <li><i class="fas fa-envelope"></i> <a href="mailto:dnr.eng.consult@gmail.com" style="text-decoration:none;">info@dnrengineering.com</a></li>
                        <li><i class="fas fa-phone"></i> 0550760606 / 0208284018</li>
                        <li><i class="fas fa-map-marker-alt"></i> East Legon, Accra, Ghana</li>
                    </ul>
                </div>
                <!-- Social Media -->
                <div class="footer-social" style="text-align: center;">
                    <h4>Follow Us</h4>
                    <div class="footer-social-icons">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            
        </div>
        <div class="footer-bottom" style="text-align: center;">
            <span>&copy; 2025 DnR Engineering Consult. All rights reserved.</span>
            <span class="footer-powered">Powered by <a href="#" target="_blank" rel="noopener" class="footer-powered-link">E7 Technology Solutions</a></span>
        </div>
    </footer>

    <!-- WhatsApp Floating Button (moved outside footer for visibility) -->
    <a href="https://wa.me/233550760606" class="whatsapp-float" target="_blank" aria-label="Chat with us on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>



    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- JAVASCRIPT SECTION -->
    <!-- Scroll to Top Button -->
    <button id="scrollToTopBtn" aria-label="Scroll to top"><i class="fas fa-chevron-up"></i></button>
 



    <script>
    // Swiper initialization for hero slider
    document.addEventListener('DOMContentLoaded', function() {
      new Swiper('.hero-swiper', {
        loop: true,
        autoplay: { delay: 7000, disableOnInteraction: false },
        navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
        pagination: { el: '.swiper-pagination', clickable: true },
        effect: 'fade',
        fadeEffect: { crossFade: true },
      });
    });
        // Scroll to Top Button Functionality
        const scrollToTopBtn = document.getElementById('scrollToTopBtn');
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                scrollToTopBtn.style.display = 'flex';
            } else {
                scrollToTopBtn.style.display = 'none';
            }
        });
        scrollToTopBtn.addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
        // Stats Counter Animation
        function animateStats() {
            const counters = document.querySelectorAll('.hero-stat-number');
            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.getAttribute('data-target');
                    const count = +counter.innerText.replace(/,/g, '');
                    const increment = Math.ceil(target / 80);
                    if (count < target) {
                        counter.innerText = Math.min(count + increment, target).toLocaleString();
                        setTimeout(updateCount, 18);
                    } else {
                        counter.innerText = target.toLocaleString();
                    }
                };
                updateCount();
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Navbar and Mobile Menu Elements
            const mobileToggle = document.querySelector('.mobile-toggle');
            const navLinks = document.querySelector('.nav-links');
            const navbar = document.querySelector('.navbar');

            // Animate stats when hero is in view
            let statsAnimated = false;
            function checkStatsInView() {
                const hero = document.querySelector('.hero');
                if (!hero || statsAnimated) return;
                const rect = hero.getBoundingClientRect();
                if (rect.top < window.innerHeight && rect.bottom > 0) {
                    animateStats();
                    statsAnimated = true;
                }
            }
            window.addEventListener('scroll', checkStatsInView);
            checkStatsInView();

            // Mobile menu toggle functionality
            if (mobileToggle && navLinks) {
                mobileToggle.addEventListener('click', function() {
                    mobileToggle.classList.toggle('active');
                    navLinks.classList.toggle('active');
                });

                // Close mobile menu when clicking on links
                document.querySelectorAll('.nav-links a').forEach(link => {
                    link.addEventListener('click', function() {
                        mobileToggle.classList.remove('active');
                        navLinks.classList.remove('active');
                        // Update active link
                        document.querySelectorAll('.nav-links a').forEach(l => l.classList.remove('active'));
                        this.classList.add('active');
                    });
                });

                // Close mobile menu when clicking outside
                document.addEventListener('click', function(e) {
                    if (!navbar.contains(e.target)) {
                        mobileToggle.classList.remove('active');
                        navLinks.classList.remove('active');
                    }
                });
            }

            // Navbar scroll effect
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });

            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        const offsetTop = target.offsetTop - 70; // Account for navbar height
                        window.scrollTo({
                            top: offsetTop,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            console.log('Navbar functionality initialized successfully!');
        });
    </script>
</body>
</html>