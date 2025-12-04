<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        <nav>
            <a href="{{route('counter_route')}}" wire:navigate>Counter</a>
            <a href="{{route('birds_route')}}" wire:navigate>Bird</a>
            <a href="{{route('lazy_route')}}" wire:navigate>Lazy</a>
            <a href="{{route('bookmark_route')}}" wire:navigate>Bookmarks</a>
        </nav>
        {{ $slot }}
    </body>
</html>

