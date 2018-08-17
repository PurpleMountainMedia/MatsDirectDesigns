<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <title>Mats Direct | @stack('title')</title>
        <meta name="description" content="@stack('description')">
        <meta name="keywords" content="@stack('keywords')">
        <meta name="author" content="Mats Direct - www.matsdirect.co.uk">

        {{-- OG --}}
        <meta property="og:title" content="Mats Direct | @stack('title')" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ $page->getUrl() }}" />
        <meta property="og:image" content="/assets/img/favicon.png" />

        <link rel="icon" href="/assets/img/favicon.png">
        <link rel="shortcut icon" href="/assets/img/favicon.png">
        <link rel="stylesheet" href="/assets/css/main.css">
    </head>
    <body>

        @component('_partials.main-nav')
        @endcomponent

        @yield('body')

        @component('_partials.footer')
        @endcomponent

        <script src="/assets/js/main.js" charset="utf-8" defer></script>

    </body>
</html>
