@extends('layouts.layout')

@section('content')
    <main class="py-5 flex flex-col">
        @foreach ($collections as $collection)
            <section class="flex justify-start w-4/5 mx-auto">
                <h1>
                    {{ $collection->type }}
                </h1>
            </section>
        @endforeach
    </main>
    @foreach ($teas as $tea)
    @if (auth()->check() && $tea->teasCollections->isNotEmpty())
    <section class="flex flex-wrap sm:justify-center lg:justify-end md:gap-10 p-2">
                    <article>
                        <div class="overflow-hidden">
                            <a href="{{ '/details' }}/{{ $tea->id }}">
                                <img src="{{ asset('images/' . $tea->image) }}" alt="photo natural rooibos"
                                    class="h-72 w-72 hover:scale-105 transition-all ease-in-out delay-150 duration-500" />
                            </a>
                        </div>
                        <div class="flex justify-between mt-2">
                            <h2 class="text-red font-bold">
                                {{ $tea->name }}
                            </h2>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-amber-600">&euro; {{ $tea->price }}</span>
                            <a href="{{ '/details' }}/{{ $tea->id }}">
                                <x-ri-arrow-right-s-line
                                    class="h-7 w-7 text-emerald-600 hover:cursor-pointer hover:translate-x-1" />
                            </a>
                        </div>
                    </article>
            </section>
    @endif
    @endforeach
@endsection
