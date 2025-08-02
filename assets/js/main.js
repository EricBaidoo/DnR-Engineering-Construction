// ===== MAIN JAVASCRIPT FILE =====

// DOM Content Loaded Event
document.addEventListener('DOMContentLoaded', function() {
    initializeWebsite();
});

// Initialize Website
function initializeWebsite() {
    initPreloader();
    initNavigation();
    initCustomCursor();
    initScrollEffects();
    initCounterAnimations();
    initProjectFilter();
    initContactForm();
    initSmoothScrolling();
    initParallaxEffects();
    initFloatingActionButton();
    initBackToTop();
}

// ===== PRELOADER =====
function initPreloader() {
    const preloader = document.getElementById('preloader');
    
    // Hide preloader after page load
    window.addEventListener('load', function() {
        setTimeout(() => {
            preloader.style.opacity = '0';
            setTimeout(() => {
                preloader.style.display = 'none';
                document.body.style.overflow = 'visible';
            }, 300);
        }, 1500);
    });
}

// ===== NAVIGATION =====
function initNavigation() {
    const navbar = document.getElementById('navbar');
    const navToggle = document.getElementById('nav-toggle');
    const navMenu = document.getElementById('nav-menu');
    const navLinks = document.querySelectorAll('.nav-link');
    
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        if (window.scrollY > 100) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
    
    // Mobile menu toggle
    navToggle.addEventListener('click', function() {
        navMenu.classList.toggle('active');
        navToggle.classList.toggle('active');
    });
    
    // Close mobile menu when link is clicked
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            navMenu.classList.remove('active');
            navToggle.classList.remove('active');
        });
    });
    
    // Active link highlighting
    window.addEventListener('scroll', updateActiveNavLink);
    
    function updateActiveNavLink() {
        const sections = document.querySelectorAll('section[id]');
        const scrollPosition = window.scrollY + 200;
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute('id');
            const navLink = document.querySelector(`.nav-link[href="#${sectionId}"]`);
            
            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                navLinks.forEach(link => link.classList.remove('active'));
                if (navLink) navLink.classList.add('active');
            }
        });
    }
}

// ===== CUSTOM CURSOR =====
function initCustomCursor() {
    const cursor = document.getElementById('cursor');
    
    if (!cursor) return;
    
    let mouseX = 0;
    let mouseY = 0;
    let cursorX = 0;
    let cursorY = 0;
    
    // Update mouse position
    document.addEventListener('mousemove', function(e) {
        mouseX = e.clientX;
        mouseY = e.clientY;
    });
    
    // Animate cursor
    function animateCursor() {
        const speed = 0.2;
        cursorX += (mouseX - cursorX) * speed;
        cursorY += (mouseY - cursorY) * speed;
        
        cursor.style.left = cursorX + 'px';
        cursor.style.top = cursorY + 'px';
        
        requestAnimationFrame(animateCursor);
    }
    
    animateCursor();
    
    // Cursor interactions
    const interactiveElements = document.querySelectorAll('a, button, .service-card, .project-card, .team-card');
    
    interactiveElements.forEach(element => {
        element.addEventListener('mouseenter', function() {
            cursor.style.transform = 'scale(1.5)';
            cursor.style.mixBlendMode = 'normal';
            cursor.style.background = 'rgba(255, 107, 53, 0.3)';
        });
        
        element.addEventListener('mouseleave', function() {
            cursor.style.transform = 'scale(1)';
            cursor.style.mixBlendMode = 'difference';
            cursor.style.background = '#ff6b35';
        });
    });
}

// ===== SCROLL EFFECTS =====
function initScrollEffects() {
    // Reveal animations on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    // Observe elements for scroll animations
    const animatedElements = document.querySelectorAll('.service-card, .project-card, .team-card, .feature-item, .contact-item');
    animatedElements.forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(30px)';
        element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(element);
    });
}

// ===== COUNTER ANIMATIONS =====
function initCounterAnimations() {
    const counters = document.querySelectorAll('[data-count]');
    
    const counterObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = parseInt(counter.getAttribute('data-count'));
                const duration = 2000;
                const step = target / (duration / 16);
                let current = 0;
                
                const updateCounter = () => {
                    current += step;
                    if (current < target) {
                        counter.textContent = Math.floor(current);
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target;
                    }
                };
                
                updateCounter();
                counterObserver.unobserve(counter);
            }
        });
    }, { threshold: 0.5 });
    
    counters.forEach(counter => {
        counterObserver.observe(counter);
    });
}

