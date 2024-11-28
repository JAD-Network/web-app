<nav class="relative z-50 py-5 border-b border-white border-opacity-10">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between">
            <a href="{{route('landing')}}">
                <h1 class="text-2xl text-white font-medium">JAD NETWORK</h1>
            </a>
            <div class="hidden lg:flex gap-2 p-1 px-3 rounded-full bg-white bg-opacity-10">
                <a href="#"
                   class="px-3 py-2 rounded-full text-white text-sm font-light hover:bg-white hover:bg-opacity-20 transition duration-200">Home</a><a
                    href="#"
                    class="px-3 py-2 rounded-full text-white text-sm font-light hover:bg-white hover:bg-opacity-20 transition duration-200">Features</a><a
                    href="#"
                    class="px-3 py-2 rounded-full text-white text-sm font-light hover:bg-white hover:bg-opacity-20 transition duration-200">Pricing</a><a
                    href="#"
                    class="px-3 py-2 rounded-full text-white text-sm font-light hover:bg-white hover:bg-opacity-20 transition duration-200">Docs</a><a
                    href="#"
                    class="px-3 py-2 rounded-full text-white text-sm font-light hover:bg-white hover:bg-opacity-20 transition duration-200">Telegram</a>
            </div>
            <a href="#"
               class="hidden lg:flex items-center gap-2 text-white hover:text-blue-800 transition duration-200">
                <span class="text-sm font-medium">Sign in</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                    <path d="M5.5 3L10.5 8L5.5 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                </svg>
            </a>
            <button class="lg:hidden" x-on:click="mobileNavOpen = !mobileNavOpen">
                <svg width="51" height="51" viewbox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="56" height="56" rx="28" fill="white"></rect>
                    <path d="M37 32H19M37 24H19" stroke="black" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                </svg>
            </button>
        </div>
    </div>
</nav>
