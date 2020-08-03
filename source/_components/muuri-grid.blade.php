{{-- See docs for Muuri: https://github.com/haltu/muuri --}}

{{-- Note CDN imports in the master layout at end of body. --}}

<div
    class="w-full relative"

    x-data="{
        muuri: null,
        refreshGrid: function () {
            this.muuri.refreshItems().layout();
        }
    }"

    @load.window="refreshGrid"

    x-init="
            muuri = new Muuri(
            $refs['muuri-grid'],
                {
                    layout: {
                        fillGaps: false,
                    },
                    layoutDuration: 600,
                    dragEnabled: true,
                }
            );
    "
>
    
    <ul x-ref="muuri-grid" class="relative w-full -m-2">

            <li class="absolute cursor-pointer m-2 block">
                <div>
                    <img class="w-64" src="https://images.unsplash.com/photo-1574629810360-7efbbe195018?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Dummy Image">
                </div>
            </li>

            <li class="absolute cursor-pointer m-2 block">
                <div>
                    <img class="w-64" src="https://images.unsplash.com/photo-1579952363873-27f3bade9f55?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Dummy Image">
                </div>
            </li>

            <li class="absolute cursor-pointer m-2 block">
                <div>
                    <img class="w-64" src="https://images.unsplash.com/photo-1431324155629-1a6deb1dec8d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Dummy Image">
                </div>
            </li>

            <li class="absolute cursor-pointer m-2 block">
                <div>
                    <img class="w-64" src="https://images.unsplash.com/photo-1544698310-74ea9d1c8258?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Dummy Image">
                </div>
            </li>

            <li class="absolute cursor-pointer m-2 block">
                <div>
                    <img class="w-64" src="https://images.unsplash.com/photo-1522947961977-67fe74257c16?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Dummy Image">
                </div>
            </li>

            <li class="absolute cursor-pointer m-2 block">
                <div>
                    <img class="w-64" src="https://images.unsplash.com/photo-1550591901-c036ab7c45f8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Dummy Image">
                </div>
            </li>

            <li class="absolute cursor-pointer m-2 block">
                <div>
                    <img class="w-64" src="https://images.unsplash.com/photo-1544333323-ec9ed3218dd1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Dummy Image">
                </div>
            </li>

            <li class="absolute cursor-pointer m-2 block">
                <div>
                    <img class="w-64" src="https://images.unsplash.com/photo-1542683305-710078a12f73?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Dummy Image">
                </div>
            </li>

    </ul>

</div>
