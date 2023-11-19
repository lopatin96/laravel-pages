<div class="w-full md:w-1/2 lg:w-1/3 p-3">
    <div class="p-6 h-full bg-white bg-opacity-40 border rounded-2xl">
        <div class="flex flex-col justify-between h-full">
            <div class="mb-5 block">
                <div class="flex flex-wrap mb-4 -m-2">
                    <div class="w-auto p-2">
                        <img src="{{ $photo }}" alt="">
                    </div>
                    <div class="w-auto p-2">
                        <h3 class="font-semibold leading-normal">
                            {{ __($author) }}
                        </h3>
                        <p class="text-gray-500 uppercase">
                            {{ $link }}
                        </p>
                    </div>
                </div>
                <p class="text-lg font-medium">
                    {{ __($text) }}
                </p>
            </div>
            <div class="block">
                <p class="text-sm text-gray-500 font-medium">
                    {{ $time }}
                </p>
            </div>
        </div>
    </div>
</div>