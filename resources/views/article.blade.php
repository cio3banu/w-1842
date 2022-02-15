<p>Pagina Article</p>
@foreach ($articles as $article)
    
    {{$article->title}}
    {{$article->description}}
    {{$article->content}}
    <br>
@endforeach