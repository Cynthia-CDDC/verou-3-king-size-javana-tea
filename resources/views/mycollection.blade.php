@extends('layouts.layout')

@section('content')
    <main class="py-5 flex flex-col">
        @foreach ($collections as $collection)
            <section class="flex justify-start w-4/5 mx-auto">
                <h1>
                    {{ $collection->type }}
                </h1>
            </section>
        @endforeach
    </main>
@endsection
