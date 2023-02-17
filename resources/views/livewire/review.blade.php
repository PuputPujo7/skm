<div>
    <div class="bg-white">
        <div
            class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-12 lg:gap-x-8 lg:py-32 lg:px-8">
            <div class="lg:col-span-4">
                <h2 class="text-2xl font-bold tracking-tight text-gray-900">Reviews Pengguna Layanan</h2>

                <div class="mt-3 flex items-center">
                    <div>
                        <div class="flex items-center">
                                <!--
                                Heroicon name: mini/star

                                Active: "text-yellow-400", Default: "text-gray-300"
                                -->
                            @if ($stars->avg_star > 1)
                                <svg class="flex-shrink-0 h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>
                            @else
                                <svg class="flex-shrink-0 h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>
                            @endif
                            @if ($stars->avg_star > 2)
                                <svg class="flex-shrink-0 h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>
                            @else
                                <svg class="flex-shrink-0 h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>
                            @endif
                            @if ($stars->avg_star > 3)
                                <svg class="flex-shrink-0 h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>
                            @else
                                <svg class="flex-shrink-0 h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>
                            @endif
                            @if ($stars->avg_star > 4)
                                <svg class="flex-shrink-0 h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>
                            @else
                                <svg class="flex-shrink-0 h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>
                            @endif
                            @if ($stars->avg_star == 5)
                                <svg class="flex-shrink-0 h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>
                            @else
                                <svg class="flex-shrink-0 h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>
                            @endif


                        </div>
                        <p class="sr-only">{{ $stars->avg_star }} out of 5 stars</p>
                    </div>
                    <p class="ml-2 text-sm text-gray-900">Based on {{ $stars->count_layanan }} @if ($stars->count_layanan == 1)
                            review
                        @else
                            reviews
                        @endif
                    </p>
                </div>

                @if ($stars->count_layanan != 0)
                    <div class="mt-6">
                        <h3 class="sr-only">Review data</h3>

                        <dl class="space-y-3">
                            <div class="flex items-center text-sm">
                                <dt class="flex flex-1 items-center">
                                    <p class="w-3 font-medium text-gray-900">5<span class="sr-only"> star reviews</span>
                                    </p>
                                    <div aria-hidden="true" class="ml-1 flex flex-1 items-center">
                                        <!-- Heroicon name: mini/star -->
                                        <svg class="flex-shrink-0 h-5 w-5 text-yellow-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd" />
                                        </svg>

                                        <div class="relative ml-3 flex-1">
                                            <div class="h-3 rounded-full border border-gray-200 bg-gray-100"></div>

                                            <div style="width: calc({{ $stars->star5 }} / {{ $stars->count_layanan }} * 100%)"
                                                class="absolute inset-y-0 rounded-full border border-yellow-400 bg-yellow-400">
                                            </div>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="ml-3 w-10 text-right text-sm tabular-nums text-gray-900">
                                    {{ ($stars->star5 / $stars->count_layanan) * 100 }} %</dd>
                            </div>

                            <div class="flex items-center text-sm">
                                <dt class="flex flex-1 items-center">
                                    <p class="w-3 font-medium text-gray-900">4<span class="sr-only"> star
                                            reviews</span></p>
                                    <div aria-hidden="true" class="ml-1 flex flex-1 items-center">
                                        <!-- Heroicon name: mini/star -->
                                        <svg class="flex-shrink-0 h-5 w-5 text-yellow-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd" />
                                        </svg>

                                        <div class="relative ml-3 flex-1">
                                            <div class="h-3 rounded-full border border-gray-200 bg-gray-100"></div>

                                            <div style="width: calc({{ $stars->star4 }} / {{ $stars->count_layanan }} * 100%)"
                                                class="absolute inset-y-0 rounded-full border border-yellow-400 bg-yellow-400">
                                            </div>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="ml-3 w-10 text-right text-sm tabular-nums text-gray-900">
                                    {{ ($stars->star4 / $stars->count_layanan) * 100 }} %</dd>
                            </div>

                            <div class="flex items-center text-sm">
                                <dt class="flex flex-1 items-center">
                                    <p class="w-3 font-medium text-gray-900">3<span class="sr-only"> star
                                            reviews</span></p>
                                    <div aria-hidden="true" class="ml-1 flex flex-1 items-center">
                                        <!-- Heroicon name: mini/star -->
                                        <svg class="flex-shrink-0 h-5 w-5 text-yellow-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd" />
                                        </svg>

                                        <div class="relative ml-3 flex-1">
                                            <div class="h-3 rounded-full border border-gray-200 bg-gray-100"></div>

                                            <div style="width: calc({{ $stars->star3 }} / {{ $stars->count_layanan }} * 100%)"
                                                class="absolute inset-y-0 rounded-full border border-yellow-400 bg-yellow-400">
                                            </div>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="ml-3 w-10 text-right text-sm tabular-nums text-gray-900">
                                    {{ ($stars->star3 / $stars->count_layanan) * 100 }} %</dd>
                            </div>

                            <div class="flex items-center text-sm">
                                <dt class="flex flex-1 items-center">
                                    <p class="w-3 font-medium text-gray-900">2<span class="sr-only"> star
                                            reviews</span></p>
                                    <div aria-hidden="true" class="ml-1 flex flex-1 items-center">
                                        <!-- Heroicon name: mini/star -->
                                        <svg class="flex-shrink-0 h-5 w-5 text-yellow-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd" />
                                        </svg>

                                        <div class="relative ml-3 flex-1">
                                            <div class="h-3 rounded-full border border-gray-200 bg-gray-100"></div>

                                            <div style="width: calc({{ $stars->star2 }} / {{ $stars->count_layanan }} * 100%)"
                                                class="absolute inset-y-0 rounded-full border border-yellow-400 bg-yellow-400">
                                            </div>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="ml-3 w-10 text-right text-sm tabular-nums text-gray-900">
                                    {{ ($stars->star2 / $stars->count_layanan) * 100 }} %</dd>
                            </div>

                            <div class="flex items-center text-sm">
                                <dt class="flex flex-1 items-center">
                                    <p class="w-3 font-medium text-gray-900">1<span class="sr-only"> star
                                            reviews</span></p>
                                    <div aria-hidden="true" class="ml-1 flex flex-1 items-center">
                                        <!-- Heroicon name: mini/star -->
                                        <svg class="flex-shrink-0 h-5 w-5 text-yellow-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd" />
                                        </svg>

                                        <div class="relative ml-3 flex-1">
                                            <div class="h-3 rounded-full border border-gray-200 bg-gray-100"></div>

                                            <div style="width: calc({{ $stars->star1 }} / {{ $stars->count_layanan }} * 100%)"
                                                class="absolute inset-y-0 rounded-full border border-yellow-400 bg-yellow-400">
                                            </div>
                                        </div>
                                    </div>
                                </dt>
                                <dd class="ml-3 w-10 text-right text-sm tabular-nums text-gray-900">
                                    {{ ($stars->star1 / $stars->count_layanan) * 100 }} %</dd>
                            </div>
                        </dl>
                    </div>
                @endif

            </div>

            <div class="mt-16 lg:col-span-7 lg:col-start-6 lg:mt-0">
                <h3 class="sr-only">Recent reviews</h3>

                <div class="flow-root">
                    <div class="divide-y divide-gray-200">
                        @if ($reviews)
                            @foreach ($reviews as $review)
                                <div class="py-12">
                                    <div class="flex items-center">
                                        <div class="ml-0">
                                            <h4 class="text-sm font-bold text-gray-900">{{ $review->nama_perusahaan }}
                                            </h4>
                                            <div class="mt-1 flex items-center">

                                                @if ($review->review_star > 1)
                                                    <svg class="flex-shrink-0 h-5 w-5 text-yellow-400"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                @else
                                                    <svg class="flex-shrink-0 h-5 w-5 text-gray-300"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                @endif
                                                @if ($review->review_star > 2)
                                                    <svg class="flex-shrink-0 h-5 w-5 text-yellow-400"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                @else
                                                    <svg class="flex-shrink-0 h-5 w-5 text-gray-300"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                @endif
                                                @if ($review->review_star > 3)
                                                    <svg class="flex-shrink-0 h-5 w-5 text-yellow-400"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                @else
                                                    <svg class="flex-shrink-0 h-5 w-5 text-gray-300"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                @endif
                                                @if ($review->review_star > 4)
                                                    <svg class="flex-shrink-0 h-5 w-5 text-yellow-400"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                @else
                                                    <svg class="flex-shrink-0 h-5 w-5 text-gray-300"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                @endif
                                                @if ($review->review_star == 5)
                                                    <svg class="flex-shrink-0 h-5 w-5 text-yellow-400"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                @else
                                                    <svg class="flex-shrink-0 h-5 w-5 text-gray-300"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                @endif
                                            </div>
                                            <p class="sr-only">5 out of 5 stars</p>
                                        </div>
                                    </div>

                                    <div class="mt-4 space-y-6 text-base italic text-gray-600">
                                        <p>
                                            {{ $review->review }}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
