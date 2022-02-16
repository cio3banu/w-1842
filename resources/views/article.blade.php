<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}" >
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}" >
</head>
<body>
   <p>Pagina Article</p>
@foreach ($articles as $article)
    
    {{$article->title}}
    {{$article->description}}
    {{$article->content}}
    <br>
@endforeach 
</body>
</html>
