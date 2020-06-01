<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="referrer" content="always">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Work+Sans:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body>
        <div
        
        x-data="{
            searchTerm: ''
        }"

        @keydown.window.cmd="$refs.search-bar.focus();"

        class="max-w-screen-lg p-5 sm:p-10 md:p-20">
            @yield('body')
        </div>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </body>
</html>
