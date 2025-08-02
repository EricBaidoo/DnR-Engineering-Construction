// ===== ADVANCED ANIMATIONS WITH GSAP =====

// Register GSAP plugins
gsap.registerPlugin(ScrollTrigger);

// ===== INITIALIZATION =====
document.addEventListener('DOMContentLoaded', function() {
    initGSAPAnimations();
    initScrollTriggerAnimations();
    initAdvancedEffects();
    initInteractiveElements();
});

// ===== GSAP ANIMATIONS =====
function initGSAPAnimations() {
    // Preloader animation
    animatePreloader();
    
    // Hero animations
    animateHeroSection();
    
    // Text animations
    initTextAnimations();
    
    // Card animations
    initCardAnimations();
    
    // Button hover effects
    initButtonEffects();
}

// ===== PRELOADER ANIMATION =====
function animatePreloader() {
    const tl = gsap.timeline();
    
    tl.from('.logo-animation h1', {
        duration: 1,
        y: 50,
        opacity: 0,
        ease: 'power3.out'
    })
    .from('.loading-bar', {
        duration: 0.8,
        scaleX: 0,
        transformOrigin: 'left',
        ease: 'power2.out'
    }, '-=0.5')
    .to('.preloader', {
        duration: 1,
        opacity: 0,
        delay: 1.5,
        ease: 'power2.inOut',
        onComplete: function() {
            document.getElementById('preloader').style.display = 'none';
        }
    });
}

// ===== HERO SECTION ANIMATION =====
function animateHeroSection() {
    const tl = gsap.timeline({ delay: 3 });
    
    // Animate hero title lines
    tl.from('.title-line', {
        duration: 1.2,
        y: 100,
        opacity: 0,
        stagger: 0.2,
        ease: 'power3.out'
    })
    .from('.hero-subtitle', {
        duration: 1,
        y: 50,
        opacity: 0,
        ease: 'power2.out'
    }, '-=0.6')
    .from('.hero-actions .btn', {
        duration: 0.8,
        y: 30,
        opacity: 0,
        stagger: 0.1,
        ease: 'power2.out'
    }, '-=0.4')
    .from('.stat-item', {
        duration: 0.8,
        y: 30,
        opacity: 0,
        stagger: 0.1,
        ease: 'power2.out'
    }, '-=0.6')
    .from('.scroll-indicator', {
        duration: 0.8,
        y: 20,
        opacity: 0,
        ease: 'power2.out'
    }, '-=0.4');
    
    // Floating animation for hero stats
    gsap.to('.stat-item', {
        duration: 3,
        y: -10,
        repeat: -1,
        yoyo: true,
        stagger: 0.2,
        ease: 'power1.inOut'
    });
}

// ===== SCROLL TRIGGER ANIMATIONS =====
function initScrollTriggerAnimations() {
    // Section headers animation
    gsap.utils.toArray('.section-header').forEach(header => {
        gsap.from(header.children, {
            duration: 1,
            y: 60,
            opacity: 0,
            stagger: 0.2,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: header,
                start: 'top 80%',
                end: 'bottom 20%',
                toggleActions: 'play none none reverse'
            }
        });
    });
    
    // About section animations
    animateAboutSection();
    
    // Services section animations
    animateServicesSection();
    
    // Projects section animations
    animateProjectsSection();
    
    // Team section animations
    animateTeamSection();
    
    // Contact section animations
    animateContactSection();
    
    // Parallax effects
    initParallaxScrollTrigger();
}

// ===== ABOUT SECTION ANIMATION =====
function animateAboutSection() {
    const aboutSection = document.querySelector('.about');
    
    if (!aboutSection) return;
    
    // Feature items animation
    gsap.from('.feature-item', {
        duration: 0.8,
        x: -50,
        opacity: 0,
        stagger: 0.2,
        ease: 'power2.out',
        scrollTrigger: {
            trigger: '.about-features',
            start: 'top 80%',
            end: 'bottom 20%',
            toggleActions: 'play none none reverse'
        }
    });
    
    // Image gallery animation
    gsap.from('.gallery-item', {
        duration: 1,
        scale: 0.8,
        opacity: 0,
        stagger: 0.2,
        ease: 'power2.out',
        scrollTrigger: {
            trigger: '.image-gallery',
            start: 'top 80%',
            end: 'bottom 20%',
            toggleActions: 'play none none reverse'
        }
    });
    
    // Floating card animation
    gsap.from('.floating-card', {
        duration: 1.2,
        y: 100,
        opacity: 0,
        ease: 'back.out(1.7)',
        scrollTrigger: {
            trigger: '.floating-card',
            start: 'top 90%',
            end: 'bottom 20%',
            toggleActions: 'play none none reverse'
        }
    });
}

