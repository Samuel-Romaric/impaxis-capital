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
        
        {{-- <style>
            :root{
                --primary:#4565AC;
                --secondary:#F29100;
                --body-bg: #f4f4f2;
                --border:#D2CFCD;
                --dark:#201F1E;
            }

            body{
                font-family: "Poppins", sans-serif;
                background-color:var(--body-bg);
                color:var(--dark);
                line-height:1.5;
            }

            h1 .header-title {
                font-family: "Cormorant Garamond", serif;
                font-size:3.5rem;
                line-height:1.05;
            }

            h2 .header-title {
                font-family: "Cormorant Garamond", serif;
                font-size:3rem;
                line-height:1.05;
            }

            h1 .body-title {
                font-size:3.5rem;
                line-height:1.05;
            }

            h2 .body-title {
                font-size:3rem;
                line-height:1.05;
            }

            p {     
                font-size:1rem;
                line-height:1.5;
            }

            .main-header {
                height:100px;
                /* background:#fff; */
            }

            .main-header .navbar {
                height:100px;
                padding:0;
            }

            .main-header .container {
                max-width:1320px;
            }

            .logo-impaxis-head {
                width:130px;
                max-width:none;
                height:auto;
            }

            .brand-logo {
                margin-right:0;
                padding:0;
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

            .main-nav .nav-link.active {
                color:#f29100;
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
        </style> --}}

        @stack('styles')
    </head>
    <body class="">
        @include('layouts.front.partials.header')

        <main>
            @yield('content')
        </main>

        @include('layouts.front.partials.footer')

        <script src="{{ asset('front/assets/css/bootstrap-5.1.3/js/bootstrap.bundle.min.js') }}"></script>
        @stack('scripts')
    </body>
</html>
