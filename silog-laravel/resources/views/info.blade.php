@extends('layouts.app')

@section('title', 'Info - SILOG')

@section('content')
<div class="min-h-screen bg-white">
    <!-- Hero Section -->
    <section class="hero bg-gradient-to-br from-red-50 to-gray-50 py-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="hero-content max-w-4xl">
                <!-- Breadcrumb -->
                <div class="breadcrumb flex items-center text-gray-600 text-sm mb-8">
                    <a href="{{ url('/') }}" class="hover:text-red-500 transition-colors duration-300">Beranda</a>
                    <i class="fas fa-chevron-right mx-2 text-xs"></i>
                    <span class="text-gray-900 font-medium">Info</span>
                </div>
                
                <h1 class="hero-title text-4xl md:text-6xl font-black text-gray-900 mb-6 leading-tight">
                    Info Terkini
                </h1>
                <p class="hero-subtitle text-xl text-gray-600 leading-relaxed">
                    Dapatkan berita terbaru dan dokumentasi aktivitas SILOG
                </p>
            </div>
        </div>
    </section>

    <!-- Info Section -->
    <section class="info-section py-20 bg-white" id="info">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="section-title text-4xl md:text-5xl font-bold text-center text-gray-900 mb-4 relative">
                Informasi SILOG
            </h2>
            <p class="section-subtitle text-xl text-gray-600 text-center max-w-3xl mx-auto mb-16">
                Temukan berita terkini dan dokumentasi aktivitas perusahaan
            </p>
            
            <!-- Tabs -->
            <div class="info-tabs flex flex-wrap justify-center gap-4 mb-12">
                <button class="info-tab bg-red-500 text-white border-2 border-red-500 px-6 py-3 rounded-full font-semibold transition-all duration-300 hover:bg-red-600 active" onclick="switchTab('berita')">
                    Berita
                </button>
                <button class="info-tab bg-white border-2 border-gray-300 px-6 py-3 rounded-full font-semibold text-gray-600 transition-all duration-300 hover:border-red-500 hover:text-red-500" onclick="switchTab('galeri')">
                    Galeri
                </button>
            </div>
            
            <!-- Berita Content -->
            <div id="berita" class="info-content active">
                <div class="filter-section flex flex-wrap justify-between items-center mb-8 gap-4">
                    <div class="filter-options flex flex-wrap gap-2">
                        <button class="filter-btn bg-red-500 text-white px-4 py-2 rounded-full text-sm font-medium transition-all duration-300 active" onclick="filterNews('all')">Semua</button>
                        <button class="filter-btn bg-white border border-gray-300 text-gray-600 px-4 py-2 rounded-full text-sm font-medium transition-all duration-300 hover:border-red-500 hover:text-red-500" onclick="filterNews('penghargaan')">Penghargaan</button>
                        <button class="filter-btn bg-white border border-gray-300 text-gray-600 px-4 py-2 rounded-full text-sm font-medium transition-all duration-300 hover:border-red-500 hover:text-red-500" onclick="filterNews('kerjasama')">Kerjasama</button>
                        <button class="filter-btn bg-white border border-gray-300 text-gray-600 px-4 py-2 rounded-full text-sm font-medium transition-all duration-300 hover:border-red-500 hover:text-red-500" onclick="filterNews('inovasi')">Inovasi</button>
                        <button class="filter-btn bg-white border border-gray-300 text-gray-600 px-4 py-2 rounded-full text-sm font-medium transition-all duration-300 hover:border-red-500 hover:text-red-500" onclick="filterNews('ekspansi')">Ekspansi</button>
                        <button class="filter-btn bg-white border border-gray-300 text-gray-600 px-4 py-2 rounded-full text-sm font-medium transition-all duration-300 hover:border-red-500 hover:text-red-500" onclick="filterNews('sosial')">Sosial</button>
                        <button class="filter-btn bg-white border border-gray-300 text-gray-600 px-4 py-2 rounded-full text-sm font-medium transition-all duration-300 hover:border-red-500 hover:text-red-500" onclick="filterNews('teknologi')">Teknologi</button>
                    </div>
                    <div class="search-box relative w-full md:w-64">
                        <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        <input type="text" placeholder="Cari berita..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-full focus:outline-none focus:border-red-500 transition-colors duration-300">
                    </div>
                </div>
                
                <div class="news-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- News Card 1 -->
                    <div class="news-card bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:border-red-300 cursor-pointer" data-category="penghargaan">
                        <div class="news-image h-64 relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&h=400&fit=crop" alt="Berita 1" class="w-full h-full object-cover transition-transform duration-500">
                            <div class="news-date absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-sm font-semibold">15 November 2024</div>
                            <div class="news-category absolute top-4 left-4 bg-black bg-opacity-70 text-white px-3 py-1 rounded-full text-sm font-semibold">Penghargaan</div>
                        </div>
                        <div class="news-content p-6">
                            <h3 class="news-title text-xl font-bold text-gray-900 mb-3 line-height-tight">SILOG Raih Penghargaan Perusahaan Logistik Terbaik 2024</h3>
                            <p class="news-excerpt text-gray-600 leading-relaxed mb-4">SILOG berhasil meraih penghargaan sebagai Perusahaan Logistik Terbaik tahun 2024 dalam ajang Indonesia Logistics Awards...</p>
                            <div class="news-actions flex justify-between items-center">
                                <a href="#" class="read-more inline-flex items-center text-red-500 font-semibold text-sm transition-all duration-300 hover:gap-2">
                                    Baca Selengkapnya
                                    <span class="ml-1 transition-all duration-300">→</span>
                                </a>
                                <a href="#" class="download-btn inline-flex items-center text-gray-500 font-semibold text-sm transition-all duration-300 hover:text-red-500">
                                    <i class="fas fa-download mr-1"></i> Unduh
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- News Card 2 -->
                    <div class="news-card bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:border-red-300 cursor-pointer" data-category="kerjasama">
                        <div class="news-image h-64 relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=600&h=400&fit=crop" alt="Berita 2" class="w-full h-full object-cover transition-transform duration-500">
                            <div class="news-date absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-sm font-semibold">10 November 2024</div>
                            <div class="news-category absolute top-4 left-4 bg-black bg-opacity-70 text-white px-3 py-1 rounded-full text-sm font-semibold">Kerjasama</div>
                        </div>
                        <div class="news-content p-6">
                            <h3 class="news-title text-xl font-bold text-gray-900 mb-3 line-height-tight">Kerjasama Strategis dengan Pelabuhan Tanjung Priok</h3>
                            <p class="news-excerpt text-gray-600 leading-relaxed mb-4">SILOG menandatangani MoU kerjasama strategis dengan Pelabuhan Tanjung Priok untuk meningkatkan efisiensi distribusi...</p>
                            <div class="news-actions flex justify-between items-center">
                                <a href="#" class="read-more inline-flex items-center text-red-500 font-semibold text-sm transition-all duration-300 hover:gap-2">
                                    Baca Selengkapnya
                                    <span class="ml-1 transition-all duration-300">→</span>
                                </a>
                                <a href="#" class="download-btn inline-flex items-center text-gray-500 font-semibold text-sm transition-all duration-300 hover:text-red-500">
                                    <i class="fas fa-download mr-1"></i> Unduh
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- News Card 3 -->
                    <div class="news-card bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:border-red-300 cursor-pointer" data-category="inovasi">
                        <div class="news-image h-64 relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=600&h=400&fit=crop" alt="Berita 3" class="w-full h-full object-cover transition-transform duration-500">
                            <div class="news-date absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-sm font-semibold">5 November 2024</div>
                            <div class="news-category absolute top-4 left-4 bg-black bg-opacity-70 text-white px-3 py-1 rounded-full text-sm font-semibold">Inovasi</div>
                        </div>
                        <div class="news-content p-6">
                            <h3 class="news-title text-xl font-bold text-gray-900 mb-3 line-height-tight">Peluncuran Sistem Tracking Digital Terbaru</h3>
                            <p class="news-excerpt text-gray-600 leading-relaxed mb-4">SILOG memperkenalkan sistem tracking digital terbaru yang memungkinkan pelanggan memantau pengiriman secara real-time...</p>
                            <div class="news-actions flex justify-between items-center">
                                <a href="#" class="read-more inline-flex items-center text-red-500 font-semibold text-sm transition-all duration-300 hover:gap-2">
                                    Baca Selengkapnya
                                    <span class="ml-1 transition-all duration-300">→</span>
                                </a>
                                <a href="#" class="download-btn inline-flex items-center text-gray-500 font-semibold text-sm transition-all duration-300 hover:text-red-500">
                                    <i class="fas fa-download mr-1"></i> Unduh
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Pagination -->
                <div class="pagination flex justify-center items-center mt-12 gap-2">
                    <button class="page-btn w-10 h-10 flex items-center justify-center bg-white border border-gray-300 rounded-full font-semibold text-gray-600 transition-all duration-300 hover:bg-red-500 hover:text-white hover:border-red-500">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="page-btn w-10 h-10 flex items-center justify-center bg-red-500 text-white border border-red-500 rounded-full font-semibold transition-all duration-300 active">1</button>
                    <button class="page-btn w-10 h-10 flex items-center justify-center bg-white border border-gray-300 rounded-full font-semibold text-gray-600 transition-all duration-300 hover:bg-red-500 hover:text-white hover:border-red-500">2</button>
                    <button class="page-btn w-10 h-10 flex items-center justify-center bg-white border border-gray-300 rounded-full font-semibold text-gray-600 transition-all duration-300 hover:bg-red-500 hover:text-white hover:border-red-500">3</button>
                    <span class="page-btn w-10 h-10 flex items-center justify-center text-gray-400">...</span>
                    <button class="page-btn w-10 h-10 flex items-center justify-center bg-white border border-gray-300 rounded-full font-semibold text-gray-600 transition-all duration-300 hover:bg-red-500 hover:text-white hover:border-red-500">8</button>
                    <button class="page-btn w-10 h-10 flex items-center justify-center bg-white border border-gray-300 rounded-full font-semibold text-gray-600 transition-all duration-300 hover:bg-red-500 hover:text-white hover:border-red-500">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
            
            <!-- Galeri Content -->
            <div id="galeri" class="info-content hidden">
                <div class="gallery-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Gallery Item 1 -->
                    <div class="gallery-item relative rounded-2xl overflow-hidden cursor-pointer transition-all duration-300 hover:scale-105 hover:shadow-xl" onclick="openGalleryModal('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=1200&h=800&fit=crop')">
                        <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=400&h=300&fit=crop" alt="Galeri 1" class="w-full h-64 object-cover transition-transform duration-500">
                        <div class="gallery-overlay absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                            <div class="gallery-caption text-white font-semibold text-lg transform translate-y-4 hover:translate-y-0 transition-transform duration-300">
                                Peluncuran Armada Baru SILOG
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Item 2 -->
                    <div class="gallery-item relative rounded-2xl overflow-hidden cursor-pointer transition-all duration-300 hover:scale-105 hover:shadow-xl" onclick="openGalleryModal('https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=1200&h=800&fit=crop')">
                        <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=400&h=300&fit=crop" alt="Galeri 2" class="w-full h-64 object-cover transition-transform duration-500">
                        <div class="gallery-overlay absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                            <div class="gallery-caption text-white font-semibold text-lg transform translate-y-4 hover:translate-y-0 transition-transform duration-300">
                                Fasilitas Gudang Modern
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Item 3 -->
                    <div class="gallery-item relative rounded-2xl overflow-hidden cursor-pointer transition-all duration-300 hover:scale-105 hover:shadow-xl" onclick="openGalleryModal('https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=1200&h=800&fit=crop')">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=400&h=300&fit=crop" alt="Galeri 3" class="w-full h-64 object-cover transition-transform duration-500">
                        <div class="gallery-overlay absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                            <div class="gallery-caption text-white font-semibold text-lg transform translate-y-4 hover:translate-y-0 transition-transform duration-300">
                                Tim Profesional SILOG
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sub Navigation Cards Section -->
    <section class="subnav-section py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="section-title text-4xl md:text-5xl font-bold text-center text-gray-900 mb-4 relative">
                Jelajahi Informasi Perusahaan
            </h2>
            <p class="section-subtitle text-xl text-gray-600 text-center max-w-3xl mx-auto mb-16">
                Pelajari lebih lanjut tentang berbagai aspek SILOG
            </p>
            
            <div class="cards-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="content-card bg-white rounded-2xl p-8 shadow-lg border border-gray-200 transition-all duration-500 hover:-translate-y-2 hover:shadow-xl hover:border-red-300 cursor-pointer">
                    <div class="card-icon w-20 h-20 bg-gradient-to-br from-red-500 to-red-600 rounded-2xl flex items-center justify-center mb-6 relative overflow-hidden">
                        <i class="fas fa-history text-white text-2xl"></i>
                    </div>
                    <h3 class="card-title text-xl font-bold text-gray-900 mb-4 transition-colors duration-300">History</h3>
                    <p class="card-description text-gray-600 leading-relaxed mb-6">
                        Perjalanan panjang SILOG dari masa ke masa dalam menjadi solusi logistik terdepan di Indonesia sejak tahun 1957.
                    </p>
                    <a href="{{ route('sejarah') }}" class="card-link inline-flex items-center text-red-500 font-semibold text-sm transition-all duration-300 hover:gap-2">
                        Pelajari Lebih Lanjut
                        <span class="ml-1 transition-all duration-300">→</span>
                    </a>
                </div>
                
                <!-- Card 2 -->
                <div class="content-card bg-white rounded-2xl p-8 shadow-lg border border-gray-200 transition-all duration-500 hover:-translate-y-2 hover:shadow-xl hover:border-red-300 cursor-pointer">
                    <div class="card-icon w-20 h-20 bg-gradient-to-br from-red-500 to-red-600 rounded-2xl flex items-center justify-center mb-6 relative overflow-hidden">
                        <i class="fas fa-building text-white text-2xl"></i>
                    </div>
                    <h3 class="card-title text-xl font-bold text-gray-900 mb-4 transition-colors duration-300">Profil</h3>
                    <p class="card-description text-gray-600 leading-relaxed mb-6">
                        Mengenal lebih dekat identitas, struktur organisasi, dan bisnis SILOG sebagai bagian dari Semen Indonesia Group.
                    </p>
                    <a href="{{ route('profil') }}" class="card-link inline-flex items-center text-red-500 font-semibold text-sm transition-all duration-300 hover:gap-2">
                        Pelajari Lebih Lanjut
                        <span class="ml-1 transition-all duration-300">→</span>
                    </a>
                </div>
                
                <!-- Card 3 -->
                <div class="content-card bg-white rounded-2xl p-8 shadow-lg border border-gray-200 transition-all duration-500 hover:-translate-y-2 hover:shadow-xl hover:border-red-300 cursor-pointer">
                    <div class="card-icon w-20 h-20 bg-gradient-to-br from-red-500 to-red-600 rounded-2xl flex items-center justify-center mb-6 relative overflow-hidden">
                        <i class="fas fa-bullseye text-white text-2xl"></i>
                    </div>
                    <h3 class="card-title text-xl font-bold text-gray-900 mb-4 transition-colors duration-300">Visi & Misi</h3>
                    <p class="card-description text-gray-600 leading-relaxed mb-6">
                        Visi dan misi yang menjadi arah strategis SILOG dalam memberikan solusi logistik terbaik untuk Indonesia.
                    </p>
                    <a href="{{ route('visi-misi') }}" class="card-link inline-flex items-center text-red-500 font-semibold text-sm transition-all duration-300 hover:gap-2">
                        Pelajari Lebih Lanjut
                        <span class="ml-1 transition-all duration-300">→</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section py-20 bg-gradient-to-r from-red-500 to-red-600">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="cta-title text-3xl md:text-4xl font-black text-white mb-6">
                Tetap Terhubung dengan SILOG
            </h2>
            <p class="cta-description text-xl text-white/90 mb-10 leading-relaxed">
                Dapatkan berita terkini dan informasi penting langsung di inbox Anda
            </p>
            <div class="cta-buttons flex flex-col sm:flex-row gap-6 justify-center">
                <a href="#" class="cta-button bg-white text-red-500 px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300 hover:-translate-y-1 hover:shadow-lg relative overflow-hidden">
                    Berlangganan Newsletter
                </a>
                <a href="#" class="cta-button bg-transparent border-2 border-white text-white px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300 hover:bg-white hover:text-red-500">
                    Follow Media Sosial
                </a>
            </div>
        </div>
    </section>
