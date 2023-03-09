<x-guest-layout>

    <section class="container mx-auto p-8" x-data="visibility" x-ref="element" @scroll.window="checkVisibility()"
        x-init="$nextTick(() => isTextVisible = true)">

        <div class="columns-2 md:columns-3 lg:columns-4" x-show="isTextVisible"
            x-transition:enter="transition ease-out duration-700 delay-500" x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">

            <div class="relative group transition-transform  ">
                <div
                    class="absolute inset-0 rounded-3xl  bg-gradient-to-b  to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                </div>

                <div
                    class=" absolute inset-0 p-8 text-white flex flex-col  translate-y-6  items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                    <div class="relative">
                        <a class=" absolute inset-0" href=" "></a>
                        <h1
                            class=" text-3xl font-bold mb-3 duration-300 opacity-0 transition-opacity group-hover:opacity-100 ">
                            Title post</h1>
                        <p
                            class=" font-sm font-light duration-300 opacity-0 transition-opacity group-hover:opacity-100">
                            Author</p>
                    </div>

                </div>
                <a href="" class="">
                    <img class="mb-4 rounded-lg    "
                        src="https://images.pexels.com/photos/5690183/pexels-photo-5690183.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1600">
                </a>

            </div>
            <div class="relative group transition-transform  ">
                <div
                    class="absolute inset-0 rounded-3xl  bg-gradient-to-b  to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                </div>
                <div
                    class=" absolute inset-0 p-8 text-white flex flex-col  translate-y-6  items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                    <div class="relative">
                        <a class=" absolute inset-0" href=" "></a>
                        <h1
                            class=" text-3xl font-bold mb-3 duration-300 opacity-0 transition-opacity group-hover:opacity-100 ">
                            Title post</h1>
                        <p
                            class=" font-sm font-light duration-300 opacity-0 transition-opacity group-hover:opacity-100">
                            Author</p>
                    </div>

                </div>
                <a href="" class="">
                    <img class="mb-4 rounded-lg    " src=" https://source.unsplash.com/random/2">

                </a>

            </div>
            <div class="relative group transition-transform  ">
                <div
                    class="absolute inset-0 rounded-3xl  bg-gradient-to-b  to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                </div>
                <div
                    class=" absolute inset-0 p-8 text-white flex flex-col  translate-y-6  items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                    <div class="relative">
                        <a class=" absolute inset-0" href=" "></a>
                        <h1
                            class=" text-3xl font-bold mb-3 duration-300 opacity-0 transition-opacity group-hover:opacity-100 ">
                            Title post</h1>
                        <p
                            class=" font-sm font-light duration-300 opacity-0 transition-opacity group-hover:opacity-100">
                            Author</p>
                    </div>

                </div>
                <a href="" class="">
                    <img class="mb-4 rounded-lg    " src=" https://source.unsplash.com/random/3">

                </a>

            </div>
            <div class="relative group transition-transform  ">
                <div
                    class="absolute inset-0 rounded-3xl  bg-gradient-to-b  to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                </div>
                <div
                    class=" absolute inset-0 p-8 text-white flex flex-col  translate-y-6  items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                    <div class="relative">
                        <a class=" absolute inset-0" href=" "></a>
                        <h1
                            class=" text-3xl font-bold mb-3 duration-300 opacity-0 transition-opacity group-hover:opacity-100 ">
                            Title post</h1>
                        <p
                            class=" font-sm font-light duration-300 opacity-0 transition-opacity group-hover:opacity-100">
                            Author</p>
                    </div>

                </div>
                <a href="" class="">
                    <img class="mb-4 rounded-lg    " src=" https://source.unsplash.com/random/4">

                </a>

            </div>
            <div class="relative group transition-transform  ">
                <div
                    class="absolute inset-0 rounded-3xl  bg-gradient-to-b  to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                </div>
                <div
                    class=" absolute inset-0 p-8 text-white flex flex-col  translate-y-6  items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                    <div class="relative">
                        <a class=" absolute inset-0" href=" "></a>
                        <h1
                            class=" text-3xl font-bold mb-3 duration-300 opacity-0 transition-opacity group-hover:opacity-100 ">
                            Title post</h1>
                        <p
                            class=" font-sm font-light duration-300 opacity-0 transition-opacity group-hover:opacity-100">
                            Author</p>
                    </div>

                </div>
                <a href="" class="">
                    <img class="mb-4 rounded-lg    " src=" https://source.unsplash.com/random/5">

                </a>

            </div>
            <div class="relative group transition-transform  ">
                <div
                    class="absolute inset-0 rounded-3xl  bg-gradient-to-b  to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                </div>
                <div
                    class=" absolute inset-0 p-8 text-white flex flex-col  translate-y-6  items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                    <div class="relative">
                        <a class=" absolute inset-0" href=" "></a>
                        <h1
                            class=" text-3xl font-bold mb-3 duration-300 opacity-0 transition-opacity group-hover:opacity-100 ">
                            Title post</h1>
                        <p
                            class=" font-sm font-light duration-300 opacity-0 transition-opacity group-hover:opacity-100">
                            Author</p>
                    </div>

                </div>
                <a href="" class="">
                    <img class="mb-4 rounded-lg    " src=" https://source.unsplash.com/random/6">

                </a>

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
