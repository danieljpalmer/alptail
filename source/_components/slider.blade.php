<div

x-data="{
    selected: 0,
    images: [
        {
            src: 'https://images.unsplash.com/photo-1591478247781-5d55f8fbb5a6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80',
            alt: 'Image of Black Lives Matter protest in London',
            caption: 'Black Lives Matter - London June 2020'
        },
        {
            src: 'https://images.unsplash.com/photo-1590931511555-83151d16a146?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1525&q=80',
            alt: 'Image of Black Lives Matter protest in Charlotte',
            caption: 'George Floyd protests in Uptown Charlotte'
        },
        {
            src: 'https://images.unsplash.com/photo-1591030617255-43892ec644bc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1007&q=80',
            alt: 'A protester in Washington DC holds a sign featuring George Floyd.',
            caption: 'A protester in Washington DC holds a sign featuring George Floyd.'
        },
    ]
}"

class="max-w-screen-sm"
>

        <template x-for="(image, index) in images">
            <figure class="space-y-2" x-show="selected === index">
                <img 
                    :key="index"
                    class="h-64 w-full object-cover object-center" :src="image.src" :alt="image.alt">
                    
                <figcaption x-text="image.caption" class="text-xs text-gray-500"></figcaption>
            </figure>
        </template>


        <div class="w-full flex items-center justify-end space-x-4 text-indigo-600 text-xs mt-4">
            <button class="uppercase hover:underline focus:underline focus:outline-none" :class="{ 'text-gray-500' : selected === 0 }" @click="selected > 0 ? selected-- : null">Previous</button>
            <button class="uppercase hover:underline focus:underline focus:outline-none" :class="{ 'text-gray-500' : selected === (images.length - 1) }" @click="selected < (images.length - 1) ? selected ++ : null">Next</button>
        </div>

</div>