<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SILOG - Semen Indonesia Logistik</title>
    <link href="{{ asset('css/critical.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" media="print" onload="this.media='all'">
</head>
<body>


    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <img src="{{ asset('assets/images/logo.png') }}" alt="SILOG Logo" class="logo">
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link">Beranda</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link">Tentang <i class="fas fa-chevron-down"></i></a>
                    <div class="dropdown">
                        <a href="#history">History</a>
                        <a href="#profile">Profil</a>
                        <a href="#vision">Visi & Misi</a>
                        <a href="#policy">Kebijakan Perusahaan</a>
                        <a href="#governance">Tata Kelola Perusahaan</a>
                        <a href="#hr">Sumber Daya Manusia</a>
                        <a href="#management">Direksi & Komisaris</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#business" class="nav-link">Bisnis <i class="fas fa-chevron-down"></i></a>
                    <div class="dropdown">
                        <a href="#logistics">Logistik</a>
                        <a href="#construction">Konstruksi</a>
                        <a href="#distribution">Distribusi</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#information" class="nav-link">Info<i class="fas fa-chevron-down"></i></a>
                    <div class="dropdown">
                        <a href="#news">Berita</a>
                        <a href="#gallery">Galeri</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#network" class="nav-link">Jaringan <i class="fas fa-chevron-down"></i></a>
                    <div class="dropdown">
                        <a href="#portfolio">Portofolio</a>
                        <a href="#warehouse">Gudang</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#grub" class="nav-link">Grub</a>
                </li>
                <li class="nav-item">
                    <a href="#karir" class="nav-link">Karir</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Kontak</a>
                </li>
            </ul>
            <button class="mobile-menu-toggle">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-container">
            <div class="hero-content">
                @if(isset($contents['hero']) && $contents['hero']->count() > 0)
                    <h1 class="hero-title primary-font" id="heroTitle">{{ $contents['hero']->first()->title }}</h1>
                    <p class="hero-subtitle secondary-font" id="heroSubtitle">{{ $contents['hero']->first()->subtitle }}</p>
                @else
                    <h1 class="hero-title primary-font" id="heroTitle">Solusi Logistik Terdepan</h1>
                    <p class="hero-subtitle secondary-font" id="heroSubtitle">Solusi terpercaya untuk kebutuhan logistik, konstruksi, dan distribusi di seluruh Indonesia.</p>
                @endif
                <a href="#about" class="cta-button secondary-font" id="ctaButton">Jelajahi Layanan Kami</a>
            </div>
            <div class="hero-image" id="heroImage">
                @if(isset($contents['hero']) && $contents['hero']->count() > 0 && $contents['hero']->first()->image)
                    <img src="{{ $contents['hero']->first()->image }}" alt="SILOG Logistics" id="heroImg">
                @else
                    <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=800&h=600&fit=crop" alt="SILOG Logistics" id="heroImg">
                @endif
            </div>
        </div>
    </section>
    
    <!-- About Section -->
    <section class="about-section" id="about">
        <div class="container">
            <h2 class="section-title fade-in">Tentang SILOG</h2>
            <p class="section-subtitle fade-in">Membangun Indonesia melalui solusi logistik yang inovatif dan berkelanjutan</p>
            
            <div class="about-grid">
                @if(isset($contents['about']))
                    @foreach($contents['about'] as $about)
                    <div class="about-card fade-in">
                        <div class="card-icon">
                            <i class="{{ $about->icon }}"></i>
                        </div>
                        <h3 class="card-title">{{ $about->title }}</h3>
                        <p class="card-text">{{ $about->description }}</p>
                    </div>
                    @endforeach
                @else
                    <div class="about-card fade-in">
                        <div class="card-icon"><i class="fas fa-history"></i></div>
                        <h3 class="card-title">Sejarah Panjang</h3>
                        <p class="card-text">Berdiri sejak tahun 1957, SILOG telah menjadi bagian integral dari pertumbuhan industri Indonesia dengan pengalaman lebih dari 6 dekade dalam layanan logistik.</p>
                    </div>
                    
                    <div class="about-card fade-in">
                        <div class="card-icon"><i class="fas fa-award"></i></div>
                        <h3 class="card-title">Standar Kualitas</h3>
                        <p class="card-text">Berkomitmen memberikan layanan terbaik dengan standar internasional dan teknologi terdepan untuk memenuhi kebutuhan pelanggan.</p>
                    </div>
                    
                    <div class="about-card fade-in">
                        <div class="card-icon"><i class="fas fa-globe-asia"></i></div>
                        <h3 class="card-title">Jangkauan Nasional</h3>
                        <p class="card-text">Melayani seluruh Indonesia dengan jaringan distribusi yang luas dan infrastruktur logistik yang modern dan terintegrasi.</p>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section" id="services">
        <div class="container">
            <h2 class="section-title fade-in">Layanan Utama</h2>
            <p class="section-subtitle fade-in">Solusi terintegrasi untuk kebutuhan logistik, konstruksi, dan distribusi</p>
            
            <div class="services-grid">
                @if(isset($contents['service']))
                    @foreach($contents['service'] as $service)
                    <div class="service-card fade-in">
                        <div class="service-image"></div>
                        <div class="service-content">
                            <h3 class="service-title">{{ $service->title }}</h3>
                            <p class="service-description">{{ $service->description }}</p>
                            <a href="{{ $service->link }}" class="service-link">Pelajari Lebih Lanjut <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="service-card fade-in">
                        <div class="service-image"></div>
                        <div class="service-content">
                            <h3 class="service-title">Logistik</h3>
                            <p class="service-description">Layanan logistik terintegrasi dengan teknologi terdepan untuk memastikan pengiriman yang efisien dan tepat waktu ke seluruh Indonesia.</p>
                            <a href="#logistics" class="service-link">Pelajari Lebih Lanjut <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="service-card fade-in">
                        <div class="service-image"></div>
                        <div class="service-content">
                            <h3 class="service-title">Konstruksi & Manufaktur</h3>
                            <p class="service-description">Solusi konstruksi dan manufaktur dengan standar kualitas tinggi untuk mendukung proyek-proyek pembangunan nasional.</p>
                            <a href="#construction" class="service-link">Pelajari Lebih Lanjut <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="service-card fade-in">
                        <div class="service-image"></div>
                        <div class="service-content">
                            <h3 class="service-title">Distribusi</h3>
                            <p class="service-description">Jaringan distribusi yang luas dan efisien untuk memastikan produk sampai ke tangan konsumen dengan kondisi terbaik.</p>
                            <a href="#distribution" class="service-link">Pelajari Lebih Lanjut <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- Subsidiaries Section -->
    <section class="subsidiaries-section" id="subsidiaries">
        <div class="container">
            <h2 class="section-title fade-in">Anak Perusahaan</h2>
            <p class="section-subtitle fade-in">Grup SILOG yang terintegrasi untuk melayani berbagai kebutuhan industri</p>
            
            <div class="subsidiaries-grid">
                @if(isset($contents['subsidiary']))
                    @foreach($contents['subsidiary'] as $subsidiary)
                    <div class="subsidiary-card fade-in">
                        <div class="subsidiary-logo"><i class="{{ $subsidiary->icon }}"></i></div>
                        <h3 class="card-title">{{ $subsidiary->title }}</h3>
                        <p class="card-text">{{ $subsidiary->description }}</p>
                    </div>
                    @endforeach
                @else
                    <div class="subsidiary-card fade-in">
                        <div class="subsidiary-logo"><i class="fas fa-shipping-fast"></i></div>
                        <h3 class="card-title">SILOG Transport</h3>
                        <p class="card-text">Spesialis transportasi dan pengiriman</p>
                    </div>
                    
                    <div class="subsidiary-card fade-in">
                        <div class="subsidiary-logo"><i class="fas fa-warehouse"></i></div>
                        <h3 class="card-title">SILOG Warehouse</h3>
                        <p class="card-text">Manajemen gudang dan penyimpanan</p>
                    </div>
                    
                    <div class="subsidiary-card fade-in">
                        <div class="subsidiary-logo"><i class="fas fa-tools"></i></div>
                        <h3 class="card-title">SILOG Construction</h3>
                        <p class="card-text">Layanan konstruksi dan manufaktur</p>
                    </div>
                    
                    <div class="subsidiary-card fade-in">
                        <div class="subsidiary-logo"><i class="fas fa-network-wired"></i></div>
                        <h3 class="card-title">SILOG Solutions</h3>
                        <p class="card-text">Solusi teknologi dan inovasi</p>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- Enhanced News Section -->
    <section class="news-section" id="news">
        <div class="container">
            <h2 class="section-title fade-in">Berita Terbaru</h2>
            <p class="section-subtitle fade-in">Update terkini dari dunia SILOG dan industri logistik</p>
            
            <div class="news-grid">
                @if(isset($contents['news']))
                    @foreach($contents['news'] as $news)
                    <div class="news-card fade-in">
                        <div class="news-image"></div>
                        <div class="news-content">
                            <div class="news-date">{{ $news->date }}</div>
                            <h3 class="news-title">{{ $news->title }}</h3>
                            <p class="news-excerpt">{{ $news->description }}</p>
                            <a href="{{ $news->link }}" class="news-read-more">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="news-card fade-in">
                        <div class="news-image"></div>
                        <div class="news-content">
                            <div class="news-date">28 Agustus 2025</div>
                            <h3 class="news-title">SILOG Luncurkan Teknologi AI untuk Optimasi Rute Distribusi</h3>
                            <p class="news-excerpt">Inovasi terbaru SILOG dalam menggunakan artificial intelligence untuk meningkatkan efisiensi distribusi dan mengurangi waktu pengiriman hingga 30% lebih cepat.</p>
                            <a href="#news-1" class="news-read-more">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="news-card fade-in">
                        <div class="news-image"></div>
                        <div class="news-content">
                            <div class="news-date">25 Agustus 2025</div>
                            <h3 class="news-title">Ekspansi Gudang Baru di Wilayah Indonesia Timur</h3>
                            <p class="news-excerpt">SILOG membuka fasilitas gudang modern baru di Papua untuk meningkatkan pelayanan logistik di wilayah Indonesia Timur dengan kapasitas 50.000 ton.</p>
                            <a href="#news-2" class="news-read-more">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="news-card fade-in">
                        <div class="news-image"></div>
                        <div class="news-content">
                            <div class="news-date">22 Agustus 2025</div>
                            <h3 class="news-title">Kemitraan Strategis dengan BUMN untuk Proyek IKN</h3>
                            <p class="news-excerpt">SILOG menjalin kemitraan strategis untuk mendukung pembangunan Ibu Kota Nusantara dengan layanan logistik terintegrasi senilai Rp 2.5 triliun.</p>
                            <a href="#news-3" class="news-read-more">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                @endif
            </div>
            
            <div class="news-button-container">
                <a href="#all-news" class="btn-read-more-news">
                    <i class="fas fa-newspaper"></i>
                    Baca Berita Lainnya
                </a>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-section" id="gallery">
        <div class="container">
            <h2 class="section-title fade-in">Galeri</h2>
            <p class="section-subtitle fade-in">Dokumentasi kegiatan dan fasilitas SILOG</p>
            
            <div class="gallery-slider">
                <div class="gallery-track" id="galleryTrack">
                    @if(isset($contents['gallery']))
                        @foreach($contents['gallery'] as $gallery)
                        <div class="gallery-slide" style="background-image: url('{{ $gallery->image }}');">
                            <div class="gallery-caption">
                                <h3>{{ $gallery->title }}</h3>
                                <p>{{ $gallery->description }}</p>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <div class="gallery-slide" style="background-image: url('https://images.unsplash.com/photo-1566576912321-d58ddd7a6088?w=1200&h=400&fit=crop');">
                            <div class="gallery-caption">
                                <h3>Fasilitas Gudang Modern SILOG</h3>
                                <p>Gudang berteknologi tinggi dengan sistem otomatis untuk efisiensi maksimal</p>
                            </div>
                        </div>
                        <div class="gallery-slide" style="background-image: url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=1200&h=400&fit=crop');">
                            <div class="gallery-caption">
                                <h3>Armada Transportasi Terintegrasi</h3>
                                <p>Fleet modern dengan tracking real-time untuk pengiriman yang akurat</p>
                            </div>
                        </div>
                        <div class="gallery-slide" style="background-image: url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=1200&h=400&fit=crop');">
                            <div class="gallery-caption">
                                <h3>Proyek Konstruksi Skala Besar</h3>
                                <p>Pengalaman dalam menangani proyek infrastruktur dan konstruksi nasional</p>
                            </div>
                        </div>
                        <div class="gallery-slide" style="background-image: url('https://images.unsplash.com/photo-1552664730-d307ca884978?w=1200&h=400&fit=crop');">
                            <div class="gallery-caption">
                                <h3>Tim Profesional SILOG</h3>
                                <p>SDM berpengalaman dan terlatih untuk memberikan layanan terbaik</p>
                            </div>
                        </div>
                    @endif
                </div>
                <button class="gallery-nav gallery-prev" onclick="changeSlide(-1)">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="gallery-nav gallery-next" onclick="changeSlide(1)">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Enhanced CTA Section -->
    <section class="cta-section" id="cta">
        <div class="cta-content">
            <h2 class="cta-title">Siap Bermitra dengan SILOG?</h2>
            <p class="cta-subtitle">Hubungi kami sekarang untuk konsultasi gratis dan dapatkan solusi logistik terbaik untuk bisnis Anda</p>
            <div class="cta-buttons">
                <a href="#contact" class="cta-btn primary">
                    <i class="fas fa-phone"></i>
                    Hubungi Kami
                </a>
                <a href="#about" class="cta-btn secondary">
                    <i class="fas fa-info-circle"></i>
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
    </section>

     <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-grid">
                <div class="footer-brand">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="SILOG Logo" class="footer-logo">
                    <p class="footer-description secondary-font">
                        Solusi terpercaya untuk kebutuhan logistik, konstruksi, dan distribusi di seluruh Indonesia. Berpengalaman lebih dari 6 dekade dalam melayani industri nasional.
                    </p>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div class="footer-section">
                    <h4 class="primary-font">Bisnis</h4>
                    <ul class="footer-links secondary-font">
                        <li><a href="#logistics">Logistik</a></li>
                        <li><a href="#construction">Konstruksi</a></li>
                        <li><a href="#distribution">Distribusi</a></li>
                        <li><a href="#all-business">Semua Bisnis</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h4 class="primary-font">Informasi</h4>
                    <ul class="footer-links secondary-font">
                        <li><a href="#group">Grup</a></li>
                        <li><a href="#news">Berita</a></li>
                        <li><a href="#gallery">Galeri</a></li>
                        <li><a href="#contact">Kontak</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h4 class="primary-font">Jaringan</h4>
                    <ul class="footer-links secondary-font">
                        <li><a href="#portfolio">Portofolio</a></li>
                        <li><a href="#warehouse">Gudang</a></li>
                        <li><a href="#all-network">Semua Jaringan</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h4 class="primary-font">Kontak</h4>
                    <ul class="contact-info secondary-font">
                        <li><i class="fas fa-phone"></i> +62 21 1234 5678</li>
                        <li><i class="fas fa-envelope"></i> info@silog.co.id</li>
                        <li><i class="fas fa-map-marker-alt"></i> Jl. Raya Logistik No. 123<br>Jakarta Selatan 12345</li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="footer-copyright secondary-font">
                    © 2025 SILOG - Semen Indonesia Logistik. All rights reserved.
                </div>
                <div class="footer-links-bottom secondary-font">
                    <a href="#privacy">Privacy Policy</a>
                    <a href="#terms">Terms of Service</a>
                    <a href="#sitemap">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/none.js') }}" defer></script>
    <script>
        // Hero content data for rotation
        window.heroContentData = [
            @if(isset($contents['hero']) && $contents['hero']->count() > 0)
                @foreach($contents['hero'] as $hero)
                {
                    title: "{{ $hero->title }}",
                    subtitle: "{{ $hero->subtitle }}",
                    cta: "{{ $hero->link ?? 'Jelajahi Layanan Kami' }}",
                    image: "{{ $hero->image }}"
                }@if(!$loop->last),@endif
                @endforeach
            @else
            {
                title: "Solusi Logistik Terdepan",
                subtitle: "Solusi terpercaya untuk kebutuhan logistik, konstruksi, dan distribusi di seluruh Indonesia.",
                cta: "Jelajahi Layanan Kami",
                image: "https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=800&h=600&fit=crop"
            }
            @endif
        ];
        
        // Update gallery slide count
        @if(isset($contents['gallery']))
            const totalSlides = {{ $contents['gallery']->count() }};
        @else
            const totalSlides = 4;
        @endif
    </script>
</body>
</html>