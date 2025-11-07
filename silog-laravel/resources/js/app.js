import './bootstrap';

// Gallery slider functionality
let currentSlide = 0;
const totalSlides = window.totalSlides || 4;

function changeSlide(direction) {
    currentSlide += direction;
    if (currentSlide >= totalSlides) currentSlide = 0;
    if (currentSlide < 0) currentSlide = totalSlides - 1;
    
    const track = document.getElementById('galleryTrack');
    if (track) {
        track.style.transform = `translateX(-${currentSlide * 100}%)`;
    }
}

// Auto-slide gallery
setInterval(() => {
    changeSlide(1);
}, 5000);

// Make changeSlide available globally
window.changeSlide = changeSlide;