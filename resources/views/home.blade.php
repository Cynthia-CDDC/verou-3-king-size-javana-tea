@extends('layouts.layout')

@section('content')
    <div class="flex p-5">
        <aside class="w-1/5">
            <ul>
                @foreach ($characteristics as $characteristic)
                    <li>
                        <input type="checkbox" id="{{ $characteristic->name }}" name="{{ $characteristic->name }}">
                        <label for="{{ $characteristic->name }}">{{ $characteristic->name }}</label>
                    </li>
                @endforeach
            </ul>
        </aside>
        <main class="w-4/5">
            <section class="flex flex-wrap justify-between gap-y-5">
                @foreach ($teas as $tea)
                    <article>
                        <div class="overflow-hidden">
                            <a href="{{ '/details' }}/{{ $tea->id }}">
                                <img src="{{ asset('images/' . $tea->image) }}" alt="photo natural rooibos"
                                    class="h-72 w-72 hover:scale-105 transition-all ease-in-out delay-150 duration-500" />
                            </a>
                        </div>
                        <h2 class="text-red font-bold">
                            {{ $tea->name }}
                        </h2>
                        <div class="flex justify-between items-center">
                            <span class="text-amber-600">&euro; {{ $tea->price }}</span>
                            <a href="{{ '/details' }}/{{ $tea->id }}">
                                <x-ri-arrow-right-s-line
                                    class="h-7 w-7 text-green hover:cursor-pointer hover:translate-x-1" />
                            </a>
                        </div>
                    </article>
                @endforeach
            </section>
        </main>
    </div>
@endsection
