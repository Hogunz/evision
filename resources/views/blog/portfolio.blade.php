<x-guest-layout>

    <x-category></x-category>
    <div class="container mx-auto p-8">
        <div class="text-center font-extrabold">ItsMeCJ's Portfolio</div>
        <div x-data="{ images: 5 }" class="p-8 mb-4">
            <div class="columns-5">
                <template x-for="i in images" :key="i">

                    <img class="mb-4 rounded-lg w-full aspect-auto" :src="'https://source.unsplash.com/random/' + i" />

            </div>
            </template>
            <template x-if="images < 10">
                <template x-for="i in 5" :key="i">

                    <img class="mb-4 rounded-lg w-full aspect-auto" x-show="i <= (10 - images)"
                        :src="'https://source.unsplash.com/random/' + (images + i)" />


                </template>
            </template>
        </div>
    </div>

    </div>
</x-guest-layout>
