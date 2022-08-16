@extends('layouts.main')

@section('content')
  <div class="row mt-3">
    <h4>Category {{ $title }}</h4>
    <hr class="text-muted">
  </div>
  <div class="row">
    @foreach ($posts as $post)
    <div class="col-sm-6 mb-3">
      <div class="card border-0 shadow posts-card">
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <small><p class="text-muted">In category: <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p></small>
          <p class="card-text">{{ $post->excerpt }}</p>
          <div class="profile d-flex align-items-center py-2">
            <div>
              <img src="https://via.placeholder.com/40" class="rounded-circle" alt="">
            </div>
            <div class="ms-2">
              <span class="">@<a href="/author/{{ $post->user->username }}">{{ $post->user->username }}</a></span>
              <small class="text-muted">posted about {{ $post->published_at }}</small>
            </div>
          </div>
          <div class="d-flex justify-content-end">
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-primary">Read more <i class="bi bi-arrow-right-short"></i></a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
@endsection