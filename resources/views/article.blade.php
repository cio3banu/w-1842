<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
<link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
<link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
</head>
<body>

<p>Pagina article</p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nr.</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Content</th>
      <th scope="col">Author</th>
      <th scope="col">Adăugat</th>
      <th scope="col">Modificat</th>
    </tr>
  </thead>
  <tbody>
          
@foreach ($articles as $article)
<tr>
<td scope="row">{{$article->id}}</td>
<td scope="row">{{$article->title}}</td>
<td scope="row">{{$article->description}}</td>
<td scope="row">{{$article->content}}</td>
<td scope="row">{{$article->author}}</td>
<td scope="row">{{$article->created_at}}</td>
<td scope="row">{{$article->updated_at}}</td>
</tr>
@endforeach
</tbody>
</table>
    
</body>
</html>