<div x-data="
    {
        rating: 0,
        hoverRating: 0,
        ratings: [ 1, 2, 3, 4, 5]
    }
" class="flex items-center space-x-1" 
  >
    
    <template x-for="star in ratings">
        <button 
        @click="rating = star"
        @mouseover="hoverRating = star"
        @mouseleave="hoverRating = rating"
        aria-hidden="true"
        class="rounded-sm focus:outline-none focus:shadow-outline p-1">
            <svg
                :class="{ 'text-gray-600' : hoverRating >= star, 'text-yellow-500' : rating >= star }" 
                class="w-8 text-gray-400 fill-current transition duration-150 cursor-pointer" viewBox="0 -10 511.991 511" xmlns="http://www.w3.org/2000/svg"><path d="M510.652 185.883a27.177 27.177 0 00-23.402-18.688l-147.797-13.418-58.41-136.75C276.73 6.98 266.918.497 255.996.497s-20.738 6.483-25.023 16.53l-58.41 136.75-147.82 13.418c-10.837 1-20.013 8.34-23.403 18.688a27.25 27.25 0 007.937 28.926L121 312.773 88.059 457.86c-2.41 10.668 1.73 21.7 10.582 28.098a27.087 27.087 0 0015.957 5.184 27.14 27.14 0 0013.953-3.86l127.445-76.203 127.422 76.203a27.197 27.197 0 0029.934-1.324c8.851-6.398 12.992-17.43 10.582-28.098l-32.942-145.086 111.723-97.964a27.246 27.246 0 007.937-28.926zM258.45 409.605"/></svg>
        </button>
       
    </template>

    <div class="hidden">
        <label for="rating">Your star rating</label>
        <input type="number" name="rating" x-model="rating">
    </div>

</div>