// ===== SERVICES SECTION ANIMATION =====
function animateServicesSection() {
    const serviceCards = gsap.utils.toArray('.service-card');
    
    serviceCards.forEach((card, index) => {
        gsap.from(card, {
            duration: 0.8,
            y: 80,
            opacity: 0,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: card,
                start: 'top 85%',
                end: 'bottom 20%',
                toggleActions: 'play none none reverse'
            }
        });
        
        // Hover animation
        card.addEventListener('mouseenter', function() {
            gsap.to(this, {
                duration: 0.3,
                y: -15,
                scale: 1.02,
                ease: 'power2.out'
            });
            
            gsap.to(this.querySelector('.service-icon'), {
                duration: 0.3,
                rotation: 360,
                ease: 'power2.out'
            });
        });
        
        card.addEventListener('mouseleave', function() {
            gsap.to(this, {
                duration: 0.3,
                y: 0,
                scale: 1,
                ease: 'power2.out'
            });
        });
    });
}

// ===== PROJECTS SECTION ANIMATION =====
function animateProjectsSection() {
    // Filter buttons animation
    gsap.from('.filter-btn', {
        duration: 0.6,
        y: 30,
        opacity: 0,
        stagger: 0.1,
        ease: 'power2.out',
        scrollTrigger: {
            trigger: '.project-filter',
            start: 'top 90%',
            toggleActions: 'play none none reverse'
        }
    });
    
    // Project cards animation
    const projectCards = gsap.utils.toArray('.project-card');
    
    projectCards.forEach(card => {
        gsap.from(card, {
            duration: 0.8,
            y: 60,
            opacity: 0,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: card,
                start: 'top 85%',
                toggleActions: 'play none none reverse'
            }
        });
        
        // Enhanced hover effect
        card.addEventListener('mouseenter', function() {
            gsap.to(this, {
                duration: 0.4,
                y: -20,
                scale: 1.03,
                ease: 'power2.out'
            });
            
            gsap.to(this.querySelector('.project-image img'), {
                duration: 0.4,
                scale: 1.1,
                ease: 'power2.out'
            });
        });
        
        card.addEventListener('mouseleave', function() {
            gsap.to(this, {
                duration: 0.4,
                y: 0,
                scale: 1,
                ease: 'power2.out'
            });
            
            gsap.to(this.querySelector('.project-image img'), {
                duration: 0.4,
                scale: 1,
                ease: 'power2.out'
            });
        });
    });
}

// ===== TEAM SECTION ANIMATION =====
function animateTeamSection() {
    const teamCards = gsap.utils.toArray('.team-card');
    
    teamCards.forEach((card, index) => {
        gsap.from(card, {
            duration: 0.8,
            y: 80,
            opacity: 0,
            delay: index * 0.2,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: card,
                start: 'top 85%',
                toggleActions: 'play none none reverse'
            }
        });
        
        // Team card hover animation
        card.addEventListener('mouseenter', function() {
            gsap.to(this, {
                duration: 0.4,
                y: -15,
                scale: 1.02,
                ease: 'power2.out'
            });
            
            gsap.to(this.querySelector('.team-image img'), {
                duration: 0.4,
                scale: 1.1,
                ease: 'power2.out'
            });
            
            gsap.to(this.querySelectorAll('.social-links a'), {
                duration: 0.3,
                y: -5,
                stagger: 0.05,
                ease: 'power2.out'
            });
        });
        
        card.addEventListener('mouseleave', function() {
            gsap.to(this, {
                duration: 0.4,
                y: 0,
                scale: 1,
                ease: 'power2.out'
            });
            
            gsap.to(this.querySelector('.team-image img'), {
                duration: 0.4,
                scale: 1,
                ease: 'power2.out'
            });
            
            gsap.to(this.querySelectorAll('.social-links a'), {
                duration: 0.3,
                y: 0,
                ease: 'power2.out'
            });
        });
    });
}

