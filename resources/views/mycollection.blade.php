@extends('layouts.layout')

@section('content')
    <main class="flex flex-col">
        <section class="flex flex-col items-center sm:items-start justify-start w-4/5 mx-auto">
            <h1 class="text-red-800 font-bold text-2xl mt-2">My Collection</h1>
            @guest
                <p>Please log in or register to see your collection!</p>
            @endguest
            @auth
                <p>Welcome to your collection, {{ auth()->user()->name }}!</p>
                <section class="flex flex-col justify-start py-5 border-b border-orange-300">
                    <h2 class="bg-emerald-600 text-neutral-50 rounded-md mb-2 px-2 w-max">
                        Favourites
                    </h2>
                    <div class="flex flex-col flex-wrap sm:flex-row sm:justify-start gap-8 sm:gap-5 md:gap-10">
                        @foreach ($favourites as $favourite)
                            <article class="w-max">
                                <div class="overflow-hidden">
                                    <a href="{{ route('details', ['id' => $favourite->id]) }}">
                                        <img src="{{ asset('images/' . $favourite->image) }}"
                                            alt="A photo of {{ $favourite->name }} tea."
                                            class="h-72 w-72 hover:scale-105 transition-all ease-in-out delay-150 duration-500" />
                                    </a>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <h2 class="text-red-800 font-bold">
                                        {{ $favourite->name }}
                                    </h2>
                                    <a href="{{ route('deleteFromCollection', ['id' => $favourite->id]) }}"
                                        class="bg-red-800 text-neutral-50 rounded-md px-2 hover:bg-red-700">Delete</a>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-amber-600">&euro; {{ $favourite->price }}</span>
                                    <a href="{{ route('details', ['id' => $favourite->id]) }}">
                                        <x-ri-arrow-right-s-line class="h-7 w-7 text-emerald-600 hover:translate-x-1" />
                                    </a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </section>
                <section class="flex flex-col justify-start py-5 border-b border-orange-300">
                    <h2 class="bg-emerald-600 text-neutral-50 rounded-md mb-2 px-2 w-max">
                        Like
                    </h2>
                    <div class="flex flex-col flex-wrap sm:flex-row sm:justify-start gap-8 sm:gap-5 md:gap-10">
                        @foreach ($like as $like)
                            <article class="w-max">
                                <div class="overflow-hidden">
                                    <a href="{{ route('details', ['id' => $like->id]) }}">
                                        <img src="{{ asset('images/' . $like->image) }}"
                                            alt="A photo of {{ $like->name }} tea."
                                            class="h-72 w-72 hover:scale-105 transition-all ease-in-out delay-150 duration-500" />
                                    </a>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <h2 class="text-red-800 font-bold">
                                        {{ $like->name }}
                                    </h2>
                                    <a href="{{ route('deleteFromCollection', ['id' => $like->id]) }}"
                                        class="bg-red-800 text-neutral-50 rounded-md px-2 hover:bg-red-700">Delete</a>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-amber-600">&euro; {{ $like->price }}</span>
                                    <a href="{{ route('details', ['id' => $like->id]) }}">
                                        <x-ri-arrow-right-s-line class="h-7 w-7 text-emerald-600 hover:translate-x-1" />
                                    </a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </section>
                <section class="flex flex-col justify-start py-5 border-b border-orange-300">
                    <h2 class="bg-emerald-600 text-neutral-50 rounded-md mb-2 px-2 w-max">
                        Dislike
                    </h2>
                    <div class="flex flex-col flex-wrap sm:flex-row sm:justify-start gap-8 sm:gap-5 md:gap-10">
                        @foreach ($dislike as $dislike)
                            <article class="w-max">
                                <div class="overflow-hidden">
                                    <a href="{{ route('details', ['id' => $dislike->id]) }}">
                                        <img src="{{ asset('images/' . $dislike->image) }}"
                                            alt="A photo of {{ $dislike->name }} tea."
                                            class="h-72 w-72 hover:scale-105 transition-all ease-in-out delay-150 duration-500" />
                                    </a>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <h2 class="text-red-800 font-bold">
                                        {{ $dislike->name }}
                                    </h2>
                                    <a href="{{ route('deleteFromCollection', ['id' => $dislike->id]) }}"
                                        class="bg-red-800 text-neutral-50 rounded-md px-2 hover:bg-red-700">Delete</a>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-amber-600">&euro; {{ $dislike->price }}</span>
                                    <a href="{{ route('details', ['id' => $dislike->id]) }}">
                                        <x-ri-arrow-right-s-line class="h-7 w-7 text-emerald-600 hover:translate-x-1" />
                                    </a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </section>
                <section class="flex flex-col justify-start py-5 border-b border-orange-300 mb-2">
                    <h2 class="bg-emerald-600 text-neutral-50 rounded-md mb-2 px-2 w-max">
                        Want to try
                    </h2>
                    <div class="flex flex-col flex-wrap sm:flex-row sm:justify-start gap-8 sm:gap-5 md:gap-10">
                        @foreach ($wantToTry as $wantToTry)
                            <article class="w-max">
                                <div class="overflow-hidden">
                                    <a href="{{ route('details', ['id' => $wantToTry->id]) }}">
                                        <img src="{{ asset('images/' . $wantToTry->image) }}"
                                            alt="A photo of {{ $wantToTry->name }} tea."
                                            class="h-72 w-72 hover:scale-105 transition-all ease-in-out delay-150 duration-500" />
                                    </a>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <h2 class="text-red-800 font-bold">
                                        {{ $wantToTry->name }}
                                    </h2>
                                    <a href="{{ route('deleteFromCollection', ['id' => $wantToTry->id]) }}"
                                        class="bg-red-800 text-neutral-50 rounded-md px-2 hover:bg-red-700">Delete</a>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-amber-600">&euro; {{ $wantToTry->price }}</span>
                                    <a href="{{ route('details', ['id' => $wantToTry->id]) }}">
                                        <x-ri-arrow-right-s-line class="h-7 w-7 text-emerald-600 hover:translate-x-1" />
                                    </a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </section>
            @endauth
        </section>
    </main>
@endsection
