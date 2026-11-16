<header class="main-header sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand brand-logo" href="{{ route('front.welcome') }}" aria-label="IMPAXIS Capital">
                    <img src="{{ asset('front/assets/images/logo-impaxis-capital.png') }}" class="logo-impaxis-head" alt="IMPAXIS Capital">
                </a>

                <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#mainNavigation" aria-controls="mainNavigation" aria-expanded="false"
                        aria-label="Afficher le menu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="mainNavigation">
                    <ul class="navbar-nav main-nav align-items-lg-end gap-lg-4 gap-3 mt-3 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ active('front.welcome') }}" href="{{ route('front.welcome') }}">Accueil</a>
                        </li>
                        <li class="nav-item"><a class="nav-link {{ active('front.nous-connaitre') }}" href="{{ route('front.nous-connaitre') }}">Nous connaître</a></li>
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ request()->routeIs('front.nous-connaitre') ? 'active' : '' }}"
                            href="{{ route('front.nous-connaitre') }}" id="aboutMenu" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Nous connaître</a>
                            <ul class="dropdown-menu" aria-labelledby="aboutMenu">
                                <li><a class="dropdown-item" href="{{ route('front.nous-connaitre') }}">Notre groupe</a></li>
                                <li><a class="dropdown-item" href="{{ route('front.nous-connaitre') }}#equipe">Notre équipe</a></li>
                            </ul>
                        </li> --}}
                        <li class="nav-item"><a class="nav-link {{ active('front.expertises') }}" href="{{ route('front.expertises') }}">Expertises</a></li>
                        <li class="nav-item"><a class="nav-link {{ active('front.transactions') }}" href="{{ route('front.transactions') }}">Nos transactions</a></li>
                        <li class="nav-item"><a class="nav-link {{ active('front.actualities') }}" href="{{ route('front.actualities') }}">Actualités</a></li>
                    </ul>

                    <a class="btn btn-contact ms-lg-4" href="{{ route('front.contact') }}">Contact</a>
                </div>
            </div>
        </nav>
    </div>
</header>