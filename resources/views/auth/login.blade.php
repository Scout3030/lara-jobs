@extends('layouts.app')

@section('content')
<section class="user-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="offset-lg-3 col-lg-6">
                <div class="user-form-content log-in-50">
                    <h3>{{__('Log In to Your Account')}}</h3>
                    <form class="user-form" method="POST" action="{{ route('login') }}">

                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif


                        <div class="row">
                            @csrf

                            <div class="col-12">
                                <x-jet-label for="email" value="{{ __('Email') }}" />
                                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                            </div>

                            <div class="mt-4 col-12">
                                <x-jet-label for="password" value="{{ __('Password') }}" />
                                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                            </div>


                            <div class="mt-4 col-12">
                                <div class="login-action">
                                    <label for="remember_me" class="flex items-center">
                                        <x-jet-checkbox id="remember_me" name="remember" />
                                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                    </label>
                                    </span>
                                    <span class="forgot-login">
                                        @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                        @endif
                                    </span>
                                </div>
                            </div>
                            <div class="mt-4 col-12 text-center">
                                <x-jet-button class="default-btn">
                                    {{ __('Login') }}
                                </x-jet-button>
                            </div>
                            @include('partials.socialite')
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials.newsletter')

@endsection
