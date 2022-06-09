<header class="h-24 bg-orange-800 flex justify-between items-center">
    <div class="p-4 flex flex-col items-center">
        <img src="/images/hot-tea-icons-download-free-png-and-vector-icons-unlimited-393433.png" alt="Tea leaves"
            class="h-16 w-16">
        <span class="text-leafgreen">Tea Leaf</span>
    </div>
    <nav class="flex">
        <ul class="flex mx-6 gap-3 text-neutral-50 font-bold">
            <li>
                <a href="{{ route('home') }}"
                    class="relative after:hover:top-6 after:hover:left-1/2 after:hover:absolute after:hover:rounded-full after:hover:w-2 after:hover:h-2 after:hover:bg-neutral-50">Home</a>
            </li>
            <li>
                <a href="{{ route('mycollection') }}"
                    class="relative after:hover:top-6 after:hover:left-1/2 after:hover:absolute after:hover:rounded-full after:hover:w-2 after:hover:h-2 after:hover:bg-neutral-50">My
                    Collection</a>
            </li>
            @guest
                <li>
                    <a href="{{ route('login') }}"
                        class="relative after:hover:top-6 after:hover:left-1/2 after:hover:absolute after:hover:rounded-full after:hover:w-2 after:hover:h-2 after:hover:bg-neutral-50">Log
                        In</a>
                </li>
                <li>
                    <a href="{{ route('register') }}"
                        class="relative after:hover:top-6 after:hover:left-1/2 after:hover:absolute after:hover:rounded-full after:hover:w-2 after:hover:h-2 after:hover:bg-neutral-50 border-l-2 pl-3">Register
                    </a>
                </li>
            @endguest
            @auth
                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="flex items-center font-bold text-neutral-50 hover:text-neutral-100 hover:border-neutral-300 focus:outline-none focus:text-neutral-50 focus:border-neutral-200 transition duration-150 ease-in-out">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                                                                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                {{-- <!-- Responsive Navigation Menu -->
                <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-neutral-200">
                        <div class="px-4">
                            <div class="font-medium text-base text-neutral-800">{{ Auth::user()->name }}</div>
                            <div class="font-medium text-sm text-neutral-500">{{ Auth::user()->email }}</div>
                        </div>
                        <div class="mt-3 space-y-1">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form>
                        </div>
                    </div>
                </div> --}}
            @endauth
        </ul>
    </nav>
</header>
