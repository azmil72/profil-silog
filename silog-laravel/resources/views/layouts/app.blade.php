<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SILOG - Semen Indonesia Logistik')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <img src="{{ asset('assets/images/logo.png') }}" alt="SILOG Logo" class="h-10">
                <ul class="hidden md:flex space-x-8">
                    <li><a href="{{ url('/') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium">Beranda</a></li>
                    <li class="relative group">
                        <a href="#about" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium flex items-center">Tentang <i class="fas fa-chevron-down ml-1"></i></a>
                        <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                            <a href="{{ route('sejarah') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sejarah</a>
                            <a href="{{ route('profil') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil</a>
                            <a href="{{ route('visi-misi') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Visi & Misi</a>
                            <a href="{{ route('direksi-komisaris') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Direksi & Komisaris</a>
                        </div>
                    </li>
                    <li><a href="{{ url('/') }}#business" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium">Bisnis</a></li>
                    <li><a href="{{ url('/') }}#news" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium">Info</a></li>
                    <li><a href="{{ url('/') }}#contact" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium">Kontak</a></li>
                </ul>
                <button class="md:hidden">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <img src="{{ asset('assets/images/logo.png') }}" alt="SILOG Logo" class="h-10 mb-4">
                    <p class="text-gray-400 mb-4">Solusi terpercaya untuk kebutuhan logistik, konstruksi, dan distribusi di seluruh Indonesia.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Bisnis</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white">Logistik</a></li>
                        <li><a href="#" class="hover:text-white">Konstruksi</a></li>
                        <li><a href="#" class="hover:text-white">Distribusi</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Informasi</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white">Berita</a></li>
                        <li><a href="#" class="hover:text-white">Karir</a></li>
                        <li><a href="#" class="hover:text-white">Kontak</a></li>
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