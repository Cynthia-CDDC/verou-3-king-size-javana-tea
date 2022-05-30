@extends('layouts.layout')

@section('content')
    <section class="flex justify-center w-4/5">
        <div class="order-2 mx-5 w-3/5">
            <h1 class="text-red font-bold">{{ $tea->name }}</h1>
            <p><i>{{ $tea->type }}</i></p>
            <p>{{ $tea->ingredients }}</p>
            <p>{{ $tea->price }}</p>
        </div>
        <div>
            <img src="{{ asset('images/' . $tea->image) }}" alt="Picture of tea" class="w-52 h-52 order-1">
        </div>
    </section>
@endsection
