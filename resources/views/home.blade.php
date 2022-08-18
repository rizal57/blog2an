@extends('layouts.main')

@section('content')
  <div class="">
    <div class="row">
      <div class="col-md-12 text-center py-5">
        @auth
          <h2>Hello {{ auth()->user()->name }}...</h2>
        @else
          <h2>Hello Bro...</h2>
        @endauth
          <h1>Selamat {{ $regards }}</h1>
      </div>
    </div>
  </div>
@endsection