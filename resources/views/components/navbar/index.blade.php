<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark nav-light">
    <div class="container">
        <!-- LOGO -->
        <a class="navbar-brand logo" href="index.html">
            <img src="image/logo.png" alt="" class="logo-dark" height="51">
            <img src="image/logo.png" alt="" class="logo-light" height="81">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
                <li class="nav-item active">
                    <a href="#home" class="nav-link">Home</a>
                </li>
                               <li class="nav-item">
                    <a href="/account/registration" class="nav-link">Employee Registration</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('employee.show') }}" class="nav-link">Employee Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login.show') }}">Admin Dashboard</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
