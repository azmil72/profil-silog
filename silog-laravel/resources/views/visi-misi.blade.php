@extends('layouts.app')

@section('title', 'Visi & Misi - SILOG')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi & Misi - SILOG</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap');
        
        :root {
            --white: #FFFFFF;
            --black: #000000;
            --gray-light: #DFDEDE;
            --gray-dark: #5E5E5F;
            --red-primary: #F5333F;
            --red-dark: #d42834;
            --gradient-primary: linear-gradient(135deg, #F5333F 0%, #FF6B6B 100%);
            --gradient-secondary: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
            background: var(--white);
            color: var(--black);
            overflow-x: hidden;
            line-height: 1.6;
        }

        /* Enhanced Hero Section */
        .hero-section {
            background: linear-gradient(135deg, rgba(245, 51, 63, 0.9) 0%, rgba(0, 0, 0, 0.8) 100%),
                        url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=1920&h=800&fit=crop') center/cover;
            padding: 12rem 0 8rem;
            position: relative;
            overflow: hidden;
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(ellipse at center, rgba(245, 51, 63, 0.1) 0%, transparent 70%),
                        url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="hexagon" width="28" height="24" patternUnits="userSpaceOnUse"><path d="M14,2 L24,8 L24,16 L14,22 L4,16 L4,8 Z" fill="none" stroke="rgba(255,255,255,0.08)" stroke-width="1"/></pattern></defs><rect width="100" height="100" fill="url(%23hexagon)"/></svg>') repeat;
            animation: patternMove 30s linear infinite;
        }

        @keyframes patternMove {
            0% { transform: translate(0, 0) rotate(0deg); }
            100% { transform: translate(28px, 24px) rotate(360deg); }
        }

        .hero-section::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 120px;
            background: linear-gradient(180deg, transparent 0%, rgba(255,255,255,0.8) 60%, var(--white) 100%);
            z-index: 2;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            position: relative;
            z-index: 2;
        }

        .hero-content {
            text-align: center;
            color: var(--white);
            max-width: 1000px;
            margin: 0 auto;
            position: relative;
            z-index: 3;
        }

        .hero-title {
            font-family: 'Poppins', sans-serif;
            font-size: 4.5rem;
            font-weight: 900;
            margin-bottom: 2rem;
            text-shadow: 3px 3px 30px rgba(0, 0, 0, 0.7);
            opacity: 0;
            transform: scale(0.8);
            animation: heroTitleZoom 1s ease-out 0.3s forwards, shimmer 3s ease-in-out infinite;
            background: linear-gradient(45deg, #ffffff, #f8f9fa, #ffffff);
            background-size: 200% 200%;
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            position: relative;
        }

        @keyframes shimmer {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        @keyframes heroTitleZoom {
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .hero-subtitle {
            font-size: 1.4rem;
            line-height: 1.6;
            opacity: 0.95;
            max-width: 700px;
            margin: 0 auto;
            opacity: 0;
            transform: translateY(30px);
            animation: slideInUp 0.8s ease-out 0.6s forwards;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
        }

        @keyframes slideInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Hero Statistics */
        .hero-stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 3rem;
            margin-top: 4rem;
            padding: 3rem 0;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            opacity: 0;
            transform: translateY(30px);
            animation: slideInUp 0.8s ease-out 1.2s forwards;
        }

        .hero-stat-item {
            text-align: center;
            position: relative;
        }

        .hero-stat-number {
            font-size: 3rem;
            font-weight: 900;
            color: var(--white);
            margin-bottom: 0.5rem;
            font-family: 'Poppins', sans-serif;
            text-shadow: 2px 2px 20px rgba(0, 0, 0, 0.5);
            background: linear-gradient(45deg, #ffffff, #f1f3f4);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-stat-label {
            font-size: 0.95rem;
            color: rgba(255, 255, 255, 0.9);
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 500;
        }

        .hero-stat-item::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 30px;
            height: 2px;
            background: var(--red-primary);
            opacity: 0.7;
        }

        /* Enhanced Decorative Elements */
        .hero-decoration {
            position: absolute;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(245,51,63,0.1) 50%, transparent 70%);
            animation: float 8s ease-in-out infinite;
            z-index: 1;
        }

        .hero-decoration:nth-child(1) {
            top: 15%;
            right: 8%;
            width: 300px;
            height: 300px;
            animation-duration: 8s;
        }

        .hero-decoration:nth-child(2) {
            top: 60%;
            left: 5%;
            width: 200px;
            height: 200px;
            animation-delay: -3s;
            animation-duration: 12s;
        }

        .hero-decoration:nth-child(3) {
            top: 25%;
            left: 15%;
            width: 150px;
            height: 150px;
            animation-delay: -6s;
            animation-duration: 10s;
            background: radial-gradient(circle, rgba(255,255,255,0.08) 0%, transparent 60%);
        }

        .hero-decoration:nth-child(4) {
            top: 70%;
            right: 20%;
            width: 100px;
            height: 100px;
            animation-delay: -9s;
            animation-duration: 6s;
            background: radial-gradient(circle, rgba(245,51,63,0.15) 0%, transparent 50%);
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        /* Main Content */
        .main-content {
            padding: 8rem 0;
            background: var(--white);
            position: relative;
        }

        /* Vision & Mission Section */
        .vm-section {
            margin-bottom: 6rem;
        }

        .vm-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            margin-top: 4rem;
        }

        .vm-card {
            background: var(--white);
            border-radius: 25px;
            padding: 4rem 3rem;
            box-shadow: var(--shadow-light);
            position: relative;
            overflow: hidden;
            transition: all 0.5s ease;
            border: 2px solid rgba(245, 51, 63, 0.1);
        }

        .vm-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: var(--gradient-primary);
            transform: scaleX(0);
            transition: transform 0.5s ease;
        }

        .vm-card:hover {
            transform: translateY(-15px);
            box-shadow: var(--shadow-colored);
        }

        .vm-card:hover::before {
            transform: scaleX(1);
        }

        .vm-icon {
            width: 100px;
            height: 100px;
            background: var(--gradient-primary);
            border-radius: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 2rem;
            box-shadow: var(--shadow-colored);
        }

        .vm-icon i {
            font-size: 3rem;
            color: var(--white);
        }

        .vm-title {
            font-family: 'Poppins', sans-serif;
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--black);
            margin-bottom: 2rem;
        }

        .vm-text {
            color: var(--gray-dark);
            font-size: 1.1rem;
            line-height: 1.8;
            text-align: justify;
        }

        /* Mission Items */
        .mission-items {
            margin-top: 2rem;
        }

        .mission-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 2rem;
            padding: 1.5rem;
            background: rgba(245, 51, 63, 0.05);
            border-radius: 15px;
            border-left: 4px solid var(--red-primary);
            transition: all 0.3s ease;
        }

        .mission-item:hover {
            transform: translateX(5px);
            box-shadow: var(--shadow-light);
        }

        .mission-number {
            min-width: 50px;
            height: 50px;
            background: var(--gradient-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: 700;
            font-size: 1.2rem;
            margin-right: 1.5rem;
            flex-shrink: 0;
        }

        .mission-content h4 {
            font-family: 'Poppins', sans-serif;
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--red-primary);
            margin-bottom: 0.8rem;
            font-style: italic;
        }

        .mission-content p {
            color: var(--gray-dark);
            font-size: 1rem;
            line-height: 1.7;
            text-align: justify;
        }


        /* Values Section */
        .values-section {
            background: linear-gradient(135deg, #f8f9fa 0%, var(--white) 50%, #f1f3f4 100%);
            padding: 8rem 0;
            margin-top: 6rem;
            position: relative;
            overflow: hidden;
        }

        .values-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="dots" width="10" height="10" patternUnits="userSpaceOnUse"><circle cx="5" cy="5" r="1.5" fill="rgba(245,51,63,0.08)"/></pattern></defs><rect width="100" height="100" fill="url(%23dots)"/></svg>') repeat;
            pointer-events: none;
            animation: dotMove 25s linear infinite;
        }

        @keyframes dotMove {
            0% { transform: translate(0, 0); }
            100% { transform: translate(10px, 10px); }
        }

        .section-title {
            text-align: center;
            font-family: 'Poppins', sans-serif;
            font-size: 3rem;
            font-weight: 800;
            color: var(--black);
            margin-bottom: 1.5rem;
            position: relative;
            background: linear-gradient(135deg, var(--black) 0%, var(--red-primary) 100%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: var(--red-primary);
            border-radius: 2px;
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.3rem;
            color: var(--gray-dark);
            margin-bottom: 5rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.7;
        }

        /* Cards Grid */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 3rem;
            margin-top: 5rem;
        }

        .content-card {
            background: var(--white);
            border-radius: 25px;
            padding: 3.5rem 3rem;
            box-shadow: 0 15px 40px rgba(0,0,0,0.08);
            transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            cursor: pointer;
            border: 1px solid rgba(245, 51, 63, 0.1);
            background-image: linear-gradient(135deg, rgba(255,255,255,1) 0%, rgba(248,249,250,1) 100%);
        }

        .content-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: linear-gradient(90deg, var(--red-primary), var(--red-dark));
            transform: scaleX(0);
            transition: transform 0.6s ease;
        }

        .content-card::after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: linear-gradient(135deg, rgba(245, 51, 63, 0.02) 0%, transparent 50%);
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .content-card:hover::before {
            transform: scaleX(1);
        }

        .content-card:hover::after {
            opacity: 1;
        }

        .content-card:hover {
            transform: translateY(-20px) scale(1.03);
            box-shadow: 0 30px 70px rgba(245, 51, 63, 0.2);
        }

        .card-icon {
            width: 90px;
            height: 90px;
            background: linear-gradient(135deg, var(--red-primary), var(--red-dark));
            border-radius: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 2.5rem;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(245, 51, 63, 0.3);
        }

        .card-icon::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255,255,255,0.3), transparent);
            animation: iconShine 4s ease-in-out infinite;
        }

        .card-icon i {
            font-size: 2.2rem;
            color: var(--white);
            z-index: 2;
            position: relative;
        }

        .card-title {
            font-size: 1.6rem;
            font-weight: 700;
            color: var(--black);
            margin-bottom: 1.5rem;
            transition: color 0.3s ease;
            font-family: 'Poppins', sans-serif;
            line-height: 1.3;
        }

        .content-card:hover .card-title {
            color: var(--red-primary);
        }

        .card-description {
            color: var(--gray-dark);
            line-height: 1.8;
            font-size: 1.05rem;
            margin-bottom: 2rem;
        }

        .card-link {
            display: inline-flex;
            align-items: center;
            color: var(--red-primary);
            font-weight: 600;
            text-decoration: none;
            font-size: 1rem;
            transition: all 0.3s ease;
            padding: 0.8rem 1.5rem;
            background: rgba(245, 51, 63, 0.1);
            border-radius: 30px;
            border: 1px solid rgba(245, 51, 63, 0.2);
        }

        .card-link:hover {
            background: var(--red-primary);
            color: var(--white);
            transform: translateX(5px);
            box-shadow: 0 8px 20px rgba(245, 51, 63, 0.3);
        }

        .card-link::after {
            content: '→';
            margin-left: 8px;
            transition: margin-left 0.3s ease;
        }

        .card-link:hover::after {
            margin-left: 12px;
        }

        /* About Navigation Section */
        .about-nav-section {
            background: linear-gradient(135deg, rgba(245, 51, 63, 0.05) 0%, rgba(255,255,255,1) 100%);
            padding: 6rem 0;
            margin-top: 6rem;
            position: relative;
        }

        .about-nav-title {
            text-align: center;
            font-family: 'Poppins', sans-serif;
            font-size: 2.8rem;
            font-weight: 700;
            color: var(--black);
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, var(--black) 0%, var(--red-primary) 100%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .about-nav-subtitle {
            text-align: center;
            font-size: 1.2rem;
            color: var(--gray-dark);
            margin-bottom: 4rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .nav-cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2.5rem;
            margin-top: 4rem;
        }

        .nav-card {
            background: var(--white);
            border-radius: 20px;
            padding: 2.5rem 2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            border: 1px solid rgba(245, 51, 63, 0.1);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .nav-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-primary);
            transform: scaleX(0);
            transition: transform 0.4s ease;
        }

        .nav-card:hover::before {
            transform: scaleX(1);
        }

        .nav-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 50px rgba(245, 51, 63, 0.15);
        }

        .nav-card-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--red-primary), var(--red-dark));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            box-shadow: 0 8px 20px rgba(245, 51, 63, 0.3);
        }

        .nav-card-icon i {
            font-size: 1.8rem;
            color: var(--white);
        }

        .nav-card-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--black);
            margin-bottom: 1rem;
            font-family: 'Poppins', sans-serif;
        }

        .nav-card-description {
            color: var(--gray-dark);
            font-size: 0.95rem;
            line-height: 1.6;
        }

        /* CTA Section */
        .cta-section {
            background: var(--gradient-primary),
                        url('https://images.unsplash.com/photo-1557804506-669a67965ba0?w=1920&h=800&fit=crop') center/cover;
            background-blend-mode: multiply;
            padding: 8rem 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="2" fill="rgba(255,255,255,0.15)"/><circle cx="80" cy="40" r="1.5" fill="rgba(255,255,255,0.1)"/><circle cx="40" cy="80" r="1" fill="rgba(255,255,255,0.08)"/><circle cx="90" cy="90" r="1.2" fill="rgba(255,255,255,0.12)"/><circle cx="10" cy="60" r="0.8" fill="rgba(255,255,255,0.06)"/></svg>') repeat;
            animation: float 20s linear infinite;
        }

        .cta-title {
            font-family: 'Poppins', sans-serif;
            font-size: 3rem;
            font-weight: 800;
            color: var(--white);
            margin-bottom: 2rem;
            text-shadow: 3px 3px 30px rgba(0, 0, 0, 0.5);
        }

        .cta-text {
            font-size: 1.3rem;
            color: rgba(255, 255, 255, 0.95);
            margin-bottom: 3rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.7;
        }

        .cta-button {
            display: inline-block;
            background: var(--white);
            color: var(--red-primary);
            padding: 1.5rem 4rem;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.2rem;
            transition: all 0.4s ease;
            box-shadow: 0 10px 30px rgba(255, 255, 255, 0.3);
            position: relative;
            overflow: hidden;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: var(--gradient-primary);
            transition: left 0.5s ease;
            z-index: -1;
        }

        .cta-button:hover {
            color: var(--white);
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 20px 50px rgba(255, 255, 255, 0.4);
        }

        .cta-button:hover::before {
            left: 0;
        }

        /* Enhanced Responsive Design */
        @media (max-width: 968px) {
            .vm-grid {
                grid-template-columns: 1fr;
                gap: 3rem;
            }

            .hero-title {
                font-size: 3rem;
            }

            .hero-stats {
                grid-template-columns: repeat(2, 1fr);
                gap: 2rem;
                margin-top: 3rem;
                padding: 2rem 0;
            }

            .hero-stat-number {
                font-size: 2.5rem;
            }

            .container {
                padding: 0 1rem;
            }

            .nav-cards-grid {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 2rem;
            }
        }

        @media (max-width: 768px) {
            .hero-section {
                padding: 8rem 0 6rem;
                min-height: 90vh;
            }

            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1.2rem;
            }

            .hero-stats {
                grid-template-columns: 1fr;
                gap: 1.5rem;
                margin-top: 2.5rem;
                padding: 2rem 0;
            }

            .hero-stat-item {
                padding: 1rem;
                background: rgba(255, 255, 255, 0.1);
                border-radius: 15px;
                backdrop-filter: blur(10px);
            }

            .hero-stat-number {
                font-size: 2.2rem;
            }

            .vm-card {
                padding: 3rem 2rem;
            }

            .vm-title {
                font-size: 2rem;
            }

            .section-title {
                font-size: 2.2rem;
            }

            .cards-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .content-card {
                padding: 2.5rem 2rem;
            }

            .cta-title {
                font-size: 2.2rem;
            }

            .nav-cards-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Animation Classes */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .slide-in-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: all 0.8s ease;
        }

        .slide-in-left.visible {
            opacity: 1;
            transform: translateX(0);
        }

        .slide-in-right {
            opacity: 0;
            transform: translateX(50px);
            transition: all 0.8s ease;
        }

        .slide-in-right.visible {
            opacity: 1;
            transform: translateX(0);
        }

        .scale-in {
            opacity: 0;
            transform: scale(0.8);
            transition: all 0.8s ease;
        }

        .scale-in.visible {
            opacity: 1;
            transform: scale(1);
        }
    </style>
