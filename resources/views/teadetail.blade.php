@extends('layouts.layout')

@section('content')
    <main class="py-5 flex justify-center">
        <section class="flex justify-center w-4/5">
            <div class="order-2 mx-5 w-3/5">
                <h1 class="text-red font-bold">{{ $tea->name }}</h1>
                <p><i>{{ $tea->type }}</i></p>
                <p class="py-4">{{ $tea->ingredients }}</p>
                <p class="text-amber-600">&euro; {{ $tea->price }}</p>
                <ul>
                    @foreach ($tea->teasCharacteristics as $characteristic)
                        <li>{{ $characteristic->name }}</li>
                    @endforeach
                </ul>
            </div>
            <div>
                <img src="{{ asset('images/' . $tea->image) }}" alt="Picture of tea" class="w-72 h-72 order-1">
            </div>
        </section>
    </main>
@endsection
