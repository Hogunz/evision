<x-guest-layout>

    <x-category></x-category>

    <section class="container mx-auto p-8">
        <div class="flex flex-col">
            <div class="text-4xl mb-2 font-bold">Event Coordinator</div>
            <div class="text-base text-black/50 font-bold">Understanding the client's needs and objectives for the event
                and
                developing
                <br>
                a detailed plan and timeline for its execution.
            </div>
        </div>
    </section>
    <section class="px-24 py-24 p-8  mx-auto container" x-data="visibility" x-ref="element"
        @scroll.window="checkVisibility()" x-init="$nextTick(() => isTextVisible = true)">
        <div class="grid grid-cols-3 gap-2" x-show="isTextVisible"
            x-transition:enter="transition ease-out duration-700 delay-500"
            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90">
            @for ($x = 0; $x < 12; $x++)
                <div id="carousel" data-carousel="slide"
                    class="relative max-w-sm md:h-fit md:mb-4 bg-white border border-gray-200 rounded-lg  ">
                    <div class="relative overflow-hidden md:h-56 rounded-t-lg">
                        @for ($i = 0; $i < 4; $i++)
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <a href="/itsMeCJ/I-will-create">
                                    <img class="rounded-t-lg absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                        src="https://plus.unsplash.com/premium_photo-1664298572491-fbb6a3212a45?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                        alt="" />
                                </a>
                            </div>
                        @endfor
                        <button type="button"
                            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-prev>
                            <span
                                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30  group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 " fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7">
                                    </path>
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button"
                            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-next>
                            <span
                                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30  group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 " fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                    <div class="p-5">
                        <div class="flex flex-row p-4 gap-4 items-center">
                            <div class="">
                                <img class="relative z-auto top-0 h-8 w-8 rounded-full ring-2 ring-white object-cover"
                                    src="https://images.unsplash.com/photo-1555952517-2e8e729e0b44?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHBlcnNvbnxlbnwwfDF8MHx8&auto=format&fit=crop&w=500&q=60"
                                    alt="">
                            </div>
                            <div class="inset-x-0 bottom-0 text-left text-sm font-bold hover:underline cursor-pointer ">
                                <a href="/itsMeCJ" class="href">ItsMeCJ</a>

                            </div>

                            <div class="">
                                <ul class="flex justify-left mb-0 items-center">
                                    <li>
                                        @for ($j = 0; $j < 5; $j++)
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="w-4 text-yellow-300" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                    </li>
            @endfor
            <span>(23)</span>
            </ul>
        </div>
        </div>
        <p class="mb-3 font-normal text-gray-700 ">Lorem Ipsum is simply dummy text of the
            printing and typesetting industry.</p>
        </div>
        </div>
        @endfor
        </div>

    </section>



    <section class="border bg-[#6DCFF6]/25">

        <div class="lg:container lg:mx-auto lg:py-16 md:py-12 md:px-6 py-12 px-4">
            <h1 class="text-center  lg:text-4xl text-3xl lg:leading-9 leading-7 text-gray-800 font-semibold">
                FAQ's</h1>

            <div
                class="lg:mt-12 bg-[#6DCFF6]/25  md:mt-10 mt-8 lg:py-7 lg:px-6 md:p-6 py-6 px-4 lg:w-8/12 w-full mx-auto">
                <div class="flex justify-between md:flex-row flex-col">
                    <div class="md:mb-0 mb-8 md:text-left text-center">
                        <h2 class="font-medium  text-xl leading-5 text-gray-800 lg:mb-2 mb-4">
                            Questions
                        </h2>
                        <p class="font-normal  text-sm leading-5 text-gray-600 md:w-8/12 md:ml-0 w-11/12 mx-auto">
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
                                    class="flex justify-center items-center  font-medium text-base leading-6 md:leading-4 text-gray-800">
                                    <span
                                        class="lg:mr-6 mr-4  lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-gray-800">Q1.</span>
                                    asdkhasdjkhasdkjh
                                </p>
                            </div>
                            <button aria-label="toggler"
                                class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800"
                                data-menu>
                                <img class="transform  "
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg" alt="toggler">
                                <img class="transform  hidden "
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg"
                                    alt="toggler">
                            </button>
                        </div>
                        <div id="menu" class="hidden mt-6 w-full">
                            <p class="text-base leading-6 text-gray-600  font-normal">
                                awdjhajwlkdhajkwdhakjwdhjkawhd</p>
                        </div>
                    </div>
                @endfor
            </div>


        </div>




    </section>


</x-guest-layout>

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
