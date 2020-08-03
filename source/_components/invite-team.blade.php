<div

x-data="{
    emails: [ '' ],
    addEmail: function () {
        this.emails.push('')
        this.$nextTick(() => {
            this.$refs[`email-${this.emails.length - 1}`].focus();
        });
    },

    removeEmail: function (index) {
        this.emails.splice(index, 1);
    },

    get filteredEmails () {
        return this.emails.filter(email => email.length);
    }
}"

class="max-w-sm space-y-4 flex flex-col"

>

    <template x-for="(email, index) in emails">
        <div class="flex items-center space-x-2">
            <input 
                type="email" 
                :key="index" 
                x-model="emails[index]"
                class="rounded border border-gray-300 px-3 py-2 text-gray-700 w-full focus:outline-none focus:shadow-outline"
                placeholder="Enter their email here..."
                @keydown.enter="addEmail"
                :x-ref="`email-${index}`"
            >

            <button @click="removeEmail(index)" class="rounded-full p-1 text-gray-500 hover:text-gray-700 duration transition-150 focus:outline-none focus:shadow-outline">
                <svg class="w-5" fill="currentColor" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><path d="M88.602 50c0-21.301-17.301-38.602-38.602-38.602S11.398 28.699 11.398 50 28.699 88.602 50 88.602 88.602 71.301 88.602 50zM41.2 64.801c-.8.8-1.898 1.2-3 1.2s-2.2-.4-3-1.2c-1.7-1.7-1.7-4.3 0-6l8.8-8.8-8.8-8.802c-1.7-1.699-1.7-4.3 0-6s4.3-1.699 6 0L50 44l8.802-8.8c1.699-1.7 4.3-1.7 6 0s1.699 4.3 0 6L56 50l8.8 8.801c1.7 1.7 1.7 4.3 0 6-.8.8-1.898 1.2-3 1.2-1.101 0-2.199-.4-3-1.2l-8.8-8.8z"/></svg>
            </button>
        </div>
    </template>

    <button @click="addEmail" class="self-end text-primary hover:underline focus:outline-none focus:shadow-outline rounded animate-pulse">
        + Add new invite
    </button>

    {{-- For demonstration purposes: --}}

    <div class="text-sm p-4 rounded bg-gray-200 text-gray-500 font-mono">
            <p>// Emails to send to your backend...</p>
            <p class="mt-1">[ <span x-text="filteredEmails"></span> ]</p>
    </div>

</div>