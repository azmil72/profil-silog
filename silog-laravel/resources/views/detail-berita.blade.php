<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SILOG Raih Penghargaan Perusahaan Logistik Terbaik 2024 - SILOG - Semen Indonesia Logistik</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --bright-white: #FFFFFF;
            --total-black: #000000;
            --light-grey: #DFDEDE;
            --dark-grey: #5E5E5F;
            --red-primary: #F5333F;
            --gradient-primary: linear-gradient(135deg, #F5333F 0%, #FF6B6B 100%);
            --shadow-light: 0 10px 30px rgba(0, 0, 0, 0.1);
            --shadow-heavy: 0 20px 60px rgba(0, 0, 0, 0.15);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
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
            color: var(--red-primary);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--red-primary);
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
            background: var(--red-primary);
            color: var(--bright-white);
            transform: translateX(5px);
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

        /* News Detail Section */
        .news-detail {
            padding: 120px 0 4rem;
            background: var(--bright-white);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .breadcrumb {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
            font-size: 0.9rem;
            color: var(--dark-grey);
        }

        .breadcrumb a {
            color: var(--dark-grey);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .breadcrumb a:hover {
            color: var(--red-primary);
        }

        .breadcrumb i {
            margin: 0 0.5rem;
            font-size: 0.8rem;
        }

        .news-header {
            margin-bottom: 3rem;
        }

        .news-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--total-black);
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .news-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            margin-bottom: 2rem;
            color: var(--dark-grey);
            font-size: 0.95rem;
        }

        .news-meta span {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .news-meta i {
            color: var(--red-primary);
        }

        .news-category {
            display: inline-block;
            background: var(--red-primary);
            color: var(--bright-white);
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .news-image {
            width: 100%;
            height: 500px;
            border-radius: 20px;
            overflow: hidden;
            margin-bottom: 3rem;
            box-shadow: var(--shadow-heavy);
        }

        .news-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .news-content {
            max-width: 900px;
            margin: 0 auto;
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--dark-grey);
        }

        .news-content p {
            margin-bottom: 1.5rem;
        }

        .news-content h3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--total-black);
            margin: 2rem 0 1rem;
        }

        .news-content blockquote {
            border-left: 4px solid var(--red-primary);
            padding-left: 1.5rem;
            margin: 2rem 0;
            font-style: italic;
            color: var(--dark-grey);
        }

        .news-content ul, .news-content ol {
            margin: 1.5rem 0;
            padding-left: 2rem;
        }

        .news-content li {
            margin-bottom: 0.8rem;
        }

        .news-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 3rem;
            padding-top: 2rem;
            border-top: 1px solid var(--light-grey);
        }

        .share-buttons {
            display: flex;
            gap: 1rem;
        }

        .share-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--bright-white);
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .share-btn.facebook {
            background: #3b5998;
        }

        .share-btn.twitter {
            background: #1da1f2;
        }

        .share-btn.linkedin {
            background: #0077b5;
        }

        .share-btn.whatsapp {
            background: #25d366;
        }

        .share-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .download-section {
            display: flex;
            gap: 1rem;
        }

        .download-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: var(--red-primary);
            color: var(--bright-white);
            padding: 0.75rem 1.5rem;
            border-radius: 30px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .download-btn:hover {
            background: #d42834;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(245, 51, 63, 0.3);
        }

        .related-news {
            margin-top: 4rem;
            padding-top: 3rem;
            border-top: 1px solid var(--light-grey);
        }

        .related-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--total-black);
            margin-bottom: 2rem;
        }

        .related-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .related-card {
            background: var(--bright-white);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--shadow-light);
            transition: all 0.3s ease;
            border: 1px solid var(--light-grey);
        }

        .related-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-heavy);
            border-color: rgba(245, 51, 63, 0.3);
        }

        .related-image {
            height: 180px;
            overflow: hidden;
        }

        .related-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.5s ease;
        }

        .related-card:hover .related-image img {
            transform: scale(1.05);
        }

        .related-content {
            padding: 1.5rem;
        }

        .related-date {
            font-size: 0.85rem;
            color: var(--dark-grey);
            margin-bottom: 0.5rem;
        }

        .related-title-card {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--total-black);
            margin-bottom: 1rem;
            line-height: 1.3;
            transition: color 0.3s ease;
        }

        .related-card:hover .related-title-card {
            color: var(--red-primary);
        }

        .related-excerpt {
            color: var(--dark-grey);
            font-size: 0.95rem;
            line-height: 1.5;
            margin-bottom: 1rem;
        }

        .related-link {
            display: inline-flex;
            align-items: center;
            color: var(--red-primary);
            font-weight: 600;
            text-decoration: none;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .related-link:hover {
            gap: 5px;
        }

        .related-link::after {
            content: '→';
            margin-left: 5px;
            transition: margin-left 0.3s ease;
        }

        /* Footer */
        .footer {
            background: var(--total-black);
            color: var(--bright-white);
            padding: 4rem 0 2rem;
            margin-top: 4rem;
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
            transition: transform 0.3s ease;
        }

        .footer-logo:hover {
            transform: scale(1.05);
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
            background: var(--red-primary);
            transform: translateY(-3px) rotate(5deg);
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
            background: var(--red-primary);
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
            color: var(--red-primary);
            padding-left: 10px;
        }

        .footer-links a::before {
            content: '';
            width: 4px;
            height: 4px;
            background: var(--red-primary);
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
            transition: all 0.3s ease;
        }

        .contact-info li:hover {
            color: var(--bright-white);
            transform: translateX(5px);
        }

        .contact-info i {
            color: var(--red-primary);
            font-size: 1.1rem;
            width: 20px;
            transition: all 0.3s ease;
        }

        .contact-info li:hover i {
            transform: scale(1.2);
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
            color: var(--red-primary);
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

            .news-title {
                font-size: 2rem;
            }

            .related-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .mobile-menu-toggle {
                display: block;
            }

            .nav-menu {
                display: none;
            }

            .news-title {
                font-size: 1.8rem;
            }

            .news-image {
                height: 300px;
            }

            .news-meta {
                flex-direction: column;
                gap: 1rem;
            }

            .news-actions {
                flex-direction: column;
                gap: 1.5rem;
                align-items: flex-start;
            }

            .nav-container {
                padding: 0 1rem;
            }

            .container {
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

            .related-grid {
                grid-template-columns: 1fr;
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
            border-top: 3px solid var(--red-primary);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Interactive cursor */
        .cursor {
            position: fixed;
            width: 20px;
            height: 20px;
            background: var(--red-primary);
            border-radius: 50%;
            pointer-events: none;
            z-index: 1999;
            opacity: 0;
            transform: translate(-50%, -50%);
            transition: all 0.1s ease;
            mix-blend-mode: multiply;
        }
    </style>
</head>
<body>
    <!-- Loading Screen -->
    <div class="loading" id="loading">
        <div style="text-align: center;">
            <img src="logo.png" alt="SILOG" style="height: 80px; margin-bottom: 2rem; animation: pulse 2s infinite;">
            <div class="loader"></div>
            <p style="margin-top: 1rem; color: var(--dark-grey); font-size: 0.9rem;">Memuat pengalaman SILOG...</p>
        </div>
    </div>

    <!-- Interactive Cursor -->
    <div class="cursor" id="cursor"></div>

    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <a href="index.html"><img src="logo.png" alt="SILOG Logo" class="logo"></a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="index.html" class="nav-link">Beranda</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Tentang <i class="fas fa-chevron-down"></i></a>
                    <div class="dropdown">
                        <a href="history.html">History</a>
                        <a href="profil.html">Profil</a>
                        <a href="visi-misi.html">Visi & Misi</a>
                        <a href="kebijakan-perusahaan.html">Kebijakan Perusahaan</a>
                        <a href="tata-kelola-perusahaan.html">Tata Kelola Perusahaan</a>
                        <a href="sumber-daya-manusia.html">Sumber Daya Manusia</a>
                        <a href="direksi-komisaris.html">Direksi & Komisaris</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Bisnis <i class="fas fa-chevron-down"></i></a>
                    <div class="dropdown">
                        <a href="#">Logistik</a>
                        <a href="#">Konstruksi</a>
                        <a href="#">Distribusi</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="info.html" class="nav-link">Info<i class="fas fa-chevron-down"></i></a>
                    <div class="dropdown">
                        <a href="#berita">Berita</a>
                        <a href="#galeri">Galeri</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Jaringan <i class="fas fa-chevron-down"></i></a>
                    <div class="dropdown">
                        <a href="#">Portofolio</a>
                        <a href="#">Gudang</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Grub</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Karir</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Kontak</a>
                </li>
            </ul>
            <button class="mobile-menu-toggle">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>

    <!-- News Detail Section -->
    <section class="news-detail">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Beranda</a>
                <i class="fas fa-chevron-right"></i>
                <a href="info.html">Info</a>
                <i class="fas fa-chevron-right"></i>
                <a href="#berita">Berita</a>
                <i class="fas fa-chevron-right"></i>
                <span>SILOG Raih Penghargaan Perusahaan Logistik Terbaik 2024</span>
            </div>

            <div class="news-header">
                <h1 class="news-title primary-font">SILOG Raih Penghargaan Perusahaan Logistik Terbaik 2024</h1>
                <div class="news-meta">
                    <span><i class="fas fa-calendar"></i> 15 November 2024</span>
                    <span><i class="fas fa-user"></i> Tim SILOG</span>
                    <span><i class="fas fa-eye"></i> 1,245 views</span>
                    <span class="news-category">Penghargaan</span>
                </div>
            </div>

            <div class="news-image">
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=1200&h=600&fit=crop" alt="SILOG Raih Penghargaan">
            </div>

            <div class="news-content secondary-font">
                <p>SILOG berhasil meraih penghargaan bergengsi sebagai Perusahaan Logistik Terbaik tahun 2024 dalam ajang Indonesia Logistics Awards yang diselenggarakan di Jakarta. Penghargaan ini diberikan atas dedikasi SILOG dalam memberikan layanan logistik terbaik dan kontribusinya terhadap industri logistik nasional.</p>
                
                <p>Dalam sambutannya, Direktur Utama SILOG, Ir. Arifin Panigoro, M.M., menyampaikan rasa terima kasih atas kepercayaan yang diberikan. "Penghargaan ini merupakan hasil kerja keras seluruh tim SILOG dan dukungan dari seluruh stakeholder. Kami akan terus berinovasi dan meningkatkan kualitas layanan untuk memberikan nilai tambah bagi pelanggan dan masyarakat," ujarnya.</p>
                
                <blockquote>
                    "Penghargaan ini merupakan hasil kerja keras seluruh tim SILOG dan dukungan dari seluruh stakeholder. Kami akan terus berinovasi dan meningkatkan kualitas layanan untuk memberikan nilai tambah bagi pelanggan dan masyarakat."
                    <br><strong>- Ir. Arifin Panigoro, M.M., Direktur Utama SILOG</strong>
                </blockquote>
                
                <h3>Kriteria Penilaian yang Ketat</h3>
                <p>Indonesia Logistics Awards merupakan ajang penghargaan tahunan yang memberikan apresiasi kepada perusahaan-perusahaan logistik terbaik di Indonesia. Penilaian dilakukan berdasarkan berbagai kriteria termasuk inovasi, kualitas layanan, kontribusi industri, dan implementasi teknologi.</p>
                
                <p>Tahun ini, ada lebih dari 150 perusahaan logistik yang mengikuti ajang ini. Proses penilaian melibatkan tim juri yang independen dan ahli di bidang logistik, dengan metode penilaian yang transparan dan objektif.</p>
                
                <h3>Faktor Keberhasilan SILOG</h3>
                <p>Beberapa faktor yang menjadi penilaian utama bagi keberhasilan SILOG meraih penghargaan ini antara lain:</p>
                <ul>
                    <li><strong>Inovasi Teknologi:</strong> Implementasi sistem tracking berbasis AI dan IoT di seluruh gudang dan armada</li>
                    <li><strong>Kualitas Layanan:</strong> Tingkat kepuasan pelanggan yang mencapai 95% dengan waktu pengiriman yang tepat waktu</li>
                    <li><strong>Kontribusi Industri:</strong> Peran aktif dalam pengembangan ekosistem logistik nasional</li>
                    <li><strong>Keberlanjutan:</strong> Program ramah lingkungan dengan armada listrik dan pengurangan emisi karbon</li>
                    <li><strong>Tata Kelola:</strong> Implementasi good corporate governance yang baik dan transparan</li>
                </ul>
                
                <h3>Tantangan dan Solusi</h3>
                <p>Di tengah tantangan industri logistik yang semakin kompetitif, SILOG berhasil menunjukkan performa yang cemerlang dengan berbagai inovasi dan solusi kreatif. Salah satu tantangan terbesar yang dihadapi adalah integrasi sistem logistik di seluruh Indonesia yang memiliki karakteristik geografis yang beragam.</p>
                
                <p>Untuk mengatasi tantangan ini, SILOG mengembangkan solusi logistik terintegrasi yang dapat disesuaikan dengan kebutuhan setiap wilayah. Implementasi teknologi digital juga menjadi kunci utama dalam meningkatkan efisiensi dan transparansi dalam setiap proses bisnis.</p>
                
                <h3>Rencana Ke Depan</h3>
                <p>Dengan penghargaan ini, SILOG semakin termotivasi untuk terus menjadi pemimpin di industri logistik Indonesia dan berkontribusi pada pembangunan ekonomi nasional. Beberapa rencana strategis yang akan diimplementasikan dalam waktu dekat antara lain:</p>
                <ol>
                    <li>Perluasan jaringan ke 20 kota besar di seluruh Indonesia</li>
                    <li>Pengembangan platform logistik digital yang terintegrasi</li>
                    <li>Peningkatan kapasitas gudang otomatis di 5 lokasi strategis</li>
                    <li>Program pengembangan SDM logistik yang kompeten</li>
                    <li>Kolaborasi dengan startup logistik untuk inovasi berkelanjutan</li>
                </ol>
                
                <p>Dengan penghargaan Perusahaan Logistik Terbaik 2024, SILOG membuktikan komitmennya untuk terus memberikan layanan terbaik dan menjadi mitra terpercaya dalam mendukung pertumbuhan ekonomi Indonesia.</p>
            </div>

            <div class="news-actions">
                <div class="share-buttons">
                    <a href="#" class="share-btn facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="share-btn twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="share-btn linkedin"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="share-btn whatsapp"><i class="fab fa-whatsapp"></i></a>
                </div>
                <div class="download-section">
                    <a href="#" class="download-btn"><i class="fas fa-file-pdf"></i> Unduh PDF</a>
                    <a href="#" class="download-btn"><i class="fas fa-file-word"></i> Unduh DOC</a>
                </div>
            </div>

            <div class="related-news">
                <h2 class="related-title primary-font">Berita Terkait</h2>
                <div class="related-grid">
                    <div class="related-card">
                        <div class="related-image">
                            <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=600&h=400&fit=crop" alt="Berita Terkait 1">
                        </div>
                        <div class="related-content">
                            <div class="related-date">10 November 2024</div>
                            <h3 class="related-title-card">SILOG Jalin Kerjasama Strategis dengan Pelabuhan Tanjung Priok</h3>
                            <p class="related-excerpt">SILOG menandatangani perjanjian kerjasama strategis dengan Pelabuhan Tanjung Priok untuk meningkatkan efisiensi...</p>
                            <a href="berita-detail-2.html" class="related-link">Baca Selengkapnya</a>
                        </div>
                    </div>
                    
                    <div class="related-card">
                        <div class="related-image">
                            <img src="https://images.unsplash.com/photo-1558769132-cb1aea458c5e?w=600&h=400&fit=crop" alt="Berita Terkait 2">
                        </div>
                        <div class="related-content">
                            <div class="related-date">5 November 2024</div>
                            <h3 class="related-title-card">Peluncuran Sistem Tracking SILOG Berbasis AI</h3>
                            <p class="related-excerpt">SILOG meluncurkan sistem tracking terbaru berbasis kecerdasan buatan untuk memberikan layanan yang lebih...</p>
                            <a href="berita-detail-3.html" class="related-link">Baca Selengkapnya</a>
                        </div>
                    </div>
                    
                    <div class="related-card">
                        <div class="related-image">
                            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=600&h=400&fit=crop" alt="Berita Terkait 3">
                        </div>
                        <div class="related-content">
                            <div class="related-date">20 Oktober 2024</div>
                            <h3 class="related-title-card">SILOG Terpilih sebagai Perusahaan Terpercaya Versi Investor</h3>
                            <p class="related-excerpt">Dalam survei terbaru yang dilakukan oleh majalah Investor, SILOG berhasil meraih predikat sebagai perusahaan terpercaya...</p>
                            <a href="berita-detail-7.html" class="related-link">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-grid">
                <div class="footer-brand">
                    <img src="logo.png" alt="SILOG Logo" class="footer-logo">
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
                        <li><a href="#">Logistik</a></li>
                        <li><a href="#">Konstruksi</a></li>
                        <li><a href="#">Distribusi</a></li>
                        <li><a href="#">Semua Bisnis</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h4 class="primary-font">Informasi</h4>
                    <ul class="footer-links secondary-font">
                        <li><a href="#">Grup</a></li>
                        <li><a href="#">Berita</a></li>
                        <li><a href="#">Galeri</a></li>
                        <li><a href="#">Kontak</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h4 class="primary-font">Jaringan</h4>
                    <ul class="footer-links secondary-font">
                        <li><a href="#">Portofolio</a></li>
                        <li><a href="#">Gudang</a></li>
                        <li><a href="#">Semua Jaringan</a></li>
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
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Loading screen
        window.addEventListener('load', () => {
            setTimeout(() => {
                document.getElementById('loading').classList.add('hidden');
            }, 1000);
        });

        // Interactive cursor
        const cursor = document.getElementById('cursor');
        
        document.addEventListener('mousemove', (e) => {
            cursor.style.left = e.clientX + 'px';
            cursor.style.top = e.clientY + 'px';
            cursor.style.opacity = '0.8';
        });
        
        document.addEventListener('mouseleave', () => {
            cursor.style.opacity = '0';
        });

        // Add hover effects for interactive elements
        document.querySelectorAll('a, button, .social-link, .share-btn, .download-btn, .related-card').forEach(element => {
            element.addEventListener('mouseenter', () => {
                cursor.style.transform = 'translate(-50%, -50%) scale(1.5)';
                cursor.style.opacity = '0.6';
            });
            
            element.addEventListener('mouseleave', () => {
                cursor.style.transform = 'translate(-50%, -50%) scale(1)';
                cursor.style.opacity = '0.8';
            });
        });

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 100) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Smooth scrolling
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
    </script>
</body>
</html>