<div class="flex flex-col mb-6">
    @foreach ($tweets as $key => $tweet)
        <div class="flex">
            <div class="flex gap-2 text-2xl align-middle">
                <i class="fa-regular fa-circle-user"></i>
                <span class="text-sm">
                    <b>{{ $tweet->user->name }}</b>
                    <em class="text-gray-600"> {{ '@' . $tweet->user->name }}</em>
                </span>
            </div>
        </div>
        <div class="flex flex-col">
            <div class="flex gap-2 pl-8 text-gray-600 text-md">
                {{ $tweet->description }}
            </div>
            <div class="flex justify-around pt-3">
                <span class="p-2 cursor-pointer hover:rounded-xl hover:bg-cyan-100">
                    <i class="text-gray-400 fa-regular fa-comment hover:text-sky-400"></i>
                    <span class="text-gray-400">0</span>
                </span>
                <span class="p-2 cursor-pointer hover:rounded-xl hover:bg-green-100">
                    <i class="text-gray-400 fa-solid fa-retweet hover:text-green-400"></i>
                    <span class="text-gray-400">{{ $tweet->retweets }}</span>
                </span>
                <span class="p-2 cursor-pointer hover:rounded-xl hover:bg-red-200">
                    <i class="text-gray-400 fa-regular fa-heart hover:text-red-600" wire:click='like'></i>
                    <span class="text-gray-400">{{ $tweet->likes }}</span>
                </span>
            </div>
        </div>
        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
    @endforeach
</div>
