<x-guest-layout>
    <x-category></x-category>

    <section class="container mx-auto p-8">
        <div class="flex flex-col">
            <div class="text-2xl mb-2 font-bold">I will help you ensure that all aspects of the <br>event run smoothly
            </div>

        </div>
    </section>

    <section class="container mx-auto p-8">
        <div class="flex flex-row p-4 gap-4 items-center">
            <div class="">
                <img class="relative z-auto top-0 h-8 w-8 rounded-full ring-2 ring-white object-cover" src="img/cj.jpg"
                    alt="">
            </div>
            <div class="inset-x-0 bottom-0 text-left text-sm font-bold hover:underline cursor-pointer ">
                <a href="" class="href">ItsMeCJ</a>
            </div>

            <div class="">
                <ul class="flex justify-left mb-0 ">
                    <li>
                        @for ($j = 0; $j < 5; $j++)
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 text-yellow-300" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                    </li>
                    @endfor

                </ul>

            </div>
        </div>
        <hr>
    </section>


    <section>
        <div class="container mx-auto grid grid-cols-2 gap-4 p-8">
            <div class="">
                <div class="mb-12">
                    <div class="text-2xl mb-2 font-bold">About This Supplier </div>
                    <div>
                        <p class="text-xl">I will help you ensure that all aspects of the <br>event run smoothly
                            and
                            meet the expectations of the client.</p>
                    </div>
                </div>
                <div class="">
                    <div class="text-2xl mb-2 font-bold">About This Supplier </div>
                    <div class="flex justify-left gap-4 mb-8">
                        <div class="">
                            <img class="relative z-auto top-0 w-32 h-32  rounded-full ring-2 ring-white object-cover"
                                src="https://images.unsplash.com/photo-1555952517-2e8e729e0b44?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHBlcnNvbnxlbnwwfDF8MHx8&auto=format&fit=crop&w=500&q=60"
                                alt="">
                        </div>
                        <div class="flex flex-col ">
                            <div class="inset-x-0 bottom-0 text-left text-sm font-bold hover:underline cursor-pointer mb-4">
                                <a href="" class="href">ItsMeCJ</a>
                            </div>
                            <div class="">
                                <ul class="flex justify-left mb-0">
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
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="p-8 border">
                        <p>Hi it's me CJ,
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.

                        </p>
                    </div>


                    <div class="p-8">
                        <h1
                            class="text-left  lg:text-2xl text-xl lg:leading-9 leading-7 text-gray-800 font-semibold">
                            FAQ's</h1>
                        <div class="">
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
                                            <img class="transform "
                                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg"
                                                alt="toggler">
                                            <img class="transform hidden "
                                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg"
                                                alt="toggler">
                                        </button>
                                    </div>
                                    <div id="menu" class="hidden mt-6 w-full">
                                        <p class="text-base leading-6 text-gray-600 font-normal">
                                            awdjhajwlkdhajkwdhakjwdhjkawhd</p>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                    <div class="p-8">
                        <h1
                            class="text-left  lg:text-2xl text-xl lg:leading-9 leading-7 text-gray-800 font-semibold">
                           Reviews</h1>
                        <div class="">

                        </div>
                    </div>
                </div>

            </div>

            <div class="container h-screen">
                <div class=" sticky top-8 right-0 h-1/2">

                    <div id="indicators-carousel" class="relative" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                                <img src="https://images.unsplash.com/photo-1539074012390-794e447a2d9e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="https://images.unsplash.com/photo-1507608869274-d3177c8bb4c7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="https://images.unsplash.com/photo-1635768002252-f00eb95ce98f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 4 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="https://images.unsplash.com/photo-1486427944299-d1955d23e34d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 5 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="https://images.unsplash.com/photo-1496449903678-68ddcb189a24?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                        </div>
                        <!-- Slider indicators -->
                        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                            @for ($i = 0; $i < 5; $i++)
                                <button type="button" class="w-3 h-3 rounded-full"
                                    aria-current="{{ $i === 0 ? 'true' : 'false' }}"
                                    aria-label="Slide {{ $i + 1 }}"
                                    data-carousel-slide-to="{{ $i }}">
                                </button>
                            @endfor
                        </div>
                        <!-- Slider controls -->
                        <button type="button"
                            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-prev>
                            <span
                                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30  group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 "
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7"></path>
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button"
                            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-next>
                            <span
                                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30  group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 "
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>

                    </div>
                </div>
            </div>



    </section>




</x-guest-layout>


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
