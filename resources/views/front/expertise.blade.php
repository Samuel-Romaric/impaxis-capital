@extends('layouts.front.guest')

@section('title', 'Expertise')

@push('style')
    <style>
        .section-header {
            background:
                /* linear-gradient(90deg, rgba(4, 13, 29, .78) 0%, rgba(4, 13, 29, .35) 48%, rgba(4, 13, 29, .12) 100%), */
                linear-gradient(90deg, rgba(0, 0, 0, .82), rgba(0, 0, 0, .12)),
                url("{{ asset('front/assets/images/head-bg.png') }}") center center / cover no-repeat;
        }
    </style>
@endpush

@section('content')
    <section class="section-header">
        <div class="container">
            <div class="section-header__content">
                <h1>Nos <em>expertises</em> au service<br class="d-none d-lg-block">
                    de vos opérations financières</h1>
                <p>
                    Nous accompagnons les entreprises, les institutions et les investisseurs<br class="d-none d-lg-block">
                    dans leurs opérations financières et stratégiques en Afrique, de la<br class="d-none d-lg-block">
                    structuration des financements aux opérations de haut de bilan.
                </p>
            </div>

            <div class="section-header__indicators" aria-label="Slides">
                <button class="active" type="button" aria-label="Slide 1" aria-current="true"></button>
                <button type="button" aria-label="Slide 2"></button>
                <button type="button" aria-label="Slide 3"></button>
            </div>
        </div>
    </section>

    <section class="page-section fade-up">
        <div class="container">
            <div class="row align-items-stretch g-5">
                <div class="col-lg-6">
                    <div class="">
                        <div class="section__heading">
                            <h2 class="section__title">Conseil financier<br>et stratégique</h2>
                        </div>
                        <div class="section__description">
                            <p>
                                Nous utilisons les techniques financières les plus avancées grâce à nos
                                partenariats noués avec des institutions financières internationales de premier plan.
                                Nous mettons au service de nos clients notre expertise afin de leur garantir
                                la confidentialité et le succès dans les transactions.
                            </p>
                            <p>
                                Nous sommes qualifiés pour vous apporter un conseil en opérations de haut de bilan tels que :
                            </p>
                            <ul>
                                <li>Fusions et acquisitions</li>
                                <li>Privatisations</li>
                                <li>Restructurations de dettes</li>
                                <li>Structuration de rachats d'entreprises avec effet de levier</li>
                                <li>Rachat d'entreprises par les dirigeants ou les salariés</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section__image">
                        <img class="section__image img-fluid" src="{{ asset('front/assets/images/strategie-conseil.png') }}" alt="Conseil financier et stratégique">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section fade-up" style="background: #4268b7; color: #fff;">
        <div class="container">
            <div class="row align-items-stretch g-5">
                <div class="col-lg-6">
                    <img class="section__image img-fluid" src="{{ asset('front/assets/images/financement-2.png') }}" alt="Financement structuré">
                </div>
                <div class="col-lg-6">
                    <div class="section__heading">
                        <h2 class="section__title text-white">Financement structuré</h2>
                    </div>
                    <div class="section__description text-white" style="color: #fff;">
                        <p class="text-white">
                            Nous sommes l’un des pionniers au Sénégal dans la finance d’entreprise et les levées de fonds.
                            Nous capitalisons sur une ancienne expérience et des opérations réussies qui permettent
                            d’accompagner nos clients en toute confiance pour leurs opérations financières et stratégiques.
                        </p>
                        <p class="text-white">
                            Plus spécifiquement, notre intervention pourra porter sur le montage de financements bilatéraux ou en syndication pour :
                        </p>
                        <ul>
                            <li>Financement de projets</li>
                            <li>Financement d’investissements</li>
                            <li>Financement à l’import et à l’export</li>
                            <li>Financement de campagne</li>
                            <li>Partenariat public-privé (PPP)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section fade-up">
        <div class="container">
            <div class="row align-items-stretch g-5">
                <div class="col-lg-6">
                    <div class="">
                        <div class="section__heading">
                            <h2 class="section__title">LBO / Rachat d’entreprise</h2>
                        </div>
                        <div class="section__description">
                            <p>
                                Nous utilisons les techniques financières les plus avancées grâce 
                                aux partenariats noués avec des institutions financières internationales 
                                de premier plan. Nous mettons au service de nos clients notre expérience 
                                et notre expertise afin de leur garantir la confidentialité et le succès 
                                dans les transactions.
                            </p>
                            <p>
                                Nous sommes qualifiés pour vous apporter un conseil en opérations de haut de bilan tels que :
                            </p>
                            <ul>
                                <li>Privatisations</li>
                                <li>Restructurations de dettes</li>
                                <li>Restructurations de dettes</li>
                                <li>Structuration de rachats d’entreprises avec effet de levier (recours à l’endettement)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="">
                        <img class="section__image img-fluid"  src="{{ asset('front/assets/images/rachat-entreprise.png') }}" alt="Conseil financier et stratégique">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection