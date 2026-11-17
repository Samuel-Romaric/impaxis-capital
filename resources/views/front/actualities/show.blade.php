@extends('layouts.front.guest')

@section('title', 'Actualités')


@push('style')
    <style>
        .article-layout {
            max-width: 900px;
            margin: 0 auto;
        }

        .article-card {
            padding: clamp(24px, 5vw, 56px);
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 14px 40px rgba(20, 35, 55, .08);
        }

        .article-meta {
            margin-bottom: 28px;
            color: #77808c;
            font-size: .9rem;
        }

        .article-meta span + span::before {
            content: '•';
            margin: 0 10px;
            color: #c49a52;
        }

        .article-cover {
            width: 100%;
            max-height: 480px;
            margin-bottom: 32px;
            object-fit: cover;
            border-radius: 8px;
        }

        .article-content {
            color: #4f5965;
            font-size: 1.05rem;
            line-height: 1.85;
            overflow-wrap: anywhere;
        }

        .article-content h2,
        .article-content h3 {
            margin: 1.8em 0 .7em;
            color: #182b43;
            line-height: 1.3;
        }

        .article-content p,
        .article-content ul,
        .article-content ol,
        .article-content blockquote {
            margin-bottom: 1.25em;
        }

        .article-content blockquote {
            padding: 18px 24px;
            border-left: 3px solid #c49a52;
            background: #f7f5f0;
            color: #34445a;
        }

        .article-content img {
            max-width: 100%;
            height: auto;
            border-radius: 6px;
        }

        .section-header {
            min-height: 630px;
            display: flex;
            align-items: stretch;
            position: relative;
            overflow: hidden;
            background:
                linear-gradient(90deg, rgba(1, 24, 57, .88) 0%, rgba(1, 24, 57, .48) 42%, rgba(1, 24, 57, .12) 100%),
                url("{{ $item->getCoverFullUrl() }}") center center / cover no-repeat;
            color: #fff;
        }

        .page-title {
            display: inline-block;
            margin-bottom: 14px;
            padding: 7px 16px;
            border-radius: 20px;
            background: #efefef;
            color: #555;
            font-size: 13px;
        }

        .page-title h3 {
            margin-bottom: 12px;
            font-size: 21px;
            font-weight: 600;
            line-height: 1.25;
        }

        .item-title {
            color: #fff;
            font-size: 52px !important;
        }
    </style>
@endpush


@section('content')
    <section class="section-header" style="">
        <div class="container">
            <div class="section-header__content">
                <h3 class="page-title"><span><i class="bi bi-chevron-right"></i></span> Nos actualités</h3>
                <h2 class="item-title">{{ $item->title }}</h2>
                <p>
                    {{ $item->short_description }}<br class="d-none d-lg-block">
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
            <article class="article-layout">
                <div class="article-card">
                    @if (!empty($item->created_at))
                        <div class="article-meta">
                            <span>Publié le {{ \Illuminate\Support\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}</span>
                        </div>
                    @endif

                    <div class="article-content">
                        {!! $item->description !!}
                    </div>
                </div>
            </article>
        </div>
    </section>
@endsection



@push('script')
    <script></script>
@endpush