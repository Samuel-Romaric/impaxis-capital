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
        <link rel="stylesheet" href="{{ asset('front/assets/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('front/assets/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}">
        
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

        @stack('styles')
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
        @stack('scripts')
    </body>
</html>
