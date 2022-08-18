@extends('dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Posts</h1>
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
            <a href="" class="badge bg-warning"><span data-feather='edit'></span></a>
            <a href="" class="badge bg-danger"><span data-feather='x-circle'></span></a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  {{ $posts->links() }}
</div>
@endsection