// ===== PROJECT FILTER =====
function initProjectFilter() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');
            
            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            // Filter projects with animation
            projectCards.forEach(card => {
                card.style.transform = 'scale(0.8)';
                card.style.opacity = '0';
                
                setTimeout(() => {
                    if (filter === 'all' || card.getAttribute('data-category') === filter) {
                        card.style.display = 'block';
                        setTimeout(() => {
                            card.style.transform = 'scale(1)';
                            card.style.opacity = '1';
                        }, 50);
                    } else {
                        card.style.display = 'none';
                    }
                }, 300);
            });
        });
    });
}

// ===== CONTACT FORM =====
function initContactForm() {
    const form = document.getElementById('contact-form');
    const inputs = form.querySelectorAll('input, select, textarea');
    
    // Form validation and submission
    form.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        // Enhanced validation
        let isValid = true;
        const formData = new FormData(form);
        const data = Object.fromEntries(formData);
        
        inputs.forEach(input => {
            if (input.hasAttribute('required') && !input.value.trim()) {
                input.style.borderColor = '#e74c3c';
                input.classList.add('error');
                isValid = false;
            } else {
                input.style.borderColor = '#e9ecef';
                input.classList.remove('error');
            }
        });
        
        // Email validation
        const emailInput = form.querySelector('[type="email"]');
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (emailInput && !emailRegex.test(emailInput.value)) {
            isValid = false;
            emailInput.style.borderColor = '#e74c3c';
            emailInput.classList.add('error');
        }
        
        // Phone validation
        const phoneInput = form.querySelector('[type="tel"]');
        if (phoneInput && phoneInput.value.length < 10) {
            isValid = false;
            phoneInput.style.borderColor = '#e74c3c';
            phoneInput.classList.add('error');
        }
        
        if (isValid) {
            try {
                // Show loading state
                const submitBtn = form.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = '<span>Sending...</span><i class="fas fa-spinner fa-spin"></i>';
                submitBtn.disabled = true;
                
                // Send form data to PHP handler
                const response = await fetch('contact-handler.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(data)
                });
                
                const result = await response.json();
                
                if (result.success) {
                    showNotification('Thank you! We will contact you within 24 hours to discuss your project.', 'success');
                    form.reset();
                    // Remove focused class from form groups
                    form.querySelectorAll('.form-group').forEach(group => {
                        group.classList.remove('focused');
                    });
                } else {
                    showNotification(result.error || 'Something went wrong. Please try again.', 'error');
                }
                
                // Restore button
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
                
            } catch (error) {
                console.error('Form submission error:', error);
                showNotification('Network error. Please check your connection and try again.', 'error');
                
                // Restore button
                const submitBtn = form.querySelector('button[type="submit"]');
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }
        } else {
            showNotification('Please fill in all required fields correctly.', 'error');
        }
    });
    
    // Input animations
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('focused');
        });
        
        input.addEventListener('blur', function() {
            if (!this.value) {
                this.parentElement.classList.remove('focused');
            }
        });
    });
}

// ===== SMOOTH SCROLLING =====
function initSmoothScrolling() {
    const links = document.querySelectorAll('a[href^="#"]');
    
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                const offsetTop = targetElement.offsetTop - 100;
                
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
}

// ===== PARALLAX EFFECTS =====
function initParallaxEffects() {
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        
        // Hero parallax
        const heroVideo = document.querySelector('.hero-video');
        if (heroVideo) {
            heroVideo.style.transform = `translateY(${scrolled * 0.5}px)`;
        }
        
        // Floating elements
        const floatingElements = document.querySelectorAll('.floating-card');
        floatingElements.forEach((element, index) => {
            const speed = 0.3 + (index * 0.1);
            element.style.transform = `translateY(${scrolled * speed}px)`;
        });
    });
}

// ===== UTILITY FUNCTIONS =====

