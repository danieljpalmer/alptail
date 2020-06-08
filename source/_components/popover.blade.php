<div
x-data="
    {
        open: false
    }
"
class="relative"
>

    <!-- Trigger element -->
    <button 
    @mouseover="open = true" @mouseleave="open = false"
    class="bg-gray-400 px-4 py-2 rounded hover:bg-gray-500 transition duration-150 shadow-md">
        Hover to reveal all
    </button>

    <!-- Popover -->
    <div 
    x-show.transition="open"
    id="popover"
    class="p-3 space-y-1 max-w-xl bg-white rounded shadow-2xl flex flex-col text-sm text-gray-600 mt-3 absolute z-20">
        <strong class="text-sm text-gray-800 font-semibold">What is this about?</strong>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa laborum incidunt debitis necessitatibus veritatis.</p>
    </div>
    
</div>

<!-- CSS for the arrow pseudoelement, not possible natively with Tailwind. Probably move this to your stylesheets. If you can find a Tailwind solution, please let me know! -->
<style>

    #popover:before{
        content: "";
        position: absolute;
        bottom: 100%;
        left: 5%;
        margin-left: -10px;
        border-width: 7px;
        border-style: solid;
        border-color: transparent transparent lightgray transparent;
    }

</style>