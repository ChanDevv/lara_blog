@extends('layout')
@section('content')
<div class="container">

    <div class="card">

        <div class="card-header">
            Contents
        </div>
        <div class="card-body">
            <div>
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->description }}</p>
                <a href="/posts" class="btn btn-primary">Back </a>
            </div><br>
        </div>
    </div>
</div>
@endsection