@extends('layouts.front.guest')

@section('title', 'Actualités')


@section('content')
    <section class="section-header">
        <div class="container">
            <div class="section-header__content">
                <h1>Nos actualités</h1>
                <p>
                    Retrouvez les dernières actualités d’IMPAXIS Capital, nos opérations,<br class="d-none d-lg-block">
                    nos analyses et les évolutions des marchés financiers africains.<br class="d-none d-lg-block">
                </p>
            </div>

            <div class="section-header__indicators" aria-label="Slides">
                <button class="active" type="button" aria-label="Slide 1" aria-current="true"></button>
                <button type="button" aria-label="Slide 2"></button>
                <button type="button" aria-label="Slide 3"></button>
            </div>
        </div>
    </section>

    <section class="page-section" style="">
        <div class="container">
            {{-- <div class="section__heading">
                <h2 class="section__title">Nos dernières actualités</h2>
            </div> --}}
            <div class="row g-4">
                @foreach ([0, 1, 2, 3, 4, 5] as $articleIndex)
                    <div class="col-lg-4">
                        <article class="news-card">
                            <img src="{{ asset('front/assets/images/news/article-default.png') }}"
                                 class="news-card__image"
                                 alt="Actualité IMPAXIS Capital">

                            <div class="news-card__body">
                                <span class="news-card__category" style="background: #fff">Conseil financier</span>
                                <h3>Accompagnement stratégique d’un groupe agroalimentaire</h3>
                                <p>Participation aux échanges sur l’épargne longue, le financement des économies africaines et les marchés capitaux.</p>
                                <a href="#">Voir la publication</a>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>

            {{-- <div class="text-center">
                <a href="#" class="btn news-section__button">Voir tout</a>
            </div> --}}
        </div>
    </section>

    {{-- <section class="page-section">
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

    <section class="page-section" style="background: #4268b7; color: #fff;">
        <div class="container">
            <div class="row align-items-stretch g-5">
                <div class="col-lg-6">
                    <img class="section__image img-fluid" src="{{ asset('front/assets/images/financement.png') }}" alt="Financement structuré">
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

    <section class="page-section">
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
    </section> --}}
    
@endsection