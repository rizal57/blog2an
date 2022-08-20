@extends('dashboard.layouts.main')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-10">
    <div class="card my-3 mb-3 border-0 shadow-lg">
      @if ($post->image)
      <div style="max-height: 350px; overflow: hidden;">
        <img src="{{ asset('storage/'. $post->image) }}" class="card-img-top" alt="{{ $post->slug }}">
      </div>
      @endif
      <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>
        <div class="mb-2">
          <a href="/dashboard/posts" class="badge bg-info"><span data-feather='arrow-left'></span></a>
          <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><span data-feather='edit'></span></a>
          <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure???')"><span data-feather='x-circle'></span></button>
          </form>
        </div>
        
        in cateogory <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        <p class="card-text">{!! $post->body !!}</p>
        <p class="card-text"><small class="text-muted">Last updated {{ $post->created_at->diffForHumans() }}</small></p>
      </div>
      <a href="/dashboard/posts" class="text-end text-decoration-none py-3 px-3"><i class="bi bi-arrow-left-short"></i> Back to all posts</a>
    </div>
  </div>
</div>
@endsection