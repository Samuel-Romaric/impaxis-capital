@extends('layouts.front.guest')

@section('title', 'Actualités')

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
                @foreach ($articles as $item)
                    <div class="col-lg-4">
                        <article class="news-card">
                            <img src="{{ $item->getCoverFullUrl() }}"
                                 class="news-card__image"
                                 alt="Actualité IMPAXIS Capital">

                            <div class="news-card__body">
                                <span class="news-card__category">{{ $item->category->title }}</span>
                                <h3>{{ $item->title }}</h3>
                                <p>{{ $item->short_description }}</p>
                                <a href="{{ route('front.actualite.show', ['item_id' => $item->id, 'slug' => $item->slug]) }}">Voir la publication</a>
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


@push('script')
    <script></script>
@endpush