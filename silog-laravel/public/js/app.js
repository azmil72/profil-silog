// Hero content data with auto-changing functionality
let currentHeroIndex = 0;
let isChanging = false;

// Auto-change hero content with fade animation
function changeHeroContent() {
    if (isChanging || !window.heroContentData || window.heroContentData.length <= 1) return;
    isChanging = true;

    const heroTitle = document.getElementById('heroTitle');
    const heroSubtitle = document.getElementById('heroSubtitle');
    const ctaButton = document.getElementById('ctaButton');
    const heroImg = document.getElementById('heroImg');

    if (!heroTitle || !heroSubtitle || !ctaButton || !heroImg) {
        isChanging = false;
        return;
    }

    // Fade out with smooth animation
    heroTitle.style.opacity = '0';
    heroTitle.style.transform = 'translateX(-30px)';
    heroSubtitle.style.opacity = '0';
    heroSubtitle.style.transform = 'translateX(-20px)';
    ctaButton.style.opacity = '0';
    ctaButton.style.transform = 'translateY(20px)';
    heroImg.style.opacity = '0';
    heroImg.style.transform = 'scale(1.1)';

    setTimeout(() => {
        currentHeroIndex = (currentHeroIndex + 1) % window.heroContentData.length;
        const content = window.heroContentData[currentHeroIndex];

        // Update content
        heroTitle.textContent = content.title;
        heroSubtitle.textContent = content.subtitle;
        ctaButton.textContent = content.cta;
        heroImg.src = content.image;

        // Fade in with smooth animation
        setTimeout(() => {
            heroTitle.style.opacity = '1';
            heroTitle.style.transform = 'translateX(0)';
            heroSubtitle.style.opacity = '1';
            heroSubtitle.style.transform = 'translateX(0)';
            ctaButton.style.opacity = '1';
            ctaButton.style.transform = 'translateY(0)';
            heroImg.style.opacity = '1';
            heroImg.style.transform = 'scale(1)';
            isChanging = false;
        }, 200);
    }, 800);
}

// Gallery functionality
let currentSlide = 0;
let totalSlides = 4; // Default value, will be updated from PHP

function changeSlide(direction) {
    const track = document.getElementById('galleryTrack');
    if (!track) return;
    
    currentSlide += direction;
    
    if (currentSlide < 0) currentSlide = totalSlides - 1;
    if (currentSlide >= totalSlides) currentSlide = 0;
    
    track.style.transform = `translateX(-${currentSlide * 100}%)`;
}

// Initialize hero animations on load
function initializeHeroAnimations() {
    setTimeout(() => {
        const heroTitle = document.getElementById('heroTitle');
        const heroSubtitle = document.getElementById('heroSubtitle');
        const ctaButton = document.getElementById('ctaButton');
        
        if (heroTitle) heroTitle.classList.add('visible');
        if (heroSubtitle) heroSubtitle.classList.add('visible');
        if (ctaButton) ctaButton.classList.add('visible');
    }, 1200);
}

// Smooth scrolling
function initializeSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

// Navbar scroll effect
function initializeNavbarScrollEffect() {
    window.addEventListener('scroll', () => {
        const navbar = document.getElementById('navbar');
        if (navbar) {
            if (window.scrollY > 100) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        }
    });
}

// Scroll animations
function initializeScrollAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);

    // Observe all animation elements
    document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right').forEach(el => {
        observer.observe(el);
    });
}

// Loading screen
function initializeLoadingScreen() {
    window.addEventListener('load', () => {
        setTimeout(() => {
            const loading = document.getElementById('loading');
            if (loading) {
                loading.classList.add('hidden');
            }
        }, 1000);
    });
}

// Add parallax effect to sections
function initializeParallaxEffect() {
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const sections = document.querySelectorAll('.about-section, .services-section');
        sections.forEach((section, index) => {
            const speed = 0.1 + (index * 0.05);
            section.style.transform = `translateY(${scrolled * speed}px)`;
        });
    });
}

// Enhanced hover effects
function initializeHoverEffects() {
    document.querySelectorAll('.about-card, .service-card, .subsidiary-card, .news-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = this.style.transform + ' scale(1.02)';
            this.style.zIndex = '10';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = this.style.transform.replace(' scale(1.02)', '');
            this.style.zIndex = '1';
        });
    });
}

// Add dynamic background animation
function createFloatingElements() {
    const hero = document.querySelector('.hero');
    if (!hero) return;
    
    const floatingContainer = document.createElement('div');
    floatingContainer.style.position = 'absolute';
    floatingContainer.style.top = '0';
    floatingContainer.style.left = '0';
    floatingContainer.style.width = '100%';
    floatingContainer.style.height = '100%';
    floatingContainer.style.pointerEvents = 'none';
    floatingContainer.style.zIndex = '1';
    floatingContainer.style.opacity = '0.1';

    for (let i = 0; i < 8; i++) {
        const element = document.createElement('div');
        element.innerHTML = ['📦', '🚚', '🏗️', '🏭', '📊', '⚙️', '🌐', '📈'][i];
        element.style.position = 'absolute';
        element.style.fontSize = '2rem';
        element.style.left = Math.random() * 100 + '%';
        element.style.top = Math.random() * 100 + '%';
        element.style.animation = `float ${5 + Math.random() * 3}s ease-in-out infinite`;
        element.style.animationDelay = Math.random() * 5 + 's';
        floatingContainer.appendChild(element);
    }

    hero.appendChild(floatingContainer);
}

// Add smooth reveal animation for footer
function initializeFooterAnimations() {
    const footer = document.querySelector('.footer');
    if (!footer) return;
    
    const footerObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animation = 'slideInUp 0.8s ease-out forwards';
            }
        });
    }, { threshold: 0.1 });

    footerObserver.observe(footer);

    // Add staggered animation for footer grid items
    const footerItems = document.querySelectorAll('.footer-grid > div');
    footerItems.forEach((item, index) => {
        item.style.opacity = '0';
        item.style.transform = 'translateY(30px)';
        item.style.transition = 'all 0.6s ease';
        
        setTimeout(() => {
            item.style.opacity = '1';
            item.style.transform = 'translateY(0)';
        }, 1500 + (index * 200));
    });
}

// Add interactive elements
function initializeInteractiveElements() {
    document.querySelectorAll('.social-link').forEach(link => {
        link.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-3px) rotate(5deg)';
        });
        
        link.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) rotate(0deg)';
        });
    });

    // Add section titles animation
    document.querySelectorAll('.section-title').forEach(title => {
        title.classList.add('primary-font');
    });
}

// Enhanced gallery hover effects
function initializeGalleryEffects() {
    document.querySelectorAll('.gallery-slide').forEach(slide => {
        slide.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.05)';
            this.style.transition = 'transform 0.5s ease';
        });
        
        slide.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });
}

// Add interactive cursor
function initializeInteractiveCursor() {
    const cursor = document.createElement('div');
    cursor.style.cssText = `
        position: fixed;
        width: 20px;
        height: 20px;
        background: var(--red-accent);
        border-radius: 50%;
        pointer-events: none;
        z-index: 9999;
        opacity: 0;
        transform: translate(-50%, -50%);
        transition: all 0.1s ease;
        mix-blend-mode: multiply;
    `;
    document.body.appendChild(cursor);

    document.addEventListener('mousemove', (e) => {
        cursor.style.left = e.clientX + 'px';
        cursor.style.top = e.clientY + 'px';
        cursor.style.opacity = '0.8';
    });

    document.addEventListener('mouseleave', () => {
        cursor.style.opacity = '0';
    });

    // Add hover effects for interactive elements
    document.querySelectorAll('a, button, .card').forEach(element => {
        element.addEventListener('mouseenter', () => {
            cursor.style.transform = 'translate(-50%, -50%) scale(1.5)';
            cursor.style.opacity = '0.6';
        });
        
        element.addEventListener('mouseleave', () => {
            cursor.style.transform = 'translate(-50%, -50%) scale(1)';
            cursor.style.opacity = '0.8';
        });
    });
}

// Enhanced news card animations
function initializeNewsAnimations() {
    document.querySelectorAll('.news-card').forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(50px) scale(0.95)';
        card.style.transition = 'all 0.8s cubic-bezier(0.4, 0, 0.2, 1)';
        
        setTimeout(() => {
            card.style.opacity = '1';
            card.style.transform = 'translateY(0) scale(1)';
        }, 200 + (index * 200));
    });
}

// Simple fade-in animation untuk subsidiary cards
function initializeSubsidiaryAnimations() {
    document.querySelectorAll('.subsidiary-card').forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'all 0.6s ease';
        
        setTimeout(() => {
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, index * 200);
    });
}

// Intersection Observer untuk animasi saat scroll
function initializeScrollObserver() {
    const animateOnScroll = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1 });

    // Observe sections untuk animasi
    document.querySelectorAll('.subsidiaries-section, .cta-section').forEach(section => {
        animateOnScroll.observe(section);
    });
}

// Enhanced CTA section animations
function initializeCTAAnimations() {
    const ctaSection = document.querySelector('.cta-section');
    if (!ctaSection) return;
    
    const ctaObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const elements = entry.target.querySelectorAll('.cta-title, .cta-subtitle, .cta-buttons');
                elements.forEach((el, index) => {
                    setTimeout(() => {
                        el.style.opacity = '1';
                        el.style.transform = 'translateY(0)';
                    }, index * 300);
                });
            }
        });
    }, { threshold: 0.3 });

    ctaObserver.observe(ctaSection);
}

// Add ripple effect to buttons
function initializeRippleEffect() {
    document.querySelectorAll('.cta-btn, .btn-read-more-news').forEach(button => {
        button.addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.style.cssText = `
                position: absolute;
                border-radius: 50%;
                transform: scale(0);
                animation: ripple 0.6s linear;
                background-color: rgba(255, 255, 255, 0.3);
                width: ${size}px;
                height: ${size}px;
                left: ${x}px;
                top: ${y}px;
            `;
            
            this.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });

    // Add CSS for ripple animation
    const rippleStyle = document.createElement('style');
    rippleStyle.textContent = `
        @keyframes ripple {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
        
        .cta-btn, .btn-read-more-news {
            position: relative;
            overflow: hidden;
        }
    `;
    document.head.appendChild(rippleStyle);
}

// Initialize all functions when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    // Initialize all components
    initializeLoadingScreen();
    initializeHeroAnimations();
    initializeSmoothScrolling();
    initializeNavbarScrollEffect();
    initializeScrollAnimations();
    initializeParallaxEffect();
    initializeHoverEffects();
    createFloatingElements();
    initializeFooterAnimations();
    initializeInteractiveElements();
    initializeGalleryEffects();
    initializeInteractiveCursor();
    initializeNewsAnimations();
    initializeSubsidiaryAnimations();
    initializeScrollObserver();
    initializeCTAAnimations();
    initializeRippleEffect();
    
    // Start auto-change timer for hero content
    if (window.heroContentData && window.heroContentData.length > 1) {
        setInterval(changeHeroContent, 5000);
    }
    
    // Auto-change gallery
    setInterval(() => changeSlide(1), 4000);
});

// Update total slides from PHP if available
if (typeof window.totalSlides !== 'undefined') {
    totalSlides = window.totalSlides;
}