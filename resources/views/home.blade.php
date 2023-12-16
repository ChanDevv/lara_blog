@extends('layout')
@section('content')
<div class="container">
  <div>
    <a href="/posts/create" class="btn btn-success">Create New</a>
  
  </div><br>
  <div class="card">

    <div class="card-header">
      Contents
    </div>
    <div class="card-body">

      @foreach ($data as $key)
      
      <div>
        <h5 class="card-title">{{ $key->title }}</h5>
        <p class="card-text">{{ $key->description }}</p>
        <a href="/posts/{{$key->id}}" class="btn btn-primary">View </a>
        <a href="/posts/{{$key->id}}/edit" class="btn btn-warning">Edit </a>
        <form action="/posts/{{$key->id}}" method="post">
          @csrf 
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </div><hr>
      
      @endforeach

    </div>
  </div>
</div>
@endsection