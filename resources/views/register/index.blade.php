@extends('layouts.main')

@section('content')
  <div class="row justify-content-center my-5">
    <div class="col-md-6">
      <main class="form-signin">
        <form action="/register" method="post">
          @csrf
          <h1 class="mb-3 text-center">Register Blog2an</h1>
      
          <div class="form-floating">
            <input type="text" class="form-control rounded-top @error('name')
              is-invalid
            @enderror" style="border-radius: 0" id="name" placeholder="Name" name="name" required value="{{ old('name') }}">
            <label for="name">Name</label>
            @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="text" class="form-control rounded-0 @error('username')
              is-invalid
            @enderror" id="username" placeholder="Username" name="username" required value="{{ old('username') }}">
            <label for="username">Username</label>
            @error('username')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
                
            @enderror
          </div>
          <div class="form-floating">
            <input type="email" class="form-control rounded-0 @error('email')
              is-invalid
            @enderror" id="email" placeholder="Email" name="email" required value="{{ old('email') }}">
            <label for="email">Email</label>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="password" class="form-control @error('password')
              is-invalid
            @enderror" id="password" placeholder="Password" name="password" required>
            <label for="password">Password</label>
            @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
      
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-dark" type="submit">Register</button>
        </form>
      </main>
    </div>
  </div>
@endsection