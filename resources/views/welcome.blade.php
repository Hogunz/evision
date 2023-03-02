<x-guest-layout>
    <section class="p-8 px-24 py-24">

        <div class="relative text-center">
            <div class="font-extrabold text-5xl mb-8">
                Visualize. Execute. Reality.
            </div>

            <div class="font-semibold text-2xl sm:text-base md:text-2xl lg:text-3xl text-center">“Visualize the success
                of
                your event,<br> from the setup to
                the execution, and watch it become a reality.”</div>
        </div>

    </section>
    <section class="">
        <div class="border border-transparent bg-[#6DCFF6]/25">
            <div class="  grid grid-cols-4 container mx-auto  gap-4  p-8  ">
                <div>Trusted By:</div>
                <div>test</div>
                <div>test</div>
                <div>test</div>
            </div>
        </div>
    </section>

    <section class="container mx-auto">

        <div
            class=" text-center text-8xl font-extrabold px-24 py-24 space-x-10  text-transparent  bg-clip-text bg-gradient-to-r from-[#6DCFF6] to-[#F69679]">
            CATEGORY</div>

    </section>


    <section>
        <div class=" p-8 flex flex-wrap items-center justify-center  " x-data="sample()">
            <div class=" flex overflow-hidden">
                <template x-for="(chunk, index) in chunks" :key="index">
                    <template x-for="item in chunk">
                        <div class=" max-w-xs " x-show="currentChunk == index"
                            x-transition:enter="transition ease-in-out duration-300 transform"
                            x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                            x-transition:leave="transition ease-in-out duration-300 transform"
                            x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full">
                            <div class="group relative cursor-pointer  pt-10 px-10  items-center justify-center ">


                                <img class="relative rounded-lg  transition-all  hover:delay-75 hover:opacity-75 "
                                    src="https://images.unsplash.com/photo-1502635385003-ee1e6a1a742d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                                    alt="">
                                <div
                                    class="absolute inset-0 flex translate-y-6 flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0 ">
                                    <p
                                        class="mb-3 text-lg italic text-black  duration-300 opacity-0 transition-opacity group-hover:opacity-100">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolore adipisci
                                        placeat.</p>

                                </div>
                                <div class="relative text-black/50 px-6 pb-6 mt-6 text-center">
                                    <div class="flex justify-center">
                                        <span class="block font-semibold text-xl  font-dmserif   text-black">Event
                                            Stylist</span>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </template>
                </template>
            </div>
            <button type="button" @click="prev()"
                class="absolute z-30 left-0 ml-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 cursor-pointer">

                <svg id="changeColor" fill="#6DCFF6" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="50" zoomAndPan="magnify"
                    viewBox="0 0 375 374.9999" height="50" preserveAspectRatio="xMidYMid meet" version="1.0">
                    <defs>
                        <path id="pathAttribute"
                            d="M 7.09375 7.09375 L 367.84375 7.09375 L 367.84375 367.84375 L 7.09375 367.84375 Z M 7.09375 7.09375 ">
                        </path>
                    </defs>
                    <g>
                        <path id="pathAttribute"
                            d="M 187.46875 7.09375 C 87.851562 7.09375 7.09375 87.851562 7.09375 187.46875 C 7.09375 287.085938 87.851562 367.84375 187.46875 367.84375 C 287.085938 367.84375 367.84375 287.085938 367.84375 187.46875 C 367.84375 87.851562 287.085938 7.09375 187.46875 7.09375 "
                            fill-opacity="1" fill-rule="nonzero"></path>
                    </g>
                    <g id="inner-icon" transform="translate(85, 75)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="199.8" height="199.8" fill="currentColor"
                            class="bi bi-chevron-left" viewBox="0 0 16 16" id="IconChangeColor">
                            <path fill-rule="evenodd"
                                d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"
                                id="mainIconPathAttribute" fill="#ffffff" stroke-width="1" stroke="#ffffff">
                            </path>
                        </svg>
                    </g>
                </svg>

            </button>
            <button type="button" @click="next()"
                class="absolute z-30 right-0 mr-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">
                <svg id="changeColor" fill="#6DCFF6" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="50" zoomAndPan="magnify"
                    viewBox="0 0 375 374.9999" height="50" preserveAspectRatio="xMidYMid meet" version="1.0">
                    <defs>
                        <path id="pathAttribute"
                            d="M 7.09375 7.09375 L 367.84375 7.09375 L 367.84375 367.84375 L 7.09375 367.84375 Z M 7.09375 7.09375 ">
                        </path>
                    </defs>
                    <g>
                        <path id="pathAttribute"
                            d="M 187.46875 7.09375 C 87.851562 7.09375 7.09375 87.851562 7.09375 187.46875 C 7.09375 287.085938 87.851562 367.84375 187.46875 367.84375 C 287.085938 367.84375 367.84375 287.085938 367.84375 187.46875 C 367.84375 87.851562 287.085938 7.09375 187.46875 7.09375 "
                            fill-opacity="1" fill-rule="nonzero"></path>
                    </g>
                    <g id="inner-icon" transform="translate(85, 75)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="199.8" height="199.8" fill="currentColor"
                            class="bi bi-chevron-right" viewBox="0 0 16 16" id="IconChangeColor"
                            transform="scale(-1, 1)">
                            <path fill-rule="evenodd"
                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"
                                id="mainIconPathAttribute" fill="#ffffff" stroke-width="1" stroke="#ffffff">
                            </path>

                        </svg>
                    </g>
                </svg>
            </button>
        </div>
    </section>
    <section class="p-8">

        <div class="grid lg:grid-cols-2 gap-4 mx-auto lg:max-w-7xl">
            <div x-data="{ isHovered: false, isTextVisible: false }" x-on:mouseover="isHovered = true; isTextVisible = true"
                class="p-4 md:p-8 bg-[#6DCFF6]/25 flex items-center">
                <div x-show="isTextVisible" class="" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                    <h1 class="font-bold text-3xl md:text-4xl text-left">Unique</h1>
                    <h2 class="text-left text-base md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Facilis dolore adipisci placeat.</h2>
                </div>
            </div>


            <div class="flex items-center">
                <img class="w-full md:h-full object-cover"
                    src="https://images.unsplash.com/photo-1510924199351-4e9d94df18a6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1474&q=80"
                    alt="">
            </div>

            <div class="flex items-center">
                <img class="w-full md:h-full object-cover"
                    src="https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80"
                    alt="">
            </div>

            <div class="p-4 md:p-8 bg-[#F69679]/25 flex items-center" x-data="{ isHovered: false, isTextVisible: false }"
                x-on:mouseover="isHovered = true; isTextVisible = true">

                <div x-show="isTextVisible" class="" x-transition:enter="transition ease-out duration-300 "
                    x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                    <h1 class="font-bold text-3xl md:text-4xl text-left">All in One</h1>
                    <h2 class="text-left text-base md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Facilis dolore adipisci placeat.</h2>
                </div>

            </div>

            <div class="p-4 md:p-8 bg-[#6DCFF6]/25 flex items-center" x-data="{ isHovered: false, isTextVisible: false }"
                x-on:mouseover="isHovered = true; isTextVisible = true">

                <div x-show="isTextVisible" class="" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                    <h1 class="font-bold text-3xl md:text-4xl text-left">Reliable</h1>
                    <h2 class="text-left text-base md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Facilis dolore adipisci placeat.</h2>
                </div>

            </div>

            <div class="flex items-center">
                <img class="w-full md:h-full object-cover"
                    src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                    alt="">
            </div>

        </div>
    </section>
    <section>



        <div class="2xl:mx-auto 2xl:container md:px-20 px-4 md:py-12 py-9">
            <div class="relative rounded-md bg-[#F69679]/25">

                <div
                    class="text-xl relative z-20 w-full h-full top-0 md:p-16 p-6 flex flex-col justify-between rounded-md ">
                    <div>
                        <h1 class="md:text-5xl text-3xl font-bold md:leading-10 leading-9 text-black sm:w-auto w-64">
                            Come and Join us!</h1>
                        <p class="text-lg leading-6 text-black/25 xl:w-5/12 lg:w-8/12 md:w-10/12  2xl:pr-12 mt-4">Lorem
                            ipsum dolor sit amet consectetur adipisicing elit.
                            Facilis dolore adipisci placeat.</p>
                    </div>
                    <div class="md:mt-12 mt-20">
                        <a href="/home"
                            class="text-base font-medium leading-4 text-white bg-[#6DCFF6;] hover:bg-[#ABE7FF;] sm:w-auto w-full rounded p-4 ">Read
                            More</a>
                    </div>
                </div>
            </div>
        </div>


    </section>
</x-guest-layout>

<script>
    function sample() {
        return {
            array: [...Array(11).keys()],
            chunks: [],
            chunkSize: 5,
            currentChunk: 0,
            init() {
                console.log(this.array.length)
                for (let i = 0; i < this.array.length; i += this.chunkSize) {
                    this.chunks.push(this.array.slice(i, i + this.chunkSize));
                }
            },
            prev() {
                this.currentChunk--
                if (this.currentChunk < 0)
                    this.currentChunk = this.chunks.length - 1
            },
            next() {
                this.currentChunk++
                if (this.currentChunk > this.chunks.length - 1)
                    this.currentChunk = 0;
            },
        };
    }
</script>
