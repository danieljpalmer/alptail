<!-- Inspired by the Javascript in this article: https://www.sitepoint.com/build-javascript-countdown-timer-no-dependencies/ -->

<p class="text-gray-600 mb-2 text-xs">Days left in this wretched year...</p>

<div

x-data="
{
    clock: {
        days: '00',
        hours: '00',
        minutes: '00',
        seconds: '00',
        remaining: 1000
    },
    deadline: '1 January 2021',
    calculateTimeLeft: function () {
        const deadline = this.deadline;
        const remaining = Date.parse(deadline) - Date.parse(new Date());

        const seconds = Math.floor( (remaining/1000) % 60 );
        const minutes = Math.floor( (remaining/1000/60) % 60 );
        const hours = Math.floor( (remaining/(1000*60*60)) % 24 );
        const days = Math.floor( remaining/(1000*60*60*24) );

        return {
            days,
            hours,
            minutes,
            seconds,
            remaining
        };
    },
    startCountdown: function () {
        const countdownIntervalFunction = setInterval(() => {

            const timeLeft = this.calculateTimeLeft();
            this.clock = timeLeft;

            if (timeLeft.remaining <= 0) {
                clearInterval(countdownIntervalFunction);
            }

        }, 1000);
    }
}
"

x-init="startCountdown()"

class="flex items-center space-x-2 sm:space-x-4">

    <div class="flex flex-col items-center justify-between space-y-1">

        <span class="font-bold text-primary text-2xl sm:text-3xl md:text-4xl w-16 h-16 sm:w-24 sm:h-24 flex items-center justify-center border border-gray-200 rounded-sm" x-text="clock.days"></span>
        <span class="text-xs sm:text-sm text-gray-600">Days</span>

    </div>

    <div class="flex flex-col items-center justify-between space-y-1">

        <span class="font-bold text-primary text-2xl sm:text-3xl md:text-4xl w-16 h-16 sm:w-24 sm:h-24 flex items-center justify-center border border-gray-200 rounded-sm" x-text="clock.hours"></span>
        <span class="text-xs sm:text-sm text-gray-600">Hours</span>

    </div>

    <div class="flex flex-col items-center justify-between space-y-1">

        <span class="font-bold text-primary text-2xl sm:text-3xl md:text-4xl w-16 h-16 sm:w-24 sm:h-24 flex items-center justify-center border border-gray-200 rounded-sm" x-text="clock.minutes"></span>
        <span class="text-xs sm:text-sm text-gray-600">Minutes</span>

    </div>

    <div class="flex flex-col items-center justify-between space-y-1">

        <span class="font-bold text-primary text-2xl sm:text-3xl md:text-4xl w-16 h-16 sm:w-24 sm:h-24 flex items-center justify-center border border-gray-200 rounded-sm" x-text="clock.seconds"></span>
        <span class="text-xs sm:text-sm text-gray-600">Seconds</span>

    </div>


</div>