// ===== CONTACT SECTION ANIMATION =====
function animateContactSection() {
    // Contact items animation
    gsap.from('.contact-item', {
        duration: 0.8,
        x: -50,
        opacity: 0,
        stagger: 0.2,
        ease: 'power2.out',
        scrollTrigger: {
            trigger: '.contact-details',
            start: 'top 80%',
            toggleActions: 'play none none reverse'
        }
    });
    
    // Form animation
    gsap.from('.contact-form-wrapper', {
        duration: 1,
        x: 50,
        opacity: 0,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '.contact-form-wrapper',
            start: 'top 80%',
            toggleActions: 'play none none reverse'
        }
    });
    
    // Form fields animation
    gsap.from('.form-group', {
        duration: 0.6,
        y: 30,
        opacity: 0,
        stagger: 0.1,
        ease: 'power2.out',
        scrollTrigger: {
            trigger: '.contact-form',
            start: 'top 80%',
            toggleActions: 'play none none reverse'
        }
    });
}

// ===== TEXT ANIMATIONS =====
function initTextAnimations() {
    // Split text for character animation
    const titles = gsap.utils.toArray('.section-title');
    
    titles.forEach(title => {
        const text = title.textContent;
        title.innerHTML = '';
        
        [...text].forEach(char => {
            const span = document.createElement('span');
            span.textContent = char === ' ' ? '\u00A0' : char;
            span.style.display = 'inline-block';
            title.appendChild(span);
        });
        
        gsap.from(title.children, {
            duration: 0.8,
            y: 100,
            opacity: 0,
            stagger: 0.02,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: title,
                start: 'top 85%',
                toggleActions: 'play none none reverse'
            }
        });
    });
}

// ===== PARALLAX SCROLL TRIGGER =====
function initParallaxScrollTrigger() {
    // Hero video parallax
    gsap.to('.hero-video', {
        yPercent: -50,
        ease: 'none',
        scrollTrigger: {
            trigger: '.hero',
            start: 'top bottom',
            end: 'bottom top',
            scrub: true
        }
    });
    
    // Floating cards parallax
    gsap.utils.toArray('.floating-card').forEach(card => {
        gsap.to(card, {
            y: -100,
            ease: 'none',
            scrollTrigger: {
                trigger: card,
                start: 'top bottom',
                end: 'bottom top',
                scrub: true
            }
        });
    });
    
    // Background elements parallax
    gsap.utils.toArray('.bg-shape').forEach(shape => {
        gsap.to(shape, {
            y: -150,
            rotation: 360,
            ease: 'none',
            scrollTrigger: {
                trigger: shape,
                start: 'top bottom',
                end: 'bottom top',
                scrub: true
            }
        });
    });
}

// ===== CARD ANIMATIONS =====
function initCardAnimations() {
    const cards = gsap.utils.toArray('.service-card, .project-card, .team-card');
    
    cards.forEach(card => {
        // Initial state
        gsap.set(card, {
            transformStyle: 'preserve-3d'
        });
        
        // Hover effects
        card.addEventListener('mouseenter', function() {
            gsap.to(this, {
                duration: 0.3,
                rotationX: 5,
                rotationY: 5,
                z: 50,
                ease: 'power2.out'
            });
        });
        
        card.addEventListener('mouseleave', function() {
            gsap.to(this, {
                duration: 0.3,
                rotationX: 0,
                rotationY: 0,
                z: 0,
                ease: 'power2.out'
            });
        });
        
        // Mouse move effect
        card.addEventListener('mousemove', function(e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            const rotateX = (y - centerY) / 10;
            const rotateY = (centerX - x) / 10;
            
            gsap.to(this, {
                duration: 0.2,
                rotationX: rotateX,
                rotationY: rotateY,
                ease: 'power1.out'
            });
        });
    });
}

