@extends('site.layouts.site')
@section('title')
    Login
@endsection
@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class=" min-vh-100 d-flex flex-row align-items-center" >
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card-group d-block d-md-flex row">
                            <div class="card soya col-md-7 p-4 mb-0">
                                <div class="card-body">
                                    <h1>Login</h1>
                                    <p class="text-medium-emphasis">Sign In to your account</p>
                                    <div class="input-group mb-3">
                                        <label for="email" ></label>
                                        <input class="form-control" id="email" name="email" type="email" value="{{ old('email') }}" placeholder="User email" required autocomplete="on">

                                    </div>
                                    <div class="input-group mb-4">
                                        <input class="form-control" id="password"
                                               type="password"
                                               name="password"
                                               required autocomplete="current-password" placeholder="Password">
                                    </div>
                                    <!-- Remember Me -->
                                    <div class="block mt-4">
                                        <label for="remember_me" class="inline-flex items-center">
                                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                        </label>
                                    </div>
                                    {{--                                    <div class="form-group">--}}
                                    {{--                                        <div class=" g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>--}}
                                    {{--                                        @if ($errors->has('g-recaptcha-response'))--}}
                                    {{--                                            <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>--}}
                                    {{--                                        @endif--}}
                                    {{--                                    </div>--}}
                                    <div class="row g-4">
                                        <div class="col-4">
                                            <button class="btn btn-primary px-4 mt-3" type="submit">Login</button>

                                        </div>
                                        <div class="col-8">
                                            <div class="flex items-center justify-end mt-4">
                                                @if (Route::has('password.request'))
                                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                        {{ __('Forgot your password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card col-md-6 text-white py-5 bg-warning" >
                                <div class="card-body text-center">
                                    <div>
                                        <h2>Sign up</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <a class="btn btn-lg btn-outline-light mt-3" href="{{ route('register') }}">Register Now!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
