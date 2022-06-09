@extends('layouts.layout')

@section('content')
    <main class="py-5 flex flex-col">
        
            <section class="flex justify-start w-4/5 mx-auto">
                <h1>
                   Favourites
                </h1>
                @foreach($favourites as $favourite)
                    {{$favourite->name}}
                    {{$favourite->price}}
                @endforeach
            </section>
            <section class="flex justify-start w-4/5 mx-auto">
                <h1>
                   Like
                </h1>
                @foreach($like as $like)
                    {{$like->name}}
                    {{$like->price}}
                @endforeach
            </section>
            <section class="flex justify-start w-4/5 mx-auto">
                <h1>
                   Dislike
                </h1>
                @foreach($dislike as $dislike)
                    {{$dislike->name}}
                    {{$dislike->price}}
                @endforeach
            </section>
            <section class="flex justify-start w-4/5 mx-auto">
                <h1>
                   Want to try
                </h1>
                @foreach($wantToTry as $try)
                    {{$try->name}}
                    {{$try->price}}
                @endforeach
            </section>
       
    </main>
@endsection
