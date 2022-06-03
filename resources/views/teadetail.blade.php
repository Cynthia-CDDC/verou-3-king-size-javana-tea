@extends('layouts.layout')

@section('content')
    <main class="py-5 flex justify-center">
        <section class="flex justify-center w-4/5">
            <div class="order-2 mx-5 w-3/5">
                <h1 class="text-red font-bold">{{ $tea->name }}</h1>
                <p class="text-emerald-800">
                    Type:
                    <span class="text-black"><i>{{ $tea->type }}</i></span>
                </p>
                <ul class="flex">
                    <h2 class="text-emerald-800 pr-1">Characteristics:</h2>
                    @foreach ($tea->teasCharacteristics as $characteristic)
                        <li class="mr-2">{{ $characteristic->name }}</li>
                    @endforeach
                </ul>
                <p class="py-4">{{ $tea->ingredients }}</p>
                <p class="text-amber-600">&euro; {{ $tea->price }}</p>
            </div>
            <div>
                <img src="{{ asset('images/' . $tea->image) }}" alt="Picture of tea" class="w-72 h-72 order-1">
                <a href="{{ route('saveLike', ['id' => $tea->id]) }}"
                    class="bg-emerald-600 text-neutral-50 rounded-md hover:cursor-pointer mt-2 px-2">
                    Like
                </a>
            </div>
        </section>
    </main>
@endsection
