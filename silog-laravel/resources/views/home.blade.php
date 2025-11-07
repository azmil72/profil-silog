<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SILOG - Semen Indonesia Logistik</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animasi GSAP
            gsap.registerPlugin(ScrollTrigger);
            
            // Animasi hero section
            gsap.from('.hero-content', {
                duration: 1,
                y: 50,
                opacity: 0,
                ease: "power3.out"
            });
            
            gsap.from('.hero-image', {
                duration: 1,
                x: 50,
                opacity: 0,
                delay: 0.5,
                ease: "power3.out"
            });
            
            // Animasi fade in untuk sections
            gsap.utils.toArray('.animate-section').forEach(section => {
                gsap.from(section, {
                    scrollTrigger: {
                        trigger: section,
                        start: "top 80%",
                        end: "bottom 20%",
                        toggleActions: "play none none reverse"
                    },
                    y: 50,
                    opacity: 0,
                    duration: 1,
                    ease: "power2.out"
                });
            });
            
            // Animasi untuk cards
            gsap.utils.toArray('.animate-card').forEach(card => {
                gsap.from(card, {
                    scrollTrigger: {
                        trigger: card,
                        start: "top 85%",
                        toggleActions: "play none none reverse"
                    },
                    y: 30,
                    opacity: 0,
                    duration: 0.8,
                    stagger: 0.2,
                    ease: "power2.out"
                });
            });
            
            // Animasi untuk navbar
            const nav = document.querySelector('nav');
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    nav.classList.add('nav-scrolled');
                } else {
                    nav.classList.remove('nav-scrolled');
                }
            });
            
            // Mobile menu toggle
            const mobileMenuButton = document.querySelector('.mobile-menu-button');
            const mobileMenu = document.querySelector('.mobile-menu');
            
            if (mobileMenuButton) {
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        });
    </script>
    <style>
        /* Custom CSS untuk animasi dan tema merah */
        :root {
            --primary-red: #dc2626;
            --primary-red-dark: #b91c1c;
            --primary-red-light: #f87171;
            --accent-orange: #ea580c;
            --accent-yellow: #d97706;
        }
        
        .nav-scrolled {
            background-color: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        
        .floating-animation {
            animation: floating 3s ease-in-out infinite;
        }
        
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        
        .pulse-animation {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(220, 38, 38, 0.4); }
            70% { box-shadow: 0 0 0 10px rgba(220, 38, 38, 0); }
            100% { box-shadow: 0 0 0 0 rgba(220, 38, 38, 0); }
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, var(--primary-red) 0%, var(--accent-orange) 100%);
        }
        
        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .text-gradient {
            background: linear-gradient(135deg, var(--primary-red) 0%, var(--accent-orange) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .service-card {
            position: relative;
            overflow: hidden;
        }
        
        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-red), var(--accent-orange));
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s ease;
        }
        
        .service-card:hover::before {
            transform: scaleX(1);
        }
        
        .news-card {
            transition: all 0.3s ease;
        }
        
        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .news-card:hover .news-image {
            transform: scale(1.05);
        }
        
        .news-image {
            transition: transform 0.5s ease;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full top-0 z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <img src="{{ asset('assets/images/logo.png') }}" alt="SILOG Logo" class="h-10">
                <ul class="hidden md:flex space-x-8">
                    <li><a href="{{ url('/') }}" class="text-gray-700 hover:text-red-600 px-3 py-2 text-sm font-medium transition-colors duration-300">Beranda</a></li>
                    <li class="relative group">
                        <a href="#about" class="text-gray-700 hover:text-red-600 px-3 py-2 text-sm font-medium flex items-center transition-colors duration-300">Tentang <i class="fas fa-chevron-down ml-1"></i></a>
                        <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 border-t-4 border-red-600">
                            <a href="{{ route('sejarah') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-300">Sejarah</a>
                            <a href="{{ route('profil') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-300">Profil</a>
                            <a href="{{ route('visi-misi') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-300">Visi & Misi</a>
                            <a href="{{ route('direksi-komisaris') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-colors duration-300">Direksi & Komisaris</a>
                        </div>
                    </li>
                    <li><a href="#business" class="text-gray-700 hover:text-red-600 px-3 py-2 text-sm font-medium transition-colors duration-300">Bisnis</a></li>
                    <li><a href="#news" class="text-gray-700 hover:text-red-600 px-3 py-2 text-sm font-medium transition-colors duration-300">Info</a></li>
                    <li><a href="#contact" class="text-gray-700 hover:text-red-600 px-3 py-2 text-sm font-medium transition-colors duration-300">Kontak</a></li>
                </ul>
                <button class="md:hidden mobile-menu-button">
                    <i class="fas fa-bars text-gray-700"></i>
                </button>
            </div>
            
            <!-- Mobile Menu -->
            <div class="md:hidden mobile-menu hidden transition-all duration-300">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white rounded-lg mt-2 shadow-lg">
                    <a href="{{ url('/') }}" class="block px-3 py-2 text-gray-700 hover:text-red-600 hover:bg-red-50 rounded-md transition-colors duration-300">Beranda</a>
                    <a href="#about" class="block px-3 py-2 text-gray-700 hover:text-red-600 hover:bg-red-50 rounded-md transition-colors duration-300">Tentang</a>
                    <a href="#business" class="block px-3 py-2 text-gray-700 hover:text-red-600 hover:bg-red-50 rounded-md transition-colors duration-300">Bisnis</a>
                    <a href="#news" class="block px-3 py-2 text-gray-700 hover:text-red-600 hover:bg-red-50 rounded-md transition-colors duration-300">Info</a>
                    <a href="#contact" class="block px-3 py-2 text-gray-700 hover:text-red-600 hover:bg-red-50 rounded-md transition-colors duration-300">Kontak</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="gradient-bg text-white py-20 mt-16 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="hero-content">
                    <h1 class="text-4xl md:text-6xl font-bold mb-6">Solusi Logistik <span class="text-yellow-300">Terdepan</span></h1>
                    <p class="text-xl mb-8">Solusi terpercaya untuk kebutuhan logistik, konstruksi, dan distribusi di seluruh Indonesia.</p>
                    <a href="#about" class="bg-white text-red-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300 pulse-animation">
                        Jelajahi Layanan Kami <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                <div class="text-center hero-image floating-animation">
                    <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=800&h=600&fit=crop" alt="SILOG Logistics" class="rounded-lg shadow-2xl">
                </div>
            </div>
        </div>
    </section>
    
    <!-- About Section -->
    <section class="py-20 bg-white animate-section" id="about">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-4">Tentang <span class="text-gradient">SILOG</span></h2>
            <p class="text-xl text-gray-600 text-center mb-16">Membangun Indonesia melalui solusi logistik yang inovatif dan berkelanjutan</p>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-8 rounded-lg shadow-lg text-center hover-lift animate-card">
                    <div class="text-4xl text-red-600 mb-4"><i class="fas fa-history"></i></div>
                    <h3 class="text-xl font-semibold mb-4">Sejarah Panjang</h3>
                    <p class="text-gray-600">Berdiri sejak tahun 1957, SILOG telah menjadi bagian integral dari pertumbuhan industri Indonesia dengan pengalaman lebih dari 6 dekade dalam layanan logistik.</p>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-lg shadow-lg text-center hover-lift animate-card">
                    <div class="text-4xl text-red-600 mb-4"><i class="fas fa-award"></i></div>
                    <h3 class="text-xl font-semibold mb-4">Standar Kualitas</h3>
                    <p class="text-gray-600">Berkomitmen memberikan layanan terbaik dengan standar internasional dan teknologi terdepan untuk memenuhi kebutuhan pelanggan.</p>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-lg shadow-lg text-center hover-lift animate-card">
                    <div class="text-4xl text-red-600 mb-4"><i class="fas fa-globe-asia"></i></div>
                    <h3 class="text-xl font-semibold mb-4">Jangkauan Nasional</h3>
                    <p class="text-gray-600">Melayani seluruh Indonesia dengan jaringan distribusi yang luas dan infrastruktur logistik yang modern dan terintegrasi.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 bg-gray-50 animate-section" id="business">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-4">Layanan <span class="text-gradient">Utama</span></h2>
            <p class="text-xl text-gray-600 text-center mb-16">Solusi terintegrasi untuk kebutuhan logistik, konstruksi, dan distribusi</p>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden service-card hover-lift animate-card">
                    <div class="h-48 bg-red-600 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-r from-red-600 to-red-700"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <i class="fas fa-truck text-white text-6xl"></i>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-4">Logistik</h3>
                        <p class="text-gray-600 mb-4">Layanan logistik terintegrasi dengan teknologi terdepan untuk memastikan pengiriman yang efisien dan tepat waktu ke seluruh Indonesia.</p>
                        <a href="#" class="text-red-600 font-semibold hover:text-red-800 transition-colors duration-300">Pelajari Lebih Lanjut <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg overflow-hidden service-card hover-lift animate-card">
                    <div class="h-48 bg-orange-600 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-r from-orange-600 to-orange-700"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <i class="fas fa-hard-hat text-white text-6xl"></i>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-4">Konstruksi & Manufaktur</h3>
                        <p class="text-gray-600 mb-4">Solusi konstruksi dan manufaktur dengan standar kualitas tinggi untuk mendukung proyek-proyek pembangunan nasional.</p>
                        <a href="#" class="text-red-600 font-semibold hover:text-red-800 transition-colors duration-300">Pelajari Lebih Lanjut <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg overflow-hidden service-card hover-lift animate-card">
                    <div class="h-48 bg-amber-600 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-r from-amber-600 to-amber-700"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <i class="fas fa-warehouse text-white text-6xl"></i>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-4">Distribusi</h3>
                        <p class="text-gray-600 mb-4">Jaringan distribusi yang luas dan efisien untuk memastikan produk sampai ke tangan konsumen dengan kondisi terbaik.</p>
                        <a href="#" class="text-red-600 font-semibold hover:text-red-800 transition-colors duration-300">Pelajari Lebih Lanjut <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-gradient-to-r from-red-600 to-red-800 text-white animate-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="animate-card">
                    <div class="text-4xl md:text-5xl font-bold mb-2">65+</div>
                    <div class="text-lg">Tahun Pengalaman</div>
                </div>
                <div class="animate-card">
                    <div class="text-4xl md:text-5xl font-bold mb-2">500+</div>
                    <div class="text-lg">Armada Logistik</div>
                </div>
                <div class="animate-card">
                    <div class="text-4xl md:text-5xl font-bold mb-2">34</div>
                    <div class="text-lg">Provinsi Terjangkau</div>
                </div>
                <div class="animate-card">
                    <div class="text-4xl md:text-5xl font-bold mb-2">1M+</div>
                    <div class="text-lg">Ton Kapasitas</div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="py-20 bg-white animate-section" id="news">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-4">Berita <span class="text-gradient">Terbaru</span></h2>
            <p class="text-xl text-gray-600 text-center mb-16">Update terkini dari dunia SILOG dan industri logistik</p>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-lg  overflow-hidden news-card animate-card">
                    <div class="h-48 bg-gray-300 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=400&h=300&fit=crop" alt="AI Technology" class="w-full h-full object-cover news-image">
                    </div>
                    <div class="p-6">
                        <div class="text-sm text-gray-500 mb-2">28 Agustus 2025</div>
                        <h3 class="text-xl font-semibold mb-4">SILOG Luncurkan Teknologi AI untuk Optimasi Rute Distribusi</h3>
                        <p class="text-gray-600 mb-4">Inovasi terbaru SILOG dalam menggunakan artificial intelligence untuk meningkatkan efisiensi distribusi dan mengurangi waktu pengiriman hingga 30% lebih cepat.</p>
                        <a href="#" class="text-red-600 font-semibold hover:text-red-800 transition-colors duration-300">Baca Selengkapnya <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden news-card animate-card">
                    <div class="h-48 bg-gray-300 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?w=400&h=300&fit=crop" alt="Warehouse" class="w-full h-full object-cover news-image">
                    </div>
                    <div class="p-6">
                        <div class="text-sm text-gray-500 mb-2">25 Agustus 2025</div>
                        <h3 class="text-xl font-semibold mb-4">Ekspansi Gudang Baru di Wilayah Indonesia Timur</h3>
                        <p class="text-gray-600 mb-4">SILOG membuka fasilitas gudang modern baru di Papua untuk meningkatkan pelayanan logistik di wilayah Indonesia Timur dengan kapasitas 50.000 ton.</p>
                        <a href="#" class="text-red-600 font-semibold hover:text-red-800 transition-colors duration-300">Baca Selengkapnya <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden news-card animate-card">
                    <div class="h-48 bg-gray-300 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=400&h=300&fit=crop" alt="Partnership" class="w-full h-full object-cover news-image">
                    </div>
                    <div class="p-6">
                        <div class="text-sm text-gray-500 mb-2">22 Agustus 2025</div>
                        <h3 class="text-xl font-semibold mb-4">Kemitraan Strategis dengan BUMN untuk Proyek IKN</h3>
                        <p class="text-gray-600 mb-4">SILOG menjalin kemitraan strategis untuk mendukung pembangunan Ibu Kota Nusantara dengan layanan logistik terintegrasi senilai Rp 2.5 triliun.</p>
                        <a href="#" class="text-red-600 font-semibold hover:text-red-800 transition-colors duration-300">Baca Selengkapnya <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20 gradient-bg text-white animate-section" id="contact">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Siap Bermitra dengan SILOG?</h2>
            <p class="text-xl mb-8">Hubungi kami sekarang untuk konsultasi gratis dan dapatkan solusi logistik terbaik untuk bisnis Anda</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#" class="bg-white text-red-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300 hover-lift">
                    <i class="fas fa-phone mr-2"></i>Hubungi Kami
                </a>
                <a href="#about" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-red-600 transition duration-300 hover-lift">
                    <i class="fas fa-info-circle mr-2"></i>Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <img src="{{ asset('assets/images/logo.png') }}" alt="SILOG Logo" class="h-10 mb-4">
                    <p class="text-gray-400 mb-4">Solusi terpercaya untuk kebutuhan logistik, konstruksi, dan distribusi di seluruh Indonesia. Berpengalaman lebih dari 6 dekade dalam melayani industri nasional.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Bisnis</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors duration-300">Logistik</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-300">Konstruksi</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-300">Distribusi</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Informasi</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors duration-300">Berita</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-300">Karir</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-300">Kontak</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Kontak</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><i class="fas fa-phone mr-2"></i> +62 21 1234 5678</li>
                        <li><i class="fas fa-envelope mr-2"></i> info@silog.co.id</li>
                        <li><i class="fas fa-map-marker-alt mr-2"></i> Jakarta Selatan 12345</li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                © 2025 SILOG - Semen Indonesia Logistik. All rights reserved.
            </div>
        </div>
    </footer>
</body>
</html>