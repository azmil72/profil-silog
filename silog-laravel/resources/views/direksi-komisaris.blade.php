@extends('layouts.app')

@section('title', 'Direksi & Komisaris - SILOG')

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
                    <a href="#" class="hover:text-red-500 transition-colors duration-300">Tentang</a>
                    <i class="fas fa-chevron-right mx-2 text-xs"></i>
                    <span class="text-gray-900 font-medium">Direksi & Komisaris</span>
                </div>
                
                <h1 class="hero-title text-4xl md:text-6xl font-black text-gray-900 mb-6 leading-tight">
                    Direksi & Komisaris
                </h1>
                <p class="hero-subtitle text-xl text-gray-600 leading-relaxed">
                    Tim pemimpin SILOG yang berpengalaman dan berkomitmen untuk mewujudkan visi perusahaan
                </p>
            </div>
        </div>
    </section>

    <!-- Leadership Section -->
    <section class="leadership-section py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="section-title text-4xl md:text-5xl font-bold text-center text-gray-900 mb-4 relative">
                Tentang Kepemimpinan SILOG
            </h2>
            <p class="section-subtitle text-xl text-gray-600 text-center max-w-3xl mx-auto mb-16">
                Struktur kepemimpinan yang solid untuk mendukung pertumbuhan perusahaan
            </p>
            
            <div class="leadership-content bg-white rounded-2xl p-8 md:p-12 shadow-lg border border-gray-200 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div class="leadership-text space-y-6 text-lg text-gray-700 leading-relaxed">
                    <p>SILOG dipimpin oleh tim <strong class="text-gray-900">Dewan Komisaris dan Direksi</strong> yang memiliki pengalaman luas di industri logistik dan manufaktur. Dengan komposisi yang seimbang antara pengawas dan pelaksana, SILOG memastikan good corporate governance terimplementasikan dengan baik dalam setiap aspek bisnis.</p>
                    
                    <p>Dewan Komisaris bertanggung jawab atas pengawasan strategis dan penasihat kepada Direksi dalam menjalankan operasional perusahaan. Sementara itu, Direksi dipimpin oleh Direktur Utama yang didukung oleh para direktur fungsional yang ahli di bidangnya masing-masing.</p>
                    
                    <p>Dengan struktur kepemimpinan yang solid dan berpengalaman, SILOG terus berkomitmen untuk menjadi solusi logistik terdepan di Indonesia, memberikan nilai tambah bagi stakeholder, dan berkontribusi pada pembangunan nasional.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Board Members Section -->
    <section class="board-section py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="section-title text-4xl md:text-5xl font-bold text-center text-gray-900 mb-4 relative">
                Tim Kepemimpinan SILOG
            </h2>
            <p class="section-subtitle text-xl text-gray-600 text-center max-w-3xl mx-auto mb-16">
                Dewan Komisaris dan Direksi yang membawa SILOG menuju kesuksesan
            </p>
            
            <!-- Tabs -->
            <div class="board-tabs flex flex-wrap justify-center gap-4 mb-12">
                <button class="board-tab bg-white border-2 border-gray-300 px-6 py-3 rounded-full font-semibold text-gray-600 transition-all duration-300 hover:border-red-500 hover:text-red-500 active:bg-red-500 active:text-white active:border-red-500" onclick="switchTab('komisaris')">
                    Dewan Komisaris
                </button>
                <button class="board-tab bg-white border-2 border-gray-300 px-6 py-3 rounded-full font-semibold text-gray-600 transition-all duration-300 hover:border-red-500 hover:text-red-500 active:bg-red-500 active:text-white active:border-red-500" onclick="switchTab('direksi')">
                    Direksi
                </button>
            </div>
            
            <!-- Dewan Komisaris -->
            <div id="komisaris" class="board-content active">
                <div class="board-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($komisaris as $member)
                    <div class="board-member bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:border-red-300 cursor-pointer" onclick="openModal('komisaris{{ $member->id }}')">
                        <div class="member-photo h-80 relative overflow-hidden bg-gray-200">
                            @if($member->image)
                                <img src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}" class="w-full h-full object-cover transition-transform duration-500">
                            @else
                                <div class="w-full h-full flex items-center justify-center text-gray-400">
                                    <i class="fas fa-user text-6xl"></i>
                                </div>
                            @endif
                        </div>
                        <div class="member-info p-6">
                            <h3 class="member-name text-2xl font-bold text-gray-900 mb-2 transition-colors duration-300">{{ $member->name }}</h3>
                            <div class="member-position text-red-500 font-semibold mb-4">{{ $member->position }}</div>
                            <p class="member-bio text-gray-600 leading-relaxed mb-4">{{ Str::limit($member->profile, 100) }}</p>
                            <a href="#" class="view-profile-btn inline-flex items-center text-red-500 font-semibold text-sm transition-all duration-300 hover:gap-2">
                                Lihat Profil Lengkap
                                <span class="ml-1 transition-all duration-300">→</span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <!-- Direksi -->
            <div id="direksi" class="board-content hidden">
                <div class="board-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($direksi as $member)
                    <div class="board-member bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:border-red-300 cursor-pointer" onclick="openModal('direksi{{ $member->id }}')">
                        <div class="member-photo h-80 relative overflow-hidden bg-gray-200">
                            @if($member->image)
                                <img src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}" class="w-full h-full object-cover transition-transform duration-500">
                            @else
                                <div class="w-full h-full flex items-center justify-center text-gray-400">
                                    <i class="fas fa-user text-6xl"></i>
                                </div>
                            @endif
                        </div>
                        <div class="member-info p-6">
                            <h3 class="member-name text-2xl font-bold text-gray-900 mb-2 transition-colors duration-300">{{ $member->name }}</h3>
                            <div class="member-position text-red-500 font-semibold mb-4">{{ $member->position }}</div>
                            <p class="member-bio text-gray-600 leading-relaxed mb-4">{{ Str::limit($member->profile, 100) }}</p>
                            <a href="#" class="view-profile-btn inline-flex items-center text-red-500 font-semibold text-sm transition-all duration-300 hover:gap-2">
                                Lihat Profil Lengkap
                                <span class="ml-1 transition-all duration-300">→</span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Structure Section -->
    <section class="structure-section py-20 bg-gradient-to-br from-red-50 to-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="section-title text-4xl md:text-5xl font-bold text-center text-gray-900 mb-4 relative">
                Struktur Organisasi
            </h2>
            <p class="section-subtitle text-xl text-gray-600 text-center max-w-3xl mx-auto mb-16">
                Struktur organisasi SILOG yang mendukung good corporate governance
            </p>
            
            <div class="structure-container text-center">
                <div class="structure-image rounded-2xl overflow-hidden shadow-lg transition-all duration-300 hover:shadow-xl hover:scale-105">
                    <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Struktur Organisasi SILOG" class="w-full h-auto">
                </div>
                <p class="structure-caption text-gray-600 mt-8 leading-relaxed max-w-3xl mx-auto">
                    Struktur organisasi SILOG dirancang untuk memastikan pemisahan fungsi yang jelas antara organ pengawas dan pelaksana, serta menciptakan sistem checks and balances yang efektif dalam pengambilan keputusan. Setiap direksi memiliki tanggung jawab fungsional yang jelas untuk mendukung pencapaian visi dan misi perusahaan.
                </p>
            </div>
        </div>
    </section>

    <!-- Sub Navigation Cards Section -->
    <section class="subnav-section py-20 bg-white">
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
                    <a href="#" class="card-link inline-flex items-center text-red-500 font-semibold text-sm transition-all duration-300 hover:gap-2">
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
                    <a href="#" class="card-link inline-flex items-center text-red-500 font-semibold text-sm transition-all duration-300 hover:gap-2">
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
                    <a href="#" class="card-link inline-flex items-center text-red-500 font-semibold text-sm transition-all duration-300 hover:gap-2">
                        Pelajari Lebih Lanjut
                        <span class="ml-1 transition-all duration-300">→</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section py-20 bg-gradient-to-r from-red-500 to-red-600 mt-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="cta-title text-3xl md:text-4xl font-black text-white mb-6">
                Hubungi Tim Kepemimpinan Kami
            </h2>
            <p class="cta-description text-xl text-white/90 mb-10 leading-relaxed">
                Kami terbuka untuk masukan dan kolaborasi dalam membangun masa depan logistik Indonesia
            </p>
            <div class="cta-buttons flex flex-col sm:flex-row gap-6 justify-center">
                <a href="#" class="cta-button bg-white text-red-500 px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300 hover:-translate-y-1 hover:shadow-lg relative overflow-hidden">
                    Kirim Pesan
                </a>
                <a href="#" class="cta-button bg-transparent border-2 border-white text-white px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300 hover:bg-white hover:text-red-500">
                    Laporan Tahunan
                </a>
            </div>
        </div>
    </section>
