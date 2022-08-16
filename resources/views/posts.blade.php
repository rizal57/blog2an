@extends('layouts.main')

@section('content')
  <div class="row mt-3">
    <h4>Stories</h4>
    <hr class="text-muted">
  </div>
  <div class="row">
    @if ($posts->count() === 0)
      <div class="col-md-12 text-center py-5">
        <h1>Belum ada postingan cuy</h1>
      </div>
    @endif
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
            <div class="ms-1 d-flex flex-column">
              <span class="">@<a href="/author/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->username }}</a></span>
              <small class="text-muted">posted {{ $post->published_at }}</small>
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
@endsection