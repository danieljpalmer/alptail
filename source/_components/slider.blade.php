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
                    
                <figcaption x-text="image.caption" class="text-xs text-gray-600"></figcaption>
            </figure>
        </template>


        <div class="w-full flex items-center justify-end space-x-2 text-indigo-600 text-xs mt-4">
            <button aria-label="Previous Image" class="p-1 focus:outline-none focus:shadow-outline rounded" :class="{ 'text-gray-400' : selected === 0 }" @click="selected > 0 ? selected-- : null">

                <svg class="w-4 fill-current transform rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 492.004 492.004"><path d="M382.678 226.804L163.73 7.86C158.666 2.792 151.906 0 144.698 0s-13.968 2.792-19.032 7.86l-16.124 16.12c-10.492 10.504-10.492 27.576 0 38.064L293.398 245.9l-184.06 184.06c-5.064 5.068-7.86 11.824-7.86 19.028 0 7.212 2.796 13.968 7.86 19.04l16.124 16.116c5.068 5.068 11.824 7.86 19.032 7.86s13.968-2.792 19.032-7.86L382.678 265c5.076-5.084 7.864-11.872 7.848-19.088.016-7.244-2.772-14.028-7.848-19.108z"/></svg>

            </button>
            <button aria-label="Next Image" class="p-1 focus:outline-none focus:shadow-outline rounded" :class="{ 'text-gray-400' : selected === (images.length - 1) }" @click="selected < (images.length - 1) ? selected ++ : null">

                <svg class="w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 492.004 492.004"><path d="M382.678 226.804L163.73 7.86C158.666 2.792 151.906 0 144.698 0s-13.968 2.792-19.032 7.86l-16.124 16.12c-10.492 10.504-10.492 27.576 0 38.064L293.398 245.9l-184.06 184.06c-5.064 5.068-7.86 11.824-7.86 19.028 0 7.212 2.796 13.968 7.86 19.04l16.124 16.116c5.068 5.068 11.824 7.86 19.032 7.86s13.968-2.792 19.032-7.86L382.678 265c5.076-5.084 7.864-11.872 7.848-19.088.016-7.244-2.772-14.028-7.848-19.108z"/></svg>

            </button>
        </div>

</div>