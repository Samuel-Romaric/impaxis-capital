<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') | {{ config('app.name', 'IMPAXIS Capital') }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="icon" type="image/x-icon" href="{{ asset('front/assets/images/logo/favicon-impaxis-securities.ico') }}">
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,500;1,600&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('front/assets/css/bootstrap-5.1.3/css/bootstrap.min.css') }}">
        {{-- <link rel="stylesheet" href="{{ asset('front/assets/css/app.css') }}"> --}}
        <link rel="stylesheet" href="{{ asset('front/assets/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}">
        
        <style>
            :root{
                --primary:#4565AC;
                --secondary:#F29100;
                --body-bg: #F1F0F0;/* #f4f4f2; */
                --border:#D2CFCD;
                --dark:#201F1E;
                --text: #666666;/* #403D3C; */
                --title:#1D1D1D;
            }

            body {
                font-family: "Inter", sans-serif;
                background: var(--body-bg);
                color: var(--text);
            }

            h1,h2,h3,h4,h5,h6{
                color:var(--dark);
            }

            p {
                margin-bottom: 0;
                color: var(--text);
                font-size: 1rem;
                line-height: 1.4;
            }

            .section__description {
                margin-bottom: 0;
                margin-top: 0;
                font-size: 1rem;
                line-height: 1.5;
            }

            .section__description h3 {
                font-size: 18px;
            }

            .section__description p {
                margin-bottom: 0;
                /* color: var(--text); */
                font-size: 1rem;
                line-height: 1.5;
            }

            .section__description ul {
                margin: 16px;
                padding-left: 18px;
                /* color: var(--text); */
                font-size: 1rem;
                line-height: 1.5;
            }
            /* ==========================
            Accueil - Hero
            ========================== */
            .home-hero {
                min-height: 630px !important;
                display: flex;
                align-items: stretch;
                position: relative;
                overflow: hidden;
                /* background:
                    linear-gradient(90deg, rgba(4, 13, 29, .78) 0%, rgba(4, 13, 29, .35) 48%, rgba(4, 13, 29, .12) 100%),
                    url("../images/slide-bg.png") center center / cover no-repeat; */
                color: #fff;
            }

            .home-hero > .container { 
                display: flex;
                flex-direction: column;
                justify-content: center;
                position: relative;
                padding-top: 24px;
                padding-bottom: 32px;
            }

            .home-hero__content {
                width: 700px;
                max-width: 58%;
                margin-bottom: 46px;
            }

            .home-hero__title {
                margin: 0 0 52px;
                color: #fff;
                font-family: "Poppins", sans-serif;
                font-size: 58px;
                font-weight: 400;
                line-height: .98;
                letter-spacing: -1px;
            }

            .home-hero__title em {
                font-family: "Cormorant Garamond", serif;
                font-size: 64px;
                font-weight: 500;
            }

            .home-hero__description {
                margin-bottom: 42px;
                color: rgba(255, 255, 255, .82);
                font-size: 15px;
                line-height: 1.55;
            }

            .home-hero__button {
                min-width: 190px;
                height: 44px;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                border: 0;
                border-radius: 8px;
                background: var(--secondary);
                color: #fff;
                font-size: 15px;
            }

            .home-hero__button:hover,
            .home-hero__button:focus {
                background: #d68100;
                color: #fff;
            }

            .home-hero__stats {
                width: 720px;
                max-width: 58%;
                display: grid;
                grid-template-columns: repeat(3, minmax(0, 1fr));
                align-self: flex-end;
                position: absolute;
                right: 12px;
                bottom: 2px;
            }

            .home-hero__stat {
                min-height: 126px;
                display: flex;
                align-items: center;
                gap: 14px;
                padding: 18px 10px 18px 22px;
                border-left: 1px solid rgba(255, 255, 255, .18);
                /* background: rgba(6, 22, 45, .72); */
                background: rgba(255, 255, 255, 0.1);
                backdrop-filter: blur(2px);
                margin: 8px;
                border-radius: 10px;
            }

            .home-hero__icon {
                width: 42px;
                height: 42px;
                flex: 0 0 42px;
                display: inline-flex !important;
                /* display: flex; */
                align-items: center;
                justify-content: center;
                border-radius: 50%;
                background: #f0dc00;
                color: #183b69;
                font-weight: 500;
            }

            .home-hero__icon i {
                width: 25px;
                height: 25px;
                fill: none;
                stroke: currentColor;
                stroke-linecap: round;
                stroke-linejoin: round;
                stroke-width: 1.5;
            }

            .home-hero__stat strong,
            .home-hero__stat span {
                display: block;
            }

            .home-hero__stat strong {
                color: #fff;
                font-size: 28px;
                font-weight: 400;
                line-height: 1;
            }

            .home-hero__stat > div > span {
                margin-top: 9px;
                color: rgba(255, 255, 255, .78);
                font-size: 13px;
                line-height: 1.2;
            }

            .home-hero__stat:last-child strong {
                font-size: 16px;
                line-height: 1.12;
            }

            /* ==========================
            Header
            ========================== */
            .main-header {
                height:80px;
                background-color: var(--body-bg);
                width: 100%;
                border-bottom: 1.5px solid #d8d8d8;
            }

            .main-header .navbar {
                height:80px;
                padding:0;
            }

            .brand-logo {
                margin-right:0;
                padding:0;
            }
            .logo-impaxis-head {
                width:160px;
                max-width:none;
                height:auto;
            }

            .main-nav {
                gap:34px;
            }

            .main-nav .nav-link {
                position:relative;
                padding:38px 0 34px;
                color:#262626;
                font-size:15px;
                font-weight:400;
                white-space:nowrap;
            }

            .nav-link:hover {
                color:#f29100 ;
                font-weight: 400;
            }

            .main-nav .nav-link.active {
                color:#f29100 ;
                font-weight: 400;
            }

            .main-nav .nav-link.active::after {
                position:absolute;
                right:0;
                bottom:28px;
                left:0;
                height:2px;
                background:#f29100;
                content:"";
            }

            .main-nav .dropdown-toggle::after {
                margin-left:5px;
                vertical-align:.15em;
                border-top:.3em solid;
                border-right:.3em solid transparent;
                border-left:.3em solid transparent;
            }

            .btn-contact {
                min-width:90px;
                height:38px;
                display:inline-flex;
                align-items:center;
                justify-content:center;
                border-radius:12px;
                background:#4565ac;
                color:#fff;
            }

            .btn-contact:hover,
            .btn-contact:focus {
                background:#36548f;
                color:#fff;
            }

            @media (max-width:991.98px) {
                .main-header,
                .main-header .navbar {
                    height:auto;
                }

                .main-header .navbar {
                    padding:18px 0;
                }

                .logo-impaxis-head {
                    width:180px;
                }

                .main-nav {
                    gap:0;
                    margin-top:16px;
                }

                .main-nav .nav-link {
                    padding:10px 0;
                }

                .main-nav .nav-link.active::after {
                    right:auto;
                    bottom:4px;
                    width:55px;
                }

                .btn-contact {
                    width:max-content;
                    margin-top:18px;
                }
            }

            .page-section {
                padding: 56px 0 60px;
            }

            .section__heading {
                margin-bottom: 50px;
            }

            .team-section__heading h2 {
                margin-bottom: 18px;
                color: #fff;
                font-size: 48px;
                font-weight: 400;
            }

            .team-section__heading p {
                max-width: 700px;
                margin-bottom: 0;
                color: rgba(255, 255, 255, .78);
                font-size: 19px;
                line-height: 1.35;
                font-weight: 300;
            }

            .section__title {
                /* margin: 0 auto 52px; */
                color: var(--title);
                font-size: 35px;
                font-weight: 500;
                line-height: 1.12;
                margin-bottom: 10px;
            }

            .partners-logos {
                display: flex;
                flex-wrap: wrap;
                align-items: center; /* Aligne les logos verticalement sur leur centre */
                justify-content: center;
                gap: 30px; /* Espace entre les logos */
            }

            .partners-logos img {
                max-width: 155px;
                max-height: 78px;
                width: auto; /* Permet aux images de conserver leurs proportions */
                height: auto; /* Permet aux images de conserver leurs proportions */
                object-fit: contain; /* Assure que l'image est contenue dans le conteneur sans être déformée */
                /*filter: grayscale(100%);  Rend les logos en niveaux de gris */
            }

            .partners-logos img:hover {
                filter: none; /* Retire le filtre de niveaux de gris au survol */
                transition: filter 0.3s ease; /* Ajoute une transition douce pour l'effet */
            }

