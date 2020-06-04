<div x-data="
{
    open: false
}
"

class="relative">

    <button @click="open = true" class="w-12 h-12 rounded-full flex items-center justify-center overflow-hidden relative cursor-pointer hover:shadow-md focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
        <img src="https://randomuser.me/api/portraits/women/42.jpg" class="absolute" alt="Your Profile Image">
    </button>

    <div x-show.transition="open" @click.away="open = false" class="absolute mt-2 bg-white shadow-lg rounded-sm overflow-hidden">
        <nav>
            <ul class="text-sm text-gray-600 py-2">
                <li class="flex">
                    <a class="w-full px-6 py-2 transition duration-150 hover:text-indigo-600 hover:underline hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-indigo-600 focus:underline" href="" target="_blank" title="Link 1">Link 1</a>
                </li>
                <li class="flex">
                    <a class="w-full px-6 py-2 transition duration-150 hover:text-indigo-600 hover:underline hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-indigo-600 focus:underline" href="" target="_blank" title="Link 2">Link 2</a>
                </li>
                <li class="flex">
                    <a class="w-full px-6 py-2 transition duration-150 hover:text-indigo-600 hover:underline hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-indigo-600 focus:underline" href="" target="_blank" title="Link 3">Link 3</a>
                </li>
                <li class="flex">
                    <a class="w-full px-6 py-2 transition duration-150 hover:text-indigo-600 hover:underline hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-indigo-600 focus:underline" href="" target="_blank" title="Link 4">Link 4</a>
                </li>
            </ul>
        </nav>
    </div>

</div>