<x-guest-layout>
    <section class="border">

        <ul class="flex flex-wrap items-center justify-center text-xs  ">

            <li class="mr-4">
                <button
                    class="hover:text-[#6DCFF6] inline-block p-4 border-b-2 border-transparent hover:border-gray-300">EVENT
                    COORDINATOR / PLANNER</button>
            </li>
            <li class="mr-2" role="presentation">
                <button
                    class="hover:text-[#6DCFF6] inline-block p-4 border-b-2 border-transparent hover:border-gray-300">EVENT
                    STYLISTS</button>
            </li>
            <li class="mr-2" role="presentation">
                <button
                    class="hover:text-[#6DCFF6] inline-block p-4 border-b-2 border-transparent hover:border-gray-300">CATERER</button>
            </li>
            <li role="presentation">
                <button
                    class="hover:text-[#6DCFF6] inline-block p-4 border-b-2 border-transparent hover:border-gray-300">HOTELS
                    / VENUES</button>
            </li>
            <li role="presentation">
                <button
                    class="hover:text-[#6DCFF6] inline-block p-4 border-b-2 border-transparent hover:border-gray-300">FASHION
                    DESIGNER</button>
            </li>
            <li role="presentation">
                <button
                    class="hover:text-[#6DCFF6] inline-block p-4 border-b-2 border-transparent hover:border-gray-300">HAIR
                    &amp; MAKE UP</button>
            </li>
            <li role="presentation">
                <button
                    class="hover:text-[#6DCFF6] inline-block p-4 border-b-2 border-transparent hover:border-gray-300">CAKES
                    AND SWEETS</button>
            </li>
            <li role="presentation">
                <button
                    class="hover:text-[#6DCFF6] inline-block p-4 border-b-2 border-transparent hover:border-gray-300">EMCEES
                    / HOSTS</button>
            </li>
            <li role="presentation">
                <button
                    class="hover:text-[#6DCFF6] inline-block p-4 border-b-2 border-transparent hover:border-gray-300">INVITATIONS
                    / SOUVENIRS</button>
            </li>
            <li role="presentation">
                <button
                    class="hover:text-[#6DCFF6] inline-block p-4 border-b-2 border-transparent hover:border-gray-300">ENTERTAINMENT</button>
            </li>
            <li role="presentation">
                <button
                    class="hover:text-[#6DCFF6] inline-block p-4 border-b-2 border-transparent hover:border-gray-300">OTHERS</button>
            </li>

        </ul>

    </section>



    <section class="p-8 px-24 py-24  mx-auto">
        <div class="grid grid-cols-4 gap-4">
            @for ($i = 0; $i < 20; $i++)
                <div class="shadow-2xl max-w-xs mx-auto relative mb-4 " x-data="showSlides()">
                    <div class=" flex overflow-hidden">
                        <template x-for="(chunk, index) in chunks" :key="index">
                            <template x-for="item in chunk">
                                <div class="w-full " x-show="currentChunk == index"
                                    x-transition:enter="transition ease-in-out duration-300 transform"
                                    x-transition:enter-start="transition-enter-start"
                                    x-transition:enter-end="translate-x-0"
                                    x-transition:leave="transition ease-in-out duration-300 transform"
                                    x-transition:leave-start="translate-x-0"
                                    x-transition:leave-end="transition-leave-end">
                                    <img :src="item.image" class="object-center  hover:text-[#6DCFF6] max-w-xs ">
                                </div>
                            </template>
                        </template>
                    </div>
                    <!-- buttons -->
                    <button @click="prev()"
                        class="absolute left-0 inset-y-0 flex items-center px-4 text-white hover:text-[#6DCFF6] cursor-pointer text-3xl font-extrabold   ">❮</button>
                    <button @click="next()"
                        class="absolute right-0 inset-y-0 flex items-center px-4 text-white hover:text-[#6DCFF6] cursor-pointer text-3xl font-extrabold ">❯</button>

                    <div class="">
                        <div class="flex flex-row p-4 gap-4 items-center">
                            <div class="">
                                <img class="relative z-auto top-0 h-8 w-8 rounded-full ring-2 ring-white object-cover"
                                    src="img/cj.jpg" alt="">
                            </div>
                            <div class="inset-x-0 bottom-0 text-left text-sm font-bold hover:underline cursor-pointer">
                                <a href="" class="href">ItsMeCJ</a>
                            </div>
                        </div>
                        <div class="indent-4 text-justify p-4 cursor-pointer hover:text-[#82CA9C] ">
                            <a href="" class="href">
                                <p class="truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis
                                    dolore
                                    adipisci placeat.</p>
                            </a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>





    </section>



    <section>

    </section>


</x-guest-layout>

<script>
    function showSlides() {
        return {
            arrayImages: [{
                    image: 'https://images.unsplash.com/photo-1504680177321-2e6a879aac86?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
                },
                {
                    image: 'https://images.unsplash.com/photo-1527529482837-4698179dc6ce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
                },
                {
                    image: 'https://images.unsplash.com/photo-1472653431158-6364773b2a56?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80',
                },
                {
                    image: 'https://images.unsplash.com/photo-1516997121675-4c2d1684aa3e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1472&q=80',
                },
                {
                    image: 'https://images.unsplash.com/photo-1507608869274-d3177c8bb4c7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
                },
            ],
            chunks: [],
            chunkSize: 1,
            currentChunk: 0,
            init() {
                for (let i = 0; i < this.arrayImages.length; i += this.chunkSize) {
                    this.chunks.push(this.arrayImages.slice(i, i + this.chunkSize));
                }
            },
            prev() {
                this.currentChunk--;
                if (this.currentChunk < 0)
                    this.currentChunk = this.chunks.length - 1;
            },
            next() {
                this.currentChunk++;
                if (this.currentChunk > this.chunks.length - 1)
                    this.currentChunk = 0;
            },
        };
    }
</script>
