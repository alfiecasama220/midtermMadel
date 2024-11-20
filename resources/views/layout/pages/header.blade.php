<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 shadow-sm">
    <a class="navbar-brand text-uppercase" href="#"><i class="bi bi-building"></i> <small>Del Mundo Landscape Specialist</small></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <small><a class="nav-link text-white" href="{{ route('dashboard.index') }}">Dashboard</a></small>
            </li>
            <li class="nav-item">
                <small><a class="nav-link text-white" href="{{ route('worksheet.index') }}">Worksheet</a></small>
            </li>
            <li class="nav-item">
                <small><a class="nav-link text-white" href="{{ route('about.index') }}">About</a></small>
            </li>
            <li class="nav-item">
                <div class="btn-group">
                    <button type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-person-circle"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{ route('logout') }}" class="dropdown-item">Logout</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
