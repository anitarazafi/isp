<nav
    class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0"
>
    <a href="/" class="navbar-brand p-0">
        <h1 class="text-primary m-0">
            <i class="fa fa-map-marker-alt me-3"></i>ISP
        </h1>
        <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
    >
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="/about" class="nav-item nav-link">About us</a>
            <a href="/programs" class="nav-item nav-link">Find Programs</a>
            <a href="/forum" class="nav-item nav-link">Forum</a>
            <a href="/student-guide" class="nav-item nav-link">Student Guide</a>
            <div class="nav-item dropdown">
                <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-bs-toggle="dropdown"
                >More</a
                >
                <div class="dropdown-menu m-0">
                    <a href="/job-offer" class="dropdown-item">Job offer</a>
                    <a href="/looking-for-a-job" class="dropdown-item">Looking for a job</a>
                    <a href="/accommodation" class="dropdown-item">Accommodation</a>
                    <a href="/looking-for-accommodation" class="dropdown-item">Looking for accommodation</a>
                    <a href="/scholarships" class="dropdown-item">Scholarships</a>
                    <a href="/other-posts" class="dropdown-item">Other</a>
                </div>
            </div>
            <a href="/contact" class="nav-item nav-link">Support</a>
        </div>
        @if(Auth::check())
            <a href="/admin/dashboard" class="btn btn-primary rounded-pill py-2 px-4">My account</a>
        @else
            <a href="/login" class="btn btn-primary rounded-pill py-2 px-4">Login</a>
        @endif
    </div>
</nav>
