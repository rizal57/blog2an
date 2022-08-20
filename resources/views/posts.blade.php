@extends('layouts.main')

@section('content')
  <div class="row mt-3">
    <h4>{{ $title }}</h4>
    <hr class="text-muted">
  </div>

  <div class="row justify-content-center">
    <div class="col-md-6">
      <form action="/posts">
        @if (request('category'))
          <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if (request('author'))
          <input type="hidden" name="author" value="{{ request('author') }}">
        @endif
        <div class="input-group mb-3">        
          <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
          <button class="btn btn-dark" type="submit"><i class="bi bi-search"></i></button>
        </div>
      </form>
    </div>
  </div>

  <div class="row">
    @if ($posts->count() === 0)
      <div class="col-md-12 text-center py-5">
        <h1>Ngga nemu postingannya cuy</h1>
      </div>
    @endif
    @foreach ($posts as $post)
    <div class="col-sm-6 mb-3">
      <div class="card border-0 shadow posts-card">
        @if ($post->image)
        <div style="max-height: 250px; overflow: hidden">
          <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->title }}">
        </div>
        @endif
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <small><p class="text-muted">In category: <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p></small>
          <p class="card-text">{{ $post->excerpt }}</p>
          <div class="profile d-flex align-items-center py-2">
            <div>
              <img src="https://via.placeholder.com/40" class="rounded-circle" alt="">
            </div>
            <div class="ms-1 d-flex flex-column">
              <span class="">@<a href="/posts?author={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->username }}</a></span>
              <small class="text-muted">posted {{ $post->created_at->diffForHumans() }}</small>
            </div>
          </div>
          <div class="d-flex justify-content-end more">
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-primary">Read more <i class="bi bi-arrow-right-short"></i></a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>

  {{ $posts->links() }}
@endsection