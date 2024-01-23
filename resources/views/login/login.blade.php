@extends('layouts.account')

@section('content')
    <form id="loginForm" action="/login" method="POST">
        @csrf
        <div class="login-container">
            <h1 class="title">Masuk Akun Anda</h1>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="{{ Session::get('email') }}" class="form-control" id="email" name="email" placeholder="Masukkan alamat email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Ingat Saya</label>
            </div>
            <button type="submit" id="loginButton" class="btn btn-primary">Login</button>
            <div class="sign-in-with-google">
                <button type="button" class="btn btn-google">
                    <img src="../assets/google-icon.jpeg" alt="Google Icon" class="google-icon">
                    Sign in with Google
                </button>
            </div>
            <div class="additional-links">
                <a href="/regist" class="sign-up-link">Sign Up</a>
                <a href="#" class="forgot-password-link">Lupa Password?</a>
            </div>
        </div>
    </form>
@endsection
