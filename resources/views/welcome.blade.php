<x-guest-layout>
    <section class="">
        <div class="relative overflow-hidden bg-cover bg-no-repeat bg-center">
            <div class="" style="height: 70vh; width: 100vw; ">

            </div>

            <div class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed container mx-auto"
                x-data="visibility" x-ref="element" @scroll.window="checkVisibility()" x-init="$nextTick(() => isTextVisible = true)">
                <div class="flex flex-col sm:flex-row justify-between h-full items-center cursor-default sm:mx-48 gap-6">
                    <div class="">
                        <!--Carousel-->
                        <div class="text-center md:flex md:items-center md:text-left" x-show="isTextVisible"
                            x-transition:enter="transition ease-out duration-700 delay-500"
                            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-90">
                            <div id="carouselSlide" class="relative" data-te-carousel-init data-te-carousel-slide>
                                <div
                                    class="relative overflow-hidden after:clear-both after:block after:content-[''] pt-36">
                                    <div class="relative  float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none "
                                        data-te-carousel-item data-te-carousel-active>
                                        <img class="md:block hidden object-cover "
                                            style="height:600px; width:500px; top:-59px; left:87px;"
                                            src="http://indigo.test/img/photographer.png" />

                                    </div>
                                    <div class="relative max-w-lg float-left -mr-[100%] hidden transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none "
                                        data-te-carousel-item>
                                        <img class="md:block hidden object-cover "
                                            style="height:600px; width:500px; top:-59px; left:87px;"
                                            src="http://indigo.test/img/photographer.png" />

                                    </div>
                                    <div class="relative max-w-lg float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none "
                                        data-te-carousel-item>
                                        <img class="md:block hidden object-cover "
                                            style="height:600px; width:500px; top:-59px; left:87px;"
                                            src="http://indigo.test/img/wedding.png" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Carousel-->
                    </div>
                    <div class="relative shrink-0 text-5xl  text-center text-white" x-show="isTextVisible"
                        x-transition:enter="transition ease-out duration-700 delay-500"
                        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                        <div class="font-extrabold sm:text-7xl mb-8  sm:text-left ">
                            <span class="text-[#6DCFF6]/75"> Whatever you’re <br>
                                planning,</span> <span class="text-black"> make it <br>
                                extraordinary</span>
                        </div>
                        <div
                            class="font-semibold text-base sm:text-base md:text-base lg:text-base text-left mb-4 text-black/25">
                            “Making every moment memorable - with our events!”
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="relative">
        <div class="absolute rounded-lg  inset-x-0 -top-14  max-w-7xl container mx-auto">
            <section class="container mx-auto rounded-2xl py-4 bg-[#6DCFF6] ">


                <div class="grid items-end gap-6 px-2.5 md:grid-cols-4">

                    <div class="relative z-0">
                        <select type="" id="default_standard"
                            class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none    focus:outline-none focus:ring-0 focus:border-gray-300  peer"
                            placeholder=" ">

                            <option class="text-black" value="">Type of Event</option>
                            <option class="text-black" value="">Wedding</option>
                            <option class="text-black" value="">Debut</option>
                            <option class="text-black" value="">Birthday</option>
                        </select>
                        <label for="default_standard"
                            class="absolute text-base text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Event</label>
                    </div>
                    <div class="relative z-0">

                        <input type="text" id="default_standard"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none    focus:outline-none focus:ring-0 focus:border-gray-300 peer"
                            placeholder=" " />
                        <label for="default_standard"
                            class="absolute text-base text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Location / Venues</label>
                    </div>
                    <div class="relative z-0">
                        <input type="date" id="default_standard"
                            class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none    focus:outline-none focus:ring-0 focus:border-gray-300 peer"
                            placeholder=" " />
                        <label for="default_standard"
                            class="absolute text-base text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Date</label>
                    </div>
                    <div class="relative z-0">
                        <button
                            class="border-transparent rounded-lg shadow-2xl text-white p-4 px-24 bg-[#82CA9C]/75 hover:bg-[#82CA9C]/50  ">
                            Search
                        </button>
                    </div>
                </div>
            </section>

        </div>

        <section class="bg-[#6DCFF6]/25">
            <div class="container mx-auto text-center text-black/50 text-7xl  mb-4 pt-36  ">
                Featured
            </div>
            <div class=" ">
                <div class="columns-3  md:columns-4 lg:columns-5 container mx-auto max-w-7xl pt-8 mb-4">
                    @for ($i = 0; $i < 5; $i++)
                        <div class="relative group transition-transform  ">
                            <div
                                class="absolute inset-0 rounded-3xl  bg-gradient-to-b  to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                            </div>
                            <a href="/itsMeCJ/I-will-create" class="">
                                <img class="mb-4 rounded-3xl aspect-square object-cover"
                                    src="https://source.unsplash.com/random/1">
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
                    @endfor

                </div>
                <div class="container mx-auto flex justify-center p-8">
                    <a href="/featured"
                        class="border rounded   hover:bg
        -[#F69679]/75 p-2  text-base text-center text-[#F69679]/75 hover:text-white hover:bg-[#F69679] transition duration-300 hover:ease-in-out cursor-pointer">
                        Show More
                    </a>
                </div>

        </section>


    </div>



    <section class="">
        <div class="container mx-auto text-center text-black/50 text-7xl  mb-4 pt-36  ">
            Category
        </div>
        <div class=" ">
            <div class="columns-3  md:columns-4 lg:columns-5 container mx-auto max-w-7xl pt-8 mb-4">
                @for ($i = 0; $i < 10; $i++)
                    <div class="relative ">

                        <a href="/categories" class="">
                            <img class="mb-4 rounded-lg aspect-square object-cover"
                                src="https://source.unsplash.com/random/3">
                            <div
                                class="absolute inset-0 bottom-0 flex justify-center items-end  bg-gradient-to-b from-transparent via-transparent to-black ">
                                <p class="mb-3  text-white font-bold ">
                                    Event Coordinator</p>
                            </div>
                        </a>
                    </div>
                @endfor
            </div>
            <div class="container mx-auto flex justify-center p-8">
                <a href="/categories"
                    class="border rounded   hover:bg
    -[#F69679]/75 p-2  text-base text-center text-[#F69679]/75  hover:text-white hover:bg-[#F69679] transition duration-300 hover:ease-in-out   cursor-pointer">
                    Show More
                </a>
            </div>
    </section>


    <section class="p-8 ">
        <div class="grid lg:grid-cols-2 gap-2 mx-auto lg:max-w-7xl h-screen">
            <div x-data="visibility" class="p-4 md:p-8 bg-[#6DCFF6]/25 flex items-center" x-ref="element"
                @scroll.window="checkVisibility()">
                <div x-show="isTextVisible" class=""
                    x-transition:enter="transition ease-out delay-300 duration-300"
                    x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                    <div class="transition duration-500 ease-in-out hover:scale-110 hover:font-extrabold ">
                        <h1 class="font-bold text-2xl md:text-3xl text-left ">Unique</h1>
                        <h2 class="text-left text-base md:text-lg">Lorem ipsum dolor sit amet consectetur
                            adipisicing
                            elit.
                            Facilis dolore adipisci placeat.</h2>
                    </div>
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
                    <div class="transition duration-500 ease-in-out hover:scale-110 hover:font-extrabold ">
                        <h1 class="font-bold text-2xl md:text-3xl text-left">All in One</h1>
                        <h2 class="text-left text-base md:text-lg">Lorem ipsum dolor sit amet consectetur
                            adipisicing
                            elit.
                            Facilis dolore adipisci placeat.</h2>
                    </div>
                </div>

            </div>

            <div class="p-4 md:p-8 bg-[#6DCFF6]/25 flex items-center" x-data="visibility" x-ref="element"
                @scroll.window="checkVisibility()">

                <div x-show="isTextVisible" class=""
                    x-transition:enter="transition delay-300 ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                    <div class="transition duration-500 ease-in-out hover:scale-110 hover:font-extrabold ">
                        <h1 class="font-bold text-3xl md:text-4xl text-left">Reliable</h1>
                        <h2 class="text-left text-base md:text-lg">Lorem ipsum dolor sit amet consectetur
                            adipisicing
                            elit.
                            Facilis dolore adipisci placeat.</h2>
                    </div>
                </div>

            </div>

            <div class=" flex items-center overflow-hidden cursor-pointer">
                <img class="w-full md:h-full object-cover transition duration-300 ease-in-out hover:scale-110 hover:rotate-3 "
                    src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                    alt="">
            </div>
        </div>
    </section>


    <section class="container mx-auto ">
        <div class="container mx-auto text-center text-black/50 text-7xl  mb-4 pt-36  ">
            Top Supplier
        </div>
        <div class=" rounded-3xl bg-[#6DCFF6]/25  grid md:grid-cols-4 lg:grid-cols-5 sm:grid-cols-3 p-8  ">
            @for ($i = 0; $i < 5; $i++)
                <a href="/itsMeCJ" class="href">
                    <div class="flex flex-col scale-75  hover:scale-100 ease-in-out duration-300  ">
                        <img class=" h-96  object-cover rounded-t-3xl"
                            src="https://images.unsplash.com/photo-1627564174704-4c3765ef733a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                            alt="">
                        <div class="p-4 bg-[#F69679]/25 rounded-b-3xl">
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
