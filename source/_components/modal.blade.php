<div 
x-data="{
    open: false
}"

x-init="$watch('open', value => {
    const body = document.body;

    if(!open) {
       body.classList.remove('h-screen');
       return body.classList.remove('overflow-hidden');
    } else {
        body.classList.add('h-screen');
        return body.classList.add('overflow-hidden');
    }
});"

>

    <div x-show.transition="open" class="fixed z-20 top-0 left-0 w-screen h-screen bg-gray-500 bg-opacity-25 flex items-center justify-center" role="dialog" aria-modal="true">

        <div @mousedown.away="open = false" @keydown.window.escape="open = false" class="w-full max-w-screen-sm bg-white rounded shadow-xl flex flex-col absolute divide-y divide-gray-200">

            <div class="px-5 py-4 flex items-center justify-between">
                <h2 class="text-xl leading-tight text-gray-700">
                    Are you sure?
                </h2>


                <button class="text-gray-400 hover:text-gray-600" @click="open = false">
                        <svg class="w-4 fill-current transition duration-150" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.001 512.001"><path d="M284.286 256.002L506.143 34.144c7.811-7.811 7.811-20.475 0-28.285-7.811-7.81-20.475-7.811-28.285 0L256 227.717 34.143 5.859c-7.811-7.811-20.475-7.811-28.285 0-7.81 7.811-7.811 20.475 0 28.285l221.857 221.857L5.858 477.859c-7.811 7.811-7.811 20.475 0 28.285a19.938 19.938 0 0014.143 5.857 19.94 19.94 0 0014.143-5.857L256 284.287l221.857 221.857c3.905 3.905 9.024 5.857 14.143 5.857s10.237-1.952 14.143-5.857c7.811-7.811 7.811-20.475 0-28.285L284.286 256.002z"/></svg>
                </button>
            </div>

            <div class="p-5">
                <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde at omnis voluptas quo eum aspernatur nesciunt accusamus voluptates aliquid animi architecto quasi illo similique, nobis corporis excepturi? Maiores, iusto eveniet.</p>
            </div>

            <div class="flex items-center justify-end px-5 py-4 space-x-2">
                <button @click="open = false" class="rounded px-5 py-2 rounded-sm border border-gray-300 text-gray-600 font-semibold transition duration-150 hover:border-gray-400 hover:text-gray-900 focus:outline-none focus:shadow-outline">Cancel</button>

                <button class="rounded px-5 py-2 rounded-sm bg-indigo-600 text-white font-semibold transition duration-150 hover:bg-indigo-500 focus:outline-none focus:shadow-outline">Action</button>
            </div>

        </div>


    </div>


    <button @click="open = true" class="rounded px-5 py-2 rounded-sm bg-indigo-600 text-white font-semibold transition duration-150 hover:bg-indigo-500 focus:outline-none focus:shadow-outline">Open Modal</button>

</div>