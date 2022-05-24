@extends('layouts.layout')

@section('content')
    <section class="w-4/5 mx-auto">
        @foreach ($teas as $tea)
            <h2 class="text-red font-bold">
                {{ $tea->name }}
            </h2>
            <div>
                <img src="{{ asset('images/' . $tea->image) }}" alt="photo natural rooibos" height="100" width="120" />
            </div>
            <span>&euro; {{ $tea->price }}</span>
        @endforeach
    </section>
@endsection
