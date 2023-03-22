<x-guest-layout>
    <x-category></x-category>
    <section class="container mx-auto p-8" x-data="visibility" x-ref="element" @scroll.window="checkVisibility()"
        x-init="$nextTick(() => isTextVisible = true)">
        <div class="columns-2 md:columns-3 lg:columns-4" x-show="isTextVisible"
            x-transition:enter="transition ease-out duration-700 delay-500" x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">


            @for ($i = 0; $i < 12; $i++)
                <a href="/blog/index" class="href">
                    <div class="relative group transition-transform  ">
                        <div
                            class="absolute inset-0 rounded-3xl  bg-gradient-to-b  to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70 cursor-pointer">
                            <p
                                class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0  opacity-0 transition-opacity group-hover:opacity-100">
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                            </p>
                        </div>
                        <div
                            class=" absolute bottom-0 left-0 p-8 text-white flex flex-col  translate-y-6    px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                            <div class="relative text-left">
                                <h1
                                    class=" text-xl font-semibold 5 text-white mb-3 duration-300 opacity-0 transition-opacity group-hover:opacity-100 ">
                                    Title post</h1>
                                <p
                                    class=" text-base leading-4 text-white mt-2 duration-300 opacity-0 transition-opacity group-hover:opacity-100">
                                    Author</p>
                                <a href=""
                                    class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline duration-300 opacity-0 transition-opacity group-hover:opacity-100">
                                    <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/blog-I-svg1.svg"
                                        alt="arrow">
                                </a>
                            </div>
                        </div>
                        <a href="" class="">
                            <img class="mb-4 rounded-lg    "
                                src="https://images.pexels.com/photos/5690183/pexels-photo-5690183.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1600">
                        </a>
                    </div>
                </a>
            @endfor

        </div>
    </section>


    <section>

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
