// Gallery only
let currentSlide = 0;
let totalSlides = 4;

function changeSlide(direction) {
    const track = document.getElementById('galleryTrack');
    if (!track) return;
    currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
    track.style.transform = `translateX(-${currentSlide * 100}%)`;
}

if (typeof window.totalSlides !== 'undefined') totalSlides = window.totalSlides;