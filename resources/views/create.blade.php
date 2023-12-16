@extends('layout')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header" style="text-align: center;">
                New Posts
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/posts" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="tittle1">Title</label>
                        <input type="text" name="title" id="title1" placeholder="Enter Title"
                            class="form-control @error('title') is-invalid @enderror">
                    </div><br>
                    <div class="form-group">
                        <label for="desc">Description</label>
                        <input type="text" name="description" id="desc" placeholder="Enter Description"
                            class="form-control @error('description') is-invalid @enderror">
                    </div>
                    {{-- @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror --}}
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/posts" class="btn btn-success">Back</a>

                </form>


            </div>
        </div>
    </div>
@endsection
