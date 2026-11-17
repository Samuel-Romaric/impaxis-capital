@extends('layouts.front.guest')

@section('title', 'Nous connaître')

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
    <section class=" section-header">
        <div class="container">
            <div class="section-header__content">
                <h1>Parlons de vos projets </h1>
                <p>Vous avez un projet de financement, une opération stratégique ou un <br class="d-none d-lg-block">
                    besoin de conseil financier ? Notre équipe est à votre écoute pour<br class="d-none d-lg-block"> 
                    étudier vos besoins.
                </p>
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
                            <h3><i class="bi bi-geo"></i> Localisation</h3>
                            <p>Sacrée-Cœur 3 Extension VDN - Villa N°1 077</p>
                        </div>
                        <div class="col-sm-6">
                            <h3><i class="bi bi-telephone-inbound"></i> Contact</h3>
                            <p>+221 33 869 31 40<br>+221 33 864 53 41</p>
                        </div>
                        <div class="col-sm-6">
                            <h3><i class="bi bi-envelope-at"></i> Mail</h3>
                            <p><a href="mailto:contact@impaxiscapital.com">contact@impaxiscapital.com</a></p>
                        </div>
                        <div class="col-sm-6">
                            <h3><i class="bi bi-stopwatch"></i> Horaires d'ouverture</h3>
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