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

        <!-- FilePond -->
        <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
        <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
        <link href="https://unpkg.com/filepond-plugin-file-poster/dist/filepond-plugin-file-poster.css" rel="stylesheet">

        <link rel="icon" 
            type="image/png" 
            href="/assets/images/favicon.png">

        <meta property="og:image" content="/assets/images/og-image.png">
        <meta property="twitter:card" content="summary_large_image">
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:type" content="website" />
        <meta property="og:title" content="{{ $page->title }}" />

    </head>
    <body>
        <div
        
        x-data="{
            searchTerm: ''
        }"

        class="max-w-screen-lg p-5 sm:p-10 md:p-20">

        <header class="flex flex-col space-y-4 max-w-2xl">
            @include('_partials/logo', [ 'classes' => 'w-12 text-secondary' ])

            <h1 class="text-4xl leading-tight">Alptail</h1>

            <p class="text-lg sm:text-xl">A collection of open-source UI components, using  <a href="http://tailwindcss.com/" title="Tailwind.css Home Page" target="_blank"  rel="noopener" class="font-semibold text-primary transition duration-150 hover:underline focus:underline">Tailwind.css</a> and <a href="https://github.com/alpinejs/alpine"  rel="noopener" title="Alpine.js Github" target="_blank" class="font-semibold text-primary transition duration-150 hover:underline focus:underline">Alpine.js</a>. Regularly updated and on a mission to make them as accessible as possible. Maintained by <a href="https://www.twitter.com/userlastname" title="Daniel Palmer's Twitter Profile" target="_blank"  rel="noopener" class="font-semibold text-primary transition duration-150 hover:underline focus:underline">Daniel Palmer</a>.</p>


        </header>

            @yield('body')

            @include('_partials/github-link')

        </div>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        <!-- Filepond -->
        <script src="https://unpkg.com/filepond-plugin-file-poster/dist/filepond-plugin-file-poster.js"></script>
        <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
        <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
        <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
        <script src="https://unpkg.com/filepond/dist/filepond.js"></script>

        <!-- Muuri -->
        <script src="https://cdn.jsdelivr.net/npm/muuri@0.9.0/dist/muuri.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/web-animations-js@2.3.2/web-animations.min.js"></script>
    </body>
</html>
