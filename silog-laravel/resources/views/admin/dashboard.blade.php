<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - SILOG Content Management</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        :root {
            --bright-white: #FFFFFF;
            --total-black: #000000;
            --light-grey: #DFDEDE;
            --dark-grey: #5E5E5F;
            --red-primary: #F5333F;
            --gradient-primary: linear-gradient(135deg, #F5333F 0%, #FF6B6B 100%);
            --sidebar-bg: #1a1a1a;
            --sidebar-hover: #2a2a2a;
            --card-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            --hover-shadow: 0 8px 30px rgba(245, 51, 63, 0.15);
            --border-radius: 12px;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', Arial, sans-serif;
            background: #f5f5f5;
            color: var(--total-black);
            overflow-x: hidden;
        }

        .admin-container {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 280px;
            background: var(--sidebar-bg);
            color: var(--bright-white);
            position: fixed;
            height: 100vh;
            overflow-y: auto;
            transition: transform 0.3s ease;
            z-index: 1000;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar-header {
            padding: 2rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            background: linear-gradient(180deg, rgba(245, 51, 63, 0.2) 0%, transparent 100%);
        }

        .sidebar-logo {
            text-align: center;
            margin-bottom: 1rem;
        }

        .sidebar-title {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 0.3rem;
        }

        .sidebar-subtitle {
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.7);
        }

        .sidebar-menu {
            padding: 1rem 0;
        }

        .menu-section {
            margin-bottom: 1.5rem;
        }

        .menu-title {
            padding: 0 1.5rem;
            font-size: 0.75rem;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.5);
            margin-bottom: 0.8rem;
            letter-spacing: 1px;
        }

        .menu-item {
            display: flex;
            align-items: center;
            padding: 0.8rem 1.5rem;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: var(--transition);
            border-left: 3px solid transparent;
            cursor: pointer;
        }

        .menu-item:hover, .menu-item.active {
            background: var(--sidebar-hover);
            color: var(--bright-white);
            border-left-color: var(--red-primary);
        }

        .menu-item i {
            width: 24px;
            margin-right: 1rem;
            text-align: center;
        }

        .main-content {
            flex: 1;
            margin-left: 280px;
            transition: margin-left 0.3s ease;
        }

        .top-bar {
            background: var(--bright-white);
            padding: 1rem 2rem;
            box-shadow: var(--card-shadow);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .page-title {
            font-size: 2rem;
            font-weight: 800;
            color: var(--total-black);
        }

        .dashboard-content {
            padding: 2rem;
        }

        .content-section {
            background: var(--bright-white);
            border-radius: var(--border-radius);
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: var(--card-shadow);
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .section-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--total-black);
        }

        .btn {
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
            font-size: 0.95rem;
        }

        .btn-primary {
            background: var(--gradient-primary);
            color: var(--bright-white);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(245, 51, 63, 0.3);
        }

        .btn-secondary {
            background: var(--light-grey);
            color: var(--dark-grey);
        }

        .btn-danger {
            background: #ef4444;
            color: var(--bright-white);
        }

        .btn-sm {
            padding: 0.5rem 1rem;
            font-size: 0.85rem;
        }

        .content-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
        }

        .content-card {
            background: var(--bright-white);
            border: 1px solid var(--light-grey);
            border-radius: var(--border-radius);
            padding: 1.5rem;
            transition: var(--transition);
        }

        .content-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--hover-shadow);
            border-color: var(--red-primary);
        }

        .card-header {
            display: flex;
            justify-content: between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .card-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--total-black);
            margin-bottom: 0.5rem;
        }

        .card-type {
            background: var(--red-primary);
            color: var(--bright-white);
            padding: 0.2rem 0.6rem;
            border-radius: 12px;
            font-size: 0.7rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        .card-description {
            color: var(--dark-grey);
            font-size: 0.9rem;
            margin-bottom: 1rem;
            line-height: 1.5;
        }

        .card-actions {
            display: flex;
            gap: 0.5rem;
            justify-content: flex-end;
        }

        .btn-icon {
            background: none;
            border: none;
            padding: 0.6rem;
            border-radius: 8px;
            cursor: pointer;
            transition: var(--transition);
            color: var(--dark-grey);
        }

        .btn-icon:hover {
            background: rgba(245, 51, 63, 0.1);
            color: var(--red-primary);
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: 2000;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(5px);
        }

        .modal.active {
            display: flex;
        }

        .modal-content {
            background: var(--bright-white);
            border-radius: var(--border-radius);
            max-width: 600px;
            width: 90%;
            max-height: 90vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 2rem;
            border-bottom: 1px solid var(--light-grey);
        }

        .modal-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--total-black);
        }

        .modal-close {
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--dark-grey);
            cursor: pointer;
            padding: 0.5rem;
            border-radius: 50%;
            transition: var(--transition);
        }

        .modal-close:hover {
            background: rgba(245, 51, 63, 0.1);
            color: var(--red-primary);
        }

        .modal-body {
            padding: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--total-black);
        }

        .form-control {
            width: 100%;
            padding: 0.8rem 1rem;
            border: 1px solid var(--light-grey);
            border-radius: 8px;
            font-size: 1rem;
            outline: none;
            transition: var(--transition);
        }

        .form-control:focus {
            border-color: var(--red-primary);
            box-shadow: 0 0 0 3px rgba(245, 51, 63, 0.1);
        }

        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }

        .alert {
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .alert-success {
            background: #10b981;
            color: var(--bright-white);
        }

        .alert-danger {
            background: #ef4444;
            color: var(--bright-white);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: var(--bright-white);
            padding: 1.5rem;
            border-radius: var(--border-radius);
            box-shadow: var(--card-shadow);
            text-align: center;
        }

        .stat-value {
            font-size: 2rem;
            font-weight: 800;
            color: var(--red-primary);
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: var(--dark-grey);
            font-size: 0.9rem;
        }

        .empty-state {
            text-align: center;
            padding: 3rem;
            color: var(--dark-grey);
        }

        .empty-state i {
            font-size: 3rem;
            margin-bottom: 1rem;
            opacity: 0.5;
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .main-content {
                margin-left: 0;
            }

            .content-grid {
                grid-template-columns: 1fr;
            }

            .stats-grid {
                grid-template-columns: 1fr 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="admin-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <div class="sidebar-logo">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="SILOG" style="height: 50px; filter: brightness(0) invert(1);">
                </div>
                <div class="sidebar-title">Admin Panel</div>
                <div class="sidebar-subtitle">Content Management System</div>
            </div>
            
            <nav class="sidebar-menu">
                <div class="menu-section">
                    <div class="menu-title">Dashboard</div>
                    <div class="menu-item active" data-section="overview">
                        <i class="fas fa-tachometer-alt"></i>
                        Overview
                    </div>
                </div>
                
                <div class="menu-section">
                    <div class="menu-title">Konten Beranda</div>
                    <div class="menu-item" data-section="hero">
                        <i class="fas fa-star"></i>
                        Hero Section
                    </div>
                    <div class="menu-item" data-section="about">
                        <i class="fas fa-info-circle"></i>
                        About Cards
                    </div>
                    <div class="menu-item" data-section="service">
                        <i class="fas fa-cogs"></i>
                        Services
                    </div>
                    <div class="menu-item" data-section="subsidiary">
                        <i class="fas fa-building"></i>
                        Subsidiaries
                    </div>
                    <div class="menu-item" data-section="news">
                        <i class="fas fa-newspaper"></i>
                        News
                    </div>
                    <div class="menu-item" data-section="gallery">
                        <i class="fas fa-images"></i>
                        Gallery
                    </div>
                </div>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Top Bar -->
            <header class="top-bar">
                <h1 class="page-title">Dashboard Admin</h1>
                <div>
                    <a href="{{ url('/') }}" class="btn btn-secondary" target="_blank">
                        <i class="fas fa-eye"></i>
                        Lihat Website
                    </a>
                </div>
            </header>

            <!-- Dashboard Content -->
            <div class="dashboard-content">
                @if(session('success'))
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle"></i>
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger">
                        <i class="fas fa-exclamation-circle"></i>
                        {{ session('error') }}
                    </div>
                @endif

                <!-- Overview Section -->
                <div id="overview-section">
                    <div class="stats-grid">
                        <div class="stat-card">
                            <div class="stat-value">{{ $contents->get('hero', collect())->count() }}</div>
                            <div class="stat-label">Hero Content</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-value">{{ $contents->get('about', collect())->count() }}</div>
                            <div class="stat-label">About Cards</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-value">{{ $contents->get('service', collect())->count() }}</div>
                            <div class="stat-label">Services</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-value">{{ $contents->get('subsidiary', collect())->count() }}</div>
                            <div class="stat-label">Subsidiaries</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-value">{{ $contents->get('news', collect())->count() }}</div>
                            <div class="stat-label">News</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-value">{{ $contents->get('gallery', collect())->count() }}</div>
                            <div class="stat-label">Gallery</div>
                        </div>
                    </div>

                    <div class="content-section">
                        <div class="section-header">
                            <h3 class="section-title">Konten Terbaru</h3>
                        </div>
                        
                        <div class="content-grid">
                            @php
                                $allContents = $contents->flatten()->sortByDesc('updated_at')->take(6);
                            @endphp
                            
                            @forelse($allContents as $content)
                                <div class="content-card">
                                    <div class="card-header">
                                        <span class="card-type">{{ ucfirst($content->type) }}</span>
                                    </div>
                                    <h4 class="card-title">{{ $content->title }}</h4>
                                    <p class="card-description">{{ Str::limit($content->description, 100) }}</p>
                                    <div class="card-actions">
                                        <button class="btn-icon" onclick="editContent({{ $content->id }}, '{{ $content->type }}')" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn-icon" onclick="deleteContent({{ $content->id }})" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            @empty
                                <div class="empty-state">
                                    <i class="fas fa-inbox"></i>
                                    <p>Belum ada konten. Mulai tambahkan konten pertama Anda!</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>

                <!-- Content Sections -->
                @foreach(['hero', 'about', 'service', 'subsidiary', 'news', 'gallery'] as $sectionType)
                <div id="{{ $sectionType }}-section" style="display: none;">
                    <div class="content-section">
                        <div class="section-header">
                            <h3 class="section-title">{{ ucfirst($sectionType) }} Content</h3>
                            <button class="btn btn-primary" onclick="openModal('{{ $sectionType }}')">
                                <i class="fas fa-plus"></i>
                                Tambah {{ ucfirst($sectionType) }}
                            </button>
                        </div>
                        
                        <div class="content-grid">
                            @forelse($contents->get($sectionType, collect()) as $content)
                                <div class="content-card">
                                    <h4 class="card-title">{{ $content->title }}</h4>
                                    @if($content->subtitle)
                                        <p style="color: var(--dark-grey); font-size: 0.9rem; margin-bottom: 0.5rem;">{{ $content->subtitle }}</p>
                                    @endif
                                    <p class="card-description">{{ Str::limit($content->description, 100) }}</p>
                                    @if($content->image)
                                        <img src="{{ $content->image }}" alt="{{ $content->title }}" style="width: 100%; height: 120px; object-fit: cover; border-radius: 8px; margin: 0.5rem 0;">
                                    @endif
                                    <div class="card-actions">
                                        <button class="btn-icon" onclick="editContent({{ $content->id }}, '{{ $sectionType }}')" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <form method="POST" action="{{ route('admin.content.toggle', $content->id) }}" style="display: inline;">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn-icon" title="{{ $content->is_active ? 'Deactivate' : 'Activate' }}">
                                                <i class="fas fa-{{ $content->is_active ? 'eye-slash' : 'eye' }}"></i>
                                            </button>
                                        </form>
                                        <button class="btn-icon" onclick="deleteContent({{ $content->id }})" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            @empty
                                <div class="empty-state">
                                    <i class="fas fa-inbox"></i>
                                    <p>Belum ada konten {{ $sectionType }}. Klik tombol "Tambah" untuk menambahkan konten pertama!</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </main>
    </div>

    <!-- Modal -->
    <div class="modal" id="contentModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="modalTitle">Tambah Konten</h2>
                <button class="modal-close" onclick="closeModal()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <div class="modal-body">
                <form id="contentForm" method="POST">
                    @csrf
                    <input type="hidden" id="contentId" name="id">
                    <input type="hidden" id="contentType" name="type">
                    
                    <div class="form-group">
                        <label for="title">Judul *</label>
                        <input type="text" id="title" name="title" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="subtitle">Sub Judul</label>
                        <input type="text" id="subtitle" name="subtitle" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Deskripsi *</label>
                        <textarea id="description" name="description" class="form-control" required></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="image">URL Gambar</label>
                        <input type="url" id="image" name="image" class="form-control" placeholder="https://example.com/image.jpg">
                    </div>
                    
                    <div class="form-group" id="iconGroup">
                        <label for="icon">Icon (Font Awesome)</label>
                        <input type="text" id="icon" name="icon" class="form-control" placeholder="fas fa-star">
                    </div>
                    
                    <div class="form-group" id="dateGroup">
                        <label for="date">Tanggal</label>
                        <input type="text" id="date" name="date" class="form-control" placeholder="28 Agustus 2025">
                    </div>
                    
                    <div class="form-group" id="linkGroup">
                        <label for="link">Link</label>
                        <input type="url" id="link" name="link" class="form-control" placeholder="https://example.com">
                    </div>
                    
                    <div class="form-group">
                        <label for="order">Urutan</label>
                        <input type="number" id="order" name="order" class="form-control" min="0">
                    </div>
                    
                    <div style="display: flex; gap: 1rem; justify-content: flex-end; margin-top: 2rem;">
                        <button type="button" class="btn btn-secondary" onclick="closeModal()">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Navigation
        document.querySelectorAll('.menu-item').forEach(item => {
            item.addEventListener('click', function() {
                document.querySelectorAll('.menu-item').forEach(i => i.classList.remove('active'));
                this.classList.add('active');
                
                const section = this.dataset.section;
                document.querySelectorAll('[id$="-section"]').forEach(s => s.style.display = 'none');
                document.getElementById(section + '-section').style.display = 'block';
            });
        });

        // Modal functions
        function openModal(type, content = null) {
            const modal = document.getElementById('contentModal');
            const form = document.getElementById('contentForm');
            const title = document.getElementById('modalTitle');
            
            // Reset form
            form.reset();
            document.getElementById('contentType').value = type;
            
            // Show/hide fields based on type
            const iconGroup = document.getElementById('iconGroup');
            const dateGroup = document.getElementById('dateGroup');
            const linkGroup = document.getElementById('linkGroup');
            
            iconGroup.style.display = ['about', 'subsidiary'].includes(type) ? 'block' : 'none';
            dateGroup.style.display = type === 'news' ? 'block' : 'none';
            linkGroup.style.display = ['service', 'news'].includes(type) ? 'block' : 'none';
            
            if (content) {
                // Edit mode
                title.textContent = 'Edit ' + type.charAt(0).toUpperCase() + type.slice(1);
                form.action = `/admin/content/${content.id}`;
                form.innerHTML += '<input type="hidden" name="_method" value="PUT">';
                
                document.getElementById('contentId').value = content.id;
                document.getElementById('title').value = content.title || '';
                document.getElementById('subtitle').value = content.subtitle || '';
                document.getElementById('description').value = content.description || '';
                document.getElementById('image').value = content.image || '';
                document.getElementById('icon').value = content.icon || '';
                document.getElementById('date').value = content.date || '';
                document.getElementById('link').value = content.link || '';
                document.getElementById('order').value = content.order || '';
            } else {
                // Add mode
                title.textContent = 'Tambah ' + type.charAt(0).toUpperCase() + type.slice(1);
                form.action = '/admin/content';
            }
            
            modal.classList.add('active');
        }

        function closeModal() {
            document.getElementById('contentModal').classList.remove('active');
        }

        function editContent(id, type) {
            fetch(`/admin/content/${id}`)
                .then(response => response.json())
                .then(content => openModal(type, content))
                .catch(error => console.error('Error:', error));
        }

        function deleteContent(id) {
            if (confirm('Apakah Anda yakin ingin menghapus konten ini?')) {
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = `/admin/content/${id}`;
                form.innerHTML = `
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                `;
                document.body.appendChild(form);
                form.submit();
            }
        }

        // Close modal when clicking outside
        document.getElementById('contentModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        // Auto-hide alerts
        setTimeout(() => {
            document.querySelectorAll('.alert').forEach(alert => {
                alert.style.opacity = '0';
                setTimeout(() => alert.remove(), 300);
            });
        }, 5000);
    </script>
</body>
</html>