<x-guest-layout>
    <section>
        <div class="  ">
            <div class="container mx-auto p-8" style="">
                <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill rounded-t-lg"
                    style="background-image: url(https://plus.unsplash.com/premium_photo-1661311839935-ade135b5aa84?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80">
                    <div class="md:w-1/2">
                        <p class="font-bold text-sm uppercase">w</p>
                        <p class="text-3xl font-bold">w</p>
                        <p class="text-2xl mb-10 leading-none">w</p>

                    </div>
                </div> <!-- container -->
                <br>
            </div>


        </div>


    </section>

    <section class="px-2 sm:px-4 py-2.5 " x-data="visibility" x-ref="element" @scroll.window="checkVisibility()"
        x-init="$nextTick(() => isTextVisible = true)">
        <div class="columns-3  md:columns-4 lg:columns-5 container mx-auto p-24 "
            x-data="{ asdasd: 15 }"x-show="isTextVisible"
            x-transition:enter="transition ease-out duration-700 delay-500"
            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90">
            @for ($i = 0; $i < 30; $i++)

                <div class="rounded shadow-lg mb-4">
                    <a href="/itsMeCJ/I-will-create" class="href">
                        <img class="w-full aspect-auto" src="https://source.unsplash.com/random/1" alt="">
                    </a>
                    <div class="flex flex-row p-2 gap-4 items-center">
                        <div class="">
                            <img class="relative z-auto top-0 h-8 w-8 rounded-full ring-2 ring-white object-cover"
                                src="https://images.unsplash.com/photo-1555952517-2e8e729e0b44?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHBlcnNvbnxlbnwwfDF8MHx8&auto=format&fit=crop&w=500&q=60"
                                alt="">
                        </div>
                        <div class="inset-x-0 bottom-0 text-left text-sm font-bold hover:underline cursor-pointer ">
                            <a href="" class="href">ItsMeCJ</a>
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

        <p class="p-4 text-black text-base truncate">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et
            perferendis eaque, exercitationem praesentium nihil.
        </p>
        </div>

        @endfor
        </div>
        <a href="" class="href">
            <div
                class="border border-transparent rounded text-[#F69679] hover:text-[#F69679]/75  p-2 mb-3 text-center text-base">
                See More</div>
        </a>
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
