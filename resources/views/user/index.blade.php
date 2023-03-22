<x-guest-layout>


    <section class="container mx-auto p-8 ">


        <div class="grid grid-rows-3 grid-flow-col gap-36 text-center w-full content-center pb-10  rounded-lg">
            <div class=" rounded-lg border border-transparent shadow-xl  row-span-3 w-full p-8">
                <div class="col-span-1">
                    <div
                        class="flex flex-col justify-left gap-4 mb-8 p-8 rounded-lg bg-gradient-to-b from-[#6DCFF6]/50 via-[#6DCFF6]/25 to-transparent ">
                        <div class="flex justify-center ">
                            <div class="relative">
                                <img class="relative z-auto top-0 w-32 h-32  rounded-full  object-cover"
                                    src="https://images.unsplash.com/photo-1555952517-2e8e729e0b44?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHBlcnNvbnxlbnwwfDF8MHx8&auto=format&fit=crop&w=500&q=60"
                                    alt="">
                                <span class="absolute flex h-4 w-4 bottom-0 right-7">
                                    <span
                                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-4 w-4 bg-sky-500"></span>
                                </span>
                            </div>
                        </div>
                        <div class="flex flex-col ">
                            <div
                                class="flex justify-center inset-x-0 bottom-0 text-left text-lg font-bold hover:underline cursor-pointer mb-4  ">
                                <a href="/itsMeCJ" class="href">ItsMeCJ</a>
                            </div>
                            <div class="">
                                <ul class="flex justify-center mb-0 items-center">
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
                                    <span>(52)</span>
                                </ul>

                            </div>
                        </div>
                    </div>




                </div>
            </div>

            <div class="  shadow-xl row-span-3 col-span-2">


            </div>
        </div>






    </section>
</x-guest-layout>
