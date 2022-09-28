<div class="flex flex-col w-64 gap-4">
    {{-- logo twitter --}}
    <div class="py-7">
        <img src="assets/images/twitter-logo.svg" alt="" width="40">
    </div>
    {{-- links --}}
    <ul class="flex flex-col gap-6">
        <li class="px-2 py-2 antialiased cursor-pointer hover:rounded-lg hover:bg-gray-200 md:text-base xl:text-2xl">
            <i class="fa-solid fa-house-chimney"></i>
            <span class="ml-2">Página inicial</span>
        </li>
        <li class="px-2 py-2 antialiased cursor-pointer hover:rounded-lg hover:bg-gray-200 md:text-base xl:text-2xl">
            <i class="fa-solid fa-hashtag"></i>
            <span class="ml-2">Explorar</span>
        </li>
        <li class="px-2 py-2 antialiased cursor-pointer hover:rounded-lg hover:bg-gray-200 md:text-base xl:text-2xl">
            <i class="fa-regular fa-bell"></i>
            <span class="ml-2">Notificações</span>

        </li>
        <li class="px-2 py-2 antialiased cursor-pointer hover:rounded-lg hover:bg-gray-200 md:text-base xl:text-2xl">
            <i class="fa-regular fa-envelope"></i>
            <span class="ml-2">Mensagens</span>
        </li>
        <li class="px-2 py-2 antialiased cursor-pointer hover:rounded-lg hover:bg-gray-200 md:text-base xl:text-2xl">
            <i class="fa-regular fa-bookmark"></i>
            <span class="ml-2">Itens Salvos</span>

        </li>
        <li class="px-2 py-2 antialiased cursor-pointer hover:rounded-lg hover:bg-gray-200 md:text-base xl:text-2xl">
            <i class="fa-regular fa-file-lines"></i>
            <span class="ml-2">Listas</span>
        </li>
        <li class="px-2 py-2 antialiased cursor-pointer hover:rounded-lg hover:bg-gray-200 md:text-base xl:text-2xl">
            <i class="fa-regular fa-user"></i>
            <span class="ml-2">Perfil</span>
        </li>
        <li class="px-2 py-2 antialiased cursor-pointer hover:rounded-lg hover:bg-gray-200 md:text-base xl:text-2xl">
            <i class="fa-solid fa-ellipsis"></i>
            <span class="ml-2">Mais</span>
        </li>
    </ul>
    <div class="flex gap-3 align-middle">
        <span>{{ Auth::user()->name}}</span>
        <a href="{{ route('logout') }}" 
            class="text-center text-white rounded-full cursor-pointer w-14 bg-rose-500 hover:bg-rose-700">Sair</a>
    </div>
</div>