// ===== BUTTON EFFECTS =====
function initButtonEffects() {
    const buttons = gsap.utils.toArray('.btn');
    
    buttons.forEach(button => {
        // Ripple effect
        button.addEventListener('click', function(e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const ripple = document.createElement('span');
            ripple.style.cssText = `
                position: absolute;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.3);
                transform: scale(0);
                animation: ripple 0.6s linear;
                left: ${x}px;
                top: ${y}px;
                width: 20px;
                height: 20px;
                margin-left: -10px;
                margin-top: -10px;
                pointer-events: none;
            `;
            
            this.style.position = 'relative';
            this.style.overflow = 'hidden';
            this.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
        
        // Hover animation
        button.addEventListener('mouseenter', function() {
            gsap.to(this, {
                duration: 0.3,
                scale: 1.05,
                ease: 'power2.out'
            });
        });
        
        button.addEventListener('mouseleave', function() {
            gsap.to(this, {
                duration: 0.3,
                scale: 1,
                ease: 'power2.out'
            });
        });
    });
}

// ===== ADVANCED EFFECTS =====
function initAdvancedEffects() {
    // Magnetic effect for buttons
    initMagneticEffect();
    
    // Loading animations
    initLoadingAnimations();
    
    // Reveal animations
    initRevealAnimations();
    
    // Counter animations with scroll trigger
    initAdvancedCounters();
}

// ===== MAGNETIC EFFECT =====
function initMagneticEffect() {
    const magneticElements = gsap.utils.toArray('.btn-primary, .cta-btn');
    
    magneticElements.forEach(element => {
        element.addEventListener('mousemove', function(e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            
            gsap.to(this, {
                duration: 0.3,
                x: x * 0.3,
                y: y * 0.3,
                ease: 'power2.out'
            });
        });
        
        element.addEventListener('mouseleave', function() {
            gsap.to(this, {
                duration: 0.5,
                x: 0,
                y: 0,
                ease: 'elastic.out(1, 0.3)'
            });
        });
    });
}

// ===== LOADING ANIMATIONS =====
function initLoadingAnimations() {
    // Skeleton loading effect for images
    const images = document.querySelectorAll('img');
    
    images.forEach(img => {
        img.addEventListener('load', function() {
            gsap.from(this, {
                duration: 0.8,
                opacity: 0,
                scale: 1.1,
                ease: 'power2.out'
            });
        });
    });
}

// ===== REVEAL ANIMATIONS =====
function initRevealAnimations() {
    // Text reveal effect
    const revealTexts = gsap.utils.toArray('.reveal-text');
    
    revealTexts.forEach(text => {
        gsap.from(text, {
            duration: 1,
            y: 100,
            opacity: 0,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: text,
                start: 'top 90%',
                toggleActions: 'play none none reverse'
            }
        });
    });
    
    // Image reveal effect
    const revealImages = gsap.utils.toArray('.reveal-image');
    
    revealImages.forEach(img => {
        gsap.from(img, {
            duration: 1.2,
            scale: 1.3,
            opacity: 0,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: img,
                start: 'top 90%',
                toggleActions: 'play none none reverse'
            }
        });
    });
}

// ===== ADVANCED COUNTERS =====
function initAdvancedCounters() {
    const counters = gsap.utils.toArray('[data-count]');
    
    counters.forEach(counter => {
        ScrollTrigger.create({
            trigger: counter,
            start: 'top 80%',
            onEnter: () => {
                const target = parseInt(counter.getAttribute('data-count'));
                const obj = { count: 0 };
                
                gsap.to(obj, {
                    duration: 2,
                    count: target,
                    ease: 'power2.out',
                    onUpdate: function() {
                        counter.textContent = Math.floor(obj.count);
                    }
                });
            },
            once: true
        });
    });
}

// ===== INTERACTIVE ELEMENTS =====
function initInteractiveElements() {
    // Service cards interactive effect
    const serviceCards = gsap.utils.toArray('.service-card');
    
    serviceCards.forEach(card => {
        card.addEventListener('click', function() {
            // Add pulse effect
            gsap.fromTo(this, 
                { scale: 1 },
                { 
                    duration: 0.2,
                    scale: 0.95,
                    yoyo: true,
                    repeat: 1,
                    ease: 'power2.inOut'
                }
            );
        });
    });
    
    // Navigation links smooth reveal
    const navLinks = gsap.utils.toArray('.nav-link');
    
    gsap.from(navLinks, {
        duration: 0.8,
        y: -30,
        opacity: 0,
        stagger: 0.1,
        ease: 'power2.out',
        delay: 3.5
    });
}

// ===== REFRESH SCROLL TRIGGER =====
window.addEventListener('resize', () => {
    ScrollTrigger.refresh();
});

// ===== CSS KEYFRAMES FOR RIPPLE EFFECT =====
const style = document.createElement('style');
style.textContent = `
    @keyframes ripple {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }
`;
document.head.appendChild(style);
