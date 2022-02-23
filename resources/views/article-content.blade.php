@extends('layouts')
@section('title','Projects page')
@section('content')
<div class="container">
    <form action="{{route('articleStore')}}" method="POST">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Title</span>
        <input type="text" name="title" class="form-control" placeholder="Title" aria-label="Title" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Description</span>
        <input type="text" name="description" class="form-control" placeholder="Description" aria-label="Description" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Author</span>
        <input type="text" name="author" class="form-control" placeholder="Author" aria-label="Author" aria-describedby="basic-addon1">
      </div>

      <div class="input-group">
        <span class="input-group-text">With content</span>
        <textarea name="content" class="form-control" aria-label="With content"></textarea>
    </div>
        <br>
        <button type="submit" class="btn btn-primary mb-3">Submit</button>
        {{ csrf_field() }}
    </form>

</div>
@endsection
