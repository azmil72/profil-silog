@extends('layouts.app')

@section('title', 'Sejarah - SILOG')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah Perusahaan - SILOG</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --red-primary: #F5333F;
            --red-dark: #d42834;
            --red-light: #ff6b73;
            --black: #0a0a0a;
            --gray-dark: #374151;
            --gray-medium: #6b7280;
            --gray-light: #f3f4f6;
            --white: #ffffff;
            --blue-accent: #3b82f6;
            --green-accent: #10b981;
            --orange-accent: #f59e0b;
            --purple-accent: #8b5cf6;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--black);
            background: var(--white);
            overflow-x: hidden;
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            background: linear-gradient(135deg, var(--red-primary) 0%, var(--red-dark) 50%, #b71c1c 100%);
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 30%, rgba(255,255,255,0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 70%, rgba(255,255,255,0.08) 0%, transparent 50%),
                url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            animation: float 30s ease-in-out infinite;
        }

        .hero-content {
            text-align: center;
            z-index: 3;
            position: relative;
            max-width: 1000px;
            padding: 0 2rem;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(10px);
            padding: 0.8rem 1.5rem;
            border-radius: 50px;
            color: var(--white);
            font-size: 0.9rem;
            font-weight: 500;
            margin-bottom: 2rem;
            border: 1px solid rgba(255,255,255,0.2);
            animation: slideInUp 1.2s ease-out;
        }

        .hero-badge::before {
            content: '📍';
            font-size: 1.1rem;
        }

        .hero-title {
            font-size: 4rem;
            font-weight: 900;
            color: var(--white);
            margin-bottom: 1.5rem;
            text-shadow: 0 10px 30px rgba(0,0,0,0.3);
            animation: slideInUp 1.2s ease-out 0.2s both;
            background: linear-gradient(135deg, #ffffff, #f0f0f0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-subtitle {
            font-size: 1.4rem;
            color: rgba(255,255,255,0.9);
            animation: slideInUp 1.2s ease-out 0.4s both;
            font-weight: 300;
            margin-bottom: 3rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .scroll-indicator {
            position: absolute;
            bottom: 3rem;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
            color: rgba(255,255,255,0.7);
            font-size: 0.9rem;
            animation: bounce 2s infinite;
        }

        .scroll-arrow {
            width: 30px;
            height: 30px;
            border: 2px solid rgba(255,255,255,0.7);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .scroll-arrow::after {
            content: '↓';
            font-size: 1.2rem;
            color: rgba(255,255,255,0.7);
        }

        /* Navigation Dots */
        .nav-dots {
            position: fixed;
            right: 2rem;
            top: 50%;
            transform: translateY(-50%);
            z-index: 100;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .nav-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(0,0,0,0.3);
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-dot.active {
            background: var(--red-primary);
            transform: scale(1.3);
        }

        .nav-dot::before {
            content: '';
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
            padding: 0.3rem 0.8rem;
            background: var(--black);
            color: var(--white);
            font-size: 0.8rem;
            border-radius: 4px;
            opacity: 0;
            transition: all 0.3s ease;
            white-space: nowrap;
        }

        .nav-dot:hover::before {
            opacity: 1;
        }

        /* Content Sections */
        .content-section {
            min-height: 100vh;
            padding: 8rem 2rem;
            display: flex;
            align-items: center;
            position: relative;
        }

        .section-overview {
            background: linear-gradient(135deg, var(--white) 0%, var(--gray-light) 100%);
        }

        .section-timeline {
            background: var(--white);
        }

        .section-milestones {
            background: linear-gradient(135deg, var(--gray-light) 0%, var(--white) 100%);
        }

        .section-achievements {
            background: var(--black);
            color: var(--white);
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            width: 100%;
        }

        .section-header {
            text-align: center;
            margin-bottom: 5rem;
        }

        .section-number {
            display: inline-block;
            background: var(--red-primary);
            color: var(--white);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            margin: 0 auto 2rem;
        }

        .section-title {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, var(--red-primary), var(--red-dark));
            border-radius: 2px;
        }

        .section-subtitle {
            font-size: 1.2rem;
            color: var(--gray-dark);
            max-width: 700px;
            margin: 0 auto;
            font-weight: 400;
        }

        /* Company Overview Cards */
        .overview-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 3rem;
            margin-top: 4rem;
        }

        .overview-card {
            background: var(--white);
            border-radius: 24px;
            padding: 3rem 2.5rem;
            box-shadow: 0 20px 50px rgba(0,0,0,0.08);
            transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            cursor: pointer;
            border: 1px solid rgba(245, 51, 63, 0.1);
        }

        .overview-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: linear-gradient(90deg, var(--red-primary), var(--red-dark));
            transform: scaleX(0);
            transition: transform 0.5s ease;
        }

        .overview-card:hover::before {
            transform: scaleX(1);
        }

        .overview-card:hover {
            transform: translateY(-20px) scale(1.03);
            box-shadow: 0 30px 70px rgba(245, 51, 63, 0.2);
        }

        .card-icon {
            width: 90px;
            height: 90px;
            background: linear-gradient(135deg, var(--red-primary), var(--red-dark));
            border-radius: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 2rem;
            position: relative;
            overflow: hidden;
        }

        .card-icon::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255,255,255,0.2), transparent);
            animation: iconShine 4s ease-in-out infinite;
        }

        .card-icon svg {
            width: 45px;
            height: 45px;
            fill: var(--white);
            z-index: 2;
            position: relative;
        }

        .card-title {
            font-size: 1.6rem;
            font-weight: 700;
            color: var(--black);
            margin-bottom: 1rem;
            transition: color 0.3s ease;
        }

        .overview-card:hover .card-title {
            color: var(--red-primary);
        }

        .card-description {
            color: var(--gray-dark);
            line-height: 1.7;
            font-size: 1.05rem;
        }

        /* Timeline */
        .timeline {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 6px;
            background: linear-gradient(180deg, var(--red-primary), var(--red-dark), var(--red-primary));
            transform: translateX(-50%);
            border-radius: 3px;
        }

        .timeline-item {
            position: relative;
            margin: 5rem 0;
            opacity: 0;
            transform: translateY(80px);
            transition: all 1s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .timeline-item.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .timeline-item:nth-child(odd) .timeline-content {
            margin-left: 0;
            margin-right: 52%;
            padding-right: 4rem;
            text-align: right;
        }

        .timeline-item:nth-child(even) .timeline-content {
            margin-left: 52%;
            margin-right: 0;
            padding-left: 4rem;
            text-align: left;
        }

        .timeline-content {
            background: var(--white);
            border-radius: 24px;
            padding: 3.5rem 3rem;
            box-shadow: 0 20px 60px rgba(0,0,0,0.1);
            position: relative;
            border: 2px solid rgba(245, 51, 63, 0.1);
            transition: all 0.6s ease;
            overflow: hidden;
        }

        .timeline-content::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(245, 51, 63, 0.02) 0%, rgba(245, 51, 63, 0.05) 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .timeline-content:hover::before {
            opacity: 1;
        }

        .timeline-content:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 30px 80px rgba(245, 51, 63, 0.15);
            border-color: rgba(245, 51, 63, 0.3);
        }

        .timeline-year {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, var(--red-primary), var(--red-dark));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 900;
            color: var(--white);
            font-size: 1.3rem;
            box-shadow: 0 15px 40px rgba(245, 51, 63, 0.3);
            z-index: 2;
            border: 4px solid var(--white);
        }

        .timeline-year::before {
            content: '';
            position: absolute;
            width: 120px;
            height: 120px;
            border: 3px solid var(--red-primary);
            border-radius: 50%;
            opacity: 0.3;
            animation: pulse 3s infinite;
        }

        .milestone-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--red-primary);
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 1;
        }

        .milestone-description {
            color: var(--gray-dark);
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 2rem;
            position: relative;
            z-index: 1;
        }

        .milestone-highlights {
            list-style: none;
            margin: 0;
            padding: 0;
            position: relative;
            z-index: 1;
        }

        .milestone-highlights li {
            position: relative;
            padding-left: 2.5rem;
            margin-bottom: 1rem;
            color: var(--gray-dark);
            font-size: 1rem;
            transition: color 0.3s ease;
        }

        .milestone-highlights li::before {
            content: '✓';
            position: absolute;
            left: 0;
            top: 0;
            color: var(--red-primary);
            font-weight: bold;
            font-size: 1.2rem;
            width: 20px;
            height: 20px;
            background: rgba(245, 51, 63, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
        }

        /* Achievement Stats */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 3rem;
            margin-top: 4rem;
        }

        .stat-card {
            text-align: center;
            padding: 2rem 1.5rem;
            background: rgba(255,255,255,0.1);
            border-radius: 20px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
            transition: transform 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-10px);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 900;
            color: var(--white);
            margin-bottom: 0.5rem;
            display: block;
        }

        .stat-label {
            color: rgba(255,255,255,0.8);
            font-size: 1.1rem;
            font-weight: 500;
        }

        /* Animations */
        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
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
                transform: translateY(-20px) rotate(1deg);
            }
            66% {
                transform: translateY(-10px) rotate(-1deg);
            }
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
                opacity: 0.3;
            }
            50% {
                transform: scale(1.1);
                opacity: 0.1;
            }
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateX(-50%) translateY(0);
            }
            40% {
                transform: translateX(-50%) translateY(-10px);
            }
            60% {
                transform: translateX(-50%) translateY(-5px);
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

        /* Responsive Design */
        @media (max-width: 1024px) {
            .timeline::before {
                left: 3rem;
            }

            .timeline-item:nth-child(odd) .timeline-content,
            .timeline-item:nth-child(even) .timeline-content {
                margin-left: 6rem;
                margin-right: 0;
                padding-left: 2rem;
                padding-right: 2rem;
                text-align: left;
            }

            .timeline-year {
                left: 3rem;
                width: 80px;
                height: 80px;
                font-size: 1.1rem;
            }

            .nav-dots {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.8rem;
            }

            .hero-subtitle {
                font-size: 1.1rem;
            }

            .section-title {
                font-size: 2.5rem;
            }

            .content-section {
                padding: 4rem 1rem;
            }

            .timeline-content {
                padding: 2.5rem 2rem;
            }

            .milestone-title {
                font-size: 1.6rem;
            }

            .timeline-year {
                width: 60px;
                height: 60px;
                font-size: 0.9rem;
            }

            .overview-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 2rem;
            }
        }

        @media (max-width: 480px) {
            .hero-title {
                font-size: 2.2rem;
            }

            .timeline-year {
                left: 2rem;
                width: 50px;
                height: 50px;
                font-size: 0.8rem;
            }

            .timeline::before {
                left: 2rem;
            }

            .timeline-item:nth-child(odd) .timeline-content,
            .timeline-item:nth-child(even) .timeline-content {
                margin-left: 5rem;
                padding: 2rem 1.5rem;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation Dots -->
    <div class="nav-dots">
        <div class="nav-dot active" data-section="hero"></div>
        <div class="nav-dot" data-section="overview"></div>
        <div class="nav-dot" data-section="timeline"></div>
        <div class="nav-dot" data-section="achievements"></div>
    </div>

    <!-- Hero Section -->
    <section class="hero" id="hero">
        <div class="hero-content">
            <div class="hero-badge">
                Sejak 1974 • 50+ Tahun Pengalaman
            </div>
            <h1 class="hero-title">Perjalanan SILOG</h1>
            <p class="hero-subtitle">
                Dari Yayasan Sejahtera Semen Gresik hingga menjadi perusahaan logistik terintegrasi terdepan di Indonesia
            </p>
        </div>
        
        <div class="scroll-indicator">
            <span>Scroll untuk melihat sejarah</span>
            <div class="scroll-arrow"></div>
        </div>
    </section>

    <!-- Company Overview Section -->
    <section class="content-section section-overview" id="overview">
        <div class="container">
            <div class="section-header">
                <div class="section-number">01</div>
                <h2 class="section-title">Fondasi SILOG</h2>
                <p class="section-subtitle">
                    Memahami asal-usul dan nilai-nilai yang menjadi fondasi kuat SILOG dalam melayani Indonesia
                </p>
            </div>

            <div class="overview-grid">
                <div class="overview-card">
                    <div class="card-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7l-10-5z"/>
                        </svg>
                    </div>
                    <h3 class="card-title">Warisan Terpercaya</h3>
                    <p class="card-description">
                        Berawal dari Yayasan Sejahtera Semen Gresik pada 1969, SILOG membangun fondasi kepercayaan yang kuat dalam industri logistik Indonesia selama lebih dari 5 dekade.
                    </p>
                </div>

                <div class="overview-card">
                    <div class="card-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm3.5 6L12 10.5 8.5 8 12 5.5 15.5 8zM8.5 16L12 13.5 15.5 16 12 18.5 8.5 16z"/>
                        </svg>
                    </div>
                    <h3 class="card-title">Jaringan Nasional</h3>
                    <p class="card-description">
                        Memiliki jaringan distribusi yang menjangkau seluruh Indonesia, menghubungkan berbagai daerah dengan layanan logistik terintegrasi dan terpercaya.
                    </p>
                </div>

                <div class="overview-card">
                    <div class="card-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                        </svg>
                    </div>
                    <h3 class="card-title">Inovasi Berkelanjutan</h3>
                    <p class="card-description">
                        Terus berinovasi dalam teknologi dan sistem manajemen untuk memberikan solusi logistik yang efisien dan modern kepada seluruh pelanggan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="content-section section-timeline" id="timeline">
        <div class="container">
            <div class="section-header">
                <div class="section-number">02</div>
                <h2 class="section-title">Tonggak Sejarah</h2>
                <p class="section-subtitle">
                    Perjalanan transformasi SILOG dari yayasan sederhana menjadi pemimpin industri logistik Indonesia
                </p>
            </div>

            <div class="timeline">
                <!-- 1969 - Foundation -->
                <div class="timeline-item">
                    <div class="timeline-year">1969</div>
                    <div class="timeline-content">
                        <h3 class="milestone-title">Awal Mula Yayasan</h3>
                        <p class="milestone-description">
                            Yayasan Sejahtera Semen Gresik didirikan sebagai langkah awal untuk mendukung distribusi produk semen ke seluruh pelosok Indonesia.
                        </p>
                        <ul class="milestone-highlights">
                            <li>Pendirian Yayasan Sejahtera Semen Gresik</li>
                            <li>Fokus awal pada distribusi semen</li>
                            <li>Pembentukan jaringan distribusi pertama</li>
                            <li>Komitmen melayani seluruh wilayah Indonesia</li>
                        </ul>
                    </div>
                </div>

                <!-- 1974 - Company Formation -->
                <div class="timeline-item">
                    <div class="timeline-year">1974</div>
                    <div class="timeline-content">
                        <h3 class="milestone-title">Pendirian PT Varia Usaha</h3>
                        <p class="milestone-description">
                            Transformasi kelembagaan dengan didirikannya PT Varia Usaha pada 13 Februari 1974, menandai era baru dalam pengembangan bisnis logistik.
                        </p>
                        <ul class="milestone-highlights">
                            <li>Akta Pendirian Nomor 121 di Surabaya</li>
                            <li>Kerjasama Yayasan dengan D.A. Karim</li>
                            <li>Legalisasi struktur perusahaan</li>
                            <li>Pengembangan kapasitas operasional</li>
                        </ul>
                    </div>
                </div>

                <!-- 1980s - Expansion Era -->
                <div class="timeline-item">
                    <div class="timeline-year">1980</div>
                    <div class="timeline-content">
                        <h3 class="milestone-title">Era Ekspansi</h3>
                        <p class="milestone-description">
                            Periode ekspansi besar-besaran dengan perluasan jaringan distribusi ke berbagai wilayah Indonesia, memperkuat posisi sebagai perusahaan logistik nasional.
                        </p>
                        <ul class="milestone-highlights">
                            <li>Ekspansi ke wilayah Jawa Tengah dan Jawa Timur</li>
                            <li>Pembukaan cabang regional</li>
                            <li>Diversifikasi layanan logistik</li>
                            <li>Peningkatan armada kendaraan</li>
                        </ul>
                    </div>
                </div>

                <!-- 1990s - Modernization -->
                <div class="timeline-item">
                    <div class="timeline-year">1990</div>
                    <div class="timeline-content">
                        <h3 class="milestone-title">Modernisasi Sistem</h3>
                        <p class="milestone-description">
                            Implementasi sistem manajemen modern dan teknologi informasi untuk meningkatkan efisiensi operasional dan kualitas layanan.
                        </p>
                        <ul class="milestone-highlights">
                            <li>Sistem komputerisasi pertama</li>
                            <li>Standardisasi proses operasional</li>
                            <li>Pelatihan SDM berkelanjutan</li>
                            <li>Sertifikasi kualitas internasional</li>
                        </ul>
                    </div>
                </div>

                <!-- 2000s - Digital Transformation -->
                <div class="timeline-item">
                    <div class="timeline-year">2000</div>
                    <div class="timeline-content">
                        <h3 class="milestone-title">Transformasi Digital</h3>
                        <p class="milestone-description">
                            Memasuki era millennium dengan adopsi teknologi digital, e-commerce, dan sistem manajemen terintegrasi untuk memenuhi tuntutan pasar modern.
                        </p>
                        <ul class="milestone-highlights">
                            <li>Implementasi ERP system</li>
                            <li>Platform e-commerce B2B</li>
                            <li>GPS tracking dan fleet management</li>
                            <li>Customer portal online</li>
                        </ul>
                    </div>
                </div>

                <!-- 2010s - Integrated Services -->
                <div class="timeline-item">
                    <div class="timeline-year">2010</div>
                    <div class="timeline-content">
                        <h3 class="milestone-title">Layanan Terintegrasi</h3>
                        <p class="milestone-description">
                            Pengembangan layanan logistik terintegrasi dengan fokus pada cold chain, pharmaceutical logistics, dan specialized handling.
                        </p>
                        <ul class="milestone-highlights">
                            <li>Fasilitas cold storage modern</li>
                            <li>Sertifikasi GDP untuk farmasi</li>
                            <li>Warehouse automation</li>
                            <li>Supply chain consulting</li>
                        </ul>
                    </div>
                </div>

                <!-- 2020s - Future Ready -->
                <div class="timeline-item">
                    <div class="timeline-year">2020</div>
                    <div class="timeline-content">
                        <h3 class="milestone-title">Siap Masa Depan</h3>
                        <p class="milestone-description">
                            Adaptasi cepat terhadap pandemi COVID-19 dan percepatan digitalisasi untuk mempersiapkan SILOG menghadapi tantangan masa depan.
                        </p>
                        <ul class="milestone-highlights">
                            <li>Contactless delivery solutions</li>
                            <li>AI-powered analytics</li>
                            <li>Sustainable logistics practices</li>
                            <li>IoT-enabled smart warehouses</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Achievements Section -->
    <section class="content-section section-achievements" id="achievements">
        <div class="container">
            <div class="section-header">
                <div class="section-number" style="background: var(--white); color: var(--red-primary);">03</div>
                <h2 class="section-title" style="color: var(--white);">Pencapaian Terkini</h2>
                <p class="section-subtitle" style="color: rgba(255,255,255,0.8);">
                    Prestasi dan pencapaian SILOG yang mencerminkan dedikasi dalam melayani Indonesia
                </p>
            </div>

            <div class="stats-grid">
                <div class="stat-card">
                    <span class="stat-number">50+</span>
                    <span class="stat-label">Tahun Pengalaman</span>
                </div>

                <div class="stat-card">
                    <span class="stat-number">34</span>
                    <span class="stat-label">Provinsi Terjangkau</span>
                </div>

                <div class="stat-card">
                    <span class="stat-number">500+</span>
                    <span class="stat-label">Mitra Distribusi</span>
                </div>

                <div class="stat-card">
                    <span class="stat-number">1000+</span>
                    <span class="stat-label">Karyawan Berpengalaman</span>
                </div>

                <div class="stat-card">
                    <span class="stat-number">100+</span>
                    <span class="stat-label">Distribution Points</span>
                </div>

                <div class="stat-card">
                    <span class="stat-number">24/7</span>
                    <span class="stat-label">Customer Support</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Navigation Cards Section -->
    <section class="cards-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Jelajahi Lebih Lanjut</h2>
                <p class="section-subtitle">
                    Pelajari lebih dalam tentang SILOG melalui informasi komprehensif perusahaan
                </p>
            </div>

            <div class="cards-grid">
                <div class="content-card" onclick="window.location.href='/tentang-kami/profil'">
                    <div class="card-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                    </div>
                    <h3 class="card-title">Profil Perusahaan</h3>
                    <p class="card-description">
                        Temukan identitas lengkap SILOG, mulai dari visi, misi, hingga struktur organisasi yang mendukung operasional perusahaan.
                    </p>
                    <a href="/tentang-kami/profil" class="card-link">Lihat Profil</a>
                </div>

                <div class="content-card" onclick="window.location.href='/tentang-kami/visi-misi'">
                    <div class="card-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    </div>
                    <h3 class="card-title">Visi & Misi</h3>
                    <p class="card-description">
                        Pahami arah dan tujuan SILOG dalam membangun masa depan industri logistik Indonesia yang berkelanjutan.
                    </p>
                    <a href="/tentang-kami/visi-misi" class="card-link">Pelajari Visi Misi</a>
                </div>

                <div class="content-card" onclick="window.location.href='/tentang-kami/kebijakan'">
                    <div class="card-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                        </svg>
                    </div>
                    <h3 class="card-title">Kebijakan Perusahaan</h3>
                    <p class="card-description">
                        Ketahui kebijakan dan standar operasional yang menjadi pedoman SILOG dalam memberikan layanan terbaik.
                    </p>
                    <a href="/tentang-kami/kebijakan" class="card-link">Baca Kebijakan</a>
                </div>

                <div class="content-card" onclick="window.location.href='/tentang-kami/tata-kelola'">
                    <div class="card-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M16,12A2,2 0 0,1 18,10A2,2 0 0,1 20,12A2,2 0 0,1 18,14A2,2 0 0,1 16,12M10,12A2,2 0 0,1 12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12M4,12A2,2 0 0,1 6,10A2,2 0 0,1 8,12A2,2 0 0,1 6,14A2,2 0 0,1 4,12Z"/>
                        </svg>
                    </div>
                    <h3 class="card-title">Tata Kelola Perusahaan</h3>
                    <p class="card-description">
                        Sistem tata kelola yang transparan dan akuntabel sebagai fondasi kepercayaan stakeholder terhadap SILOG.
                    </p>
                    <a href="/tentang-kami/tata-kelola" class="card-link">Lihat Tata Kelola</a>
                </div>

                <div class="content-card" onclick="window.location.href='/tentang-kami/sdm'">
                    <div class="card-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M16 4C18.2 4 20 5.8 20 8S18.2 12 16 12 12 10.2 12 8 13.8 4 16 4M16 14C20.4 14 24 15.8 24 18V20H8V18C8 15.8 11.6 14 16 14M8.5 4C10.43 4 12 5.57 12 7.5S10.43 11 8.5 11 5 9.43 5 7.5 6.57 4 8.5 4M8.5 13C11.87 13 15 14.37 15 16.25V18H2V16.25C2 14.37 5.13 13 8.5 13Z"/>
                        </svg>
                    </div>
                    <h3 class="card-title">Sumber Daya Manusia</h3>
                    <p class="card-description">
                        Tim profesional dan berpengalaman yang menjadi kekuatan utama dalam memberikan solusi logistik terdepan.
                    </p>
                    <a href="/tentang-kami/sdm" class="card-link">Kenali Tim Kami</a>
                </div>

                <div class="content-card" onclick="window.location.href='/tentang-kami/direksi-komisaris'">
                    <div class="card-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z"/>
                        </svg>
                    </div>
                    <h3 class="card-title">Direksi & Komisaris</h3>
                    <p class="card-description">
                        Kepemimpinan visioner yang membawa SILOG menjadi perusahaan logistik terpercaya dan berkelanjutan di Indonesia.
                    </p>
                    <a href="/tentang-kami/direksi-komisaris" class="card-link">Lihat Pimpinan</a>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Cards Section */
        .cards-section {
            background: linear-gradient(135deg, var(--gray-light) 0%, var(--white) 100%);
            padding: 8rem 2rem;
            position: relative;
        }

        /* Cards Grid */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2.5rem;
            margin-top: 4rem;
        }

        .content-card {
            background: var(--white);
            border-radius: 20px;
            padding: 3rem 2.5rem;
            box-shadow: 0 15px 40px rgba(0,0,0,0.08);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            cursor: pointer;
            border: 1px solid rgba(245, 51, 63, 0.1);
        }

        .content-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, var(--red-primary), var(--red-dark));
            transform: scaleX(0);
            transition: transform 0.5s ease;
        }

        .content-card:hover::before {
            transform: scaleX(1);
        }

        .content-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 25px 60px rgba(245, 51, 63, 0.15);
        }

        .card-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--red-primary), var(--red-dark));
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 2rem;
            position: relative;
            overflow: hidden;
        }

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

        .card-icon svg {
            width: 40px;
            height: 40px;
            fill: var(--white);
            z-index: 2;
            position: relative;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--black);
            margin-bottom: 1rem;
            transition: color 0.3s ease;
        }

        .content-card:hover .card-title {
            color: var(--red-primary);
        }

        .card-description {
            color: var(--gray-dark);
            line-height: 1.7;
            font-size: 1rem;
            margin-bottom: 1.5rem;
        }

        .card-link {
            display: inline-flex;
            align-items: center;
            color: var(--red-primary);
            font-weight: 600;
            text-decoration: none;
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }

        .card-link:hover {
            gap: 8px;
        }

        .card-link::after {
            content: '→';
            margin-left: 5px;
            transition: margin-left 0.3s ease;
        }

        /* Responsive for cards */
        @media (max-width: 768px) {
            .cards-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .content-card {
                padding: 2.5rem 2rem;
            }
        }
    </style>

    <script>
                // Add interactive cursor
        const cursor = document.createElement('div');
        cursor.style.cssText = `
            position: fixed;
            width: 20px;
            height: 20px;
            background: var(--red-primary);
            border-radius: 50%;
            pointer-events: none;
            z-index: 9999;
            opacity: 0;
            transform: translate(-50%, -50%);
            transition: all 0.1s ease;
            mix-blend-mode: multiply;
        `;
        document.body.appendChild(cursor);
        
        document.addEventListener('mousemove', (e) => {
            cursor.style.left = e.clientX + 'px';
            cursor.style.top = e.clientY + 'px';
            cursor.style.opacity = '0.8';
        });
        
        document.addEventListener('mouseleave', () => {
            cursor.style.opacity = '0';
        });
        // Navigation dots functionality
        const navDots = document.querySelectorAll('.nav-dot');
        const sections = document.querySelectorAll('.content-section, .hero');
        
        // Set nav dot labels
        navDots[0].setAttribute('data-label', 'Beranda');
        navDots[1].setAttribute('data-label', 'Fondasi');
        navDots[2].setAttribute('data-label', 'Sejarah');
        navDots[3].setAttribute('data-label', 'Pencapaian');
        
        navDots.forEach((dot, index) => {
            const label = dot.getAttribute('data-label');
            dot.style.setProperty('--label', `"${label}"`);
            dot.addEventListener('click', () => {
                sections[index].scrollIntoView({ behavior: 'smooth' });
            });
        });

        // Scroll spy for navigation dots
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '-50px 0px -50px 0px'
        };

        const navObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const index = Array.from(sections).indexOf(entry.target);
                    navDots.forEach(dot => dot.classList.remove('active'));
                    if (navDots[index]) navDots[index].classList.add('active');
                }
            });
        }, observerOptions);

        sections.forEach(section => navObserver.observe(section));

        // Timeline animation on scroll
        const timelineObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, {
            threshold: 0.2,
            rootMargin: '0px 0px -100px 0px'
        });

        document.querySelectorAll('.timeline-item').forEach(item => {
            timelineObserver.observe(item);
        });

        // Smooth scrolling enhancement
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

        // Counter animation for stats
        const animateCounters = () => {
            const counters = document.querySelectorAll('.stat-number');
            counters.forEach(counter => {
                const target = parseInt(counter.textContent.replace(/\D/g, '')) || 0;
                const suffix = counter.textContent.replace(/[0-9]/g, '');
                let current = 0;
                const increment = target / 100;
                
                const updateCounter = () => {
                    current += increment;
                    if (current < target) {
                        counter.textContent = Math.floor(current) + suffix;
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target + suffix;
                    }
                };
                
                updateCounter();
            });
        };

        // Trigger counter animation when achievements section is visible
        const achievementsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    achievementsObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        const achievementsSection = document.getElementById('achievements');
        if (achievementsSection) {
            achievementsObserver.observe(achievementsSection);
        }

        // Parallax effect for hero section
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const hero = document.getElementById('hero');
            if (hero) {
                hero.style.transform = `translateY(${scrolled * 0.3}px)`;
            }
        });

        // Add CSS custom properties for nav dot labels
        const style = document.createElement('style');
        style.textContent = `
            .nav-dot::before {
                content: attr(data-label);
            }
        `;
        document.head.appendChild(style);

        // Performance optimization
        let ticking = false;
        
        function updateScrollEffects() {
            if (!ticking) {
                requestAnimationFrame(() => {
                    const scrollY = window.pageYOffset;
                    
                    // Hero parallax
                    const hero = document.getElementById('hero');
                    if (hero && scrollY < window.innerHeight) {
                        hero.style.transform = `translateY(${scrollY * 0.3}px)`;
                    }
                    
                    ticking = false;
                });
                ticking = true;
            }
        }
        
        window.addEventListener('scroll', updateScrollEffects, { passive: true });

        // Loading animation
        window.addEventListener('load', () => {
            document.body.style.opacity = '0';
            setTimeout(() => {
                document.body.style.transition = 'opacity 1s ease';
                document.body.style.opacity = '1';
            }, 100);
        });

        // Interactive hover effects for timeline items
        document.querySelectorAll('.timeline-content').forEach(content => {
            content.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-15px) scale(1.02)';
                this.style.zIndex = '10';
            });
            
            content.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
                this.style.zIndex = '1';
            });
        });

        // Add smooth reveal animation for overview cards
        const cardObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, index * 200);
                }
            });
        }, { threshold: 0.3 });

        document.querySelectorAll('.overview-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(50px)';
            card.style.transition = 'all 0.8s cubic-bezier(0.4, 0, 0.2, 1)';
            cardObserver.observe(card);
        });

        // Add floating animation to icons
        document.querySelectorAll('.card-icon').forEach((icon, index) => {
            icon.style.animationDelay = `${index * 0.5}s`;
            icon.style.animation = 'float 6s ease-in-out infinite';
        });
    </script>
</body>
</html>