</div>

<!-- Gallery Modal -->
<div id="galleryModal" class="modal fixed inset-0 z-50 hidden">
    <div class="modal-overlay absolute inset-0 bg-black bg-opacity-70 backdrop-blur-sm"></div>
    <div class="modal-content relative bg-white rounded-2xl max-w-4xl mx-auto my-12 max-h-[90vh] overflow-y-auto">
        <div class="modal-header relative h-96 rounded-t-2xl overflow-hidden">
            <img id="galleryImage" src="" alt="Gallery Image" class="w-full h-full object-cover">
            <span class="close absolute top-6 right-6 text-white text-4xl cursor-pointer bg-black bg-opacity-50 w-12 h-12 rounded-full flex items-center justify-center transition-all duration-300 hover:bg-red-500 hover:rotate-90" onclick="closeModal('galleryModal')">&times;</span>
        </div>
    </div>
</div>

<script>
    // Tab switching function
    function switchTab(tabName) {
        // Hide all tab contents
        document.querySelectorAll('.info-content').forEach(content => {
            content.classList.add('hidden');
            content.classList.remove('active');
        });
        
        // Remove active class from all tabs
        document.querySelectorAll('.info-tab').forEach(tab => {
            tab.classList.remove('active', 'bg-red-500', 'text-white', 'border-red-500');
            tab.classList.add('bg-white', 'text-gray-600', 'border-gray-300');
        });
        
        // Show selected tab content
        document.getElementById(tabName).classList.remove('hidden');
        document.getElementById(tabName).classList.add('active');
        
        // Add active class to clicked tab
        event.target.classList.add('active', 'bg-red-500', 'text-white', 'border-red-500');
        event.target.classList.remove('bg-white', 'text-gray-600', 'border-gray-300');
    }

    // Filter news function
    function filterNews(category) {
        // Update active filter button
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.classList.remove('active', 'bg-red-500', 'text-white');
            btn.classList.add('bg-white', 'border-gray-300', 'text-gray-600');
        });
        event.target.classList.add('active', 'bg-red-500', 'text-white');
        event.target.classList.remove('bg-white', 'border-gray-300', 'text-gray-600');
        
        // Show/hide news cards based on category
        document.querySelectorAll('.news-card').forEach(card => {
            if (category === 'all' || card.dataset.category === category) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    }

    // Modal functions
    function openGalleryModal(imageSrc) {
        document.getElementById('galleryImage').src = imageSrc;
        document.getElementById('galleryModal').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeModal(modalId) {
        document.getElementById(modalId).classList.add('hidden');
        document.body.style.overflow = 'auto';
    }

    // Close modal when clicking outside
    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('modal-overlay')) {
            event.target.closest('.modal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
    });

    // Add hover effects for news cards
    document.querySelectorAll('.news-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            const img = this.querySelector('img');
            img.style.transform = 'scale(1.05)';
        });
        
        card.addEventListener('mouseleave', function() {
            const img = this.querySelector('img');
            img.style.transform = 'scale(1)';
        });
    });

    // Add hover effects for content cards
    document.querySelectorAll('.content-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            const icon = this.querySelector('.card-icon');
            icon.style.transform = 'scale(1.1) rotate(5deg)';
        });
        
        card.addEventListener('mouseleave', function() {
            const icon = this.querySelector('.card-icon');
            icon.style.transform = 'scale(1) rotate(0deg)';
        });
    });
</script>

<style>
    /* Custom styles for section title underline */
    .section-title::after {
        content: '';
        position: absolute;
        bottom: -12px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #F5333F, #d42834);
        border-radius: 2px;
    }

    /* Custom styles for content card top border */
    .content-card {
        position: relative;
        overflow: hidden;
    }

    .content-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #F5333F, #d42834);
        transform: scaleX(0);
        transition: transform 0.5s ease;
    }

    .content-card:hover::before {
        transform: scaleX(1);
    }

    /* Custom styles for card icon shine effect */
    .card-icon::after {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(45deg, transparent, rgba(255,255,255,0.2), transparent);
        animation: iconShine 3s ease-in-out infinite;
    }

    @keyframes iconShine {
        0% { transform: translateX(-100%) translateY(-100%) rotate(30deg); }
        100% { transform: translateX(100%) translateY(100%) rotate(30deg); }
    }

    /* Custom styles for CTA button shine effect */
    .cta-button::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transition: left 0.5s ease;
    }

    .cta-button:hover::before {
        left: 100%;
    }
</style>
@endsection