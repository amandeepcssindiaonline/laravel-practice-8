@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <p class="m-0 d-inline-block">Post</p>
                    <a class="btn btn-primary float-right" href="{{ route('posts.index') }}">Back</a>
                </div>
                <div class="card-body">
                    <h4>Title: {{ $post->title }}</h4>
                    <p>Post Content: {{ $post->body }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection