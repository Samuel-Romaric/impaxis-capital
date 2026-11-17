@extends('layouts.front.guest')

@section('title', 'Transactions')

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
                <h1>Nos transactions <br class="d-none d-lg-block">
                le reflet de notre expertise</h1>
                <p>
                    Nous accompagnons les entreprises, les institutions et les investisseurs<br class="d-none d-lg-block">
                    dans la réalisation de leurs opérations financières et stratégiques sur les marchés africains.<br class="d-none d-lg-block">
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
            {{-- <div class="section__heading text-center">
                <h2 class="section__title">Transactions Récentes</h2>
                <p class="section__description">Découvrez nos dernières opérations financières et<br class="d-none d-md-block">
                    transactions stratégiques en Afrique.</p>
            </div> --}}

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
                    <div class="col-sm-6 col-lg-3 fade-up">
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

            {{-- <div class="text-center">
                <a href="{{ route('front.transactions') }}" class="btn section__button">Voir tout</a>
            </div> --}}
        </div>
    </section>
    
@endsection