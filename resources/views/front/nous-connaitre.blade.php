@extends('layouts.front.guest')

@section('title', 'Nous connaître')

@push('style')
    <style>
        /* ==========================
        Nous connaître - Hero
        ========================== */
        .about-hero {
            min-height: 630px;
            position: relative;
            overflow: hidden;
            background:
                /* linear-gradient(90deg, rgba(2, 17, 40, .82), rgba(2, 17, 40, .12)), */
                linear-gradient(90deg, rgba(0, 0, 0, .82), rgba(0, 0, 0, .12)),
                url("{{ asset('front/assets/images/head-bg.png') }}") center / cover no-repeat;
            color: #fff;
        }

        .about-hero > .container {
            min-height: 630px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
        }

        .about-hero__content {
            margin-top: -24px;
        }

        .about-hero__content h1,
        .about-hero__content h1 em {
            color: #fff;
        }

        .about-hero__content h1 {
            margin-bottom: 24px;
            font-size: 58px;
            font-weight: 400;
            line-height: 1;
        }

        .about-hero__content h1 em {
            font-family: "Cormorant Garamond", serif;
            font-size: 64px;
        }

        .about-hero__content p {
            color: rgba(255, 255, 255, .9);
            font-size: 15px;
            line-height: 1.45;
        }

        .about-hero__stats {
            width: 720px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            position: absolute;
            right: 12px;
            bottom: 0;
        }

        .about-hero__stat {
            min-height: 126px;
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 18px;
            border-left: 1px solid rgba(255, 255, 255, .18);
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(2px);
            margin: 8px;
            border-radius: 10px;
        }

        .about-hero__icon {
            width: 42px;
            height: 42px;
            flex: 0 0 42px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: #f0dc00;
        }

        .about-hero__icon svg {
            width: 25px;
            height: 25px;
            fill: none;
            stroke: #183b69;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-width: 1.5;
        }

        .about-hero__stat strong,
        .about-hero__stat span {
            display: block;
        }

        .about-hero__stat strong {
            font-size: 28px;
            font-weight: 400;
            line-height: .95;
        }

        .about-hero__stat span {
            margin-top: 8px;
            font-size: 13px;
        }

        .about-hero__stat:last-child strong {
            font-size: 16px;
            line-height: 1.05;
        }

        @media (max-width: 767.98px) {
            .about-hero,
            .about-hero > .container {
                min-height: 680px;
            }

            .about-hero__content h1 {
                font-size: 42px;
            }

            .about-hero__stats {
                width: 100%;
                grid-template-columns: 1fr;
                right: 0;
            }
        }

        /* ==========================
        Nous connaître - Histoire
        ========================== */

        .section__badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 26px;
            padding: 10px 18px;
            border-radius: 30px;
            color: #222;
            font-size: 15px;
        }

        /* .badge__white {
            background: #fff;
        }

        .badge__gray {
            background: #f2f2f2;
        } */

        .section__badge i {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #f29100;
        }

        .history-section h2 {
            margin-bottom: 28px;
            color: #232323;
            font-size: 44px;
            font-weight: 400;
            line-height: 1.08;
        }

        .history-section__text {
            max-width: 600px;
            color: #555;
            font-size: 14px;
            line-height: 1.4;
        }

        .history-section__text p {
            margin-bottom: 12px;
        }

        .history-section__text ul {
            padding-left: 18px;
        }

        @media (max-width: 991.98px) {
            .history-section__image {
                height: 420px;
                margin-top: 32px;
            }
        }

        /* ==========================
        Nous connaître - Valeurs
        ========================== */
        .values-section__grid {
            width: 72%;
            margin-left: 28%;
        }

        .values-section {
            padding: 62px 0 70px;
            background: #fff;
        }

        .values-section > .container {
            max-width: 1320px;
        }

        .values-section h2 {
            margin-bottom: 30px;
            color: #232323;
            font-size: 46px;
            font-weight: 400;
        }

        .value-item svg {
            width: 34px;
            height: 34px;
            margin-bottom: 10px;
            fill: none;
            stroke: #4565ac;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-width: 1.6;
        }

        .value-item h3 {
            margin-bottom: 6px;
            color: #202020;
            font-size: 24px;
            font-weight: 400;
        }

        .value-item p {
            max-width: 250px;
            margin-bottom: 0;
            color: #555;
            font-size: 15px;
            line-height: 1.35;
        }

        /* ==========================
        Nous connaître - Zone
        ========================== */

        .coverage-section__countries h3 {
            margin-bottom: 18px;
            color: #242424;
            font-size: 30px;
            font-weight: 400;
        }

        .coverage-section__countries ul {
            margin: 0;
            padding-left: 18px;
            font-size: 14px;
            line-height: 1.35;
        }

        .coverage-section__map {
            min-height: 550px;
            position: relative;
            padding: 30px;
            border-radius: 10px;
            /* border: 1px solid #e1e1e1;*/
        }

        .coverage-section__map img {
            width: 100%;
            height: 430px;
        }
    </style>    
