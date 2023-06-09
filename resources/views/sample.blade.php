<x-guest-layout>

    <div class="flex justify-between container mx-auto">
        <!-- 1 -->
        <div>
            <aside class="hidden lg:block lg:w-80">
                <div class="sticky top-36">
                    <h3 class="sr-only">Sidebar</h3>

                    <div
                        class="p-6 pb-4 mt-6 mb-6 font-medium text-gray-500 bg-white border border-gray-200 rounded-lg  ">
                        <h4 class="mb-4 font-bold text-gray-900 uppercase">Recommended topics</h4>

                        <div class="flex flex-wrap">
                            @for ($i = 0; $i < 5; $i++)
                                <a class="bg-[#6DCFF6] hover:bg-[#6DCFF6]/75 text-white text-sm font-medium mr-2 px-2.5 py-0.5 rounded mb-2"
                                    href="">Caterer</a>
                            @endfor
                        </div>

                    </div>
                    <div class="p-6 mb-6 font-medium text-gray-500 bg-white border border-gray-200 rounded-lg  ">
                        <h4 class="mb-4 font-bold text-gray-900 uppercase ">Become an Author</h4>
                        <ul class="space-y-4 text-gray-500">
                            <li><a class="flex items-start" href="">

                                    <div class="mr-3"><span class="text-sm"> Would you like to make a contribution to
                                            this blog by writing guest posts?<br>To proceed, please get in touch with us
                                            and provide a resume of your previous writing articles.</span></div>
                                </a></li>
                            <a class="text-white block text-center bg-[#6DCFF6] hover:bg-[#6DCFF6]/75 focus:ring-4 focus:ring-[#6DCFF6]/50 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none w-full"
                                href="/contact/">Get in touch</a>
                        </ul>
                    </div>
                </div>
            </aside>
        </div>
        <!-- 2 -->
        <div>
            <div class="container max-w-max mx-auto p-8">
                <section class="bg-white border rounded-lg shadow-inner drop-shadow-2xl p-4 mb-4">
                    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:grid-cols-12">
                        <div class="mr-auto place-self-center lg:col-span-7">
                            <p class="text-base">March 24, 2023</p>
                            <h1
                                class="max-w-2xl mb-4 text-lg font-extrabold tracking-tight leading-none md:text-xl xl:text-2xl ">
                                Sharing our passion for learning and discovery through our blog.</h1>
                            <p class="max-w-2xl mb-6 font-base text-gray-500 lg:mb-8 md:text-sm lg:text-base ">
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown
                                printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <a href="#"
                                class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-[#6DCFF6] hover:bg-[#6DCFF6]/75 focus:ring-4 focus:ring-[#6DCFF6] ">
                                Get started
                                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>

                        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex ">
                            <img class="rounded-lg"
                                src="https://images.unsplash.com/photo-1679609979971-c64d9342ce0d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                alt="">
                        </div>
                    </div>
                </section>
            </div>
            <main class=" pb-8 bg-white lg:pb-16 mx-auto ">
                <div class="flex justify-between px-4 mx-auto max-w-8xl">
                    <div class="w-full container mx-auto">
                        <article class="">
                            <div class="container max-w-7xl mx-auto p-8">
                                <section>
                                    <div class="">
                                        <span class="text-sm font-bold text-center text-gray-900 lg:mb-0 ">9 posts in
                                            total</span>
                                    </div>
                                    <div
                                        class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2 xl:grid-cols-3 gap-4 justify-center items-center">

                                        @for ($i = 0; $i < 9; $i++)
                                            <div class="border rounded-lg shadow-inner drop-shadow-2xl p-4">
                                                <div>
                                                    <img class="rounded-lg"
                                                        src="https://images.unsplash.com/photo-1674574124475-16dd78234342?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                                                        alt="">
                                                    <div class="p-2">
                                                        <div class="text-xs">
                                                            March 24, 2023
                                                        </div>
                                                        <div class="font-bold">
                                                            Lorem Ipsum is simply dummy
                                                            of the printing and industry.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                </section>
                        </article>
                    </div>
                </div>
            </main>
        </div>
        <!-- 3 -->
        <div class="sticky top-0">
            <aside class="hidden lg:block lg:w-80" aria-labelledby="sidebar-label">
                <div class=" ">
                    <h3 id="sidebar-label" class="sr-only">Sidebar</h3>
                    <div
                        class="p-6 pb-4 mt-6 mb-6 font-medium text-gray-500 bg-white border border-gray-200 rounded-lg  ">
                        <h4 class="mb-4 font-bold text-gray-900 uppercase ">Categories</h4>
                        <ul class="space-y-4 text-gray-500">
                            <li>
                                @for ($i = 0; $i < 9; $i++)
                                    <a class="flex text-left" href="">
                                        <div class="mr-3"><span
                                                class="text-sm transition duration-300 ease-in hover:ease-in-out hover:underline hover:underline-offset-2">Event
                                                Coordinator / Planner</span>
                                        </div>
                                    </a>
                            </li>
                            @endfor

                        </ul>
                    </div>
                    <div
                        class="p-6 pb-4 mt-6 mb-6 font-medium text-gray-500 bg-white border border-gray-200 rounded-lg   ">
                        <ul class="space-y-4 divide-y text-gray-500">
                            @for ($i = 0; $i < 6; $i++)
                                <li class="pt-2">
                                    <a class="flex items-start" href="">
                                        <div class="mr-3 shrink-0"><img class="object-cover h-24 w-full "
                                                src="https://images.unsplash.com/photo-1679674704818-f3a500c1305b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                                alt=""></div>

                                        <div class="flex flex-col space-y-4 truncate">
                                            <div class="mr-3 ">
                                                <span class="block text-sm text-gray-900">2023-03-25</span>
                                            </div>
                                            <div class="mr-3 "><span class="text-sm ">Technical writer, web
                                                    developer, and
                                                    customer success specialist.</span></div>
                                            <div
                                                class="mr-3 inline-flex items-center justify-center  text-sm font-light text-center text-black hover:underline hover:underline-offset-2 hover:text-[#F69679]">
                                                Read More
                                                <svg class="w-3 h-3 ml-2 " fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endfor
                        </ul>
                    </div>
                </div>
            </aside>
        </div>

    </div>
</x-guest-layout>
