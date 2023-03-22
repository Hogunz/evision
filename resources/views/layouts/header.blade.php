<nav class=" bg-white px-2 sm:px-4 py-2.5  border-b ">

    <div class=" flex flex-wrap items-center justify-between gap-4 ">
        <div class="">
            <a href="/" class="flex items-center">
                <img src="img/owlowl.png" class="h-6 mr-3 sm:h-9" alt="" />
            </a>
        </div>
        <div class=" grow ">
            <form>
                <div class="flex ">

                    <button id="dropdown-button" data-dropdown-toggle="dropdown"
                        class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-[#F69679]/25   hover:bg-[#F69679]/50 focus:ring-4 focus:outline-none focus:ring-[#F69679]/50 "
                        type="button">All categories <svg aria-hidden="true" class="w-4 h-4 ml-1" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg></button>
                    <div id="dropdown"
                        class=" z-10 grid hidden w-auto grid-cols-2 text-sm bg-white border border-gray-100 rounded-lg shadow-md dark:border-gray-700 md:grid-cols-3 dark:bg-gray-700 ">
                        @for ($i = 0; $i < 11; $i++)
                            <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                <ul class="space-y-4" aria-labelledby="mega-menu-icons-dropdown-button">
                                    <li>
                                        <a href="#"
                                            class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">About us</span>
                                            Event Coordinator / Planner
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        @endfor
                    </div>

                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">

                            <button type="submit">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 " fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>

                        </div>
                        <input type="text" id="voice-search"
                            class=" border-transparent text-gray-900 text-sm  focus:ring-[#6DCFF6]/50 focus:border-[#6DCFF6]/50 block w-full pl-10 p-2.5  "
                            placeholder="Search for Categories . . . " required>
                    </div>
                </div>
            </form>
        </div>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default-menu">
            <ul
                class="bg-transparent flex flex-col items-center justify-center gap-4 mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                <li class="">
                    <a href="/featured"
                        class="block py-2 pl-3 pr-4 text-black bg-black hover:text-[#6DCFF6] hover:underline hover:underline-offset-8 transition duration-300 rounded md:bg-transparent md:p-0"
                        aria-current="page">Featured</a>
                </li>
                <li class="">
                    <a href="/blog"
                        class="block py-2 pl-3 pr-4 text-black bg-black hover:text-[#6DCFF6] hover:underline hover:underline-offset-8 transition duration-300 rounded md:bg-transparent md:p-0">Blog</a>
                </li>
                <li class="">
                    <a href="/supplier-registration"
                        class="block py-2 pl-3 pr-4 text-black bg-black hover:text-[#6DCFF6] hover:underline hover:underline-offset-8 transition duration-300 rounded md:bg-transparent md:p-0">Become
                        a Supplier</a>
                </li>
                <li>
                    <a href="{{ route('login') }}" class="href">
                        <button class="border rounded-full px-8 py-2 text-white bg-[#6DCFF6;] hover:bg-[#ABE7FF;]">
                            Login
                        </button>
                    </a>
                </li>

            </ul>
        </div>
    </div>

</nav>
