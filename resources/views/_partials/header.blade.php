<header class="h-24 bg-orange-800 flex sm:justify-between items-center">
    <div class="p-4 flex flex-col items-center">
        <a href="{{ route('home') }}">
            <img src="/images/hot-tea-icons-download-free-png-and-vector-icons-unlimited-393433.png" alt="Tea leaves"
                class="h-16 w-16">
            <span class="text-leafgreen">Tea Leaf</span>
        </a>
    </div>
    <nav class="flex">
        <ul class="flex sm:mx-6 gap-3 text-neutral-50 font-bold">
            <li>
                <a href="{{ route('home') }}"
                    class="relative hover:text-emerald-600 after:hover:top-6 after:hover:left-1/2 after:hover:absolute after:hover:rounded-full after:hover:w-2 after:hover:h-2 after:hover:bg-emerald-600">Home</a>
            </li>
            <li>
                <a href="{{ route('mycollection') }}"
                    class="relative hover:text-emerald-600 after:hover:top-6 after:hover:left-1/2 after:hover:absolute after:hover:rounded-full after:hover:w-2 after:hover:h-2 after:hover:bg-emerald-600">My
                    Collection</a>
            </li>
            @guest
                <li>
                    <a href="{{ route('login') }}"
                        class="relative hover:text-emerald-600 after:hover:top-6 after:hover:left-1/2 after:hover:absolute after:hover:rounded-full after:hover:w-2 after:hover:h-2 after:hover:bg-emerald-600">Log
                        In</a>
                </li>
                <li>
                    <a href="{{ route('register') }}"
                        class="relative hover:text-emerald-600 after:hover:top-6 after:hover:left-1/2 after:hover:absolute after:hover:rounded-full after:hover:w-2 after:hover:h-2 after:hover:bg-emerald-600 border-l-2 pl-3">Register
                    </a>
                </li>
            @endguest
            @auth
                <nav x-data="{ open: false }">
                    <!-- Settings Dropdown -->
                    <div class="sm:flex sm:items-center">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button
                                    class="flex items-center font-bold text-neutral-50 hover:text-emerald-600 hover:border-neutral-300 focus:outline-none focus:text-neutral-50 focus:border-neutral-200 transition duration-150 ease-in-out">
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
                    <!-- Responsive Navigation Menu -->
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

                                    <x-responsive-nav-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                                                                                                                    this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-responsive-nav-link>
                                </form>
                            </div>
                        </div>
                    </div>
                </nav>
            @endauth
        </ul>
    </nav>
</header>
