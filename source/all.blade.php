@extends('_layouts.master')

@section('body')

    <div class="max-w-2xl my-12">
        @include('_partials/search-bar')
    </div>
    

    <main class="max-w-4xl mt-10 space-y-10 sm:space-y-20">

        @include('_container/shell', ['name' => 'Avatar with Dropdown Menu', 'link' => 'https://github.com/danieljpalmer/alpine-tail/blob/master/source/_components/avatar-dropdown-menu.blade.php', 'component' => 'avatar-dropdown-menu' ])

        @include('_container/shell', ['name' => 'Countdown Clock', 'link' => 'https://github.com/danieljpalmer/alpine-tail/blob/master/source/_components/countdown-clock.blade.php', 'component' => 'countdown-clock'])

        @include('_container/shell', ['name' => 'Modal', 'link' => 'https://github.com/danieljpalmer/alpine-tail/blob/master/source/_components/modal.blade.php', 'component' => 'modal'])


        @include('_container/shell', ['name' => 'Filepond', 'link' => 'https://github.com/danieljpalmer/alpine-tail/blob/master/source/_components/file-pond.blade.php', 'component' => 'file-pond'])


        @include('_container/shell', ['name' => 'Muuri Draggable Grid', 'link' => 'https://github.com/danieljpalmer/alpine-tail/blob/master/source/_components/muuri-grid.blade.php', 'component' => 'muuri-grid'])

        @include('_container/shell', ['name' => 'Progress Bar', 'link' => 'https://github.com/danieljpalmer/alpine-tail/blob/master/source/_components/progress-bar.blade.php', 'component' => 'progress-bar'])

        @include('_container/shell', ['name' => 'Slider Gallery', 'link' => 'https://github.com/danieljpalmer/alpine-tail/blob/master/source/_components/slider.blade.php', 'component' => 'slider'])

        @include('_container/shell', ['name' => 'Popover', 'link' => 'https://github.com/danieljpalmer/alpine-tail/blob/master/source/_components/popover.blade.php', 'component' => 'popover'])

        @include('_container/shell', ['name' => 'Star Rating', 'link' => 'https://github.com/danieljpalmer/alpine-tail/blob/master/source/_components/star-rating.blade.php', 'component' => 'star-rating'])

    </main>

@endsection
