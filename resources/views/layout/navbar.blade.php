<div class="navbar-bg"></div>
{{-- NAVBAR PERTAMA --}}
<nav class="navbar navbar-expand-lg main-navbar">
    <a href="index.html" class="navbar-brand sidebar-gone-hide text-center">SeaFlashTix</a>
    <div class="navbar-nav">
        <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
    </div>
    <div class="nav-collapse">
        {{-- <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
            <i class="fas fa-ellipsis-v"></i>
        </a> --}}
        {{-- <ul class="navbar-nav">
            <li class="nav-item active"><a href="#" class="nav-link">Application</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Report Something</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Server Status</a></li>
        </ul> --}}
    </div>
    <form class="form-inline ml-auto">

    </form>
    <ul class="navbar-nav navbar-right">
        @if (Auth::check())
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                    <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->name }}</div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#"
                        onclick="
                        event.preventDefault();
                        document.getElementById('logout-form').submit();"
                        class="dropdown-item has-icon text-danger">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                </div>
            </li>
        @else
            <li class="nav-item ">
                <a href="{{ route('register') }}" class="btn btn-info "><i style="font-size: 14px" class="fas fa-user-plus"></i> Register</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('login') }}" class="btn btn-warning ml-2 mr-3"><i style="font-size: 14px" class="fas fa-sign-in-alt"></i> Login</a>
            </li>
        @endif
    </ul>
</nav>

{{-- NAVBAR  KEDUA --}}
<nav class="navbar navbar-secondary navbar-expand-lg">
    <div class="container d-flex justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{ route('films.index') }}" class="nav-link">
                    <i class="fas fa-layer-group"></i><span>Semua Film</span></a>
            </li>
            @if (Auth::check())
                <li class="nav-item">
                    <a href="{{ route('user.profile') }}" class="nav-link">
                        <i class="fas fa-user"></i>
                        <span>Akun Anda</span>
                    </a>
                </li>
            @endif
        </ul>
    </div>
</nav>