@endpush

@section('content')
    <section class="about-hero">
        <div class="container">
            <div class="about-hero__content">
                <h1>Une expertise <em>financière</em><br>au service de l’Afrique</h1>
                <p>IMPAXIS Capital est une banque d’affaires indépendante qui accompagne<br class="d-none d-lg-block">
                    les entreprises, les institutions et les investisseurs dans leurs opérations<br class="d-none d-lg-block">
                    financières et stratégiques sur les marchés africains.</p>
            </div>

            <div class="about-hero__stats" aria-label="Chiffres clés">
                <div class="about-hero__stat">
                    <span class="about-hero__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="8"/><path d="M12 8v8M8 12h8"/></svg>
                    </span>
                    <div><strong>15 ans</strong><span>de savoir-faire</span></div>
                </div>
                <div class="about-hero__stat">
                    <span class="about-hero__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24"><path d="M12 3v18M8 7h6a3 3 0 0 1 0 6H9a3 3 0 0 0 0 6h7"/></svg>
                    </span>
                    <div><strong>+1000<br>milliards</strong><span>de FCFA de<br>fonds levés</span></div>
                </div>
                <div class="about-hero__stat">
                    <span class="about-hero__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24"><path d="M12 3 4 7v5c0 5 3 8 8 10 5-2 8-5 8-10V7l-8-4Z"/><path d="m9 12 2 2 4-5"/></svg>
                    </span>
                    <div><strong>Couverture<br>totale de la zone<br>UEMOA, CEMAC</strong></div>
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
            <div class="row align-items-stretch gx-xl-5">
                <div class="col-lg-6">
                    <span class="section__badge badge__white"><i></i> Notre histoire</span>
                    <h2>Un partenaire engagé<br>dans vos ambitions</h2>
                    <div class="history-section__text">
                        <p>Fondée en <strong>2003</strong> par d’anciens banquiers seniors, Impaxis est une banque d’affaires indépendante spécialisée sur le <strong>marché africain</strong> avec une expérience reconnue par ses clients pour sa valeur ajoutée.</p>
                        <p>Le Groupe a su développer les atouts ci-après :</p>
                        <ul>
                            <li>Le regroupement de nos clients sur l’ensemble de leurs opérations de haut de bilan et intervention dans toutes les étapes du cycle de vie de l’entreprise : <strong>venture capital, growth capital, LBO, M&amp;A, TPO.</strong></li>
                            <li>La connaissance de nos clients proposées grâce à la bonne maîtrise des sous-jacents des écosystèmes de nos clients, à notre capacité d’écoute et notre connaissance approfondie de l’Afrique.</li>
                            <li>La connaissance du nombre de transactions réalisées démontre notre expertise et nous place comme la <strong>banque d’affaires de référence au Sénégal.</strong></li>
                        </ul>
                        <p>Notre capacité d’écoute et notre connaissance approfondie de l’Afrique nous permettent de maîtriser finement les sous-jacents des écosystèmes de nos clients et d’être pertinents dans notre proposition de solutions.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section__image">
                        <img src="{{ asset('front/assets/images/histoire-2.png') }}" 
                        class="section__image img-fluid" alt="Ville africaine moderne">
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

            {{-- <div class="text-center">
                <a href="{{ route('front.nous-connaitre') }}" class="btn section__button">En savoir plus</a>
            </div> --}}
        </div>
    </section>

    <section class="page-section fade-up">
        <div class="container">
            <div class="row align-items-stretch gx-xl-5">
                <div class="col-lg-6">
                    <img src="{{ asset('front/assets/images/valeur.png') }}"
                         class="section__image img-fluid"
                         alt="Salle de réunion professionnelle">
                </div>
                <div class="col-lg-6">
                    <span class="section__badge badge__white"><i></i> Notre vision</span>
                    <h2>Être reconnue comme la Banque d’Affaires de référence de l’Afrique, meilleure place pour travailler et qui génère une rentabilité durable.</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section fade-up">
        <div class="container">
            <div class="d-flex align-items-center">
                <h2 class="section__title">Nos valeurs</h2>
            </div>
            <div class="row gy-5 values-section__grid">
                <div class="col-md-6 col-lg-4">
                    <article class="value-item">
                        <svg viewBox="0 0 32 32" aria-hidden="true"><path d="M5 26h22M7 23V5h18v18l-3-3H10l-3 3Z"/><path d="m10 15 4-4 3 3 5-6"/></svg>
                        <h3>Performance</h3>
                        <p>Viser l’excellence et créer une valeur durable pour nos clients.</p>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="value-item">
                        <svg viewBox="0 0 32 32" aria-hidden="true"><path d="M16 3 27 7v7c0 7-4 12-11 15C9 26 5 21 5 14V7l11-4Z"/><path d="m11 16 3 3 7-7"/></svg>
                        <h3>Responsabilité</h3>
                        <p>Agir avec engagement et mesurer l’impact de nos décisions.</p>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="value-item">
                        <svg viewBox="0 0 32 32" aria-hidden="true"><path d="M8 13a8 8 0 1 1 16 0c0 5-3 7-4 9v4H12v-4c-1-2-4-4-4-9Z"/><path d="M13 29h6"/></svg>
                        <h3>Innovation</h3>
                        <p>Proposer des solutions financières adaptées aux enjeux de demain.</p>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="value-item">
                        <svg viewBox="0 0 32 32" aria-hidden="true"><circle cx="16" cy="9" r="4"/><circle cx="7" cy="14" r="3"/><circle cx="25" cy="14" r="3"/><path d="M10 27v-5c0-4 3-6 6-6s6 2 6 6v5M2 27v-4c0-3 2-5 5-5M30 27v-4c0-3-2-5-5-5"/></svg>
                        <h3>Esprit de famille</h3>
                        <p>Cultiver la confiance, la solidarité et des relations durables.</p>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="value-item">
                        <svg viewBox="0 0 32 32" aria-hidden="true"><path d="m5 20 18-18 4 4L9 24l-4-4ZM19 6l7 7"/><path d="M3 27h13M24 27h5"/></svg>
                        <h3>Intégrité</h3>
                        <p>Agir avec transparence, éthique et professionnalisme.</p>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="value-item">
                        <svg viewBox="0 0 32 32" aria-hidden="true"><circle cx="14" cy="14" r="10"/><path d="m14 9v5l4 2M23 23l6 6"/></svg>
                        <h3>Audace</h3>
                        <p>Oser de nouvelles approches pour saisir les opportunités.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="coverage-section fade-up" style="background: #D0D8F2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="section__heading">
                        <h2>Zone d’intervention</h2>
                        <p class="">Une présence au cœur des marchés africains pour<br class="d-none d-md-block">
                        accompagner vos projets et vos ambitions financières.</p>
                    </div>
                    {{-- <div class="row coverage-section__countries"> --}}
                    <div class="row section__description">
                        <div class="col-sm-4">
                            <h3>UEMOA</h3>
                            <ul>
                                <li>Bénin</li>
                                <li>Burkina Faso</li>
                                <li>Côte d’Ivoire</li>
                                <li>Guinée-Bissau</li>
                                <li>Mali</li>
                                <li>Niger</li>
                                <li>Sénégal</li>
                                <li>Togo</li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <h3>CEMAC</h3>
                            <ul>
                                <li>Cameroun</li>
                                <li>République centrafricaine</li>
                                <li>République du Congo</li>
                                <li>Gabon</li>
                                <li>Guinée équatoriale</li>
                                <li>Tchad</li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <h3>Autres pays :</h3>
                            <ul>
                                <li>Guinée (Conakry)</li>
                                <li>Mauritanie</li>
                                <li>République démocratique du Congo</li>
                                <li>Sao Tomé-et-Príncipe</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="coverage-section__map">
                        <img src="{{ asset('front/assets/images/zone-intervention.png') }}"
                         class="section__image img-fluid"
                         alt="Salle de réunion professionnelle">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section section-bg-blue fade-up">
        <div class="container">
            <div class="section__heading text-center">
                <h2 class="section__title text-white">Équipe</h2>
                <p class="" style="color: #eaeaead1">
                    Une équipe de banquiers d’affaires expérimentés, engagés à<br class="d-none d-md-block">
                    vos côtés pour vous accompagner dans la réalisation de vos<br class="d-none d-md-block">
                    opérations financières et stratégiques en Afrique.
                </p>
            </div>

            <div class="row g-4 section-width-100">
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

@endsection