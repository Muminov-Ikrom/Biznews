@extends('site.layouts.site')
@section('title')
    Register
@endsection
@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="min-vh-100 d-flex flex-row align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card soya mb-4 mx-4">
                            <div class="card-body p-4">
                                <h1>Register</h1>
                                <p class="text-medium-emphasis">Create your account</p>
                                <div class="input-group mb-3">
                                    <input class="form-control" id="name" type="text" name="name" value="{{ old('name') }}" required autofocus  placeholder="Username">
                                </div>
                                <div class="input-group mb-3">
                                    <input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Email" required>
                                </div>
                                <div class="input-group mb-3">
                                    <input class="form-control"  id="password"
                                           type="password"
                                           name="password"
                                           required autocomplete="new-password" placeholder="Password">
                                </div>
                                <div class="input-group mb-4">
                                    <input class="form-control" id="password_confirmation"
                                           type="password"
                                           name="password_confirmation" required placeholder="Repeat password">
                                </div>
                                <div class="m-3 d-flex justify-content-between">
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>
                                    <button class="btn btn-success btn-success" type="submit">Create Account</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
