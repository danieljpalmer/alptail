@extends('_layouts.master')

@section('body')

    <header class="flex flex-col space-y-4 max-w-2xl">
        @include('_partials/logo', [ 'classes' => 'w-12 text-secondary' ])

        <h1 class="text-4xl leading-tight">Alpine Tail</h1>

        <p class="text-lg sm:text-xl">A collection of open-source components designed by <a href="https://www.twitter.com/userlastname" title="Daniel Palmer's Twitter Profile" target="_blank" class="font-semibold text-primary transition duration-150 hover:underline focus:underline">Daniel Palmer</a>, using  <a href="http://tailwindcss.com/" title="Tailwind.css Home Page" target="_blank" class="font-semibold text-primary transition duration-150 hover:underline focus:underline">Tailwind.css</a> and <a href="https://github.com/alpinejs/alpine" title="Alpine.js Github" target="_blank" class="font-semibold text-primary transition duration-150 hover:underline focus:underline">Alpine.js</a>.</p>

    </header>

    <main class="max-w-2xl mt-2">
        @include('_partials/search-bar')

    </main>
    
    

@endsection