</div>

<!-- Modal for Profile Details -->
@foreach($komisaris as $member)
<div id="komisaris{{ $member->id }}Modal" class="modal fixed inset-0 z-50 hidden">
    <div class="modal-overlay absolute inset-0 bg-black bg-opacity-70 backdrop-blur-sm"></div>
    <div class="modal-content relative bg-white rounded-2xl max-w-4xl mx-auto my-12 max-h-[90vh] overflow-y-auto">
        <div class="modal-header relative h-64 rounded-t-2xl overflow-hidden bg-gray-200">
            @if($member->image)
                <img src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}" class="w-full h-full object-cover">
            @else
                <div class="w-full h-full flex items-center justify-center text-gray-400">
                    <i class="fas fa-user text-8xl"></i>
                </div>
            @endif
            <span class="close absolute top-6 right-6 text-white text-4xl cursor-pointer bg-black bg-opacity-50 w-12 h-12 rounded-full flex items-center justify-center transition-all duration-300 hover:bg-red-500 hover:rotate-90" onclick="closeModal('komisaris{{ $member->id }}Modal')">&times;</span>
        </div>
        <div class="modal-body p-8">
            <h2 class="modal-title text-3xl font-bold text-gray-900 mb-2">{{ $member->name }}</h2>
            <p class="modal-position text-red-500 font-semibold text-xl mb-8">{{ $member->position }}</p>
            
            <div class="modal-section mb-8">
                <h3 class="text-xl font-semibold text-gray-900 mb-4 flex items-center gap-2">
                    <i class="fas fa-user text-red-500"></i>
                    Profil Singkat
                </h3>
                <p class="text-gray-700 leading-relaxed">{{ $member->profile }}</p>
            </div>
            
            @if($member->experiences)
            <div class="modal-section mb-8">
                <h3 class="text-xl font-semibold text-gray-900 mb-4 flex items-center gap-2">
                    <i class="fas fa-briefcase text-red-500"></i>
                    Pengalaman Kerja
                </h3>
                <div class="space-y-4">
                    @foreach($member->experiences as $experience)
                    <div class="experience-item bg-gray-50 border border-gray-200 rounded-xl p-6 transition-all duration-300 hover:border-red-300">
                        <div class="item-year text-red-500 font-semibold mb-2">{{ $experience['year'] }}</div>
                        <div class="item-title font-semibold text-gray-900 mb-1">{{ $experience['title'] }}</div>
                        <div class="item-institution text-gray-600 italic">{{ $experience['institution'] }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
            
            @if($member->educations)
            <div class="modal-section mb-8">
                <h3 class="text-xl font-semibold text-gray-900 mb-4 flex items-center gap-2">
                    <i class="fas fa-graduation-cap text-red-500"></i>
                    Pendidikan
                </h3>
                <div class="space-y-4">
                    @foreach($member->educations as $education)
                    <div class="education-item bg-gray-50 border border-gray-200 rounded-xl p-6 transition-all duration-300 hover:border-red-300">
                        <div class="item-year text-red-500 font-semibold mb-2">{{ $education['year'] }}</div>
                        <div class="item-title font-semibold text-gray-900 mb-1">{{ $education['title'] }}</div>
                        <div class="item-institution text-gray-600 italic">{{ $education['institution'] }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endforeach

@foreach($direksi as $member)
<div id="direksi{{ $member->id }}Modal" class="modal fixed inset-0 z-50 hidden">
    <div class="modal-overlay absolute inset-0 bg-black bg-opacity-70 backdrop-blur-sm"></div>
    <div class="modal-content relative bg-white rounded-2xl max-w-4xl mx-auto my-12 max-h-[90vh] overflow-y-auto">
        <div class="modal-header relative h-64 rounded-t-2xl overflow-hidden bg-gray-200">
            @if($member->image)
                <img src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}" class="w-full h-full object-cover">
            @else
                <div class="w-full h-full flex items-center justify-center text-gray-400">
                    <i class="fas fa-user text-8xl"></i>
                </div>
            @endif
            <span class="close absolute top-6 right-6 text-white text-4xl cursor-pointer bg-black bg-opacity-50 w-12 h-12 rounded-full flex items-center justify-center transition-all duration-300 hover:bg-red-500 hover:rotate-90" onclick="closeModal('direksi{{ $member->id }}Modal')">&times;</span>
        </div>
        <div class="modal-body p-8">
            <h2 class="modal-title text-3xl font-bold text-gray-900 mb-2">{{ $member->name }}</h2>
            <p class="modal-position text-red-500 font-semibold text-xl mb-8">{{ $member->position }}</p>
            
            <div class="modal-section mb-8">
                <h3 class="text-xl font-semibold text-gray-900 mb-4 flex items-center gap-2">
                    <i class="fas fa-user text-red-500"></i>
                    Profil Singkat
                </h3>
                <p class="text-gray-700 leading-relaxed">{{ $member->profile }}</p>
            </div>
            
            @if($member->experiences)
            <div class="modal-section mb-8">
                <h3 class="text-xl font-semibold text-gray-900 mb-4 flex items-center gap-2">
                    <i class="fas fa-briefcase text-red-500"></i>
                    Pengalaman Kerja
                </h3>
                <div class="space-y-4">
                    @foreach($member->experiences as $experience)
                    <div class="experience-item bg-gray-50 border border-gray-200 rounded-xl p-6 transition-all duration-300 hover:border-red-300">
                        <div class="item-year text-red-500 font-semibold mb-2">{{ $experience['year'] }}</div>
                        <div class="item-title font-semibold text-gray-900 mb-1">{{ $experience['title'] }}</div>
                        <div class="item-institution text-gray-600 italic">{{ $experience['institution'] }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
            
            @if($member->educations)
            <div class="modal-section mb-8">
                <h3 class="text-xl font-semibold text-gray-900 mb-4 flex items-center gap-2">
                    <i class="fas fa-graduation-cap text-red-500"></i>
                    Pendidikan
                </h3>
                <div class="space-y-4">
                    @foreach($member->educations as $education)
                    <div class="education-item bg-gray-50 border border-gray-200 rounded-xl p-6 transition-all duration-300 hover:border-red-300">
                        <div class="item-year text-red-500 font-semibold mb-2">{{ $education['year'] }}</div>
                        <div class="item-title font-semibold text-gray-900 mb-1">{{ $education['title'] }}</div>
                        <div class="item-institution text-gray-600 italic">{{ $education['institution'] }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endforeach

<script>
    // Tab switching function
    function switchTab(tabName) {
        // Hide all tab contents
        document.querySelectorAll('.board-content').forEach(content => {
            content.classList.add('hidden');
            content.classList.remove('active');
        });
        
        // Remove active class from all tabs
        document.querySelectorAll('.board-tab').forEach(tab => {
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

    // Modal functions
    function openModal(modalId) {
        document.getElementById(modalId + 'Modal').classList.remove('hidden');
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

    // Add hover effects for board members
    document.querySelectorAll('.board-member').forEach(member => {
        member.addEventListener('mouseenter', function() {
            const img = this.querySelector('img');
            img.style.transform = 'scale(1.05)';
        });
        
        member.addEventListener('mouseleave', function() {
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

    /* Custom styles for hero section */
    .hero {
        background: linear-gradient(135deg, rgba(245, 51, 63, 0.05), rgba(0, 0, 0, 0.02));
    }

    /* Custom styles for board member hover effects */
    .board-member:hover .member-name {
        color: #F5333F;
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