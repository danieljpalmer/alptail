@extends('_layouts.master')

@section('body')

    

    <main class="max-w-4xl mt-10 space-y-10 md:space-y-16 text-lg sm:text-xl">

        <div class="flex flex-col items-start">
            <p class="font-semibold">Want to have a big ol' browse?</p>

            <a href="/all" title="All Alptail Components" class="mt-4 font-semibold text-primary hover:underline focus:shadow-outline focus:outline-none flex items-center rounded-sm">View all Alptail Components

                <svg class="w-4 ml-2 text-primary" fill="currentColor" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><path d="M95.398 45L66.101 15.699c-2.7-2.7-7.2-2.7-9.898 0s-2.7 7.2 0 9.898L73.5 43h-64c-3.899 0-7 3.102-7 7s3.101 7 7 7h64L56.199 74.3c-2.7 2.7-2.7 7.2 0 9.899 1.398 1.398 3.199 2.101 5 2.101s3.601-.699 5-2.101l29.199-29.2c1.3-1.3 2.101-3.1 2.101-5s-.699-3.698-2.101-5z"/></svg>
            </a>
        </div>

        <div>
            <p class="mb-8 font-semibold">Otherwise, here's a list of the components:</p>

            <p class="font-semibold text-base text-gray-700 italic">Pure Alpine & Tailwind, baby:</p>
            <ul class="sm:pl-6 sm:border-l sm:border-gray-200 mt-4 mb-10 flex flex-col space-y-4 items-start text-base text-gray-600 transition duration-150">

                <li>
                    <a href="/all?open=avatar%20with%20dropdown" class="hover:text-primary hover:underline">Avatar with Dropdown Menu</a>
                </li>

                <li>
                    <a href="/all?open=countdown%20clock" class="hover:text-primary hover:underline">Countdown Clock</a>
                </li>

                <li>
                    <a href="/all?open=modal" class="hover:text-primary hover:underline">Modal</a>
                </li>

                <li>
                    <a href="/all?open=popover" class="hover:text-primary hover:underline">Popover</a>
                </li>

                <li>
                    <a href="/all?open=progress%20bar" class="hover:text-primary hover:underline">Progress Bar</a>
                </li>

                <li>
                    <a href="/all?open=slider" class="hover:text-primary hover:underline">Image Slider</a>
                </li>

                <li>
                    <a href="/all?open=star%20rating" class="hover:text-primary hover:underline">Star Rating</a>
                </li>

                <li>
                    <a href="/all?open=invite%20team" class="hover:text-primary hover:underline">Invite Team</a>
                </li>

            </ul>

            <p class="font-semibold text-base text-gray-700 italic">Supercharging with other libraries:</p>

            <ul class="sm:pl-6 sm:border-l sm:border-gray-200 mt-4 flex flex-col space-y-4 items-start text-base text-gray-600 transition duration-150">

                <li>
                    <a href="/all?open=filepond" class="hover:text-primary hover:underline">Filepond (drag & drop file input)</a>
                </li>

                <li>
                    <a href="/all?open=muuri%20draggable%20grid" class="hover:text-primary hover:underline">Muuri Masonary Grid (draggable)</a>
                </li>

                <li>
                    <a href="/all?open=tagify%20tag" class="hover:text-primary hover:underline">Tagify tag input</a>
                </li>

                <li>
                    <a href="/all?open=litepicker" class="hover:text-primary hover:underline">Litepicker calendar/date input</a>
                </li>

            </ul>

        </div>

    </main>

@endsection
