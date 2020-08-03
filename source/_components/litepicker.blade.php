{{-- See docs for Litepicker: https://github.com/wakirin/Litepicker --}}

{{-- Note CDN imports in the master layout head and end of body. --}}

<div
    x-data
    x-init="
        new Litepicker({
            element: $refs.input,
            singleMode: true,
            format: 'DD/MM/YYYY',
            onSelect: function(date){
                console.log(date)
            },
            minDate: new Date(Date.now() + 1*24*60*60*1000)
        });
    "
    class="flex rounded max-w-sm"
>
    <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 text-gray-500 sm:text-sm">
        <svg class="h-5 w-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M6 2C5.44772 2 5 2.44772 5 3V4H4C2.89543 4 2 4.89543 2 6V16C2 17.1046 2.89543 18 4 18H16C17.1046 18 18 17.1046 18 16V6C18 4.89543 17.1046 4 16 4H15V3C15 2.44772 14.5523 2 14 2C13.4477 2 13 2.44772 13 3V4H7V3C7 2.44772 6.55228 2 6 2ZM6 7C5.44772 7 5 7.44772 5 8C5 8.55228 5.44772 9 6 9H14C14.5523 9 15 8.55228 15 8C15 7.44772 14.5523 7 14 7H6Z"/>
        </svg>
    </span>

    <input
        value="22/12/2020"
        x-ref="input"
        name="date"
        class="rounded-r border border-gray-300 px-3 py-2 text-gray-700 w-full focus:outline-none focus:shadow-outline"
    />
</div>
