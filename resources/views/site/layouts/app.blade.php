<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dutch Laravel Foundation</title>

        <meta name="description" content="De kennis- en brancheorganisatie voor Laravel developers">
        <meta name="keywords" content="Laravel, PHP, Larafest, Taylor Otwell, Dutch Laravel Foundation">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="https://fonts.googleapis.com/css2?family=Miriam+Libre&display=swap" rel="stylesheet">
        <link href="https://dutchlaravelfoundation.nl/css/app.css" rel="stylesheet">
    </head>
    <body>
        <header class="header">
            <div class="header--container container">
                <div class="header--top">
                    <a href="{{ route('home') }}">
                        @include('site.partials.logo')
                    </a>
                    <nav class="nav">
                        @include('site.partials.navigation')
                    </nav>
                    <nav class="mobile-menu">
                        <button type="button" class="mobile-menu--button open-menu">MENU</button>

                        <div class="mobile-menu--menu">
                            <div class="mobile-menu--menu--top">
                                <a href="{{ route('home') }}">
                                    @include('site.partials.logo')
                                </a>

                                <button type="button" class="mobile-menu--menu--close open-menu">SLUITEN</button>
                            </div>

                            @include('site.partials.navigation')
                        </div>
                    </nav>

                </div>

                @yield('header')
            </div>

            @yield('headerBackground')
        </header>

        @yield('content')

        <section class="section-cta">
            <div class="container container--small">
                <div class="flex-row">
                    <div class="section-cta--cta">
                        <h3>Op zoek naar een Laravel bureau of ZZP'er?</h3>
                        <a href="https://dutchlaravelfoundation.nl/our-members" class="button button--primary">Zoek een lid</a>
                    </div>

                    <div class="section-cta--cta">
                        <h3>Sluit je als bureau of ZZP’er aan bij de Dutch Laravel Foundation!</h3>
                        <a href="https://dutchlaravelfoundation.nl/become-member" class="button button--primary">Word ook lid</a>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="container container--small">
                <h2>Dutch Laravel Foundation</h2>

                <nav class="nav">
                    @include('site.partials.navigation')
                </nav>

                <div class="footer--copyright">
                    <span>
                        <a href="https://dutchlaravelfoundation.nl/privacy-statement">Privacy statement</a> &nbsp;
                        <a href="https://dutchlaravelfoundation.nl/disclaimer">Disclaimer</a>
                    </span>
                    <p>&copy; {{ date('Y') }} - Dutch Laravel Foundation</p>
                </div>
            </div>
        </footer>

        <!-- Scripts -->
        <script src="https://dutchlaravelfoundation.nl/js/app.js"></script>
        <script src="https://dutchlaravelfoundation.nl/js/mobile.js"></script>
    </body>
</html>
