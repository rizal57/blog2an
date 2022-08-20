@extends('dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Category</h1>
</div>

<div class="row">
  <div class="col-md-8">
    <form action="/dashboard/categories/{{ $category->slug }}" method="post" enctype="multipart/form-data" class="mb-3">
      @method('put')
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control @error('name')
          is-invalid
        @enderror" id="name" name="name" value="{{ old('name', $category->name) }}" autofocus>
        @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control @error('slug')
          is-invalid
        @enderror" id="slug" name="slug" value="{{ old('slug', $category->slug) }}" >
        @error('slug')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

<script>
  const name = document.querySelector("#name");
    const slug = document.querySelector("#slug");

    name.addEventListener('keyup', () => {
      let preslug = name.value;
      preslug = preslug.replace(/ /g, "-");
      slug.value = preslug.toLowerCase();
    })
</script>
@endsection