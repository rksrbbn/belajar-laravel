@extends('layouts.main')

@section('container')
    @if (session()->has('success'))
        <div class="alert alert-primary alert-dismissable fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissable fade show" role="alert">
            {{ session('loginError') }}
        </div>
    @endif

    <main class="form-signin w-100 m-auto">
        <form action="/login" method="POST">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email" autofocus required>
                @error('email')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
                @error('password')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now!</a></small>
        </form>
    </main>
@endsection
