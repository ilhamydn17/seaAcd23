<div class="navbar-bg"></div>
{{-- NAVBAR PERTAMA --}}
<nav class="navbar navbar-expand-lg main-navbar">
    <a href="index.html" class="navbar-brand sidebar-gone-hide text-center">Sea Cinema</a>
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
        <li class="nav-item">
            <a href="#" class="btn btn-info">Login</a>
        </li>
        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">Logged in 5 min ago</div>
                <a href="features-profile.html" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                <a href="features-activities.html" class="dropdown-item has-icon">
                    <i class="fas fa-bolt"></i> Activities
                </a>
                <a href="features-settings.html" class="dropdown-item has-icon">
                    <i class="fas fa-cog"></i> Settings
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </li>
    </ul>
</nav>

{{-- NAVBAR  KEDUA --}}
<nav class="navbar navbar-secondary navbar-expand-lg">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#our-films" class="nav-link">
                    <i class="fas fa-fire"></i><span>All Film</span></a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-fire"></i>
                    <span>Favourite Films</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" data-toggle="dropdown" class="nav-link">
                    <i class="fas fa-fire"></i>
                    <span></span>
                </a>
            </li>
        </ul>
    </div>
</nav>
