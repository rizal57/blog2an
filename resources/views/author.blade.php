@extends('layouts.main')

@section('content')
<div class="row text-center mt-3 justify-content-center">
  <div class="col-md-10">
    <div class="card text-center py-3 border-0 shadow">
      <div>
        <img src="https://via.placeholder.com/80" class="rounded-circle" alt="">
      </div>
      <div class="card-body">
        <h5 class="card-title">{{ $author->name }}</h5>
        <p class="card-text">{{ $author->email }}</p>
      </div>
    </div>
  </div>
</div>

@endsection