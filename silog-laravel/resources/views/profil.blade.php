@extends('layouts.app')

@section('title', 'Profil - SILOG')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Perusahaan - SILOG</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'red-primary': '#F5333F',
                        'red-dark': '#d42834',
                        'red-light': '#ff6b73',
                        'black': '#0a0a0a',
                        'gray-dark': '#374151',
                        'gray-medium': '#6b7280',
                        'gray-light': '#f8fafc',
                        'blue-accent': '#3b82f6',
                        'green-accent': '#10b981',
                        'orange-accent': '#f59e0b',
                        'purple-accent': '#8b5cf6',
                    },
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                    },
                    backgroundImage: {
                        'gradient-primary': 'linear-gradient(135deg, #F5333F 0%, #d42834 100%)',
                        'gradient-red': 'linear-gradient(135deg, rgba(245, 51, 63, 0.9) 0%, rgba(212, 40, 52, 0.9) 50%, rgba(183, 28, 28, 0.9) 100%)',
                    },
                    boxShadow: {
                        'soft': '0 10px 40px rgba(0, 0, 0, 0.08)',
                        'medium': '0 20px 60px rgba(0, 0, 0, 0.12)',
                        'strong': '0 30px 80px rgba(245, 51, 63, 0.25)',
                    },
                    animation: {
                        'logoFloat': 'logoFloat 6s ease-in-out infinite',
                        'logoRotate': 'logoRotate 20s linear infinite',
                        'logoShine': 'logoShine 6s ease-in-out infinite',
                        'iconShine': 'iconShine 4s ease-in-out infinite',
                        'float': 'float 8s ease-in-out infinite',
                        'gradientShift': 'gradientShift 6s ease-in-out infinite',
                        'heroGlow': 'heroGlow 8s ease-in-out infinite alternate',
                        'pulseGlow': 'pulseGlow 4s ease-in-out infinite',
                        'expandLine': 'expandLine 1s ease-out 1s both',
                        'slideInUp': 'slideInUp 1.2s ease-out both',
                        'fadeInUp': 'fadeInUp 1s ease-out both',
                        'bounce': 'bounce 2s infinite',
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom Cursor */
        .custom-cursor {
            position: fixed;
            width: 24px;
            height: 24px;
            background: #F5333F;
            border-radius: 50%;
            pointer-events: none;
            z-index: 9999;
            opacity: 0;
            transform: translate(-50%, -50%);
            transition: all 0.15s cubic-bezier(0.4, 0, 0.2, 1);
            mix-blend-mode: difference;
        }

        /* Animations */
        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(60px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0) rotate(0deg);
            }
            33% {
                transform: translateY(-30px) rotate(120deg);
            }
            66% {
                transform: translateY(-15px) rotate(240deg);
            }
        }

        @keyframes logoFloat {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-15px);
            }
        }

        @keyframes logoRotate {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        @keyframes logoShine {
            0% {
                transform: translateX(-100%) rotate(45deg);
            }
            50% {
                transform: translateX(100%) rotate(45deg);
            }
            100% {
                transform: translateX(100%) rotate(45deg);
            }
        }

        @keyframes iconShine {
            0% {
                transform: translateX(-100%) rotate(45deg);
            }
            50% {
                transform: translateX(100%) rotate(45deg);
            }
            100% {
                transform: translateX(100%) rotate(45deg);
            }
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateX(-50%) translateY(0);
            }
            40% {
                transform: translateX(-50%) translateY(-15px);
            }
            60% {
                transform: translateX(-50%) translateY(-8px);
            }
        }

        @keyframes gradientShift {
            0%, 100% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
        }

        @keyframes heroGlow {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.8;
            }
        }

        @keyframes pulseGlow {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.7;
            }
        }

        @keyframes expandLine {
            from {
                width: 0;
            }
            to {
                width: 120px;
            }
        }

        /* Grid Pattern Backgrounds */
        .grid-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='120' height='120' viewBox='0 0 120 120' xmlns='http://www.w3.org/2000/svg'%3E%3Cdefs%3E%3Cpattern id='grid' width='40' height='40' patternUnits='userSpaceOnUse'%3E%3Cpath d='M 40 0 L 0 0 0 40' fill='none' stroke='rgba(255,255,255,0.08)' stroke-width='1'/%3E%3C/pattern%3E%3C/defs%3E%3Crect width='100%25' height='100%25' fill='url(%23grid)'/%3E%3C/svg%3E");
        }

        .dots-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cdefs%3E%3Cpattern id='dots' width='20' height='20' patternUnits='userSpaceOnUse'%3E%3Ccircle cx='10' cy='10' r='1' fill='rgba(245,51,63,0.05)'/%3E%3C/pattern%3E%3C/defs%3E%3Crect width='100%25' height='100%25' fill='url(%23dots)'/%3E%3C/svg%3E");
        }

        .hexagon-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='80' height='80' viewBox='0 0 80 80' xmlns='http://www.w3.org/2000/svg'%3E%3Cdefs%3E%3Cpattern id='hexagon' width='40' height='40' patternUnits='userSpaceOnUse'%3E%3Cpolygon points='20,5 35,15 35,25 20,35 5,25 5,15' fill='none' stroke='rgba(245,51,63,0.1)' stroke-width='0.5'/%3E%3C/pattern%3E%3C/defs%3E%3Crect width='100%25' height='100%25' fill='url(%23hexagon)'/%3E%3C/svg%3E");
        }

        .triangles-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cdefs%3E%3Cpattern id='triangles' width='50' height='50' patternUnits='userSpaceOnUse'%3E%3Cpolygon points='25,5 45,40 5,40' fill='none' stroke='rgba(245,51,63,0.03)' stroke-width='1'/%3E%3C/pattern%3E%3C/defs%3E%3Crect width='100%25' height='100%25' fill='url(%23triangles)'/%3E%3C/svg%3E");
        }
    </style>
