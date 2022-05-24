@extends('layouts.layout')

@section('content')
    <section>
        @foreach ($teas as $tea)
            <h2>
                {{ $tea->name }}
            </h2>
            <p>
                {{ $tea->type }}
            </p>
            <div>
                <img src="{{ asset('images/' . $tea->image) }}" alt="photo natural rooibos" height="100" width="120" />
            </div>
        @endforeach
    </section>
@endsection
