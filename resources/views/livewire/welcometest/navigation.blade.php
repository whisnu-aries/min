{{-- <nav class="-mx-3 flex flex-1 justify-end">
    @auth
        <a
            href="{{ url('/dashboard') }}"
            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
        >
            Dashboard
        </a>
    @else
        <a
            href="{{ route('login') }}"
            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
        >
            Log in
        </a>

        @if (Route::has('register'))
            <a
                href="{{ route('register') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
            >
                Register
            </a>
        @endif
    @endauth
</nav> --}}

<header class="py-2" x-data="{ open: false }">
    <nav class="bg-primary mx-auto flex items-center justify-between p-2 rounded-full" aria-label="Global">
        <div class="flex ml-5 lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="logo">
            </a>
        </div>
        <div class="flex mr-5 lg:hidden" x-on:click="open = ! open">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-zinc-300">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden gap-2 lg:flex lg:flex-1 lg:mr-10 lg:justify-end">
            {{-- <x-app.navigation.nav_link href="#service">Services</x-app.navigation.nav_link>
            <x-app.navigation.nav_link href="#project">Projects</x-app.navigation.nav_link>
            <x-app.navigation.nav_link href="#project">Contact Us</x-app.navigation.nav_link>
            <x-app.navigation.nav_link href="#contact">Get in Touch</x-app.navigation.nav_link> --}}
        </div>
    </nav>
    <div role="dialog" aria-modal="true" x-show="open">
        <div class="fixed inset-0 z-10"></div>
        <div
            class="fixed bg-primary inset-y-0 right-0 z-10 w-full overflow-y-auto px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                        alt="">
                </a>
                <button type="button" class="-m-2.5 rounded-md p-2.5 text-zinc-300" x-on:click="open = ! open">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        {{-- <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-accent hover:rounded-full">Services</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-accent hover:rounded-full">Products</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-accent hover:rounded-full">Contact Us</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-accent hover:rounded-full">Get in Touch</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
