<nav id="navbar" class="navbar navbar-expand-lg bg-gray-200 fixed-top transition-all duration-300 borded shadow">
    <div class="container ">
        <a class="navbar-brand" href="#"> <img src="./assets/img/hc1.png" alt=""
                style="width: 20px; height: 20px;"> {{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 " style="margin-left: auto">
                <li class="nav-item dropdown" onmouseover="showDropdownMenu()" onmouseout="hideDropdownMenu()">
                    <a class="nav-link dropdown-toggle"> <b> Coaching</b></a>
                    <div class="dropdown-menu" id="coachingDropdown" aria-labelledby="coachingDropdown">
                        <a class="dropdown-item @if (Request::route()->getName() == 'coaching_equipe') active @endif" aria-current="page" href="{{ route('coaching_equipe') }}">Business coaching</a>
                        <a class="dropdown-item @if (Request::route()->getName() == 'coaching_professionnel') active @endif" aria-current="page" href="{{ route('coaching_professionnel') }}">Coaching Professionnel</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (Request::route()->getName() == 'app_home') active @endif" aria-current="page"
                        href="{{ route('app_home') }}">Acceuil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (Request::route()->getName() == 'app_blog') active @endif" aria-current="page"
                        href="{{ route('app_blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (Request::route()->getName() == 'app_about') active @endif" aria-current="page"
                        href="{{ route('app_about') }}">A propos de nous</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (Request::route()->getName() == 'app_contact') active @endif" aria-current="page"
                        href="{{ route('app_contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    window.addEventListener('scroll', function() {
    var navbar = document.getElementById('navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('bg-opacity-40');
        navbar.classList.remove('bg-opacity-100');
    } else {
        navbar.classList.remove('bg-opacity-40');
        navbar.classList.add('bg-opacity-100');
    }
});

</script>
