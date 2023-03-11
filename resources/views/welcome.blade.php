<x-guest-layout>
    <section class="">
        <div class="relative overflow-hidden bg-cover bg-no-repeat bg-center">
            <div class="bg-gradient-to-b from-[#6DCFF6]/75 to-transparent" style="height: 100vh; width: 100vw; ">

            </div>

            <div class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed container mx-auto"
                x-data="visibility" x-ref="element" @scroll.window="checkVisibility()" x-init="$nextTick(() => isTextVisible = true)">
                <div class="flex h-full items-center justify-evenly p  cursor-default gap-12  mx-auto ">
                    <div class="relative text-center text-white" x-show="isTextVisible"
                        x-transition:enter="transition ease-out duration-700 delay-500"
                        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                        <div class="font-extrabold text-5xl mb-8 text-left">
                            Visualize. Execute. Reality.
                        </div>
                        <div
                            class="font-semibold text-4xl sm:text-base md:text-2xl lg:text-3xl text-left mb-4 text-black/25">
                            “Visualize the success of your event,<br> from the setup to the execution,<br> and watch it
                            become a reality.”
                        </div>
                        <div class="flex w-full h-full items-left justify-left gap-8">

                            <form class=" ">
                                <label for="default-search"
                                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
                                <div class="relative">
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                    </div>
                                    <input type="search" id="default-search"
                                        class="block p-4 w-full px-80  pl-10  text-sm text-gray-900 bg-gray-50 rounded-full border    "
                                        placeholder="What kind of talent or service can we help you find?"
                                        required="">
                                    <button type="submit"
                                        class="text-white bg-[#6DCFF6] hover:bg-[#6DCFF6]/75 absolute right-2.5 bottom-2.5   font-medium rounded-full text-sm px-8 py-2 ">Search</button>

                                </div>
                            </form>

                        </div>
                    </div>
                    <div class=" text-center md:flex md:items-center md:text-left" x-show="isTextVisible"
                        x-transition:enter="transition ease-out duration-700 delay-500"
                        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">

                        <div id="carouselSlide" class="relative" data-te-carousel-init data-te-carousel-slide>
                            <div
                                class="relative max-w-lg overflow-hidden after:clear-both after:block after:content-['']">
                                <div class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                                    data-te-carousel-item data-te-carousel-active>
                                    <img class="md:block hidden object-cover "
                                        src="https://images.unsplash.com/photo-1528696892704-5e1122852276?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" />
                                    <div
                                        class="absolute bottom-0 left-0 right-0 px-4 py-2 bg-[#F69679] opacity-70 md:block hidden ">
                                        <h3 class="text-xl text-white font-bold">
                                            test</h3>
                                        <div class="">
                                            <ul class="flex justify-left mb-0">
                                                <li>
                                                    @for ($j = 0; $j < 5; $j++)
                                                        <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="star" class="w-4 text-yellow-300" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                            <path fill="currentColor"
                                                                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                            </path>
                                                        </svg>
                                                </li>
                                                @endfor
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="relative max-w-lg float-left -mr-[100%] hidden transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                                    data-te-carousel-item>
                                    <img class="md:block hidden object-cover "
                                        src="https://images.unsplash.com/photo-1471899236350-e3016bf1e69e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80" />
                                    <div
                                        class="absolute bottom-0 left-0 right-0 px-4 py-2 bg-[#F69679] opacity-70 md:block hidden ">
                                        <h3 class="text-xl text-white font-bold">
                                            test</h3>
                                        <p class="mt-2 text-sm text-gray-300">test</p>
                                    </div>
                                </div>
                                <div class="relative max-w-lg float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                                    data-te-carousel-item>
                                    <img class="md:block hidden object-cover "
                                        src="https://images.unsplash.com/photo-1496660818001-d4f9b64f68f2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1504&q=80" />
                                    <div
                                        class="absolute bottom-0 left-0 right-0 px-4 py-2 bg-[#F69679] opacity-70 md:block hidden ">
                                        <h3 class="text-xl text-white font-bold">
                                            test</h3>
                                        <p class="mt-2 text-sm text-gray-300">test</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="">
        <div class="border border-transparent bg-[#6DCFF6]/25">
            <div class="  grid grid-cols-4 container mx-auto  gap-4  p-8  ">
                <div>Trusted By:</div>
                <div>test</div>
                <div>test</div>
                <div>test</div>
            </div>
        </div>
    </section> --}}

    <section class="container mx-auto">


    </section>


    <section>
        <div class="container mx-auto text-black/50 text-5xl mb-4 p-8">
            Categories
        </div>
        <div class=" p-8 flex flex-wrap items-center justify-center  " x-data="sample()">
            <div class=" flex overflow-hidden">
                <template x-for="(chunk, index) in chunks" :key="index">
                    <template x-for="item in chunk">
                        <div class=" max-w-xs " x-show="currentChunk == index"
                            x-transition:enter="transition ease-in-out duration-300 transform"
                            x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                            x-transition:leave="transition ease-in-out duration-300 transform"
                            x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full">
                            <div
                                class="group relative cursor-pointer  pt-10 px-10  items-center justify-center overflow-hidden  ">

                                <a href="/categories" class="href">
                                    <img class="relative rounded-lg  transition-all  hover:delay-75 hover:opacity-75"
                                        src="https://images.unsplash.com/photo-1502635385003-ee1e6a1a742d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                                        alt="">
                                    <div
                                        class="absolute inset-0 flex translate-y-6 flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0 ">
                                        <p
                                            class="mb-3 text-lg italic text-black  duration-300 opacity-0 transition-opacity group-hover:opacity-100">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolore
                                            adipisci
                                            placeat.</p>

                                    </div>
                                </a>
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
    <section class="p-8 ">

        <div class="grid lg:grid-cols-2 gap-4 mx-auto lg:max-w-7xl">
            <div x-data="visibility" class="p-4 md:p-8 bg-[#6DCFF6]/25 flex items-center" x-ref="element"
                @scroll.window="checkVisibility()">
                <div x-show="isTextVisible" class=""
                    x-transition:enter="transition ease-out delay-300 duration-300"
                    x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                    <h1 class="font-bold text-3xl md:text-4xl text-left">Unique</h1>
                    <h2 class="text-left text-base md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.
                        Facilis dolore adipisci placeat.</h2>
                </div>
            </div>


            <div class="flex items-center overflow-hidden cursor-pointer ">
                <img class="w-full md:h-full object-cover  transition duration-300 ease-in-out hover:scale-110 hover:rotate-3 "
                    src="https://images.unsplash.com/photo-1510924199351-4e9d94df18a6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1474&q=80"
                    alt="">
            </div>

            <div class="flex items-center overflow-hidden cursor-pointer ">
                <img class="w-full md:h-full object-cover transition duration-300 ease-in-out hover:scale-110 hover:rotate-3 "
                    src="https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80"
                    alt="">
            </div>

            <div class="p-4 md:p-8 bg-[#F69679]/25 flex items-center" x-data="visibility" x-ref="element"
                @scroll.window="checkVisibility()">

                <div x-show="isTextVisible" class=""
                    x-transition:enter="transition delay-300 ease-out duration-300 "
                    x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                    <h1 class="font-bold text-3xl md:text-4xl text-left">All in One</h1>
                    <h2 class="text-left text-base md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.
                        Facilis dolore adipisci placeat.</h2>
                </div>

            </div>

            <div class="p-4 md:p-8 bg-[#6DCFF6]/25 flex items-center" x-data="visibility" x-ref="element"
                @scroll.window="checkVisibility()">

                <div x-show="isTextVisible" class=""
                    x-transition:enter="transition delay-300 ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                    <h1 class="font-bold text-3xl md:text-4xl text-left">Reliable</h1>
                    <h2 class="text-left text-base md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.
                        Facilis dolore adipisci placeat.</h2>
                </div>

            </div>

            <div class=" flex items-center overflow-hidden cursor-pointer">
                <img class="w-full md:h-full object-cover transition duration-300 ease-in-out hover:scale-110 hover:rotate-3 "
                    src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                    alt="">
            </div>
        </div>
    </section>

    <section class=" bg-[#6DCFF6]/25">
        <div class="border">
            <div class="columns-2  md:columns-3 lg:columns-4 container mx-auto pt-8 mb-4">
                @for ($i = 0; $i < 4; $i++)
                    <div class="relative group transition-transform  ">
                        <div
                            class="absolute inset-0 rounded-3xl  bg-gradient-to-b  to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                        </div>
                        <a href="/category" class="">
                            <img class="mb-4 rounded-3xl"
                                src="https://images.pexels.com/photos/5690183/pexels-photo-5690183.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1600">
                            <div
                                class="absolute inset-0 flex translate-y-6 flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0 ">
                                <p
                                    class="mb-3 text-lg italic text-white font-bold duration-300 opacity-0 transition-opacity group-hover:opacity-100 ">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolore adipisci
                                    placeat.</p>
                                <div
                                    class="border border-transparent rounded hover:bg-[#F69679]  p-2 mb-3 text-base  text-white duration-300 opacity-0 transition-opacity group-hover:opacity-100">
                                    See More</div>
                            </div>
                        </a>

                    </div>

                    <div class="relative group">
                        <div
                            class="absolute inset-0 rounded-3xl bg-gradient-to-b  to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                        </div>
                        <a href="" class="">
                            <img class="mb-4 rounded-3xl hover:brightness-75 hover:contrast-50"
                                src="https://images.pexels.com/photos/587741/pexels-photo-587741.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1260&amp;h=750&amp;dpr=1">
                            <div
                                class="absolute inset-0 rounded-3xl flex translate-y-6 flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0 ">
                                <p
                                    class="mb-3 text-lg italic text-white font-bold  duration-300 opacity-0 transition-opacity group-hover:opacity-100">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolore adipisci
                                    placeat.</p>
                                <div
                                    class="border border-transparent rounded hover:bg-[#F69679]  p-2 mb-3 text-base  text-white duration-300 opacity-0 transition-opacity group-hover:opacity-100">
                                    See More</div>
                            </div>
                        </a>
                    </div>
                @endfor

            </div>
            <div class="container mx-auto flex justify-center p-8">
                <a href="/featured"
                    class="border rounded   hover:bg-[#F69679]/75 p-2  text-base text-center text-[#F69679]/75 hover:text-white cursor-pointer">
                    Show More
                </a>
            </div>

    </section>
    <section class="container mx-auto">
        <div class=" text-black/50 text-5xl  p-8">
            Top Supplier
        </div>

        <div class="  p-8 grid md:grid-cols-3 lg:grid-cols-4 sm:grid-cols-2 gap-4  ">
            @for ($i = 0; $i < 4; $i++)
                <a href="/profile" class="href">
                    <div
                        class="border rounded-b-lg drop-shadow-2xl bg-white/50 flex flex-col scale-75 hover:scale-100 ease-in-out duration-300  ">
                        <img class=" h-96  object-cover rounded-tl-md rounded-tr-md"
                            src="https://images.unsplash.com/photo-1627564174704-4c3765ef733a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                            alt="">
                        <div class="p-4">
                            <div class="font-bold text-base">Angel</div>
                            <div class="">
                                <ul class="flex justify-left mb-0">
                                    <li>
                                        @for ($j = 0; $j < 5; $j++)
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                data-icon="star" class="w-4 text-yellow-300" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                    </li>
            @endfor
            </ul>
        </div>
        </div>
        </div>
        </a>
        @endfor
        </div>

    </section>

    <section class="container mx-auto">
        <div class=" text-black/50 text-5xl  p-8">
            OwlEvent Guides
        </div>
        <div class="  p-8 grid md:grid-cols-2 lg:grid-cols-3 sm:grid-cols-1 gap-4  ">
            @for ($i = 0; $i < 5; $i++)
                <a href="/guides" class="href">
                    <div
                        class="border rounded-b-lg drop-shadow-2xl bg-white/50 flex flex-col scale-75 hover:scale-100 ease-in-out duration-300  ">
                        <img class=" w-full  object-cover rounded-tl-md rounded-tr-md"
                            src="https://plus.unsplash.com/premium_photo-1661698951100-064e4ae229fd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80"
                            alt="">
                        <div class="p-4">
                            <div class="font-bold text-2xl text-bold">Start your event by finding ..............
                            </div>

                        </div>
                    </div>
                </a>
            @endfor
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
                        <a href="{{ route('login') }}"
                            class="text-base font-medium leading-4 text-white bg-[#6DCFF6;] hover:bg-[#ABE7FF;] sm:w-auto w-full rounded p-4 ">Get
                            Started</a>
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
    document.addEventListener('alpine:init', () => {
        Alpine.data('visibility', (visible = false) => ({
            isTextVisible: visible,
            checkVisibility() {
                if (this.isTextVisible) return
                const element = this.$refs.element
                const rect = element.getBoundingClientRect();
                const windowHeight = window.innerHeight || document.documentElement.clientHeight;
                const windowWidth = window.innerWidth || document.documentElement.clientWidth;
                const visible =
                    rect.top <= windowHeight &&
                    rect.top + rect.height >= 0 &&
                    rect.left <= windowWidth &&
                    rect.left + rect.width >= 0;
                this.isTextVisible = visible;
            }
        }))
    })
</script>
