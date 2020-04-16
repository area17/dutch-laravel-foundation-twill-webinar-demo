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
        <section class="section-about">
            <div class="container">
                @yield('content')
            </div>
        </section>
        <!-- Scripts -->
        <script src="https://dutchlaravelfoundation.nl/js/app.js"></script>
        <script src="https://dutchlaravelfoundation.nl/js/mobile.js"></script>
    </body>
</html>