</head>
<body>
    <!-- Enhanced Hero Section -->
    <section class="hero-section">
        <div class="hero-decoration"></div>
        <div class="hero-decoration"></div>
        <div class="hero-decoration"></div>
        <div class="hero-decoration"></div>
        <div class="container">
            <div class="hero-content">

                <h1 class="hero-title">Visi & Misi</h1>
                <p class="hero-subtitle">Komitmen kami untuk menjadi perusahaan logistik terdepan di Indonesia dengan nilai-nilai yang kuat, tujuan yang jelas, dan dedikasi terhadap kemajuan bangsa</p>
                
                <!-- Hero Statistics -->
                <div class="hero-stats">
                
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <!-- Vision & Mission Section -->
            <section class="vm-section">
                <div class="vm-grid">
                    <!-- Vision Card -->
                    <div class="vm-card slide-in-left">
                        <div class="vm-card-content">
                            <div class="vm-icon">
                                <i class="fas fa-eye"></i>
                            </div>
                            <h2 class="vm-title">Visi</h2>
                            <p class="vm-text">
                                Menjadi perusahaan logistik terdepan di Indonesia yang memberikan solusi terintegrasi dan berkelanjutan untuk mendukung pertumbuhan ekonomi nasional dengan standar kualitas internasional dan komitmen terhadap inovasi berkelanjutan.
                            </p>
                        </div>
                    </div>

                    <!-- Mission Card -->
                    <div class="vm-card slide-in-right">
                        <div class="vm-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h2 class="vm-title">Misi</h2>
                        <div class="mission-items">
                            <div class="mission-item">
                                <div class="mission-number">1</div>
                                <div class="mission-content">
                                    <h4>Sustainable & Competitive Logistic Service Network</h4>
                                    <p>Mengembangkan jaringan bisnis jasa logistik, <strong>building materials</strong> dan konstruksi berskala nasional yang kompetitif dan berkelanjutan untuk meningkatkan nilai tambah bagi para pemegang saham.</p>
                                </div>
                            </div>
                            
                            <div class="mission-item">
                                <div class="mission-number">2</div>
                                <div class="mission-content">
                                    <h4>Effective & Reliable Infrastructure</h4>
                                    <p>Mengembangkan sistem rantai pasok handal yang didukung moda transportasi dan fasilitas logistik terkini serta teknologi informasi dan komunikasi terkini.</p>
                                </div>
                            </div>
                            
                            <div class="mission-item">
                                <div class="mission-number">3</div>
                                <div class="mission-content">
                                    <h4>Agile & Healthy Organization</h4>
                                    <p>Mengembangkan organisasi perusahaan di berbagai level korporasi yang <strong>agile</strong> dan adaptif terhadap perubahan lingkungan bisnis serta didukung sumber daya finansial yang sehat dan berkelanjutan.</p>
                                </div>
                            </div>
                            
                            <div class="mission-item">
                                <div class="mission-number">4</div>
                                <div class="mission-content">
                                    <h4>Integrity & Professional Human Resources</h4>
                                    <p>Mengembangkan sumber daya manusia yang profesional, berwawasan luas, dan berintegritas dalam bisnis jasa logistik, distribusi dan konstruksi.</p>
                                </div>
                            </div>
                            
                            <div class="mission-item">
                                <div class="mission-number">5</div>
                                <div class="mission-content">
                                    <h4>Supporting The Growth of Community & Environment</h4>
                                    <p>Berpartisipasi aktif dalam peningkatan kualitas lingkungan dan sosial masyarakat serta mendukung Sistem Logistik Nasional.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Values Section -->
            <section class="values-section">
                <div class="container">
                    <h2 class="section-title fade-in">Nilai-Nilai Perusahaan</h2>
                    <p class="section-subtitle fade-in">Landasan fundamental yang membentuk budaya kerja dan filosofi bisnis SILOG dalam mencapai keunggulan</p>
                    
                    <div class="cards-grid">
                        <div class="content-card fade-in">
                            <div class="card-icon">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <h3 class="card-title">Integritas</h3>
                            <p class="card-description">
                                Berkomitmen untuk selalu jujur, transparan, dan bertanggung jawab dalam setiap aspek bisnis dan hubungan dengan stakeholder untuk membangun kepercayaan yang berkelanjutan.
                            </p>
                            <a href="#" class="card-link">Pelajari Lebih Lanjut</a>
                        </div>

                        <div class="content-card fade-in">
                            <div class="card-icon">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <h3 class="card-title">Inovasi</h3>
                            <p class="card-description">
                                Terus mengembangkan teknologi dan metode terdepan untuk memberikan solusi yang efisien, berkelanjutan, dan memenuhi kebutuhan masa depan.
                            </p>
                            <a href="#" class="card-link">Pelajari Lebih Lanjut</a>
                        </div>

                        <div class="content-card fade-in">
                            <div class="card-icon">
                                <i class="fas fa-award"></i>
                            </div>
                            <h3 class="card-title">Kualitas</h3>
                            <p class="card-description">
                                Menjaga standar kualitas tertinggi dalam setiap layanan dan produk yang kami berikan kepada pelanggan dengan sistem kontrol kualitas yang ketat.
                            </p>
                            <a href="#" class="card-link">Pelajari Lebih Lanjut</a>
                        </div>

                        <div class="content-card fade-in">
                            <div class="card-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <h3 class="card-title">Kolaborasi</h3>
                            <p class="card-description">
                                Membangun kemitraan strategis dan kerja sama yang saling menguntungkan dengan semua pihak terkait untuk menciptakan ekosistem bisnis yang kuat.
                            </p>
                            <a href="#" class="card-link">Pelajari Lebih Lanjut</a>
                        </div>

                        <div class="content-card fade-in">
                            <div class="card-icon">
                                <i class="fas fa-leaf"></i>
                            </div>
                            <h3 class="card-title">Keberlanjutan</h3>
                            <p class="card-description">
                                Berkomitmen terhadap praktik bisnis yang ramah lingkungan dan berkelanjutan untuk generasi mendatang dengan program CSR yang berkelanjutan.
                            </p>
                            <a href="#" class="card-link">Pelajari Lebih Lanjut</a>
                        </div>

                        <div class="content-card fade-in">
                            <div class="card-icon">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <h3 class="card-title">Keunggulan</h3>
                            <p class="card-description">
                                Berusaha mencapai keunggulan operasional dalam setiap aspek bisnis untuk menjadi yang terdepan di industri dengan inovasi berkelanjutan.
                            </p>
                            <a href="#" class="card-link">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- About Navigation Section -->
            <section class="about-nav-section">
                <div class="container">
                    <h2 class="about-nav-title fade-in">Jelajahi Lebih Lanjut Tentang SILOG</h2>
                    <p class="about-nav-subtitle fade-in">Temukan informasi lengkap mengenai perusahaan, sejarah, dan struktur organisasi kami</p>
                    
                    <div class="nav-cards-grid">
                        <div class="nav-card scale-in">
                            <div class="nav-card-icon">
                                <i class="fas fa-history"></i>
                            </div>
                            <h3 class="nav-card-title">Sejarah</h3>
                            <p class="nav-card-description">
                                Perjalanan panjang SILOG sejak berdiri hingga menjadi perusahaan logistik terdepan di Indonesia
                            </p>
                        </div>

                        <div class="nav-card scale-in">
                            <div class="nav-card-icon">
                                <i class="fas fa-building"></i>
                            </div>
                            <h3 class="nav-card-title">Profil Perusahaan</h3>
                            <p class="nav-card-description">
                                Gambaran lengkap mengenai profil, struktur bisnis, dan pencapaian perusahaan
                            </p>
                        </div>

                        <div class="nav-card scale-in">
                            <div class="nav-card-icon">
                                <i class="fas fa-gavel"></i>
                            </div>
                            <h3 class="nav-card-title">Kebijakan Perusahaan</h3>
                            <p class="nav-card-description">
                                Kebijakan dan aturan yang mengatur operasional perusahaan dan standar kualitas
                            </p>
                        </div>

                        <div class="nav-card scale-in">
                            <div class="nav-card-icon">
                                <i class="fas fa-sitemap"></i>
                            </div>
                            <h3 class="nav-card-title">Tata Kelola Perusahaan</h3>
                            <p class="nav-card-description">
                                Sistem tata kelola yang baik dan transparan untuk memastikan akuntabilitas
                            </p>
                        </div>

                        <div class="nav-card scale-in">
                            <div class="nav-card-icon">
                                <i class="fas fa-users-cog"></i>
                            </div>
                            <h3 class="nav-card-title">Sumber Daya Manusia</h3>
                            <p class="nav-card-description">
                                Tim profesional yang berpengalaman dan berkomitmen untuk memberikan yang terbaik
                            </p>
                        </div>

                        <div class="nav-card scale-in">
                            <div class="nav-card-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <h3 class="nav-card-title">Direksi & Komisaris</h3>
                            <p class="nav-card-description">
                                Profil lengkap jajaran direksi dan komisaris yang memimpin perusahaan
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <script>
        // Scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observe all animation elements
        document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right, .scale-in').forEach(el => {
            observer.observe(el);
        });

        // Add staggered animation for cards
        const cards = document.querySelectorAll('.content-card');
        cards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(50px) scale(0.95)';
            card.style.transition = 'all 1s cubic-bezier(0.4, 0, 0.2, 1)';
            
            setTimeout(() => {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0) scale(1)';
            }, 300 + (index * 200));
        });

        // Add staggered animation for nav cards
        const navCards = document.querySelectorAll('.nav-card');
        navCards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'scale(0.8) rotateY(15deg)';
            card.style.transition = 'all 0.8s cubic-bezier(0.4, 0, 0.2, 1)';
            
            setTimeout(() => {
                card.style.opacity = '1';
                card.style.transform = 'scale(1) rotateY(0deg)';
            }, 200 + (index * 150));
        });

        // Enhanced hover effects for cards
        document.querySelectorAll('.content-card, .vm-card, .nav-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.zIndex = '10';
                this.style.filter = 'drop-shadow(0 0 20px rgba(245, 51, 63, 0.3))';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.zIndex = '1';
                this.style.filter = 'none';
            });
        });

        // Add ripple effect to buttons and links
        document.querySelectorAll('.cta-button, .card-link').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.cssText = `
                    position: absolute;
                    border-radius: 50%;
                    transform: scale(0);
                    animation: ripple 0.6s linear;
                    background-color: rgba(255, 255, 255, 0.4);
                    width: ${size}px;
                    height: ${size}px;
                    left: ${x}px;
                    top: ${y}px;
                    pointer-events: none;
                `;
                
                this.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });

        // Add CSS for ripple animation
        const rippleStyle = document.createElement('style');
        rippleStyle.textContent = `
            @keyframes ripple {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
            
            .cta-button, .card-link {
                position: relative;
                overflow: hidden;
            }
        `;
        document.head.appendChild(rippleStyle);

        // Smooth scrolling for internal links
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

        // Add hover effects for interactive elements
        document.querySelectorAll('a, button, .content-card, .vm-card, .nav-card').forEach(element => {
            element.addEventListener('mouseenter', () => {
                cursor.style.transform = 'translate(-50%, -50%) scale(1.8)';
                cursor.style.opacity = '0.6';
                cursor.style.background = 'var(--red-dark)';
            });
            
            element.addEventListener('mouseleave', () => {
                cursor.style.transform = 'translate(-50%, -50%) scale(1)';
                cursor.style.opacity = '0.8';
                cursor.style.background = 'var(--red-primary)';
            });
        });

        // Add floating particles animation
        function createFloatingParticles() {
            const hero = document.querySelector('.hero-section');
            const particleContainer = document.createElement('div');
            particleContainer.style.cssText = `
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                pointer-events: none;
                z-index: 1;
                opacity: 0.6;
            `;
            
            for (let i = 0; i < 12; i++) {
                const particle = document.createElement('div');
                particle.innerHTML = particles[Math.floor(Math.random() * particles.length)];
                particle.style.cssText = `
                    position: absolute;
                    font-size: ${1.5 + Math.random() * 1}rem;
                    left: ${Math.random() * 100}%;
                    top: ${Math.random() * 100}%;
                    animation: floatParticle ${8 + Math.random() * 4}s ease-in-out infinite;
                    animation-delay: ${Math.random() * 8}s;
                    color: rgba(255, 255, 255, 0.7);
                    filter: drop-shadow(0 0 10px rgba(255, 255, 255, 0.3));
                `;
                particleContainer.appendChild(particle);
            }

            hero.appendChild(particleContainer);
        }

        // Add CSS for particle animation
        const particleStyle = document.createElement('style');
        particleStyle.textContent = `
            @keyframes floatParticle {
                0%, 100% { 
                    transform: translateY(0px) rotate(0deg) scale(1);
                    opacity: 0.7;
                }
                25% { 
                    transform: translateY(-30px) rotate(90deg) scale(1.1);
                    opacity: 1;
                }
                50% { 
                    transform: translateY(-20px) rotate(180deg) scale(0.9);
                    opacity: 0.8;
                }
                75% { 
                    transform: translateY(-40px) rotate(270deg) scale(1.05);
                    opacity: 0.9;
                }
            }
        `;
        document.head.appendChild(particleStyle);

        createFloatingParticles();

        // Advanced parallax effect
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            
            // Hero parallax
            const heroSection = document.querySelector('.hero-section');
            if (heroSection) {
                heroSection.style.transform = `translateY(${scrolled * 0.3}px)`;
            }
            
            // Cards parallax
            const cards = document.querySelectorAll('.content-card, .vm-card');
            cards.forEach((card, index) => {
                const speed = 0.02 + (index % 3) * 0.01;
                const yPos = -(scrolled * speed);
                card.style.transform = `translateY(${yPos}px)`;
            });
        });

        // Loading animation for page
        window.addEventListener('load', () => {
            document.body.style.opacity = '0';
            document.body.style.transition = 'opacity 0.8s ease';
            
            setTimeout(() => {
                document.body.style.opacity = '1';
            }, 100);
        });

        // Add click navigation for nav cards
        document.querySelectorAll('.nav-card').forEach(card => {
            card.addEventListener('click', function() {
                const title = this.querySelector('.nav-card-title').textContent;
                
                // Add click animation
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 150);
                
                console.log(`Navigating to: ${title}`);
            });
        });

        // Add intersection observer for enhanced animations
        const enhancedObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    
                    if (element.classList.contains('vm-card')) {
                        element.style.animation = 'slideInScale 1s ease-out forwards';
                    } else if (element.classList.contains('section-title')) {
                        element.style.animation = 'titleGlow 1.5s ease-out forwards';
                    }
                }
            });
        }, { threshold: 0.3 });

        // Enhanced animations CSS
        const enhancedStyle = document.createElement('style');
        enhancedStyle.textContent = `
            @keyframes slideInScale {
                from {
                    opacity: 0;
                    transform: translateX(-50px) scale(0.9);
                }
                to {
                    opacity: 1;
                    transform: translateX(0) scale(1);
                }
            }
            
            @keyframes titleGlow {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                    text-shadow: none;
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                    text-shadow: 0 0 20px rgba(245, 51, 63, 0.3);
                }
            }
        `;
        document.head.appendChild(enhancedStyle);

        // Observe elements for enhanced animations
        document.querySelectorAll('.vm-card, .section-title').forEach(el => {
            enhancedObserver.observe(el);
        });
    </script>
</body>
</html>