@extends('layouts.main')

@section('container')
    <main class="form-signin w-100 m-auto">
        <form action="/register" method="POST">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Register</h1>

            <div class="form-floating">
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="floatingInput"
                    placeholder="Name">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="floatingInput" placeholder="Email">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="floatingPassword" placeholder="Password">
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
            <small class="d-block text-center mt-3">Already Registered? <a href="/login">Login</a></small>
        </form>
    </main>
@endsection