/* About card */
            .about-section__cards {
                margin-bottom: 38px;
            }

            .about-card {
                height: 356px;
                padding: 24px 34px;
                border-radius: 8px;
                background: #4268b7;
                color: #fff;
            }


            i.about-card__icon {
                font-size: 48px;
                color: #ef9a00;
            }

            .about-card h3 {
                min-height: 70px;
                margin-bottom: 8px;
                color: #fff;
                font-size: 18.5px;
                font-weight: 400;
                line-height: 1.15;
            }

            .about-card ul {
                margin: 0;
                padding-left: 18px;
                color: rgba(255, 255, 255, .82);
                font-size: 14px;
                line-height: 1.45;
            }
            
            .section__button {
                min-width: 160px;
                height: 42px;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                border-radius: 8px;
                background: #2d2a29;
                color: #fff;
                font-size: 15px;
            }

            .section__button:hover,
            .section__button:focus {
                background: #1d1b1a;
                color: #fff;
            }

            .section-bg-blue {
                background: #4268b7;
                color: #fff;
            }

            .section-width-100 {
                width: 100%;
            }

            .team-member {
                height: 410px;
                position: relative;
                overflow: hidden;
                border-radius: 8px;
                background: #dfe3e8;
            }

            .team-member img {
                width: 100%;
                height: 100%;
                display: block;
                object-fit: cover;
                object-position: center top;
            }

            .glass-card {
                position: absolute;
                right: 13px;
                bottom: 13px;
                left: 13px;
                /* Fond blanc semi-transparent */
                /* background: rgba(26, 26, 26, 0.37);  */
                background: rgba(21, 21, 21, .56);
                /* background: rgba(255, 255, 255, 0.2); */
                backdrop-filter: blur(2px);
                border-radius: 8px;
                /* Flou d'arrière-plan (l'effet clé) */
                /* backdrop-filter: blur(12px); */
                -webkit-backdrop-filter: blur(2px);
                /* Fine bordure lumineuse pour simuler l'épaisseur du verre */
                border: 1px solid rgba(255, 255, 255, 0.3);
                /* Ombre portée pour donner du relief */
                box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
                /* Espacement interne */
                padding: 16px 18px;
            }

            .glass-card h3 {
                margin-bottom: 4px;
                color: var(--title);
                font-size: 24px;
                font-weight: 400;
                /* color: #fff; */
                /* color: var(--secondary); */
                color: #fff;
                font-weight: 500;
            }

            .glass-card p,
            .glass-card span {
                margin-bottom: 2px;
                color: rgba(255, 255, 255, .86);
                font-size: 15px;
            }

            .glass-card span {
                display: block;
            }

            /* ==========================
            Accueil - Transactions
            ========================== */
            .transactions-section__cards {
                margin-bottom: 34px;
            }

            .transactions-section__heading h2 {
                margin-bottom: 12px;
                color: #242424;
                font-size: 38px;
                font-weight: 400;
            }

            .transactions-section__heading p {
                margin-bottom: 0;
                color: #666;
                font-size: 13px;
            }

            .transaction-card {
                height: 250px;
                display: flex;
                flex-direction: column;
                align-items: center;
                border: 1px solid #d6d6d6;
                background: #fff;
                text-align: center;
            }

            .transaction-card__logo {
                height: 94px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 22px;
                font-weight: 700;
            }

            .transaction-card__logo--atlantic {
                font-size: 11px;
                font-weight: 400;
            }

            .transaction-card__logo--wf {
                font-family: serif;
                font-size: 30px;
                font-style: italic;
            }

            .transaction-card__content {
                flex: 1;
            }

            .transaction-card__content p {
                margin-bottom: 7px;
                font-size: 15px;
                line-height: 1.2;
            }

            .transaction-card__content span {
                color: #777;
                font-size: 13px;
            }

            .transaction-card__button {
                width: auto;
                margin-bottom: 16px;
                padding: 8px 18px;
                border: 0;
                border-radius: 4px;
                background: #ececec;
                color: #555;
                font-size: 13px;
            }

            .transactions-section__button {
                min-width: 160px;
                height: 42px;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                border-radius: 6px;
                background: #2d2a29;
                color: #fff;
            }

            /*==========================
            Accueil - Actualités
            ========================== */
            .news-card {
                height: 100%;
            }

            .news-card__image {
                width: 100%;
                height: 280px;
                display: block;
                border-radius: 10px;
                object-fit: cover;
            }

            .news-card__body {
                padding-top: 18px;
            }

            .news-card__category {
                display: inline-block;
                margin-bottom: 14px;
                padding: 7px 16px;
                border-radius: 20px;
                background: #efefef;
                color: #555;
                font-size: 13px;
            }

            .news-card__body h3 {
                margin-bottom: 12px;
                font-size: 21px;
                font-weight: 600;
                line-height: 1.25;
            }

            .news-card__body p {
                margin-bottom: 14px;
                font-size: 15px;
                line-height: 1.35;
            }

            .news-card__body a {
                color: #4565ac;
                font-size: 15px;
                text-decoration: underline;
            }

            .news-section__button {
                min-width: 160px;
                height: 42px;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                margin-top: 24px;
                border-radius: 6px;
                background: #2d2a29;
                color: #fff;
            }

            .news-section__button:hover,
            .news-section__button:focus {
                background: #1d1b1a;
                color: #fff;
            }

            .contact-section__details {
                row-gap: 48px;
                background: rgba(255, 255, 255, .82);
                padding: 10px;
                border-radius: 10px;
            }

            .contact-section__details h3 {
                margin-bottom: 8px;
                margin-top: 10px;
                color: var(--secondary);
                font-size: 16px;
                font-weight: 400;
            }

            .contact-section__details h3 span {
                /* margin-bottom: 14px; */
                color: #ffffff;
                background: var(--primary);
                padding: 3px;
                border-radius: 6px;
            }

            .contact-section__details p,
            .contact-section__details a {
                margin-bottom: 0;
                /* color: #222; */
                color: rgba(95, 95, 95, 0.82);
                font-size: 16px;
                line-height: 1.5;
                text-decoration: none;
            }

            .contact-form .form-control {
                min-height: 48px;
                border: 1px solid #d8d8d8;
                border-radius: 8px;
                color: #555;
                font-size: 15px;
                box-shadow: none;
            }

            .contact-form textarea.form-control {
                min-height: 170px;
                resize: vertical;
            }

            .contact-form__submit {
                width: 100%;
                height: 48px;
                margin-top: 12px;
                border-radius: 4px;
                background: #2d2a29;
                color: #fff;
            }

            .contact-form__submit:hover,
            .contact-form__submit:focus {
                background: #1d1b1a;
                color: #fff;
            }
            /* ==========================
            Footer
            ========================== */

            .site-footer {
                padding: 62px 0 34px;
                background: #111;
                color: #fff;
            }

            .logo-impaxis-footer {
                /* filter: brightness(0) invert(1); */
                width: 150px;
                max-width: none;
                height: auto;
            }


            .site-footer__top {
                min-height: 360px;
            }

            .site-footer h2 {
                margin-bottom: 12px;
                color: #fff;
                font-size: 32px;
                font-weight: 400;
            }

            .site-footer__intro {
                margin-bottom: 72px;
                /* color: rgba(156, 156, 156, 0.68); */
                color: rgba(255, 255, 255, .86);
                font-size: 16px;
                line-height: 1.35;
            }

            .site-footer__newsletter {
                /* width: 78%; */
                width: 100%;
                position: relative;
            }

            .site-footer__newsletter h3 {
                margin-bottom: 8px;
                color: #fff;
                font-size: 18px;
                font-weight: 400;
            }

            .site-footer__newsletter p {
                width: 48%;
                margin-bottom: 0;
                color: rgba(255, 255, 255, .68);
                font-size: 14px;
                line-height: 1.35;
            }

            .newsletter-form {
                width: 50%;
                position: absolute;
                right: 0;
                bottom: 0;
            }

            .newsletter-form input {
                width: 100%;
                height: 40px;
                padding: 0 58px 0 18px;
                border: 0;
                border-radius: 28px;
                outline: 0;
                font-size: 14px;
            }

            .newsletter-form button {
                width: 35px;
                height: 35px;
                position: absolute;
                top: 3px;
                right: 3px;
                border: 0;
                border-radius: 50%;
                background: #070707;
                color: #fffefe;
                font-size: 30px;
                line-height: 1;
            }

            .newsletter-form button:hover,
            .newsletter-form button:focus {
                background: var(--secondary);
                color: #fff;
                transition: all 0.3s ease-in-out;
            }

            .newsletter-form button span {
                display: inline-block;
                font-size: 20px;
                align-items: center;
                align-content: center;
                /* transform: rotate(-45deg); */
            }

            .site-footer__column-title {
                margin-top: 80px;
                margin-bottom: 18px;
                color: #fff;
                font-size: 20px;
            }

            .site-footer ul {
                margin: 0;
                padding-left: 18px;
            }

            .site-footer li {
                margin-bottom: 7px;
                color: #f29100;
            }

            .site-footer li a {
                color: rgba(255, 255, 255, .86);
                font-size: 15px;
                text-decoration: none;
            }

            .site-footer__bottom {
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding-top: 25px;
                border-top: 1px solid rgba(242, 145, 0, .45);
                color: rgba(255, 255, 255, .56);
                font-size: 13px;
            }

            .site-footer__bottom div {
                display: flex;
                gap: 36px;
            }

            .site-footer__bottom a {
                color: rgba(255, 255, 255, .56);
                text-decoration: none;
            }

            .badge__white {
                background: #fff;
            }

            .badge__gray {
                background: #f2f2f2;
            }

            .section__image {
                /* height: 100%; Prend toute la hauteur de la colonne Bootstrap */
                min-height: 200px; /* Évite que l'image disparaisse sur mobile/tablette */
                overflow: hidden;
                border-radius: 12px;
            }

            .section__image img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                display: block;
            }

            /* ==========================
            Expertise - Hero
            ========================== */

            .section-header {
                min-height: 630px;
                display: flex;
                align-items: stretch;
                position: relative;
                overflow: hidden;
                /* background:
                    linear-gradient(90deg, rgba(1, 24, 57, .88) 0%, rgba(1, 24, 57, .48) 42%, rgba(1, 24, 57, .12) 100%),
                    url("../images/head-bg.png") center center / cover no-repeat; */
                color: #fff;
            }

            .section-header > .container {
                min-height: 630px;
                display: flex;
                align-items: center;
                position: relative;
            }

            .section-header__content {
                width: 760px;
                max-width: 68%;
                margin-top: -24px;
            }

            .section-header__content h1 {
                margin: 0 0 24px;
                color: #fff;
                font-family: "Poppins", sans-serif;
                font-size: 58px;
                font-weight: 400;
                line-height: 1.08;
                letter-spacing: -1px;
            }

            .section-header__content h1 em {
                font-family: "Cormorant Garamond", serif;
                font-size: 66px;
                font-weight: 500;
            }

            .section-header__content p {
                margin: 0;
                color: rgba(255, 255, 255, .78);
                font-size: 15px;
                line-height: 1.55;
            }

            .section-header__indicators {
                display: flex;
                gap: 9px;
                position: absolute;
                right: 12px;
                bottom: 18px;
            }

            .section-header__indicators button {
                width: 7px;
                height: 7px;
                padding: 0;
                border: 0;
                border-radius: 50%;
                background: rgba(255, 255, 255, .62);
            }

            .section-header__indicators button.active {
                width: 24px;
                border-radius: 10px;
                background: #fff;
            }

            @media (max-width: 767.98px) {
                .section-header,
                .section-header > .container {
                    min-height: 560px;
                }

                .section-header__content {
                    width: 100%;
                    max-width: none;
                    margin-top: -40px;
                }

                .section-header__content h1 {
                    font-size: 42px;
                }

                .section-header__content h1 em {
                    font-size: 48px;
                }
            }
        </style>

        <style>
            /* État initial : invisible et légèrement décalé vers le bas */
            .fade-up {
                opacity: 0;
                transform: translateY(30px);
                transition: opacity 0.6s ease-out, transform 0.6s ease-out;
            }

            /* État visible : opacité normale et position d'origine */
            .fade-up.visible {
                opacity: 1;
                transform: translateY(0);
            }
        </style>

        @stack('style')
    </head>
    <body class="">
        @include('layouts.front.partials.header')

        <main>
            @yield('content')
        </main>

        @include('layouts.front.partials.footer')

        <script src="{{ asset('front/assets/css/bootstrap-5.1.3/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('front/assets/js/jquery-4.min.js') }}"></script>
        <script>
            $(document).ready(function() {
                function verifierScroll() {
                    var hauteurFenetre = $(window).height();
                    var positionScroll = $(window).scrollTop();

                    $('.fade-up').each(function() {
                        var positionElement = $(this).offset().top;

                        // Déclenche l'animation quand l'élément arrive à 85% de la hauteur de l'écran
                        if (positionElement < (positionScroll + hauteurFenetre * 0.85)) {
                            $(this).addClass('visible');
                        }
                    });
                }

                // Exécuter au chargement de la page (pour les éléments déjà visibles en haut)
                verifierScroll();

                // Exécuter à chaque fois que l'utilisateur fait défiler la page
                $(window).on('scroll', function() {
                    verifierScroll();
                });
            });
        </script>
        @stack('script')
    </body>
</html>
