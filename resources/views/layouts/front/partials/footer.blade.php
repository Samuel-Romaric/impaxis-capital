<footer class="site-footer">
    <div class="container">
        <div class="row site-footer__top">
            <div class="col-lg-7">
                {{-- <h2>Impaxis Capital</h2> --}}
                <img src="{{ asset('front/assets/images/logo-impaxis-capital.png') }}" class="logo-impaxis-footer" alt="Impaxis Capital">
                <p class="site-footer__intro">
                    Banque d’affaires indépendante au service des<br class="d-none d-md-block">
                    entreprises et des investisseurs en Afrique.
                </p>

                <div class="site-footer__newsletter">
                    <h3>Abonnez-vous à notre<br>newsletter</h3>
                    <p>Recevez nos actualités et analyses<br>financières directement par e-mail.</p>
                    <form class="newsletter-form" action="#" method="post">
                        @csrf
                        <label for="newsletter-email" class="visually-hidden">Votre adresse e-mail</label>
                        <input type="email" id="newsletter-email" name="email"
                               placeholder="Votre adresse e-mail" required>
                        <button type="submit" aria-label="S'abonner à la newsletter"><span>↗</span></button>
                    </form>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <h3 class="site-footer__column-title">Expertises</h3>
                <ul>
                    <li><a href="#">Conseil financier</a></li>
                    <li><a href="#">Financement structuré</a></li>
                    <li><a href="#">Fusions-acquisitions</a></li>
                </ul>
            </div>

            <div class="col-sm-6 col-lg-2">
                <h3 class="site-footer__column-title">Nos filiales</h3>
                <ul>
                    <li><a href="#">Impaxis Securities</a></li>
                    <li><a href="#">Impaxis groupe</a></li>
                    <li><a href="#">Impaxis Asset Management</a></li>
                </ul>
            </div>
        </div>

        <div class="site-footer__bottom">
            <span>© {{ date('Y') }} IMPAXIS Capital</span>
            <div>
                <a href="#">Mentions légales</a>
                <a href="#">Confidentialité</a>
            </div>
        </div>
    </div>
</footer>