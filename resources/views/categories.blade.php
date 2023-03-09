<x-guest-layout>

    <section class="border">

        <ul class="flex flex-wrap items-center justify-center text-xs  ">
            @for ($i = 0; $i < 12; $i++)
                <li class="mr-4">
                    <button
                        class="hover:text-[#6DCFF6] inline-block p-4 border-b-2 border-transparent hover:border-gray-300">Caterer</button>
                </li>
            @endfor

        </ul>

    </section>



    <section class="p-8 px-24 py-24   mx-auto" x-data="visibility" x-ref="element" @scroll.window="checkVisibility()"
        x-init="$nextTick(() => isTextVisible = true)">
        <div class="grid grid-cols-3 gap-4" x-show="isTextVisible"
            x-transition:enter="transition ease-out duration-700 delay-500"
            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90">
            @for ($i = 0; $i < 9; $i++)
                <div class="shadow-2xl max-w-sm mx-auto relative mb-8 " x-data="showSlides()">
                    <div class=" flex overflow-hidden">
                        <template x-for="(chunk, index) in chunks" :key="index">
                            <template x-for="item in chunk">
                                <div class="w-full" x-show="currentChunk == index"
                                    x-transition:enter="transition ease-in-out duration-300 transform"
                                    x-transition:enter-start="transition-enter-start"
                                    x-transition:enter-end="translate-x-0"
                                    x-transition:leave="transition ease-in-out duration-300 transform"
                                    x-transition:leave-start="translate-x-0"
                                    x-transition:leave-end="transition-leave-end">
                                    <img :src="item.image"
                                        class="object-center  hover:text-[#6DCFF6] max-w-sm rounded-t-lg

                                    ">
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



    <section class="border bg-[#6DCFF6]/25">

        <div class="lg:container lg:mx-auto lg:py-16 md:py-12 md:px-6 py-12 px-4">
            <h1
                class="text-center dark:text-white lg:text-4xl text-3xl lg:leading-9 leading-7 text-gray-800 font-semibold">
                FAQ's</h1>

            <div
                class="lg:mt-12 bg-[#6DCFF6]/25 dark:bg-gray-800 md:mt-10 mt-8 lg:py-7 lg:px-6 md:p-6 py-6 px-4 lg:w-8/12 w-full mx-auto">
                <div class="flex justify-between md:flex-row flex-col">
                    <div class="md:mb-0 mb-8 md:text-left text-center">
                        <h2 class="font-medium dark:text-white text-xl leading-5 text-gray-800 lg:mb-2 mb-4">
                            Questions
                        </h2>
                        <p
                            class="font-normal dark:text-gray-300 text-sm leading-5 text-gray-600 md:w-8/12 md:ml-0 w-11/12 mx-auto">
                            If you don’t find your answer, Please contact us or Leave a Message, we’ll be more than
                            happy to assist you.</p>
                    </div>

                    <div class="flex justify-center items-center">
                        <div
                            class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 flex bg-white md:justify-center justify-between items-center px-4 py-3 w-full">
                            <input class="focus:outline-none bg-white" type="text" placeholder="Search" />
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg1.svg" alt="search">
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:w-8/12 w-full mx-auto">
                @for ($i = 0; $i < 4; $i++)
                    <!-- Question 1 -->
                    <hr class="w-full lg:mt-10 md:mt-12 md:mb-8 my-8" />

                    <div class="w-full md:px-6">
                        <div id="mainHeading" class="flex justify-between items-center w-full">
                            <div class="">
                                <p
                                    class="flex justify-center items-center dark:text-white font-medium text-base leading-6 md:leading-4 text-gray-800">
                                    <span
                                        class="lg:mr-6 mr-4 dark:text-white lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-gray-800">Q1.</span>
                                    asdkhasdjkhasdkjh
                                </p>
                            </div>
                            <button aria-label="toggler"
                                class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800"
                                data-menu>
                                <img class="transform dark:hidden "
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg" alt="toggler">
                                <img class="transform dark:block hidden "
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg"
                                    alt="toggler">
                            </button>
                        </div>
                        <div id="menu" class="hidden mt-6 w-full">
                            <p class="text-base leading-6 text-gray-600 dark:text-gray-300 font-normal">
                                awdjhajwlkdhajkwdhakjwdhjkawhd</p>
                        </div>
                    </div>
                @endfor
            </div>


        </div>




    </section>


</x-guest-layout>

<script>
    //Carousel
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

<script>
    //FAQ
    let elements = document.querySelectorAll("[data-menu]");
    for (let i = 0; i < elements.length; i++) {
        let main = elements[i];

        main.addEventListener("click", function() {
            let element = main.parentElement.parentElement;
            let indicators = main.querySelectorAll("img");
            let child = element.querySelector("#menu");
            let h = element.querySelector("#mainHeading>div>p");

            h.classList.toggle("font-semibold");
            child.classList.toggle("hidden");
            // console.log(indicators[0]);
            indicators[0].classList.toggle("rotate-180");
        });
    }
</script>
<script>
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
