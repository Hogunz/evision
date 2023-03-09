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


    <section class="px-2 sm:px-4 py-2.5 " x-data="visibility" x-ref="element" @scroll.window="checkVisibility()"
        x-init="$nextTick(() => isTextVisible = true)">
        <div class="columns-2  md:columns-3 lg:columns-4 container mx-auto p-24"x-show="isTextVisible"
            x-transition:enter="transition ease-out duration-700 delay-500"
            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90">
            @for ($i = 0; $i < 8; $i++)
                <div class="relative group transition-transform  ">
                    <div
                        class="absolute inset-0 rounded-3xl  bg-gradient-to-b  to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                    </div>
                    <a href="/category" class="">
                        <img class="mb-4 rounded-3xl    "
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
