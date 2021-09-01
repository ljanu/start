{{-- component welcom --}}
@props([
    'googleAnalytic',
    'title',
    'robots',
    'description',
    'canonical',
    'head',
    'googleTagManager',
    'nav',
    'content',
    'footer',
    'scripts'
])

        <!DOCTYPE html>
<html lang = "{{ str_replace('_', '-', app()->getLocale()) }}" >

<head >
    <meta charset = "UTF-8" />

    {{-- google analytic -------------------------------------------------------------------------}}
    {{$googleAnalytic ?? null}}

    <meta
            name = "viewport"
            content = "width=device-width, initial-scale=1.0" />
    <link
            href = "{{ asset('css/app.css') }}"
            rel = "stylesheet" >
    <script
            src = "{{ asset('js/app.js') }}"
            defer ></script >

    {{-- title -----------------------------------------------------------------------------------}}
    <title >{{$title}}</title >

    {{-- metatags --------------------------------------------------------------------------------}}
    <meta
            name = "robots"
            content = "{{$robots}}" >

    @isset($description)
        <meta
                name = "description"
                content = "{{$description}}" >
    @endisset
    <meta
            name = "author"
            content = "Libor Janů" >

    {{-- links -----------------------------------------------------------------------------------}}
    <link
            rel = "shortcut icon"
            href = "{{ asset('favicon.ico') }}" >
    <link
            href = "{{ asset('css/app.css') }}"
            rel = "stylesheet" >

    {{-- canonical -------------------------------------------------------------------------------}}
    @isset($canonical)
        <link
                rel = "canonical"
                href = "{{$canonical}}" >
    @endisset

    {{--to complete the head----------------------------------------------------------------------}}
    {{$head ?? null}}

</head >

<body
        x-data = "{ darkMode: localStorage.getItem('dark') === 'true'}"
        x-init = "$watch('darkMode', val => localStorage.setItem('dark', val))"
        x-bind:class = "{ 'dark': darkMode }"
>

{{-- google tagmaneger ---------------------------------------------------------------------------}}
{{$googleTagManager ?? null}}



{{-- main content --------------------------------------------------------------------------------}}
<div class = " bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100 min-h-screen " >

    {{-- togle dark mode -------------------------------------------------------------------------}}
    <x-start::start.layout.dark-mode/>

    {{-- slot navigation --}}
    {{$nav ?? null}}

    {{-- slot content --}}
    {{$content}}

    {{-- slot footer --}}
    {{$footer}}

    {{-- slot scripts --}}
    {{$scripts}}

    {{-- login --}}
    <x-start::start.layout.log-in-out/>


</div >

</body >
</html >