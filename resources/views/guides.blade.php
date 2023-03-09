<x-guest-layout>
    <section class=" bg-gradient-to-b from-[#6DCFF6]/75 to-transparent " x-data="visibility" x-ref="element"
        @scroll.window="checkVisibility()" x-init="$nextTick(() => isTextVisible = true)">
        <div class="relative text-center" x-show="isTextVisible"
            x-transition:enter="transition ease-out duration-700 delay-500" x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
            <div class="font-extrabold text-5xl mb-8 text-left">
                <div class="grid grid-cols-3 mx-auto container">

                    <div class="flex flex-col text-center p-8">
                        <div class="p-8 text-xl  text-black/50 uppercase">Choose Your Topic
                            <div class="grid grid-cols-1 mb-4 p-8 w-full h-full  ">
                                @for ($i = 0; $i < 11; $i++)
                                    <a href=""
                                        class=" block w-full text-center text-sm font-bold uppercase hover:bg-[#F69679]/50 hover:text-white px-5 py-3">
                                        <span class="tracking-tighter leading-tight text-xl text-black ">
                                            Event Coordinator
                                        </span>
                                    </a>
                                @endfor
                            </div>
                        </div>

                    </div>

                    <div class="col-span-2 text-left   ">
                        <p class="font-bold text-5xl text-center mt-10 "> Event Coordinator</p>
                        <div class="flex flex-col text-left px-2.5 py-24">
                            <p class="text-2xl text-center">
                                Everything you need to know about accelerating your business <br> strategy with data
                            </p>
                            <p class="py-2.5 text-xl text-center text-black/50">
                                Highly practical guides covering data analysis, data processing, data
                                visualization,<br> data
                                science, data entry, databases, and more!
                            </p>
                            <div class="  p-8 grid md:grid-cols-2 lg:grid-cols-2 sm:grid-cols-1 gap-4  ">
                                @for ($i = 0; $i < 8; $i++)
                                    <a href="" class="href">
                                        <div
                                            class="border rounded-b-lg drop-shadow-2xl bg-white/50 flex flex-col scale-75 hover:scale-100 ease-in-out duration-300  ">
                                            <img class=" w-full  object-cover rounded-tl-md rounded-tr-md"
                                                src="https://plus.unsplash.com/premium_photo-1661698951100-064e4ae229fd?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1074&amp;q=80"
                                                alt="">
                                            <div class="p-4">
                                                <div class="font-bold text-2xl text-bold">Hotel Management

                                                </div>

                                            </div>
                                        </div>
                                    </a>
                                @endfor
                            </div>
                        </div>
                    </div>



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
