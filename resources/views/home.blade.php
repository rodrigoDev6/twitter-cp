<x-layouts.app>
    <div class="grid w-screen grid-cols-3">
        {{-- sidebar menu --}}
        <div class="grid justify-center">
            <x-sidebar />
        </div>
        {{-- tweets --}}
        <div class="grid">
            <div class="container">
                <div class="flex py-2 max-w-max">
                    <span class="text-xl font-bold">Página Inicial</span>
                </div>
                {{-- tweets timeline --}}
                <livewire:tweetes.send-tweet />

                <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

                <livewire:tweetes.timeline />
                <livewire:tweetes.timeline />
                <livewire:tweetes.timeline />
            </div>
        </div>
        {{-- endTweets --}}

        <div class="grid">
            Pesquisa de tweets
        </div>
    </div>
</x-layouts.app>
