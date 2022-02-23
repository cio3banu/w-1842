<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
</head>
<body>
    <ul>
        <li><a href="/">Acasa</a></li>
        <li><a href="/about">Despre</a></li>
        <li><a href="/contacte">Contacte</a></li>
        <li><a href="/project">Proiecte</a></li>

    </ul>

<div class="container">

    @if (count($errors)>0)

    <div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach

    </ul>
    </div>

    @endif

        @yield('content')

      </div>

</body>
</html>
