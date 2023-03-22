<x-guest-layout>
    <section>
        <div class=" h-auto ">
            <div class="container mx-auto" style="">
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
        <div class="columns-2  md:columns-3 lg:columns-4 container mx-auto p-24" x-show="isTextVisible"
            x-transition:enter="transition ease-out duration-700 delay-500"
            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90">
            @for ($i = 0; $i < 8; $i++)
                <div class="">
                    <a href="/itsMeCJ/I-will-create" class="">
                        <img class="mb-4" src="https://source.unsplash.com/random/1">
                    </a>
                </div>
                <div class="border">
                    asdasd
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