</head>
<body class="font-inter bg-white text-black overflow-x-hidden">
    <!-- Custom Cursor -->
    <div class="custom-cursor"></div>

    <!-- Floating Elements -->
    <div class="floating-element floating-element-1 fixed top-1/4 left-1/10 w-15 h-15 bg-red-primary rounded-full opacity-10 pointer-events-none animate-float"></div>
    <div class="floating-element floating-element-2 fixed top-3/5 right-1/6 w-10 h-10 bg-blue-accent rounded-lg opacity-10 pointer-events-none animate-float" style="animation-delay: 2s"></div>
    <div class="floating-element floating-element-3 fixed bottom-1/3 left-1/5 w-20 h-20 bg-green-accent rounded-2xl opacity-10 pointer-events-none animate-float" style="animation-delay: 4s"></div>

    <!-- Hero Section -->
    <section class="hero min-h-screen bg-gradient-red grid-pattern relative flex items-center justify-center overflow-hidden">
        <div class="hero-content text-center z-30 relative max-w-6xl px-8">
            <div class="hero-logo w-35 h-35 bg-gradient-to-br from-white to-gray-100 rounded-3xl flex items-center justify-center mx-auto mb-12 text-5xl font-black text-red-primary animate-logoFloat shadow-strong relative overflow-hidden">
                SILOG
            </div>
            <h1 class="hero-title text-5xl md:text-7xl font-black mb-6 text-white text-shadow-lg animate-slideInUp" style="animation-delay: 0.2s">
                Identitas Perusahaan
            </h1>
            <p class="hero-subtitle text-xl md:text-2xl text-white/90 animate-slideInUp mb-8 font-normal" style="animation-delay: 0.4s">
                Mengenal Lebih Dalam Tentang SILOG
            </p>
            <p class="hero-description text-lg md:text-xl text-white/85 max-w-4xl mx-auto mb-12 animate-slideInUp leading-relaxed" style="animation-delay: 0.6s">
                Sebagai perusahaan logistik terdepan di Indonesia, SILOG memiliki identitas yang kuat dan filosofi yang mendalam dalam setiap aspek operasionalnya. Kami berkomitmen untuk menghubungkan seluruh nusantara melalui layanan logistik yang inovatif dan berkelanjutan.
            </p>
        </div>
        
        <div class="scroll-indicator absolute bottom-12 left-1/2 transform -translate-x-1/2 flex flex-col items-center gap-4 text-white/80 text-sm animate-bounce cursor-pointer"
             onclick="document.querySelector('.philosophy-section').scrollIntoView({behavior: 'smooth'})">
            <span>Scroll untuk melihat identitas</span>
            <div class="scroll-circle w-10 h-10 border-2 border-white/60 rounded-full flex items-center justify-center text-lg transition-all duration-300">↓</div>
        </div>
    </section>

    <!-- Philosophy Section -->
    <section class="philosophy-section py-24 bg-gradient-to-br from-white to-gray-light dots-pattern relative">
        <div class="container max-w-7xl mx-auto px-4">
            <div class="section-header text-center mb-24 opacity-0 transform translate-y-12 animate-fadeInUp" style="animation-delay: 0.2s">
                <h2 class="section-title text-4xl md:text-6xl font-extrabold mb-8 text-black relative inline-block">
                    Filosofi Logo
                </h2>
                <p class="section-subtitle text-lg md:text-xl text-gray-dark max-w-4xl mx-auto font-normal leading-relaxed">
                    Setiap elemen dalam logo SILOG memiliki makna dan filosofi yang mendalam, mencerminkan visi dan misi perusahaan dalam membangun ekosistem logistik Indonesia.
                </p>
            </div>

            <div class="logo-philosophy grid md:grid-cols-1 lg:grid-cols-2 gap-16 items-center my-24">
                <div class="logo-container text-center">
                    <div class="company-logo w-80 h-80 md:w-88 md:h-88 bg-gradient-primary rounded-3xl flex items-center justify-center mx-auto text-6xl md:text-7xl text-white font-black relative overflow-hidden animate-logoRotate shadow-strong">
                        SILOG
                    </div>
                </div>
                <div class="logo-description text-left md:text-center lg:text-left">
                    <h3 class="text-3xl md:text-4xl font-bold text-red-primary mb-10 relative">
                        Makna Logo SILOG
                    </h3>
                    <div class="space-y-6 text-gray-dark text-lg leading-relaxed">
                        <p>
                            Logo SILOG menggambarkan kekuatan, kepercayaan, dan dedikasi perusahaan dalam melayani Indonesia. Warna merah melambangkan <strong class="text-red-primary font-semibold">semangat</strong>, <strong class="text-red-primary font-semibold">keberanian</strong>, dan <strong class="text-red-primary font-semibold">komitmen</strong> yang tidak pernah pudar dalam memberikan layanan terbaik kepada seluruh stakeholder.
                        </p>
                        <p>
                            Bentuk yang solid dan modern mencerminkan <strong class="text-red-primary font-semibold">stabilitas perusahaan</strong> dan kemampuan adaptasi terhadap perkembangan zaman. SILOG tidak hanya sekedar nama, tetapi representasi dari <strong class="text-red-primary font-semibold">Sinergi Logistik Nusantara</strong> yang menghubungkan seluruh Indonesia dari Sabang hingga Merauke.
                        </p>
                        <p>
                            Setiap huruf dalam SILOG memiliki makna filosofis yang mendalam: <strong class="text-red-primary font-semibold">S</strong>inergi untuk kolaborasi terbaik, <strong class="text-red-primary font-semibold">I</strong>novasi untuk kemajuan berkelanjutan, <strong class="text-red-primary font-semibold">L</strong>ogistik sebagai inti bisnis, <strong class="text-red-primary font-semibold">O</strong>ptimal dalam setiap pelayanan, dan <strong class="text-red-primary font-semibold">G</strong>lobal dalam visi masa depan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tagline Section -->
    <section class="tagline-section py-24 bg-gradient-to-br from-black to-gray-900 hexagon-pattern text-white text-center relative overflow-hidden">
        <div class="container max-w-7xl mx-auto px-4">
            <div class="tagline-content relative z-20">
                <h2 class="tagline-main text-5xl md:text-7xl font-black mb-12 bg-gradient-to-r from-red-primary via-red-light to-white bg-size-400 bg-clip-text text-transparent animate-gradientShift leading-tight">
                    Connected Beyond Borders
                </h2>
                <p class="tagline-description text-lg md:text-xl max-w-5xl mx-auto text-white/90 leading-relaxed font-light">
                    SILOG membawa semangat <strong class="text-red-light font-semibold">"Connected Beyond Borders"</strong> yang digunakan sebagai tagline perusahaan dalam setiap proses operasionalnya. Tagline ini memiliki makna bahwa SILOG akan selalu menghubungkan dan melampaui batas-batas geografis, menciptakan jembatan logistik yang menghubungkan seluruh Indonesia, untuk membangun ekosistem logistik yang terintegrasi dan berkelanjutan bagi kemajuan bangsa.
                </p>
            </div>
        </div>
    </section>

    <!-- Brand Essence Section -->
    <section class="brand-essence py-24 bg-gradient-to-br from-gray-light to-white triangles-pattern">
        <div class="container max-w-7xl mx-auto px-4">
            <div class="section-header text-center mb-24">
                <h2 class="section-title text-4xl md:text-6xl font-extrabold mb-8 text-black relative inline-block">
                    Esensi Brand
                </h2>
                <p class="section-subtitle text-lg md:text-xl text-gray-dark max-w-4xl mx-auto font-normal leading-relaxed">
                    Nilai-nilai fundamental yang menjadi DNA SILOG dalam setiap aktivitas bisnis dan menjadi landasan dalam memberikan pelayanan terbaik kepada seluruh stakeholder.
                </p>
            </div>

            <div class="essence-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-20">
                <!-- Card 1 -->
                <div class="essence-card bg-white rounded-3xl p-12 text-center shadow-soft transition-all duration-700 ease-in-out relative overflow-hidden border border-red-primary/8 opacity-0 transform translate-y-12">
                    <div class="essence-icon w-28 h-28 bg-gradient-primary rounded-3xl flex items-center justify-center mx-auto mb-10 relative overflow-hidden">
                        <svg class="w-14 h-14 fill-white z-10 relative" viewBox="0 0 24 24">
                            <path d="M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7l-10-5z"/>
                        </svg>
                    </div>
                    <h3 class="essence-title text-2xl font-bold text-black mb-8 transition-colors duration-400">
                        Kepercayaan Berkelanjutan
                    </h3>
                    <p class="essence-description text-gray-dark leading-relaxed text-lg">
                        SILOG percaya bahwa membangun kepercayaan yang berkelanjutan adalah inti dari sebuah entitas bisnis yang kuat dan dapat diandalkan oleh seluruh stakeholder. Transparansi, integritas, dan konsistensi menjadi fondasi dalam setiap langkah operasional.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="essence-card bg-white rounded-3xl p-12 text-center shadow-soft transition-all duration-700 ease-in-out relative overflow-hidden border border-red-primary/8 opacity-0 transform translate-y-12">
                    <div class="essence-icon w-28 h-28 bg-gradient-primary rounded-3xl flex items-center justify-center mx-auto mb-10 relative overflow-hidden">
                        <svg class="w-14 h-14 fill-white z-10 relative" viewBox="0 0 24 24">
                            <path d="M9 11H7v9a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V9h-2m-1 0V6a2 2 0 0 0-2-2h-2a2 2 0 0 0-2 2v4h6m2 5l-3-3m0 0l-3 3m3-3v6"/>
                        </svg>
                    </div>
                    <h3 class="essence-title text-2xl font-bold text-black mb-8 transition-colors duration-400">
                        Inovasi Berkelanjutan
                    </h3>
                    <p class="essence-description text-gray-dark leading-relaxed text-lg">
                        SILOG akan terus memimpin industri logistik dalam membangun masa depan melalui digitalisasi, teknologi terdepan, dan inovasi yang berkelanjutan. Setiap solusi dirancang untuk mengoptimalkan efisiensi dan memberikan nilai tambah bagi pelanggan.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="essence-card bg-white rounded-3xl p-12 text-center shadow-soft transition-all duration-700 ease-in-out relative overflow-hidden border border-red-primary/8 opacity-0 transform translate-y-12">
                    <div class="essence-icon w-28 h-28 bg-gradient-primary rounded-3xl flex items-center justify-center mx-auto mb-10 relative overflow-hidden">
                        <svg class="w-14 h-14 fill-white z-10 relative" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    </div>
                    <h3 class="essence-title text-2xl font-bold text-black mb-8 transition-colors duration-400">
                        Keunggulan Layanan
                    </h3>
                    <p class="essence-description text-gray-dark leading-relaxed text-lg">
                        SILOG akan terus melampaui ekspektasi dengan memastikan lebih banyak orang yang menerima manfaat melalui beragam solusi logistik berkualitas tinggi. Standar pelayanan prima menjadi komitmen utama dalam setiap interaksi dengan pelanggan.
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="essence-card bg-white rounded-3xl p-12 text-center shadow-soft transition-all duration-700 ease-in-out relative overflow-hidden border border-red-primary/8 opacity-0 transform translate-y-12">
                    <div class="essence-icon w-28 h-28 bg-gradient-primary rounded-3xl flex items-center justify-center mx-auto mb-10 relative overflow-hidden">
                        <svg class="w-14 h-14 fill-white z-10 relative" viewBox="0 0 24 24">
                            <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                        </svg>
                    </div>
                    <h3 class="essence-title text-2xl font-bold text-black mb-8 transition-colors duration-400">
                        Eksplorasi Peluang
                    </h3>
                    <p class="essence-description text-gray-dark leading-relaxed text-lg">
                        SILOG akan membuka peluang baru dan mendorong pertumbuhan dengan pola pikir yang disruptif, berani menjadi pionir dengan bertindak beda dan inovatif. Setiap tantangan dipandang sebagai kesempatan untuk berkembang dan memberikan solusi terdepan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Navigation Cards Section -->
    <section class="content-section py-24 bg-white">
        <div class="container max-w-7xl mx-auto px-4">
            <div class="section-header text-center mb-24">
                <h2 class="section-title text-4xl md:text-6xl font-extrabold mb-8 text-black relative inline-block">
                    Mengenal SILOG Lebih Dalam
                </h2>
                <p class="section-subtitle text-lg md:text-xl text-gray-dark max-w-4xl mx-auto font-normal leading-relaxed">
                    Jelajahi berbagai aspek perusahaan kami untuk memahami komitmen dan dedikasi SILOG dalam membangun Indonesia yang lebih maju
                </p>
            </div>

            <div class="cards-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-16">
                <!-- History Card -->
                <div class="content-card bg-white rounded-2xl p-10 shadow-lg transition-all duration-500 ease-in-out relative overflow-hidden border border-red-primary/10 cursor-pointer opacity-0 transform translate-y-12">
                    <div class="card-icon w-20 h-20 bg-gradient-primary rounded-2xl flex items-center justify-center mb-8 relative overflow-hidden">
                        <svg class="w-10 h-10 fill-white z-10 relative" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    </div>
                    <h3 class="card-title text-xl font-bold text-black mb-4 transition-colors duration-300">History</h3>
                    <p class="card-description text-gray-dark leading-relaxed mb-6">
                        Perjalanan panjang SILOG dari awal berdiri hingga menjadi perusahaan distribusi terkemuka di Indonesia. Sejarah pencapaian, milestone penting, dan evolusi perusahaan.
                    </p>
                    <a href="#history" class="card-link inline-flex items-center text-red-primary font-semibold text-base no-underline transition-all duration-300">
                        Pelajari Sejarah Kami
                    </a>
                </div>

                <!-- Visi & Misi Card -->
                <div class="content-card bg-white rounded-2xl p-10 shadow-lg transition-all duration-500 ease-in-out relative overflow-hidden border border-red-primary/10 cursor-pointer opacity-0 transform translate-y-12">
                    <div class="card-icon w-20 h-20 bg-gradient-primary rounded-2xl flex items-center justify-center mb-8 relative overflow-hidden">
                        <svg class="w-10 h-10 fill-white z-10 relative" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                    </div>
                    <h3 class="card-title text-xl font-bold text-black mb-4 transition-colors duration-300">Visi & Misi</h3>
                    <p class="card-description text-gray-dark leading-relaxed mb-6">
                        Visi jangka panjang dan misi SILOG dalam membangun ekosistem distribusi Indonesia yang berkelanjutan dan memberikan nilai tambah bagi semua pihak.
                    </p>
                    <a href="#visi-misi" class="card-link inline-flex items-center text-red-primary font-semibold text-base no-underline transition-all duration-300">
                        Baca Visi & Misi
                    </a>
                </div>

                <!-- Kebijakan Perusahaan Card -->
                <div class="content-card bg-white rounded-2xl p-10 shadow-lg transition-all duration-500 ease-in-out relative overflow-hidden border border-red-primary/10 cursor-pointer opacity-0 transform translate-y-12">
                    <div class="card-icon w-20 h-20 bg-gradient-primary rounded-2xl flex items-center justify-center mb-8 relative overflow-hidden">
                        <svg class="w-10 h-10 fill-white z-10 relative" viewBox="0 0 24 24">
                            <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                        </svg>
                    </div>
                    <h3 class="card-title text-xl font-bold text-black mb-4 transition-colors duration-300">Kebijakan Perusahaan</h3>
                    <p class="card-description text-gray-dark leading-relaxed mb-6">
                        Kebijakan operasional, etika bisnis, dan standar kualitas yang menjadi pedoman dalam setiap aspek kegiatan bisnis SILOG.
                    </p>
                    <a href="#kebijakan" class="card-link inline-flex items-center text-red-primary font-semibold text-base no-underline transition-all duration-300">
                        Pelajari Kebijakan
                    </a>
                </div>

                <!-- Tata Kelola Perusahaan Card -->
                <div class="content-card bg-white rounded-2xl p-10 shadow-lg transition-all duration-500 ease-in-out relative overflow-hidden border border-red-primary/10 cursor-pointer opacity-0 transform translate-y-12">
                    <div class="card-icon w-20 h-20 bg-gradient-primary rounded-2xl flex items-center justify-center mb-8 relative overflow-hidden">
                        <svg class="w-10 h-10 fill-white z-10 relative" viewBox="0 0 24 24">
                            <path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6h-6z"/>
                        </svg>
                    </div>
                    <h3 class="card-title text-xl font-bold text-black mb-4 transition-colors duration-300">Tata Kelola Perusahaan</h3>
                    <p class="card-description text-gray-dark leading-relaxed mb-6">
                        Sistem tata kelola yang transparan, akuntabel, dan bertanggung jawab sesuai dengan prinsip Good Corporate Governance (GCG).
                    </p>
                    <a href="#tata-kelola" class="card-link inline-flex items-center text-red-primary font-semibold text-base no-underline transition-all duration-300">
                        Lihat Tata Kelola
                    </a>
                </div>

                <!-- Sumber Daya Manusia Card -->
                <div class="content-card bg-white rounded-2xl p-10 shadow-lg transition-all duration-500 ease-in-out relative overflow-hidden border border-red-primary/10 cursor-pointer opacity-0 transform translate-y-12">
                    <div class="card-icon w-20 h-20 bg-gradient-primary rounded-2xl flex items-center justify-center mb-8 relative overflow-hidden">
                        <svg class="w-10 h-10 fill-white z-10 relative" viewBox="0 0 24 24">
                            <path d="M16 4c0-1.11.89-2 2-2s2 .89 2 2-.89 2-2 2-2-.89-2-2zm4 18v-6h2.5l-2.54-7.63A1.999 1.999 0 0 0 18.06 7c-.8 0-1.54.5-1.84 1.25L14.5 12.5l-3.5-1.08c-.86-.26-1.81.21-2.12 1.06-.31.85.21 1.81 1.06 2.12l5.11 1.57c.86.26 1.81-.21 2.12-1.06.31-.85-.21-1.81-1.06-2.12L15 11.5V4z"/>
                        </svg>
                    </div>
                    <h3 class="card-title text-xl font-bold text-black mb-4 transition-colors duration-300">Sumber Daya Manusia</h3>
                    <p class="card-description text-gray-dark leading-relaxed mb-6">
                        Komitmen terhadap pengembangan SDM berkualitas, program pelatihan, jenjang karir, dan budaya kerja yang mendukung inovasi dan pertumbuhan.
                    </p>
                    <a href="#sdm" class="card-link inline-flex items-center text-red-primary font-semibold text-base no-underline transition-all duration-300">
                        Ketahui Program SDM
                    </a>
                </div>

                <!-- Direksi & Komisaris Card -->
                <div class="content-card bg-white rounded-2xl p-10 shadow-lg transition-all duration-500 ease-in-out relative overflow-hidden border border-red-primary/10 cursor-pointer opacity-0 transform translate-y-12">
                    <div class="card-icon w-20 h-20 bg-gradient-primary rounded-2xl flex items-center justify-center mb-8 relative overflow-hidden">
                        <svg class="w-10 h-10 fill-white z-10 relative" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm3.5 6L12 10.5 8.5 8 12 5.5 15.5 8zM8.5 16L12 13.5 15.5 16 12 18.5 8.5 16z"/>
                        </svg>
                    </div>
                    <h3 class="card-title text-xl font-bold text-black mb-4 transition-colors duration-300">Direksi & Komisaris</h3>
                    <p class="card-description text-gray-dark leading-relaxed mb-6">
                        Profil lengkap jajaran direksi dan komisaris yang memimpin SILOG dengan pengalaman dan keahlian dalam industri distribusi dan logistik.
                    </p>
                    <a href="#direksi" class="card-link inline-flex items-center text-red-primary font-semibold text-base no-underline transition-all duration-300">
                        Lihat Profil Pimpinan
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Enhanced cursor functionality
        const cursor = document.querySelector('.custom-cursor');
        
        document.addEventListener('mousemove', (e) => {
            requestAnimationFrame(() => {
                cursor.style.left = e.clientX + 'px';
                cursor.style.top = e.clientY + 'px';
                cursor.style.opacity = '0.8';
            });
        });
        
        document.addEventListener('mouseleave', () => {
            cursor.style.opacity = '0';
        });

        // Enhanced cursor for interactive elements
        const interactiveElements = document.querySelectorAll('a, button, .content-card, .essence-card, .scroll-indicator');
        
        interactiveElements.forEach(element => {
            element.addEventListener('mouseenter', () => {
                cursor.style.transform = 'translate(-50%, -50%) scale(1.8)';
                cursor.style.background = '#ff6b73';
                cursor.style.mixBlendMode = 'multiply';
            });
            
            element.addEventListener('mouseleave', () => {
                cursor.style.transform = 'translate(-50%, -50%) scale(1)';
                cursor.style.background = '#F5333F';
                cursor.style.mixBlendMode = 'difference';
            });
        });

        // Enhanced scroll animations with Intersection Observer
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, index * 150);
                }
            });
        }, observerOptions);

        // Apply scroll animations to all cards and elements
        document.querySelectorAll('.essence-card, .content-card').forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(60px)';
            card.style.transition = `all 0.8s cubic-bezier(0.4, 0, 0.2, 1) ${index * 0.1}s`;
            observer.observe(card);
        });

        // Enhanced parallax effect
        let ticking = false;
        
        const updateParallax = () => {
            if (!ticking) {
                requestAnimationFrame(() => {
                    const scrollY = window.pageYOffset;
                    
                    // Hero parallax
                    const hero = document.querySelector('.hero');
                    if (hero && scrollY < window.innerHeight) {
                        hero.style.transform = `translateY(${scrollY * 0.5}px)`;
                    }
                    
                    // Floating elements parallax
                    const floatingElements = document.querySelectorAll('.floating-element');
                    floatingElements.forEach((element, index) => {
                        const speed = 0.1 + (index * 0.05);
                        element.style.transform = `translateY(${scrollY * speed}px)`;
                    });
                    
                    ticking = false;
                });
                ticking = true;
            }
        };
        
        window.addEventListener('scroll', updateParallax, { passive: true });

        // Smooth scrolling for navigation
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

        // Loading animation
        window.addEventListener('load', () => {
            document.body.style.opacity = '0';
            setTimeout(() => {
                document.body.style.transition = 'opacity 1.2s ease';
                document.body.style.opacity = '1';
            }, 100);
        });

        // Enhanced hover effects with magnetic attraction
        document.querySelectorAll('.content-card').forEach(card => {
            card.addEventListener('mousemove', function(e) {
                const rect = this.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;
                
                this.style.transform = `translateY(-20px) scale(1.03) rotateY(${x * 0.01}deg) rotateX(${-y * 0.01}deg)`;
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1) rotateY(0deg) rotateX(0deg)';
            });
        });

        // Staggered animation for cards on load
        const cardContainers = document.querySelectorAll('.cards-grid, .essence-grid');
        cardContainers.forEach(container => {
            const cards = container.querySelectorAll('.content-card, .essence-card');
            cards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.1}s`;
            });
        });

        // Enhanced scroll indicator interaction
        const scrollIndicator = document.querySelector('.scroll-indicator');
        if (scrollIndicator) {
            window.addEventListener('scroll', () => {
                const scrollPercentage = (window.pageYOffset / window.innerHeight) * 100;
                scrollIndicator.style.opacity = Math.max(0, 1 - (scrollPercentage / 50));
            });
        }

        // Performance optimizations
        const debounce = (func, wait) => {
            let timeout;
            return function executedFunction(...args) {
                const later = () => {
                    clearTimeout(timeout);
                    func(...args);
                };
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
            };
        };

        // Debounced resize handler
        const handleResize = debounce(() => {
            // Recalculate animations on resize
            const cards = document.querySelectorAll('.content-card, .essence-card');
            cards.forEach(card => {
                card.style.transform = 'translateY(0) scale(1)';
            });
        }, 250);

        window.addEventListener('resize', handleResize);
    </script>
</body>
</html>