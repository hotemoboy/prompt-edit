<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Prompt Edit — the most affordable AI marketplace. Access top AI tools without subscriptions. Pay only for what you use.">
        <title inertia>{{ config('app.name', 'Prompt Edit') }}</title>
        <link rel="icon" href="/favicon.ico" sizes="any">
        @vite(['resources/css/app.css', 'resources/js/app.ts'])
        @inertiaHead
    </head>
    <body class="h-full antialiased">
        @inertia
    </body>
</html>
