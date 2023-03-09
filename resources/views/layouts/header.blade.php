<nav class="px-2 sm:px-4 py-2.5">
    <div class="container mx-auto items-center flex justify-between">
        <div class="order-first hidden w-full md:block md:w-auto" id="navbar-default"></div>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default-menu">
            <ul
                class="bg-transparent flex flex-col items-center justify-center gap-[70px] mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                <li class="">
                    <a href="/featured"
                        class="block py-2 pl-3 pr-4 text-black bg-black hover:text-[#6DCFF6] rounded md:bg-transparent md:p-0"
                        aria-current="page">Featured</a>
                </li>
                <li class="">
                    <a href="/categories"
                        class="block py-2 pl-3 pr-4 text-black bg-black hover:text-[#6DCFF6] rounded md:bg-transparent md:p-0">Category</a>
                </li>
                <div class="">
                    <a href="/" class="flex items-center">
                        <img src="" class="h-6 mr-3 sm:h-9" alt="" />
                        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"><span
                                style="color:#F69679;">Owl</span>Event</span>
                    </a>
                </div>
                <li class="">
                    <a href="/blog"
                        class="block py-2 pl-3 pr-4 text-black bg-black hover:text-[#6DCFF6] rounded md:bg-transparent md:p-0">Blog</a>
                </li>
                <li class="">
                    <a href="/supplier-registration"
                        class="block py-2 pl-3 pr-4 text-black bg-black hover:text-[#6DCFF6] rounded md:bg-transparent md:p-0">Become
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
        <div></div>
    </div>
    <button data-collapse-toggle="navbar-default-menu" type="button"
        class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
        aria-controls="navbar-default-menu" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
        </svg>
    </button>
</nav>
