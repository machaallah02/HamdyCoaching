<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container ">
      <a class="navbar-brand" href="#">   <img src="./assets/img/hc1.png" alt="" style="width: 30px; height: 30px;"> {{config('app.name')}}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 " style="margin-left: auto">
            <li class="nav-item dropdown" onmouseover="showDropdownMenu()" onmouseout="hideDropdownMenu()">
                <a class="nav-link dropdown-toggle"> <b> Coaching</b></a>
                <div class="dropdown-menu" id="coachingDropdown" aria-labelledby="coachingDropdown">
                  <a class="dropdown-item @if (Request::route()->getName() == 'coaching_orientation') active @endif" aria-current="page" href="{{ route('coaching_orientation') }}">Coaching Orientation</a>
                  <a class="dropdown-item @if (Request::route()->getName() == 'coaching_professionnel') active @endif" aria-current="page" href="{{ route('coaching_professionnel') }}">Coaching Professionnel</a>
                </div>
              </li>
          <li class="nav-item">
            <a class="nav-link @if (Request::route()->getName()=='app_home') active @endif" aria-current="page" href="{{ route('app_home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if (Request::route()->getName()=='app_about') active @endif" aria-current="page" href="{{ route('app_about') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if (Request::route()->getName()=='app_contact') active @endif" aria-current="page" href="{{ route('app_contact') }}">contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
