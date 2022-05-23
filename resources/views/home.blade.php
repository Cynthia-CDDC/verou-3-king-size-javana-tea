<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Javana Tea</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    @include('_partials.header')
    <main>
        @foreach ($teas as $tea)
            {{ $tea->name }} <br>
            {{ $tea->type }}
        @endforeach

    </main>
    @include('_partials.footer')
</body>

</html>