// Show notification
function showNotification(message, type) {
    const notification = document.createElement('div');
    notification.className = `notification ${type}`;
    notification.textContent = message;
    
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: ${type === 'success' ? '#27ae60' : '#e74c3c'};
        color: white;
        padding: 15px 20px;
        border-radius: 5px;
        z-index: 10000;
        animation: slideIn 0.3s ease;
    `;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.style.animation = 'slideOut 0.3s ease';
        setTimeout(() => {
            document.body.removeChild(notification);
        }, 300);
    }, 3000);
}

// Debounce function
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Throttle function
function throttle(func, limit) {
    let inThrottle;
    return function() {
        const args = arguments;
        const context = this;
        if (!inThrottle) {
            func.apply(context, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    };
}

// ===== PERFORMANCE OPTIMIZATIONS =====

// Optimize scroll events
const optimizedScrollHandler = throttle(function() {
    // Scroll-based animations
    initParallaxEffects();
}, 16);

window.addEventListener('scroll', optimizedScrollHandler);

// Lazy loading for images
function initLazyLoading() {
    const images = document.querySelectorAll('img[data-src]');
    
    const imageObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.getAttribute('data-src');
                img.removeAttribute('data-src');
                imageObserver.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));
}

// Initialize lazy loading
initLazyLoading();

// ===== ACCESSIBILITY IMPROVEMENTS =====

// Keyboard navigation
document.addEventListener('keydown', function(e) {
    // ESC key closes mobile menu
    if (e.key === 'Escape') {
        const navMenu = document.getElementById('nav-menu');
        const navToggle = document.getElementById('nav-toggle');
        navMenu.classList.remove('active');
        navToggle.classList.remove('active');
    }
});

// Focus management
const focusableElements = 'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])';

function trapFocus(element) {
    const focusableContent = element.querySelectorAll(focusableElements);
    const firstFocusableElement = focusableContent[0];
    const lastFocusableElement = focusableContent[focusableContent.length - 1];
    
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Tab') {
            if (e.shiftKey) {
                if (document.activeElement === firstFocusableElement) {
                    lastFocusableElement.focus();
                    e.preventDefault();
                }
            } else {
                if (document.activeElement === lastFocusableElement) {
                    firstFocusableElement.focus();
                    e.preventDefault();
                }
            }
        }
    });
}

// ===== ERROR HANDLING =====
window.addEventListener('error', function(e) {
    console.error('JavaScript Error:', e.error);
    // Implement error reporting here
});

// ===== DARK MODE TOGGLE (Optional Feature) =====
function initDarkMode() {
    const darkModeToggle = document.getElementById('dark-mode-toggle');
    
    if (darkModeToggle) {
        // Check for saved dark mode preference
        const isDarkMode = localStorage.getItem('darkMode') === 'true';
        
        if (isDarkMode) {
            document.body.classList.add('dark-mode');
        }
        
        darkModeToggle.addEventListener('click', function() {
            document.body.classList.toggle('dark-mode');
            const isNowDarkMode = document.body.classList.contains('dark-mode');
            localStorage.setItem('darkMode', isNowDarkMode);
        });
    }
}

// ===== FLOATING ACTION BUTTON =====
function initFloatingActionButton() {
    const fabMain = document.getElementById('fab-main');
    const fabMenu = document.getElementById('fab-menu');
    
    if (fabMain && fabMenu) {
        fabMain.addEventListener('click', function() {
            fabMain.classList.toggle('active');
            fabMenu.classList.toggle('active');
        });
        
        // Close FAB menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.floating-action')) {
                fabMain.classList.remove('active');
                fabMenu.classList.remove('active');
            }
        });
        
        // Show/hide FAB based on scroll position
        let lastScrollTop = 0;
        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            const floatingAction = document.querySelector('.floating-action');
            
            if (scrollTop > 300) {
                if (scrollTop > lastScrollTop) {
                    // Scrolling down
                    floatingAction.style.transform = 'translateX(120px)';
                } else {
                    // Scrolling up
                    floatingAction.style.transform = 'translateX(0)';
                }
            } else {
                floatingAction.style.transform = 'translateX(120px)';
            }
            
            lastScrollTop = scrollTop;
        });
    }
}

// ===== BACK TO TOP BUTTON =====
function initBackToTop() {
    const backToTopButton = document.getElementById('backToTop');
    
    if (backToTopButton) {
        // Show/hide button based on scroll position
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.add('visible');
            } else {
                backToTopButton.classList.remove('visible');
            }
        });
        
        // Smooth scroll to top
        backToTopButton.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
}

// Initialize dark mode
initDarkMode();
