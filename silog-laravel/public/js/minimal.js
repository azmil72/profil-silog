// Ultra minimal JS - hanya fungsi essential
let currentSlide = 0;
let totalSlides = 4;

// Gallery only
function changeSlide(direction) {
    const track = document.getElementById('galleryTrack');
    if (!track) return;
    currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
    track.style.transform = `translateX(-${currentSlide * 100}%)`;
}

// Loading screen only
window.addEventListener('load', () => {
    const loading = document.getElementById('loading');
    if (loading) setTimeout(() => loading.style.display = 'none', 300);
});

// Smooth scroll only
document.addEventListener('click', (e) => {
    const anchor = e.target.closest('a[href^="#"]');
    if (anchor) {
        e.preventDefault();
        const target = document.querySelector(anchor.getAttribute('href'));
        target?.scrollIntoView({ behavior: 'smooth' });
    }
});

// Update slides from PHP
if (typeof window.totalSlides !== 'undefined') totalSlides = window.totalSlides;