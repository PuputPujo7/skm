{{-- <div>
    <div class="bg-[url('https://tailwindui.com/img/beams-home@95.jpg')]"> --}}
<section id="hero" class="hero d-flex align-items-center mb-3">
    <div class="max-w-4xl flex items-center h-full lg:h-screen flex-wrap mx-auto my-48 lg:my-0 mb-3">
        <div id="profile" class="bg-white shadow border-0 rounded mb-3">
            @if ($lastReview)
                <section class="overflow-hidden bg-transparent py-12 md:py-20 lg:py-24">
                    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">


                        <div class="relative">
                            <blockquote class="mt-10">
                                <div class="mx-auto max-w-3xl text-center text-2xl font-medium leading-9 text-gray-900">
                                    <p>&ldquo;{{ $lastReview->review }}&rdquo;</p>
                                </div>
                                <footer class="mt-8">
                                    <div class="md:flex md:items-center md:justify-center">

                                        <div class="mt-3 text-center md:mt-0 md:flex md:items-center">
                                            <div class="text-base font-medium text-gray-900">
                                                {{ $lastReview->nama_perusahaan }}</div>

                                            <svg class="mx-1 hidden h-5 w-5 text-indigo-600 md:block"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M11 0h3L9 20H6l5-20z" />
                                            </svg>

                                            <div class="text-base font-medium text-gray-500">{{ $lastReview->sektor }}
                                            </div>
                                        </div>
                                    </div>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </section>
            @endif
            <!--
            This example requires some changes to your config:

            ```
            // tailwind.config.js
            module.exports = {
                // ...
                plugins: [
                // ...
                require('@tailwindcss/forms'),
                ],
            }
            ```
            -->
            <div class="overflow-hidden bg-transparent py-16 px-4 sm:px-6 lg:px-8 lg:py-12">
                <div class="relative mx-auto max-w-4xl">

                    <div class="text-center mt-3">
                        <h2 class="text-dark mb-5 text-3xl font-bold tracking-tight sm:text-4xl">Form Survey Kepuasan
                            Masyarakat</h2>
                        {{-- <p class="mt-4 text-lg leading-6 text-gray-500">Nilai Layanan</p> --}}
                    </div>
                    <div class="mt-12">
                        <form wire:submit.prevent="submit">
                            <dl class=" divide-gray-200">
                                {{-- <div class="pt-6 pb-8 grid-cols-12 md:grid md:grid-cols-12 md:gap-8"> --}}
                                @foreach ($ratings as $rating)
                                    <dt class="ext-dark font-weight-bold">
                                        {{ $rating->pertanyaan->pertanyaan }}
                                    </dt>

                                    <dd class="mt-2 md:col-span-7 md:mt-0">
                                        <div x-data="{
                                            rating: 0,
                                            hoverRating: 0,
                                            ratings: {{ json_encode($rating->answer, true) }},
                                            rate(amount) {
                                                if (this.rating == amount) {
                                                    this.rating = 0;
                                                } else this.rating = amount;
                                            },
                                        
                                            currentLabel() {
                                                let r = this.rating;
                                                if (this.hoverRating != this.rating) r = this.hoverRating;
                                                let i = this.ratings.findIndex(e => e.amount == r);
                                                if (i >= 0) { return this.ratings[i].label; } else { return '' };
                                            }
                                        }"
                                            class="flex flex-col items-center justify-center rounded bg-transparent mx-auto">
                                            <div wire:key="star{{ $loop->index + 1 }}"
                                                wire:model="rating.{{ $loop->index }}"
                                                class="flex space-x-0 bg-transparent">
                                                <template x-for="(star, index) in ratings" :key="index">
                                                    <div @click="$dispatch('input', star.amount); rate(star.amount)"
                                                        @mouseover="hoverRating = star.amount"
                                                        @mouseleave="hoverRating = rating" aria-hidden="true"
                                                        :title="star.label"
                                                        class="rounded-sm text-gray-400 fill-current focus:outline-none focus:shadow-outline p-1 w-12 m-0 cursor-pointer"
                                                        :class="{ 'text-gray-600': hoverRating >= star
                                                            .amount, 'text-yellow-400': rating >= star.amount &&
                                                                hoverRating >= star.amount }">
                                                        <svg class="w-15 transition duration-150"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor">
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                        </svg>
                                                    </div>

                                                </template>
                                            </div>
                                            <div class="p-2">
                                                <template x-if="rating || hoverRating">
                                                    <p x-text="currentLabel()"></p>
                                                </template>
                                                <template x-if="!rating && !hoverRating">
                                                    <p>Please Rate!</p>
                                                </template>
                                            </div>
                                        </div>
                                    </dd>
                                @endforeach
                                <div class="sm:col-span-12">
                                    <label for="review" class="block text-sm font-medium text-gray-700">Review</label>
                                    <div class="mt-1 mb-3">
                                        <textarea wire:model="review" id="review" name="review" rows="4"
                                            class="border border-blue-300 block w-full rounded-md border-gray-300 py-3 px-4 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"></textarea>
                                    </div>
                                </div>
                                {{-- </div> --}}

                                <!-- More pertanyaans... -->
                            </dl>
                            {{-- {{ $this->form }} --}}
                            <div class="sm:col-span-2">
                                <button type="submit"
                                    class="inline-flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Submit</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>



        </div>
        <!-- Pin to top right corner -->
        <div class="absolute top-0 right-0 h-12 w-18 p-4" style="position: fixed;">
            <button class="js-change-theme focus:outline-none">🌙</button>
        </div>
    </div>
</section>
