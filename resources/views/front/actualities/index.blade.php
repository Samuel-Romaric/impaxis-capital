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
                    <div class="col-lg-4 fade-up">
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
    
@endsection