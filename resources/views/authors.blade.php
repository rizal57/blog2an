@extends('layouts.main')

@section('content')
<div class="row justify-content-center mt-3">
  <div class="col-md-6">
    <form action="/authors">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}" >
        <button class="btn btn-dark" type="submit">Search</button>
      </div>
    </form>
  </div>
</div>
<div class="row my-3">
@foreach ($authors as $author)
  <div class="col-md-4 mb-3">
    <a href="/authors/{{ $author->username }}" class="text-decoration-none text-dark">
      <div class="card border-0 shadow posts-card" style="cursor: pointer">
        <div class="card-body">
          <h5 class="card-title">{{ $author->name }}</h5>
          <p class="card-text">{{ $author->email }}</p>
        </div>
      </div>
    </a>
  </div>
@endforeach
  </div>
@endsection