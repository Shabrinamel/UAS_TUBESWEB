@extends('layouts.account')

@section('content')
    <form id="loginForm" action="/create/regist" method="POST">
        @csrf
        <div class="login-container">
            <h1 class="title">Registrasi Akun</h1>
            <div class="mb-3">
                    <label for="name" class="form-label">Nama *</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="{{ Session::get('email') }}" class="form-control" id="email" name="email" placeholder="Masukkan alamat email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
            </div>
            <button type="submit" id="loginButton" class="btn btn-primary">signUp</button>
            <div class="sign-in-with-google">
                <button type="button" class="btn btn-google">
                    <img src="../assets/google-icon.jpeg" alt="Google Icon" class="google-icon">
                    Sign in with Google
                </button>
            </div>
            <div class="additional-links">
                <a href="/" class="sign-up-link">Login</a>
            </div>
        </div>
    </form>
@endsection
