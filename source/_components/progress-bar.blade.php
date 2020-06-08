<div

x-data="{
    value: 10,
    total: 60
}"

class="w-full"
role="progressbar" :aria-valuenow="value" aria-valuemin="0" :aria-valuemax="total"
>

    <!-- Progress bar -->
    <div class="flex flex-col items-end">
        <span class="text-xs text-gray-600 mb-1" x-text="`${Math.round(value/total * 100)}% complete`"></span>
        <span class="p-3 w-full rounded-md bg-gray-200 overflow-hidden relative flex items-center">
            <span class="absolute h-full w-full bg-teal-500 left-0 transition-all duration-300" :style="`width: ${ value/total * 100 }%`"></span>
        </span>
    </div>
    

    <!-- Controllers -->

    <div class="flex items-center justify-end space-x-2 text-teal-500 mt-2">
        <button  @click="value > 0 ? value = +value - 10 : null" aria-label="Previous Image" class="p-1 focus:outline-none focus:shadow-outline rounded" :class="{ 'text-gray-400' : value === 0 }">

                <svg class="w-4 fill-current transform rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 492.004 492.004"><path d="M382.678 226.804L163.73 7.86C158.666 2.792 151.906 0 144.698 0s-13.968 2.792-19.032 7.86l-16.124 16.12c-10.492 10.504-10.492 27.576 0 38.064L293.398 245.9l-184.06 184.06c-5.064 5.068-7.86 11.824-7.86 19.028 0 7.212 2.796 13.968 7.86 19.04l16.124 16.116c5.068 5.068 11.824 7.86 19.032 7.86s13.968-2.792 19.032-7.86L382.678 265c5.076-5.084 7.864-11.872 7.848-19.088.016-7.244-2.772-14.028-7.848-19.108z"/></svg>

        </button>

        <button @click="value < total ? value = +value + 10 : null" aria-label="Next Image" class="p-1 focus:outline-none focus:shadow-outline rounded" :class="{ 'text-gray-400' : value >= total }">

            <svg class="w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 492.004 492.004"><path d="M382.678 226.804L163.73 7.86C158.666 2.792 151.906 0 144.698 0s-13.968 2.792-19.032 7.86l-16.124 16.12c-10.492 10.504-10.492 27.576 0 38.064L293.398 245.9l-184.06 184.06c-5.064 5.068-7.86 11.824-7.86 19.028 0 7.212 2.796 13.968 7.86 19.04l16.124 16.116c5.068 5.068 11.824 7.86 19.032 7.86s13.968-2.792 19.032-7.86L382.678 265c5.076-5.084 7.864-11.872 7.848-19.088.016-7.244-2.772-14.028-7.848-19.108z"/></svg>

        </button>
    </div>

</div>