@extends('dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Posts</h1>
</div>

@if (session()->has('success'))
<div class="col-md-10">
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong><span data-feather='check-circle'></span> </strong> {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>
@endif

<div>
  <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Add new post</a>
</div>

<form action="/dashboard/posts">
  <div class="row">
    <div class="col-md-6">
      <div class="input-group input-group-sm mb-3">
        <input placeholder="Search with title..." type="text" class="form-control" name="search" value="{{ request('search') }}">
        <button type="submit" class="btn btn-dark">Search</button>
      </div>
    </div>
  </div>
</form>

<div class="table-responsive col-md-10">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Category</th>
        <th scope="col">Header</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
        <tr>
          <td>{{ $loop->iteration + $posts->firstItem() - 1 }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->category->name }}</td>
          <td>
            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><span data-feather='eye'></span></a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><span data-feather='edit'></span></a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return(confirm('Are you sure??'))"><span data-feather='x-circle'></span></button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  {{ $posts->links() }}
</div>
@endsection