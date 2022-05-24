@extends('layouts.layout')

@section('content')
    <section class="w-4/5 mx-auto flex flex-row flex-wrap justify-between gap-12">
        @foreach ($teas as $tea)
            <article>
                <div>
                    <img src="{{ asset('images/' . $tea->image) }}" alt="photo natural rooibos" class="h-72 w-72" />
                </div>
                <h2 class="text-red font-bold">
                    {{ $tea->name }}
                </h2>
                <span>&euro; {{ $tea->price }}</span>
            </article>
        @endforeach
    </section>
@endsection
