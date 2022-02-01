@extends('layouts')


@section('content')
    

<h1>Pagina about</h1>
@foreach ($grupe as $grupa)
@if ($grupa=="W-1842")
    {{"Grupa W-1842 este bravo!!!!"}} <br>
@else
<strong>Grupa: </strong>{{$grupa}}   
<br>    
@endif
@endforeach


{{$specialitate}}

@endsection


  