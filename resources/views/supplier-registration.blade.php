<x-guest-layout>

    <section class="">
        <div class="relative overflow-hidden bg-cover bg-no-repeat bg-center">
            <div class="bg-gradient-to-b from-[#6DCFF6]/75 to-transparent" style="height: 100vh; width: 100vw; ">
            </div>
            <div class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed container mx-auto"
                x-data="visibility" x-ref="element" @scroll.window="checkVisibility()" x-init="$nextTick(() => isTextVisible = true)">
                <div class="flex h-full items-center justify-evenly p text-white cursor-default gap-12  mx-auto ">
                    <div class="relative text-center" x-show="isTextVisible"
                        x-transition:enter="transition ease-out duration-700 delay-500"
                        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                        <div class="text-white">
                            <h2 class=" font-semibold text-4xl mb-4">Come to Supplier, and Let's Get It Done.
                            </h2>
                            <h4 class=" font-semibold text-xl mb-6">Help people. Earn Money.</h4>
                            <a class="inline-block px-7 py-3 mb-1 font-bold bg-[#82CA9C] hover:bg-[#82CA9C]/75 text-white text-sm leading-snug  rounded  hover:bg-opacity-75 focus:outline-none  focus:ring-0 transition duration-150 ease-in-out"
                                href=" " role="button" data-mdb-ripple="true"
                                data-mdb-ripple-color="light">Become a Supplier</a>
                        </div>
                        <div class="flex w-full h-full items-left justify-left gap-8">



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
