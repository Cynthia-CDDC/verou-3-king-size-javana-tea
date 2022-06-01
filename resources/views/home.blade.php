@extends('layouts.layout')

@section('content')
    <div class="flex p-5 justify-between">
        <aside class="w-1/6">
            <h2 class="pb-2 border-b border-orange-800 text-orange-800 font-bold">Characteristics</h2>
            <ul class="pt-2">
                @foreach ($characteristics as $characteristic)
                    <li class="flex items-center gap-3 hover:cursor-pointer">
                        <input type="checkbox" id="{{ $characteristic->name }}" name="{{ $characteristic->name }}"
                            class="hover:cursor-pointer">
                        <label for="{{ $characteristic->name }}"
                            class="hover:cursor-pointer">{{ $characteristic->name }}</label>
                    </li>
                @endforeach
            </ul>
        </aside>
        <main class="w-4/5">
            <section class="flex flex-wrap justify-end gap-10 p-2">
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
