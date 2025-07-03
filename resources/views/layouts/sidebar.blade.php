<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin – JobNest</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {margin:0;font-family:sans-serif;background:#f3f4f6;}
        .sidebar {
            width:240px;min-height:100vh;background:linear-gradient(180deg,#764ba2,#667eea);
            padding-top:1rem;position:fixed;color:#fff;
        }
        .sidebar .nav-link{color:#e5e7eb;padding:.65rem 1.25rem;border-radius:.35rem;}
        .sidebar .nav-link.active,.sidebar .nav-link:hover{background:rgba(255,255,255,.15);color:#fff;}
        .sidebar .logout-btn{background:rgba(255,255,255,.2);border:none;width:100%;color:#fff;padding:.5rem;border-radius:.35rem;}
        .sidebar .logout-btn:hover{background:#fff;color:#764ba2;}
        #content-wrapper{margin-left:240px;min-height:100vh;display:flex;flex-direction:column;}
    </style>
</head>
<body>
    <nav class="sidebar d-flex flex-column">
        <h4 class="text-center fw-bold mb-4">JobNest</h4>
        <ul class="nav flex-column mb-auto">
            <li class="nav-item"><a href="{{ route('lamaran.index') }}" class="nav-link {{ request()->routeIs('lamaran.index') ? 'active' : '' }}">Data Lowongan</a></li>
            <li class="nav-item"><a href="{{ route('lamaran.create') }}" class="nav-link {{ request()->routeIs('lamaran.create') ? 'active' : '' }}">Tambah Lowongan</a></li>
        </ul>
        <form action="{{ route('logout') }}" method="POST" class="mt-auto px-3 pb-4">
            @csrf
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </nav>

    <div id="content-wrapper">
        <nav class="navbar navbar-dark" style="background:linear-gradient(90deg,#667eea,#764ba2);">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h5">@yield('title','Dashboard Admin')</span>
            </div>
        </nav>
        <main class="flex-grow-1 p-4">
            @yield('content')
        </main>
    </div>
</body>
</html>