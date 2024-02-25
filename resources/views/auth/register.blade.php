@extends('layouts.login-layout')
@section('content')
<div class="account-content">
    <div class="login-wrapper">
        <div class="login-content">
            <div class="login-userset">
                <div class="login-logo">
                <img src="asset/assets/img/logo.png" alt="img">
                </div>
                <div class="login-userheading">
                    <h3>Create an Account</h3>
                    <h4>Continue where you left off</h4>
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-login">
                    <label>Full Name</label>
                    <div class="form-addons">
                    <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <img src="asset/assets/img/icons/users1.svg" alt="img">
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    </div>

                    <div class="form-login">
                    <label>Email</label>
                    <div class="form-addons">
                    <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <img src="asset/assets/img/icons/mail.svg" alt="img">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    </div>

                    <div class="form-login">
                    <label>Password</label>
                    <div class="pass-group">
                    <input id="password" class="block mt-1 w-full pass-input" type="password" name="password" required autocomplete="new-password" />
                    <span class="fas toggle-password fa-eye-slash"></span>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    </div>

                    <div class="form-login">
                    <label>Confirm Password</label>
                    <div class="pass-group">
                    <input id="password_confirmation" class="block mt-1 w-full pass-input" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <span class="fas toggle-password fa-eye-slash"></span>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                    </div>
                
                    <div class="form-login">
                    <button class="btn btn-login">Sign Up</button>
                    </div>
                
                </form>
                    <div class="signinform text-center">
                    <h4>Already a user? <a href="{{ route('login') }}" class="hover-a">Sign In</a></h4>
                    </div>
                    <div class="form-setlogin">
                    <h4>Or sign up with</h4>
                    </div>
                    <div class="form-sociallink">
                    <ul>
                    <li>
                    <a href="javascript:void(0);">
                    <img src="asset/assets/img/icons/google.png" class="me-2" alt="google">
                    Sign Up using Google
                    </a>
                    </li>
                    <li>
                    <a href="javascript:void(0);">
                    <img src="asset/assets/img/icons/facebook.png" class="me-2" alt="google">
                    Sign Up using Facebook
                    </a>
                    </li>
                    </ul>
                    </div>
            
            </div>
        </div>
    <div class="login-img">
    <img src="asset/assets/img/login.jpg" alt="img">
    </div>
    </div>
    </div>
@endsection