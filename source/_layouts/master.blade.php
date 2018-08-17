<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <title>Mats Direct | @stack('title')</title>
        <meta name="description" content="@stack('description')">
        <meta name="keywords" content="@stack('keywords')">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="author" content="Mats Direct - www.matsdirect.co.uk">

        {{-- Twitter  --}}
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@matsdirect" />
        <meta name="twitter:creator" content="@matsdirect" />

        {{-- OG --}}
        <meta property="og:title" content="Mats Direct | @stack('title')" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ $page->getUrl() }}" />
        <meta property="og:image" content="{{ $page->getUrl() }}/assets/img/favicon.png" />

        <link rel="icon" href="/assets/img/favicon.png">
        <link rel="shortcut icon" href="/assets/img/favicon.png">
        <link rel="stylesheet" href="/assets/css/main.css">

    </head>
    <body>

        @stack('schema')


        @component('_partials.main-nav')
        @endcomponent

        @yield('body')

        @component('_partials.footer')
        @endcomponent

        <script src="/assets/js/main.js" defer></script>

    </body>
</html>
