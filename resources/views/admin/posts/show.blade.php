@extends('layouts.app')
@dump($post->user->posts)
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card text-center ">
                <img src="{{ $post->post_image }}" class="card-img-top" alt="{{ $post->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <span>{{ $post->user->name }}</span>
                    <span>{{ $post->post_date }}</span>
                    
                    <p class="card-text">{{ $post->post_content }}</p>
                </div>
                
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-sm btn-success">
                    Edit
                </a>
                <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" class="d-inline delete-comics">
                    @csrf
                    @method('DELETE')
                    
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection