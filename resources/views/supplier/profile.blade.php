<x-guest-layout>
    <x-category></x-category>

    <section class="container mx-auto p-8">
        <div class="flex flex-col">
            <div class="text-2xl mb-2 font-bold">I will help you ensure that all aspects of the <br>event run smoothly
            </div>

        </div>
    </section>

    <section class="container mx-auto p-8">
        <div class="flex flex-row p-4 gap-4 items-center">
            <div class="">
                <img class="relative z-auto top-0 h-8 w-8 rounded-full ring-2 ring-white object-cover" src="img/cj.jpg"
                    alt="">
            </div>
            <div class="inset-x-0 bottom-0 text-left text-sm font-bold hover:underline cursor-pointer ">
                <a href="" class="href">ItsMeCJ</a>
            </div>

            <div class="">
                <ul class="flex justify-left mb-0">
                    <li>
                        @for ($j = 0; $j < 5; $j++)
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="w-4 text-yellow-300" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                    </li>
                    @endfor
                </ul>
            </div>
        </div>
        <hr>
    </section>


    <section>
        <div class="container mx-auto grid grid-cols-2 gap-4 p-8">
            <div class="">
                <div class="mb-12">
                    <div class="text-2xl mb-2 font-bold">About This Supplier </div>
                    <div>
                        <p class="text-xl">I will help you ensure that all aspects of the <br>event run smoothly
                            and
                            meet the expectations of the client.</p>
                    </div>
                </div>
                <div class="">
                    <div class="text-2xl mb-2 font-bold">About This Supplier </div>
                    <div class="flex justify-left gap-4">
                        <div class="">
                            <img class="relative z-auto top-0 w-32 h-32  rounded-full ring-2 ring-white object-cover"
                                src="https://images.unsplash.com/photo-1555952517-2e8e729e0b44?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHBlcnNvbnxlbnwwfDF8MHx8&auto=format&fit=crop&w=500&q=60"
                                alt="">
                        </div>
                        <div class="flex flex-col mb-4">
                            <div class="inset-x-0 bottom-0 text-left text-sm font-bold hover:underline cursor-pointer ">
                                <a href="" class="href">ItsMeCJ</a>
                            </div>
                            <div class="">
                                <ul class="flex justify-left mb-0">
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
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container h-screen">
                <div class=" sticky top-8 right-0 h-1/2">

                    <div class="relative" x-data="showSlides()">
                        @for ($i = 0; $i < 5; $i++)
                            <div class="flex overflow-hidden ">
                                <img class="rounded-t-lg"
                                    src="https://images.unsplash.com/photo-1612201142855-7873bc1661b4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                    alt="">
                            </div>
                        @endfor

                        <!-- smaller images under description -->
                        <div class="flex">
                            @for ($i = 0; $i < 5; $i++)
                                <div>
                                    <img class=" h-24 opacity-50 hover:opacity-100 cursor-pointer"
                                        src="https://images.unsplash.com/photo-1612198791362-c996ceb686b1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80"
                                        alt="1">
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>




</x-guest-layout>
<script>
    //Carousel
    function showSlides() {
        return {
            arrayImages: [{
                    image: 'https://images.unsplash.com/photo-1504680177321-2e6a879aac86?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
                },
                {
                    image: 'https://images.unsplash.com/photo-1527529482837-4698179dc6ce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
                },
                {
                    image: 'https://images.unsplash.com/photo-1472653431158-6364773b2a56?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80',
                },
                {
                    image: 'https://images.unsplash.com/photo-1516997121675-4c2d1684aa3e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1472&q=80',
                },
                {
                    image: 'https://images.unsplash.com/photo-1507608869274-d3177c8bb4c7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
                },
            ],
            chunks: [],
            chunkSize: 1,
            currentChunk: 0,
            init() {
                for (let i = 0; i < this.arrayImages.length; i += this.chunkSize) {
                    this.chunks.push(this.arrayImages.slice(i, i + this.chunkSize));
                }
            },
            prev() {
                this.currentChunk--;
                if (this.currentChunk < 0)
                    this.currentChunk = this.chunks.length - 1;
            },
            next() {
                this.currentChunk++;
                if (this.currentChunk > this.chunks.length - 1)
                    this.currentChunk = 0;
            },
        };
    }
</script>
