@extends('layouts.app')

@section('content')
<section class="user-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="offset-lg-3 col-lg-6">
                <div class="user-form-content">
                    <h3>{{__('Create an Account')}}</h3>
                    <form class="user-form" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <x-jet-label for="name" value="{{ __('Name') }}" />
                                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            </div>
                            <div class="mt-4 col-12">
                                <x-jet-label for="email" value="{{ __('Email') }}" />
                                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                            </div>
                            <div class="mt-4 col-12">
                                <x-jet-label for="password" value="{{ __('Password') }}" />
                                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                            </div>
                            <div class="mt-4 col-12">
                                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                            </div>
                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mt-4">
                                    <x-jet-label for="terms">
                                        <div class="flex items-center">
                                            <x-jet-checkbox name="terms" id="terms"/>

                                            <div class="ml-2">
                                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                ]) !!}
                                            </div>
                                        </div>
                                    </x-jet-label>
                                </div>
                            @endif
                            <div class="mt-4 col-12">
                                <x-jet-button class="default-btn register" type="submit">
                                    {{ __('Register') }}
                                </x-jet-button>
                            </div>
                            <div class="col-12">
                                <p class="create">{{ __('Already registered?') }}
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}"></a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials.newsletter')

@endsection
