<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobNest - Portal Kerja & Magang Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            line-height: 1.6;
            color: #1a1a1a;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            backdrop-filter: blur(10px);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            text-decoration: none;
            color: white;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: opacity 0.3s;
        }

        .nav-links a:hover {
            opacity: 0.8;
        }

        .auth-buttons {
            display: flex;
            gap: 1rem;
        }

        .btn {
            padding: 0.7rem 1.5rem;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }

        .btn-outline {
            background: transparent;
            color: white;
            border: 2px solid white;
        }

        .btn-outline:hover {
            background: white;
            color: #667eea;
        }

        .btn-primary {
            background: #4f46e5;
            color: white;
        }

        .btn-primary:hover {
            background: #3730a3;
            transform: translateY(-2px);
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 140px 0 80px;
            color: white;
            text-align: center;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            font-weight: 700;
            line-height: 1.2;
        }

        .hero p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-large {
            padding: 1rem 2rem;
            font-size: 1.1rem;
        }

        /* Search Section */
        .search-section {
            background: white;
            padding: 60px 0;
            box-shadow: 0 -5px 20px rgba(0,0,0,0.1);
        }

        .search-container {
            background: #f8fafc;
            border-radius: 16px;
            padding: 2rem;
            max-width: 800px;
            margin: 0 auto;
        }

        .search-form {
            display: grid;
            grid-template-columns: 1fr 1fr auto;
            gap: 1rem;
            align-items: end;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #374151;
        }

        .form-group input,
        .form-group select {
            padding: 0.8rem;
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: #4f46e5;
        }

        /* Features Section */
        .features {
            padding: 80px 0;
            background: #f8fafc;
        }

        .features h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #1f2937;
        }
                .popular-tags {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 8px;
            margin-top: 12px;
        }
        
        .tag {
            background: rgba(255,255,255,0.2);
            color: white;
            padding: 6px 12px;
            border-radius: 20px;
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            transition: all 0.3s ease;
            border: 1px solid rgba(255,255,255,0.3);
        }
        
        .tag:hover {
            background: rgba(255,255,255,0.3);
            transform: translateY(-1px);
        }
        
        /* Main Content */
        .breadcrumb {
            padding: 20px 0;
            color: #6b7280;
            font-size: 14px;
        }
        
        .breadcrumb a {
            color: #3b82f6;
            text-decoration: none;
        }
        
        .job-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }
        
        .job-header h1 {
            font-size: 28px;
            font-weight: 700;
            color: #1f2937;
        }
        
        .filters {
            display: flex;
            gap: 12px;
        }
        
        .filter-select {
            padding: 8px 12px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            background: white;
            font-size: 14px;
            min-width: 140px;
        }
        
        /* Job Grid */
        .job-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }
        
        .job-card {
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
            border: 1px solid #e5e7eb;
            position: relative;
            transition: all 0.3s ease;
        }
        
        .job-card:hover {
            box-shadow: 0 8px 25px rgba(0,0,0,0.12);
            transform: translateY(-2px);
        }
        
        .favorite-btn {
            position: absolute;
            top: 16px;
            right: 16px;
            background: none;
            border: none;
            cursor: pointer;
            font-size: 18px;
            padding: 4px;
        }
        
        .job-header-card {
            display: flex;
            gap: 12px;
            margin-bottom: 16px;
        }
        
        .company-logo {
            width: 50px;
            height: 50px;
            border-radius: 8px;
            overflow: hidden;
            flex-shrink: 0;
        }
        
        .company-logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .logo-placeholder {
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #3b82f6, #8b5cf6);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 16px;
        }
        
        .company-name {
            color: #3b82f6;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 4px;
        }
        
        .job-title {
            font-size: 16px;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 4px;
            line-height: 1.4;
        }
        
        .job-location {
            color: #6b7280;
            font-size: 13px;
        }
        
        .job-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
        }
        
        .job-tags .tag {
            background: #f3f4f6;
            color: #4b5563;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 11px;
            font-weight: 500;
            border: none;
        }
        
        .tag-type { background: #dbeafe; color: #1d4ed8; }
        .tag-education { background: #f0fdf4; color: #166534; }
        .tag-experience { background: #fef3c7; color: #92400e; }
        .tag-level { background: #ede9fe; color: #6b21a8; }
        .tag-department { background: #ecfdf5; color: #047857; }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            background: white;
            padding: 2rem;
            border-radius: 16px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            width: 64px;
            height: 64px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 1.5rem;
            color: white;
        }

        .feature-card h3 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: #1f2937;
        }

        /* Stats Section */
        .stats {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 60px 0;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            text-align: center;
        }

        .stat-item h3 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        .stat-item p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* CTA Section */
        .cta {
            padding: 80px 0;
            text-align: center;
            background: white;
        }

        .cta h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #1f2937;
        }

        .cta p {
            font-size: 1.2rem;
            color: #6b7280;
            margin-bottom: 2rem;
        }

        /* Footer */
        footer {
            background: #1f2937;
            color: white;
            padding: 40px 0 20px;
            text-align: center;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            margin-bottom: 1rem;
        }

        .footer-section a {
            color: #9ca3af;
            text-decoration: none;
            display: block;
            margin-bottom: 0.5rem;
        }

        .footer-section a:hover {
            color: white;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .search-form {
                grid-template-columns: 1fr;
            }
            
            .nav-links {
                display: none;
            }
            
            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero, .features, .stats, .cta {
            animation: fadeInUp 0.8s ease-out;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <nav class="container">
            <a href="#" class="logo">JobNest</a>

            <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
            @csrf
            <button type="submit" class="btn btn-outline">Logout</button>
    </form>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Selamat Datang Kembali!</h1>
            <p>Siap lanjutkan perjalanan karirmu? Jelajahi lowongan terbaru dan temukan peluang magang terbaik yang sesuai dengan minat dan keahlianmu.</p>
            <div class="hero-buttons">
                <a href="#features" class="btn btn-primary btn-large">Cari Lowongan</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
    <div class="container py-4">
        <div class="row g-4">
            @foreach ($lowongan as $item)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0 position-relative"> {{-- Added position-relative for heart icon positioning --}}
                    <div class="card-body">
                        {{-- Top Section: Logo, Company Name, Job Title, Location, Heart Icon --}}
                        <div class="d-flex align-items-start mb-3"> {{-- Flexbox for alignment --}}
                            <div class="flex-shrink-0 me-3"> {{-- For the logo --}}
                                @if ($item->img)
                                    <img src="{{ asset('uploads/lamaran/' . $item->img) }}" alt="{{ $item->perusahaan }}" class="rounded-circle" style="width: 60px; height: 60px; object-fit: cover;">
                                @else
                                    {{-- Placeholder for no image --}}
                                    <div class="bg-light rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                        <i class="bi bi-building" style="font-size: 2rem; color: #6c757d;"></i> {{-- Example icon, requires Bootstrap Icons --}}
                                    </div>
                                @endif
                            </div>
                            <div class="flex-grow-1"> {{-- For company name and job title --}}
                                <h6 class="card-subtitle text-muted mb-1">{{ $item->perusahaan ?? 'Nama Perusahaan' }}</h6>
                                <h5 class="card-title fw-bold mb-0">{{ $item->judul ?? 'Posisi Tidak Diketahui' }}</h5>
                                <div class="text-muted small mt-1">
                                    <i class="bi bi-geo-alt-fill me-1"></i> {{-- Requires Bootstrap Icons --}}
                                    {{ $item->lokasi ?? 'Lokasi Tidak Diketahui' }} {{-- Assuming a 'lokasi' field --}}
                                </div>
                            </div>
                            {{-- Heart Icon (Favorite) --}}
                            <button class="btn btn-sm btn-outline-secondary border-0 ms-auto" style="position: absolute; top: 15px; right: 15px;">
                                <i class="bi bi-heart"></i> {{-- Requires Bootstrap Icons --}}
                            </button>
                        </div>

                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <span class="badge bg-primary">{{ $item->tipe_pekerjaan ?? 'N/A' }}</span>
                            <span class="badge bg-primary">{{ $item->pendidikan ?? 'N/A' }}</span>

                            @foreach (explode(',', $item->skill_yang_dibutuhkan ?? '') as $skill)
                                @if (trim($skill) != '')
                                    <span class="badge bg-success">{{ trim($skill) }}</span>
                                @endif
                            @endforeach
                            
                            <span class="badge bg-info text-dark">{{ $item->level ?? 'N/A' }}</span>

                            @foreach (explode(',', $item->departemen ?? '') as $dept)
                                @if (trim($dept) != '')
                                    <span class="badge bg-warning text-dark">{{ trim($dept) }}</span>
                                @endif
                            @endforeach
                            

                        </div>
                        <hr class="my-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                            </div>
                            <a href="{{ route('lamaran.form') }}" class="btn btn-danger btn-sm"> {{-- Smaller button --}}
                                Lamar Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>JobNest</h3>
                    <p>Platform karir terpercaya</p>
                </div>
                <div class="footer-section">
                    <h3>Untuk Mahasiswa</h3>
                    <a href="#">Cari Lowongan</a>
                </div>
                <div class="footer-section">
                    <h3>Untuk Perusahaan</h3>
                </div>
                <div class="footer-section">
                    <h3>Bantuan</h3>
                    <a href="#">FAQ</a>
                    <a href="#">Kontak</a>
                </div>
            </div>
            <p>&copy; 2025 Kelompok 5. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Simple smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Header background change on scroll
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(102, 126, 234, 0.95)';
            } else {
                header.style.background = 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)';
            }
        });

        // Form submission
        document.querySelector('.search-form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Fitur pencarian akan segera tersedia!');
        });

        // Animate stats on scroll
        const observerCallback = (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const statNumbers = entry.target.querySelectorAll('.stat-item h3');
                    statNumbers.forEach(stat => {
                        const finalNumber = stat.textContent;
                        const number = parseInt(finalNumber.replace(/[^0-9]/g, ''));
                        const suffix = finalNumber.replace(/[0-9]/g, '');
                        
                        let currentNumber = 0;
                        const increment = number / 100;
                        const timer = setInterval(() => {
                            currentNumber += increment;
                            if (currentNumber >= number) {
                                stat.textContent = finalNumber;
                                clearInterval(timer);
                            } else {
                                stat.textContent = Math.floor(currentNumber) + suffix;
                            }
                        }, 20);
                    });
                }
            });
        };

        const observer = new IntersectionObserver(observerCallback);
        const statsSection = document.querySelector('.stats');
        if (statsSection) {
            observer.observe(statsSection);
        }
    </script>
</body>
</html>