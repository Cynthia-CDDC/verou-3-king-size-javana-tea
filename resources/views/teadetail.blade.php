@extends('layouts.layout')

@section('content')
    <main class="flex flex-col justify-center items-center">
        @if (session()->has('success'))
            <div class="bg-emerald-600 text-neutral-50 p-5 w-full my-3 text-center">
                {{ session()->get('success') }}
            </div>
        @endif
        @if (session()->has('error'))
            <div class="bg-red text-neutral-50 p-5 w-full my-3 text-center">
                {{ session()->get('error') }}
            </div>
        @endif
        <section class="flex flex-col sm:flex-row justify-center w-4/5 py-5">
            <div class="order-2 sm:mx-5 sm:w-3/5">
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
                <img src="{{ asset('images/' . $tea->image) }}" alt="A photo of {{ $tea->name }} tea."
                    class="w-72 h-72 order-1">
                <div class="py flex gap-x-1">
                    @foreach ($collections as $collection)
                        <a href="{{ route('saveCollectionType', ['id' => $tea->id, 'collection_id' => $collection->id]) }}"
                            class="bg-emerald-600 text-neutral-50 rounded-md hover:cursor-pointer mt-2 px-2 hover:bg-emerald-700">
                            {{ $collection->type }}
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
