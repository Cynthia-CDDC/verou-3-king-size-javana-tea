@extends('layouts.layout')

@section('content')
    <aside>
        <ul>
            <li>
                <label for="rooibos">rooibos</label>
                <input type="checkbox" id="rooibos" name="rooibos">
            </li>
        </ul>
    </aside>
    <main class="py-5 flex justify-center w-4/5 mx-auto">
        <section class="flex flex-row flex-wrap justify-between gap-12">
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
                            <x-ri-arrow-right-s-line class="h-7 w-7 text-green hover:cursor-pointer hover:translate-x-1" />
                        </a>
                    </div>
                </article>
            @endforeach
        </section>
    </main>
@endsection
