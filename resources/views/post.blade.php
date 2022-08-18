@extends('layouts.main')

@section('content')
<div class="card my-3 mb-3 border-0 shadow-lg">
  <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->slug }}">
  <div class="card-body">
    <h5 class="card-title">{{ $post->title }}</h5>
    <p>Post by @<a href="/posts?author={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->username }}</a> in cateogory <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
    <p class="card-text">{!! $post->body !!}</p>
    <p class="card-text"><small class="text-muted">Last updated {{ $post->created_at->diffForHumans() }}</small></p>
  </div>
  <a href="/posts" class="text-end text-decoration-none py-3 px-3"><i class="bi bi-arrow-left-short"></i> Back to all posts</a>
</div>

<div class="card my-4 mb-3 border-0 shadow-lg py-3 px-2">
@foreach ($post->comment as $comments)
<div class="card-body bg-dark bg-opacity-10 rounded mb-2">
  <p class="card-text">{{ $comments->body }}</p>
  <p class="card-text text-end"><small class="text-muted">Last updated {{ $comments->created_at->diffForHumans() }} by: {{ $comments->user->name }}</small></p>
</div>
@endforeach

<div class="form-floating mb-3 mt-3">
  <textarea class="form-control" placeholder="Leave a comment here" id="comment" style="height: 100px"></textarea>
  <label for="comment">Comments</label>
</div>
<div class="d-flex justify-content-end">
  <button class="btn btn-primary">Add Comment</button>
</div>
</div>
@endsection