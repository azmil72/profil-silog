// Optimized JavaScript - Minimal animations for better performance
let currentHeroIndex = 0;
let currentSlide = 0;
let totalSlides = 4;

// Debounce function for scroll events
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

// Optimized hero content change
function changeHeroContent() {
    if (!window.heroContentData || window.heroContentData.length <= 1) return;
    
    const elements = {
        title: document.getElementById('heroTitle'),
        subtitle: document.getElementById('heroSubtitle'),
        button: document.getElementById('ctaButton'),
        image: document.getElementById('heroImg')
    };
    
    if (!elements.title) return;
    
    currentHeroIndex = (currentHeroIndex + 1) % window.heroContentData.length;
    const content = window.heroContentData[currentHeroIndex];
    
    // Simple fade transition
    Object.values(elements).forEach(el => el && (el.style.opacity = '0.5'));
    
    setTimeout(() => {
        elements.title.textContent = content.title;
        elements.subtitle.textContent = content.subtitle;
        elements.button.textContent = content.cta;
        elements.image.src = content.image;
        
        Object.values(elements).forEach(el => el && (el.style.opacity = '1'));
    }, 300);
}

// Optimized gallery
function changeSlide(direction) {
    const track = document.getElementById('galleryTrack');
    if (!track) return;
    
    currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
    track.style.transform = `translateX(-${currentSlide * 100}%)`;
}

// Optimized scroll animations with Intersection Observer
function initializeScrollAnimations() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target); // Stop observing once animated
            }
        });
    }, { threshold: 0.1, rootMargin: '50px' });

    document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
}

// Optimized navbar scroll
const handleNavbarScroll = debounce(() => {
    const navbar = document.getElementById('navbar');
    if (navbar) {
        navbar.classList.toggle('scrolled', window.scrollY > 100);
    }
}, 10);

// Lazy loading for images
function initializeLazyLoading() {
    const images = document.querySelectorAll('img[data-src]');
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.removeAttribute('data-src');
                imageObserver.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));
}

// Smooth scrolling
function initializeSmoothScrolling() {
    document.addEventListener('click', (e) => {
        const anchor = e.target.closest('a[href^="#"]');
        if (anchor) {
            e.preventDefault();
            const target = document.querySelector(anchor.getAttribute('href'));
            target?.scrollIntoView({ behavior: 'smooth' });
        }
    });
}

// Loading screen
function initializeLoadingScreen() {
    window.addEventListener('load', () => {
        const loading = document.getElementById('loading');
        if (loading) {
            setTimeout(() => loading.classList.add('hidden'), 500);
        }
    });
}

// Initialize all optimized functions
document.addEventListener('DOMContentLoaded', function() {
    initializeLoadingScreen();
    initializeSmoothScrolling();
    initializeScrollAnimations();
    initializeLazyLoading();
    
    // Event listeners
    window.addEventListener('scroll', handleNavbarScroll, { passive: true });
    
    // Timers with longer intervals
    if (window.heroContentData?.length > 1) {
        setInterval(changeHeroContent, 8000); // Slower rotation
    }
    setInterval(() => changeSlide(1), 6000); // Slower gallery
});

// Update total slides
if (typeof window.totalSlides !== 'undefined') {
    totalSlides = window.totalSlides;
}