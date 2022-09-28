<div class="flex">
    {{-- componentForSendTweet --}}
    <div class="flex gap-2">
        <div class="flex">
            <span class="text-2xl">
                <i class="fa-regular fa-circle-user"></i>

            </span>
        </div>
        <form>
            <div class="flex justify-start">
                <div class="flex flex-col">
                    <select name="" class="px-3 py-1 bg-white border-solid rounded-lg w-max text-sky-400"
                        wire:model='tweet.privacy'>
                        <option value="1">Qualquer pessoa</option>
                        <option value="2">Somente eu</option>
                    </select>

                    <textarea required name="text" rows="7" class="pt-3 text-xl bg-transparent outline-none" cols="50" wrap="soft"
                        maxlength="300" placeholder="O que está acontencendo ? " style="resize: none" wire:model='tweet.description'></textarea>

                    <div class="flex justify-between gap-3 py-3">
                        <div class="flex gap-3">
                            <span class="text-2xl cursor-pointer">
                                <i class="fa-regular fa-image"></i>
                            </span>

                            <span class="text-2xl cursor-pointer">
                                <i class="fa-regular fa-face-smile"></i>
                            </span>

                            <span class="text-2xl cursor-pointer">
                                <i class="fa-regular fa-calendar-days"></i>
                            </span>
                        </div>
                        <div class="flex">
                            <button type="button" wire:click='create'
                                class="px-4 py-2 text-white rounded-full bg-sky-400 hover:bg-sky-600">Tweetar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
