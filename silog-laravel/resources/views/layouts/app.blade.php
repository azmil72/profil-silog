<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SILOG - Semen Indonesia Logistik')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" media="print" onload="this.media='all'">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <noscript><link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"></noscript>
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --bright-white: #FFFFFF;
            --total-black: #000000;
            --light-grey: #DFDEDE;
            --dark-grey: #5E5E5F;
            --red-accent: #F5333F;
            --gradient-primary: linear-gradient(135deg, #F5333F 0%, #FF6B6B 100%);
            --gradient-secondary: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --shadow-light: 0 10px 30px rgba(0, 0, 0, 0.1);
            --shadow-heavy: 0 20px 60px rgba(0, 0, 0, 0.15);
        }

        body {
            font-family: 'Inter', Arial, sans-serif;
            background: var(--bright-white);
            color: var(--total-black);
            overflow-x: hidden;
        }

        /* Custom Fonts */
        .primary-font {
            font-family: 'Poppins', sans-serif;
            font-weight: 900;
        }

        .secondary-font {
            font-family: 'Inter', sans-serif;
        }

        /* Navigation */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            z-index: 1000;
            padding: 1rem 0;
            transition: all 0.3s ease;
            border-bottom: 1px solid rgba(223, 222, 222, 0.3);
        }

        .navbar.scrolled {
            background: rgba(255, 255, 255, 0.98);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 2rem;
        }

        .logo {
            height: 50px;
            transition: transform 0.3s ease;
        }

        .logo:hover {
            transform: scale(1.05);
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2rem;
            align-items: center;
        }

        .nav-item {
            position: relative;
        }

        .nav-link {
            text-decoration: none;
            color: var(--total-black);
            font-weight: 500;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            padding: 0.5rem 0;
            position: relative;
        }

        .nav-link:hover {
            color: var(--red-accent);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--red-accent);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .dropdown {
            position: absolute;
            top: 100%;
            left: 0;
            background: var(--bright-white);
            min-width: 200px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.3s ease;
            border: 1px solid var(--light-grey);
        }

        .nav-item:hover .dropdown {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .dropdown a {
            display: block;
            padding: 0.75rem 1rem;
            color: var(--total-black);
            text-decoration: none;
            transition: all 0.3s ease;
            border-radius: 6px;
            margin: 0.25rem;
        }

        .dropdown a:hover {
            background: var(--red-accent);
            color: var(--bright-white);
            transform: translateX(5px);
        }

        /* Footer */
        .footer {
            background: var(--total-black);
            color: var(--bright-white);
            padding: 4rem 0 2rem;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr 1.5fr;
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .footer-brand {
            display: flex;
            flex-direction: column;
        }

        .footer-logo {
            height: 60px;
            margin-bottom: 1.5rem;
            filter: brightness(0) invert(1);
        }

        .footer-description {
            color: var(--light-grey);
            line-height: 1.6;
            margin-bottom: 2rem;
            font-size: 0.95rem;
        }

        .social-links {
            display: flex;
            gap: 1rem;
        }

        .social-link {
            width: 45px;
            height: 45px;
            background: var(--dark-grey);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--bright-white);
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 1.2rem;
        }

        .social-link:hover {
            background: var(--red-accent);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(245, 51, 63, 0.4);
        }

        .footer-section h4 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: var(--bright-white);
            position: relative;
        }

        .footer-section h4::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 30px;
            height: 2px;
            background: var(--red-accent);
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 0.8rem;
        }

        .footer-links a {
            color: var(--light-grey);
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .footer-links a:hover {
            color: var(--red-accent);
            padding-left: 10px;
        }

        .footer-links a::before {
            content: '';
            width: 4px;
            height: 4px;
            background: var(--red-accent);
            border-radius: 50%;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .footer-links a:hover::before {
            opacity: 1;
        }

        .contact-info {
            list-style: none;
        }

        .contact-info li {
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.8rem;
            color: var(--light-grey);
            font-size: 0.95rem;
        }

        .contact-info i {
            color: var(--red-accent);
            font-size: 1.1rem;
            width: 20px;
        }

        .footer-bottom {
            border-top: 1px solid var(--dark-grey);
            padding-top: 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .footer-copyright {
            color: var(--light-grey);
            font-size: 0.9rem;
        }

        .footer-links-bottom {
            display: flex;
            gap: 2rem;
        }

        .footer-links-bottom a {
            color: var(--light-grey);
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.3s ease;
        }

        .footer-links-bottom a:hover {
            color: var(--red-accent);
        }

        /* Mobile Menu */
        .mobile-menu-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--total-black);
            cursor: pointer;
        }

        /* Responsive */
        @media (max-width: 968px) {
            .footer-grid {
                grid-template-columns: 1fr 1fr;
                gap: 2rem;
            }

            .footer-brand {
                grid-column: 1 / -1;
                text-align: center;
            }
        }

        @media (max-width: 768px) {
            .mobile-menu-toggle {
                display: block;
            }

            .nav-menu {
                display: none;
            }

            .nav-container {
                padding: 0 1rem;
            }

            .footer-grid {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .footer-bottom {
                flex-direction: column;
                text-align: center;
            }
        }

        /* Loading Animation */
        .loading {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--bright-white);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            transition: opacity 0.5s ease;
        }

        .loading.hidden {
            opacity: 0;
            pointer-events: none;
        }

        .loader {
            width: 50px;
            height: 50px;
            border: 3px solid var(--light-grey);
            border-top: 3px solid var(--red-accent);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Scroll Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

    @yield('styles')
</head>
<body>
    <!-- Loading Screen -->
    <div class="loading" id="loading">
        <div style="text-align: center;">
            <img src="{{ asset('assets/images/logo.png') }}" alt="SILOG" style="height: 80px; margin-bottom: 2rem; animation: pulse 2s infinite;">
            <div class="loader"></div>
            <p style="margin-top: 1rem; color: var(--dark-grey); font-size: 0.9rem;">Memuat pengalaman SILOG...</p>
        </div>
    </div>

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

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

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

    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('scripts')
</body>
</html>