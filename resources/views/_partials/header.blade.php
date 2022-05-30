<header class="h-24 bg-orange-700 flex justify-between items-center">
    <div class="p-4 flex flex-col items-center">
        <img src="/images/hot-tea-icons-download-free-png-and-vector-icons-unlimited-393433.png" alt="Tea leaves"
            class="h-16 w-16">
        <span class="text-leafgreen">Tea Leaf</span>
    </div>
    <nav class="flex">
        <ul class="flex mx-5 gap-3 text-neutral-50 font-bold">
            <li>
                <a href="{{ route('home') }}"
                    class="relative after:hover:top-6 after:hover:left-1/2 after:hover:absolute after:hover:rounded-full after:hover:w-2 after:hover:h-2 after:hover:bg-neutral-50">Home</a>
            </li>
            <li>
                <a href="#"
                    class="relative after:hover:top-6 after:hover:left-1/2 after:hover:absolute after:hover:rounded-full after:hover:w-2 after:hover:h-2 after:hover:bg-neutral-50">My
                    Collection</a>
            </li>
            <li>
                <a href="{{ route('login') }}"
                    class="relative after:hover:top-6 after:hover:left-1/2 after:hover:absolute after:hover:rounded-full after:hover:w-2 after:hover:h-2 after:hover:bg-neutral-50">Log
                    In</a>
            </li>
        </ul>
    </nav>
</header>
