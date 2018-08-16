<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="/assets/css/main.css">
        <script src="/assets/js/main.js" charset="utf-8"></script>
    </head>
    <body>
        @component('_partials.main-nav')
        @endcomponent

        @yield('body')

        @component('_partials.footer')
        @endcomponent
    </body>
</html>
