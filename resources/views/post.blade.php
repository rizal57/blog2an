@extends('layouts.main')

@section('content')
<div class="card my-3 mb-3 border-0 shadow-lg">
  <img src="https://source.unsplash.com/1200x400" class="card-img-top" alt="{{ $post->slug }}">
  <div class="card-body">
    <h5 class="card-title">{{ $post->title }}</h5>
    <p>Post by <a href="#" class="text-decoration-none">@rizal</a> in cateogory <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
    <p class="card-text">{!! $post->body !!}</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
  <a href="/posts" class="text-decoration-none py-3 px-3"><i class="bi bi-arrow-left-short"></i> Back to all posts</a>
</div>
@endsection