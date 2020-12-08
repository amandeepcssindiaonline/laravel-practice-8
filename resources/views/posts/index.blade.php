@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <p class="m-0">Posts Listing</p>
                </div>
                <div class="card-body">
                    @if ($message = Session::get('status'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                    @endif

                    @if ($message = Session::get('error'))
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @endif

                    <table class="table">
                        <thead>
                            <th>
                                Post ID
                            </th>
                            <th>
                                Post Name
                            </th>
                            <th>
                                Post Slug
                            </th>
                            <th>
                                Action
                            </th>
                        </thead>

                        <tbody>
                            @forelse ($posts as $post)
                            <tr>
                                <td>
                                    {{ $post->id }}
                                </td>
                                <td>
                                    {{ $post->title }}
                                </td>
                                <td>
                                    {{ $post->slug }}
                                </td>
                                <td>
                                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-sm">View</a>
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                    <form class="d-inline" action="{{ route('posts.delete', $post)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type:="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4">No Posts Exist</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="w-100">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <p class="m-0">Post Create Form</p>
                </div>

                <div class="card-body">
                    <form action="{{ route('posts.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Post Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">

                            @error('title')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="body">Post Body</label>
                            <textarea name="body" id="body" cols="30" rows="5" class="form-control">{{ old('body') }}</textarea>
                            @error('body')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <input type="submit" value="Save" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection