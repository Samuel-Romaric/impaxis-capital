@extends('layouts.front.guest')

@section('title', 'Accueil')



@section('content')
    <section class="home-hero">
        <div class="container">
            <div class="home-hero__content">
                    <h1 class="home-hero__title">
                        Conseil <em>financier</em><br>
                        &amp; investissement
                    </h1>
                    <p class="home-hero__description">
                        Banque d’affaires indépendante, IMPAXIS Capital accompagne les<br class="d-none d-lg-block">
                        entreprises et les investisseurs dans leurs opérations stratégiques,<br class="d-none d-lg-block">
                        leurs financements et leurs projets de croissance en Afrique de<br class="d-none d-lg-block">
                        l’Ouest et centrale.
                    </p>
                    <a href="{{ route('front.expertises') }}" class="btn home-hero__button">Notre expertises</a>
            </div>

            <div class="home-hero__stats" aria-label="Chiffres clés">
                <div class="home-hero__stat">
                    <span class="home-hero__icon" aria-hidden="true">
                        {{-- <svg viewBox="0 0 24 24">
                            <path d="M7 3v3m10-3v3M4 9h16M5 5h14a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z"/>
                            <path d="M8 13h3m-3 4h6"/>
                        </svg> --}}
                        <i class="bi bi-calendar2"></i>
                    </span>
                    <div>
                        <strong>15 ans</strong>
                        <span>de savoir-faire</span>
                    </div>
                </div>

                <div class="home-hero__stat">
                    <span class="home-hero__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 3v18M7 6h8a3 3 0 0 1 0 6H9a3 3 0 0 0 0 6h8"/>
                        </svg>
                    </span>
                    <div>
                        <strong>+1000 milliards</strong>
                        <span>de FCFA de fonds levés</span>
                    </div>
                </div>

                <div class="home-hero__stat">
                    <span class="home-hero__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24">
                            <path d="m12 3 7 4v5c0 4-2.5 7-7 9-4.5-2-7-5-7-9V7l7-4Z"/>
                            <path d="M9 12h6l-3 5-3-5Z"/>
                        </svg>
                    </span>
                    <div>
                        <strong>Couverture totale de la zone UEMOA, CEMAC</strong>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <section class="page-section fade-up">
        <div class="container mb-5 mb-lg-0 mt-5 mt-lg-0">
            <div class="section__heading text-center">
                <h2 class="section__title mb-4">La confiance des grands acteurs<br>économiques</h2>
            </div>

            <div class="container">
                <div class="row align-items-center justify-content-between g-4 partners-logos">
                    <div class="col-6 col-md-4 col-lg text-center">
                        <img src="{{ asset('front/assets/images/partners/sonatel.png') }}" alt="Sonatel">
                    </div>
                    <div class="col-6 col-md-4 col-lg text-center">
                        <img src="{{ asset('front/assets/images/partners/air-senegal.png') }}" class="partners-logo" alt="Air Sénégal">
                    </div>
                    <div class="col-6 col-md-4 col-lg text-center">
                        <img src="{{ asset('front/assets/images/partners/dg-tresors.png') }}" alt="Direction générale du Trésor">
                    </div>
                    <div class="col-6 col-md-4 col-lg text-center">
                        <img src="{{ asset('front/assets/images/partners/rts.png') }}" alt="RTS">
                    </div>
                    <div class="col-6 col-md-4 col-lg text-center">
                        <img src="{{ asset('front/assets/images/partners/sar.png') }}" alt="SAR">
                    </div>
                    <div class="col-6 col-md-4 col-lg text-center">
                        <img src="{{ asset('front/assets/images/partners/bhs.png') }}" alt="BHS">
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <section class="page-section fade-up">
        <div class="container">
            <div class="section__heading text-center">
                <h2 class="section__title mb-2">Nous connaître</h2>
                <p class="mb-4">IMPAXIS Capital accompagne entreprises et investisseurs<br class="d-none d-md-block">
                    dans leurs opérations financières et stratégiques en Afrique.</p>
            </div>

            <div class="row g-4 about-section__cards">
                <div class="col-lg-4">
                    <article class="about-card">
                        <i class="bi bi-people about-card__icon" aria-hidden="true"></i>
                        
                        <h3 class="card-title">Une équipe de banquiers<br>d'affaires chevronnés</h3>
                        <ul>
                            <li>Expérience reconnue sur plusieurs géographies</li>
                            <li>Standards internationaux avec une connaissance des marchés africains</li>
                        </ul>
                    </article>
                </div>

                <div class="col-lg-4">
                    <article class="about-card">
                        <i class="bi bi-briefcase about-card__icon" aria-hidden="true"></i>
                        <h3>Un (one-stop-shop) dans les<br>métiers de banques d'affaires</h3>
                        <ul>
                            <li>Capacité d’intervention en direct sur les marchés financiers régionaux (BRVM)</li>
                            <li>Track-record dans les opérations Advisory (M&amp;A, LBO, Structured Leveraged Finance)</li>
                        </ul>
                    </article>
                </div>

                <div class="col-lg-4">
                    <article class="about-card">
                        <i class="bi bi-lightbulb about-card__icon" aria-hidden="true"></i>
                        <h3>Une bonne connaissance des<br>investisseurs de la zone UEMOA</h3>
                        <ul>
                            <li>Une bonne connaissance des investisseurs de la zone UEMOA</li>
                            <li>Capacité à atteindre les objectifs du client dans les délais impartis et à déterminer la meilleure option à privilégier</li>
                        </ul>
                    </article>
                </div>
            </div>

            <div class="text-center">
                <a href="{{ route('front.nous-connaitre') }}" class="btn section__button">En savoir plus</a>
            </div>
        </div>
    </section>

    <section class="page-section team-section fade-up">
        <div class="container">
            <div class="section__heading text-center">
                <h2 class="section__title text-white">Équipe</h2>
                <p class="" style="color: #eaeaead1">
                    Une équipe de banquiers d’affaires expérimentés, engagés à<br class="d-none d-md-block">
                    vos côtés pour vous accompagner dans la réalisation de vos<br class="d-none d-md-block">
                    opérations financières et stratégiques en Afrique.
                </p>
            </div>

            <div class="row g-4 team-section__members">
                <div class="col-md-4">
                    <article class="team-member">
                        <img src="{{ asset('front/assets/images/team/momar-ndour.png') }}" alt="Momar Ndour">
                        <div class="glass-card">
                            <h3>Momar NDOUR</h3>
                            <p>Président Directeur Général</p>
                            <span>23 ans d’expérience</span>
                        </div>
                    </article>
                </div>

                <div class="col-md-4">
                    <article class="team-member">
                        <img src="{{ asset('front/assets/images/team/aboubacar-diaw.png') }}" alt="Aboubacar Diaw">
                        <div class="glass-card">
                            <h3>Aboubacar DIAW</h3>
                            <p>Directeur Général d’Impaxis Securities</p>
                            <span>12 ans d’expérience</span>
                        </div>
                    </article>
                </div>

                <div class="col-md-4">
                    <article class="team-member">
                        <img src="{{ asset('front/assets/images/team/romaric-socia.png') }}" alt="Romaric Socia">
                        <div class="glass-card">
                            <h3>Romaric SOCIA</h3>
                            <p>Senior Associate</p>
                            <span>5 années d’expérience</span>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section fade-up">
        <div class="container">
            <div class="section__heading text-center">
                <h2 class="section__title">Transactions Récentes</h2>
                <p class="section__description">Découvrez nos dernières opérations financières et<br class="d-none d-md-block">
                    transactions stratégiques en Afrique.</p>
            </div>

            <div class="row g-3 g-lg-4 transactions-section__cards">
                @foreach ([
                    ['logo' => 'transit', 'name' => 'SENTOO', 'color' => '#d33b33'],
                    ['logo' => 'atlantic', 'name' => 'ATLANTIQUE TELECOM', 'color' => '#1f9a9b'],
                    ['logo' => 'matforc', 'name' => 'MATFORCE', 'color' => '#ef6a00'],
                    ['logo' => 'sunu', 'name' => 'SUNU', 'color' => '#b51e4a'],
                    ['logo' => 'sifi', 'name' => 'SIFI', 'color' => '#1d1d1d'],
                    ['logo' => 'elton', 'name' => 'ELTON', 'color' => '#1976a8'],
                    ['logo' => 'sipres', 'name' => 'SIPRES', 'color' => '#1976a8'],
                    ['logo' => 'wf', 'name' => 'WF', 'color' => '#d5af47'],
                ] as $transaction)
                    <div class="col-sm-6 col-lg-3">
                        <article class="transaction-card">
                            <div class="transaction-card__logo transaction-card__logo--{{ $transaction['logo'] }}"
                                 style="color: {{ $transaction['color'] }}">
                                {{ $transaction['logo'] === 'atlantic' ? 'atlantique telecom' : $transaction['name'] }}
                            </div>
                            <div class="transaction-card__content">
                                <p><strong>Secteur :</strong> Transport</p>
                                <p><strong>Acquéreur :</strong> Transports DIEYE</p>
                                <span>Acquisition de 100% du<br>capital de TRANSAT</span>
                            </div>
                            <button class="transaction-card__button" type="button">Montant non divulgué</button>
                        </article>
                    </div>
                @endforeach
            </div>

            <div class="text-center">
                <a href="{{ route('front.transactions') }}" class="btn section__button">Voir tout</a>
            </div>
        </div>
    </section>

    <section class="page-section fade-up" style="background-color: #D0D8F2;">
        <div class="container">
            <div class="section__heading">
                <h2 class="section__title">Nos dernières actualités</h2>
            </div>
            <div class="row g-4">
                @foreach ($articles as $item)
                    <div class="col-lg-4">
                        <article class="news-card">
                            <img src="{{ $item->getCoverFullUrl() }}"
                                 class="news-card__image"
                                 alt="Actualité IMPAXIS Capital">

                            <div class="news-card__body">
                                <span class="news-card__category">Conseil financier</span>
                                <h3>Accompagnement stratégique d’un groupe agroalimentaire</h3>
                                <p>Participation aux échanges sur l’épargne longue, le financement des économies africaines et les marchés capitaux.</p>
                                <a href="#">Voir la publication</a>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>

            <div class="text-center">
                <a href="{{ route('front.actualities') }}" class="btn news-section__button">Voir tout</a>
            </div>
        </div>
    </section>

    <section class="page-section fade-up">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5">
                    <h2 class="contact-section__title">Contact</h2>

                    <div class="row contact-section__details">
                        <div class="col-sm-6">
                            <h3>Localisation</h3>
                            <p>Sacrée-Cœur 3 Extension VDN - Villa N°1 077</p>
                        </div>
                        <div class="col-sm-6">
                            <h3>Contact</h3>
                            <p>+221 33 869 31 40<br>+221 33 864 53 41</p>
                        </div>
                        <div class="col-sm-6">
                            <h3>Mail</h3>
                            <p><a href="mailto:contact@impaxiscapital.com">contact@impaxiscapital.com</a></p>
                        </div>
                        <div class="col-sm-6">
                            <h3>Horaires d'ouverture</h3>
                            <p>Du lundi au vendredi<br>8h00 - 17h00</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <h2 class="contact-section__form-title">Formulaire de contact</h2>

                    <form class="contact-form">
                        <div class="mb-3">
                            <label for="contact-name" class="visually-hidden">Nom et prénom</label>
                            <input type="text" class="form-control" id="contact-name" placeholder="Nom et prénom">
                        </div>
                        <div class="mb-3">
                            <label for="contact-email" class="visually-hidden">Adresse e-mail professionnelle</label>
                            <input type="email" class="form-control" id="contact-email" placeholder="Adresse e-mail professionnelle">
                        </div>
                        <div class="mb-3">
                            <label for="contact-company" class="visually-hidden">Entreprise</label>
                            <input type="text" class="form-control" id="contact-company" placeholder="Entreprise">
                        </div>
                        <div class="mb-3">
                            <label for="contact-message" class="visually-hidden">Message</label>
                            <textarea class="form-control" id="contact-message" rows="5" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn contact-form__submit">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection


@push('scripts')
    <script></script>
@endpush